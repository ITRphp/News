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
            ->add('title')
            ->add('author')
            ->add('description')
            ->add('category')
            ->add('content', 'textarea',array(
                'attr'=> array(
                    'class' => 'tinymce'
                    )))
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
