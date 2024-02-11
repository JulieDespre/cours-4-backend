<?php

namespace App\Repository;

use App\Entity\ChatNoirBlanc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ChatNoirBlanc>
 *
 * @method ChatNoirBlanc|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChatNoirBlanc|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChatNoirBlanc[]    findAll()
 * @method ChatNoirBlanc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChatNoirBlancRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChatNoirBlanc::class);
    }

//    /**
//     * @return ChatNoirBlanc[] Returns an array of ChatNoirBlanc objects
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

//    public function findOneBySomeField($value): ?ChatNoirBlanc
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
