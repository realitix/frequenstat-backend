<?php

namespace Tracker\PageBundle\Tests\Controller;

use Tracker\TestBundle\TestController;

class AnalysisControllerTest extends TestController
{
    private $paths = array(
        'tracker_page_analysis_analyze',
        'tracker_page_analysis_compare2',
        'tracker_page_analysis_compare3',
        'tracker_page_analysis_compare4'
    );

    public function testEmpty()
    {
        foreach( $this->paths as $path ) {
            $url = self::$container->get('router')->generate($path, array(), false);
            self::$client->request('GET', $url);
            $this->assertEquals(200, self::$client->getResponse()->getStatusCode());
        }
    }

    public function testWithoutPlace()
    {
        foreach( $this->paths as $path ) {
            $url = self::$container->get('router')->generate($path, array(), false);

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
    }

    public function testWithoutSession()
    {
        foreach( $this->paths as $path ) {
            $url = self::$container->get('router')->generate($path, array(), false);

            self::$session = self::$container->get('session');
            self::$session->set('place_id', null);
            self::$session->save();

            self::$client->request('GET', $url);

            self::$session = self::$container->get('session');
            self::$session->set('place_id', self::$place->getId());
            self::$session->save();

            $this->assertEquals(200, self::$client->getResponse()->getStatusCode());
        }
    }

    public function testWithoutCapture()
    {
        $begins = array();
        $ends = array();
        $i = 0;
        foreach( $this->paths as $path ) {
        	$begins[] = self::$dates[$i][0];
        	$ends[] = self::$dates[$i++][0];
        	
        	$options = array(
        		'begin' => $begins,
        		'end'   => $ends
        	);
            $url = self::$container->get('router')->generate($path, $options, false);
        	self::$client->request('GET', $url);
        	$this->assertEquals(200, self::$client->getResponse()->getStatusCode());
        }
    }

    public function testWithCaptures()
    {
        $begins = array();
        $ends = array();
        $i = 0;
        foreach( $this->paths as $path ) {
            $begins[] = self::$dates[$i][0];
            $ends[] = self::$dates[$i++][1];
            
            $options = array(
                'begin' => $begins,
                'end'   => $ends
            );
            $url = self::$container->get('router')->generate($path, $options, false);
            self::$client->request('GET', $url);
            $this->assertEquals(200, self::$client->getResponse()->getStatusCode());
        }
    }
}
