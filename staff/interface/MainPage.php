<!doctype html>
	<html>
	<head>
		<style>
			.container{
				box-shadow: 30px 0px 40px rgba(0,0,0,0.1),/*horizontal vertical and blur*/
				-30px 0px 40px rgba(0,0,0,0.1)
			}
			.btn{
				margin: 5px auto;
			}
			
			@media screen and (max-width: 600px) {
				#title {
					font-size: 30px;
				}
			}
		</style>
	</head>
		
	<?php require "../design/staff-navbar.php"?>
	<br>
	<body style="background-color: rgba(0,0,0,0.1);">
		<div class="container bg-light card-body">
			<picture style="margin: 10px;">
				<img src="../img/Logo-APU.png" class="img-fluid img-thumbnail rounded mx-auto d-block" alt="">
			</picture>
			<br>
			<h3 class="row justify-content-center">
				<strong>Welcome ...</strong>
			</h3>
			<br>
			<div class="row justify-content-center bg-danger">
				<h1 id="title">What you want to do ?</h1>
			</div>
			<div class="row text-center" style="margin:10px;">
				<a class="btn btn-lg btn-secondary col-12 col-sm-5" href="ManageTimetable.php">Manage Timetable</a>
				<a class="btn btn-lg btn-secondary col-12 col-sm-5" href="ManageStudent.php">Manage Students</a>
				<a class="btn btn-lg btn-secondary col-12 col-sm-5" href="ManageStudent.php">Manage Classes</a>
				<a class="btn btn-lg btn-secondary col-12 col-sm-5" href="#">Manage Notification</a>
				<a class="btn btn-lg btn-secondary col-12 col-sm-5" href="Lecturer-Create.php">Add Lecturer</a>
				<a class="btn btn-lg btn-secondary col-12 col-sm-5" href="Staff-Create.php">Add Staff</a>
			</div>	
		</div>
	</body>
</html>