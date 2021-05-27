<?php

namespace App\Repository;

use App\Entity\NazwaTagStaly;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NazwaTagStaly|null find($id, $lockMode = null, $lockVersion = null)
 * @method NazwaTagStaly|null findOneBy(array $criteria, array $orderBy = null)
 * @method NazwaTagStaly[]    findAll()
 * @method NazwaTagStaly[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NazwaTagStalyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NazwaTagStaly::class);
    }

    // /**
    //  * @return NazwaTagStaly[] Returns an array of NazwaTagStaly objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NazwaTagStaly
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
