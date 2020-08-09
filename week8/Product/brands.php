<?php
include_once './autoload.php';

$title = "Brands";

$brands = array();
$error = false;

try {
    $brands = Controller\Brand::getAll();
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
    </div>
    <?php include_once('components/footer.php') ?>
</body>
</html>