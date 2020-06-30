<?php
namespace StudentManagementSystem;
class Students
{
public $fname;
public $lname;
public $sex;
public $dob;
public $grade_id;
public $student_id;
public $grade_name;

public function __construct($student_id, $fname, $lname,$sex, $dob, $grade_id, $grade_name)
{
    $this->fname = $fname;
    $this->student_id = $student_id;
    $this->lname = $lname;
    $this->sex = $sex;
    $this->dob = $dob;
    $this->grade_id = $grade_id;
    $this->grade_name = $grade_name;
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

public function getGrade(){
    return $this->grade_name;
}

public function getGradeId(){
    return $this->grade_id;
}
public function getStudentId(){
    return $this->student_id;
}
}