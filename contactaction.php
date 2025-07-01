<?php
require "conn.php"; // Ensure conn.php contains the mysqli connection logic

// Sanitize user inputs to prevent SQL injection
$firstname = $_POST['firstname'];
$lastname =  $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['txtarea'];
// Insert query
$sql = "INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `message`) VALUES (NULL, '$firstname', '$lastname', '$email', '$message')";

$res = mysqli_query($connection, $sql);

// Check if the record was inserted
if ($res) {
    if (mysqli_affected_rows($connection) > 0) {
        echo "<script>location.href='index2.php?data=massage submitted successfully..'</script>";
    }
} else {
    die("Error: " . mysqli_error($connection));
}
?>
