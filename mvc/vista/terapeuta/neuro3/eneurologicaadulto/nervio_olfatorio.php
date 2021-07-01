<?php
if (isset($_REQUEST['guardar_nervio_olfatorio']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_nervio_olfatorio'] == 'new') {

        $sql = "INSERT INTO nervio_olfatorio (
`id_nervio_olfatorio`,
`ner_normal`,
`ner_anosmia`,
`ner_hiposmia`,
`ner_hiperosmia`,
`ner_parosmia`,
`ner_cacosmia`,
`ner_otras`,
`id_usuario`,
`historia`,
`id_vinicial`,
`id_revaloracion`,
`id_proceso`
) VALUES (
NULL,
'" . $_REQUEST['ner_normal'] . "' ,
'" . $_REQUEST['ner_anosmia'] . "' ,
'" . $_REQUEST['ner_hiposmia'] . "' ,
'" . $_REQUEST['ner_hiperosmia'] . "' ,
'" . $_REQUEST['ner_parosmia'] . "' ,
'" . $_REQUEST['ner_cacosmia'] . "' ,
'" . $_REQUEST['ner_otras'] . "' ,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['id_proceso'] . "'
) ";
    } else if ($_REQUEST['id_nervio_olfatorio'] != '') {

        $sql = "UPDATE nervio_olfatorio set
`ner_normal` = '" . $_REQUEST['ner_normal'] . "' ,
`ner_anosmia` = '" . $_REQUEST['ner_anosmia'] . "' ,
`ner_hiposmia` = '" . $_REQUEST['ner_hiposmia'] . "' ,
`ner_hiperosmia` = '" . $_REQUEST['ner_hiperosmia'] . "' ,
`ner_parosmia` = '" . $_REQUEST['ner_parosmia'] . "' ,
`ner_cacosmia` = '" . $_REQUEST['ner_cacosmia'] . "' ,
`ner_otras` = '" . $_REQUEST['ner_otras'] . "' ,
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' WHERE `id_nervio_olfatorio` = '" . $_REQUEST['id_nervio_olfatorio'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_nervio_olfatorio = 'new';
$sql = "SELECT * from nervio_olfatorio WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {

    $id_nervio_olfatorio = $row['id_nervio_olfatorio'];
    $ner_normal = $row['ner_normal'];
    $ner_anosmia = $row['ner_anosmia'];
    $ner_hiposmia = $row['ner_hiposmia'];
    $ner_hiperosmia = $row['ner_hiperosmia'];
    $ner_parosmia = $row['ner_parosmia'];
    $ner_cacosmia = $row['ner_cacosmia'];
    $ner_otras = $row['ner_otras'];

    break;
}
?>
<script>

    $(function() {

        $("#close-nervio_olfatorio").click(function() {
            $("#open-nervio_olfatorio").show();
            $(this).hide();
            $("#content-nervio_olfatorio").hide('slow');
        });

        $("#open-nervio_olfatorio").click(function() {
            $("#close-nervio_olfatorio").show();
            $(this).hide();
            $("#content-nervio_olfatorio").show('slow');
        });

    });

</script>
<fieldset id="nervio_olfatorio">
    <legend align="left"> <div class="arrow-c" id="close-nervio_olfatorio"></div> <div class="arrow-o" id="open-nervio_olfatorio" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Nervio olfatorio</font></legend>
    <div id="content-nervio_olfatorio">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_nervio_olfatorio" id="guardar_nervio_olfatorio" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_nervio_olfatorio" name="form_nervio_olfatorio" action="<?php echo @$action_form_nervio_olfatorio ?>#nervio_olfatorio" method="post">

            <input type="hidden" id="id_nervio_olfatorio" name="id_nervio_olfatorio" value="<?php echo @$id_nervio_olfatorio ?>" />

            B. Pares Craneales
            <br />
            Nervio Olfatorio:
            <br />
            <input type="hidden" class="input_txt valid" id="id_nervio_olfatorio" name="id_nervio_olfatorio" value="<?php echo @$id_nervio_olfatorio; ?>" />
            Normal<input type="text" class="input_txt valid" id="ner_normal" name="ner_normal" value="<?php echo @$ner_normal; ?>" />
            Anosmia<input type="text" class="input_txt valid" id="ner_anosmia" name="ner_anosmia" value="<?php echo @$ner_anosmia; ?>" />
            Hiposmia<input type="text" class="input_txt valid" id="ner_hiposmia" name="ner_hiposmia" value="<?php echo @$ner_hiposmia; ?>" />
            Hiperosmia<input type="text" class="input_txt valid" id="ner_hiperosmia" name="ner_hiperosmia" value="<?php echo @$ner_hiperosmia; ?>" />
            Parosmia<input type="text" class="input_txt valid" id="ner_parosmia" name="ner_parosmia" value="<?php echo @$ner_parosmia; ?>" />
            Cacosmia<input type="text" class="input_txt valid" id="ner_cacosmia" name="ner_cacosmia" value="<?php echo @$ner_cacosmia; ?>" />
            Otras<input type="text" class="input_txt valid" id="ner_otras" name="ner_otras" value="<?php echo @$ner_otras; ?>" />
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>