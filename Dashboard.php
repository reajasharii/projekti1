<?php 
    session_start();
    include 'autoload.php';

  

    if(isset($_SESSION['is_admin']) || isset($_COOKIE['is_admin'])) {
        if($_SESSION['is_admin'] != 1) {
            die("You are not allowed to view this page!");
        }
    } else {
        die("You are not allowed to view this page!");
    }
    
    $p = new Products;

    $errors = [];
    $products = $p->all();

    if(isset($_POST['save_product_btn'])) {
        $title = $_POST['title'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $qty = $_POST['qty'];

        $images = [];
        $tmp_names = [];
       
        if(!empty($title) && !empty($price) && !empty($description) && !empty($qty) && !empty($_FILES['image']['name'])) {
            $images = [$_FILES['image']['name']];
            
            move_uploaded_file($_FILES['image']['tmp_name'], "img-src/img".$_FILES['image']['name']);
    
            if($p->create(['title' => $title, 'price' => $price, 'description' => $description,'qty' => $qty, 'images' => json_encode($images), "admin_id" => 1]))
                header("Location: dashboard.php");
            else
                $errors[] = "Something want wrong while adding the product!";
        } else 
            $errors[] = "All fields are required!";
    }

    if(isset($_GET['action']) && ($_GET['action'] == 'edit')) {
        if(isset($_GET['product_id']) && (is_numeric($_GET['product_id'])))  {
            echo "PO";
            $_SESSION['product_id'] = $_GET['product_id'];
            header("Location: edit-product.php");
        } else
            $errors[] = "Product doesn't exist!";
        
    }

    if(isset($_GET['action']) && ($_GET['action'] == 'delete')) {
        if(isset($_GET['product_id']) && (is_numeric($_GET['product_id'])))  {
            if($p->delete($_GET['product_id'])) 
                header("Location: dashboard.php");
            else
                $errors[] = "Something want wrong while deleting product with id: " .$_GET['product_id'];
        } else
            $errors[] = "Product doesn't exist!";
        
    }

    if(isset($_GET['action']) && ($_GET['action'] == 'logout')) {
        session_destroy();
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
    include 'includes/hederi.php';
    ?>
<body>

<div class="products">
<div class="form">
    <h3>Create product</h3>
    
        <?php
            if(count($errors)) {
        ?>
            <div class="alert alert-danger">
                <ul>
               <?php foreach($errors as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
                </ul>
            </div>
        <?php   
            }
        ?>
        <link rel="stylesheet" href="css/dashboard.css">
        <!-- CREATE PRODUCT -->
       
            <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
                <div class="forma1">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title">
                </div>
                <div class="forma1">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" id="price" >
                </div>
                <div class="forma1">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" id="description" >
                </div>
                <div class="forma1">
                    <label for="qty">Quantity</label>
                    <input type="number" name="qty" class="form-control" id="qty">
                </div>
                <div class="forma1">
                    <label for="images">Images</label>
                    <br />
                    <input type="file" name="image">
                </div>
                <button type="submit" name="save_product_btn" class="btn btn-primary">Save</button>
            </form>
        </div>
</div>

<div class="products1">
<div class="forma">
    <h3>Products</h3>
      
        <div class="col-md-8">
            <?php if(count($products) > 0): ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>description</th>
                        <th>Qty</th>
                        <th>Images</th>
                    </tr>
                    <?php foreach($products as $product): ?>
                        <tr>
                            <th><?= $product['id'] ?></th>
                            <th><?= $product['title'] ?></th>
                            <th><?= $product['price'] ?> &euro;</th>
                            <th><?= $product['description'] ?></th>
                            <th><?= $product['qty'] ?></th>
                            <th><?= $product['images'] ?></th>
                            
                            <th>
                                <a href="?action=edit&product_id=<?= $product['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                <a href="?action=delete&product_id=<?= $product['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <?php else: ?>
                
            <?php endif; ?>
        </div>
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

</body>
</html>


