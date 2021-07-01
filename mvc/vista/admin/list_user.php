<?php
if (isset($_REQUEST["create"])) {

    $mes_lis = '';
    $id_new_user = 0;
    $reg = false;

    if ($_REQUEST['type_acc'] == 'new') {
        $sql = "INSERT INTO `usuario` 
               (`id_usuario`,`identificacion`, `nombre`, `apellido`, `registro_medico`, `firma`, `login`, `password`, `id_rol`,`estado`,`id_tipo_usuario`,`tel`,`email`) 
        VALUES (NULL,'" . $_REQUEST['identificacion'] . "', '" . strtoupper($_REQUEST['nombre']) . "', '" . strtoupper($_REQUEST['apellido']) . "', '" . strtoupper($_REQUEST['registro_medico']) . "', '', '" . strtoupper($_REQUEST['login']) . "', '" . strtoupper($_REQUEST['password']) . "', '" . $_REQUEST['id_rol'] . "', '" . strtoupper($_REQUEST['estado']) . "','" . $_REQUEST['id_tipo_usuario'] . "','" . $_REQUEST['tel'] . "','" . $_REQUEST['email'] . "');";

        $conexion->EjecutarInsert($sql);
        $mes_lis = "(Registro exitoso)";
        $mes_lis = '<div class="msg ui-state-highlight ui-corner-all" style="padding: 0 .7em;"> 
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
		Registro exitoso!.</div>
            </p>';

        if ($_REQUEST['id_rol'] == 3) {

            $reg = true;
            $sql_id = 'Select id_usuario from usuario where identificacion = "' . $_REQUEST['identificacion'] . '" ';
            $result_id = $conexion->EjecutarQuery($sql_id);
            while ($row_id = mysql_fetch_array($result_id)) {
                $id_new_user = $row_id['id_usuario'];
                break;
            }
        }
    } else {
        $sql = ("UPDATE  `usuario` SET 
                        `identificacion` =  '" . $_REQUEST['identificacion'] . "',
			`nombre` =  '" . $_REQUEST['nombre'] . "',
			`apellido` =  '" . $_REQUEST['apellido'] . "',
			`registro_medico` =  '" . $_REQUEST['registro_medico'] . "',
			`login` =  '" . $_REQUEST['login'] . "',
			`password` =  '" . $_REQUEST['password'] . "',
			`estado` =  '" . $_REQUEST['estado'] . "',
			`id_rol` =  '" . $_REQUEST['id_rol'] . "',
			`tel` =  '" . $_REQUEST['tel'] . "',
			`email` =  '" . $_REQUEST['email'] . "',
                        `id_tipo_usuario` =  '" . $_REQUEST['id_tipo_usuario'] . "' WHERE  `usuario`.`id_usuario` =" . $_REQUEST['acc'] . ";");

        $conexion->EjecutarInsert($sql);
        $mes_lis = "(Cambios guardados)";
        $mes_lis = '<div class="msg ui-state-highlight ui-corner-all" style="padding: 0 .7em;"> 
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
		Cambios guardados!.</div>
            </p>';

        if ($_REQUEST['id_rol'] == 3) {
            $id_new_user = $_REQUEST['acc'];
            $reg = true;
        }
    }

    if ($reg) {

        $sql_update = "update usuario_proceso set estado='INACTIVO' where id_usuario='$id_new_user'";
        $conexion->EjecutarInsert($sql_update);

        //echo $id_new_user." <br>";

        $_REQUEST['dependencia'] = str_replace(' ', '', $_REQUEST['dependencia']);
        $procesos = explode(',', $_REQUEST['dependencia']);

        foreach ($procesos as $id_proceso) {
            if ($id_proceso != '') {
                $bool = false;
                $sql_p = "Select * from usuario_proceso where id_usuario='$id_new_user' and id_proceso='$id_proceso' ";
                $result_p = $conexion->EjecutarQuery($sql_p);
                while ($row_p = mysql_fetch_array($result_p)) {
                    $sql_pu = "Update usuario_proceso set estado = 'ACTIVO' where id_usuario_proceso='" . $row_p['id_usuario_proceso'] . "' ";
                    $conexion->EjecutarInsert($sql_pu);
                    $bool = true;
                    break;
                }

                if (!$bool) {

                    $sql_ip = "INSERT INTO `usuario_proceso` (`id_usuario`, `id_proceso`) VALUES ('$id_new_user', '$id_proceso');";
                    $result_ip = $conexion->EjecutarInsert($sql_ip);
                }
            }
        }
        /* print_r($_REQUEST);
          print_r($procesos); */
    }
}




if (isset($_REQUEST['delete'])) {
    $sql = "Delete from usuario where id_usuario=" . $_REQUEST['acc'];
    $conexion->EjecurtarDelete($sql);
    $mes_lis = "(Registro eliminado)";
    $mes_lis = '<div class="msg ui-state-error ui-corner-all" style="padding: 0 .7em;"> 
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
		Registro eliminado!.</div>
            </p>';
}


$pagina = @$_REQUEST["pagina"];
$registros = 18;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $registros;
}
?>
<style>

    #content_welcome{
        min-height: 750px;
        height: auto;
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
                    window.location.replace("?option=list_user&delete&acc=" + id_delete);
                },
                Cancelar: function() {
                    $(this).dialog("close");
                }
            }
        });


    });

</script>

<div id="content_welcome" style="overflow-y:auto;" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
    <h2>Lista de Usuarios </h2>   
    
    <?php
    $where = " where true";
    $term = str_replace(" ", "%", $_REQUEST['term']);

    $term_link = "";
    if ($term != '') {
        $term = '%' . $term . '%';
        $where = " where (nombre like '$term' or apellido like '$term' or registro_medico like '$term' or estado like '$term' or identificacion like '$term') ";
        $term_link = "term=" . $_REQUEST['term'];
    }
    ?>
    <form action="?option=list_user&search" method="post">
        <input type="text" name="term" id="term" placeholder="Usuario a buscar ..." class="input_txt" value='<?php echo @$_REQUEST['term']; ?>' />
        <button>Buscar</button>
        <?php
        if (@$_REQUEST['term'] != '') {
            ?>
            <a href="?option=list_user">Cancelar</a>
            <?php
        }
        ?>
    </form>
    <br>
    <?php echo @$mes_lis; ?>

    <?php
    $resultados = $conexion->EjecutarQuery("SELECT * FROM usuario $where");
    $total_registros = mysql_num_rows($resultados);
    $sql_search = "SELECT * FROM usuario $where ORDER BY nombre asc LIMIT $inicio, $registros";
    $resultados = $conexion->EjecutarQuery($sql_search);
    $total_paginas = ceil($total_registros / $registros);

    echo "<div id='content_result'>";
    echo "<table width='100%' border='0' cellpadding='0' cellspacing='0' class='data'>";
    echo "<tbody><tr class='t_head'>
                        <th valign='center'>Resolucion</th>
                        <th valign='center'>Identificacion</th>
                        <th valign='center'>Nombre</th>                        
                        <th valign='center'>Area</th>
                        <!-- <th valign='center'>Rol</th> -->
			<th>Estado</th>
                        <th width='50px'>Ver</th>
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

            $dependencia = "";
            $rol = "";

            if ($row['id_dependencia'] != '') {

                $sqlx = "Select * from dependencia where id_dependencia='" . $row['id_dependencia'] . "' ";
                $resultx = $conexion->EjecutarQuery($sqlx);
                $rowx = mysql_fetch_array($resultx);
                $dependencia = $rowx['nombre'];
            }

            $sqlr = "Select * from rol where id_rol='" . $row['id_rol'] . "' ";
            $resultr = $conexion->EjecutarQuery($sqlr);
            $rowr = mysql_fetch_array($resultr);
            $rol = $rowr['nombre'];


            if ($rowr['id_rol'] == 3) {

                $sqlr = "Select * from tipo_usuario where id_tipo_usuario='" . $row['id_tipo_usuario'] . "' ";
                $resultr = $conexion->EjecutarQuery($sqlr);
                $rowr = mysql_fetch_array($resultr);
                $rol = $rowr['nombre'];
            }


            echo "<tr class='$style_file_table'>
                                <td align='right'>" . $row['registro_medico'] . "</td>
                                <td align='right'>" . $row['identificacion'] . "</td>
                                <td align='right'>" . $row['nombre'] . " " . $row['apellido'] . "</td>                                
                                <td align='right'>" . ($dependencia == "" ? $rol : $dependencia) . "</td>
                                <!-- <td align='right'>" . $rol . "</td> -->
				<td align='right'>" . $row['estado'] . "</td>";
            if ($row['id_rol'] == 3) {
                echo "<td align='center'><a href='?option=view_u&acc=" . $row['identificacion'] . "'><img src='" . Utils::$http_ruta . "mvc/vista/imagenes/icon_inspeccionar.png' width='18px' height='18px' /></a></td>";
            } else {
                echo "<td></td>";
            }

            echo "<td align='center'><a href='?option=new_user&acc&identificacion=" . $row['identificacion'] . "'><img src='" . Utils::$http_ruta . "mvc/vista/imagenes/icon_edit.png' width='18px' height='18px' /></a></td>
				<td align='center'><a href='#' onclick='eliminar(" . $row['id_usuario'] . ")'><img src='" . Utils::$http_ruta . "mvc/vista/imagenes/icon_delete.png' width='18px' height='18px' /></a></td>
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
            echo "<a href='?option=list_user&pagina=" . ($pagina - 1) . "&$term_link'>< Anterior</a> ";
        }

        for ($i = 1; $i <= $total_paginas; $i++) {
            if ($pagina == $i)
                echo "<b>" . $pagina . "</b> ";
            else
                echo "<a href='?option=list_user&pagina=$i&$term_link'>$i</a> ";
        }

        if (($pagina + 1) <= $total_paginas) {
            echo " <a href='?option=list_user&pagina=" . ($pagina + 1) . "&$term_link'>Siguiente ></a>";
        }

        echo "</center>";
    }
    ?>


</div>

<div id="dialog-eliminar" title="Eliminar Usuario">


    <p>

        Desea eliminar el registro ?

    </p>


</div>