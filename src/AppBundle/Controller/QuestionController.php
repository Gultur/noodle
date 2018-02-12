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
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuestionController extends Controller
{
    /**
     * @Route("/addquestion", name="addquestion")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addAction(Request $request) {


        $question = new Question();

        $form = $this->createForm(QuestionType::class, $question);
        $form->add("add",SubmitType::class, array(
            "label" => "Ajouter"
        ));

        $form->handleRequest($request);

        if($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($question);

            $em->flush();

            return new RedirectResponse($this->generateUrl("homepage"));
        }

        return $this->render("default/addQuestion.html.twig", array("form" => $form->createView()));
    }


    /**
     * @Route("/displayquestions", name="displayquestions")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function displayAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Question');
        $questions = $repository->findAll();

        return $this->render("default/displayQuestions.html.twig", array("questions" => $questions));
    }



    /**
     * @param $id
     * @return RedirectResponse
     * @Route("/deletequestion/{id}", name="deletequestion")
     */
    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $question  = $em->getRepository('AppBundle:Question')->find($id);

        $em->remove($question);
        $em->flush();

        return new RedirectResponse($this->generateUrl("displayquestions"));
    }

}