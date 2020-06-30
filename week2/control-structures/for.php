<?php

// expr1

// 1st loop
// expr2
// after loop
// expr3

// 2nd loop
// expr 2
// after loop
// expr3

$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);

$size = count($people);

for($i = 0, $size = count($people); $i < $size; ++$i) {
    $people[$i]['salt'] = mt_rand(000000, 999999);
}

foreach($people as &$person) {
    $person['name'] = 'Aminat';
}

var_dump($people);

// foreach($people as $index => $person) {
//     var_dump($index, $person);
// }

// foreach($people as $person):
//     var_dump($person);
// endforeach;

// TODO: Treat for list() 
