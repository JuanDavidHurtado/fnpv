<?php

echo "<h3>Valoracion Terapia Ocupacional Neurodesarrollo</h3><br>";

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/neuro_nino/';

@$action_form_vinicial = @$action_form_paciente;

/**/
//
include ($path.'neuroterapiaocupacional/antecedentes.php');
$_REQUEST['id_formulario'] = 100;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
//
include ($path.'neuroterapiaocupacional/observaciones_neuromusculares.php');
$_REQUEST['id_formulario'] = 101;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neuroterapiaocupacional/funcionalidad.php');
$_REQUEST['id_formulario'] = 102;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neuroterapiaocupacional/patrones.php');
$_REQUEST['id_formulario'] = 103;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
/*
include ($path.'neuroterapiaocupacional/esquema_corporal.php');
$_REQUEST['id_formulario'] = 104;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
*/

include ($file);
//
include ($path.'neuroterapiaocupacional/equilibrio.php');
$_REQUEST['id_formulario'] = 105;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neuroterapiaocupacional/percepcion_espacial.php'); 
$_REQUEST['id_formulario'] = 106;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neuroterapiaocupacional/constancia_perceptual.php');
$_REQUEST['id_formulario'] = 107;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neuroterapiaocupacional/haptica.php');
$_REQUEST['id_formulario'] = 108;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neuroterapiaocupacional/sensopercepcion.php');
$_REQUEST['id_formulario'] = 109;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neuroterapiaocupacional/motricidad_fina.php');
$_REQUEST['id_formulario'] = 110;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neuroterapiaocupacional/procesos_mentales.php');
$_REQUEST['id_formulario'] = 111;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'neuroterapiaocupacional/cotidianidad.php');
$_REQUEST['id_formulario'] = 112;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//

?>
