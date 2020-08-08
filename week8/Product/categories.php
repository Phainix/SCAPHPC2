<?php
include_once './autoload.php';

$title = "Categories";

$categories = array();
$error = false;

try {
    $categories = Controller\Category::getAll();
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
            <?php foreach($categories as $category): ?>
                <div>
                    <span><?= $category['name']?></span>
                </div>
            <?php endforeach ?>
        </section>
    </div>
    <?php include_once('components/footer.php') ?>
</body>
</html>