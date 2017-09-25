<!DOCTYPE html>
<html>
<head>	<title> DIGITAL WORLD - Mantenimiento</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/estilo3.css" type="text/css" />
    <link rel="stylesheet" href="css/mantenimiento.css" type="text/css" />
     <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
     <link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.css"/>
      <script src="jquery/jquery-3.1.1.min.js" type="text/javascript"></script>
      <script src="jquery-ui-1.12.1.custom/jquery-ui.js" type="text/javascript"></script>
      <script type='text/javascript' src='formexp.js'></script>
<style>
body{
     background: url(images/ny.jpg)no-repeat;
     background-size: cover;
}
</style>
<script>
$(function() {
   $( "#datepicker" ).datepicker();
});
</script>

<script>
                 function expandir_formulario(){
                if (document.mantenimiento.pagado.value =="0"){
                 xDisplay('capaexpansion','none')
                 xDisplay('capaexpansion1','none')
                }
                 
                if (document.mantenimiento.pagado.value =="1"){
                 xDisplay('capaexpansion','block')
                 xDisplay('capaexpansion1','none')
                }
                
                 if (document.mantenimiento.pagado.value =="2"){
                 xDisplay('capaexpansion','none')
                 xDisplay('capaexpansion1','block')
                }

                 
                } 
            </script>
  </head>
  <body>
	    <?php include("header.php") ?>
<div class="otro">
      <br>
      <br>
      <br>
      <br>
         <div id="busqueda">
      <form method="POST" action="#" >
              
                 <!-- <legend></legend> -->
                    <input type="text" name="cliente" id="cliente" placeholder="Cliente o Telefono" />
                    <button type="submit" name="buscar" id="buscar"> <i class="fa fa-search">  Buscar</i></button>
            
              <?php
              error_reporting(0);
                require('conexion.php');
             
                $cliente = $_POST['cliente'];
                $sql=mysqli_query($conexion,"SELECT * FROM clientes where nomclient='$cliente' OR tel='$cliente'");
              $nose=mysqli_query($conexion,"SELECT idclient FROM clientes where nomclient='$cliente' OR tel='$cliente'");
                /*   $sql="select * from agenda where nombre like '%$minombre%'";
                  ejemplo de una consulta con like %variale%
                */
                  $pinche=mysqli_fetch_array($nose);
                  $otro=$pinche[0];

               if ($imprimir=mysqli_fetch_array($sql)) {
             //echo $otro;
                }
                else{
                /* echo "<script language='JavaScript'>
                    window.alert('".$cliente." no esta registrado');
                    </script>";*/
                    echo "no esta registrado";
                }
             ?>
      </form>
		</div>
                      <div class="cliente">  <p> <h1> Registro de Mantenimiento </h1></p>

                        <form method="post" action="mantenimiento2.php" name="mantenimiento">
                       <!--<form method="post" action="mantenimiento2.php?idclient=<?php  $otro;?>">--> 
                          <fieldset>

                              <legend>Cliente</legend>
                                <label for="nomclient">Cliente: </label>
                                <input type="text" name="nomclient" id="nomclient" value="<?php print $imprimir['nomclient'];?>"/>
                               <input type="hidden" name="idclient" id="idclient" value="<?php echo $otro;?>"/>
                                
                                <label for="email">E-mail </label>
                                <input type="text" name="email" id="email" value="<?php print $imprimir['email'];?>" />

                                <label for="direccion">Direccion</label>
                                <input type="text" name="direccion" id="direccion" value="<?php print $imprimir['direccion'];?>" />

                                <label for="tel">Telefono</label>
                                <input type="text" name="tel" id="tel" value="<?php print $imprimir['tel'];?>" />

                                <label for="cell">Celular</label>
                                <input type="text" name="cell" id="cell" value="<?php print $imprimir['cell'];?>" />

                                <label for="ciudad">Ciudad</label>
                                <input type="text" name="ciudad" id="ciudad" value="<?php print $imprimir['ciudad'];?>" />

                                <label for="estado">Estado</label>
                                <input type="text" name="estado" id="estado" value="<?php print $imprimir['estado'];?>" />

                                <label for="fax">Fax</label>
                                <input type="text" name="fax" id="fax" value="<?php print $imprimir['fax'];?>" />

                                <label for="pais">Pais</label>
                                <input type="text" name="pais" id="pais" value="<?php print $imprimir['pais'];?>" />

                                <label for="pais">Codigo Postal</label>
                                <input type="text" name="codigopostal" id="codigopostal" value="<?php print $imprimir['codigopostal'];?>" />

                                <label for="comentario">Comentario</label>
                                <input type="text" name="comentario" id="comentario" value="<?php print $imprimir['comentario'];?>" />
                              </fieldset>
                              <fieldset>
                              <legend> Equipo a registrar</legend>
                                <label for="equipo">Equipo</label>
                                <input type="text" name="equipo" id="equipo" required="" />

                                <label for="modelo">Modelo</label>
                                <input type="text" name="modelo" id="modelo" required="" />

                                <label for="marca">Marca</label>
                                <input type="text" name="marca" id="marca" required="" />

                                <label for="nserie"># serie</label>
                                <input type="text" name="nserie" id="serie" required="" />

                                <label for="accesorio">Accesorios</label>
                                <input type="text" name="accesorio" id="accesorio" required="" />
                                
                                <label for="descripcion">Descripcion</label>
                                <input type="text" name="descripcion" id="descripcion" required="" />
                              </fieldset>

                                <fieldset>
                                <legend>Reporte</legend>
                                <label>Fecha</label>
                                <input type="date" name="fecha_usu" id="fecha_usu"/>
                                <label>Costo</label>
                                <input type="text" name="costo"/>
                               
                                <label>Pagado</label>
                                <select name="pagado" id="pagado" onchange="expandir_formulario()"> 
                                <option value="0"></option>
                                <option value="1">Si</option>
                                <option value="2">No</option>
                                </select>
                                 <div id="capaexpansion1">
                                <label>Abono</label>
                                <input type="text" name="abono"/>
                                </div>
                                <label>Colaborador</label>
                                <select id=empleado name="empleado">
                                <option value='0'>En turno</option>
                                <?php
                                $sql=mysqli_query($conexion,"SELECT * FROM empleado");
                                $option="";
                                while ($row=mysqli_fetch_array($sql)) {
                                  $option=$option."<option>$row[1]</option>";
                                 }
                                echo $option;
                                ?>
                              </select>
                                                              
                              </fieldset>

                              <button type="submit"> <i class="fa fa-pencil"></i>  Registrar </button>

                              <button type="reset">Reset</button>
                       </form>

                    </div>
    <br>
  </div>
     <?php include("footer.php") ?>
  </body>
</html>
