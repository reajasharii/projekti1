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
     <form onsubmit="return validateForm()">
        <div class="forma">
            <input type="text" id="username" placeholder="Username" required>
        </div>
        <div class="forma">
            <input type="password" id="password" placeholder="Password" required>
            <span id="passwordError" class="error-message"></span>
            <style>
                .error-message {
                    color: red; 
                    font-size: 12px; 
                    
                }
            </style>
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox">  Remeber me</label>
            <a href="#">Forgot password</a>
        </div>
        <button type="submit" class="butoni"><a>Login</a></button>

        <div class="fundi">
            <p>Don't have an account? <a href="signup.html">Register</a></p> 
        </div>
    </form>
    </div>
</div>
<?php
include 'footer.php';
?>
   

    
    <script>
   
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var passwordError = document.getElementById('passwordError');
       
    
            if (username.trim() === "") {
                passwordError.innerHTML = "";
                alert("please write username");
                document.getElementById('username').focus();
                return false;
            }

            if (password.length < 8) {
                passwordError.innerHTML = "the password must be longer than 8 characters";
                document.getElementById('password').focus();
                return false;
            }

            if (!password.match(/[a-zA-Z]/)) {
                passwordError.innerHTML = "the password must contain an alphabetic character";
                document.getElementById('password').focus();
                return false;
            }
         
       alert("You are logged in!");
      
             return true;
    }
    </script>
    
    
</body>
</html>