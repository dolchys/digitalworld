<!DOCTYPE html>
<html>
<head>	<title> DIGITAL WORLD - consulta </title> 
    <meta content="">
    <style></style>
    <link rel="stylesheet" href="css/estilo3.css" type="text/css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
    
  </head>
  <body>
	<?php include ("header.php"); ?>
<div class="principal">
      <br>
      <br>
      <br>
      <br>
         <div class="ponerprecio">

		<br> <p> Selecciona la base de datos a consultar</p>
			<form class="clase" method="post" action="consultar.php">
			        <select name="bd">
			        			<option value="" selected="selected">Bade de datos</option>
			                <option value="users">User</option>
			                <option value="proveedores">Proveedores</option>
			                <option value="clientes">Clientes</option>
                      <option value="Articulo">Articulos</option>
			  	      </select>
  	      <button type="submit"> Consulta </button>

			</form>	
			
		</div>
  </div>    
<?php include("footer.php"); ?>
  </body>
</html>