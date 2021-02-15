<!doctype html>
<html>
	<head>
	</head>

	<?php require "../design/staff-navbar.php"?>
	<body>
		<div class="row bg-light">
			<?php require "../design/navtab-managetimetable.php"?>
			<div class="col-md-9 card body">
				<div class="container bg-light">
					<h3 class="row justify-content-center font-weight-bold">Timetable Arrangement</h3>
					<br>
					<form action="" method="post">
						<div class="form-group row">
							<label class="col-3 col-form-label">Course</label> 
							<div class="col-8">
								<select class="custom-select">
									<option value="#">--Course--</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Module</label> 
							<div class="col-8">
								<select class="custom-select">
									<option value="#">--Module--</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
					  	</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Group</label> 
							<div class="col-8">
								<select class="custom-select">
									<option value="#">--Group--</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Date of Birth</label> 
							<div class="col-8">
								<input class="form-control here" type="date">
							</div>
						</div>	    
					    <div class="form-group row">
							<label class="col-3 col-form-label">Time</label> 
							<div class="col-8">
								<input class="form-control here" type="time">
							</div>
					    </div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Lecturer</label> 
							<div class="col-8">
								<select id="select" name="select" class="custom-select">
									<option value="#">--Lecturer--</option>
									<option value="#">Male</option>
									<option value="#">Female</option>
								</select>
							</div>
					    </div>
					    <div class="form-group row">
							<div class="offset-4 col-8">
								<button name="submit" type="submit" class="btn btn-primary">Confirm</button>
								<button name="submit" type="submit" class="btn btn-primary">Clear</button>
							</div>
					    </div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>