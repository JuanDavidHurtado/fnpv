<?php
if (isset($_REQUEST['guardar_rtl_tono']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtl_tono'] == 'new') {

        $sql = "INSERT INTO rtl_tono (
        `id_rtl_tono`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `t8_conversacional`,
        `t8_proyectada`,
        `id_cita`,
        `id_vinicial`,
        `t8_cantada`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['t8_conversacional'] . "' ,
        '" . $_REQUEST['t8_proyectada'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['t8_cantada'] . "' 
        ) ";
    } else if ($_REQUEST['id_rtl_tono'] != '') {

        $sql = "UPDATE rtl_tono set 
        `t8_conversacional` = '" . $_REQUEST['t8_conversacional'] . "' ,
        `t8_proyectada` = '" . $_REQUEST['t8_proyectada'] . "' ,
        `t8_cantada` = '" . $_REQUEST['t8_cantada'] . "' WHERE `id_rtl_tono` = '" . $_REQUEST['id_rtl_tono'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rtl_tono = 'new';
$sql = "SELECT * from rtl_tono WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtl_tono = $row['id_rtl_tono'];


    if ($row['t8_conversacional'] == 1)
        $t8_conversacional_1 = " checked='checked' ";
    if ($row['t8_conversacional'] == 2)
        $t8_conversacional_2 = " checked='checked' ";
    if ($row['t8_conversacional'] == 3)
        $t8_conversacional_3 = " checked='checked' ";
    if ($row['t8_conversacional'] == 4)
        $t8_conversacional_4 = " checked='checked' ";


    if ($row['t8_proyectada'] == 1)
        $t8_proyectada_1 = " checked='checked' ";
    if ($row['t8_proyectada'] == 2)
        $t8_proyectada_2 = " checked='checked' ";
    if ($row['t8_proyectada'] == 3)
        $t8_proyectada_3 = " checked='checked' ";
    if ($row['t8_proyectada'] == 4)
        $t8_proyectada_4 = " checked='checked' ";


    if ($row['t8_cantada'] == 1)
        $t8_cantada_1 = " checked='checked' ";
    if ($row['t8_cantada'] == 2)
        $t8_cantada_2 = " checked='checked' ";
    if ($row['t8_cantada'] == 3)
        $t8_cantada_3 = " checked='checked' ";
    if ($row['t8_cantada'] == 4)
        $t8_cantada_4 = " checked='checked' ";


    break;
}
?>
<script>

    $(function(){

        $("#close-rtl_tono").click(function(){
            $("#open-rtl_tono").show();
            $(this).hide();
            $("#content-rtl_tono").hide('slow');
        });

        $("#open-rtl_tono").click(function(){
            $("#close-rtl_tono").show();
            $(this).hide();
            $("#content-rtl_tono").show('slow');
        });

    });

</script>
<fieldset id="rtl_tono">
    <legend align="left"> <div class="arrow-c" id="close-rtl_tono"></div> <div class="arrow-o" id="open-rtl_tono" ></div> <font>Valoracion terapia lenguaje - Tono</font></legend>
    <div id="content-rtl_tono">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rtl_tono" id="guardar_rtl_tono" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rtl_tono" name="form_rtl_tono" action="<?php echo @$action_form_rtl_tono ?>#rtl_tono" method="post">

            <input type="hidden" id="id_rtl_tono" name="id_rtl_tono" value="<?php echo @$id_rtl_tono ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td><b>Tipo</b></td>
                    <td><b>Normal</b></td>
                    <td><b>Grave</b></td>
                    <td><b>Agudo</b></td>
                    <td><b>Irregular</b></td>
                </tr>
                <tr class="row1">
                    <td><b>Convencional</b></td>
                    <td><input type="radio" class="" id="" name="t8_conversacional" value="1" <?php echo @$t8_conversacional_1; ?> /></td>
                    <td><input type="radio" class="" id="" name="t8_conversacional" value="2" <?php echo @$t8_conversacional_2; ?> /></td>
                    <td><input type="radio" class="" id="" name="t8_conversacional" value="3" <?php echo @$t8_conversacional_3; ?> /></td>
                    <td><input type="radio" class="" id="" name="t8_conversacional" value="4" <?php echo @$t8_conversacional_4; ?> /></td>
                </tr>
                <tr class="row1">
                    <td><b>Proyectada</b></td>
                    <td><input type="radio" class="" id="" name="t8_proyectada" value="1" <?php echo @$t8_proyectada_1; ?> /></td>
                    <td><input type="radio" class="" id="" name="t8_proyectada" value="2" <?php echo @$t8_proyectada_2; ?> /></td>
                    <td><input type="radio" class="" id="" name="t8_proyectada" value="3" <?php echo @$t8_proyectada_3; ?> /></td>
                    <td><input type="radio" class="" id="" name="t8_proyectada" value="4" <?php echo @$t8_proyectada_4; ?> /></td>
                </tr>
                <tr class="row1">
                    <td><b>Cantada</b></td>
                    <td><input type="radio" class="" id="" name="t8_cantada" value="1" <?php echo @$t8_cantada_1; ?> /></td>
                    <td><input type="radio" class="" id="" name="t8_cantada" value="2" <?php echo @$t8_cantada_2; ?> /></td>
                    <td><input type="radio" class="" id="" name="t8_cantada" value="3" <?php echo @$t8_cantada_3; ?> /></td>
                    <td><input type="radio" class="" id="" name="t8_cantada" value="4" <?php echo @$t8_cantada_4; ?> /></td>
                </tr>
            </table>
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>