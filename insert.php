<?php
require "conn.php"; // Ensure conn.php contains the mysqli connection logic

// Sanitize user inputs to prevent SQL injection
$username = mysqli_real_escape_string($connection, $_POST['username']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$phno = mysqli_real_escape_string($connection, $_POST['phno']);
$password = mysqli_real_escape_string($connection, $_POST['password']);
$cpassword = mysqli_real_escape_string($connection, $_POST['cpassword']);

// Insert query
$sql = "INSERT INTO `user` (`id`, `username`, `email`, `phno`, `password`, `cpassword`) 
        VALUES (NULL, '$username', '$email', '$phno', '$password', '$cpassword')";

$res = mysqli_query($connection, $sql);

// Check if the record was inserted
if ($res) {
    if (mysqli_affected_rows($connection) > 0) {
        echo "<script>location.href='login.php?data=Record Inserted successfully'</script>";
    }
} else {
    die("Error: " . mysqli_error($connection));
}
?>
