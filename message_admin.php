<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Julie & Jacob's Event Message</title>
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
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/Cake_Design.css">
	<style type="text/css">
		.status{
			font-size: 20px;
		}
		.txt{
			width: 600px;
			height: 200px;
		}
	</style>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<section class="listings">
		<div class="wrapper">
		<h2 style="text-decoration:underline">Leave a message here.</h2>
			<ul class="properties_list">
			<form method="post">
				<table>
					<tr>
						<td style="color: black; font-weight: bold; font-size: 24px"> Elaborate on how you want us to organize this event for you. Remember to include specific time and date:</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>
							<textarea name="message" placeholder="Enter Message Here" class="txt"></textarea>
						</td>
					</tr>
					<tr>
						<td><input type="submit" name="send" value="Submit Message"></td>
					</tr>
				</table>
			</form>
				<?php
					if(isset($_POST['send'])){
						include 'includes/config.php';
						$message = $_POST['message'];
						
						$qry = "INSERT INTO message (message,client_email,time,status) VALUES('$message','$_SESSION[client_email]',NOW(),'Unread')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Message Successfully Sent\");
											window.location = (\"dashboard.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Message Not Sent. Try Again\");
											window.location = (\"message_admin.php\")
											</script>";
							}
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