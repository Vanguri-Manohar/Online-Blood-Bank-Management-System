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
		   	<h1>Exchange Blood List</h1>
		   	<center><div id="form">
		   	    <table>
		   	    	<tr>
		   	    		<td><center><font color="blue"><b>Name</font></b></center></td>
		   	    		<td><center><font color="blue"><b>Father's Name</font></b></center></td>
		   	    		<td><center><font color="blue"><b>Address</font></b></center></td>
		   	    		<td><center><font color="blue"><b>City</font></b></center></td>
		   	    		<td><center><font color="blue"><b>Age</font></b></center></td>
		   	    		<td><center><font color="blue"><b>Blood Group</font></b></center></td>
		   	    		<td><center><font color="blue"><b>Mobile No</font></b></center></td>
		   	    		<td><center><font color="blue"><b>Email</font></b></center></td>
		   	    		<td><center><font color="blue"><b>Exchange Blood Group</font></b></center></td>
		   	    	</tr>
		   	    	<?php
		   	    	$q=$db->query("SELECT * FROM exchange_b");
		   	    	while($r1=$q->fetch(PDO::FETCH_OBJ))
		   	    	{
		   	    		?>
		   	    		<tr>
		   	    		<td><center><?= $r1->ename;?></center></td>	
		   	    		<td><center><?= $r1->fname;?></center></td>
		   	    		<td><center><?= $r1->address;?></center></td>
		   	    		<td><center><?= $r1->city;?></center></td>
		   	    		<td><center><?= $r1->age;?></center></td>
		   	    		<td><center><?= $r1->bgroup;?></center></td>
		   	    		<td><center><?= $r1->emno;?></center></td>
		   	    		<td><center><?= $r1->email;?></center></td>
		   	    		<td><center><?= $r1->exbgroup;?></center></td>

		   	    		</tr>
		   	    		<?php
		   	    	}
		   	    	?>

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