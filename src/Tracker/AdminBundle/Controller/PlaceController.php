<?php
namespace Tracker\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Tracker\PlaceBundle\Entity\Place;
use Tracker\PlaceBundle\Form\PlaceType;
use Tracker\UserBundle\Entity\User;
use Tracker\PlaceBundle\Entity\Box;
use Tracker\PlaceBundle\Entity\PlaceConfiguration;
use Tracker\PlaceBundle\Form\BoxType;

class PlaceController extends Controller
{
	public function addAction(User $user)
    {
        $place = new Place();
        $form = $this->createForm(new PlaceType(), $place);
        $request = $this->get('request');
        
        $form->handleRequest($request);
        if ($form->isSubmitted()) 
        {
            if( $form->isValid() ) 
            {
            	$place->setUser($user);
                $em = $this->getDoctrine()->getManager();
                $em->persist($place);
                $em->flush();
                return $this->redirect($this->generateUrl('tracker_admin_user_view', array('id' => $user->getId())));
            }
        }
        
        return $this->render('TrackerAdminBundle:Place:add.html.twig', array(
            'form' => $form->createView(),
            'user' => $user
        ));
    }
    
    public function editAction(Place $place)
    {
        $user = $place->getUser();
        $form = $this->createForm(new PlaceType(), $place);
        $request = $this->get('request');
        
        $form->handleRequest($request);
        if ($form->isSubmitted()) 
        {
            if( $form->isValid() ) 
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($place);
                $em->flush();
                return $this->redirect($this->generateUrl('tracker_admin_user_view', array('id' => $user->getId())));
            }
        }
        
        return $this->render('TrackerAdminBundle:Place:edit.html.twig', array(
            'form' => $form->createView(),
            'user' => $user
        ));
    }
    
    public function addBoxAction(Place $place)
    {
        $box = new Box();
        $form = $this->createForm(new BoxType(), $box);
        $request = $this->get('request');
        
        $form->handleRequest($request);
        if ($form->isSubmitted()) 
        {
            if( $form->isValid() ) 
            {
            	$box->setPlace($place);
                $em = $this->getDoctrine()->getManager();
                $em->persist($box);
                $em->flush();
                return $this->redirect($this->generateUrl('tracker_admin_user_view', array('id' => $place->getUser()->getId())));
            }
        }
        
        return $this->render('TrackerAdminBundle:Place:addBox.html.twig', array(
            'form' => $form->createView(),
            'place' => $place
        ));
    }
    
    public function editBoxAction(Box $box)
    {
        $place = $box->getPlace();
        $form = $this->createForm(new BoxType(), $box);
        $request = $this->get('request');
        
        $form->handleRequest($request);
        if ($form->isSubmitted()) 
        {
            if( $form->isValid() ) 
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($box);
                $em->flush();
                return $this->redirect($this->generateUrl('tracker_admin_user_view', array('id' => $place->getUser()->getId())));
            }
        }
        
        return $this->render('TrackerAdminBundle:Place:editBox.html.twig', array(
            'form' => $form->createView(),
            'place' => $place
        ));
    }
    
    public function addConfigurationAction(Place $place)
    {
        $request = $this->get('request');
        $session = $this->get('session');
        $referer = $request->headers->get('referer');
        $cId = $request->request->get('configurationId', 0);
        $cValue = $request->request->get('content', 0);
        
        $em = $this->getDoctrine()->getManager();
        $configuration = $em
            ->getRepository('TrackerBoxBundle:Configuration')
            ->find($cId);
        
        if( $configuration !== null ) {
            $pc = new PlaceConfiguration();
            $pc->setPlace($place);
            $pc->setConfiguration($configuration);
            $pc->setContent($cValue);
            $em->persist($pc);
            $em->flush();
            $session->getFlashBag()->set('info', 'La configuration a bien été enregistrée');
        }
        else {
            $session->getFlashBag()->set('danger', 'La configuration n\'existe pas');
        }
        
        return $this->redirect($referer);
    }
    
    public function deleteConfigurationAction(PlaceConfiguration $pc)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($pc);
        $em->flush();
        $this->get('session')->getFlashBag()->set('info', 'La configuration a bien été suprimée');
        
        return $this->redirect($this->get('request')->headers->get('referer'));
    }
    
    public function testEditorAction()
    {
    	return $this->render('TrackerAdminBundle:Place:testEditor.html.twig');
    }
    
    public function testEditorIFrameAction()
    {
    	return $this->render('TrackerAdminBundle:Place:testEditorIFrame.html.twig');
    }
}