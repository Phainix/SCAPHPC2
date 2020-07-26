<?php

namespace Controller;

use \Library\Database;

class Brand {
    public static function create(\Entity\Brand $brand) {
        $db = new Database();
        $db->connect();

        $name = strtolower($brand->name);
        // Check if brand extists
        $db->prepare("SELECT id FROM BRANDS WHERE LOWER(name) = ?");
        $db->result = $db->stmt->bind_param("s", $name);
        $db->excecute();
        $result = $db->stmt->get_result();
        if($result->num_rows > 0) throw new \Exception("Brand already exists");

        $db->prepare("INSERT INTO BRANDS (name, category_id) VALUES(?, ?)");
        $db->result = $db->stmt->bind_param("si", $brand->name, $brand->category);
        $db->excecute();
        
        return $db->result;
    }

    public static function getAll() {
        $db = new Database();
        $db->connect();

        $brands = $db->select("SELECT BRANDS.*, CATEGORIES.NAME AS category_name FROM BRANDS JOIN CATEGORIES ON CATEGORIES.ID = BRANDS.CATEGORY_ID ORDER BY BRANDS.ID DESC");
        return $brands;
    }

    public static function get($brand_id) {
        $db = new Database();
        $db->connect();

        $db->prepare("SELECT * FROM BRANDS WHERE ID = ?");
        $db->result = $db->stmt->bind_param("i", $brand_id);
        $db->excecute();
        $result = $db->stmt->get_result();

        $brand = $result->fetch_assoc();

        return $brand;
    }

    public static function edit(\Entity\Brand $brand) {
        $db = new Database();
        $db->connect();

        $db->prepare("UPDATE BRANDS SET name = ?, status = ?, category_id = ?, date_updated = current_timestamp WHERE ID = ?");
        $db->result = $db->stmt->bind_param("siii", $brand->name, $brand->status, $brand->category, $brand->id);
        $db->excecute();
        
        return $db->result;
    }
}