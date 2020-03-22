<?php

namespace Tracker\PlaceBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Tracker\PlaceBundle\Entity\Place;

class LoadPlaceData extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface
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
	    $nbPlaces = $params['fixtures']['places'];
		
	    // On  extrait les utilisatuers
	    $users = array();
	    $i = 0;
	    while( $this->hasReference('user'.$i) )
	    {
	        $users[] = $this->getReference('user'.$i);
	        $i++;
	    }
	    $nbUsers = $i - 1;
	    
	    $faker = \Faker\Factory::create('fr_FR');
	    for( $i = 0; $i < $nbPlaces; $i++ )
	    {
			$place = new Place();
			$place->setName($faker->unique()->address);
			$place->setUser($users[mt_rand(0, $nbUsers)]);
			$manager->persist($place);
			$manager->flush();
			$this->addReference('place'.$i, $place);
	    }
	}
	
	/**
	* {@inheritDoc}
	*/
	public function getOrder()
	{
		return 2;
	}
}