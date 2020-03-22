<?php

namespace Tracker\TicketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Tracker\TicketBundle\Entity\Ticket;
use Tracker\TicketBundle\Form\TicketType;
use Tracker\TicketBundle\Entity\Message;
use Tracker\TicketBundle\Form\MessageType;

class TicketController extends Controller
{
    public function indexAction()
    {
        $tickets = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('TrackerTicketBundle:Ticket')
            ->findBy(array('user' => $this->getUser()), array('created' => 'DESC'));
        
        return $this->render('TrackerTicketBundle:Ticket:index.html.twig', array(
            'tickets' => $tickets
        ));
    }
    
    public function viewAction(Ticket $ticket)
    {
        if( $ticket->getUser()->getId() != $this->getUser()->getId() )
            throw new AccessDeniedException();
        
        $message = new Message();
        $form = $this->createForm(new MessageType(), $message);
        $request = $this->get('request');
        
        $form->handleRequest($request);
        if ($form->isSubmitted()) 
        {
            if( $form->isValid() ) 
            {
                $em = $this->getDoctrine()->getManager();
                
                if( $message->getClose() )
                {
                    $ticket->setClosed(new \DateTime());
                    $em->persist($ticket);
                    $em->flush();
                }
                
                $message->setUser($this->getUser());
                $message->setTicket($ticket);
                $em->persist($message);
                $em->flush();
                return $this->redirect($this->generateUrl('tracker_ticket_ticket_view', array('id' => $ticket->getId())));
            }
        }
        
        $ticket = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('TrackerTicketBundle:Ticket')
            ->find($ticket->getId());
        
        return $this->render('TrackerTicketBundle:Ticket:view.html.twig', array(
            'ticket' => $ticket,
            'form' => $form->createView()
        ));
    }
    
    public function addAction()
    {
        $ticket = new Ticket();
        $form = $this->createForm(new TicketType(), $ticket);
        $request = $this->get('request');
        
        $form->handleRequest($request);
        if ($form->isSubmitted()) 
        {
            if( $form->isValid() ) 
            {
                $ticket->setUser($this->getUser());
                $em = $this->getDoctrine()->getManager();
                $em->persist($ticket);
                $em->flush();
                return $this->redirect($this->generateUrl('tracker_ticket_ticket_index'));
            }
        }
        
        return $this->render('TrackerTicketBundle:Ticket:add.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
