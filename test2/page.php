<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="products"> 
    <?php foreach ($products as $product): ?> 
        <div class="product <?= $product->isStuck() ? '' : 'notInStuck' ?>"> 
            <h2><?= ($product->getName()) ?></h2>
            <p><?= ($product->getPrice()) ?> р.</p>
            <?php if (!$product->isStuck()  ) : ?>
                <p> нет в наличии</p>
            <?php endif; ?>
            
        </div>
    <?php endforeach; ?> 
    
</body>
</html> 

<!-- <div class = "products"> 
   <div class = "product"> 
    <h2>Название</h2>
    <p>130 р.</p>
   </div>

   <div class = "product notInStuck"> 
    <h2>Название</h2>
    <p>130 р.</p>
    <p> нет в наличии</p>
   </div>
    -->