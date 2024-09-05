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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>E-commerce DogCat</title>
</head>
<body>
    <h1>DOG&CAT</h1>
    <div id="wrapper">
        <?php foreach($db as $product): ?>
            <div class="container">
                <h3><?php echo $product->name ?> <span><?php echo $product->category->iconName()  ?></span></h3>
                <img src="<?php echo $product->img ?>" alt="">
                <h5><?php echo $product->category->name . ' - ' . $product->category->type_of ?> </h5>
                <h5>Prezzo per 1 quantità: <?php $product->printPrice() ?>€</h5>
                <h5>Prezzo scontato: <?php $product->printDiscountPrice() ?>€</h5>
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
                <div>
                    <!-- Gestione errore bloccante con messaggio a schermo -->
                    <h2><?php try{
                        if($product->getDiscount() != 0){
                            echo "<h4>Sconto: " . $product->getDiscount() * 100 . "%</h4>";
                        } else {
                            echo "<h2 class='no_discount'>Nessuno sconto disponibile</h2>";
                        }
                    } catch(Exception $e) {
                        echo "<h2>Errore: " . $e->getMessage() . "</h2>";
                    } ?></h2>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


</body>
</html>