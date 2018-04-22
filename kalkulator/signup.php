<html>
<head><title></title>
<style>
body
{
	font-family:arial;
	font-size:15;
	background-color: silver;
}
#wraper
{
	width:960px;
	margin:0 auto;
}
#header
{
	border:1px solid blue;
	height:250px;
}
#menu
{
	border:1px solid blue;
	background-color: #ccc;
}
#menu ul
{
	list-style-type:none;
	margin:0;
	padding:0;
}
#menu ul li
{
	list-style-type:none;
	margin:0;
	padding:0;
	display:inline-table;
}
#menu ul li:hover
{
	list-style-type:none;
	margin:0;
	padding:0;
	background-color:grey;
}
#menu ul li a
{
	list-style-type:none;
	margin:0;
	padding:0;
	text-decoration:none;
	display: block;
	line-height:40px;
	padding: 0 10px;
}
#kandungan
{
	border:1px green;
	min-height:400px;
	padding:10px;
}
#footer
{
	border:1px green;
	text-align:center;
	min-height:100px
	padding:10px;
	background-color: #ccc;
}


</style>
</head>
<body>
<div id="wraper">
<div id="header">

<img src="banner.jpg" alt="kvp" style="width:959px;height:250px;"/>

</div>
<div id="menu">
	
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #009900;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: blue;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color:green}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<ul>
  <li><a href=""></a></li>
  <li class="dropdown">
    <a href="" class="dropbtn"></a>
    <div class="dropdown-content">
      <a href=""></a>
      <a href=""></a>
    
    </div>
  </li>
</ul>

</body>
</div>


<div id="kandungan">

	<body>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style all input fields */
input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ff9933;//wrne border
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
    background-color: #ff9933;//wrne button submit
    color: black;//wrne tulisan
}

/* Style the container for inputs */
.container {
    background-color: #f1f1f1;
    padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}

#message p {
    padding: 10px 35px;
    font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -35px;
    content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
}
</style>
</head>
<body>

<?php
include('config.php');
?>

<?php
$user=$_POST['user'];
$pswd=$_POST['pswd'];


echo "<br>";

$sql="INSERT INTO log values ('$user','$pswd')";


    $hasil = mysqli_query($query, $sql);

    if($hasil){
        echo "<script>alert(username dan katalaluan berjaya didaftar');
        window.location='signin.php'</script>";
    }

?>




<title>SISTEM KALKULATOR O-COUNT ON ME</title>
<center><h2>SISTEM KALKULATOR O-COUNT ON ME</h2></center>
<i><center>Cepat, Mudan dan Pantas</i></center>
<body>
    <fieldset>
                <form method="POST">
                    <p> Daftar</p>
                    <label for="inputuser">USERNAME</label><br>
                    <input type="text" name="user" placeholder="Username" required><br>
                    <label for="inputpswd">KATALALUAN</label><br>
                    <input type="password" name="pswd" id="inputpswd" placeholder="Katalaluan" required><br>
                    <button type="submit">Daftar</button><br>Jika anda sudah daftar, Klik <a href="signin.php">Log Masuk</a>
                </form>
    </fieldset>



</body>






</html>