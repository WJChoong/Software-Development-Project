
<!DOCTYPE HTML>
<html>
<style>

main
{
	margin-left:300px;
	font-family: Times New Roman;
	font-size: 35px;
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

body 
{
	background-image: url('apu_still01_entrance_0.jpg');
	background-color:#f2f2f2;
	padding: 10px;
}

.btn 
{
  background-color: #66ff66;
  color: Black;
  padding: 15px;
  margin: 10px 0;
  border: none;
  width: 15%;
  border-radius: 20px;
  cursor: pointer;
  font-size: 25px;
}

.btn:hover 
{
  background-color: #ff1a1a;
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

<center><h1>Student's EC<h1></center><br><br>

<main>

<form action="/action_page.php">
	<label for="attend_id">Attendance ID: </label>
	<input type="attend_id"><br><br>
	<label for="student_id">Student ID: </label>
	<input type="student_id"><br><br>
	<label for="EC_reason">EC Reason: </label>
	<input type="EC_reason"><br><br>
	<label for="EC_date">EC Date: </label>
	<input type="EC_date"><br><br>
	<label for="lect_id">Lecturer ID: </label>
	<input type="lect_id"><br><br>
	<label for="myfile">Add your file here:  </label>
	<input type="file" id="myfile" name="myfile"><br><br>
</form>
	
</main>

</body>

<center><input type="submit" value="Submit" class="btn"><center><br><br>	

	<label for="EC_Status">EC Status: </label>
</html>