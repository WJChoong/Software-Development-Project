<!DOCTYPE html>
<html>
	<head>
		<title>Attendance System Login</title>
	    <link rel="stylesheet" href="External/navigation bar.css">
	</head>
<style>
  .tab {
    float: left;
	width: 35.33%;
	position: relative;
    left: 150px;
	text-align: left;
    }
    .row:after {content: ""; display: table;  clear: both;
    }
   .tablinks {
    background-color: transparent;
	border: none;
	margin:12px;
	font-size: 15px;
	text-decoration: none;
	}
	.tabcontent {
	webkit-animation-name: fade;
	webkit-animation-duration: 1.5s;
	animation-name: fade;
	animation-duration: 1.5s;
    }
	.slideshow{
	webkit-animation-name: fade;
	webkit-animation-duration: 1.5s;
	animation-name: fade;
	animation-duration: 1.5s;
    }
    @-webkit-keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
    }
	@keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
	}
	.tab button:hover {
    background-color: #ddd;
    }
	.tab button.active {
     color: blue;
     }
	 input[type=text],[type=password] {
	 width: 100%;
     padding: 10px 20px;
     box-sizing: border-box;
     font-size: 16px;
	}
	 input[type=checkbox],[type=submit] {
		 margin:12px;
	 }
	.dot {
     height: 25px;
     width: 25px;
     background-color: #ddd;
     border-radius: 50%;
     display: inline-block;
     }
	 .column {
	 float:left;
	 width: 33.33%;
	 position: relative;
     left: 150px;
	 }
</style>
	<body>
		<li><img src="image/Logo-APU.png" width="75" height="75" alt="System logo" loading="lazy"></img></li>
		<li><a href="login.php"><b>HOME</b></a></li>
		<li><a href="System operation.php">SYSTEM OPERATION</a></li>
		<button class="dropdown">ABOUT SYSTEM
				<i class="arrow down"></i>
				<div class="dropdown-content">
				<a href="#">SYSTEM BACKGROUND</a><hr>
				<a href="Board of directors.php">BOARD OF DIRECTORS</a>
				</div></button>
		<button class="dropdown">CONTACT
		        <i class="arrow down"></i>
				<div class="dropdown-content">
				<a href="FAQs.php">FAQs</a><hr>
				<a href="Contact Information.php">CONTACT INFORMATION</a>
				</div></button>
		<li><a href="#">GALLERY</a></li><br><br>
	
	    <div class="row">
		<div class="tab">
		<button class="tablinks active" id="btn" onclick="openTab(event, 'student')">Student</button>
		<button class="tablinks" onclick="openTab(event, 'lecturer')">Lecturer</button>
		<button class="tablinks" onclick="openTab(event, 'admin')">Administrator</button>
		<hr>
		<div id="student" class="tabcontent">
		<form method="post" action="PHP/login.php">
		<p style="font-size: 24px"><i> Student Sign In </i></p>
		<input type="text" id="student ID" name="student_ID" placeholder="Student ID" required = "required"/><br><br>
		<input type="password" id="student password" name="student_password" placeholder="Password" required = "required"/><br><br>
		<input type="checkbox" onclick="myFunctionS()">Show Password<br>
		<input type="submit" value="LOGIN"><input type="reset" value="CLEAR"></form><br>
		<a href="edit page.html" style="color:blue;">Forget Password?</a>
		</div>
		
		<div id="lecturer" class="tabcontent" hidden>
		<form method="post" action="lecturer interface/login-lec.php">
		<p style="font-size: 24px"><i> Lecturer Sign In </i></p>
		<input type="text" id="lecturer ID" name="lecturer_ID"  placeholder="Lecturer ID" required = "required"/><br><br>
		<input type="password" id="lecturer password" name="lecturer_password" placeholder="Password" required = "required"/><br><br>
		<input type="checkbox" onclick="myFunctionL()">Show Password<br>
		<input type="submit" value="LOGIN"></form><br>
		<a href="edit page.html" style="color:blue;">Forget Password?</a>
		</div>
		
		<div id="admin" class="tabcontent"  hidden>
		<form method="post" action="PHP/login.php">
		<p style="font-size: 24px"><i> Administrator Sign In </i></p>
		<input type="text" id="admin ID" name="admin_ID" placeholder="Administrator ID" required = "required"/><br><br>
		<input type="password" id="admin password" name="admin password"  placeholder="Administrator Password" required = "required"/><br><br>
		<input type="checkbox" onclick="myFunctionA()">Show Password<br>
		<input type="submit" value="LOGIN"> <a href="edit page.html" style="color:blue;">Forget Password?</a></form>
		
		</div>
		</div>
		
		<div class ="tab" style="margin: 50px">
		<div class ="slideshow">
	    <img src="image/logo.jpg" width="500px" height="250px" alt="system logo"></img></div>
		<div class ="slideshow">
		<img src="image/img 1.png" width="500px" height="250px" alt="image 1"></img></div>
		<div class ="slideshow">
		<img src="image/img 2.png" width="500px" height="250px" alt="image 2"></img></div>
		<div class ="slideshow">
		<img src="image/img 3.jpg" width="500px" height="250px" alt="image 3"></img></div>
		<div class ="slideshow">
		<img src="image/img 4.png" width="500px" height="250px" alt="image 4"></img></div>
		<div class ="slideshow">
		<img src="image/img 5.jpg" width="500px" height="250px" alt="image 5"></img></div>
		<div class ="slideshow">
	    <img src="image/img 6.jpg" width="500px" height="250px" alt="image 6"></img></div>
		<center>
		<span class="dot" onClick="currentDiv(1)"></span>
		<span class="dot" onClick="currentDiv(2)"></span>
		<span class="dot" onClick="currentDiv(3)"></span>
		<span class="dot" onClick="currentDiv(4)"></span>
		<span class="dot" onClick="currentDiv(5)"></span>
		<span class="dot" onClick="currentDiv(6)"></span>
		<span class="dot" onClick="currentDiv(7)"></span></center>
		</div>
		</div><br>
		
		<div class ="row">
		<div class="column">
		<p>FOLLOW US</p><br>
        <img src ="image/email_16.png" alt="Email" width="20px" height="20px"></img>
        <img src ="image/rss_16.png" alt="Rss" width="20px" height="20px"></img>
        <img src ="image/twitter_16.png" alt="Twitter" width="20px" height="20px"></img>
		<p>2020-2021</p>
		<p>APU ATTENDANCE MATTER.,LTD.All Right Reserved.</p>
		<p>System Design: Choong, Chong, Dallwin and Lee</p></div>
		
		<div class="column">
		<p>VISIT OUR WEBSITES</p><br>
		<img src ="image/email_16.png" alt="Email" width="20px" height="20px"></img> apufacebook.com<br>
		<img src ="image/email_16.png" alt="Email" width="20px" height="20px"></img> apuinstagram.com<br>
		<img src ="image/email_16.png" alt="Email" width="20px" height="20px"></img> apumoodle.com
       </div>
		</div>
		<script type="text/javascript" src="External/tab.js"></script>
		<script type="text/javascript" src="External/slideshow.js"></script>
	</body>
</html>
    
