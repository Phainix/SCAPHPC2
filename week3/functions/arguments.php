<?php

$name = "Aminat";

echo "Original name is $name\n";

function showMyName(&$name) {
    echo "Function name is $name\n";
    $name = "Faith";
}

showMyName($name);

echo "Global name is $name\n";