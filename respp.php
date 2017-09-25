<!DOCTYPE html>
<html>
<head>	<title> DIGITAL WORLD - Poner Precio </title> 
    <meta content="">
    <style></style>
    <link rel=stylesheet href="css/estilo.css" type="text/css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
  </head>
  <body>
<div id="principal">
        <header>
        <div class="logo">

<img src="dw.png"/>
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


              
        </header>  
      
         <div id="secundario">

                  <h1>Poner precio</h1>

                <?php
                
                $precio=$_POST['precio'];
                $dollar=$_POST['dolar'];
                $cambio=$_POST['cambio'];
                $option=$_POST['categoria'];
                
                
                  if ($option == 1)
                  {
                    $precio=$dollar*$cambio;
                    $precioiva=$precio+($precio*0.16);
                    $precioincremento=$precioiva+($precioiva*0.35);  
                    $preciopublico=$precioincremento+($precioincremento*0.16);
                    echo "Precio Publico".$precioincremento."<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "Prefio final con iva :".$preciopublico;
                    echo "<br>";
                   }
                  else
                  {
                    $precioiva=$precio+($precio*0.16);
                    $preciopublico=($precioiva+($precioiva*0.35));
                    $preciofactura=$preciopublico+($preciopublico*0.16);
                    echo "El precio al publico es:".$preciopublico."<br>";
                    echo "<br>";
                    echo "Precio a facturar:  ".$preciofactura;
                    echo "<br>";
                   }
                ?>
            <div class="volver">
                <a href="ponerprecio.php"> Volver a calcular </a>

            </div>
                    
        </div>
  </div>    
  <?php  include("footer.php"); ?>
  </body>
</html>

