
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
/* Animated linear gradient background */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    height: 100vh;
    background: linear-gradient(270deg, #6a5acd, #00bcd4, #6a5acd);
    background-size: 600% 600%;
    animation: gradientShift 15s ease infinite;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Gradient animation */
@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* Form styles */
form {
    background-color: rgba(255, 255, 255, 0.95);
    padding: 30px 40px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    animation: fadeIn 1.5s ease-in-out;
}

/* Input fields */
.input-field {
    padding: 10px;
    margin: 10px 0;
    width: 100%;
    max-width: 300px;
    border: 2px solid #ccc;
    border-radius: 6px;
    font-size: 16px;
    outline: none;
    transition: 0.3s;
}

.input-field:focus {
    border-color: #6a5acd;
    box-shadow: 0 0 10px #6a5acd;
    animation: borderPulse 1s infinite alternate;
}

/* Submit button */
.submit-btn {
    margin-top: 20px;
    padding: 12px 25px;
    font-size: 16px;
    color: white;
    background: linear-gradient(45deg, #6a5acd, #00bcd4);
    background-size: 200% auto;
    border: none;
    border-radius:
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>edit details</title>
</head>
<body>
<?php
require_once('conn.php');
$id=$_REQUEST['id'];
$sql="select * from user where id = '$id'";
$query=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($query);
?>
<form method="post" action="edit_action.php" enctype="multipart/form-data" onsubmit="return validate()">
Username:
<input type="text" class="input-field" name="username" id="name" value="<?php echo $row['username'];?>"/><br/></br>
Email:
<input type="email" class="input-field" name="email" id="email" value="<?php echo $row['email'];?>"/><br/><br/>
Password:
<input type="password" class="input-field"  name="password" id="pass" value="<?php echo $row['password'];?>"/><br/><br/>
<input type="hidden" name="record_id" value="<?php echo $row['id'];?>"/>
<input type="submit" name="submit" value="submit" class="submit-btn reg-btn"/>

</form>
</body>
</html>