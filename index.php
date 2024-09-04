<?php
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Accessories.php';
require_once __DIR__ . '/data/db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>E-commerce DogCat</title>
</head>
<body>
    <h1>DOG&CAT</h1>
    <div id="wrapper">
        <?php foreach($db as $product): ?>
            <div class="container">
                <h3><?php echo $product->name ?></h3>
                <h5><?php echo $product->category->name . ' - ' . $product->category->type_of ?> </h5>
                <h5>Prezzo per 1 quantità: <?php $product->printPrice() ?>€</h5> 
                <h5>Disponibilità: <?php  echo $product->aviable ? 'Disponibile' : 'Esaurito' ?></h5>
                <!-- Condizioni di stampa ingredienti e/o colori -->
                <?php if (method_exists($product, 'printIngredient')): ?>
                    <?php $product->printIngredient() ?>
                <?php endif; ?>
                <?php if (method_exists($product, 'printColor')): ?>
                    <?php $product->printColor() ?>
                <?php endif; ?>
                <?php echo $product->use_for ?? '' ?>
                <p><?php echo $product->description ?></p>
            </div>
        <?php endforeach; ?>
    </div>


</body>
</html>