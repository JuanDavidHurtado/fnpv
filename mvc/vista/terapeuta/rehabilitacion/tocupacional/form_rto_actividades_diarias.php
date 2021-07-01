<?php
if (isset($_REQUEST['guardar_rto_actividades_diarias']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rto_actividades_diarias'] == 'new') {

        $sql = "INSERT INTO rto_actividades_diarias (
        `id_rto_actividades_diarias`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `higiene_mayor`,
        `higiene_menor`,
        `vestido_superior`,
        `vestido_inferior`,
        `alimentacion`,
        `uso_wc`,
        `desplazamiento_en_cama`,
        `desplazamiento_en_silla_ruedas`,
        `traslado_bano`,
        `desplazamiento_ducha`,
        `deambulacion`,
        `subir_bajar_escaleras`,
        `id_cita`,
        `id_vinicial`,
        `uso_ortesis_protesis`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['higiene_mayor'] . "' ,
        '" . $_REQUEST['higiene_menor'] . "' ,
        '" . $_REQUEST['vestido_superior'] . "' ,
        '" . $_REQUEST['vestido_inferior'] . "' ,
        '" . $_REQUEST['alimentacion'] . "' ,
        '" . $_REQUEST['uso_wc'] . "' ,
        '" . $_REQUEST['desplazamiento_en_cama'] . "' ,
        '" . $_REQUEST['desplazamiento_en_silla_ruedas'] . "' ,
        '" . $_REQUEST['traslado_bano'] . "' ,
        '" . $_REQUEST['desplazamiento_ducha'] . "' ,
        '" . $_REQUEST['deambulacion'] . "' ,
        '" . $_REQUEST['subir_bajar_escaleras'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['uso_ortesis_protesis'] . "' 
        ) ";
    } else if ($_REQUEST['id_rto_actividades_diarias'] != '') {

        $sql = "UPDATE rto_actividades_diarias set 
        `higiene_mayor` = '" . $_REQUEST['higiene_mayor'] . "' ,
        `higiene_menor` = '" . $_REQUEST['higiene_menor'] . "' ,
        `vestido_superior` = '" . $_REQUEST['vestido_superior'] . "' ,
        `vestido_inferior` = '" . $_REQUEST['vestido_inferior'] . "' ,
        `alimentacion` = '" . $_REQUEST['alimentacion'] . "' ,
        `uso_wc` = '" . $_REQUEST['uso_wc'] . "' ,
        `desplazamiento_en_cama` = '" . $_REQUEST['desplazamiento_en_cama'] . "' ,
        `desplazamiento_en_silla_ruedas` = '" . $_REQUEST['desplazamiento_en_silla_ruedas'] . "' ,
        `traslado_bano` = '" . $_REQUEST['traslado_bano'] . "' ,
        `desplazamiento_ducha` = '" . $_REQUEST['desplazamiento_ducha'] . "' ,
        `deambulacion` = '" . $_REQUEST['deambulacion'] . "' ,
        `subir_bajar_escaleras` = '" . $_REQUEST['subir_bajar_escaleras'] . "' ,
        `uso_ortesis_protesis` = '" . $_REQUEST['uso_ortesis_protesis'] . "' WHERE `id_rto_actividades_diarias` = '" . $_REQUEST['id_rto_actividades_diarias'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rto_actividades_diarias = 'new';
$sql = "SELECT * from rto_actividades_diarias WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rto_actividades_diarias = $row['id_rto_actividades_diarias'];


    if ($row['higiene_mayor'] == 1)
        $higiene_mayor_1 = " checked='checked' ";
    if ($row['higiene_mayor'] == 2)
        $higiene_mayor_2 = " checked='checked' ";
    if ($row['higiene_mayor'] == 3)
        $higiene_mayor_3 = " checked='checked' ";
    if ($row['higiene_mayor'] == 4)
        $higiene_mayor_4 = " checked='checked' ";
    if ($row['higiene_mayor'] == 5)
        $higiene_mayor_5 = " checked='checked' ";

    if ($row['higiene_menor'] == 1)
        $higiene_menor_1 = " checked='checked' ";
    if ($row['higiene_menor'] == 2)
        $higiene_menor_2 = " checked='checked' ";
    if ($row['higiene_menor'] == 3)
        $higiene_menor_3 = " checked='checked' ";
    if ($row['higiene_menor'] == 4)
        $higiene_menor_4 = " checked='checked' ";
    if ($row['higiene_menor'] == 5)
        $higiene_menor_5 = " checked='checked' ";

    if ($row['vestido_superior'] == 1)
        $vestido_superior_1 = " checked='checked' ";
    if ($row['vestido_superior'] == 2)
        $vestido_superior_2 = " checked='checked' ";
    if ($row['vestido_superior'] == 3)
        $vestido_superior_3 = " checked='checked' ";
    if ($row['vestido_superior'] == 4)
        $vestido_superior_4 = " checked='checked' ";
    if ($row['vestido_superior'] == 5)
        $vestido_superior_5 = " checked='checked' ";

    if ($row['vestido_inferior'] == 1)
        $vestido_inferior_1 = " checked='checked' ";
    if ($row['vestido_inferior'] == 2)
        $vestido_inferior_2 = " checked='checked' ";
    if ($row['vestido_inferior'] == 3)
        $vestido_inferior_3 = " checked='checked' ";
    if ($row['vestido_inferior'] == 4)
        $vestido_inferior_4 = " checked='checked' ";
    if ($row['vestido_inferior'] == 5)
        $vestido_inferior_5 = " checked='checked' ";


    if ($row['alimentacion'] == 1)
        $alimentacion_1 = " checked='checked' ";
    if ($row['alimentacion'] == 2)
        $alimentacion_2 = " checked='checked' ";
    if ($row['alimentacion'] == 3)
        $alimentacion_3 = " checked='checked' ";
    if ($row['alimentacion'] == 4)
        $alimentacion_4 = " checked='checked' ";
    if ($row['alimentacion'] == 5)
        $alimentacion_5 = " checked='checked' ";


    if ($row['uso_wc'] == 1)
        $uso_wc_1 = " checked='checked' ";
    if ($row['uso_wc'] == 2)
        $uso_wc_2 = " checked='checked' ";
    if ($row['uso_wc'] == 3)
        $uso_wc_3 = " checked='checked' ";
    if ($row['uso_wc'] == 4)
        $uso_wc_4 = " checked='checked' ";
    if ($row['uso_wc'] == 5)
        $uso_wc_5 = " checked='checked' ";


    if ($row['desplazamiento_en_cama'] == 1)
        $desplazamiento_en_cama_1 = " checked='checked' ";
    if ($row['desplazamiento_en_cama'] == 2)
        $desplazamiento_en_cama_2 = " checked='checked' ";
    if ($row['desplazamiento_en_cama'] == 3)
        $desplazamiento_en_cama_3 = " checked='checked' ";
    if ($row['desplazamiento_en_cama'] == 4)
        $desplazamiento_en_cama_4 = " checked='checked' ";
    if ($row['desplazamiento_en_cama'] == 5)
        $desplazamiento_en_cama_5 = " checked='checked' ";


    if ($row['desplazamiento_en_silla_ruedas'] == 1)
        $desplazamiento_en_silla_ruedas_1 = " checked='checked' ";
    if ($row['desplazamiento_en_silla_ruedas'] == 2)
        $desplazamiento_en_silla_ruedas_2 = " checked='checked' ";
    if ($row['desplazamiento_en_silla_ruedas'] == 3)
        $desplazamiento_en_silla_ruedas_3 = " checked='checked' ";
    if ($row['desplazamiento_en_silla_ruedas'] == 4)
        $desplazamiento_en_silla_ruedas_4 = " checked='checked' ";
    if ($row['desplazamiento_en_silla_ruedas'] == 5)
        $desplazamiento_en_silla_ruedas_5 = " checked='checked' ";


    if ($row['traslado_bano'] == 1)
        $traslado_bano_1 = " checked='checked' ";
    if ($row['traslado_bano'] == 2)
        $traslado_bano_2 = " checked='checked' ";
    if ($row['traslado_bano'] == 3)
        $traslado_bano_3 = " checked='checked' ";
    if ($row['traslado_bano'] == 4)
        $traslado_bano_4 = " checked='checked' ";
    if ($row['traslado_bano'] == 5)
        $traslado_bano_5 = " checked='checked' ";


    if ($row['desplazamiento_ducha'] == 1)
        $desplazamiento_ducha_1 = " checked='checked' ";
    if ($row['desplazamiento_ducha'] == 2)
        $desplazamiento_ducha_2 = " checked='checked' ";
    if ($row['desplazamiento_ducha'] == 3)
        $desplazamiento_ducha_3 = " checked='checked' ";
    if ($row['desplazamiento_ducha'] == 4)
        $desplazamiento_ducha_4 = " checked='checked' ";
    if ($row['desplazamiento_ducha'] == 5)
        $desplazamiento_ducha_5 = " checked='checked' ";


    if ($row['deambulacion'] == 1)
        $deambulacion_1 = " checked='checked' ";
    if ($row['deambulacion'] == 2)
        $deambulacion_2 = " checked='checked' ";
    if ($row['deambulacion'] == 3)
        $deambulacion_3 = " checked='checked' ";
    if ($row['deambulacion'] == 4)
        $deambulacion_4 = " checked='checked' ";
    if ($row['deambulacion'] == 5)
        $deambulacion_5 = " checked='checked' ";


    if ($row['subir_bajar_escaleras'] == 1)
        $subir_bajar_escaleras_1 = " checked='checked' ";
    if ($row['subir_bajar_escaleras'] == 2)
        $subir_bajar_escaleras_2 = " checked='checked' ";
    if ($row['subir_bajar_escaleras'] == 3)
        $subir_bajar_escaleras_3 = " checked='checked' ";
    if ($row['subir_bajar_escaleras'] == 4)
        $subir_bajar_escaleras_4 = " checked='checked' ";
    if ($row['subir_bajar_escaleras'] == 5)
        $subir_bajar_escaleras_5 = " checked='checked' ";


    if ($row['uso_ortesis_protesis'] == 1)
        $uso_ortesis_protesis_1 = " checked='checked' ";
    if ($row['uso_ortesis_protesis'] == 2)
        $uso_ortesis_protesis_2 = " checked='checked' ";
    if ($row['uso_ortesis_protesis'] == 3)
        $uso_ortesis_protesis_3 = " checked='checked' ";
    if ($row['uso_ortesis_protesis'] == 4)
        $uso_ortesis_protesis_4 = " checked='checked' ";
    if ($row['uso_ortesis_protesis'] == 5)
        $uso_ortesis_protesis_5 = " checked='checked' ";


    break;
}
?>
<script>

    $(function(){

        $("#close-rto_actividades_diarias").click(function(){
            $("#open-rto_actividades_diarias").show();
            $(this).hide();
            $("#content-rto_actividades_diarias").hide('slow');
        });

        $("#open-rto_actividades_diarias").click(function(){
            $("#close-rto_actividades_diarias").show();
            $(this).hide();
            $("#content-rto_actividades_diarias").show('slow');
        });

    });

</script>
<fieldset id="rto_actividades_diarias">
    <legend align="left"> <div class="arrow-c" id="close-rto_actividades_diarias"></div> <div class="arrow-o" id="open-rto_actividades_diarias" ></div> <font>Valoracion terapia ocupacional - Actividades Diarias</font></legend>
    <div id="content-rto_actividades_diarias">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rto_actividades_diarias" id="guardar_rto_actividades_diarias" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rto_actividades_diarias" name="form_rto_actividades_diarias" action="<?php echo @$action_form_rto_actividades_diarias ?>#rto_actividades_diarias" method="post">

            <input type="hidden" id="id_rto_actividades_diarias" name="id_rto_actividades_diarias" value="<?php echo @$id_rto_actividades_diarias ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td><b>ABC</b></td>
                    <td><b>Independiente</b></td>
                    <td><b>Semi-independiente</b></td>
                    <td><b>Dependiente</b></td>
                    <td><b>Semi-Dependiente</b></td>
                    <td><b>NE</b></td>
                </tr>
                <tr class="row1">
                    <td><b>Higiene mayor</b></td>
                    <td><input type="radio" class="" id="" name="higiene_mayor" value="1" <?php echo @$higiene_mayor_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="higiene_mayor" value="2" <?php echo @$higiene_mayor_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="higiene_mayor" value="3" <?php echo @$higiene_mayor_3; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="higiene_mayor" value="4" <?php echo @$higiene_mayor_4; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="higiene_mayor" value="5" <?php echo @$higiene_mayor_5; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Higiene menor</b></td>
                    <td><input type="radio" class="" id="" name="higiene_menor" value="1" <?php echo @$higiene_menor_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="higiene_menor" value="2" <?php echo @$higiene_menor_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="higiene_menor" value="3" <?php echo @$higiene_menor_3; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="higiene_menor" value="4" <?php echo @$higiene_menor_4; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="higiene_menor" value="5" <?php echo @$higiene_menor_5; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Vestido superior</b></td>
                    <td><input type="radio" class="" id="" name="vestido_superior" value="1" <?php echo @$vestido_superior_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="vestido_superior" value="2" <?php echo @$vestido_superior_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="vestido_superior" value="3" <?php echo @$vestido_superior_3; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="vestido_superior" value="4" <?php echo @$vestido_superior_4; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="vestido_superior" value="5" <?php echo @$vestido_superior_5; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Vestido inferior</b></td>
                    <td><input type="radio" class="" id="" name="vestido_inferior" value="1" <?php echo @$vestido_inferior_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="vestido_inferior" value="2" <?php echo @$vestido_inferior_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="vestido_inferior" value="3" <?php echo @$vestido_inferior_3; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="vestido_inferior" value="4" <?php echo @$vestido_inferior_4; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="vestido_inferior" value="5" <?php echo @$vestido_inferior_5; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Alimentacion</b></td>
                    <td><input type="radio" class="" id="" name="alimentacion" value="1" <?php echo @$alimentacion_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="alimentacion" value="2" <?php echo @$alimentacion_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="alimentacion" value="3" <?php echo @$alimentacion_3; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="alimentacion" value="4" <?php echo @$alimentacion_4; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="alimentacion" value="5" <?php echo @$alimentacion_5; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Uso WC</b></td>
                    <td><input type="radio" class="" id="" name="uso_wc" value="1" <?php echo @$uso_wc_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="uso_wc" value="2" <?php echo @$uso_wc_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="uso_wc" value="3" <?php echo @$uso_wc_3; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="uso_wc" value="4" <?php echo @$uso_wc_4; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="uso_wc" value="5" <?php echo @$uso_wc_5; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Desplazamiento en cama</b></td>
                    <td><input type="radio" class="" id="" name="desplazamiento_en_cama" value="1" <?php echo @$desplazamiento_en_cama_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="desplazamiento_en_cama" value="2" <?php echo @$desplazamiento_en_cama_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="desplazamiento_en_cama" value="3" <?php echo @$desplazamiento_en_cama_3; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="desplazamiento_en_cama" value="4" <?php echo @$desplazamiento_en_cama_4; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="desplazamiento_en_cama" value="5" <?php echo @$desplazamiento_en_cama_5; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Desplazamiento en silla de ruedas</b></td>
                    <td><input type="radio" class="" id="" name="desplazamiento_en_silla_ruedas" value="1" <?php echo @$desplazamiento_en_silla_ruedas_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="desplazamiento_en_silla_ruedas" value="2" <?php echo @$desplazamiento_en_silla_ruedas_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="desplazamiento_en_silla_ruedas" value="3" <?php echo @$desplazamiento_en_silla_ruedas_3; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="desplazamiento_en_silla_ruedas" value="4" <?php echo @$desplazamiento_en_silla_ruedas_4; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="desplazamiento_en_silla_ruedas" value="5" <?php echo @$desplazamiento_en_silla_ruedas_5; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Traslado al baño</b></td>
                    <td><input type="radio" class="" id="" name="traslado_bano" value="1" <?php echo @$traslado_bano_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="traslado_bano" value="2" <?php echo @$traslado_bano_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="traslado_bano" value="3" <?php echo @$traslado_bano_3; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="traslado_bano" value="4" <?php echo @$traslado_bano_4; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="traslado_bano" value="5" <?php echo @$traslado_bano_5; ?> />
                    </td>
                </tr><tr class="row1">
                    <td><b>Desplazamiento en ducha</b></td>
                    <td><input type="radio" class="" id="" name="desplazamiento_ducha" value="1" <?php echo @$desplazamiento_ducha_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="desplazamiento_ducha" value="2" <?php echo @$desplazamiento_ducha_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="desplazamiento_ducha" value="3" <?php echo @$desplazamiento_ducha_3; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="desplazamiento_ducha" value="4" <?php echo @$desplazamiento_ducha_4; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="desplazamiento_ducha" value="5" <?php echo @$desplazamiento_ducha_5; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Deambulacion</b></td>
                    <td><input type="radio" class="" id="" name="deambulacion" value="1" <?php echo @$deambulacion_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="deambulacion" value="2" <?php echo @$deambulacion_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="deambulacion" value="3" <?php echo @$deambulacion_3; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="deambulacion" value="4" <?php echo @$deambulacion_4; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="deambulacion" value="5" <?php echo @$deambulacion_5; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Subir, bajar escaleras</b></td>
                    <td><input type="radio" class="" id="" name="subir_bajar_escaleras" value="1" <?php echo @$subir_bajar_escaleras_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="subir_bajar_escaleras" value="2" <?php echo @$subir_bajar_escaleras_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="subir_bajar_escaleras" value="3" <?php echo @$subir_bajar_escaleras_3; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="subir_bajar_escaleras" value="4" <?php echo @$subir_bajar_escaleras_4; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="subir_bajar_escaleras" value="5" <?php echo @$subir_bajar_escaleras_5; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Uso de ortesis - protesis</b></td>
                    <td><input type="radio" class="" id="" name="uso_ortesis_protesis" value="1" <?php echo @$uso_ortesis_protesis_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="uso_ortesis_protesis" value="2" <?php echo @$uso_ortesis_protesis_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="uso_ortesis_protesis" value="3" <?php echo @$uso_ortesis_protesis_3; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="uso_ortesis_protesis" value="4" <?php echo @$uso_ortesis_protesis_4; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="uso_ortesis_protesis" value="5" <?php echo @$uso_ortesis_protesis_5; ?> />
                    </td>
                </tr>         


            </table>
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>