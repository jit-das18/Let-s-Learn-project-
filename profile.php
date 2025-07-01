<?php
session_start();
require "conn.php"; 

if (isset($_SESSION['uid'])) {
    $uid = mysqli_real_escape_string($connection, $_SESSION['uid']);

    $sql = "SELECT * FROM `user` WHERE `id`='$uid'";
    $res = mysqli_query($connection, $sql);

    if ($res && mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
    } else {
        echo "User not found.";
    }
} else {
    echo "Session is not set.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="png" href="logo-copy.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Profile</title>
<style>
/* Full-page styling */
body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    overflow: hidden;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #2c3e50;
    color: #fff;
    position: relative;
}

/* Background animation */
body::before {
    content: '';
    position: absolute;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, #74b9ff, #0984e3, #6c5ce7, #b2bec3);
    animation: gradient-animate 6s infinite alternate;
    z-index: -1;
    filter: blur(50px);
    transform: translate(-25%, -25%);
}

@keyframes gradient-animate {
    0% { transform: translate(-25%, -25%); }
    50% { transform: translate(0, 0); }
    100% { transform: translate(-25%, -25%); }
}

/* Form styling */
form {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    padding: 100px;
    width: 400px;
    text-align: center;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    animation: bounce 0.5s infinite alternate;
}

@keyframes bounce {
    0% { transform: translateY(0); }
    100% { transform: translateY(-10px); }
}

/* Profile picture */
.profile-pic {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background: #fff;
    margin: 0 auto 20px;
    background-image: url('logo-copy.png');
    background-size: cover;
    background-position: center;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
}

/* Table styling */
table {
    width: 100%;
    margin-top: 10px;
    border-collapse: collapse;
    color: #fff;
}

th {
    font-size: 22px;
    padding: 10px;
    text-transform: uppercase;
}

td {
    font-size: 20px;
    padding: 10px;
}

/* Button styling */
button {
    background: #6c5ce7;
    color: white;
    font-size: 16px;
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: transform 0.3s ease, background-color 0.3s ease;
    display: inline-block;
    margin: 10px 0;
}

button:hover {
    background: #a29bfe;
    transform: translateY(-5px);
}

button a {
    text-decoration: none;
    color: white;
    display: block;
}

button a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>
<form>
    <!-- Profile Picture -->
    <div class="profile-pic"></div>

    <!-- Profile Table -->
    <table>
        <tr>
            <th colspan="2">Your Profile</th>
        </tr>
        <tr>
            <td>Name: <?php echo $row['username']; ?></td>
        </tr>
        <tr>
            <td>E-Mail: <?php echo $row['email']; ?></td>
        </tr>
        <tr>
            <td>Ph.No: <?php echo $row['phno']; ?></td>
        </tr>
    </table>
    <button><a href="logout.php">LOG OUT</a></button>
    <button><a href="edit_profile.php?id=<?php echo $row['id'];?>">EDIT PROFILE</a></button>
    <button><a href="index2.php"> HOME</a></button>
</form>
</body>
</html>
