<?php

// src/Controller/SkillController.php

namespace App\Controller;

use App\Service\SkillService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SkillController extends AbstractController
{
    private SkillService $skillService;

    public function __construct(SkillService $skillService)
    {
        $this->skillService = $skillService;
    }

    #[Route('/skills', name: 'skills_list')]
    public function index(): Response
    {
        $skills = $this->skillService->getAllSkills();

        return $this->render('skill/index.html.twig', [
            'skills' => $skills,
        ]);
    }

    #[Route('/skill/{code}', name: 'skill_detail')]
    public function detail(string $code): Response
    {
        $skill = $this->skillService->getSkillByCode($code);

        if (!$skill) {
            throw $this->createNotFoundException("Compétence introuvable.");
        }

        return $this->render('skill/show.html.twig', [
            'skill' => $skill,
        ]);
    }

    #[Route('/skill/add', name: 'add_skill')]
    public function add(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $code = $request->request->get('code');
            $name = $request->request->get('name');
            $description = $request->request->get('description');

            $this->skillService->addSkill([
                'code' => $code,
                'name' => $name,
                'description' => $description,
            ]);

            $this->addFlash('success', 'Compétence ajoutée avec succès!');
            return $this->redirectToRoute('skills_list');
        }

        return $this->render('skill/add.html.twig');
    }
}
