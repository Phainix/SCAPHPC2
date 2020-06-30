<?php

function name() {
$var = "Bob";


$foo = $var;

$bar = &$var;
}

var_dump($GLOBALS);

class Mail {

}

new Mail();