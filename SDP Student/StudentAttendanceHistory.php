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



<Main>
<h1>Attendance History</h1>
<p>“Attend today, and achieve tomorrow” and “80% of success is showing up!”</p>
<div class="container">
<table>
<tbody>
<tr>
<td style="text-align: center;" width="220">
<p><strong>Module</strong></p>
</td>
<td style="text-align: center;" width="220">
<p><strong>Overall Class</strong></p>
</td>
<td style="text-align: center;" width="220">
<p><strong>Overall Percentage</strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="220">
<p>Information System</p>
<p>&nbsp;</p>
<p>Operating System</p>
<p>&nbsp;</p>
<p>Web Development</p>
<p>&nbsp;</p>
<p>Java Programming</p>
<p>&nbsp;</p>
<p>Numerical Methods</p>
</td>
<td style="text-align: center;" width="200">
<p>9/11</p>
<p>&nbsp;</p>
<p>10/11</p>
<p>&nbsp;</p>
<p>11/11</p>
<p>&nbsp;</p>
<p>10/11</p>
<p>&nbsp;</p>
<p>11/11</p>
</td>
<td style="text-align: center;" width="200">
<p>72%</p>
<p>&nbsp;</p>
<p>90%</p>
<p>&nbsp;</p>
<p>100%</p>
<p>&nbsp;</p>
<p>90%</p>
<p>&nbsp;</p>
<p>100%</p>
</td>
</tr>
</tbody>
</table>
</div>
<p>&nbsp;</p>


<h1>Absent Date</h1>
<p>“University keeps you safe, it educates you, it prepares you for your future. Don’t miss out!”</p>
<table>
<tbody>
<tr>
<td style="text-align: center;" width="220">
<p><strong>Module</strong></p>
</td>
<td style="text-align: center;" width="220">
<p><strong>Date</strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" width="220">
<p>Information System</p>
<p>&nbsp;</p>
<p>Java Programming</p>
<p>&nbsp;</p>
<p>Information System</p>
<p>&nbsp;</p>
<p>Operating System</p>
</td>
<td style="text-align: center;" width="220">
<p>23/11/2020</p>
<p>&nbsp;</p>
<p>7/12/2020</p>
<p>&nbsp;</p>
<p>9/12/2020</p>
<p>&nbsp;</p>
<p>11/01/2021</p>
</td>
</tr>
</tbody>
</table>
</div>
<p>&nbsp;</p>


</body>

	<div class="center">
		<input type="submit" value="Attendance" class="btn">	
	</div>
</Main>

</html>

