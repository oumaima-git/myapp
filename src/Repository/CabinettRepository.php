<?php

namespace App\Repository;

use App\Entity\Cabinett;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cabinett|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cabinett|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cabinett[]    findAll()
 * @method Cabinett[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CabinettRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cabinett::class);
    }

    // /**
    //  * @return Cabinett[] Returns an array of Cabinett objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cabinett
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
