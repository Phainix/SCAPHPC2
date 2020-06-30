<?php

include_once 'Animal.php';

class Fish extends Animal {
    public function move() {
        echo "I am a {$this->name} and i am swiming\n";
    }
}