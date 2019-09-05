<!doctype html>
<html>
    <head>
        <meta charset = "utf-8"><title>Login Form</title>
        <style>
            body{
                margin:20%;
                margin-top:7%;
            }
          
        </style>
        </head>
    <body>
        <h1>Login Form</h1>
        <p>Please enter your email address and password to login.</p>
        
        <form action="process_login.php" method="POST">
            <label for ="email">Email Address:</label>
            <input type="email" name="email" id="email" required>
             
            <label for = "password">Password:</label>
            <input type="password" name="password" id="password" required>
            
            <p><button>Log In!</button></p>
        </form>
        <p>Please register <a href="register.php">here</a></p>
    <footer> COSW30 Leonor Diaz</footer>
    </body>
</html>