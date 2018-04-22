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

</html>
<body>
<p><button onClick="gambar1()">Haikal</button></p>
<p><button onClick="gambar2()">Fariza</button></p>
<p><img id="gmbr" src="gambar1.jpg" style="width:500px"></p>



<script language="javascript">
function gambar1()

{
	document.getElementById('gmbr').src=('gambar1.jpg');

}
function gambar2()
{
	document.getElementById('gmbr').src=('gambar2.jpg');

}

</script>
           
	</form>
    </fieldset>
</body>


</html>