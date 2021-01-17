<?php
	include '../includes/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="icon" type="image/png" href="img/lg1.png">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Add New Cakes
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Add New Cakes</h2>
					</div>
					
					<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p>
									<span class="req">max 100 symbols</span>
									<label>Cake Name <span>(Required Field)</span></label>
									<input placeholder="Enter cake name" type="text" class="field size1" name="cake_name" required />
								</p>	
								<p>
									<span class="req">max 20 symbols</span>
									<label>Cake Type <span>(Required Field)</span></label>
									<select type="text" class="field size1" name="cake_type" required >
									<option value="0" >[choose yours]</option>
                     				<option value="sponge"  >Sponge</option>
                        			<option value="cheese" >Cheese</option>
                        			<option value="ice cream" >Ice Cream</option></select>
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>Cake Price<span>(Required Field)</span></label>
									<input placeholder="MYR" type="text" class="field size1" name="cake_cost" required />
								</p>
								<p>
									<span class="req">Current Images</span>
									<label>Cake Image <span>(Required Field)</span></label>
									<input type="file" class="field size1" name="image" required />
								</p>
								<p>
									<span class="req">Cake Flavour</span>
									<label>Cake Flavour<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="cake_flavour" required />
								</p>	
							
						</div>
						
						<div class="buttons">
							<input type="button" class="button" value="preview" />
							<input type="submit" class="button" value="submit" name="send" />
						</div>
						
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$target_path = "../cakes/";
								$target_path = $target_path . basename ($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
								
								$image = basename($_FILES['image']['name']);
								$cake_name = $_POST['cake_name'];
								$cake_type = $_POST['cake_type'];
								$cake_cost = $_POST['cake_cost'];
								$cake_flavour = $_POST['cake_flavour'];
								
								$qr = "INSERT INTO cake (image, cake_name,cake_type,cake_cost,cake_flavour,status) 
													VALUES ('$image','$cake_name','$cake_type','$cake_cost','$cake_flavour','Available')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Cake Succesfully Added\");
											window.location = (\"add_cake.php\")
											</script>";
									}
								}
								else 'Failed';
							}
						?>
				</div>

			</div>
			
			<div id="sidebar">
				
				<div class="box">
					
					<div class="box-head">
						<h2>Management</h2>
					</div>
					
					<div class="box-content">
						<a href="add_cake.php" class="add-button"><span>View Our Cakes</span></a>
						<div class="cl">&nbsp;</div>
						
						
					</div>
				</div>
			</div>
			
			<div class="cl">&nbsp;</div>			
		</div>
	</div>
</div>

<div id="footer">
	<div class="shell">
		<span class="left">&copy; 2020 - Julie & Jacob's Event by L'Arc-En-Ciel</span>
		<span class="right">
			Powered by L'Arc-En-Ciel</a>
		</span>
	</div>
</div>
	
</body>
</html>