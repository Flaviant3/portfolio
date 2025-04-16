<?php

namespace App\Form;

use App\Entity\Project;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityManagerInterface;

class ProjectType extends AbstractType
{
    private $categoryRepository;

    // Injection du repository Category dans le constructeur
    public function __construct(EntityManagerInterface $entityManager)
    {
        // On récupère le repository de Category
        $this->categoryRepository = $entityManager->getRepository(Category::class);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre du projet'
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description'
            ])
            ->add('dateCreated', DateTimeType::class, [
                'label' => 'Date de création',
                'widget' => 'single_text',
                'attr' => ['readonly' => true], // Date de création en lecture seule
            ])
            ->add('image', FileType::class, [
                'label' => 'Image du projet',
                'mapped' => false,
                'required' => false,
            ])
            ->add('category', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices' => $this->getCategories(),
                'choice_label' => function (?Category $category) {
                    return $category ? $category->getName() : '';
                },
                'placeholder' => 'Choisissez une catégorie',
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Ajouter le projet',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }

    // Récupérer les catégories existantes pour les afficher dans le formulaire
    private function getCategories(): array
    {
        $categories = [];
        $categoriesList = $this->categoryRepository->findAll();

        foreach ($categoriesList as $category) {
            $categories[$category->getName()] = $category;
        }

        return $categories;
    }
}
