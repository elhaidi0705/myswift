<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/hom")
     */
    public function indexAction()
    {
        return $this->render('HomeBundle:Default:index.html.twig');
    }
}
