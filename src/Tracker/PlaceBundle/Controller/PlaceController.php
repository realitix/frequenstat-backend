<?php

namespace Tracker\PlaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tracker\PlaceBundle\Entity\Place;

class PlaceController extends Controller
{
    public function listMenuAction($user)
    {
        $request = $this->getRequest();
        $session = $request->getSession();
    	$placeId = $session->get('place_id', null);
    	$r = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('TrackerPlaceBundle:Place');

        $places = $r->findBy(array('user' => $user), array('id' => 'ASC'));
        $place = null;

        if( $placeId !== null ) {
            $place = $r->find($placeId);
            if( $place->getUser()->getId() !== $user->getId() )
                $place = null;
        }

        if( $place === null )
            $place = $r->findOneBy(array('user' => $user), array('id' => 'ASC'));
            
        return $this->render('TrackerPlaceBundle:Place:listMenu.html.twig', compact('places', 'place'));
    }
    
    public function changeAction(Place $place)
    {
        $user = $this->getUser();
        $place = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('TrackerPlaceBundle:Place')
            ->findOneBy(array('user' => $user, 'id' => $place->getId() ));

        if( $place !== null ) {
            $request = $this->getRequest();
            $session = $request->getSession();
        	$session->set('place_id', $place->getId());
        }
    	$referer = $this->getRequest()->headers->get('referer');
        return $this->redirect($referer);
    }
}
