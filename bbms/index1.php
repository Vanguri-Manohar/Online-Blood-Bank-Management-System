<?php 
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> admin login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
	<!-- Latest compiled and minified CSS -->
</head>
<body>
	<div class="container">
	<div id ="full">
		<div id="inner_full"><br><br><br><br>
		   <div id="header"><h2 align="center"> Blood bank Management System</h2></div>
		   <div id="body">
		   	<br><br><br><br><br>
		   	<form action=" " method="post" autocomplete="off">
		   	<table align="center">
		   		<tr>
		   			<td width="200px" height="70px"><b> Enter username</b></td>
		   			<td width="100px" height="70px"><input type="text" name="un" placeholder="Enter username" style="width: 180px; height: 30px; border-radius: 10px;"></td>
		   		</tr>
		   		<tr>
		   			<td width="200px" height="70px"><b> Enter password</b></td>
		   			<td width="100px" height="70px"><i><input type="password" name="ps" placeholder="Enter password" style="width: 180px; height: 30px; border-radius: 10px;"></i></td>
		   		</tr>
		   		<tr>
		   			<td><input type="submit" name="sub" value="login" style="width: 70px; height:30px; border-radius:5px"></td>
		   		</tr>
		   	</table>
		   </form>
		   <?php 
		    if(isset($_POST['sub']))
		    {
		    	 $un=$_POST['un'];
		    	 $ps=$_POST['ps'];
		    	 $q = $db->prepare("SELECT * FROM admin WHERE uname='$un' && pass='$ps'");
		    	 $q->execute();
		    	 $res=$q->fetchAll(PDO::FETCH_OBJ);
		    	 if($res)
		    	 {
		    	 	$_SESSION['un']=$un;
		    	 	header("Location:admin-home.php");
		    	 }
		    	 else
		    	 {
		    	 	echo "<script>alert('Wrong User')</script>";
		    	 }

		    }
		    ?> 
		   </div>
		   <div id="footer"><h4 align="center"><font size="5px">Our Mini Project</font></h4>
		   </div>

		</div>
		
	</div>
</div>

</body>
</html>
