<?php
if (isset($_REQUEST['guardar_h2_patrones_nino5']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h2_patrones_nino'] == 'new') {

       $sql = "INSERT INTO h2_patrones_nino (
`id_h2_patrones_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`estero_b`,
`estero_r`,
`estero_m`,
`baro_b`,
`baro_r`,
`baro_m`,
`graf_b`,
`graf_r`,
`graf_m`,
`ident_b`,
`ident_r`,
`ident_m`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`patro_obser6`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['estero_b'] . "' ,
'" . $_REQUEST['estero_r'] . "' ,
'" . $_REQUEST['estero_m'] . "' ,
'" . $_REQUEST['baro_b'] . "' ,
'" . $_REQUEST['baro_r'] . "' ,
'" . $_REQUEST['baro_m'] . "' ,
'" . $_REQUEST['graf_b'] . "' ,
'" . $_REQUEST['graf_r'] . "' ,
'" . $_REQUEST['graf_m'] . "' ,
'" . $_REQUEST['ident_b'] . "' ,
'" . $_REQUEST['ident_r'] . "' ,
'" . $_REQUEST['ident_m'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['patro_obser6'] . "'
) ";
    } else if ($_REQUEST['id_h2_patrones_nino'] != '') {

        $sql = "UPDATE h2_patrones_nino set
`id_usuario` = '" . $_REQUEST['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`estero_b` = '" . $_REQUEST['estero_b'] . "' ,
`estero_r` = '" . $_REQUEST['estero_r'] . "' ,
`estero_m` = '" . $_REQUEST['estero_m'] . "' ,
`baro_b` = '" . $_REQUEST['baro_b'] . "' ,
`baro_r` = '" . $_REQUEST['baro_r'] . "' ,
`baro_m` = '" . $_REQUEST['baro_m'] . "' ,
`graf_b` = '" . $_REQUEST['graf_b'] . "' ,
`graf_r` = '" . $_REQUEST['graf_r'] . "' ,
`graf_m` = '" . $_REQUEST['graf_m'] . "' ,
`ident_b` = '" . $_REQUEST['ident_b'] . "' ,
`ident_r` = '" . $_REQUEST['ident_r'] . "' ,
`ident_m` = '" . $_REQUEST['ident_m'] . "' ,
`patro_obser6` = '" . $_REQUEST['patro_obser6'] . "' WHERE `id_h2_patrones_nino` = '" . $_REQUEST['id_h2_patrones_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h2_patrones_nino = 'new';
$sql = "SELECT * from h2_patrones_nino WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h2_patrones_nino = $row['id_h2_patrones_nino'];
    
    $estero_b = $row['estero_b'];
    $estero_r = $row['estero_r'];
    $estero_m = $row['estero_m'];
    $baro_b = $row['baro_b'];
    $baro_r = $row['baro_r'];
    $baro_m = $row['baro_m'];
    $graf_b = $row['graf_b'];
    $graf_r = $row['graf_r'];
    $graf_m = $row['graf_m'];
    $ident_b = $row['ident_b'];
    $ident_r = $row['ident_r'];
    $ident_m = $row['ident_m'];
    $patro_obser6 = $row['patro_obser6'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h2_patrones_nino5").click(function() {
            $("#open-h2_patrones_nino5").show();
            $(this).hide();
            $("#content-h2_patrones_nino5").hide('slow');
        });

        $("#open-h2_patrones_nino5").click(function() {
            $("#close-h2_patrones_nino5").show();
            $(this).hide();
            $("#content-h2_patrones_nino5").show('slow');
        });

    });

</script>
<fieldset id="h2_patrones_nino5">
    <legend align="left"> <div class="arrow-c" id="close-h2_patrones_nino5"></div> <div class="arrow-o" id="open-h2_patrones_nino5" ></div> <font>Valoracion terapia ocupacional de neurodesarrollo - Haptica</font></legend>
    <div id="content-h2_patrones_nino5">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_h2_patrones_nino5" id="guardar_h2_patrones_nino5" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
        <form id="form_h2_patrones_nino5" name="form_h2_patrones_nino5" action="<?php echo @$action_form_h2_patrones_nino5 ?>#h2_patrones_nino5" method="post">

            <input type="hidden" id="id_h2_patrones_nino" name="id_h2_patrones_nino" value="<?php echo @$id_h2_patrones_nino ?>" />

            <table  border="0" class="data"cellspacing="0" cellpadding="0">
                <tr>
                    <td width="227"><p align="center">&nbsp;</p></td>
                    <td width="227"><p align="center">BUENA</p></td>
                    <td width="227"><p align="center">REGULAR</p></td>
                    <td width="227"><p align="center">MALA</p></td>
                </tr>
                <tr>
                    <td width="227" valign="top"><p>Esterognosia</p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="estero_b" name="estero_b" value="<?php echo @$estero_b; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="estero_r" name="estero_r" value="<?php echo @$estero_r; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="estero_m" name="estero_m" value="<?php echo @$estero_m; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="227" valign="top"><p>Barognosia</p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="baro_b" name="baro_b" value="<?php echo @$baro_b; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="baro_r" name="baro_r" value="<?php echo @$baro_r; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="baro_m" name="baro_m" value="<?php echo @$baro_m; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="227" valign="top"><p>Grafestesia</p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="graf_b" name="graf_b" value="<?php echo @$graf_b; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="graf_r" name="graf_r" value="<?php echo @$graf_r; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="graf_m" name="graf_m" value="<?php echo @$graf_m; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="227" valign="top"><p>Identificación de    puntos</p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ident_b" name="ident_b" value="<?php echo @$ident_b; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ident_r" name="ident_r" value="<?php echo @$ident_r; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ident_m" name="ident_m" value="<?php echo @$ident_m; ?>" />
                        </p></td>
                </tr>
            </table>
            <p>OBSERVACIONES:
                <input type="text" class="input_txt valid" id="patro_obser6" name="patro_obser6" value="<?php echo @$patro_obser6; ?>" />
            </p>
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>