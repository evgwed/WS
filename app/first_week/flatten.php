<?php

/*
Реализуйте функцию flatten(). Эта функция принимает на вход массив и выпрямляет его: если элементами массива являются массивы,
то flatten() сводит всё к одному массиву, раскрывая один уровень вложенности.
 */

function flatten($coll)
{
    if (empty($coll)) return [];
    $result = [];
    foreach ($coll as $item) {
        if (is_array($item)) {
            foreach ($item as $subitem) {
                $result[] = $subitem;
            }
        } else {
            $result[] = $item;
        }
    }

    return $result;
}

// Для пустого массива возвращается []
flatten([]); // []
flatten([1, [3, 2], 9]); // [1, 3, 2, 9]
flatten([1, [[2], [3]], [9]]); // [1, [2], [3], 9]
