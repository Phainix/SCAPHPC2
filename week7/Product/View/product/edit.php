<?php
include_once '../../autoload.php';

use \Library\Form as Form;
use \Library\Validator as Validator;

$categories = $sellers = $brands = array();
$error = false;

try {
    $product_id = isset($_GET['product_id']) ? Form::sanitise($_GET['product_id']) : null;
    $productError = Validator::validateNumber('Product', $product_id);
    if ($productError != null) {
        throw new \Exception($productError);
    }

    $product = Controller\Product::get($product_id);
    if($product == null) {
        throw new \Exception("Product does not exist");
    }

    $categories = Controller\Category::getAll();
    $sellers = Controller\Seller::getAll();
    $brands = Controller\Brand::getAll();
} catch (\Exception $e) {
    $error = $e->getMessage();
    exit($error);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>

<body>

    <form action="process_edit.php" method="post" novalidate enctype="multipart/form-data">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?= $product['name']?>">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="6"><?= $product['description']?></textarea>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" name="price" id="price" value="<?= $product['price']?>">
        </div>
        <div>
            <label for="color">Color</label>
            <input type="text" name="color" id="color" value="<?= $product['color']?>">
        </div>
        <div>
            <label for="picture">Pictures</label>
            <input type="file" name="picture" id="picture">
        </div>
        <div>
            <label for="seller">Seller</label>
            <select name="seller" id="seller">
                <option value="">Select Seller</option>

                <?php foreach ($sellers as $seller): ?>
                    <option <?= $product['seller_id'] == $seller['id'] ? 'selected' : '' ?> value="<?php echo $seller['id']; ?>">
                        <?php echo $seller['name']; ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="category">Category</label>
            <select name="category" id="category">
                <option value="">Select Category</option>

                <?php foreach ($categories as $category): ?>
                    <option <?= $product['category_id'] == $category['id'] ? 'selected' : '' ?> value="<?php echo $category['id']; ?>">
                        <?php echo $category['name']; ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="brand">Brand</label>
            <select name="brand" id="brand">
                <option value="">Select Brand</option>

                <?php foreach ($brands as $brand): ?>
                    <option <?= $product['brand_id'] == $brand['id'] ? 'selected' : '' ?> value="<?php echo $brand['id']; ?>">
                        <?php echo $brand['name']; ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="">Select a status</option>
                <option <?= $brand['status'] == 1 ? 'selected' : '' ?> value="1">Active</option>
                <option <?= $brand['status'] == 2 ? 'selected' : '' ?> value="2">Inactive</option>
            </select>
        </div>
        <input type="hidden" name="product_id" id="product_id" value="<?= $product_id ?>">
        <input type="hidden" name="current_picture" id="current_picture" value="<?= $product['picture']?>">
        <div>
            <input type="submit" value="Edit" name="edit_product">
        </div>
    </form>

</body>

</html>