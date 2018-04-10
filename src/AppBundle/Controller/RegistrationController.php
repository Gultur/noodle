<?php

/**
 * Created by PhpStorm.
 * User: toto
 * Date: 09/02/18
 * Time: 16:06
 */

namespace AppBundle\Controller;


use AppBundle\Form\UserType;
use AppBundle\Form\UserUpdateType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;


class RegistrationController extends Controller
{
    /**
     * Register a new user
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request) {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render('security/register.html.twig', array('form' => $form->createView()));
    }

    /**
     * Display every users from the database
     * @Route("/listusers", name="listusers")
     */
    public function listUserAction() {
        $repository = $this->getDoctrine()->getRepository('AppBundle:User');

        $users = $repository->findAll();

        return $this->render('security/listUser.html.twig', array('users'=>$users));
    }

    /**
     * Edit informations for a user
     * @Route("/edituser/{id}", name="edituser")
     */
    public function editAction(Request $request , User $user) {
        $form = $this->createForm(UserUpdateType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            //$user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('success', 'User updated!');
            return $this->redirectToRoute('listusers');
        }
        $formView = $form->createView();
        return $this->render('security/updateUser.html.twig', array('form'=>$formView));
    }
}