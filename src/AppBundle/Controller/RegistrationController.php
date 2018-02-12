<?php

/**
 * Created by PhpStorm.
 * User: toto
 * Date: 09/02/18
 * Time: 16:06
 */

namespace AppBundle\Controller;


use AppBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;


class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="user_registration")
     *
     * @param Request $request
     */
    public function registerAction(Request $request) {

        // 1) Build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        // 2) handle the submit (will only happen on post)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // 4) save the User
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render(
            'default/register.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Route("/listUser", name="listUser")
     */
    public function listUserAction() {
        $repository = $this->getDoctrine()->getRepository('AppBundle:User');

        $user = $repository->findAll();

        return $this->render('default/userUpdate.html.twig', array('users'=>$user));
    }

    /**
     * @Route("/editUser/{username}", name="editUser")
     */
    public function edit(Request $request , User $user) {

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if($form->handleRequest($request) && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            //$em->persist($user);
            $em->flush();

            return new Response('Modifié !');
        }

        $formView = $form->createView();

        return $this->render('default/userUpdate.html.twig', array('form'=>$formView, 'users'=>$user));
    }

}