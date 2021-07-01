<?php
set_time_limit(0);
/*$pagina = @$_REQUEST["pagina"];
$registros = 13;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $registros;
}*/


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
      var url2='<?php echo $GLOBALS['raiz'] ?>mvc/vista/terapeuta/informe_copago/reporteexcel2.php?from=<?php echo trim($_REQUEST['from']); ?>&to=<?php echo trim($_REQUEST['to']); ?>';


//alert (url2);

             window.open(url2, "nuevo", "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=400, height=400");
        }
</script>

<?php

// filtro de fecha
date_default_timezone_set('America/Bogota');
$fecha_hoy=date('Y-m-d');
$where=" where 1=1 and copago <>0 ";
//$where2=" where 1=1 ";

 $where2.="  where 1=1  and id_eps=19 and copago=0 ";

 $eps = trim($_REQUEST['eps']);
 $id_usuario_b = trim($_REQUEST['id_usuario']);


 if ($eps!=0) {
    $where.=" and  id_eps=$eps ";
   // $where2.=" and  id_eps=$eps ";

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
                       <th valign='center'>ATENCION</th>
                     
				   
                       <th valign='center'>CITA CON</th>     
                       <th valign='center'>COPAGO</th>
                       <th valign='center'>DESCUENTO</th>
                    
                       <th valign='center'>VALOR FACTURA</th>
                       <th valign='center'>FACTURADA POR</th>
                    
                      </tr></tbody>";

$datos="";


$total_f=0;
$total_co=0;
$total_de=0;

$total_f4=0;
$total_co4=0;
$total_de4=0;
$total_fac=0;

       $sql_cc="SELECT * FROM factura $where order by id_factura asc";
        $resultados3 = $conexion->EjecutarQuery($sql_cc);

    $resultados="SELECT * FROM factura $where order by id_factura asc";
        $resultados = $conexion->EjecutarQuery($resultados);
        $total_registros = mysql_num_rows($resultados);

     



       
            
        
$total_co4=0;

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
                         $id_medico=$row2['id_medico'];

						  $id_facturador=$row2['facturado_por'];

                          $fecha_factura = $row2['fecha'];
                         //$date = date_create($fecha_factura);
                      //   $fecha_factura_2=date_format($fecha_factura, 'Y-m-d');
                         $fecha_factura_2=date("Y-m-d", strtotime($fecha_factura));

                         //$fecha_factura_2 = $row2['fecha_de_factura'];

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
                                                
                                                if($id_doc!=""){
                                                $sql23 = "Select * from usuario where id_usuario = '" . $id_doc . "' ";
                                                $result23 = $conexion->EjecutarQuery($sql23);
                                                $row23 = mysql_fetch_array($result23);
                                                $nombre_usuario = $row23['nombre']." ".$row23['apellido'];
                                                }else{
                                                    $sql23 = "Select * from usuario where id_usuario = '" . $id_medico . "' ";
                                                    $result23 = $conexion->EjecutarQuery($sql23);
                                                    $row23 = mysql_fetch_array($result23);
                                                    $nombre_usuario = $row23['nombre']." ".$row23['apellido'];
													$nombre_usuario3 = $row2['nombre2']." ".$row2['apellido2'];
                                                }
					//pendiente numero autorizacion
                                                  $sql233 = "Select * from usuario where id_usuario = '" . $id_nulo . "' ";
                                                $result233 = $conexion->EjecutarQuery($sql233);
                                                $row233 = mysql_fetch_array($result233);
                                                $nombre_usuario3 = $row233['nombre']." ".$row233['apellido'];

					//traer cups
                                                //sumar facturas fsctura  cups factura proc_close
                                           //DISTINCT id_cup,nombre_cup,cantidad,tarifa,valor_t,cantidad 
					
						$sql_fac = "Select *  from factura_cup where   cantidad<>0 and id_factura = ".$id_factura." and fecha='".$fecha_factura_2."'";
                                            //	$sql_fac = "Select * from factura_cup where  id_factura = " .$id_factura;
						$result_fac = $conexion->EjecutarQuery($sql_fac);


                                                //___while de los cups
                                               /*  while ($row_fac = mysql_fetch_array($result_fac)) {
                                                         // $id_factura = $row_fac['id_factura'];

                                                         $grupo_cups = $row_fac['id_cup'];
                                                         $valor_cup = $row_fac['valor_t'];
                                                         $autorizacion = $row_fac['autorizacion'];
                                                          $auto2=$row_fac['autorizacion_2'];
                                                 //traer  nombre del cup
                                                    $sql_nn = "Select * from cups where cups = " .$grupo_cups;
                                                    $result_nn = $conexion->EjecutarQuery($sql_nn);
                                                    $row_nn = mysql_fetch_array($result_nn);
                                                    $nombre_cup=$row_fac['nombre_cup'];*/

                                                    if($t_estado==0){
                                                        $dato_nulo = "NULO";
                                                        $valor_cup=0;
                                                    }

                                                    if($t_estado==3){
                                                        $dato_nulo = "NULO";
                                                        $valor_cup=0;
                                                    }
                                                //impresion de la tabla
												
												
						$sql233 = "Select * from usuario where id_usuario = '" . $id_facturador . "' ";
                                                $result233 = $conexion->EjecutarQuery($sql233);
                                                $row233 = mysql_fetch_array($result233);
                                                $nombre_usuario3 = $row233['nombre']." ".$row233['apellido'];
                                               
                                                    
                                                        $fecha_cc=date("Y-m-d",strtotime($fecha_3));

                                                       
                                                          $tabla .='<tr>

                                                            <td>' . $fecha_3 . '</td>
                                                            <td>' . $id_factura . '</td>
                                                            <td>' . $nombre_eps . '</td>
                                                            <td>' . $regimen_nombre . '</td>
                                                            <td>' . $nombre1." ".$nombre2." " .$apellido1." ".$apellido2.  '</td>
                                                            <td>' . $id_pacie . '</td>
                                                            <td>' . $edad . '</td>
                                                            <td>' . $fecha_cc . '</td>
                                                          									 
                                                            <td align="center">' . $nombre_usuario . '</td>
                                                             <td align="right">' . $dato_nulo.$copago . '</td>
                                                            <td align="right">' . $dato_nulo.$descuento . '</td>
                                                            
                                                            <td><div align="right">  ' . $valor_neto_pagar . '</div></td>
															 <td>' . $nombre_usuario3 . '</td>
                                                        

                                                        </tr>';
                                                        

                                                     //    <td>' . $grupo_cups. '</td>
                                                     //       <td>' . $nombre_cup . '</td>$total_f=$total_f+$valor_cup;<td><div align="right">  ' . $valor_cup . '</div></td>
                                                    //

                                             //   }



                                                  $total_co4=$total_co4+$copago;
                                                  $total_de=$total_de+$descuento;
				                 $total_fg=$total_fg+$valor_neto_pagar;
                }


if($paso_con!=1){

     if($tipo_in==1){
         $tabla="";
     }



        $sql5 = "select SUM(copago) as total_reg from factura  $where and estado=1 and copago<>0 and id_eps<>19 ";
        $result215 = $conexion->EjecutarQuery($sql5);
        $row215 = mysql_fetch_array($result215);
        $total_co = $row215['total_reg'];


        $sql55 = "select SUM(valor_total) as total_reg_2 from factura  $where2 and estado=1 and id_eps=19 and copago=0";
        $result2155 = $conexion->EjecutarQuery($sql55);
        $row2155 = mysql_fetch_array($result2155);
        $total_fac = $row2155['total_reg_2'];
  
     echo "<br><br><center><h2>INFORME DE COPAGOS ".$per." ".$mg."  </h2></center><br><br>";

    echo $dat.$tabla."<tr><td colspan='9' align='right'>TOTAL COPAGO</td><td align='right'>".$total_co4."</td><td align='right'>&nbsp;</td><td align='right'>".$total_fg."</td></tr>
                      <tr><td colspan='11' align='right'>TOTAL PARTICULAR</td><td align='right'>".$total_fac."</td></tr>
     

<table><br><br></div></div>";
}else{
    echo  "<br><br><h2>Seleccione una fecha</h2><br><br>";
}

  /*  if ($total_registros) {

        echo "<center>";

        if (($pagina - 1) > 0) {
            echo "<a href='?option=mostrar_informe_c&pagina=" . ($pagina - 1) . "&$term_link'>< Anterior</a> ";
        }

        for ($i = 1; $i <= $total_paginas; $i++) {
            if ($pagina == $i)
                echo "<b>" . $pagina . "</b> ";
            else
                echo "<a href='?option=mostrar_informe_c&pagina=$i&$term_link'>$i</a> ";
        }

        if (($pagina + 1) <= $total_paginas) {
            echo " <a href='?option=mostrar_informe_c&pagina=" . ($pagina + 1) . "&$term_link'>Siguiente ></a>";
        }

        echo "</center>";
    }*/
// include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/informe/test.php');

?>



<br><br>
<A href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/terapeuta/informe_copago/reporteexcel2.php?id_usuario=<?php echo trim($_REQUEST['id_usuario']); ?>&eps=<?php echo trim($_REQUEST['eps']); ?>&cedula_usuario=<?php echo trim($_REQUEST['cedula_usuario']); ?>&from=<?php echo trim($_REQUEST['from']); ?>&to=<?php echo trim($_REQUEST['to']); ?>">Haz clic para descargar el reporte</A>

<br><br>
<!--<label onclick="abrirVentana();"> nnjjjj</label>
