

            <?php
            #declare variables
            $fname = $_POST['first_name'];
            $lname = $_POST['last_name'];
            $email = $_POST['email'];
            $gen = $_POST['gender'];
            $age = $_POST['age'];
            $inte[] = $_POST['interests'];
            $dona = $_POST['contribute'];
            $mail = $_POST['mailing_list'];
            $comm = $_POST['comments'];
            $fullname = $fname . ' ' . $lname;
            
            #Validate form

            //Validate first name
            if(!empty($_POST['first_name'])) {
             $fname = $_POST['first_name'];
            } else {
             $fname = NULL;
             echo "<p>You forgot to enter your name!</p>";}
            
            //Validate last name
            if(!empty($_POST['last_name'])) {
             $lname = $_POST['last_name'];
            } else {
             $lname = NULL;
             echo "<p>You forgot to enter your last name!</p>";}
             
             //Validate email
            if(!empty($_POST['email'])) {
            $email = $_POST['email'];
            } else {
            $email = NULL; 
            echo "<p>Please enter a valid e-mail address.</p>"; }
            
            //Validate gender
            if(isset($_POST['gender'])) {
            $gen = $_POST['gender'];
            if($gen == 'M') {
            echo "<p>Thank you for filling out this section.</p>";
            } elseif($gen == 'F') {
            echo "<p>Thank you for filling out this section.</p>";
            } else {
            if($gen == 'P') {
            echo "<p>Thank you for filling out this section.</p>";
            } else {
            $gen = NULL;
            echo "<p>Please select an option for gender.</p>";}

            //Validate age
            if(isset($_POST['age'])) {
            $age = $_POST['age'];
            if(($age == 18-29)) {
            echo "<p>Thank you.</p>"; }
            elseif(($age == 30-40)) {
            echo "<p>Thank you.</p>";}
            else {
            if(($age == 41-60 || 61)) {
            echo "<p>Thank you.</p>"; }
            else {
            $age = NULL;
            echo "<p>Please select an age range.</p>";}
            
            //Validate interests
             if(empty($inte))
            {
             echo("You didn't select any interests.");
            }
            else {
            $N = count($inte);
            
            echo("You selected $N interest(s): ");
            for($i=0; $i < $N; $i++)
            {
            echo($inte[$i] . " ");
            }}
            
            //Validate contribution
            if(isset($_POST['contribute'])) {
            $dona = $_POST['contribute'];
            if(($dona == 1-500)) {
            echo "<p>Thank you for your contribution!</p>";}
            elseif($dona == 0) {
            echo "<p>Please consider making a contribution in the near future.</p>";}
            else {
            if($dona > 500) {
            echo "<p>Thank you for your contribution!</p>";}
            else{ 
            $dona = NULL;
            echo "<p>Please consider making a contribution in the near future.</p>";}}}
            
            //Validate mailing list
            if(isset($_POST['mailing_list']) && $_POST['mailing_list'] == 'Yes') {
              echo "You chose not to sign up to our mailing list."; }
            else {
               echo "Thank you for signing up to our mailing list.";}
            
            //Validate comments
            if (!empty($_POST['comments'])) {
            $comm = $_POST['comments'];
            } else {
            $comm = NULL;
            echo "<p>You didn't leave any comments, please make sure you didn't forget!</p>";}
            
            //Final message
            if($fname && $lname && $email && $gen && $age && $dona && $mail) {
            echo "<p>Thank you $fullname! Your support is greatly appreciated.</p>";}
            else{ 
            echo "<p>There is missing data on your form. Please fill out correctly.</p>";
            }
            ?>
            
      