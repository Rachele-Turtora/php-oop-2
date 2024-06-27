<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Kennel.php';


$categoria_cane = new Category("cane", "icona-cane");
$categoria_gatto = new Category("gatto", "icona-gatto");

try {
    $product1 = new Food("Crocchette", $categoria_gatto);
    $product1->setIngredients('Pollo, Verdura, Salmone');
    $product1->setPrice(5);
} catch (TypeError $e) {
    echo $e->getMessage();
}

try {
    $product2 = new Toy("Mouse", $categoria_gatto);
    $product2->setPrice(10);
} catch (TypeError $e) {
    echo $e->getMessage();
}

try {
    $product3 = new Kennel("Supercuccia", $categoria_cane);
    $product3->setPrice(35);
} catch (TypeError $e) {
    echo $e->getMessage();
}

try {
    $product4 = new Food('Alghe', $categoria_cane);
    $product4->setIsVegan(true);
    $product4->setPrice(30);
} catch (TypeError $e) {
    echo $e->getMessage();
}

require_once __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP Shop</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="card">
                    <h2><?php echo $product["title"] ?></h2>
                    <div class="icon">
                        <?php if ($product["category"]->getIcon() == "icona-cane") : ?>
                            <i class="fa-solid fa-dog"></i>
                        <?php else : ?>
                            <i class="fa-solid fa-cat"></i>
                        <?php endif ?>
                    </div>
                    <p><strong>Price: </strong><?php echo $product["price"] ?>&euro;</p>
                    <p><strong>Type: </strong><?php echo $product["type"] ?></p>
                    <?php if ($product["type"] == "Food") : ?>
                        <p>Ingredients: <?php echo $product["ingredients"] ? $product["ingredients"] : "Nessun ingrediente trovato" ?></p>
                    <?php endif ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>