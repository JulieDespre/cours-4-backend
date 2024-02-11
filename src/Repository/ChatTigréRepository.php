<?php

namespace App\Repository;

use App\Entity\ChatTigré;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ChatTigré>
 *
 * @method ChatTigré|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChatTigré|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChatTigré[]    findAll()
 * @method ChatTigré[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChatTigréRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChatTigré::class);
    }

//    /**
//     * @return ChatTigré[] Returns an array of ChatTigré objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ChatTigré
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
