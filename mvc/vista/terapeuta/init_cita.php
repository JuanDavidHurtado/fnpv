<?php
$sql = "Select p.id_dependencia from proceso as p 
                inner join cita as c 
                on c.id_proceso = p.id_proceso
                where c.id_cita = '" . $_REQUEST['acc_c'] . "' ";
$result_idp = $conexion->EjecutarQuery($sql);
$row_idd = mysql_fetch_array($result_idp);
$_REQUEST['id_dependencia'] = $row_idd[0];

$sql = "Select c.*,p.nombre as proceso,pc.*,pc.nombre1,pc.nombre2,pc.apellido1,pc.apellido2,pc.identificacion as identificacion_p from cita as c 
                inner join proceso as p 
                on c.id_proceso = p.id_proceso
                inner join paciente as pc
                on c.id_paciente = pc.historia
                where c.id_cita = " . $_REQUEST['acc_c'];

$result = $conexion->EjecutarInsert($sql);
$row = mysql_fetch_array($result);

$fecha_hora_ya = Date("Y-m-d H:i:s");
$diff = Utils::getCountHours($row['fecha_hora_limite'], $fecha_hora_ya);

//echo $row['estado'].' Estado <br>';
//echo $diff .' - '. Utils::$_horas_limite_cita.' -- <br>';

if ($row['estado'] == 'FINALIZADO' || ($row['estado'] == 'PROCESO' && $diff <= Utils::$_horas_limite_cita)) {

    @$action_form_paciente = 'index.php?option=init_cita_&acc_c=' . @$_REQUEST['acc_c'] . '&id_vinicial=' . @$_REQUEST['id_vinicial'];
    @$_REQUEST['proceso'] = $row['proceso'] . ' | ';
    @$_REQUEST['nombre1'] = $row['nombre1'];
    @$_REQUEST['nombre2'] = $row['nombre2'];
    @$_REQUEST['apellido1'] = $row['apellido1'];
    @$_REQUEST['apellido2'] = $row['apellido2'];
    @$_REQUEST['identificacion'] = $row['identificacion'];

    @$_REQUEST['id_cita'] = @$_REQUEST['acc_c'];
    @$_REQUEST['id_usuario'] = $_SESSION['id_usuario'];
    @$_REQUEST['id_proceso'] = $row['id_proceso'];
    @$_REQUEST['historia'] = $row['id_paciente'];
    @$_REQUEST['nota_s'] = $row['nota'];
    @$_REQUEST['estado'] = $row['estado'];
    @$_REQUEST['fecha_hora_limite'] = $row['fecha_hora_limite'];

    @$_REQUEST['antecedentes_f'] = $row['antecedentes_familiares'];
    @$_REQUEST['antecedente_p'] = $row['antecedente_patologico'];
    @$_REQUEST['antecedente_t'] = $row['antecedente_traumatico'];
    @$_REQUEST['antecedente_q'] = $row['antecedente_quirurgico'];
    @$_REQUEST['antecedente_f'] = $row['antecedente_farmacologico'];
    @$_REQUEST['antecedente_to'] = $row['antecedente_toxico'];

    @$_REQUEST['antecedente_odo'] = $row['antecedente_odontologico'];

    include(Utils::getFtpRuta() . 'mvc/vista/terapeuta/datos_historia.php');
} else {
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

    </style> 
    <div id="content_welcome" style="overflow-y:auto;" class="ui-tabs ui-widget ui-widget-content ui-corner-all">

        <h2>
            <div class="msg ui-state-error ui-corner-all" style="padding: 0 .7em;"> 
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
                    No tiene acceso a este modulo solicite permiso al Administrador.!.</div>
            </p>
        </h2>

    </div>


    <?php
}
?>