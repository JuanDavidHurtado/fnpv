<?php
$origen_form = $_GET['origen_form'];

@$mes_lis = '';

$pagina    = @$_REQUEST["pagina"];
$registros = 13;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $registros;
}

if (isset($_REQUEST['delete'])) {

    $mmmotivo    = $_REQUEST['motivo'];
    $id_anulador = $_REQUEST['id_anulador'];
    $sql         = 'update  factura set id_anulador=' . $id_anulador . ',  motivos="' . $mmmotivo . '", valor_total=0, valor_consulta=0,subtotal=0,copago=0, descuento=0, comision=0, estado=3 where id_factura = ' . $_REQUEST['acc'];
    $conexion->EjecutarQuery($sql);

    $sql2 = 'update  factura_cup set   tarifa=0 ,valor_t=0,fecha=0 ,cantidad=0 where id_factura = ' . $_REQUEST['acc'];
    $conexion->EjecutarQuery($sql2);

    $mes_lis = "(Registro Anulado)";
    $mes_lis = '<div class="msg ui-state-error ui-corner-all" style="padding: 0 .7em;">
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
        Registro Anulado!.</div>
            </p>';
}

$estado_factura = trim($_REQUEST['estado_factura']);
if ($estado_factura == 1) {
    $est      = " and estado=1 ";
    $esta_fac = " FINALIZADAS";
} else if ($estado_factura == 0) {
    $est      = " and estado=0 ";
    $esta_fac = " PENDIENTES";
} else if ($estado_factura == 4) {
    $esta_fac = "TERMINADAS Y PENDIENTES";
} else if ($estado_factura_3 == 3) {
    $esta_fac = "ANULADAS";
}
?>


<script>
    var id_delete = '';
    function eliminar(id) {
        id_delete = id;
        $("#dialog-eliminar").dialog('open');
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
                   // window.location.replace("?option=listar_factura&delete&acc=" + id_delete);

                    var id_anulador = <?php echo $vtt = $_SESSION["id_usuario"]; ?>;
                    var motivo = $("#motivo").val();
                    if (motivo!=""){
                    window.location.replace("?option=listar_factura&delete&acc="+ id_delete+"&motivo="+motivo+"&id_anulador="+id_anulador);
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
        height: 500px;
        width: 600px;
    }


</style>

<div id="content_welcome2"  class="ui-tabs ui-widget ui-widget-content ui-corner-all">

    <?php
echo "<div id='content_result'>";
?>

     <div class="content_welcome2" align="center">
     |      CONSULTAS Y/O PROCEDIMIENTOS PENDIENTES POR FACTURAR  <?php echo @$msg; ?>
        </div>
<?php
// para buscarrrrr ______

$origen33 = $_REQUEST['origen33'];

if ($origen33 == 1) {
    $ll = 'and estado=1';
} else {
    $ll = 'and estado=0';
}

$fecha_hoy = date('Y-m-d');

$id_pacie = $_REQUEST['identificacion'];
//consultar recibe cedula y buscar por historia
$sql_pac       = "Select * from paciente where identificacion    = '" . $id_pacie . "' ";
$result_pac    = $conexion->EjecutarQuery($sql_pac);
$row_pac       = mysql_fetch_array($result_pac);
$id_historia_p = $row_pac['historia'];

$id_eps = $row_pac['id_eps'];

//nombre eps
$sql_eps    = "Select * from eps where id_eps = '" . $id_eps . "' ";
$result_eps = $conexion->EjecutarQuery($sql_eps);
$row_eps    = mysql_fetch_array($result_eps);
$nit        = $row_eps['nit_3'];
$nombre_eps = $row_eps['nombre'];
//and estado='FINALIZADO'  and date(fecha)='".$fecha_hoy."'

$where = " where id_paciente='" . $id_historia_p . "' and estado= 'PROGRAMADO'";
$term  = str_replace(" ", "%", $_REQUEST['term']);

$term_link = "";
if ($term != '') {
    $term      = '%' . $term . '%';
    $where     = " and (fecha like '$term' ) ";
    $term_link = "term=" . $_REQUEST['term'];
}

?>
    <form action="?option=listar_facturas&search" method="post">
    <!--<input type="hidden" name="id_cita" id="id_cita" value="<?php echo $id_cita; ?>">-->

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
$identificacion  = $_REQUEST['identificacion'];
$term_link       = "identificacion=$identificacion";
$resultados      = $conexion->EjecutarQuery("SELECT * FROM cita $where");
$total_registros = mysql_num_rows($resultados);
$sql_search      = "SELECT * FROM cita $where  ORDER BY fecha desc LIMIT $inicio, $registros";
$resultados      = $conexion->EjecutarQuery($sql_search);
$total_paginas   = ceil($total_registros / $registros);

echo "<table  border='0' cellpadding='0' cellspacing='0' class='data' align='center'>";
echo "<tbody><tr class='t_head'>
                        <th valign='center'>Fecha</th>
                        <th valign='center'>Identificacion</th>
                        <th valign='center'>Profesional</th>
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
        $id_usu = $row['id_usuario'];
        //traer nombre y apellido del profesional
        $sql_usu = "Select * from usuario where id_usuario  = '" . $id_usu . "' ";
        //echo $sql_usu;
        $result_usu = $conexion->EjecutarQuery($sql_usu);
        $row_usu    = mysql_fetch_array($result_usu);
        $nombre     = $row_usu['nombre'];
        $apellido   = $row_usu['apellido'];

        $sql_pac           = "Select * from paciente where historia  = '" . $row['id_paciente'] . "' ";
        $result_pac        = $conexion->EjecutarQuery($sql_pac);
        $row_pac           = mysql_fetch_array($result_pac);
        $id_historia_p_ced = $row_pac['identificacion'];

        echo "<tr class='$style_file_table'>
                                <td align='right'>" . $row['fecha'] . "</td>
                                <td align='right'>" . $id_historia_p_ced . "</td>
                                <td align='right'>" . $nombre . " " . $apellido . "</td>
                                <td align='right'>C-" . $row['id_cita'] . "</td>
                                <td align='right'>" . $nombre_eps . "</td>
                                <td align='right'>" . $estado_factura_2 . "</td>
                                <td align='center'><a href='?option=buscar_usuario&identificacion=" . $_REQUEST['identificacion'] . "&origen_form=" . 
                                 $_REQUEST['origen_form'] . "&origen=11&origen33=" . $origen33 . "&id_cita=" . $row['id_cita'] . "'><img src='" . Utils::$http_ruta . "mvc/vista/imagenes/icon_edit.png' width='18px' height='18px' />
                                 </a>
                                 </td>

                        </tr>";

        //<td align='center'><a href='#' onclick='eliminar(".$row['id_cita'] .")'><img src='" . Utils::$http_ruta . "mvc/vista/imagenes/icon_delete.png' width='18px' height='18px' /></a></td>

    }

} else {
    echo "<font color='darkgray'>(sin resultados)</font>";
}
echo "</table>";
echo "</div><BR />";
?><?php
//mysql_free_result($resultados);

if ($total_registros) {

    echo "<center>";

    if (($pagina - 1) > 0) {
        echo "<a href='?option=listar_factura&pagina=" . ($pagina - 1) . "&$term_link'>< Anterior</a> ";
    }

    for ($i = 1; $i <= $total_paginas; $i++) {
        if ($pagina == $i) {
            echo "<b>" . $pagina . "</b> ";
        } else {
            echo "<a href='?option=listar_factura&pagina=$i&$term_link'>$i</a> ";
        }

    }

    if (($pagina + 1) <= $total_paginas) {
        echo " <a href='?option=listar_factura&pagina=" . ($pagina + 1) . "&$term_link'>Siguiente ></a>";
    }

    echo "</center>";
}
?>

<br>
<br>
<a href='#' onClick='imprSelec("content_result")' >Imprimir</a>
</div>


<div id="dialog-eliminar" title="Anular factura">


    <p>

        Registre el motivo por el cual desea anular la factura
      <input type="text" name="motivo" class=" " id="motivo"  value="">


    </p>


</div>