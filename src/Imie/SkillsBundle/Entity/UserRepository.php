<?php

namespace Imie\SkillsBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository {

    public function getUsersOrderedById() {
        return $this->createQueryBuilder('u')
                        ->orderBy('u.id')
                        ->getQuery()
                        ->getResult();
    }

    public function getUsersByNames($name) {
        return $this->createQueryBuilder('u')
                        ->where('u.userFullName LIKE :name')
                        ->setParameter('name', '%'.$name.'%')
                        ->getQuery()
                        ->getResult();
    }

    public function getUsersBySkill($skill) {
        return $this->createQueryBuilder('u')
                        ->where('u.skills.skillName LIKE :skill')
                        ->setParameter('skill', '%'.$skill.'%')
                        ->getQuery()
                        ->getResult();
    }

    public function getUsersById($ids) {
        $qb = $this->createQueryBuilder('u');
        $qb->where($qb->expr()->in('u.id', $ids));
        return $qb->getQuery()->getResult();
    }

    public function getUserById($id) {
        return $qb = $this->createQueryBuilder('u')
                ->where('u.id = :id')
                ->setParameter('id', $id)
                ->getQuery()
                ->getSingleResult();
    }

    public function getUsersByPromoId($id) {
        return $qb = $this->createQueryBuilder('u')
            ->where('u.promo = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }

}
