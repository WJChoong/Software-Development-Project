<!doctype html>
<html lang="en">
    <head>
    </head>

    <?php require "../design/staff-navbar.php"?>
    <body>    
        <body style="background-color: rgba(0,0,0,0.1);">
		<div class="row bg-light">
			<?php require "../design/navtab-managenotification.php"?>
            <div class="col-md-9">
			<div class="col-md-9">
				<div class="container bg-light card body">
					<h3 class="row justify-content-center font-weight-bold">Edit Information</h3>
					<br>
					<form action="" method="post">
						<div class="form-group row">
							<label class="col-3 col-form-label">Title</label> 
							<div class="col-8">
							  <input class="form-control here" required="required" type="text" disabled="true" value="me">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Date</label> 
							<div class="col-8">
						    	<input class="form-control here" type="text" disabled="true" value="me">
							</div>
					  	</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Time</label> 
							<div class="col-8">
								<input class="form-control here" type="text" disabled="true" value="me">
							</div>
						</div>
					    <div class="form-group row">
					    <label class="col-3 col-form-label">Staff Name</label> 
							<div class="col-8">
								<input class="form-control here" required="required" type="text" disabled="true" value="me">
							</div>
					    </div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Email</label> 
							<div class="col-8">
								<input class="form-control here" required="required" type="text" disabled="true" value="me">
							</div>
					    </div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Content</label> 
							<div class="col-8">
								<textarea class="form-control here" rows="10" cols="50" disabled="true">value</textarea>
							</div>
					    </div>
					    <div class="form-group row">
							<div class="offset-4 col-8">
								<button name="Edit" type="submit" class="btn btn-primary">Edit</button>
								<button name="Delete" type="submit" class="btn btn-primary">Delete</button>
							</div>
					    </div>
					</form>
				</div>
			</div>
		</div>
    </body>
</html>