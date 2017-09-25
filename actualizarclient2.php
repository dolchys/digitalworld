<?php

error_reporting(E_ALL);

require('conexion.php');

$nomclient=$_POST['nomclient'];
$codigopostal=$_POST['codigopostal'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$cell=$_POST['cell'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$pais=$_POST['pais'];
$comentario=$_POST['comentario'];
$fax=$_POST['fax'];
$estado=$_POST['estado'];


//id cliente
$idclient=$_GET['idclient'];

				$result=mysqli_query($conexion,"SELECT nomclient FROM clientes WHERE idclient='$idclient'");



				if ($renglon=mysqli_fetch_array($result)) {

				$query="UPDATE clientes SET nomclient='$nomclient',codigopostal='$codigopostal',email='$email',tel='$tel',cell='$cell',direccion='$direccion',ciudad='$ciudad',pais='$pais',comentario='$comentario',fax='$fax',estado='$estado' WHERE idclient='$idclient'";

				$result=mysqli_query($conexion,$query);
		
				 header("Location:exito.php");

			}
		else {

			echo "Error al actualizar <br>#. Error: ".mysql_errno().".<br> Mensaje: ".mysql_error();
		}


?>