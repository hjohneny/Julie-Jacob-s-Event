<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Julie & Jacob's Event</title>
    <link rel="icon" type="image/png" href="img/lg1.png">
	<h1> 
    Julie & Jacob's Event
    </h1>
        <link id="pagestyle" rel="stylesheet" type="text/css" href="css/Cake_Design.css">
        <script src="js/java.js"></script>
    </head>

    <nav>
    <?php
			include 'menu.php';
		?>
		</div>
    </nav>
        
    <h2 id="login">PAYMENT</h2>
        
    <body>
    <?php $x = microtime();
    include 'includes/config.php';
    $sel = "SELECT * FROM cake WHERE cake_id = '$_GET[id]'";
    $rs = $conn->query($sel);
    $rws = $rs->fetch_assoc();
    ?>
    <section class="listings">
		<div class="wrapper">
        <ul class="properties_list">
				<h3 style="text-decoration: underline">Make Payment Here</h3>
				<h5>Transaction: <?php echo $x ?></h5>
                <h6>Date: <?php echo date('Y-m-d') ?></h6>
                <h6>Amount per hour: RM <?php echo $rws['cake_cost']?> </h6>
				<form method="post">
					<table>
						<tr>
							<td>OTP:</td>
							<td><input type="password" name="OTP" required></td>
						</tr>
						<tr>
							<td>Username:</td>
							<td><input type="text" name="uname" required></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="pay" value="Submit Details"></td>
						</tr>
						</tr>
					</table>
				</form>
				<?php
				
				?>
				<?php
						if(isset($_POST['pay'])){
							include 'includes/config.php';
							$OTP = $_POST['OTP'];
                            $uname = $_POST['uname'];
                            $price = $rws['cake_cost'];
							$car_id = $_GET[id];
							$transaction_id = $x;
							$hours = $_POST['hours'];
							
                            $qry = "UPDATE client SET OTP = '$OTP',Acc_Balance = '$price',status = 'Processing Payment... Wait for Admin Approval',cake_id = '$cake_id',transaction_id = '$transaction_id',hours = '$hours'  WHERE uname = '$uname'";

							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Payment Successfully Done. Wait for Admin Approval\");
											window.location = (\"wait.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Payment Failed. Try Again\");
											window.location = (\"payment.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
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

                