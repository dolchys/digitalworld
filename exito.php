<!DOCTYPE html>
<html>
<head>	<title> DIGITAL WORLD - exito </title> 
    <meta content="">

    <link rel=stylesheet href="css/estilo3.css" type="text/css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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

                  
                  <img src="dw.png"/>
                  <br>
                  <h2>Resultado</h2><br>
                <?php
                print "La operacion se ha realizado con exito";

                ?>
                <br>
                <div class="volver">
                <a href="consulta.php"> Volver a consultar </a>
                    
        </div>
     
            

            </div>
              

  </div>    
             <footer>
                    <div class="vcard">
                      <div> <span clase="name"> DIGITAL WORLD </span> - <span class="locality"> TABASCO </span> - <span class="region"> MEXICO</span> - <span class="postal-code">86000</span> - <span class="country-name">MX</span></div>
                    
                    </div>
                  <h6>(c) 2014 DIGITAL WORLD </h6>
                  
        </footer>
  </body>
</html>

