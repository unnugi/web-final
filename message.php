



<html>
<head>
	<title>Final Web</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id='board'>
		<h2>This is an simple message borad</h2>
		<hr/>
		<form action="message.php" method="get">
		<input type="text" name="keys">
		<input type="submit" name="subss" value="title search">

		</form>
		<hr/>
		<div id="con">
		<?php

		include ("conn.php");

		if (!empty($_GET['keys'])) {	

			$k = "title like '%".$_GET['keys']."%'";


			}else{
			$k = 1;
		}
		$sql = "select * from news where $k order by id desc limit 10";
		$query = $mysqli->query($sql);

		while ($rs = $query->fetch_array()) {
		//$rs = $query->fetch_array();
		//print_r($rs);
		?>

		<h1>Title:<a href="view.php?id=<?php echo $rs['id']?>"> <?php echo $rs['title'] ?> </a>
		<br/>
		<a class="edit_note" href="delete.php?del=<?php echo $rs['id'] ?>">Delete</a>  
		<a class="edit_note" href="edit.php?id=<?php echo $rs['id'] ?>">Edit</a></h1>
		<li>
		<?php echo $rs['dates'];?>
		</li>
		
		<p>
		Content:<?php echo iconv_substr($rs['contents'], 0,10).'..'; ?>
		</p>
		
		<hr/>

		<?php
		}
		
		?>
		</div>

		

	</div>
	<br/>
	<a class="add_note" href='add.php'>Add a new Message</a>
	<a href="logout.php">logout</a>
	
</body>
</html>
