<?php

/*
 Реализуйте функцию swap, которая меняет местами два элемента относительно переданного индекса. Например, если передан индекс 5, то функция меняет местами элементы, находящиеся по индексам 4 и 6.

Параметры функции:

Массив
Индекс
Если хотя бы одного из индексов не существует, функция возвращает исходный массив.
 */

function swap($coll, $center)
{
    $prevIndex = $center - 1;
    $nextIndex = $center + 1;
    $isSwappable = array_key_exists($prevIndex, $coll) && array_key_exists($nextIndex, $coll);

    if ($isSwappable) {
        $temp = $coll[$prevIndex];
        $coll[$prevIndex] = $coll[$nextIndex];
        $coll[$nextIndex] = $temp;
    }

    return $coll;
}

$names = ['john', 'smith', 'karl'];

$result = swap($names, 1);
print_r($result); // => ['karl', 'smith', 'john']

$result = swap($names, 2);
print_r($result); // => ['john', 'smith', 'karl']

$result = swap($names, 0);
print_r($result); // => ['john', 'smith', 'karl']

