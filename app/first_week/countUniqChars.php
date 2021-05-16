<?php

/*
Реализуйте функцию countUniqChars, которая получает на вход строку и считает, сколько символов
(уникальных символов) использовано в этой строке. Например, в строке 'yy' всего один уникальный символ — y.
А в строке '111yya!' — четыре уникальных символа: 1, y, a и !.
Задание необходимо выполнить без использования функций array_unique и count_chars.
 */

function countUniqChars($text)
{
    $uniqChars = [];
    for ($i = 0; $i < strlen($text); $i++) {
        if (!in_array($text[$i], $uniqChars)) {
            $uniqChars[] = $text[$i];
        }
    }
    return count($uniqChars);
}

$text1 = 'yyab';
countUniqChars($text1); // 3

$text2 = 'You know nothing Jon Snow';
countUniqChars($text2); // 13

$text3 = '';
countUniqChars($text3); // 0