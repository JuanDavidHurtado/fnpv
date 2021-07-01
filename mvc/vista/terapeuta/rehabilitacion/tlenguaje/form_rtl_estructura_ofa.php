<?php
if (isset($_REQUEST['guardar_rtl_estructura_ofa']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtl_estructura_ofa'] == 'new') {

        $sql = "INSERT INTO rtl_estructura_ofa (
        `id_rtl_estructura_ofa`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `labios_anatomia`,
        `labios_movilidad`,
        `labios_tono`,
        `labios_sensibilidad`,
        `lengua_anatomia`,
        `lengua_movilidad`,
        `lengua_tono`,
        `lengua_sensibilidad`,
        `mejillas_anatomia`,
        `mejillas_movilidad`,
        `mejillas_tono`,
        `mejillas_sensibilidad`,
        `velo_paladar_anatomia`,
        `velo_paladar_movilidad`,
        `velo_paladar_tono`,
        `velo_paladar_sensibilidad`,
        `paladar_oseo_anatomia`,
        `paladar_oseo_movilidad`,
        `paladar_oseo_tono`,
        `id_cita`,
        `id_vinicial`,
        `paladar_oseo_sensibilidad`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['labios_anatomia'] . "' ,
        '" . $_REQUEST['labios_movilidad'] . "' ,
        '" . $_REQUEST['labios_tono'] . "' ,
        '" . $_REQUEST['labios_sensibilidad'] . "' ,
        '" . $_REQUEST['lengua_anatomia'] . "' ,
        '" . $_REQUEST['lengua_movilidad'] . "' ,
        '" . $_REQUEST['lengua_tono'] . "' ,
        '" . $_REQUEST['lengua_sensibilidad'] . "' ,
        '" . $_REQUEST['mejillas_anatomia'] . "' ,
        '" . $_REQUEST['mejillas_movilidad'] . "' ,
        '" . $_REQUEST['mejillas_tono'] . "' ,
        '" . $_REQUEST['mejillas_sensibilidad'] . "' ,
        '" . $_REQUEST['velo_paladar_anatomia'] . "' ,
        '" . $_REQUEST['velo_paladar_movilidad'] . "' ,
        '" . $_REQUEST['velo_paladar_tono'] . "' ,
        '" . $_REQUEST['velo_paladar_sensibilidad'] . "' ,
        '" . $_REQUEST['paladar_oseo_anatomia'] . "' ,
        '" . $_REQUEST['paladar_oseo_movilidad'] . "' ,
        '" . $_REQUEST['paladar_oseo_tono'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['paladar_oseo_sensibilidad'] . "' 
        ) ";
    } else if ($_REQUEST['id_rtl_estructura_ofa'] != '') {

        $sql = "UPDATE rtl_estructura_ofa set 
        `labios_anatomia` = '" . $_REQUEST['labios_anatomia'] . "' ,
        `labios_movilidad` = '" . $_REQUEST['labios_movilidad'] . "' ,
        `labios_tono` = '" . $_REQUEST['labios_tono'] . "' ,
        `labios_sensibilidad` = '" . $_REQUEST['labios_sensibilidad'] . "' ,
        `lengua_anatomia` = '" . $_REQUEST['lengua_anatomia'] . "' ,
        `lengua_movilidad` = '" . $_REQUEST['lengua_movilidad'] . "' ,
        `lengua_tono` = '" . $_REQUEST['lengua_tono'] . "' ,
        `lengua_sensibilidad` = '" . $_REQUEST['lengua_sensibilidad'] . "' ,
        `mejillas_anatomia` = '" . $_REQUEST['mejillas_anatomia'] . "' ,
        `mejillas_movilidad` = '" . $_REQUEST['mejillas_movilidad'] . "' ,
        `mejillas_tono` = '" . $_REQUEST['mejillas_tono'] . "' ,
        `mejillas_sensibilidad` = '" . $_REQUEST['mejillas_sensibilidad'] . "' ,
        `velo_paladar_anatomia` = '" . $_REQUEST['velo_paladar_anatomia'] . "' ,
        `velo_paladar_movilidad` = '" . $_REQUEST['velo_paladar_movilidad'] . "' ,
        `velo_paladar_tono` = '" . $_REQUEST['velo_paladar_tono'] . "' ,
        `velo_paladar_sensibilidad` = '" . $_REQUEST['velo_paladar_sensibilidad'] . "' ,
        `paladar_oseo_anatomia` = '" . $_REQUEST['paladar_oseo_anatomia'] . "' ,
        `paladar_oseo_movilidad` = '" . $_REQUEST['paladar_oseo_movilidad'] . "' ,
        `paladar_oseo_tono` = '" . $_REQUEST['paladar_oseo_tono'] . "' ,
        `paladar_oseo_sensibilidad` = '" . $_REQUEST['paladar_oseo_sensibilidad'] . "' WHERE `id_rtl_estructura_ofa` = '" . $_REQUEST['id_rtl_estructura_ofa'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rtl_estructura_ofa = 'new';
$sql = "SELECT * from rtl_estructura_ofa WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtl_estructura_ofa = $row['id_rtl_estructura_ofa'];
    $labios_anatomia = $row['labios_anatomia'];
    $labios_movilidad = $row['labios_movilidad'];
    $labios_tono = $row['labios_tono'];
    $labios_sensibilidad = $row['labios_sensibilidad'];
    $lengua_anatomia = $row['lengua_anatomia'];
    $lengua_movilidad = $row['lengua_movilidad'];
    $lengua_tono = $row['lengua_tono'];
    $lengua_sensibilidad = $row['lengua_sensibilidad'];
    $mejillas_anatomia = $row['mejillas_anatomia'];
    $mejillas_movilidad = $row['mejillas_movilidad'];
    $mejillas_tono = $row['mejillas_tono'];
    $mejillas_sensibilidad = $row['mejillas_sensibilidad'];
    $velo_paladar_anatomia = $row['velo_paladar_anatomia'];
    $velo_paladar_movilidad = $row['velo_paladar_movilidad'];
    $velo_paladar_tono = $row['velo_paladar_tono'];
    $velo_paladar_sensibilidad = $row['velo_paladar_sensibilidad'];
    $paladar_oseo_anatomia = $row['paladar_oseo_anatomia'];
    $paladar_oseo_movilidad = $row['paladar_oseo_movilidad'];
    $paladar_oseo_tono = $row['paladar_oseo_tono'];
    $paladar_oseo_sensibilidad = $row['paladar_oseo_sensibilidad'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rtl_estructura_ofa").click(function(){
            $("#open-rtl_estructura_ofa").show();
            $(this).hide();
            $("#content-rtl_estructura_ofa").hide('slow');
        });

        $("#open-rtl_estructura_ofa").click(function(){
            $("#close-rtl_estructura_ofa").show();
            $(this).hide();
            $("#content-rtl_estructura_ofa").show('slow');
        });

    });

</script>
<fieldset id="rtl_estructura_ofa">
    <legend align="left"> <div class="arrow-c" id="close-rtl_estructura_ofa"></div> <div class="arrow-o" id="open-rtl_estructura_ofa" ></div> <font>Valoracion terapia lenguaje - rtl_estructura_ofa</font></legend>
    <div id="content-rtl_estructura_ofa">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rtl_estructura_ofa" id="guardar_rtl_estructura_ofa" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rtl_estructura_ofa" name="form_rtl_estructura_ofa" action="<?php echo @$action_form_rtl_estructura_ofa ?>#rtl_estructura_ofa" method="post">

            <input type="hidden" id="id_rtl_estructura_ofa" name="id_rtl_estructura_ofa" value="<?php echo @$id_rtl_estructura_ofa ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td><b>Organo</b></td>
                    <td><b>Anatomia</b></td>
                    <td><b>Movilidad</b></td>
                    <td><b>Tono</b></td>
                    <td><b>Sensibilidad</b></td>
                </tr>
                <tr class="row1">
                    <td><b>Labios</b></td>
                    <td><input type="text" class="input_txt valid" id="labios_anatomia" name="labios_anatomia" value="<?php echo @$labios_anatomia; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="labios_movilidad" name="labios_movilidad" value="<?php echo @$labios_movilidad; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="labios_tono" name="labios_tono" value="<?php echo @$labios_tono; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="labios_sensibilidad" name="labios_sensibilidad" value="<?php echo @$labios_sensibilidad; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Lengua</b></td>
                    <td><input type="text" class="input_txt valid" id="lengua_anatomia" name="lengua_anatomia" value="<?php echo @$lengua_anatomia; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="lengua_movilidad" name="lengua_movilidad" value="<?php echo @$lengua_movilidad; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="lengua_tono" name="lengua_tono" value="<?php echo @$lengua_tono; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="lengua_sensibilidad" name="lengua_sensibilidad" value="<?php echo @$lengua_sensibilidad; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Mejillas</b></td>
                    <td><input type="text" class="input_txt valid" id="mejillas_anatomia" name="mejillas_anatomia" value="<?php echo @$mejillas_anatomia; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="mejillas_movilidad" name="mejillas_movilidad" value="<?php echo @$mejillas_movilidad; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="mejillas_tono" name="mejillas_tono" value="<?php echo @$mejillas_tono; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="mejillas_sensibilidad" name="mejillas_sensibilidad" value="<?php echo @$mejillas_sensibilidad; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Velo del paladar</b></td>
                    <td><input type="text" class="input_txt valid" id="velo_paladar_anatomia" name="velo_paladar_anatomia" value="<?php echo @$velo_paladar_anatomia; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="velo_paladar_movilidad" name="velo_paladar_movilidad" value="<?php echo @$velo_paladar_movilidad; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="velo_paladar_tono" name="velo_paladar_tono" value="<?php echo @$velo_paladar_tono; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="velo_paladar_sensibilidad" name="velo_paladar_sensibilidad" value="<?php echo @$velo_paladar_sensibilidad; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Paladar </b></td>
                    <td><input type="text" class="input_txt valid" id="paladar_oseo_anatomia" name="paladar_oseo_anatomia" value="<?php echo @$paladar_oseo_anatomia; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="paladar_oseo_movilidad" name="paladar_oseo_movilidad" value="<?php echo @$paladar_oseo_movilidad; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="paladar_oseo_tono" name="paladar_oseo_tono" value="<?php echo @$paladar_oseo_tono; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="paladar_oseo_sensibilidad" name="paladar_oseo_sensibilidad" value="<?php echo @$paladar_oseo_sensibilidad; ?>" />
                    </td>
                </tr>
            </table>
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>