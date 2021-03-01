<!doctype html>
<html>
	<head>
	</head>
	<?php
	session_start();
		if(!isset($_SESSION['lect_id'])){
		die(header("location: ../login.php"));
	}
	?>
	<?php require "../design/lec-navbar.php"?>
	<body style="background-color: rgba(0,0,0,0.1);">
		<div class="row bg-light">
			<?php require "../design/lecnavtab-profile.php"?>
				<div class="col-md-9">
				<div class="container bg-light card body">
					<h3 class="row justify-content-center font-weight-bold">Mark Attendance</h3>
					<br><br>
					<table class="table">
					<thead>
						<tr>
							<th>Student ID</th>
							<th>Student Name</th>
							<th>Student Intake</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
<?php
//Step1:Get the information from the form & $_POST[''] is refer to your input object name
$moduleid = $_POST['module_id'];
$date = $_POST['date'];
$start = $_POST['start_time'];
$duration = $_POST['duration'];
$classtype = $_POST['class_type'];

//step 2: do connection to the database
include "../External/conn.php"; //link the conn.php info to here
//step 3: select and compare user from database whether user exist or not(since this is select)
$sql = "SELECT S.student_id, S.student_name, C.course_name
		FROM student S JOIN course C JOIN module M
		WHERE M.module_id = $moduleid
		AND M.module_id = C.module_id
		AND C.course_id = S.course_id";
$result = mysqli_query($conn, $sql);
		//Step 3 - Process result
		if(mysqli_affected_rows($conn)>0){
		for ($i = 0; $i < mysqli_num_rows($result); $i++){
		$row  = mysqli_fetch_assoc($result);

		echo '<tr>';
		echo '<td>'.$row['student_id'].'</td>';				
		echo '<td>'.$row['student_name'].'</td>';
		echo '<td>'.$row['course_name'].'</td>';
		echo '<td><a href = "#" class="btn btn-sm btn-success">Present</a> <a href = "#" class="btn btn-sm btn-success">Absence</a><br>
				  <a href = "#" class="btn btn-sm btn-success">Late</a> <a href = "#" class="btn btn-sm btn-success">Absence With Reason</a></td>';
		}
		}