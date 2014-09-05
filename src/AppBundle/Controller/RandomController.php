<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomController
{
    /**
     * @Route("/random/{limit}")
     */
    public function indexAction($limit)
    {
        return new Response('<html><body>Number: '.rand(1, $limit).'</body></html>');
    }
}
