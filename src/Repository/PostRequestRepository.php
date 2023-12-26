<?php

namespace App\Repository;

use App\Entity\PostRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PostRequest>
 *
 * @method PostRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method PostRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method PostRequest[]    findAll()
 * @method PostRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PostRequest::class);
    }

//    /**
//     * @return PostRequest[] Returns an array of PostRequest objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PostRequest
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
