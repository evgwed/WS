<?php

/*
Реализуйте функцию getIntersectionOfSortedArray,
которая принимает на вход два отсортированных массива и находит их пересечение.
 */
function getIntersectionOfSortedArray($arr1, $arr2)
{
    $size1 = count($arr1);
    $size2 = count($arr2);

    $i1 = 0;
    $i2 = 0;
    $result = [];
    while ($i1 < $size1 && $i2 < $size2) {
        if ($arr1[$i1] === $arr2[$i2]) {
            $result[] = $arr1[$i1];
            $i1++;
            $i2++;
        } elseif ($arr1[$i1] > $arr2[$i2]) {
            $i2++;
        } else {
            $i1++;
        }
    }
    return $result;
}

getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30]); // [10, 24]

getIntersectionOfSortedArray([10, 11, 24], [-2, 3, 4]); // []

getIntersectionOfSortedArray([], [2]); // []