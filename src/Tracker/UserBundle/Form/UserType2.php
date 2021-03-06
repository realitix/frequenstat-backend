<?php

namespace Tracker\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType2 extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'email', array(
        	    'attr' => array('placeholder' => 'Email', 'class' => 'form-control input-lg'),
        	    'error_bubbling' => true
        	))
            ->add('firstName', 'text', array(
        	    'attr' => array('placeholder' => 'Prénom', 'class' => 'form-control input-lg'),
        	    'error_bubbling' => true
        	))
            ->add('lastName', 'text', array(
        	    'attr' => array('placeholder' => 'Nom', 'class' => 'form-control input-lg'),
        	    'error_bubbling' => true
        	))
        	->add('password', 'repeated', array(
        	    'type' => 'password',
        	    'invalid_message' => 'Les mots de passe doivent correspondre',
        	    'error_bubbling' => true,
        	    'first_options'  => array('always_empty' => false, 'attr' => array('placeholder' => 'Mot de passe', 'class' => 'form-control input-lg')),
        	    'second_options' => array('always_empty' => false, 'attr' => array('placeholder' => 'Répétez le mot de passe', 'class' => 'form-control input-lg')),
        	    'error_bubbling' => true
        	))
            ->add('company', 'text', array(
        	    'attr' => array('placeholder' => 'Société', 'class' => 'form-control input-lg'),
        	    'error_bubbling' => true
        	))
            ->add('phoneNumber1', 'text', array(
        	    'attr' => array('placeholder' => 'Téléphone fixe', 'class' => 'form-control input-lg'),
        	    'error_bubbling' => true
        	))
            ->add('phoneNumber2', 'text', array(
        	    'attr' => array('placeholder' => 'Téléphone mobile', 'class' => 'form-control input-lg'),
        	    'error_bubbling' => true,
        	    'required' => false
        	))
            ->add('address', 'textarea', array(
        	    'attr' => array('placeholder' => 'Adresse', 'class' => 'form-control input-lg'),
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
