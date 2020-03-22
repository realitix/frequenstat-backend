<?php

namespace Tracker\AdminBundle\Tests\Controller;

use Tracker\TestBundle\TestAdminController;
use Tracker\PlaceBundle\Entity\Place;
use Tracker\PlaceBundle\Entity\Box;

class BoxControllerTest extends TestAdminController
{
    private static $place;

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();

        // Création d'un point de vente
        $p = new Place();
        $p->setName('BoxControllerTest_name');
        $p->setPlaceType(1);
        $p->setUser(self::$user);
        self::$em->persist($p);
        self::$em->flush();
        self::$place = $p;
    }
    
    public static function tearDownAfterclass()
    {
        // Supression des box associées à la place
        $boxes = self::$em->getRepository('TrackerPlaceBundle:Box')->findByPlace(self::$place);
        foreach($boxes as $box) {
            self::$em->remove($box);
        }
        self::$em->flush();

        // Suppression de la place
        self::$em->remove(self::$place);
        self::$em->flush();

        parent::tearDownAfterclass();
    }

    public function testAdd()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_box_add', array('id' => self::$place->getId()), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $form = $crawler->selectButton('Valider')->form();
        $form['tracker_placebundle_box[name]'] = 'BoxControllerTest_testAdd_name';
        $form['tracker_placebundle_box[serialNumber]'] = 'PlaceControllerTest_testAdd_serialNumber';
        $form['tracker_placebundle_box[version]'] = 1;
        $crawler = self::$client->submit($form);

        $url = self::$container->get('router')->generate('tracker_admin_user_view', array('id' => self::$user->getId()), false);
        $this->assertTrue(self::$client->getResponse()->isRedirect($url));

        // Vérification de la création
        $boxCreated = self::$em
            ->getRepository('TrackerPlaceBundle:Box')
            ->findOneBy(array('name' => 'BoxControllerTest_testAdd_name', 'place' => self::$place));
        $this->assertTrue($boxCreated !== null);
    }

    public function testAddWithBadName()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_box_add', array('id' => self::$place->getId()), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $form = $crawler->selectButton('Valider')->form();
        $form['tracker_placebundle_box[name]'] = '';
        $form['tracker_placebundle_box[serialNumber]'] = 'PlaceControllerTest_testAdd_serialNumber';
        $form['tracker_placebundle_box[version]'] = 1;
        $crawler = self::$client->submit($form);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Vérification que la création n'a pas eu lieu
        $boxCreated = self::$em
            ->getRepository('TrackerPlaceBundle:Box')
            ->findOneBy(array('name' => '', 'place' => self::$place));
        $this->assertTrue($boxCreated === null);
    }

    public function testAddWithBadSerialNumber()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_box_add', array('id' => self::$place->getId()), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $name = 'BoxControllerTest_testAdd_name'.rand(0,1000);

        $form = $crawler->selectButton('Valider')->form();
        $form['tracker_placebundle_box[name]'] = $name;
        $form['tracker_placebundle_box[serialNumber]'] = '';
        $form['tracker_placebundle_box[version]'] = 1;
        $crawler = self::$client->submit($form);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Vérification que la création n'a pas eu lieu
        $boxCreated = self::$em
            ->getRepository('TrackerPlaceBundle:Box')
            ->findOneBy(array('name' => $name, 'place' => self::$place));
        $this->assertTrue($boxCreated === null);
    }

    public function testAddWithBadVersion()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_box_add', array('id' => self::$place->getId()), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $name = 'BoxControllerTest_testAdd_name'.rand(0,1000);

        $form = $crawler->selectButton('Valider')->form();
        $form['tracker_placebundle_box[name]'] = $name;
        $form['tracker_placebundle_box[serialNumber]'] = 'PlaceControllerTest_testAdd_serialNumber';
        $form['tracker_placebundle_box[version]'] = '';
        $crawler = self::$client->submit($form);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Vérification que la création n'a pas eu lieu
        $boxCreated = self::$em
            ->getRepository('TrackerPlaceBundle:Box')
            ->findOneBy(array('name' => $name, 'place' => self::$place));
        $this->assertTrue($boxCreated === null);
    }

    public function testEdit()
    {
        // Création d'une box à éditer
        $b = new Box();
        $b->setName('BoxControllerTest_testEdit_name');
        $b->setSerialNumber('BoxControllerTest_testEdit_serialNumber');
        $b->setPlace(self::$place);
        $b->setVersion(1);
        self::$em->persist($b);
        self::$em->flush();

        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_box_edit', array('id' => $b->getId()), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $name = 'BoxControllerTest_testAdd_name'.rand(0,1000);

        $form = $crawler->selectButton('Valider')->form();
        $form['tracker_placebundle_box[name]'] = $name;
        $form['tracker_placebundle_box[serialNumber]'] = 'PlaceControllerTest_testAdd_serialNumber';
        $form['tracker_placebundle_box[version]'] = 1;
        $crawler = self::$client->submit($form);

        $url = self::$container->get('router')->generate('tracker_admin_user_view', array('id' => self::$user->getId()), false);
        $this->assertTrue(self::$client->getResponse()->isRedirect($url));

        // Vérification de la modification
        $boxModified = self::$em
            ->getRepository('TrackerPlaceBundle:Box')
            ->findOneBy(array('name' => $name, 'place' => self::$place));
        $this->assertTrue($boxModified !== null);

        // Supression Manuelle
        self::$em->remove($b);
        self::$em->flush();
    }

    public function testEditWithBadId()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_box_edit', array('id' => rand(100000, 999999)), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(404, self::$client->getResponse()->getStatusCode());
    }
}
