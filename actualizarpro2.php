<?php

error_reporting(E_ALL);

require('conexion.php');

$Proveedor=$_POST['Proveedor'];
$Ncontacto=$_POST['Ncontacto'];
$Tcontacto=$_POST['Tcontacto'];
$codigopostal=$_POST['codigopostal'];
$email=$_POST['email'];
$Numero1=$_POST['Numero1'];
$Numero2=$_POST['Numero2'];
$cell=$_POST['cell'];
$Direccion=$_POST['Direccion'];
$Ciudad=$_POST['Ciudad'];
$Pais=$_POST['Pais'];
$Comentario=$_POST['Comentario'];
$fax=$_POST['fax'];
$Estado=$_POST['Estado'];
$Pais=$_POST['Pais'];

$idprovee=$_GET['idprovee'];

$result=mysql_query("SELECT Proveedor FROM proveedores WHERE Proveedor='$Proveedor'");


		if ($renglon=mysql_fetch_array($result)) {
		$query="UPDATE proveedores Set Proveedor='$Proveedor',Ncontacto='$Ncontacto',Tcontacto='$Tcontacto',Numero1='$Numero1',Numero2='$Numero2',email='$email',Direccion='$Direccion',Ciudad='$Ciudad',Estado='$Estado',codigopostal='$codigopostal',fax='$fax',cell='$cell',Pais='$Pais',Comentario='$Comentario' WHERE idprovee='$idprovee'";
		print $query;
		$result=mysql_query($query);
		
		header("Location:exito.php");

		}
		else {

			echo "Error al actualizar <br>#. Error: ".mysql_errno().".<br> Mensaje: ".mysql_error();
		}
?>