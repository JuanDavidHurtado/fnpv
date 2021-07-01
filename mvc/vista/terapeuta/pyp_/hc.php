<?php


echo "<h3>HISTORIA CLINICA</h3><br>";

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/';

@$action_form_vinicial = @$action_form_paciente;

/**/
//
include ($path . 'pyp/hc/agudeza_visual.php');
include ($path . 'pyp/hc/citologia_1.php');
include ($path . 'pyp/hc/crecimiento_desarrollo.php');
include ($path . 'pyp/hc/desarrollo_joven.php');
include ($path . 'pyp/hc/deteccion_45.php');
include ($path . 'pyp/hc/planificacion_familiar.php');


?>
