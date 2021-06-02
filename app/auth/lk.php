<?php
session_start();

if (!isset($_SESSION['user'])) {
    echo "Тебе сюда нельзя";exit;
}

var_dump($_SESSION);
unset($_SESSION['user']);