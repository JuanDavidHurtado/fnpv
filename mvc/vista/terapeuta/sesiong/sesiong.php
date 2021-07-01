<?php

echo "<h3> Informacion general de la sesion </h3><br>";

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/sesiong/';

//form para agregar nota a la sesion
@$action_form_nota_sesion = @$action_form_paciente;
include ($path . 'form_nota_final.php');

//form para agregar archivos a la historia
@$action_form_file = @$action_form_paciente;
include ($path . 'files_historia.php');


?>
