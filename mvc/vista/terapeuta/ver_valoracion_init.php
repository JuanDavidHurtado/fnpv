<?php

$sql = "SELECT c . * , p.nombre  AS proceso, p.id_dependencia, pc . * , pc.nombre1, pc.nombre2, pc.apellido1, pc.apellido2, pc.identificacion AS identificacion_p
FROM valoracion_inicial_ AS vi
INNER JOIN cita AS c ON vi.id_cita = c.id_cita
INNER JOIN proceso AS p ON c.id_proceso = p.id_proceso
INNER JOIN paciente AS pc ON c.id_paciente = pc.historia
WHERE vi.id_valoracion_inicial_ = " . $_REQUEST['id_vinicial'];

$result = $conexion->EjecutarQuery($sql);
$row = mysql_fetch_array($result);

$fecha_hora_ya = Date("Y-m-d H:i:s");
$diff = Utils::getCountHours($row['fecha_hora_limite'], $fecha_hora_ya);

//echo $row['estado'].' Estado <br>';
//echo $diff .' - '. Utils::$_horas_limite_cita.' -- <br>';

@$action_form_paciente = 'index.php?option=init_cita_&acc_c=' . @$_REQUEST['acc_c'] . '&id_vinicial=' . @$_REQUEST['id_vinicial'];
@$_REQUEST['proceso'] = $row['proceso'] . ' | ';
@$_REQUEST['nombre1'] = $row['nombre1'];
@$_REQUEST['nombre2'] = $row['nombre2'];
@$_REQUEST['apellido1'] = $row['apellido1'];
@$_REQUEST['apellido2'] = $row['apellido2'];
@$_REQUEST['identificacion'] = $row['identificacion'];

//@$_REQUEST['id_cita'] = @$_REQUEST['acc_c'];
@$_REQUEST['id_usuario'] = $_SESSION['id_usuario'];
@$_REQUEST['id_dependencia'] = $row['id_dependencia'];
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
?>