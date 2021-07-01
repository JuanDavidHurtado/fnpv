<?php
@$mes_lis = '';

$pagina = @$_REQUEST["pagina"];
$registros = 20;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $registros;
}

if (isset($_REQUEST['delete'])) {

    $sql = 'Delete from paciente where historia = ' . $_REQUEST['acc'];
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
    var id_delete = 0;
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
                    window.location.replace("?option=listar_paciente&delete&acc=" + id_delete);
                },
                Cancelar: function() {
                    $(this).dialog("close");
                }
            }
        });


    });

</script>

<div id="content_welcome" style="overflow-y:auto;" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
    <h2>Lista de Pacientes </h2>   
<?php
$where = " where true";
$term = str_replace(" ", "%", $_REQUEST['term']);

$term_link = "";
if ($term != '') {
    $term = '%' . $term . '%';
    $where = " where (nombre1 like '$term' or apellido1 like '$term' or nombre2 like '$term' or apellido2 like '$term' or identificacion like '$term'  ) ";
    $term_link = "term=" . $_REQUEST['term'];
}
?>
    <form action="?option=listar_paciente&search" method="post">
        <input type="text" name="term" id="term" placeholder="Paciente a buscar ..." class="input_txt" value='<?php echo @$_REQUEST['term']; ?>' />
        <button>Buscar</button>
    <?php
    if (@$_REQUEST['term'] != '') {
        ?>
            <a href="?option=listar_paciente">Cancelar</a>
        <?php
    }
    ?>
    </form>
    <br>
        <?php echo @$mes_lis; ?>

        <?php
        $resultados = $conexion->EjecutarQuery("SELECT * FROM paciente $where");
        $total_registros = mysql_num_rows($resultados);
        $sql_search = "SELECT * FROM paciente $where ORDER BY identificacion ASC LIMIT $inicio, $registros";
        $resultados = $conexion->EjecutarQuery($sql_search);
        $total_paginas = ceil($total_registros / $registros);

        echo "<div id='content_result'>";
        echo "<table width='100%' border='0' cellpadding='0' cellspacing='0' class='data'>";
        echo "<tbody><tr class='t_head'>
                        <th valign='center'>Identificacion</th>
                        <th valign='center'>Nombre</th>                        
                        <th valign='center'>Edad</th> 
                        <th valign='center'>Sexo</th>  
                        <th valign='center'>EPS</th>  
                        <th valign='center'>T. Afiliacion</th>  
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


                $sqlr = "Select * from eps where id_eps='" . $row['id_eps'] . "' ";
                $resultr = $conexion->EjecutarQuery($sqlr);
                $rowr = mysql_fetch_array($resultr);
                $eps = $rowr['nombre'];

                $sqlr = "Select * from tipoafiliacion where id='" . $row['tipoafiliacion'] . "' ";
                $resultr = $conexion->EjecutarQuery($sqlr);
                $rowr = mysql_fetch_array($resultr);
                $tipoafiliado = $rowr['nombre'];

                echo "<tr class='$style_file_table'>
                                <td align='right'>" . $row['identificacion'] . "</td>
                                <td align='right'>" . $row['nombre1'] . " " . $row['apellido1'] . "</td>                        
                                <td align='center'>" . Utils::edad($row['fecha_n']) . "</td> 
                                <td align='center'>" . $row['sexo'] . "</td>  
                                <td align='right'>" . $eps . "</td>  
                                <td align='right'>" . $tipoafiliado . "</td>  
                                <td align='center'><a href='?option=ver_paciente&verificar&identificacion=" . $row['identificacion'] . "'><img src='" . Utils::$http_ruta . "mvc/vista/imagenes/icon_edit.png' width='18px' height='18px' /></a></td>
				<td align='center'><a href='#' onclick='eliminar(" . $row['historia'] . ")'><img src='" . Utils::$http_ruta . "mvc/vista/imagenes/icon_delete.png' width='18px' height='18px' /></a></td>
                            </tr>";
            }
        } else {
            echo "<font color='darkgray'>(sin resultados)</font>";
        }
        echo "</table>";
        echo "</div>";
        ?><a href='#' onClick='imprSelec("content_result")' >Imprimir</a><?php
    //mysql_free_result($resultados);				




    if ($total_registros) {

        echo "<center>";

        if (($pagina - 1) > 0) {
            echo "<a href='?option=listar_paciente&pagina=" . ($pagina - 1) . "&$term_link'>< Anterior</a> ";
        }

        /*for ($i = 1; $i <= $total_paginas; $i++) {
            if ($pagina == $i)
                echo "<b>" . $pagina . "</b> ";
            else
                echo "<a href='?option=listar_paciente&pagina=$i&$term_link'>$i</a> ";
        }*/

        if (($pagina + 1) <= $total_paginas) {
            echo " <a href='?option=listar_paciente&pagina=" . ($pagina + 1) . "&$term_link'>Siguiente ></a>";
        }

        echo "</center>";
    }
    ?>


</div>

<div id="dialog-eliminar" title="Eliminar Paciente">


    <p>

        Desea eliminar el registro ?

    </p>


</div>