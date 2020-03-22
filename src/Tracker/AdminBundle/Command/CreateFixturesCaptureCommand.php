<?php
namespace Tracker\AdminBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Tracker\UserBundle\Entity\User;
use Tracker\StationBundle\Entity\Station;
use Tracker\CaptureBundle\Entity\Capture;

class CreateFixturesCaptureCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('tracker:fixture:capture')
            ->setDescription('Create fixtures of captures')
            ->setDefinition(array(
                new InputArgument('boxId', InputArgument::REQUIRED, 'Id box'),
                new InputArgument('nbStations', InputArgument::REQUIRED, 'Nombre de stations'),
                new InputArgument('nbCaptures', InputArgument::REQUIRED, 'Nombre de captures'),
                new InputArgument('dateBegin', InputArgument::REQUIRED, 'Date de début'),
                new InputArgument('dateEnd', InputArgument::REQUIRED, 'Date de fin')
            ))
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	$em = $this->getContainer()->get('doctrine')->getManager();
        $nbStations = $input->getArgument('nbStations');
        $nbCaptures = $input->getArgument('nbCaptures');
        $boxId = $input->getArgument('boxId');
        $dateBegin = new \DateTime($input->getArgument('dateBegin'));
        $dateEnd = new \DateTime($input->getArgument('dateEnd'));
        $interval = abs(intval($dateEnd->getTimestamp() - $dateBegin->getTimestamp()));
        $box = $em->getRepository('TrackerPlaceBundle:Box')->find($boxId);
        
        // On créé les stations
        $stations = array();
        for($i = 0; $i < $nbStations; $i++) {
        	$tmp = new Station();
        	$tmp->setMac($this->generateMac());
        	$em->persist($tmp);
        	$stations[] = $tmp;
        }
        $em->flush();
        
        // On créé les captures
        $output->writeln('Creation des captures');
        for($i = 0; $i < $nbCaptures; $i++) {
        	$date1 = clone $dateBegin;
        	$randSec = rand(0, $interval);
        	$tmp = new Capture();
        	$tmp->setBox($box);
        	$tmp->setStation($stations[rand(0, (count($stations)-1))]);
        	$tmp->setDateCapture($date1->add(new \DateInterval('PT'.$randSec.'S')));
        	$tmp->setPower(rand(-90, -20));
        	$em->persist($tmp);
        }
        $em->flush();
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