<?php

namespace Tracker\AjaxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Tracker\PlaceBundle\Entity\Place;

class CaptureController extends Controller
{
    public function getLastSecondsAction(Place $place)
    {
        $request = $this->get('request');
        $seconds = $request->query->get('seconds', 60);
        $captures = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('TrackerPlaceBundle:Place')
            ->findLastSeconds($place, $seconds);
        
        $results = array();
        foreach( $captures as $c ) {
            $results[] = array(
                'dateCapture' => strtotime($c['date_capture']),
                'macs' => explode(',', str_replace(':', '_', substr($c['macs'], 1, -1)))
            );
        }
            
        return new JsonResponse($results);
    }
}
