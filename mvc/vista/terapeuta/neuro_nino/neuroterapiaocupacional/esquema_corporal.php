<?php
if (isset($_REQUEST['guardar_h2_patrones_nino1']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h2_patrones_nino1'] == 'new') {

       $sql = "INSERT INTO h2_patrones_nino (
`id_h2_patrones_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`mis_b`,
`mis_r`,
`mis_m`,
`otra_b`,
`otra_r`,
`otra_m`,
`lam_b`,
`lam_r`,
`lam_m`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`patro_obser2`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['mis_b'] . "' ,
'" . $_REQUEST['mis_r'] . "' ,
'" . $_REQUEST['mis_m'] . "' ,
'" . $_REQUEST['otra_b'] . "' ,
'" . $_REQUEST['otra_r'] . "' ,
'" . $_REQUEST['otra_m'] . "' ,
'" . $_REQUEST['lam_b'] . "' ,
'" . $_REQUEST['lam_r'] . "' ,
'" . $_REQUEST['lam_m'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['patro_obser2'] . "' 
) ";
    } else if ($_REQUEST['id_h2_patrones_nino'] != '') {

        $sql = "UPDATE h2_patrones_nino set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`mis_b` = '" . $_REQUEST['mis_b'] . "' ,
`mis_r` = '" . $_REQUEST['mis_r'] . "' ,
`mis_m` = '" . $_REQUEST['mis_m'] . "' ,
`otra_b` = '" . $_REQUEST['otra_b'] . "' ,
`otra_r` = '" . $_REQUEST['otra_r'] . "' ,
`otra_m` = '" . $_REQUEST['otra_m'] . "' ,
`lam_b` = '" . $_REQUEST['lam_b'] . "' ,
`lam_r` = '" . $_REQUEST['lam_r'] . "' ,
`lam_m` = '" . $_REQUEST['lam_m'] . "' ,
`patro_obser2` = '" . $_REQUEST['patro_obser2'] . "' WHERE `id_h2_patrones_nino` = '" . $_REQUEST['id_h2_patrones_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h2_patrones_nino = 'new';
$sql = "SELECT * from h2_patrones_nino WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h2_patrones_nino = $row['id_h2_patrones_nino'];
    
    $mis_b = $row['mis_b'];
    $mis_r = $row['mis_r'];
    $mis_m = $row['mis_m'];
    $otra_b = $row['otra_b'];
    $otra_r = $row['otra_r'];
    $otra_m = $row['otra_m'];
    $lam_b = $row['lam_b'];
    $lam_r = $row['lam_r'];
    $lam_m = $row['lam_m'];
    $patro_obser2 = $row['patro_obser2'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h2_patrones_nino1").click(function() {
            $("#open-h2_patrones_nino1").show();
            $(this).hide();
            $("#content-h2_patrones_nino1").hide('slow');
        });

        $("#open-h2_patrones_nino1").click(function() {
            $("#close-h2_patrones_nino1").show();
            $(this).hide();
            $("#content-h2_patrones_nino1").show('slow');
        });

    });

</script>
<fieldset id="h2_patrones_nino1">
    <legend align="left"> <div class="arrow-c" id="close-h2_patrones_nino1"></div> <div class="arrow-o" id="open-h2_patrones_nino1" ></div> <font>Valoracion terapia ocupacional de neurodesarrollo - Esquema corporal</font></legend>
    <div id="content-h2_patrones_nino1">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_h2_patrones_nino1" id="guardar_h2_patrones_nino1" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
        <form id="form_h2_patrones_nino1" name="form_h2_patrones_nino1" action="<?php echo @$action_form_h2_patrones_nino1 ?>#h2_patrones_nino1" method="post">

            <input type="hidden" id="id_h2_patrones_nino" name="id_h2_patrones_nino" value="<?php echo @$id_h2_patrones_nino ?>" />

            <table  border="0" class="data" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="227"><p>&nbsp;</p></td>
                    <td width="227"><p align="center">BUENA</p></td>
                    <td width="227"><p align="center">REGULAR </p></td>
                    <td width="227"><p align="center">MALA</p></td>
                </tr>
                <tr>
                    <td width="227" valign="top"><p>En si mismo</p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="mis_b" name="mis_b" value="<?php echo @$mis_b; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="mis_r" name="mis_r" value="<?php echo @$mis_r; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="mis_m" name="mis_m" value="<?php echo @$mis_m; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="227" valign="top"><p>En otra persona</p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="otra_b" name="otra_b" value="<?php echo @$otra_b; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="otra_r" name="otra_r" value="<?php echo @$otra_r; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="otra_m" name="otra_m" value="<?php echo @$otra_m; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="227" valign="top"><p>En laminas</p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="lam_b" name="lam_b" value="<?php echo @$lam_b; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="lam_r" name="lam_r" value="<?php echo @$lam_r; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="lam_m" name="lam_m" value="<?php echo @$lam_m; ?>" />
                        </p></td>
                </tr>
            </table>
            <p>OBSERVACIONES:
                <input type="text" class="input_txt valid" id="patro_obser2" name="patro_obser2" value="<?php echo @$patro_obser2; ?>" />
            </p>
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>