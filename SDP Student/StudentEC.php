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
	<a href="Account.hmtl">Account</a>
	<a href="StudentAttendanceHistory.html">Attendance History</a>
	<a href="StudentTimetable.html">Timetable</a> 	
	<a href="StudentEC.html">Student EC</a> 
	<a href="logout.php">Log Out</a>
</nav>

<center><h1>Student's EC<h1></center><br><br>

<main>

<form action="/action_page.php">
	<label for="Date">Date: </label>
	<input type="date"><br><br>
	<label for="subject">Subject: </label>
	<input type="text"><br><br>	
	<label for="subject">Lecturer: </label>
	<input type="text"><br><br>	
	<label for="subject">Main Reason: </label>
	<input type="text"><br><br>
	<label for="myfile">Add your file here:  </label>
	<input type="file" id="myfile" name="myfile"><br><br>
</form>

</main>

</body>

<center><input type="submit" value="Submit" class="btn"><center>	

</html>