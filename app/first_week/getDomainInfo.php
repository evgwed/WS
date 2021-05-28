<?php
/*
 Реализуйте функцию getDomainInfo(), которая принимает на вход имя сайта и возвращает информацию о нем:
 */

function getDomainInfo($domain)
{
    $scheme = '';
    if (substr($domain, 0, 8) === 'https://'){
        $scheme = 'https';
    } else {
        $scheme = 'http';
    }

    $name = str_replace("{$scheme}://", '', $domain);

    return ['scheme' => $scheme, 'name' => $name];
}


// Если домен передан без указания протокола,
// то по умолчанию берется http
getDomainInfo('yandex.ru');
// [
//     'scheme' => 'http',
//     'name' => 'yandex.ru'
// ]

getDomainInfo('https://hexlet.io');
// [
//     'scheme' => 'https',
//     'name' => 'hexlet.io'
// ]

getDomainInfo('http://google.com');
// [
//     'scheme' => 'http',
//     'name' => 'google.com'
// ]