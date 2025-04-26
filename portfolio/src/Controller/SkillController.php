<?php

namespace App\Controller;

use App\Service\SkillService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request; // 👈 AJOUT ICI
use Symfony\Component\Routing\Annotation\Route;

class SkillController extends AbstractController
{
private SkillService $skillService;

public function __construct(SkillService $skillService)
{
$this->skillService = $skillService;
}

#[Route('/skills', name: 'skills_list')]
public function index(Request $request): Response // 👈 Bien typé maintenant
{
$category = $request->query->get('category');
$year = $request->query->get('year');
$skills = $this->skillService->getFilteredSkills($category, $year);

return $this->render('skill/index.html.twig', [
'skills' => $skills,
'selected_category' => $category,
'selected_year' => $year,
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
}
