<?php

namespace AppBundle\Service;

class RandomGenerator
{
    public function generateString($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        $this->container->get('logger')->info('Random string is: '.$randomString);

        return $randomString;
    }
}
