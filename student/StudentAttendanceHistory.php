<!DOCTYPE html>
<html>
<style>

main
{
	margin-left:300px;
}

nav
{
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

body 
{
  background-color:#f2f2f2;
  font-family: Times New Roman;
  font-size: 25px;
  padding: 10px;
}

table, th, td 
{
  border: 1px solid black; 
  background-color: #e6e6ff;
}

.btn 
{
  background-color: #66ff66;
  color: Black;
  padding: 15px;
  margin: 10px 0;
  border: none;
  width: 25%;
  border-radius: 20px;
  cursor: pointer;
  font-size: 25px;
}

.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 50px;
}
.btn:hover 
{
  background-color: #ff1a1a;
}

th
{
	 width: 250px;
}


function percentage(partialValue, totalValue) {
   return (100 * partialValue) / totalValue;
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

<Main>

<h1>Attendance History</h1>
<p>“Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle.”<br>
– Christian D. Larson</p>
	<table>
	<tr>
		<th>Attend Id</th>
		<th>Attend Status</th>
		<th>Lecturer Id</th>
		<th>Student Id</th>
		<th>Attend Module</th>
		<th>Attend Date</th>
	</tr>
	<?php
	$link = mysqli_connect('localhost','root','','sdp assignment','3306');
	$sql = "SELECT * FROM attendance";
	$result = $link-> query($sql);
	
	if($result->num_rows > 0) {
		while ($row = $result-> fetch_assoc()){
			echo "<tr><td>" . $row["attend_id"] . "</td><td>" . $row["attend_status"] . "</td><td>" . $row["lect_id"] . "</td><td>" . $row["student_id"] . "</td><td>" . $row["attend_module"] . "</td><td>" . $row["attend_date"] . "</td></tr>";
		}
	}
	else{
		echo "No Results";
	}
	$link-> close();
	?>
	</table>

<br><br>
</body>
	
</Main>

</html>

