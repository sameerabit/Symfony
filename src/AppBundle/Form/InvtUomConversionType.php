<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InvtUomConversionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('factor')
            ->add('lowerUom',EntityType::class, array(
                    'class' => 'AppBundle:InvtUom',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('uom')
                            ->orderBy('uom.description', 'ASC');
                    },
                    'choice_label' => 'description',
                ))
            ->add('uom',EntityType::class, array(
                    'class' => 'AppBundle:InvtUom',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('uom')
                            ->orderBy('uom.description', 'ASC');
                    },
            'choice_label' => 'description'
    ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\InvtUomConversion'
        ));
    }
}
