<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM cake WHERE cake_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Car Successfully Send\");
					window.location = (\"add_cake.php\")
				</script>";
	}
?>
