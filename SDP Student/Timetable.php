<html>
	<body>
	<table>
	<tr>
		<th>Day</th>
		<th>Date</th>
		<th>Module</th>
		<th>Time</th>
	</tr>
	<?php
	$conn = mysqli_connect('localhost','root','','student','3306');
	$sql = "SELECT * FROM timetable";
	$result = $conn-> query($sql);
	
	if($result->num_rows > 0) {
		while ($row = $result-> fetch_assoc()){
			echo "<tr><td>" . $row["Day"] . "</td><td>" . $row["Date"] . "</td><td>" . $row["Module"] . "</td><td>" . $row["Time"] . "</td></tr>";
		}
	}
	else{
		echo "No Results";
	}
	$conn-> close();
	?>
	
	</table>
	</body>
</html>