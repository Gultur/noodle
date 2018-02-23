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
     * @Route("/register", name="register")
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

            'security/register.html.twig',

            array('form' => $form->createView())
        );
    }

    /**
     * @Route("/listUser", name="listUser")
     */
    public function listUserAction() {
        $repository = $this->getDoctrine()->getRepository('AppBundle:User');

        $user = $repository->findAll();

        return $this->render('security/listUser.html.twig', array('users'=>$user));
    }

    /**
     * @Route("/editUser/{id}", name="editUser")
     */
    public function editAction(Request $request , User $user) {
        $form = $this->createForm(UserUpdateType::class, $user);
        $form->handleRequest($request);
        //$originalPassword = $user->getPassword();
        if($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            //$em->persist($user);
            $em->flush();
            $this->addFlash('success', 'User updated!');
            return $this->redirectToRoute('homepage');
        }
        $formView = $form->createView();
        return $this->render('security/updateUser.html.twig',
            array(
                'form'=>$formView,
                'users'=>$user,
            ));
    }



}