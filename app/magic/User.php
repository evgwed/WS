<?php


class User
{
    private $data = [];

    public function __set($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function __get($key)
    {
        if (array_key_exists($key, $this->data)){
            return $this->data[$key];
        } else {
            return null;
        }
    }
}

$user = new User;
$user->age = "32";
$user->name = "Mike";
$user->status = "banned";

var_dump($user);
