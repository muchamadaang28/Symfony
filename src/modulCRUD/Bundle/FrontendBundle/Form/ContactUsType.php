<?php

namespace modulCRUD\Bundle\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactUsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text',array('attr'=>array('class'=>'form-control')))
            ->add('email','email',array('attr'=>array('class'=>'form-control')))
            ->add('nohp','number',array('attr'=>array('class'=>'form-control')))
            ->add('companyName','text',array('attr'=>array('class'=>'form-control')))
            ->add('judul','text',array('attr'=>array('class'=>'form-control')))
            ->add('isiPesan','text',array('attr'=>array('class'=>'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'modulCRUD\Bundle\FrontendBundle\Entity\ContactUs'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'modulcrud_bundle_frontendbundle_contactus';
    }
}
