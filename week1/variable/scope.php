<?php

function test()
{
    static $a = 0;
    var_dump($a);
    $a++;
}

test();
test();
test();
test();
test();