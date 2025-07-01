<?php
ob_start();
session_start();
require "conn.php"; // Ensure conn.php contains the mysqli connection logic

// Securely fetch user inputs
$username = isset($_GET['uname']) ? mysqli_real_escape_string($connection, $_GET['uname']) : '';
$password = isset($_GET['pwd']) ? mysqli_real_escape_string($connection, $_GET['pwd']) : '';

// Prepare the SQL query
$sql = "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'";
$res = mysqli_query($connection, $sql) or die("Query Failed: " . mysqli_error($connection));

// Check if any rows are returned
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    $_SESSION['id'] = session_id();
    $_SESSION['uid'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['phno'] = $row['phno'];
    header("Location: index2.php");
} else {
    header("Location: login.php?data=Invalid Login");
}

?>
