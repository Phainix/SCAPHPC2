<?php

$arr = array(1,2,3,4,5);

$count = count($arr);

for($i = 0; $i < $count; $i++) {
    $value = $arr[$i];
    echo "$value\n";
    if($value == 3) {
        break;
    }
}