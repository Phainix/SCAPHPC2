<?php

namespace SCA; 

function inverse($x) {
    if(!$x) { // x == false
        throw new \Exception('Division by zero.'); // SCA/Exception \Exception
    }
    if(!is_int($x)) {
        throw new \Exception($x . ' is not a valid integer.');
    }
    if(!($x < 20)) {
        throw new \Exception($x . ' is not less than 20');
    }
    return 1/$x;
}

try {
// echo inverse('b');
echo inverse(50);
echo "\n";
// inverse
} catch(\Exception $ex) {
    echo "Wow i have caught an exception -> {$ex->getMessage()}\n";
} finally {
    echo "I have reached the end\n";
}

// Function to inverse an odd number that is less than 20 - the number nust not be zero - it must be a valid number

