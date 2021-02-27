<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>

	<?php require "../design/lec-navbar.php"?>
	<body style="background-color: rgba(0,0,0,0.1);">
		<div class="row bg-light">
			<?php require "../design/lecnavtab-profile.php"?>
			<div class="col-md-9">
				<div class="container vh-130 bg-light card body">
					<picture style="margin: 10px;">
						<img src="../image/Logo-APU.png" class="img-fluid img-thumbnail rounded mx-auto d-block" alt="">
					</picture>
					<br>
					<h5 class="row justify-content-center font-weight-bold">Full Name</h5>
					<h5 class="row justify-content-center">
						<?php 
						//Step 1 - Establishing connection
						 include('../external/conn.php');
						//Step 2 - Execute SQL query
						$sql = 'SELECT lect_name FROM lecturer WHERE lect_id = "PKF"';
						$result = mysqli_query($conn, $sql);
						//Step 3 - Process result
						if(mysqli_affected_rows($conn)==1){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						echo '<h5 class="row justify-content-center">'.$row['lect_name'].'</h5>';
						}
						}
						?>
					</h5>
					<br>
					<h5 class="row justify-content-center font-weight-bold">Lecturer ID</h5>					
					<h5 class="row justify-content-center">
						<?php 
						//Step 1 - Establishing connection
						 include('../external/conn.php');
						//Step 2 - Execute SQL query
						$sql = 'SELECT lect_id FROM lecturer WHERE lect_id = "PKF"';
						$result = mysqli_query($conn, $sql);
						//Step 3 - Process result
						if(mysqli_affected_rows($conn)==1){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						echo '<h5 class="row justify-content-center">'.$row['lect_id'].'</h5>';
						}
						}
						?>
					</h5>
					<br>
					<h5 class="row justify-content-center font-weight-bold">Date of Birth</h5>
					<h5 class="row justify-content-center">
						<?php 
						//Step 1 - Establishing connection
						 include('../external/conn.php');
						//Step 2 - Execute SQL query
						$sql = 'SELECT lect_DOB FROM lecturer WHERE lect_id = "PKF"';
						$result = mysqli_query($conn, $sql);
						//Step 3 - Process result
						if(mysqli_affected_rows($conn)==1){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						echo '<h5 class="row justify-content-center">'.$row['lect_DOB'].'</h5>';
						}
						}
						?>
					</h5>
					<br>
					<h5 class="row justify-content-center font-weight-bold">Phone Number</h5>
					<h5 class="row justify-content-center">
						<?php 
						//Step 1 - Establishing connection
						 include('../external/conn.php');
						//Step 2 - Execute SQL query
						$sql = 'SELECT lect_num FROM lecturer WHERE lect_id = "PKF"';
						$result = mysqli_query($conn, $sql);
						//Step 3 - Process result
						if(mysqli_affected_rows($conn)==1){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						echo '<h5 class="row justify-content-center">'.$row['lect_num'].'</h5>';
						}
						}
						?>
					</h5>
					<br>
					<h5 class="row justify-content-center font-weight-bold">Address</h5>
					<h5 class="row justify-content-center">
						<?php 
						//Step 1 - Establishing connection
						 include('../external/conn.php');
						//Step 2 - Execute SQL query
						$sql = 'SELECT * FROM lecturer WHERE lect_id = "PKF"';
						$result = mysqli_query($conn, $sql);
						//Step 3 - Process result
						if(mysqli_affected_rows($conn)==1){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						echo '<h5 class="row justify-content-center" style="text-align:center">'.$row['lect_no'].'<br>'.$row['lect_street'].'<br>'.$row['lect_city'].'</h5>';
						}
						}
						?>
					</h5>
					<br>
					<h5 class="row justify-content-center font-weight-bold">Nationality</h5>
					<h5 class="row justify-content-center">
						<?php 
						//Step 1 - Establishing connection
						 include('../external/conn.php');
						//Step 2 - Execute SQL query
						$sql = 'SELECT * FROM lecturer WHERE lect_id = "PKF"';
						$result = mysqli_query($conn, $sql);
						//Step 3 - Process result
						if(mysqli_affected_rows($conn)==1){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						echo '<h5 class="row justify-content-center">'.$row['lect_country'].'</h5>';
						}
						}
						?>
					</h5>
					<br>
				</div>
			</div>
		</div>
	</body>
</html>