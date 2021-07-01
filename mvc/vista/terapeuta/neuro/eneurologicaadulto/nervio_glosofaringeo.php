<?php
if (isset($_REQUEST['guardar_ner_glosofaringeo_espinal']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_ner_glosofaringeo_espinal'] == 'new') {

        $sql = "INSERT INTO ner_glosofaringeo_espinal (
`id_ner_glosofaringeo_espinal`,
`id_usuario`,
`historia`,
`id_proceso`,
`tp_lengua`,
`sen_amigadala`,
`pie_oido_ext`,
`sen_faringe`,
`sl_amargo_p`,
`sl_amargo_ausente`,
`mus_estilofaringeo`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`gen_obser`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['tp_lengua'] . "' ,
'" . $_REQUEST['sen_amigadala'] . "' ,
'" . $_REQUEST['pie_oido_ext'] . "' ,
'" . $_REQUEST['sen_faringe'] . "' ,
'" . $_REQUEST['sl_amargo_p'] . "' ,
'" . $_REQUEST['sl_amargo_ausente'] . "' ,
'" . $_REQUEST['mus_estilofaringeo'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['gen_obser'] . "'
) ";
    } else if ($_REQUEST['id_ner_glosofaringeo_espinal'] != '') {

        $sql = "UPDATE ner_glosofaringeo_espinal set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`tp_lengua` = '" . $_REQUEST['tp_lengua'] . "' ,
`sen_amigadala` = '" . $_REQUEST['sen_amigadala'] . "' ,
`pie_oido_ext` = '" . $_REQUEST['pie_oido_ext'] . "' ,
`sen_faringe` = '" . $_REQUEST['sen_faringe'] . "' ,
`sl_amargo_p` = '" . $_REQUEST['sl_amargo_p'] . "' ,
`sl_amargo_ausente` = '" . $_REQUEST['sl_amargo_ausente'] . "' ,
`mus_estilofaringeo` = '" . $_REQUEST['mus_estilofaringeo'] . "' ,
`gen_obser` = '" . $_REQUEST['gen_obser'] . "' 
 WHERE `id_ner_glosofaringeo_espinal` = '" . $_REQUEST['id_ner_glosofaringeo_espinal'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_ner_glosofaringeo_espinal = 'new';
$sql = "SELECT * from ner_glosofaringeo_espinal WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_ner_glosofaringeo_espinal = $row['id_ner_glosofaringeo_espinal'];
    $tp_lengua = $row['tp_lengua'];
    $sen_amigadala = $row['sen_amigadala'];
    $pie_oido_ext = $row['pie_oido_ext'];
    $sen_faringe = $row['sen_faringe'];
    $sl_amargo_p = $row['sl_amargo_p'];
    $sl_amargo_ausente = $row['sl_amargo_ausente'];
    $mus_estilofaringeo = $row['mus_estilofaringeo'];
    $gen_obser = $row['gen_obser'];
    break;
}
?>
<script>

    $(function() {

        $("#close-ner_glosofaringeo_espinal").click(function() {
            $("#open-ner_glosofaringeo_espinal").show();
            $(this).hide();
            $("#content-ner_glosofaringeo_espinal").hide('slow');
        });

        $("#open-ner_glosofaringeo_espinal").click(function() {
            $("#close-ner_glosofaringeo_espinal").show();
            $(this).hide();
            $("#content-ner_glosofaringeo_espinal").show('slow');
        });

    });

</script>
<fieldset id="ner_glosofaringeo_espinal">
    <legend align="left"> <div class="arrow-c" id="close-ner_glosofaringeo_espinal"></div> <div class="arrow-o" id="open-ner_glosofaringeo_espinal" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Nervio glosofaringeo</font></legend>
    <div id="content-ner_glosofaringeo_espinal">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_ner_glosofaringeo_espinal" id="guardar_ner_glosofaringeo_espinal" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
        <form id="form_ner_glosofaringeo_espinal" name="form_ner_glosofaringeo_espinal" action="<?php echo @$action_form_ner_glosofaringeo_espinal ?>#ner_glosofaringeo_espinal" method="post">

            <input type="hidden" id="id_ner_glosofaringeo_espinal" name="id_ner_glosofaringeo_espinal" value="<?php echo @$id_ner_glosofaringeo_espinal ?>" />


            <input type="hidden" class="input_txt valid" id="id_ner_glosofaringeo_espinal" name="id_ner_glosofaringeo_espinal" value="<?php echo @$id_ner_glosofaringeo_espinal; ?>" />
            <p><strong>Sensibilidad general:</strong></p>
            <p>Tercio  posterior de la lengua:
                <input type="text" class="input_txt valid" id="tp_lengua" name="tp_lengua" value="<?php echo @$tp_lengua; ?>" />
                <strong></strong><br />
                Sensibilidad  de la amígdala:
                <input type="text" class="input_txt valid" id="sen_amigadala" name="sen_amigadala" value="<?php echo @$sen_amigadala; ?>" />
                <br />
                Piel del oído  externo:
                <input type="text" class="input_txt valid" id="pie_oido_ext" name="pie_oido_ext" value="<?php echo @$pie_oido_ext; ?>" />
                <br />
                Faringe:
                <input type="text" class="input_txt valid" id="sen_faringe" name="sen_faringe" value="<?php echo @$sen_faringe; ?>" />
            </p>
            <p><strong>Sensibilidad especial:</strong></p>
            <p>Tercio  posterior de la lengua: Amargo: Presente:
                <input type="text" class="input_txt valid" id="sl_amargo_p" name="sl_amargo_p" value="<?php echo @$sl_amargo_p; ?>" />
                Ausente:
                <input type="text" class="input_txt valid" id="sl_amargo_ausente" name="sl_amargo_ausente" value="<?php echo @$sl_amargo_ausente; ?>" />
            </p>
            <p><strong>Componente motor:</strong></p>
            <p>Musculo  estilofaríngeo:
                <input type="text" class="input_txt valid" id="mus_estilofaringeo" name="mus_estilofaringeo" value="<?php echo @$mus_estilofaringeo; ?>" />
                <br />
                <strong>OBSERVACIONES:
                    <input type="text" class="input_txt valid" id="gen_obser" name="gen_obser" value="<?php echo @$gen_obser; ?>" />
                </strong></p>
            

<?php echo @$button ?>
        </form><br>
    </div>
</fieldset>