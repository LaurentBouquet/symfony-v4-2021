<?php

namespace App\Form;

use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class TableChoiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('table_number', ChoiceType::class, 
        ['choices'  => [
            'table de 1' => 1,
            'table de 2' => 2,
            'table de 3' => 3,
            'table de 4' => 4,
            'table de 5' => 5,
            'table de 6' => 6,
            'table de 7' => 7,
            'table de 8' => 8,
            'table de 9' => 9,
            'table de 10' => 10,
        ]])
        ->add('lines_count', IntegerType::class, 
        [
            'attr' => ['style' => "width: 35px;"],
            'data' => 5,
        ])
        ->add('color', ColorType::class)
        // ->add('color', ChoiceType::class, 
        // ['choices'  => [
        //     'Red' => 'red',
        //     'Blue' => 'blue',
        //     'Green' => 'green',
        // ]])
        ->add('Choisir', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
