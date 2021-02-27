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

</style>
<body>

<nav>
	<a href="LoginPage">Home page</a>
	<a href="Account.hmtl">Account</a>
	<a href="StudentAttendanceHistory.html">Attendance History</a>
	<a href="StudentTimetable.html">Timetable</a> 	
	<a href="StudentEC.html">Student EC</a> 
	<a href="logout.php">Log Out</a>
</nav>


<center><h1>Timetable based on Attendance<h1></center>
<center><p>“Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle.”<br>
– Christian D. Larson<p></center>
<main>
<table>
<tbody>
<tr>
<td style="text-align: center;" width="150">
<p>Day</p>
</td>
<td style="text-align: center;" width="180">
<p>Date</p>
</td>
<td style="text-align: center;" width="200">
<p>Module</p>
</td>
<td style="text-align: center;" width="200">
<p>Time</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="150">
<p>Monday</p>
</td>
<td style="text-align: center;" width="180">
<p>11 January 2021</p>
</td>
<td style="text-align: center;" width="200">
<p>Information systems</p>
<p>Web Development</p>
</td>
<td style="text-align: center;" width="200">
<p>8.30am-10.30am</p>
<p>12.30pm-2.30pm</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="150">
<p>Tuesday</p>
</td>
<td style="text-align: center;" width="180">
<p>12 January 2021</p>
</td>
<td style="text-align: center;" width="200">
<p>Java Programming</p>
<p>Information System</p>
</td>
<td style="text-align: center;" width="200">
<p>8.30am-10.30am</p>
<p>2.45pm-4.45pm</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="150">
<p>Wednesday</p>
</td>
<td style="text-align: center;" width="180">
<p>13 January 2021</p>
</td>
<td style="text-align: center;" width="200">
<p>Operating System</p>
<p>Web Development</p>
</td>
<td style="text-align: center;" width="200">
<p>8.30am-10.30am</p>
<p>2.00pm-4.00pm</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="150">
<p>Thursday</p>
</td>
<td style="text-align: center;" width="180">
<p>14 January 2021</p>
</td>
<td style="text-align: center;" width="200">
<p>Java Programming</p>
</td>
<td style="text-align: center;" width="200">
<p>2.45pm-4.45pm</p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="150">
<p>Friday</p>
</td>
<td style="text-align: center;" width="180">
<p>15 January 2021</p>
</td>
<td style="text-align: center;" width="200">
<p>Numerical Methods</p>
</td>
<td style="text-align: center;" width="200">
<p>8.30am-10.30am</p>
</td>
</tr>
</tbody>
</table>

</main>
</body>

</html>