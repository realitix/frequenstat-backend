<?php
namespace Tracker\AdminBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Tracker\UserBundle\Entity\User;
use Tracker\StationBundle\Entity\Station;
use Tracker\CaptureBundle\Entity\Capture3d;

class CreateFixturesCapture3dCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('tracker:fixture:capture3d')
            ->setDescription('Create fixtures of 3d capture')
            ->setDefinition(array(
                new InputArgument('userId', InputArgument::REQUIRED, 'Id user'),
                new InputArgument('nbStations', InputArgument::REQUIRED, 'Nombre de stations'),
                new InputArgument('nbCaptures', InputArgument::REQUIRED, 'Nombre de captures'),
            ))
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	$em = $this->getContainer()->get('doctrine')->getManager();
        $userId = $input->getArgument('userId');
        $nbStations = $input->getArgument('nbStations');
        $nbCaptures = $input->getArgument('nbCaptures');
        $user = $em->getRepository('TrackerUserBundle:User')->find($userId);
        $places = $user->getPlaces();
        $place = $places[0];
        
        // On créé les stations
        $stations = array();
        for($i = 0; $i < $nbStations; $i++) {
        	$tmp = new Station();
        	$tmp->setMac($this->generateMac());
        	$em->persist($tmp);
        	$em->flush();
        	$stations[] = $tmp;
        }
        
        // On créé les captures
        for($i = 0; $i < $nbCaptures; $i++) {
        	$tmp = new Capture3d();
        	$tmp->setPlace($place);
        	$tmp->setStation($stations[rand(0, (count($stations)-1))]);
        	$tmp->setDateCapture(new \DateTime());
        	$tmp->setPosition(new \CrEOF\Spatial\PHP\Types\Geometry\Point(rand(0, 400), rand(0, 400)));
        	$em->persist($tmp);
        	$em->flush();
        }
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