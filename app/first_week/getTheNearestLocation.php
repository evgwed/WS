<?php

/*
Реализуйте функцию getTheNearestLocation(), которая находит место ближайшее к указанной точке на карте и возвращает его. Параметры функции:
$locations – массив мест на карте. Каждое место это массив из двух элементов, где первый элемент это название места, второй – точка на карте (массив из двух чисел x и y).
$point – текущая точка на карте. Массив из двух элементов-координат x и y.
 */

function getDistance(array $point1, array $point2)
{
    [$x1, $y1] = $point1;
    [$x2, $y2] = $point2;

    $xs = $x2 - $x1;
    $ys = $y2 - $y1;

    return sqrt($xs ** 2 + $ys ** 2);
}

function getTheNearestLocation(array $locations, array $currentPoint)
{
    if (empty($locations)) {
        return null;
    }

    [$nearestLocation] = $locations;
    [, $nearestPoint] = $nearestLocation;
    $lowestDistance = getDistance($currentPoint, $nearestPoint);

    foreach ($locations as $location) {
        [, $point] = $location;
        $distance = getDistance($currentPoint, $point);

        if ($distance < $lowestDistance) {
            $lowestDistance = $distance;
            $nearestLocation = $location;
        }
    }

    return $nearestLocation;
}

$locations = [
    ['Park', [10, 5]],
    ['Sea', [1, 3]],
    ['Museum', [8, 4]],
];

$currentPoint = [5, 5];

// Если точек нет, то возвращается null
getTheNearestLocation([], $currentPoint); // null

getTheNearestLocation($locations, $currentPoint); // ['Museum', [8, 4]]
