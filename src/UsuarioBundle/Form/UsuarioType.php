<?php

namespace UsuarioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rut','integer',array(
                'attr' => array( 
                    'class' => 'form_control'
                    )
                )
            )
            
            ->add('dv','text', array(
                'max_length' => 1, 
                'attr' => array( 
                    'class' => 'form_control'
                    )
                )
            )
            
            ->add('nombres','text', array(
                'max_length' => 255, 
                'attr' => array( 
                    'class' => 'form_control'
                    )
                )
            )
            ->add('apPat', 'text', array(
                'max_length' => 50, 
                'attr' => array( 
                    'class' => 'form_control'
                    )
                )
            )
            
            ->add('apMat', 'text', array(
                'max_length' => 50, 
                'attr' => array( 
                    'class' => 'form_control'
                    )
                )
            )
            
            ->add('password','password', array(
                'max_length' => 8, 
                'attr' => array( 
                    'class' => 'form_control'
                    )
                )
            )
            
            ->add('email','email', array(
                'max_length' => 255, 
                'attr' => array( 
                    'class' => 'form_control'
                    )
                )
            )
            
            ->add('imageFile','vich_file',array(
                'required' => false,
                'attr' => array( 
                    'class' => 'form_control'
                    )
                )
            )
            
            //->add('imagenTipo','')
            //->add('path')
            
            ->add('isActive','checkbox', array(
                'attr' => array( 
                    'class' => 'checkbox'
                    )
                )
            )
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UsuarioBundle\Entity\Usuario'
        ));
    }
}
