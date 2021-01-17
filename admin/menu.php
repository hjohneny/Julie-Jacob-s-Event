<?php
	error_reporting("E-NOTICE");
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div id="top">
			<h1><a href="dashboard.php">Julie & Jacob's Event</a></h1>
			<div id="top-navigation">
				Welcome <a href="#"><strong><?php echo $_SESSION['uname']?></strong></a>
				<span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
<div id="navigation">
			<ul>
			    <li><a href="dashboard.php"><span>Dashboard</span></a></li>
			    <li><a href="cake_management.php"><span>Cake Management</span></a></li>
			    <li><a href="client_requests.php"><span>Order Requests</span></a></li>
			    <li><a href="index.php"><span>Client Instructions</span></a></li>
			</ul>
		</div>