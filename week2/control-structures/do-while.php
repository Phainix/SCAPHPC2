<?php

$i = 11;

do {
    echo "$i is a small value\n";

    $i++;
    // $i = $i + 2;
} while($i < 10);

echo "done with do while loop\n";

$i = 145;
do {
    echo "$i is divisible by 2 \n";
    $i = $i / 2;
} while (($i % 2) == 0);
echo "$i is not divisible by 2 \n";