<?php

namespace Veta\HomeworkBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends EntityRepository
{
    /**
     * @return mixed
     */
    public function findAllOrderedByName()
    {
        $qb = $this->createQueryBuilder('u')
            ->orderBy('u.categoryName', 'ASC')

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
            ->orderBy('u.categoryName', 'ASC')

        ;
        $query = $qb->getQuery();

        return $query->execute();
    }
}
