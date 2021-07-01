<?php
if (isset($_REQUEST['guardar_h2_terapia_neuro']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h2_terapia_neuro'] == 'new') {

        $sql = "INSERT INTO h2_terapia_neuro (
`id_h2_terapia_neuro`,
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
    } else if ($_REQUEST['id_h2_terapia_neuro'] != '') {

        $sql = "UPDATE h2_terapia_neuro set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`t_lenguaje` = '" . $_REQUEST['t_lenguaje'] . "' ,
`t_fisica` = '" . $_REQUEST['t_fisica'] . "' ,
`t_ocupacional` = '" . $_REQUEST['t_ocupacional'] . "' ,
`otros` = '" . $_REQUEST['otros'] . "' ,
`prenatales` = '" . $_REQUEST['prenatales'] . "' 
 WHERE `id_h2_terapia_neuro` = '" . $_REQUEST['id_h2_terapia_neuro'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h2_terapia_neuro = 'new';
$sql = "SELECT * from h2_terapia_neuro WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h2_terapia_neuro = $row['id_h2_terapia_neuro'];

    $t_lenguaje = $row['t_lenguaje'];
    $t_fisica = $row['t_fisica'];
    $t_ocupacional = $row['t_ocupacional'];
    $otros = $row['otros'];
    $prenatales = $row['prenatales'];
    $tc_eutono = $row['tc_eutono'];
    $tc_hiper = $row['tc_hiper'];
    $tc_hipo = $row['tc_hipo'];
    $tt_eutono = $row['tt_eutono'];
    $tt_hiper = $row['tt_hiper'];
    $tt_hipo = $row['tt_hipo'];
    $tmd_eutono = $row['tmd_eutono'];
    $tmd_hiper = $row['tmd_hiper'];
    $tmd_hipo = $row['tmd_hipo'];
    $tmi_eutono = $row['tmi_eutono'];
    $tmi_hiper = $row['tmi_hiper'];
    $tmi_hipo = $row['tmi_hipo'];
    $tmd2_eutono = $row['tmd2_eutono'];
    $tmd2_hiper = $row['tmd2_hiper'];
    $tmd2_hipo = $row['tmd2_hipo'];
    $tii_eutono = $row['tii_eutono'];
    $tii_hiper = $row['tii_hiper'];
    $ti_hipo = $row['ti_hipo'];
    $nerurom_obser = $row['nerurom_obser'];
    $sh_f = $row['sh_f'];
    $sh_sf = $row['sh_sf'];
    $sh_nf = $row['sh_nf'];
    $sv_f = $row['sv_f'];
    $sv_sf = $row['sv_sf'];
    $sv_nf = $row['sv_nf'];
    $sd_f = $row['sd_f'];
    $sd_sf = $row['sd_sf'];
    $sd_nf = $row['sd_nf'];
    $sc_f = $row['sc_f'];
    $sc_sf = $row['sc_sf'];
    $sc_nf = $row['sc_nf'];
    $acomo_f = $row['acomo_f'];
    $acomo_sf = $row['acomo_sf'];
    $acomo_nf = $row['acomo_nf'];
    $fijacion = $row['fijacion'];
    $seg_doc = $row['seg_doc'];
    $visual_oserva = $row['visual_oserva'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h2_terapia_neuro").click(function() {
            $("#open-h2_terapia_neuro").show();
            $(this).hide();
            $("#content-h2_terapia_neuro").hide('slow');
        });

        $("#open-h2_terapia_neuro").click(function() {
            $("#close-h2_terapia_neuro").show();
            $(this).hide();
            $("#content-h2_terapia_neuro").show('slow');
        });

    });

</script>
<fieldset id="h2_terapia_neuro">
    <legend align="left"> <div class="arrow-c" id="close-h2_terapia_neuro"></div> <div class="arrow-o" id="open-h2_terapia_neuro" ></div> <font>Valoracion terapia ocupacional neurorehabilitacion - Antecedentes</font></legend>
    <div id="content-h2_terapia_neuro">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h2_terapia_neuro" id="guardar_h2_terapia_neuro" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h2_terapia_neuro" name="form_h2_terapia_neuro" action="<?php echo @$action_form_h2_terapia_neuro ?>#h2_terapia_neuro" method="post">

            <input type="hidden" id="id_h2_terapia_neuro" name="id_h2_terapia_neuro" value="<?php echo @$id_h2_terapia_neuro ?>" />

            <input type="hidden" class="input_txt valid" id="id_h2_terapia_neuro" name="id_h2_terapia_neuro" value="<?php echo @$id_h2_terapia_neuro; ?>" />
            <div>

                <p><strong>ANTECEDENTES TERAPÉUTICOS</strong></p><br />
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
                <input type="text" class="input_txt valid" id="otros" name="otros" value="<?php echo @$otros; ?>" />

                <p>PRENATALES, PERINATALES, POSTNATALES
                    <input type="text" class="input_txt valid" id="prenatales" name="prenatales" value="<?php echo @$prenatales; ?>" />
                    <br />
                </p>

            </div>
            <br />
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>