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
				width: 40vw;
			}
		</style>
	</head>
	<?php require "design/staff-navbar.php"?>
	<body style="background-color: rgba(0,0,0,0.1);">
		<div class="container vh-100 bg-light" style="border-left: solid 1px; border-right: solid 1px;">
			<picture style="margin: 10px;">
				<img src="img/Logo-APU.png" class="img-fluid img-thumbnail rounded mx-auto d-block" alt="">
			</picture>
			<br>
			<h3 class="row justify-content-center">
				<strong>Welcome ...</strong>
			</h3>
			<br>
			<div class="row justify-content-center bg-danger">
				<h1>What you want to do ?</h1>
			</div>
			<div class="form-row text-center" style="margin:10px;">
				<a class="btn btn-lg btn-secondary" href="#">Manage Timetable</a>
				<a class="btn btn-lg btn-secondary" href="interface/ManageStudent.php">Manage Students</a>
				<a class="btn btn-lg btn-secondary" href="interface/ManageStudent.php">Manage Classes</a>
				<a class="btn btn-lg btn-secondary" href="#">Manage Notification</a>
			</div>	
		</div>
	</body>
</html>