<?php

namespace Tracker\PlaceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BoxType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
            	'required' => false,
            	'attr' => array('placeholder' => 'Nom de la box'),
        	    'error_bubbling' => true
            ))
            ->add('serialNumber', 'text', array(
            	'attr' => array('placeholder' => 'Numéro de série'),
        	    'error_bubbling' => true
            ))
            ->add('version', 'text', array(
            	'attr' => array('placeholder' => 'Version'),
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
            'data_class' => 'Tracker\PlaceBundle\Entity\Box'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tracker_placebundle_box';
    }
}
