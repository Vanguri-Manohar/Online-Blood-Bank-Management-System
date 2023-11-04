<?php 
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Donar Registration</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
	<style type="text/css">
		td{
			width: 200px;
			height: 40px;
		}
	</style>
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
		   	<h1>Stock of Blood List</h1>
		   	<center><div id="form">
		   	    <table>
		   	    	<tr>
		   	    		<td><center><font color="blue"><b>Name</font></b></center></td>
		   	    		<td><center><font color="blue"><b>Quantity</font></b></center></td>
		   	    	</tr>
		   	    		<tr>
		   	    		<td><center>O+</center></td>
		   	    		<td><center>
		   	    			<?php
		   	    			  $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
		   	    			  echo $row=$q->rowcount();
		   	    			?>
		   	    		</center></td>
		   	    		</tr>
		   	    		<tr>
		   	    		<td><center>AB+</center></td>
		   	    		<td><center>
		   	    			<?php
		   	    			  $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
		   	    			  echo $row=$q->rowcount();
		   	    			?>
		   	    		</center></td>
		   	    		</tr>
		   	    		<tr>
		   	    		<td><center>AB-</center></td>
		   	    		<td><center>
		   	    			<?php
		   	    			  $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
		   	    			  echo $row=$q->rowcount();
		   	    			?>
		   	    		</center></td>
		   	    		</tr>
		   	    		<tr>
		   	    		<td><center>O-</center></td>
		   	    		<td><center>
		   	    			<?php
		   	    			  $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O-'");
		   	    			  echo $row=$q->rowcount();
		   	    			?>
		   	    		</center></td>
		   	    		</tr>
		   	    		<tr>
		   	    		<td><center>A+</center></td>
		   	    		<td><center>
		   	    			<?php
		   	    			  $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A+'");
		   	    			  echo $row=$q->rowcount();
		   	    			?>
		   	    		</center></td>
		   	    		</tr>
		   	    		<tr>
		   	    		<td><center>A-</center></td>
		   	    		<td><center>
		   	    			<?php
		   	    			  $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A-'");
		   	    			  echo $row=$q->rowcount();
		   	    			?>
		   	    		</center></td>
		   	    		</tr>
		   	    		<tr>
		   	    		<td><center>B+</center></td>
		   	    		<td><center>
		   	    			<?php
		   	    			  $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B+'");
		   	    			  echo $row=$q->rowcount();
		   	    			?>
		   	    		</center></td>
		   	    		</tr>
		   	    		<tr>
		   	    		<td><center>B-</center></td>
		   	    		<td><center>
		   	    			<?php
		   	    			  $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B-'");
		   	    			  echo $row=$q->rowcount();
		   	    			?>
		   	    		</center></td>
		   	    		</tr>
		   	    </table>
		   	</div></center>
		   </div>
		  <br><br><br><br><br>
		    <div id="footer"><h4 align="center"><font color="white" size="5px">Our Mini Project</h4><br>
		   <p align="center"><a href="logout.php"><font color="black"><font size="5px">Logout</font></font></font></a></p>

		  </div>
		</div>
		
	</div>
</body>
</html>