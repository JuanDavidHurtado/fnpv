<?php
$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/sesiong/';

if (@$_REQUEST['estado'] == 'PROCESO') {
    //form para finalizar la sesion
    @$action_form_finalizar = @$action_form_paciente;
    include ($path . 'form_finalizar.php');
}
?>
