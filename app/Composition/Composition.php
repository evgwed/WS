<?php


class A {
    public function helloWorld(){
        echo 'Hello World';
    }
}

class B {
    protected $a;
    public function __construct(){
        $this->a = new A;  // создает объект  класса A
    }
    public function sayHello(){
        $this->a->helloWorld();  // использует объект класса A и его метод
    }
}

$obj = new B;
$obj->sayHello();