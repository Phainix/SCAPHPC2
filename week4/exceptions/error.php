<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

set_error_handler(function(int $number, string $message) {
    echo "Handler captured error $number: '$message'" . PHP_EOL;
});

try {
    echo 1/0;
} catch(DivisionByZeroError $e){
    echo "got $e";
} catch(ErrorException $e) {
    echo "got $e";
}