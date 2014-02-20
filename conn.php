<?php


//echo "string";

$mysqli = new mysqli("localddhost","root","root","test");
if($mysqli->connect_error){
	echo "Failed to Connect to the database:(".$mysqli->connect_error.")";
}else{
	phpinfo();
}
//echo $mysqli->host_info. "\n";
//$members = $mysqli->query("select * from members");
//$mysqli->query ("create table xiaoxiao (id char(2))");
//var_dump($members);
//print_r($members->fetch_object());
// $members->free();


?>