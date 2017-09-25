<!DOCTYPE html>
<html>
<head>	<title> DIGITAL WORLD - Articulos </title> 
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
  <?php include("header.php"); ?>
        <div class="principal"> 
      
         <div class="cliente">

                  <h1>Registro de Producto</h1>
                    <form action="registroarticulo.php" method="POST" name="articulo" enctype="multipart/form-data">
          
                  <div>
                    <label for="nombre">Nombre del Articulo: </label> 
                    <input type="text" name="nomart" id="nomart" placeholder="Nombre del Articulo" required=""/>
                  </div>
                  <div>
                    <label for="Marca">Marca: </label> <br>
                    <input type="text" name="marca" id="marca" placeholder="Marca" required=""/>
                  </div>
                  <label for="Codigo">Codigo: </label><br>
                    <input type="text" name="codigo" id="codigo" placeholder="codigo" required=""/>
                  <div>
                    <label for="nombre">Precio Mayorista: </label> <br>
                    <input type="text" name="precioinventario" id="precioinventario" placeholder="Precio Inventario" required=""/>
                  </div>
                    <div>
                    <label for="modelo">Modelo: </label> <br>
                    <input type="text" name="modelo" id="modelo" placeholder="Modelo" maxlength="25"  required=""/>
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
                    <textarea type="descripcion" name="descripcion" id="descripcion" placeholder="Descripcion" required="required"> </textarea><br>
                  </div>
                  <div>
                    <label for="imagen">Imagen:</label><br>
                    <input type="file" name="imagen"/ >
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