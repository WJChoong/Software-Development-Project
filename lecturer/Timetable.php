<!doctype html>
<html>
	<head>
	</head>
	<?php
	session_start();
		if(!isset($_SESSION['lect_id'])){
		echo ("<script>alert('Oops! Please Log In First!')</script>");
		die("<script>;window.history.go(-1);</script>");
	}
	?>
	<?php require "design/lec-navbar.php"?>
	<body style="background-color: rgba(0,0,0,0.1);">
		<div class="row bg-light">
			<?php require "design/lecnavtab-timetable.php"?>
			<div class="col-md-9  card body">
				<div class="row">
					<form action="" class="col-md-6 mr-auto">
						<div class="input-group mb-3">
							<input type="text" class="form-control" aria-label="Search input with dropdown button">
							<div class="input-group-append">
								<button class="btn btn-success" type="button">Search</button>
							</div>
						</div>
					</form>
								<button class="btn btn-success" type="button"><a href="MarkAttendance.php" style="text-decoration:none; color:white">Mark Attendance</a></button>
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
						</tr>
					</thead>
					<tbody>
						<?php
			             //Step 1 - Establishing connection
						 include('../conn.php');
						//Step 2 - Execute SQL query
						$date1 = date('Y-m-d 00:00:00', strtotime('today'));
						$date2 = date('Y-m-d 23:59:59', strtotime('sunday this week'));
						$sql = "SELECT *, M.module_name
								FROM timetable T JOIN module M
								WHERE T.module_id = M.module_id 
								AND T.time_date = '$date1'
								AND M.lect_id = '".$_SESSION['lect_id']."'
								GROUP BY T.time_id";
						$result = mysqli_query($link, $sql);
						//Step 3 - Process result
						if(mysqli_affected_rows($link)>0){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						$timestamp = strtotime($row['time_date']);
						$day = date('D', $timestamp);
						echo '<tr>';
						echo '<td>'.$day.'</td>';
						echo '<td>'.$row['time_date'].'</td>';				
						echo '<td>'.$row['time_time'].'</td>';
						echo '<td>'.$row['module_id'].'<br>'.$row['module_name'].'</td>';
						echo '<td>'.$row['time_group'].'</td>';
						}
						}
						?>          
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>