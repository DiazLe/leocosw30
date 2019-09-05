<!doctype html>
<html>
    <head>
        <meta charset = "utf-8"><title>Registration Form</title>
        <style>
            body{
                margin:5% 10%;
            }
        </style>
     </head>
    <body>
        <h1>Registration Form</h1>
        <h2>Register Today!</h2>
        
        <form action="process_register.php" method="POST">
            <label for ="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" required>
            <label for ="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" required>
            <label for ="email">Email Address:</label>
            <input type="email" name="email" id="email" required>
            <label for = "password">Password:</label>
            <input type="password" name="password" id="password" required>
            <label for="repeat_password">Confirm Password:</label>
            <input type="password" name="repeat_password" id="repeat_password" required>
            
            <button>Register!</button>
        </form>
        <p>Or please <a href="login.php">login!</a></p>
        <footer>Leonor Diaz for COSW30</footer>
    </body>
</html>