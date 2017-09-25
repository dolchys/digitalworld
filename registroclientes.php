<? php
error_reporting(E_ALL);
require('conexion.php');
$tbl_name="clientes"; /* Table name*/

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


$sql="INSERT INTO $tbl_name (nomclient,tel,email,direccion,ciudad,estado,codigopostal,fax,cell,pais,comentario) VALUES ('$nomclient',$tel,'$email','$direccion','$ciudad','$estado','$codigopostal','$fax','$cell','$pais','$comentario')";

if (mysql_query($sql)) {
		
		header("Location:exito.php");

	}
	else {	
 	echo "Fallo al insertar los datos.<br>#. Error: ".mysql_errno().".<br> Mensaje: ".mysql_error();
}

?>