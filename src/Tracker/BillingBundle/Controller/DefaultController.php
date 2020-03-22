<?php

namespace Tracker\BillingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tracker\BillingBundle\Entity\Offer;
use Tracker\BillingBundle\Entity\Purchase;
use Tracker\BillingBundle\Form\PurchaseType;

class PaymentController extends Controller
{
    /**
     * Fonction affichant le formulaire
     */ 
    public function displayAction($request = null)
    {
        $step = $request->query->get('step', 1);
        
        switch( $step ) {
            case 1:
                return $this->step1($request);
                break;
        }
        
        return $this->step1($request);
    }
    
    /**
     * Fonction traitnat l'étape 1
     * Le choix de l'offre et de l'option'
     */
    private function step1($request)
    {
        $step = 1;
        $idOffer = $request->query->get('idOffer', 0);
        
        $em      = $this->getDoctrine()->getManager();
        $offers  = $em->getRepository('TrackerBillingBundle:Offer')->findBy(array(), array('name' => 'ASC'));
        $options = $em->getRepository('TrackerBillingBundle:Option')->findBy(array(), array('price' => 'ASC'));
        
        return $this->render('TrackerBillingBundle:Payment:display.html.twig', compact('offers', 'idOffer', 'options', 'step'));
    }
    
    public function processAction()
    {
        
    }
}
