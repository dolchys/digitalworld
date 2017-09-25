<!DOCTYPE html>
<html>
<head>	<title> DIGITAL WORLD - Poner Precio </title> 
    <meta content="">
     <style>
    body{
     background: url(images/24694.jpg) no-repeat;
     background-repeat: no-repeat ;
      background-size: cover;
        }
  </style>
    
    <link rel="stylesheet" href="css/estilo3.css" type="text/css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
    <script type='text/javascript' src='formexp.js'></script>
            <script>
                 function expandir_formulario(){
                if (document.articulo.categoria.value =="0"){
                 xDisplay('capaexpansion','none')
                 xDisplay('capaexpansion1','none')
                }
                 
                if (document.articulo.categoria.value =="1"){
                 xDisplay('capaexpansion','block')
                 xDisplay('capaexpansion1','none')
                }
                
                 if (document.articulo.categoria.value =="2"){
                 xDisplay('capaexpansion','none')
                 xDisplay('capaexpansion1','block')
                }

                 
                } 
            </script>
  </head>
  <body>
  <?php include("header.php") ?>
<div class="principal">
               <div class="ponerprecio">
                  <h1>Poner precio</h1>
                    <form action="respp.php" method="POST" name="articulo">                    
                   <div>
                    <label for="categoria">Elige una moneda a cotizar: </label>
                    <select name="categoria" id="categoria" onchange="expandir_formulario()" size="1"> 
                    <option value="0" selected="selected"> Moneda</option>
                    <option value="1">Dolar</option>
                    <option value="2">Pesos</option>
                    </select>
                  </div>
        
                 <div id="capaexpansion">
                  <img src="images/monedaUSD.png">
                   <label for="Dollar">Precio en Dollar: </label><br>
                   <input type="text" name="dolar" id="dolar" placeholder="Dollar" maxlength="25" /><br>
                   <label for="cambio"><img src="images/monedaMXN.png"> Cambio al dia: </label><br>
                   <input type="text" name="cambio" id="cambio" placeholder="Cambio" maxlength="10" />
                 </div> 
                  <div id="capaexpansion1">
                  <img src="images/monedaMXN.png">
                    <label for="nombre"> Precio: </label><br>
                    <input type="text" name="precio" id="precio" placeholder="Precio de articulo"/>
                  </div>
                  <div>
                    <button type="reset">Reset</button>
                    <button type="submit">Calcular</button>
                  </div>                          
                    </form>  
        </div>
  </div>    
<?php include("footer.php"); ?>
  </body>
</html>

