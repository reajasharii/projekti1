<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/Validimi.css">
    
    
   
</head>
<body>
<?php
    include 'includes/hederi.php';
    ?>
    <link rel="stylesheet" href="css/style1.css">

    
    
       <div class="row">
        <div class="column">
                    <h1 class="con">Contact</h1>
                    <br><br>
                    
                      <div>                     
                     <label > Name:</label>
                     <input type="text" id="name" name="name" required>
                    </div>
                    <br><br>

                    <div>
                     <label >Surname:</label>
                     <input type="text" id="surname" name="mbiemri" required>
                    </div>
                    <br><br>

                    <div>
                    <label>Address:</label>
                    <input type="text" id="address" name="Address" required>
                    </div>
                    <br><br>

                    <div>
                     <label>E-mail:</label>
                    <input type="text" id="email" name="E-maili" required>
                    </div>
                    <br><br>

                    <div>
                    <label>Phone:</label>
                    <input type="text" id="phone"  name="Numri" required>
                    </div>
                    <br><br>

                    <div>
                    <form onsubmit="return validateForm()">
                    <input type="submit" value="Send">
                    </form>
                    <br><br>
                                                               
                </div>
                    </div>
                    
             
                    


                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                   <div class="content-selection">
                   <div class="contact-info">
                   <div><i class="fas fa-map-marker-alt"></i>Rruga:Garibalti,Prishtine,Kosovo</div>
                   <div><i class="fas fa-envelope">nonstopcake@gmail.com</i></div>
                   <div><i class="fas fa-phone"></i>+38310079285</div>
                   <div><i class="fas fa-clock">Mon-Saturday 9:00AM to 20:00PM</i></div>
                              
                                 
                   </div>
                
                
                 </div>
                
                 <?php
include 'includes/footer.php';
?>
   

                <script>
                function validateForm() {
                 let nameInput = document.getElementById('name');
                 let surnameInput = document.getElementById('surname');
                 let addressInput = document.getElementById('address');
                 let emailInput = document.getElementById('email');
                 let phoneInput = document.getElementById('phone');

   
                 if (!nameInput.value.trim()) {
                 alert('Please enter your name.');
                 return false;
                 }

                if (!surnameInput.value.trim()) {
                alert('Please enter your surname.');
                return false;
                }

                if (!addressInput.value.trim()) {
                alert('Please enter your address.');
                return false;
                 }

                if (!emailInput.value.trim()) {
                alert('Please enter your email.');
                return false;
                }

    
                let emailRegex = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/;
                if (!emailRegex.test(emailInput.value.trim())) {
                alert('Please enter a valid email address.');
                return false;
                }

                if (!phoneInput.value.trim()) {
                alert('Please enter your phone number.');
                return false;
                }

    

               alert('Form submitted successfully!');
               return true;
               }

                </script>




</body>

</html>