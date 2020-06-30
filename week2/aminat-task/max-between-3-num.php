<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 14-Jun-20
 * Time: 7:41 AM
 */

$a = 10;
$b = 10;
$c = 7;
if ($a > $b && $a > $c) {
    echo $a . " is the maximum among the three numbers \n";
} elseif ($b > $a && $b > $c) {
    echo $b . " is the maximum among the three numbers \n";
} else {
    echo $c . " is the maximum among the three numbers \n";
}

$max = $a;
if($b > $max) {
    $max = $b;
}
if($c > $max) {
    $max = $c;
}

echo $max . " is the maximum among the three numbers \n";

$arr = [10, 10, 7, 60, 35];
$count = count($arr);
$max = $arr[0];
for($i = 0; $i < $count; $i++) {
    if($arr[$i] > $max) {
        $max = $arr[$i];
    }
}
echo $max . " is the maximum among the array ";