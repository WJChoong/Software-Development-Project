<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sdp assignment";

$link = mysqli_connect($host, $user, $pass, $db);

if (!$link) {
	die("Connection failed: ".mysqli_connect_error());
}
?>