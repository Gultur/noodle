<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Question;


class QuizRepository extends \Doctrine\ORM\EntityRepository
{
    public function getQuizWithSpecificQuestion(Question $question){

        $qb = $this->createQueryBuilder('quiz');
        $qb->select('quiz')
            ->where('quiz.questions = :question')
            -> setParameter('question', $question);

        return $qb->getQuery()->getResult();

    }
}
