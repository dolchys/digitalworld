<!DOCTYPE html>
<html>
<head>
	<title>Consulta </title>

	<link rel="stylesheet" href="css/estilo3.css" type="text/css">
		<link rel="stylesheet" href="css/tabla.css" type="text/css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
</head>
	<body>
<?php include("header.php"); ?> 
		<div class="principal">
			<br>
      		<br>
      		<br>
      		<br>
			<div class="secundario">
				

			<?php

			error_reporting(E_ALL);

			require('conexion.php');

			$option=$_POST['bd'];

			$sql="SELECT * FROM $option";
			$datos=mysqli_query($conexion,$sql);


					switch ($option) {
						case 'users':
								echo "<h2> Usuarios </h2> <br>";
								echo "<table>
								
								<tr>
								<th>Name</th>
								<th>Username</th>
								<th>Password</th>
								<th>Email</th>
								<th>fecha</th>
								</tr>
								
								";

								while ($renglon=mysqli_fetch_array($datos)){
								
								echo "<tr>";
								echo "<td>".$renglon['Nombre']."</td>";
								echo "<td>".$renglon['usuario']."</td>";
								echo "<td>".$renglon['password']."</td>";
								echo "<td>".$renglon['email']."</td>";
								echo "<td>".$renglon['fecha']."</td>";
								echo "</tr>";
								
								}
								
								echo "</table>";
								echo "<br>";
							break;
						
						case 'proveedores':
								
								echo "<h2> proveedores </h2> <br>";
								echo "<table>
								<tr>
								<th>ID</th>
								<th>Proveedor</th>
								<th>Nombre contacto </th>
								<th>Titulo contacto </th>
								<th>Numero1</th>
								<th>Numero2</th>
								<th>email </th>
								<th>Direccion </th>
								<th>Ciudad </th>
								<th>Estado </th>
								<th>C P</th>
								<th>fax</th>
								<th>cell</th>
								<th>Pais</th>
								<th>Comentario</th>
								<th>Actualizar</th>
								</tr>";

							while ($renglon=mysqli_fetch_array($datos)){
								echo "<tr>";
								echo "<td>".$renglon['idprovee']."</td>";
								echo "<td>".$renglon['Proveedor']."</td>";
								echo "<td>".$renglon['Ncontacto']."</td>";
								echo "<td>".$renglon['Tcontacto']."</td>";
								echo "<td>".$renglon['Numero1']."</td>";
								echo "<td>".$renglon['Numero2']."</td>";
								echo "<td>".$renglon['email']."</td>";
								echo "<td>".$renglon['Direccion']."</td>";
								echo "<td>".$renglon['Ciudad']."</td>";
								echo "<td>".$renglon['Estado']."</td>";
								echo "<td>".$renglon['codigopostal']."</td>";
								echo "<td>".$renglon['fax']."</td>";
								echo "<td>".$renglon['cell']."</td>";
								echo "<td>".$renglon['Pais']."</td>";
								echo "<td>".$renglon['Comentario']."</td>";
								echo "<td><a href=\"actualizarpro.php?idprovee=".$renglon['idprovee']."\"> <i class=\"fa fa-refresh\"></i></a></td>";
								echo "</tr>";
								}
								echo "</table>";
								echo "<br>";
							break;
							
							case 'clientes':
								echo "<h2> Clientes</h2> <br> <br>";
								echo "<table>
								<tr>
								<th>ID</th>
								<th>Nombre Cliente </th>
								<th>Telefono</th>
								<th>email</th>
								<th>Direccion </th>
								<th>Ciudad </th>
								<th>Estado </th>
								<th>C P</th>
								<th>fax</th>
								<th>cell</th>
								<th>Pais</th>
								<th>Comentario</th>
								<th>Actualizar</th>
								<th>Eliminar</th>
								</tr>";

							while ($renglon=mysqli_fetch_array($datos)){
								echo "<tr>";
								echo "<td>".$renglon['idclient']."</td>";
								echo "<td>".$renglon['nomclient']."</td>";
								echo "<td>".$renglon['tel']."</td>";
								echo "<td>".$renglon['email']."</td>";
								echo "<td>".$renglon['direccion']."</td>";
								echo "<td>".$renglon['ciudad']."</td>";
								echo "<td>".$renglon['estado']."</td>";
								echo "<td>".$renglon['codigopostal']."</td>";
								echo "<td>".$renglon['fax']."</td>";
								echo "<td>".$renglon['cell']."</td>";
								echo "<td>".$renglon['pais']."</td>";
								echo "<td>".$renglon['comentario']."</td>";
								echo "<td><a href=\"actualizarclient.php?idclient=".$renglon['idclient']."\"><i class=\"fa fa-refresh\"></i></a></td>";
								echo "<td><a href=\"eliminarcliente.php?idclient=".$renglon['idclient']."\"><i class=\"fa fa-times\" ></i></a></td>";
								echo "</tr>";
								}
								echo "</table>";
								echo "<br>";
								break;

								case 'Articulo':
								
								echo "<h2> Articulos </h2> <br>";
								echo "<table >
								<tr>
								<th>ID</th>
								<th>Codigo</th>
								<th>Nombre</th>
								<th>Marca </th>
								<th>Modelo</th>
								<th>Publico</th>
								<th>P Inventario</th>
								<th>Categoria</th>
								<th>Description</th>
								<th>Imagen</th>
								<th>Actualizar</th>
								</tr>";

							while ($renglon=mysqli_fetch_array($datos)){
								echo "<tr>";
								echo "<td>".$renglon['idart']."</td>";
								echo "<td>".$renglon['codigo']."</td>";
								echo "<td>".$renglon['nomart']."</td>";
								echo "<td>".$renglon['marca']."</td>";
								echo "<td>".$renglon['Modelo']."</td>";
								echo "<td>".$renglon['Preciopublico']."</td>";
								echo "<td>".$renglon['Precioinventario']."</td>";
								echo "<td>".$renglon['categoria']."</td>";
								echo "<td>".$renglon['Descripcion']."</td>";
								echo "<td><img width='180' height='200' src=imagesproductos/".$renglon['imagenart']."></td>";
								echo "<td><a href=\"actualizarticulos.php?idart=".$renglon['idart']."\"> <i class=\"fa fa-refresh\"></i></a></td>";
								echo "</tr>";
								}
								echo "</table>";
								echo "<br>";
							break;
							
					}


			?>
					<div class="volver">
					 <a href="consulta.php"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Volver </a>

					</div>
			</div>

		</div>
		<?php include("footer.php"); ?>
	</body>
</html