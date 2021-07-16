<?php
session_start ();

?>
<!DOCTYPE html>
<head>
	<title>Login</title>
	
	<style type="text/css">
		body{
			background-color:#CCCCCC;
			
		}
		
		input{
		
			margin-top: 20px;
			border-radius: 8px;
			font-size: 25px;
			border-color:#993333;
			
		}
	</style>
</head>
<body>
<a href="regis2.php">Register New User</a>

<center>
	<form method="post">
		<input type="email" name="email" placeholder="email" required/></input></br></br>
		<input type="password" name="pass" placeholder="password" required/></br></br>
		<input type="submit" name="login" value="login">
	</form>
</center>

</body>
</html>

<?php
include 'Conn2.php';
if(isset($_POST['login']))
{
$email=$_SESSION['email']=$_POST['email'];
$pass=$_POST['pass'];

$query="select * from student where email='$email' AND password='$pass'";

$query_run=mysqli_query($con,$query);

		if(mysqli_num_rows($query_run)>0){
		
			echo"<script>window.open('Retrieve.php?logged=logged in successful!!','_self')</script>";
		}
		else{
				echo"<script>alert('useremail or password incorrect')</script>";
			echo"<script>window.open('login.php?errored=invalid input!!','_self')</script>";
			
		}
	}
	
?>