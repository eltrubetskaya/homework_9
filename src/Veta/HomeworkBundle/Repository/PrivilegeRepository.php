<?php

namespace Veta\HomeworkBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PrivilegeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PrivilegeRepository extends EntityRepository
{
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
            ->orderBy('u.privilegeName', 'ASC')

        ;
        $query = $qb->getQuery();

        return $query->execute();
    }
}
