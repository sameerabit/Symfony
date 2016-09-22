<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InvtItemType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('description')
            ->add('standerdPrice')
            ->add('retailPrice')
            ->add('reorderPoint')
            ->add('reorderQuantity')
            ->add('invtProductLine',EntityType::class, array(
                'class' => 'AppBundle:InvtProductLine',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('pl')
                        ->orderBy('pl.description', 'ASC');
                },
                'choice_label' => 'description',
            ))
            ->add('itemCat',EntityType::class, array(
                'class' => 'AppBundle:InvtItemCat',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('cat')
                        ->orderBy('cat.name', 'ASC');
                },
                'choice_label' => 'name',
            ))
            ->add('uomSale',EntityType::class, array(
                'class' => 'AppBundle:InvtUom',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('uom')
                        ->orderBy('uom.description', 'ASC');
                },
                'choice_label' => 'description',
            ))
            ->add('uomStanderd',EntityType::class, array(
                'class' => 'AppBundle:InvtUom',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('uom')
                        ->orderBy('uom.description', 'ASC');
                },
                'choice_label' => 'description',
            ))
            ->add('uomPurchase',EntityType::class, array(
                'class' => 'AppBundle:InvtUom',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('uom')
                        ->orderBy('uom.description', 'ASC');
                },
                'choice_label' => 'description',
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\InvtItem'
        ));
    }
}
