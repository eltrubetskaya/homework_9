<?php

namespace Veta\HomeworkBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * FeedbackRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FeedbackRepository extends EntityRepository
{
    /**
     * @return mixed
     */
    public function findAllOrderedByProduct()
    {
        $qb = $this->createQueryBuilder('u')
            ->orderBy('u.product', 'ASC')

        ;
        $query = $qb->getQuery();

        return $query->execute();
    }

    /**
     * @return mixed
     */
    public function findAllOrderedByUser()
    {
        $qb = $this->createQueryBuilder('u')
            ->orderBy('u.user', 'ASC')

        ;
        $query = $qb->getQuery();

        return $query->execute();
    }

    /**
     * @param $user
     * @return mixed
     */
    public function findByUser($user)
    {
        $qb = $this->createQueryBuilder('u')
            ->where('u.user = :user')
            ->setParameter('user', $user)

        ;
        $query = $qb->getQuery();

        return $query->execute();
    }

    /**
     * @param $product
     * @return mixed
     */
    public function findByProduct($product)
    {
        $qb = $this->createQueryBuilder('u')
            ->where('u.product = :product')
            ->setParameter('product', $product)

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
            ->orderBy('u.dateCreate', 'DESC')

        ;
        $query = $qb->getQuery();

        return $query->execute();
    }
}
