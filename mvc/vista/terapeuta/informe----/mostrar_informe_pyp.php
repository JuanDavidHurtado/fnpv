

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
     
                <th valign='center'>EDAD</th>
                <th valign='center'>EPS</th>
                <th valign='center'>DE QUE EMPRESA</th>
                <th valign='center'>REGIMEN</th>
                <th valign='center'>CUP</th>
                <th valign='center'>NOMBRE CUP</th>
                <th valign='center'>CITA</th>
                <th valign='center'>FACTURA</th>
                <th valign='center'>TIPO DE DOCUMENTO</th>
                <th valign='center'>DOCUMENTO</th>
                <th valign='center'>FECHA NAC</th>
                <th valign='center'>PACIENTE</th>
                <th valign='center'>FACTURADO POR</th>
                <th valign='center'>FECHA FACTURA</th>
                <th valign='center'>FIN CONSULTA</th>

                      </tr></tbody>";

$datos="";
//traer los datdos de la factura
     // $sql2 = "Select * from factura where MONTH(fecha)='mysql_datetime'";
       $sql2 = "Select * from factura $where and estado=1 and id_proceso=54";
        $result2 = $conexion->EjecutarQuery($sql2);
        
$total_f=0;

		 while ($row2 = mysql_fetch_array($result2)) {
			 $id_factura = $row2['id_factura'];
			 $id_pacie = $row2['id_usuario'];
			$fecha_fac = $row2['fecha'];
		
			 $id_cita= $row2['id_cita'];
                         $id_facturador= $row2['facturado_por'];
			 $valor_neto_pagar = $row2['valor_total'];
			 $valor_consulta = $row2['valor_consulta'];; /////
			  $valor_cuota = 0; ////


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
                                                $id_eps = $row_pac['id_eps'];
					//traer datos de eps
                                    $sql_eps = "Select * from eps where id_eps = '" . $id_eps . "' ";
					$result_eps = $conexion->EjecutarQuery($sql_eps);
					$row_eps = mysql_fetch_array($result_eps);
					$nit = $row_eps['nit'];
					$nombre_eps = $row_eps['nombre'];
					$id_regimen=$row_eps['id_regimen'];

                                        //traer regimen
                                        $sql_reg = "Select * from regimen where id_regimen = '" . $id_regimen . "' ";
					$result_regimen = $conexion->EjecutarQuery($sql_reg);
					$row_regimen = mysql_fetch_array($result_regimen);
					$regimen = $row_regimen['nombre'];

					
						//traer tipo id
					         $sql_id = "Select * from tipo_identificacion where id_tipo_identificacion = '" . $tipo_id . "' ";
						$result_id = $conexion->EjecutarQuery($sql_id);
						$row_id = mysql_fetch_array($result_id);

                                                $tipo_identificacion= $row_id['id'];
					//traer datos de cita

					$sql_cita = "Select * from cita where id_cita	 = '" . $id_cita . "' ";
						$result_cita = $conexion->EjecutarQuery($sql_cita);
						$row_cita = mysql_fetch_array($result_cita);
                                                $proceso_cita= $row_cita['id_proceso'];
						$fecha_cita= $row_cita['fecha'];

                                        // proceso
                                        $sql_proceso = "Select * from proceso where id_proceso= '" . $proceso_cita . "' ";
						$result_proceso = $conexion->EjecutarQuery($sql_proceso);
						$row_proceso = mysql_fetch_array($result_proceso);
                                                $proceso_cita= $row_proceso['nombre'];
					//pendiente numero autorizacion

					//traer cups
					
						/*$sql_fac = "Select * from factura_cup where id_factura = " .$id_factura;
						$result_fac = $conexion->EjecutarQuery($sql_fac);
                                                
						$row_fac = mysql_fetch_array($result_fac);
						$grupo_cups = $row_fac['id_cup'];*/

                                                  $sql_fac2 = "Select * from factura_cup where id_factura = " .$id_factura;
                                                  $result_fac2 = $conexion->EjecutarQuery($sql_fac2);
                                                  $row_fac3 = mysql_fetch_array($result_fac2);
                                                  $grupo_cups = $row_fac3['id_cup'];
                                                  $nombre_cup=$row_fac3['nombre_cup'];
			

                                                

					        $sql_diagn = "Select * from valoracion_inicial where id_cita	 = '" . $id_cita . "' ";
						$result_diag = $conexion->EjecutarQuery($sql_diagn);
						$row_diag = mysql_fetch_array($result_diag);

						$fecha_cita= $row_diag['fecha'];
						$principal= $row_diag['diagnostico_principal'];
						$diag_1= $row_diag['diagnostico_dx1'];
						$diag_2= $row_diag['diagnostico_dx2'];
						$diag_3= $row_diag['diagnostico_dx3'];
                                                $fecha_cita= $row_diag['fecha'];
                                                $id_doc= $row_diag['id_usuario'];

                                                //datos del medico
                                                $sql23 = "Select * from usuario where id_usuario = '" . $id_facturador . "' ";
                                                $result23 = $conexion->EjecutarQuery($sql23);
                                                $row23 = mysql_fetch_array($result23);
                                                $nombre_usuario = $row23['nombre']." ".$row23['apellido'];

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



$tabla .='<tr>
<td>' . $edad . '</td>
<td>' . $nombre_eps . '</td>
<td>EMPRESA VIENE</td>    
<td>' . $regimen . '</td>
<td>' . $grupo_cups . '</td>
<td>' . $nombre_cup . '</td>
<td>' . $proceso_cita . '</td>
<td>SEP-' . $id_factura . '</td>
<td>' . $tipo_identificacion . '</td>
<td>' . $id_pacie . '</td>
<td>' . $fecha_n . '</td>
<td>' .$apellido1." ".$apellido2." ". $nombre1." ".$nombre2. '</td>
<td>' . $nombre_usuario . '</td>
<td>' . $fecha_fac . '</td>
<td>' . $finalidad . '</td>
</tr>';                                 /*
                                    <th valign='center'>EDAD</th>
             <th valign='center'>EDAD</th>
                <th valign='center'>EPS</th>
                <th valign='center'>DE QUE EMPRESA</th>
                <th valign='center'>REGIMEN</th>
                <th valign='center'>CUP</th>
                <th valign='center'>NOMBRE CUP</th>
                <th valign='center'>CITA</th>
                <th valign='center'>FACTURA</th>
                <th valign='center'>TIPO DE DOCUMENTO</th>
                <th valign='center'>DOCUMENTO</th>
                <th valign='center'>FECHA NAC</th>
                <th valign='center'>PACIENTE</th>
                <th valign='center'>FACTURADO PO</th>
                <th valign='center'>FECHA FACTURA</th>
                <th valign='center'>FIN CONSULTA</th>
                                   */

                }


if($paso_con!=1){
                echo "<br><br><center><h2>INFORME PYP ".$per." ".$mg."  </h2></center><br><br>";

                echo $dat.$tabla."</table><br><br></div></div>";
}else{
    echo  "<br><br><h2>Seleccione una fecha</h2><br><br>";
}


// include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/informe/test.php');

?>




<!--<A href="<php echo $GLOBALS['raiz'] ?>mvc/vista/terapeuta/informe/reporteexcel2.php?from='<php echo trim($_REQUEST['from']); ?>'&to='<php echo trim($_REQUEST['from']); ?>'">Haz clic para descargar el reporte</A>

-->
<A href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/terapeuta/informe/reporteexcel2_pyp.php?from=<?php echo trim($_REQUEST['from']); ?>&to=<?php echo trim($_REQUEST['to']); ?>">Haz clic para descargar el reporte</A>

<br><br>
<!--<label onclick="abrirVentana();"> nnjjjj</label>
-->
<br><br>
<a href='#' onClick='imprSelec2("imprimir_informe")' >Imprimir</a>