<html>
<head>
<title>swapping number</title>
<body>
<center>
<form action="swap.php" method="post" enctype="multipart/form-data">
	<table>
	<tr>
	<td align="center" colspn="2"><strong><h2>swapping number</h2></strong></td>
	</tr>
		<tr>
			<td><strong>number 1:</strong></td>
			<td><input type="text" name="a" placeholder="number1" id="input" required/></td>
		</tr>
			<tr>
			<td><strong>number 2:</strong></td>
			<td><input type="text" name="b" placeholder="number2" id="input" required/></td>
		</tr>
		
			<td colspan="2" align="center"><input type="submit" name="submit" value="sumbit" id="btn"/></td>
		</tr>
		</table>
		</form>
</center>
</body>
</html>

<?php
if($_POST['submit'])
{
	$a=$_POST['a'];
	$b=$_POST['b'];
}

$a=$a+$b;
$b=$a-$b;
$a=$a-$b;	
echo "<strong><h3>after swapping</h3></strong></br>";
echo"value of number1:$a</br>";
echo"value of number2:$b</br>";
		
?>	