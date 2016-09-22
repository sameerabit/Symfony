<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InvtProductLineType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description')
            ->add('productType')
            ->add('valuation')
            ->add('allowBackOrders')
            ->add('allowTradeDiscount')
            ->add('isItemInactive')
            ->add('commisionMethod')
            ->add('commisionRate')
            ->add('baseCommision')
            ->add('rogCotIncres')
            ->add('purchaseTaxClass')
            ->add('salesTaxClass')
            ->add('warrantyCode')
            ->add('productLinecol')
            ->add('allowReturns')
            ->add('deletedat', 'datetime')
            ->add('itemCat')
            ->add('priceCode')
            ->add('uomStanderd')
            ->add('uomSale')
            ->add('uomPurchase')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\InvtProductLine'
        ));
    }
}
