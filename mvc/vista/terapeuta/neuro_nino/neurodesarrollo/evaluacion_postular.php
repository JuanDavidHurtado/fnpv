<?php
if (isset($_REQUEST['guardar_h1_postural_anterior_nino']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h1_postural_anterior_nino'] == 'new') {

        $sql = "INSERT INTO h1_postural_anterior_nino (
`id_h1_postural_anterior_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`aplica_si`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`aplica_no`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['aplica_si'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['aplica_no'] . "'
) ";
    } else if ($_REQUEST['id_h1_postural_anterior_nino'] != '') {

        $sql = "UPDATE h1_postural_anterior_nino set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`aplica_si` = '" . $_REQUEST['aplica_si'] . "' ,
`aplica_no` = '" . $_REQUEST['aplica_no'] . "' WHERE `id_h1_postural_anterior_nino` = '" . $_REQUEST['id_h1_postural_anterior_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h1_postural_anterior_nino = 'new';
$sql = "SELECT * from h1_postural_anterior_nino WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h1_postural_anterior_nino = $row['id_h1_postural_anterior_nino'];

    $aplica_si = $row['aplica_si'];
    $aplica_no = $row['aplica_no'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h1_postural_anterior_nino").click(function() {
            $("#open-h1_postural_anterior_nino").show();
            $(this).hide();
            $("#content-h1_postural_anterior_nino").hide('slow');
        });

        $("#open-h1_postural_anterior_nino").click(function() {
            $("#close-h1_postural_anterior_nino").show();
            $(this).hide();
            $("#content-h1_postural_anterior_nino").show('slow');
        });

    });

</script>
<fieldset id="h1_postural_anterior_nino">
    <legend align="left"> <div class="arrow-c" id="close-h1_postural_anterior_nino"></div> <div class="arrow-o" id="open-h1_postural_anterior_nino" ></div> <font>Valoracion fisioterapia de neurodesarrollo - Evaluacion postular</font></legend>
    <div id="content-h1_postural_anterior_nino">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h1_postural_anterior_nino" id="guardar_h1_postural_anterior_nino" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h1_postural_anterior_nino" name="form_h1_postural_anterior_nino" action="<?php echo @$action_form_h1_postural_anterior_nino ?>#h1_postural_anterior_nino" method="post">

            <input type="hidden" id="id_h1_postural_anterior_nino" name="id_h1_postural_anterior_nino" value="<?php echo @$id_h1_postural_anterior_nino ?>" />


            <p><strong>Aplica:
                    <input type="text" class="input_txt valid" id="aplica_si" name="aplica_si" value="<?php echo @$aplica_si; ?>" />
                    No aplica:</strong>
                <input type="text" class="input_txt valid" id="aplica_no" name="aplica_no" value="<?php echo @$aplica_no; ?>" /></p>

            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>