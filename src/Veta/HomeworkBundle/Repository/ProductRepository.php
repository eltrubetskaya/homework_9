<?php

namespace Veta\HomeworkBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends EntityRepository
{
    /**
     * @return mixed
     */
    public function findAllOrderedByName()
    {
        $qb = $this->createQueryBuilder('u')
            ->orderBy('u.productName', 'ASC')

        ;
        $query = $qb->getQuery();

        return $query->execute();
    }

    /**
     * @return mixed
     */
    public function findAllByPrice($price)
    {
        $qb = $this->createQueryBuilder('u')
            ->where('u.price > :price')
            ->setParameter('price', $price)
            ->orderBy('u.price', 'DESC')

        ;
        $query = $qb->getQuery();

        return $query->execute();
    }

    /**
     * @param $category
     * @return mixed
     */
    public function findAllByCategory($category)
    {
        $qb = $this->createQueryBuilder('u')
            ->where('u.category = :category')
            ->setParameter('category', $category)
            ->orderBy('u.productName', 'ASC')

        ;
        $query = $qb->getQuery();

        return $query->execute();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findOneById($id)
    {
        $qb = $this->createQueryBuilder('u')
            ->where('u.id = :id')
            ->setParameter('id', $id)

        ;
        $query = $qb->getQuery();

        return $query->execute();
    }

    /**
     * @return mixed
     */
    public function findAll()
    {
        $qb = $this->createQueryBuilder('u')
            ->where('u.status = 1')
            ->orderBy('u.productName', 'ASC');
        $query = $qb->getQuery();

        return $query->execute();
    }
}
