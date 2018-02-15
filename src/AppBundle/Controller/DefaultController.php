<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Test;
use AppBundle\Form\TestType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/formenum", name="formenum")
     */
    public function testAction(Request $request){
        $test = new Test();

        $form = $this->createForm(TestType::class, $test);
        $form->add("add",SubmitType::class, array(
            "label" => "Créer"
        ));

        $form->handleRequest($request);

        if($form->isValid()) {
            $em = $this->getDoctrine()->getManager();


            $em->persist($test);

            $em->flush();

            return new RedirectResponse($this->generateUrl("homepage"));
        }

        return $this->render("default/test.html.twig", array("form" => $form->createView()));

    }
}
