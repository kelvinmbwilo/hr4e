<?php
$user      = "justin";
$password  = "cool";
$host      = "localhost";
$db        = "education";

$conn=mysql_connect($host,$user,$password);
mysql_select_db($db, $conn);

?>
