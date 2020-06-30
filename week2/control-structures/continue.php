<?php

$arr = array(1,2,3,4,5);

$count = count($arr);

for($i = 0; $i < $count; $i++) {
    $value = $arr[$i];
    if($value == 3) {
        continue;
    }
    echo "$value\n";
}

$i = 0;
while ($i++ < 5) {
    echo "Outer\n";
    while (true) {
        echo "Middle\n";
        while (1) {
            echo "Inner\n";
            continue 3;
        }
        echo "This never gets output.\n";
    }
    echo "Neither does this.\n";
}
echo "Final\n";


for ($i = 0; $i < 5; ++$i) {
    if ($i == 2) {
        continue;
    }
    print "$i\n";
}