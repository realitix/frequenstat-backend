<?php

namespace Tracker\TicketBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Tracker\TicketBundle\Entity\Ticket;

class TicketType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        	->add('name', 'text', array(
        	    'attr' => array('placeholder' => 'Titre du ticket'),
        	    'error_bubbling' => true
        	))
            ->add('type', 'choice', array(
            	'choices' => array(
            		Ticket::TYPE_TECHNICAL  => 'Technique',
            		Ticket::TYPE_COMMERCIAL => 'Commercial'
            	),
            	'empty_value' => 'Type de support',
            	'error_bubbling' => true
            ))
            ->add('description', 'textarea', array(
                'attr' => array('placeholder' => 'Contenu de votre message'),
                'error_bubbling' => true
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tracker\TicketBundle\Entity\Ticket'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tracker_ticketbundle_ticket';
    }
}
