<?php
if (isset($_REQUEST['guardar_rto_constancia_perceptual']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rto_constancia_perceptual'] == 'new') {

        $sql = "INSERT INTO rto_constancia_perceptual (
        `id_rto_constancia_perceptual`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `color`,
        `forma`,
        `id_cita`,
        `id_vinicial`,
        `tamano`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['color'] . "' ,
        '" . $_REQUEST['forma'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['tamano'] . "' 
        ) ";
    } else if ($_REQUEST['id_rto_constancia_perceptual'] != '') {

        $sql = "UPDATE rto_constancia_perceptual set 
        `color` = '" . $_REQUEST['color'] . "' ,
        `forma` = '" . $_REQUEST['forma'] . "' ,
        `tamano` = '" . $_REQUEST['tamano'] . "' WHERE `id_rto_constancia_perceptual` = '" . $_REQUEST['id_rto_constancia_perceptual'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rto_constancia_perceptual = 'new';
$sql = "SELECT * from rto_constancia_perceptual WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rto_constancia_perceptual = $row['id_rto_constancia_perceptual'];

    if ($row['color'] == 1)
        $color_1 = ' checked="checked" ';
    if ($row['color'] == 2)
        $color_2 = ' checked="checked" ';
    if ($row['color'] == 3)
        $color_3 = ' checked="checked" ';

    if ($row['forma'] == 1)
        $forma_1 = ' checked="checked" ';
    if ($row['forma'] == 2)
        $forma_2 = ' checked="checked" ';
    if ($row['forma'] == 3)
        $forma_3 = ' checked="checked" ';

    if ($row['tamano'] == 1)
        $tamano_1 = ' checked="checked" ';
    if ($row['tamano'] == 2)
        $tamano_2 = ' checked="checked" ';
    if ($row['tamano'] == 3)
        $tamano_3 = ' checked="checked" ';


    break;
}
?>
<script>

    $(function(){

        $("#close-rto_constancia_perceptual").click(function(){
            $("#open-rto_constancia_perceptual").show();
            $(this).hide();
            $("#content-rto_constancia_perceptual").hide('slow');
        });

        $("#open-rto_constancia_perceptual").click(function(){
            $("#close-rto_constancia_perceptual").show();
            $(this).hide();
            $("#content-rto_constancia_perceptual").show('slow');
        });

    });

</script>
<fieldset id="rto_constancia_perceptual">
    <legend align="left"> <div class="arrow-c" id="close-rto_constancia_perceptual"></div> <div class="arrow-o" id="open-rto_constancia_perceptual" ></div> <font>Valoracion terapia ocupacional - Constancia Perceptual</font></legend>
    <div id="content-rto_constancia_perceptual">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rto_constancia_perceptual" id="guardar_rto_constancia_perceptual" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rto_constancia_perceptual" name="form_rto_constancia_perceptual" action="<?php echo @$action_form_rto_constancia_perceptual ?>#rto_constancia_perceptual" method="post">

            <input type="hidden" id="id_rto_constancia_perceptual" name="id_rto_constancia_perceptual" value="<?php echo @$id_rto_constancia_perceptual ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td><b></b></td>
                    <td><b>Identifica</b></td>
                    <td><b>No identifica</b></td>
                    <td><b>No eval</b></td>
                </tr>
                <tr class="row1">
                    <td><b>Color</b></td>
                    <td><input type="radio" class="" id="" name="color" value="1" <?php echo @$color_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="color" value="2" <?php echo @$color_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="color" value="3" <?php echo @$color_3; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Forma</b></td>
                    <td><input type="radio" class="" id="" name="forma" value="1" <?php echo @$forma_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="forma" value="2" <?php echo @$forma_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="forma" value="3" <?php echo @$forma_3; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Tamaño</b></td>
                    <td><input type="radio" class="" id="" name="tamano" value="1" <?php echo @$tamano_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="tamano" value="2" <?php echo @$tamano_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="tamano" value="3" <?php echo @$tamano_3; ?> />
                    </td>
                </tr>
            </table>
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>