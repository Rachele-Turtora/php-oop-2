<?php

$products = [
    [
        "title" => $product1->getTitle(),
        "price" => $product1->getPrice(),
        "category" => $product1->getCategory(),
        "type" => $product1->getCurrentType(),
        "ingredients" => $product1 instanceof Food ? $product1->getIngredients() : null
    ],
    [
        "title" => $product2->getTitle(),
        "price" => $product2->getPrice(),
        "category" => $product2->getCategory(),
        "type" => $product2->getCurrentType(),
    ],
    [
        "title" => $product3->getTitle(),
        "price" => $product3->getPrice(),
        "category" => $product3->getCategory(),
        "type" => $product3->getCurrentType(),
    ],
    [
        "title" => $product4->getTitle(),
        "price" => $product4->getPrice(),
        "category" => $product4->getCategory(),
        "type" => $product4->getCurrentType(),
        "ingredients" => $product4 instanceof Food ? $product4->getIngredients() : null
    ]
];
