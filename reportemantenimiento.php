<!DOCTYPE html>
<html>
<head>	<title> DIGITAL WORLD - Reporte</title>
    <meta content="">
    <link rel="stylesheet" href="css/estilo3.css" type="text/css" />
    <link rel="stylesheet" href="css/reporte.css" type="text/css" />
    <link rel="stylesheet" href="css/mantenimiento.css" type="text/css" />
     <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
     <link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.css"/>
      <script src="jquery/jquery-3.1.1.min.js" type="text/javascript"></script>
      <script src="jquery-ui-1.12.1.custom/jquery-ui.js" type="text/javascript"></script>
      <script type='text/javascript' src='formexp.js'></script>
<style>
body{
     background: url(images/saddledome-scotiabank.jpg)no-repeat;
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
              
                 <legend></legend> 
                    <input type="text" name="uno" id="cliente" placeholder="Numero de reporte" />
                    <button type="submit" name="buscar" id="buscar"> <i class="fa fa-search">  Buscar</i></button>
        </form>
        </div>
            <div class="reporte">
              <?php
              error_reporting(0);
                require('conexion.php');
             
                $reporte = $_POST['uno'];
             
                //echo $reporte;
             
                echo "<br>";
                $sql=mysqli_query($conexion,"SELECT * FROM reporte where idr='$reporte'");
                 while ($pinche=mysqli_fetch_array($sql))
                {
                if($pinche['pagado']=1){
                $pinche['pagado']=Si;
                }
                else{
                $pinche['pagado']=no;
                }
                $idclient=$pinche['idclient'];
                $cliente=mysqli_query($conexion,"SELECT nomclient from clientes where idclient=$idclient");
                $client=mysqli_fetch_array($cliente);
                echo "REPORTE #";
                echo $pinche['idr'];
                echo
                 "
                <table width=\"100%\" border=\"1\">
                <thead>
                <tr>
                <td><b><center>Cliente</center></b></td>
                <td><b><center>Costo</center></b></td>
                <td><b><center>Pagado</center></b></td>
                <td><b><center>Saldo</center></b></td>
                <td><b><center></center></b></td>
                </tr>
                </thead>
                <tr>
                  <td>".$client[0]."</td>
                  <td>".$pinche['costo']."</td>
                  <td>".$pinche['pagado']."</td>
                  <td>".$pinche['saldo']."</td>
                  <td></td>
                </tr>
                </table>
                ";
              echo "Equipo";
              $idequip=$pinche['idequip'];
                $equiporegistrado=mysqli_query($conexion,"SELECT * from equipo where idequip=$idequip");
                $equipo=mysqli_fetch_array($equiporegistrado);
                echo "<br>";
                echo $equipo[0];
                echo
                 "
                <table width=\"100%\" border=\"1\">
                <thead>
                <tr>
                <td><b><center>Equipo</center></b></td>
                <td><b><center>Marca</center></b></td>
                <td><b><center>Modelo</center></b></td>
                <td><b><center>Serie</center></b></td>
                <td><b><center>Accesorio</center></b></td>
                <td><b><center>Descripcion</center></b></td>
                </tr>
                </thead>
                <tr>
                  <td>".$equipo['equipo']."</td>
                  <td>".$equipo['marca']."</td>
                  <td>".$equipo['modelo']."</td>
                  <td>".$equipo['nserie']."</td>
                  <td>".$equipo['accesorio']."</td>
                  <td>".$equipo['descripcion']."</td>
                  
                </tr>
                </table>
                ";

                echo "Cliente";
                $idclient=$pinche['idclient'];
                $cliente=mysqli_query($conexion,"SELECT * from clientes where idclient=$idclient");
                $client=mysqli_fetch_array($cliente);

                echo
                 "
                <table width=\"100%\" border=\"1\">
                <thead>
                <tr>
                <td><b><center>Cliente</center></b></td>
                <td><b><center>Direccion</center></b></td>
                <td><b><center>Email</center></b></td>
                <td><b><center>Telefono</center></b></td>
                <td><b><center>Comentario</center></b></td>
                <td><b><center>Descripcion</center></b></td>
                </tr>
                </thead>
                <tr>
                  <td>".$client['nomclient']."</td>
                  <td>".$client['direccion'].$client['ciudad'].$client['estado'].$client['codigopostal']."</td>
                  <td>".$client['email']."</td>
                  <td>".$client['tel']."</td>
                  <td>".$client['comentario']."</td>
                  <td>".$client['descripcion']."</td>
                  
                </tr>
                </table>
                ";
                echo "<br>";
                 echo "<form method=\"post\" action=\"otro.php\">";
                        echo "<input type=\"submit\" value=\"reporte\"  name=\"reporte\"/>";
                        echo "<input type=\"hidden\" value=\"$reporte\" name=\"uno\"/>";
                        echo "</form>";
                }     
             ?>

      
	</div>	
    </div>
    <?php include("footer.php") ?>
    </body>
    </html>