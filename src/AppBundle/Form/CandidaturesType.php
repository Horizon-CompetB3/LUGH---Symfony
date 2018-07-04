<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 03/07/2018
 * Time: 22:38
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use AppBundle\Entity\Candidatures;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class CandidaturesType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class, array(
                'choices'  => array(
                    'Céramique' => 'Céramique',
                    'Plastique' => 'Plastique',
                    'Peinture' => 'Peinture',
                )))
            ->add('titre', TextType::class)
            ->add('croquis', TextType::class)
            ->add('orientation',ChoiceType::class,
                array('choices' => array(
                    'Paysage' => 'paysage',
                    'Aucune' => 'aucune',
                    'Portrait' => 'Portrait',
                ),
                    'choices_as_values' => true,'multiple'=>false,'expanded'=>true))
            ->add('description_candidature', TextareaType::class)
            ->add('theme', TextareaType::class)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('telephone_candidature', TextType::class)
            ->add('date_de_naissance', TextType::class)
            ->add('specialite', TextType::class)
            ->add('formation', TextType::class)
            ->add('site', TextType::class)
            ->add('behance', TextType::class)
            ->add('autre', TextType::class)
            ->add('presentation', TextareaType::class)
            ->add('reference', TextareaType::class)
            ->add('save', SubmitType::class, array(
                'attr' => array('class' => 'save')));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Candidatures::class,
        ));
    }

}