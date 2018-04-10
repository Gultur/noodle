<?php

namespace AppBundle\Repository;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;


class UserRepository extends \Doctrine\ORM\EntityRepository //implements UserLoaderInterface
{

    /*
     *
     */
    public function loadUserByUsername($username, $id)
    {
        return $this->createQueryBuilder('u')
            ->where('u.username = :username')
            ->setParameter('username', $username)
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
