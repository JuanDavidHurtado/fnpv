<?php

$bool_paciente = false;
$msg = '';
if (isset($_REQUEST['identificacion'])) {
    $sql = "Select * from paciente where identificacion = " . $_REQUEST['identificacion'];
    $result = $conexion->EjecutarQuery($sql);
    $msg = '<div class="msg ui-state-error ui-corner-all" style="padding: 0 .7em;"> 
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
		Paciente no encontrado!.</div>
            </p>';

    while ($row = mysql_fetch_array($result)) {
        $msg = '';
        $bool_paciente = true;
        break;
    }
}

if ($bool_paciente) {

    @$action_form_paciente = 'index.php?option=historia&identificacion=' . @$_REQUEST['identificacion'];
    @$_REQUEST['proceso'] = 'HISTORIA CLINICA | ';
    @$_REQUEST['nombre1'] = $row['nombre1'];
    @$_REQUEST['nombre2'] = $row['nombre2'];
    @$_REQUEST['apellido1'] = $row['apellido1'];
    @$_REQUEST['apellido2'] = $row['apellido2'];

    //@$_REQUEST['id_cita'] = @$_REQUEST['acc_c'];
    @$_REQUEST['id_usuario'] = $_SESSION['id_usuario'];
    @$_REQUEST['id_proceso'] = 0;
    @$_REQUEST['historia'] = $row['historia'];
    //@$_REQUEST['nota_s'] = $row['nota'];
    //@$_REQUEST['estado'] = $row['estado'];
    //@$_REQUEST['fecha_hora_limite'] = $row['fecha_hora_limite'];

    @$_REQUEST['antecedentes_f'] = $row['antecedentes_familiares'];
    @$_REQUEST['antecedente_p'] = $row['antecedente_patologico'];
    @$_REQUEST['antecedente_t'] = $row['antecedente_traumatico'];
    @$_REQUEST['antecedente_q'] = $row['antecedente_quirurgico'];
    @$_REQUEST['antecedente_f'] = $row['antecedente_farmacologico'];
    @$_REQUEST['antecedente_to'] = $row['antecedente_toxico'];

    @$_REQUEST['antecedente_odo'] = $row['antecedente_odontologico'];


    include(Utils::getFtpRuta() . 'mvc/vista/terapeuta/ver_valoration_initial.php');
    //include(Utils::getFtpRuta().'mvc/vista/terapeuta/datos_historia.php');   
} else {

    include(Utils::getFtpRuta() . 'mvc/vista/terapeuta/verificar_historia.php');
}
?>