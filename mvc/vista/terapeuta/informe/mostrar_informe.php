<?php
set_time_limit(0);


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

<?php

// filtro de fecha
date_default_timezone_set('America/Bogota');
$fecha_hoy=date('Y-m-d');
$where=" where 1=1 ";

  $cedula = trim($_REQUEST['cedula_usuario']);
  $sede = trim($_REQUEST['sede']);
 $eps = trim($_REQUEST['eps']);
 $regimen = trim($_REQUEST['id_regimen']);
  $tipo_in = trim($_REQUEST['id_tipo']);
  $id_contrato = trim($_REQUEST['id_contrato']);
  



  if ($cedula != '') {
    $where.=" and id_usuario=$cedula ";
}

 if ($id_contrato !=0) {
    $where.=" and  id_contrato=$id_contrato ";
 }


 if ($eps !=0) {
    $where.=" and  id_eps=$eps ";
 }

  $regimen = trim($_REQUEST['id_regimen']);
  if ($regimen !=0) {
    $where.=" and  id_regimen=$regimen ";
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


 $tipo_car = trim($_REQUEST['id_tipo']);


 //$tipo_car = 0;

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
						<th valign='center'>CONTRATO</th>
                        <th valign='center'>REGIMEN</th>
                       <th valign='center'>PACIENTE</th>
                       <th valign='center'>IDENTIFICACION</th>
                       <th valign='center'>EDAD</th>
                       <th valign='center'>ATENCION</th>
                       <th valign='center'>CUP</th>
					  
                       <th valign='center'>NOMBRE</th>  
				   
                       <th valign='center'>CITA CON</th>     
                       <th valign='center'>COPAGO</th>
                       <th valign='center'>DESCUENTO</th>
                       <th valign='center'>VALOR CUP</th>
                       <th valign='center'>VALOR FACTURA</th>
                       <th valign='center'>TIPO</th>
                        <th valign='center'>AUTORIZACION </th>
                        <th valign='center'>AUTORIZACION EXTRA</th>
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



        $contador = 0;

        //suma del total

$total_f4=0;
$total_co4=0;
$total_de4=0;
 $total_fac=0;
         while ($row22 = mysql_fetch_array($resultados3)) {
			 $id_factura4 = $row22['id_factura'];
                         $copago4 = $row22['copago'];
			 $descuento4 = $row22['descuento'];
                         $t_estado = $row22['estado'];
                        
                         $valor_neto_pagar = $row22['valor_total'];


                         $fecha_factura = $row22['fecha'];
                         $date = date_create($fecha_factura);
                         $fecha_factura_2=date_format($date, 'Y-m-d');

                           $total_fac=$total_fac+$valor_neto_pagar;



                  $sql_fac4 = "select * from factura_cup where id_factura = " .$id_factura4." and cantidad<>0 and fecha='".$fecha_factura_2."'  ";
                    $result_fac4 = $conexion->EjecutarQuery($sql_fac4);

                     while ($row_fac4 = mysql_fetch_array($result_fac4)) {

                         $valor_cup4 = $row_fac4['valor_t'];
                         
                           if($t_estado==0){
                                $valor_cup4=0;
                             } else if($t_estado==3){
                                $valor_cup4=0;
                             }

                                 $paso_cup=0;


                                                     if ($row_fac4['id_cup']==895100){     // paso para el informe de ridec
                                                        $paso_cup=1;
                                                     }else if ($row_fac4['id_cup']==895004){
                                                         $paso_cup=1;
                                                     }else if ($row_fac4['id_cup']==881202){
                                                         $paso_cup=1;
                                                     }else if ($row_fac4['id_cup']==895001){
                                                         $paso_cup=1;
                                                     }else if ($row_fac4['id_cup']==894102){
                                                         $paso_cup=1;
                                                     }else if ($row_fac4['id_cup']==890328){
                                                         $paso_cup=1;
                                                     }else if ($row_fac4['id_cup']==890228){
                                                         $paso_cup=1;
                                                     }



                                                        if(($paso_cup==1)&&($tipo_car==2)){
                                                                    $total_f4=$total_f4+$valor_cup4;
                                                                    // $total_co4=$total_co4+$copago4;
                                                                    
                                                        }  else if(($paso_cup==0)&&($tipo_car==3)){ // sin cardiologia
                                                              $total_f4=$total_f4+$valor_cup4;
                                                               //$total_co4=$total_co4+$copago4;
                                                                 // $total_de4=$total_de4+$descuento4;
                                                        }else if ($tipo_car==0) { // sin cardiologia
                                                              $total_f4=$total_f4+$valor_cup4;
                                                            
                                                              // $total_de4=$total_de4+$descuento4;
                                                        }

                     }
                       $total_co4=$total_co4+$copago4;
                         $total_de4=$total_de4+$descuento4;

                        $descuento4=0;
                       $copago4=0;
         }
        //
            
        
$total_f=0;
$total_co=0;
$total_de=0;
$total_x=0;



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
						  $id_contrato = $row2['id_contrato'];
                          $id_regimen=$row2['id_regimen'];
                       
                          $motivos=$row2['motivos'];
                          $fecha_factura = $row2['fecha'];
                         
			  $id_nulo=$row2['id_anulador'];
                         $id_medico=$row2['id_medico'];
                          $fecha_factura_2 = $row2['fecha_de_factura'];

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
                                                }
					//pendiente numero autorizacion
                                                  $sql233 = "Select * from usuario where id_usuario = '" . $id_nulo . "' ";
                                                $result233 = $conexion->EjecutarQuery($sql233);
                                                $row233 = mysql_fetch_array($result233);
                                                $nombre_usuario3 = $row233['nombre']." ".$row233['apellido'];

					//traer cups
                                                //sumar facturas
                                           //DISTINCT id_cup,nombre_cup,cantidad,tarifa,valor_t,cantidad 
					
						//$sql_fac = "Select * from factura_cup where id_factura = " .$id_factura;
                                               $sql_fac = "Select * from factura_cup where id_factura = " . $id_factura."  and  fecha='".$fecha_factura_2."' ";
                                            //	$sql_fac = "Select * from factura_cup where  id_factura = " .$id_factura;
						$result_fac = $conexion->EjecutarQuery($sql_fac);


                                                //___while de los cups
                                                 while ($row_fac = mysql_fetch_array($result_fac)) {
                                                         // $id_factura = $row_fac['id_factura'];


                                                      $paso_cup=0;
                                                      
                                                         $grupo_cups = $row_fac['id_cup'];
                                                         $valor_cup = $row_fac['valor_t'];
                                                         $autorizacion = $row_fac['autorizacion'];
                                                          $auto2=$row_fac['autorizacion_2'];
                                                 //traer  nombre del cup


                                                     if ($row_fac['id_cup']==895100){     // paso para el informe de ridec
                                                     // $where3=" and ( id_cup=895100 ||  id_cup= || id_cup= || id_cup= ||  id_cup= ||  id_cup= ||  id_cup=) ";
                                                        $paso_cup=1;
                                                     }else if ($row_fac['id_cup']==895004){
                                                         $paso_cup=1;
                                                     }else if ($row_fac['id_cup']==881202){
                                                         $paso_cup=1;
                                                     }else if ($row_fac['id_cup']==895001){
                                                         $paso_cup=1;
                                                     }else if ($row_fac['id_cup']==894102){
                                                         $paso_cup=1;
                                                     }else if ($row_fac['id_cup']==890328){
                                                         $paso_cup=1;
                                                     }else if ($row_fac['id_cup']==890228){
                                                         $paso_cup=1;
                                                     }
                                             
                                                    if($t_estado==0){
                                                        $dato_nulo = "NULO";
                                                        $valor_cup=0;
                                                    }

                                                    if($t_estado==3){
                                                        $dato_nulo = "NULO";
                                                        $valor_cup=0;
                                                    }
                                                //impresion de la tabla
                                               
                                                    
                                                        $fecha_cc=date("Y-m-d",strtotime($fecha_3));

                                                        $nombre_cup=$row_fac['nombre_cup'];


                                                      if(($paso_cup==1)&&($tipo_car==2)){ // iemprimir solo cardiologia

                                                                        $señal="entro al cardio";
                                                           $tabla .='<tr>

                                                            <td>' . $fecha_3 . '</td>
                                                            <td>' . $id_factura . '</td>
															<td>' . $nombre_eps . '</td>
															<td>' . $id_contrato . '</td>
                                                            <td>' . $regimen_nombre . '</td>
                                                            <td>' . $nombre1." ".$nombre2." " .$apellido1." ".$apellido2.  '</td>
                                                            <td>' . $id_pacie . '</td>
                                                            <td>' . $edad . '</td>
                                                            <td>' . $fecha_cc . '</td>
                                                            <td>' . $grupo_cups. '</td>
                                                            <td>' . $nombre_cup . '</td>
                                                            <td>' . $nombre_usuario . '</td>
                                                             <td>' . $dato_nulo.$copago . '</td>
                                                            <td>' . $dato_nulo.$descuento . '</td>
                                                            <td><div align="right">  ' . $valor_cup . '</div></td>
                                                            <td><div align="right">  ' . $valor_neto_pagar . '</div></td>
                                                            <td>' . $tipo_z . '</td>

                                                            <td>' . $autorizacion. '</td>
                                                            <td>' . $auto2. '</td>
                                                            <td>' . $motivos. ' </td>
                                                            <td>' . $nombre_usuario3 . '</td>

                                                        </tr>';


                                                    
                                                       $total_f=$total_f+$valor_cup;
                                                       
                                                         
                                                      } else if(($paso_cup==0)&&($tipo_car==3)){ // sin cardiologia


                                                              $tabla .='<tr>

                                                            <td>' . $fecha_3 . '</td>
                                                            <td>' . $id_factura . '</td>
															<td>' . $nombre_eps . '</td>
															<td>' . $id_contrato . '</td>
                                                            <td>' . $regimen_nombre . '</td>
                                                            <td>' . $nombre1." ".$nombre2." " .$apellido1." ".$apellido2.  '</td>
                                                            <td>' . $id_pacie . '</td>
                                                            <td>' . $edad . '</td>
                                                            <td>' . $fecha_cc . '</td>
                                                            <td>' . $grupo_cups. '</td>
                                                            <td>' . $nombre_cup . '</td>
                                                            <td>' . $nombre_usuario . '</td>
                                                             <td>' . $dato_nulo.$copago . '</td>
                                                            <td>' . $dato_nulo.$descuento . '</td>
                                                            <td><div align="right">  ' . $valor_cup . '</div></td>
                                                            <td><div align="right">  ' . $valor_neto_pagar . '</div></td>
                                                            <td>' . $tipo_z . '</td>

                                                            <td>' . $autorizacion. '</td>
                                                            <td>' . $auto2. '</td>
                                                            <td>' . $motivos. ' </td>
                                                            <td>' . $nombre_usuario3 . '</td>

                                                        </tr>';
                                                                        $señal="entro al ridec";

                                                   
                                                       $total_f=$total_f+$valor_cup;
                                                          


                                                      }else if(($tipo_car==0)){


                                                                  $tabla .='<tr>

                                                            <td>' . $fecha_3 . '</td>
                                                            <td>' . $id_factura . '</td>
															<td>' . $nombre_eps . '</td>
                                                            <td>' . $id_contrato . '</td>
                                                            <td>' . $regimen_nombre . '</td>
                                                            <td>' . $nombre1." ".$nombre2." " .$apellido1." ".$apellido2.  '</td>
                                                            <td>' . $id_pacie . '</td>
                                                            <td>' . $edad . '</td>
                                                            <td>' . $fecha_cc . '</td>
                                                            <td>' . $grupo_cups. '</td>
                                                            <td>' . $nombre_cup . '</td>
                                                            <td>' . $nombre_usuario . '</td>
                                                             <td>' . $dato_nulo.$copago . '</td>
                                                            <td>' . $dato_nulo.$descuento . '</td>
                                                            <td><div align="right">  ' . $valor_cup . '</div></td>
                                                            <td><div align="right">  ' . $valor_neto_pagar . '</div></td>
                                                            <td>' . $tipo_z . '</td>

                                                            <td>' . $autorizacion. '</td>
                                                            <td>' . $auto2. '</td>
                                                            <td>' . $motivos. ' </td>
                                                            <td>' . $nombre_usuario3 . '</td>

                                                        </tr>';
                                                                        $señal="entro al ridec";

                                                       
                                                       $total_f=$total_f+$valor_cup;
                                                         

                                                      }

                                                     //  $paso_cup=0;
                                                }
                                                    
                                             
                                              $total_x=$total_x+$valor_neto_pagar;

                                              $total_co=$total_co+$copago;
                                              $total_de=$total_de+$descuento;

                                                     
                }


                                    $total_f1=$total_f-$total_co;

                 // echo $señal."aaaaaaaaaaaaa";


if($paso_con!=1){

     if($tipo_in==1){
         $tabla="";
     }
                echo "<br><br><center><h2>INFORME DE FACTURACION ".$per." ".$mg."  </h2></center><br><br>";

    echo $dat.$tabla."<tr><td colspan='11' align='right'>TOTAL/PAGINA</td><td align='right'>".$total_co."</td><td align='right'>".$total_de."</td><td align='right'>".$total_f."</td><td align='right'>".$total_f1."</td></tr>
    

<table><br><br></div></div>";
}else{
    echo  "<br><br><h2>Seleccione una fecha</h2><br><br>";
}

  /*  if ($total_registros) {

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
    }*/
// include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/informe/test.php');

?>



<br><br>
<A href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/terapeuta/informe/reporteexcel2.php?id_regimen=<?php echo trim($_REQUEST['id_regimen']); ?>&eps=<?php echo trim($_REQUEST['eps']); ?>&cedula_usuario=<?php echo trim($_REQUEST['cedula_usuario']); ?>&from=<?php echo trim($_REQUEST['from']); ?>&to=<?php echo trim($_REQUEST['to']); ?> &id_tipo=<?php echo trim($_REQUEST['id_tipo']); ?>">Haz clic para descargar el reporte</A>

<br><br>
<!--<label onclick="abrirVentana();"> nnjjjj</label>
