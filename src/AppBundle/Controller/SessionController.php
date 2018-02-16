<?php
/**
 * Created by PhpStorm.
 * User: gultur
 * Date: 14/02/18
 * Time: 11:02
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Quiz;
use AppBundle\Entity\Session;
use AppBundle\Form\SessionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\User\UserInterface;


class SessionController extends Controller
{
    /**
     * @Route("/createsession/{id}", name="createsession")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createSessionAction (Request $request, UserInterface $user, Quiz $quiz) {
        $session = new Session();

        $form = $this->createForm(SessionType::class, $session);
        $form->add("add",SubmitType::class, array(
            "label" => "Créer"
        ));

        $form->handleRequest($request);

        if($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $session->setAuthor($user);
            //$session->addUser($user);
            $session->setQuiz($quiz);

            $em->persist($session);
            $em->flush();

            return new RedirectResponse($this->generateUrl("loadquiz", array('id' => $session->getId())));
        }

        return $this->render("default/createSession.html.twig", array("form" => $form->createView()));

    }

    /**
     * @Route("/sessionadduser", name="sessionadduser")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addUserAction (Request $request, UserInterface $user) {
        $em = $this->getDoctrine()->getManager();
        //$session = $em->getRepository('AppBundle:Session')->find($idsession);

        $sessionKey = $request->request->get('sessionKey');

        $session = $em->getRepository('AppBundle:Session')->findBy(array('sKey' => $sessionKey));

        if(empty($session)) {
            return $this->render("default/index.html.twig", array('errorSession' => "La clé de session n'est pas valide"));
        } else {
            $file_json = file_get_contents("viewquiz/json/runningQuiz.json");
            $json = json_decode($file_json, true);


            $indexSession = -1;

            $jsonKeys = [];

            foreach ($json as $key => $value) {
                array_push($jsonKeys, $key);
            }
            foreach ($jsonKeys as $i) {

                if ($json[$i]['idSession'] == $session[0]->getId()) {
                    $indexSession = $i;
                }
            }

            if(!in_array($user, $session[0]->getUsers()->toArray())) {
                $session[0]->addUser($user);
                $em->flush();

                array_push($json[$indexSession]['notResponded'], $user->getId());
                $new_json = json_encode($json);
                file_put_contents("viewquiz/json/runningQuiz.json", $new_json);
            }

            return new RedirectResponse($this->generateUrl("viewquiz", array('id' => $session[0]->getId())));
        }
    }

}