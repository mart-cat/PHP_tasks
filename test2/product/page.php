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
    <?php foreach ($sponsored as $id => $product): ?> 
        <?php include "../prod_vie.php" ?>
    <?php endforeach; ?> 

    </div>   


</body>

</html>