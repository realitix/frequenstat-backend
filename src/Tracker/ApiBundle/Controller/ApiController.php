<?php

namespace Tracker\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Tracker\UserBundle\Entity\User;
use Tracker\StationBundle\Entity\Station;
use Tracker\StationBundle\Entity\Capture;

class ApiController extends Controller
{
	/**
	 * Check that the submited datas are well formated
	*/
	private function checkFormating($datas)
	{
		// On vérifie que toutes les clés existent bien
        $formated = true;
        if( !$datas )
        	$formated = false;
        if( !isset($datas['userId']) || empty($datas['userId']) )
        	$formated = false;
        if( !isset($datas['userKey']) || empty($datas['userKey']) )
        	$formated = false;
        if( !isset($datas['placeId']) || empty($datas['placeId']) )
        	$formated = false;
        if( !isset($datas['boxId']) || empty($datas['boxId']) )
        	$formated = false;

        return $formated;
	}

	/**
	 * Allow to post new captured stations
	*/
    public function addCaptureAction()
    {
        $request = $this->get('request');
        $keys = array('userId', 'userKey', 'placeId', 'boxId', 'md5');
        $datas = array();
        foreach( $keys as $v )
            $datas[$v] = $request->request->get($v, FALSE);

        $logger = $this->get('logger');

        // On vérifie que toutes les clés existent bien
        if( !$this->checkFormating($datas) )
        	throw new HttpException(400);
        $logger->info('Le json est bien formaté');

        $em = $this->get('doctrine')->getManager();
        
        $userId  = $datas['userId'];
        $userKey = $datas['userKey'];
        $user = $em->getRepository('TrackerUserBundle:User')->findOneBy(array('id' => $userId, 'securityKey' => $userKey));
        
        $placeId = intval($datas['placeId']);
        $place = $em->getRepository('TrackerPlaceBundle:Place')->findOneBy(array('id' => $placeId, 'user' => $user));
        
        $boxId = intval($datas['boxId']);
        $box = $em->getRepository('TrackerPlaceBundle:Box')->findOneBy(array('id' => $boxId, 'place' => $place));
        
        if( $user === null || $place === null || $box === null )
        	throw new AccessDeniedHttpException();
        $logger->info('Les identifiants sont bons');

        // On prend le fichier
        $uploadedFile = $request->files->get('file');
        
        ob_start();
        print_r($request->files->get('file'));
        $d = ob_get_contents();
        ob_end_clean();
        $logger->info('Info sur le fichier: '.$d);

        $directory = $this->get('kernel')->getRootDir() . '/tmp';
        $fileName = $uploadedFile->getClientOriginalName();
        $filePath = $directory.'/'.$fileName;
        $logger->info('Chemin du fichier: '.$filePath);
        $file = $uploadedFile->move($directory, $fileName);
        
        // On vérifie que le nom du fichier est conforme
        $logger->info('User id: '.$user->getId());
        $logger->info('Place id: '.$place->getId());
        $logger->info('Box id: '.$box->getId());

        $needle = $user->getId().'-'.$place->getId().'-'.$box->getId();
        if( strpos($fileName, $needle) === false ) {
            unlink($filePath);
            return new Response('-1');
        }
        $logger->info('Le nom du fichier est conforme');
        
        // On vérifie le hash md5
        $md5 = md5_file($filePath);
        if( $md5 != $datas['md5'] )
            return new Response('-2');
        $logger->info('Le hash md5 est bon');
           
        // On décompresse le fichier (bz2)
        $filePath2 = $directory.'/'.pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME).'.json';
        $logger->info('Chemin du nouveau fichier: '.$filePath2);
        $f1 = bzopen($filePath, 'r');
        if( $f1 === FALSE)
            $logger->error('Impossible d\'ouvrir le fichier bz2');

        $f2 = fopen($filePath2, 'w');
		while( !feof($f1) ) {
			$buffer = bzread($f1);
			// erreur de décompression
			if( $buffer === FALSE || bzerrno($f1) !== 0 ) 
				return new Response('-3');
			fwrite($f2, $buffer);
		}
		bzclose($f1);
        fclose($f2);
        $logger->info('Le fichier a bien été décompressé');
        
        // On supprime le fichier bzip2
        unlink($filePath);
        
        // On insert dans la base de donnée
        $fileContent = file_get_contents($filePath2);
        $jsonDatas  = json_decode($fileContent, true);

        $em = $this->getDoctrine()->getManager();
        $tableCapture = $em->getClassMetadata('TrackerCaptureBundle:Capture')->getTableName();
        $tableStation = $em->getClassMetadata('TrackerStationBundle:Station')->getTableName();

        $conn = $em->getConnection();
        $boxId = $box->getId();
        $sql = "
            WITH 
                -- On insert la station et on retourne l'id, si la station existe deje on retourne rien
                w1 AS (
                    INSERT INTO $tableStation (mac)
                    SELECT :mac::VARCHAR(17)
                    WHERE
                        NOT EXISTS (
                            SELECT mac FROM $tableStation WHERE mac = :mac::VARCHAR(17)
                        )
                    RETURNING id
                ),
                w2 AS (
                  SELECT id
                  FROM $tableStation
                  WHERE mac = :mac::VARCHAR(17)
                )
            
            -- On insert la capture en liant la station avec coalesce
            INSERT INTO $tableCapture(box_id, date_capture, power, station_id)
            SELECT $boxId, :date , :power, COALESCE( (SELECT id FROM w1), (SELECT id FROM w2))
        ";
        $stmt = $conn->prepare($sql);
        

        $conn->beginTransaction();
        try {
            foreach( $jsonDatas as $j ) {
                $stmt->bindValue('date', $j['date'], \PDO::PARAM_STR);
                $stmt->bindValue('power', $j['power'], \PDO::PARAM_INT);
                $stmt->bindValue('mac', $j['mac'], \PDO::PARAM_STR);
                $stmt->execute();
            }
            $conn->commit();
        } catch(Exception $e) {
            $logger->info('Erreur pendant la transaction');
            $conn->rollback();
            throw $e;
        }
		$stmt->closeCursor();
		$logger->info('Les données ont bien été insérées');
		
		// On met à jour le modified de place
		$place->setModified(new \DateTime());
		$em->persist($place);
		$em->flush();

        // On supprime le fichier décompressé
        unlink($filePath2);
        
        return new Response('1');
    }
    
    /**
	 * Give the session information for the rapsberry
	 * @param int $serialNumber
	*/
    public function getSessionAction($serialNumber)
    {
        $em = $this->getDoctrine()->getManager();
        $box = $em
            ->getRepository('TrackerPlaceBundle:Box')
            ->findOneBySerialNumber($serialNumber);
        
        if( $box === null )
            throw new HttpException(400);
        
        $boxId = $box->getId();
        $placeId = $box->getPlace()->getId();
        $userId = $box->getPlace()->getUser()->getId();
        $userKey = $box->getPlace()->getUser()->getSecurityKey();
        $boxVersion = $box->getVersion();
        
        return new JsonResponse(compact('boxId', 'placeId', 'userId', 'userKey', 'boxVersion'));
    }
}
