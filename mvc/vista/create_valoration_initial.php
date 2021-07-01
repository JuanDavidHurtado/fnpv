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
        overflow:auto;
        width: 100%;
        height: 688px;
        position: relative;
    }

    .arrow-c {
        width: 25px;
        height: 16px;
        background-repeat: no-repeat;
        background-image:url(<?php echo Utils::$http_ruta . "mvc/vista/imagenes/arrow-c.png"; ?>);
        float: left;
        margin-right: 5px;
        cursor: pointer;
        zoom: 70%;
        margin-top: 5px;
    }

    .arrow-o {
        width: 25px;
        height: 16px;
        background-repeat: no-repeat;
        background-image:url(<?php echo Utils::$http_ruta . "mvc/vista/imagenes/arrow-o.png"; ?>);
        float: left;
        margin-right: 5px;
        cursor: pointer;
        zoom: 70%;
        margin-top: 5px;
        display: none;
    }

    .ui-widget {
        cursor: pointer;
    }

</style> 
<script>
    $(function() {
        $("#add").button({
            icons: {
                primary: "ui-icon-plus"
            }
        }).click(function() {
            window.location.replace('?option=init_cita&acc_c=<?php echo $_REQUEST['acc_c'] ?>&create');
        });
    });

    function verValoracion(id) {
        window.location.replace('?option=init_cita_&acc_c=<?php echo $_REQUEST['acc_c'] ?>&id_vinicial='+id);
    }

</script>
<div id="content_welcome" style="overflow-y:auto;" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
    <?php
    echo "<h3>" . @$_REQUEST['proceso'] . @$_REQUEST['historia'] . " : " . @$_REQUEST['nombre1'] . " " . @$_REQUEST['nombre2'] . " " . @$_REQUEST['apellido1'] . " " . @$_REQUEST['apellido2'] . "</h3>";
    ?>
    <?php
    echo $sql_count = "Select count(*) from valoracion_inicial_ where  id_cita = '" . $_REQUEST['id_cita'] . "' ";
    $rcant = $conexion->EjecutarQuery($sql_count);
    $cantidad = mysql_fetch_array($rcant);
	
	echo "<pre>";
	print_r($cantidad);
	echo "</pre>";
	
	
    if ($cantidad[0] == 0) {
        ?>
        <button id="add">Crear valoracion inicial.</button>
        <br>
        <br>
        <?php
    }
    ?>

    <?php
    $sql = "select * from valoracion_inicial_ where historia = '" . @$_REQUEST['historia'] . "' and id_proceso='".@$_REQUEST['id_proceso']."' order by  id_valoracion_inicial_ desc ";
    $result = $conexion->EjecutarQuery($sql);

    $bool_ = true;
    while ($row = mysql_fetch_array($result)) {
        if ($bool_) {
            $type = 'highlight';
            $bool_ = false;
        } else {
            $type = 'default';
        }

        $sql = "Select d.nombre as dependencia, p.nombre as proceso from proceso as p inner join dependencia as d on p.id_dependencia = d.id_dependencia
                where p.id_proceso = '" . $row['id_proceso'] . "' ";
        $res = $conexion->EjecutarQuery($sql);
        $row1 = mysql_fetch_array($res);
        ?>
        <div class="ui-widget" onclick="verValoracion(<?php echo $row['id_valoracion_inicial_']; ?>)">
            <div class="ui-state-<?php echo $type ?> ui-corner-all" style="margin-top: 10px; padding: 0 .7em;">
                <p><span class="ui-icon ui-icon-zoomin" style="float: left; margin-right: .3em;"></span>
                    <strong><?php echo $row1['dependencia'] . ' - ' . $row1['proceso'] . ' | ' . $row['id_valoracion_inicial_'] . ' | ' . $row['fecha'] . ' - ' ?></strong> Dar Click para llenar ficha !</p>
            </div>
        </div>   
        <?php
    }
    ?>
    <!--<div class="ui-widget">
        <div class="ui-state-highlight ui-corner-all" style="margin-top: 10px; padding: 0 .7em;">
            <p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
                <strong>Hey!</strong> Sample ui-state-highlight style.</p>
        </div>
    </div>
    <div class="ui-widget">
        <div class="ui-state-default ui-corner-all" style="margin-top: 10px; padding: 0 .7em;">
            <p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
                <strong>Hey!</strong> Sample ui-state-highlight style.</p>
        </div>
    </div>-->

</div>