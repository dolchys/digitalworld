<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			body{
				
			background-image: url(images/imagenestatica.png);
background-repeat:repeat;

			}
		</style>
	<link rel=stylesheet href="css/session.css" type="text/css">
	</head>
	
<body>
	

	<center> <h1>Hola hola</h1> </center>


</body>
</html>

<?php 
session_start();
if( ! isset($_SESSION['usuario']) ){
header("location:index.php");
}
else{
header("location:panel.php");

}
?>

