<!DOCTYPE html>
<html>
	<head>
		<title>Actualizando Proveedor....</title>
		<link rel="stylesheet" type="text/css" href="css/estilo3.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
	</head>
	<body>

  <header>
            <nav>
                <ul>
                    <li><a href="panel.php">Home</a></li>
                    <li><a href="#">Mayorista</a></li>
                    <li><a href="#">Usuarios</a></li>
                    <li><a href="#">Catalogo</a></li>
                </ul>
            </nav>
            <div class="logout">
                <a href="logout.php"> Cerrar Sesion </a>
            </div>
            <div class="usuario">

              <?php 
              session_start();
              if( ! isset($_SESSION['usuario']) ){
              header("location:index.php");
              }
              else{
               echo '<i class="fa fa-user"></i> '.$_SESSION['usuario'];
              }
              ?>
            </div>
            
        </header>  

        <div class="principal">

		       <div class="secundario">

                			Actualizacion del Proveedor con ID

                			<?php

                			error_reporting(E_ALL);

                			require('conexion.php');

                			$sql="SELECT * FROM proveedores";
                			$datos=mysql_query($sql,$conexion);
                			$idprovee=$_GET['idprovee'];

                			echo $idprovee;
                			echo "<br>";
                			$result=mysql_query("SELECT * FROM proveedores WHERE idprovee='$idprovee'");
                			$renglon=mysql_fetch_array($result);
                			echo "<br>";
                			print $renglon;
                			echo "<br>";
                			?>
			           <form action="actualizarpro2.php?idprovee=<?php print $idprovee;?>" method="post">

                  <div>
                    <label for="nombre">Nombre del Proveedor: </label>
                    <input type="text" name="Proveedor" id="Proveedor" value="<?php print $renglon['Proveedor'];?>" />
                  </div>

                  <div>
                    <label for="nombre">Nombre del Contacto: </label>
                    <input type="text" name="Ncontacto" id="Ncontacto" value="<?php print $renglon['Ncontacto'];?>" />
                  </div>

                  <div>
                    <label for="titulo">Titulo del Contacto: </label>
                    <input type="text" name="Tcontacto" id="Tcontacto" value="<?php print $renglon['Tcontacto'];?>" />
                  </div>

                  <div>
                    <label for="Numero">Primer Numero: </label>
                    <input type="tel" name="Numero1" id="Numero1" value="<?php print $renglon['Numero1'];?>">
                  </div>
                  <div>
                    <label for="Numero2">Segundo Numero: </label>
                    <input type="tel" name="Numero2" id="Numero2" value="<?php print $renglon['Numero2'];?>"/>
                  </div>
                  <div>
                    <label for="cell">Celular: </label>
                    <input type="tel" name="cell" id="cell" value="<?php print $renglon['cell'];?>"/>
                  </div>
                  <div>
                    <label for="fax">Fax: </label>
                    <input type="tel" name="fax" id="fax" value="<?php print $renglon['fax'];?>"/>
                  </div>                                               
                  <div>
                    <label for="Email">Correo electronico: </label>
                    <input type="email" name="email" id="email" value="<?php print $renglon['email'];?>" />
                  </div>                    

                  <div>
                    <label for="nombre">Direccion: </label>
                    <input type="text" name="Direccion" id="Direccion" value="<?php print $renglon['Direccion'];?>"/>
                  </div>
                    <div>
                    <label for="Estado">Estado: </label>
                    <input type="text" name="Estado" id="Estado" value="<?php print $renglon['Estado'];?>"/>
                  </div>
                  <div>
                  <label for="Codigo">Codigo Postal: </label>
                    <input type="text" name="codigopostal" id="codigopostal" value="<?php print $renglon['codigopostal'];?>"/>
                    </div>                  
                  <div> 
                    <label for="Ciudad">Ciudad:</label>
                    <input type="text" name="Ciudad" id="Ciudad" value="<?php print $renglon['Ciudad'];?>"/>
                  </div>
                              
                  <div>
                    <label for="Pais">Pais: </label>
                    <input type="text" name="Pais" id="Pais" value="<?php print $renglon['Pais'];?>"/> 
                  </div>
                  <div>
                    <label for="comentario">Comentario:</label>
                    <textarea name="Comentario" cols="45" rows="6" id="Comentario"> <?php print $renglon['Comentario'];?></textarea> 
                  </div>


                  <div>
                       <button type="submit">Actualizar</button>
                  </div>

			       </form>

		      </div>

    </div>
	</body>
</html>