<?php

namespace EcoleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PublicController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('EcoleBundle:Public:index.html.twig');
    }

}
