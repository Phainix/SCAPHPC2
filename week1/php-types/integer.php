<?php

// decimal base 10
$a = 10;


// octal base 8
$b = 0123;

// hexadecimal base 16
$c = 0x1BF;

// binary base 2
$d = 0b0011101010101;

var_dump($a, $b, $c, $d, PHP_INT_MIN, PHP_INT_MAX);

$e = FALSE;

$f = TRUE;

$g = (int) $e;

$h = (int) $f;

$i = 4 + $f;

$j = 1 + "10.5"; // 10.5 + 1

// $k = 1 + "10.5hjhfhwhhhwr"; // 10.5 + 1

// $l = 1 + "jjker10.5"; // 1

$m = 0.1 + 0.7;

$n = floor(((0.1+0.7)*10)) ;

$o = floor(8);

var_dump($m * 10, $m, $n, $o, 5/0);

// TODO: float values that result in NAN