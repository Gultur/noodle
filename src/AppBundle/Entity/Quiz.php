<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 *
 * @ORM\Table(name="quiz")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuizRepository")
 */
class Quiz
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
     * @ORM\ManyToMany(targetEntity="Question")
     * @ORM\JoinTable(name="quiz_questions", joinColumns={@ORM\JoinColumn(name="quiz_id", referencedColumnName="id")},
     * inverseJoinColumns={@ORM\JoinColumn(name="question_id", referencedColumnName="id")})
     *
     */
    private $questions;

    /**
     * @ORM\OneToMany(targetEntity="Session", mappedBy="quiz")
     *
     */
    private $sessions;

    public function __construct()
    {
        $this->questions = new ArrayCollection();
    }


    /**
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @param string $name
     *
     * @return quiz
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**

     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return mixed
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * @param mixed $questions
     */
    public function setQuestions($questions)
    {
        $this->questions = $questions;
    }

    public function addQuestion($question){

        $this->questions[] = $question;

    }

    public function removeQuestion($question){

        $this->questions->removeElement($question);

    }

}

