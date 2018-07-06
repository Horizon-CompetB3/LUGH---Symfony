<?php

namespace AppBundle\Form;

use AppBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class InfoEntType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('email', EmailType::class)
            //->add('realisations', FileType::class, array('label' => 'Realisations', 'data_class' => null))
            ->add('adresse', TextType::class)
            ->add('telephone',TextType::class)
            ->add('raisonsociale', TextType::class)
            ->add('siren', TextType::class)
            ->add('siret', TextType::class)
            ->add('telephoneent', TextType::class)
            ->add('adresseent',TextType::class)
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