<?php

/*
ализуйте функцию getSameParity, которая принимает на вход массив чисел и возвращает новый,
состоящий из элементов, у которых такая же чётность, как и у первого элемента входного массива.
 */

function getSameParity($coll)
{
    if (empty($coll)) {
        return [];
    }

    $result = [];
    $remainder = $coll[0] % 2;
    foreach ($coll as $item) {
        if ($item % 2 === $remainder) {
            $result[] = $item;
        }
    }

    return $result;
}

getSameParity([]);        // []
getSameParity([1, 2, 3]); // [1, 3]
getSameParity([1, 2, 8]); // [1]
getSameParity([2, 2, 8]); // [2, 2, 8]
