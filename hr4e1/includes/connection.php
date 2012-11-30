<?php
$server = "localhost";
$user = "root";
$password = "kevdom";
$database = "education";
$sql = mysql_connect($server,$user,$password) or die(mysql_error());
mysql_select_db($database,$sql);
?>
