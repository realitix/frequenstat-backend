<?php

namespace Tracker\TestBundle;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

use Tracker\AdminBundle\Command\CreateFixturesCaptureCommand;
use Tracker\UserBundle\Entity\User;

class TestAdminController extends WebTestCase
{
	protected static $user;
	protected static $client;
    protected static $container;
	protected static $session;
    protected static $em;

    protected static function getNameTest()
    {
    	$className = get_called_class();
    	$names = explode('\\', $className);
    	return array_pop($names);
    }
    
    public static function setUpBeforeClass()
    {
    	parent::setUpBeforeClass();

    	// Initialisation
        self::$client = static::createClient();
        self::$container = self::$client->getContainer();
    	self::$em = self::$container->get('doctrine.orm.entity_manager');

    	// Création d'un admin
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
        $user->addRole('ROLE_ADMIN');
        
        $userManager->updateUser($user);
        self::$em->persist($user);
        self::$em->flush();
        self::$user = $user;

        // Paramétrage login
        self::$client->setServerParameters(array(
			'PHP_AUTH_USER' => $email,
			'PHP_AUTH_PW'   => $password,
		));
    }
    
    public static function tearDownAfterclass()
    {
        // Suppression de toutes les place de l'utilisateur
        $places = self::$em
            ->getRepository('TrackerPlaceBundle:Place')
            ->findByUser(self::$user);

        foreach( $places as $p ) {

            // Supression de toutes les boxes
            $boxes = self::$em
                ->getRepository('TrackerPlaceBundle:Place')
                ->findByPlace($p);

            foreach( $boxes as $b ) {
                self::$em->remove($b);
                self::$em->flush();
            }

            self::$em->remove($p);
            self::$em->flush();
        }

    	// Suppression de l'utilisateur
    	self::$em->remove(self::$user);
    	self::$em->flush();

        parent::tearDownAfterclass();
    }
}