<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class RandomController extends Controller
{
    /**
     * @Route("/random/{limit}")
     */
    public function indexAction($limit)
    {
        $number = rand(1, $limit);

        return $this->render('Random/index.html.twig', array(
            'number' => $number
        ));
    }
}
