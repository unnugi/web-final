<?php
include ("conn.php");

   if(!empty($_POST['sub'])){
   	if($_POST['psw']===$_POST['psw2']){
	$username = $_POST['user'];
	$password = $_POST['psw'];
	$sql = "insert into members (id, username, password) values (null, '$username', '$password')";
	$mysqli->query($sql);
	echo "<script> alert('Congratulation, you have registered successful'); location.href='index.php'</script>";

		}else
		{
			echo "It seems the two passwords aren't same, please try again!!!";
		}
}
?>



<html>
<head>
	<title>Reg page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="form">
	<form action = "reg.php" method="post">
	<p>Username: </p><input type="text" name="user"><br/>
	<p>Password:</p><input type="password" name="psw">
	<p>Re-enter:</p><input type="password" name="psw2"><br/>
	<br/>
	<input type="submit" name="sub" value="SUMBIT">
	</form>
	</div>
</body>



</html>