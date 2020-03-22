<?php

namespace Tracker\StationBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Tracker\CaptureBundle\Entity\Capture;

class LoadCaptureData extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface
{
	/**
	* @var ContainerInterface
	*/
	private $container;
	
	/**
	* {@inheritDoc}
	*/
	public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = NULL)
	{
		$this->container = $container;
	}
	
	/**
	 * {@inheritDoc}
	*/
	public function load(ObjectManager $manager)
	{
		$params = $this->container->getParameter('tracker');
	    $nbCaptures = $params['fixtures']['captures'];
	    
	    // On  extrait les stations
	    $stations = array();
	    $i = 0;
	    while( $this->hasReference('station'.$i) )
	    {
	        $stations[] = $this->getReference('station'.$i);
	        $i++;
	    }
	    $nbStations = $i - 1;
	    
	    // On  extrait les boxes
	    $boxes = array();
	    $i = 0;
	    while( $this->hasReference('box'.$i) )
	    {
	        $boxes[] = $this->getReference('box'.$i);
	        $i++;
	    }
	    $nbBoxes = $i - 1;
	    
	    // On créé les captures et intialise la date
	    $date = new \DateTime('2014-03-01 07:00:00');
	    for( $i = 0; $i < $nbCaptures; $i++ )
	    {
	        $capture = new Capture();
	        $capture->setBox($boxes[mt_rand(0, $nbBoxes)]);
	        $capture->setMac($this->generateMac());
	        $capture->setPower(intval('-'.mt_rand(30, 90)));
	        $capture->setDateCapture($date);
	        $manager->persist($capture);
	        
	        // Entre 0 et 5 secondes par capture
	        $date = clone $date;
	        $interval = 'PT'.mt_rand(10,50).'S';
	        $date->add(new \DateInterval($interval));
	    }
	    
	    $manager->flush();
	}
	
	/**
	* {@inheritDoc}
	*/
	public function getOrder()
	{
		return 5;
	}
	
	private function generateMac()
	{
		$mac = '';
	    for( $i = 0; $i < 17; $i++)
	    {
	    	if( ($i+1)%3 == 0)
	    		$mac .= ':';
	    	else
	    		$mac .= dechex(mt_rand(0, 15));
	    }
	    return $mac;
	}
}