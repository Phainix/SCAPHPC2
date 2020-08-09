<section id="sellers">
    <h2 class="section-title">Sellers</h2>
    <div class="seller-list">
        <?php foreach($sellers as $seller): ?>
            <div class="list-item">
                <p><a href="products.php?seller_id=<?= $seller['id']?>"><?= $seller['name']?></a></p>
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