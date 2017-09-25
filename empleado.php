<!DOCTYPE html>
<html>
<head>	<title> DIGITAL WORLD - Registro empleados </title> 
    <meta content="">
    <style></style>
    <link rel="stylesheet" href="css/estilo3.css" type="text/css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>  
  </head>
  <body>
<?php include ("header.php"); ?>
<div class="principal">
       
      
         <div class="cliente">
            

                  <h1>Registro de Empleado</h1>
                    <form action="registroempleado.php" method="POST" name="empleado">
                   
                  <div>
                    <label for="nombre">Nombre del empleado: </label>
                    <br>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre del Empleado" required=""/>
                  </div>
                  <div>
                    <label for="apaterno">Apellido Paterno: </label>
                    <br>
                    <input type="text" name="apaterno" id="apaterno" placeholder="Apellido paterno" required=""/>
                  </div>
                  <div>
                    <label for="amaterno">Apellido Manterno: </label>
                    <br>
                    <input type="text" name="amaterno" id="amaterno" placeholder="Apellido materno" required=""/>
                  </div>

                    <div>
                    <label for="tel">Numero telefonico: </label>
                    <br>
                    <input type="tel" name="tel" id="tel" placeholder="Telefono" required="" maxlength="10">
                  </div>
                 
                  <div>
                    <label for="cell">Celular: </label>
                    <br>
                    <input type="tel" name="cell" id="cell" placeholder="Celular" required="" maxlength="10"/>
                  </div>
                                              
                  <div>
                    <label for="email">Correo electronico: </label>
                    <br>
                    <input type="email" name="email" id="email" placeholder="Correo Electronico" required="" />
                  </div>                    

                  <div>
                    <label for="direccion">Direccion: </label>
                    <br>
                    <input type="text" name="direccion" id="direccion" placeholder="direccion" required=""/>
                  </div>
                    <div>
                    <label for="estado">Estado: </label>
                    <br>
                    <input type="text" name="estado" id="estado" placeholder="Estado" maxlength="25"  required=""/>
                  </div>
                  <div>
                  <label for="codpost">Codigo Postal: </label>
                  <br>
                    <input type="text" name="codpost" id="codpost" placeholder="Codigo Postal" required=""/>
                    </div>                  
                    <div> 
                    <label for="ciudad">Ciudad:</label>
                    <br>
                    <input type="text" name="ciudad" id="ciudad" placeholder="ciudad" maxlength="25"  required=""/>
                  </div>

                    
                 
                  <div>
                    <label for="comentario">Comentario:</label>
                    <br>
                    <textarea name="comentario" cols="45" rows="6" id="comentario" placeholder="comentario" required=""></textarea> 
                  </div>
                  <div>
                    <button type="reset">Reset</button>
                    <button type="submit">Registrar</button>
                  </div>
                    </form>  
        </div>
     

  </div>    
          <?php include("footer.php"); ?>
  </body>
</html>