<?php
echo "<h3>Valoracion Fisioterapia Neurodesarrollo</h3><br>";

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/neuro_nino/';

@$action_form_vinicial = @$action_form_paciente;

/**/
//
include ($path.'neurodesarrollo/observacion_general.php');
$_REQUEST['id_formulario'] = 80;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neurodesarrollo/examen_fisico.php');
$_REQUEST['id_formulario'] = 81;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neurodesarrollo/evaluacion_por_sistemas1.php');
$_REQUEST['id_formulario'] = 82;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neurodesarrollo/evaluacion_por_sistemas2.php');
$_REQUEST['id_formulario'] = 83;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neurodesarrollo/evaluacion_por_sistemas3.php');
$_REQUEST['id_formulario'] = 84;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neurodesarrollo/evaluacion_por_sistemas_reflejos1.php');
$_REQUEST['id_formulario'] = 85;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neurodesarrollo/evaluacion_por_sistemas_reflejos2.php');
$_REQUEST['id_formulario'] = 86;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neurodesarrollo/evaluacion_por_sistemas_sensibilidad.php');
$_REQUEST['id_formulario'] = 87;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neurodesarrollo/evaluacion_postular.php');
$_REQUEST['id_formulario'] = 88;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neurodesarrollo/examen_postular_plano_anterior.php');
$_REQUEST['id_formulario'] = 89;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neurodesarrollo/examen_postular_plano_lateral.php');
$_REQUEST['id_formulario'] = 90;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neurodesarrollo/examen_postular_plano_posterior.php');
$_REQUEST['id_formulario'] = 91;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neurodesarrollo/mecanismo_control_postular.php');
$_REQUEST['id_formulario'] = 92;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neurodesarrollo/evaluacion_marcha.php');
$_REQUEST['id_formulario'] = 93;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neurodesarrollo/conclusiones.php');
$_REQUEST['id_formulario'] = 94;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neurodesarrollo/recomendaciones.php');
$_REQUEST['id_formulario'] = 95;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
?>
