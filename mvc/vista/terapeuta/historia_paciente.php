<?php

$sql = "Select c.*,p.nombre as proceso,pc.*,pc.nombre1,pc.nombre2,pc.apellido1,pc.apellido2,pc.identificacion as identificacion_p from cita as c 
                inner join proceso as p 
                on c.id_proceso = p.id_proceso
                inner join paciente as pc
                on c.id_paciente = pc.historia
                where c.id_cita = " . $_REQUEST['acc_c'];

$result = $conexion->EjecutarQuery($sql);
$row = mysql_fetch_array($result);

$fecha_hora_ya = Date("Y-m-d H:i:s");
$diff = Utils::getCountHours($row['fecha_hora_limite'], $fecha_hora_ya);
if ($row['estado'] == 'FINALIZADO' || ($row['estado'] == 'PROCESO' && $diff <= Utils::$_horas_limite_cita)) {

    @$action_form_paciente = 'index.php?option=init_cita&acc_c=' . @$_REQUEST['acc_c'];
    @$_REQUEST['proceso'] = $row['proceso'] . ' | ';
    @$_REQUEST['proceso'] = $row['proceso'];
    @$_REQUEST['proceso'] = $row['proceso'];
    @$_REQUEST['proceso'] = $row['proceso'];
    @$_REQUEST['proceso'] = $row['proceso'];

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
}
?>