<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 14-Jun-20
 * Time: 7:46 AM
 */
$i = 1;
for($i = 1; $i <= 10; $i++){
    echo $i . ($i < 10 ? "-" : "");
}
echo "\n";