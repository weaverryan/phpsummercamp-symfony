<?php

namespace AppBundle\Service;

class RandomGenerator
{
    private $logger;

    public function __construct($logger)
    {
        $this->logger = $logger;
    }

    public function generateString($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        $this->logger->info('Random string is: '.$randomString);

        return $randomString;
    }
}
