<?php
if (isset($_REQUEST['guardar_trf_retracciones']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_trf_retracciones'] == 'new') {

        $sql = "INSERT INTO trf_retracciones (
        `id_trf_retracciones`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `miogenicas`,
        `id_cita`,
        `id_vinicial`,
        `atrogenicas`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['miogenicas'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['atrogenicas'] . "' 
        ) ";
    } else if ($_REQUEST['id_trf_retracciones'] != '') {

        $sql = "UPDATE trf_retracciones set 
        `miogenicas` = '" . $_REQUEST['miogenicas'] . "' ,
        `atrogenicas` = '" . $_REQUEST['atrogenicas'] . "' WHERE `id_trf_retracciones` = '" . $_REQUEST['id_trf_retracciones'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_trf_retracciones = 'new';
$sql = "SELECT * from trf_retracciones WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_trf_retracciones = $row['id_trf_retracciones'];
    $miogenicas = $row['miogenicas'];
    $atrogenicas = $row['atrogenicas'];
    break;
}
?>
<script>

    $(function(){

        $("#close-trf_retracciones").click(function(){
            $("#open-trf_retracciones").show();
            $(this).hide();
            $("#content-trf_retracciones").hide('slow');
        });

        $("#open-trf_retracciones").click(function(){
            $("#close-trf_retracciones").show();
            $(this).hide();
            $("#content-trf_retracciones").show('slow');
        });

    });

</script>
<fieldset id="trf_retracciones">
    <legend align="left"> <div class="arrow-c" id="close-trf_retracciones"></div> <div class="arrow-o" id="open-trf_retracciones" ></div> <font>Valoracion terapia fisica - Retracciones</font></legend>
    <div id="content-trf_retracciones">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_trf_retracciones" id="guardar_trf_retracciones" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_trf_retracciones" name="form_trf_retracciones" action="<?php echo @$action_form_trf_retracciones ?>#trf_retracciones" method="post">

            <input type="hidden" id="id_trf_retracciones" name="id_trf_retracciones" value="<?php echo @$id_trf_retracciones ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td>Miogenicas</td>
                    <td><input type="text" class="input_txt valid" id="miogenicas" name="miogenicas" value="<?php echo @$miogenicas; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td>Androgenicas</td>
                    <td><input type="text" class="input_txt valid" id="atrogenicas" name="atrogenicas" value="<?php echo @$atrogenicas; ?>" />
                    </td>
                </tr>
            </table>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>