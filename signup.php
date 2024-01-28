

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
       
        <form method="POST" action="<?= $_SERVER['PHP_SELF']?>" onsubmit="return validateForm()">
     
      <span id="Error" class="error-message"></span>
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