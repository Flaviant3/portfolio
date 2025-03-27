<?php

// src/Form/SkillType.php

namespace App\Form;

use App\Entity\Skill;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SkillType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options): void
{
$builder
->add('title', TextType::class, [
'label' => 'Titre de l\'apprentissage critique'
])
->add('description', TextareaType::class, [
'label' => 'Description'
])
->add('image', FileType::class, [
'label' => 'Image',
'mapped' => false,
'required' => false,
])
->add('category', EntityType::class, [
'class' => Category::class,
'choice_label' => 'name',
'placeholder' => 'Choisissez une catégorie',
'label' => 'Catégorie'
])
->add('submit', SubmitType::class, [
'label' => 'Ajouter l\'apprentissage critique'
]);
}

public function configureOptions(OptionsResolver $resolver): void
{
$resolver->setDefaults([
'data_class' => Skill::class,
]);
}
}
