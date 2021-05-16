<?php

/*
Реализуйте функцию checkIfBalanced, которая проверяет балансировку круглых скобок в арифметических выражениях.
 */

function checkIfBalanced(string $expression): bool
{
    $stack = [];
    for ($i = 0, $length = strlen($expression); $i < $length; $i++) {
        $curr = $expression[$i];
        if ($curr === '(') {
            array_push($stack, $curr);
        } elseif ($curr === ')') {
            if (empty($stack)) {
                return false;
            }
            array_pop($stack);
        };
    }

    return empty($stack);
}

checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)'); // true
checkIfBalanced('(4 + 3))'); // false