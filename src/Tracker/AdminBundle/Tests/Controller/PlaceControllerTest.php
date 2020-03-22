<?php

namespace Tracker\AdminBundle\Tests\Controller;

use Tracker\TestBundle\TestAdminController;
use Tracker\PlaceBundle\Entity\Place;

class PlaceControllerTest extends TestAdminController
{
    public function testAdd()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_place_add', array('id' => self::$user->getId()), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $form = $crawler->selectButton('Valider')->form();
        $form['tracker_placebundle_place[name]'] = 'PlaceControllerTest_testAdd_name';
        $form['tracker_placebundle_place[address]'] = 'PlaceControllerTest_testAdd_address';
        $form['tracker_placebundle_place[placeType]'] = 1;
        $crawler = self::$client->submit($form);

        $url = self::$container->get('router')->generate('tracker_admin_user_view', array('id' => self::$user->getId()), false);
        $this->assertTrue(self::$client->getResponse()->isRedirect($url));

        // Vérification de la création
        $placeCreated = self::$em
            ->getRepository('TrackerPlaceBundle:Place')
            ->findOneBy(array('name' => 'PlaceControllerTest_testAdd_name', 'user' => self::$user));
        $this->assertTrue($placeCreated !== null);

        // Supression Manuelle
        self::$em->remove($placeCreated);
        self::$em->flush();
    }

    public function testAddWithBadName()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_place_add', array('id' => self::$user->getId()), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $form = $crawler->selectButton('Valider')->form();
        $form['tracker_placebundle_place[name]'] = '';
        $form['tracker_placebundle_place[address]'] = 'PlaceControllerTest_testAdd_address';
        $form['tracker_placebundle_place[placeType]'] = 1;
        $crawler = self::$client->submit($form);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Vérification que la création n'a pas eu lieu
        $placeCreated = self::$em
            ->getRepository('TrackerPlaceBundle:Place')
            ->findOneBy(array('name' => '', 'user' => self::$user));
        $this->assertTrue($placeCreated === null);
    }

    public function testAddWithBadAddress()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_place_add', array('id' => self::$user->getId()), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $form = $crawler->selectButton('Valider')->form();
        $form['tracker_placebundle_place[name]'] = 'PlaceControllerTest_testAdd_name';
        $form['tracker_placebundle_place[address]'] = '';
        $form['tracker_placebundle_place[placeType]'] = 1;
        $crawler = self::$client->submit($form);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Vérification que la création n'a pas eu lieu
        $placeCreated = self::$em
            ->getRepository('TrackerPlaceBundle:Place')
            ->findOneBy(array('name' => '', 'user' => self::$user));
        $this->assertTrue($placeCreated === null);
    }

    public function testEdit()
    {
        // Création d'un point de vente à éditer
        $p = new Place();
        $p->setName('PlaceControllerTest_testEdit_name');
        $p->setPlaceType(1);
        $p->setUser(self::$user);
        self::$em->persist($p);
        self::$em->flush();

        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_place_edit', array('id' => $p->getId()), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $form = $crawler->selectButton('Valider')->form();
        $form['tracker_placebundle_place[name]'] = 'PlaceControllerTest_testAdd_nameEdit';
        $form['tracker_placebundle_place[address]'] = 'PlaceControllerTest_testAdd_addressEdit';
        $form['tracker_placebundle_place[placeType]'] = 1;
        $crawler = self::$client->submit($form);

        $url = self::$container->get('router')->generate('tracker_admin_user_view', array('id' => self::$user->getId()), false);
        $this->assertTrue(self::$client->getResponse()->isRedirect($url));

        // Vérification de la modification
        $placeModified = self::$em
            ->getRepository('TrackerPlaceBundle:Place')
            ->findOneBy(array('name' => 'PlaceControllerTest_testAdd_nameEdit', 'user' => self::$user));
        $this->assertTrue($placeModified !== null);

        // Supression Manuelle
        self::$em->remove($p);
        self::$em->flush();
    }

    public function testEditWithBadId()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_place_edit', array('id' => rand(100000, 999999)), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(404, self::$client->getResponse()->getStatusCode());
    }
}
