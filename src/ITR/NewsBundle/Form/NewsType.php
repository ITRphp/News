<?php

namespace ITR\NewsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {//date("Y-m-d H:i:s")

        $builder
            ->add('title','text',array(
                'attr'=> array(
                    'class' => 'form-control'
                    )))
            ->add('author','text',array(
                'attr'=> array(
                    'class' => 'form-control'
                    )))
            ->add('description','text',array(
                'attr'=> array(
                    'class' => 'form-control'
                    )))
            ->add('category','entity',array(
                'class' => 'NewsBundle:Category',
                'required' => true,
                'empty_value' => 'Choose news category',
                'attr'=> array(
                    'class' => 'form-control'
                    )))
            ->add('content', 'textarea',array(
                'label' => ' '))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ITR\NewsBundle\Entity\News'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'itr_newsbundle_news';
    }
}
