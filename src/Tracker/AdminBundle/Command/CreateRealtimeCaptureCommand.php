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

class CreateRealtimeCaptureCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('tracker:realtime:capture')
            ->setDescription('Create captures every 5 seconds')
            ->setDefinition(array(
                new InputArgument('boxId', InputArgument::REQUIRED, 'Id box'),
                new InputArgument('nbStations', InputArgument::REQUIRED, 'Nombre de stations maximum par 5 secondes')
            ))
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	$em = $this->getContainer()->get('doctrine')->getManager();
        $nbStations = $input->getArgument('nbStations');
        $boxId = $input->getArgument('boxId');
        $box = $em->getRepository('TrackerPlaceBundle:Box')->find($boxId);
        
        // Boucle infini de création
        while(1) {
            $nb = mt_rand(0, $nbStations);
            $output->writeln('Creation de '.$nb.' stations');
            for($i = 0; $i < $nb; $i++) {
                // Station
            	$station = new Station();
            	$station->setMac($this->generateMac());
            	$em->persist($station);
            	$em->flush();
            	
            	// Capture
            	$capture = new Capture();
            	$capture->setBox($box);
            	$capture->setStation($station);
            	$capture->setDateCapture(new \DateTime());
            	$capture->setPower(rand(-90, -20));
            	$em->persist($capture);
            	$em->flush();
            }
            sleep(1);
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