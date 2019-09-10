<?php

    //Capture data from form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $full_name = $first_name . ' ' . $last_name;
    
    
    
    
    //Check if data is good(isnt empty and matches credentials)
      if ($first_name != $first_name || $last_name != $last_name || $password != $password || $confirm_password != $password){
          echo '<h1>Sorry... try again</h1>';
          echo '<p>Please make sure all your information matches or fill form completely.</p>';
          echo '<a href="register.php">Go Back!</a>';
        }  else{
          echo '<h1>You registered successfully!</h1>';
          echo "<p>$full_name</p>";
          echo "<p>Email Address: $email</p>";
          echo "<p>Password: $password</p>";
         }
 
        
    //Output a little message


?>