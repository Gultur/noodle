<?php
/**
 * Created by PhpStorm.
 * User: toto
 * Date: 13/12/17
 * Time: 10:37
 */

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Answer;
use AppBundle\Entity\Question;
use AppBundle\Entity\Quiz;
use AppBundle\Entity\AnswerUser;
use AppBundle\Entity\User;
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
     * @Route("/viewquiz", name="viewquiz")
     */
    public function quizAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        $file_json = file_get_contents("json/runningQuiz.json");
        $json = json_decode($file_json, true);

        if($request->request->get('loadQuestions') == "success") {

            $json["idsQuestions"] = [];


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

                            shuffle($answersValue);
                            break;
                    }

                    $json["responses"] = $answersValue;

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
                    $json["status"] = $status;

                    $answers = $em->getRepository(Answer::class)->findBy(array('question' => $json['idQuestion'], 'correct' => 1));
                    $correctAnswersValue = [];

                    foreach ($answers as $answer) {
                        array_push($correctAnswersValue, $answer->getValue());
                    }

                    $json["responses"] = $correctAnswersValue;

                    $new_json = json_encode($json);
                    file_put_contents("json/runningQuiz.json", $new_json);
                    break;

                case "endedQuestionHide":

                    $json["status"] = $status;
                    $json["time"] = 0;

                    $new_json = json_encode($json);
                    file_put_contents("json/runningQuiz.json", $new_json);
                    break;

                case "closedQuiz":

                    $json["status"] = $status;

                    $json["idQuestion"] = "";
                    $json["name"] = "";
                    $json["typeQuestion"] = "";
                    $json["question"] = "";
                    $json["responses"] = "";
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
                "responses"=>$request->request->get('responses')));

            // création, ecriture du fichier
            $file = fopen("json/answerStudents.json","w");
            fwrite($file,$reponsejson);
            fclose($file);

            // creation de l'objet answerStudent
            // l'id de la session est arbitrairement mis à 1
            // les sessions n'étant pas encore implémentées

            $em = $this->getDoctrine()->getManager();

            $allUserResponses = $request->request->get('responses');
            $question = $em ->getRepository(Question::class)
                            ->find($request->request->get('idQuestion'));

            $user = $em-> getRepository(User::class)
                        ->find($request->request->get('idStudent'));


            foreach($allUserResponses as $response){
                $answerUser = new AnswerUser();
                $answerUser->setQuestion($question);
                $answerUser->setUser($user);

                $response = htmlspecialchars($response);
                $answerUser->setValue($response);

                $em->persist($answerUser);
                $em->flush();

             }


            return $this->render("default/quiz.html.twig");

        }

        else {
            return $this->render("default/quiz.html.twig");
        }
    }

    /**
     * @Route("/listquiz", name="listquiz")
     */
    public function listQuizAction () {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Quiz');
        $listQuiz = $repository->findAll();

        return $this->render("default/listQuiz.html.twig", array("listQuiz" => $listQuiz));

    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/editquiz/{id}", name="editquiz")
     */
    public function editQuizAction ($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository('AppBundle:Quiz')->find($id);

        $questions = $em->getRepository('AppBundle:Question')->findAll();

        if ($request->request->get('idQuestions')) {
            $idQuestions = $request->request->get('idQuestions');

            foreach ($idQuestions as $idQuestion) {
                $question = $em->getRepository('AppBundle:Question')->find($idQuestion);

                $quiz->addQuestion($question);

            }

            $em->flush();
        }

        return $this->render("default/editQuiz.html.twig", array("quiz" => $quiz, "questions" => $questions));

    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/addquestionstoquiz", name="addquestionstoquiz")
     */
    public function addQuestionsAction (Request $request) {
        if ($request->request->get('idQuiz')) {
            $em = $this->getDoctrine()->getManager();
            $questions = $em->getRepository('AppBundle:Question')->findAll();

            $idQuiz = $request->request->get('idQuiz');

            $quiz = $em->getRepository('AppBundle:Quiz')->find(2);

            if ($request->request->get('idQuestions')) {
                $idQuestions = $request->request->get('idQuestions');

                foreach ($idQuestions as $idQuestion) {
                    $question = $em->getRepository('AppBundle:Question')->find($idQuestion);

                    $quiz->addQuestion($question);

                }

                $em->flush();
            }
            return $this->render("default/editQuiz.html.twig", array("quiz" => $quiz, "questions" => $questions));
        }
    }


    /**
     * @Route("/test", name="test")
     */
    public function testAction(){

        $idQuiz = 1;

        $em = $this->getDoctrine()->getManager();
        $results = $em->getRepository('AppBundle:Question')->getIdQuestionsFromQuiz($idQuiz);
        var_dump($results);
        echo "<br/>";


        var_dump($result2 = $em->getRepository('AppBundle:Question')->getUnusedQuestions($results));

        echo "<br />";

        $resultNeeded = array_map(function($value) { return $value['id']; }, $result2);
        var_dump($resultNeeded);
        echo "<br />";
        $result3 =$em->getRepository('AppBundle:Question')->findBy(array('id' => $resultNeeded));
       // var_dump($em->getRepository('AppBundle:Question')->testArrayQuestion($idQuiz));
        return $this->render("default/displayQuestions.html.twig", array('questions' => $result3));


    }

}