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
    </ul>
    
</header>