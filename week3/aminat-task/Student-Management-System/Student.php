<?php
namespace students;
class Student
{
public $fname;
public $lname;
public $sex;
public $dob;
public $grade_id;
public $student_id;

public function __construct($student_id, $fname, $lname,$sex, $dob, $grade_id)
{
    $this->fname = $fname;
    $this->student_id = $student_id;
    $this->lname = $lname;
    $this->sex = $sex;
    $this->dob = $dob;
    $this->grade_id = $grade_id;
}

public function getName(){
    return $this->fname . $this->lname;
}

public function getSex(){
    return $this->sex;
}

public function getdob(){
    return $this->dob;
}
public function getGradeId(){
    return $this->grade_id;
}
public function getStudentId(){
    return $this->student_id;
}
}