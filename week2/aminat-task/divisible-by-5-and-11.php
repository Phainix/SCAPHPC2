<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 14-Jun-20
 * Time: 7:37 AM
 */

$i = 55;

if($i % 5 == 0 && $i % 11 == 0 ){
    echo "The number ". $i. " is divisible by 5 and 11\n";
} else{
    echo "The number ".$i." is not divisible by 5 and 11\n";
}