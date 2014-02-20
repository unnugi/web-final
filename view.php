<?php
include ("conn.php"); //import the database.



 if(!empty($_GET['id'])){
 	$sql = "select * from news where id ='".$_GET['id']."'";
 	$query = $mysqli->query($sql);
 	$rs = $query->fetch_array();
 	//print_r($rs);
 	$sql2= "update news set hits = hits + 1 where  id =".$_GET['id'];
 	$query = $mysqli->query($sql2); 

 }



?>


<!DOCTYPE html>
<html>
<head>
	<title>Add New Message</title>
	<link rel="stylesheet" type="text/css" href="css/view.css">
</head>
<body>
	<div>
		<h1>The author: <?php echo $rs['title'] ?></h1>
		<h2>Message date:<br/><?php echo $rs['dates'] ?></h2>
		<h3>page view:<?php echo $rs['hits'] ?></h3>
		<hr/>
		<p> 
		contents:		
		</p>
		<p1>
		<?php echo $rs['contents'] ?>
		</p1>
	</div>
	
</body>
</html>



