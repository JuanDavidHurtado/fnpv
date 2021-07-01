<?php
set_time_limit(0);
/*$pagina = @$_REQUEST["pagina"];
$registros = 15;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $registros;
}
*/

?>
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


<br><br>
<A href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/terapeuta/informe_r/reporteexcel_citas.php?id_regimen=<?php echo trim($_REQUEST['id_regimen']); ?>&eps=<?php echo trim($_REQUEST['eps']); ?>&cedula_usuario=<?php echo trim($_REQUEST['cedula_usuario']); ?>&from=<?php echo trim($_REQUEST['from']); ?>&to=<?php echo trim($_REQUEST['to']); ?>">Haz clic para descargar el reporte</A>

<br>

<?php

// filtro de fecha
date_default_timezone_set('America/Bogota');
$fecha_hoy=date('Y-m-d');
$where=" where 1=1 ";

$cedula = trim($_REQUEST['cedula_usuario']);



  if ($cedula != '') {

      $sql_pas = "Select * from paciente where identificacion = '" . $cedula . "' ";
        $result_pas = $conexion->EjecutarQuery($sql_pas);
        $row_pas = mysql_fetch_array($result_pas);
        $pas = $row_pas['historia'];

    $where.=" and id_paciente=$pas ";
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



  $term_link="cedula_usuario=$cedula&eps=$eps&id_regime=$regimen&id_tipo=$tipo_in&from=$from&to=$to"; // filtros

        $dat= "<div id='imprimir_informe'><div id='content_result' align='center'>
        <table  border='0' cellpadding='0' cellspacing='0' class='data'>
     
                        
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


                     

                      </tr></tbody>";

$datos="";
//traer los datdos de la factura
     // $sql2 = "Select * from  where MONTH(fecha)='mysql_datetime'";
       $sql2 = "Select * from factura $where and estado = 1 order by fecha asc";
    echo    $result2 = $conexion->EjecutarQuery($sql2);

        $resultados="SELECT * FROM factura $where and estado = 1 order by id_factura asc";
        $resultados = $conexion->EjecutarQuery($resultados);
        $total_registros = mysql_num_rows($resultados);
       /* $sql_search = "SELECT * FROM factura $where  and estado = 1 order by id_factura asc LIMIT $inicio, $registros";
        $resultados = $conexion->EjecutarQuery($sql_search);
        $total_paginas = ceil($total_registros / $registros);*/
        
$total_f=0;

		 while ($row2 = mysql_fetch_array($result2)) {
		

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
                        
                         $result35 = $conexion->EjecutarQuery($sql2);
                         $row_cita = mysql_fetch_array($result35);
                         $fecha_cita= $row_cita['fecha'];
                         $fecha = $row_cita['fecha'];
                         $hora_in= $row_cita['fecha_hora_inicio'];
                         $fecha_des = $row_cita['fecha_des'];
                         $fecha_hoy = $row_cita['fecha_hoy'];

					//traer datos de eps
                                   
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
                                                $sexo = $row_pac['sexo'];
                                                $telefono = $row_pac['telefono'];
						//traer tipo id
                                     
                                                  $depto = $row_pac['depto'];
                                                  $municipio = $row_pac['municipio'];

                                                 $tipo_id= $row_pac['tipo_id'];
						//traer tipo id
                                                 $sql_id = "Select * from tipo_identificacion where id_tipo_identificacion = '" . $tipo_id . "' ";
                                                $result_id = $conexion->EjecutarQuery($sql_id);
                                                $row_id = mysql_fetch_array($result_id);
                                                   $tipo_identificacion= $row_id['id'];


                                                $identificacion= $row_pac['identificacion'];
					//traer datos de cita
                                        $sql_eps = "Select * from eps where id_eps = '" . $id_eps . "' ";
					$result_eps = $conexion->EjecutarQuery($sql_eps);
					$row_eps = mysql_fetch_array($result_eps);
					$nit = $row_eps['nit'];
					$nombre_eps = $row_eps['nombre'];
					$id_regimen=$row_eps['id_regimen'];
					

                                        $total_f=$total_f+1;
                                


                                              $sql_fac = "Select * from factura_cup where id_factura = " . $id_factura." and  cantidad<>0 and fecha='".$fecha_factura_2."' ";
                                              $result_fac = $conexion->EjecutarQuery($sql_fac);


                                                //___while de los cups
                                                 while ($row_fac = mysql_fetch_array($result_fac)) {
                                                         // $id_factura = $row_fac['id_factura'];

                                                         $id_cup = $row_fac['id_cup'];
                                                         $nombre_cup=$row_fac['nombre_cup'];

                                                          $sql5 = "select COUNT(id_factura) as total_reg from factura_cup where id_factura=".$id_factura." and nombre_cup  LIKE  '%ULTRASONOGRAFIA%' ";
                                                            $result215 = $conexion->EjecutarQuery($sql5);
                                                            $row215 = mysql_fetch_array($result215);
                                                            $total_registros_ac = $row215['total_reg'];

                                                            $sql53 = "select COUNT(id_factura) as total_reg from factura_cup where id_factura=".$id_factura." and nombre_cup  LIKE  '%ecografia%' ";
                                                            $result2153 = $conexion->EjecutarQuery($sql53);
                                                            $row2153 = mysql_fetch_array($result2153);
                                                            $total_registros_ac3 = $row2153['total_reg'];

                                                        /*  $sql_nn = "Select * from factura_cup where id_factura = " . $id_factura." and nombre_cup  LIKE  '%ULTRASONOGRAFIA%'";
                                                          $result_nn = $conexion->EjecutarQuery($sql_nn);
                                                          $row_nn = mysql_fetch_array($result_nn);
                                                          $nombre_cup_2=$row_nn['nombre_cup'];
                                                          $id_cup_coma=$row_nn['id_cup'];

                                                          $sql_nn = "Select * from factura_cup where id_factura = " . $id_factura." and nombre_cup  LIKE '%ecografia%'";
                                                          $result_nn = $conexion->EjecutarQuery($sql_nn);
                                                          $row_nn = mysql_fetch_array($result_nn);
                                                          $nombre_cup_2=$row_nn['nombre_cup'];
                                                          $id_cup_coma=$row_nn['id_cup'];*/


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
                                                                <td align="right">' . $total_f . '</td>
                                                                <td align="center">' . $id_cita . '</td>
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
                                                            

                                  }
                }


if($paso_con!=1){
                echo "<br><br><center><h2>INFORME RIDEC ".$per." ".$mg."  </h2></center><br><br>";

                echo $dat.$tabla."</table><br><br></div></div>";
}else{
    echo  "<br><br><h2>Seleccione una fecha</h2><br><br>";
}

 /* if ($total_registros) {

        echo "<center>";

        if (($pagina - 1) > 0) {
            echo "<a href='?option=mostrar_informe_r&pagina=" . ($pagina - 1) . "&$term_link'>< Anterior</a> ";
        }

        for ($i = 1; $i <= $total_paginas; $i++) {
            if ($pagina == $i)
                echo "<b>" . $pagina . "</b> ";
            else
                echo "<a href='?option=mostrar_informe_r&pagina=$i&$term_link'>$i</a> ";
        }

        if (($pagina + 1) <= $total_paginas) {
            echo " <a href='?option=mostrar_informe_r&pagina=" . ($pagina + 1) . "&$term_link'>Siguiente ></a>";
        }

        echo "</center>";
    }*/
?>


<br><br>

