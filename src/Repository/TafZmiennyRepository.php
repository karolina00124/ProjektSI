<?php

namespace App\Repository;

use App\Entity\TafZmienny;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TafZmienny|null find($id, $lockMode = null, $lockVersion = null)
 * @method TafZmienny|null findOneBy(array $criteria, array $orderBy = null)
 * @method TafZmienny[]    findAll()
 * @method TafZmienny[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TafZmiennyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TafZmienny::class);
    }

    // /**
    //  * @return TafZmienny[] Returns an array of TafZmienny objects
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
    public function findOneBySomeField($value): ?TafZmienny
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
