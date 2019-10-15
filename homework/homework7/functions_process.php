<?php

        #declare functions
        #add function
        function lets_add($num1,$num2){
           return ($num1 + $num2);
        }
        
        #subtract function
        function lets_sub($num1,$num2){
            return ($num1 - $num2);
        }
        
        #multiply function
        function lets_mult($num1,$num2){
            return ($num1 * $num2);
        }
        
        #divide function
        function lets_div($num1,$num2){
            return ($num1/$num2);
        }
        
        #declare variables
        $math = "";
        $num1 = "";
        $num2 = "";
        
        #check for form submission
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Store post data into our variables
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $math = $_POST['math'];
        }
   
         #form validation
           
           if(!is_numeric($num1) || !is_numeric($num2)) {
            echo "<p>Please enter two numbers. Thank you.</p>";}
                else{
            
           
           if($math == 'add'){
               echo $num1 . " + " . $num2 . " = ";
               echo lets_add($num1 + $num2);}
               
           elseif($math == 'subtract'){
               echo $num1 . " - " . $num2 . " = ";
               echo lets_sub($num1 - $num2);}
               
           elseif($math == 'multiply'){
               echo $num1 . " * " . $num2 . " = ";
               echo lets_mult($num1,$num2);
           }
           
           elseif($math == 'divide'){
               echo $num1 . " / " . $num2 . " = ";
               echo lets_div($num1,$num2);
           }
           else{
               echo "<p>Please choose a method.</p>";
           }

  
            if($math && $num1 && $num2){
                echo "<p>You chose to" . " " . $math . ".<br>" . "You chose to use these numbers" . " " . $num1 . " and " . $num2 . ".</p>";
                
            }else{
                echo "<p>Please fill the form out completely and correctly.</p>";
            }
                }
          
          echo "<button><a href=functions.php>Try again?</a></button>";

?>

<style>
    body{
        margin:5% 20%;
    }
</style>