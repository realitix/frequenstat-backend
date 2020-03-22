<?php

namespace Tracker\AdminBundle\Tests\Controller;

use Tracker\TestBundle\TestAdminController;
use Tracker\TicketBundle\Entity\Ticket;

class TicketControllerTest extends TestAdminController
{
    private static $ticket;

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();

        // Création d'un ticket
        $t = new Ticket();
        $t->setName('test_ticket')
          ->setType(1)
          ->setDescription('description')
          ->setUser(self::$user);

        self::$em->persist($t);
        self::$em->flush();
        self::$ticket = $t;
    }
    
    public static function tearDownAfterclass()
    {
        // Supression des messages associés au ticket
        $messages = self::$em->getRepository('TrackerTicketBundle:Message')->findByTicket(self::$ticket);
        foreach( $messages as $m ) {
            self::$em->remove($m);
        }
        self::$em->flush();

        // Supression du ticket
        self::$em->remove(self::$ticket);
        self::$em->flush();

        parent::tearDownAfterclass();
    }

    public function testIndex()
    {
        $url = self::$container->get('router')->generate('tracker_admin_ticket_index', array(), false);
        self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());
    }

    public function testAddMessage()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_ticket_view', array('id' => self::$ticket->getId()), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $content = 'test'.rand(0, 10000).'_content';
        $form = $crawler->selectButton('Répondre')->form();
        $form['tracker_ticketbundle_message[content]'] = $content;
        $crawler = self::$client->submit($form);

        $url = self::$container->get('router')->generate('tracker_admin_ticket_index', array(), false);
        $this->assertTrue(self::$client->getResponse()->isRedirect($url));

        // Vérification de la création de la réponse
        $messageCreated = self::$em
            ->getRepository('TrackerTicketBundle:Message')
            ->findOneByContent($content);
        $this->assertTrue($messageCreated !== null);

        // Supression Manuelle
        self::$em->remove($messageCreated);
        self::$em->flush();
    }

    public function testAddWithoutContent()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_ticket_view', array('id' => self::$ticket->getId()), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $form = $crawler->selectButton('Répondre')->form();
        $form['tracker_ticketbundle_message[content]'] = '';
        $crawler = self::$client->submit($form);

        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());
    }

    public function testCloseTicket()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_ticket_view', array('id' => self::$ticket->getId()), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $content = 'test'.rand(0, 10000).'_content';
        $form = $crawler->selectButton('Répondre')->form();
        $form['tracker_ticketbundle_message[content]'] = $content;
        $form['tracker_ticketbundle_message[close]'] = '1';
        $crawler = self::$client->submit($form);

        $url = self::$container->get('router')->generate('tracker_admin_ticket_index', array(), false);
        $this->assertTrue(self::$client->getResponse()->isRedirect($url));

        // Vérification de la création de la réponse
        $messageCreated = self::$em
            ->getRepository('TrackerTicketBundle:Message')
            ->findOneByContent($content);
        $this->assertTrue($messageCreated !== null);

        // Vérification de la fermeture du ticket
        self::$em->refresh(self::$ticket);
        $this->assertTrue(self::$ticket->getClosed() !== null);

        // Supression Manuelle
        self::$em->remove($messageCreated);
        self::$em->flush();
    }

}
