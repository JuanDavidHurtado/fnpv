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


/* 
 $cedula = trim($_REQUEST['cedula_usuario']);
 $eps = trim($_REQUEST['eps']);
 $regimen = trim($_REQUEST['id_regimen']);*/


$from = trim($_REQUEST['from']);
 $to = trim($_REQUEST['to']);
 $eps = trim($_REQUEST['eps']);
 $id_usuario_b = trim($_REQUEST['id_usuario']);

 $where=" where 1=1 and copago <>0  ";
$where2=" where 1=1 ";

if ($eps!=0) {
    $where.=" and  id_eps=$eps ";
    $where2.=" and  id_eps=$eps ";

    if($eps==19){
        $where="";
        $where.=" where 1=1  and id_eps=19 and copago=0";
        $where2="";
       $where2.="  where 1=1  and id_eps=19 and copago=0 ";

    }
 }

  if ($id_usuario_b !=0) {
    $where.=" and  facturado_por=$id_usuario_b ";
     $where2.=" and  facturado_por=$id_usuario_b ";
 }

 $from = trim($_REQUEST['from']);
 $to = trim($_REQUEST['to']);

if ($from != '' && $to != '') {
    $where.=" and  date(fecha) between '$from' and '$to' ";
     $where2.=" and  date(fecha) between '$from' and '$to' ";
    $per="Desde ".$from." hasta ".$to;
} else if ($from != '' && $to == '') {
    $where.= " and  date(fecha)='$from' ";
    $where2.= " and  date(fecha)='$from' ";
    $per="del dia ".$from;
} else if ($from == '' && $to != '') {
    $where.= " and  date(fecha)='$to' ";
     $where2.= " and  date(fecha)='$to' ";
    $per="del dia".$to;
}else if($from == '' && $to == '') {
    $paso_con=1;
}

 $sql2 = "Select * from factura  $where order by id_factura asc";
$result3=mysql_query($sql2,$IdConexion);
//$result3 = $conexion->EjecutarQuery($sql2);

?>

<center> INFORME DE FACTURACION <?php echo $per." ".$mg ; ?>   </center>

<table  border='1' cellpadding='0' cellspacing='0' class='data'>

                     <tr>
                        <th valign='center'>FECHA</th>
                        <th valign='center'>FACTURA</th>
                        <th valign='center'>ENTIDAD</th>
                        <th valign='center'>REGIMEN</th>
                       <th valign='center'>PACIENTE</th>
                       <th valign='center'>INDENTIFICACION</th>
                       <th valign='center'>EDAD</th>                   
                       <th valign='center'>ATENCION</th>
                      
                       <th valign='center'>CITA CON</th>
                         <th valign='center'>COPAGO</th>
                        <th valign='center'>DESCUENTO</th>                      
                  <th valign='center'>VALOR FACTURA</th>
                   <th valign='center'>FACTURADA POR</th>
                        
		

                      </tr>
<?php

   $total_f=0;
$total_co=0;
$total_de=0;

$total_f4=0;
$total_co4=0;
$total_de4=0;
 $total_fac=0;
 
$tabla="";
while($row2 = mysql_fetch_array($result3)) {

             $id_factura = $row2['id_factura'];
			 $id_pacie = $row2['id_usuario'];
			 $autorizacion = "00";
			  $fecha_3 = $row2['fecha'];
			 $id_eps = $row2['id_eps'];
			 $id_cita= $row2['id_cita'];
			 $copago = $row2['copago'];
			  $tipo = $row2['id_tipo'];
			 $descuento = $row2['descuento'];
			 $valor_neto_pagar = $row2['valor_total'];
                         $id_regimen=$row2['id_regimen'];
			 $valor_consulta = $row2['valor_consulta'];; /////
			  $valor_cuota = 0; ////

                         $fecha_factura = $row2['fecha'];
                         $date = date_create($fecha_factura);
                         $fecha_factura_2=date_format($date, 'Y-m-d');


                          $motivos=$row2['motivos'];
                          $auto2=$row2['autorizacion_2'];
			  $id_nulo=$row2['id_anulador'];
                          $id_medico=$row2['id_medico'];
						  
						    $id_facturador=$row2['facturado_por'];
			  
			   $fecha_cc=date("Y-m-d",strtotime($fecha_3));

				$t_estado = $row2['estado']; 			  
			    $dato_nulo="";
				
				if($tipo==1){
				$tipo_z="Particular";
				}
				else{
				$tipo_z="Normal";
				
				}
				
								
				if($t_estado==0){
				    $dato_nulo = "NULO";
				}else if($t_estado==3){
				    $dato_nulo = "NULO";
				}
				
								

				//traer datos de eps
                                    $sql_eps = "Select * from eps where id_eps = '" . $id_eps . "' ";
					//$result_eps = $conexion->EjecutarQuery($sql_eps);
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

					$sql_pac = "Select * from paciente where identificacion= '" . $id_pacie . "' ";
						//$result_pac = $conexion->EjecutarQuery($sql_pac);
                                                $result_pac=mysql_query($sql_pac,$IdConexion);

						$row_pac = mysql_fetch_array($result_pac);

						$fecha_n= $row_pac['fecha_n'];
						$edad = Utils::edad($fecha_n);
                                                //$edad=12;
					        $tipo_id= $row_pac['tipo_id'];
                                                 $nombre1 = $row_pac['nombre1'];
                                                $nombre2 = $row_pac['nombre2'];
                                                $apellido1 = $row_pac['apellido1'];
                                                $apellido2 = $row_pac['apellido2'];
						//traer tipo id
					         $sql_id = "Select * from tipo_identificacion where id_tipo_identificacion = '" . $tipo_id . "' ";
						//$result_id = $conexion->EjecutarQuery($sql_id);
						$result_id=mysql_query($sql_id,$IdConexion);

                                                $row_id = mysql_fetch_array($result_id);

                                                $tipo_identificacion= $row_id['identificacion'];
					//traer datos de cita

					        $sql_cita = "Select * from cita where id_cita	 = '" . $id_cita . "' ";
						//$result_cita = $conexion->EjecutarQuery($sql_cita);
                                                $result_cita=mysql_query($sql_cita,$IdConexion);
						$row_cita = mysql_fetch_array($result_cita);

						$fecha_cita= $row_cita['fecha'];
                                                $hora_in= $row_cita['fecha_hora_inicio'];
                                                //datos del medico
                                                $id_doc= $row_cita['id_usuario'];

                                                //datos del medico
                                                if($id_doc!=""){
                                                $sql23 = "Select * from usuario where id_usuario = '" . $id_doc . "' ";
                                                //$result23 =mysql_fetch_array($sql23);
                                                $result23=mysql_query($sql23,$IdConexion);
                                                $row23 = mysql_fetch_array($result23);
                                                $nombre_usuario = $row23['nombre']." ".$row23['apellido'];
                                                }else{
                                                    $sql23 = "Select * from usuario where id_usuario = '" . $id_medico . "' ";
                                                    //$result23 =mysql_fetch_array($sql23);
                                                    $result23=mysql_query($sql23,$IdConexion);
                                                    $row23 = mysql_fetch_array($result23);
                                                    $nombre_usuario = $row23['nombre']." ".$row23['apellido'];
                                                }


                                                  $sql233 = "Select * from usuario where id_usuario = '" . $id_facturador . "' ";
                                                //$result233 = $conexion->EjecutarQuery($sql233);
                                                $result233=mysql_query($sql233,$IdConexion);
                                                $row233 = mysql_fetch_array($result233);
                                                $nombre_usuario3 = $row233['nombre']." ".$row233['apellido'];
												
												
											

					 $total_fac=$total_fac+$valor_neto_pagar;

					//traer cups

						$sql_fac = "select * from factura_cup where id_factura = " .$id_factura." and  cantidad<>0 and fecha='".$fecha_cc."'";

                                                $result_fac=mysql_query($sql_fac,$IdConexion);

                                                //___while de los cups
                                               /*  while ($row_fac = mysql_fetch_array($result_fac)) {
                                                         // $id_factura = $row_fac['id_factura'];

                                                         $grupo_cups = $row_fac['id_cup'];
                                                         $valor_cup = $row_fac['valor_t'];
                                                 //traer  nombre del cup
                                                    $sql_nn = "Select * from cups where cups = " .$grupo_cups;
                                                   // $result_nn = $conexion->EjecutarQuery($sql_nn);
                                                     $result_nn=mysql_query($sql_nn,$IdConexion);
                                                    $row_nn = mysql_fetch_array($result_nn);
                                                    $nombre_cup=$row_fac['nombre_cup'];*/

                                                //impresion de la tabla

                                                   if($t_estado==0){
                                                        $dato_nulo = "NULO";
                                                        $valor_cup=0;
                                                    }else if($t_estado==3){
                                                        $dato_nulo = "NULO";
                                                        $valor_cup=0;
                                                    }


                                                        $fecha_cc=date("Y-m-d",strtotime($fecha_3));

                                                          $tabla='<tr>

                                                            <td>' . $fecha_3 . '</td>
                                                            <td>' . $id_factura . '</td>
                                                            <td>' . $nombre_eps . '</td>
                                                            <td>' . $regimen_nombre . '</td>
                                                            <td>' . $nombre1." ".$nombre2." " .$apellido1." ".$apellido2.  '</td>
                                                            <td>' . $id_pacie . '</td>
                                                            <td>' . $edad . '</td>
                                                            <td>' . $fecha_cc . '</td>
                                                    
                                                            <td>' . $nombre_usuario . '</td>
                                                            <td>' . $dato_nulo.$copago . '</td>
                                                            <td>' . $dato_nulo.$descuento . '</td>
                                                          
                                                            <td><div align="right">  ' . $valor_neto_pagar . '</div></td>
															 <td>' . $nombre_usuario3 . '</td>
                                                     
                                                        </tr>';

                                                        echo $tabla;
                                                        $tabla="";

                                                       $total_f=$total_f+$valor_cup;
                                                      

                                               // }

                                                       $total_co4=$total_co4+$copago;
                                                       $total_de=$total_de+$descuento;
													   $total_fg=$total_fg+$valor_neto_pagar;





}


$sql55 = "select SUM(valor_total) as total_reg_2 from factura  $where2 and estado=1 and id_eps=19 and copago=0";
       // $result2155 = $conexion->EjecutarQuery($sql55);
        $result2155=mysql_query($sql55,$IdConexion);
        $row2155 = mysql_fetch_array($result2155);
        $total_fac = $row2155['total_reg_2'];

echo "<tr><td colspan='9' align='right'>TOTAL COPAGO</td><td align='right'>".$total_co4."</td><td align='right'>&nbsp;</td><td align='right'>".$total_fg."</td></tr>
                      <tr><td colspan='11' align='right'>TOTAL PARTICULAR</td><td align='right'>".$total_fac."</td></tr>";

//echo $tabla.$f;

mysql_free_result($result3);
mysql_close($IdConexion);  //Cierras la Conexión

?>
</table>
</body>
</html>
