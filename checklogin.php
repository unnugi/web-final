<?php
//session_start();
ob_start();
session_start();
//Here I don't include the conn.php, since I sill confuse with the $mysqli, which after php5.5
//will replace the mysql_connect.
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.
//$mysqli = new mysqli($host, $username, $password,$db_name);
/* if ($mysqli->connect_errno){
	echo "Failed to connect to the MYSQL:(".$mysqli->connect_errno.")".$mysqli->connect_errno;
} */
//mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
@mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
@mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

//
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername); //it seems the mysql_real_escape_string will be deprecated after php5.5
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// I want to register $myusername, $mypassword and redirect to file "message.php"
//echo "this is ";
$_session['myusername']= "yes";
//$_session["mypassword"] ;
 
header("location:message.php");
}
else {
echo "Wrong Username or Password, please return to <a href=index.php> home page</a>";
//header("location:index.php");
}
ob_end_flush();

?>

