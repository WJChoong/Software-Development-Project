<!doctype html>
<html>
	<head>
	</head>
	
	<?php require "../design/lec-navbar.php"?>
	<body style="background-color: rgba(0,0,0,0.1);">
		<div class="row bg-light">
			<?php require "../design/lecnavtab-attendancehistory.php"?>
			<div class="col-md-9 card body">
				<div class="row">
					<form action="" class="col-md-6 mr-auto">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All</button>
								<div class="dropdown-menu">
								<?php
									echo '<a class="dropdown-item disabled">Module</a>';
									echo '<div role="separator" class="dropdown-divider"></div>';
									 //Step 1 - Establishing connection
									include('../external/conn.php');
									//Step 2 - Execute SQL query
									$sql = 'SELECT * FROM table';
									$result = mysqli_query($conn, $sql);
									//Step 4 - Process result
									if(mysqli_affected_rows($conn)>0){
									for ($i = 0; $i < mysqli_num_rows($result); $i++){
									$row  = mysqli_fetch_assoc($result);
									echo '<tr>';
									echo '<td>'.$row['EC_student_id'].'</td>';
									echo '<td>'.$row['EC_date'].'</td>';					
									echo '<td>'.$row['EC_reason'].'</td>';
									echo '<td><img src="'.$row['EC_photo'].'"width = 100 height = 100 alt = 
									"Image not available"/></td>';	
									echo '<td><a href = "#"><button>Accepted</button></a> <a href = "#"><button>Rejected</button></a></td>';
									}
									}
								?>
								  
								</div>
							</div>
							<input type="text" class="form-control" aria-label="Search input with dropdown button">
							<div class="input-group-append">
								<button class="btn btn-success" type="button">Search</button>
							</div>
						</div>
					</form>
				</div>
				<br><br>
				<table class="table">
					<thead>
						<tr>
							<th>Day</th>
							<th>Date</th>
							<th>Time</th>
							<th>Module</th>
							<th>Intake</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i =  array("Monday","Tuesday","Wednesday","Thursday","Friday");
						$i[1] = "Monday";
						
						 for ($i = 1;$i< 6;$i++){
							echo'<tr>
									<td>'.$i.'</td>
									<td>2/2/2021</td>
									<td>8:30am - 10:30am</td>
									<td>Software Development Project</td>
									<td>UCDF1905ICT(SE)</td>
								<td>
										<a class="btn btn-sm btn-success" style="margin: 5px;" href="#">Edit</a>
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