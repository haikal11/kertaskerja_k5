<?php
include('config.php');
$satu=$_POST['satu'];
$dua=$_POST['dua'];
$operator=$_POST['operator'];
$catat=$_POST['catat'];
$hasil=$_POST['hasil'];

echo "<br>";

$query="insert into kalk values
('$satu','$dua','$operator','$catat','$hasil')";
if (mysql_query($query)){
	header("location:kalk2.php");
    }
else
	echo "OPPSSS, ada masalah tuu..";
?>