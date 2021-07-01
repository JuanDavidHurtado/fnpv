<?php
if ($_REQUEST['acc_opt'] == 'darlimite') {
    $new_fecha_limite = Date('Y-m-d H:i:s');
    $sql = "Update cita set fecha_hora_limite ='$new_fecha_limite' where id_cita=" . $_REQUEST['id_acc'];
    $conexion->EjecutarQuery($sql);
}

$_POST['ocancel'] = isset($_POST['ocancel']) ? $_POST['ocancel'] : $_REQUEST['ocancel'];
$_REQUEST['ocancel'] = @$_POST['ocancel'];

$where = '';
$checked = '';
$vche = '';
if (@$_REQUEST['ocancel'] == 'true') {
    $where = " and c.estado <> 'CANCELADO' ";
    $checked = " checked='checked' ";
    $vche = 'true';
}
if (@$_REQUEST['fecha1'] == '') {
    @$_REQUEST['fecha1'] = Utils::addIntervalDate(Date('Y-m-d'), '-15', 'day');
}

if (@$_REQUEST['fecha2'] == '') {
    @$_REQUEST['fecha2'] = Date('Y-m-d');
}
?>
<style>

    #content_welcome{
        height: 752px;
    }

    .content_tab{
        overflow:auto;
        height: 682.625px;

    }

    .content_tab_i{
        overflow:auto;
        height: 619px;
    }

    .content_itinerarios {
        width: 973px;
        height: 688px;
        position: relative;
    }

    #content_result {
        width: 937px;
    }

</style> 
<script>

    var id_cita = 0;

    function style_() {
        $("#ui-datepicker-div").css('z-index', '100000');
    }

    function add_time_limite(id, time) {
        id_cita = id;
        $("#dialog-add-limite").dialog('open');
    }

    $(function() {

        $("#form_agenda_user").validate({
            errorElement: "div",
            rules: {
                fecha1: {required: true}, fecha: {required: true},
                fecha2: {required: true}, fecha:{required: true}
            },
            messages: {
                fecha1: {required: 'Seleccione fecha'},
                fecha2: {required: 'Seleccione fecha'}
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        $("#fecha1").datepicker({
            dateFormat: "yy-mm-dd",
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3,
            onClose: function(selectedDate) {
                $("#fecha2").datepicker("option", "minDate", selectedDate);
            }
        });
        $("#fecha2").datepicker({
            dateFormat: "yy-mm-dd",
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3,
            onClose: function(selectedDate) {
                $("#fecha1").datepicker("option", "maxDate", selectedDate);
            }
        });

        $("#dialog-add-limite").dialog({
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
                    window.location.replace("index.php?option=view_u&acc=<?php echo $_REQUEST['acc'] ?>&id_acc=" + id_cita + '&acc_opt=darlimite&fecha1=<?php echo $_REQUEST['fecha1'] ?>&fecha2=<?php echo $_REQUEST['fecha2'] ?>');
                    $(this).dialog("close");
                }
            }
        });


        $("#tabs").tabs();

    })

</script>
<?php
$pagina = @$_REQUEST["pagina"];
$registros = 19;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $registros;
}
?>

<div id="content_welcome" style="overflow-y:auto;" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
    <form action="index.php?option=view_u&acc=<?php echo $_REQUEST['acc'] ?>" method="POST" class="form_agenda_user" name="form_agenda_user" id="form_agenda_user" >
        <table>

            <tbody><tr>

                    <td valign="top">

                        <label>Fecha Inicio</label>
                        <br>
                        <input type="text" name="fecha1" id="fecha1" onclick="style_()" class="input_txt fecha" value="<?php echo @$_REQUEST['fecha1']; ?>" readonly="readonly">


                    </td>

                    <td valign="top">

                        <label>Fecha Fin</label>
                        <br>
                        <input type="text" name="fecha2" id="fecha2" onclick="style_()" class="input_txt fecha" value="<?php echo @$_REQUEST['fecha2']; ?>" readonly="readonly">


                    </td>

                    <td valign="top">

                        <label>Omitir cancelados</label>
                        <br>
                        <input type="checkbox" name="ocancel" id="ocancel" <?php echo @$checked ?> value="true" />
                    </td>

                    <td valign="top">

                        <button >Aceptar</button>

                    </td>

                </tr>

            </tbody>
        </table>
    </form>
    <div class="content_itinerarios" id="content_itinerarios">

        <?php
        if ($_SESSION['rol'] == 'ADMINISTRADOR') {
            $sql = "select * from usuario where identificacion = " . $_REQUEST['acc'];
        } else {
            $sql = "select * from usuario where id_usuario = " . $_SESSION['id_usuario'];
        }
        $result = $conexion->EjecutarQuery($sql);
        $row_u = mysql_fetch_array($result);


        $sql = "Select eps.nombre as eps, c.*,p.*,pr.nombre as proceso
                        from eps inner join paciente as p
                        on p.id_eps = eps.id_eps
                        inner join  cita as c
                        on p.historia = c.id_paciente inner join proceso as pr
                        on c.id_proceso = pr.id_proceso
                        where c.id_usuario=" . $row_u['id_usuario'] . " 
                        and c.fecha  between '" . $_REQUEST['fecha1'] . "' and '" . $_REQUEST['fecha2'] . "'
                        $where
                        order by c.fecha_hora_inicio asc";


        $resultados = $conexion->EjecutarQuery($sql);
        $total_registros = mysql_num_rows($resultados);
        $sql_search = "$sql LIMIT $inicio, $registros";
        $resultados = $conexion->EjecutarQuery($sql_search);
        $total_paginas = ceil($total_registros / $registros);


        $result_c = $conexion->EjecutarQuery($sql);
        $id_cita = '';
        $fecha_hora_limite = '0000-00-00 00:00:00';
        $style_c = '';

        $return .= '<div id="tabs">';
        $return .= '<ul>';
        $return .= '<li><a href="#tabs-1" id="tabs-0" >Citas</a></li>';
        $return .= '<li><a href="#tabs-2" id="tabs-0" >Resumen</a></li>';
        $return .= '</ul>';


        $return .= '<div id="tabs-2">';
        $return .= '<div id="content_result_2">';
        $return .= '<h3>' . $row_u['registro_medico'] . ' | ' . $row_u['nombre'] . ' ' . $row_u['apellido'] . '</h3>';
        $return .= '<h4>Fechas de busqueda: ' . $_REQUEST['fecha1'] . ' - ' . $_REQUEST['fecha2'] . '</h4>';

        $sql = "Select count(*) from cita where  id_usuario = " . $row_u['id_usuario'] . " and fecha  between '" . $_REQUEST['fecha1'] . "' and '" . $_REQUEST['fecha2'] . "' and estado='PROGRAMADO';";
        $result_c = $conexion->EjecutarQuery($sql);
        $row_c = mysql_fetch_array($result_c);

        $return .= '<h4>Citas programadas: ' . $row_c[0] . '</h4>';

        $sql = "Select count(*) from cita where id_usuario = " . $row_u['id_usuario'] . " and fecha  between '" . $_REQUEST['fecha1'] . "' and '" . $_REQUEST['fecha2'] . "' and estado='PROCESO';";
        $result_c = $conexion->EjecutarQuery($sql);
        $row_c = mysql_fetch_array($result_c);

        $return .= '<h4>Citas en proceso: ' . $row_c[0] . '</h4>';

        $sql = "Select count(*) from cita where id_usuario = " . $row_u['id_usuario'] . " and fecha  between '" . $_REQUEST['fecha1'] . "' and '" . $_REQUEST['fecha2'] . "' and estado='FINALIZADO';";
        $result_c = $conexion->EjecutarQuery($sql);
        $row_c = mysql_fetch_array($result_c);

        $return .= '<h4>Citas finalizadas: ' . $row_c[0] . '</h4>';

        $sql = "Select count(*) from cita where id_usuario = " . $row_u['id_usuario'] . " and fecha  between '" . $_REQUEST['fecha1'] . "' and '" . $_REQUEST['fecha2'] . "' and estado='CANCELADO';";
        $result_c = $conexion->EjecutarQuery($sql);
        $row_c = mysql_fetch_array($result_c);

        $return .= '<h4>Citas canceladas: ' . $row_c[0] . '</h4>';


        $sql = "Select count(*) from cita where id_usuario = " . $row_u['id_usuario'] . " and fecha  between '" . $_REQUEST['fecha1'] . "' and '" . $_REQUEST['fecha2'] . "';";
        $result_c = $conexion->EjecutarQuery($sql);
        $row_c = mysql_fetch_array($result_c);

        $return .= '<h4>Total: ' . $row_c[0] . '</h4>';

        $return .= '<a href="#" onClick=\'imprSelec("content_result_2")\' >Imprimir</a>';

        $return .= '</div>';
        $return .= '</div>';

        $return .= '<div id="tabs-1">';
        $return .= '<div id="content_result">';
        $return .= '<h3>' . $row_u['registro_medico'] . ' | ' . $row_u['nombre'] . ' ' . $row_u['apellido'] . '</h3>';
        $return .= '<table border="0" cellspacing="0" cellpading="0" class="data" width="100%">';
        $return .= '<tr class="row1">';

        $return .= '<th>Hora</th>';
        $return .= '<th>Proceso</th>';
        $return .= '<th>Paciente</th>';
        $return .= '<th>Eps</th>';
        $return .= '<th>Tipo</th>';
        $return .= '<th>Estado</th>';


        $return .= '</tr>';
        if ($total_registros) {
            while ($row_c = mysql_fetch_array($resultados)) {
                $click = "";
                $id_cita = $row_c['id_cita'];
                $fecha_hora_limite = $row_c['fecha_hora_limite'];
                if ($row_c['estado'] == 'PROGRAMADO') {
                    $style_c = 'programado';
                } else if ($row_c['estado'] == 'PROCESO') {
                    $style_c = 'proceso';
                    $fecha_hora_ya = Date("Y-m-d H:i:s");
                    $diff = Utils::getCountHours($fecha_hora_limite, $fecha_hora_ya);
                    if ($diff <= Utils::$_horas_limite_cita) {
                        //$click = "onclick='alert(\"si $diff\")'";
                    } else {
                        $style_c = 'proceso_n';
                        if ($_SESSION['rol'] == 'ADMINISTRADOR') {
                            $click = "onclick='add_time_limite($id_cita,\"$diff\")'";
                        }
                    }
                } else if ($row_c['estado'] == 'FINALIZADO') {
                    $style_c = 'finalizado';
                } else if ($row_c['estado'] == 'CANCELADO') {
                    $style_c = 'cancelado';
                }

                $return .= '<tr class="' . $style_c . '" ' . $click . ' >';

                $return .= '<td align="center">' . $row_c['fecha'] . ' (' . substr($row_c['fecha_hora_inicio'], 10, 20) . '/' . substr($row_c['fecha_hora_fin'], 10, 20) . ')</td>';
                $return .= '<td align="center">' . $row_c['proceso'] . '</td>';
                $return .= '<td align="center">' . $row_c['identificacion'] . ' - ' . $row_c['nombre1'] . ' ' . $row_c['apellido1'] . ' ' . $row_c['nombre2'] . '</td>';
                $return .= '<td align="center">' . $row_c['eps'] . '</td>';
                $return .= '<td align="center">' . $row_c['tipo_cita'] . '</td>';
                $return .= '<td align="center">' . $row_c['estado'] . '</td>';


                $return .= '</tr>';
            }
        } else {
            echo "<font color='darkgray'>(sin resultados)</font>";
        }


        $return .= '</table></div>';
        echo $return;
        ?>



        <a href='#' onClick='imprSelec("content_result")' >Imprimir</a><?php
        //mysql_free_result($resultados);				




        if ($total_registros) {

            $term_link = 'fecha1=' . $_REQUEST['fecha1'] . "&fecha2=" . $_REQUEST['fecha2'] . '&ocancel=' . $vche;

            echo "<center>";

            if (($pagina - 1) > 0) {
                echo "<a href='?option=view_u&acc=" . $_REQUEST['acc'] . "&pagina=" . ($pagina - 1) . "&$term_link'>< Anterior</a> ";
            }

            for ($i = 1; $i <= $total_paginas; $i++) {
                if ($pagina == $i)
                    echo "<b>" . $pagina . "</b> ";
                else
                    echo "<a href='?option=view_u&acc=" . $_REQUEST['acc'] . "&pagina=$i&$term_link'>$i</a> ";
            }

            if (($pagina + 1) <= $total_paginas) {
                echo " <a href='?option=view_u&acc=" . $_REQUEST['acc'] . "&pagina=" . ($pagina + 1) . "&$term_link'>Siguiente ></a>";
            }

            echo "</center>";
        }

        echo "</div>";
        echo "</div>";
        ?>

    </div>  

</div>

<div id="dialog-add-limite" title="Dar acceso">


    <p>

        Esta cita no se pudo evolucionar, quieres habilitarlo para que el profecional lo finalice ?
        Si aceptas el profecional tendra <?php echo Utils::$_horas_limite_cita ?> horas para  terminar el 
        proceso.

    </p>


</div>

<script>

    $(function() {

        $("#ui-datepicker-div").css('display', 'none');

    })

</script>