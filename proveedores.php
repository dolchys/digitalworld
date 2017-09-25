<!DOCTYPE html>
<html>
<head>	<title> DIGITAL WORLD - Proveedores </title> 
    <meta content="">
    
    <link rel=stylesheet href="css/estilo3.css" type="text/css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>  
  </head>
  <body>
      <?php include ("header.php"); ?>
      <div class="principal">
       
      
          <div class="cliente">
                      
                  <h1>Registro de Proveedores</h1>
                    <form action="registroproveedor.php" method="POST" name="proveedor">
                   
                  <div>
                    <label for="nombre">Nombre del Proveedor: </label>
                    <input type="text" name="Proveedor" id="Proveedor" placeholder="Nombre del Proveedor" required="" />
                  </div>

                  <div>
                    <label for="nombre">Nombre del Contacto: </label>
                    <input type="text" name="Ncontacto" id="Ncontacto" placeholder="Nombre del Proveedor" required=""  />
                  </div>
                  <div>
                    <label for="titulo">Titulo del Contacto: </label>
                    <br>
                    <input type="text" name="Tcontacto" id="Tcontacto" placeholder="Titulo del contacto" required="" />
                  </div>
                  <div>
                    <label for="Numero">Primer Numero: </label>
                    <br>
                    <input type="tel" name="Numero1" id="Numero1" placeholder="Primer Numero de contacto" required="" maxlength="10">
                  </div>
                  <div>
                    <label for="Numero2">Segundo Numero: </label>
                    <br>
                    <input type="tel" name="Numero2" id="Numero2" placeholder="Segundo Numero de contacto" required="" maxlength="10"/>
                  </div>
                  <div>
                    <label for="cell">Celular: </label>
                    <br>
                    <input type="tel" name="cell" id="cell" placeholder="Celular de contacto" required="" maxlength="10"/>
                  </div>
                  <div>
                    <label for="fax">Fax: </label>
                    <br>
                    <input type="tel" name="fax" id="fax" placeholder="fax" required="" maxlength="10"/>
                  </div>                                               
                  <div>
                    <label for="Email">Correo electronico: </label>
                    <br>
                    <input type="email" name="email" id="email" placeholder="Correo Electronico" required="" />
                  </div>                    

                  <div>
                    <label for="nombre">Direccion: </label>
                    <br>
                    <input type="text" name="Direccion" id="Direccion" placeholder="Direccion" required=""/>
                  </div>
                    <div>
                    <label for="Estado">Estado: </label>
                    <br>
                    <input type="text" name="Estado" id="Estado" placeholder="Estado" maxlength="25"  required=""/>
                  </div>
                  <div>
                  <label for="Codigo">Codigo Postal: </label>
                  <br>
                    <input type="text" name="codigopostal" id="codigopostal" placeholder="Codigo Postal" required=""/>
                    </div>                  
                    <div> 
                    <label for="Ciudad">Ciudad:</label>
                    <br>
                    <input type="text" name="Ciudad" id="Ciudad" placeholder="Ciudad" maxlength="25"  required=""/>
                  </div>
                              
                  <div>
                    <label for="Pais">Pais: </label>
                    <br>
                    <input type="text" name="Pais" id="Pais" placeholder="Pais" required="required"> </textarea>
                  </div>
                  <div>
                    <label for="comentario">Comentario:</label>
                    <br>
                    <textarea name="Comentario" cols="45" rows="6" id="Comentario" placeholder="Comentario" required=""></textarea> 
                  </div>


                  <div>
                    <button type="reset">Reset</button>
                    <button type="submit">Registrar</button>
                  </div>
                    </form>  
          </div>
     
      </div>
      <?php  include("footer.php"); ?>
  </body>
</html>