<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 23-Jun-20
 * Time: 6:05 AM
 */

abstract class Shape
{
    protected $width;
    protected $height;
    public $name;


    function __construct($width, $height, $name)
    {
        $this->width = $width;
        $this->height = $height;
        $this->name = $name;
    }

    function getWidth()
    {
        return $this->width;
    }

    function getHeight()
    {
        return $this->height;
    }

    abstract protected function calculateArea($width, $height);

    abstract protected function calculateCircumference($width, $height);


}
class Triangle extends Shape
{
    public function calculateArea($width, $height)
    {
        // TODO: Implement calculateArea() method.
        return "The area of the triangle is : " . (1 / 2) * $width * $height;
    }

    public function calculateCircumference($width, $height)
    {
        // TODO: Implement calculateCircumference() method.
        return $width + $height;
    }

}

class Rectangle extends Shape
{
    public function calculateArea($width, $height)
    {
        // TODO: Implement calculateArea() method.
        return "The area of the rectangle is : " . $width * $height;
    }

    public function calculateCircumference($width, $height)
    {
        // TODO: Implement calculateCircumference() method.
        return 2 * ($width + $height);
    }

}

$rectangle = new Rectangle($width, $height, $name);
$triangle = new Triangle($width, $height, $name);

echo $triangle->calculateArea(10, 8) . "<br>";
echo "And circumference is: ".$triangle->calculateCircumference(10, 8) . "<br>";
echo  $rectangle->calculateArea(10, 8) . "<br>";
echo "And circumference is: ". $rectangle->calculateCircumference(10, 8);