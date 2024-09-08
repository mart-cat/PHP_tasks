 
        <div class="product <?= $product->isStuck() ? '' : 'notInStuck'; ?>"> 
        <a href="product?id=<?= $id ?>"> <!-- Ура, относительная ссылка -->
            <h2><?= htmlspecialchars($product->getName()) ?> </h2></a>
            <p><?= htmlspecialchars($product->getPrice()) ?> р.</p>
            <?php if (!$product->isStuck()): ?>
                <p> нет в наличии </p>
            <?php endif; ?>
        </div>

<!-- Даже одного / достаточно что бы выйти из директории? Отвратительно-->