<?php

namespace Entity;

class Product {
    public $name;
    public $description;
    public $price;
    public $brand;
    public $color;
    public $picture;
    public $rating;
    public $seller;
    public $category;

    public function __construct($name, $description, $price, $brand, $color, $picture, $rating, $seller, $category) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->brand = $brand;
        $this->color = $color;
        $this->picture = $picture;
        $this->rating = $rating;
        $this->seller = $seller;
        $this->category = $category;
    }
}