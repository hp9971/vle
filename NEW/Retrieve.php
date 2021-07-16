<?php
session_start ();
if(!$_SESSION['email'])
{
header ("location:login.php? error=Plz Login");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Retrieve</title>
	<style>
		tr:nth-child(even) {
		background-color:#999999;
		}
    </style>
</head>
<body>


 
	WELCOME:
	<font color=#9A5478; size="4"><b><?php echo $_SESSION['email'];?></b></font>
	


<form action="" method="post">
	<table width="1000" align="center" border="2">
		<tr>
			<td align="center" colspan="9" bgcolor="blue"><font size="6">Data Viewing..</font></td>
		</tr>
		<tr align="center">
			<th>Sr No.</th>
			<th>User Name</th>
			<th>User Email</th>
			<th>Password</th>
			<th>Mobile No.</th>
			<th>image</th>
			<th>resume</th>
			<th>delete</th>
			<th>update</th>
		
			
		</tr>

<?php
include 'Conn2.php';

$query = "select * from student order by 1 ASC";
$res = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($res)) {

	$userid = $row['id'];
	$username = $row['name'];
	$useremail = $row['email'];
	$userpass = $row['password'];
	$usermobile = $row['mobile'];
	$imagename=$row['imagename'];
	$imagetmp=$row['imagetmp'];
	$resumename=$row['resumename'];
	$resumetmp=$row['resumetmp'];
	
	
	
?>

		<tr align="center">
			<td><?php echo $userid; ?></td>
			<td><?php echo $username; ?></td>
			<td><?php echo $useremail; ?></td>
			<td><?php echo $userpass; ?></td>
			<td><?php echo $usermobile; ?></td>
						<td><img src="images/<?php echo $imagename; ?>" height="70" width="90" style="display:cover; "></td>
			<td><a href="Download.php? dow=<?php echo $userid; ?>">View</a></td>
			<td><a href="Delete.php? del=<?php echo $userid; ?>">Delete</a></td>
			<td><a href="Update.php? update=<?php echo $userid;?>">Update</a></td>
				
		</tr>
		<?php } ?>
	</table>
</form>
</br></br></br></br>

<a href="Logout.php">LOGOUT</a>
</body>
</html>