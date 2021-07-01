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

    $sql = 'Delete from eps where id_eps = ' . $_REQUEST['acc'];
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
                    window.location.replace("?option=listar_eps&delete&acc=" + id_delete);
                },
                Cancelar: function() {
                    $(this).dialog("close");
                }
            }
        });


    });

</script>

<div id="content_welcome" style="overflow-y:auto;" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
    <h2>Listado EPS </h2>
<?php
// para buscarrrrr ______
$where = " where true";
$term = str_replace(" ", "%", $_REQUEST['term']);

$term_link = "";
if ($term != '') {
    $term = '%' . $term . '%';
    $where = " where (nombre like '$term' ) ";
    $term_link = "term=" . $_REQUEST['term'];
}

?>
    <form action="?option=listar_eps&search" method="post">
        <input type="text" name="term" id="term" placeholder="EPS a buscar ..." class="input_txt" value='<?php echo @$_REQUEST['term']; ?>' />
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
        $resultados = $conexion->EjecutarQuery("SELECT * FROM eps $where");
        $total_registros = mysql_num_rows($resultados);
        $sql_search = "SELECT * FROM eps $where  ORDER BY nombre asc LIMIT $inicio, $registros";
        $resultados = $conexion->EjecutarQuery($sql_search);
        $total_paginas = ceil($total_registros / $registros);

        echo "<div id='content_result'>";
        echo "<table width='100%' border='0' cellpadding='0' cellspacing='0' class='data'>";
        echo "<tbody><tr class='t_head'>
             <th valign='center'>NIT</th>
                        <th valign='center'>Codigo 1</th>
                         <th valign='center'>Codigo 2</th>
                        <th valign='center'>Nombre</th>
                        <th valign='center'>Direccion</th>
                        <th valign='center'>Telefono</th>
                        <th valign='center'>Regimen</th>
                       
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

$sql_r = "Select * from regimen where id_regimen = '" . $row['id_regimen']  . "' ";
$result_r = $conexion->EjecutarQuery($sql_r);
$row_r = mysql_fetch_array($result_r);
$regimen = $row_r['nombre'];



                
                echo "<tr class='$style_file_table'>
                                <td align='right'>" . $row['nit_3'] . "</td>
                                <td align='right'>" . $row['nit'] . "</td>
                                    <td align='right'>" . $row['nit_2'] . "</td>
                                <td align='right'>" . $row['nombre'] . "</td>
                                <td align='right'>" . $row['direccion'] . "</td>
                                <td align='right'>" . $row['telefono'] . "</td>
                                <td align='right'>" . $regimen . "</td>
                               


                                 <td align='center'><a href='?option=eps&id_eps=" . $row['id_eps'] . "'><img src='" . Utils::$http_ruta . "mvc/vista/imagenes/icon_edit.png' width='18px' height='18px' /></a></td>
				 <td align='center'><a href='#' onclick='eliminar(".$row['id_eps'] .")'><img src='" . Utils::$http_ruta . "mvc/vista/imagenes/icon_delete.png' width='18px' height='18px' /></a></td>

</tr>";

                ///" . $row['id_contratacion'] . " \''.$row['id_contratacion'] .'\'
            }




        } else {
            echo "<font color='darkgray'>(sin resultados)</font>";
        }
        echo "</table>";
        echo "</div><BR />";
        ?><a href='#' onClick='imprSelec("content_result")' >Imprimir</a><?php
    //mysql_free_result($resultados);




    if ($total_registros) {

        echo "<center>";

        if (($pagina - 1) > 0) {
            echo "<a href='?option=listar_eps&pagina=" . ($pagina - 1) . "&$term_link'>< Anterior</a> ";
        }

        for ($i = 1; $i <= $total_paginas; $i++) {
            if ($pagina == $i)
                echo "<b>" . $pagina . "</b> ";
            else
                echo "<a href='?option=listar_eps&pagina=$i&$term_link'>$i</a> ";
        }

        if (($pagina + 1) <= $total_paginas) {
            echo " <a href='?option=listar_eps&pagina=" . ($pagina + 1) . "&$term_link'>Siguiente ></a>";
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