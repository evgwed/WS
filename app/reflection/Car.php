<?php

/**
 * Class Car
 */
class Car
{

    /**
     * @return void
     */
    public function run()
    {
        echo  "Vrum-vrum";
    }
}

$method = new ReflectionMethod('Car', 'run');
var_dump($method->getDocComment());