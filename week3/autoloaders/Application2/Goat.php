<?php

include_once 'Animal.php';

class Goat extends Animal {
    public function move() {
        echo "I am a {$this->name} and i am walking\n";
    }

    public function getClass() {
        return Goat::class;
    }
}