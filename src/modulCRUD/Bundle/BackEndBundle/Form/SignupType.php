<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace modulCRUD\Bundle\BackEndBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SignupType extends AbstractType
{
 
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email', ['label'=>'Email Address'])
		->add('username', 'text', ['label'=>'User Name'])
		->add('firstname', 'text', ['label'=>'First Name'])
                ->add('password', 'password',['label'=>'Password'])
                ->add('confirm', 'password', ['mapped' => false,'label'=>'Re-type password'])
        ;
    }
 
    public function getName()
    {
        return 'modul_crud_back_end_sign_up';
    }
 
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'modulCRUD\Bundle\BackEndBundle\Entity\Users',
        ]);
    }
 
}
