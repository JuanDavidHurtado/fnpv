<?php
if (isset($_REQUEST['guardar_h2_sensopercepcion1']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h2_sensopercepcion'] == 'new') {

        $sql = "INSERT INTO h2_sensopercepcion (
`id_h2_sensopercepcion`,
`id_usuario`,
`historia`,
`id_proceso`,
`picado_1`,
`picado_2`,
`picado_3`,
`resga_1`,
`resga_2`,
`resga_3`,
`cort_1`,
`cort_2`,
`cort_3`,
`dact_1`,
`dact_2`,
`dact_3`,
`fig_1`,
`fig_2`,
`fig_3`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`senso_obser_2`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['picado_1'] . "' ,
'" . $_REQUEST['picado_2'] . "' ,
'" . $_REQUEST['picado_3'] . "' ,
'" . $_REQUEST['resga_1'] . "' ,
'" . $_REQUEST['resga_2'] . "' ,
'" . $_REQUEST['resga_3'] . "' ,
'" . $_REQUEST['cort_1'] . "' ,
'" . $_REQUEST['cort_2'] . "' ,
'" . $_REQUEST['cort_3'] . "' ,
'" . $_REQUEST['dact_1'] . "' ,
'" . $_REQUEST['dact_2'] . "' ,
'" . $_REQUEST['dact_3'] . "' ,
'" . $_REQUEST['fig_1'] . "' ,
'" . $_REQUEST['fig_2'] . "' ,
'" . $_REQUEST['fig_3'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['senso_obser_2'] . "'
) ";
    } else if ($_REQUEST['id_h2_sensopercepcion'] != '') {

        $sql = "UPDATE h2_sensopercepcion set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`picado_1` = '" . $_REQUEST['picado_1'] . "' ,
`picado_2` = '" . $_REQUEST['picado_2'] . "' ,
`picado_3` = '" . $_REQUEST['picado_3'] . "' ,
`resga_1` = '" . $_REQUEST['resga_1'] . "' ,
`resga_2` = '" . $_REQUEST['resga_2'] . "' ,
`resga_3` = '" . $_REQUEST['resga_3'] . "' ,
`cort_1` = '" . $_REQUEST['cort_1'] . "' ,
`cort_2` = '" . $_REQUEST['cort_2'] . "' ,
`cort_3` = '" . $_REQUEST['cort_3'] . "' ,
`dact_1` = '" . $_REQUEST['dact_1'] . "' ,
`dact_2` = '" . $_REQUEST['dact_2'] . "' ,
`dact_3` = '" . $_REQUEST['dact_3'] . "' ,
`fig_1` = '" . $_REQUEST['fig_1'] . "' ,
`fig_2` = '" . $_REQUEST['fig_2'] . "' ,
`fig_3` = '" . $_REQUEST['fig_3'] . "' ,
`senso_obser_2` = '" . $_REQUEST['senso_obser_2'] . "' WHERE `id_h2_sensopercepcion` = '" . $_REQUEST['id_h2_sensopercepcion'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h2_sensopercepcion = 'new';
$sql = "SELECT * from h2_sensopercepcion WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h2_sensopercepcion = $row['id_h2_sensopercepcion'];

    $picado_1 = $row['picado_1'];
    $picado_2 = $row['picado_2'];
    $picado_3 = $row['picado_3'];
    $resga_1 = $row['resga_1'];
    $resga_2 = $row['resga_2'];
    $resga_3 = $row['resga_3'];
    $cort_1 = $row['cort_1'];
    $cort_2 = $row['cort_2'];
    $cort_3 = $row['cort_3'];
    $dact_1 = $row['dact_1'];
    $dact_2 = $row['dact_2'];
    $dact_3 = $row['dact_3'];
    $fig_1 = $row['fig_1'];
    $fig_2 = $row['fig_2'];
    $fig_3 = $row['fig_3'];
    $senso_obser_2 = $row['senso_obser_2'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h2_sensopercepcion1").click(function() {
            $("#open-h2_sensopercepcion1").show();
            $(this).hide();
            $("#content-h2_sensopercepcion1").hide('slow');
        });

        $("#open-h2_sensopercepcion1").click(function() {
            $("#close-h2_sensopercepcion1").show();
            $(this).hide();
            $("#content-h2_sensopercepcion1").show('slow');
        });

    });

</script>
<fieldset id="h2_sensopercepcion1">
    <legend align="left"> <div class="arrow-c" id="close-h2_sensopercepcion1"></div> <div class="arrow-o" id="open-h2_sensopercepcion1" ></div> <font>Valoracion terapia ocupacional neurorehabilitacion - Motricidad fina</font></legend>
    <div id="content-h2_sensopercepcion1">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h2_sensopercepcion1" id="guardar_h2_sensopercepcion1" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h2_sensopercepcion1" name="form_h2_sensopercepcion1" action="<?php echo @$action_form_h2_sensopercepcion1 ?>#h2_sensopercepcion1" method="post">

            <input type="hidden" id="id_h2_sensopercepcion" name="id_h2_sensopercepcion" value="<?php echo @$id_h2_sensopercepcion ?>" />

            <div id="content_long" style="width: 900px; height: auto;overflow-x: auto">

                <table border="0" class="data" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="227"><p align="center">&nbsp;</p></td>
                        <td width="227"><p align="center">BUENA</p></td>
                        <td width="227"><p align="center">REGULAR</p></td>
                        <td width="227"><p align="center">MALA</p></td>
                    </tr>
                    <tr>
                        <td width="227" valign="top"><p>Picado</p></td>
                        <td width="227" valign="top"><p>
                                <input type="text" class="input_txt valid" id="picado_1" name="picado_1" value="<?php echo @$picado_1; ?>" />
                            </p></td>
                        <td width="227" valign="top"><input type="text" class="input_txt valid" id="picado_2" name="picado_2" value="<?php echo @$picado_2; ?>" /></td>
                        <td width="227" valign="top"><input type="text" class="input_txt valid" id="picado_3" name="picado_3" value="<?php echo @$picado_3; ?>" /></td>
                    </tr>
                    <tr>
                        <td width="227" valign="top"><p>Rasgado</p></td>
                        <td width="227" valign="top"><input type="text" class="input_txt valid" id="resga_1" name="resga_1" value="<?php echo @$resga_1; ?>" /></td>
                        <td width="227" valign="top"><input type="text" class="input_txt valid" id="resga_2" name="resga_2" value="<?php echo @$resga_2; ?>" /></td>
                        <td width="227" valign="top"><input type="text" class="input_txt valid" id="resga_3" name="resga_3" value="<?php echo @$resga_3; ?>" /></td>
                    </tr>
                    <tr>
                        <td width="227" valign="top"><p>Recortado con    tijeras</p></td>
                        <td width="227" valign="top"><input type="text" class="input_txt valid" id="cort_1" name="cort_1" value="<?php echo @$cort_1; ?>" /></td>
                        <td width="227" valign="top"><input type="text" class="input_txt valid" id="cort_2" name="cort_2" value="<?php echo @$cort_2; ?>" /></td>
                        <td width="227" valign="top"><input type="text" class="input_txt valid" id="cort_3" name="cort_3" value="<?php echo @$cort_3; ?>" /></td>
                    </tr>
                    <tr>
                        <td width="227" valign="top"><p>Dactilipintura</p></td>
                        <td width="227" valign="top"><input type="text" class="input_txt valid" id="dact_1" name="dact_1" value="<?php echo @$dact_1; ?>" /></td>
                        <td width="227" valign="top"><input type="text" class="input_txt valid" id="dact_2" name="dact_2" value="<?php echo @$dact_2; ?>" /></td>
                        <td width="227" valign="top"><input type="text" class="input_txt valid" id="dact_3" name="dact_3" value="<?php echo @$dact_3; ?>" /></td>
                    </tr>
                    <tr>
                        <td width="227" valign="top"><p>Figura humana</p></td>
                        <td width="227" valign="top"><input type="text" class="input_txt valid" id="fig_1" name="fig_1" value="<?php echo @$fig_1; ?>" /></td>
                        <td width="227" valign="top"><input type="text" class="input_txt valid" id="fig_2" name="fig_2" value="<?php echo @$fig_2; ?>" /></td>
                        <td width="227" valign="top"><input type="text" class="input_txt valid" id="fig_3" name="fig_3" value="<?php echo @$fig_3; ?>" /></td>
                    </tr>
                </table>
                <p>OBSERVACIONES:
                    <input type="text" class="input_txt valid" id="senso_obser_2" name="senso_obser_2" value="<?php echo @$senso_obser_2; ?>" />
                </p>

                <?php echo @$button ?>
                <div>

                </div>

            </div>
        </form><br>
    </div>
</fieldset>