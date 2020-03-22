<?php

namespace Tracker\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tracker\CaptureBundle\Service\CaptureManager;
use Tracker\PlaceBundle\Entity\Place;

class ExportationController extends Controller
{
    public function exportAction()
    {
    	$request = $this->getRequest();
    	$user = $this->getUser();
        $session = $request->getSession();
    	$placeId = $session->get('place_id', null);
    	$r = $this->getDoctrine()->getManager()->getRepository('TrackerPlaceBundle:Place');
    	$place = null;
        
    	if( $placeId !== null ) {
            $place = $r->find($placeId);
            if( $place->getUser()->getId() !== $user->getId() )
                $place = null;
        }

        if( $place === null )
            $place = $r->findOneBy(array('user' => $user), array('id' => 'ASC'));

        if( $place === null )
            return $this->render('TrackerPageBundle:Analysis:noPlace.html.twig');
        
        // On vérifie la présence de box
    	$boxes = $place->getBoxes();
        if( !isset($boxes[0]) )
        	return $this->render('TrackerPageBundle:Analysis:noBox.html.twig');
    	
    	$t = $place->getPlaceType();
    	switch($t)
    	{
    		case Place::TYPE_STATBOX3D:
    			return $this->statBox3d($place);
    		case Place::TYPE_CROWD:
    			return $this->countBox($place);
    		case Place::TYPE_IMPLANTATION:
    			return $this->implantation($place);
    		case Place::TYPE_STATBOX:
    		default:
    			return $this->statBox($place);
    	}
    }

    private function statBox(Place $place)
    {
    	// Création des variables standars
    	$em = $this->getDoctrine()->getManager();
    	$request = $this->getRequest();
    	$user = $this->getUser();
        $cm = $this->get('capture.manager');
    	
    	// On sélectionne la bonne boxe
    	$boxes = $place->getBoxes();
        $box = null;
        if( isset($boxes[0]) ) {
            $box = $boxes[0];
        }
        
        // On récupère l'interval
        $interval = $request->query->get('interval_type', '');
        
        // On enregistre les dates
        $dates = array();
        $begins = $request->query->get('begin', array());
        $ends   = $request->query->get('end', array());
        $nb = 0;
        if( count($begins) === count($ends) ) {
        	$nb = count($begins);
        }
        
        for($i = 0; $i < $nb; $i++) {
        	$dates[] = array(
        		'begin' => $begins[$i],
        		'end'   => $ends[$i]
        	);
        }
    	
    	// On vérifie la validité de toutes les dates
    	$validDates = true;
    	$validFormat = true;
    	foreach( $dates as $d ) {
    		if( !$this->validateDate($d['begin']) || !$this->validateDate($d['end']) ) {
    			$validDates = false;
    		}
    	}

        $hasCapture = true;
        if( $validDates && count($dates) !== 0 ) {
            $format = $request->query->get('export_type', 'Excel2007');
            
            $ce = $this->get('capture.exporter');
            $ce->setBox($box);
            $ce->setDates($dates);
            
            if( $interval !== '' ) {
                $ce->setInterval($interval);
            }
                
            if( $ce->setFileType($format) ) {
                $response = $ce->getFile();
                if( $response === null )
                    $hasCapture = false;
                else
                    return $response;
            } else {
                $validFormat = false;
            }
        }
        
        /*echo '<pre>';
        var_dump($dates);
        echo '</pre>';
        exit();*/
        
        return $this->render('TrackerPageBundle:Exportation:statBox.html.twig', 
            compact('dates', 'validDates', 'validFormat', 'interval', 'hasCapture'));
    }
    
    private function validateDate($date, $format = 'Y-m-d H:i')
    {
        $d = \DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }
}