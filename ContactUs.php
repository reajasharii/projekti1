<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
    <link rel="stylesheet" href="style.css">
    
    
   
</head>
<body>
<?php
    include 'hederi.php';
    ?>
    <link rel="stylesheet" href="style1.css">

    
    
       <div class="row">
        <div class="column">
                    <h1 class="con">Contact</h1>
                    <br><br>
                    
                      <div>                     
                     <label > Name:</label>
                     <input type="text"  name="name" required>
                    </div>
                    <br><br>

                    <div>
                     <label >Surname:</label>
                     <input type="text" name="mbiemri" required>
                    </div>
                    <br><br>

                    <div>
                    <label>Address:</label>
                    <input type="text" name="Address" required>
                    </div>
                    <br><br>

                    <div>
                     <label>E-mail:</label>
                    <input type="text" name="E-maili" required>
                    </div>
                    <br><br>

                    <div>
                    <label>Phone:</label>
                    <input type="text" name="Numri" required>
                    </div>
                    <br><br>

                    <div>
                     <div class="third-inputs box-24-expand">
                     <input type="submit"  value="Send" >
                    </div>
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
include 'footer.php';
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
                 return;
                 }

                if (!surnameInput.value.trim()) {
                alert('Please enter your surname.');
                return;
                }

                if (!addressInput.value.trim()) {
                alert('Please enter your address.');
                return;
                 }

                if (!emailInput.value.trim()) {
                alert('Please enter your email.');
                return;
                }

    
                let emailRegex = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/;
                if (!emailRegex.test(emailInput.value.trim())) {
                alert('Please enter a valid email address.');
                return;
                }

                if (!phoneInput.value.trim()) {
                alert('Please enter your phone number.');
                return;
                }

    

               alert('Form submitted successfully!');
               }

                </script>
                   


</body>

</html>