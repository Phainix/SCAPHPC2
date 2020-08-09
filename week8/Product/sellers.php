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
        <?php include_once('components/sellers.php') ?>
    </div>
    <?php include_once('components/footer.php') ?>
</body>
</html>