<?php

echo "<h3>Valoracion Fisioterapia Neuroreahbilitacion</h3><br>";

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/neuro/';

@$action_form_vinicial = @$action_form_paciente;

/**/
//
include ($path.'eneurologicaadulto/glasgow.php');
$_REQUEST['id_formulario'] = 43;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/barthel.php');
$_REQUEST['id_formulario'] = 44;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//Grupo de nervios

echo "<h3>Evaluacion de pares craneales</h3><br>";

include ($path.'eneurologicaadulto/nervio_olfatorio.php');
$_REQUEST['id_formulario'] = 45;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/nervio_optico.php');
$_REQUEST['id_formulario'] = 46;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/nervio_oculomotor_etc.php');
$_REQUEST['id_formulario'] = 47;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/nervio_trigemino.php');
$_REQUEST['id_formulario'] = 48;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/nervio_facial.php');
$_REQUEST['id_formulario'] = 49;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/nervio_vestibulo_coclear.php');
$_REQUEST['id_formulario'] = 50;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/nervio_glosofaringeo.php');
$_REQUEST['id_formulario'] = 51;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/nervio_espinal.php');
$_REQUEST['id_formulario'] = 52;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/nervio_hipogloso.php');
$_REQUEST['id_formulario'] = 53;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

//------------------------------------------------------------

include ($path.'eneurologicaadulto/ner_fuerza_muscular.php');
$_REQUEST['id_formulario'] = 54;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/fenomenos_neuromusculares_anormales.php');
$_REQUEST['id_formulario'] = 55;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/reflejos_respuestas_patologicas.php');
$_REQUEST['id_formulario'] = 56;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/reflejos_superficiales_profundos.php');
$_REQUEST['id_formulario'] = 57;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/sencibilidad_superficial_profunda.php');
$_REQUEST['id_formulario'] = 58;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/evaluacion_mano.php');
$_REQUEST['id_formulario'] = 59;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/reacciones_equilibrio_protectivas.php');
$_REQUEST['id_formulario'] = 60;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/examen_postular_plano_anterior.php');
$_REQUEST['id_formulario'] = 61;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/examen_postular_plano_lateral.php');
$_REQUEST['id_formulario'] = 62;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/examen_postular_plano_posterior.php');
$_REQUEST['id_formulario'] = 63;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/ner_evaluacion_marcha.php'); 
$_REQUEST['id_formulario'] = 64;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/tabla1.php');
$_REQUEST['id_formulario'] = 65;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//
include ($path.'eneurologicaadulto/tabla2.php');
$_REQUEST['id_formulario'] = 67;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);
//

?>
