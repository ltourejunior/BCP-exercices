<div class="top-products">
    <h2>Top products</h2>
    <ul>
        <?php $products; ?>
        <?php foreach ($products as $product) :?>
            <li>
                <a href="<?php echo $product->getUrl(); ?>">
                <div class="name"><?php echo $product->name; ?></div> 
                <div class="price"><?php echo $product->price; ?></div>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>