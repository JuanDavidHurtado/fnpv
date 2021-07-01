<?php
if (isset($_REQUEST["id_articulo"])) {

    $mes_lis = '';
    $reg = false;

    if ($_REQUEST['id_articulo'] == 'new') {
        $sql = strtoupper("
        INSERT INTO `articulo` (`id`, `codigo`, `nombre`, `descripcion`, `estado`) 
        VALUES (NULL, '{$_REQUEST['codigo']}', '{$_REQUEST['nombre']}', '{$_REQUEST['descripcion']}', '{$_REQUEST['estado']}');    
        ");

        $conexion->EjecutarInsert($sql);
        $mes_lis = '<div class="msg ui-state-highlight ui-corner-all" style="padding: 0 .7em;"> 
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
		Registro exitoso!.</div>
            </p>';
    } else {
        $sql = strtoupper("UPDATE  `articulo` SET  
                        `codigo` =  '{$_REQUEST['codigo']}', 
                        `nombre` =  '{$_REQUEST['nombre']}', 
                        `descripcion` =  '{$_REQUEST['descripcion']}', 
                        `estado` =  '{$_REQUEST['estado']}' 
                         WHERE  `id` ={$_REQUEST['id_articulo']}");

        $conexion->EjecutarInsert($sql);
        $mes_lis = '<div class="msg ui-state-highlight ui-corner-all" style="padding: 0 .7em;"> 
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
		Cambios guardados!.</div>
            </p>';
    }
}




if (isset($_REQUEST['delete'])) {
    $sql = "Delete from articulo where id=" . $_REQUEST['acc'];
    $conexion->EjecurtarDelete($sql);
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

    #crear_articulo {
        display: none;
    }

</style>

<script>
    var id_delete = 0;
    function eliminar(id) {
        id_delete = id;
        $("#dialog-eliminar").dialog('open');
    }

    function editar(id) {
        $('#id_articulo').val(id);
        $('#codigo').val($('#codigo_' + id).html());
        $('#nombre').val($('#nombre_' + id).html());
        $('#descripcion').val($('#descripcion_' + id).html());
        $('#estado').val($('#estado_' + id).html());
        $("#crear_articulo").show('slow');
    }

    $(function() {
        $("#crear_articulo_f").validate({
            errorElement: "div",
            rules: {
                codigo: {required: true},
                nombre: {required: true},
                descripcion: {required: true},
                estado: {required: true}
            },
            messages: {
                codigo: {required: 'Ingrese codigo'},
                nombre: {required: 'Ingrese nombre'},
                descripcion: {required: 'Ingrese descripcion'},
                estado: {required: 'Seleccione estado'}
            },
            submitHandler: function(form) {
                // some other code
                // maybe disabling submit button
                // then:

                form.submit();


            }
        });

        $("#crear").click(function() {

            $("#crear_articulo").find(':input').each(function() {
                switch (this.type) {
                    case 'password':
                    case 'select-multiple':
                    case 'select-one':
                    case 'text':
                    case 'textarea':
                        $(this).val('');
                        break;
                    case 'checkbox':
                    case 'radio':
                        this.checked = false;
                }
            });
            $("#crear_articulo").show('slow');
        });

        $("#buscar").click(function() {
            window.location.replace('?option=articulos&search&term=' + $("#term").val());
        });

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
                    window.location.replace("?option=articulos&delete&acc=" + id_delete);
                },
                Cancelar: function() {
                    $(this).dialog("close");
                }
            }
        });


    });

</script>

<div id="content_welcome" style="overflow-y:auto;" class="ui-tabs ui-widget ui-widget-content ui-corner-all">

    <div id="crear_articulo">
        <form id='crear_articulo_f' method="post" >
            <input type="hidden" name="id_articulo" id="id_articulo" value="new" /> 
            <h2>Control de Articulo</h2>
            <label>Codigo</label>
            <br>
            <input class="input_txt" type="text" name="codigo" id="codigo" placeholder="Codigo..." />
            <br>
            <label>Nombre</label>
            <br>
            <input class="input_txt" type="text" name="nombre" id="nombre" placeholder="nombre..." />
            <br>
            <label>Descripcion</label>
            <br>
            <textarea id="descripcion" name="descripcion" class="input_txt_area" rows="3" cols="50"></textarea>
            <br>
            <label>Estado</label>
            <br>
            <select class="input_txt" name="estado" id="estado" >
                <option value="0">Activo</option>
                <option value="1">Inactivo</option>
            </select>
            <br>
            <button>Guardar</button> <a href="javascript:$('#crear_articulo').hide('slow');">Cancelar</a>
        </form>
    </div>
    <br>
    <h2>Lista de Articulos </h2>   

<?php
$where = " where true";
$term = str_replace(" ", "%", $_REQUEST['term']);

$term_link = "";
if ($term != '') {
    $term = '%' . $term . '%';
    $where = " where (nombre like '$term' or descripcion like '$term' ) ";
    $term_link = "term=" . $_REQUEST['term'];
}
?>
    <form id="fbuscar" action="?option=articulos&search" method="post" onsubmit="return false;">
        <input type="text" name="term" id="term" placeholder="Articulo a buscar ..." class="input_txt" value='<?php echo @$_REQUEST['term']; ?>' />
        <button id="buscar">Buscar</button>
        <button id="crear">Crear Articulo</button>
<?php
if (@$_REQUEST['term'] != '') {
    ?>
            <a href="?option=articulos">Cancelar</a>
            <?php
        }
        ?>        
    </form>
    <br>
        <?php echo @$mes_lis; ?>

    <?php
    $resultados = $conexion->EjecutarQuery("SELECT * FROM articulo $where");
    $total_registros = mysql_num_rows($resultados);
    $sql_search = "SELECT * FROM articulo $where ORDER BY nombre asc LIMIT $inicio, $registros";
    $resultados = $conexion->EjecutarQuery($sql_search);
    $total_paginas = ceil($total_registros / $registros);

    echo "<div id='content_result'>";
    echo "<table width='100%' border='0' cellpadding='0' cellspacing='0' class='data'>";
    echo "<tbody><tr class='t_head'>
                        <th valign='center'>Codigo</th>
                        <th valign='center'>Nombre</th>
                        <th valign='center'>Descripcion</th>                        
                        <th valign='center'>Estado</th>
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


            $estado = $row['estado'] == 0 ? 'Activo' : 'Inactivo';

            echo "<tr class='$style_file_table'>
                    <td align='right' id='codigo_{$row['id']}'>" . $row['codigo'] . "</td>
                    <td align='right' id='nombre_{$row['id']}'>" . $row['nombre'] . "</td>
                    <td align='right' id='descripcion_{$row['id']}'>" . $row['descripcion'] . " " . $row['apellido'] . "</td>                                
                    <td align='right' id='estado_{$row['id']}'>{$estado}</td>
                    <td align='right' onclick='editar({$row['id']})'>Editar</td>
                    <td align='right' onclick='eliminar({$row['id']})'>Eliminar</td>
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
            echo "<a href='?option=articulos&pagina=" . ($pagina - 1) . "&$term_link'>< Anterior</a> ";
        }

        for ($i = 1; $i <= $total_paginas; $i++) {
            if ($pagina == $i)
                echo "<b>" . $pagina . "</b> ";
            else
                echo "<a href='?option=articulos&pagina=$i&$term_link'>$i</a> ";
        }

        if (($pagina + 1) <= $total_paginas) {
            echo " <a href='?option=articulos&pagina=" . ($pagina + 1) . "&$term_link'>Siguiente ></a>";
        }

        echo "</center>";
    }
    ?>


</div>

<div id="dialog-eliminar" title="Eliminar Articulo">


    <p>

        Desea eliminar el registro ?

    </p>


</div>