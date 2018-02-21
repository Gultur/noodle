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
use AppBundle\Form\QuizType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;


class AnswerUserController extends Controller
{

    /**
     * @Route("/responsequestion/", name="blaresponsequestion")
     *
     */
    public function responseAction(Request $request){

        $idSession = $request->request->get("idSession");
        //$idSession = $this->getDoctrine()->getManager()->getRepository("AppBundle:Session")->find($session)->getId();

        //on verifie qu'il y a bien eu quelque chose d'envoyé

        if($request->request->get('idQuestion')){

            // on créé un json correspondant pour l'écrire dans un fichier
            // en attentant les requetes en bases de données


            $reponsejson = json_encode(array(
                "idSessions"=>$request->request->get("idSession"),
                "idQuestion"=>$request->request->get("idQuestion") ,
                "idStudent"=>$request->request->get('idStudent') ,
                "responses"=>$request->request->get('responses'),
                "indexSession"=>$request->request->get('indesSession')));

            // création, ecriture du fichier
            $file = fopen("viewquiz/json/answerStudents.json","w");
            fwrite($file, $reponsejson);
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
            $session = $em->getRepository(Session::class)
                ->find($request->request->get('idSession'));


            foreach($allUserResponses as $response){
                $answerUser = new AnswerUser();
                $answerUser->setQuestion($question);
                $answerUser->setUser($user);
                //$answerUser->setSession($user);

                $response = htmlspecialchars($response);
                $answerUser->setValue($response);

                $em->persist($answerUser);
                $em->flush();

            }


            return $this->render("default/quiz.html.twig", array('id' => $idSession));

        }

        else {
            return $this->render("default/quiz.html.twig", array('id' => $idSession));
        }
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/results", name="studentresults")
     */

    public function testResult(Request $request){


        $id = $request->query->get('id');

        $em = $this->getDoctrine()->getManager();

        $session = $em->getRepository('AppBundle:Session')->find($id);
        $user = $em->getRepository('AppBundle:User')->find(5);
        $question = $em->getRepository('AppBundle:Question')->find(26);

        $answers = $em ->getRepository('AppBundle:AnswerUser')
            ->getAnswersForASpecificStudent ($user, $question, $session);

        $correctsAnswers = $em -> getRepository('AppBundle:Answer')
            ->getCorrectsAnswers($question);


        return $this->render('default/test.html.twig', array('answers' => $answers, 'question' => $question, 'corrects' => $correctsAnswers));
    }

}