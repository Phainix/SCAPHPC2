<?php

spl_autoload_register(function ($class_name) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class_name). '.php';
    include $file;
});

$staff  = new StudentManagementSystem\Staffs();
$student = new StudentManagementSystem\Students();
$teacher = new StudentManagementSystem\Teacher();
$grade = new StudentManagementSystem\Grade();
$student = new StudentManagementSystem\Subject();

?>