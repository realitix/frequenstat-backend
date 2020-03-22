<?php

namespace Tracker\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tracker\CaptureBundle\Service\CaptureManager;
use Tracker\PlaceBundle\Entity\Place;

class AnalysisController extends Controller
{
    public function analyzeAction()
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
    
    private function getNbDatesFromUri()
    {
        $request = $this->getRequest();
        switch($request->attributes->get('_route')) {
            case 'tracker_page_analysis_analyze':
                return 1;
            case 'tracker_page_analysis_compare2':
                return 2;  
            case 'tracker_page_analysis_compare3':
                return 3;  
            case 'tracker_page_analysis_compare4':
                return 4;  
        }
        return 1;
    }
    
    private function intervalToDates($interval)
    {
    	$date1 = '';
    	$date2 = '';
        
        switch( intval($interval) ) 
        {
    	    case CaptureManager::TYPE_24H:
    	    	$date1 = new \DateTime(date('Y-m-d 00:00:00'));
    	    	$date2 = new \DateTime();
				break;
			case CaptureManager::TYPE_7DAYS:
				$dateTmp = new \DateTime(date('Y-m-d 00:00:00'));
    	    	$date1 = $dateTmp->sub(new \DateInterval('P7D'));
    	    	$date2 = new \DateTime();
				break;
			case CaptureManager::TYPE_1MONTH:
				$dateTmp = new \DateTime(date('Y-m-d 00:00:00'));
    	    	$date1 = $dateTmp->sub(new \DateInterval('P1M'));
    	    	$date2 = new \DateTime();
				break;
			default:
				return;
        }
        
        return array(array(
        	'begin' => $date1->format('Y-m-d H:i'),
        	'end' => $date2->format('Y-m-d H:i')
        ));
    }
    
    private function statBox(Place $place)
    {
    	// Création des variables standars
    	$em = $this->getDoctrine()->getManager();
    	$request = $this->getRequest();
    	$user = $this->getUser();
        $cm = $this->get('capture.manager');
        $nbDates = $this->getNbDatesFromUri();
        $interval = intval($request->query->get('interval', 0));
    	
    	// On sélectionne la bonne boxe
    	$boxes = $place->getBoxes();
        $box = null;
        if( isset($boxes[0]) ) {
            $box = $boxes[0];
        }
        
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
        
        // On écrase par l'interval si existe
        if( $interval !== 0 && $interval !== CaptureManager::TYPE_CUSTOM ) {
        	$dates = $this->intervalToDates($interval);
        }
    	
    	// On vérifie la validité de toutes les dates
    	$validDates = true;
    	foreach( $dates as $d ) {
    		if( !$this->validateDate($d['begin']) || !$this->validateDate($d['end']) ) {
    			$validDates = false;
    		}
    	}
    	if(count($dates) == 0) {
    		$validDates = false;
    	}
        if( $validDates ) {
        	if(count($dates) > 1) {
        		$cm->setRelative();
        	}
            $dates = $cm->setBox($box)->setDates($dates)->getStatistics();
        }
        
        /*echo '<pre>';
        var_dump($dates);
        echo '</pre>';
        exit();*/
        
        return $this->render('TrackerPageBundle:Analysis:statBox/statBox.html.twig', 
            compact('dates', 'validDates', 'nbDates', 'interval'));
    }
    
    private function validateDate($date, $format = 'Y-m-d H:i')
    {
        $d = \DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }
}