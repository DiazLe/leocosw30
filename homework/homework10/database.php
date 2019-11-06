



<?php
// Create environment variables
$hostname   = getenv('DB_HOSTNAME');
$username   = getenv('DB_USERNAME_CLASS');
$password   = getenv('DB_PW_CLASS');
$dbname     = getenv('DB_UI');
// Establish the connection to the database
$connection = mysqli_connect($hostname, $username, $password, $dbname) OR die('Could not connect to MySQL: ' . mysqli_connect_error() );
mysqli_set_charset($connection, 'utf-8');

?>

