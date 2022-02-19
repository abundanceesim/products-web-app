<?php
$servername = 'localhost';   //variables are assigned to the database properties and these are used to connect with the database.
$username = 'app';
$password = 'password';
$schema = 'assignment03';

/**
 * This page creates a connection to the database from which data would be retrieved and used throughout subsequent pages.
 */
// Create connection
$mysqli = mysqli_connect($servername, $username, $password, $schema);

// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}    
echo "Connected successfully!";
?>
