<?php

namespace Tracker\TestBundle;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

use Tracker\PlaceBundle\Entity\Place;
use Tracker\PlaceBundle\Entity\Box;
use Tracker\AdminBundle\Command\CreateFixturesCaptureCommand;
use Tracker\UserBundle\Entity\User;

class TestController extends WebTestCase
{
	protected static $user;
	protected static $client;
    protected static $userEmpty;
    protected static $clientAlt;
    protected static $container;
	protected static $session;
    protected static $em;
    protected static $place;
    protected static $box;
    protected static $dates = array(
    	array('2014-01-02 08:00', '2014-01-02 20:00'),
    	array('2014-01-03 08:00', '2014-01-03 20:00'),
    	array('2014-01-04 08:00', '2014-01-04 20:00'),
    	array('2014-01-05 08:00', '2014-01-05 20:00')
    );

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
        self::$user = $user;

        // Création d'un utilisateur ne possédant rien
        $userEmpty = $userManager->createUser();
        $email2 = 'test'.rand(0, 10000).'@test.com';
        $password = 'test';
        $userEmpty->setEmail($email2);
        $userEmpty->setFirstName('Test');
        $userEmpty->setLastName('Test');
        $userEmpty->setCompany('Test');
        $userEmpty->setEnabled(true);
        $userEmpty->setPhoneNumber1('Test');
        $userEmpty->setPlainPassword($password);
        $userManager->updateUser($userEmpty);
        self::$em->persist($userEmpty);
        self::$em->flush();
        self::$userEmpty = $userEmpty;

        // Paramétrage login
        self::$client->setServerParameters(array(
			'PHP_AUTH_USER' => $email,
			'PHP_AUTH_PW'   => $password,
		));
		
		// Création du point de vente
        $p = new Place();
        $p->setName(self::getNameTest());
        $p->setPlaceType(1);
        $p->setUser(self::$user);
        self::$em->persist($p);
        self::$em->flush();
        self::$place = $p;
        
        // Création de la box
        $b = new Box();
        $b->setName(self::getNameTest());
        $b->setSerialNumber(self::getNameTest());
        $b->setVersion(1);
        $b->setPlace(self::$place);
        self::$em->persist($b);
        self::$em->flush();
        self::$box = $b;
        
        // Ajout de la box au point de vente
        self::$place->addBox(self::$box);
        
        // Création des captures
	    $command = new CreateFixturesCaptureCommand();
	    foreach( self::$dates as $date ) {
	    	$command->setContainer(self::$container);
	    	$input = new ArrayInput(array(
	    		'boxId' => self::$box->getId(),
	    		'nbStations' => 10,
	    		'nbCaptures' => 10,
	    		'dateBegin' => $date[0],
	    		'dateEnd' => $date[1]
	    	));
		    $output = new NullOutput();
		    $command->run($input, $output);
	    }

	    // Création des captures temps réel
    	$input = new ArrayInput(array(
    		'boxId' => self::$box->getId(),
    		'nbStations' => 10,
    		'nbCaptures' => 10,
    		'dateBegin' => date('Y-m-d H:i', strtotime('-1 minute')),
    		'dateEnd' => date('Y-m-d H:i', strtotime('+2 minutes')),
    	));
	    $output = new NullOutput();
	    $command->run($input, $output);

	    // Mise en place du point de vente dans la session
	    self::$session = self::$container->get('session');
		self::$session->set('place_id', self::$place->getId());
		self::$session->save();
    }
    
    public static function tearDownAfterclass()
    {
    	// Supression des captures
    	$captures = self::$em
    		->getRepository('TrackerCaptureBundle:Capture')
    		->findBy(array('box' => self::$box));
    	
        $stations = array();
    	foreach( $captures as $c ) {
            $stations[] = $c->getStation();
    		self::$em->remove($c);
    	}
    	self::$em->flush();

        // Suppression des stations
        foreach($stations as $s) {
            self::$em->remove($s);
        }
        self::$em->flush();

        self::$em->getRepository('TrackerStationBundle:Station')->deleteStationsWithoutCapture();
        
    	
    	// Supression de la box
    	self::$em->remove(self::$box);
    	self::$em->flush();
    	
    	// Supression de la place
    	self::$em->remove(self::$place);
    	self::$em->flush();

    	// Suppression de l'utilisateur
    	self::$em->remove(self::$user);
    	self::$em->flush();

        self::$em->remove(self::$userEmpty);
        self::$em->flush();

        parent::tearDownAfterclass();
    }
}