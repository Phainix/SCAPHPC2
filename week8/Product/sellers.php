<?php
include_once './autoload.php';

$title = "Sellers";

$sellers = array();
$error = false;

try {
    $sellers = Controller\Seller::getAll();
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
    </div>
    <?php include_once('components/footer.php') ?>
</body>
</html>