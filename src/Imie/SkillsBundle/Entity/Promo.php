<?php

namespace Imie\SkillsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * promo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Imie\SkillsBundle\Entity\PromoRepository")
 */
class Promo
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
     * @ORM\Column(name="promoName", type="string", length=255)
     */
    private $promoName;

    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="promo")
     * @ORM\JoinColumn(nullable=true)
     */
    private $users;

    /**
     * @ORM\ManyToOne(targetEntity="Course", inversedBy="promos")
     */
    private $course;

    /**
     * @var string
     *
     * @ORM\Column(name="promoFullName", type="string", length=255)
     *
     */
    private $promoFullName;

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
     * Set promoName
     *
     * @param string $promoName
     * @return promo
     */
    public function setPromoName($promoName)
    {
        $this->promoName = $promoName;

        return $this;
    }

    /**
     * Get promoName
     *
     * @return string
     */
    public function getPromoName()
    {
        return $this->promoName;
    }

    /**
     * Set users
     *
     * @param \Imie\SkillsBundle\Entity\User $users
     * @return Promo
     */
    public function setUsers(\Imie\SkillsBundle\Entity\User $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \Imie\SkillsBundle\Entity\User
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set course
     *
     * @param \Imie\SkillsBundle\Entity\Course $course
     * @return Promo
     */
    public function setCourse(\Imie\SkillsBundle\Entity\Course $course = null)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return \Imie\SkillsBundle\Entity\Course
     */
    public function getCourse()
    {
        return $this->course;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set promoFullName
     *
     * @param string $promoFullName
     * @return Promo
     */
    public function setPromoFullName()
    {
        $this->promoFullName = $this->course->getSchool()->getSchoolName().' - '.$this->course->getCourse().$this->getPromoName();

        return $this;
    }

    /**
     * Get promoFullName
     *
     * @return string
     */
    public function getPromoFullName()
    {
        return $this->promoFullName;
    }

    /**
     * Add users
     *
     * @param \Imie\SkillsBundle\Entity\User $users
     * @return Promo
     */
    public function addUser(\Imie\SkillsBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \Imie\SkillsBundle\Entity\User $users
     */
    public function removeUser(\Imie\SkillsBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }
}
