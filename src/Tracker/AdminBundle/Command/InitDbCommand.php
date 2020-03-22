<?php
namespace Tracker\AdminBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Tracker\BoxBundle\Entity\Configuration;

class InitDbCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('tracker:db:init')
            ->setDescription('Initialize the database')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	$this->initBoxConfiguration();
    }
    
    private function initBoxConfiguration() 
    {
    	$cs = [
    		['REALTIME', 'Active le mode temps réel', 'boolean'],
    		['PATH_CONFIG_PERSO', 'Chemin vers le fichier de conf', 'string'],
    		['URL_API', 'URL vers l\'api', 'string'],
    		['IFACE', 'Interface Wifi', 'string'],
    		['PATH_DB', 'Chemin vers la bdd', 'string'],
    		['PATH_SESSION', 'Dossier de session', 'string'],
    		['PATH_DUMP_WAITING_COMPRESS', 'Dossier en attente de compression', 'string'],
    		['PATH_DUMP_WAITING_SEND', 'Dossier en attente d\'envoie', 'string'],
    		['FILE_USER_ID', 'Chemin vers ID de l\'utilisateur', 'string'],
    		['FILE_USER_KEY', 'Chemin vers la clé de l\'utilisateur', 'string'],
    		['FILE_PLACE_ID', 'Chemin vers l\'id de la place', 'string'],
    		['FILE_BOX_ID', 'Chemin vers l\'id de la boxe', 'string'],
    		['SCAPY_FILTER', 'Filtre SCAPY', 'string'],
    		['WORKER_MIN_TIME', 'Temps minimum entre deux envoies', 'integer'],
    		['WORKER_MAX_TIME', 'Temps maximum entre deux envoies', 'integer'],
    		['CAPTURE_BUFFER_PACKETS', 'Nombre de paquets avant écriture dans la base', 'integer'],
    		['CAPTURE_BUFFER_TIME', 'Nombre de secondes avant écriture dans la base', 'integer'],
    		['CHANNEL', 'Chaine à écouter', 'integer'],
    		['WAIT_CHANNEL', 'Nombre de secondes avant de lancer le service channel', 'integer'],
    		['WAIT_CAPTURE', 'Nombre de secondes avant de lancer le service capture', 'integer'],
    		['WAIT_WORKER', 'Nombre de secondes avant de lancer le service worker', 'integer'],
    		['LOG_LEVEL', 'Niveau de log', 'string'],
    	];
    	
    	$em = $this->getContainer()->get('doctrine')->getManager();
    	$r = $em->getRepository('TrackerBoxBundle:Configuration');
    	foreach( $cs as $c ) {
    		if( $r->findOneBy(array('name' => $c[0])) === null ) {
	    		$conf = new Configuration();
	    		$conf->setName($c[0]);
	    		$conf->setDescription($c[1]);
	    		$conf->setContentType($c[2]);
	    		$em->persist($conf);
    		}
    	}
    	$em->flush();
    }
}