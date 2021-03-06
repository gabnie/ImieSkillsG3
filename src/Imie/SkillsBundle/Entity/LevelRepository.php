<?php

namespace Imie\SkillsBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
* SkillRepository
*
* This class was generated by the Doctrine ORM. Add your own custom
* repository methods below.
*/
class LevelRepository extends EntityRepository
{
  public function getLevelsOrderedById() {
    return $this->createQueryBuilder('l')
    ->orderBy('l.id')
    ->getQuery()
    ->getResult();
  }



  public function getLevelById($id) {
    return $qb = $this->createQueryBuilder('l')
    ->where('l.id = :id')
    ->setParameter('id', $id)
    ->getQuery()
    ->getSingleResult();
  }
}
