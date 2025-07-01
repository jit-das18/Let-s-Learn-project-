

<?php
// Establish connection to the database using MySQLi
$connection = @mysqli_connect("localhost", "root", "", "portfolio");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// If you want to display a success message for debugging purposes, uncomment the following line
// echo "Connected successfully";
?>
