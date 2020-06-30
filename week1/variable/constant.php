<?php
define("FOO",     "something");
define("FOO2",    "something else");

echo FOO.FOO2.FOO3;

class Student {
    const NAME = "Aminat";
    const FULLNAME = "Aminat" . "Aminat";
}

var_dump(Student::NAME);