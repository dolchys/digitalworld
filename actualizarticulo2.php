<?php
error_reporting(E_ALL);
require('conexion.php');

$idart=$_POST['idart'];
$nomart=$_POST['nomart'];
$marca=$_POST['marca'];
$codigo=$_POST['codigo'];
$precioinventario=$_POST['precioinventario'];
$descripcion=$_POST['descripcion'];
$modelo=$_POST['modelo'];
$categoria=$_POST['categoria'];
$otro=$_POST['otro'];


/*$consulta = "SELECT * FROM Articulo WHERE idart =$idart";

//var_dump($consulta);


$result=mysqli_query($conexion,$consulta);

$fila=mysqli_fetch_array($result);

print $fila;
*/
//var_dump($result);
$subir=move_uploaded_file($_FILES['imagen']['tmp_name'],
	'imagesproductos/'.$_FILES['imagen']['name']);

$imagenart=$_FILES['imagen']['name'];
			if ($subir) {
				
			

			

				$query="UPDATE Articulo SET nomart='$nomart',marca='$marca',codigo='$codigo',Precioinventario='$precioinventario',Descripcion='$descripcion',Modelo='$modelo',categoria='$categoria',imagenart='$imagenart' WHERE idart='$idart'";

				$resultado=mysqli_query($conexion,$query);
				if ($resultado) {
				header("Location:exito.php");
				}
				else{var_dump($resultado);
					print "pinche error"; }
				}
		else {

			echo "Error al actualizar <br>#. Error: ".mysqli_errno($conexion).".<br> Mensaje: ".mysqli_error($conexion);
			
			}

?>