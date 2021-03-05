<!doctype html>
<html>
	<head>
	</head>
	<?php
	session_start();
		if(!isset($_SESSION['lect_id'])){
		die(header("location: ../Main Page/login.php"));
	}
	?>
	<?php require "design/lec-navbar.php"?>
	<body style="background-color: rgba(0,0,0,0.1);">
		<div class="row bg-light">
			<?php require "design/lecnavtab-studentec.php"?>
				<div class="col-md-9  card body">
				<div class="row">
					<form action="" class="col-md-6 mr-auto">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All</button>
								<div class="dropdown-menu" style="text-align:center">
								<?php
									echo '<a class="dropdown-item disabled">Status</a>';
									echo '<div role="separator" class="dropdown-divider"></div>';
									echo '<a href="Studentec.php" class="dropdown-item">N/A</a>
										  <a href="#" class="dropdown-item">Accepted</a>
										  <a href="#" class="dropdown-item">Rejected</a>';
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
						<tr style="text-align: center">
							<th>Student ID</th>
							<th>Student Name</th>
							<th>Course ID</th>
							<th>Course Name</th>
							<th>Upload Date</th>
							<th>EC Reason</th>
							<th>EC Photo</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody style="text-align: center">
						<?php
			             //Step 1 - Establishing connection
						 include('../conn.php');
						//Step 2 - Handling connection error
						//Step 3 - Execute SQL query
						$sql = "SELECT * 
								FROM ec E JOIN student S JOIN course C
								WHERE E.EC_Status = '2'
								AND E.student_id = S.student_id
								AND S.course_id = C.course_id
								AND E.lect_id = '".$_SESSION['lect_id']."'
								GROUP BY EC_id";
						$result = mysqli_query($link, $sql);
						//Step 4 - Process result
						if(mysqli_affected_rows($link)>0){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						echo '<tr>';
					echo '<td>'.$row['student_id'].'</td>';
					echo '<td>'.$row['student_name'].'</td>';
					echo '<td>'.$row['course_id'].'</td>';
					echo '<td>'.$row['course_name'].'</td>';
					echo '<td>'.$row['EC_date'].'</td>';					
					echo '<td>'.$row['EC_reason'].'</td>';
				    echo '<td><img src="'.$row['EC_photo'].'"width = 100 height = 100 alt = 
					"Image not available"/></td>';	
					echo '<td><a href = "action/acceptec.php?EC_id='.$row['EC_id'].'" class="btn btn-sm btn-success">Accepted</a> 
							<a href = "action/rejectec.php?EC_id='.$row['EC_id'].'" class="btn btn-sm btn-success">Rejected</a></td>';
				}
			}
			
			//Step 5 - Free resource & close connection
			mysqli_free_result($result);
			mysqli_close($link);

			?>      
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>