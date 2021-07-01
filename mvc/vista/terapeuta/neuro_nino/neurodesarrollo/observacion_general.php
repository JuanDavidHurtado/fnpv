<?php
if (isset($_REQUEST['guardar_h1_inicio_nino']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h1_inicio_nino'] == 'new') {

        $sql = "INSERT INTO h1_inicio_nino (
`id_h1_inicio_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`observacion_general`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['observacion_general'] . "'
) ";
    } else if ($_REQUEST['id_h1_inicio_nino'] != '') {

        $sql = "UPDATE h1_inicio_nino set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`observacion_general` = '" . $_REQUEST['observacion_general'] . "' WHERE `id_h1_inicio_nino` = '" . $_REQUEST['id_h1_inicio_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h1_inicio_nino = 'new';
$sql = "SELECT * from h1_inicio_nino WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h1_inicio_nino = $row['id_h1_inicio_nino'];

    $observacion_general = $row['observacion_general'];
    $ini_piel = $row['ini_piel'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h1_inicio_nino").click(function() {
            $("#open-h1_inicio_nino").show();
            $(this).hide();
            $("#content-h1_inicio_nino").hide('slow');
        });

        $("#open-h1_inicio_nino").click(function() {
            $("#close-h1_inicio_nino").show();
            $(this).hide();
            $("#content-h1_inicio_nino").show('slow');
        });

    });

</script>
<fieldset id="h1_inicio_nino">
    <legend align="left"> <div class="arrow-c" id="close-h1_inicio_nino"></div> <div class="arrow-o" id="open-h1_inicio_nino" ></div> <font>Valoracion fisioterapia de neurodesarrollo - Observacion general</font></legend>
    <div id="content-h1_inicio_nino">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h1_inicio_nino" id="guardar_h1_inicio_nino" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h1_inicio_nino" name="form_h1_inicio_nino" action="<?php echo @$action_form_h1_inicio_nino ?>#h1_inicio_nino" method="post">

            <input type="hidden" id="id_h1_inicio_nino" name="id_h1_inicio_nino" value="<?php echo @$id_h1_inicio_nino ?>" />

            <input type="text" class="input_txt valid" id="observacion_general" name="observacion_general" value="<?php echo @$observacion_general; ?>" />

            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>