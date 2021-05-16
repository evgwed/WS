<?php

/*
Реализуйте функцию isContinuousSequence, которая проверяет, является ли переданная последовательность целых
чисел возрастающей непрерывно (не имеющей пропусков чисел). Например, последовательность [4, 5, 6, 7] — непрерывная,
а [0, 1, 3] — нет. Последовательность может начинаться с любого числа, главное условие — отсутствие пропусков чисел.
Последовательность из одного числа не может считаться возрастающей.
 */

function isContinuousSequence($coll)
{
    if (count($coll) <= 1) {
        return false;
    }
    $start = $coll[0];
    foreach ($coll as $i => $item) {
        if ($start + $i !== $item) {
            return false;
        }
    }

    return true;
}

isContinuousSequence([10, 11, 12, 13]);     // true
isContinuousSequence([10, 11, 12, 14, 15]); // false
isContinuousSequence([1, 2, 2, 3]);         // false
isContinuousSequence([]);                   // false
