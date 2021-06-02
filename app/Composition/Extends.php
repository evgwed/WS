<?php

class A {
    public function helloWorld(){
        echo 'Hello World';
    }
}

class B extends A {

    }


$obj = new B;
$obj->helloWorld();