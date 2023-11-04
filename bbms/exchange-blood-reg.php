<?php 
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Donar Registration</title>
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
		   	<h1>Exchange Blood Donor Registration</h1>
		   	<center><div id="form">
		   		<form action=" " method="post" autocomplete="off">
		   	<table>
		   		<tr> 
		   			<td width="200px" height="50px">Name</td>
		   			<td width="200px" height="50px"><input type="text" name="ename" placeholder="Enter Name" required></td><br>
		   			<td width="200px" height="50px">Enter Father's Name</td>
		   			<td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father's Name" required></td><br>	
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
		   			<td width="200px" height="50px">Enter E-Mail</td>
		   			<td width="200px" height="50px"><input type="email" name="email" placeholder="Enter E-Mail" required></td>

		   		</tr>
		   		<tr> 
		   			<td width="200px" height="50px">Enter Mobile No</td>
		   			<td width="200px" height="50px"><input type="text" name="emno" placeholder="Enter Mobile No" required></td>
		   	
		   		
		   		</tr>
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
		   		
		   			<td width="200px" height="50px">Exchange Blood Group</td>
		   			<td width="200px" height="50px">
		   				<select name="exbgroup">
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
		   			<td> <input type="submit" name="sub" value ="save"></td>
		   		</tr>		
		   	</table>
		   </form>
		   <?php
		   	if(isset($_POST['sub']))
		   	{
		   		$ename=$_POST['ename'];
		   		$fname=$_POST['fname'];
		   		$address=$_POST['address'];
		   		$city=$_POST['city'];
		   		$age=$_POST['age'];
		   		$bgroup=$_POST['bgroup'];
		   		$emno=$_POST['emno'];
		   		$email=$_POST['email'];	
		   		$exbgroup=$_POST['exbgroup'];
		   	    $q="SELECT * FROM donor_registration where bgroup = '$bgroup'";
		   		$st=$db->query($q);
		   		$num_row=$st->fetch();
		   		$id=$num_row['id'];
		   		$name=$num_row['name'];
		   		$b1=$num_row['bgroup'];
		   		$mno=$num_row['mno'];
		   		$q1="INSERT INTO  out_stock_b (bname,name,mno) value(?,?,?)";
		   		$st1=$db->prepare($q1);
		   		$st1->execute([$bgroup,$name,$mno]);
		   		$delete_q="delete from  donor_registration where id='$id'";
		   		$st1=$db->prepare($delete_q);
		   		$st1->execute();
		   		$q2=$db->prepare("INSERT INTO exchange_b(ename,fname,address,city,age,bgroup,emno,email,exbgroup) VALUES(:ename,:fname,:address,:city,:age,:bgroup,:emno,:email,:exbgroup)");
		   		$q2->bindValue('ename',$ename);
		   		$q2->bindValue('fname',$fname);
		   		$q2->bindValue('address',$address);
		   		$q2->bindValue('city',$city);
		   		$q2->bindValue('age',$age);
		   		$q2->bindValue('bgroup',$bgroup);
		   		$q2->bindValue('emno',$emno);
		   		$q2->bindValue('email',$email);
		   		$q2->bindValue('exbgroup',$exbgroup);
		   		if($q2->execute())
		   		{
		   			echo "<script>alert('Exchange Donar Registartion success')</script";
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