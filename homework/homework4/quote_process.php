<!doctype HTML>
<html>
    <head>
        <?php
         #Arrays Activity 1: Favorite Quote Processed
         #Homework 4 Created 09.19.2019 by Leonor Diaz
         #Output quote and try different array functions
         ?>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Favorite Quote Processed</title>
            <style>
             @import url('https://fonts.googleapis.com/css?family=Special+Elite&display=swap');
                body{
                    margin:10%;
                    background-color:#c2e2c3;
                    font-size:24px;
                    font-family: 'Special Elite', cursive;
                }
                
                p{
                    font-weight:bold;
                    padding-left:4%;
                }
                
                footer{
                    padding:1%;
                }
            </style>
    </head>
        <body>
            <h1>Favorite Quote</h1>
                    <p><a href="population.php">Population Page</a></p>
                <?php
                    
                    #declare variables
                $quote = $_POST['quote'];
                $quoteExplode = explode(' ', $quote); //converts string to array
                $words = count($quoteExplode);  //page 62 number of elements in array
                 
                
                    #output list as originally input and total word count
                if(empty($quote) || ($words < 5)){
                    echo "<p>Please enter five words (min) separated by spaces.</p>";
                    }
                else{
                    echo "<p>Your original quote was:</p>";
                   foreach($quoteExplode as $word) {
                     echo $word . " ";
                }
                
                    #echo out the word count
                echo "<p>You input a total of " . " " . $words . " " . "words.</p>";
                
                    #output quote alphabetized
                echo "<p>The alphabetized version of your quote is:</p>";
                $alpha = sort($quoteExplode);
                  foreach($quoteExplode as $beta) {
                      echo $beta . " ";
                  }
                  
                    #output quote in reverse alphabetical order
                echo "<p>The reverse alphabetized version of your quote is:</p>";
                $reverse = rsort($quoteExplode);
                  foreach($quoteExplode as $rbeta) {
                      echo $rbeta . " ";
                  }
               
                    #add three additional words to end of array Output new array with count
                echo "<p>Let's add some words to your quote:</p>";
                 array_push($quoteExplode, "rain", "apple", "tulip");
                   foreach($quoteExplode as $parray) {
                       echo $parray . " ";
                   }
                  $cparray = count($quoteExplode);
                  echo "<p>The quote now has a total of " . $cparray . " " . "words.</p>";
                 
                    #remove first three words Output new count
                echo "<p>Now let's remove some words from your quote:</p>";
                array_splice($quoteExplode, 0, 3);
                  foreach($quoteExplode as $newar) {
                      echo $newar . " ";
                  }
                  $newartwo = count($quoteExplode);
                  echo "<p>The new word count is " . $newartwo . ".</p>";
                }
                
                
                ?>
             <br>
            <button><a href="quote.html">Try again?</a></button>
            <footer> 2019 &copy; Leonor Diaz for COSW30</footer>
        </body>
</html>


