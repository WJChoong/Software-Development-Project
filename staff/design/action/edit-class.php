<?php
$id = $_GET["id"];
$module = $_POST["module"];
$date = $_POST["date"];
$time = $_POST["time"];
$lectName = $_POST["lectName"];
$lectID = $_POST["lectID"];

require "../../conn.php";
$sql = "UPDATE timetable
        SET time_id  = $module, time_date  = '$date', time_time = '$time', time_group = '$lectName', module_id = '$lectID'
        WHERE  time_id = $id;";

if ($link->query($sql2) === TRUE) {
  header("Location: ../interface/ManageClass.php?status=Success");
} else {
  header("Location: ../interface/ManageClass.php?status=Failed");
}

?>