<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$CON=MYSQL_CONNECT('localhost','root','admin');
MYSQL_SELECT_DB("vle",$CON);
$SQL="INSERT INTO registration
VALUES

'$_POST[t1]',
'$_POST[t2]',
'$_POST[t3]',
'$_POST[t4]',
'$_POST[t5]',
'$_POST[t6]',
'$_POST[t7]'.
'$_POST[t8]',
'$_POST[g1]',
'$_POST[t9]',
'$_POST[t10]',
'$_POST[t11]'

)";
MYSQL_QUERY($SQL,$CON);
echo "sucessfully submit";
MYSQL_CLOSE($CON);
?>
</body>
</html>