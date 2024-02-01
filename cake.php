<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'autoload.php';

$productsInstance = new Products();
$products = $productsInstance->all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link rel="stylesheet" href="style.css">
   
</head>

<body>
<?php
    include 'includes/hederi.php';
    ?>

<link rel="stylesheet" href="css/menu.css">

<div class="menuja">
<?php foreach($products as $product): ?>
    
    <div id="foto1">
        <?php
        $images = json_decode($product['images'], true);
        if (is_array($images) && count($images) > 0) {
            foreach ($images as $image) {
                echo "<img src='IMAGES/{$image}' alt='foto'>";
            }
        }
        ?>
                <div id="text1">
                    <h1><?= $product['title'] ?></h1><br><br>
                    <p><?= $product['description'] ?><br><br><br>
                        Price: <?= $product['price'] ?> &euro;<br><br><a href="ContactUs.php">Order here</a></p>
                </div>
            </div>
        <?php endforeach; ?>
</div>
<?php
include 'includes/footer.php';
?>
   
</body>
</html>