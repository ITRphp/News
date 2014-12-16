<?php

namespace ITR\CatalogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SellerType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('address')
            ->add('email', 'email')
            ->add('skype')
            ->add('schedule')
            ->add('number','text')
            ->add('description', 'textarea')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ITR\CatalogBundle\Entity\Seller'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'itr_catalogbundle_seller';
    }
}
