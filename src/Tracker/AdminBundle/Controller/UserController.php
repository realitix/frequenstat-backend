<?php

namespace Tracker\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tracker\UserBundle\Entity\User;
use Tracker\UserBundle\Form\UserType;

class UserController extends Controller
{
    public function indexAction()
    {
    	$usersTmp = $this
    		->getDoctrine()
    		->getManager()
    		->getRepository('TrackerUserBundle:User')
    		->findBy(array(), array('lastName' => 'ASC'));
    	
    	// On enlève les admins
    	$users = array();
    	foreach( $usersTmp as $u )
    	    if( !$u->hasRole('ROLE_ADMIN') )
    	        $users[] = $u;
    		
        return $this->render('TrackerAdminBundle:User:index.html.twig', compact('users'));
    }
    
    public function viewAction(User $user)
    {
    	$configurations = $this
    		->getDoctrine()
    		->getManager()
    		->getRepository('TrackerBoxBundle:Configuration')
    		->findAll();
    		
    	return $this->render('TrackerAdminBundle:User:view.html.twig', 
    		compact('user', 'configurations'));
    }
    
    public function addAction()
    {
    	$userManager = $this->get('fos_user.user_manager');
        $user = $userManager->createUser();
        
        // False password to avoid empty password error
        $user->setPlainPassword(uniqid());
        $user->setPassword(uniqid());
        
        $form = $this->createForm(new UserType(), $user);
        $request = $this->get('request');
        
        $form->handleRequest($request);
        if ($form->isSubmitted()) 
        {
            if( $form->isValid() ) 
            {
            	$user->setPlainPassword(uniqid());
                $user->addRole('ROLE_USER');
                $userManager->updateUser($user);
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                return $this->redirect($this->generateUrl('tracker_admin_user_index'));
            }
        }
        
        return $this->render('TrackerAdminBundle:User:add.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function editAction(User $user)
    {
        $form = $this->createForm(new UserType(), $user);
        $request = $this->get('request');
        
        $form->handleRequest($request);
        if ($form->isSubmitted()) 
        {
            if( $form->isValid() ) 
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                return $this->redirect($this->generateUrl('tracker_admin_user_view', array('id' => $user->getId())));
            }
        }
        
        return $this->render('TrackerAdminBundle:User:edit.html.twig', array(
            'form' => $form->createView(),
            'user' => $user
        ));
    }
}
