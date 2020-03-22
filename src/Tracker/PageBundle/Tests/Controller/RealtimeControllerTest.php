<?php

namespace Tracker\PageBundle\Tests\Controller;

use Tracker\TestBundle\TestController;

class RealtimeControllerTest extends TestController
{
	private $path = 'tracker_page_realtime_index';
	private $optionMessage = 'If error 500, try php app/console tracker:db:init';
	
    public function testIndex()
    {       
        $url = self::$container->get('router')->generate($this->path, array(), false);
    	self::$client->request('GET', $url);
    	$this->assertEquals(200, self::$client->getResponse()->getStatusCode(), $this->optionMessage);
    }

    public function testWithoutPlace()
    {
        $url = self::$container->get('router')->generate($this->path, array(), false);

        // Connection avec l'utilisateur vide
        self::$client->setServerParameters(array(
            'PHP_AUTH_USER' => self::$userEmpty->getEmail(),
            'PHP_AUTH_PW'   => 'test',
        ));

        self::$client->request('GET', $url);

        // ReConnection avec l'utilisateur classique
        self::$client->setServerParameters(array(
            'PHP_AUTH_USER' => self::$user->getEmail(),
            'PHP_AUTH_PW'   => 'test',
        ));

        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());
    }

    public function testWithoutSession()
    {
        $url = self::$container->get('router')->generate($this->path, array(), false);

        self::$session = self::$container->get('session');
        self::$session->set('place_id', null);
        self::$session->save();

        self::$client->request('GET', $url);

        self::$session = self::$container->get('session');
        self::$session->set('place_id', self::$place->getId());
        self::$session->save();

        $this->assertEquals(200, self::$client->getResponse()->getStatusCode(), $this->optionMessage);
    }
}
