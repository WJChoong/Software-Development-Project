<?php
session_start();
		if(!isset($_SESSION['lect_id'])){
		die(header("location: ../Main Page/login.php"));
	}
$module_id = $_POST['module_id'];
$date = $_POST['date'];
$student_id = $_POST['student_id'];
$status = $_POST["attendance_status"];


//step 1: do connection to the database
include "../../conn.php"; //link the conn.php info to here

//step 2:create the SQL statement (since this is update)
	
    $sql = "INSERT INTO attendance (attend_status, lect_id, student_id, attend_module, attend_date) VALUES";
    foreach ($student_id as $key => $value) {
     $sql .= "('$status[$key]','".$_SESSION['lect_id']."', '$value', '$module_id','$date'),";
    }
    $sql = rtrim($sql, ',');   
//step 3:execute the SQL statement
mysqli_query($link, $sql); //the $conn is the variable in conn.php which store the database information

//step 4: to check the query executed or not!
if(mysqli_affected_rows($link) <=0)
{
	die("<script>alert('Something went wrong. Please try again later.');window.history.go(-1);</script>");
}
else
	echo "<script>alert('Attendance Update')</script>";

//step 6 - Free resource & close connection
  mysqli_close($link);
  echo '<script></script>';
?>