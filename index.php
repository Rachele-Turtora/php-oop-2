<?php

require_once __DIR__ . '/Models/Product.php';

try {
    $product1 = new Product("Crocchette", "food");
    $product1->setIcon("cat");
    $product1->setPrice(5);
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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="card">
                    <h2><?php echo $product["title"] ?></h2>
                    <div class="icon">
                        <?php if ($product["icon"] == "dog") : ?>
                            <i class="fa-solid fa-dog"></i>
                        <?php else : ?>
                            <i class="fa-solid fa-cat"></i>
                        <?php endif ?>
                    </div>
                    <p><strong>Type: </strong><?php echo $product["type"] ?></p>
                    <p><strong>Price: </strong><?php echo $product["price"] ?>&euro;</p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>