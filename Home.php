

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include 'includes/hederi.php';
    ?>
    
<div class="maini">
    <div id="div1">
    <h1>NONSTOP CAKE</h1>

</div>
<div id="div2">
    <img src="IMAGES/the-mandarin-cake-shop.jpg" alt="foto">
</div>
<div id="div3">
    <h2>NOT JUST A <br>CAKE SHOP</h2>
    <p><a href="slider.php">Click here for more</a></p>
    <?php
session_start();
if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) {
    echo '<a id="logout-btn" href="logout.php">Logout</a>';
?>
   
<?php
}
?>
</div>
</div>


<?php
include 'includes/footer.php';
?>
   <?php
$username = $_GET['username'] ?? '';
if (!empty($username)) {
    echo "<script>alert('Welcome, $username!');</script>";
}
?>
    <style>#logout-btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ff0000; 
    color: #ffffff;
    text-decoration: none;
    border-radius: 5px;
}

#logout-btn:hover {
    background-color: #cc0000;
}</style>
</body>
</html>