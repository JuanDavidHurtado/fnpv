<?php
if (isset($_REQUEST['guardar_h2_terapia_neuro_ninox']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h2_terapia_neuro_nino'] == 'new') {

        $sql = "INSERT INTO h2_terapia_neuro_nino (
`id_h2_terapia_neuro_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`t_lenguaje`,
`t_fisica`,
`t_ocupacional`,
`otros`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`prenatales`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['t_lenguaje'] . "' ,
'" . $_REQUEST['t_fisica'] . "' ,
'" . $_REQUEST['t_ocupacional'] . "' ,
'" . $_REQUEST['otros'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['prenatales'] . "'
) ";
    } else if ($_REQUEST['id_h2_terapia_neuro_nino'] != '') {

        $sql = "UPDATE h2_terapia_neuro_nino set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`t_lenguaje` = '" . $_REQUEST['t_lenguaje'] . "' ,
`t_fisica` = '" . $_REQUEST['t_fisica'] . "' ,
`t_ocupacional` = '" . $_REQUEST['t_ocupacional'] . "' ,
`otros` = '" . $_REQUEST['otros'] . "' ,
`prenatales` = '" . $_REQUEST['prenatales'] . "' WHERE `id_h2_terapia_neuro_nino` = '" . $_REQUEST['id_h2_terapia_neuro_ninox'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h2_terapia_neuro_ninox = 'new';
$sql = "SELECT * from h2_terapia_neuro_nino WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h2_terapia_neuro_nino = $row['id_h2_terapia_neuro_nino'];

    $t_lenguaje = $row['t_lenguaje'];
    $t_fisica = $row['t_fisica'];
    $t_ocupacional = $row['t_ocupacional'];
    $otros = $row['otros'];
    $prenatales = $row['prenatales'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h2_terapia_neuro_ninox").click(function() {
            $("#open-h2_terapia_neuro_ninox").show();
            $(this).hide();
            $("#content-h2_terapia_neuro_ninox").hide('slow');
        });

        $("#open-h2_terapia_neuro_ninox").click(function() {
            $("#close-h2_terapia_neuro_ninox").show();
            $(this).hide();
            $("#content-h2_terapia_neuro_ninox").show('slow');
        });

    });

</script>
<fieldset id="h2_terapia_neuro_ninox">
    <legend align="left"> <div class="arrow-c" id="close-h2_terapia_neuro_ninox"></div> <div class="arrow-o" id="open-h2_terapia_neuro_ninox" ></div> <font>Valoracion terapia ocupacional de neurodesarrollo - Antecedentes</font></legend>
    <div id="content-h2_terapia_neuro_ninox">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h2_terapia_neuro_ninox" id="guardar_h2_terapia_neuro_ninox" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h2_terapia_neuro_ninox" name="form_h2_terapia_neuro_ninox" action="<?php echo @$action_form_h2_terapia_neuro_ninox ?>#h2_terapia_neuro_ninox" method="post">

            <input type="hidden" id="id_h2_terapia_neuro_nino" name="id_h2_terapia_neuro_nino" value="<?php echo @$id_h2_terapia_neuro_nino ?>" />

            <strong>DESARROLLO PSICOMOTOR.</strong><BR>
            Control cefálico: <input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" /> 
            Sedente: <input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" /> 
            Arrastre: <input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" />
            Cuadrúpeda: <input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" /> 
            Gateo: <input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" /> 
            Bípedo: <input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" />
            Marcha: <input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" /> 
            Trote: <input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" /> 
            Carrera: <input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" />
            Salto Bipedal: <input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" /> 
            Salto uní pedal: <input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" /> 
            Salto alterno <input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" />
            <BR><BR>
            <strong>ANTECEDENTES ESCOLARES.</strong><BR>
            INSTITUCIÓN EDUCATIVA ACTUAL: <input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" />
            NOMBRE DEL PROFESOR (A): <input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" /> 
            GRADO: <input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" />
            EDAD DE INICIO ESCOLAR: <input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" /> 
            REPETICIONES: <input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" />
            OBSERVACIONES: <input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" />

            <br />
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>