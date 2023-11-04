<?php 
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> admin login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
	<div id ="full">
		<div id="inner_full">
		   <div id="header"><h2 align="center"><a href="admin-home.php" style="text-decoration: none;color: white;"> Blood bank Management System</h2></a></div>
		   <div id="body">
		   	<br>
		   	<?php
		   	$un=$_SESSION['un'];
		   	if(!$un)
		   	{
		   		header("Location:index1.php");
		   	}
		   	?>
		   	<h1 align="center"><font color="green">Welcome Admin</h1></font>
		   <br><br><pre>
        <font size="6px">   <a href="donar-red.php"><font color="red">Donor Registration</a>          <a href="donar-list.php"><font color="red">Donor List</a>               <a href="stock-blood-list.php"><font color="red">Stock of Blood List</a></font><br><br>
	     <br><font size="6px">      <a href="out-stock-Blood-list.php"><font color="red">Out stock Blood List</a>    <a href="exchange-blood-reg.php"><font color="red">Exchange Donor Registration</a>   <a href="ex-list.php"><font color="red">Exchange Blood List</a></font>
		</pre>
		   </div>
		   <div id="footer"><h4 align="center"><font color="white" size="5px">Our Mini Project</h4>
		   <p align="center"><a href="logout.php"><font color="black"><font size="5px">Logout</font></font></font></a></p>
		  </div>
		</div>
		
	</div>
</body>
</html>