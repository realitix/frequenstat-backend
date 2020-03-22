<?php

namespace Tracker\PageBundle\Tests\Controller;

use Tracker\TestBundle\TestController;

class DashboardControllerTest extends TestController
{
    public function testDashboard()
    {
    	$pathName = 'tracker_page_dashboard';		
		$url = self::$container->get('router')->generate($pathName, array(), false);
        self::$client->request('GET', $url);
        $this->assertEquals(200, self::$client->getResponse()->getStatusCode());
    }
}
