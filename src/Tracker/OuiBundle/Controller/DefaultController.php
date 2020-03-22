<?php

namespace Tracker\OuiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TrackerOuiBundle:Default:index.html.twig', array('name' => $name));
    }
}
