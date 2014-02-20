<?php
include ("conn.php");



	if(!empty($_GET['del'])){
		$d = $_GET['del'];
		$sql = "delete from news where id = '$d'";
		$mysqli->query($sql);
		echo "<script> alert('Delete Sucessful, jump to homepage'); location.href='message.php'</script>";
		//echo "<script>alert('Update Successful');location.href='index.php'</script>";
		//header("Refresh:3; url=./index.php");
	}


?>