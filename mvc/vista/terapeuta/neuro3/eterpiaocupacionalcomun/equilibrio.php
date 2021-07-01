<?php
if (isset($_REQUEST['guardar_h2_patrones2']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h2_patrones'] == 'new') {

        $sql = "INSERT INTO h2_patrones (
`id_h2_patrones`,
`id_usuario`,
`historia`,
`id_proceso`,
`esta_b`,
`esta_r`,
`esta_m`,
`din_b`,
`din_r`,
`din_m`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`patro_obser3`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['esta_b'] . "' ,
'" . $_REQUEST['esta_r'] . "' ,
'" . $_REQUEST['esta_m'] . "' ,
'" . $_REQUEST['din_b'] . "' ,
'" . $_REQUEST['din_r'] . "' ,
'" . $_REQUEST['din_m'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['patro_obser3'] . "'
) ";
    } else if ($_REQUEST['id_h2_patrones'] != '') {

        $sql = "UPDATE h2_patrones set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`esta_b` = '" . $_REQUEST['esta_b'] . "' ,
`esta_r` = '" . $_REQUEST['esta_r'] . "' ,
`esta_m` = '" . $_REQUEST['esta_m'] . "' ,
`din_b` = '" . $_REQUEST['din_b'] . "' ,
`din_r` = '" . $_REQUEST['din_r'] . "' ,
`din_m` = '" . $_REQUEST['din_m'] . "' ,
`patro_obser3` = '" . $_REQUEST['patro_obser3'] . "' 
 WHERE `id_h2_patrones` = '" . $_REQUEST['id_h2_patrones'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h2_patrones = 'new';
$sql = "SELECT * from h2_patrones WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h2_patrones = $row['id_h2_patrones'];
    $esta_b = $row['esta_b'];
    $esta_r = $row['esta_r'];
    $esta_m = $row['esta_m'];
    $din_b = $row['din_b'];
    $din_r = $row['din_r'];
    $din_m = $row['din_m'];
    $patro_obser3 = $row['patro_obser3'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h2_patrones2").click(function() {
            $("#open-h2_patrones2").show();
            $(this).hide();
            $("#content-h2_patrones2").hide('slow');
        });

        $("#open-h2_patrones2").click(function() {
            $("#close-h2_patrones2").show();
            $(this).hide();
            $("#content-h2_patrones2").show('slow');
        });

    });

</script>
<fieldset id="h2_patrones2">
    <legend align="left"> <div class="arrow-c" id="close-h2_patrones2"></div> <div class="arrow-o" id="open-h2_patrones2" ></div> <font>Valoracion terapia ocupacional neurorehabilitacion - Equilibrio</font></legend>
    <div id="content-h2_patrones2">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h2_patrones2" id="guardar_h2_patrones2" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h2_patrones2" name="form_h2_patrones2" action="<?php echo @$action_form_h2_patrones2 ?>#h2_patrones2" method="post">

            <input type="hidden" id="id_h2_patrones" name="id_h2_patrones" value="<?php echo @$id_h2_patrones ?>" />

            <table  border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="227"><p align="center">&nbsp;</p></td>
                    <td width="227"><p align="center">BUENA</p></td>
                    <td width="227"><p align="center">REGULAR </p></td>
                    <td width="227"><p align="center">MALA</p></td>
                </tr>
                <tr>
                    <td width="227" valign="top"><p>Estático</p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="esta_b" name="esta_b" value="<?php echo @$esta_b; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="esta_r" name="esta_r" value="<?php echo @$esta_r; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="esta_m" name="esta_m" value="<?php echo @$esta_m; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="227" valign="top"><p>Dinámico</p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="din_b" name="din_b" value="<?php echo @$din_b; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="din_r" name="din_r" value="<?php echo @$din_r; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="din_m" name="din_m" value="<?php echo @$din_m; ?>" />
                        </p></td>
                </tr>
            </table>
            <p>OBSERVACIONES:
                <input type="text" class="input_txt valid" id="patro_obser3" name="patro_obser3" value="<?php echo @$patro_obser3; ?>" />
            </p>
            <br>
            <?php echo @$button ?>
        </form>
    </div>
</fieldset>