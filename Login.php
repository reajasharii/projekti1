<?php 
    session_start();
    include 'autoload.php';
    
    $errors = [];

    if(isset($_POST['login-btn'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $user_obj = new Auth($username, $password, $role,$email);

        if($user = $user_obj->login()) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['is_logged_in'] = true;
            $_SESSION['is_admin'] = $user['is_admin'];

            if(isset($_POST['remember_me'])) {
                if($_POST['remember_me'] == 1) {
                    setcookie("username", $_SESSION['username'], time()+3600);
                    setcookie("is_logged_in", $_SESSION['is_logged_in'], time()+3600);
                    setcookie("is_admin", $_SESSION['is_admin'], time()+3600);
                }
            }

            if($user['is_admin'] == 1)
                header("Location: Dashboard.php");
            else 
                header("Location: home.php");
        } else {
            $errors[] = "Username or/and password is incorrect!";
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
    <style> .error-message {
                  color: red; 
                   font-size: 15px;
                   font-weight: bold;}</style>
</head>

<body>
<?php
    include 'hederi.php';
    ?>

<link rel="stylesheet" href="Login.css">

<div class="login">
    <div class="loginForm">
        <h1>Log in</h1>
        <span id="Error" class="error-message"></span>
        <?php
                    if(count($errors)) {
                ?>
                    <div class="alert alert-danger">
                        <ul>
                        <?php foreach($errors as $error):  ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                <?php   
                    }
                ?>
        <form method="POST" onsubmit="return validateForm()">
        <div class="forma">
                        <select name="role" class="form-control">
                            <option value="0">Customer</option>
                            <option value="1">Administrator</option>
                        </select>
                    </div>
        <div class="forma">
            <input type="text" id="username" name="username" placeholder="Username" >
        </div>
        <div class="forma">
            <input type="password" id="password" name="password" placeholder="Password">
        </div>
        <div name="remember_me" value="1" class="remember-forgot">
            <label><input type="checkbox">  Remeber me</label>
            <a href="#">Forgot password</a>
        </div>
        <button name ="login-btn" type="submit" class="butoni"><a>Login</a></button>

        <div class="fundi">
            <p>Don't have an account? <a href="signup.php">Register</a></p> 
        </div>
    </form>
    </div>    
</div>
<?php
include 'footer.php';
?>
    <script type ="text/javascript" src="script/login.js"></script>
    
</body>
</html>