<?php
error_reporting(E_ALL);
require('conexion.php');
$tbl_name="Articulo"; /* Table name*/

$nomart=$_POST['nomart'];
$marca=$_POST['marca'];
$codigo=$_POST['codigo'];
$precioinventario=$_POST['precioinventario'];
$descripcion=$_POST['descripcion'];
$modelo=$_POST['modelo'];
$categoria=$_POST['categoria'];
$otro=$_POST['otro'];
/*
$_FILES['imagen']['name'];// Nombre del archivo
$_FILES['imagen']['type'];// tipo de archivo subiendo
$_FILES['imagen']['tmp_name'];// temporal location
$_FILES['imagen']['size'];//tamanio en bytes que genera el archivo que se subio
$_FILES['imagen']['error']; // aqui se almacenaria si hubiera un error

*/

 
$Preciopublico=($precioinventario+($precioinventario*0.16))+($precioinventario*0.35);

$subir=move_uploaded_file($_FILES['imagen']['tmp_name'],
	'imagesproductos/'.$_FILES['imagen']['name']);

$imagenart=$_FILES['imagen']['name'];
if ($subir) {

			$sql="INSERT INTO $tbl_name (nomart,marca,codigo,precioinventario,Preciopublico,descripcion,modelo,categoria,imagenart) VALUES ('$nomart','$marca','$codigo','$precioinventario','$Preciopublico','$descripcion','$modelo','$categoria','$imagenart')";

			if (mysqli_query($conexion,$sql)) {
					header("Location:exito.php");
				}
				else {	
			 	echo "Fallo al insertar los datos.<br>#. Error: ".mysqli_errno($conexion).".<br> Mensaje: ".mysqli_error($conexion);
			}
	
}

else {
	echo "error al subir la imagen".mysqli_errno($conexion).".<br> Mensaje: ".mysqli_error($conexion);

}



?>