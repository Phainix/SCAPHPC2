<?php

// BODMAS

// 4(6*5) + 8 - 2 / 2;

// 1 + 5 * 3

// 1 + (5 * 3)

// (1 + 5) * 3

// Minus left assoc

// 1 - 2 - 3

// (1 - 2) - 3

// Equal to right assoc

// $a = $b = 5

// $a = ($b = 5)

// 1 <= 1 == 1 

// (1 <= 1) == 1 

// 1. 4 % 6 * 5 + 8 - 2 / 2;

// 2. (4 % 6) * 5 + 8 - 2 / 2;

// 3. 4 * 5 + 8 - 2 / 2;

// 4. (4 * 5) + 8 - 2 / 2;

// 5. 20 + 8 - 2 / 2;

// 6. 20 + 8 - (2 / 2);

// 7. 20 + 8 - 1;

// 8. (20 + 8) - 1;

// 9. 28 - 1

// 10. 27

var_dump(4 % 6 * 5 + 8 - 2 / 2);

// 1. --4 % 6 * 5 + 8 - 2++ / 2;

// 2. (--4) % 6 * 5 + 8 - (2++) / 2;

// 3. (--4) % 6 * 5 + 8 - (2++) / 2;

// 4. 3 % 6 * 5 + 8 - 2 / 2;

// 5. (3 % 6) * 5 + 8 - 2 / 2;

// 6. 3 * 5 + 8 - 2 / 2;

// 7. 15 + 8 - 2 / 2;

// 8. 15 + 8 - 1;

// 9. (15 + 8) - 1;

// 10. 23 - 1;

// 11. 22;

$i = 4;
$j = 2;

var_dump(--$i % 6 * 5 + 8 - $j++ / 2);


$a = ((true) ? (0) : (true)) ? (1) : (2);

$a = (true) ? (0) : ((true) ? (1) : (2));

var_dump($a);

$a = 1;
echo $a + $a++; // may print either 2 or 3

echo "\n";
$a = 1;
echo $a + ++$a; // may print either 2 or 3

echo "\n";



$c = ($a && $b);
$c = ($a || $b);

($c = $a) and $b;
($c = $a) or $b;