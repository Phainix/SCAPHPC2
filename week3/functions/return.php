<?php

function userDetails() {
    $name = "Aminat";
    $email = "aminat@gmail.com";
    $age = 54;

    // return ['name' => $name, 'email' => $email, 'age' => $age];
    return [$name, $email, $age];

    // $object = new stdClass();
    // $object->name = $name;
    // $object->email = $email;
    // $object->age = $age;

    // return $object;
}

// $user_details = userDetails();

// var_dump($user_details);

// $name = $user_details['name'];
// $email = $user_details['email'];
// $age = $user_details['age'];

list($name, $email, $age) = userDetails();
var_dump($name, $email, $age);


$arr = [1, 2];
list($a, $b) = $arr;

strlen($name);

str_replace('nat', 'e', $name);