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



  $cedula = trim($_REQUEST['cedula_usuario']);



  if ($cedula != '') {

      $sql_pas = "Select * from paciente where identificacion = '" . $cedula . "' ";
       // $result_pas = $conexion->EjecutarQuery($sql_pas);
        $result_pas=mysql_query($sql_pas,$IdConexion);
        $row_pas = mysql_fetch_array($result_pas);
        $pas = $row_pas['historia'];

    $where.=" and id_paciente=$pas ";
}

 
 /* if ($cedula != '') {
    $where.=" and id_usuario=$cedula ";
}*/

 if ($eps !=0) {
    $where.=" and  id_eps=$eps ";
 }

 if ($regimen !=0) {
    $where.=" and  id_regimen=$regimen ";
 }

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

$sql2 = "Select * from cita where 1=1 $where order by fecha asc";
$result3=mysql_query($sql2,$IdConexion);
//$result3 = $conexion->EjecutarQuery($sql2);

?>

<center> INFORME DE CITAS <?php echo $per." ".$mg ; ?>   </center>

<table  border='1' cellpadding='0' cellspacing='0' class='data'>

                     <tr>

                        <th valign='center'>IDENTIFICACIÓN</th>
                        <th valign='center'>PACIENTE</th>
                        <th valign='center'>SEXO</th>
                        <th valign='center'>EDAD</th>
                        <th valign='center'>TELEFONO</th>

                        <th valign='center'>FECHA SOLICITUD</th>
                        <th valign='center'>FECHA ASIGNADA</th>
                        <th valign='center'>FECHA DESEADA</th>

                        <th valign='center'>ENTIDAD</th>
                        <th valign='center'>CODIGO</th>

                      </tr>
<?php

 
$tabla="";
while($row2 = mysql_fetch_array($result3)) {

                       
			 $id_pacie = $row2['id_paciente'];
		
			

                         $fecha_cita= $row2['fecha'];
                          $fecha = $row2['fecha'];
                         $hora_in= $row2['fecha_hora_inicio'];
                         $id_doc= $row2['id_usuario'];
                         $fecha_des = $row2['fecha_des'];
                         $fecha_hoy = $row2['fecha_hoy'];

                        
			  
			 
				
								

				//traer datos de eps
                                   

					      $sql_pac = "Select * from paciente where historia= '" . $id_pacie . "' ";
						//$result_pac = $conexion->EjecutarQuery($sql_pac);
                                                $result_pac=mysql_query($sql_pac,$IdConexion);

						$row_pac = mysql_fetch_array($result_pac);

						$fecha_n= $row_pac['fecha_n'];
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


                                                          $tabla='<tr>


                                                                    <td align="center">' . $identificacion . '</td>
                                                                    <td aalign="left">' . $nombre1." ".$nombre2." " .$apellido1." ".$apellido2.  '</td>
                                                                    <td align="center">' . $sexo . '</td>
                                                                    <td align="center">' . $edad . '</td>
                                                                    <td align="center">' . $telefono . '</td>
                                                                    <td align="right">' . $fecha_hoy . '</td>
                                                                    <td align="right">' . $fecha . '</td>

                                                                    <td align="right">' . $fecha_des . '</td>
                                                                    <td align="center">' . $nombre_eps . '</td>
                                                                    <td align="right">' . $nit . '</td>
                                                        </tr>';

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
