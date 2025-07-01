<?php
ob_start();
session_start();

// Check if the session ID matches
if (isset($_SESSION['id']) && $_SESSION['id'] == session_id()) {
    require "conn.php"; // Ensure conn.php contains the mysqli connection logic

    // Fetch user details using the session UID
    $sql = "SELECT * FROM `user` WHERE `id`='" . mysqli_real_escape_string($connection, $_SESSION['uid']) . "'";
    $res = mysqli_query($connection, $sql);

    if ($res && mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['uid'] = $row['id'];
        // Add more session variables if needed, e.g., $_SESSION['username'] = $row['username'];
    } else {
        // Handle case when the user is not found
        header("Location: login.php?data=Session Expired");
        exit();
    }
} else {
    // Redirect to login if session is not valid
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>Lets-learn</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(window).on('scroll', function(){
  			if($(window).scrollTop()){
  			  $('nav').addClass('black');
 			 }else {
 		   $('nav').removeClass('black');
 		 }
		})
	</script>
</head>
<body>
<!-- Navigation Bar -->
	<header id="header">
		<nav>
			<div class="logo"><img src="images/icon/logo.jpg" alt="logo"></div>
			<ul>
				<li><a class="active" href="">Home</a></li>
				<li><a href="#portfolio_section">Portfolio</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="#contactus_section">Contact</a></li>
			</ul>
			
           <font color="
DodgerBlue" face="Open Sans, sans-serif " size="+1"><b>
           Welcome: <?php echo $row['username']; ?></b>
           </font>
            <a class="get-started" href="profile.php">profile</a>
            
			<img src="images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
		</nav>
		<div class="head-container">
			<div class="quote">
				<p>The beautiful thing about learning is that nobody can take it away from you</p>
				<h5>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and directed research!</h5>
				<div class="play">
					<img src="images/icon/play.png" alt="play"><span><a href="https://youtu.be/a3HOQTrQGqU?si=a83-5y4yRjagjf9I" target="_blank">Watch Now</a></span>
				</div>
			</div>
			<div class="svg-image">
				<img src="images/extra/svg1.jpg" alt="svg">
			</div>
		</div>
		<div class="side-menu" id="side-menu">
			<div class="close" onclick="sideMenu(1)"><img src="images/icon/close.png" alt=""></div>
			<div class="user">
				<img src="images/creator/roshan.jpeg" alt="Username">
				<p>Username</p>
			</div>
			<ul>
				<li><a href="#about_section">About</a></li>
				<li><a href="#portfolio_section">Portfolio</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="#contactus_section">Contact</a></li>
				<li><a href="#feedBACK">Feedback</a></li>
			</ul>
		</div>
	</header>


<!-- Some Popular Subjects -->
	<div class="title">
		<span>Popular Subjects..</span>
	</div>
	<br><br>
	<div class="course">
		<center><div class="cbox">
		<div class="det"><a href="subjects/computer_courses.html#python"><img src="images/courses/book.png">PYTHON</a></div>
		<div class="det"><a href="subjects/computer_courses.html#java"><img src="images/courses/d1.png">JAVA</a></div>
		
		<div class="det"><a href="subjects/quiz.html"><img src="images/courses/d1.png">Daily Quiz</a></div>
		</div></center>
		<div class="cbox">
		<div class="det"><a href="subjects/computer_courses.html#c++"><img src="images/courses/computer.png">C++</a></div>
		<div class="det"><a href="subjects/computer_courses.html#data"><img src="images/courses/data.png">Data Structures</a></div>
		<div class="det"><a href="subjects/computer_courses.html#algo"><img src="images/courses/algo.png">Algorithm</a></div>
		<div class="det det-last"><a href="subjects/computer_courses.html_css"><img src="images/courses/projects.png">WEB DEVELOPMENT</a></div>
		</div>
	</div>

	
<!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<center><p style="font-size: 50px; padding: 100px">About</p></center>
		<div class="about-content">
				<div class="side-image">
					<img class="sideImage" src="images/extra/e3.jpg">
				</div>
				<div class="side-text">
					<h2>What you think about us ?</h2>
					<p>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and directed research.<br> Educational website can include websites that have games, videos or topic related resources that act as tools to enhance learning and supplement classroom teaching. These websites help make the process of learning entertaining and attractive to the student, especially in today's age. <br>Using HTML(HyperText Markup Language), CSS(Cascading Style Sheet), JavaScript, we can make learning more easier and in a interesting way.</p>
				</div>
		</div>
	</div>


<!-- PORTFOLIO -->
	<div class="diffSection" id="portfolio_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px;">Portfolio</p></center>
		<div class="content">
			<p>
				"Education is the passport to the future, for tomorrow belongs to those who prepare for it today." "Your attitude, not your aptitude, will determine your altitude." "If you think education is expensive, try ignorance." "The only person who is educated is the one who has learned how to learn …and change."
			</p>
		</div>
	</div>
	<div class="extra">
		<p>We're increasing this data every year</p>
		<div class="smbox">
		<span><center><div class="data">154</div><div class="det">Enrolled Students</div></center></span>
		<span><center><div class="data">62</div><div class="det">Total Courses</div></center></span>
		<span><center><div class="data">56</div><div class="det">Placed Students</div></center></span>
		<span><center><div class="data">27</div><div class="det">Total Projects</div></center></span>
		</div>
	</div>


<!-- TEAM -->
<div class="diffSection" id="team_section">
		<center><p style="font-size: 50px; padding-top: 100px; padding-bottom: 60px;">We're the Creators</p></center>
		<div class="totalcard">
			<div class="card">
				<center><img src="images/creator/jit.jpg"></center>
				<center><div class="card-title">Jit Das</div>
				<div id="detail">
					<p>“ You can teach a student a lesson for a day; but if you can teach him to learn by creating curiosity, he will continue the learning process as long as he lives “</p>
					<div class="duty"></div>
					<a href="https://www.instagram.com/jeet_das_30?igsh=MWx1NnZ5MDY4Y3dmMw==" target="_blank"><button class="btn-roshan">Follow +</button></a>
				</div>
				</center>
			</div>
			<div class="card">
				<center><img src="images/creator/srijan.jpg"></center>
				<center><div class="card-title">Srijan Chakraborty</div>
				<div id="detail">
					<p>“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p>
					<div class="duty"></div>
					<a href="https://www.instagram.com/srijan_chakraborty_45?igsh=MTNxaGM4NXQ2OGlrZw==" target="_blank"><button class="btn-akhil">Follow +</button></a>
				</div>
				</center>
			</div>
			<div class="card">
				<center><img src="images/creator/ritam.jpg"></center>
				<center><div class="card-title">Ritam Das</div>
				<div id="detail">
					<p>“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p>
					<div class="duty"></div>
					<a href= "https://www.instagram.com/__ritamx?utm_source=ig_web_button_share_sheet&igsh=MWFydmY2Y2N0OG93cg==" target="_blank"><button class="btn-akhil">Follow +</button></a>
				</div>
				</center>
			</div>
			<div class="card">
				<center><img src="images/creator/ishan.jpg"></center>
				<center><div class="card-title">Ishan Dutta</div>
				<div id="detail">
					<p>“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p>
					<div class="duty"></div>
					<a href="https://www.instagram.com/mr.ishan_dutta?utm_source=ig_web_button_share_sheet&igsh=dnMycTk1cjRlaW92" target="_blank"><button class="btn-akhil">Follow +</button></a>
				</div>
				</center>
			</div>
			<div class="card">
				<center><img src="images/creator/jubraj.jpg"></center>
				<center><div class="card-title">jubaraj Hansda</div>
				<div id="detail">
					<p>“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p>
					<div class="duty"></div>
					<a href="https://www.instagram.com/lvjubaraj?utm_source=ig_web_button_share_sheet&igsh=MWI1ZnZ4Mm5yY3l0Yg==" target="_blank"><button class="btn-akhil">Follow +</button></a>
				</div>
	        </div>
				</center>
				<div class="card">
					<center><img src="images/creator/sohini.jpg"></center>
					<center><div class="card-title">Sohini Das</div>
					<div id="detail">
						<p>“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p>
						<div class="duty"></div>
						<a href="https://www.instagram.com/sohinidas4?utm_source=ig_web_button_share_sheet&igsh=MWh0OTVveTB6YXdpdw==" target="_blank"><button class="btn-akhil">Follow +</button></a>
					</div>
					</center>
				</div>
		</div>
	</div>

<!-- SERVICES -->
	<div class="service-swipe">
		<div class="diffSection" id="services_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color: #fff;">Services</p></center>
		</div>
		<a href="subjects/computer_courses.html"><div class="s-card"><img src="images/icon/computer-courses.png"><p>Free Online Computer Courses</p></div></a>
		<a href="subjects/jee.html"><div class="s-card"><img src="images/icon/brainbooster.png"><p>Building Concepts for Competitive Exams</p></div></a>
		<a href="#"><div class="s-card"><img src="images/icon/online-tutorials.png"><p>Online Video Lectures</p></div></a>
		
		<a href="#"><div class="s-card"><img src="images/icon/p3.png"><p>Performance and Ranking Report</p></div></a>
		<a href="#contactus_section"><div class="s-card"><img src="images/icon/discussion.png"><p>Discussion with Our Tutors & Mentors</p></div></a>
		<a href="subjects/quiz.html"><div class="s-card"><img src="images/icon/q1.png"><p>Daily Brain Teasing Questions to Improve IQ</p></div></a>
		<a href="#contactus_section"><div class="s-card"><img src="images/icon/help.png"><p>24x7 Online Support</p></div></a>
	</div>

<!-- Reviews by Students -->
<div id="makeitfull">
	<a href="#review_section"><img src="images/icon/makeitfull.png"></a>
</div>
<div class="review">
	<div class="diffSection" id="review_section">
		<center><p style="font-size: 40px; padding: 100px; padding-bottom: 40px; color: #2E3D49;">What the Students Say About Us?</p></center>
	</div>
	<div class="rev-container">
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/humanNotExist1.jpg"><p>Sophie Daniel</p>
				<h6>Java</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					I did Java Fundamenetal course with Rishab Sir. It was a great experience. The brain teasers and assignments, actually the whole lot of content was really good. Some problems were challenging yet interesting. Was explained very well where ever I stuck...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/humanNotExist2.jpg"><p>Clayton Clair</p>
				<h6>C/C++</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					When I was watching "Dear Zindagi", I could relate Sharukh Khan to Arnav Bhaiya. The way Sharukh Khan was giving life lessons to Alia Bhatt, in the same way Arnav Bhaiya will give coding life lessons which will guide you throughout your code life...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/humanNotExist3.jpg"><p>Devyn Sethi</p>
				<h6>JEE</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					LearnEd was an amazing experience for me. I belong to electronics department and had a little experience in coding but I think it has helped me think things through in a much more analytical manner. Coding is important no matter which branch you are in. It gives you a better understanding about how to approach a problem...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/humanNotExist4.jpg"><p>Rylee Phillips</p>
				<h6>Python</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					This was my first complete course at coding blocks. I attended the Python course in Winter 2020 and loved it which made me join the full course. Shubham bhaiya and Ayush Bhaiya(TA) have good knowledge about the field and were very helpful in making us understand the concepts. I would certainly recommend this to anyone...
				</p>
			</div>
		</div>
	</div>
</div>

<!-- CONTACT US -->
	<div class="diffSection" id="contactus_section">
		<center><p style="font-size: 50px; padding: 100px">Contact Us</p></center>
		<div class="csec"></div>
		<div class="back-contact">
			<div class="cc">
			<form action="contactaction.php" method="post" enctype="multipart/form-data">
				<label>First Name <span class="imp">*</span></label><label style="margin-left: 185px">Last Name <span class="imp">*</span></label><br>
				<center>
				<input type="text" name="firstname" style="margin-right: 10px; width: 175px" required="required"><input type="text" name="lastname" style="width: 175px" required="required"><br>
				</center>
				<label>Email <span class="imp">*</span></label><br>
				<input type="text" name="email" style="width: 100%" required="required"><br>
				<label>Message</label><br>
				<input type="text" name="txtarea"><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
			</div>
		</div>
	</div>


<!-- FEEDBACK -->
	<div class="title2" id="feedBACK">
		<span>Give Feedback</span>
		<div class="shortdesc2">
			<p>Please share your valuable feedback to us</p>
		</div>
	</div>

	<div class="feedbox">
		<div class="feed">
			<form action="mailto:roshank9419@gmail.com" method="post" enctype="text/plain">
				<label>Your Name</label><br>
				<input type="text" name="" class="fname" required="required"><br>
				<label>Email</label><br>
				<input type="email" name="mail" required="required"><br>
				<label>Provide feedback here...</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
		</div>
	</div>

<!-- Sliding Information -->
	<marquee style="background: linear-gradient(to right, #4e37fa, #1bb9f2); margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20"><div class="marqu">"Education is the passport to the future, for tomorrow belongs to those who prepare for it today." "Your attitude, not your aptitude, will determine your altitude." "If you think education is expensive, try ignorance." "The only person who is educated is the one who has learned how to learn …and change."</div></marquee>

<!-- FOOTER -->
	<footer>
		<div class="footer-container">
			<div class="left-col">
				<img src="images/icon/logo-copy.png" style="width: 200px;">
				<div class="logo"></div>
				<div class="social-media">
					<a href="#"><img src="images/icon\fb.png"></a>
					<a href="#"><img src="images/icon\insta.png"></a>
					<a href="#"><img src="images/icon\tt.png"></a>
					<a href="#"><img src="images/icon\ytube.png"></a>
					<a href="#"><img src="images/icon\linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">Copyright © 2024 Created By Srijan,Jit,Ritam,Sohini,Jubaraj,Ishan.</p>
				<br><p><img src="images/icon/location.png">Brainware University<br>398, Ramkrishnapur Rd, near Jagadighata Market, Barasat, Kolkata, West Bengal 700125</p><br>
				<p><img src="images/icon/phone.png"> +91-9836190177<br><img src="images/icon/mail.png">&nbsp; letslearn@gmail.com</p>
			</div>
			<div class="right-col">
				<h1 style="color: #fff">Our Newsletter</h1>
				<div class="border"></div><br>
				<p>Enter Your Email to get our News and updates.</p>
				<form class="newsletter-form">
					<input class="txtb" type="email" placeholder="Enter Your Email">
					<input class="btn" type="submit" value="Submit">
				</form>
			</div>
		</div>
	</footer>

</body>
</html>
