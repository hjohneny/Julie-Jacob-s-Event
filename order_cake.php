<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<!DOCTYPE html>
<html lang="en">
<link id="pagestyle" rel="stylesheet" type="text/css" href="css/Cake_Design.css">
<link rel="stylesheet" href="js/jquery.datetimepicker.min.css">
<script src="js/jquery.js"></script>
<script src="js/jquery.datetimepicker.full.min.js"></script>
<script src="js/java.js"></script>
<head>
    <title>Cakes and Events</title>
    <link rel="icon" type="image/png" href="img/lg1.png">
	<h1> 
    Julie & Jacob's Event
    </h1>
</head>
<body>

<nav>
        <ul>
            <li><a href="dashboard.php">HOME</a></li>
        </ul>
		<?php
			include 'menu.php';
		?>
</nav>
	<section class="caption">
				<h2 class="caption" style="text-align: center">Request Cakes</h2>
				<h3 class="properties" style="text-align: center">Cake Information</h3>
			</section>
	</section><!--  end hero section  -->
	
	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cake WHERE cake_id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
					<a href="order_cake.php?id=<?php echo $rws['cake_id'] ?>">
						<img class="thumb" src="cakes/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'RM '.$rws['cake_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="order_cake.php?id=<?php echo $rws['cake_id'] ?>"><?php echo 'Cake Type: '.$rws['cake_type'];?></a>
						</h1>
						<h2>Cake Name: <span class="property_size"><?php echo $rws['cake_name'];?></span></h2>
					</div>
					</li>
				<h3>Proceed to Order <?php echo $rws['cake_name'];?>. </h3>
				<?php
					if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
				?>
				 You are not a user, please <a href="user_signup_customer.php">Sign Up</a> to rent.
				<?php
					} else
						{
							?>
							<form id="date" method="POST" action="payment.php?id=<?php echo $rws['cake_id']?>">
							<table border=0>
							<tr>
							<td>
							Delivery Date and Time:
							</td> 
							<td>
							<input id="datetime" placeholder="Rental Date" required>
							<br>
								<script>
									$("#datetime").datetimepicker({
									step: 60
									});
								</script>
							</td>
							</tr>
							<br>
							<tr>
							<br>
							<br>
							<tr>
							<td colspan="2">
								<input type="submit" name="req" value="Order Cake" />
							</td>
							</tr>
							</form>
						
						<?php
						if(isset($_POST['req'])){
						include 'includes/config.php';
						$uname = $_SESSION['uname'];
						$dtime = $_POST['datetime'];
						$hours = $_POST['hours'];
						
						
						$qry = "UPDATE client SET hours = '$hours' WHERE uname = '$uname'";
							
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Request Successfully Sent to Kitchen\");
											window.location = (\"payment.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Rent request Not Sent. Try Again\");
											window.location = (\"message_admin.php\")
											</script>";
							}
						}
						
					  ?>
							<?php
						}
				?>

			</ul>
		</div>
	</section>	<!--  end listing section  -->
</body>
</html>