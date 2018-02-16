<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SessionRepository")
 */
class Session
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="s_key", type="string", unique=true)
     */
    private $sKey;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="author", referencedColumnName="id")
     */
    private $author;

    /**
     * @var int
     *
     * @ORM\Column(name="delay_question", type="integer")
     */
    private $delayQuestion;

    /**
     * @var bool
     *
     * @ORM\Column(name="projected", type="boolean")
     */
    private $projected;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="Quiz", inversedBy="sessions")
     * @ORM\JoinColumn(name="quiz_id", referencedColumnName="id")
     */
    private $quiz;

    /**
     * @ORM\ManyToMany(targetEntity="User")
     * @ORM\JoinTable(name="sessions_users", joinColumns={@ORM\JoinColumn(name="session_id", referencedColumnName="id")},
     * inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")})
     *
     */
    private $users;

    public function __construct() {
        $this->setCreatedAt(new \DateTime('NOW'));
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Session
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set sKey
     *
     * @param string $sKey
     *
     * @return Session
     */
    public function setSKey($sKey)
    {
        $this->sKey = $sKey;

        return $this;
    }

    /**
     * Get sKey
     *
     * @return string
     */
    public function getSKey()
    {
        return $this->sKey;
    }

    /**
     * Set author
     *
     * @param User $author
     *
     * @return Session
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return User
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set delayQuestion
     *
     * @param integer $delayQuestion
     *
     * @return Session
     */
    public function setDelayQuestion($delayQuestion)
    {
        $this->delayQuestion = $delayQuestion;

        return $this;
    }

    /**
     * Get delayQuestion
     *
     * @return int
     */
    public function getDelayQuestion()
    {
        return $this->delayQuestion;
    }

    /**
     * Set projected
     *
     * @param boolean $projected
     *
     * @return Session
     */
    public function setProjected($projected)
    {
        $this->projected = $projected;

        return $this;
    }

    /**
     * Get projected
     *
     * @return bool
     */
    public function getProjected()
    {
        return $this->projected;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Session
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return mixed
     */
    public function getQuiz()
    {
        return $this->quiz;
    }

    /**
     * @param mixed $quiz
     */
    public function setQuiz($quiz)
    {
        $this->quiz = $quiz;
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param mixed $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }

    public function addUser($user){

        $this->users[] = $user;

    }

    public function removeUser($user){

        $this->users->removeElement($user);

    }


}

