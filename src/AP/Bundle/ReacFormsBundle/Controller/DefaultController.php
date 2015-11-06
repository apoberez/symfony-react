<?php

namespace AP\Bundle\ReacFormsBundle\Controller;

use AP\Bundle\ReacFormsBundle\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController
 * @package AP\Bundle\ReacFormsBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Route(name="/")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $form = $this->get('form.factory')->create(new PostType());
        $view = $form->createView();
        return new JsonResponse(['test' => 1]);
    }
}
