<?php

abstract class AbstractClass
{
    function __construct() {

    }
    
    // Force Extending class to define this method
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // Common method
    public function printOut() {
        print $this->getValue() . "\n";
    }
}

abstract class Animal {
    protected function move(){
        echo "I am a {$this->name} and i am moving\n";
    }
    abstract protected function skin_type();
}

class Goat extends Animal {
    function skin_type() {

    }
}

interface Animals {
    public function move();
    public function skintype($skin);
}

interface Animals2 {
    public function move();
    public function skintype($skin);
}

class Fish implements Animals, Animals2 {
    public function move() {
        "I am swimming<br/>";
    }
    public function skintype($skin) {
        "I have a scaly skin<br/>";
    }
}


// $a = new AbstractClass();

// private < protected < public

// child class > trait > parent class