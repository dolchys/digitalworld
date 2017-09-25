<!DOCTYPE html>
<html>
<head>
	<title>Inicio sesion</title>
	<link rel="stylesheet" href="css/inicio.css" type="text/css" />
	<link rel="stylesheet" href="css/error.css" type="text/css" />
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
</head>
<body>
<header>  
			<img src="dw.png">
			
			</header>

</body>
</html>

<?php
session_start();
require('conexion.php');
$tbl_name="users"; // Table name

// Connect to server and select databse.


// username and password sent from form 
$myusername=$_POST["username"];
$mypassword=$_POST["password"];

/*$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);	*/
$sql="SELECT * FROM users WHERE usuario='$myusername' AND password='$mypassword'";
$result=mysqli_query($conexion,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION["usuario"] = $myusername;
$_SESSION["contra"] =$mypassword; 
header("Location:login_success.php"); // redirecciona a otra pagina
}
else {
echo '
<div id="error">
<br>
<h2><i class="fa fa-exclamation-circle fa-2x" aria-hidden="true"></i></h2><h3>Error de Usuario o Contraseña </h3>
<a href="index.php"><button type="button"><i class="fa fa-chevron-left"></i> Volver</button></a>
</div>
';}
?>
