<?php

namespace MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TodoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('content',TextType::class,['required' => false,'attr' => ['class' => 'form-control']])
        ->add('dueDate',TextType::class,['required' => false,'attr' => ['class' => 'form-control datepicker', 'readonly' => 'readonly']])
        ->add('category',EntityType::class,[
            'class' => 'MainBundle:Category',
            'attr' => ['class' => 'form-control']
        ])
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\Todo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mainbundle_todo';
    }


}
