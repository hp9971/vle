<?php 

include 'Conn2.php';

$delete_record = $_GET ['del'];

$query = "delete from student where id = '$delete_record'";

if (mysqli_query ($con, $query )) {
	
	echo "<script>window.open('Retrieve.php?deleted=Record has been deleted successfully....?','_self')</script>";
}

 
 ?>