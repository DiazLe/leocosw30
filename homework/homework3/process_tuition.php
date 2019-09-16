<!doctype HTML>
<html>
    <head>
        <?php
         #Tuition Calculator Processing
         #Homework 3 Created 09.12.2019 by Leonor Diaz
         #Tuition Calculater to calculate fees and generate a scholarship 
         ?>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Process Tuition Calculator Form</title>
            <style>
                    @import url('https://fonts.googleapis.com/css?family=Fira+Sans&display=swap');
                body{
                    background-color:gray;
                    font-size:22px;
                    font-family: 'Fira Sans', sans-serif;
                }
                
                main{
                    background-color:white;
                    margin:4% 20%;
                    border:4px outset red;
                    box-shadow:5px 5px 8px black;
                }
                
                img{
                   margin-left:22%;
                   padding-top:1%;
                }
                
                h1, h4{
                    text-align:center;
                }
                
                hr{
                   border: 0;
                   height: 1px;
                   background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(255, 0, 0, 0.75), rgba(0, 0, 0, 0));
                }
                
                p{
                    margin-left:10%;
                }
                
                h6{
                    margin-left:1%;
                }
                
                
                #large{
                    font-size:28px;
                }
                
                .red{
                    color:red;
                    font-weight:900;
                }
                
                footer{
                    padding-left:2%;
                }
            </style>
    <body>
        <main>
            <img src="lbcc.png" alt="LBCC Logo">
        <h1>LBCC Tuition Calculated</h1>
        
        <h4>Please find your tuition fees and details below!</h4>
        <hr>
        
        <?php
        #declare variables
        
        $resident = $_POST['resident'];
        $units = $_POST['units'];
        $shf = 20;
        $csc = $_POST['card'];
        $pp = $_POST['permit'];
        $tuition = $units * $resident;
        $total = $tuition + $shf + $csc + $pp;
        $randomaward = rand(0, $tuition);
        $totaldue = $total - $randomaward;
      
        #Resident fees
        if(isset($_POST['resident']) && $_POST['resident'] == 46){
            echo "<p>Cost of tuition: " . $units . " " . "units" . " " . "x" . " " . "$" . $resident . " " . "=" . " " . "$" . $tuition . "</p>"; }
        else{
            echo "<p>Cost of tuition: " . $units . " " . "units" . " " . "x" . " " . "$" . $resident . " " . "=" . " " . "$" . $tuition . "</p>";
            }
            
        #Student Health Fee
        echo "<p>&#8727;Student Health Fee: $" . "20" . "</p>";
        
        #College Services Card
        if(isset($_POST['card']) && $_POST['card'] == 0){
            echo "<p>College Services Card: " . "$" . $csc . "</p>";}
        else{
            echo "<p>College Services Card: " . "$" . $csc . "</p>";
        }
        
        #Parking Permit
        if(isset($_POST['permit']) && $_POST['permit'] == 0){
            echo "<p>Parking Permit: " . "$" . $pp . "</p>";
        } else{
            echo "<p>Parking Permit: " . "$" . $pp . "</p>";
        }
        
        #Total Registration Costs
        echo "<p><strong>Total Registration Costs: " . "$" . $total . "</strong></p>";
        
        #Random Award Scholarship
        echo "<p>&#8727;Scholarship Award: " . "<strong>$" . $randomaward . "</strong></p>";
        
        #Total Tuition Balance Due
        echo "<p><strong><span id='large'>Total Tuition Balance Due: " . "$" . $totaldue . "</span></strong></p>";
        
        ?>
        
        <h4 class="red">Thank you for choosing LBCC! Go Vikings!</h4>
        <h6>&#8727Mandatory fees and/or awards you qualified for.<br>
        If you would like to recalculate, please go back to original <a href="tuition_calculator.html">form</a>.</h6>
        
        </main>
        <footer> 2019 &copy; Leonor Diaz for COSW30</footer>
    </body>
</html>