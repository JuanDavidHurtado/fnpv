<?php

echo "<h3>Valoracion CAC</h3><br>";

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/';

@$action_form_vinicial = @$action_form_paciente;

/**/
//

include ($path . 'pyp/cac/control_736.php');
include ($path . 'pyp/cac/cuadro_ayudas.php');



?>
