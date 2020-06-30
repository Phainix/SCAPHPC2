<?php

spl_autoload_register(function ($class_name) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class_name).'.php';
    include $file;
});

$goat = new Classes\Goat();
$goat->set(4, 'goat', '2');
$goat->move();


$fish = new Classes\Fish();
$fish->set(0, 'fish', 2);
$fish->move(6, 6);

$goat2 = new Classes\Goat();

// Directory/Filename
// Namespace/Classname