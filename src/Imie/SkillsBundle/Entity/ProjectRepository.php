<?php

namespace Imie\SkillsBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
* ProjectRepository
*
* This class was generated by the Doctrine ORM. Add your own custom
* repository methods below.
*/
class ProjectRepository extends EntityRepository {

  public function getProjectsOrderedById() {
    return $this->createQueryBuilder('p')
    ->orderBy('p.id')
    ->getQuery()
    ->getResult();
  }
  public function getProjectsByNames($name) {
    return $this->createQueryBuilder('p')
    ->where('p.projectName LIKE :name')
    ->setParameter('name', '%'.$name.'%')
    ->getQuery()
    ->getResult();
  }

  public function getProjectsById($ids) {
    $qb = $this->createQueryBuilder('p');
    $qb->where($qb->expr()->in('p.id', $ids));
    return $qb->getQuery()->getResult();
  }

  public function getProjectById($id) {
    return $this->createQueryBuilder('p')
    ->where('p.id = :id')
    ->setParameter('id', $id)
    ->getQuery()
    ->getSingleResult();
  }

}
