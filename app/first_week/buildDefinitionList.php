<?php

/*
Реализуйте функцию buildDefinitionList, которая генерирует html список определений (теги dl, dt и dd)
и возвращает получившуюся строку. При отсутствии элементов в массиве функция возвращает пустую строку.
 */

function buildDefinitionList(array $definitions)
{
    if (empty($definitions)) {
        return '';
    }

    $parts = [];
    foreach ($definitions as $definition) {
        $name = $definition[0];
        $description = $definition[1];
        $parts[] = "<dt>{$name}</dt><dd>{$description}</dd>";
    }
    $innerValue = implode('', $parts);
    $result = "<dl>{$innerValue}</dl>";

    return $result;
}

$definitions = [
    ['Блямба', 'Выпуклость, утолщения на поверхности чего-либо'],
    ['Бобр', 'Животное из отряда грызунов'],
];

buildDefinitionList($definitions);
// => '<dl><dt>Блямба</dt><dd>Выпуклость, утолщение на поверхности чего-либо</dd><dt>Бобр</dt><dd>Животное из отряда грызунов</dd></dl>';
