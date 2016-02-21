<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function videoAction()
    {
        $test = "haha salut !";
        return $this->render(
            'home/video.html.twig', 
            array('variableTest' => $test)
        );
    }

}
