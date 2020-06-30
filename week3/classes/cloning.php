<?php

class A {
    public $name;
    public int $age;

    public function setAge(int $age) {
        $this->age = $age;
    }
}

$a = new A();
$a->name = "A";
$a->age = 20;


$b = clone $a;

var_dump($a, $b);

$b->age = 33;

var_dump($a, $b);