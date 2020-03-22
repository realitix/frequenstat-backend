<?php
namespace Tracker\OuiBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Tracker\OuiBundle\Entity\Organization;

class UpdateCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('tracker:oui:update')
            ->setDescription('Update all the mac adresses')
        ;
    }

    /**
     * On télécharge le fichier oui dans le dossier temporaire
     * Ensuite on le parse ligne à ligne
     * Chaque ligne contenant le bon pattern est récupéré
     * On vérifie s'il est déjà enregistré, si non on le rajoute'
    */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getEntityManager();
        $repo = $em->getRepository('TrackerOuiBundle:Organization');

        // We download the file
        $fileName = '/tmp/oui_'.mt_rand(0, 10000).'.txt';
        $this->downloadFile("http://standards.ieee.org/develop/regauth/oui/oui.txt", $fileName);
        
        // We read the file line by line
        $handle = fopen($fileName, "r");
        if( $handle ) {
            while( ($buffer = fgets($handle)) !== false ) 
            {
                if( strpos($buffer, '(hex)') !== false ) 
                {
                    // On remplace les tirets par des :
                    $mac  = str_replace('-', ':', substr($buffer, 2, 8));
                    $name = trim(substr($buffer, 20));
                    
                    // On vérifie si l'entrée existe déjà, si non on l'ajoute
                    $o = $repo->findByMac($mac);
                    if( !$o )
                    {
                        $o = new Organization();
                        $o->setMac($mac);
                        $o->setName($name);
                        $em->persist($o);
                        $em->flush();
                    }
                }
                
            }
            fclose($handle);
        }
        
        unlink($fileName);
    }

    private function downloadFile($url, $path) {
        $newfname = $path;
        $file = fopen ($url, "rb");
        
        if( $file ) {
            $newf = fopen ($newfname, "wb");
            if ($newf)
                while(!feof($file)) 
                    fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
        }
        else
            exit("Impossible de télécharger le fichier oui.txt");
        
        if ($file) 
            fclose($file);
        if ($newf) 
            fclose($newf);
    }
}