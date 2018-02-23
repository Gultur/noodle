<?php
/**
 * Created by PhpStorm.
 * User: gultur
 * Date: 15/02/18
 * Time: 13:08
 */


namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Answer;
use AppBundle\Entity\Question;
use AppBundle\Entity\Quiz;
use AppBundle\Entity\AnswerUser;
use AppBundle\Entity\Session;
use AppBundle\Entity\User;
use AppBundle\QuestionResults;
use AppBundle\Form\QuizType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;


class AnswerUserController extends Controller
{

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/studentresults/{id}", name="studentresults")
     */

    public function studentResultsAction(Request $request, Session $session, UserInterface $user){
        $em = $this->getDoctrine()->getManager();

        $quiz = $em->getRepository('AppBundle:Quiz')->find($session->getQuiz());

        $questions = $quiz->getQuestions();

        $results = new ArrayCollection();

        $studentCorrectAnswers = count($questions);

        for($i=0; $i<count($questions); $i++) {

            $studentAnswers = $em ->getRepository('AppBundle:AnswerUser')
                ->getAnswersForASpecificStudent ($user, $questions[$i], $session);

            $correctsAnswers = $em -> getRepository('AppBundle:Answer')
                ->getCorrectsAnswers($questions[$i]);


            $questionResults = new QuestionResults($questions[$i], $studentAnswers, $correctsAnswers);
            $results->add($questionResults);

            if(empty($studentAnswers)) {
                $studentCorrectAnswers--;
            } else {

                $arrayCorrectAnswers = [];

                foreach ($correctsAnswers as $ca) {
                    array_push( $arrayCorrectAnswers, strtolower($ca["value"]));
                }

                foreach ($studentAnswers as $sa) {
                    if(!in_array(strtolower($sa["value"]), $arrayCorrectAnswers)) {
                        $studentCorrectAnswers--;
                        break;
                    }
                }
            }

        }

        return $this->render('default/studentResults.html.twig', array('results' => $results, 'nbQuestions' => count($questions), 'studentCorrectAnswers' => $studentCorrectAnswers));
    }

}