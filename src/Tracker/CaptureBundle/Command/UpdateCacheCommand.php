<?php
namespace Tracker\CaptureBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Tracker\OuiBundle\Entity\Organization;

class UpdateCacheCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('tracker:capture:updatecache')
            ->setDescription('Update the cached captures')
            ->addArgument('userId', InputArgument::OPTIONAL, 'Id de l\'utilisateur à mettre à jour')
        ;
    }

    /**
     * On lance le processus
    */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $cManager = $this->getContainer()->get('capture_cache.manager');
		$userId = $input->getArgument('userId');
		
		if( $userId )
		{
	        $user = $this
	        	->getContainer()
	        	->get('doctrine')
	        	->getManager()
	        	->getRepository('TrackerUserBundle:User')
	        	->find($userId);
	        
	        if( $user === null )
	        	return;
	        
	        $cManager->setUser($user);
	        $cManager->generate();
		}
		else
		{
			$users = $this
	        	->getContainer()
	        	->get('doctrine')
	        	->getManager()
	        	->getRepository('TrackerUserBundle:User')
	        	->findAll();
	        
	        foreach( $users as $u )
	        {
	        	$cManager->setUser($u);
	        	$cManager->generate();
	        }
		}
    }
}