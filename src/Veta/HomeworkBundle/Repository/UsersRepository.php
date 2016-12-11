<?php

namespace Veta\HomeworkBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * UsersRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsersRepository extends EntityRepository
{
    /**
     * @return mixed
     */
    public function findAllOrderedByLogin()
    {
        $qb = $this->createQueryBuilder('u')
            ->orderBy('u.login', 'ASC')

        ;
        $query = $qb->getQuery();

        return $query->execute();
    }

    /**
     * @param $email
     * @return mixed
     */
    public function findByEmail($email)
    {
        $qb = $this->createQueryBuilder('u')
            ->where('u.email > :email')
            ->setParameter('email', $email)
            ->orderBy('u.email', 'DESC')

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
            ->orderBy('u.lastName', 'ASC');
        $query = $qb->getQuery();

        return $query->execute();
    }
}
