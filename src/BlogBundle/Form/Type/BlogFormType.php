<?php

namespace BlogBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BlogFormType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder->add('title', 'text', array('required' => true))
                //->add('description', 'textarea', array('required' => true, 'attr' => array('class' => 'tinymce')))
                
        ->add('description', 'textarea', array(
                    'required' => true,
                    'attr' => array(
                        'class' => 'tinymce form-control',
                        //'data-theme' => 'bbcode' // Skip it if you want to use default theme
                    )
                ))
                ->add('status', 'choice', array(
                    'choices'  => array('' => 'Select Status', '1' => 'Active', '0' => 'Inactive'),
                    'required' => true,
                ));
                
                
    }

    public function getName() {
        return 'bb_blog';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'BlogBundle\Entity\Blog'
        ));
    }

}
