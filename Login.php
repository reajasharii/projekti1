


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
        <h1>Log in</h1>
        <span id="Error" class="error-message"></span>
     <form onsubmit="return validateForm()">
        <div class="forma">
            <input type="text" id="username" placeholder="Username" >
        </div>
        <div class="forma">
            <input type="password" id="password" placeholder="Password">
           <style> .error-message {
                  color: red; 
                   font-size: 15px;
                   font-weight: bold;}</style>
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox">  Remeber me</label>
            <a href="#">Forgot password</a>
        </div>
        <button type="submit" class="butoni"><a>Login</a></button>

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