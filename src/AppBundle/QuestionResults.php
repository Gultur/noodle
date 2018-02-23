<?php
/**
 * Created by PhpStorm.
 * User: Walim
 * Date: 21/02/2018
 * Time: 21:44
 */

namespace AppBundle;


class QuestionResults
{
    private $question;

    private $studentAnswers;

    private $correctAnswers;

    public function __construct($question, $studentAnswers, $correctAnswers)
    {
        $this->question = $question;
        $this->studentAnswers = $studentAnswers;
        $this->correctAnswers = $correctAnswers;

    }

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param mixed $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @return mixed
     */
    public function getStudentAnswers()
    {
        return $this->studentAnswers;
    }

    /**
     * @param mixed $studentAnswers
     */
    public function setStudentAnswers($studentAnswers)
    {
        $this->studentAnswers = $studentAnswers;
    }

    /**
     * @return mixed
     */
    public function getCorrectAnswers()
    {
        return $this->correctAnswers;
    }

    /**
     * @param mixed $correctAnswers
     */
    public function setCorrectAnswers($correctAnswers)
    {
        $this->correctAnswers = $correctAnswers;
    }


}