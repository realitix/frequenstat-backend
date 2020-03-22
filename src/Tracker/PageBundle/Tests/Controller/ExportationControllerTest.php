<?php

namespace Tracker\PageBundle\Tests\Controller;

use Tracker\TestBundle\TestController;

class ExportationControllerTest extends TestController
{
    private $path = 'tracker_page_exportation_export';

    public function testEmpty()
    {
        $begins = array();
        $ends = array();

        $url = self::$container->get('router')->generate($this->path, array(), false);
        self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());
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

        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());
    }

    public function testWithCaptures()
    {
        $begins = array();
        $ends = array();

        $begins[0] = self::$dates[0][0];
        $ends[0] = self::$dates[0][1];
        $options = array(
            'begin' => $begins,
            'end'   => $ends
        );
        $url = self::$container->get('router')->generate($this->path, $options, false);
        self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());
    }

    public function testWithoutCapture()
    {
        $begins = array();
        $ends = array();

        $begins[0] = self::$dates[0][0];
        $ends[0] = self::$dates[0][0];
        $options = array(
            'begin' => $begins,
            'end'   => $ends
        );
        $url = self::$container->get('router')->generate($this->path, $options, false);
        self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());
    }
}
