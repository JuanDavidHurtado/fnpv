<?php

echo "<h3>Valoracion Fonoaudiologia Neurodesarrollo</h3><br>";

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/neuro_nino/';

@$action_form_vinicial = @$action_form_paciente;

/**/
//
include ($path.'neurofono/antecedentes.php');
$_REQUEST['id_formulario'] = 96;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
//
include ($path.'neurofono/funciones_alimentacion.php');
$_REQUEST['id_formulario'] = 97;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
//
include ($path.'neurofono/funcion_comunicativa.php');
$_REQUEST['id_formulario'] = 98;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
//
include ($path.'neurofono/funciones_mentales.php');
$_REQUEST['id_formulario'] = 99;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//

?>
