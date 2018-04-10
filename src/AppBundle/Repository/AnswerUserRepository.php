<?php

namespace AppBundle\Repository;

use AppBundle\Entity\User;
use AppBundle\Entity\Question;
use AppBundle\Entity\Session;


class AnswerUserRepository extends \Doctrine\ORM\EntityRepository
{
    /*
     * return the values of the answers of a student
     */
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

    }

    public function getCountAnswersForSpecificQuestion(Question $question, Session $session, $answer) {
        $qb = $this->createQueryBuilder('ans');
        $qb -> select('count(ans.value)')
            -> where('ans.session = :session')
            -> setParameter('session', $session)
            -> andWhere('ans.question = :question')
            -> setParameter('question', $question)
            -> andWhere('ans.value = :answer')
            -> setParameter('answer', $answer);

        return $qb->getQuery()->getSingleScalarResult();

    }

    public function getStudentsAnswersForSpecificQuestion(Question $question, Session $session) {
        $qb = $this->createQueryBuilder('ans');
        $qb -> select('ans.value')
            -> where('ans.session = :session')
            -> setParameter('session', $session)
            -> andWhere('ans.question = :question')
            -> setParameter('question', $question)
            -> distinct();

        return $qb->getQuery()->getResult();
    }

}
