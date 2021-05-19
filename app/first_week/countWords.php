<?php

/*
Реализуйте функцию countWords(), которая считает количество слов в предложении и возвращает ассоциативный массив в котором ключи это слова
(приведенные к нижнему регистру), а значения — это то сколько раз слово встретилось в предложении. Слова в предложении могут находиться в разных регистрах.
Перед подсчетом их нужно приводить в нижний регистр, чтобы не пропускались дубли.
 */

function countWords($text)
{
    $coll = explode(' ', $text);
    if ($coll[0] == null){
        return [];
    }

    $result = [];

    foreach ($coll as $word){
        $word = mb_strtolower($word);
        if (array_key_exists($word, $result)){
            $result[$word] += 1;
        } else {
            $result[$word] = 1;
        }
    }

    return $result;
}

// Если предложение пустое, то возвращается пустой объект
countWords('');
// []

$text = 'one two three two ONE one wow';
countWords($text);
// [
//     'one' => 3,
//     'two' => 2,
//     'three' => 1,
//     'wow' => 1
// ]

$text2 = 'another one sentence with strange Words words';
countWords($text2);
// [
//     'another' => 1,
//     'one' =>  1,
//     'sentence' => 1,
//     'with' => 1,
//     'strange' => 1,
//     'words' => 2
// ]