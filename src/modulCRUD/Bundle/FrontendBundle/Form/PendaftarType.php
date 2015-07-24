<?php

namespace modulCRUD\Bundle\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PendaftarType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username','text',array('attr'=>array('class'=>'form-control')))
            ->add('password','password',array('attr'=>array('class'=>'form-control')))
            ->add('email','email',array('attr'=>array('class'=>'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'modulCRUD\Bundle\FrontendBundle\Entity\Pendaftar'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'modulcrud_bundle_frontendbundle_pendaftar';
    }
}
