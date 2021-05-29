<?php

namespace App\Repository;

use App\Entity\TagStaly;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TagStaly|null find($id, $lockMode = null, $lockVersion = null)
 * @method TagStaly|null findOneBy(array $criteria, array $orderBy = null)
 * @method TagStaly[]    findAll()
 * @method TagStaly[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TagStalyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TagStaly::class);
    }

    // /**
    //  * @return TagStaly[] Returns an array of TagStaly objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TagStaly
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
