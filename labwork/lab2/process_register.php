<?php

    //Capture data from form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];
    $full_name = $first_name . ' ' . $last_name;
    
    //create variables to match email and password against
    $correct_firstname = 'Leo';
    $correct_lastname = 'Diaz';
    $correct_email = 'test@test.com';
    $correct_password = 'apple123';
    $correct_repeatpassword = 'apple123';
    
    
    //Check if data is good(isnt empty and matches credentials)
     if($first_name == $correct_firstname && $last_name == $correct_lastname && $email == $correct_email && $password == $correct_password && 
     $repeat_password == $correct_repeatpassword) {
         echo '<h1>You registered successfully!</h1>';
         echo "<p>$full_name</p>";
         echo "<p>Email Address: $email</p>";
         echo "<p>Password: $password</p>";
        }  else{
             echo '<h1>Sorry... try again</h1>';
             echo '<a href="register.php">Go Back!</a>';
         }
 
        
    //Output a little message


?>