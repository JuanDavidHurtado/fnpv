<?php


echo "<h3>REJILLA CYD</h3><br>";

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/';

@$action_form_vinicial = @$action_form_paciente;

/**/
//
echo 'rejilla';
include ($path . 'pyp/rejilla/rejilla_1.php');
include ($path . 'pyp/rejilla/rejilla_2.php');
include ($path . 'pyp/rejilla/rejilla_3.php');
include ($path . 'pyp/rejilla/rejilla_4.php');




?>