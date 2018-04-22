<?php
$server="localhost";
$user="haiza";
$pass="hf531";
$db="haiza";
mysql_connect($server,$user,$pass) or die (mysql_error());
mysql_select_db($db) or die (mysql_error());
?>