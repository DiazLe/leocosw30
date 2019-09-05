<?php

    //Capture data from form
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //create variables to match email and password against
    $correct_email = 'test@test.com';
    $correct_password = 'supersecure123';
    
    
    //Check if data is good(isnt empty and matches credentials)
     if($email == $correct_email && $password == $correct_password) {
         echo '<h1>You logged in successfully!</h1>';
         echo "<p>Email Address: $email</p>";
         echo "<p>Password: $password</p>";
        }  else{
             echo '<h1>Sorry... try again</h1>';
             echo '<a href="login.php">Go Back!</a>';
         }
 
        
    //Output a little message


?>