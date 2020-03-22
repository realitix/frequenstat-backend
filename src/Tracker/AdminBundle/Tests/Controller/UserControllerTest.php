<?php

namespace Tracker\AdminBundle\Tests\Controller;

use Tracker\TestBundle\TestAdminController;

class UserControllerTest extends TestAdminController
{
    private static $userAlt;

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();

        // Création d'un utilisateur
        $userManager = self::$container->get('fos_user.user_manager');
        $user = $userManager->createUser();
        $email = 'test'.rand(0, 10000).'@test.com';
        $password = 'test';
        $user->setEmail($email);
        $user->setFirstName('Test');
        $user->setLastName('Test');
        $user->setCompany('Test');
        $user->setEnabled(true);
        $user->setPhoneNumber1('Test');
        $user->setPlainPassword($password);
        $userManager->updateUser($user);
        self::$em->persist($user);
        self::$em->flush();
        self::$userAlt = $user;
    }
    
    public static function tearDownAfterclass()
    {
        // Supression de l'utilisateur
        self::$em->remove(self::$userAlt);
        self::$em->flush();

        parent::tearDownAfterclass();
    }


    public function testIndex()
    {
        $url = self::$container->get('router')->generate('tracker_admin_user_index', array(), false);
        self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());
    }

    public function testView()
    {
        $url = self::$container->get('router')->generate('tracker_admin_user_view', array('id' => self::$user->getId()), false);
        self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());   
    }

    public function testAdd()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_user_add', array(), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $email = 'test'.rand(0, 10000).'@test.com';
        $form = $crawler->selectButton('Valider')->form();
        $form['tracker_userbundle_user[email]'] = $email;
        $form['tracker_userbundle_user[firstName]'] = 'UserControllerTest_testAdd_firstname';
        $form['tracker_userbundle_user[lastName]'] = 'UserControllerTest_testAdd_lastname';
        $form['tracker_userbundle_user[company]'] = 'UserControllerTest_testAdd_company';
        $form['tracker_userbundle_user[phoneNumber1]'] = '013456453456';
        $form['tracker_userbundle_user[phoneNumber2]'] = '334455667788';
        $form['tracker_userbundle_user[address]'] = 'UserControllerTest_testAdd_address';
        $crawler = self::$client->submit($form);

        $url = self::$container->get('router')->generate('tracker_admin_user_index', array(), false);
        $this->assertTrue(self::$client->getResponse()->isRedirect($url));

        // Vérification de la création
        $userCreated = self::$em
            ->getRepository('TrackerUserBundle:User')
            ->findOneByEmail($email);
        $this->assertTrue($userCreated !== null);

        // Supression Manuelle
        self::$em->remove($userCreated);
        self::$em->flush();
    }

    public function testAddWithBadEmail()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_user_add', array(), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $email = 'emailmalformate';
        $form = $crawler->selectButton('Valider')->form();
        $form['tracker_userbundle_user[email]'] = $email;
        $form['tracker_userbundle_user[firstName]'] = 'UserControllerTest_testAdd_firstname';
        $form['tracker_userbundle_user[lastName]'] = 'UserControllerTest_testAdd_lastname';
        $form['tracker_userbundle_user[company]'] = 'UserControllerTest_testAdd_company';
        $form['tracker_userbundle_user[phoneNumber1]'] = 'UserControllerTest';
        $form['tracker_userbundle_user[phoneNumber2]'] = 'UserControllerTest';
        $form['tracker_userbundle_user[address]'] = 'UserControllerTest_testAdd_address';
        $crawler = self::$client->submit($form);

        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Vérification que la création n'a pas eu lieu
        $userCreated = self::$em
            ->getRepository('TrackerUserBundle:User')
            ->findOneByEmail($email);
        $this->assertTrue($userCreated === null);
    }

    public function testAddWithBadFirstName()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_user_add', array(), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $email = 'test'.rand(0, 10000).'@test.com';
        $form = $crawler->selectButton('Valider')->form();
        $form['tracker_userbundle_user[email]'] = $email;
        $form['tracker_userbundle_user[firstName]'] = '';
        $form['tracker_userbundle_user[lastName]'] = 'UserControllerTest_testAdd_lastname';
        $form['tracker_userbundle_user[company]'] = 'UserControllerTest_testAdd_company';
        $form['tracker_userbundle_user[phoneNumber1]'] = 'UserController';
        $form['tracker_userbundle_user[phoneNumber2]'] = 'UserController';
        $form['tracker_userbundle_user[address]'] = 'UserControllerTest_testAdd_address';
        $crawler = self::$client->submit($form);

        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Vérification que la création n'a pas eu lieu
        $userCreated = self::$em
            ->getRepository('TrackerUserBundle:User')
            ->findOneByEmail($email);
        $this->assertTrue($userCreated === null);
    }

    public function testAddWithBadLastName()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_user_add', array(), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $email = 'test'.rand(0, 10000).'@test.com';
        $form = $crawler->selectButton('Valider')->form();
        $form['tracker_userbundle_user[email]'] = $email;
        $form['tracker_userbundle_user[firstName]'] = 'UserControllerTest_testAdd_lastname';
        $form['tracker_userbundle_user[lastName]'] = '';
        $form['tracker_userbundle_user[company]'] = 'UserControllerTest_testAdd_company';
        $form['tracker_userbundle_user[phoneNumber1]'] = 'UserController';
        $form['tracker_userbundle_user[phoneNumber2]'] = 'UserController';
        $form['tracker_userbundle_user[address]'] = 'UserControllerTest_testAdd_address';
        $crawler = self::$client->submit($form);

        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Vérification que la création n'a pas eu lieu
        $userCreated = self::$em
            ->getRepository('TrackerUserBundle:User')
            ->findOneByEmail($email);
        $this->assertTrue($userCreated === null);
    }

    public function testAddWithBadCompany()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_user_add', array(), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $email = 'test'.rand(0, 10000).'@test.com';
        $form = $crawler->selectButton('Valider')->form();
        $form['tracker_userbundle_user[email]'] = $email;
        $form['tracker_userbundle_user[firstName]'] = 'UserControllerTest_testAdd_lastname';
        $form['tracker_userbundle_user[lastName]'] = 'UserControllerTest_testAdd_company';
        $form['tracker_userbundle_user[company]'] = '';
        $form['tracker_userbundle_user[phoneNumber1]'] = 'UserController';
        $form['tracker_userbundle_user[phoneNumber2]'] = 'UserController';
        $form['tracker_userbundle_user[address]'] = 'UserControllerTest_testAdd_address';
        $crawler = self::$client->submit($form);

        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Vérification que la création n'a pas eu lieu
        $userCreated = self::$em
            ->getRepository('TrackerUserBundle:User')
            ->findOneByEmail($email);
        $this->assertTrue($userCreated === null);
    }

    public function testAddWithBadPhoneNumber()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_user_add', array(), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $email = 'test'.rand(0, 10000).'@test.com';
        $form = $crawler->selectButton('Valider')->form();
        $form['tracker_userbundle_user[email]'] = $email;
        $form['tracker_userbundle_user[firstName]'] = 'UserControllerTest_testAdd_lastname';
        $form['tracker_userbundle_user[lastName]'] = 'UserControllerTest_testAdd_phoneNumber1';
        $form['tracker_userbundle_user[company]'] = '';
        $form['tracker_userbundle_user[phoneNumber1]'] = '';
        $form['tracker_userbundle_user[phoneNumber2]'] = 'UserControlle';
        $form['tracker_userbundle_user[address]'] = 'UserControllerTest_testAdd_address';
        $crawler = self::$client->submit($form);

        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Vérification que la création n'a pas eu lieu
        $userCreated = self::$em
            ->getRepository('TrackerUserBundle:User')
            ->findOneByEmail($email);
        $this->assertTrue($userCreated === null);
    }

    public function testEdit()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_user_edit', array('id' => self::$userAlt->getId()), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());

        // Envoie du formulaire
        $form = $crawler->selectButton('Valider')->form();
        $email = 'test'.rand(0, 10000).'@test.com';
        $form = $crawler->selectButton('Valider')->form();
        $form['tracker_userbundle_user[email]'] = $email;
        $form['tracker_userbundle_user[firstName]'] = 'UserControllerTest_testAdd_firstnameEdit';
        $form['tracker_userbundle_user[lastName]'] = 'UserControllerTest_testAdd_lastnameEdit';
        $form['tracker_userbundle_user[company]'] = 'UserControllerTest_testAdd_companyEdit';
        $form['tracker_userbundle_user[phoneNumber1]'] = '0134564534566';
        $form['tracker_userbundle_user[phoneNumber2]'] = '3344556234905';
        $form['tracker_userbundle_user[address]'] = 'UserControllerTest_testAdd_addressEdit';
        $crawler = self::$client->submit($form);

        $url = self::$container->get('router')->generate('tracker_admin_user_view', array('id' => self::$userAlt->getId()), false);
        $this->assertTrue(self::$client->getResponse()->isRedirect($url));

        // Vérification de la modification
        $userModified = self::$em
            ->getRepository('TrackerUserBundle:User')
            ->findOneByEmail($email);
        $this->assertTrue($userModified !== null);
    }

    public function testEditWithBadId()
    {
        // Connection à la page
        $url = self::$container->get('router')->generate('tracker_admin_user_edit', array('id' => rand(100000, 999999)), false);
        $crawler = self::$client->request('GET', $url);
        $this->assertEquals(404, self::$client->getResponse()->getStatusCode());
    }
}
