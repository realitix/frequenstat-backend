<?php

namespace Tracker\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tracker\CaptureBundle\Service\CaptureManager;
use Tracker\PlaceBundle\Entity\Place;

class DashboardController extends Controller
{
    public function indexAction()
    {
    	$user = $this->getUser();
    	$places = $this
    	    ->getDoctrine()
    	    ->getManager()
    	    ->getRepository('TrackerPlaceBundle:Place')
    	    ->findStatistics($user);
    	
    	$global = array(
    	    'state' => 'Inconnu',
    	    'stations' => 0
    	);
    	
    	foreach( $places as $p ) {
    	    $global['stations'] += $p['stations'];
    	}
        
    	return $this->render('TrackerPageBundle:Dashboard:index.html.twig',
    	    compact('user', 'places', 'global'));
    }
}
