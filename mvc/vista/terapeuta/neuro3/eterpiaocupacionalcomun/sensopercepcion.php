<?php
if (isset($_REQUEST['guardar_h2_sensopercepcion']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h2_sensopercepcion'] == 'new') {

        $sql = "INSERT INTO h2_sensopercepcion (
`id_h2_sensopercepcion`,
`id_usuario`,
`historia`,
`id_proceso`,
`calor_p`,
`calor_a`,
`frio_p`,
`frio_a`,
`toque_p`,
`toque_a`,
`romo_p`,
`romo_a`,
`dolor_p`,
`dolor_a`,
`baro_p`,
`baro_a`,
`esterog_p`,
`esterog_a`,
`text_p`,
`text_a`,
`loca_p`,
`loca_a`,
`grafes_p`,
`grafes_a`,
`v_cerrrado_p`,
`v_cerrrado_n`,
`v_abierto_p`,
`v_abierto_n`,
`salt_f`,
`salt_sf`,
`salt_nf`,
`spi_f`,
`spi_sf`,
`spi_nf`,
`march_f`,
`march_sf`,
`march_nf`,
`av_pcg_1`,
`av_pcg_2`,
`av_pcg_3`,
`av_pcg_4`,
`av_pcg_5`,
`av_pcg_6`,
`av_pcg_7`,
`av_pcg_8`,
`av_pcg_9`,
`av_pcf_1`,
`av_pcf_2`,
`av_pcf_3`,
`av_pcf_4`,
`av_pcf_5`,
`av_pcf_6`,
`av_pcf_7`,
`av_pcf_8`,
`av_pcf_9`,
`av_arti_1`,
`av_arti_2`,
`av_arti_3`,
`av_arti_4`,
`av_arti_5`,
`av_arti_6`,
`av_arti_7`,
`av_arti_8`,
`av_arti_9`,
`au_i1`,
`au_i2`,
`au_i3`,
`aul_1`,
`aul_2`,
`aul_3`,
`dicr_1`,
`dicr2`,
`dic_3`,
`sv1`,
`sv2`,
`sv3`,
`sv4`,
`sv5`,
`sv6`,
`sv7`,
`sv8`,
`sv9`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`senso_obser1`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['calor_p'] . "' ,
'" . $_REQUEST['calor_a'] . "' ,
'" . $_REQUEST['frio_p'] . "' ,
'" . $_REQUEST['frio_a'] . "' ,
'" . $_REQUEST['toque_p'] . "' ,
'" . $_REQUEST['toque_a'] . "' ,
'" . $_REQUEST['romo_p'] . "' ,
'" . $_REQUEST['romo_a'] . "' ,
'" . $_REQUEST['dolor_p'] . "' ,
'" . $_REQUEST['dolor_a'] . "' ,
'" . $_REQUEST['baro_p'] . "' ,
'" . $_REQUEST['baro_a'] . "' ,
'" . $_REQUEST['esterog_p'] . "' ,
'" . $_REQUEST['esterog_a'] . "' ,
'" . $_REQUEST['text_p'] . "' ,
'" . $_REQUEST['text_a'] . "' ,
'" . $_REQUEST['loca_p'] . "' ,
'" . $_REQUEST['loca_a'] . "' ,
'" . $_REQUEST['grafes_p'] . "' ,
'" . $_REQUEST['grafes_a'] . "' ,
'" . $_REQUEST['v_cerrrado_p'] . "' ,
'" . $_REQUEST['v_cerrrado_n'] . "' ,
'" . $_REQUEST['v_abierto_p'] . "' ,
'" . $_REQUEST['v_abierto_n'] . "' ,
'" . $_REQUEST['salt_f'] . "' ,
'" . $_REQUEST['salt_sf'] . "' ,
'" . $_REQUEST['salt_nf'] . "' ,
'" . $_REQUEST['spi_f'] . "' ,
'" . $_REQUEST['spi_sf'] . "' ,
'" . $_REQUEST['spi_nf'] . "' ,
'" . $_REQUEST['march_f'] . "' ,
'" . $_REQUEST['march_sf'] . "' ,
'" . $_REQUEST['march_nf'] . "' ,
'" . $_REQUEST['av_pcg_1'] . "' ,
'" . $_REQUEST['av_pcg_2'] . "' ,
'" . $_REQUEST['av_pcg_3'] . "' ,
'" . $_REQUEST['av_pcg_4'] . "' ,
'" . $_REQUEST['av_pcg_5'] . "' ,
'" . $_REQUEST['av_pcg_6'] . "' ,
'" . $_REQUEST['av_pcg_7'] . "' ,
'" . $_REQUEST['av_pcg_8'] . "' ,
'" . $_REQUEST['av_pcg_9'] . "' ,
'" . $_REQUEST['av_pcf_1'] . "' ,
'" . $_REQUEST['av_pcf_2'] . "' ,
'" . $_REQUEST['av_pcf_3'] . "' ,
'" . $_REQUEST['av_pcf_4'] . "' ,
'" . $_REQUEST['av_pcf_5'] . "' ,
'" . $_REQUEST['av_pcf_6'] . "' ,
'" . $_REQUEST['av_pcf_7'] . "' ,
'" . $_REQUEST['av_pcf_8'] . "' ,
'" . $_REQUEST['av_pcf_9'] . "' ,
'" . $_REQUEST['av_arti_1'] . "' ,
'" . $_REQUEST['av_arti_2'] . "' ,
'" . $_REQUEST['av_arti_3'] . "' ,
'" . $_REQUEST['av_arti_4'] . "' ,
'" . $_REQUEST['av_arti_5'] . "' ,
'" . $_REQUEST['av_arti_6'] . "' ,
'" . $_REQUEST['av_arti_7'] . "' ,
'" . $_REQUEST['av_arti_8'] . "' ,
'" . $_REQUEST['av_arti_9'] . "' ,
'" . $_REQUEST['au_i1'] . "' ,
'" . $_REQUEST['au_i2'] . "' ,
'" . $_REQUEST['au_i3'] . "' ,
'" . $_REQUEST['aul_1'] . "' ,
'" . $_REQUEST['aul_2'] . "' ,
'" . $_REQUEST['aul_3'] . "' ,
'" . $_REQUEST['dicr_1'] . "' ,
'" . $_REQUEST['dicr2'] . "' ,
'" . $_REQUEST['dic_3'] . "' ,
'" . $_REQUEST['sv1'] . "' ,
'" . $_REQUEST['sv2'] . "' ,
'" . $_REQUEST['sv3'] . "' ,
'" . $_REQUEST['sv4'] . "' ,
'" . $_REQUEST['sv5'] . "' ,
'" . $_REQUEST['sv6'] . "' ,
'" . $_REQUEST['sv7'] . "' ,
'" . $_REQUEST['sv8'] . "' ,
'" . $_REQUEST['sv9'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['senso_obser1'] . "' 
) ";
    } else if ($_REQUEST['id_h2_sensopercepcion'] != '') {

        $sql = "UPDATE h2_sensopercepcion set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`calor_p` = '" . $_REQUEST['calor_p'] . "' ,
`calor_a` = '" . $_REQUEST['calor_a'] . "' ,
`frio_p` = '" . $_REQUEST['frio_p'] . "' ,
`frio_a` = '" . $_REQUEST['frio_a'] . "' ,
`toque_p` = '" . $_REQUEST['toque_p'] . "' ,
`toque_a` = '" . $_REQUEST['toque_a'] . "' ,
`romo_p` = '" . $_REQUEST['romo_p'] . "' ,
`romo_a` = '" . $_REQUEST['romo_a'] . "' ,
`dolor_p` = '" . $_REQUEST['dolor_p'] . "' ,
`dolor_a` = '" . $_REQUEST['dolor_a'] . "' ,
`baro_p` = '" . $_REQUEST['baro_p'] . "' ,
`baro_a` = '" . $_REQUEST['baro_a'] . "' ,
`esterog_p` = '" . $_REQUEST['esterog_p'] . "' ,
`esterog_a` = '" . $_REQUEST['esterog_a'] . "' ,
`text_p` = '" . $_REQUEST['text_p'] . "' ,
`text_a` = '" . $_REQUEST['text_a'] . "' ,
`loca_p` = '" . $_REQUEST['loca_p'] . "' ,
`loca_a` = '" . $_REQUEST['loca_a'] . "' ,
`grafes_p` = '" . $_REQUEST['grafes_p'] . "' ,
`grafes_a` = '" . $_REQUEST['grafes_a'] . "' ,
`v_cerrrado_p` = '" . $_REQUEST['v_cerrrado_p'] . "' ,
`v_cerrrado_n` = '" . $_REQUEST['v_cerrrado_n'] . "' ,
`v_abierto_p` = '" . $_REQUEST['v_abierto_p'] . "' ,
`v_abierto_n` = '" . $_REQUEST['v_abierto_n'] . "' ,
`salt_f` = '" . $_REQUEST['salt_f'] . "' ,
`salt_sf` = '" . $_REQUEST['salt_sf'] . "' ,
`salt_nf` = '" . $_REQUEST['salt_nf'] . "' ,
`spi_f` = '" . $_REQUEST['spi_f'] . "' ,
`spi_sf` = '" . $_REQUEST['spi_sf'] . "' ,
`spi_nf` = '" . $_REQUEST['spi_nf'] . "' ,
`march_f` = '" . $_REQUEST['march_f'] . "' ,
`march_sf` = '" . $_REQUEST['march_sf'] . "' ,
`march_nf` = '" . $_REQUEST['march_nf'] . "' ,
`av_pcg_1` = '" . $_REQUEST['av_pcg_1'] . "' ,
`av_pcg_2` = '" . $_REQUEST['av_pcg_2'] . "' ,
`av_pcg_3` = '" . $_REQUEST['av_pcg_3'] . "' ,
`av_pcg_4` = '" . $_REQUEST['av_pcg_4'] . "' ,
`av_pcg_5` = '" . $_REQUEST['av_pcg_5'] . "' ,
`av_pcg_6` = '" . $_REQUEST['av_pcg_6'] . "' ,
`av_pcg_7` = '" . $_REQUEST['av_pcg_7'] . "' ,
`av_pcg_8` = '" . $_REQUEST['av_pcg_8'] . "' ,
`av_pcg_9` = '" . $_REQUEST['av_pcg_9'] . "' ,
`av_pcf_1` = '" . $_REQUEST['av_pcf_1'] . "' ,
`av_pcf_2` = '" . $_REQUEST['av_pcf_2'] . "' ,
`av_pcf_3` = '" . $_REQUEST['av_pcf_3'] . "' ,
`av_pcf_4` = '" . $_REQUEST['av_pcf_4'] . "' ,
`av_pcf_5` = '" . $_REQUEST['av_pcf_5'] . "' ,
`av_pcf_6` = '" . $_REQUEST['av_pcf_6'] . "' ,
`av_pcf_7` = '" . $_REQUEST['av_pcf_7'] . "' ,
`av_pcf_8` = '" . $_REQUEST['av_pcf_8'] . "' ,
`av_pcf_9` = '" . $_REQUEST['av_pcf_9'] . "' ,
`av_arti_1` = '" . $_REQUEST['av_arti_1'] . "' ,
`av_arti_2` = '" . $_REQUEST['av_arti_2'] . "' ,
`av_arti_3` = '" . $_REQUEST['av_arti_3'] . "' ,
`av_arti_4` = '" . $_REQUEST['av_arti_4'] . "' ,
`av_arti_5` = '" . $_REQUEST['av_arti_5'] . "' ,
`av_arti_6` = '" . $_REQUEST['av_arti_6'] . "' ,
`av_arti_7` = '" . $_REQUEST['av_arti_7'] . "' ,
`av_arti_8` = '" . $_REQUEST['av_arti_8'] . "' ,
`av_arti_9` = '" . $_REQUEST['av_arti_9'] . "' ,
`au_i1` = '" . $_REQUEST['au_i1'] . "' ,
`au_i2` = '" . $_REQUEST['au_i2'] . "' ,
`au_i3` = '" . $_REQUEST['au_i3'] . "' ,
`aul_1` = '" . $_REQUEST['aul_1'] . "' ,
`aul_2` = '" . $_REQUEST['aul_2'] . "' ,
`aul_3` = '" . $_REQUEST['aul_3'] . "' ,
`dicr_1` = '" . $_REQUEST['dicr_1'] . "' ,
`dicr2` = '" . $_REQUEST['dicr2'] . "' ,
`dic_3` = '" . $_REQUEST['dic_3'] . "' ,
`sv1` = '" . $_REQUEST['sv1'] . "' ,
`sv2` = '" . $_REQUEST['sv2'] . "' ,
`sv3` = '" . $_REQUEST['sv3'] . "' ,
`sv4` = '" . $_REQUEST['sv4'] . "' ,
`sv5` = '" . $_REQUEST['sv5'] . "' ,
`sv6` = '" . $_REQUEST['sv6'] . "' ,
`sv7` = '" . $_REQUEST['sv7'] . "' ,
`sv8` = '" . $_REQUEST['sv8'] . "' ,
`sv9` = '" . $_REQUEST['sv9'] . "' ,
`senso_obser1` = '" . $_REQUEST['senso_obser1'] . "'  WHERE `id_h2_sensopercepcion` = '" . $_REQUEST['id_h2_sensopercepcion'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h2_sensopercepcion = 'new';
$sql = "SELECT * from h2_sensopercepcion WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h2_sensopercepcion = $row['id_h2_sensopercepcion'];

    $calor_p = $row['calor_p'];
    $calor_a = $row['calor_a'];
    $frio_p = $row['frio_p'];
    $frio_a = $row['frio_a'];
    $toque_p = $row['toque_p'];
    $toque_a = $row['toque_a'];
    $romo_p = $row['romo_p'];
    $romo_a = $row['romo_a'];
    $dolor_p = $row['dolor_p'];
    $dolor_a = $row['dolor_a'];
    $baro_p = $row['baro_p'];
    $baro_a = $row['baro_a'];
    $esterog_p = $row['esterog_p'];
    $esterog_a = $row['esterog_a'];
    $text_p = $row['text_p'];
    $text_a = $row['text_a'];
    $loca_p = $row['loca_p'];
    $loca_a = $row['loca_a'];
    $grafes_p = $row['grafes_p'];
    $grafes_a = $row['grafes_a'];
    $v_cerrrado_p = $row['v_cerrrado_p'];
    $v_cerrrado_n = $row['v_cerrrado_n'];
    $v_abierto_p = $row['v_abierto_p'];
    $v_abierto_n = $row['v_abierto_n'];
    $salt_f = $row['salt_f'];
    $salt_sf = $row['salt_sf'];
    $salt_nf = $row['salt_nf'];
    $spi_f = $row['spi_f'];
    $spi_sf = $row['spi_sf'];
    $spi_nf = $row['spi_nf'];
    $march_f = $row['march_f'];
    $march_sf = $row['march_sf'];
    $march_nf = $row['march_nf'];
    $av_pcg_1 = $row['av_pcg_1'];
    $av_pcg_2 = $row['av_pcg_2'];
    $av_pcg_3 = $row['av_pcg_3'];
    $av_pcg_4 = $row['av_pcg_4'];
    $av_pcg_5 = $row['av_pcg_5'];
    $av_pcg_6 = $row['av_pcg_6'];
    $av_pcg_7 = $row['av_pcg_7'];
    $av_pcg_8 = $row['av_pcg_8'];
    $av_pcg_9 = $row['av_pcg_9'];
    $av_pcf_1 = $row['av_pcf_1'];
    $av_pcf_2 = $row['av_pcf_2'];
    $av_pcf_3 = $row['av_pcf_3'];
    $av_pcf_4 = $row['av_pcf_4'];
    $av_pcf_5 = $row['av_pcf_5'];
    $av_pcf_6 = $row['av_pcf_6'];
    $av_pcf_7 = $row['av_pcf_7'];
    $av_pcf_8 = $row['av_pcf_8'];
    $av_pcf_9 = $row['av_pcf_9'];
    $av_arti_1 = $row['av_arti_1'];
    $av_arti_2 = $row['av_arti_2'];
    $av_arti_3 = $row['av_arti_3'];
    $av_arti_4 = $row['av_arti_4'];
    $av_arti_5 = $row['av_arti_5'];
    $av_arti_6 = $row['av_arti_6'];
    $av_arti_7 = $row['av_arti_7'];
    $av_arti_8 = $row['av_arti_8'];
    $av_arti_9 = $row['av_arti_9'];
    $au_i1 = $row['au_i1'];
    $au_i2 = $row['au_i2'];
    $au_i3 = $row['au_i3'];
    $aul_1 = $row['aul_1'];
    $aul_2 = $row['aul_2'];
    $aul_3 = $row['aul_3'];
    $dicr_1 = $row['dicr_1'];
    $dicr2 = $row['dicr2'];
    $dic_3 = $row['dic_3'];
    $sv1 = $row['sv1'];
    $sv2 = $row['sv2'];
    $sv3 = $row['sv3'];
    $sv4 = $row['sv4'];
    $sv5 = $row['sv5'];
    $sv6 = $row['sv6'];
    $sv7 = $row['sv7'];
    $sv8 = $row['sv8'];
    $sv9 = $row['sv9'];
    $senso_obser1 = $row['senso_obser1'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h2_sensopercepcion").click(function() {
            $("#open-h2_sensopercepcion").show();
            $(this).hide();
            $("#content-h2_sensopercepcion").hide('slow');
        });

        $("#open-h2_sensopercepcion").click(function() {
            $("#close-h2_sensopercepcion").show();
            $(this).hide();
            $("#content-h2_sensopercepcion").show('slow');
        });

    });

</script>
<fieldset id="h2_sensopercepcion">
    <legend align="left"> <div class="arrow-c" id="close-h2_sensopercepcion"></div> <div class="arrow-o" id="open-h2_sensopercepcion" ></div> <font>Valoracion terapia ocupacional neurorehabilitacion - Sensopercepcion</font></legend>
    <div id="content-h2_sensopercepcion">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h2_sensopercepcion" id="guardar_h2_sensopercepcion" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h2_sensopercepcion" name="form_h2_sensopercepcion" action="<?php echo @$action_form_h2_sensopercepcion ?>#h2_sensopercepcion" method="post">

            <input type="hidden" id="id_h2_sensopercepcion" name="id_h2_sensopercepcion" value="<?php echo @$id_h2_sensopercepcion ?>" />

            <strong>TACTIL</strong>
            <table  border="0" cellspacing="0" cellpadding="0" class="data" width="900">
                <tr>
                    <td width="280" valign="top"><p align="center"><strong>SENSIBILIDAD    SUPERFICIAL</strong></p></td>
                    <td width="50" valign="top"><p align="center"><strong>P</strong></p></td>
                    <td width="55" valign="top"><p align="center"><strong>A</strong></p></td>
                    <td width="395" valign="top"><p align="center"><strong>SENSIBILIDAD    PROFUNDA   </strong></p></td>
                    <td width="60" valign="top"><p align="center"><strong>P</strong></p></td>
                    <td width="60" valign="top"><p align="center"><strong>A</strong></p></td>
                </tr>
                <tr>
                    <td width="280" valign="top"><p align="left">Calor<strong></strong></p></td>
                    <td width="50" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="calor_p" name="calor_p" value="<?php echo @$calor_p; ?>" />
                            </strong></p></td>
                    <td width="55" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="calor_a" name="calor_a" value="<?php echo @$calor_a; ?>" />
                        </p></td>
                    <td width="395" valign="top"><p align="left">Barognosia<strong></strong></p></td>
                    <td width="60" valign="top"><input type="text" class="input_txt valid" id="baro_p" name="baro_p" value="<?php echo @$baro_p; ?>" /></td>
                    <td width="60" valign="top"><input type="text" class="input_txt valid" id="baro_a" name="baro_a" value="<?php echo @$baro_a; ?>" /></td>
                </tr>
                <tr>
                    <td width="280" valign="top"><p align="left">Frío<strong></strong></p></td>
                    <td width="50" valign="top"><input type="text" class="input_txt valid" id="frio_p" name="frio_p" value="<?php echo @$frio_p; ?>" /></td>
                    <td width="55" valign="top"><input type="text" class="input_txt valid" id="frio_a" name="frio_a" value="<?php echo @$frio_a; ?>" /></td>
                    <td width="395" valign="top"><p align="left">Esterognosia<strong></strong></p></td>
                    <td width="60" valign="top"><input type="text" class="input_txt valid" id="esterog_p" name="esterog_p" value="<?php echo @$esterog_p; ?>" /></td>
                    <td width="60" valign="top"><input type="text" class="input_txt valid" id="esterog_a" name="esterog_a" value="<?php echo @$esterog_a; ?>" /></td>
                </tr>
                <tr>
                    <td width="280" valign="top"><p align="left">Toque ligero    (algodón)<strong></strong></p></td>
                    <td width="50" valign="top"><input type="text" class="input_txt valid" id="toque_p" name="toque_p" value="<?php echo @$toque_p; ?>" /></td>
                    <td width="55" valign="top"><input type="text" class="input_txt valid" id="toque_a" name="toque_a" value="<?php echo @$toque_a; ?>" /></td>
                    <td width="395" valign="top"><p align="left">Diferenciación    de texturas<strong></strong></p></td>
                    <td width="60" valign="top"><input type="text" class="input_txt valid" id="text_p" name="text_p" value="<?php echo @$text_p; ?>" /></td>
                    <td width="60" valign="top"><input type="text" class="input_txt valid" id="text_a" name="text_a" value="<?php echo @$text_a; ?>" /></td>
                </tr>
                <tr>
                    <td width="280" valign="top"><p align="left">Romo agudo<strong></strong></p></td>
                    <td width="50" valign="top"><input type="text" class="input_txt valid" id="romo_p" name="romo_p" value="<?php echo @$romo_p; ?>" /></td>
                    <td width="55" valign="top"><input type="text" class="input_txt valid" id="romo_a" name="romo_a" value="<?php echo @$romo_a; ?>" /></td>
                    <td width="395" valign="top"><p align="left">Localización    de dos puntos<strong></strong></p></td>
                    <td width="60" valign="top"><input type="text" class="input_txt valid" id="loca_p" name="loca_p" value="<?php echo @$loca_p; ?>" /></td>
                    <td width="60" valign="top"><input type="text" class="input_txt valid" id="loca_a" name="loca_a" value="<?php echo @$loca_a; ?>" /></td>
                </tr>
                <tr>
                    <td width="280" valign="top"><p align="left">Dolor    (pellizco)<strong></strong></p></td>
                    <td width="50" valign="top"><input type="text" class="input_txt valid" id="dolor_p" name="dolor_p" value="<?php echo @$dolor_p; ?>" /></td>
                    <td width="55" valign="top"><input type="text" class="input_txt valid" id="dolor_a" name="dolor_a" value="<?php echo @$dolor_a; ?>" /></td>
                    <td width="395" valign="top"><p align="left">Grafestesia<strong></strong></p></td>
                    <td width="60" valign="top"><input type="text" class="input_txt valid" id="grafes_p" name="grafes_p" value="<?php echo @$grafes_p; ?>" /></td>
                    <td width="60" valign="top"><input type="text" class="input_txt valid" id="grafes_a" name="grafes_a" value="<?php echo @$grafes_a; ?>" /></td>
                </tr>
            </table>
            <br>
            <strong>VESTIBULAR</strong>
            <div id="content_long" style="width: 900px; height: auto;overflow-x: auto">
                <table  border="0" class="data text_small" cellspacing="0" cellpadding="0" width="900">
                    <tr>
                        <td width="285" valign="top"><p align="center"><strong>Equilibrio    estático</strong></p></td>
                        <td width="120" colspan="2" valign="top"><p align="left"><strong>&nbsp;</strong></p></td>
                        <td width="315" valign="top"><p align="center"><strong>Equilibrio    dinámico</strong></p></td>
                        <td width="60" valign="top"><p align="center"><strong>F</strong></p></td>
                        <td width="60" valign="top"><p align="center"><strong>SF</strong></p></td>
                        <td width="60" valign="top"><p align="center"><strong>NF</strong></p></td>
                    </tr>
                    <tr>
                        <td width="285" valign="top"><p align="left"><strong>Prueba de Romberg</strong></p></td>
                        <td width="60" valign="top"><p align="center"><strong>P+</strong></p></td>
                        <td width="60" valign="top"><p align="center"><strong>N-</strong></p></td>
                        <td width="315" valign="top"><p align="left">Salto<strong></strong></p></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="salt_f" name="salt_f" value="<?php echo @$salt_f; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="salt_sf" name="salt_sf" value="<?php echo @$salt_sf; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="salt_nf" name="salt_nf" value="<?php echo @$salt_nf; ?>" /></td>
                    </tr>
                    <tr>
                        <td width="285" valign="top"><p align="left">Ojos cerrados<strong></strong></p></td>
                        <td width="60" valign="top"><p align="left">
                                <input type="text" class="input_txt valid" id="v_cerrrado_p" name="v_cerrrado_p" value="<?php echo @$v_cerrrado_p; ?>" />
                            </p></td>
                        <td width="60" valign="top"><p align="left">
                                <input type="text" class="input_txt valid" id="v_cerrrado_n" name="v_cerrrado_n" value="<?php echo @$v_cerrrado_n; ?>" />
                            </p></td>
                        <td width="315" valign="top"><p align="left">Salto en un    pie<strong></strong></p></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="spi_f" name="spi_f" value="<?php echo @$spi_f; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="spi_sf" name="spi_sf" value="<?php echo @$spi_sf; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="spi_nf" name="spi_nf" value="<?php echo @$spi_nf; ?>" /></td>
                    </tr>
                    <tr>
                        <td width="285" valign="top"><p align="left">Ojos abiertos<strong></strong></p></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="v_abierto_p" name="v_abierto_p" value="<?php echo @$v_abierto_p; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="v_abierto_n" name="v_abierto_n" value="<?php echo @$v_abierto_n; ?>" /></td>
                        <td width="315" valign="top"><p align="left">Marcha<strong></strong></p></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="march_f" name="march_f" value="<?php echo @$march_f; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="march_sf" name="march_sf" value="<?php echo @$march_sf; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="march_nf" name="march_nf" value="<?php echo @$march_nf; ?>" /></td>
                    </tr>
                </table>
            </div>
            <br>
            <strong>PROPIOCEPTIVO</strong>
            <div id="content_long" style="width: 900px; height: auto;overflow-x: auto">
                <table border="0" class="data text_small" cellspacing="0" cellpadding="0" width="892">
                    <tr>
                        <td width="300" valign="top"><p align="center"><strong>ESQUEMA    CORPORAL</strong></p></td>
                        <td width="210" colspan="3" valign="top"><p align="center"><strong>EN    SI MISMO</strong></p></td>
                        <td width="202" colspan="3" valign="top"><p align="center"><strong>OTRA    PERSONA</strong></p></td>
                        <td width="180" colspan="3" valign="top"><p align="center"><strong>EN    LAMINAS</strong></p></td>
                    </tr>
                    <tr>
                        <td width="300" valign="top"><p align="center"><strong>Con    apoyo visual</strong></p></td>
                        <td width="60" valign="top"><p align="center"><strong>F</strong></p></td>
                        <td width="75" valign="top"><p align="center"><strong>SF</strong></p></td>
                        <td width="75" valign="top"><p align="center"><strong>NF</strong></p></td>
                        <td width="82" valign="top"><p align="center"><strong>F</strong></p></td>
                        <td width="60" valign="top"><p align="center"><strong>SF</strong></p></td>
                        <td width="60" valign="top"><p align="center"><strong>NF</strong></p></td>
                        <td width="60" valign="top"><p align="center"><strong>F</strong></p></td>
                        <td width="60" valign="top"><p align="center"><strong>SF</strong></p></td>
                        <td width="60" valign="top"><p align="center"><strong>NF</strong></p></td>
                    </tr>
                    <tr>
                        <td width="300" valign="top"><p>Partes del cuerpo    grandes</p></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="av_pcg_1" name="av_pcg_1" value="<?php echo @$av_pcg_1; ?>" /></td>
                        <td width="75" valign="top"><input type="text" class="input_txt valid" id="av_pcg_2" name="av_pcg_2" value="<?php echo @$av_pcg_2; ?>" /></td>
                        <td width="75" valign="top"><input type="text" class="input_txt valid" id="av_pcg_3" name="av_pcg_3" value="<?php echo @$av_pcg_3; ?>" /></td>
                        <td width="82" valign="top"><input type="text" class="input_txt valid" id="av_pcg_4" name="av_pcg_4" value="<?php echo @$av_pcg_4; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="av_pcg_5" name="av_pcg_5" value="<?php echo @$av_pcg_5; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="av_pcg_6" name="av_pcg_6" value="<?php echo @$av_pcg_6; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="av_pcg_7" name="av_pcg_7" value="<?php echo @$av_pcg_7; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="av_pcg_8" name="av_pcg_8" value="<?php echo @$av_pcg_8; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="av_pcg_9" name="av_pcg_9" value="<?php echo @$av_pcg_9; ?>" /></td>
                    </tr>
                    <tr>
                        <td width="300" valign="top"><p>Partes del cuerpo finas</p></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="av_pcf_1" name="av_pcf_1" value="<?php echo @$av_pcf_1; ?>" /></td>
                        <td width="75" valign="top"><input type="text" class="input_txt valid" id="av_pcf_2" name="av_pcf_2" value="<?php echo @$av_pcf_2; ?>" /></td>
                        <td width="75" valign="top"><input type="text" class="input_txt valid" id="av_pcf_3" name="av_pcf_3" value="<?php echo @$av_pcf_3; ?>" /></td>
                        <td width="82" valign="top"><input type="text" class="input_txt valid" id="av_pcf_4" name="av_pcf_4" value="<?php echo @$av_pcf_4; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="av_pcf_5" name="av_pcf_5" value="<?php echo @$av_pcf_5; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="av_pcf_6" name="av_pcf_6" value="<?php echo @$av_pcf_6; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="av_pcf_7" name="av_pcf_7" value="<?php echo @$av_pcf_7; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="av_pcf_8" name="av_pcf_8" value="<?php echo @$av_pcf_8; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="av_pcf_9" name="av_pcf_9" value="<?php echo @$av_pcf_9; ?>" /></td>
                    </tr>
                    <tr>
                        <td width="300" valign="top"><p>Articulaciones </p></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="av_arti_1" name="av_arti_1" value="<?php echo @$av_arti_1; ?>" /></td>
                        <td width="75" valign="top"><input type="text" class="input_txt valid" id="av_arti_2" name="av_arti_2" value="<?php echo @$av_arti_2; ?>" /></td>
                        <td width="75" valign="top"><input type="text" class="input_txt valid" id="av_arti_3" name="av_arti_3" value="<?php echo @$av_arti_3; ?>" /></td>
                        <td width="82" valign="top"><input type="text" class="input_txt valid" id="av_arti_4" name="av_arti_4" value="<?php echo @$av_arti_4; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="av_arti_5" name="av_arti_5" value="<?php echo @$av_arti_5; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="av_arti_6" name="av_arti_6" value="<?php echo @$av_arti_6; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="av_arti_7" name="av_arti_7" value="<?php echo @$av_arti_7; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="av_arti_8" name="av_arti_8" value="<?php echo @$av_arti_8; ?>" /></td>
                        <td width="60" valign="top"><input type="text" class="input_txt valid" id="av_arti_9" name="av_arti_9" value="<?php echo @$av_arti_9; ?>" /></td>
                    </tr>
                </table>
            </div>

            <br>
            <div id="content_long" style="width: 90
                 0px; height: auto;overflow-x: auto">
                <table class="data " border="0" cellspacing="0" cellpadding="0" width="885">
                    <tr>
                        <td width="116" valign="top"><p align="center"><strong>Sin apoyo visual</strong></p></td>
                        <td width="81" valign="top" colspan="3"><p><strong>En si mismo</strong></p></td>
                       
                    </tr>
                    <tr>
                        <td width="116" valign="top"><p>Partes del cuerpo    grandes</p></td>
                        <td width="81" valign="top"><input type="text" class="input_txt valid" id="sv1" name="sv1" value="<?php echo @$sv1; ?>" /></td>
                        <td width="72" valign="top"><input type="text" class="input_txt valid" id="sv2" name="sv2" value="<?php echo @$sv2; ?>" /></td>
                        <td width="88" valign="top"><input type="text" class="input_txt valid" id="sv3" name="sv3" value="<?php echo @$sv3; ?>" /></td>
                       
                    </tr>
                    <tr>
                        <td width="116" valign="top"><p align="left">Partes del    cuerpo finas<strong></strong></p></td>
                        <td width="81" valign="top"><input type="text" class="input_txt valid" id="sv4" name="sv4" value="<?php echo @$sv4; ?>" /></td>
                        <td width="72" valign="top"><input type="text" class="input_txt valid" id="sv5" name="sv5" value="<?php echo @$sv5; ?>" /></td>
                        <td width="88" valign="top"><input type="text" class="input_txt valid" id="sv6" name="sv6" value="<?php echo @$sv6; ?>" /></td>
                       
                    </tr>
                    <tr>
                        <td width="116" valign="top"><p>Articulaciones<strong></strong></p></td>
                        <td width="81" valign="top"><input type="text" class="input_txt valid" id="sv7" name="sv7" value="<?php echo @$sv7; ?>" /></td>
                        <td width="72" valign="top"><input type="text" class="input_txt valid" id="sv8" name="sv8" value="<?php echo @$sv8; ?>" /></td>
                        <td width="88" valign="top"><input type="text" class="input_txt valid" id="sv9" name="sv9" value="<?php echo @$sv9; ?>" /></td>
                      
                    </tr>
                </table>
                <br>
                <table class="data" border="0" cellspacing="0" cellpadding="0" width="885">
                    <tr>
                        <td colspan="4" valign="top"><p align="center"><strong>AUDITIVO</strong></p></td>
                        <td colspan="3" valign="top"><p align="center"><strong>Funcional</strong></p></td>
                        <td colspan="2" valign="top"><p align="center"><strong>semifuncional</strong></p></td>
                        <td width="207" colspan="2" valign="top"><p align="center"><strong>No  funcional</strong></p></td>
                    </tr>
                    <tr>
                        <td colspan="4" valign="top"><p align="left">Identificación </p></td>
                        <td colspan="3" valign="top">
                            <input type="text" class="input_txt valid" id="au_i1" name="au_i1" value="<?php echo @$au_i1; ?>" />
                        </td>
                        <td colspan="2" valign="top"><input type="text" class="input_txt valid" id="au_i2" name="au_i2" value="<?php echo @$au_i2; ?>" /></td>
                        <td colspan="2" valign="top"><input type="text" class="input_txt valid" id="au_i3" name="au_i3" value="<?php echo @$au_i3; ?>" /></td>
                    </tr>
                    <tr>
                        <td colspan="4" valign="top"><p align="left">Localización </p></td>
                        <td colspan="3" valign="top"><input type="text" class="input_txt valid" id="aul_1" name="aul_1" value="<?php echo @$aul_1; ?>" /></td>
                        <td colspan="2" valign="top"><input type="text" class="input_txt valid" id="aul_2" name="aul_2" value="<?php echo @$aul_2; ?>" /></td>
                        <td colspan="2" valign="top"><input type="text" class="input_txt valid" id="aul_3" name="aul_3" value="<?php echo @$aul_3; ?>" /></td>
                    </tr>
                    <tr>
                        <td colspan="4" valign="top"><p align="left">Discriminación </p></td>
                        <td colspan="3" valign="top"><input type="text" class="input_txt valid" id="dicr_1" name="dicr_1" value="<?php echo @$dicr_1; ?>" /></td>
                        <td colspan="2" valign="top"><input type="text" class="input_txt valid" id="dicr2" name="dicr2" value="<?php echo @$dicr2; ?>" /></td>
                        <td colspan="2" valign="top"><input type="text" class="input_txt valid" id="dic_3" name="dic_3" value="<?php echo @$dic_3; ?>" /></td>
                    </tr>
                </table>
                <div id="content_long" style="width: 900px; height: auto;overflow-x: auto">
                    <p><strong>&nbsp;</strong></p>
                    <p>OBSERVACIONES:
                        <input type="text" class="input_txt valid" id="senso_obser1" name="senso_obser1" value="<?php echo @$senso_obser1; ?>" />
                    </p>

                    <br>
                </div>

            </div>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>