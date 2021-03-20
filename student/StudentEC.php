
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
	<a href="StudentProfile.php">Account</a>
	<a href="StudentAttendanceHistory.php">Attendance History</a>
	<a href="StudentTimetable.php">Timetable</a> 	
	<a href="StudentEC.php">Student EC</a> 
	<a href="logout.php">Log Out</a>
</nav>

<center><h1>Student's EC<h1></center><br><br>

<main>

<form action = "StudentphpEC.php" method = "POST">

	<label for="student_id">Student ID: </label>
	<input type="text" id="student_id" name="student_id" ><br><br>
	<label for="EC_reason">EC Reason: </label>
	<input type="text" id="EC_reason" name="EC_reason" ><br><br>
	<label for="EC_date">EC Date: </label>
	<input type="date" id="EC_date" name="EC_date" ><br><br>
	<label for="lect_id">Lecturer Name: </label>
	<input type="text" id="lect_id" name="lect_id" ><br><br>
	<center><input type="submit" value="Submit"class="btn"></center>
</form>
	
</main>

</body>	

</html>