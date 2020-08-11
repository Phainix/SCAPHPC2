<?php

include_once '../../autoload.php';

$products = array();
$error = false;

try {
    $products = Controller\Product::getAll();
} catch (\Exception $e) {
    $error = $e->getMessage();
    exit($error);
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include_once(BASE . 'components/head.php') ?>
<body>
    <?php include_once(BASE . 'components/header.php') ?>
    <div class="main-admin">
        <?php include_once(BASE . 'components/sidebar.php') ?>
        <div class="admin-container">
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Rating</th>
                        <th>Color</th>
                        <th>Picture</th>
                        <th>Brand</th>
                        <th>Seller</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($products as $product): ?>
                        <tr>
                            <td><?= $product['id']?></td>
                            <td><?= $product['name']?></td>
                            <td><?= $product['description']?></td>
                            <td><?= $product['price']?></td>
                            <td><?= $product['rating']?></td>
                            <td><?= $product['color']?></td>
                            <td><img src="assets/<?= $product['picture']?>" alt="<?= $product['name']?> Image" ></td>
                            <td><?= $product['brand_name']?></td>
                            <td><?= $product['seller_name']?></td>
                            <td><?= $product['category_name']?></td>
                            <td><?= $product['status']?></td>
                            <td><?= $product['date_created']?></td>
                            <td><a href="admin/product/edit.php?product_id=<?= $product['id']?>"><button>Edit</button></a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include_once(BASE . 'components/footer.php') ?>
</body>
</html>