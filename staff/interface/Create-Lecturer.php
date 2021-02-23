<?php
session_start();
?>
<!doctype html>
<html>
	<head>
		<title>Untitled Document</title>
	</head>

		<?php require "../design/staff-navbar.php"?>
	<body style="background-color: rgba(0,0,0,0.1);">
		<div class="row bg-light">
			<?php require "../design/navtab-addlecturer.php"?>
			<div class="col-md-9">
				<div class="container bg-light card body">
					<h3 class="row justify-content-center font-weight-bold">Create Information</h3>
					<br>
					<form action="" method="post">
						<div class="form-group row">
							<label class="col-3 col-form-label">Name</label> 
							<div class="col-8">
							  <input placeholder="Name" class="form-control here" name="name" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Date of Birth</label> 
							<div class="col-8">
								<input placeholder="dd/mm/yyyy" class="form-control here" name="dob" type="date">
							</div>
						</div>
					    <div class="form-group row">
					    <label class="col-3 col-form-label">Phone Number</label> 
							<div class="col-8">
								<input placeholder="Phone Number" class="form-control here" name="phone" type="text">
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Gender</label> 
							<div class="col-8">
								<select class="custom-select" name="Gender">
									<option value="">--Gender--</option>
									<option value="M">Male</option>
									<option value="F">Female</option>
								</select>
							</div>
						</div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Email</label> 
							<div class="col-8">
								<input placeholder="Email" class="form-control here" name="email" type="text">
							</div>
					    </div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Street</label> 
							<div class="col-8">
								<input placeholder="Street" class="form-control here" name="street" type="text">
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Postcode</label> 
							<div class="col-8">
								<input placeholder="Postcode" class="form-control here" name="postcode" type="text">
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">City</label> 
							<div class="col-8">
								<input placeholder="City" class="form-control here" name="city" type="text">
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Country</label> 
							<div class="col-8">
								<input placeholder="Country" class="form-control here" name ="country" type="text">
							</div>
					    </div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Course</label> 
							<div class="col-8">
								<select id="select" name="select" class="custom-select">
									<option value="#">--Course Name--</option>
									<option value="#">Male</option>
									<option value="#">Female</option>
								</select>
							</div>
					    </div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Password</label> 
							<div class="col-8">
								<input placeholder="Password" class="form-control here" name="pass" type="password">
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Confirm Password</label> 
							<div class="col-8">
								<input placeholder="Confirm Password" class="form-control here" name="pass2" type="password">
							</div>
					    </div> 
						<div class="form-group row">
							<label class="col-3 col-form-label">Upload Your Photo</label> 
							<div class="col-8">
								<input type="file" class="custom-file-input" id="customFile" name="photo">
								<label class="custom-file-label ml-3">Choose file</label>
							</div>
					    </div> 
					    <div class="form-group row">
							<div class="offset-4 col-8">
								<button name="submit" type="submit" class="btn btn-primary">Create Profile</button>
							</div>
					    </div>
					</form>
				</div>
			</div>
		</div>
		<script>
			// Add the following code if you want the name of the file appear on select
			$(".custom-file-input").on("change", function() {
			  var fileName = $(this).val().split("\\").pop();
			  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
			});
		</script>
	</body>
</html>