<?php
include_once './autoload.php';

$title = "Home";

$categories = $sellers = $brands = $products = array();
$error = false;

try {
    $categories = Controller\Category::getLimit(5);
    $sellers = Controller\Seller::getLimit(5);
    $brands = Controller\Brand::getLimit(5);
    $products = Controller\Product::getLimit(5);
} catch (\Exception $e) {
    header('Location: error.php');
    exit($error);
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include_once('components/head.php') ?>
<body>
    <?php include_once('components/header.php') ?>
    <div class="main">
        <?php include_once('components/categories.php') ?>

        <?php include_once('components/brands.php') ?>

        <?php include_once('components/sellers.php') ?>

        <?php include_once('components/products.php') ?>
    </div>
    <?php include_once('components/footer.php') ?>
</body>
</html>