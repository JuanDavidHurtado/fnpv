<?php
if (isset($_REQUEST['guardar_ner_glosofaringeo_espinal1']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_ner_glosofaringeo_espinal1'] == 'new') {

        $sql = "INSERT INTO ner_glosofaringeo_espinal (
`id_ner_glosofaringeo_espinal`,
`id_usuario`,
`historia`,
`id_proceso`,
`esp_esternod`,
`esp_esternoi`,
`mus_trasd`,
`mus_trasi`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`espinal_obser`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['esp_esternod'] . "' ,
'" . $_REQUEST['esp_esternoi'] . "' ,
'" . $_REQUEST['mus_trasd'] . "' ,
'" . $_REQUEST['mus_trasi'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['espinal_obser'] . "'
) ";
    } else if ($_REQUEST['id_ner_glosofaringeo_espinal'] != '') {

        $sql = "UPDATE ner_glosofaringeo_espinal set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`esp_esternod` = '" . $_REQUEST['esp_esternod'] . "' ,
`esp_esternoi` = '" . $_REQUEST['esp_esternoi'] . "' ,
`mus_trasd` = '" . $_REQUEST['mus_trasd'] . "' ,
`mus_trasi` = '" . $_REQUEST['mus_trasi'] . "' ,
`espinal_obser` = '" . $_REQUEST['espinal_obser'] . "' WHERE `id_ner_glosofaringeo_espinal` = '" . $_REQUEST['id_ner_glosofaringeo_espinal'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_ner_glosofaringeo_espinal = 'new';
$sql = "SELECT * from ner_glosofaringeo_espinal WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_ner_glosofaringeo_espinal = $row['id_ner_glosofaringeo_espinal'];



    $esp_esternod = $row['esp_esternod'];
    $esp_esternoi = $row['esp_esternoi'];
    $mus_trasd = $row['mus_trasd'];
    $mus_trasi = $row['mus_trasi'];
    $espinal_obser = $row['espinal_obser'];
    break;
}
?>
<script>

    $(function() {

        $("#close-ner_glosofaringeo_espinal1").click(function() {
            $("#open-ner_glosofaringeo_espinal1").show();
            $(this).hide();
            $("#content-ner_glosofaringeo_espinal1").hide('slow');
        });

        $("#open-ner_glosofaringeo_espinal1").click(function() {
            $("#close-ner_glosofaringeo_espinal1").show();
            $(this).hide();
            $("#content-ner_glosofaringeo_espinal1").show('slow');
        });

    });

</script>
<fieldset id="ner_glosofaringeo_espinal1">
    <legend align="left"> <div class="arrow-c" id="close-ner_glosofaringeo_espinal1"></div> <div class="arrow-o" id="open-ner_glosofaringeo_espinal1" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Nervio espinal</font></legend>
    <div id="content-ner_glosofaringeo_espinal1">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_ner_glosofaringeo_espinal1" id="guardar_ner_glosofaringeo_espinal1" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_ner_glosofaringeo_espinal1" name="form_ner_glosofaringeo_espinal1" action="<?php echo @$action_form_ner_glosofaringeo_espinal1 ?>#ner_glosofaringeo_espinal1" method="post">

            <input type="hidden" id="id_ner_glosofaringeo_espinal" name="id_ner_glosofaringeo_espinal" value="<?php echo @$id_ner_glosofaringeo_espinal ?>" />


            <input type="hidden" class="input_txt valid" id="id_ner_glosofaringeo_espinal" name="id_ner_glosofaringeo_espinal" value="<?php echo @$id_ner_glosofaringeo_espinal; ?>" />

            <p><strong>Componente motor:</strong></p>
            <p>Musculo  esternocleidomastoideo: derecho:
                <input type="text" class="input_txt valid" id="esp_esternod" name="esp_esternod" value="<?php echo @$esp_esternod; ?>" />
                Izquierdo:
                <input type="text" class="input_txt valid" id="esp_esternoi" name="esp_esternoi" value="<?php echo @$esp_esternoi; ?>" />
                <br />
                Musculo  trapecio superior: derecho:
                <input type="text" class="input_txt valid" id="mus_trasd" name="mus_trasd" value="<?php echo @$mus_trasd; ?>" />
                Izquierdo:
                <input type="text" class="input_txt valid" id="mus_trasi" name="mus_trasi" value="<?php echo @$mus_trasi; ?>" />
            </p>
            <p><strong>OBSERVACIONES:
                    <input type="text" class="input_txt valid" id="espinal_obser" name="espinal_obser" value="<?php echo @$espinal_obser; ?>" />
                </strong></p>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>