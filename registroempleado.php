<?php

error_reporting(E_ALL);

require('conexion.php');

$nombre=$_POST['nombre'];
$apaterno=$_POST['apaterno'];
$amaterno=$_POST['amaterno'];
$direccion=$_POST['direccion'];
$tel=$_POST['tel'];
$cell=$_POST['cell'];
$ciudad=$_POST['ciudad'];
$estado=$_POST['estado'];
$codpost=$_POST['codpost'];
$comentario=$_POST['comentario'];
$email=$_POST['email'];

$sql="INSERT INTO empleado (nombre,apaterno,amaterno,direccion,tel,cell,ciudad,estado,codpost,comentario,email) VALUES ('$nombre','$apaterno','$amaterno','$direccion','$tel','$cell','$ciudad','$estado','$codpost','$comentario','$email')";

if (mysqli_query($conexion,$sql)) {
		echo "Excelente trabajo";
		echo  "<br>";
		echo "<form method=\"post\" action=\"registroempleado.php\">";
		echo "<input type=\"submit\" value=\"reporte\" class\"btn btn-info\" name=\"reporte\">";
		echo "</form>";

		if (isset($_POST['reporte'])) {
			header("Location:panel.php");
		}
	}
	else {	
 	echo "Fallo al insertar los datos.<br>#. Error: ".mysqli_errno().".<br> Mensaje: ".mysqli_error();
}

?>