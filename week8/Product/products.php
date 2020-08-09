<?php
include_once './autoload.php';

$title = "Products";

$products = array();
$error = false;

$category_id = isset($_GET['category_id']) ? $_GET['category_id'] : null;
$brand_id = isset($_GET['brand_id']) ? $_GET['brand_id'] : null;
$seller_id = isset($_GET['seller_id']) ? $_GET['seller_id'] : null;

try {
    $where_clause = "";
    if($category_id != null) {
        $where_clause = "WHERE PRODUCTS.CATEGORY_ID = $category_id";
    }
    if($brand_id != null) {
        $where_clause = "WHERE PRODUCTS.BRAND_ID = $brand_id";
    }
    if($seller_id != null) {
        $where_clause = "WHERE PRODUCTS.SELLER_ID = $seller_id";
    }
    $products = Controller\Product::getAll($where_clause);
} catch (\Exception $e) {
    // header('Location: error.php');
    exit($e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include_once('components/head.php') ?>
<body>
    <?php include_once('components/header.php') ?>
    <div class="main">
        <?php include_once('components/products.php') ?>
    </div>
    <?php include_once('components/footer.php') ?>
</body>
</html>