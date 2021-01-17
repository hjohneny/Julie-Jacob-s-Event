<!DOCTYPE html>
<html>
        <link id="pagestyle" rel="stylesheet" type="text/css" href="css/Cake_Design.css">
        <script src="js/java.js"></script>
        <head>
        <title>Julie & Jacob Admin Login</title>
        <link rel="icon" type="image/png" href="img/lg1.png">
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

        <h2 id="login">ADMIN LOG IN</h2>

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
                                                <td colspan="2"><a href="clientlogin.php">Not an admin? Sign in as Client Now</a></td>
                                        </tr>
				</table>
			</form>
			<?php
				if(isset($_POST['login'])){
					include 'includes/config.php';
					
					$uname = $_POST['uname'];
					$pass = $_POST['pass'];
					
					$query = "SELECT * FROM admin WHERE uname = '$uname' AND pass = '$pass'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful!\");
									window.location = (\"admin/index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Admin not found.\");
									window.location = (\"login.php\")
									</script>";
					}
				}
			?>

        </section><!--  end login section  -->
  
</body>
</html>