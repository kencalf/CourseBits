<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>



<?php
/* Modify with your specifics */
$server = "mysqlv112";    
$user = "coursebits";
$pass = "Design0201";
$db = "coursebits_data";
$con = mysql_connect($server, $user, $pass) or die(mysql_error());
mysql_select_db($db, $con) or die(mysql_error());
echo "<h3>Connection was successful!</h3>";
?>


</body>
</html>