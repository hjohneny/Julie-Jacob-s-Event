<?php
include 'db.php';
$query = "SELECT Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dec_ FROM order";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) >= 1)
{
	while($row = mysqli_fetch_assoc($result))
	{
			$Jan = $row['Jan'];
			$Feb = $row['Feb'];
			$Mar = $row['Mar'];
			$Apr = $row['Apr'];
			$May = $row['May'];
			$Jun = $row['Jun'];
			$Jul = $row['Jul'];
			$Aug = $row['Aug'];
			$Sep = $row['Sep'];
			$Oct = $row['Oct'];
			$Nov = $row['Nov'];
			$Dec = $row['Dec_'];
	}
}
	else
	{
	echo "something went wrong. Can't generate report.";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="icon" type="image/png" href="img/lg1.png">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" rel="stylesheet">
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Dashboard
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Dashboard</h2>
					</div>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
							<td>
							<canvas id="myChart" style="height: auto; width: 500px;"></canvas>

							<?php
								echo "<input type='hidden' id= 'Jan' value = '$Jan' >";
								echo "<input type='hidden' id= 'Feb' value = '$Feb' >";
								echo "<input type='hidden' id= 'Mar' value = '$Mar' >";
								echo "<input type='hidden' id= 'Apr' value = '$Apr' >";
								echo "<input type='hidden' id= 'May' value = '$May' >";
								echo "<input type='hidden' id= 'Jun' value = '$Jun' >";
								echo "<input type='hidden' id= 'Jul' value = '$Jul' >";
								echo "<input type='hidden' id= 'Aug' value = '$Aug' >";
								echo "<input type='hidden' id= 'Sep' value = '$Sep' >";
								echo "<input type='hidden' id= 'Oct' value = '$Oct' >";
								echo "<input type='hidden' id= 'Nov' value = '$Nov' >";
								echo "<input type='hidden' id= 'Dec' value = '$Dec_' >";
							?>

							<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

							<script>
								var Jan = document.getElementById("Jan").value
								var Feb = document.getElementById("Feb").value
								var Mar= document.getElementById("Mar").value
								var Apr = document.getElementById("Apr").value
								var May = document.getElementById("May").value
								var Jun = document.getElementById("Jun").value
								var Jul = document.getElementById("Jul").value
								var Aug = document.getElementById("Aug").value
								var Sep = document.getElementById("Sep").value
								var Oct = document.getElementById("Oct").value
								var Nov = document.getElementById("Nov").value
								var Dec_ = document.getElementById("Dec").value

								window.onload = function()
								{
									var randomScalingFactor = function() {
										return Math.round(Math.random() * 100);
									};
									
									var config = {
										type: 'line',
										data: {
											borderColor : "#fffff",
											datasets: [{
												
												data: [
												Jan,
												Feb,
												Mar,
												Apr,
												May,
												Jun,
												Jul,
												Aug,
												Sep,
												Oct,
												Nov,
												Dec_,
											],
											borderColor :  "#fff",
											borderwidth : "3",
											hoverBorderColor : "#000",

											label: 'Monthly Order Report',
											
											backgroundColor: [
												"#0190ff",
												"#0190ff",
												"#0190ff",
												"#0190ff",
												"#0190ff",
												"#0190ff",
												"#0190ff",
												"#0190ff",
												"#0190ff",
												"#0190ff",
												"#0190ff",
												"#0190ff",
											],
											hoverBackgroundColor: [
												"#f38b4a",
												"#f38b4a",
												"#f38b4a",
												"#f38b4a",
												"#f38b4a",
												"#f38b4a",
												"#f38b4a",
												"#f38b4a",
												"#f38b4a",
												"#f38b4a",
												"#f38b4a",
												"#f38b4a",
											]
											}],

											labels: [
												'Jan',
												'Feb',
												'Mar',
												'Apr',
												'May',
												'Jun',
												'Jul',
												'Aug',
												'Sep',
												'Oct',
												'Nov',
												'Dec',
											]
									},
									options: {
										responsive: true
									}
								};
								var ctx = document.getElementById('myChart').getContext('2d');
								window.myPie = new Chart(ctx, config);
								};
							</script>
							</td>
							</tr>
						</table>
					</div>
					<h2><input type="submit" onclick="window.print()" value="Print report Here" /></h2>
					
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">&copy; 2020 - Julie & Jacob's Event</span>
		<span class="right">
			Powered by L'Arc-En-Ciel</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>