<div id="terapia_fisica">
<?php



echo "<h3>Rehabilitacion - Valoracion terapia fisica</h3><br>";

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/rehabilitacion/tfisica/';

//form Sistema cardiopulmonar
@$action_form_scp = @$action_form_paciente;
include ($path.'form_sistema_cardiovascular.php');
$_REQUEST['id_formulario'] = 1;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

//form Sistema neurologico
@$action_form_sn = @$action_form_paciente;
include ($path.'form_sistema_neurologico.php');
$_REQUEST['id_formulario'] = 2;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

//form Sistema reflejos
@$action_form_reflejos = @$action_form_paciente;
include ($path.'form_rtf_reflejos.php');
$_REQUEST['id_formulario'] = 3;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

//form Sistema vista anterior
@$action_form_vista_anterior = @$action_form_paciente;
include ($path.'form_rtf_vista_anterior.php');
$_REQUEST['id_formulario'] = 4;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

//form Sistema vista posterior
@$action_form_vista_posterior = @$action_form_paciente;
include ($path.'form_rtf_vista_posterior.php');
$_REQUEST['id_formulario'] = 5;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

//form Sistema vista lateral
@$action_form_vista_lateral = @$action_form_paciente;
include ($path.'form_rtf_vista_lateral.php');
$_REQUEST['id_formulario'] = 6;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

//form Sistema sensibilidad
@$action_form_sensibilidad = @$action_form_paciente;
include ($path.'form_rtf_sensibilidad.php');
$_REQUEST['id_formulario'] = 7;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

//form Sistema priocepcion
@$action_form_priocepcion = @$action_form_paciente;
include ($path.'form_rtf_propiocepcion.php');
$_REQUEST['id_formulario'] = 8;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

//form Sistema priocepcion
@$action_form_rtf_dolor = @$action_form_paciente;
include ($path.'form_rtf_dolor.php');
$_REQUEST['id_formulario'] = 9;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

//formarcos_movilidad_articulada
@$action_form_rtf_arcos_movilidad_articulada = @$action_form_paciente;
include ($path.'form_rtf_arcos_movilidad_articulada.php');
$_REQUEST['id_formulario'] = 10;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

//form fuerza muscular
@$action_form_rtf_fuerza_muscular = @$action_form_paciente;
include ($path.'form_rtf_fuerza_muscular.php');
$_REQUEST['id_formulario'] = 11;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

//form fuerza muscular
@$action_form_rtf_equilibrio = @$action_form_paciente;
include ($path.'form_rtf_equilibrio.php');
$_REQUEST['id_formulario'] = 12;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

//form fuerza retracciones
@$action_form_rtf_retracciones = @$action_form_paciente;
include ($path.'form_rtf_retracciones.php');
$_REQUEST['id_formulario'] = 13;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

//form fuerza sistema tegumentario
@$action_form_rtf_sistema_tegumentario = @$action_form_paciente;
include ($path.'form_rtf_sistema_tegumentario.php');
$_REQUEST['id_formulario'] = 14;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);



?>
</div>
<br>
<a href='#' onclick='imprSelec("terapia_fisica", true)' class="no_print">Imprimir formulario</a>