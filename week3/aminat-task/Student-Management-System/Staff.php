<?php
namespace staff;
class Staff
{
public $fname;
public $lname;
public $sex;
public $id;

public function __construct($fname, $lname, $sex)
{
    $this->sex = $sex;
    $this->lname = $lname;
    $this->fname = $fname;
}

public function setStaff($id, $fname, $lname, $sex){
    $this->id = $id;
    $this->fname = $fname;
    $this->lname = $lname;
    $this->sex = $sex;

    return true;
}

public function getName(){
    return $this->fname . $this->lname;
}

public function getSex(){
    return $this->sex;
}

public function getId(){
    return $this->id;
}
}