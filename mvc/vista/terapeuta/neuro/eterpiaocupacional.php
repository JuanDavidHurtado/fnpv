<?php
echo "<h3>Valoracion Terapia Ocupacional Neuroreahbilitacion</h3><br>";

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/neuro/';

@$action_form_vinicial = @$action_form_paciente;

/**/
//
include ($path.'eterpiaocupacional/antecedentes.php');
$_REQUEST['id_formulario'] = 68;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eterpiaocupacional/observaciones_neuromusculares.php');
$_REQUEST['id_formulario'] = 69;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
// funcionalidad
include ($path.'eterpiaocupacional/funcionalidad.php');
$_REQUEST['id_formulario'] = 70;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eterpiaocupacionalcomun/patrones.php'); 
$_REQUEST['id_formulario'] = 71;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
// --------------

/*
include ($path.'eterpiaocupacionalcomun/esquema_corporal.php');
$_REQUEST['id_formulario'] = 72;*
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
 * 
 */

//
include ($path.'eterpiaocupacionalcomun/equilibrio.php');
$_REQUEST['id_formulario'] = 73;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eterpiaocupacionalcomun/percepcion_espacial.php');
$_REQUEST['id_formulario'] = 74;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eterpiaocupacionalcomun/constancia_perceptual.php');
$_REQUEST['id_formulario'] = 75;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eterpiaocupacionalcomun/haptica.php');
$_REQUEST['id_formulario'] = 76;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eterpiaocupacionalcomun/sensopercepcion.php');
$_REQUEST['id_formulario'] = 77;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eterpiaocupacionalcomun/motricidad_fina.php');
$_REQUEST['id_formulario'] = 78;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eterpiaocupacionalcomun/procesos_mentales.php');
$_REQUEST['id_formulario'] = 79;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eterpiaocupacionalcomun/cotidianidad.php');
$_REQUEST['id_formulario'] = 80;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//


?>
