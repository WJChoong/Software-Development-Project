<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>

	<?php require "../design/staff-navbar.php";?>
	<body>
		<div class="row bg-light">
			<?php require "../design/navtab-managestudent.php"?>
			<div class="col-md-9">
			<?php require "../action/view-student.php"; ?>
				<div class="container vh-130 bg-light card body">
					<picture style="margin: 10px;">
						<img src="../img/Logo-APU.png" class="img-fluid img-thumbnail rounded mx-auto d-block" alt="">
					</picture>
					<br>
					<h5 class="row justify-content-center font-weight-bold">Name</h5>
					<h5 class="row justify-content-center">
						<?php echo $name;?>
					</h5>
					<br>
					<h5 class="row justify-content-center font-weight-bold">Student ID</h5>					
					<h5 class="row justify-content-center">
						<?php echo $id;?>
					</h5>
					<br>
					<h5 class="row justify-content-center font-weight-bold">Date of Birth</h5>
					<h5 class="row justify-content-center">
						<?php echo $dob;?>
					</h5>
					<br>
					<h5 class="row justify-content-center font-weight-bold">Phone Number</h5>
					<h5 class="row justify-content-center">
						<?php echo $num;?>
					</h5>
					<br>
					<h5 class="row justify-content-center font-weight-bold">Gender</h5>
					<h5 class="row justify-content-center">
						<?php echo $gender;?>
					</h5>
					<br>
					<h5 class="row justify-content-center font-weight-bold">Email</h5>
					<h5 class="row justify-content-center">
						<?php echo $email;?>
					</h5>
					<br>
					<h5 class="row justify-content-center font-weight-bold">Street</h5>
					<h5 class="row justify-content-center">
						<?php echo $street;?>
					</h5>
					<br>
					<h5 class="row justify-content-center font-weight-bold">State</h5>
					<h5 class="row justify-content-center">
						<?php echo $state;?>
					</h5>
					<br>
					<h5 class="row justify-content-center font-weight-bold">City</h5>
					<h5 class="row justify-content-center">
						<?php echo $city;?>
					</h5>
					<br>
					<h5 class="row justify-content-center font-weight-bold">Postcode</h5>
					<h5 class="row justify-content-center">
						<?php echo $postcode;?>
					</h5>
					<br>
					<h5 class="row justify-content-center font-weight-bold">Country</h5>
					<h5 class="row justify-content-center">
						<?php echo $country;?>
					</h5>
					<br> 
					<h5 class="row justify-content-center font-weight-bold">Course</h5>
					<h5 class="row justify-content-center">
						<?php echo $course;?>
					</h5>
					<br>

				</div>
			</div>
		</div>
	</body>
</html>