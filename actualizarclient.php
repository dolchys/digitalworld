<!DOCTYPE html>
<html>
	<head>
		<title>Actualizando cliente</title>
		<link rel="stylesheet" type="text/css" href="css/estilo3.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
	</head>
	<body>
     <?php include("header.php");?>
        <div class="principal">

        		<div class="cliente">

        			Actualizacion del cliente con ID

        			<?php

        			error_reporting(E_ALL);

        			require('conexion.php');

        			$sql="SELECT * FROM clientes";
        			$datos=mysqli_query($conexion,$sql);
        			$idclient=$_GET['idclient'];

        			echo $idclient;
        			echo "<br>";
        			$result=mysqli_query($conexion,"SELECT * FROM clientes WHERE idclient='$idclient'");
        			$renglon=mysqli_fetch_array($result);
        			echo "<br>";
        			
        			echo "<br>";
        			?>

			           <form action="actualizarclient2.php?idclient=<?php print $idclient;?>" method="post">
			
				            <div>
                    <label for="nombre">Nombre del Cliente: </label>
                   
                    <input type="text" name="nomclient" id="nomclient" value="<?php print $renglon['nomclient'];?>" />
                    
                    
                    <label for="tel">Numero telefonico: </label>
                    
                    <input type="tel" name="tel" id="tel" value="<?php print $renglon['tel'];?>">
                    
                    <label for="cell">Celular: </label>
                    <input type="tel" name="cell" id="cell" value="<?php print $renglon['cell'];?>"/>
                  </div>
                  <div>
                    <label for="fax">Fax: </label>
                    
                    <input type="tel" name="fax" id="fax" value="<?php print $renglon['fax'];?>"/>
                 
                    <label for="email">Correo electronico: </label>
                    
                    <input type="email" name="email" id="email" value="<?php print $renglon['email'];?>" />

                    <label for="direccion">Direccion: </label>
                    
                    <input type="text" name="direccion" id="direccion" value="<?php print $renglon['direccion'];?>"/>
                  </div>
                  
                  <div>
                    <label for="estado">Estado: </label>
                   
                    <input type="text" name="estado" id="estado" value="<?php print $renglon['estado'];?>"/>

                  <label for="codigopostal">Codigo Postal: </label>
                  
                    <input type="text" name="codigopostal" id="codigopostal" value="<?php print $renglon['codigopostal'];?>"/>
                  
                    <label for="ciudad">Ciudad:</label>
                    
                    <input type="text" name="ciudad" id="ciudad" value="<?php print $renglon['ciudad'];?>"/>
                  </div>
                              
                  <div>
                    <label for="pais">Pais: </label>
                    
                    <input type="text" name="pais" id="pais" value="<?php print $renglon['pais'];?>"/>   

                    <label for="comentario">Comentario: </label>
                    <br>
                    <textarea name="comentario" cols="45" rows="6" id="comentario" > <?php print $renglon['comentario'];?></textarea> 
                  </div>
                  
                  <div>  <button type="submit"><i class="fa fa-refresh"></i>  Actualizar</button> </div>

			           </form>

		        </div>
        </div>
        <?php include("footer.php"); ?>
	</body>
</html>