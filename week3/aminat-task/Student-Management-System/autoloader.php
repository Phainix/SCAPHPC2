<?php

spl_autoload_register(function ($class_name) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class_name). '.php';
//    include $class_name . '.php';
    include $file;
});

$staff  = new \staff\Staff();
$student = new \students\Student();
$teacher = new \teachers\Teacher();
$grade = new \staff\Grade();
$student = new \staff\Subject();

?>