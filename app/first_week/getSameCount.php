<?php

/*
Реализуйте функцию getSameCount, которая считает количество общих уникальных элементов для двух массивов.
Аргументы:
Первый массив
Второй массив
 */

function getSameCount($coll1, $coll2)
{
    $count = 0;
    $uniqColl1 = array_unique($coll1);
    $uniqColl2 = array_unique($coll2);
    foreach ($uniqColl1 as $item1) {
        foreach ($uniqColl2 as $item2) {
            if ($item1 === $item2) {
                $count++;
            }
        }
    }

    return $count;
}

getSameCount([], []); // 0
getSameCount([4, 4], [4, 4]); // 1
getSameCount([1, 10, 3], [10, 100, 35, 1]); // 2
getSameCount([1, 3, 2, 2], [3, 1, 1, 2]); // 3