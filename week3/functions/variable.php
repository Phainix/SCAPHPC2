<?php

function FunctionName(string $var)
{
    # code...
}

VariableFunctionName('a', 'v', 'g');
function VariableFunctionName(...$letters)
{
    # code...
}

function VariableFunctionName3() {
    $letters = func_get_args(); func_num_args();
}

VariableFunctionName2(['a', 'v', 'g']);
function VariableFunctionName2(Array $letters)
{
    # code...
}

$a = 3;

var_dump($a, $b, $r, $f);

function total_intervals($unit, int $j, DateInterval ...$intervals) {
    $time = 0;
    foreach ($intervals as $interval) {
        $time += $interval->$unit;
    }
    return $time;
}

function makeyogurt($flavour, $type = "acidophilus")
{
    return "Making a bowl of $type $flavour.\n";
}

makeyogurt("coffee");
