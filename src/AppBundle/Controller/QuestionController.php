<?php
/**
 * Created by PhpStorm.
 * User: toto
 * Date: 12/12/17
 * Time: 10:26
 */

namespace AppBundle\Controller;

use AppBundle\Form\QuestionType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Question;
use AppBundle\Entity\Answer;
use AppBundle\Entity\Quiz;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\User\UserInterface;


class QuestionController extends Controller
{
    /**
     * Add a question in the database
     * @Route("/addquestion", name="addquestion")
     */
    public function addAction(Request $request, UserInterface $user) {

        $question = new Question();

        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            if(($form->getData()->getTime()) < 5){
                $question->setTime(5);
            }
            $question->setAuthor($user);

            $em->persist($question);

            $em->flush();

            return new RedirectResponse($this->generateUrl("homepage"));
        }

        return $this->render("default/addQuestion.html.twig", array("form" => $form->createView()));
    }


    /**
     * Display every questions from the database
     * @Route("/displayquestions", name="displayquestions")
     */
    public function displayQuestionsAction(Request $request, UserInterface $user) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Question');
        $questions = $repository->findAll();

        $questionsBelonging = $repository->getQuestionsBelongingToCreator($user);
        $questionsNotBelonging = $repository->getQuestionsNotBelongingToCreator($user);

        return $this->render("default/displayQuestions.html.twig", array("questions" => $questions,
            "questionsBelonging" => $questionsBelonging,
            "questionsNotBelonging" => $questionsNotBelonging
            ));
    }



    /**
     * Delete a question in the database
     * @Route("/deletequestion/{id}", name="deletequestion")
     */
    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $question  = $em->getRepository('AppBundle:Question')->find($id);

        /*$quizWithThisQuestion = $em->getRepository('AppBundle:Quiz')->getQuizWithSpecificQuestion( $question);
        foreach ($quizWithThisQuestion as $quiz){
            $quiz->removeQuestion($question);
        }*/

        $quizWithThisQuestion = $question->getQuizes();

        foreach ($quizWithThisQuestion->getIterator() as $i => $quiz){
            $quiz->removeQuestion($question);
        }

        $answerUserWithThisQuestion = $em->getRepository('AppBundle:AnswerUser')->findBy(array('question' => $question));
        foreach ($answerUserWithThisQuestion as $answer){
            $em->remove($answer);
        }

        $em->remove($question);
        $em->flush();

        return new RedirectResponse($this->generateUrl("displayquestions"));
    }

}