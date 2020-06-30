<?php

$student = new stdClass();
$student->name = "Aminat";

$student1 = $student;

$student1->name = "Faith";

var_dump($student, $student1);