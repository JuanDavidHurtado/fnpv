

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
                        <th valign='center'>FECHA DESEADA</th>
                        <th valign='center'>IDENTIFICACIÓN</th>
                        <th valign='center'>PACIENTE</th>
                  <th valign='center'>ENTIDAD</th>

                     

                      </tr></tbody>";

$datos="";
//traer los datdos de la factura
     // $sql2 = "Select * from factura where MONTH(fecha)='mysql_datetime'";
       $sql2 = "Select * from cita $where order by fecha desc";
        $result2 = $conexion->EjecutarQuery($sql2);
        
$total_f=0;

		 while ($row2 = mysql_fetch_array($result2)) {
		

			 $fecha = $row2['fecha'];
                          $fecha_des = $row2['fecha_des'];
			 $id_pacie= $row2['id_paciente'];

					//traer datos de eps
                                   
					//traer datos de paciente
					  $sql_pac = "Select * from paciente where historia= '" . $id_pacie . "' ";
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
						//traer tipo id
					

                                                $identificacion= $row_pac['identificacion'];
					//traer datos de cita
                                        $sql_eps = "Select * from eps where id_eps = '" . $id_eps . "' ";
					$result_eps = $conexion->EjecutarQuery($sql_eps);
					$row_eps = mysql_fetch_array($result_eps);
					$nit = $row_eps['nit'];
					$nombre_eps = $row_eps['nombre'];
					$id_regimen=$row_eps['id_regimen'];
					


                                  $tabla .='<tr>

                                    <td>' . $fecha . '</td>
                                    <td>' . $fecha_des . '</td>
                                         <td>' . $identificacion . '</td>
                                    <td>' . $nombre1." ".$nombre2." " .$apellido1." ".$apellido2.  '</td>
                                    <td>' . $nombre_eps . '</td>

                                </tr>';

                }


if($paso_con!=1){
                echo "<br><br><center><h2>INFORME CITAS ".$per." ".$mg."  </h2></center><br><br>";

                echo $dat.$tabla."</table><br><br></div></div>";
}else{
    echo  "<br><br><h2>Seleccione una fecha</h2><br><br>";
}


// include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/informe/test.php');

?>




<!--<A href="<php echo $GLOBALS['raiz'] ?>mvc/vista/terapeuta/informe/reporteexcel2.php?from='<php echo trim($_REQUEST['from']); ?>'&to='<php echo trim($_REQUEST['from']); ?>'">Haz clic para descargar el reporte</A>
<A href="<php echo $GLOBALS['raiz'] ?>mvc/vista/terapeuta/informe/reporteexcel2.php?from=<php echo trim($_REQUEST['from']); ?>&to=<php echo trim($_REQUEST['to']); ?>">Haz clic para descargar el reporte</A>

<br><br>
-->

<!--<label onclick="abrirVentana();"> nnjjjj</label>
-->
<br><br>
<a href='#' onClick='imprSelec2("imprimir_informe")' >Imprimir</a>