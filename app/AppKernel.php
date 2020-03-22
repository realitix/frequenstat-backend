<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Tracker\UserBundle\TrackerUserBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Tracker\StationBundle\TrackerStationBundle(),
            new Tracker\PlaceBundle\TrackerPlaceBundle(),
            new Tracker\PageBundle\TrackerPageBundle(),
            new Tracker\ApiBundle\TrackerApiBundle(),
            new Tracker\CaptureBundle\TrackerCaptureBundle(),
            new Tracker\OuiBundle\TrackerOuiBundle(),
            new Tracker\TicketBundle\TrackerTicketBundle(),
            new Tracker\AdminBundle\TrackerAdminBundle(),
            new Tracker\BillingBundle\TrackerBillingBundle(),
            new Liuggio\ExcelBundle\LiuggioExcelBundle(),
            //new Doctrine\Bundle\DoctrineCacheBundle\DoctrineCacheBundle(),
            new Tracker\BoxBundle\TrackerBoxBundle(),
            new Tracker\AjaxBundle\TrackerAjaxBundle(),
            new Tracker\ObjectBundle\TrackerObjectBundle(),
            new Tracker\TestBundle\TrackerTestBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
