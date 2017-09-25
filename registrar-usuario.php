<!DOCTYPE html>
<html>
<head>	<title> DIGITAL WORLD - Poner Precio </title> 
    <meta content="">
    <style></style>
    <link rel=stylesheet href="css/estilo.css" type="text/css">
    
  </head>
  <body>
<div id="principal">
        <header>
        <div class="logo">

<img src="dw.png"/>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Mayorista</a></li>
                    <li><a href="option.php">Usuarios</a></li>
                    <li><a href="#">Catalogo</a></li>
                                          
                </ul>
            </nav>
            <div class="logout">
                <a href="logout.php"> Cerrar Sesion </a>

            </div>


              
        </header>  
      
         <div id="secundario">

                  <h1>Registro de usuario </h1>

                <?php
                error_reporting(E_ALL);

require('conexion.php');

$tbl_name="users"; // Table name

$Nombre=$_POST['name'];
$usuario=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

$fecha= date('Y-m-d', strtotime($_POST['fecha']));

$sql="INSERT INTO $tbl_name (Nombre,usuario,password,email,fecha) VALUES ('$Nombre','$usuario','$password','$email','$fecha')";
if (mysql_query($sql)) {
echo "Excelente trabajo";
}
else {
echo "Fallo al insertar los datos.<br>#. Error: ".mysql_errno().".<br> Mensaje: ".mysql_error();
}
                
                ?>
            <div class="volver">
                <a href="registrar.php"> Registrar otro usuario </a>

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




