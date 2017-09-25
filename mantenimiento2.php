<?php

error_reporting(E_ALL);
require ('conexion.php');
//datos del cliente

$idclient=$_POST['idclient'];
$nomclient=$_POST['nomclient'];
$codigopostal=$_POST['codigopostal'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$cell=$_POST['cell'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$pais=$_POST['pais'];
$comentario=$_POST['comentario'];
$fax=$_POST['fax'];
$estado=$_POST['estado'];

//#datos del equipo
$equipo=$_POST['equipo'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$nserie=$_POST['nserie'];
$accesorio=$_POST['accesorio'];
$descripcion=$_POST['descripcion'];
$empleado=$_POST['empleado'];

//datos del reporte
$fecha_usu=$_POST['fecha_usu'];
$costo=$_POST['costo'];
$pagado=$_POST['pagado'];


if ($pagado==2) {
    $saldo=$costo-$abono=$_POST['abono'];
    
}
else {
    $saldo=0;   
    $abono=0; 
}


echo "<br>";

$sql=mysqli_query($conexion,"SELECT * FROM clientes where idclient='$idclient'");
$pinchecliente=mysqli_fetch_array($sql);
$otrocliente=$pinchecliente[0];


$emple=mysqli_query($conexion,"SELECT idemple FROM empleado where nombre='$empleado'");
$pinche=mysqli_fetch_array($emple);
$colaborador=$pinche[0];


 if (mysqli_query($conexion,$sql) and mysqli_query($conexion,$emple)) {

                   
                    $sql="INSERT INTO equipo (equipo,marca,modelo,nserie,accesorio,descripcion,idclient,idemple) VALUES ('$equipo','$marca','$modelo','$nserie','$accesorio','$descripcion','$otrocliente','$colaborador')";
                    

                    $reporte="INSERT INTO reporte (costo,pagado,abono,saldo,fecha_usu,idemple,idclient) VALUES ('$costo','$pagado','$abono','$saldo','$fecha_usu','$colaborador','$otrocliente')";

                    if (mysqli_query($conexion,$sql) and mysqli_query($conexion,$reporte)) {
                        echo "Equipo registrado condicion 1";
                        echo "<br>";
                        
                        }

                        else{

                              echo "Fallo al insertar los datos. condicion 1<br>#. Error: ".mysqli_errno($conexion).".<br> Mensaje: ".mysqli_error($conexion);
                        }
                                        
                        }
                                
                else {
                    
                    $sql="INSERT INTO clientes (nomclient,tel,email,direccion,ciudad,estado,codigopostal,fax,cell,pais,comentario) VALUES ('$nomclient','$tel','$email','$direccion','$ciudad','$estado','$codigopostal','$fax','$cell','$pais','$comentario')";
                   
                    if (mysqli_query($conexion,$sql)) {
                        //consultar el ultimo cliente registrado

                        $consulta=mysqli_query($conexion,"SELECT max(idclient) FROM clientes");
                        $ver=mysqli_fetch_array($consulta);
                        $uno=$ver[0]; 
                        
                        $requipo="INSERT INTO equipo (equipo,marca,modelo,nserie,accesorio,descripcion,idemple,idclient) VALUES ('$equipo','$marca','$modelo','$nserie','$accesorio','$descripcion','$colaborador','$uno')";
                        //consultar el ultimo equipo registrado
                        if (mysqli_query($conexion,$requipo)) {
                        $ultimoequipo=mysqli_query($conexion,"SELECT max(idequip) FROM equipo");
                        $verequipo=mysqli_fetch_array($ultimoequipo);
                        $dos=$verequipo[0]; 


                        $reporte="INSERT INTO reporte (costo,pagado,abono,hora,saldo,fecha_usu,idemple,idclient,idequip) VALUES ('$costo','$pagado','$abono','$hora','$saldo','$fecha_usu','$colaborador','$uno','$dos')";
                        }

                         
                     }

                        if (mysqli_query($conexion,$reporte)){

                        echo "Equipo y cliente registrado";
                       /*  $consulta=mysqli_query($conexion,"SELECT * FROM clientes where idclient=$uno");
                        $ver=mysqli_fetch_array($consulta);*/
                        $consulta=mysqli_query($conexion,"SELECT max(idr) FROM reporte");
                        $ver=mysqli_fetch_array($consulta);
                        $consulta=$ver[0]; 

                        echo "<br>";
                        echo "reporte generado";
                        echo "<br>";
                       echo $consulta;
                        echo  "<br>";
                        echo "<form method=\"post\" action=\"reporte.php\">";
                        echo "<input type=\"submit\" value=\"reporte\" class\"btn btn-info\" name=\"reporte\"/>";
                        echo "<input type=\"hidden\" value=\"$consulta\" name=\"uno\"/>";
                        echo "</form>";

                      
                         
                    }
                    else {
                            echo "Fallo al insertar los datos. en la pinche condicion 2<br>#. Error: ".mysqli_errno($conexion).".<br> Mensaje: ".mysqli_error($conexion);
                    }
                } 

        
?>
