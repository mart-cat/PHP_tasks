<?php
include("../bd.php");


if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $prodID = (int) $_GET['id'];
} else {
    header('Location: ../index.php');
    exit();
}

if (array_key_exists($prodID, $products)) {
    $product = $products[$prodID];

    if ($product instanceof Sponser) {
        include("page_sponsered.php");

    } else {

        $sponsored = array_filter($products, function ($product) {
            if ($product->isStuck()) {
                return $product instanceof Sponser;
            }
        });

        include("page.php");
    }


} else {
    echo '404';
}









