<!DOCTYPE html>
<html>
        <link id="pagestyle" rel="stylesheet" type="text/css" href="css/Cake_Design.css">
        <script src="js/java.js"></script>
        <head>
		<link rel="icon" type="image/png" href="img/lg1.png">
        <title>Julie & Jacob's Client Login</title>
	<h1> 
        Julie & Jacob's Event
        </h1>
        </head>

        <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
					<li><a href="login.php">ADMIN LOG IN</a></li>
					<li><a href="clientlogin.php">CLIENT LOG IN</a></li>
                </ul>
        </nav>

        <h2 id="login">CLIENT LOG IN</h2>

<body>      
<section class="search">
		<div class="wrapper">
		<div id="fom">
			<form id="login" method="POST">
				<table>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="uname" placeholder="Enter Username" required></td>
					</tr>
					<tr>
						<td>Password:</td>
                                                <td><input type="password" name="pass" id="password" placeholder="Enter Password" required></td>
                                                <td><input type="checkbox" onclick="showloginpassword()">Show Password</td>
					</tr>
					<tr>
                                                <td colspan="2" style="text-align:center"><input type="submit" name="login" value="Login"></td>
                                        </tr>
                                        <tr>
                                                <td colspan="2"><a href="user_signup_customer.php">New to this? Sign Up Now</a></td>
                                        </tr>
				</table>
			</form>
			<?php
				if(isset($_POST['login'])){
					include 'includes/config.php';
					
					$uname = $_POST['uname'];
					$pass = $_POST['pass'];
					
					$query = "SELECT * FROM client WHERE uname = '$uname' AND pass = '$pass'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful!\");
									window.location = (\"dashboard.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again!\");
									window.location = (\"clientlogin.php\")
									</script>";
					}
				}
			?>

        </section><!--  end login section  -->
  

</body>

</html>