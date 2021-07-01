<?php
if (isset($_REQUEST['guardar_rtl_tipo_respiratorio']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtl_tipo_respiratorio'] == 'new') {

        $sql = "INSERT INTO rtl_tipo_respiratorio (
        `id_rtl_tipo_respiratorio`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `t7_en_reposo`,
        `t7_en_fonacion`,
        `t7_permeabilidad_nasal`,
        `t7_higiene_bucal`,
        `t7_simetria_tercios_faciales`,
        `id_cita`,
        `id_vinicial`,
        `t7_cualidades_acusticos`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['t7_en_reposo'] . "' ,
        '" . $_REQUEST['t7_en_fonacion'] . "' ,
        '" . $_REQUEST['t7_permeabilidad_nasal'] . "' ,
        '" . $_REQUEST['t7_higiene_bucal'] . "' ,
        '" . $_REQUEST['t7_simetria_tercios_faciales'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['t7_cualidades_acusticos'] . "' 
        ) ";
    } else if ($_REQUEST['id_rtl_tipo_respiratorio'] != '') {

        $sql = "UPDATE rtl_tipo_respiratorio set 
        `t7_en_reposo` = '" . $_REQUEST['t7_en_reposo'] . "' ,
        `t7_en_fonacion` = '" . $_REQUEST['t7_en_fonacion'] . "' ,
        `t7_permeabilidad_nasal` = '" . $_REQUEST['t7_permeabilidad_nasal'] . "' ,
        `t7_higiene_bucal` = '" . $_REQUEST['t7_higiene_bucal'] . "' ,
        `t7_simetria_tercios_faciales` = '" . $_REQUEST['t7_simetria_tercios_faciales'] . "' ,
        `t7_cualidades_acusticos` = '" . $_REQUEST['t7_cualidades_acusticos'] . "' WHERE `id_rtl_tipo_respiratorio` = '" . $_REQUEST['id_rtl_tipo_respiratorio'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rtl_tipo_respiratorio = 'new';
$sql = "SELECT * from rtl_tipo_respiratorio WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtl_tipo_respiratorio = $row['id_rtl_tipo_respiratorio'];

    if ($row['t7_en_reposo'] == 1)
        $t7_en_reposo_1 = ' checked="checked" ';
    if ($row['t7_en_reposo'] == 2)
        $t7_en_reposo_2 = ' checked="checked" ';
    if ($row['t7_en_reposo'] == 3)
        $t7_en_reposo_3 = ' checked="checked" ';
    if ($row['t7_en_reposo'] == 4)
        $t7_en_reposo_4 = ' checked="checked" ';
    if ($row['t7_en_reposo'] == 5)
        $t7_en_reposo_5 = ' checked="checked" ';


    if ($row['t7_en_fonacion'] == 1)
        $t7_en_fonacion_1 = ' checked="checked" ';
    if ($row['t7_en_fonacion'] == 2)
        $t7_en_fonacion_2 = ' checked="checked" ';
    if ($row['t7_en_fonacion'] == 3)
        $t7_en_fonacion_3 = ' checked="checked" ';
    if ($row['t7_en_fonacion'] == 4)
        $t7_en_fonacion_4 = ' checked="checked" ';
    if ($row['t7_en_fonacion'] == 5)
        $t7_en_fonacion_5 = ' checked="checked" ';


    $t7_permeabilidad_nasal = $row['t7_permeabilidad_nasal']==1?' checked="checked" ':'';
    $t7_higiene_bucal = $row['t7_higiene_bucal']?' checked="checked" ':'';
    $t7_simetria_tercios_faciales = $row['t7_simetria_tercios_faciales']?' checked="checked" ':'';
    $t7_cualidades_acusticos = $row['t7_cualidades_acusticos'];
    
    break;
}
?>
<script>

    $(function(){

        $("#close-rtl_tipo_respiratorio").click(function(){
            $("#open-rtl_tipo_respiratorio").show();
            $(this).hide();
            $("#content-rtl_tipo_respiratorio").hide('slow');
        });

        $("#open-rtl_tipo_respiratorio").click(function(){
            $("#close-rtl_tipo_respiratorio").show();
            $(this).hide();
            $("#content-rtl_tipo_respiratorio").show('slow');
        });

    });

</script>
<fieldset id="rtl_tipo_respiratorio">
    <legend align="left"> <div class="arrow-c" id="close-rtl_tipo_respiratorio"></div> <div class="arrow-o" id="open-rtl_tipo_respiratorio" ></div> <font>Valoracion terapia lenguaje - Tipo respiratorio</font></legend>
    <div id="content-rtl_tipo_respiratorio">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rtl_tipo_respiratorio" id="guardar_rtl_tipo_respiratorio" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rtl_tipo_respiratorio" name="form_rtl_tipo_respiratorio" action="<?php echo @$action_form_rtl_tipo_respiratorio ?>#rtl_tipo_respiratorio" method="post">

            <input type="hidden" id="id_rtl_tipo_respiratorio" name="id_rtl_tipo_respiratorio" value="<?php echo @$id_rtl_tipo_respiratorio ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td></td>
                    <td><b>Mixto</b></td>
                    <td><b>Costal superior</b></td>
                    <td><b>Costal medio toraxico</b></td>
                    <td><b>Diafragmatico</b></td>
                    <td><b>Abdominal</b></td>
                </tr>
                <tr class="row1">
                    <td><b>En reposo</b></td>
                    <td><input type="radio" class="" id="" name="t7_en_reposo" value="1" <?php echo @$t7_en_reposo_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="t7_en_reposo" value="2" <?php echo @$t7_en_reposo_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="t7_en_reposo" value="3" <?php echo @$t7_en_reposo_3; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="t7_en_reposo" value="4" <?php echo @$t7_en_reposo_4; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="t7_en_reposo" value="5" <?php echo @$t7_en_reposo_5; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>En fonacion</b></td>
                    <td><input type="radio" class="" id="" name="t7_en_fonacion" value="1" <?php echo @$t7_en_fonacion_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="t7_en_fonacion" value="2" <?php echo @$t7_en_fonacion_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="t7_en_fonacion" value="3" <?php echo @$t7_en_fonacion_3; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="t7_en_fonacion" value="4" <?php echo @$t7_en_fonacion_4; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="t7_en_fonacion" value="5" <?php echo @$t7_en_fonacion_5; ?> />
                    </td>
                </tr>                
            </table>
            <br>
            Permeabilidad nasal <input type="checkbox" class="" id="t7_permeabilidad_nasal" name="t7_permeabilidad_nasal" value="1" <?php echo @$t7_permeabilidad_nasal; ?> />,
            Higiene bucal <input type="checkbox" class="" id="t7_higiene_bucal" name="t7_higiene_bucal" value="1" <?php echo @$t7_higiene_bucal; ?> />,
            Simetría de tercios  faciales <input type="checkbox" class="" id="t7_simetria_tercios_faciales" name="t7_simetria_tercios_faciales" value="1" <?php echo @$t7_simetria_tercios_faciales; ?> />,<br>
            Cualidades acústico perceptuales de la voz:
            <input type="text" class="input_txt valid" id="t7_cualidades_acusticos" name="t7_cualidades_acusticos" value="<?php echo @$t7_cualidades_acusticos; ?>" />
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>