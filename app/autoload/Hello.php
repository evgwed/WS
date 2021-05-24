<?php

namespace App\Autoload;

class Hello
{
    private $greeting;

    public function __construct($greeting)
    {
        $this->greeting = $greeting;
    }

    public function getGreeting()
    {
        return $this->greeting;
    }
}