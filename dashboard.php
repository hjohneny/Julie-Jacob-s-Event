<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<!DOCTYPE html>
<html>
<link id="pagestyle" rel="stylesheet" type="text/css" href="css/Cake_Design.css">
<title>Welcome to Julie & Jacob's Homepage</title>
<head>
    <link rel="icon" type="image/png" href="img/lg1.png">
	<h1> 
    Julie & Jacob's Event
	</h1>
	<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
		<!-- End Main Nav -->
		</div>
	</div>
</head>

<body>

<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cake WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="order_cake.php?id=<?php echo $rws['cake_id'] ?>">
						<img class="thumb" src="cakes/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo $rws['cake_name'];?></span>
					<div class="property_details">
						<h1>
							<a href="order_cake.php?id=<?php echo $rws['cake_id'] ?>"><?php echo 'Cake Price: RM '.$rws['cake_cost'];?></a>
						</h1>
						<h2>Flavour: <span class="property_size"><?php echo $rws['cake_flavour'];?></span></h2>
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

<footer><table style="width:100%">
  <tr>
    <th>Copyright &copy; 2020 All Rights Reserved | Powered by L'Arc En Ciel.</th>
	<th><table style = "width:100%">
	<tr>
		<th>Contact Us			
		</tr>
		<th><a href="https://wa.link/bjqijp" target="_blank">+6016-404 17594(Julie)</a>
		</th>
	</tr>
	</table>
</th>
</table>
</footer><!--  end footer  -->

</body>
</html>