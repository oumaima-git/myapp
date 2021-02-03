<?php

namespace App\Form;

use App\Entity\Cabinett;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class PatientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class)
            ->add('cin')
           
            ->add('NumDeFichePatient')
            ->add('Sexe', ChoiceType::class, [
                'choices' => [
                'Homme' => 'H',
                'Femme' => 'F',
                ]
                ])
            ->add('NumDeTelephone')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cabinett::class,
        ]);
    }
}
