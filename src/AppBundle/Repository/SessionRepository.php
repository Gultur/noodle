<?php

namespace AppBundle\Repository;


class SessionRepository extends \Doctrine\ORM\EntityRepository
{
    /*
     * return all existing session keys
     */
    public function getAllKeys() {
        $result = $this->createQueryBuilder('s')->select('s.sKey')->getQuery()->getArrayResult();

        return $result;
    }

}
