<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function videoAction()
    {
        return $this->render('AppBundle:Home:video.html.twig', array(
            // ...
        ));
    }

}
