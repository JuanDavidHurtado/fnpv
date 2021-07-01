

<script type="text/javascript">

    function imprSelec2(nombre)
            {
                var ficha = document.getElementById(nombre);
                var ventimp = window.open(' ', 'ventana1', 'popimpr');
                var content = '<link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css.css" rel="stylesheet" />' + ficha.innerHTML;

              ventimp.document.write(content);
                ventimp.document.close();
                ventimp.print( );
                history.back();

            }


function abrirVentana() {



      //var url2='<php echo $GLOBALS['raiz'] ?>mvc/vista/terapeuta/informe/reporteexcel2.php?url5=';
      var url2='<?php echo $GLOBALS['raiz'] ?>mvc/vista/terapeuta/informe/reporteexcel2.php?from=<?php echo trim($_REQUEST['from']); ?>&to=<?php echo trim($_REQUEST['to']); ?>';


//alert (url2);

             window.open(url2, "nuevo", "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=400, height=400");
        }
</script>

<?php

// filtro de fecha
date_default_timezone_set('America/Bogota');
$fecha_hoy=date('Y-m-d');
$where=" where 1=1 ";

  $cedula = trim($_REQUEST['cedula_usuario']);

  if ($cedula != '') {
    $where.=" and id_usuario=$cedula ";
}

 $from = trim($_REQUEST['from']);
 $to = trim($_REQUEST['to']);

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


/*  $id_proceso = trim($_REQUEST['id_proceso']);
 
if ($id_proceso != '') {
    $where.=" and id_proceso=$id_proceso ";
     $sql31 = "select * from  proceso where id_proceso=$id_proceso";
                       $result31 = $conexion->EjecutarQuery($sql31);
                       $row31 = mysql_fetch_array($result31);
                       $proceso= $row31['nombre'];
                       $mg= "Area de atencio = ".$proceso;
}*/

//encabezado factura
        $dat= "<div id='imprimir_informe'><div id='content_result' align='center'>
        <table  border='0' cellpadding='0' cellspacing='0' class='data'>
     
                        <th valign='center'>FECHA</th>
                        <th valign='center'>FACTURA</th>
                        <th valign='center'>ENTIDAD</th>
                       <th valign='center'>PACIENTE</th>
                       <th valign='center'>IDENTIFICACION</th>
                       <th valign='center'>ATENCION</th>
                       <th valign='center'>CUP</th>
					  
                       <th valign='center'>NOMBRE</th>  
				   
                       <th valign='center'>CITA CON</th>     
 <th valign='center'>COPAGO</th>	
 <th valign='center'>DESCUENTO</th> 
                       <th valign='center'>VALOR FACTURA</th>
						<th valign='center'>TIPO</th>
                      </tr></tbody>";

$datos="";
//traer los datdos de la factura
     // $sql2 = "Select * from factura where MONTH(fecha)='mysql_datetime'";
       $sql2 = "Select * from factura $where order by id_factura asc";
        $result2 = $conexion->EjecutarQuery($sql2);
        
$total_f=0;
$total_co=0;
$total_de=0;

		 while ($row2 = mysql_fetch_array($result2)) {
			 $id_factura = $row2['id_factura'];
			 $id_pacie = $row2['id_usuario'];
			 $fecha_3 = $row2['fecha'];
			$autorizacion = "00";
			 $id_eps = $row2['id_eps'];
			 $id_cita= $row2['id_cita'];
			 $valor_neto_pagar = $row2['valor_total'];
			 $copago = $row2['copago'];
			 $descuento = $row2['descuento'];
			 $tipo = $row2['id_tipo'];
			 $valor_consulta = $row2['valor_consulta']; /////
			  $valor_cuota = 0; ////
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
				}
				
				
					//traer datos de eps
                                    $sql_eps = "Select * from eps where id_eps = '" . $id_eps . "' ";
					$result_eps = $conexion->EjecutarQuery($sql_eps);
					$row_eps = mysql_fetch_array($result_eps);
					$nit = $row_eps['nit'];
					$nombre_eps = $row_eps['nombre'];
					$id_regimen=$row_eps['id_regimen'];
					//traer datos de paciente
					  $sql_pac = "Select * from paciente where identificacion= '" . $id_pacie . "' ";
						$result_pac = $conexion->EjecutarQuery($sql_pac);
						$row_pac = mysql_fetch_array($result_pac);
						$fecha_n= $row_pac['fecha_n'];
						$edad = Utils::edad($fecha_n);
					        $tipo_id= $row_pac['tipo_id'];
                                                 $nombre1 = $row_pac['nombre1'];
                                                $nombre2 = $row_pac['nombre2'];
                                                $apellido1 = $row_pac['apellido1'];
                                                $apellido2 = $row_pac['apellido2'];
						//traer tipo id
					         $sql_id = "Select * from tipo_identificacion where id_tipo_identificacion = '" . $tipo_id . "' ";
						$result_id = $conexion->EjecutarQuery($sql_id);
						$row_id = mysql_fetch_array($result_id);

                                                $tipo_identificacion= $row_id['identificacion'];
					//traer datos de cita

					 $sql_cita = "Select * from cita where id_cita	 = '" . $id_cita . "' ";
						$result_cita = $conexion->EjecutarQuery($sql_cita);
						$row_cita = mysql_fetch_array($result_cita);

						$fecha_cita= $row_cita['fecha'];
                                                $hora_in= $row_cita['fecha_hora_inicio'];

                                                $id_doc= $row_cita['id_usuario'];

                                                //datos del medico
                                                $sql23 = "Select * from usuario where id_usuario = '" . $id_doc . "' ";
                                                $result23 = $conexion->EjecutarQuery($sql23);
                                                $row23 = mysql_fetch_array($result23);
                                                $nombre_usuario = $row23['nombre']." ".$row23['apellido'];
					//pendiente numero autorizacion

					//traer cups
					
						$sql_fac = "Select * from factura_cup where id_factura = " .$id_factura;
						$result_fac = $conexion->EjecutarQuery($sql_fac);
                                                
						$row_fac = mysql_fetch_array($result_fac);
						$grupo_cups = $row_fac['id_cup'];
                        // $nombre_cup=$row_fac['nombre_cup'];
                       
					   //traer  nombre del cup
					    $sql_nn = "Select * from cups where cups = " .$grupo_cups;
                        $result_nn = $conexion->EjecutarQuery($sql_nn);
                        $row_nn = mysql_fetch_array($result_nn);
                        $nombre_cup=$row_nn['nombre'];     
			

                                                

					        $sql_diagn = "Select * from valoracion_inicial where id_cita	 = '" . $id_cita . "' ";
						$result_diag = $conexion->EjecutarQuery($sql_diagn);
						$row_diag = mysql_fetch_array($result_diag);

						//$fecha_cita= $row_diag['fecha'];
						$principal= $row_diag['diagnostico_principal'];
						$diag_1= $row_diag['diagnostico_dx1'];
						$diag_2= $row_diag['diagnostico_dx2'];
						$diag_3= $row_diag['diagnostico_dx3'];
                                                //$fecha_cita= $row_diag['fecha'];
                                               

                                                  $id_finalidad = $row_diag['fin_consulta']; ////
                                                     $sql_fin = "Select * from fin_consulta where id = '" . $id_finalidad . "' ";
						     $result_fin = $conexion->EjecutarQuery($sql_fin);
						     $row_fin = mysql_fetch_array($result_fin);
                                                     $finalidad= $row_fin['nombre'];

                                                  $id_causa_ext = $row_diag['causa_externa']; ////

                                                     $sql_causa = "Select * from causa_externa where id = '" . $id_causa_ext . "' ";
						     $result_causa = $conexion->EjecutarQuery($sql_causa);
						     $row_causa = mysql_fetch_array($result_causa);
                                                     $causa_ext= $row_causa['nombre'];

						  $id_tipo_diag= $row_diag['tipo_diagnostico'];

                                                  $sql_tipod = "Select * from tipo_diagnostico where id = '" . $id_tipo_diag . "' ";
						     $result_tipo = $conexion->EjecutarQuery($sql_tipod);
						     $row_tipod = mysql_fetch_array($result_tipo);
                                                     $tipo_diag= $row_tipod['nombre'];


				$datos .=$id_factura.",".$nit.",".$tipo_identificacion.",".$id_pacie.",".$fecha_cita.",".$autorizacion.",".$grupo_cups.",".$finalidad.",".$causa_ext.",".$principal.",".$diag_1.",".$diag_3.",".$diag_3.",".$tipo_diag.",".$valor_consulta.",".$valor_cuota.",".$valor_neto_pagar." \r\n";

 $fecha_cc=date("Y-m-d",strtotime($fecha_3));

                                  $tabla .='<tr>

                                    <td>' . $fecha_3 . '</td>
                                    <td>' . $id_factura . '</td>
                                    <td>' . $nombre_eps . '</td>
                                    <td>' . $nombre1." ".$nombre2." " .$apellido1." ".$apellido2.  '</td>
                                    <td>' . $id_pacie . '</td>
                                    <td>' . $fecha_cc . '</td>
                                    <td>' . $grupo_cups. '</td>
                                    <td>' . $nombre_cup . '</td>									 
                                    <td>' . $nombre_usuario . '</td>
									 <td>' . $dato_nulo.$copago . '</td>
									  <td>' . $dato_nulo.$descuento . '</td>
                                    <td><div align="right">  ' . $dato_nulo.$valor_neto_pagar . '</div></td>
									<td>' . $tipo_z . '</td>
                                </tr>';

                               $total_f=$total_f+$valor_neto_pagar;
							    $total_co=$total_co+$copago;
								$total_de=$total_de+$descuento;
                }


if($paso_con!=1){
                echo "<br><br><center><h2>INFORME DE FACTURACION ".$per." ".$mg."  </h2></center><br><br>";

    echo $dat.$tabla."<tr><td colspan='9' align='right'>TOTAL</td><td align='right'>".$total_co."</td><td align='right'>".$total_de."</td><td align='right'>".$total_f."</td></tr><table><br><br></div></div>";
}else{
    echo  "<br><br><h2>Seleccione una fecha</h2><br><br>";
}


// include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/informe/test.php');

?>




<!--<A href="<php echo $GLOBALS['raiz'] ?>mvc/vista/terapeuta/informe/reporteexcel2.php?from='<php echo trim($_REQUEST['from']); ?>'&to='<php echo trim($_REQUEST['from']); ?>'">Haz clic para descargar el reporte</A>

-->
<A href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/terapeuta/informe/reporteexcel2.php?from=<?php echo trim($_REQUEST['from']); ?>&to=<?php echo trim($_REQUEST['to']); ?>">Haz clic para descargar el reporte</A>

<br><br>
<!--<label onclick="abrirVentana();"> nnjjjj</label>
-->
<br><br>
<a href='#' onClick='imprSelec2("imprimir_informe")' >Imprimir</a>