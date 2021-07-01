<?php
if (isset($_REQUEST['guardar_h1_evaluacion_marcha_nino2']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_evaluacion_marcha_nino'] == 'new') {

        $sql = "INSERT INTO h1_evaluacion_marcha_nino (
`id_evaluacion_marcha_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`conclusiones`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['conclusiones'] . "' 
) ";
    } else if ($_REQUEST['id_evaluacion_marcha_nino'] != '') {

        $sql = "UPDATE h1_evaluacion_marcha_nino set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`conclusiones` = '" . $_REQUEST['conclusiones'] . "'  WHERE `id_evaluacion_marcha_nino` = '" . $_REQUEST['id_evaluacion_marcha_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_evaluacion_marcha_nino = 'new';
$sql = "SELECT * from h1_evaluacion_marcha_nino WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_evaluacion_marcha_nino = $row['id_evaluacion_marcha_nino'];

    $conclusiones = $row['conclusiones'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h1_evaluacion_marcha_nino2").click(function() {
            $("#open-h1_evaluacion_marcha_nino2").show();
            $(this).hide();
            $("#content-h1_evaluacion_marcha_nino2").hide('slow');
        });

        $("#open-h1_evaluacion_marcha_nino2").click(function() {
            $("#close-h1_evaluacion_marcha_nino2").show();
            $(this).hide();
            $("#content-h1_evaluacion_marcha_nino2").show('slow');
        });

    });

</script>
<fieldset id="h1_evaluacion_marcha_nino2">
    <legend align="left"> <div class="arrow-c" id="close-h1_evaluacion_marcha_nino2"></div> <div class="arrow-o" id="open-h1_evaluacion_marcha_nino2" ></div> <font>Valoracion fisioterapia de neurodesarrollo - Conclusiones</font></legend>
    <div id="content-h1_evaluacion_marcha_nino2">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_h1_evaluacion_marcha_nino2" id="guardar_h1_evaluacion_marcha_nino2" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
        <form id="form_h1_evaluacion_marcha_nino2" name="form_h1_evaluacion_marcha_nino2" action="<?php echo @$action_form_h1_evaluacion_marcha_nino2 ?>#h1_evaluacion_marcha_nino2" method="post">

            <input type="hidden" id="id_evaluacion_marcha_nino" name="id_evaluacion_marcha_nino" value="<?php echo @$id_evaluacion_marcha_nino ?>" />

            <table border="0" class="data" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="884" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="conclusiones" name="conclusiones" value="<?php echo @$conclusiones; ?>" />
                            <strong>&nbsp;</strong></p>
                    </td>
                </tr>
            </table>
         
                <br>
<?php echo @$button ?>
        </form><br>
    </div>
</fieldset>