<!doctype html>
<html>
	<head>
		<script src="../jquery-3.5.1.min.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {

				$("#btn-delete").click(function() {
					$("#delete-modal").modal();
				});
			});
		</script>
	</head>
	
	<?php require "../design/staff-navbar.php"?>
	<body style="background-color: rgba(0,0,0,0.1);">
		<div class="row bg-light">
			<?php require "../design/navtab-manageclass.php"?>
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
					<a class="btn btn-lg btn-light ml-auto mr-5" href="#" style="border: solid 1px;">+</a>
				</div>
				<br><br>
				<table class="table">
					<thead>
						<tr>
							<th>No.</th>
							<th>Module</th>
							<th>Intake</th>
							<th>Date</th>
							<th>Time</th>
							<th>Lecturer</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						 for ($i = 1;$i< 10;$i++){
							echo'<tr>
									<td>'.$i.'</td>
									<td>Kent</td>
									<td>UCDF1905ICT(SE)</td>
									<td>25/6/2021</td>
									<td>12:30 PM</td>
									<td>Kent</td>
									<td>
										<a class="btn btn-sm btn-success" href="#">View</a>
										<a class="btn btn-sm btn-success" href="#">Edit</a>
										<span class="btn btn-sm btn-success" id="btn-delete" style="margin: 5px;" data-toggle="modal" data-target="#exampleModalCenter">Delete</span>
									</td>
								</tr>';
						}
						?>          
					</tbody>
				</table>
			</div>
		</div>
		<div class="modal fade" id="delete-modal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Warning</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					 </div>
					<div class="modal-body">
						Are you sure you want to delete the student?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-primary">Confirm</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>