<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Julie & Jacob's Event Order Status</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="icon" type="image/png" href="img/lg1.png">
	<h1> 
	Julie & Jacob's Event
	</h1>
        <link id="pagestyle" rel="stylesheet" type="text/css" href="css/Cake_Design.css">
        <script src="js/java.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<?php
			include 'menu.php';
		?>

	<section class="listings">
		<div class="wrapper">
		<h2 style="text-decoration:bold">Your Order and Event Request Status</h2>
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM client WHERE uname = '$_SESSION[uname]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
						<h2><span style="font-size:25px; color: #FF0000">Order Status:</span> 
						<span style="color:red;font-weight: bold; font-size: 25px;">
						<?php echo $rws['status'];?></span>
						<?php 
						if($rws['status']=='Approved') {
						?><form id=invoice><?php
							echo '.....Transaction Invoice.....';?><br><?php
							echo 'Transaction Id:'.$rws['transaction_id'];
						?>
						<br>
						<?php echo 'Cakes Ordered: '.rws['cake_id'];?>
						<br>
						<?php	echo 'Total Amount: RM'.$rws['Acc_Balance']?>
						<br>
						<input type="submit" onclick="window.print(invoice)" value="Print Invoice" />
						</form>
						<form action="message_admin.php">
						<input type="submit" value="Send Message" />
						</form>
						<?php
						}
						?>
						</h2>
				</li>
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