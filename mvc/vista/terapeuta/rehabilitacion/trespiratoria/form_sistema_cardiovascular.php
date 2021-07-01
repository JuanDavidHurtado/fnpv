<?php
if (isset($_REQUEST['guardar_scp']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_valoracion_rtf_sistema_cardiopulmonar'] == 'new') {

        $sql = "INSERT INTO `valoracion_rtf_sistema_cardiopulmonar` 
            (`id_proceso`, `id_usuario`,`historia`,
            `expansibilidad`, `spo2_ingreso`, `spo2_egreso`, `fc_ingreso`, `fc_egreso`,
            `fr_ingreso`, `fr_egreso`, `ta_ingreso`, `ta_egreso`,`to_ingreso`, `to_egreso`, `tirajes`, `cuales`,
            `aleteo_nasal`, `quejido_respiratorio`, `crepitacion`, `resonancia`,
            `hiper_resonancia`, `dolor`, `matidez`, `masas`, `timapnismo`,
            `murmullo_vesicular`, `ruidos_agregados`, `roncus`, `sibilancias`,
            `estertores`, `localizacion`, `deformidad_torax`, 
            `deformidad_torax_cual`,
            `id_cita`,
            `id_vinicial`,
            `patron_respiratorio`) 
            VALUES ('" . $_REQUEST['id_proceso'] . "', '" . $_SESSION['id_usuario'] . "', '" . $_REQUEST['historia'] . "', 
            '" . $_REQUEST['expansibilidad'] . "','" . $_REQUEST['spo2_ingreso'] . "', '" . $_REQUEST['spo2_egreso'] . "', '" . $_REQUEST['fc_ingreso'] . "', 
            '" . $_REQUEST['fc_egreso'] . "', '" . $_REQUEST['fr_ingreso'] . "', '" . $_REQUEST['fr_egreso'] . "', '" . $_REQUEST['ta_ingreso'] . "', '" . $_REQUEST['ta_egreso'] . "', 
            '" . $_REQUEST['to_ingreso'] . "','" . $_REQUEST['to_egreso'] . "', '" . $_REQUEST['tirajes'] . "', '" . $_REQUEST['cuales'] . "', '" . $_REQUEST['aleteo_nasal'] . "', 
            '" . $_REQUEST['quejido_respiratorio'] . "', '" . $_REQUEST['crepitacion'] . "', '" . $_REQUEST['resonancia'] . "', 
            '" . $_REQUEST['hiper_resonancia'] . "', '" . $_REQUEST['dolor'] . "', '" . $_REQUEST['matidez'] . "', '" . $_REQUEST['masas'] . "', '" . $_REQUEST['timapnismo'] . "', 
            '" . $_REQUEST['murmullo_vesicular'] . "', '" . $_REQUEST['ruidos_agregados'] . "', '" . $_REQUEST['roncus'] . "', '" . $_REQUEST['sibilancias'] . "', 
            '" . $_REQUEST['estertores'] . "', '" . $_REQUEST['localizacion'] . "', 
                '" . $_REQUEST['deformidad_torax'] . "', 
            '" . $_REQUEST['deformidad_torax_cual'] . "',
            '" . $_REQUEST['id_cita'] . "',
            '" . $_REQUEST['id_vinicial'] . "',
                '" . $_REQUEST['patron_respiratorio'] . "')";
    } else if ($_REQUEST['id_valoracion_rtf_sistema_cardiopulmonar'] != '') {

        $sql = "Update 
                `valoracion_rtf_sistema_cardiopulmonar`
                set
                `expansibilidad` = '" . $_REQUEST['expansibilidad'] . "', 
                `spo2_ingreso`  = '" . $_REQUEST['spo2_ingreso'] . "', 
                `spo2_egreso` = '" . $_REQUEST['spo2_egreso'] . "', 
                `fc_ingreso` = '" . $_REQUEST['fc_ingreso'] . "', 
                `fc_egreso` = '" . $_REQUEST['fc_egreso'] . "',
                `fr_ingreso` = '" . $_REQUEST['fr_ingreso'] . "', 
                `fr_egreso` = '" . $_REQUEST['fr_egreso'] . "', 
                `ta_ingreso` = '" . $_REQUEST['ta_ingreso'] . "', 
                `ta_egreso` = '" . $_REQUEST['ta_egreso'] . "',
                `to_ingreso` = '" . $_REQUEST['to_ingreso'] . "', 
                `to_egreso` = '" . $_REQUEST['to_egreso'] . "', 
                `tirajes` = '" . $_REQUEST['tirajes'] . "', 
                `cuales` = '" . $_REQUEST['cuales'] . "', 
                `aleteo_nasal` = '" . $_REQUEST['aleteo_nasal'] . "',  
                `quejido_respiratorio` = '" . $_REQUEST['quejido_respiratorio'] . "',  
                `crepitacion` = '" . $_REQUEST['crepitacion'] . "',  
                `resonancia` = '" . $_REQUEST['resonancia'] . "', 
                `hiper_resonancia` = '" . $_REQUEST['hiper_resonancia'] . "',  
                `dolor` = '" . $_REQUEST['dolor'] . "',  
                `matidez` = '" . $_REQUEST['matidez'] . "',  
                `masas` = '" . $_REQUEST['masas'] . "',  
                `timapnismo` = '" . $_REQUEST['timapnismo'] . "', 
                `murmullo_vesicular` = '" . $_REQUEST['murmullo_vesicular'] . "',  
                `ruidos_agregados` = '" . $_REQUEST['ruidos_agregados'] . "',  
                `roncus` = '" . $_REQUEST['roncus'] . "',  
                `sibilancias` = '" . $_REQUEST['sibilancias'] . "', 
                `estertores` = '" . $_REQUEST['estertores'] . "',  
                `localizacion` = '" . $_REQUEST['localizacion'] . "',  
                `deformidad_torax` = '" . $_REQUEST['deformidad_torax'] . "',  
                `deformidad_torax_cual` = '" . $_REQUEST['deformidad_torax_cual'] . "', 
                `patron_respiratorio`  = '" . $_REQUEST['patron_respiratorio'] . "'

                where 
                
                id_valoracion_rtf_sistema_cardiopulmonar = " . $_REQUEST['id_valoracion_rtf_sistema_cardiopulmonar'] . "
                    
                ";
    }

    $conexion->EjecutarQuery($sql);
}

$id_valoracion_rtf_sistema_cardiopulmonar = 'new';
$sql = "Select * from valoracion_rtf_sistema_cardiopulmonar where id_vinicial = " . $_REQUEST['id_vinicial'] . " ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {

    $id_valoracion_rtf_sistema_cardiopulmonar = $row['id_valoracion_rtf_sistema_cardiopulmonar'];
    $check_expansibilidad_si = $row['expansibilidad'] == 'si' ? ' checked ' : '';
    $check_expansibilidad_no = $row['expansibilidad'] == 'no' ? ' checked ' : '';
    $spo2_ingreso = $row['spo2_ingreso'];
    $spo2_egreso = $row['spo2_egreso'];
    $fc_ingreso = $row['fc_ingreso'];
    $fc_egreso = $row['fc_egreso'];
    $fr_ingreso = $row['fr_ingreso'];
    $fr_egreso = $row['fr_egreso'];
    $ta_ingreso = $row['ta_ingreso'];
    $ta_egreso = $row['ta_egreso'];
    $to_ingreso = $row['to_ingreso'];
    $to_egreso = $row['to_egreso'];
    $check_tirajes_si = $row['tirajes'] == 'si' ? ' checked ' : '';
    $check_tirajes_no = $row['tirajes'] == 'no' ? ' checked ' : '';
    $cuales = $row['cuales'];
    $check_aleteo_nasal_si = $row['aleteo_nasal'] == 'si' ? ' checked ' : '';
    $check_aleteo_nasal_no = $row['aleteo_nasal'] == 'no' ? ' checked ' : '';
    $check_quejido_respiratorio_si = $row['quejido_respiratorio'] == 'si' ? ' checked ' : '';
    $check_quejido_respiratorio_no = $row['quejido_respiratorio'] == 'no' ? ' checked ' : '';
    $check_crepitacion_si = $row['crepitacion'] == 'si' ? ' checked ' : '';
    $check_crepitacion_no = $row['crepitacion'] == 'no' ? ' checked ' : '';
    $check_resonancia_si = $row['resonancia'] == 'si' ? ' checked ' : '';
    $check_resonancia_no = $row['resonancia'] == 'no' ? ' checked ' : '';
    $check_hiper_resonancia_si = $row['hiper_resonancia'] == 'si' ? ' checked ' : '';
    $check_hiper_resonancia_no = $row['hiper_resonancia'] == 'no' ? ' checked ' : '';
    $check_dolor_si = $row['dolor'] == 'si' ? ' checked ' : '';
    $check_dolor_no = $row['dolor'] == 'no' ? ' checked ' : '';
    $check_matidez_si = $row['matidez'] == 'si' ? ' checked ' : '';
    $check_matidez_no = $row['matidez'] == 'no' ? ' checked ' : '';
    $check_masas_si = $row['masas'] == 'si' ? ' checked ' : '';
    $check_masas_no = $row['masas'] == 'no' ? ' checked ' : '';
    $check_timapnismo_si = $row['timapnismo'] == 'si' ? ' checked ' : '';
    $check_timapnismo_no = $row['timapnismo'] == 'no' ? ' checked ' : '';
    $check_murmullo_vesicular_nor = $row['murmullo_vesicular'] == 'nor' ? ' checked ' : '';
    $check_murmullo_vesicular_aumen = $row['murmullo_vesicular'] == 'aumen' ? ' checked ' : '';
    $check_murmullo_vesicular_dism = $row['murmullo_vesicular'] == 'dism' ? ' checked ' : '';
    $check_ruidos_agregados_si = $row['ruidos_agregados'] == 'si' ? ' checked ' : '';
    $check_ruidos_agregados_no = $row['ruidos_agregados'] == 'no' ? ' checked ' : '';
    $check_ruidos_agregados_si = $row['ruidos_agregados'] == 'si' ? ' checked ' : '';
    $check_ruidos_agregados_no = $row['ruidos_agregados'] == 'no' ? ' checked ' : '';
    $check_roncus = $row['roncus'] == '1' ? ' checked ' : '';
    $check_sibilancias = $row['sibilancias'] == '1' ? ' checked ' : '';
    $check_estertores = $row['estertores'] == '1' ? ' checked ' : '';
    $localizacion = $row['localizacion'];
    $check_deformidad_torax_si = $row['deformidad_torax'] == 'si' ? ' checked ' : '';
    $check_deformidad_torax_no = $row['deformidad_torax'] == 'no' ? ' checked ' : '';
    $deformidad_torax_cual = $row['deformidad_torax_cual'];
    $patron_respitatorio = $row['patron_respiratorio'];

    break;
}
?>
<script>

    $(function() {

        $("#form_scp").validate({
            errorElement: "div",
            rules: {
                antecedente_odontologico: {required: true}
            },
            messages: {
                antecedente_odontologico: {required: "Ingrese antecedente para la sesion"}
            }
        });

        $("#close-scp").click(function() {
            $("#open-scp").show();
            $(this).hide();
            $("#content-scp").hide('slow');
        });

        $("#open-scp").click(function() {
            $("#close-scp").show();
            $(this).hide();
            $("#content-scp").show('slow');
        });

    });

</script>
<fieldset id="valoracion_scp">
    <legend align="left"> <div class="arrow-c" id="close-scp"></div> <div class="arrow-o" id="open-scp" ></div> <font>Valoracion terapia fisica - Sistema cardiopulmonar</font></legend>
    <div id="content-scp">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button  name="guardar_scp" id="guardar_scp" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_scp" name="form_scp" action="<?php echo @$action_form_scp ?>#valoracion_scp" method="post">

            <input type="hidden" id="id_valoracion_rtf_sistema_cardiopulmonar" name="id_valoracion_rtf_sistema_cardiopulmonar" value="<?php echo @$id_valoracion_rtf_sistema_cardiopulmonar ?>" />

            <table width="" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <th colspan="3" scope="col">Inspeccion</th>
                    <th width="94" scope="col">Palpacion</th>
                    <th width="129" scope="col">Percusion</th>
                </tr>
                <tr class="row1">
                    <td width="37">&nbsp;</td>
                    <td width="144">Ingreso</td>
                    <td width="144">Egreso</td>
                    <td>Expansibilidad:
                        <br />
                        Si<input type="radio" name="expansibilidad" value="si" <?php echo $check_expansibilidad_si ?> /> 
                        No<input type="radio" name="expansibilidad" value="no" <?php echo $check_expansibilidad_no ?> /> 
                    </td>
                    <td>Resonancia:
                        <br />
                        Si<input type="radio" name="resonancia" value="si" <?php echo $check_resonancia_si ?> /> 
                        No<input type="radio" name="resonancia" value="no" <?php echo $check_resonancia_no ?> /> 
                    </td>
                </tr>
                <tr class="row1">
                    <td>SpO2</td>
                    <td>
                        <input type="text" style="" class="input_txt" value="<?php echo @$spo2_ingreso ?>" id="spo2_ingreso" name="spo2_ingreso" />
                    </td>
                    <td>
                        <input type="text" style="" class="input_txt" value="<?php echo @$spo2_egreso ?>" id="spo2_egreso" name="spo2_egreso" />
                    </td>
                    <td>Crepitacion:
                        <br />
                        Si<input type="radio" name="crepitacion" value="si" <?php echo $check_crepitacion_si ?> /> 
                        No<input type="radio" name="crepitacion" value="no" <?php echo $check_crepitacion_no ?> /> 
                    </td>
                    <td>Hiper resonancia:
                        <br />
                        Si<input type="radio" name="hiper_resonancia" value="si" <?php echo $check_hiper_resonancia_si ?> /> 
                        No<input type="radio" name="hiper_resonancia" value="no" <?php echo $check_hiper_resonancia_no ?> /> 
                    </td>
                </tr>
                <tr class="row1">
                    <td>FC</td>
                    <td><input type="text" style="" class="input_txt" value="<?php echo @$fc_ingreso ?>" id="fc_ingreso" name="fc_ingreso" /></td>
                    <td><input type="text" style="" class="input_txt" value="<?php echo @$fc_egreso ?>" id="fc_egreso" name="fc_egreso" /></td>
                    <td>Dolor:
                        <br />
                        Si<input type="radio" name="dolor" value="si" <?php echo $check_dolor_si ?> /> 
                        No<input type="radio" name="dolor" value="no" <?php echo $check_dolor_no ?> /> 
                    </td>
                    <td>Matidez:
                        <br />
                        Si<input type="radio" name="matidez" value="si" <?php echo $check_matidez_si ?> /> 
                        No<input type="radio" name="matidez" value="no" <?php echo $check_matidez_no ?> /> 
                    </td>
                </tr>
                <tr class="row1">
                    <td>FR</td>
                    <td><input type="text" style="" class="input_txt" value="<?php echo @$fr_ingreso ?>" id="fr_ingreso" name="fr_ingreso" /></td>
                    <td><input type="text" style="" class="input_txt" value="<?php echo @$fr_egreso ?>" id="fr_egreso" name="fr_egreso" /></td>
                    <td>Masas:
                        <br />
                        Si<input type="radio" name="masas" value="si" <?php echo $check_masas_si ?> /> 
                        No<input type="radio" name="masas" value="no" <?php echo $check_masas_no ?> /> 
                    </td>
                    <td>Timapnismo:
                        <br />
                        Si<input type="radio" name="timapnismo" value="si" <?php echo $check_timapnismo_si ?> /> 
                        No<input type="radio" name="timapnismo" value="no" <?php echo $check_timapnismo_no ?> /> 
                    </td>
                </tr>
                <tr class="row1">
                    <td>TA</td>
                    <td><input type="text" style="" class="input_txt" value="<?php echo @$ta_ingreso ?>" id="ta_ingreso" name="ta_ingreso" /></td>
                    <td><input type="text" style="" class="input_txt" value="<?php echo @$ta_egreso ?>" id="ta_egreso" name="ta_egreso" /></td>
                    <td colspan="2" align="center">Auscultacion Pulmonar</td>
                </tr>
                <tr class="row1">
                    <td>To</td>
                    <td><input type="text" style="" class="input_txt" value="<?php echo @$to_ingreso ?>" id="to_ingreso" name="to_ingreso" /></td>
                    <td><input type="text" style="" class="input_txt" value="<?php echo @$to_egreso ?>" id="to_egreso" name="to_egreso" /></td>
                    <td colspan="2">Murmullo vesicular:
                        <br />
                        Nor<input type="radio" name="murmullo_vesicular" value="nor" <?php echo $check_murmullo_vesicular_nor ?> /> 
                        Aumen<input type="radio" name="murmullo_vesicular" value="aumen" <?php echo $check_murmullo_vesicular_aumen ?> /> 
                        Dism<input type="radio" name="murmullo_vesicular" value="dism" <?php echo $check_murmullo_vesicular_dism ?> /> 
                    </td>
                </tr>
                <tr class="row1">
                    <td colspan="3" align='center'>SDR</td>
                    <td colspan="2">Ruidos agregados:
                        <br />
                        Si<input type="radio" name="ruidos_agregados" value="si" <?php echo $check_ruidos_agregados_si ?> /> 
                        No<input type="radio" name="ruidos_agregados" value="no" <?php echo $check_ruidos_agregados_no ?> /> 
                        <br> Roncus <input type="checkbox" id="roncus" name="roncus" value="1" <?php echo $check_roncus ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td colspan="3">
                        Tirajes:<br />
                        Si<input type="radio" name="tirajes" value="si" <?php echo $check_tirajes_si ?> /> 
                        No<input type="radio" name="tirajes" value="no" <?php echo $check_tirajes_no ?> /> 
                    </td>
                    <td colspan="2">
                        Sibilancias: <input type="checkbox" id="sibilancias" name="sibilancias" value="1" <?php echo $check_sibilancias ?> /> - 
                        Estertores: <input type="checkbox" id="estertores" name="estertores" value="1" <?php echo $check_estertores ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td colspan="3">Cuales<br />
                        <input type="text" style="" class="input_txt" value="<?php echo @$cuales ?>" id="cuales" name="cuales" />
                    </td>
                    <td colspan="2">Localizacion:<br />
                        <input type="text" style="" class="input_txt" value="<?php echo @$localizacion ?>" id="localizacion" name="localizacion" />
                    </td>
                </tr>
                <tr class="row1">
                    <td colspan="3">Aleteo Nasal:
                        <br />
                        Si<input type="radio" name="aleteo_nasal" value="si" <?php echo $check_aleteo_nasal_si ?> /> 
                        No<input type="radio" name="aleteo_nasal" value="no" <?php echo $check_aleteo_nasal_no ?> />
                    </td>
                    <td colspan="2">Deformidad del torax:
                        <br />
                        Si<input type="radio" name="deformidad_torax" value="si" <?php echo $check_deformidad_torax_si ?> /> 
                        No<input type="radio" name="deformidad_torax" value="no" <?php echo $check_deformidad_torax_no ?> />
                        <br>
                        Cuales:<br />
                        <input type="text" style="" class="input_txt" value="<?php echo @$deformidad_torax_cual ?>" id="deformidad_torax_cual" name="deformidad_torax_cual" />
                    </td>
                </tr>
                <tr class="row1">
                    <td colspan="3">Quejido respiratorio:
                        <br />
                        Si<input type="radio" name="quejido_respiratorio" value="si" <?php echo $check_quejido_respiratorio_si ?> /> 
                        No<input type="radio" name="quejido_respiratorio" value="no" <?php echo $check_quejido_respiratorio_no ?> />
                    </td>
                    <td colspan="2">Patron respiratorio:
                        <input type="text" style="" class="input_txt" value="<?php echo @$patron_respitatorio ?>" id="patron_respiratorio" name="patron_respiratorio" />
                    </td>
                </tr>
            </table>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>