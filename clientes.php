<!DOCTYPE html>
<html>
<head>	<title> DIGITAL WORLD - Clientes </title> 
    <meta content="">
    <link rel="stylesheet" href="css/estilo3.css" type="text/css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
  </head>
  <body>
     <?php include 'header.php'; ?>
<div class="principal">
       
      
         <div class="cliente">
            

                  <h1>Registro de Clientes</h1>
                    <form action="registroclientes.php" method="POST" name="cliente">
                   
                  <div>
                    <label for="nombre">Nombre del Cliente: </label>
                    
                    <input type="text" name="nomclient" id="nomclient" placeholder="Nombre del Cliente" required=""/>
                  </div>
                    <div>
                    <label for="tel">Numero telefonico: </label>
              
                    <input type="tel" name="tel" id="tel" placeholder="Telefono" required="" maxlength="10">
                  </div>
                 
                  <div>
                    <label for="cell">Celular: </label>
                  
                    <input type="tel" name="cell" id="cell" placeholder="Celular" required="" maxlength="10"/>
                  </div>
                  <div>
                    <label for="fax">Fax: </label>
                    <br>
                    <input type="tel" name="fax" id="fax" placeholder="fax" required="" maxlength="10"/>
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
                  <label for="codigopostal">Codigo Postal: </label>
                  <br>
                    <input type="text" name="codigopostal" id="codigopostal" placeholder="Codigo Postal" required=""/>
                    </div>                  
                    <div> 
                    <label for="ciudad">Ciudad:</label>
                    <br>
                    <input type="text" name="ciudad" id="ciudad" placeholder="ciudad" maxlength="25"  required=""/>
                  </div>
                              
                  <div>
                    <label for="pais">Pais: </label>
                    <br>
                    <input type="text" name="pais" id="pais" placeholder="pais" required="required"> </textarea>
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