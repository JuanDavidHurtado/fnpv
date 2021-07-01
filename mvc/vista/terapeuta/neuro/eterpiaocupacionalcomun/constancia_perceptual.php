<?php
if (isset($_REQUEST['guardar_h2_patrones5']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h2_patrones'] == 'new') {

        $sql = "INSERT INTO h2_patrones (
`id_h2_patrones`,
`id_usuario`,
`historia`,
`id_proceso`,
`color_b`,
`color_r`,
`color_m`,
`tama_b`,
`tama_r`,
`tama_m`,
`form_b`,
`form_r`,
`form_m`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`patro_obser5`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['color_b'] . "' ,
'" . $_REQUEST['color_r'] . "' ,
'" . $_REQUEST['color_m'] . "' ,
'" . $_REQUEST['tama_b'] . "' ,
'" . $_REQUEST['tama_r'] . "' ,
'" . $_REQUEST['tama_m'] . "' ,
'" . $_REQUEST['form_b'] . "' ,
'" . $_REQUEST['form_r'] . "' ,
'" . $_REQUEST['form_m'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['patro_obser5'] . "'
) ";
    } else if ($_REQUEST['id_h2_patrones'] != '') {

        $sql = "UPDATE h2_patrones set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`color_b` = '" . $_REQUEST['color_b'] . "' ,
`color_r` = '" . $_REQUEST['color_r'] . "' ,
`color_m` = '" . $_REQUEST['color_m'] . "' ,
`tama_b` = '" . $_REQUEST['tama_b'] . "' ,
`tama_r` = '" . $_REQUEST['tama_r'] . "' ,
`tama_m` = '" . $_REQUEST['tama_m'] . "' ,
`form_b` = '" . $_REQUEST['form_b'] . "' ,
`form_r` = '" . $_REQUEST['form_r'] . "' ,
`form_m` = '" . $_REQUEST['form_m'] . "' ,
`patro_obser5` = '" . $_REQUEST['patro_obser5'] . "' WHERE `id_h2_patrones` = '" . $_REQUEST['id_h2_patrones'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h2_patrones = 'new';
$sql = "SELECT * from h2_patrones WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "'";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h2_patrones = $row['id_h2_patrones'];
    $color_b = $row['color_b'];
    $color_r = $row['color_r'];
    $color_m = $row['color_m'];
    $tama_b = $row['tama_b'];
    $tama_r = $row['tama_r'];
    $tama_m = $row['tama_m'];
    $form_b = $row['form_b'];
    $form_r = $row['form_r'];
    $form_m = $row['form_m'];
    $patro_obser5 = $row['patro_obser5'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h2_patrones5").click(function() {
            $("#open-h2_patrones5").show();
            $(this).hide();
            $("#content-h2_patrones5").hide('slow');
        });

        $("#open-h2_patrones5").click(function() {
            $("#close-h2_patrones5").show();
            $(this).hide();
            $("#content-h2_patrones5").show('slow');
        });

    });

</script>
<fieldset id="h2_patrones5">
    <legend align="left"> <div class="arrow-c" id="close-h2_patrones5"></div> <div class="arrow-o" id="open-h2_patrones5" ></div> <font>Valoracion terapia ocupacional neurorehabilitacion - Constancia perceptual</font></legend>
    <div id="content-h2_patrones5">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h2_patrones5" id="guardar_h2_patrones5" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h2_patrones5" name="form_h2_patrones5" action="<?php echo @$action_form_h2_patrones5 ?>#h2_patrones5" method="post">
            <input type="hidden" id="id_h2_patrones" name="id_h2_patrones" value="<?php echo @$id_h2_patrones ?>" />
            <table  border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="227"><p align="center">&nbsp;</p></td>
                    <td width="227"><p align="center">BUENA</p></td>
                    <td width="227"><p align="center">REGULAR</p></td>
                    <td width="227"><p align="center">MALA</p></td>
                </tr>
                <tr>
                    <td width="227" valign="top"><p>Color</p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="color_b" name="color_b" value="<?php echo @$color_b; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="color_r" name="color_r" value="<?php echo @$color_r; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="color_m" name="color_m" value="<?php echo @$color_m; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="227" valign="top"><p>Tamaño</p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="tama_b" name="tama_b" value="<?php echo @$tama_b; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="tama_r" name="tama_r" value="<?php echo @$tama_r; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="tama_m" name="tama_m" value="<?php echo @$tama_m; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="227" valign="top"><p>Forma</p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="form_b" name="form_b" value="<?php echo @$form_b; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="form_r" name="form_r" value="<?php echo @$form_r; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="form_m" name="form_m" value="<?php echo @$form_m; ?>" />
                        </p></td>
                </tr>
            </table>
            <p>OBSERVACIONES:
                <input type="text" class="input_txt valid" id="patro_obser5" name="patro_obser5" value="<?php echo @$patro_obser5; ?>" />
            </p>
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>