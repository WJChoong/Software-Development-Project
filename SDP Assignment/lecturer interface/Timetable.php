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
	<?php require "../design/lec-navbar.php"?>
	<body style="background-color: rgba(0,0,0,0.1);">
		<div class="row bg-light">
			<?php require "../design/lecnavtab-timetable.php"?>
			<div class="col-md-9  card body">
				<div class="row">
					<form action="" class="col-md-6 mr-auto">
						<div class="input-group mb-3">
							
								<button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All</button>
								<div class="dropdown-menu">
								<?php
									echo '<a class="dropdown-item disabled"><center>Week</center></a>';
									echo '<div role="separator" class="dropdown-divider"></div>';
									$today = strtotime('today 00:00:00');
									$this_week_start = strtotime('-1 week monday 00:00:00');
									$this_week_end = strtotime('sunday 23:59:59');
									$next_week_start = strtotime('monday 00:00:00');
									$next_week_end = strtotime('+1 week sunday 23:59:59');
									$last_week_start = strtotime('-2 week monday 00:00:00');
									$last_week_end = strtotime('-1 week sunday 23:59:59');
									echo date('M j', $today) . ' - Today<br /><br />';
									echo date('M j', $next_week_start) . ' - ' . date('M j', $next_week_end) . ' - Next Week<br /><br />';
									echo date('M j', $this_week_start) . ' - ' . date('M j', $this_week_end) . ' - This Week<br /><br />';
									echo date('M j', $last_week_start) . ' - ' . date('M j', $last_week_end) . ' - Last Week<br />';
								?>
								  
								</div>
							
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
						 include('../external/conn.php');
						//Step 2 - Execute SQL query
						$date1 = date('Y-m-d 00:00:00', strtotime('monday this week'));
						$date2 = date('Y-m-d 23:59:59', strtotime('sunday this week'));
						$sql = "SELECT *, D.module_name
								FROM timetable C JOIN module D 
								WHERE C.module_id = D.module_id 
								AND C.time_time > '$date1' and C.time_time < '$date2'";
						$result = mysqli_query($conn, $sql);
						//Step 3 - Process result
						if(mysqli_affected_rows($conn)>0){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						$timestamp = strtotime($row['time_date']);
						$day = date('D', $timestamp);
						echo '<tr>';
						echo '<td>'.$day.'</td>';
						echo '<td>'.$row['time_date'].'</td>';				
						echo '<td>'.$row['time_time'].'</td>';
						echo '<td>'.$row['module_id'].'<br>'.$row['module_name'].'</td>';
						echo '<td>'.$row['time_group_id'].'</td>';
						}
						}
						?>          
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>