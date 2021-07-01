<?php
if (isset($_REQUEST['guardar_rtf_dolor']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtf_dolor'] == 'new') {

        $sql = "INSERT INTO rtf_dolor (
        `id_rtf_dolor`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `dolor_neuropatico`,
        `dolor_nociceptivo`,
        `dolor_localizacion`,
        `dolor_intencidad`,
        `dolor_tipo`,
        `dolor_f_exacerba`,
        `dolor_f_disminuye`,
        `agudo`,
        `id_cita`,
        `id_vinicial`,
        `cronico`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_REQUEST['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['dolor_neuropatico'] . "' ,
        '" . $_REQUEST['dolor_nociceptivo'] . "' ,
        '" . $_REQUEST['dolor_localizacion'] . "' ,
        '" . $_REQUEST['dolor_intencidad'] . "' ,
        '" . $_REQUEST['dolor_tipo'] . "' ,
        '" . $_REQUEST['dolor_f_exacerba'] . "' ,
        '" . $_REQUEST['dolor_f_disminuye'] . "' ,
        '" . $_REQUEST['agudo'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['cronico'] . "' 
        ) ";
    } else if ($_REQUEST['id_rtf_dolor'] != '') {

        $sql = "UPDATE rtf_dolor set 
        `dolor_neuropatico` = '" . $_REQUEST['dolor_neuropatico'] . "' ,
        `dolor_nociceptivo` = '" . $_REQUEST['dolor_nociceptivo'] . "' ,
        `dolor_localizacion` = '" . $_REQUEST['dolor_localizacion'] . "' ,
        `dolor_intencidad` = '" . $_REQUEST['dolor_intencidad'] . "' ,
        `dolor_tipo` = '" . $_REQUEST['dolor_tipo'] . "' ,
        `dolor_f_exacerba` = '" . $_REQUEST['dolor_f_exacerba'] . "' ,
        `dolor_f_disminuye` = '" . $_REQUEST['dolor_f_disminuye'] . "' ,
        `agudo` = '" . $_REQUEST['agudo'] . "' ,
        `cronico` = '" . $_REQUEST['cronico'] . "' WHERE `id_rtf_dolor` = '" . $_REQUEST['id_rtf_dolor'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rtf_dolor = 'new';
$sql = "SELECT * from rtf_dolor WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtf_dolor = $row['id_rtf_dolor'];
    $id_proceso = $row['id_proceso'];
    $id_usuario = $row['id_usuario'];
    $historia = $row['historia'];
    $dolor_neuropatico = $row['dolor_neuropatico'];
    $dolor_nociceptivo = $row['dolor_nociceptivo'];
    $dolor_localizacion = $row['dolor_localizacion'];
    $dolor_intencidad = $row['dolor_intencidad'];
    $dolor_tipo = $row['dolor_tipo'];
    $dolor_f_exacerba = $row['dolor_f_exacerba'];
    $dolor_f_disminuye = $row['dolor_f_disminuye'];
    $agudo = $row['agudo'];
    $cronico = $row['cronico'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rtf_dolor").click(function(){
            $("#open-rtf_dolor").show();
            $(this).hide();
            $("#content-rtf_dolor").hide('slow');
        });

        $("#open-rtf_dolor").click(function(){
            $("#close-rtf_dolor").show();
            $(this).hide();
            $("#content-rtf_dolor").show('slow');
        });

    });

</script>
<fieldset id="rtf_dolor">
    <legend align="left"> <div class="arrow-c" id="close-rtf_dolor"></div> <div class="arrow-o" id="open-rtf_dolor" ></div> <font>Valoracion terapia fisica - Dolor</font></legend>
    <div id="content-rtf_dolor">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rtf_dolor" id="guardar_rtf_dolor" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rtf_dolor" name="form_rtf_dolor" action="<?php echo @$action_form_rtf_dolor ?>#rtf_dolor" method="post">

            <input type="hidden" id="id_rtf_dolor" name="id_rtf_dolor" value="<?php echo @$id_rtf_dolor ?>" />
            
            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <th width="307" scope="col">Dolor</th>
                    <th width="191" scope="col">Duracion</th>
                </tr>
                <tr class="row1">
                    <td>NEUROPÁTICO:<input type="text" class="input_txt valid" id="dolor_neuropatico" name="dolor_neuropatico" value="<?php echo @$dolor_neuropatico; ?>" />
                    </td>
                    <td>Agudo:<input type="text" class="input_txt valid" id="agudo" name="agudo" value="<?php echo @$agudo; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td>NOCICEPTIVO:<input type="text" class="input_txt valid" id="dolor_nociceptivo" name="dolor_nociceptivo" value="<?php echo @$dolor_nociceptivo; ?>" />
                    </td>
                    <td>Crónico:<input type="text" class="input_txt valid" id="cronico" name="cronico" value="<?php echo @$cronico; ?>" /></td>
                </tr>
                <tr class="row1">
                    <td colspan="2">LOCALIZACIÓN:<br><input type="text" class="input_txt valid" id="dolor_localizacion" name="dolor_localizacion" value="<?php echo @$dolor_localizacion; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td colspan="2">INTENSIDDAD:<br><input type="text" class="input_txt valid" id="dolor_intencidad" name="dolor_intencidad" value="<?php echo @$dolor_intencidad; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td colspan="2">TIPO:<br><input type="text" class="input_txt valid" id="dolor_tipo" name="dolor_tipo" value="<?php echo @$dolor_tipo; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td height="31" colspan="2">F. EXACERBA:<br><input type="text" class="input_txt valid" id="dolor_f_exacerba" name="dolor_f_exacerba" value="<?php echo @$dolor_f_exacerba; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td colspan="2">F. DISMINUYE:<br><input type="text" class="input_txt valid" id="dolor_f_disminuye" name="dolor_f_disminuye" value="<?php echo @$dolor_f_disminuye; ?>" />
                    </td>
                </tr>
            </table>


            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>