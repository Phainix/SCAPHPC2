<?php
include_once './autoload.php';

$title = "Products";

$products = array();
$error = false;

try {
    $products = Controller\Product::getAll();
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
        <section id="products">
            <?php foreach($products as $product): ?>
                <div>
                    <span><?= $product['name']?></span>
                    <span><?= $product['name']?></span>
                    <span><?= $product['description']?></span>
                    <span><?= $product['price']?></span>
                    <span><?= $product['rating']?></span>
                    <span><?= $product['color']?></span>
                    <span><img src="../../<?= $product['picture']?>" alt="<?= $product['name']?> Image" ></span>
                    <span><?= $product['brand_name']?></span>
                    <span><?= $product['seller_name']?></span>
                    <span><?= $product['category_name']?></span>
                </div>
            <?php endforeach ?>
        </section>
    </div>
    <?php include_once('components/footer.php') ?>
</body>
</html>