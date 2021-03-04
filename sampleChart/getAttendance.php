<?php

include "dbFunctions.php"; 

$query = "SELECT COUNT(sn), status FROM attendance GROUP BY status";
$result = mysqli_query($link, $query);

$attendanceList = array();
while ($row = mysqli_fetch_assoc($result)) {
    $attendance = array();
    $attendance['count'] = $row['COUNT(sn)'];
	if ($row['status'] == 0) {
		$attendance['status'] = 'Absent';
		$attendance['color'] = 'red';
	} else {
		$attendance['status'] = 'Present';
		$attendance['color'] = 'green';
	}
    $attendanceList[] = $attendance;
}
mysqli_close($link);

echo json_encode($attendanceList);

?>