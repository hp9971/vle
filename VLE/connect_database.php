<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$db_host="localhost";
 
$db_username="root";

$db_pass="admin";

$db_name="VLE";

mysql_connect($db_host, $db_username, $db_pass)or die("Could Not Connect to Database");

mysql_select_db("$db_name")or die("Database not available");

?>