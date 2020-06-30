<?php

class Animal {
    public int $legs = 4 * 4;
    protected $eyes;
    private string $name;

    public static $heart_beat;
    const HEAD = 1;

    public function set($legs, $name, $eyes) {
        $this->legs = $legs;
        $this->eyes = $eyes;
        $this->name = $name;

        self::$heart_beat;
        self::HEAD;
    }

    public function move() {
        echo "I am a {$this->name} and i am moving\n";
    }
}

class Goat extends Animal{

}

$animal = new Animal();
$animal->name;

$animal::$heart_beat;
Animal::$heart_beat;
Animal::HEAD;
$animal::HEAD;


// Public
// The current class
// Children can also access it
// Objects can access it

// Protected
// The current class
// Children can also access it
// Objects cannot access it

// Private
// The current class
// Children cannot also access it
// Objects cannot access it

// non-static ->
// static ::