<?php
header('Content-type: Text/plain');
$result = include_once __DIR__ . '/./while.php';

// var_dump(__DIR__);

// . ..


echo "before while\n";

// $result = include 'while.php';

// include_once 'while.php';
// require_once 'while.php';

var_dump($result);

echo "after while\n";






