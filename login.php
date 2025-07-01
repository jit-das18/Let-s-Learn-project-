<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<title>Login SignUp</title>
	<link rel="stylesheet" type="text/css" href="loginStyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- It will redirect to the Home Page after submitting the form -->
  <script>
  $(document).ready(function(){
    $("form").submit(function(){
      alert("Great Job !");
    });
  });
  
  
  
  </script>
</head>
<body>

<br/>
		<div class="form-box">
        <?php

if(isset($_REQUEST['data']))
echo $_REQUEST['data'];

?>
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" id="log" onclick="login()" style="color: #fff;">Log In</button>
				<button type="button" class="toggle-btn" id="reg" onclick="register()">Register</button>
			</div>
			<div class="social-icons">
				<img src="images/icon/fb2.png">
				<img src="images/icon/insta2.png">
				<img src="images/icon/tt2.png">
			</div>
			<!-- Login Form -->
			<form id="login" class="input-group" action="logaction.php" method="GET">
				<div class="inp">
					<img src="images/icon/user.png"><input type="text" id="email" name="uname" class="input-field" placeholder="Username or Phone Number" style="width: 88%; border:none;" required="required">
				</div>
				<div class="inp">
					<img src="images/icon/password.png"><input type="password" id="password" name="pwd" class="input-field" placeholder="Password" style="width: 88%; border: none;" required="required">
				</div>
				<input type="checkbox" class="check-box">Remember Password
				<button type="submit" class="submit-btn">Log In</button>
			</form>
			<div class="other" id="other">
				<div class="instead">
				</div>
				
			</div>
			
			<!-- Registration Form -->
			<form id="register" class="input-group" action="insert.php" method="POST">
				<input type="text" class="input-field" name="username" placeholder="Full Name" required="required">
				<input type="email" class="input-field" name="email" placeholder="Email Address" required="required">
                <input type="number" class="input-field" name="phno" placeholder="Enter your phone number"  required="required">
				<input type="password" class="input-field" placeholder="Create Password" name="password" required="required">
				<input type="password" class="input-field" placeholder="Confirm Password" name="cpassword" required="required">
				<input type="checkbox" class="check-box" id="chkAgree" onclick="goFurther()">I agree to the Terms & Conditions
				<button type="submit" id="btnSubmit" class="submit-btn reg-btn" name="submit">Register</button>
			</form>
		</div>
		<script type="text/javascript" src="script.js"></script>
     
        
</body>
</html>