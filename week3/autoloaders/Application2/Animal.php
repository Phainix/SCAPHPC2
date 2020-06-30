<?php

class Animal {
    public $legs;
    public $eyes;
    public $name;

    public function set($legs, $name, $eyes) {
        $this->legs = $legs;
        $this->eyes = $eyes;
        $this->name = $name;
    }

    public function move() {
        echo "I am a {$this->name} and i am moving\n";
    }
}