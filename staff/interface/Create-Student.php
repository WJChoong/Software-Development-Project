<!doctype html>
<html>
	<head>
		<title>Untitled Document</title>
	</head>

		<?php require "../design/staff-navbar.php"?>
	<body style="background-color: rgba(0,0,0,0.1);">
		<div class="row bg-light">
			<?php require "../design/navtab-managestudent.php"?>
			<div class="col-md-9">
				<div class="container bg-light card body">
					<h3 class="row justify-content-center font-weight-bold">Create Information</h3>
					<br>
					<form action="" method="post">
						<div class="form-group row">
							<label class="col-3 col-form-label">Name</label> 
							<div class="col-8">
							  <input placeholder="Name" class="form-control here" required="required" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Student ID</label> 
							<div class="col-8">
						    	<input placeholder="Eg: TP012345" class="form-control here" type="text">
							</div>
					  	</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Date of Birth</label> 
							<div class="col-8">
								<input placeholder="dd/mm/yyyy" class="form-control here" type="text">
							</div>
						</div>
					    <div class="form-group row">
					    <label class="col-3 col-form-label">Phone Number</label> 
							<div class="col-8">
								<input placeholder="Phone Number" class="form-control here" required="required" type="text">
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Gender</label> 
							<div class="col-8">
								<select class="custom-select">
									<option value="#">--Gender--</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
						</div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Email</label> 
							<div class="col-8">
								<input placeholder="Email" class="form-control here" required="required" type="text">
							</div>
					    </div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Address</label> 
							<div class="col-8">
								<input placeholder="Address" class="form-control here" type="text">
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
								<input placeholder="Password" class="form-control here" type="text">
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Confirm Password</label> 
							<div class="col-8">
								<input placeholder="Confirm Password" class="form-control here" type="text">
							</div>
					    </div> 
						<div class="form-group row">
							<label class="col-3 col-form-label">Upload Your Photo</label> 
							<div class="col-8">
								<input type="file" class="custom-file-input" id="customFile">
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