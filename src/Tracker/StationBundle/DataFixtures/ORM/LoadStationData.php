<?php

namespace Tracker\StationBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Tracker\StationBundle\Entity\Station;

class LoadStationData extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface
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
	    $nbStations = $params['fixtures']['stations'];
	    
	    for( $i = 0; $i < $nbStations; $i++ )
	    {
	        $station = new Station();
	        $station->setMac($this->generateMac());
	        $station->setType(Station::TYPE_WIFI);
	        $manager->persist($station);
	        $manager->flush();
	        
	        $this->addReference('station'.$i, $station);
	    }
	}
	
	/**
	* {@inheritDoc}
	*/
	public function getOrder()
	{
		return 4;
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