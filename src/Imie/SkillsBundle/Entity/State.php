<?php

namespace Imie\SkillsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* State
*
* @ORM\Table()
* @ORM\Entity(repositoryClass="Imie\SkillsBundle\Entity\StateRepository")
*/
class State
{
  /**
  * @var integer
  *
  * @ORM\Column(name="id", type="integer")
  * @ORM\Id
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  private $id;

  /**
  * @var string
  *
  * @ORM\Column(name="statut", type="string", length=255)
  */
  private $statut;

  /**
  * Get id
  *
  * @return integer
  */
  public function getId()
  {
    return $this->id;
  }

  /**
  * Set statut
  *
  * @param string $statut
  * @return State
  */
  public function setStatut($statut)
  {
    $this->statut = $statut;

    return $this;
  }

  /**
  * Get statut
  *
  * @return string
  */
  public function getStatut()
  {
    return $this->statut;
  }

}
