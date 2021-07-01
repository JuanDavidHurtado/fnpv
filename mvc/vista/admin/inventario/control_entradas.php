<?php
$now = Date('Y-m-d');
if (isset($_REQUEST["id_entrada"])) {

    $mes_lis = '';
    $reg = false;

    if ($_REQUEST['id_entrada'] == 'new') {
        $sql = strtoupper("
        INSERT INTO `articulo_entrada` (`id`, `id_articulo`, `id_usuario`, `descripcion`, `fecha`, `cantidad`) 
        VALUES 
        (NULL, '{$_REQUEST['id_articulo']}', '{$_SESSION['id_usuario']}', 
                '{$_REQUEST['descripcion']}', '{$now}', '{$_REQUEST['cantidad']}');
        ");

        $conexion->EjecutarInsert($sql);
        $mes_lis = '<div class="msg ui-state-highlight ui-corner-all" style="padding: 0 .7em;"> 
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
		Registro exitoso!.</div>
            </p>';

    } /*else {
        $sql = strtoupper("UPDATE  `articulo_entrada` SET  
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

    }*/

}




if (isset($_REQUEST['delete'])) {
    $sql = "Delete from articulo_entrada where id=" . $_REQUEST['acc'];
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

    #crear_entrada {
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
        $('#codigo').val($('#codigo_'+id).html());
        $('#nombre').val($('#nombre_'+id).html());
        $('#descripcion').val($('#descripcion_'+id).html());
        $('#estado').val($('#estado_'+id).html());
        $("#crear_articulo").show('slow');
    }

    $(function() {
        
        $("#crear_entrada_f").validate({
            errorElement: "div",
            rules: {
                id_articulo: {required: true},
                cantidad: {required: true,number:true},
                descripcion: {required: true},
            },
            messages: {
                id_articulo: {required: 'Seleccione articulo'},
                descripcion: {required: 'Ingrese descripcion'},
                cantidad: {required: 'Ingrese cantidad',number:'El valor debe ser numerico'}
            },
            submitHandler: function(form) {
                // some other code
                // maybe disabling submit button
                // then:

                form.submit();


            }
        });

        $("#crear").click(function() {

            $("#crear_entrada").find(':input').each(function() {
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
            $("#crear_entrada").show('slow');
        });

        $("#buscar").click(function() {
            window.location.replace('?option=entradas_i&search&term=' + $("#term").val());
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
                    window.location.replace("?option=entradas_i&delete&acc=" + id_delete);
                },
                Cancelar: function() {
                    $(this).dialog("close");
                }
            }
        });


    });

</script>

<div id="content_welcome" style="overflow-y:auto;" class="ui-tabs ui-widget ui-widget-content ui-corner-all">

    <div id="crear_entrada">
        <form id='crear_entrada_f' method="post" >
            <input type="hidden" name="id_entrada" id="id_entrada" value="new" /> 
            <h2>Control de Entradas</h2>
            <label>Articulo</label>
            <br>
            <select class="input_txt" name="id_articulo" id="id_articulo" >
                <?php
                
                $sql = "Select * from articulo where estado = 0 order by nombre asc";
                $result = $conexion->EjecutarQuery($sql);
                while ($row = mysql_fetch_array($result)) {
                    echo "<option value='{$row['id']}'>{$row['codigo']} - {$row['nombre']}</option>";
                }
                
                ?>
            </select>
            <br>
            <label>Cantidad</label>
            <br>
            <input class="input_txt" type="text" name="cantidad" id="cantidad" placeholder="cantidad..." />
            <br>
            <label>Descripcion</label>
            <br>
            <textarea id="descripcion" name="descripcion" class="input_txt_area" rows="3" cols="50"></textarea>
            <br>
            <button>Guardar</button> <a href="javascript:$('#crear_entrada').hide('slow');">Cancelar</a>
        </form>
    </div>
    <br>
    <h2>Lista de Entradas</h2>   

    <?php
    $where = " where true";
    $term = str_replace(" ", "%", $_REQUEST['term']);

    $term_link = "";
    if ($term != '') {
        $term = '%' . $term . '%';
        $where = " where (a.nombre like '$term' or ae.descripcion like '$term' ) ";
        $term_link = "term=" . $_REQUEST['term'];
    }
    ?>
    <form id="fbuscar" action="?option=entradas_i&search" method="post" onsubmit="return false;">
        <input type="text" name="term" id="term" placeholder="Articulo a buscar ..." class="input_txt" value='<?php echo @$_REQUEST['term']; ?>' />
        <button id="buscar">Buscar</button>
        <button id="crear">Crear Entrada</button>
        <?php
        if (@$_REQUEST['term'] != '') {
            ?>
            <a href="?option=entradas_i">Cancelar</a>
            <?php
        }
        ?>        
    </form>
    <br>
    <?php echo @$mes_lis; ?>

    <?php
    $sql = "SELECT ae.* FROM articulo_entrada as ae inner join articulo as a on ae.id_articulo = a.id $where";
    $resultados = $conexion->EjecutarQuery($sql);
    $total_registros = mysql_num_rows($resultados);
    $sql_search = "SELECT ae.*, a.codigo as codigoa, a.nombre as nombrea, 
                   a.descripcion as descripciona,a.estado as estadoa 
                   FROM articulo_entrada as ae inner join articulo as a on ae.id_articulo = a.id 
                   $where ORDER BY descripcion asc LIMIT $inicio, $registros";
    
    $resultados = $conexion->EjecutarQuery($sql_search);
    $total_paginas = ceil($total_registros / $registros);

    echo "<div id='content_result'>";
    echo "<table width='100%' border='0' cellpadding='0' cellspacing='0' class='data'>";
    echo "<tbody><tr class='t_head'>
                        <th valign='center'>Codigo Art</th>
                        <th valign='center'>Nombre Art</th>
                        <th valign='center'>Descripcion Art</th>                        
                        <th valign='center'>Estado Art</th>
                        <th valign='center'>Descripcion Entrada</th>       
                        <th valign='center'>Cantidad Entrada</th>       
                        <th valign='center'>Fecha Ingreso</th>       
                        <!--<th width='50px'>Editar</th>-->
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


            $estado = $row['estadoa'] == 0 ? 'Activo' : 'Inactivo';

            echo "<tr class='$style_file_table'>
                    <td align='right' >" . $row['codigoa'] . "</td>
                    <td align='right' >" . $row['nombrea'] . "</td>
                    <td align='right' >" . $row['descripciona'] . " " . $row['apellido'] . "</td>                                
                    <td align='right' >{$estado}</td>
                    <td align='right' >{$row['descripcion']}</td>
                    <td align='right' >{$row['cantidad']}</td>
                    <td align='right' >{$row['fecha']}</td>
                    <!--<td align='right' onclick='editar({$row['id']})'>Editar</td>-->
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
            echo "<a href='?option=articulo_entrada&pagina=" . ($pagina - 1) . "&$term_link'>< Anterior</a> ";
        }

        for ($i = 1; $i <= $total_paginas; $i++) {
            if ($pagina == $i)
                echo "<b>" . $pagina . "</b> ";
            else
                echo "<a href='?option=articulo_entrada&pagina=$i&$term_link'>$i</a> ";
        }

        if (($pagina + 1) <= $total_paginas) {
            echo " <a href='?option=articulo_entrada&pagina=" . ($pagina + 1) . "&$term_link'>Siguiente ></a>";
        }

        echo "</center>";
    }
    ?>


</div>

<div id="dialog-eliminar" title="Eliminar Entrada">


    <p>

        Desea eliminar el registro ?

    </p>


</div>