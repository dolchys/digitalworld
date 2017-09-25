<!DOCTYPE html>
<html>
<head>  <title> DIGITAL WORLD - Admin </title> 
    <link rel="stylesheet" href="css/panel.css" type="text/css"/>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
    <style>
    body{
     background: url(images/volar.jpg) no-repeat;
     background-repeat: no-repeat ;
      background-size: cover;
        }
</style>
     </head>   
    <body>
        <header>
              <center><img src="images/dw.png" class="pinche"></center>
            <div class="logout">
                <a href="logout.php"><i class="fa fa-power-off"></i> Salir </a>
            </div>
        </header>  
    <div class="principal">

         <div class="secundario">
          <!-- contenedor -->
          <div class="menu">
            <div class="opciones"> <a href="ponerprecio.php"><i class="fa fa-calculator fa-3x"></i> <br><br>Cotizar</a></div>
            <div class="opciones"> <a href="consulta.php"><i class="fa fa-search fa-3x"></i><br><br> Consultas</a></div>
            <div class="opciones"> <a href="altas.php"> <i class="fa fa-pencil fa-3x"></i> <br><br> Altas</a></div>
            <div class="opciones"> <a href="mantenimiento.php"><i class="fa fa-medkit fa-3x"></i><br><br>Mantenimiento</a></div>
            <div class="opciones"> <a href="#"><i class="fa fa-cart-plus fa-3x" ></i> <br><br>Ventas</a> </div>
            <div class="opciones"> <a href="reportes.php"><i class="fa fa-file-o fa-3x"></i><br><br>Reportes</a> </div>
            <div class="opciones"> <a href="#">Contact</a> </div>
            <div class="opciones"> <a href="#">Contact</a> </div>
            
        </div>            

          </div>
      
    </div>

<?php include("footer.php") ?>
  </body>
</html>