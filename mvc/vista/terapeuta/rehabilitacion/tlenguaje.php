<div id="terapia_l">
<?php

echo "<h3>Rehabilitacion - Valoracion terapia lenguaje</h3><br>";

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/rehabilitacion/tlenguaje/';

@$action_form_rtl_vlenguaje_nivel_pragmatico = @$action_form_paciente;
include ($path.'form_rtl_vlenguaje_nivel_pragmatico.php');
$_REQUEST['id_formulario'] = 15;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

@$action_form_rtl_vlenguaje_nivel_semantico = @$action_form_paciente;
include ($path.'form_rtl_vlenguaje_nivel_semantico.php');
$_REQUEST['id_formulario'] = 16;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

@$action_form_rtl_vlenguaje_nivel_morfosintactico = @$action_form_paciente;
include ($path.'form_rtl_vlenguaje_nivel_morfosintactico.php');
$_REQUEST['id_formulario'] = 17;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

@$action_form_rtl_vlenguaje_nivel_fonetico_fonologico = @$action_form_paciente;
include ($path.'form_rtl_vlenguaje_nivel_fonetico_fonologico.php');
$_REQUEST['id_formulario'] = 18;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

@$action_form_rtl_lecto_escritura = @$action_form_paciente;
include ($path.'form_rtl_lecto_escritura.php');
$_REQUEST['id_formulario'] = 19;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

@$action_form_rtl_habla_modo = @$action_form_paciente;
include ($path.'form_rtl_habla_modo.php');
$_REQUEST['id_formulario'] = 20;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

@$action_form_rtl_tipo_respiratorio = @$action_form_paciente;
include ($path.'form_rtl_tipo_respiratorio.php');
$_REQUEST['id_formulario'] = 21;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

@$action_form_rtl_tono = @$action_form_paciente;
include ($path.'form_rtl_tono.php');
$_REQUEST['id_formulario'] = 22;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

@$action_form_rtl_timbre = @$action_form_paciente;
include ($path.'form_rtl_timbre.php');
$_REQUEST['id_formulario'] = 23;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

@$action_form_rtl_intensidad = @$action_form_paciente;
include ($path.'form_rtl_intensidad.php');
$_REQUEST['id_formulario'] = 24;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

@$action_form_rtl_estructura_ofa = @$action_form_paciente;
include ($path.'form_rtl_estructura_ofa.php');
$_REQUEST['id_formulario'] = 25;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

@$action_form_rtl_proceso_alimentacion = @$action_form_paciente;
include ($path.'form_rtl_proceso_alimentacion.php');
$_REQUEST['id_formulario'] = 26;
$file = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_egreso.php';
include ($file);

?>
</div>
<br>
<a href='#' onclick='imprSelec("terapia_l", true)' class="no_print">Imprimir formulario</a>