<?php

$i = 2;
$j = $i * 3;

echo "$j\n";

function display($j) {
    // echo "$j\n";
    exit("J is $j\n");

    $j = 66;
}

display($j);

return $j;

echo "$j\n";

exit;

// include
// require

// TODO: diffence between return and exit