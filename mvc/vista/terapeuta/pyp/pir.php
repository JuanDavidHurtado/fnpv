<?php


echo "<h3>PROGRAMA INTEGRAL DE RIESGO</h3><br>";

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/';

@$action_form_vinicial = @$action_form_paciente;

/**/
//

include ($path . 'pyp/pir/riesgo_1.php');
include ($path . 'pyp/pir/riesgo_2.php');
include ($path . 'pyp/pir/riesgo_3.php');
include ($path . 'pyp/pir/riesgo_4.php');


?>
