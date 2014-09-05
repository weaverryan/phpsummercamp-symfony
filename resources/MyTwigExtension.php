<?php

namespace AppBundle\Twig;

class MyTwigExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'my_twig_extension';
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('ago', array($this, 'calculateAgo'))
        );
    }

    public function calculateAgo(\DateTime $dt)
    {
        return 'HALLO!';
    }
}
