<?php

class SportCar extends Car
{
    use \SuperSportCar
    {
        run as traitRun;
    }

    // Если не описывать данный метод. То объект будет автоматически вызывать метод трейта.
    // Если описать, то метод станит выше по приоритету и будет вызван именно он.
   public function run()
    {
        // Вызов собственного метода
        echo "Sport Car class<br>";

        // Вызов родительского метода
        echo parent::run();

    }
}