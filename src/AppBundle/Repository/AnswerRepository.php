<?php

namespace AppBundle\Repository;


class AnswerRepository extends \Doctrine\ORM\EntityRepository
{
    /*
     * return the values of the corrects answers from a question
     */
    public function getCorrectsAnswers($question){
        $qb = $this->createQueryBuilder('ans');
        $qb -> select('ans.value')
            ->andWhere('ans.question = :question')
            ->setParameter('question', $question)
            ->andWhere('ans.correct = :correct')
            ->setParameter('correct', 1);

        return $qb->getQuery()->getResult();
    }

}
