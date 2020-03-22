<?php

namespace Tracker\PlaceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Tracker\PlaceBundle\Entity\Place;

class PlaceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
            	'required' => true,
            	'attr' => array('placeholder' => 'Nom du point de vente'),
        	    'error_bubbling' => true
            ))
            ->add('address', 'textarea', array(
            	'attr' => array('placeholder' => 'Adresse'),
        	    'error_bubbling' => true
            ))
            ->add('placeType', 'choice', array(
            	'choices' => array(
            	    Place::TYPE_STATBOX => 'StatBox',
            	    Place::TYPE_STATBOX3D => 'StatBox3D',
            	    Place::TYPE_CROWD => 'Foule',
            	    Place::TYPE_IMPLANTATION => 'Implantation'
            	),
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
            'data_class' => 'Tracker\PlaceBundle\Entity\Place'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tracker_placebundle_place';
    }
}
