<?php

//step 1: Initialize the session
session_start();
//Get the information from the form & $_POST[''] is refer to your input object name
$name = $_POST['lecturer_ID'];
$password = $_POST['lecturer_password'];

//step 2: do connection to the database
include "../External/conn.php"; //link the conn.php info to here

//step 3: select and compare user from database whether user exist or not(since this is select)
$sql = "SELECT lect_id FROM lecturer WHERE lect_id ='$name' AND lect_password ='$password'";
$login = mysqli_query($conn, $sql);
if (mysqli_num_rows($login) !== 1) {
  	  die("<script>alert('User not exist. Please input correct Email and Password');window.history.go(-1);</script>");
}
else {

	 echo ("<script>alert('Login Successful!')</script>");
	     // Storing username in session variable 
	     $user = mysqli_fetch_assoc($login);
        $_SESSION['lect_id'] = $user['lect_id'];
	    header("location: ../Timetable.php");
    }
mysqli_close($conn);     
?>