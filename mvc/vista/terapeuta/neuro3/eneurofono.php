<?php


echo "<h3>Valoracion Fonoaudiologia Neurorehabilitacion</h3><br>";

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/neuro/';

@$action_form_vinicial = @$action_form_paciente;

/**/
//
include ($path.'eneurofono/antecedentes.php');
$_REQUEST['id_formulario'] = 39;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurofono/funciones_alimentacion.php');
$_REQUEST['id_formulario'] = 40;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurofono/funcion_comunicativa.php');
$_REQUEST['id_formulario'] = 41;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurofono/funciones_mentales.php');
$_REQUEST['id_formulario'] = 42;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

?>
