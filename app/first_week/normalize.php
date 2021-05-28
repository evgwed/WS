<?php

/*
Реализуйте функцию normalize(), которая "нормализует" данные переданного урока. То есть приводит их к определенному виду.
На вход этой функции подается ассоциативный массив, описывающий собой урок курса. В уроке содержатся два поля: имя и описание.
 */

$lesson = [
    'name' => 'ДеструКТУРИЗАЦИЯ',
    'description' => 'каК удивитЬ колек',
];

function normalize(&$lesson)
{
    $lesson['name'] = ucfirst(mb_strtolower($lesson['name']));
    $lesson['description'] = mb_strtolower($lesson['description']);
}

