<?php

namespace App\Repository;

use App\Entity\Przepis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Przepis|null find($id, $lockMode = null, $lockVersion = null)
 * @method Przepis|null findOneBy(array $criteria, array $orderBy = null)
 * @method Przepis[]    findAll()
 * @method Przepis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrzepisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Przepis::class);
    }

    // /**
    //  * @return Przepis[] Returns an array of Przepis objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Przepis
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
