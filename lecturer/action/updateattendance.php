<?php
$status = $_POST['status'];
$studentid = $_POST['student_id'];


//step 1: do connection to the database
include "../../conn.php"; //link the conn.php info to here

//step 2:create the SQL statement (since this is update)
$sql = "INSERT INTO attendance (attend_status, student_id, lect_id) VALUES ('$status', '$studentid', '".$_SESSION['lect_id']."')";
$result = mysqli_query ($link, $sql);

//step 3:execute the SQL statement
mysqli_query($link, $sql); //the $conn is the variable in conn.php which store the database information

//step 4: to check the query executed or not!
if(mysqli_affected_rows($link) <=0)
{
	die("<script>alert('Something went wrong. Please try again later.')</script>");
}
else
	echo "<script>alert('Attendance Update')</script>";

//step 6 - Free resource & close connection
  mysqli_close($link);
  echo '<script></script>';
?>