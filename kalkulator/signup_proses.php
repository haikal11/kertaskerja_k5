<?php
include('config2.php');
?>

<?php
$user=$_POST['user'];
$pswd=$_POST['pswd'];


echo "<br>";

$query="insert into sign values ('$user','$pswd')";
if (mysql_query($query))
{
	header('Location:signin.php');
}
else
{
	header('Location:signup.php');
}
?>