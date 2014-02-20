<?php
session_start();
if(isset($_session['myusername'])){
header("location:main_login.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>