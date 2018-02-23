<?php

namespace AppBundle\Repository;

use AppBundle\Entity\User;
use AppBundle\Entity\Question;
use AppBundle\Entity\Session;

/**
 * answerUserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AnswerUserRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAnswersForASpecificStudent(User $student, Question $question, Session $session){

        $qb = $this->createQueryBuilder('ans');
        $qb -> select('ans.value')
            ->where('ans.user = :student')
            ->setParameter('student',$student)
            ->andWhere('ans.question = :question')
            ->setParameter('question', $question)
            ->andWhere('ans.session = :session')
            ->setParameter('session', $session)
            ->orderBy('ans.value', 'DESC');

        return $qb->getQuery()->getResult();

    } public function getAnswersForASpecificStudentById($idStudent, $idQuestion, $idSession){

        $qb = $this->createQueryBuilder('ans');
        $qb -> select('ans.value')
            ->where('ans.user = :student')
            ->setParameter('student',$idStudent)
            ->where('ans.question = :question')
            ->setParameter('question', $idQuestion)
            ->where('ans.session = :session')
            ->setParameter('session', $idSession)
            ->orderBy('ans.value', 'DESC');

        return $qb->getQuery()->getResult();

    }


    public function getDistinctsAnswersForAQuestion(Question $question, Session $session){


    }

}
