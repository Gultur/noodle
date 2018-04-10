<?php
/**
 * Created by PhpStorm.
 * User: toto
 * Date: 13/12/17
 * Time: 10:35
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{

    /**
     * Handle the login
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }

    /**
     * Render the administration page
     * @Route("/administration", name="administration")
     */
    public function adminAction(Request $request) {
        return $this->render('security/administration.html.twig');

    }

    /**
     * Handle the logout
     * @Route("/logout", name="logout")
     */
    public function logoutAction(Request $request)
    {

    }

}
