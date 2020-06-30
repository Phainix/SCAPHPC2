<?php

namespace Application;
// Application\Animal
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

class Goat extends Animal {
    public function move() {
        echo "I am a {$this->name} and i am walking\n";
    }

    public function getClass() {
        return Goat::class;
    }
}

$goat = new Goat();
$goat->set(4, 'goat', '2');
// $goat->legs = 4;
// $goat->name = "Goat";
// $goat->eyes = 2;
var_dump($goat);
// var_dump($goat->getClass());
// // var_dump($goat->legs, $goat->name, $goat->eyes);
// $goat->move();

// class Fish extends Animal {
//     public function move() {
//         echo "I am a {$this->name} and i am swiming\n";
//     }
// }
// $fish = new Fish();
// $fish->set(0, 'fish', 2);
// $fish->move(6, 6);
// var_dump($fish);

foreach($goat as $property => $value) {
    var_dump("$property => $value");
}
