<?php

//echo "<h3>Antecedentes generales</h3><br>";

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/antecedentesg/';

//form para agregar antecendentes a la sesion
@$action_form_antecedentes = @$action_form_paciente;
//include ($path.'form_antecedentes.php');

@$action_form_vinicial = @$action_form_paciente;
include ($path.'form_valoracion_inicial.php');

/*
//form para antecedente desarrollo motor
@$action_form_antecedente_desarollo_motor = @$action_form_paciente;
include ($path.'form_antecedentes_desarrollo_motor.php');

//form para antecedente odontologico
@$action_form_antecedente_odontologico = @$action_form_paciente;
include ($path.'form_antecedentes_odontologicos.php');

//form para antecedente terapeuticos
@$action_form_antecedente_terapeutico = @$action_form_paciente;
include ($path.'form_antecedentes_terapeuticos.php');

//form para antecedente escolar
@$action_form_antecedente_escolar = @$action_form_paciente;
include ($path.'form_antecedentes_escolares.php');
 *
 */

?>
