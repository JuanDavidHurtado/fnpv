<?php
if (isset($_REQUEST['guardar_rto_integrales_gruesos']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rto_integrales_gruesos'] == 'new') {

        $sql = "INSERT INTO rto_integrales_gruesos (
        `id_rto_integrales_gruesos`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `alcanzar_funcional`,
        `alcanzar_semi_funcional`,
        `alcanzar_no_funcional`,
        `patear_funcional`,
        `patear_semi_funcional`,
        `patear_no_funcioal`,
        `soltar_funcional`,
        `soltar_semi_funcional`,
        `soltar_no_funcional`,
        `arrojar_funcional`,
        `arrojar_semi_funcional`,
        `arrojar_no_funcional`,
        `atajar_funcional`,
        `atajar_semi_funcional`,
        `id_cita`,
        `id_vinicial`,
        `atajar_no_funcional`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['alcanzar_funcional'] . "' ,
        '" . $_REQUEST['alcanzar_semi_funcional'] . "' ,
        '" . $_REQUEST['alcanzar_no_funcional'] . "' ,
        '" . $_REQUEST['patear_funcional'] . "' ,
        '" . $_REQUEST['patear_semi_funcional'] . "' ,
        '" . $_REQUEST['patear_no_funcioal'] . "' ,
        '" . $_REQUEST['soltar_funcional'] . "' ,
        '" . $_REQUEST['soltar_semi_funcional'] . "' ,
        '" . $_REQUEST['soltar_no_funcional'] . "' ,
        '" . $_REQUEST['arrojar_funcional'] . "' ,
        '" . $_REQUEST['arrojar_semi_funcional'] . "' ,
        '" . $_REQUEST['arrojar_no_funcional'] . "' ,
        '" . $_REQUEST['atajar_funcional'] . "' ,
        '" . $_REQUEST['atajar_semi_funcional'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['atajar_no_funcional'] . "' 
        ) ";
    } else if ($_REQUEST['id_rto_integrales_gruesos'] != '') {

        $sql = "UPDATE rto_integrales_gruesos set 
        `alcanzar_funcional` = '" . $_REQUEST['alcanzar_funcional'] . "' ,
        `alcanzar_semi_funcional` = '" . $_REQUEST['alcanzar_semi_funcional'] . "' ,
        `alcanzar_no_funcional` = '" . $_REQUEST['alcanzar_no_funcional'] . "' ,
        `patear_funcional` = '" . $_REQUEST['patear_funcional'] . "' ,
        `patear_semi_funcional` = '" . $_REQUEST['patear_semi_funcional'] . "' ,
        `patear_no_funcioal` = '" . $_REQUEST['patear_no_funcioal'] . "' ,
        `soltar_funcional` = '" . $_REQUEST['soltar_funcional'] . "' ,
        `soltar_semi_funcional` = '" . $_REQUEST['soltar_semi_funcional'] . "' ,
        `soltar_no_funcional` = '" . $_REQUEST['soltar_no_funcional'] . "' ,
        `arrojar_funcional` = '" . $_REQUEST['arrojar_funcional'] . "' ,
        `arrojar_semi_funcional` = '" . $_REQUEST['arrojar_semi_funcional'] . "' ,
        `arrojar_no_funcional` = '" . $_REQUEST['arrojar_no_funcional'] . "' ,
        `atajar_funcional` = '" . $_REQUEST['atajar_funcional'] . "' ,
        `atajar_semi_funcional` = '" . $_REQUEST['atajar_semi_funcional'] . "' ,
        `atajar_no_funcional` = '" . $_REQUEST['atajar_no_funcional'] . "' WHERE `id_rto_integrales_gruesos` = '" . $_REQUEST['id_rto_integrales_gruesos'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rto_integrales_gruesos = 'new';
$sql = "SELECT * from rto_integrales_gruesos WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rto_integrales_gruesos = $row['id_rto_integrales_gruesos'];
    $id_proceso = $row['id_proceso'];
    $id_usuario = $row['id_usuario'];
    $historia = $row['historia'];
    $alcanzar_funcional = $row['alcanzar_funcional'];
    $alcanzar_semi_funcional = $row['alcanzar_semi_funcional'];
    $alcanzar_no_funcional = $row['alcanzar_no_funcional'];
    $patear_funcional = $row['patear_funcional'];
    $patear_semi_funcional = $row['patear_semi_funcional'];
    $patear_no_funcioal = $row['patear_no_funcioal'];
    $soltar_funcional = $row['soltar_funcional'];
    $soltar_semi_funcional = $row['soltar_semi_funcional'];
    $soltar_no_funcional = $row['soltar_no_funcional'];
    $arrojar_funcional = $row['arrojar_funcional'];
    $arrojar_semi_funcional = $row['arrojar_semi_funcional'];
    $arrojar_no_funcional = $row['arrojar_no_funcional'];
    $atajar_funcional = $row['atajar_funcional'];
    $atajar_semi_funcional = $row['atajar_semi_funcional'];
    $atajar_no_funcional = $row['atajar_no_funcional'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rto_integrales_gruesos").click(function(){
            $("#open-rto_integrales_gruesos").show();
            $(this).hide();
            $("#content-rto_integrales_gruesos").hide('slow');
        });

        $("#open-rto_integrales_gruesos").click(function(){
            $("#close-rto_integrales_gruesos").show();
            $(this).hide();
            $("#content-rto_integrales_gruesos").show('slow');
        });

    });

</script>
<fieldset id="rto_integrales_gruesos">
    <legend align="left"> <div class="arrow-c" id="close-rto_integrales_gruesos"></div> <div class="arrow-o" id="open-rto_integrales_gruesos" ></div> <font>Valoracion terapia ocupacional - Integrales Gruesos</font></legend>
    <div id="content-rto_integrales_gruesos">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rto_integrales_gruesos" id="guardar_rto_integrales_gruesos" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rto_integrales_gruesos" name="form_rto_integrales_gruesos" action="<?php echo @$action_form_rto_integrales_gruesos ?>#rto_integrales_gruesos" method="post">

            <input type="hidden" id="id_rto_integrales_gruesos" name="id_rto_integrales_gruesos" value="<?php echo @$id_rto_integrales_gruesos ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td><b>Agarres</b></td>
                    <td><b>Funcional</b></td>
                    <td><b>Semi-Funcional</b></td>
                    <td><b>No funcional</b></td>
                </tr>
                <tr class="row1">
                    <td><b>Alcanzar</b></td>
                    <td><input type="text" class="input_txt valid" id="alcanzar_funcional" name="alcanzar_funcional" value="<?php echo @$alcanzar_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="alcanzar_semi_funcional" name="alcanzar_semi_funcional" value="<?php echo @$alcanzar_semi_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="alcanzar_no_funcional" name="alcanzar_no_funcional" value="<?php echo @$alcanzar_no_funcional; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Patear</b></td>
                    <td><input type="text" class="input_txt valid" id="patear_funcional" name="patear_funcional" value="<?php echo @$patear_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="patear_semi_funcional" name="patear_semi_funcional" value="<?php echo @$patear_semi_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="patear_no_funcioal" name="patear_no_funcioal" value="<?php echo @$patear_no_funcioal; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Soltar</b></td>
                    <td><input type="text" class="input_txt valid" id="soltar_funcional" name="soltar_funcional" value="<?php echo @$soltar_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="soltar_semi_funcional" name="soltar_semi_funcional" value="<?php echo @$soltar_semi_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="soltar_no_funcional" name="soltar_no_funcional" value="<?php echo @$soltar_no_funcional; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Arrojar</b></td>
                    <td><input type="text" class="input_txt valid" id="arrojar_funcional" name="arrojar_funcional" value="<?php echo @$arrojar_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="arrojar_semi_funcional" name="arrojar_semi_funcional" value="<?php echo @$arrojar_semi_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="arrojar_no_funcional" name="arrojar_no_funcional" value="<?php echo @$arrojar_no_funcional; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Atajar</b></td>
                    <td><input type="text" class="input_txt valid" id="atajar_funcional" name="atajar_funcional" value="<?php echo @$atajar_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="atajar_semi_funcional" name="atajar_semi_funcional" value="<?php echo @$atajar_semi_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="atajar_no_funcional" name="atajar_no_funcional" value="<?php echo @$atajar_no_funcional; ?>" />
                    </td>
                </tr>
            </table>

            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>