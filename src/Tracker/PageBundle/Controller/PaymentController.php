<?php

namespace Tracker\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Tracker\UserBundle\Entity\User;
use Tracker\UserBundle\Form\UserType2 as UserType;

class PaymentController extends Controller
{
	/**
	 * Point d'entrée de l'affichage
	 */
    public function mainAction()
    {
        $step = $this->getRequest()->query->get('step', 1);
        
        switch( $step ) {
            case 1:
                return $this->step1();
                break;
            case 2:
                return $this->step2();
                break;
        }
        
        return $this->step1();
    }
    
    /**
     * Fonction affichant l'étape 1
     * Le choix de l'offre et de l'option
     */
    private function step1()
    {
        $step = 1;
        $idOffer = $this->getRequest()->query->get('idOffer', 0);
        
        $em      = $this->getDoctrine()->getManager();
        $offers  = $em->getRepository('TrackerBillingBundle:Offer')->findBy(array(), array('name' => 'ASC'));
        $options = $em->getRepository('TrackerBillingBundle:Option')->findBy(array(), array('price' => 'ASC'));
        
        return $this->renderUser(compact('offers', 'idOffer', 'options', 'step'));
    }
    
    /**
     * Fonction affichant l'étape 2
     * Inscription
     */
    private function step2()
    {
        $step = 2;
        $session = $this->getRequest()->getSession();
    	$s = $session->get('payment', array());
    	
        $user = new User();
        
        // On charge l'utilisateur si la session existe
        if(isset($s[$step])) {
  			$s = $s[$step];
        	$user->setFirstName($s['firstName']);
        	$user->setLastName($s['lastName']);
        	$user->setEmail($s['email']);
        	$user->setCompany($s['company']);
        	$user->setPassword($s['password']);
        	$user->setPhoneNumber1($s['phoneNumber1']);
        	$user->setPhoneNumber2($s['phoneNumber2']);
        	$user->setAddress($s['address']);
        }
        
        $form = $this->createForm(new UserType(), $user);
        
        return $this->renderUser(array('step' => $step, 'form' => $form->createView()));
    }
    
    /*************************************/
    /********** PROCESS SECTION **********/
    /*************************************/
    
    /**
     * Point d'entrée des calculs
    */
    public function mainProcessAction()
    {
        $step = $this->getRequest()->query->get('step', 1);
        $valid = true;
        switch( $step ) {
            case 1:
                $valid = $this->processStep1();
                break;
            case 2:
                $valid = $this->processStep2();
                break;
        }
        
        if( $valid )
        	$step++;
        return $this->redirect($this->generateUrl('tracker_page_payment_main', array('step' => $step)));
    }
    
    /**
     * Fonction gérant l'étape 1
     */
    private function processStep1()
    {
        $step = 1;
        $idOption = $this->getRequest()->request->get('option', 0);
        $session = $this->getRequest()->getSession();
        $s = $session->get('payment', array());
        
        
        $em     = $this->getDoctrine()->getManager();
        $option = $em->getRepository('TrackerBillingBundle:Option')->find($idOption);
        
        if( $option === null ) {
        	$session->getFlashBag()->add('error', 'Offre ou option invalide');
        	return false;
        }
        
        $s[$step] = array('idOption' => $idOption);
        $session->set('payment', $s);
        return true;
    }
    
    /**
     * Inscription
     */
    private function processStep2()
    {
    	$step = 2;
    	$session = $this->getRequest()->getSession();
    	$s = $session->get('payment', array());
    	
        $user = new User();
        $form = $this->createForm(new UserType(), $user);
        $request = $this->get('request');
        $form->handleRequest($request);
        
        // On enregistre les données du formulaire
        $s[$step] = array(
        	'valid'        => false,
        	'firstName'    => $user->getFirstName(),
        	'lastName'     => $user->getLastName(),
        	'email'        => $user->getEmail(),
        	'company'      => $user->getCompany(),
        	'password'     => $user->getPassword(),
        	'phoneNumber1' => $user->getPhoneNumber1(),
        	'phoneNumber2' => $user->getPhoneNumber2(),
        	'address'      => $user->getAddress()
        );
        $session->set('payment', $s);
        
        // On valide
    	$errors = $form->getErrors();
		if( count($errors) > 0 ) {
			foreach( $errors as $e ) {
				$session->getFlashBag()->add('error', $e->getMessage());
			}
			return false;
		}
    
        // Formulaire valide
        $s[$step]['valid'] = true;
        $session->set('payment', $s);
        return true;
    }
    
    
    /**********************************/
    /********** UTIL SECTION **********/
    /**********************************/
    
    
    /**
     * Affichage en utilisant le bon template
     */ 
    private function renderUser($params)
    {
        $securityContext = $this->container->get('security.context');
        /*if( $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED') )
        	return $this->render('TrackerPageBundle:Payment:logged.html.twig', $params);*/
        return $this->render('TrackerPageBundle:Payment:anonymous.html.twig', $params);
    }
}