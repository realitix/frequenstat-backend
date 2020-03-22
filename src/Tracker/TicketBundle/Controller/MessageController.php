<?php

namespace Tracker\TicketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Tracker\TicketBundle\Entity\Ticket;
use Tracker\TicketBundle\Entity\Message;
use Tracker\TicketBundle\Form\MessageType;

class MessageController extends Controller
{
    public function addAction(Ticket $ticket)
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
                $message->setUser($this->getUser());
                $message->setTicket($ticket);
                $em = $this->getDoctrine()->getManager();
                $em->persist($message);
                $em->flush();
                return $this->redirect($this->generateUrl('tracker_ticket_ticket_view', array('id' => $ticket->getId())));
            }
        }
        
        return $this->render('TrackerTicketBundle:Message:add.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
