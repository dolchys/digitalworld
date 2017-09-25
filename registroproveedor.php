<?php
error_reporting(E_ALL);
require('conexion.php');
$tbl_name="proveedores"; /* Table name*/

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
 


$sql="INSERT INTO $tbl_name (Proveedor,Ncontacto,Tcontacto,Numero1,Numero2,email,Direccion,Ciudad,Estado,codigopostal,fax,cell,Pais,Comentario) VALUES ('$Proveedor','$Ncontacto','$Tcontacto','$Numero1','$Numero2','$email','$Direccion','$Ciudad','$Estado','$codigopostal','$fax','$cell','$Pais','$Comentario')";

if (mysql_query($sql)) {
		echo "Excelente trabajo";
	}
	else {	
 	echo "Fallo al insertar los datos.<br>#. Error: ".mysql_errno().".<br> Mensaje: ".mysql_error();
}

?>