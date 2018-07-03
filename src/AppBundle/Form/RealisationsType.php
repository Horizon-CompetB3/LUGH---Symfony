<?php

namespace AppBundle\Form;

use AppBundle\Entity\User;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class RealisationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('documents', CollectionType::class, array(
                'entry_type'   		=> DocumentType::class,
                'prototype'			=> true,
                'allow_add'			=> true,
                'allow_delete'		=> true,
                'by_reference' 		=> false,
                'required'			=> false,
                'label'			=> false,
            ))
            ->add('save', SubmitType::class, array(
        'attr' => array('class' => 'save')));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}