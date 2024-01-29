<?php 
    session_start();
    include 'autoload.php';

    $errors = [];

    if(isset($_POST['signup_btn'])) {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $user = new Auth($email ,$username, $password, $role);

        $reg_user_id = $user->register();

        if($reg_user_id > 0) {
            $users = new Users();
            $_user = $users->get($reg_user_id);
            
            $_SESSION['email'] = $_user['email'];
            $_SESSION['username'] = $_user['username'];
            $_SESSION['is_logged_in'] = true;
            $_SESSION['is_admin'] = $_user['is_admin'];

            if($_user['is_admin'] == 0)
                header("Location: home.php");
            else
                header("Location: Dashboard.php");
        } else {
            $errors[] = "Please enter valid username(email) and password (8 or more chars)!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
   
</head>

<body>
<?php
    include 'hederi.php';
    ?>

    <link rel="stylesheet" href="Login.css">

<div class="login">
    <div class="loginForm">
        <h1>Sign up</h1>
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
        <form method="POST" onsubmit="return validateForm()">
     
      <span id="Error" class="error-message"></span>
        <div class="forma">
        
                    <select name="role" class="form-control">
                        <option value="0">Customer</option>
                        <option value="1">Administrator</option>
                    </select>
                </div>
                <div class="forma">
            <input type="email" id="email" name="email" placeholder="Email">
            
        </div>
        <div class="forma">
            <input type="text" id="username" name="username" placeholder="Username">
            
        </div>
        <div class="forma"> 
            <input type="password" id="password" name="password" placeholder="Password">
           
            <style> .error-message {
                  color: red; 
                   font-size: 15px;
                   font-weight: bold;}</style>
        </div>
    
        <div class="remember-forgot">
            <label><input type="checkbox"> Remeber me</label>
        </div>
        <button name="signup_btn" type="submit" class="butoni">Signup</button>

        <div class="fundi">
            <p>Already have an account?<a href="Login.php">Login</a></p> 
        </div>
    </form>
    </div>
</div>

<?php
include 'footer.php';
?>
   <script type ="text/javascript" src="script/signup.js"></script>

</body>
</html>