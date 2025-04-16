<?php

// src/Service/SkillService.php

namespace App\Service;

class SkillService
{
    private array $skills = [
        [
            'code' => 'AC1001',
            'name' => 'Compétence 1',
            'description' => 'Description de la compétence 1',
        ],
        [
            'code' => 'AC1002',
            'name' => 'Compétence 2',
            'description' => 'Description de la compétence 2',
        ],
        [
            'code' => 'AC1003',
            'name' => 'Compétence 3',
            'description' => 'Description de la compétence 3',
        ]
    ];

    public function getAllSkills(): array
    {
        return $this->skills;
    }

    public function addSkill(array $skillData): void
    {
        $this->skills[] = $skillData;
    }

    public function getSkillByCode(string $code): ?array
    {
        foreach ($this->skills as $skill) {
            if ($skill['code'] === $code) {
                return $skill;
            }
        }
        return null;
    }
}
