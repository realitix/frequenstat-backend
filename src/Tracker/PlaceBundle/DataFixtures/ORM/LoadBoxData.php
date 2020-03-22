<?php

namespace Tracker\PlaceBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Tracker\PlaceBundle\Entity\Box;

class LoadBoxData extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface
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
	    $nbBoxes = $params['fixtures']['boxes'];
		
	    // On  extrait les places
	    $places = array();
	    $i = 0;
	    while( $this->hasReference('place'.$i) )
	    {
	        $places[] = $this->getReference('place'.$i);
	        $i++;
	    }
	    $nbPlaces = $i - 1;
	    
	    $faker = \Faker\Factory::create('fr_FR');
	    for( $i = 0; $i < $nbBoxes; $i++ )
	    {
	        $box = new Box();
    		$box->setName($faker->optional()->domainWord);
    		$box->setPlace($places[mt_rand(0, $nbPlaces)]);
    		$manager->persist($box);
    		$manager->flush();
    		$this->addReference('box'.$i, $box);
	    }
	}
	
	/**
	* {@inheritDoc}
	*/
	public function getOrder()
	{
		return 3;
	}
}