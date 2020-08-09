<?php
use \Entity\User;

?>
<header>
    <a href="index.php" class="brand">
        <img src="assets/icons/sale.svg" alt="Logo" class="brand-img"> 
        Products
    </a>

    <ul class="header-menu">
        <li class="<?= $title == "Products" ? 'active' : '' ?>"><a href="products.php">Products</a></li>
        <li class="<?= $title == "Sellers" ? 'active' : '' ?>"><a href="sellers.php">Sellers</a></li>
        <li class="<?= $title == "Brands" ? 'active' : '' ?>"><a href="brands.php">Brands</a></li>
        <li class="<?= $title == "Categories" ? 'active' : '' ?>"><a href="categories.php">Categories</a></li>
        <?php if($_SESSION && isset($_SESSION['user']) && is_object($_SESSION['user'])) : ?>
            <li class="<?= $title == "Account" ? 'active' : '' ?>"><a href="javascript:void(0)">Welcome <?= $_SESSION['user']->username ?> </a></li>
        <?php else : ?>
            <li class="<?= $title == "Login" ? 'active' : '' ?>"><a href="login.php">Login</a></li>
        <?php endif ?>
    </ul>
    
</header>
<?php if(isset($error) && $error != false) : ?>
    <div class="alert alert-danger"><?= $error ?></div>
<?php endif ?>

<?php if(isset($success) && $success != false) : ?>
    <div class="alert alert-success"><?= $success ?></div>
<?php endif ?>