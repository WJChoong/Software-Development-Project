<!DOCTYPE html>
<html>
<style>

main
{
	margin-left:300px;
	font-family: Times New Roman;
	font-size: 20px;
}

nav
{
	font-family: Times New Roman;
	font-size: 25px;
	position: fixed;
	top:0;
	left:0;
	width: 230px;
	height:100%;
	background:black;
	display: flex;
	flex-direction: column;
	align-item: ;
	justify-content: center;
}

nav a 
{
	display: inline-block;
	text-decoration:none;
	padding: 40px 20px;
	font-size:0.8em;
	font-weight: ;
	text-transform: uppercase;
	letter-spacing:0.05em;
	color:white
}

nav a:hover
{
	text-decoration:underline;
	color:green;
}

table, th, td 
{
  border: 1px solid black; 
  background-color: #e6e6ff;
}

body 
{
	background-color:#f2f2f2;
	padding: 10px;
}

th
{
	 width: 300px;
}

</style>
<body>

<nav>
	<a href="LoginPage">Home page</a>
	<a href="StudentProfile.php">Account</a>
	<a href="StudentAttendanceHistory.php">Attendance History</a>
	<a href="StudentTimetable.php">Timetable</a> 	
	<a href="StudentEC.php">Student EC</a> 
	<a href="logout.php">Log Out</a>
</nav>


<center><h1>Student's Timetable<h1></center>
<center><p>“Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle.”<br>
– Christian D. Larson<p></center>
<main>
<table>
	<body>
	<table>
	<tr>
		<th>time id</th>
		<th>Date</th>
		<th>Time</th>
		<th>Time Group</th>
		<th>Module Id</th>
		<th>Lecturer Id</th>
	</tr>
	<?php
	$link = mysqli_connect('localhost','root','','sdp assignment','3306');
	$sql = "SELECT * FROM timetable";
	$result = $link-> query($sql);
	
	if($result->num_rows > 0) {
		while ($row = $result-> fetch_assoc()){
			echo "<tr><td>" . $row["time_id"] . "</td><td>" . $row["time_date"] . "</td><td>" . $row["time_time"] . "</td><td>" . $row["time_group"] . "</td><td>" . $row["module_id"] . "</td><td>" . $row["lect_id"] . "</td></tr>";
		}
	}
	else{
		echo "No Results";
	}
	$link-> close();
	?>
	</table>
	</body>
	
</table>

</main>
</body>

</html>