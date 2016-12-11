<?php

namespace Veta\HomeworkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository('VetaHomeworkBundle:Brand')->findAllOrderedByName();

        return $this->render('VetaHomeworkBundle:Default:index.html.twig', [
            'data' => $data,

        ]);
    }
}
