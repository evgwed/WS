<?php

/*
Реализуйте функцию bubbleSort, которая сортирует массив используя пузырьковую сортировку.
 */

function bubbleSort($arr)
{
    $size = count($arr);
    do {
        $swapped = false;
        for ($i = 0, $stepsCount = $size - 1; $i < $stepsCount; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
                $swapped = true;
            }
        }
        $size--;
    } while ($swapped);

    return $arr;
}

bubbleSort([]); // []
bubbleSort([3, 10, 4, 3]); // [3, 3, 4, 10]