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

<div class="menu">
    <div id="foto">
        <img src="IMAGES/download.jpg" alt="foto">
        <div id="text">
            <a href="cake.php">New products here</a>
         
        </div>
    </div>
    <div id="foto">
        <img src="IMAGES/images (5).jpg" alt="foto">
        <div id="text">
            <a href="caffe.php">COFFEE</a>
        </div>
    </div>
    <div id="foto">
        <img src="IMAGES/download (2).jpg" alt="foto"> 
        <div id="text">
            <a href="chocolate.php">CHOCOLATE DRINKS</a>
        </div>
    </div>
</div>
<?php
include 'includes/footer.php';
?>

</body>
</html>