<?php
@$mes_lis = '';

$pagina = @$_REQUEST["pagina"];
$registros = 12;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $registros;
}


if (isset($_REQUEST['delete'])) {



    $id_anulador=$_REQUEST['id_anulador'];

    $mmmotivo=$_REQUEST['motivo'];
     $from = trim($_REQUEST['from']);
     $to = trim($_REQUEST['to']);

    $where =" where 1=1 and estado=0 and date(fecha) between '$from' and '$to' ";

   if ($mmmotivo==16598){

         $sql_cc="SELECT * FROM factura $where order by id_factura asc";
          $resultados3 = $conexion->EjecutarQuery($sql_cc);

         while ($row22 = mysql_fetch_array($resultados3)) {
             
              $id_factura4 = $row22['id_factura'];


                $sql = 'update  factura set id_anulador='.$id_anulador.',  motivos="Factura finalizada por erdida de consecutivo", valor_total=0, valor_consulta=0,subtotal=0,copago=0, descuento=0, comision=0, estado=3 where id_factura = ' . $id_factura4;
                 $conexion->EjecutarQuery($sql);

                 $sql2 = 'update  factura_cup set tarifa=0,valor_t=0, cantidad=0 where id_factura = ' . $id_factura4;
                $conexion->EjecutarQuery($sql2);

         }
      }else{


    $sql = 'update  factura set id_anulador='.$id_anulador.',  motivos="'.$mmmotivo.'", valor_total=0, valor_consulta=0,subtotal=0,copago=0, descuento=0, comision=0, estado=3 where id_factura = ' . $_REQUEST['acc'];
    $conexion->EjecutarQuery($sql);

    $sql2 = 'update  factura_cup set tarifa=0,valor_t=0, cantidad=0 where id_factura = ' . $_REQUEST['acc'];
    $conexion->EjecutarQuery($sql2);
     }

    $mes_lis = "(Registro Anulado)";
    $mes_lis = '<div class="msg ui-state-error ui-corner-all" style="padding: 0 .7em;">
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
		Registro Anulado!</div>
            </p>' ;
}




$estado_factura = trim($_REQUEST['estado_factura']);
if($estado_factura==1){
    $est=" and estado=1 ";
    $esta_fac=" FACTURADAS";
}
else if($estado_factura==0){
    $est=" and estado=0 ";
     $esta_fac=" PENDIENTES POR FACTURAR";
}else if($estado_factura==4){
    $est=" ";
     $esta_fac="FACTURADAS Y PENDIENTES";
}else if($estado_factura==3){
    $est=" and estado=3 ";
     $esta_fac="ANULADAS";
}
?>

<script>
    var id_delete = '';
    function eliminar(id) {
        id_delete = id;

        if(id!=0){
             $("#dialog-eliminar").dialog('open');
        }else{
             $("#dialog_eliminar_2").dialog('open');
        }
    }

    $(function() {

        $("#dialog-eliminar").dialog({
            resizable: false,
            modal: true,
            autoOpen: false,
            show: "blind",
            hide: "explode",
            width: 350,
            height: 200,
            close: function() {

            },
            buttons: {
                Aceptar: function() {

                     var id_anulador = <?php echo $vtt=$_SESSION["id_usuario"]; ?>;
                     var motivo = $("#motivo").val();
                    if (motivo!=""){
                    window.location.replace("?option=facturas_hoy&delete&acc="+ id_delete+"&motivo="+motivo+"&id_anulador="+id_anulador);
                    }else{
                        alert("Debe registrar motivo de anulación");
                    }
                },
                Cancelar: function() {
                    $(this).dialog("close");
                }
            }
        });


 $("#dialog_eliminar_2").dialog({
            resizable: false,
            modal: true,
            autoOpen: false,
            show: "blind",
            hide: "explode",
            width: 350,
            height: 200,
            close: function() {

            },
            buttons: {
                Aceptar: function() {

                     var id_anulador = <?php echo $vtt=$_SESSION["id_usuario"]; ?>;
                     var motivo = $("#motivo").val();

                     var from=document.getElementById('from').value;
                     var to=document.getElementById('to').value;

                     motivo=16598;

                     //alert(from+"//"+to);

                    if (motivo!=""){
                         window.location.replace("?option=facturas_hoy&delete&acc="+ id_delete+"&motivo="+motivo+"&id_anulador="+id_anulador+"&from="+from+"&to="+to);
                    }else{
                        alert("Debe registrar motivo de anulación");
                    }
                },
                Cancelar: function() {
                    $(this).dialog("close");
                }
            }
        });

    });


</script>
<style>


  #content_welcome2{
       font-size: 15px;
        height: 700px;
        width: 900px;
    }

        
</style>



<div id="content_welcome2"  class="ui-tabs ui-widget ui-widget-content ui-corner-all">
<br />
     <div class="content_welcome2" align="center">
           LISTADO DE CITAS   <?php echo $esta_fac; ?>  <?php echo @$msg; ?>
        </div>
<?php
// para buscarrrrr ______
//$where = " where id_usuario='".$_REQUEST['identificacion']."'";
// facturas del dia



date_default_timezone_set('America/Bogota');
$fecha_hoy=date('Y-m-d');
$where=" where 1=1  $est ";

$num_factura= trim($_REQUEST['num_factura']);
if($num_factura!=""){
    $where .=" and id_factura=$num_factura";
}else{

 $from = trim($_REQUEST['from']);
 $to = trim($_REQUEST['to']);

if ($from != '' && $to != '') {
    $where.=" and  date(fecha) between '$from' and '$to' ";
} else if ($from != '' && $to == '') {
    $where.= " and  date(fecha)='$from' ";
} else if ($from == '' && $to != '') {
    $where.= " and  date(fecha)='$to' ";
}else if($from == '' && $to == '') {
    $where .= " and date(fecha)='".$fecha_hoy."'";
}

}


?>
    <form action="?option=listar_facturas_hoy&search" method="post">

    <?php
    if (@$_REQUEST['term'] != '') {
        ?>
            <a href="?option=listar_facturas">Cancelar</a>
        <?php
    }
    ?>
    </form>
    <br>
        <?php echo @$mes_lis; ?>

        <?php

       /* $num_estado= trim($_REQUEST['estado_factura']);
        if($num_estado!==3){
             $where .=" and estado=3 ";
        }*/

        if ($estado_factura !=0){

        $term_link="from=".$from."&to=".$to."&estado_factura=".$estado_factura;
       $cade="SELECT * FROM factura $where";
        $resultados = $conexion->EjecutarQuery($cade);
        
        $total_registros = mysql_num_rows($resultados);
       $sql_search = "SELECT * FROM factura $where  ORDER BY id_factura desc LIMIT $inicio, $registros";
        $resultados = $conexion->EjecutarQuery($sql_search);
        $total_paginas = ceil($total_registros / $registros);

        echo "<div id='content_result'>";
        echo "<table  border='0' cellpadding='0' align='center' cellspacing='0' class='data'>";
        echo "<tbody><tr class='t_head'>
                        <td valign='center'>Fecha</td>
                        <td valign='center'>Factura</td>
                        <td valign='center'>Paciente</td>
                        <td valign='center' width='50px'>Eps</td>
                        
                            <th valign='center'>Estado</th>
                        <td width='25px'>Mostrar</th>
			<td>Anular</th>
                      </tr></tbody>";
        $contador = 0;
        if ($total_registros) {

            $bool_style = true;
                    while ($row = mysql_fetch_array($resultados)) {

                        if ($bool_style) {
                            $style_file_table = "row1";
                        } else {
                            $style_file_table = "row2";
                        }
                        $bool_style = !$bool_style;

                                $sql_eps = "Select * from eps where id_eps = '" . $row['id_eps'] . "' ";
                                $result_eps = $conexion->EjecutarQuery($sql_eps);
                                $row_eps = mysql_fetch_array($result_eps);
                                $nit = $row_eps['nit'];
                                $nombre_eps = $row_eps['nombre'];

                        //".$row['id_factura']."


                                            $estado_factura_2 = $row['estado'];

                                    if($estado_factura_2==1){
                                        $est=" and estado=1 ";
                                        $esta_fac_d="T";
                                    }
                                    else if($estado_factura_2==0){
                                        $est=" and estado=0 ";
                                         $esta_fac_d="P";
                                    }else if($estado_factura_2==3){
                                         $esta_fac_d="A";
                                    }


                        echo "<tr class='$style_file_table'>
                                        <td align='right'>" . $row['fecha'] . "</td>
                                        <td align='right'>" . $row['id_factura'] . "</td>
                                            <td align='right'>" . $row['id_usuario'] . "</td>
                                        <td align='right'>" . $nombre_eps . "</td>
                                        <td align='right'>" . $esta_fac_d . "</td>
                                         <td align='center' ><a href='?option=mostrar_factura&idfactura=".$row['id_factura']."&origen=2'>Ver</a></td>
                                         <td align='center'><a href='#' onclick='eliminar(".$row['id_factura'] .")'><img src='" . Utils::$http_ruta . "mvc/vista/imagenes/icon_delete.png' width='18px' height='18px' /></a></td>

                                </tr>";

  // <td align='center'><a href='#' onclick='eliminar(".$row['id_factura'] .")'><img src='" . Utils::$http_ruta . "mvc/vista/imagenes/icon_delete.png' width='18px' height='18px' /></a></td>

                    }




              }       else {
                                 echo "<font color='darkgray'>(sin resultados)</font>";
                 }



        } else { // if estado de pendientes



            //and estado= 'FINALIZADO' and
            
            $where= " where 1=1 and facturado=0 ";

            if ($from != '' && $to != '') {
                $where.=" and  date(fecha) between '$from' and '$to' ";
            } else if ($from != '' && $to == '') {
                $where.= " and  date(fecha)='$from' ";
            } else if ($from == '' && $to != '') {
                $where.= " and  date(fecha)='$to' ";
            }else if($from == '' && $to == '') {
                $where .= " and date(fecha)='".$fecha_hoy."'";
            }

        $resultados = $conexion->EjecutarQuery("SELECT * FROM cita $where");
        $total_registros = mysql_num_rows($resultados);
        $sql_search = "SELECT * FROM cita $where  ORDER BY fecha desc LIMIT $inicio, $registros";
        $resultados = $conexion->EjecutarQuery($sql_search);
        $total_paginas = ceil($total_registros / $registros);


        echo "<table  border='0' cellpadding='0' cellspacing='0' class='data' align='center'>";
        echo "<tbody><tr class='t_head'>
                        <th valign='center'>Fecha</th>
                        <th valign='center'>Identificacion</th>
                        <th valign='center'>Numero cita</th>
                        <th valign='center'>Eps</th>
                        <th valign='center'>Estado</th>

                        <th width='50px'>Facturar</th>

                      </tr></tbody>";
        $contador = 0;
        if ($total_registros) {
            $bool_style = true;
            while ($row = mysql_fetch_array($resultados)) {

                if ($bool_style) {
                    $style_file_table = "row1";
                } else {
                    $style_file_table = "row2";
                }
                $bool_style = !$bool_style;


//".$row['id_factura']."
                 $estado_factura_2 = $row['estado'];
                //".$row['id_factura']."
          /*      if($estado_factura_2==1){
                    $est=" and estado=1 ";
                    $esta_fac_d="T";
                }
                else if($estado_factura_2==0){
                    $est=" and estado=0 ";
                     $esta_fac_d="P";
                }else if($estado_factura_2==3){
                     $esta_fac_d="A";
                }
*/

                       $sql_eps = "Select * from eps where id_eps = '" . $row['id_eps'] . "' ";
                                $result_eps = $conexion->EjecutarQuery($sql_eps);
                                $row_eps = mysql_fetch_array($result_eps);
                                $nit = $row_eps['nit'];
                                $nombre_eps = $row_eps['nombre'];

                    $sql_pac = "Select * from paciente where historia	 = '" . $row['id_paciente'] . "' ";
                    $result_pac = $conexion->EjecutarQuery($sql_pac);
                    $row_pac = mysql_fetch_array($result_pac);
                    $id_historia_p_ced = $row_pac['identificacion'];
                    $id_eps = $row_pac['id_eps'];
                    
                            $sql_eps = "Select * from eps where id_eps = '" . $id_eps . "' ";
                                $result_eps = $conexion->EjecutarQuery($sql_eps);
                                $row_eps = mysql_fetch_array($result_eps);
                                $nit = $row_eps['nit'];
                                $nombre_eps = $row_eps['nombre'];

                        echo "<tr class='$style_file_table'>
                                <td align='right'>" . $row['fecha'] . "</td>
                                <td align='right'>" . $id_historia_p_ced . "</td>
                                <td align='right'>C-" . $row['id_cita'] . "</td>
                                <td align='right'>" . $nombre_eps . "</td>
                                <td align='right'>" . $estado_factura_2 . "</td>
                                 <td align='center'><a href='?option=buscar_usuario&identificacion=".$id_historia_p_ced."&origen=11&origen33=".$origen33."&id_factura=".$row['id_cita']."&id_cita=".$row['id_cita']."'><img src='" . Utils::$http_ruta . "mvc/vista/imagenes/icon_edit.png' width='18px' height='18px' /></a></td>
				

                        </tr>";



            }
        }
        }
        echo "</table>";
        echo "</div>



<BR />";
        ?><?php
    //mysql_free_result($resultados);




    if ($total_registros) {

        echo "<center>";

        if (($pagina - 1) > 0) {
            echo "<a href='?option=facturas_hoy&pagina=" . ($pagina - 1) . "&$term_link'>< Anterior</a> ";
        }

        for ($i = 1; $i <= $total_paginas; $i++) {
            if ($pagina == $i)
                echo "<b>" . $pagina . "</b> ";
            else
                echo "<a href='?option=facturas_hoy&pagina=$i&$term_link'>$i</a> ";
        }

        if (($pagina + 1) <= $total_paginas) {
            echo " <a href='?option=facturas_hoy&pagina=" . ($pagina + 1) . "&$term_link'>Siguiente ></a>";
        }

        echo "</center>";
    }


    echo "<br><br>";

   echo " <center><a href='#' onclick='eliminar(0)'>Anular todas las facturas</a></center>";
    ?>

    <br />
<a href='#' onClick='imprSelec("content_welcome2")' >Imprimir</a>


<input type="hidden" name="from" class=" " id="from"  value="<?php echo $_REQUEST['from']; ?>">

    <input type="hidden" name="to" class=" " id="to"  value="<?php echo $_REQUEST['to']; ?>">


</div>

<div id="dialog-eliminar" title="Anular factura">


    <p>

      Registre el motivo por el cual desea anular la factura
      <input type="text" name="motivo" class=" " id="motivo"  value="">

    </p>


</div>

<div id="dialog_eliminar_2" title="Anular factura">

    <p>
      ¿ Realmente desea anular todas las facturas ?
    </p>

</div>