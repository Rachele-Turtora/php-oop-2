<?php

require_once __DIR__ . '/Models/Product.php';

try {
    $product1 = new Product("Crocchette", "food");
    $product1->setIcon("cat");
    $product1->setPrice(10);
} catch (Exception $e) {
    echo $e->getMessage();
} catch (TypeError $e) {
    echo $e->getMessage();
}

try {
    $product2 = new Product("Mouse", "toy");
    $product2->setIcon("cat");
    $product2->setPrice(10);
} catch (Exception $e) {
    echo $e->getMessage();
} catch (TypeError $e) {
    echo $e->getMessage();
}

try {
    $product3 = new Product("Supercuccia", "kennel");
    $product3->setIcon("dog");
    $product3->setPrice(35);
} catch (Exception $e) {
    echo $e->getMessage();
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
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="card">
                    <h2><?php echo $product["title"] ?></h2>
                    <p><?php echo $product["type"] ?></p>
                    <p><?php echo $product["icon"] ?></p>
                    <p><?php echo $product["price"] ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>