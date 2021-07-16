<?php
include 'Conn2.php';
$update_record = $_GET['update'];

$query = "select * from student where id ='$update_record ' ";

$res = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($res)) 
{

	$update_id = $row['id'];
	$username = $row['name'];
	$useremail = $row['email'];
	$userpass = $row['password'];
	$usermobile = $row['mobile'];
	$imagename = $row['imagename'];
	$resumename = $row['resumename'];
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
<center>
<form action="Update.php? update_form=<?php echo $update_id; ?>" method="post" enctype="multipart/form-data">
<table border="1">
	<tr>
		<td>User Name :</td>
		<td><input type="text" name="name" value="<?php echo $username;?>"></input></td>
	</tr>
	<tr>
		<td>User email :</td>
		<td><input type="text" name="email" value="<?php echo $useremail;?>"></input></td>
	</tr>
	<tr>
		<td>Password :</td>
		<td><input type="password" name="pass" value="<?php echo $userpass;?>"></input></td>
	</tr>
	<tr>
		<td>Mobile No :</td>
		<td><input type="text" name="mobile" value="<?php echo $usermobile;?>"></input></td>
	</tr>
	<tr>
		<td>Image :</td>
		<td><input type="file" name="imagename"></input></td>
	</tr>
	<tr>
		<td>Resume :</td>
		<td><input type="file" name="resumename"></input></td>
	</tr>
	<tr>
		<td align="center" colspan="2" bgcolor="green"><input type="submit" name="update" value="Update"></td>
	</tr>
</table>
	
</form>
</center>
</body>
</html>


<?php
include 'Conn2.php';

if(isset($_POST['update']))
{

	$update_id1 = $_GET ['update_form'];

	$username = $_POST['name'];
	$useremail = $_POST['email'];
	$userpass = $_POST['pass'];
	$usermobile = $_POST['mobile'];
	$imagename = $_FILES['imagename']['name'];
	$imagetmp = $_FILES['imagename']['tmp_name'];
	$resumename = $_FILES['resumename']['name'];
	$resumetmp = $_FILES['resumename']['tmp_name'];


	/*if($imagename ==0){
		move_uploaded_file($resumetmp,"resume/$resumename");
	}
	else{
		move_uploaded_file($imagetmp,"images/$imagename");
	}*/
	

	$query1 = "update student set name = '$username', email = '$useremail' , password = '$userpass', mobile = '$usermobile', imagename = '$imagename', imagetmp = '$imagetmp', resumename = '$resumename', resumetmp = '$resumetmp' where id = '$update_id1'";

	if (mysqli_query($con, $query1)) {
		
		header ( "location:Retrieve.php? updated=Data has been updated.....?" );
		
		}

}
?>