<?php
if (isset($_REQUEST['guardar_antecedente_desarrollo_motor']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_antecedentes_desarollo_motor'] == 'new') {
        $sql = "INSERT INTO `antecedentes_desarollo_motor` 
        (`id_usuario`, `historia`, `id_proceso`, 
        `desnutricion_madre`, `infeccion_pre`, 
        `toxicos`, `ambiental`, `farmacos`, `rayos_x`, 
        `tx_fisico`, `parto_prolongado`, `sufrimiento_fetal`, 
        `anoxia`, `hipoxia`, `estreches_pelvica`, `prolapso_cordon`, 
        `lctericia`, `infeccion_pos`, `fiebre_alta`, `desnutricion`, 
        `epilepsia`, `metabolicos`, `traumatismo`, `convulciones`, 
        `control_cefalico_edad`, `control_cefalico_observacion`, 
        `arrastre_edad`, `arrastre_observacion`, `rolado_edad`, 
        `rolado_observacion`, `sedente_edad`, `sedente_observacion`, 
        `gateo_edad`, `gateo_observacion`, `bipedo_edad`, 
        `bipedo_observacion`, `marcha_edad`, `marcha_observacion`) 
        VALUES 
        ('" . $_SESSION['id_usuario'] . "' , '" . $_REQUEST['historia'] . "',  '" . $_REQUEST['id_proceso'] . "', 
        '" . $_REQUEST['desnutricion_madre'] . "', '" . $_REQUEST['infeccion_pre'] . "', 
        '" . $_REQUEST['toxicos'] . "', '" . $_REQUEST['ambiental'] . "', '" . $_REQUEST['farmacos'] . "', '" . $_REQUEST['rayos_x'] . "', 
        '" . $_REQUEST['tx_fisico'] . "', '" . $_REQUEST['parto_prolongado'] . "', '" . $_REQUEST['sufrimiento_fetal'] . "', 
        '" . $_REQUEST['anoxia'] . "', '" . $_REQUEST['hipoxia'] . "', '" . $_REQUEST['estreches_pelvica'] . "', '" . $_REQUEST['prolapso_cordon'] . "', 
        '" . $_REQUEST['lctericia'] . "', '" . $_REQUEST['infeccion_pos'] . "', '" . $_REQUEST['fiebre_alta'] . "', '" . $_REQUEST['desnutricion'] . "', 
        '" . $_REQUEST['epilepsia'] . "', '" . $_REQUEST['metabolicos'] . "', '" . $_REQUEST['traumatismo'] . "', '" . $_REQUEST['convulciones'] . "', 
        '" . $_REQUEST['control_cefalico_edad'] . "', '" . $_REQUEST['control_cefalico_observacion'] . "', 
        '" . $_REQUEST['arrastre_edad'] . "', '" . $_REQUEST['arrastre_observacion'] . "', '" . $_REQUEST['rolado_edad'] . "', 
        '" . $_REQUEST['rolado_observacion'] . "', '" . $_REQUEST['sedente_edad'] . "', '" . $_REQUEST['sedente_observacion'] . "', 
        '" . $_REQUEST['gateo_edad'] . "', '" . $_REQUEST['gateo_observacion'] . "', '" . $_REQUEST['bipedo_edad'] . "', 
        '" . $_REQUEST['bipedo_observacion'] . "', '" . $_REQUEST['marcha_edad'] . "', '" . $_REQUEST['marcha_observacion'] . "')
        ";
    } else if ($_REQUEST['id_antecedentes_desarollo_motor'] != '') {
       
       $sql = "Update antecedentes_desarollo_motor set
                `desnutricion_madre` = '".$_REQUEST['desnutricion_madre']."', 
                `infeccion_pre` = '".$_REQUEST['infeccion_pre']."', 
                `toxicos` = '".$_REQUEST['toxicos']."', 
                `ambiental` = '".$_REQUEST['ambiental']."', 
                `farmacos` = '".$_REQUEST['farmacos']."', 
                `rayos_x` = '".$_REQUEST['rayos_x']."', 
                `tx_fisico` = '".$_REQUEST['tx_fisico']."', 
                `parto_prolongado` = '".$_REQUEST['parto_prolongado']."', 
                `sufrimiento_fetal` = '".$_REQUEST['sufrimiento_fetal']."', 
                `anoxia` = '".$_REQUEST['anoxia']."', 
                `hipoxia` = '".$_REQUEST['hipoxia']."', 
                `estreches_pelvica` = '".$_REQUEST['estreches_pelvica']."', 
                `prolapso_cordon` = '".$_REQUEST['prolapso_cordon']."', 
                `lctericia` = '".$_REQUEST['lctericia']."', 
                `infeccion_pos` = '".$_REQUEST['infeccion_pos']."', 
                `fiebre_alta` = '".$_REQUEST['fiebre_alta']."', 
                `desnutricion` = '".$_REQUEST['desnutricion']."', 
                `epilepsia` = '".$_REQUEST['epilepsia']."', 
                `metabolicos` = '".$_REQUEST['metabolicos']."', 
                `traumatismo` = '".$_REQUEST['traumatismo']."', 
                `convulciones` = '".$_REQUEST['convulciones']."', 
                `control_cefalico_edad` = '".$_REQUEST['control_cefalico_edad']."', 
                `control_cefalico_observacion` = '".$_REQUEST['control_cefalico_observacion']."', 
                `arrastre_edad` = '".$_REQUEST['arrastre_edad']."', 
                `arrastre_observacion` = '".$_REQUEST['arrastre_observacion']."', 
                `rolado_edad` = '".$_REQUEST['rolado_edad']."', 
                `rolado_observacion` = '".$_REQUEST['rolado_observacion']."', 
                `sedente_edad` = '".$_REQUEST['sedente_edad']."', 
                `sedente_observacion` = '".$_REQUEST['sedente_observacion']."', 
                `gateo_edad` = '".$_REQUEST['gateo_edad']."', 
                `gateo_observacion` = '".$_REQUEST['gateo_observacion']."', 
                `bipedo_edad` = '".$_REQUEST['bipedo_edad']."', 
                `bipedo_observacion` = '".$_REQUEST['bipedo_observacion']."', 
                `marcha_edad` = '".$_REQUEST['marcha_edad']."', 
                `marcha_observacion`  = '".$_REQUEST['marcha_observacion']."'
                
                where 
                
                id_antecedentes_desarollo_motor = ".$_REQUEST['id_antecedentes_desarollo_motor']."
                    
                ";
    }

    $conexion->EjecutarQuery($sql);
}

$id_antecedentes_desarollo_motor = 'new';
$sql_select = "Select * from antecedentes_desarollo_motor where historia = " . $_REQUEST['historia'];
$result = $conexion->EjecutarQuery($sql_select);
while ($row_select = mysql_fetch_array($result)) {
    $id_antecedentes_desarollo_motor = $row_select['id_antecedentes_desarollo_motor'];
    $check_desnutricion_madre = $row_select['desnutricion_madre'] == 1 ? " checked='checked' " : "";
    $check_infeccion_pre = $row_select['infeccion_pre'] == 1 ? " checked='checked' " : "";
    $check_toxicos = $row_select['toxicos'] == 1 ? " checked='checked' " : "";
    $check_ambiental = $row_select['ambiental'] == 1 ? " checked='checked' " : "";
    $check_farmacos = $row_select['farmacos'] == 1 ? " checked='checked' " : "";
    $check_rayos_x = $row_select['rayos_x'] == 1 ? " checked='checked' " : "";
    $check_tx_fisico = $row_select['tx_fisico'] == 1 ? " checked='checked' " : "";
    $check_parto_prolongado = $row_select['parto_prolongado'] == 1 ? " checked='checked' " : "";
    $check_sufrimiento_fetal = $row_select['sufrimiento_fetal'] == 1 ? " checked='checked' " : "";
    $check_anoxia = $row_select['anoxia'] == 1 ? " checked='checked' " : "";
    $check_hipoxia = $row_select['hipoxia'] == 1 ? " checked='checked' " : "";
    $check_estreches_pelvica = $row_select['estreches_pelvica'] == 1 ? " checked='checked' " : "";
    $check_prolapso_cordon = $row_select['prolapso_cordon'] == 1 ? " checked='checked' " : "";
    $check_lctericia = $row_select['lctericia'] == 1 ? " checked='checked' " : "";
    $check_infeccion_pos = $row_select['infeccion_pos'] == 1 ? " checked='checked' " : "";
    $check_fiebre_alta = $row_select['fiebre_alta'] == 1 ? " checked='checked' " : "";
    $check_desnutricion = $row_select['desnutricion'] == 1 ? " checked='checked' " : "";
    $check_epilepsia = $row_select['epilepsia'] == 1 ? " checked='checked' " : "";
    $check_metabolicos = $row_select['metabolicos'] == 1 ? " checked='checked' " : "";
    $check_traumatismo = $row_select['traumatismo'] == 1 ? " checked='checked' " : "";
    $check_convulciones = $row_select['convulciones'] == 1 ? " checked='checked' " : "";
    $control_cefalico_edad  = $row_select['control_cefalico_edad'];
    $control_cefalico_observacion = $row_select['control_cefalico_observacion'];
    $arrastre_edad = $row_select['arrastre_edad'];
    $arrastre_observacion = $row_select['arrastre_observacion'];
    $rolado_edad = $row_select['rolado_edad'];
    $rolado_observacion = $row_select['rolado_observacion'];
    $sedente_edad = $row_select['sedente_edad'];
    $sedente_observacion = $row_select['sedente_observacion'];
    $gateo_edad = $row_select['gateo_edad'];
    $gateo_observacion = $row_select['gateo_observacion'];
    $bipedo_edad = $row_select['bipedo_edad'];
    $bipedo_observacion = $row_select['bipedo_observacion'];
    $marcha_edad = $row_select['marcha_edad'];
    $marcha_observacion = $row_select['marcha_observacion'];

    break;
}
?>
<script>

    $(function(){
            
        $("#form_antecedente_odontologico").validate({
            errorElement:"div",
            rules:{
                antecedente_odontologico:{required:true}
            },
            messages:{
                antecedente_odontologico:{required:"Ingrese antecedente para la sesion"}
            }
        }); 
        
        $("#close-antecedente-desarrollo-motor").click(function(){
            $("#open-antecedente-desarrollo-motor").show();
            $(this).hide();
            $("#content-antecedente-desarrollo-motor").hide('slow');
        });
        
        $("#open-antecedente-desarrollo-motor").click(function(){
            $("#close-antecedente-desarrollo-motor").show();
            $(this).hide();
            $("#content-antecedente-desarrollo-motor").show('slow');
        });
    
    });

</script>
<fieldset id="antecedente_desarrollo_motor">
    <legend align="left"> <div class="arrow-c" id="close-antecedente-desarrollo-motor"></div> <div class="arrow-o" id="open-antecedente-desarrollo-motor" ></div> <font>Antecedentes desarrollo motor</font></legend>
    <div id="content-antecedente-desarrollo-motor">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button  name="guardar_antecedente_desarrollo_motor" id="guardar_antecedente_desarrollo_motor" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_antecedente_desarrollo_motor" name="form_antecedente_desarrollo_motor" action="<?php echo @$action_form_antecedente_desarrollo_motor ?>#antecedente_desarrollo_motor" method="post">

            <input type="hidden" id="id_antecedentes_desarollo_motor" name="id_antecedentes_desarollo_motor" value="<?php echo @$id_antecedentes_desarollo_motor ?>" />
            <table width="200" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <th colspan="6" scope="col">No aplica</th>
                </tr>
                <tr class="row1">
                    <td valign="top" colspan="2">Prenatales</td>
                    <td valign="top" colspan="2">Perinatales</td>
                    <td valign="top" colspan="2">Posnatales</td>
                </tr>
                <tr class="row1">
                    <td valign="top">Desnutricion(madre)</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_desnutricion_madre ?> id="desnutricion_madre" name="desnutricion_madre" value="1" /></td>
                    <td valign="top">Parto Prolongado</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_parto_prolongado ?> value="1" id="parto_prolongado" name="parto_prolongado" /></td>
                    <td valign="top">Infeccion</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_infeccion_pos ?> value="1" id="infeccion_pos" name="infeccion_pos" /></td>
                </tr>
                <tr class="row1">
                    <td valign="top">Infeccion</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_infeccion_pre ?> value="1" id="infeccion_pre" name="infeccion_pre" /></td>
                    <td valign="top">Sufrimmiento Fetal</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_sufrimiento_fetal ?> value="1" id="sufrimiento_fetal" name="sufrimiento_fetal" /></td>
                    <td valign="top">Fiebre alta</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_fiebre_alta ?> value="1" id="fiebre_alta" name="fiebre_alta" /></td>
                </tr>
                <tr class="row1">
                    <td valign="top">Toxicos</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_toxicos ?> value="1" id="toxicos" name="toxicos" /></td>
                    <td valign="top">Anoxia</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_anoxia ?> value="1" id="anoxia" name="anoxia" /></td>
                    <td valign="top">Desnutricion</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_desnutricion ?> value="1" id="desnutricion" name="desnutricion" /></td>
                </tr>
                <tr class="row1">
                    <td valign="top">Ambiental</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_ambiental ?> value="1" id="ambiental" name="ambiental" /></td>
                    <td valign="top">Hipoxia</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_hipoxia ?> value="1" id="hipoxia" name="hipoxia" /></td>
                    <td valign="top">Epilepsia</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_epilepsia ?> value="1" id="epilepsia" name="epilepsia" /></td>
                </tr>
                <tr class="row1">
                    <td valign="top">Farmacos</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_farmacos ?> value="1" id="farmacos" name="farmacos" /></td>
                    <td valign="top">Estreches pelvica</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_estreches_pelvica ?> value="1" id="estreches_pelvica" name="estreches_pelvica" /></td>
                    <td valign="top">Metabolicos</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_metabolicos ?> value="1" id="metabolicos" name="metabolicos" /></td>
                </tr>
                <tr class="row1">
                    <td valign="top">Rayos X</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_rayos_x ?> value="1" id="rayos_x" name="rayos_x" /></td>
                    <td valign="top">Prolapso del cordon</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_prolapso_cordon ?> value="1" id="prolapso_cordon" name="prolapso_cordon" /></td>
                    <td valign="top">Traumatismo</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_traumatismo ?> value="1" id="traumatismo" name="traumatismo" /></td>
                </tr>
                <tr class="row1">
                    <td valign="top">Tx. Fisico</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_tx_fisico ?> value="1" id="tx_fisico" name="tx_fisico" /></td>
                    <td valign="top">lctericia</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_lctericia ?> value="1" id="lctericia" name="lctericia" /></td>
                    <td valign="top">Convulsiones</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_convulciones ?> value="1" id="convulciones" name="convulciones" /></td>
                </tr>
                <tr class="row1">
                    <td valign="top" colspan="2">Desarrollo Motor</td>
                    <td valign="top" colspan="2">Edad adquisicion</td>
                    <td valign="top" colspan="2">Observaciones</td>
                </tr>
                <tr class="row1">
                    <td valign="top" colspan="2">Control cefalico</td>
                    <td valign="top" colspan="2"><input type="text" style="min-width: 50px; max-width: 50px" class="input_txt valid" value="<?php echo @$control_cefalico_edad ?>" id="control_cefalico_edad" name="control_cefalico_edad" /></td>
                    <td valign="top" colspan="2"><textarea class="input_txt valid" id="control_cefalico_observacion" name="control_cefalico_observacion" ><?php echo @$control_cefalico_observacion ?></textarea></td>
                </tr>
                <tr class="row1">
                    <td valign="top" colspan="2">Arrastre</td>
                    <td valign="top" colspan="2"><input type="text" style="min-width: 50px; max-width: 50px" class="input_txt valid" value="<?php echo @$arrastre_edad ?>" id="arrastre_edad" name="arrastre_edad" /></td>
                    <td valign="top" colspan="2"><textarea class="input_txt valid" id="arrastre_observacion" name="arrastre_observacion" ><?php echo @$arrastre_observacion ?></textarea></td>
                </tr>
                <tr class="row1">
                    <td valign="top" colspan="2">Rolado</td>
                    <td valign="top" colspan="2"><input type="text" style="min-width: 50px; max-width: 50px" class="input_txt valid" id="rolado_edad" name="rolado_edad" value="<?php echo @$rolado_edad ?>" /></td>
                    <td valign="top" colspan="2"><textarea class="input_txt valid" id="rolado_observacion" name="rolado_observacion" ><?php echo @$rolado_observacion ?></textarea></td>
                </tr>
                <tr class="row1">
                    <td valign="top" colspan="2">Sedente</td>
                    <td valign="top" colspan="2"><input type="text" style="min-width: 50px; max-width: 50px" class="input_txt valid" id="sedente_edad" name="sedente_edad" value="<?php echo @$sedente_edad ?>" /></td>
                    <td valign="top" colspan="2"><textarea class="input_txt valid" id="sedente_observacion" name="sedente_observacion" ><?php echo @$sedente_observacion ?></textarea></td>
                </tr>
                <tr class="row1">
                    <td valign="top" colspan="2">Gateo</td>
                    <td valign="top" colspan="2"><input type="text" style="min-width: 50px; max-width: 50px" class="input_txt valid" id="gateo_edad" name="gateo_edad" value="<?php echo @$gateo_edad ?>" /></td>
                    <td valign="top" colspan="2"><textarea class="input_txt valid" id="gateo_observacion" name="gateo_observacion" ><?php echo @$gateo_observacion ?></textarea></td>
                </tr>
                <tr class="row1">
                    <td valign="top" colspan="2">Bipedo</td>
                    <td valign="top" colspan="2"><input type="text" style="min-width: 50px; max-width: 50px" class="input_txt valid" id="bipedo_edad" name="bipedo_edad" value="<?php echo @$bipedo_edad ?>" /></td>
                    <td valign="top" colspan="2"><textarea class="input_txt valid" id="bipedo_observacion" name="bipedo_observacion" ><?php echo @$bipedo_observacion ?></textarea></td>
                </tr>
                <tr class="row1">
                    <td valign="top" colspan="2">Marcha</td>
                    <td valign="top" colspan="2"><input type="text" style="min-width: 50px; max-width: 50px" class="input_txt valid" id="marcha_edad" name="marcha_edad" value="<?php echo @$marcha_edad ?>" /></td>
                    <td valign="top" colspan="2"><textarea class="input_txt valid" id="marcha_observacion" name="marcha_observacion"  ><?php echo @$marcha_observacion ?></textarea></td>
                </tr>
            </table>

            <!--<label>Antecendete</label>
            <br>
            <textarea <?php echo @$readonly ?> id="antecedente_odontologico" name="antecedente_odontologico" class="input_txt_area" rows="3" cols="50"><?php echo @$_REQUEST['antecedente_odo'] ?></textarea>
            <br>-->
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>