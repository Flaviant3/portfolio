<?php

// src/Form/ContactType.php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('name', TextType::class, ['label' => 'Votre nom'])
->add('email', EmailType::class, ['label' => 'Votre email'])
->add('message', TextareaType::class, ['label' => 'Votre message']);
}

public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults([]);
}
}
