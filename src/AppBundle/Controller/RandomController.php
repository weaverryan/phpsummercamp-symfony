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

        $randomDate = new \DateTime('-'.rand(0, 100).' minutes');

        return $this->render('Random/index.html.twig', array(
            'string' => $string,
            'someDate' => $randomDate,
        ));
    }
}
