<section id="categories">
    <h2 class="section-title">Categories</h2>
    <div class="category-list">
        <?php foreach($categories as $category): ?>
            <a class="list-item" href="products.php?category_id=<?= $category['id']?>">
                <span><?= $category['name']?></span>
            </a>
        <?php endforeach ?>
    </div>
</section>