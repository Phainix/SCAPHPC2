<?php

$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);


$array = array(
    "hello",
    "hi",
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
    "hmmm",
);
var_dump($array);


// Create a simple array.
$array = array(1, 2, 3, 4, 5);
print_r($array);

// Now delete every item, but leave the array itself intact:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);

// Append an item (note that the new key is 5, instead of 0).
$array[] = 6;
print_r($array);

// Re-index:
$array = array_values($array);
$array[] = 7;
print_r($array);

class foo {
    
}

$obj = new stdClass();