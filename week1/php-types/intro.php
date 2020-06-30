<?php
$a_bool = fAlSe;   // a boolean
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an integer
$an_float = 12.66; 

echo gettype($a_bool); // prints out:  boolean
echo gettype($a_str);  // prints out:  string
echo gettype($an_int);
echo gettype($an_float);

// If this is an integer, increment it by four
if (is_int($an_int)) {
    $an_int += 4;
}

// If $a_bool is a string, print it out
// (does not print out anything)
if (is_string($a_bool)) {
    echo "String: $a_bool";
}
?>