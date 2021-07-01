<?php
set_time_limit(0);
$pagina = @$_REQUEST["pagina"];
$registros = 13;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $registros;
}


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
      var url2='<?php echo $GLOBALS['raiz'] ?>mvc/vista/terapeuta/informe/reporteexcel2_nulas.php?from=<?php echo trim($_REQUEST['from']); ?>&to=<?php echo trim($_REQUEST['to']); ?>';


//alert (url2);

             window.open(url2, "nuevo", "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=400, height=400");
        }
</script>

<?php

// filtro de fecha
date_default_timezone_set('America/Bogota');
$fecha_hoy=date('Y-m-d');
$where=" where 1=1 and estado=3 ";

  /*$cedula = trim($_REQUEST['cedula_usuario']);
 $eps = trim($_REQUEST['eps']);
 $regimen = trim($_REQUEST['id_regimen']);
  $tipo_in = trim($_REQUEST['id_tipo']);
*/

/*
  if ($cedula != '') {
    $where.=" and id_usuario=$cedula ";
}

 if ($eps !=0) {
    $where.=" and  id_eps=$eps ";
 }

  $regimen = trim($_REQUEST['id_regimen']);
  if ($regimen !=0) {
    $where.=" and  id_regimen=$regimen ";
 }*/

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
                        <th valign='center'>REGIMEN</th>
                       <th valign='center'>PACIENTE</th>
                       <th valign='center'>IDENTIFICACION</th>
                       <th valign='center'>EDAD</th>                        
                         <th valign='center'>MOTIVO</th>
			<th valign='center'>ANULADA POR</th>
                      </tr></tbody>";

$datos="";
//traer los datdos de la factura
     // $sql2 = "Select * from factura where MONTH(fecha)='mysql_datetime'";
       //$sql2 = "Select * from factura $where order by id_factura asc";
        //$result2 = $conexion->EjecutarQuery($sql2);

                
       $sql_cc="SELECT * FROM factura $where order by id_factura asc";
        $resultados3 = $conexion->EjecutarQuery($sql_cc);

       $resultados="SELECT * FROM factura $where order by id_factura asc";
        $resultados = $conexion->EjecutarQuery($resultados);
        $total_registros = mysql_num_rows($resultados);
        $sql_search = "SELECT * FROM factura $where  order by id_factura asc LIMIT $inicio, $registros";
        $resultados = $conexion->EjecutarQuery($sql_search);
        $total_paginas = ceil($total_registros / $registros);


        $contador = 0;

        //suma del total
/*
         while ($row22 = mysql_fetch_array($resultados3)) {
			 $id_factura4 = $row22['id_factura'];
                         $copago4 = $row22['copago'];
			 $descuento4 = $row22['descuento'];
                         $t_estado = $row22['estado'];

                         $valor_neto_pagar = $row22['valor_total'];

                           $total_fac=$total_fac+$valor_neto_pagar;

                    $sql_fac4 = "select DISTINCT id_cup,nombre_cup,cantidad,tarifa,valor_t,cantidad from factura_cup where id_factura = " .$id_factura4;
                    $result_fac4 = $conexion->EjecutarQuery($sql_fac4);

                     while ($row_fac4 = mysql_fetch_array($result_fac4)) {

                         $valor_cup4 = $row_fac4['valor_t'];
                         
                           if($t_estado==0){
                                $valor_cup4=0;
                             } else if($t_estado==3){
                                $valor_cup4=0;
                             }

                           $total_f4=$total_f4+$valor_cup4;
                        
                     }
                     $total_co4=$total_co4+$copago4;
                     $total_de4=$total_de4+$descuento4;
         }*/
        //
            
        

		 while ($row2 = mysql_fetch_array($resultados)) {
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
                          $id_regimen=$row2['id_regimen'];
                           $motivos=$row2['motivos'];
                            $id_nulo=$row2['id_anulador'];
			  
			 $dato_nulo="";
			  
				if($tipo==1){
				$tipo_z="Particular";
				}
				else{
				$tipo_z="Normal";				
				}
				
				
				if($t_estado==3){
				    $dato_nulo = "NULO";
				}
				
				
					//traer datos de eps
                                    $sql_eps = "Select * from eps where id_eps = '" . $id_eps . "' ";
					$result_eps = $conexion->EjecutarQuery($sql_eps);
					$row_eps = mysql_fetch_array($result_eps);
					$nit = $row_eps['nit'];
					$nombre_eps = $row_eps['nombre'];
					


                                       $sql_r = "Select * from regimen where id_regimen = '" . $id_regimen . "' ";
                                        $result_r = $conexion->EjecutarQuery($sql_r);
                                        $row_r = mysql_fetch_array($result_r);
                                        $regimen_nombre = $row_r['nombre'];
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
                                  
                                                $sql233 = "Select * from usuario where id_usuario = '" . $id_nulo . "' ";
                                                $result233 = $conexion->EjecutarQuery($sql233);
                                                $row233 = mysql_fetch_array($result233);
                                                $nombre_usuario3 = $row233['nombre']." ".$row233['apellido'];
					//pendiente numero autorizacion

					//traer cups
                                                //sumar facturas
                                           //DISTINCT id_cup,nombre_cup,cantidad,tarifa,valor_t,cantidad 
					
					
                                                    
                                                        $fecha_cc=date("Y-m-d",strtotime($fecha_3));

                                                       
                                                          $tabla .='<tr>

                                                            <td>' . $fecha_3 . '</td>
                                                            <td>' . $id_factura . '</td>
                                                            <td>' . $nombre_eps . '</td>
                                                            <td>' . $regimen_nombre . '</td>
                                                            <td>' . $nombre1." ".$nombre2." " .$apellido1." ".$apellido2.  '</td>
                                                            <td>' . $id_pacie . '</td>
                                                            <td>' . $edad . '</td>
                                                     
                                                            <td>' . $motivos. '</td>
                                                            <td>' . $nombre_usuario3 . '</td>
                                                        
                                                        </tr>';
                                                    

                                                

                }


if($paso_con!=1){

     if($tipo_in==1){
         $tabla="";
     }
                echo "<br><br><center><h2>FACTURAS ANULADAS  ".$per." ".$mg."  </h2></center><br><br>";

    echo $dat.$tabla."</table><br><br></div></div>";
}else{
    echo  "<br><br><h2>Seleccione una fecha</h2><br><br>";
}

    if ($total_registros) {

        echo "<center>";

        if (($pagina - 1) > 0) {
            echo "<a href='?option=mostrar_informe&pagina=" . ($pagina - 1) . "&$term_link'>< Anterior</a> ";
        }

        for ($i = 1; $i <= $total_paginas; $i++) {
            if ($pagina == $i)
                echo "<b>" . $pagina . "</b> ";
            else
                echo "<a href='?option=mostrar_informe&pagina=$i&$term_link'>$i</a> ";
        }

        if (($pagina + 1) <= $total_paginas) {
            echo " <a href='?option=mostrar_informe&pagina=" . ($pagina + 1) . "&$term_link'>Siguiente ></a>";
        }

        echo "</center>";
    }
// include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/informe/test.php');

?>



<br><br>
<A href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/terapeuta/informe/reporteexcel2_nulas.php?id_regimen=<?php echo trim($_REQUEST['id_regimen']); ?>&eps=<?php echo trim($_REQUEST['eps']); ?>&cedula_usuario=<?php echo trim($_REQUEST['cedula_usuario']); ?>&from=<?php echo trim($_REQUEST['from']); ?>&to=<?php echo trim($_REQUEST['to']); ?>">Haz clic para descargar el reporte</A>

<br><br>
<!--<label onclick="abrirVentana();"> nnjjjj</label>
