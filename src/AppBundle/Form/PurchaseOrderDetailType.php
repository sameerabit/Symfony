<?php
namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Created by PhpStorm.
 * User: sameera
 * Date: 9/21/16
 * Time: 2:30 PM
 */

class PurchaseOrderDetailType extends AbstractType{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('idItem',EntityType::class, array(
            'class' => 'AppBundle:InvtItem',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('item')
                    ->orderBy('item.description', 'ASC');
            },
            'choice_label' => 'description',
        ))
            ->add('unit_price')
            ->add('qty')
            ->add('price');

    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\PurchaseOrderDetails'
        ));
    }

}