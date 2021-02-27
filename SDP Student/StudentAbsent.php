<html>
	<body>
	<table>
	<tr>
		<th>Date</th>
		<th>Module</th>
	</tr>
	<?php
	$conn = mysqli_connect('localhost','root','','student','3306');
	$sql = "SELECT * FROM timetable";
	$result = $conn-> query($sql);
	
	if($result->num_rows > 0) {
		while ($row = $result-> fetch_assoc()){
			echo "<tr><td>" . $row["Date"] . "</td><td>" . $row["Module"] . "</td></tr>";
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