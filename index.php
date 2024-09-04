<?php
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/data/db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($db as $product): ?>
        <h3><?php echo $product->name ?></h3>
        <h5><?php echo $product->category->name . ' ' . $product->category->animal_size ?> </h5>
    <?php $product->printIngredient() ?>
    <?php endforeach; ?>

</body>
</html>