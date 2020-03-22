<?php

namespace Tracker\StationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TrackerStationBundle:Default:index.html.twig', array('name' => $name));
    }
}
