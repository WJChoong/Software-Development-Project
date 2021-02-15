<!DOCTYPE HTML>
<html>
    <head>
        <title>Sample Charts</title>
        <link href="bootstrap.min.css" rel="stylesheet">
    	<script src="jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="Chart.bundle.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
				
                reload();
				
				$('#btnReload').click(function() {
					reload();
				});
				
      		});
			function reload() {
				var data = [];
				var colors = [];
				var labels = [];
				$.ajax({
					type: "GET",
					url: "getAttendance.php",
					cache: false,
					dataType: "JSON",
					success: function (response) {
						response.forEach(i => {
							data.push(i.count);
							colors.push(i.color);
							labels.push(i.status);
						})
						var pieChart = new Chart($("#pieChart"), {
							type: 'pie',
							data: {
								datasets: [{
										data: data,
										backgroundColor: colors,
										label: 'Attendance'
									}],
								labels: labels
							},
							options: {
								responsive: true
							}
						});
					},
				});	
				$.ajax({
					type: "GET",
					url: "getAttendance.php",
					cache: false,
					dataType: "JSON",
					success: function (response) {
						msg = "";
						response.forEach(i => {
							msg += "<tr><td>" + i.status + "</td>"
							msg += "<td>" + i.color + "</td>"
							msg += "<td>" + i.count + "</td></tr>"
						})
						$("tbody").html(msg);
					},
				});
			}
        </script>
    </head>
    <body>
        <div class="container">
			<button id="btnReload">RELOAD</button>
      		<div id="canvas-holder" style="width:40%"><canvas id="pieChart" /></div>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Status</th>
						<th>Color</th>
						<th>Count</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
        </div>
    </body>
</html>



