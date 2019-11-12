<?php
// Add the database connection
include('database.php');


/*
*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*   NEW USER INTO THE DATABASE
*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

/*form validation*/
 if (empty($_POST['first_name'])){
     echo '<p class=error>Please enter your first name.</p>';
 }

if(empty($_POST['last_name'])){
    echo '<p class=error>Please enter your last name.</p>';
}

if(empty($_POST['email'])){
    echo '<p class=error>Please enter your email address.</p>';
}

if(empty($_POST['password'])){
    echo '<p class=error>Please enter a password.</p>';
}

if(!empty($_POST['confirm_password']) && $confirm_password != $password) {
       echo '<p class=error>Passwords must match.</p>';
   }

   if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) && !empty($confirm_password)
   && $confirm_password == $password) {


  $insert_query = "INSERT INTO USER_DIAZ (first_name, last_name, email, password)
                VALUES('$first_name', '$last_name', '$email', '$password')";

   $result = mysqli_query($connection, $insert_query);
    }
    else{
    echo '<p class=error>Please try again.</p>';
    }

    if($result) {
        echo '<p>New user added to database.</p>';
    } else {
        $result = NULL;
        echo '<p>Error entering new user.</p>';
    }
}
/*
*   QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
*/
// Create your query
$query = 'SELECT * FROM USER_DIAZ';

// Run your query
$result = mysqli_query($connection, $query);
// Check if the database returned anything

if($result) {
    // If the database query was successful, store
    // the array of users into a variable
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    // Output an error
	echo '<p class=error>This did not work.</p>';
}

?>

<!doctype html>
<html>
<head>
    <title>My First CRUD</title>
</head>
<body>
    <h1>Create a New User</h1>
    <form action="crud.php" method="POST">
        <p><label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name"></p>

        <p><label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name"></p>

        <p><label for="email">Email</label>
        <input type="email" id="email" name="email"></p>

        <p><label for="password">Password</label>
        <input type="password" id="password" name="password"></p>

        <p><label for="confirm_password">Confirm Password</label>
        <input type="password" id = "confirm_password" name="confirm_password"></p>

        <!--Add a second password input so the user has to retype their password -->

        <button>Register</button>
    </form>

    <h2>Output a List of Users</h2>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php // You will be adding a forEach loop here to output the users
	foreach($rows as $row) {
	echo
            '<tr>
                <td>' .$row['first_name']. '</td>
                <td>' .$row['last_name']. '</td>
                <td>' .$row['email']. '</td>
                <td>' .$row['password']. '</td>
                <td><a href="update.php?id='. $row['user_id'].'">Edit</a></td>
            </tr>';
	}
	?>
        </tbody>
    </table>
</body>
</html>