<?php
/**
 * Created by PhpStorm.
 * User: toto
 * Date: 13/12/17
 * Time: 10:37
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Answer;
use AppBundle\Entity\Question;
use AppBundle\Entity\Quiz;
use AppBundle\Entity\AnswerUser;
use AppBundle\Form\QuizType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;


class QuizController extends Controller
{
    /**
     * @Route("/createquiz", name="createquiz")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createQuizAction(Request $request) {

        $quiz = new Quiz();

        $form = $this->createForm(QuizType::class,$quiz);
        $form->add("Ajouter",SubmitType::class);


        $form->handleRequest($request);

        if($form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($quiz);
            $em->flush();

            return new RedirectResponse($this->generateUrl("homepage"));
        }

        $formView = $form->createView();

        return $this->render('default/createQuiz.html.twig', array('form'=>$formView));
    }

    /**
     * @Route("/updateQuiz", name="updateQuiz")
     *
     *
     */
    public function updateQuizAction() {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Quiz');

        $results = $repository->findAll();

        //var_dump($results);

        $questions = array (
            "1" => array("1", "Question 1", "Simple"),
            "2" => array("2", "Question 2", "Simple"),
            "3" => array("3", "Question 3", "Multiple")
        );

        //var_dump($questions);

        return $this->render('default/updateQuiz.html.twig',
            array('arrayQuiz'=>$results,'arrayQuestions'=>$questions));

    }


    /**
     * @Route("/viewquiz", name="viewquiz")
     */
    public function quizAction(Request $request){

        $file_json = file_get_contents("json/runningQuiz.json");
        $json = json_decode($file_json, true);

        if($request->request->get('loadQuestions') == "success") {

            $json["idsQuestions"] = [];

            $em = $this->getDoctrine()->getManager();
            $questions = $em->getRepository(Question::class)->findAll();

            for($i=0 ; $i<count($questions); $i++) {
                $json["idsQuestions"][$i] = $questions[$i]->getId();
            }

            $new_json = json_encode($json);
            file_put_contents("json/runningQuiz.json", $new_json);
        }

        if($request->request->get('addTime') == "success") {
            $json['time'] = $json['time'] + 10;
            $new_json = json_encode($json);
            file_put_contents("json/runningQuiz.json", $new_json);
        }

        if($request->request->get('decrementTime') == "success") {
            $json['time']--;
            $new_json = json_encode($json);
            file_put_contents("json/runningQuiz.json", $new_json);
        }

        if($request->request->get('decrementDelay') == "success") {
            $json['delay']--;
            $new_json = json_encode($json);
            file_put_contents("json/runningQuiz.json", $new_json);
        }

        if($request->request->get('status')) {
            $status = $request->request->get('status');

            switch ($status) {

                case "delayQuestion":

                    $json["status"] = $status;

                    $idCurrentQuestion = $json["idsQuestions"][0];

                    $em = $this->getDoctrine()->getManager();
                    $question = $em->getRepository(Question::class)->find($idCurrentQuestion);

                    $json["idQuestion"] = $question->getId();
                    $json["name"] = $question->getName();
                    $json["typeQuestion"] = $question->getType();
                    $json["question"] = $question->getQuestion();

                    $answersValue = [];

                    switch ($question->getType()) {
                        case "multipleChoicesRadio":
                        case "multipleChoicesCheckBox":

                            $answers = $em->getRepository(Answer::class)->findBy(array('question' => $question));

                            foreach ($answers as $answer) {
                                array_push($answersValue, $answer->getValue());
                            }
                            break;
                    }

                    shuffle($answersValue);

                    $json["response"] = $answersValue;

                    $json["time"] = $question->getTime();
                    $json["delay"] = 5;

                    $json["idsQuestions"] = array_slice($json["idsQuestions"], 1);

                    $new_json = json_encode($json);
                    file_put_contents("json/runningQuiz.json", $new_json);
                    break;

                case "runningQuestion":

                    $json["status"] = $status;

                    $new_json = json_encode($json);
                    file_put_contents("json/runningQuiz.json", $new_json);
                    break;

                case "endedQuestionShow":
                case "endedQuestionHide":

                    $json["status"] = $status;
                    $json["time"] = 0;

                    $new_json = json_encode($json);
                    file_put_contents("json/runningQuiz.json", $new_json);
                    break;

                case "closedQuiz":

                    $json["status"] = $status;

                    $json["idQuestion"] = "1";
                    $json["name"] = "";
                    $json["typeQuestion"] = "";
                    $json["question"] = "";
                    $json["response"] = "";
                    $json["time"] = 0;
                    $json["delay"] = 5;

                    $json["idsQuestions"] = [];

                    $new_json = json_encode($json);
                    file_put_contents("json/runningQuiz.json", $new_json);
                    break;

            }
        }

        return $this->render("default/quiz.html.twig");
    }

    /**
     * @param $request
     * @Route("/responsequestion", name="responsequestion")
     */
    public function responseAction(Request $request){

        //on verifie qu'il y a bien eu quelque chose d'envoyé

        if($request->request->get('idQuestion')){

            // on créé un json correspondant pour l'écrire dans un fichier
            // en attentant les requetes en bases de données


            $reponsejson = json_encode(array("idQuestion"=>$request->request->get("idQuestion") ,
                "idStudent"=>$request->request->get('idStudent') ,
                "response"=>$request->request->get('response')));

            // création, ecriture du fichier
            $file = fopen("answerStudents.json","w");
            fwrite($file,$reponsejson);
            fclose($file);

            // creation de l'objet answerStudent
            // l'id de la session est arbitrairement mis à 1
            // les sessions n'étant pas encore implémentées
            $reponse = htmlspecialchars($request->request->get('reponse'));
            $rs = new AnswerUser();
            $rs->setIdSession(1);
            $rs->setIdQuestion($request->request->get('questionid'));
            $rs->setIdUser($request->request->get('idetudiant'));
            $rs->setReponse($reponse);

            $em = $this->getDoctrine()->getManager();
            $em->persist($rs);

            $em->flush();

            return $this->render("default/quiz.html.twig", array('reponse' => $reponse));

        }

        else {
            return $this->render("default/quiz.html.twig");
        }
    }
}