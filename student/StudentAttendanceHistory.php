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
	<a href="Account.php">Account</a>
	<a href="StudentAttendanceHistory.php">Attendance History</a>
	<a href="StudentTimetable.php">Timetable</a> 	
	<a href="StudentEC.php">Student EC</a> 
	<a href="logout.php">Log Out</a>
</nav>

<Main>

<h1>Attendance History</h1>
<p>“Attend today, and achieve tomorrow” and “80% of success is showing up!”</p>
	<div class="left">
		<input type="submit" value="Attendance" class="btn">	
	</div>


<h2>Semester 1</h2>
<table>
	<tr>
		<th>Attend ID</th>
		<th>Overall Class</th>
		<th>Present Class</th>
	</tr>
<?php
$link = mysqli_connect('localhost','root','','sdp assignment','3306');
foreach($link->query('SELECT attend_status,attend_id,COUNT(*)
FROM attendancestudent WHERE attend_status="Present" and attend_id="AT88" GROUP BY attend_id;') as $column)	
foreach($link->query('SELECT attend_status,attend_id,COUNT(*)
FROM attendancestudent WHERE attend_status="Present" and "Absent" or attend_id="AT88" GROUP BY attend_id;') as $row) {
echo "<tr>";
echo "<td>" . $row['attend_id'] . "</td>";
echo "<td>" . $row['COUNT(*)'] . "</td>";
echo "<td>" . $column['COUNT(*)'] . "</td>";
echo "</tr>";
}
?>

</table>
<br>


<h2>Semester 2</h2>
<table>
	<tr>
		<th>Attend ID</th>
		<th>Overall Class</th>
		<th>Present Class</th>
	</tr>
<?php
$link = mysqli_connect('localhost','root','','sdp assignment','3306');
foreach($link->query('SELECT attend_status,attend_id,COUNT(*)
FROM attendancestudent WHERE attend_status="Present" and attend_id="AT99" GROUP BY attend_id;') as $column)	
foreach($link->query('SELECT attend_status,attend_id,COUNT(*)
FROM attendancestudent WHERE attend_status="Present" and "Absent" or attend_id="AT99" GROUP BY attend_id;') as $row) {
echo "<tr>";
echo "<td>" . $row['attend_id'] . "</td>";
echo "<td>" . $row['COUNT(*)'] . "</td>";
echo "<td>" . $column['COUNT(*)'] . "</td>";
echo "</tr>";
}
?>
</table>

<h2>Semester 3</h2>
<table>
	<tr>
		<th>Attend ID</th>
		<th>Overall Class</th>
		<th>Present Class</th>
	</tr>
<?php
$link = mysqli_connect('localhost','root','','sdp assignment','3306');
foreach($link->query('SELECT attend_status,attend_id,COUNT(*)
FROM attendancestudent WHERE attend_status="Present" and attend_id="AT77" GROUP BY attend_id;') as $column)	
foreach($link->query('SELECT attend_status,attend_id,COUNT(*)
FROM attendancestudent WHERE attend_status="Present" and "Absent" or attend_id="AT77" GROUP BY attend_id;') as $row) {
echo "<tr>";
echo "<td>" . $row['attend_id'] . "</td>";
echo "<td>" . $row['COUNT(*)'] . "</td>";
echo "<td>" . $column['COUNT(*)'] . "</td>";
echo "</tr>";
}
?>
</table>


<h2>Semester 4</h2>
<table>
	<tr>
		<th>Attend ID</th>
		<th>Overall Class</th>
		<th>Present Class</th>
	</tr>
<?php
$link = mysqli_connect('localhost','root','','sdp assignment','3306');
foreach($link->query('SELECT attend_status,attend_id,COUNT(*)
FROM attendancestudent WHERE attend_status="Present" and attend_id="AT66" GROUP BY attend_id;') as $column)	
foreach($link->query('SELECT attend_status,attend_id,COUNT(*)
FROM attendancestudent WHERE attend_status="Present" and "Absent" or attend_id="AT66" GROUP BY attend_id;') as $row) {
echo "<tr>";
echo "<td>" . $row['attend_id'] . "</td>";
echo "<td>" . $row['COUNT(*)'] . "</td>";
echo "<td>" . $column['COUNT(*)'] . "</td>";
echo "</tr>";
}
?>
</table>

<h2>Semester 5</h2>
<table>
	<tr>
		<th>Attend ID</th>
		<th>Overall Class</th>
		<th>Present Class</th>
	</tr>
<?php
$link = mysqli_connect('localhost','root','','sdp assignment','3306');
foreach($link->query('SELECT attend_status,attend_id,COUNT(*)
FROM attendancestudent WHERE attend_status="Present" and attend_id="AT55" GROUP BY attend_id;') as $column)	
foreach($link->query('SELECT attend_status,attend_id,COUNT(*)
FROM attendancestudent WHERE attend_status="Present" and "Absent" or attend_id="AT55" GROUP BY attend_id;') as $row) {
echo "<tr>";
echo "<td>" . $row['attend_id'] . "</td>";
echo "<td>" . $row['COUNT(*)'] . "</td>";
echo "<td>" . $column['COUNT(*)'] . "</td>";
echo "</tr>";
}
?>
</table>

<br><br>

<h1>Overall Attendance</h1>
<p>“Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle.”<br>
– Christian D. Larson</p>
	<table>
	<tr>
		<th>Attend Id</th>
		<th>Attend Status</th>
		<th>Lecturer Id</th>
		<th>Student Id</th>
		<th>Time Id</th>
		<th>Semester</th>
	</tr>
	<?php
	$link = mysqli_connect('localhost','root','','sdp assignment','3306');
	$sql = "SELECT * FROM attendancestudent";
	$result = $link-> query($sql);
	
	if($result->num_rows > 0) {
		while ($row = $result-> fetch_assoc()){
			echo "<tr><td>" . $row["attend_id"] . "</td><td>" . $row["attend_status"] . "</td><td>" . $row["lect_id"] . "</td><td>" . $row["student_id"] . "</td><td>" . $row["time_id"] . "</td><td>" . $row["semester"] . "</td></tr>";
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

