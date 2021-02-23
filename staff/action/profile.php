<?php
session_start();
//connect to database
require "conn.php"; 

//get data
$sql1 = "SELECT staff_id, 
                staff_name,
                staff_DOB, 
                staff_num  
         FROM staff 
         ORDER BY staff_id 
         DESC LIMIT 1";
$results = mysqli_query($link,$sql1); //return whether there is a result

if(mysqli_num_rows($results)>0){
    $row = mysqli_fetch_assoc($results);
}
?>