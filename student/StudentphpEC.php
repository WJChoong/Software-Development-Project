<?php

session_start();
$ECID = $_SESSION["EC_id"];
$StudentID = $_POST['student_id'];
$ECReason = $_POST['EC_reason'];
$ECDate = $_POST['EC_date'];
$LectID = $_POST['lect_id'];

include "conn.php";

$link = mysqli_connect('localhost','root','','sdp assignment','3306');
$sql = "INSERT INTO ec(EC_id, student_id, EC_reason, EC_date, lect_id,) 
VALUES('$ECID','$StudentID','$ECReason','$ECDate', '$LectID');";
	
if(mysqli_query($link, $sql)){
     echo '<script>alert("Successful Submitted")</script>';
}else{
     echo '<script>alert("Submitted failed")</script>';
}

mysqli_close($link);

?>