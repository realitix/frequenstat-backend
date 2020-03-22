<?php

namespace Tracker\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'email', array(
        	    'attr' => array('placeholder' => 'Email'),
        	    'error_bubbling' => true
        	))
            ->add('firstName', 'text', array(
        	    'attr' => array('placeholder' => 'Prénom'),
        	    'error_bubbling' => true
        	))
            ->add('lastName', 'text', array(
        	    'attr' => array('placeholder' => 'Nom'),
        	    'error_bubbling' => true
        	))
            ->add('company', 'text', array(
        	    'attr' => array('placeholder' => 'Société'),
        	    'error_bubbling' => true
        	))
            ->add('phoneNumber1', 'text', array(
        	    'attr' => array('placeholder' => 'Numéro de téléphone 1'),
        	    'error_bubbling' => true
        	))
            ->add('phoneNumber2', 'text', array(
        	    'attr' => array('placeholder' => 'Numéro de téléphone 2'),
        	    'error_bubbling' => true,
        	    'required' => false
        	))
            ->add('address', 'textarea', array(
        	    'attr' => array('placeholder' => 'Adresse'),
        	    'error_bubbling' => true,
        	    'required' => false
        	));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tracker\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tracker_userbundle_user';
    }
}
