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
  <li><a href="signup.php">SIGN UP</a></li>
  <li class="dropdown">
    <a href="signin.php" class="dropbtn">SIGN IN</a>
    <div class="dropdown-content">
<li><a href="kalk2.php">KALKULATOR</a></li>
<li><a href="gambar.php">GAMBAR</a></li>
<li><a href="papar.php">SENARAI</a></li>

      
    
    </div>
  </li>
</ul>

</body>
</div>


<div id="kandungan">

	<body>
<fieldset>
<center>
<p>MASUKKAN NOMBOR PERTAMAN :</p>
<p><input id="satu" placeholder="nom1"></p>
<p>MASUKKAN NOMBOR KEDUA :</p>
<p><input id="satu" placeholder="nom2"></p>



<select id="operasi">
<option> + </option>
<option> - </option>
<option> * </option>
<option> / </option>
<option> % </option>
</select>

<button onClick="papar()">Papar</button>
<p id="catat"></p>
<p id="total"></p>
<script language="javascript">
function papar()
{
	var n1=parseInt(document.getElementById('satu').value);
	var n2=parseInt(document.getElementById('dua').value);
	var oper=document.getElementById('operasi').value;
	
	
	document.getElementById('satu').innerHTML=satu;
	document.getElementById('dua').innerHTML=dua;
		
		if (oper == "+")
	{
		document.getElementById('catat').innerHTML="Hasil operasi ialah Tambah";
		var num=n1+n2;
		document.getElementById('total').innerHTML=num;
	}
	else if (oper == "-")
	{
		document.getElementById('catat').innerHTML="Hasil operasi ialah Tolak";
		var num=n1-n2;
		document.getElementById('total').innerHTML=num;
	}
	else if (oper == "*")
	{
		document.getElementById('catat').innerHTML="Hasil operasi ialah Darab";
		var num=n1*n2;
		document.getElementById('total').innerHTML=num;
	}
	else if (oper == "/")
	{
		document.getElementById('catat').innerHTML="Hasil operasi ialah Bahagi";
		var num=n1/n2;
		document.getElementById('total').innerHTML=num;
	}
	else
	{
		document.getElementById('catat').innerHTML="Hasil operasi ialah Modulus";
		var num=n1%n2;
		document.getElementById('total').innerHTML=num;
	}
}
</script>

            </center>
           
	</form>
    </fieldset>
</body>


</html>