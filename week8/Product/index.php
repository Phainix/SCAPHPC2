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
        <section id="categories">
            <h2 class="section-title">Categories</h2>
            <div class="category-list">
                <?php foreach($categories as $category): ?>
                    <div class="list-item">
                        <span><?= $category['name']?></span>
                    </div>
                <?php endforeach ?>
            </div>
        </section>

        <section id="brands">
            <h2 class="section-title">Brands</h2>
            <div class="brand-list">
                <?php foreach($brands as $brand): ?>
                    <div class="list-item">
                        <p><?= $brand['name']?></p>
                        <span class="tag"><?= $brand['category_name']?></span>
                    </div>
                <?php endforeach ?>
            </div>
        </section>

        <section id="sellers">
            <h2 class="section-title">Sellers</h2>
            <div class="seller-list">
                <?php foreach($sellers as $seller): ?>
                    <div class="list-item">
                        <p><?= $seller['name']?></p>
                        <span class="tag"><?= $seller['country']?></span>
                        <div class="info">
                            <span><?= $seller['score']?>% seller score</span>
                            <span><?= $seller['followers']?> followers</span>
                        </div>
                        <a class="btn item-action" href="javascript:void(0)">Follow <img src="assets/icons/plus.svg" alt="Follow" class="icon"> </a>
                    </div>
                <?php endforeach ?>
            </div>
        </section>

        <section id="products">
            <h2 class="section-title">Products</h2>
            <div class="product-list">
                <?php foreach($products as $product): ?>
                    <div class="list-item product-item">
                        <img src="assets/<?= $product['picture']?>" alt="<?= $product['name']?> Image" class="product-img">
                        <span><?= $product['name']?></span>
                        <span>₦<?= number_format($product['price']) ?></span>
                        <span>
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <?= $i <= $product['rating'] ? '<img src="assets/icons/star.svg" alt="Rating" class="icon">' : '<img src="assets/icons/star-grey.svg" alt="Rating" class="icon">' ?>
                            <?php endfor ?>
                        </span>
                    </div>
                <?php endforeach ?>
            </div>
        </section>
    </div>
    <?php include_once('components/footer.php') ?>
</body>
</html>