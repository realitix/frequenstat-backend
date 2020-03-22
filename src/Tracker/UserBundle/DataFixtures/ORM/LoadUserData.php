<?php

namespace Tracker\UserBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Tracker\UserBundle\Entity\User;

class LoadUserData extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface
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
		$nbUsers = $params['fixtures']['users'];		
	    
	    $faker = \Faker\Factory::create('fr_FR');
	    for( $i = 0; $i < $nbUsers; $i++ )
	    {
	        $user = new User();
    		$user->setUsername($faker->unique()->userName);
    		$user->setEmail($faker->unique()->email);
    		$user->setPlainPassword('test');
    		$user->setSecurityKey($faker->unique()->uuid);
    		$manager->persist($user);
    		$manager->flush();
    		$this->addReference('user'.$i, $user);
	    }
	}
	
	/**
	* {@inheritDoc}
	*/
	public function getOrder()
	{
		return 1;
	}
}