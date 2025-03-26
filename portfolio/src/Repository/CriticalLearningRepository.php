<?php

namespace App\Repository;

use App\Entity\CriticalLearning;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CriticalLearning|null find($id, $lockMode = null, $lockVersion = null)
 * @method CriticalLearning|null findOneBy(array $criteria, array $orderBy = null)
 * @method CriticalLearning[]    findAll()
 * @method CriticalLearning[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CriticalLearningRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CriticalLearning::class);
    }

    // Récupérer tous les apprentissages d'une catégorie spécifique
    public function findByCategory($category)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.category = :category')
            ->setParameter('category', $category)
            ->orderBy('c.dateCreated', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
