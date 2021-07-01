<?php
set_time_limit(0);
//Exportar datos de php a Excel
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Reportes.xls");

include ("../../../control/utils.php");

?>
<HTML LANG="es">
<TITLE> Exportacion de Datos </TITLE>
</head>
<body>
<?php


    
$NombreBD = Utils::$database;
$Servidor = Utils::$server;
$Usuario = Utils::$user_name;
$Password =  Utils::$user_name_password;
$IdConexion = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $IdConexion);


 $from = trim($_REQUEST['from']);
 $to = trim($_REQUEST['to']);
 $cedula = trim($_REQUEST['cedula_usuario']);
 $eps = trim($_REQUEST['eps']);


 /* if ($cedula != '') {
    $where.=" and id_usuario=$cedula ";
}*/


if ($from != '' && $to != '') {
    $where.=" and  date(fecha) between '$from' and '$to' ";
    $per="Desde ".$from." hasta ".$to;
} else if ($from != '' && $to == '') {
    $where.= " and  date(fecha)='$from' ";
    $per="del dia ".$from;
} else if ($from == '' && $to != '') {
    $where.= " and  date(fecha)='$to' ";
    $per="del dia".$to;
}else if($from == '' && $to == '') {
    $paso_con=1;
}

$sql2 = "Select * from factura where 1=1 $where order by fecha asc";
$result3=mysql_query($sql2,$IdConexion);
//$result3 = $conexion->EjecutarQuery($sql2);

?>

<center> INFORME DE CITAS <?php echo $per." ".$mg ; ?>   </center>

<table  border='1' cellpadding='0' cellspacing='0' class='data'>

                     <tr>

                          <th valign='center'>TIPO DE REGISTRO</th>
                        <th valign='center'>CONSECUTIVO DE REGISTRO</th>
                        <th valign='center'>TIPO DE ID</th>
                        <th valign='center'>IDENTIFICACION</th>
                        <th valign='center'>FECHA NACIMIENTO</th>
                        <th valign='center'>SEXO</th>
                        <th valign='center'>PRIMER NOMBRE</th>
                        <th valign='center'>SEGUNDO NOMBRE</th>
                         <th valign='center'>PRIMER APELLIDO</th>
                        <th valign='center'>SEGUNDO APELLIDO</th>
                        <th valign='center'>CODIGO EAPB</th>
                        <th valign='center'>ID CITA O PRECEDIMIENTO NO QUIRURGICO</th>
                        <th valign='center'>FECHA SOLICITUD CITA</th>
                        <th valign='center'>FECHA ASIGNACION CITA</th>
                        <th valign='center'>FECHA DESEADA</th>

                      </tr>
<?php

 
$tabla="";

 $contador=0;

while($row2 = mysql_fetch_array($result3)) {

                       
			 $id_pacie = $row2['id_paciente'];
		
			
                         $fecha = $row2['fecha'];
                         $fecha_des = $row2['fecha_des'];
                         $fecha_hoy = $row2['fecha_hoy'];
			 $id_pacie= $row2['id_usuario'];
                         $id_cita= $row2['id_cita'];
                         $id_factura = $row2['id_factura'];
                         $fecha_factura = $row2['fecha'];

                         $date = date_create($fecha_factura);
                        $fecha_factura_2=date_format($date, 'Y-m-d');

                        
			  
			 $sql2 = "Select * from cita where id_cita=".$id_cita;
                         $result35=mysql_query($sql2,$IdConexion);
                         $row_cita = mysql_fetch_array($result35);
                         $fecha_cita= $row_cita['fecha'];
                         $fecha = $row_cita['fecha'];
                         $hora_in= $row_cita['fecha_hora_inicio'];                     
                         $fecha_des = $row_cita['fecha_des'];
                         $fecha_hoy = $row_cita['fecha_hoy'];
								

				//traer datos de eps
                                   

					      $sql_pac = "Select * from paciente where identificacion= '" . $id_pacie . "' ";
						//$result_pac = $conexion->EjecutarQuery($sql_pac);
                                                $result_pac=mysql_query($sql_pac,$IdConexion);

						$row_pac = mysql_fetch_array($result_pac);

						$fecha_n= $row_pac['fecha_n'];
                                        

                                              //  $fecha_n=str_ireplace("-", " ", $fecha_n);

                                               //  $fecha_n=date_format($fecha_n, 'Y/m/d');
                                                
						$edad = Utils::edad($fecha_n);
                                                //$edad=12;
					        $tipo_id= $row_pac['tipo_id'];
                                                $identificacion= $row_pac['identificacion'];
                                                $nombre1 = $row_pac['nombre1'];
                                                $nombre2 = $row_pac['nombre2'];
                                                $apellido1 = $row_pac['apellido1'];
                                                $apellido2 = $row_pac['apellido2'];
                                                $sexo = $row_pac['sexo'];
                                                $telefono = $row_pac['telefono'];
                                                 $id_eps = $row_pac['id_eps'];



						//traer tipo id
					         $sql_id = "Select * from tipo_identificacion where id_tipo_identificacion = '" . $tipo_id . "' ";
						//$result_id = $conexion->EjecutarQuery($sql_id);
						$result_id=mysql_query($sql_id,$IdConexion);
                                                $row_id = mysql_fetch_array($result_id);
                                                $tipo_identificacion= $row_id['identificacion'];

                                                 $sql_eps = "Select * from eps where id_eps = '" . $id_eps . "' ";
                                                   $result_eps=mysql_query($sql_eps,$IdConexion);

                                                    $row_eps = mysql_fetch_array($result_eps);
                                                    $nit = $row_eps['nit'];
                                                    $nombre_eps = $row_eps['nombre'];

                                                    //traer datos de paciente
                                                    $sql_r = "Select * from regimen where id_regimen = '" . $id_regimen . "' ";
                                                  //  $result_r = $conexion->EjecutarQuery($sql_r);
                                                     $result_r=mysql_query($sql_r,$IdConexion);
                                                    $row_r = mysql_fetch_array($result_r);
                                                    $regimen_nombre = $row_r['nombre'];


                                              $sql_fac = "Select * from factura_cup where id_factura = " . $id_factura." and  cantidad<>0 and fecha='".$fecha_factura_2."' ";                                        
                                              $result_fac=mysql_query($sql_fac,$IdConexion);

                                               $contador=$contador+1;

                                             
                                                //___while de los cups
                                                 while ($row_fac = mysql_fetch_array($result_fac)) {
                                                         // $id_factura = $row_fac['id_factura'];

                                                         $id_cup = $row_fac['id_cup'];
                                                         $nombre_cup=$row_fac['nombre_cup'];


                                                          $sql5 = "select COUNT(id_factura) as total_reg from factura_cup where id_factura=".$id_factura." and nombre_cup  LIKE  '%ULTRASONOGRAFIA%' ";
                                                            //$result215 = $conexion->EjecutarQuery($sql5);
                                                            $result215=mysql_query($sql5,$IdConexion);
                                                            $row215 = mysql_fetch_array($result215);
                                                            $total_registros_ac = $row215['total_reg'];

                                                            $sql53 = "select COUNT(id_factura) as total_reg from factura_cup where id_factura=".$id_factura." and nombre_cup  LIKE  '%ecografia%' ";
                                                            //$result2153 = $conexion->EjecutarQuery($sql53);
                                                             $result2153=mysql_query($sql53,$IdConexion);
                                                            $row2153 = mysql_fetch_array($result2153);
                                                            $total_registros_ac3 = $row2153['total_reg'];
                                                           
                                                            
                                                            $paso=0;

                                                          if($total_registros_ac3==1){
                                                              $paso=1;
                                                          }

                                                          if($total_registros_ac==1){
                                                              $paso=1;
                                                          }


                                                          if($paso==1){
                                                              $tabla .='<tr>
                                                                <td align="center">2</td>
                                                                <td align="right">' . $contador . '</td>
                                                                <td align="center">' . $tipo_identificacion . '</td>
                                                                <td align="center">' . $identificacion . '</td>
                                                                <td align="center">' . $fecha_n . '</td>
                                                                <td align="center">' . $sexo . '</td>
                                                                <td align="center">' . $nombre1. '</td>
                                                                <td align="center">' . $nombre2 . '</td>
                                                                <td align="center">' . $apellido1 . '</td>
                                                                <td align="center">' . $apellido2 . '</td>
                                                                <td align="center">' . $nit . '</td>
                                                                <td align="center">8</td>
                                                                <td align="right">' . $fecha_hoy . '</td>
                                                                <td align="right">' . $fecha . '</td>
                                                                <td align="right">' . $fecha_des . '</td>

                                                            </tr>';

                                                            }

                                                          

                                                             
                                                          //  }
                                                     }

                                        echo $tabla;
                                        $tabla="";

                                                      
                                                      

                                                

                                                    




}

echo "</table>";

//echo $tabla.$f;

mysql_free_result($result3);
mysql_close($IdConexion);  //Cierras la Conexión

?>
</table>
</body>
</html>
