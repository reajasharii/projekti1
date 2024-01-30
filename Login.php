<?php
session_start();

include 'autoload.php';

$errors = [];

if (isset($_POST['login-btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $user = new Auth(null, $username, $password, $role);

    $login_result = $user->login();

    if ($login_result) {
        $_SESSION['email'] = $login_result['email'];
        $_SESSION['username'] = $login_result['username'];
        $_SESSION['is_logged_in'] = true;
        $_SESSION['is_admin'] = $login_result['is_admin'];

       if ($login_result['is_admin'] == 0) {
            header("Location: menu.php");
            exit(); 
        } elseif ($login_result['is_admin'] == 1) {
            header("Location: Dashboard.php");
            exit(); 
        }
    } else {
        $errors[] = "Invalid username or password!";
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
                            <option value="0">user</option>
                            <option value="1">Admin</option>
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
        <div class="message-container">

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