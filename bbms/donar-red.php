<?php 
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Donor Registration</title>
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
		   	<h1>Donor Registration</h1>
		   	<center><div id="form">
		   		<form action=" " method="post" autocomplete="off">
		   	<table>
		   		<tr> 
		   			<td width="200px" height="50px">Enter Name</td>
		   			<td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name" required></td><br>
		   			<td width="200px" height="50px">Enter Father's Name</td>
		   			<td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father's Name "required></td><br><br><br>
		   		</tr>
		   		<tr> 
		   			<td width="200px" height="50px">Enter Address</td>
		   			<td width="200px" height="50px"><textarea name="address"></textarea></td>
		   			<td width="200px" height="50px">Enter City</td>
		   			<td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City" required></td>
		   		</tr>
		   		<tr> 
		   			<td width="200px" height="50px">Enter Age</td>
		   			<td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age" required></td>
		   			<td width="200px" height="50px">Select Blood Group</td>
		   			<td width="200px" height="50px">
		   				<select name="bgroup">
		   					<option>O+</option>
		   					<option>O-</option>
		   					<option>AB+</option>
		   					<option>AB-</option>
		   					<option>A+</option>
		   					<option>A-</option>
		   					<option>B+</option>
		   					<option>B-</option>
		   				</select>
		   			</td>
		   		</tr>
		   		<tr> 
		   			<td width="200px" height="50px">Enter E-Mail</td>
		   			<td width="200px" height="50px"><input type="email" name="email" placeholder="Enter E-Mail" required></td>
		   			<td width="200px" height="50px">Enter Mobile No</td>
		   			<td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No" required></td>
		   		</tr>
		   		<tr>
		   			<td> <input type="submit" name="sub" value ="save"></td>
		   		</tr>		
		   	</table>
		   </form>
		   <?php
		   	if(isset($_POST['sub']))
		   	{
		   		$name=$_POST['name'];
		   		$fname=$_POST['fname'];
		   		$address=$_POST['address'];
		   		$city=$_POST['city'];
		   		$age=$_POST['age'];
		   		$bgroup=$_POST['bgroup'];
		   		$mno=$_POST['mno'];
		   		$email=$_POST['email'];	
		   		$q=$db->prepare("INSERT INTO donor_registration(name,fname,address,city,age,bgroup,mno,email) VALUES(:name,:fname,:address,:city,:age,:bgroup,:mno,:email)");
		   		$q->bindValue('name',$name);
		   		$q->bindValue('fname',$fname);
		   		$q->bindValue('address',$address);
		   		$q->bindValue('city',$city);
		   		$q->bindValue('age',$age);
		   		$q->bindValue('bgroup',$bgroup);
		   		$q->bindValue('mno',$mno);
		   		$q->bindValue('email',$email);
		   		if($q->execute())
		   		{
		   			echo "<script>alert('Donar Registartion success')</script";
		   		}
		   		else
		   		{
		   			echo "<script>alert('Donar Registartion fail')</script";
		   		}	

		   	}
     	   ?> 
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