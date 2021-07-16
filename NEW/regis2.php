<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	</head>
	<body>
	<a href="login.php">login</a>
	<center>
	<form action="regis2.php" method="post" enctype="multipart/form-data">
	<table>
	<tr>
	<td align="center" colspn="2"><strong><h2>student registration</h2></strong></td>
	</tr>
		<tr>
			<td><strong>student name:</strong></td>
			<td><input type="text" name="username" placeholder="student name" id="input" required/></td>
		</tr>
		<tr>
			<td><strong>student email:</strong></td>
			<td><input type="email" name="useremail" placeholder="student email" id="input" required/></td>
		</tr>
		<tr>
			<td><strong>password:</strong></td>
			<td><input type="password" name="userpass" placeholder="password" id="input" required/></td>
		</tr>
		<tr>
			<td><strong>mobile no:</strong></td>
			<td><input type="text" name="usermobile" placeholder="mobile no." id="input" required/></td>
		</tr>
		<tr>
			<td><strong>image:</strong></td>
			<td><input type="file" name="imagename" id="input" required/></td>
		</tr>
		<tr>
			<td><strong>resume:</strong></td>
			<td><input type="file" name="resumename" id="input" required/></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="signup" id="btn"/></td>
		</tr>
	</table>
	</form>
	</center>
	</body>
	</html>
	
	<?php
	
	include 'Conn2.php';
	
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$useremail=$_POST['useremail'];
		$userpass=$_POST['userpass'];
		$usermobile=$_POST['usermobile'];
		$imagename = $_FILES['image']['name'];
		$imagetmp = $_FILES['image']['tmp_name'];
		$type = $_FILES['image']['type'];
		$size = $_FILES['image']['size'];
		$resumename = $_FILES['resume']['name'];
		$resumetmp = $_FILES['resume']['tmp_name'];
		$type = $_FILES['resume']['type'];
		$size = $_FILES['resume']['size'];
	
	
	move_uploaded_file($imagetmp,"images/$imagename");
	move_uploaded_file($resumetmp,"resume/$resumename");
		
		$query = "insert into student(name, email, password, mobile,imagename, imagetmp,resumename,resumetmp) values('$username', '$useremail', '$userpass', '$usermobile','$imagename','$imagetmp','$resumename','$resumetmp')";

		$query_run = mysqli_query($con,$query);
	
	if(mysqli_query($con, $query_run)>0)
	{
	 		echo"<script>alert('data insert incorrect')</script>";
		
	 		}
	 		else
			{
	 			
	 			echo"<script>alert('data inserted')</script>";
				echo"<script>window.open('login.php','_self')</script>";
	 		}

	}

?>
		
		