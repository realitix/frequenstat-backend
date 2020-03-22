<?php
namespace Tracker\PlaceBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Tracker\PlaceBundle\Form\DataTransformer\PolygonToTextTransformer;

class PolygonType extends AbstractType
{
    public function __construct()
    {
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'invalid_message' => 'Le polygone est invalide',
        ));
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $transformer = new PolygonToTextTransformer();
        $builder->addModelTransformer($transformer);
    }

    public function getParent()
    {
        return 'textarea';
    }

    public function getName()
    {
        return 'polygon';
    }
}