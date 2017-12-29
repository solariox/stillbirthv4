<?php

namespace App\Form;

use App\Entity\Item;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextAreaType::class)
            ->add('img', FileType::class)
            ->add('description', TextAreaType::class)
            ->add('foundIn', TextAreaType::class)
            ->add('submit', SubmitType::class, [
                'label' => 'Create',
                'attr' => ['class' => 'btn btn-default pull-right'],
            ])
        ;

    }

        public function configureOptions(OptionsResolver $resolver)
        {
            $resolver->setDefaults([
                'data_class' => Item::class,
            ]);
        }
}
