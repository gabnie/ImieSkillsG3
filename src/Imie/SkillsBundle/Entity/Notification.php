<?php

namespace Imie\SkillsBundle\Entity;

use Imie\SkillsBundle\Entity\NotificationType;
use Imie\SkillsBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Imie\SkillsBundle\Entity\NotificationRepository")
 */
class Notification {

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
     * @ORM\Column(name="notification_name", type="string", length=255)
     */
    private $notificationName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="notification_date", type="datetime")
     */
    private $notificationDate;

    /**
     * @var string
     * @ORM\Column(name="notification_description", type="string")
     */
    private $notificationDescription;

    /**
     * @var \NotificationType
     * @ORM\ManyToOne(targetEntity="NotificationType")
     */
    private $notificationType;
 

    /**
     * @var \Project
     * @ORM\ManyToOne(targetEntity="Project", inversedBy="projectNotifications")
     */
    private $notificationProject;

    /**
     * @var \User
     * @ORM\ManyToOne(targetEntity="User", inversedBy="sentNotifications")
     */
    private $notificationSender;
    
    /**
     * @var \User
     * @ORM\ManyToOne(targetEntity="User", inversedBy="receivedNotifications")
     */
    private $notificationAdressee;
    

    public function __construct() {
        $this->notificationDate = new \DateTime("now");
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set notificationDate
     *
     * @param \DateTime $notificationDate
     * @return Notification
     */
    public function setNotificationDate($notificationDate) {
        $this->notificationDate = $notificationDate;

        return $this;
    }

    /**
     * Get notificationDate
     *
     * @return \DateTime
     */
    public function getNotificationDate() {
        return $this->notificationDate;
    }

   

    /**
     * Get notificationUser
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNotificationUser() {
        return $this->notificationUser;
    }

    /**
     * Set notificationUser
     *
     * @param \Imie\SkillsBundle\Entity\User $notificationUser
     * @return Notification
     */
    public function setNotificationUser(\Imie\SkillsBundle\Entity\User $notificationUser = null) {
        $this->notificationUser = $notificationUser;

        return $this;
    }

    /**
     * Set notificationProject
     *
     * @param \Imie\SkillsBundle\Entity\Project $notificationProject
     * @return Notification
     */
    public function setNotificationProject(\Imie\SkillsBundle\Entity\Project $notificationProject = null) {
        $this->notificationProject = $notificationProject;

        return $this;
    }

    /**
     * Get notificationProject
     *
     * @return \Imie\SkillsBundle\Entity\Project 
     */
    public function getNotificationProject() {
        return $this->notificationProject;
    }


    /**
     * Set notificationName
     *
     * @param string $notificationName
     * @return Notification
     */
    public function setNotificationName($notificationName)
    {
        $this->notificationName = $notificationName;

        return $this;
    }

    /**
     * Get notificationName
     *
     * @return string 
     */
    public function getNotificationName()
    {
        return $this->notificationName;
    }

    /**
     * Set notificationDescription
     *
     * @param string $notificationDescription
     * @return Notification
     */
    public function setNotificationDescription($notificationDescription)
    {
        $this->notificationDescription = $notificationDescription;

        return $this;
    }

    /**
     * Get notificationDescription
     *
     * @return string 
     */
    public function getNotificationDescription()
    {
        return $this->notificationDescription;
    }

    /**
     * Set notificationType
     *
     * @param \Imie\SkillsBundle\Entity\NotificationType $notificationType
     * @return Notification
     */
    public function setNotificationType(\Imie\SkillsBundle\Entity\NotificationType $notificationType = null)
    {
        $this->notificationType = $notificationType;

        return $this;
    }

    /**
     * Get notificationType
     *
     * @return \Imie\SkillsBundle\Entity\NotificationType 
     */
    public function getNotificationType()
    {
        return $this->notificationType;
    }

    /**
     * Set notificationSender
     *
     * @param \Imie\SkillsBundle\Entity\User $notificationSender
     * @return Notification
     */
    public function setNotificationSender(\Imie\SkillsBundle\Entity\User $notificationSender = null)
    {
        $this->notificationSender = $notificationSender;

        return $this;
    }

    /**
     * Get notificationSender
     *
     * @return \Imie\SkillsBundle\Entity\User 
     */
    public function getNotificationSender()
    {
        return $this->notificationSender;
    }

    /**
     * Set notificationAdressee
     *
     * @param \Imie\SkillsBundle\Entity\User $notificationAdressee
     * @return Notification
     */
    public function setNotificationAdressee(\Imie\SkillsBundle\Entity\User $notificationAdressee = null)
    {
        $this->notificationAdressee = $notificationAdressee;

        return $this;
    }

    /**
     * Get notificationAdressee
     *
     * @return \Imie\SkillsBundle\Entity\User 
     */
    public function getNotificationAdressee()
    {
        return $this->notificationAdressee;
    }
}
