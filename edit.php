<?php
include ("conn.php"); //import the database.


 if(!empty($_GET['id'])){
 	$sql = "select * from news where id ='".$_GET['id']."'";
 	$query = $mysqli->query($sql);
 	$rs = $query->fetch_array();
 	//print_r($rs);


 }


	if(!empty($_POST['sub'])){
		$title = $_POST['title'];
		$con = $_POST['con'];
		$hid = $_POST['hid'];
		//echo $hid;
		$sql = "update news set title = '$title', contents = '$con' where id = '$hid' limit 1";
		$mysqli->query($sql);
		echo "<script>alert('Update Successful');location.href='message.php'</script>";
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
	<form action = "edit.php" method="post">
	<input type="hidden" name ="hid" value="<?php echo $rs['id'] ?>">
	<p>Title </p><input type="text" name="title" value="<?php echo $rs['title'] ?>"><br/>
	<p>Content:</p><br/>
	<textarea rows ="5" cols="50" name="con" ><?php echo $rs['contents'] ?></textarea><br/>
	<input type="submit" name="sub" value="SUBMIT">
	</form>
	</div>
</body>
</html>


