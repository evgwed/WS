<?php

require_once "/var/app/cars/Car.php";
require_once "/var/app/cars/SuperSportCar.php";
require_once "/var/app/cars/SportCar.php";


$car = new Car();
$car->run();

$sportCar = new SportCar();
$sportCar->run();

$sportCar->traitRun();