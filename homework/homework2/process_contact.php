<!doctype html>
    <html>
        <head>
                 <?php
                    #Political Campaign Supporter Form
                    #Homework 2 Created 09.08.2019 by Leonor Diaz
                    #Updated on 09.10.2019
                    #Created to validate contact.html form
                 ?>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Political Campaign Supporter Confirmation Page</title>
            <style>
                @import url('https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap');
                body{
                    font-family: 'Hepta Slab', serif;
                    background-color:#eae4eb;
                    margin:5% 15%;
                    text-align:center;
                    font-size:24px;
                }
                
                h1{
                    font-size:48px;
                }
                
                footer{
                    padding:1%;
                }
            </style>
        </head>
        <body>
            <h1>Katniss Everdeen for President 2020</h1>
                <img src="mockingjay.png" alt="Katniss Everdeen for President Logo">
            <p>Thank you for your support!</p>
            
                  <?php
                     #declare variables
                     $fname = $_POST['first_name'];
                     $lname = $_POST['last_name'];
                     $email = $_POST['email'];
                     $gen = $_POST['gender'];
                     $age = $_POST['age'];
                     $interests = $_POST['interests'];
                     $dona = $_POST['contribute'];
                     $mail = $_POST['mailing_list'];
                     $comm = $_POST['comments'];
                     $fullname = $fname . ' ' . $lname;
                     
                     #Validate form 
                     #Validate first name
                     if(!empty($_POST['first_name'])) {
                      echo "<p>Hello $fname you provided the following information.</p>";}
                      else{
                      echo "<p>Please enter your first name.</p>";
                     }

                     #Validate last name
                     if(!empty($_POST['last_name'])) {
                      echo "<p>Your last name is: $lname</p>";}
                      else{
                       echo "<p>Please enter your last name.</p>";
                      }
                     
                     #Validate email
                     if(!empty($_POST['email'])) {
                      echo "<p>Your email address is: $email.</p>";}
                      else{
                       echo "<p>Please enter a valid email address.</p>";
                      }
                      
                     #Validate gender
                     if(isset($_POST['gender'])) {
                         if($gen == 'M') {
                         echo "<p>You opted your gender as: Male</p>";}
                         elseif($gen == 'F'){ 
                          echo "<p>You opted your gender as: Female</p>";}
                         else{ if($gen == 'P'){
                          echo "<p>You opted out of identifying a gender.</p>";}
                     else { $gen == NULL;
                     echo "<p>Please fill out the gender portion of the form.</p>";
                       }}}
                      
                     #Validate age
                     if(isset($_POST['age'])) {
                         if($age == "18-36") {
                         echo "<p>The age group you selected is: 18-36</p>";}
                         elseif($age == "37-55") {
                         echo "<p>The age group you selected is: 37-55</p>";}
                         else{ if($age == "56+"){
                         echo "<p>The age group you selected is: 56+</p>";}
                     else { $age == NULL;
                     echo "<p>Please fill out the age portion of the form.</p>";
                     }}}
                    
                    #Validate interests
                    if(!empty($_POST['interests'])) {
                     echo "<p>You selected the following as your interests:</p>";
                      foreach($_POST['interests'] as $interests){
                      echo "<p>$interests</p>";
                    } }
                    else {
                     echo "<p>You did not select any interests. Selecting interests assists us in helping you.</p>";}
                    
             
                   #Validate contribution
                   if($dona > 0){
                   echo "<p>Thank you for your generous contribution of: $$dona</p>";
                   }
                   else{
                   echo "You did not make a contribution this time. Please consider making a contribution in the future.</p>";
                   }
                   
                   #Validate Mailing List
                    if(isset($_POST['mailing_list'])) {
                    echo "<p>Thank you for signing up to our mailing list.</p>";}
                    else{
                    echo "<p>You chose not to sign up to our mailing list.</p>";}
                                                
                   #Validate comments
                   if (!empty($_POST['comments'])) {
                   echo "<p>You left the following comments: $comm</p>";
                   } else {
                   $comm = NULL;
                   echo "<p>You didn't leave any comments, please make sure you didn't forget!</p>";}
        
                  ?>
            
           <footer>&copy;2019 Sponsored by the Katniss Everdeen for President Coalition </footer>
        </body>
    </html>
           
            
      