<?php
if (isset($_REQUEST['guardar_rto_integrales_funcionales']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rto_integrales_funcionales'] == 'new') {

        $sql = "INSERT INTO rto_integrales_funcionales (
        `id_rto_integrales_funcionales`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `mano_boca_funcional`,
        `mano_boca_semi_funcional`,
        `mano_boca_no_funcional`,
        `mano_cabeza_funcional`,
        `mano_cabeza_semi_funcional`,
        `mano_cabeza_no_funcional`,
        `mano_cuello_funcional`,
        `mano_cuello_semi_funcional`,
        `mano_cuello_no_funcional`,
        `mano_espalda_funcional`,
        `mano_espalda_semi_funcional`,
        `mano_espalda_no_funcional`,
        `mano_piernas_funcional`,
        `mano_piernas_semi_funcional`,
        `mano_piernas_no_funcional`,
        `mano_pie_funcional`,
        `mano_pie_semi_funcional`,
        `id_cita`,
        `id_vinicial`,
        `mano_pie_no_funcional`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['mano_boca_funcional'] . "' ,
        '" . $_REQUEST['mano_boca_semi_funcional'] . "' ,
        '" . $_REQUEST['mano_boca_no_funcional'] . "' ,
        '" . $_REQUEST['mano_cabeza_funcional'] . "' ,
        '" . $_REQUEST['mano_cabeza_semi_funcional'] . "' ,
        '" . $_REQUEST['mano_cabeza_no_funcional'] . "' ,
        '" . $_REQUEST['mano_cuello_funcional'] . "' ,
        '" . $_REQUEST['mano_cuello_semi_funcional'] . "' ,
        '" . $_REQUEST['mano_cuello_no_funcional'] . "' ,
        '" . $_REQUEST['mano_espalda_funcional'] . "' ,
        '" . $_REQUEST['mano_espalda_semi_funcional'] . "' ,
        '" . $_REQUEST['mano_espalda_no_funcional'] . "' ,
        '" . $_REQUEST['mano_piernas_funcional'] . "' ,
        '" . $_REQUEST['mano_piernas_semi_funcional'] . "' ,
        '" . $_REQUEST['mano_piernas_no_funcional'] . "' ,
        '" . $_REQUEST['mano_pie_funcional'] . "' ,
        '" . $_REQUEST['mano_pie_semi_funcional'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['mano_pie_no_funcional'] . "' 
        ) ";
    } else if ($_REQUEST['id_rto_integrales_funcionales'] != '') {

        $sql = "UPDATE rto_integrales_funcionales set 
        `mano_boca_funcional` = '" . $_REQUEST['mano_boca_funcional'] . "' ,
        `mano_boca_semi_funcional` = '" . $_REQUEST['mano_boca_semi_funcional'] . "' ,
        `mano_boca_no_funcional` = '" . $_REQUEST['mano_boca_no_funcional'] . "' ,
        `mano_cabeza_funcional` = '" . $_REQUEST['mano_cabeza_funcional'] . "' ,
        `mano_cabeza_semi_funcional` = '" . $_REQUEST['mano_cabeza_semi_funcional'] . "' ,
        `mano_cabeza_no_funcional` = '" . $_REQUEST['mano_cabeza_no_funcional'] . "' ,
        `mano_cuello_funcional` = '" . $_REQUEST['mano_cuello_funcional'] . "' ,
        `mano_cuello_semi_funcional` = '" . $_REQUEST['mano_cuello_semi_funcional'] . "' ,
        `mano_cuello_no_funcional` = '" . $_REQUEST['mano_cuello_no_funcional'] . "' ,
        `mano_espalda_funcional` = '" . $_REQUEST['mano_espalda_funcional'] . "' ,
        `mano_espalda_semi_funcional` = '" . $_REQUEST['mano_espalda_semi_funcional'] . "' ,
        `mano_espalda_no_funcional` = '" . $_REQUEST['mano_espalda_no_funcional'] . "' ,
        `mano_piernas_funcional` = '" . $_REQUEST['mano_piernas_funcional'] . "' ,
        `mano_piernas_semi_funcional` = '" . $_REQUEST['mano_piernas_semi_funcional'] . "' ,
        `mano_piernas_no_funcional` = '" . $_REQUEST['mano_piernas_no_funcional'] . "' ,
        `mano_pie_funcional` = '" . $_REQUEST['mano_pie_funcional'] . "' ,
        `mano_pie_semi_funcional` = '" . $_REQUEST['mano_pie_semi_funcional'] . "' ,
        `mano_pie_no_funcional` = '" . $_REQUEST['mano_pie_no_funcional'] . "' WHERE `id_rto_integrales_funcionales` = '" . $_REQUEST['id_rto_integrales_funcionales'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rto_integrales_funcionales = 'new';
$sql = "SELECT * from rto_integrales_funcionales WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rto_integrales_funcionales = $row['id_rto_integrales_funcionales'];
    $mano_boca_funcional = $row['mano_boca_funcional'];
    $mano_boca_semi_funcional = $row['mano_boca_semi_funcional'];
    $mano_boca_no_funcional = $row['mano_boca_no_funcional'];
    $mano_cabeza_funcional = $row['mano_cabeza_funcional'];
    $mano_cabeza_semi_funcional = $row['mano_cabeza_semi_funcional'];
    $mano_cabeza_no_funcional = $row['mano_cabeza_no_funcional'];
    $mano_cuello_funcional = $row['mano_cuello_funcional'];
    $mano_cuello_semi_funcional = $row['mano_cuello_semi_funcional'];
    $mano_cuello_no_funcional = $row['mano_cuello_no_funcional'];
    $mano_espalda_funcional = $row['mano_espalda_funcional'];
    $mano_espalda_semi_funcional = $row['mano_espalda_semi_funcional'];
    $mano_espalda_no_funcional = $row['mano_espalda_no_funcional'];
    $mano_piernas_funcional = $row['mano_piernas_funcional'];
    $mano_piernas_semi_funcional = $row['mano_piernas_semi_funcional'];
    $mano_piernas_no_funcional = $row['mano_piernas_no_funcional'];
    $mano_pie_funcional = $row['mano_pie_funcional'];
    $mano_pie_semi_funcional = $row['mano_pie_semi_funcional'];
    $mano_pie_no_funcional = $row['mano_pie_no_funcional'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rto_integrales_funcionales").click(function(){
            $("#open-rto_integrales_funcionales").show();
            $(this).hide();
            $("#content-rto_integrales_funcionales").hide('slow');
        });

        $("#open-rto_integrales_funcionales").click(function(){
            $("#close-rto_integrales_funcionales").show();
            $(this).hide();
            $("#content-rto_integrales_funcionales").show('slow');
        });

    });

</script>
<fieldset id="rto_integrales_funcionales">
    <legend align="left"> <div class="arrow-c" id="close-rto_integrales_funcionales"></div> <div class="arrow-o" id="open-rto_integrales_funcionales" ></div> <font>Valoracion terapia ocupacional - Integrales Funcionales</font></legend>
    <div id="content-rto_integrales_funcionales">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rto_integrales_funcionales" id="guardar_rto_integrales_funcionales" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rto_integrales_funcionales" name="form_rto_integrales_funcionales" action="<?php echo @$action_form_rto_integrales_funcionales ?>#rto_integrales_funcionales" method="post">

            <input type="hidden" id="id_rto_integrales_funcionales" name="id_rto_integrales_funcionales" value="<?php echo @$id_rto_integrales_funcionales ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td><b>Agarres</b></td>
                    <td><b>Funcional</b></td>
                    <td><b>Semi-Funcional</b></td>
                    <td><b>No funcional</b></td>
                </tr>
                <tr class="row1">
                    <td><b>Mano-boca</b></td>
                    <td><input type="text" class="input_txt valid" id="mano_boca_funcional" name="mano_boca_funcional" value="<?php echo @$mano_boca_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="mano_boca_semi_funcional" name="mano_boca_semi_funcional" value="<?php echo @$mano_boca_semi_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="mano_boca_no_funcional" name="mano_boca_no_funcional" value="<?php echo @$mano_boca_no_funcional; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Mano-cabeza</b></td>
                    <td><input type="text" class="input_txt valid" id="mano_cabeza_funcional" name="mano_cabeza_funcional" value="<?php echo @$mano_cabeza_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="mano_cabeza_semi_funcional" name="mano_cabeza_semi_funcional" value="<?php echo @$mano_cabeza_semi_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="mano_cabeza_no_funcional" name="mano_cabeza_no_funcional" value="<?php echo @$mano_cabeza_no_funcional; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Mano-cuello</b></td>
                    <td><input type="text" class="input_txt valid" id="mano_cuello_funcional" name="mano_cuello_funcional" value="<?php echo @$mano_cuello_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="mano_cuello_semi_funcional" name="mano_cuello_semi_funcional" value="<?php echo @$mano_cuello_semi_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="mano_cuello_no_funcional" name="mano_cuello_no_funcional" value="<?php echo @$mano_cuello_no_funcional; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Mano-espalda</b></td>
                    <td><input type="text" class="input_txt valid" id="mano_espalda_funcional" name="mano_espalda_funcional" value="<?php echo @$mano_espalda_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="mano_espalda_semi_funcional" name="mano_espalda_semi_funcional" value="<?php echo @$mano_espalda_semi_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="mano_espalda_no_funcional" name="mano_espalda_no_funcional" value="<?php echo @$mano_espalda_no_funcional; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Mano-piernas</b></td>
                    <td><input type="text" class="input_txt valid" id="mano_piernas_funcional" name="mano_piernas_funcional" value="<?php echo @$mano_piernas_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="mano_piernas_semi_funcional" name="mano_piernas_semi_funcional" value="<?php echo @$mano_piernas_semi_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="mano_piernas_no_funcional" name="mano_piernas_no_funcional" value="<?php echo @$mano_piernas_no_funcional; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Mano-pie</b></td>
                    <td><input type="text" class="input_txt valid" id="mano_pie_funcional" name="mano_pie_funcional" value="<?php echo @$mano_pie_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="mano_pie_semi_funcional" name="mano_pie_semi_funcional" value="<?php echo @$mano_pie_semi_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="mano_pie_no_funcional" name="mano_pie_no_funcional" value="<?php echo @$mano_pie_no_funcional; ?>" />
                    </td>
                </tr>
            </table>

            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>