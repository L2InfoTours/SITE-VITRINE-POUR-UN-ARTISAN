<?php

namespace App\Repository;

use App\Entity\ContractuelHisto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ContractuelHisto|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContractuelHisto|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContractuelHisto[]    findAll()
 * @method ContractuelHisto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContractuelHistoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContractuelHisto::class);
    }

    // /**
    //  * @return ContractuelHisto[] Returns an array of ContractuelHisto objects
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
    public function findOneBySomeField($value): ?ContractuelHisto
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
