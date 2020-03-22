<?php
namespace Tracker\AdminBundle\Controller;

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
            ->findBy(array(), array('created' => 'DESC'));
        
        return $this->render('TrackerAdminBundle:Ticket:index.html.twig', array(
            'tickets' => $tickets
        ));
    }
    
    public function viewAction(Ticket $ticket)
    {
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
                return $this->redirect($this->generateUrl('tracker_admin_ticket_index'));
            }
        }
        
        $ticket = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('TrackerTicketBundle:Ticket')
            ->find($ticket->getId());
        
        return $this->render('TrackerAdminBundle:Ticket:view.html.twig', array(
            'ticket' => $ticket,
            'form' => $form->createView()
        ));
    }
}
