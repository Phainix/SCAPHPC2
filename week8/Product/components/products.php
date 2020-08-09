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