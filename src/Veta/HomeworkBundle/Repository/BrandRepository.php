<?php

namespace Veta\HomeworkBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * BrandRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BrandRepository extends EntityRepository
{
    /**
     * @return mixed
     */
    public function findAllOrderedByName()
    {
        $qb = $this->createQueryBuilder('u')
            ->orderBy('u.brandName', 'ASC')

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
            ->orderBy('u.brandName', 'ASC')

        ;
        $query = $qb->getQuery();

        return $query->execute();
    }
}
