<?php

namespace Tracker\PageBundle\Controller;

use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tracker\CaptureBundle\Service\CaptureManager;
use Tracker\PlaceBundle\Entity\Place;

class RealtimeController extends Controller
{
    public function indexAction()
    {
        $em      = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        $user    = $this->getUser();
    	$placeId = $session->get('place_id', null);
    	$r       = $em->getRepository('TrackerPlaceBundle:Place');
    	$place   = null;
    	
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
    	$realtimeConf = $em
    	    ->getRepository('TrackerBoxBundle:Configuration')
    	    ->findOneByName('REALTIME');
    	
    	if( $realtimeConf === null ) {
            throw new HttpException(500, 'Pas de configuration REALTIME, lancez InitDb');
    	}
    	
    	$pRealtimeConf = $em
    	    ->getRepository('TrackerPlaceBundle:PlaceConfiguration')
    	    ->findOneBy(array('place' => $place, 'configuration' => $realtimeConf));
    	
    	$confOk = false;
    	if( $pRealtimeConf !== null && $pRealtimeConf->getContent() == 'true') {
    	    $confOk = true;
    	}
    	
    	$placeOk = false;
    	if( $place !== null && $place->getPlaceType() == Place::TYPE_STATBOX) {
    	    $placeOk = true;
    	}
        return $this->render('TrackerPageBundle:Realtime:index.html.twig', 
            compact('confOk', 'placeOk', 'place'));
    }
}