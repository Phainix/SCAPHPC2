<section id="brands">
    <h2 class="section-title">Brands</h2>
    <div class="brand-list">
        <?php foreach($brands as $brand): ?>
            <a class="list-item" href="products.php?brand_id=<?= $brand['id']?>">
                <p><?= $brand['name']?></p>
                <span class="tag"><?= $brand['category_name']?></span>
            </a>
        <?php endforeach ?>
    </div>
</section>