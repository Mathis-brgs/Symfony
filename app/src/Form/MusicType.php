<?php

namespace App\Form;

use App\Entity\Music;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MusicType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Entrer le nom',
                'attr' => [
                    'placeholder' => 'Nom de la musique',
                    ],
            ])
            ->add('url', TextType::class, [
                'label' => 'Entrer le lien',
                'attr' => [
                    'placeholder' => 'Lien de la musique',
                    ],
            ])
            ->add('author', TextType::class, [
                'label' => 'Entrer auteur',
                'attr' => [
                    'placeholder' => 'Auteur de la musique',
                    ],
            ])
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Music::class,
        ]);
    }
}
