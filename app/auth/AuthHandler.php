<?php

session_start();

$login = 'admin';
$pass = '123';

$auth_name = $_POST['name'];
$auth_password = $_POST['password'];

if ($auth_name === $login && $auth_password === $pass)
{
    $_SESSION['user'] = [
        "name" => $auth_name,
        "data" => date('m/d/Y h:i:s a')
    ];
    header("Location: lk.php");
} else {
    echo "Такого пользователя не существует";
}