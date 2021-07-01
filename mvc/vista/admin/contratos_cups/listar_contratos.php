<?php
@$mes_lis = '';

$pagina = @$_REQUEST["pagina"];
$registros = 13;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $registros;
}

if (isset($_REQUEST['delete'])) {

    $sql = 'Delete from contrato where id_contrato = ' . $_REQUEST['acc'];
    $conexion->EjecurtarDelete($sql);

    $mes_lis = "(Registro eliminado)";
    $mes_lis = '<div class="msg ui-state-error ui-corner-all" style="padding: 0 .7em;">
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
		Registro eliminado!.</div>
            </p>';
}
?>
<style>

    #content_welcome{
        height: 750px;
    }

</style>
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
                    window.location.replace("?option=listar_contratos&delete&acc=" + id_delete);
                },
                Cancelar: function() {
                    $(this).dialog("close");
                }
            }
        });


    });

</script>

<div id="content_welcome" style="overflow-y:auto;" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
    <h2>Lista de Contratos </h2>
<?php
// para buscarrrrr ______
$where = " where true";
$term = str_replace(" ", "%", $_REQUEST['term']);

$term_link = "";
if ($term != '') {
    $term = '%' . $term . '%';
    $where = " where (nombre_contrato like '$term' ) ";
    $term_link = "term=" . $_REQUEST['term'];
}

?>
    <form action="?option=listar_contratos&search" method="post">
        <input type="text" name="term" id="term" placeholder="Contrato a buscar ..." class="input_txt" value='<?php echo @$_REQUEST['term']; ?>' />
        <button>Buscar</button>
    <?php
    if (@$_REQUEST['term'] != '') {
        ?>
            <a href="?option=listar_contratos">Cancelar</a>
        <?php
    }
    ?>
    </form>
    <br>
        <?php echo @$mes_lis; ?>

        <?php
        $resultados = $conexion->EjecutarQuery("SELECT * FROM contrato $where");
        $total_registros = mysql_num_rows($resultados);
        $sql_search = "SELECT * FROM contrato $where  ORDER BY fecha desc LIMIT $inicio, $registros";
        $resultados = $conexion->EjecutarQuery($sql_search);
        $total_paginas = ceil($total_registros / $registros);

        echo "<div id='content_result'>";
        echo "<table width='100%' border='0' cellpadding='0' cellspacing='0' class='data'>";
        echo "<tbody><tr class='t_head'>
                        <th valign='center'>Fecha</th>
                        <th valign='center'>Contrato</th>
                        <th valign='center'>Contratante</th>                        
                        <th valign='center'>Tipo</th>
                        <th valign='center'>Estado</th>
                        <th valign='center'>Inicio</th>
                        <th valign='center'>Finalización</th>
                        <th valign='center'>Valor</th>                                               
                        <th valign='center'>Plan Beneficio</th>
                        <th valign='center'>Póliza</th>

                        <th valign='center'>Ver</th>
                        <th valign='center'>Agregar</th>
                        <th width='50px'>Editar</th>
			<th width='50px'>Eliminar</th>
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

                // buscar eps contratante
                $sql_eps = "Select * from eps where id_eps = '" . $row['contratante'] . "' ";
                $result_eps = $conexion->EjecutarQuery($sql_eps);
                $row_eps = mysql_fetch_array($result_eps);
                $nit = $row_eps['nit'];
                $nombre_eps = $row_eps['nombre'];
                $id_regimen=$row_eps['id_regimen'];

               
                $id_contra=$row['id_contrato'];
                echo "<tr class='$style_file_table'>
                                <td align='right'>" . $row['fecha'] . "</td>
                                <td align='right'>" . $row['nombre_contrato'] . "</td>
                                <td align='right'>" . $nombre_eps . "</td>
                                <td align='right'>" . $row['tipo'] . "</td>
                                <td align='right'>" . $row['estado'] . "</td>
                                <td align='right'>" . $row['fecha_in'] . "</td>
                                <td align='right'>" . $row['fecha_out'] . "</td>
                                <td align='right'>" . $row['valor'] . "</td>                              
                                <td align='right'>" . $row['plan'] . "</td>
                                <td align='right'>" . $row['poliza'] . "</td>                          
                                    

                                  <td align='center'><a href='?option=listar_contratos_cups&identificacion=" . $row['id_contrato'] . "'>Ver Cups</a></td>
                                  <td align='center'><a href='?option=agregar_cups&id_contrato=" . $row['id_contrato'] . "'>Agregar Cup</a></td>

                                  <td align='center'><a href='?option=contratos&id_contrato=" . $row['id_contrato'] . "'><img src='" . Utils::$http_ruta . "mvc/vista/imagenes/icon_edit.png' width='18px' height='18px' /></a></td>
				  <td align='center'><a href='#' onclick='eliminar(".$row['id_contrato'] .")'><img src='" . Utils::$http_ruta . "mvc/vista/imagenes/icon_delete.png' width='18px' height='18px' /></a></td>

</tr>";

                ///" . $row['id_contratacion'] . " \''.$row['id_contratacion'] .'\'
            }

            


        } else {
            echo "<font color='darkgray'>(sin resultados)</font>";
        }
        echo "</table>";
        echo "</div> <br />";
        ?><a href='#' onClick='imprSelec("content_result")' >Imprimir</a><?php
    //mysql_free_result($resultados);




    if ($total_registros) {

        echo "<center>";

        if (($pagina - 1) > 0) {
            echo "<a href='?option=listar_paciente&pagina=" . ($pagina - 1) . "&$term_link'>< Anterior</a> ";
        }

        for ($i = 1; $i <= $total_paginas; $i++) {
            if ($pagina == $i)
                echo "<b>" . $pagina . "</b> ";
            else
                echo "<a href='?option=listar_paciente&pagina=$i&$term_link'>$i</a> ";
        }

        if (($pagina + 1) <= $total_paginas) {
            echo " <a href='?option=listar_paciente&pagina=" . ($pagina + 1) . "&$term_link'>Siguiente ></a>";
        }

        echo "</center>";
    }
    ?>


</div>

<div id="dialog-eliminar" title="Eliminar Contratación">


    <p>

        Desea eliminar el registro ?

    </p>


</div>