<?php
include 'Conn2.php';
if(isset($_GET['dow'])){
	$path = $_GET['dow'];
	$res = mysqli_query("select * from student where path = '$path'");
	
	header("Content-Description:File Transfer");
	header('Content-type:application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($path).'"');
	header("Content-Transfer-Encoding:binary");
	header("Expires:0");
	header("Cache-Control:must-revalidate");
	header("Pragma:public");
	header('Content-length: '.filesize($path));
	ob_clean();
	flush();
	readfile($path);
}

?>