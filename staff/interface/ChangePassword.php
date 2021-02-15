<!doctype html>
<html>
	<head>
	</head>
    <?php require "../design/staff-navbar.php"?>
    <br>
    <br>
    <br>
	<body style="background-color: rgba(0,0,0,0.1);">
		<div class="container col-md-5 card body bg-light">
            <h3 class="row justify-content-center font-weight-bold">Change Password</h3>
            <form class="justify-content-center" action="" method="post">
                <div class="form-group row">
                    <label class="col-3 col-form-label">Staff ID</label> 
                    <div class="col-8">
                    <input placeholder="Name" class="form-control here" required="required" type="text">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3 col-form-label">Old Password</label> 
                    <div class="col-8">
                        <input placeholder="Password" class="form-control here" type="text">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3 col-form-label">New Password</label> 
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
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Create Profile</button>
                    </div>
                </div>
            </form>
		</div>
	</body>
</html>