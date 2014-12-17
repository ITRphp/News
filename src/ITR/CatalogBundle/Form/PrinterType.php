<?php

namespace ITR\CatalogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PrinterType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('type')
            ->add('scanner')
            ->add('fax')
            ->add('printType')
            ->add('format')
            ->add('speed')
            ->add('weight')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ITR\CatalogBundle\Entity\Printer'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'itr_catalogbundle_printer';
    }
}
