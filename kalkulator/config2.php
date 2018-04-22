<?php
$server="localhost";
$user="root";
$pass="123456";
$db="kalk";
mysql_connect($server,$user,$pass) or die (mysql_error());
mysql_select_db($db) or die (mysql_error());
?>