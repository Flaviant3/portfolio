<?php
namespace App\Service;

class ProjectService
{
    public function getAllProjects(): array
    {
        return [
            ['title' => 'Projet 1', 'description' => 'Description du projet 1'],
            ['title' => 'Projet 2', 'description' => 'Description du projet 2'],
            ['title' => 'Projet 3', 'description' => 'Description du projet 3'],
        ];
    }
}
