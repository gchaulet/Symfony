<?php

namespace App\Service;

use Psr\Log\LoggerInterface;


class Greeting
{

    /**
     *@var LoggerInterface $loggerInterface 
     */ 
    private $loggerInterface;
    
    
    public function __construct(LoggerInterface $loggerInterface)
    {
       $this->loggerInterface = $loggerInterface;
    }

    public function greet($name)
    {
        $this->loggerInterface->info('I m connected');

        return "Hello $name";
    }
}