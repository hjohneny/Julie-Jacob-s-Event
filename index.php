<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<!DOCTYPE html>
<html>
<title>Julie & Jacob's Homepage</title>
<link id="pagestyle" rel="stylesheet" type="text/css" href="css/Cake_Design.css">
<head>
    <link rel="icon" type="image/png" href="img/lg1.png">
	<h1> 
    Julie & Jacob's Event
	</h1>
</head>


<body>	  
<nav>
        <ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="#listing">Cakes</a></li>
			<li><a href="#about_us">About Us</a></li>
			<li><a href="login.php">Admin Login</a></li>
			<li><a href="clientlogin.php">Client Login</a></li>
			
        </ul>
</nav>

<header class="section-container header-container" id="header_section">
            <div class="overlay">
            </div>
            <section class="text-center bring-front">
                <h2 class="header">Welcome</h2>
                <hr class="block-divider">
                <p class="intro lg-padding">
                    We deliver freshly baked goods straight to your door!
                    <br>
                    We are also available to cater for events such as birthdays, gatherings, Coorporate events and much more!
                </p>
            </section>
</header>

<section class="listings" id="listing">
		<div class="wrapper">
		<h2 class="listing-header">
                           Available Cakes
                        </h2>
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cake WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="order_car.php?id=<?php echo $rws['car_id'] ?>">
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

	<section class="section-container about_us-container" id="about_us">
            <div class="wrapper">
                <div class="row">
                    <div class="">
                        <h2 class="about_us-header">
                            About Us
                            <br>
                            Here is what you need to know!
                        </h2>
                        <p class="about_us-info p-spacing">
						Julie & Jacob had an idea of providing great cakes and events to around Kuching since 2015. 
						Our dedication and tasty cakes have resulted in setting up a business modal revolving around 
						cakes. Contact us for more information. 016-404-17594 (Julie).
                        </p>
                    </div>
                </div>
            </div>
    </section>

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