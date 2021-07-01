<?php
if (isset($_REQUEST['guardar_h2_terapia_neuro_nino']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h2_terapia_neuro_nino'] == 'new') {

        $sql = "INSERT INTO h2_terapia_neuro_nino (
`id_h2_terapia_neuro_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`t_lenguaje`,
`t_fisica`,
`t_ocupacional`,
`t19`,
`t1`,
`t2`,
`t3`,
`t4`,
`t5`,
`t6`,
`t7`,
`t8`,
`t9`,
`t10`,
`t11`,
`t12`,
`t13`,
`t14`,
`t15`,
`t16`,
`t17`,
`t18`,
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
'" . $_REQUEST['t19'] . "' ,
'" . $_REQUEST['t1'] . "' ,
'" . $_REQUEST['t2'] . "' ,
'" . $_REQUEST['t3'] . "' ,
'" . $_REQUEST['t4'] . "' ,
'" . $_REQUEST['t5'] . "' ,
'" . $_REQUEST['t6'] . "' ,
'" . $_REQUEST['t7'] . "' ,
'" . $_REQUEST['t8'] . "' ,
'" . $_REQUEST['t9'] . "' ,
'" . $_REQUEST['t10'] . "' ,
'" . $_REQUEST['t11'] . "' ,
'" . $_REQUEST['t12'] . "' ,
'" . $_REQUEST['t13'] . "' ,
'" . $_REQUEST['t14'] . "' ,
'" . $_REQUEST['t15'] . "' ,
'" . $_REQUEST['t16'] . "' ,
'" . $_REQUEST['t17'] . "' ,
'" . $_REQUEST['t18'] . "' ,
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
`t19` = '" . $_REQUEST['t19'] . "' ,
`t1` = '" . $_REQUEST['t1'] . "' ,
`t2` = '" . $_REQUEST['t2'] . "' ,
`t3` = '" . $_REQUEST['t3'] . "' ,
`t4` = '" . $_REQUEST['t4'] . "' ,
`t5` = '" . $_REQUEST['t5'] . "' ,
`t6` = '" . $_REQUEST['t6'] . "' ,
`t7` = '" . $_REQUEST['t7'] . "' ,
`t8` = '" . $_REQUEST['t8'] . "' ,
`t9` = '" . $_REQUEST['t9'] . "' ,
`t10` = '" . $_REQUEST['t10'] . "' ,
`t11` = '" . $_REQUEST['t11'] . "' ,
`t12` = '" . $_REQUEST['t12'] . "' ,
`t13` = '" . $_REQUEST['t13'] . "' ,
`t14` = '" . $_REQUEST['t14'] . "' ,
`t15` = '" . $_REQUEST['t15'] . "' ,
`t16` = '" . $_REQUEST['t16'] . "' ,
`t17` = '" . $_REQUEST['t17'] . "' ,
`t18` = '" . $_REQUEST['t18'] . "' ,
`prenatales` = '" . $_REQUEST['prenatales'] . "' WHERE `id_h2_terapia_neuro_nino` = '" . $_REQUEST['id_h2_terapia_neuro_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h2_terapia_neuro_nino = 'new';
$sql = "SELECT * from h2_terapia_neuro_nino WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "'  ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h2_terapia_neuro_nino = $row['id_h2_terapia_neuro_nino'];

    $t_lenguaje = $row['t_lenguaje'];
    $t_fisica = $row['t_fisica'];
    $t_ocupacional = $row['t_ocupacional'];
    $t19 = $row['t19'];
    $prenatales = $row['prenatales'];
    
    $t1 = $row['t1'];
    $t2 = $row['t2'];
    $t3 = $row['t3'];
    $t4 = $row['t4'];
    $t5 = $row['t5'];
    $t6 = $row['t6'];
    $t7 = $row['t7'];
    $t8 = $row['t8'];
    $t9 = $row['t9'];
    $t10 = $row['t10'];
    $t11 = $row['t11'];
    $t12 = $row['t12'];
    $t13 = $row['t13'];
    $t14 = $row['t14'];
    $t15 = $row['t15'];
    $t16 = $row['t16'];
    $t17 = $row['t17'];
    $t18 = $row['t18'];
    
    break;
}
?>
<script>

    $(function() {

        $("#close-h2_terapia_neuro_nino").click(function() {
            $("#open-h2_terapia_neuro_nino").show();
            $(this).hide();
            $("#content-h2_terapia_neuro_nino").hide('slow');
        });

        $("#open-h2_terapia_neuro_nino").click(function() {
            $("#close-h2_terapia_neuro_nino").show();
            $(this).hide();
            $("#content-h2_terapia_neuro_nino").show('slow');
        });

    });

</script>
<fieldset id="h2_terapia_neuro_nino">
    <legend align="left"> <div class="arrow-c" id="close-h2_terapia_neuro_nino"></div> <div class="arrow-o" id="open-h2_terapia_neuro_nino" ></div> <font>Valoracion terapia ocupacional de neurodesarrollo - Antecedentes</font></legend>
    <div id="content-h2_terapia_neuro_nino">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h2_terapia_neuro_nino" id="guardar_h2_terapia_neuro_nino" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h2_terapia_neuro_nino" name="form_h2_terapia_neuro_nino" action="<?php echo @$action_form_h2_terapia_neuro_nino ?>#h2_terapia_neuro_nino" method="post">

            <input type="hidden" id="id_h2_terapia_neuro_nino" name="id_h2_terapia_neuro_nino" value="<?php echo @$id_h2_terapia_neuro_nino ?>" />

            <div>

                <strong>ANTECEDENTES TERAPÉUTICOS</strong><br />
                    TERAPIA DE LENGUAJE:
                    <input type="text" class="input_txt valid" id="t_lenguaje" name="t_lenguaje" value="<?php echo @$t_lenguaje; ?>" />
                    <br />
                    TERAPIA FÍSICA:
                    <input type="text" class="input_txt valid" id="t_fisica" name="t_fisica" value="<?php echo @$t_fisica; ?>" />
                    <br />
                    TERAPIA OCUPACIONAL:
                    <input type="text" class="input_txt valid" id="t_ocupacional" name="t_ocupacional" value="<?php echo @$t_ocupacional; ?>" />
                    <br />
                    OTROS:
                    <input type="text" class="input_txt valid" id="t19" name="t19" value="<?php echo @$t19; ?>" />
                </p>
                <p>PRENATALES, PERINATALES, POSTNATALES
                    <input type="text" class="input_txt valid" id="prenatales" name="prenatales" value="<?php echo @$prenatales; ?>" />
                </p>
            </div>
            <br />
            <strong>DESARROLLO PSICOMOTOR.</strong><BR>
            Control cefálico: <input type="text" class="input_txt valid" id="t1" name="t1" value="<?php echo @$t1; ?>" /> 
            Sedente: <input type="text" class="input_txt valid" id="t2" name="t2" value="<?php echo @$t2; ?>" /> 
            Arrastre: <input type="text" class="input_txt valid" id="t3" name="t3" value="<?php echo @$t3; ?>" />
            Cuadrúpeda: <input type="text" class="input_txt valid" id="t4" name="t4" value="<?php echo @$t4; ?>" /> 
            Gateo: <input type="text" class="input_txt valid" id="t5" name="t5" value="<?php echo @$t5; ?>" /> 
            Bípedo: <input type="text" class="input_txt valid" id="t6" name="t6" value="<?php echo @$t6; ?>" />
            Marcha: <input type="text" class="input_txt valid" id="t7" name="t7" value="<?php echo @$t7; ?>" /> 
            Trote: <input type="text" class="input_txt valid" id="t8" name="t8" value="<?php echo @$t8; ?>" /> 
            Carrera: <input type="text" class="input_txt valid" id="t9" name="t9" value="<?php echo @$t9; ?>" />
            Salto Bipedal: <input type="text" class="input_txt valid" id="t10" name="t10" value="<?php echo @$t10; ?>" /> 
            Salto uní pedal: <input type="text" class="input_txt valid" id="t11" name="t11" value="<?php echo @$t11; ?>" /> 
            Salto alterno <input type="text" class="input_txt valid" id="t12" name="t12" value="<?php echo @$t12; ?>" />
            <BR><BR>
            <strong>ANTECEDENTES ESCOLARES.</strong><BR>
            INSTITUCIÓN EDUCATIVA ACTUAL: <input type="text" class="input_txt valid" id="t13" name="t13" value="<?php echo @$t13; ?>" />
            NOMBRE DEL PROFESOR (A): <input type="text" class="input_txt valid" id="t14" name="t14" value="<?php echo @$t14; ?>" /> 
            GRADO: <input type="text" class="input_txt valid" id="t15" name="t15" value="<?php echo @$t15; ?>" />
            EDAD DE INICIO ESCOLAR: <input type="text" class="input_txt valid" id="t16" name="t16" value="<?php echo @$t16; ?>" /> 
            REPETICIONES: <input type="text" class="input_txt valid" id="t17" name="t17" value="<?php echo @$t17; ?>" />
            OBSERVACIONES: <input type="text" class="input_txt valid" id="t18" name="t18" value="<?php echo @$t18; ?>" />
            <BR>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>