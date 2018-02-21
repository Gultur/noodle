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
use AppBundle\Entity\Session;
use AppBundle\Entity\User;
use AppBundle\Form\QuizType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\User\UserInterface;



class QuizController extends Controller
{


    /**
     * @Route("/createquiz", name="createquiz")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function createQuizAction(Request $request) {

        $quiz = new Quiz();

        $form = $this->createForm(QuizType::class,$quiz);

        //$form->add("Ajouter",SubmitType::class);


        $form->handleRequest($request);

        if($form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($quiz);
            $em->flush();

            return $this->redirectToRoute('editquiz', array('id' => $quiz->getId()));
        }

        $formView = $form->createView();

        return $this->render('default/createQuiz.html.twig', array('form'=>$formView));

    }

    /**
     * @Route("/loadquiz/{id}", name="loadquiz")
     *
     * initialize the quiz before start
     */
    public function loadQuizAction(Request $request, Session $session)
    {
        //$em = $this->getDoctrine()->getManager();

        $file_json = file_get_contents("viewquiz/json/runningQuiz.json");
        $jsonSessions = json_decode($file_json, true);

        $quiz = $session->getQuiz();
        $questions = $quiz->getQuestions();
        $json["idsQuestions"] = [];

        for ($i = 0; $i < count($questions); $i++) {
            $json["idsQuestions"][$i] = $questions[$i]->getId();
        }

        $json["status"] = "closedQuiz";
        $json["projected"] = $session->getProjected();
        $json["idSession"] = $session->getId();
        $json["responded"] = [];
        $json["notResponded"] = [];

        array_push($jsonSessions, $json);

        $new_json = json_encode($jsonSessions);
        file_put_contents("viewquiz/json/runningQuiz.json", $new_json);

        return $this->redirectToRoute('viewquiz', array('id' => $session->getId()), 301);
    }

    /**
     * @Route("/viewquiz/{id}", name="viewquiz")
     *
     * handle all the event during the quiz
     */
    public function quizAction(Request $request, Session $session, UserInterface $user){

        if(!in_array($user, $session->getUsers()->toArray()) && $session->getAuthor() != $user) {
            return $this->redirectToRoute('homepage');
        }

        $file_json = file_get_contents("viewquiz/json/runningQuiz.json");
        $json = json_decode($file_json, true);

        $indexSession = -1;

        $jsonKeys = [];

        foreach ($json as $key => $value) {
            array_push($jsonKeys, $key);
        }
        foreach ($jsonKeys as $i) {

            if ($json[$i]['idSession'] == $session->getId()) {
                $indexSession = $i;
            }
        }

        if($request->request->get('responses')){

            if($request->request->get('idQuestion')){

                // the json is only here for test
                // todo : delete the json section

                $reponsejson = json_encode(array(
                    "idSessions"=>$session->getId(),
                    "idQuestion"=>$request->request->get("idQuestion") ,
                    "idStudent"=>$user->getId(),
                    "responses"=>$request->request->get('responses')));

                $file = fopen("viewquiz/json/answerStudents.json","w");
                fwrite($file, $reponsejson);
                fclose($file);


                $em = $this->getDoctrine()->getManager();

                $allUserResponses = $request->request->get('responses');
                $question = $em ->getRepository(Question::class)
                    ->find($request->request->get('idQuestion'));

                $user = $em-> getRepository(User::class)
                    ->find($user->getId());
                $session = $em->getRepository(Session::class)
                    ->find($session->getId());


                foreach($allUserResponses as $response){
                    $answerUser = new AnswerUser();
                    $answerUser->setQuestion($question);
                    $answerUser->setUser($user);
                    $answerUser->setSession($session);

                    $response = htmlspecialchars($response);
                    $answerUser->setValue($response);

                    $em->persist($answerUser);
                    $em->flush();

                }

                array_push($json[$indexSession]['responded'], $user->getId());
                $json[$indexSession]['notResponded'] = array_diff($json[$indexSession]['notResponded'], [$user->getId()]);

                $new_json = json_encode($json);
                file_put_contents("viewquiz/json/runningQuiz.json", $new_json);
            }

            else {
                var_dump("error");
            }
        }
        else {

            $em = $this->getDoctrine()->getManager();

            $file_json = file_get_contents("viewquiz/json/runningQuiz.json");
            $json = json_decode($file_json, true);

            if ($request->request->get('addTime') == "success") {
                $json[$indexSession]['time'] = $json[$indexSession]['time'] + 10;
                $new_json = json_encode($json);
                file_put_contents("viewquiz/json/runningQuiz.json", $new_json);
            }

            if ($request->request->get('decrementTime') == "success") {
                $json[$indexSession]['time']--;
                $new_json = json_encode($json);
                file_put_contents("viewquiz/json/runningQuiz.json", $new_json);
            }

            if ($request->request->get('decrementDelay') == "success") {
                $json[$indexSession]['delay']--;
                $new_json = json_encode($json);
                file_put_contents("viewquiz/json/runningQuiz.json", $new_json);
            }

            if ($request->request->get('status')) {
                $status = $request->request->get('status');

                switch ($status) {

                    case "delayQuestion":

                        $json[$indexSession]["status"] = $status;

                        $idCurrentQuestion = $json[$indexSession]["idsQuestions"][0];

                        $question = $em->getRepository(Question::class)->find($idCurrentQuestion);

                        $json[$indexSession]["idQuestion"] = $question->getId();
                        $json[$indexSession]["name"] = $question->getName();
                        $json[$indexSession]["typeQuestion"] = $question->getType();
                        $json[$indexSession]["question"] = $question->getQuestion();
                        $json[$indexSession]["delay"] = $session->getDelayQuestion();

                        $json[$indexSession]["notResponded"] = array_merge($json[$indexSession]["notResponded"], $json[$indexSession]["responded"]);
                        $json[$indexSession]["responded"] = [];
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

                        $json[$indexSession]["responses"] = $answersValue;

                        $json[$indexSession]["time"] = $question->getTime();

                        $json[$indexSession]["idsQuestions"] = array_slice($json[$indexSession]["idsQuestions"], 1);

                        $new_json = json_encode($json);
                        file_put_contents("viewquiz/json/runningQuiz.json", $new_json);
                        break;

                    case "runningQuestion":

                        $json[$indexSession]["status"] = $status;

                        $new_json = json_encode($json);
                        file_put_contents("viewquiz/json/runningQuiz.json", $new_json);
                        break;

                    case "endedQuestionShow":
                        $json[$indexSession]["status"] = $status;

                        $answers = $em->getRepository(Answer::class)->findBy(array('question' => $json[$indexSession]['idQuestion'], 'correct' => 1));
                        $correctAnswersValue = [];

                        foreach ($answers as $answer) {
                            array_push($correctAnswersValue, $answer->getValue());
                        }

                        $json[$indexSession]["responses"] = $correctAnswersValue;

                        $new_json = json_encode($json);
                        file_put_contents("viewquiz/json/runningQuiz.json", $new_json);
                        break;

                    case "endedQuestionHide":

                        $json[$indexSession]["status"] = $status;
                        $json[$indexSession]["time"] = 0;

                        $new_json = json_encode($json);
                        file_put_contents("viewquiz/json/runningQuiz.json", $new_json);
                        break;

                    case "closedQuiz":

                        /*$json[$indexSession] = [];
                        $json[$indexSession]["status"] = $status;
                        $json[$indexSession]["idSession"] = $session->getId();*/

                        unset($json[$indexSession]);

                        $new_json = json_encode($json);
                        file_put_contents("viewquiz/json/runningQuiz.json", $new_json);
                        break;

                }
            }
        }

        return $this->render("default/quiz.html.twig",array('indexSession' => $indexSession, 'sessionKey' => $session->getSKey() ));
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
    public function editQuizAction ($id, Request $request,Quiz $quiz) {
        $em = $this->getDoctrine()->getManager();
        $questionRepo = $em->getRepository('AppBundle:Question');

        $questionsInQuiz = $questionRepo->getIdQuestionsFromQuiz($quiz->getId());

        $arrayOfArrayQuestionsNotInQuiz = $questionRepo->getUnusedQuestions($questionsInQuiz);


        $arrayQuestionsNotInQuiz = array_map(function($value) { return $value['id']; }, $arrayOfArrayQuestionsNotInQuiz);

        if(sizeof($questionsInQuiz) == 0) {
            $arrayQuestionsNotInQuiz = $questionRepo->findAll();
        }

        $questionsNotInQuiz = $questionRepo->findBy(array('id' => $arrayQuestionsNotInQuiz));

        /*if ($request->request->get('idQuestions')) {
            $idQuestions = $request->request->get('idQuestions');

            foreach ($idQuestions as $idQuestion) {
                $question = $questionRepo->find($idQuestion);

                $quiz->addQuestion($question);

            }

            $em->flush();

        }*/

        if ($request->request->get('idAddQuestion')) {
            $idQuestion = $request->request->get('idAddQuestion');
            $question = $questionRepo->find($idQuestion);

            $quiz->addQuestion($question);
            $em->flush();
        }

        if ($request->request->get('idRemoveQuestion')) {
            $idQuestion = $request->request->get('idRemoveQuestion');
            $question = $questionRepo->find($idQuestion);

            $quiz->removeQuestion($question);
            $em->flush();
        }


            return $this->render("default/editQuiz.html.twig", array("quiz" => $quiz, "questions" => $questionsNotInQuiz));

    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/addquestionstoquiz", name="addquestionstoquiz")
     *
     * not need anymore, include in editQuizAction
     */
   /* public function addQuestionsAction (Request $request) {
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
    }*/

    /**
     * @Route("/deletequestionfromquiz/{idquestion}/{idquiz}", name="deletequestionfromquiz")
     */
    public function removeQuestionAction(Request $request, $idquestion, $idquiz){
        $em = $this->getDoctrine()->getManager();
        //$idQuiz= $request->query->get("idquiz");
        $quiz = $em->getRepository('AppBundle:Quiz')->find($idquiz);
        $question = $em->getRepository('AppBundle:Question')->find($idquestion);

        $quiz->removeQuestion($question);

        $em->flush();

        return $this->redirectToRoute('editquiz', array('id' => $idquiz));
    }

    /**
     * @Route("/deletequiz/{id}", name="deletequiz")
     *
     */

    public function deleteQuizAction(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository('AppBundle:Quiz')->find($id);
        $em->remove($quiz);
        $em->flush();

        $listQuiz = $em->getRepository('AppBundle:Quiz')->findAll();


        return $this->redirectToRoute('listquiz', array('listQuiz' => $listQuiz));

    }

}