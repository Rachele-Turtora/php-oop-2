<?php

include_once __DIR__ . '/Models/Product.php';

$product1 = new Product("Crocchette", "cibo");
try {
    $product1->setIcon("cat");
    $product1->setPrice(10);
} catch (Exception $e) {
    echo $e->getMessage();
} catch (TypeError $e) {
    echo $e->getMessage();
}

var_dump($product1);
