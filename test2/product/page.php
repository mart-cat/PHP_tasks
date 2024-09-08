<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <h2>Название: <?= ($product->getName()) ?> </h2>
    <h2>Цена: <?= ($product->getPrice()) ?> </h2>

    <div class = "fyp">

    <h2> Рекомендации </h2>

    <div class="products"> 
    <?php foreach ($sponsored as $product): ?> 
        <div class="product <?= $product->isStuck() ? '' : 'notInStuck';  ?>"> 
            <a href = "product?id=<?= $id ?>"> <h2><?= ($product->getName()) ?> </h2></a>
            <p><?= ($product->getPrice()) ?> р.</p>
            <?php if (!$product->isStuck() ) : ?>
                <p> нет в наличии </p>
            <?php endif; ?>
        </div>
    <?php endforeach; ?> 

    </div>   


</body>

</html>