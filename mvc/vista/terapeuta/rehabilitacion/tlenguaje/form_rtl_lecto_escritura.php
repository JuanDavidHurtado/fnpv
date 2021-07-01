<?php
if (isset($_REQUEST['guardar_rtl_lecto_escritura']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtl_lecto_escritura'] == 'new') {

        $sql = "INSERT INTO rtl_lecto_escritura (
    `id_rtl_lecto_escritura`,
    `id_proceso`,
    `id_usuario`,
    `historia`,
    `t5_tipo_lector`,
    `t5_nivel_comprension`,
    `t5_anticipacion_lectura`,
    `t5_signos_puntuacion`,
    `t5_movimientos_asociados`,
    `t5_contaminaciones`,
    `t5_separaciones`,
    `t5_sustituciones`,
    `t5_omisiones`,
    `t5_traslaciones`,
    `t5_espacio_renglon`,
    `id_cita`,
    `id_vinicial`,
    `t5_produccion_textual`
    ) VALUES (
    NULL,
    '" . $_REQUEST['id_proceso'] . "' ,
    '" . $_SESSION['id_usuario'] . "' ,
    '" . $_REQUEST['historia'] . "' ,
    '" . $_REQUEST['t5_tipo_lector'] . "' ,
    '" . $_REQUEST['t5_nivel_comprension'] . "' ,
    '" . $_REQUEST['t5_anticipacion_lectura'] . "' ,
    '" . $_REQUEST['t5_signos_puntuacion'] . "' ,
    '" . $_REQUEST['t5_movimientos_asociados'] . "' ,
    '" . $_REQUEST['t5_contaminaciones'] . "' ,
    '" . $_REQUEST['t5_separaciones'] . "' ,
    '" . $_REQUEST['t5_sustituciones'] . "' ,
    '" . $_REQUEST['t5_omisiones'] . "' ,
    '" . $_REQUEST['t5_traslaciones'] . "' ,
    '" . $_REQUEST['t5_espacio_renglon'] . "',
    '" . $_REQUEST['id_cita'] . "',
    '" . $_REQUEST['id_vinicial'] . "',
    '" . $_REQUEST['t5_produccion_textual'] . "'
    ) ";
    } else if ($_REQUEST['id_rtl_lecto_escritura'] != '') {

        $sql = "UPDATE rtl_lecto_escritura set 
    `t5_tipo_lector` = '" . $_REQUEST['t5_tipo_lector'] . "' ,
    `t5_nivel_comprension` = '" . $_REQUEST['t5_nivel_comprension'] . "' ,
    `t5_anticipacion_lectura` = '" . $_REQUEST['t5_anticipacion_lectura'] . "' ,
    `t5_signos_puntuacion` = '" . $_REQUEST['t5_signos_puntuacion'] . "' ,
    `t5_movimientos_asociados` = '" . $_REQUEST['t5_movimientos_asociados'] . "' ,
    `t5_contaminaciones` = '" . $_REQUEST['t5_contaminaciones'] . "' ,
    `t5_separaciones` = '" . $_REQUEST['t5_separaciones'] . "' ,
    `t5_sustituciones` = '" . $_REQUEST['t5_sustituciones'] . "' ,
    `t5_omisiones` = '" . $_REQUEST['t5_omisiones'] . "' ,
    `t5_traslaciones` = '" . $_REQUEST['t5_traslaciones'] . "' ,
    `t5_espacio_renglon` = '" . $_REQUEST['t5_espacio_renglon'] . "',
     `t5_produccion_textual` = '".$_REQUEST['t5_produccion_textual']."' WHERE `id_rtl_lecto_escritura` = '" . $_REQUEST['id_rtl_lecto_escritura'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rtl_lecto_escritura = 'new';
$sql = "SELECT * from rtl_lecto_escritura WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtl_lecto_escritura = $row['id_rtl_lecto_escritura'];

    if ($row['t5_tipo_lector'] == 1)
        $t5_tipo_lector_1 = ' checked="checked" ';
    if ($row['t5_tipo_lector'] == 2)
        $t5_tipo_lector_2 = ' checked="checked" ';
    if ($row['t5_tipo_lector'] == 3)
        $t5_tipo_lector_3 = ' checked="checked" ';
    if ($row['t5_tipo_lector'] == 4)
        $t5_tipo_lector_4 = ' checked="checked" ';

    if ($row['t5_nivel_comprension'] == 1)
        $t5_nivel_comprension_1 = ' checked="checked" ';
    if ($row['t5_nivel_comprension'] == 2)
        $t5_nivel_comprension_2 = ' checked="checked" ';
    if ($row['t5_nivel_comprension'] == 3)
        $t5_nivel_comprension_3 = ' checked="checked" ';


    $t5_anticipacion_lectura = $row['t5_anticipacion_lectura']==1?' checked="checked" ':'';
    $t5_signos_puntuacion = $row['t5_signos_puntuacion']==1?' checked="checked" ':'';
    $t5_movimientos_asociados = $row['t5_movimientos_asociados']==1?' checked="checked" ':'';
    
    $t5_contaminaciones = $row['t5_contaminaciones'];
    $t5_separaciones = $row['t5_separaciones'];
    $t5_sustituciones = $row['t5_sustituciones'];
    $t5_omisiones = $row['t5_omisiones'];
    $t5_traslaciones = $row['t5_traslaciones'];
    $t5_espacio_renglon = $row['t5_espacio_renglon'];
    $t5_produccion_textual = $row['t5_produccion_textual'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rtl_lecto_escritura").click(function(){
            $("#open-rtl_lecto_escritura").show();
            $(this).hide();
            $("#content-rtl_lecto_escritura").hide('slow');
        });

        $("#open-rtl_lecto_escritura").click(function(){
            $("#close-rtl_lecto_escritura").show();
            $(this).hide();
            $("#content-rtl_lecto_escritura").show('slow');
        });

    });

</script>
<fieldset id="rtl_lecto_escritura">
    <legend align="left"> <div class="arrow-c" id="close-rtl_lecto_escritura"></div> <div class="arrow-o" id="open-rtl_lecto_escritura" ></div> <font>Valoracion terapia lenguaje - Lecto escritura</font></legend>
    <div id="content-rtl_lecto_escritura">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rtl_lecto_escritura" id="guardar_rtl_lecto_escritura" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rtl_lecto_escritura" name="form_rtl_lecto_escritura" action="<?php echo @$action_form_rtl_lecto_escritura ?>#rtl_lecto_escritura" method="post">

            <input type="hidden" id="id_rtl_lecto_escritura" name="id_rtl_lecto_escritura" value="<?php echo @$id_rtl_lecto_escritura ?>" />

            <table width="566" height="76" border="0" cellpadding="0" cellspacing="0" class="data">
                <tr class="row1">
                    <td><b>Tipo Lector</b></td>
                    <td>Silábico
                        <input type="radio" class="" id="" name="t5_tipo_lector" value="1" <?php echo @$t5_tipo_lector_1; ?> />
                    </td>
                    <td>Vacilante
                        <input type="radio" class="" id="" name="t5_tipo_lector" value="2" <?php echo @$t5_tipo_lector_2; ?> />
                    </td>
                    <td>Corriente
                        <input type="radio" class="" id="" name="t5_tipo_lector" value="3" <?php echo @$t5_tipo_lector_3; ?> />
                    </td>
                    <td>Expresivo
                        <input type="radio" class="" id="" name="t5_tipo_lector" value="4" <?php echo @$t5_tipo_lector_4; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Nivel Comprension</b></td>
                    <td>Litera
                        <input type="radio" class="" id="" name="t5_nivel_comprension" value="1" <?php echo @$t5_nivel_comprension_1; ?> />
                    </td>
                    <td>Inferencia
                        <input type="radio" class="" id="" name="t5_nivel_comprension" value="2" <?php echo @$t5_nivel_comprension_2; ?> />
                    </td>
                    <td>Critico intertextual
                        <input type="radio" class="" id="" name="t5_nivel_comprension" value="3" <?php echo @$t5_nivel_comprension_3; ?> />
                    </td>
                    <td>&nbsp;</td>
                </tr>
            </table>

            <br>
            Anticipación de lectura <input type="checkbox" class="" id="t5_anticipacion_lectura" name="t5_anticipacion_lectura" value="1" <?php echo @$t5_anticipacion_lectura; ?> />,
            Uso de signos de puntuación <input type="checkbox" class="" id="t5_signos_puntuacion" name="t5_signos_puntuacion" value="1" <?php echo @$t5_signos_puntuacion; ?> />, Movimientos asociados <input type="checkbox" class="" id="t5_movimientos_asociados" name="t5_movimientos_asociados" value="1" <?php echo @$t5_movimientos_asociados; ?> />.
            <br><br>
            Errores específicos
            <br>
            Contaminaciones <input type="text" class="input_txt valid" id="t5_contaminaciones" name="t5_contaminaciones" value="<?php echo @$t5_contaminaciones; ?>" />
            Separaciones <input type="text" class="input_txt valid" id="t5_separaciones" name="t5_separaciones" value="<?php echo @$t5_separaciones; ?>" />
            Sustituciones <input type="text" class="input_txt valid" id="t5_sustituciones" name="t5_sustituciones" value="<?php echo @$t5_sustituciones; ?>" /><br>
            Omisiones <input type="text" class="input_txt valid" id="t5_omisiones" name="t5_omisiones" value="<?php echo @$t5_omisiones; ?>" />
            Traslaciones <input type="text" class="input_txt valid" id="t5_traslaciones" name="t5_traslaciones" value="<?php echo @$t5_traslaciones; ?>" />
            Manejo del espacio y el renglón <input type="text" class="input_txt valid" id="t5_espacio_renglon" name="t5_espacio_renglon" value="<?php echo @$t5_espacio_renglon; ?>" /><br>
            Produccion textual <input type="text" class="input_txt valid" id="t5_produccion_textual" name="t5_produccion_textual" value="<?php echo @$t5_produccion_textual; ?>" />
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>