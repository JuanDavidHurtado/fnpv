<?php
if (isset($_REQUEST['guardar_h1_inicio_nino2']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h1_inicio_nino'] == 'new') {

        $sql = "INSERT INTO h1_inicio_nino (
`id_h1_inicio_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`ini_cardio`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['ini_cardio'] . "'
) ";
    } else if ($_REQUEST['id_h1_inicio_nino'] != '') {

        $sql = "UPDATE h1_inicio_nino set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`ini_cardio` = '" . $_REQUEST['ini_cardio'] . "' WHERE `id_h1_inicio_nino` = '" . $_REQUEST['id_h1_inicio_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h1_inicio_nino = 'new';
$sql = "SELECT * from h1_inicio_nino WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h1_inicio_nino = $row['id_h1_inicio_nino'];

    $ini_cardio = $row['ini_cardio'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h1_inicio_nino2").click(function() {
            $("#open-h1_inicio_nino2").show();
            $(this).hide();
            $("#content-h1_inicio_nino2").hide('slow');
        });

        $("#open-h1_inicio_nino2").click(function() {
            $("#close-h1_inicio_nino2").show();
            $(this).hide();
            $("#content-h1_inicio_nino2").show('slow');
        });

    });

</script>
<fieldset id="h1_inicio_nino2">
    <legend align="left"> <div class="arrow-c" id="close-h1_inicio_nino2"></div> <div class="arrow-o" id="open-h1_inicio_nino2" ></div> <font>Valoracion fisioterapia de neurodesarrollo - Evaluacion por sistemas</font></legend>
    <div id="content-h1_inicio_nino2">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h1_inicio_nino2" id="guardar_h1_inicio_nino2" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h1_inicio_nino2" name="form_h1_inicio_nino2" action="<?php echo @$action_form_h1_inicio_nino2 ?>#h1_inicio_nino2" method="post">

            <input type="hidden" id="id_h1_inicio_nino" name="id_h1_inicio_nino" value="<?php echo @$id_h1_inicio_nino ?>" />


            <p><strong> A. CARDIO-PULMONAR: </strong>
                <br>
                <input type="text" class="input_txt valid" id="ini_cardio" name="ini_cardio" value="<?php echo @$ini_cardio; ?>" />
            </p>

            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>