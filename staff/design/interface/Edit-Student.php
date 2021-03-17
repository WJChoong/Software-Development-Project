<?php
session_start();

$id = $_GET['student'];
require "../../conn.php";
$sql = "SELECT * FROM student WHERE student_id = '$id'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);

$name = $row["student_name"];
$dob = $row["student_DOB"]
?>
<!doctype html>
<html>
	<head>
		
	</head>

	<?php require "../design/staff-navbar.php"?>
	<body>
		<div class="row bg-light">
			<?php require "../design/navtab-managestudent.php"?>
			<div class="col-md-9">
				<div class="container bg-light card body">
					<h3 class="row justify-content-center font-weight-bold">Edit Information</h3>
					<br>
					<form action="" method="post">
						<div class="form-group row">
							<label class="col-3 col-form-label">Name</label> 
							<div class="col-8">
							  <input class="form-control here" required="required" type="text" value="<?php echo $name; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Student ID</label> 
							<div class="col-8">
						    	<input class="form-control here" type="text">
							</div>
					  	</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Date of Birth</label> 
							<div class="col-8">
								<input class="form-control here" type="text">
							</div>
						</div>
					    <div class="form-group row">
					    <label class="col-3 col-form-label">Phone Number</label> 
							<div class="col-8">
								<input class="form-control here" required="required" type="text">
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Gender</label> 
							<div class="col-8">
								<select class="custom-select">
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
						</div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Email</label> 
							<div class="col-8">
								<input class="form-control here" required="required" type="text">
							</div>
					    </div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Address</label> 
							<div class="col-8">
								<input class="form-control here" type="text">
							</div>
					    </div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Course</label> 
							<div class="col-8">
								<select id="select" name="select" class="custom-select">
									<option value="#">--Course Name--</option>
									<option value="M">Male</option>
									<option value="F">Female</option>
								</select>
							</div>
					    </div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Password</label> 
							<div class="col-8">
								<input class="form-control here" type="password">
							</div>
					    </div>
					    <div class="form-group row">
							<div class="offset-4 col-8">
								<button name="submit" type="submit" class="btn btn-primary">Update Profile</button>
								<button name="submit" type="submit" class="btn btn-primary">Clear</button>
							</div>
					    </div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>