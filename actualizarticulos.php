<!DOCTYPE html>
<html>
<head>	<title> DIGITAL WORLD - Actualizar Articulos </title> 
    <meta content="">
    <style></style>
    <link rel=stylesheet href="css/estilo3.css" type="text/css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
    <script type='text/javascript' src='formexp.js'></script>
            <script>
                 function expandir_formulario(){
                 if (document.articulo.categoria.value =="1"){
                 xDisplay('capaexpansion','block')
                }
                else{
                  xDisplay('capaexpansion','none')
                }
                }
            </script>
  </head>
  <body>

        <header>
        <div class="logo">
            <nav>
                <ul>
                    <li><a href="panel.php">Home</a></li>
                    <li><a href="#">Mayorista</a></li>
                    <li><a href="option.php">Usuarios</a></li>
                    <li><a href="#">Catalogo</a></li>
                                          
                </ul>
            </nav>
      </div>
            <div class="logout">
                <a href="logout.php"><i class="fa fa-power-off"></i> Salir </a>
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
         Actualizacion del articulo con ID

         <?php

              error_reporting(E_ALL);

              require('conexion.php');

              $sql="SELECT * FROM Articulo";
              $datos=mysqli_query($conexion,$sql);
              $idart=$_GET['idart'];
              
              echo $idart;
              echo "<br>";
              $result=mysqli_query($conexion,"SELECT * FROM Articulo WHERE idart='$idart'");
              $renglon=mysqli_fetch_assoc($result);
              echo "<br>";
              //var_dump($renglon);// para ver que ejecuta el codigo
              echo "<br>";
              ?>

                  <h1>Registro de Producto</h1>
                    <form action="actualizarticulo2.php" method="POST" name="articulo" enctype="multipart/form-data">
          
                  <div>
                    <label for="nombre">Nombre del Articulo: </label> 
                    <input type="text" name="nomart" id="nomart" value="<?php print $renglon['nomart'];?>" />
                  </div>
                  <div>
                    <label for="Marca">Marca: </label> <br>
                    <input type="text" name="marca" id="marca" value="<?php print $renglon['marca'];?>"/>
                  </div>
                  <label for="Codigo">Codigo: </label><br>
                    <input type="text" name="codigo" id="codigo" value="<?php print $renglon['codigo'];?>"/>
                  <div>
                    <label for="nombre">Precio Mayorista: </label> <br>
                    <input type="text" name="precioinventario" id="precioinventario" value="<?php print $renglon['Precioinventario'];?>"/>
                  </div>
                    <div>
                    <label for="modelo">Modelo: </label> <br>
                    <input type="text" name="modelo" id="modelo" value="<?php print $renglon['Modelo'];?>" maxlength="25"/>
                  </div>
                   <div>
                    <label for="categoria">Categoria: </label>
                    <select name="categoria" onchange="expandir_formulario()" size="1"> 
                        <option value="Discos Duros">Discos Duros</option>
                        <option value="Memorias">Memorias</option>
                        <option value="Motherboards">Motherboards</option>
                        <option value="Monitores">Monitores</option>
                        <option value="1">Otro</option>
                    </select>
                  </div>
                 
                 <div id="capaexpansion">
                   <input type="text" name="otro" id="otro" placeholder="otro" maxlength="25" >

                 </div>
                  <div>
                    <label for="descripcion">Descripcion: </label> <br>
                    <textarea type="descripcion" name="descripcion" id="descripcion"> <?php print $renglon['Descripcion'];?> </textarea><br>
                  </div>
                  <div>
                    <label for="imagen">Imagen:</label><br>
                    <input type="file" name="imagen"/ >
                    <input type="hidden" name="idart" value="<?php echo $idart;?>"/>
                  </div>
                  <div>
                    <button type="reset">Reset</button>
                    <button type="submit">Actualizar</button>
                  </div>
                    </form>  
        </div>
     

  </div>    
<?php include("footer.php"); ?>
  </body>
</html>