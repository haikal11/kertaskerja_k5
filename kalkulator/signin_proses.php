<?PHP
session_start();
$user =$_POST['pswd'];
$pswd =$_POST['pswd'];
if ($user && $pswd)
{
	$server='localhost';
	$userid2='root';
	$password2='123456';
	$dbname='kalk';
	$conn=mysql_connect("$server", "$userid2", "$password2");
	
	mysql_select_db("$dbname", $conn) or die (mysql_error());
	$query = mysql_query("select * from sign where user = '$user'");
	
	$numrows = mysql_num_rows($query);
	if ($numrows !=0)
		
		{
	while ($row = mysql_fetch_assoc($query))
	{
	$dbuser = $row["user"];
    $dbpswd = $row["pswd"];
	}
	if ($user==$dbuser&&$pswd==$dbpswd)
	{
		$_SESSION['user']=$user;
		header( 'Location:kalk2.php');
	} 
	else
	{
		header( 'Location:signin.php');
	}

?>