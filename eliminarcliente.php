<?php

error_reporting(E_ALL);

require('conexion.php');


$idclient=$_GET['idclient'];

$result="DELETE FROM clientes WHERE idclient='$idclient'";

		if ($renglon=mysql_query($result)) {
		
		header("Location:exito.php");

		}
		else {

			echo "Error al actualizar <br>#. Error: ".mysql_errno().".<br> Mensaje: ".mysql_error();
		}
?>