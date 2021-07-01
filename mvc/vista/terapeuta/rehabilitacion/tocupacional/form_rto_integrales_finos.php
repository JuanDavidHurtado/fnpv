<?php
if (isset($_REQUEST['guardar_tlo_integrales_finos']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_tlo_integrales_finos'] == 'new') {

        $sql = "INSERT INTO rto_integrales_finos (
        `id_tlo_integrales_finos`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `mano_llena_funcional`,
        `mano_llena_semi_funcional`,
        `mano_llena_no_funcional`,
        `cilindro_funcional`,
        `cilindro_semi_funcional`,
        `cilindro_no_funcional`,
        `enganche_funcional`,
        `enganche_semi_funcional`,
        `enganche_no_funcional`,
        `pinzas_funcional`,
        `pinzas_semi_funcional`,
        `pinzas_no_funcional`,
        `fina_funcional`,
        `fina_semi_funcional`,
        `fina_no_funcional`,
        `tripode_funcional`,
        `tripode_semi_funcional`,
        `tripode_no_funcional`,
        `latero_lateral_funcional`,
        `latero_lateral_semi_funcional`,
        `id_cita`,
        `id_vinicial`,
        `latero_lateral_no_funcional`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['mano_llena_funcional'] . "' ,
        '" . $_REQUEST['mano_llena_semi_funcional'] . "' ,
        '" . $_REQUEST['mano_llena_no_funcional'] . "' ,
        '" . $_REQUEST['cilindro_funcional'] . "' ,
        '" . $_REQUEST['cilindro_semi_funcional'] . "' ,
        '" . $_REQUEST['cilindro_no_funcional'] . "' ,
        '" . $_REQUEST['enganche_funcional'] . "' ,
        '" . $_REQUEST['enganche_semi_funcional'] . "' ,
        '" . $_REQUEST['enganche_no_funcional'] . "' ,
        '" . $_REQUEST['pinzas_funcional'] . "' ,
        '" . $_REQUEST['pinzas_semi_funcional'] . "' ,
        '" . $_REQUEST['pinzas_no_funcional'] . "' ,
        '" . $_REQUEST['fina_funcional'] . "' ,
        '" . $_REQUEST['fina_semi_funcional'] . "' ,
        '" . $_REQUEST['fina_no_funcional'] . "' ,
        '" . $_REQUEST['tripode_funcional'] . "' ,
        '" . $_REQUEST['tripode_semi_funcional'] . "' ,
        '" . $_REQUEST['tripode_no_funcional'] . "' ,
        '" . $_REQUEST['latero_lateral_funcional'] . "' ,
        '" . $_REQUEST['latero_lateral_semi_funcional'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['latero_lateral_no_funcional'] . "' 
        ) ";
    } else if ($_REQUEST['id_tlo_integrales_finos'] != '') {

        $sql = "UPDATE rto_integrales_finos set 
        `mano_llena_funcional` = '" . $_REQUEST['mano_llena_funcional'] . "' ,
        `mano_llena_semi_funcional` = '" . $_REQUEST['mano_llena_semi_funcional'] . "' ,
        `mano_llena_no_funcional` = '" . $_REQUEST['mano_llena_no_funcional'] . "' ,
        `cilindro_funcional` = '" . $_REQUEST['cilindro_funcional'] . "' ,
        `cilindro_semi_funcional` = '" . $_REQUEST['cilindro_semi_funcional'] . "' ,
        `cilindro_no_funcional` = '" . $_REQUEST['cilindro_no_funcional'] . "' ,
        `enganche_funcional` = '" . $_REQUEST['enganche_funcional'] . "' ,
        `enganche_semi_funcional` = '" . $_REQUEST['enganche_semi_funcional'] . "' ,
        `enganche_no_funcional` = '" . $_REQUEST['enganche_no_funcional'] . "' ,
        `pinzas_funcional` = '" . $_REQUEST['pinzas_funcional'] . "' ,
        `pinzas_semi_funcional` = '" . $_REQUEST['pinzas_semi_funcional'] . "' ,
        `pinzas_no_funcional` = '" . $_REQUEST['pinzas_no_funcional'] . "' ,
        `fina_funcional` = '" . $_REQUEST['fina_funcional'] . "' ,
        `fina_semi_funcional` = '" . $_REQUEST['fina_semi_funcional'] . "' ,
        `fina_no_funcional` = '" . $_REQUEST['fina_no_funcional'] . "' ,
        `tripode_funcional` = '" . $_REQUEST['tripode_funcional'] . "' ,
        `tripode_semi_funcional` = '" . $_REQUEST['tripode_semi_funcional'] . "' ,
        `tripode_no_funcional` = '" . $_REQUEST['tripode_no_funcional'] . "' ,
        `latero_lateral_funcional` = '" . $_REQUEST['latero_lateral_funcional'] . "' ,
        `latero_lateral_semi_funcional` = '" . $_REQUEST['latero_lateral_semi_funcional'] . "' ,
        `latero_lateral_no_funcional` = '" . $_REQUEST['latero_lateral_no_funcional'] . "' WHERE `id_tlo_integrales_finos` = '" . $_REQUEST['id_tlo_integrales_finos'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_tlo_integrales_finos = 'new';
$sql = "SELECT * from rto_integrales_finos WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_tlo_integrales_finos = $row['id_tlo_integrales_finos'];
    $mano_llena_funcional = $row['mano_llena_funcional'];
    $mano_llena_semi_funcional = $row['mano_llena_semi_funcional'];
    $mano_llena_no_funcional = $row['mano_llena_no_funcional'];
    $cilindro_funcional = $row['cilindro_funcional'];
    $cilindro_semi_funcional = $row['cilindro_semi_funcional'];
    $cilindro_no_funcional = $row['cilindro_no_funcional'];
    $enganche_funcional = $row['enganche_funcional'];
    $enganche_semi_funcional = $row['enganche_semi_funcional'];
    $enganche_no_funcional = $row['enganche_no_funcional'];
    $pinzas_funcional = $row['pinzas_funcional'];
    $pinzas_semi_funcional = $row['pinzas_semi_funcional'];
    $pinzas_no_funcional = $row['pinzas_no_funcional'];
    $fina_funcional = $row['fina_funcional'];
    $fina_semi_funcional = $row['fina_semi_funcional'];
    $fina_no_funcional = $row['fina_no_funcional'];
    $tripode_funcional = $row['tripode_funcional'];
    $tripode_semi_funcional = $row['tripode_semi_funcional'];
    $tripode_no_funcional = $row['tripode_no_funcional'];
    $latero_lateral_funcional = $row['latero_lateral_funcional'];
    $latero_lateral_semi_funcional = $row['latero_lateral_semi_funcional'];
    $latero_lateral_no_funcional = $row['latero_lateral_no_funcional'];
    break;
}
?>
<script>

    $(function(){

        $("#close-tlo_integrales_finos").click(function(){
            $("#open-tlo_integrales_finos").show();
            $(this).hide();
            $("#content-tlo_integrales_finos").hide('slow');
        });

        $("#open-tlo_integrales_finos").click(function(){
            $("#close-tlo_integrales_finos").show();
            $(this).hide();
            $("#content-tlo_integrales_finos").show('slow');
        });

    });

</script>
<fieldset id="tlo_integrales_finos">
    <legend align="left"> <div class="arrow-c" id="close-tlo_integrales_finos"></div> <div class="arrow-o" id="open-tlo_integrales_finos" ></div> <font>Valoracion terapia ocupacional - Integrales Finos</font></legend>
    <div id="content-tlo_integrales_finos">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_tlo_integrales_finos" id="guardar_tlo_integrales_finos" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_tlo_integrales_finos" name="form_tlo_integrales_finos" action="<?php echo @$action_form_tlo_integrales_finos ?>#tlo_integrales_finos" method="post">

            <input type="hidden" id="id_tlo_integrales_finos" name="id_tlo_integrales_finos" value="<?php echo @$id_tlo_integrales_finos ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td><b>Agarres</b></td>
                    <td><b>Funcional</b></td>
                    <td><b>Semi-Funcional</b></td>
                    <td><b>No funcional</b></td>
                </tr>
                <tr class="row1">
                    <td><b>A mano llena</b></td>
                    <td><input type="text" class="input_txt valid" id="mano_llena_funcional" name="mano_llena_funcional" value="<?php echo @$mano_llena_funcional; ?>" /></td>
                    <td><input type="text" class="input_txt valid" id="mano_llena_semi_funcional" name="mano_llena_semi_funcional" value="<?php echo @$mano_llena_semi_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="mano_llena_no_funcional" name="mano_llena_no_funcional" value="<?php echo @$mano_llena_no_funcional; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Cilindro</b></td>
                    <td><input type="text" class="input_txt valid" id="cilindro_funcional" name="cilindro_funcional" value="<?php echo @$cilindro_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="cilindro_semi_funcional" name="cilindro_semi_funcional" value="<?php echo @$cilindro_semi_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="cilindro_no_funcional" name="cilindro_no_funcional" value="<?php echo @$cilindro_no_funcional; ?>" />
                    </td>

                </tr>
                <tr class="row1">
                    <td><b>De enganche</b></td>
                    <td><input type="text" class="input_txt valid" id="enganche_funcional" name="enganche_funcional" value="<?php echo @$enganche_funcional; ?>" />
                    </td>
                    <td> <input type="text" class="input_txt valid" id="enganche_semi_funcional" name="enganche_semi_funcional" value="<?php echo @$enganche_semi_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="enganche_no_funcional" name="enganche_no_funcional" value="<?php echo @$enganche_no_funcional; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Pinzas</b></td>
                    <td><input type="text" class="input_txt valid" id="pinzas_funcional" name="pinzas_funcional" value="<?php echo @$pinzas_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="pinzas_semi_funcional" name="pinzas_semi_funcional" value="<?php echo @$pinzas_semi_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="pinzas_no_funcional" name="pinzas_no_funcional" value="<?php echo @$pinzas_no_funcional; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Fina</b></td>
                    <td> <input type="text" class="input_txt valid" id="fina_funcional" name="fina_funcional" value="<?php echo @$fina_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="fina_semi_funcional" name="fina_semi_funcional" value="<?php echo @$fina_semi_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="fina_no_funcional" name="fina_no_funcional" value="<?php echo @$fina_no_funcional; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Tripode</b></td>
                    <td><input type="text" class="input_txt valid" id="tripode_funcional" name="tripode_funcional" value="<?php echo @$tripode_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="tripode_semi_funcional" name="tripode_semi_funcional" value="<?php echo @$tripode_semi_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="tripode_no_funcional" name="tripode_no_funcional" value="<?php echo @$tripode_no_funcional; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Latero-Lateral</b></td>
                    <td><input type="text" class="input_txt valid" id="latero_lateral_funcional" name="latero_lateral_funcional" value="<?php echo @$latero_lateral_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="latero_lateral_semi_funcional" name="latero_lateral_semi_funcional" value="<?php echo @$latero_lateral_semi_funcional; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="latero_lateral_no_funcional" name="latero_lateral_no_funcional" value="<?php echo @$latero_lateral_no_funcional; ?>" />
                    </td>
                </tr>
            </table>

            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>