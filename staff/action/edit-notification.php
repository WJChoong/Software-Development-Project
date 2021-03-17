<?php
$id = $_POST["id"];
$staffID = $_POST["staffID"];
$title = $_POST["title"];
$content = $_POST["content"];

require "../../conn.php";
$sql = "UPDATE noctification
        SET Notification_id = $id, staff_id = $staffID, Noctification_title = $title, Noctification_content = $content
        WHERE Notification_id = $id;";
 
if ($link->query($sql2) === TRUE) {
  header("Location: ../interface/ManageNotification.php?status=Success");
} else {
  header("Location: ../interface/ManageNotification.php?status=Failed");
}

?>