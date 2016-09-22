<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PumpType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('serialNo')
            ->add('name')
            ->add('idItem',EntityType::class, array(
                'class' => 'AppBundle:InvtItem',
                'label'=>'Item',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('item')
                        ->orderBy('item.description', 'ASC');
                },
                'choice_label' => 'description',
            ))
            ->add('resetValue')
            ->add('status');

    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Pump'
        ));
    }
}
