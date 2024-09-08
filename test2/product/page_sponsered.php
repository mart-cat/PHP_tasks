<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div class="sposor-container">
    <h2>Название: <?= ($product->getName()) ?> </h2>
    <h2>Цена: <?= ($product->getPrice()) ?> </h2>
    <h2>Описание: <?= ($product->getDescription()) ?> </h2>
</div>
</body>

</html>