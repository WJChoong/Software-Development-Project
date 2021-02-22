<!DOCTYPE html>
<html>
    <head>
		<title>Contact Information</title>
	    <link rel="stylesheet" href="External/navigation bar.css">
		<!--Phone Logo, Fax Logo, Envelop Logo-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	</head>
<style>
#header {
    font-family: Garamond;
    margin-left: 150px;
    left:15px;
}
p {
	font-family: Garamond;
    font-size: 18px;
    margin-left: 150px;
    left:15 px;
    text-align: justify;
}
.row:after {content: ""; display: table;  clear: both;
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
		<li><a href="login.php">HOME</a></li>
		<li><a href="System operation.php">SYSTEM OPERATION</a></li>
		<button class="dropdown">ABOUT SYSTEM
				<i class="arrow down"></i>
				<div class="dropdown-content">
				<a href="#">SYSTEM BACKGROUND</a><hr>
				<a href="Board of directors.php">BOARD OF DIRECTORS</a>
				</div></button>
		<button class="dropdown"><b>CONTACT</b>
		        <i class="arrow down"></i>
				<div class="dropdown-content">
				<a href="FAQs.php">FAQs</a><hr>
				<a href="Contact Information.php"><b>CONTACT INFORMATION</b></a>
				</div></button>
		<li><a href="#">GALLERY</a></li><br><br>
		
		<h2 id="header" style="font-size: 20px"><u>Contact-Contact Information</u></h2>
		<div class="row">
		<div class="column">
		<h3 id="header">University Location</h3>
		<iframe src="https://maps.google.com/maps?q=APU&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0;margin-left: 150px;" allowfullscreen></iframe></div>
		
		<div class="column">
		<h3 id="header">Contact Information</h3>
		<p><b>Phone</b></p>
	    <p><i class="fa fa-phone" style="color:red"></i> +603 1234 5678</p>									
		<p><b>Fax</b></p>
		<p><i class="fa fa-fax" style='color:red'></i> +603 8765 4321</p>
		<p><b>Email</b></p>
		<p><i class="fa fa-envelope" style='color:red'></i> apuattendancematter@mail.com</p>
		</div></div>
		
		<div class="row">
	    <div class="column" style="text-align:center">
		<h3 id="header">Office Location</h3>
		<p style="text-align:center"><i class="fa fa-briefcase" style='font-size:36px; color:darkblue'></i><br>
		Asia Pacific University<br>
		Technology Park Malaysia<br>
		Bukit Jalil, Kuala Lumpur 57000<br>
		Malaysia</p>
		</div>
		
		<div class="column">
		<h3 id="header">Student Service</h3>
		<p> That is so great to hear! If you have any system issue or inquiries, please do not hesitate to contact us.</p>
		<p>You can also send us enquiries or feedback by filling out our contact form in the following link, and we'll engage you in the shortest possible time!</p>
		<p><i class="fa fa-envelope" style='color:darkblue'></i> apustudentservice@gmail.com</p>
		</div></div>
		