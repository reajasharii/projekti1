<?php
$email= "";
$username="";
$password="";
$dateBirth="";
$Gender="";

$errorMessage="";
$succesMessage="";

if($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['submit'])){

    $email= $_POST ["email"];
    $username= $_POST["username"];
    $password=$_POST["password"];
    $dateBirth=$_POST["dateBirth"];
    $Gender=$_POST["Gender"];

    do{
        if(empty($email) || empty($username)|| empty($password) || empty($dateBirth)|| empty($Gender)){
            $errorMessage = "All the fiels are required";
            break;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMessage = "Please enter a valid email address";
            break;
        }

        $successMessage = "sign up correctly";
    }while(false);
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
        if(!empty($errorMessage)){
            echo "
            <div class='alert alertError' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }
        ?>
     
 
        <form method="post" action="skripti_regjistrimit.php" onsubmit="return validateForm()">


        
        <div class="forma">
            <input type="email" id="email" name="email" placeholder="Email" required value="<?php echo $email; ?>">
            <span id="emailError" class="error-message"></span>
         
        </div>
        <div class="forma">
            <input type="text" id="username" name="username" placeholder="Username" required value="<?php echo $username; ?>">
        </div>
        <div class="forma"> 
            <input type="password" id="password" name="password" placeholder="Password" required value="<?php echo $password; ?>">
            <span id="passwordError" class="error-message"></span>
            <style>
                .error-message {
                    color: red; 
                    font-size: 12px; 
                    
                }
            </style>
            
        </div>
        <div class="forma">
                <input type="date" id="dob" name="dateBirth" required value="<?php echo $dateBirth; ?>">
            </div>
        <div class="forma">
                <label for="gender">Gender:</label>
                <select id="gender" name="Gender" required value="<?php echo $Gender; ?>">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
        <div class="remember-forgot">
            <label><input type="checkbox"> Remeber me</label>
          
        </div>

        <?php
        if(!empty($succesMessage)){
            echo "
            <div class='alert alertSuccess' role='alert'>
                <strong>$successMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
    }
        
        ?>
        <button type="submit" class="butoni">Signup</button>

        <div class="fundi">
            <p>Already have an account?<a href="Login.php">Login</a></p> 
        </div>
    </form>
    </div>
</div>

<?php
include 'footer.php';
?>
   

    <script>
        function validateForm() {
            var email = document.getElementById("email").value;
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var passwordError = document.getElementById('passwordError');
            var emailError = document.getElementById('emailError');
    
            if (username === "") {
                alert("Username must be filled out");
                return false;
            }
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
if (!emailRegex.test(email)) {
    emailError.innerHTML = "Please enter a valid email address";
    document.getElementById('email').focus();
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
         
    
            return true;
        }
    </script>
</body>
</html>