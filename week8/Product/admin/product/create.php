<?php
include_once '../../autoload.php';

$title = "Account";

include_once './process.php';

$categories = $sellers = $brands = array();
$error = false;

try {
    $categories = Controller\Category::getAll();
    $sellers = Controller\Seller::getAll();
    $brands = Controller\Brand::getAll();
} catch (\Exception $e) {
    $error = $e->getMessage();
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
        <form action="admin/product/create.php" method="post" novalidate enctype="multipart/form-data">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="6"></textarea>
            </div>
            <div>
                <label for="price">Price</label>
                <input type="number" name="price" id="price">
            </div>
            <div>
                <label for="color">Color</label>
                <input type="text" name="color" id="color">
            </div>
            <div>
                <label for="picture">Pictures</label>
                <input type="file" name="picture" id="picture">
            </div>
            <div>
                <label for="seller">Seller</label>
                <select name="seller" id="seller">
                    <option value="">Select Seller</option>

                    <?php foreach ($sellers as $seller): ?>
                        <option value="<?php echo $seller['id']; ?>">
                            <?php echo $seller['name']; ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div>
                <label for="category">Category</label>
                <select name="category" id="category">
                    <option value="">Select Category</option>

                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo $category['id']; ?>">
                            <?php echo $category['name']; ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div>
                <label for="brand">Brand</label>
                <select name="brand" id="brand">
                    <option value="">Select Brand</option>

                    <?php foreach ($brands as $brand): ?>
                        <option value="<?php echo $brand['id']; ?>">
                            <?php echo $brand['name']; ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div>
                <input type="submit" value="Create" name="create_product">
            </div>
        </form>
        </div>
    </div>
    <?php include_once(BASE . 'components/footer.php') ?>
</body>
</html>