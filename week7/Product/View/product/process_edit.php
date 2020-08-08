<?php

include_once '../../autoload.php';

use \Library\Form as Form;
use \Library\Validator as Validator;

try {
    if($_SERVER["REQUEST_METHOD"] != "POST") {
        throw new \Exception("Invalid request format, please try again");
    }

    if(!isset($_POST['edit_product']) && $error == null) {
        throw new \Exception("Invalid request format, please try again");
    }

    if(isset($_FILES['picture']) && !empty($_FILES['picture']['name'])) {
        if($_FILES['picture']['error'] == 1) {
            throw new \Exception("File size must be less than 2 MB");
        }
    
        if($_FILES['picture']['error'] != 0) {
            throw new \Exception("Please select a picture and try again");
        }
    
        if(!file_exists($_FILES['picture']['tmp_name'])) {
            throw new \Exception("Please select a picture and try again");
        }
    
        $uploaded_file = pathinfo($_FILES['picture']['name']);
        $valid_extensions = array('jpg', 'jpeg', 'png');
    
        if(!in_array($uploaded_file['extension'], $valid_extensions)) {
            throw new \Exception("Please select a valid picture");
        }
    
        $relative_dest = "pictures/" . $_FILES['picture']['name'];
    
        $dest = __DIR__ . "/../../$relative_dest";
    
        if (!move_uploaded_file($_FILES['picture']['tmp_name'], $dest)) {
            echo 'File upload failed';
        }
        $picture = $relative_dest;
    } else {
        $picture = isset($_POST['current_picture']) ? Form::sanitise($_POST['current_picture']) : null;
    }

    $name = isset($_POST['name']) ? Form::sanitise($_POST['name']) : null;
    $description = isset($_POST['description']) ? Form::sanitise($_POST['description']) : null;
    $price = isset($_POST['price']) ? Form::sanitise($_POST['price']) : null;
    $brand = isset($_POST['brand']) ? Form::sanitise($_POST['brand']) : null;
    $color = isset($_POST['color']) ? Form::sanitise($_POST['color']) : null;
    $seller = isset($_POST['seller']) ? Form::sanitise($_POST['seller']) : null;
    $category = isset($_POST['category']) ? Form::sanitise($_POST['category']) : null;
    $status = isset($_POST['status']) ? Form::sanitise($_POST['status']) : null;
    $product_id = isset($_POST['product_id']) ? Form::sanitise($_POST['product_id']) : null;
    $rating = 0;

    $nameError = Validator::validateText('Name', $name, 30);
    if($nameError != null) {
        throw new \Exception($nameError);
    }

    $descriptionError = Validator::validateText('Description', $description, 250);
    if($descriptionError != null) {
        throw new \Exception($descriptionError);
    }

    $priceError = Validator::validateNumber('Price', $price);
    if($priceError != null) {
        throw new \Exception($priceError);
    }

    $colorError = Validator::validateText('Color', $color, 30);
    if($colorError != null) {
        throw new \Exception($colorError);
    }

    $sellerError = Validator::validateValue('Seller', $seller);
    // TODO: Check if seller exists
    if($sellerError != null) {
        throw new \Exception($sellerError);
    }

    $categoryError = Validator::validateValue('Category', $category);
    // TODO: Check if category exists
    if($categoryError != null) {
        throw new \Exception($categoryError);
    }

    $brandError = Validator::validateValue('Brand', $brand);
    // TODO: Check if brand exists
    if($brandError != null) {
        throw new \Exception($brandError);
    }

    $product = new Entity\Product($name, $description, $price, $brand, $color, $picture, $rating, $seller, $category);
    $product->status = $status;
    $product->product_id = $product_id;
    $result = Controller\Product::edit($product);

    if($result !== true) {
        throw new \Exception("Product edit failed");
    } 
    $message = "Product edited successfully";
    echo $message;

} catch (\Exception $e) {
    echo $e->getMessage();
    exit;
}