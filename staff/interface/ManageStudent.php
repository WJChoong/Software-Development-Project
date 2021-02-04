<!doctype html>
<html>
	<head>
	</head>
	
	<?php require "../design/staff-navbar.php"?>
	<body style="background-color: rgba(0,0,0,0.1);">
		<div class="row bg-light">
			<?php require "../design/navtab-managestudent.php"?>
			<div class="col-md-9 card body">
				<div class="row">
					<form action="" class="col-md-6 mr-auto">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All</button>
								<div class="dropdown-menu">
								<?php
									echo '<a class="dropdown-item disabled">Intake</a>';
									echo '<div role="separator" class="dropdown-divider"></div>';
									for ($i = 0; $i < 10; $i++){
										echo '<a class="dropdown-item">'.$i.'</a>';
									}
								?>
								  <div role="separator" class="dropdown-divider"></div>
								  <a class="dropdown-item" href="#">Separated Category</a>
								</div>
							</div>
							<input type="text" class="form-control" aria-label="Search input with dropdown button">
							<div class="input-group-append">
								<button class="btn btn-success" type="button">Search</button>
							</div>
						</div>
					</form>
					<a class="btn btn-lg btn-light ml-auto mr-5" href="Student-Create.php" style="border: solid 1px;">+</a>
				</div>
				<br><br>
				<table class="table">
					<thead>
						<tr>
							<th>No.</th>
							<th>Student Name</th>
							<th>Student ID</th>
							<th>Intake</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						 for ($i = 1;$i< 10;$i++){
							echo'<tr>
									<td>'.$i.'</td>
									<td>Clark</td>
									<td>Kent</td>
									<td>UCDF1905ICT(SE)</td>
									<td>
										<a class="btn btn-sm btn-success" style="margin: 5px;" href="Student-View.php">View</a>
										<a class="btn btn-sm btn-success" style="margin: 5px;" href="Student-Edit.php">Edit</a>
										<a class="btn btn-sm btn-success" style="margin: 5px;" href="#">Delete</a>
									</td>
								</tr>';
						}
						?>          
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>