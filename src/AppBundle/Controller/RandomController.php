<?php

namespace AppBundle\Controller;

use AppBundle\Service\RandomGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class RandomController extends Controller
{
    /**
     * @Route("/random/{limit}")
     */
    public function indexAction($limit)
    {
        $generator = $this->container->get('random_generator');
        $string = $generator->generateString($limit);

        $this->container->get('logger')->info('Random string is: '.$string);

        return $this->render('Random/index.html.twig', array(
            'string' => $string
        ));
    }
}
