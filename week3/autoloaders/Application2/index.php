<?php

include 'Goat.php';
include 'Fish.php';

$goat = new Goat();
$goat->set(4, 'goat', '2');
$goat->move();


$fish = new Fish();
$fish->set(0, 'fish', 2);
$fish->move(6, 6);