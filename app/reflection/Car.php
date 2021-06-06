<?php

class Car
{
    /**
     * @return string
     */
    public function run()
    {
        echo  "Vrum-vrum";
    }
}

$method = new ReflectionMethod('Car', 'run');
var_dump($method->getDocComment());