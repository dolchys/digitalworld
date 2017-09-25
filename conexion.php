<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="dxdx01"; // Mysql password 
$db_name="dw"; // Database name 
//$tbl_name="users"; // Table name

// Connect to server and select databse.
$conexion=mysqli_connect($host, $username, $password)or die("cannot connect"); 
$dbs=mysqli_select_db($conexion,$db_name)or die("cannot select DB");
?>