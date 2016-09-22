<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PurchaseOrderType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('supplier',EntityType::class, array(
                'class' => 'AppBundle:Supplier',
                'label'=>'Supplier',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('supplier')
                        ->orderBy('supplier.name', 'ASC');
                },
                'choice_label' => 'name',
            ))
        ->add('purchaseOrderDetails',CollectionType::class,array(
                'entry_type' => PurchaseOrderDetailType::class,
                'allow_add'=>true,
                'by_reference' => false
            ))
            ->add('status');
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\PurchaseOrder',
        ));
    }
}
