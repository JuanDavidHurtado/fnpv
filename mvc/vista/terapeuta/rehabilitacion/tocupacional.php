<div id="terapia_ocup">
<?php
echo "<h3>Rehabilitacion - Valoracion terapia ocupacional</h3><br>";

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/rehabilitacion/tocupacional/';

@$action_form_tlo_integrales_finos = @$action_form_paciente;
include ($path.'form_rto_integrales_finos.php');
$_REQUEST['id_formulario'] = 27;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);


@$action_form_rto_integrales_gruesos = @$action_form_paciente;
include ($path.'form_rto_integrales_gruesos.php');
$_REQUEST['id_formulario'] = 28;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);


@$action_form_rto_integrales_funcionales = @$action_form_paciente;
include ($path.'form_rto_integrales_funcionales.php');
$_REQUEST['id_formulario'] = 29;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);


@$action_form_rto_sistema_tactil = @$action_form_paciente;
include ($path.'form_rto_sistema_tactil.php');
$_REQUEST['id_formulario'] = 30;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);


@$action_form_rto_sistema_prioceptivo = @$action_form_paciente;
include ($path.'form_rto_sistema_prioceptivo.php');
$_REQUEST['id_formulario'] = 31;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);


@$action_form_rto_sistema_vestibular = @$action_form_paciente;
include ($path.'form_rto_sistema_vestibular.php');
$_REQUEST['id_formulario'] = 32;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);


@$action_form_rto_sistema_visual = @$action_form_paciente;
include ($path.'form_rto_sistema_visual.php');
$_REQUEST['id_formulario'] = 33;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);


@$action_form_rto_constancia_perceptual = @$action_form_paciente;
include ($path.'form_rto_constancia_perceptual.php');
$_REQUEST['id_formulario'] = 34;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);


@$action_form_rto_percepcion_espacial = @$action_form_paciente;
include ($path.'form_rto_percepcion_espacial.php');
$_REQUEST['id_formulario'] = 35;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);


@$action_form_rto_percepcion_tempoespacial = @$action_form_paciente;
include ($path.'form_rto_percepcion_tempoespacial.php');
$_REQUEST['id_formulario'] = 36;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);


@$action_form_rto_percepcion_corporal = @$action_form_paciente;
include ($path.'form_rto_percepcion_corporal.php');
$_REQUEST['id_formulario'] = 37;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);


@$action_form_rto_actividades_diarias = @$action_form_paciente;
include ($path.'form_rto_actividades_diarias.php');
$_REQUEST['id_formulario'] = 38;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);


?>
</div>
<br>
<a href='#' onclick='imprSelec("terapia_ocup", true)' class="no_print">Imprimir formulario</a>