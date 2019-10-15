<!doctype html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Homework 7: Functions</title>
        <style>
            body{
                margin: 5% 35%;
            }
            
            form{
                border: 4px dashed black;
                padding:10%;
            }
        </style>
    </head>
    <body>
        <h1>Math Functions</h1>
        <p>Please fill out the form options to proceed.</p> 
        
        <form action = "functions_process.php" method = "POST">
           <p><label for = "math">Please select a method:</label>
           <select name = "math">
               <option value = "">Select One</option>
               <option value = "add">Add</option>
               <option value = "subtract">Subtract</option>
               <option value = "multiply">Multiply</option>
               <option value = "divide">Divide</option>
           </select></p>
           <p><label for = "num1">First Number:</label>
           <input type = "text" name = "num1" value = "<?php echo $num1;?>"></p>
           <p><label for = "num2">Second Number:</label>
           <input type = "text" name = "num2" value = "<?php echo $num2;?>"></p>
             
            <button>Calculate!</button>
        </form>
    </body>
</html>