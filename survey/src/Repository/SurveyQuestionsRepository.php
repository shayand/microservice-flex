<?php

namespace App\Repository;

use App\Entity\SurveyQuestions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SurveyQuestions|null find($id, $lockMode = null, $lockVersion = null)
 * @method SurveyQuestions|null findOneBy(array $criteria, array $orderBy = null)
 * @method SurveyQuestions[]    findAll()
 * @method SurveyQuestions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SurveyQuestionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SurveyQuestions::class);
    }

    // /**
    //  * @return SurveyQuestions[] Returns an array of SurveyQuestions objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SurveyQuestions
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
