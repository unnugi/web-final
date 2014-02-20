<?php
include ("conn.php"); //import the database.

	if(!empty($_POST['sub'])){
		$title = $_POST['title'];
		$con = $_POST['con'];
		$sql = "insert into news (id, title, dates, contents) values (null,'$title', now(), '$con')";
		$mysqli->query($sql);
		//echo "successful";
		echo "<script> alert('Sucessful, jump to homepage'); location.href='message.php'</script>";
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Add New Message</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="form">
	<form action = "add.php" method="post">
	<p>Title </p> <p><input type="text" name="title"><p><br/>
	Content:<br/>
	<textarea rows ="5" cols="50" name="con"></textarea><br/>
	<input type="submit" name="sub" value="SUBMIT">
	</form>
	</div>
</body>
</html>


