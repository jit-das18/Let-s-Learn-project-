<?php
ob_start();
require_once('conn.php');
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$id=$_POST['record_id'];
$query="update user set username='$username',email='$email',password='$password' where id='$id'";
if(mysqli_query($connection,$query))
header("location:profile.php?data=record has been edited succesfully");
?>

