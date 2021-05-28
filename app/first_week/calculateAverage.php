<?php

/*
Реализуйте функцию calculateAverage(), которая высчитывает среднее арифметическое элементов массива.
Благодаря этой функции мы наконец-то посчитаем среднюю температуру по больнице. :)
 */

function calculateAverage($coll)
{
    if (empty($coll)) {
        return 0;
    }

    $sum = 0;
    foreach ($coll as $item) {
        $sum += $item;
    }

    return $sum / count($coll);
}

$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5];

calculateAverage($temperatures); // 38.5