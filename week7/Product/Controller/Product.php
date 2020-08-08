<?php

namespace Controller;

use \Library\Database;

class Product {
    public static function create(\Entity\Product $product) {
        $db = new Database();
        $db->connect();

        $name = strtolower($product->name);
        // Check if product extists
        $db->prepare("SELECT id FROM PRODUCTS WHERE LOWER(name) = ?");
        $db->result = $db->stmt->bind_param("s", $name);
        $db->excecute();
        $result = $db->stmt->get_result();
        if($result->num_rows > 0) throw new \Exception("Product already exists");

        $db->prepare("INSERT INTO PRODUCTS (name, description, price, color, picture, brand_id, seller_id, category_id) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
        $db->result = $db->stmt->bind_param("ssissiii", $product->name, $product->description, $product->price, $product->color, $product->picture, $product->brand, $product->seller, $product->category);
        $db->excecute();
        
        return $db->result;
    }

    public static function getAll() {
        $db = new Database();
        $db->connect();

        $brands = $db->select("SELECT PRODUCTS.*, CATEGORIES.NAME AS category_name, SELLERS.NAME AS seller_name, BRANDS.NAME AS brand_name FROM PRODUCTS JOIN CATEGORIES ON CATEGORIES.ID = PRODUCTS.CATEGORY_ID JOIN SELLERS ON SELLERS.ID = PRODUCTS.SELLER_ID JOIN BRANDS ON BRANDS.ID = PRODUCTS.BRAND_ID ORDER BY PRODUCTS.ID DESC");
        return $brands;
    }

    public static function get($product_id) {
        $db = new Database();
        $db->connect();

        $db->prepare("SELECT * FROM PRODUCTS WHERE ID = ?");
        $db->result = $db->stmt->bind_param("i", $product_id);
        $db->excecute();
        $result = $db->stmt->get_result();

        $brand = $result->fetch_assoc();

        return $brand;
    }

    public static function edit(\Entity\Product $product) {
        $db = new Database();
        $db->connect();

        $db->prepare("UPDATE PRODUCTS SET name = ?, description = ?, price = ?, color = ?, picture = ?, brand_id = ?, seller_id = ?, category_id = ?, status = ?, date_updated = current_timestamp WHERE ID = ?");
        $db->result = $db->stmt->bind_param("ssissiiiii", $product->name, $product->description, $product->price, $product->color, $product->picture, $product->brand, $product->seller, $product->category, $product->status, $product->product_id);
        $db->excecute();
        
        return $db->result;
    }
}