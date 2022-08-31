<?php

namespace App\Repository;

use App\Entity\ProductToProductBundle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductToProductBundle>
 *
 * @method ProductToProductBundle|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductToProductBundle|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductToProductBundle[]    findAll()
 * @method ProductToProductBundle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductToProductBundleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductToProductBundle::class);
    }

    public function add(ProductToProductBundle $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductToProductBundle $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductToProductBundle[] Returns an array of ProductToProductBundle objects
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

//    public function findOneBySomeField($value): ?ProductToProductBundle
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
