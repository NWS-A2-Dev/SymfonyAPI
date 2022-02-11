<?php

namespace App\Repository;

use App\Entity\Compote;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Compote|null find($id, $lockMode = null, $lockVersion = null)
 * @method Compote|null findOneBy(array $criteria, array $orderBy = null)
 * @method Compote[]    findAll()
 * @method Compote[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompoteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Compote::class);
    }

    // /**
    //  * @return Compote[] Returns an array of Compote objects
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
    public function findOneBySomeField($value): ?Compote
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
