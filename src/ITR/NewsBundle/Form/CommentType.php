<?php
/**
 * Created by PhpStorm.
 * User: m.veshtort
 * Date: 15.10.2014
 * Time: 16:21
 */

namespace ITR\NewsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommentType extends AbstractType{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', 'textarea', array(
                'label' => false,
                'attr'  => array(
                    'class'=>'form-control col-md-5'
                )
            ))
            ->add('post','submit', array(
                'attr'  => array(
                    'class'=>'btn btn-primary col-md-offset-10 col-md-2'
                )
            ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ITR\NewsBundle\Entity\Comment'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'comment';
    }
} 