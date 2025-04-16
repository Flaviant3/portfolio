<?php

namespace App\Controller;

use App\Entity\Skill;
use App\Form\SkillType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Repository\SkillRepository;

class SkillController extends AbstractController
{
    #[Route('/skills', name: 'skills_list')]
    public function index(SkillRepository $skillRepository): Response
    {
        $criticalLearnings = $skillRepository->findAll(); // Récupération des données

        return $this->render('skill/index.html.twig', [
            'skills' => $criticalLearnings, // Transmettre correctement la variable
        ]);
    }

    #[Route('/skill/{id}', name: 'skill_detail')]
    public function detail(int $id, SkillRepository $skillRepository): Response
    {
        $skill = $skillRepository->find($id);

        if (!$skill) {
            throw $this->createNotFoundException("Compétence introuvable.");
        }

        return $this->render('skill/detail.html.twig', [
            'skill' => $skill,
        ]);
    }


    #[Route('/add-critical-learning', name: 'add_critical_learning')]
    public function addCriticalLearning(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $skill = new Skill();
        $form = $this->createForm(SkillType::class, $skill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('uploads_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    throw new \Exception('Erreur lors de l\'upload de l\'image');
                }

                $skill->setImage($newFilename);
            }

            $entityManager->persist($skill);
            $entityManager->flush();

            $this->addFlash('success', 'Apprentissage critique ajouté avec succès !');
            return $this->redirectToRoute('skills_list');
        }

        return $this->render('skill/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
