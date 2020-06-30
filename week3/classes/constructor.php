<?php

class Animal {
    public $legs;
    public $eyes;
    public $name;

    function __construct() {
        $this->eyes = 2;
        echo "Calling Animal constructor<br/>";
        $this->eat();
    }

    public function set($legs, $name, $eyes) {
        $this->legs = $legs;
        $this->eyes = $eyes;
        $this->name = $name;
    }

    public function move() {
        echo "I am a {$this->name} and i am moving<br/>";
    }

    public function eat() {
        echo "I am eating<br/>";
    }
}

class Goat extends Animal {
    function __construct() {
        parent::__construct();
        echo "Calling Goat constructor<br/>";
    }

    public function move() {
        echo "I am a {$this->name} and i am walking<br/>";
    }

    public function getClass() {
        return Goat::class;
    }

    public function __destruct() {
        echo "Calling Goat destructor<br/>";
    }
}

$goat = new Goat();

exit;
$goat->move();
// 