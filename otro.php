
<?php

  
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
                 $idclient=$pinche['idclient'];
                $cliente=mysqli_query($conexion,"SELECT * from clientes where idclient=$idclient");
                $client=mysqli_fetch_array($cliente);

                $idequip=$pinche['idequip'];
                $equiporegistrado=mysqli_query($conexion,"SELECT * from equipo where idequip=$idequip");
                $equipo=mysqli_fetch_array($equiporegistrado);
                echo "

  <!DOCTYPE html>
    <head>
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\" href=\"css/stylepdf.css\" media=\"all\" />
  </head>
  <body>
    <header class=\"clearfix\">
    <div id=\"logo\">
        <img src=\"images/d_w.png\">
      </div>
        <div id=\"company\">
        <h4 class=\"name\">SOPORTE Y VENTA DE COMPUTADORAS</h4>
        <div>(913) 100-1378</div>
        <div>digitalworld@dxcorp.net</div>
        <div>Quintin Arauz 67, Vicente Guerrero, TAB. 86761</div>
        </div>
    </header>
    <main>
      <div id=\"details\" class=\"clearfix\">
        <div id=\"client\">
          <div class=\"to\">Cliente:</div>
          <h2 class=\"name\">".$client['nomclient']."</h2>
          <div class=\"address\">".$client['direccion'].$client['ciudad'].$client['estado'].$client['codigopostal']."</div>
          <div class=\"email\">".$client['email']."</div>
        </div>
        <div id=\"invoice\">
          <h1>REPORTE #".$pinche['idr']."</h1>
          <div class=\"date\">Fecha:".$pinche['fecha_usu']."</div>
          <div class=\"date\">Due Date: 30/06/2014</div>
        </div>
      </div>
      <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
        <thead>
          <tr>
            <th class=\"no\">Equipo</th>
            <th class=\"no\">Marca</th>
            <th class=\"no\">Modelo</th>
            <th class=\"no\">Serie</th>
            <th class=\"no\">Accesorios</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"desc\">".$equipo['equipo']."</td>
            <td class=\"desc\">".$equipo['marca']."</td>
            <td class=\"desc\">".$equipo['modelo']."</td>
            <td class=\"desc\">".$equipo['nserie']."</td>
            <td class=\"desc\">".$equipo['accesorio']."</td>
            
          </tr>
          </tbody>
          <thead>
          <tr>
            <td class=\"no\">Costo</td>
            <td class=\"no\">Pagado</td>
            <td class=\"no\">abono</td>
            <td class=\"no\">Saldo</td>
            <td class=\"no\">$3,200.00</td>
          </tr>
          <thead>
          <tbody>
          <tr>
            <td class=\"desc\">".$pinche['costo']."</td>
            <td class=\"desc\">".$pinche['pagado']."</td>
            <td class=\"desc\">".$pinche['abono']."</td>
            <td class=\"desc\">".$pinche['saldo']."</td>
            <td class=\"desc\">$800.00</td>
          </tr>
        </tbody>
       <thead>
          <tr>
            <th class=\"no\">Observaciones</th>
            <th class=\"no\">Descripcion </th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"desc\">".$equipo['observaciones']."</td>
            <td class=\"desc\">".$equipo['descripcion']."</td>
          </tr>

      </table>
      <div id=\"thanks\">Firma del cliente</div>
      <div id=\"notices\">  
        <div>NOTICE:</div>
        <div class=\"notice\">Despues de 3 meses el equipo sera puesto a disposicion de las autoridades.</div>
         <div class=\"notice\">Toda revision o diagnostico tiene un costo.</div>
         <div class=\"notice\">No nos hacemos responsables por perdida de informacion de su disco duro.</div>
      </div>
    </main>
    </body>
    </html>
    ";
}
?>