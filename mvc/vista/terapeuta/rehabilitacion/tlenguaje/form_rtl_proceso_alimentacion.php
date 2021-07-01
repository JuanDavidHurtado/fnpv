<?php
if (isset($_REQUEST['guardar_rtl_proceso_alimentacion']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtl_proceso_alimentacion'] == 'new') {

        $sql = "INSERT INTO rtl_proceso_alimentacion (
        `id_rtl_proceso_alimentacion`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `liquidos`,
        `semisolidos`,
        `id_cita`,
        `id_vinicial`,
        `solidos`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['liquidos'] . "' ,
        '" . $_REQUEST['semisolidos'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['solidos'] . "' 
        ) ";
    } else if ($_REQUEST['id_rtl_proceso_alimentacion'] != '') {

        $sql = "UPDATE rtl_proceso_alimentacion set 
        `liquidos` = '" . $_REQUEST['liquidos'] . "' ,
        `semisolidos` = '" . $_REQUEST['semisolidos'] . "' ,
        `solidos` = '" . $_REQUEST['solidos'] . "' WHERE `id_rtl_proceso_alimentacion` = '" . $_REQUEST['id_rtl_proceso_alimentacion'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rtl_proceso_alimentacion = 'new';
$sql = "SELECT * from rtl_proceso_alimentacion WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtl_proceso_alimentacion = $row['id_rtl_proceso_alimentacion'];
    $id_proceso = $row['id_proceso'];
    $id_usuario = $row['id_usuario'];
    $historia = $row['historia'];
    $liquidos = $row['liquidos'];
    $semisolidos = $row['semisolidos'];
    $solidos = $row['solidos'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rtl_proceso_alimentacion").click(function(){
            $("#open-rtl_proceso_alimentacion").show();
            $(this).hide();
            $("#content-rtl_proceso_alimentacion").hide('slow');
        });

        $("#open-rtl_proceso_alimentacion").click(function(){
            $("#close-rtl_proceso_alimentacion").show();
            $(this).hide();
            $("#content-rtl_proceso_alimentacion").show('slow');
        });

    });

</script>
<fieldset id="rtl_proceso_alimentacion">
    <legend align="left"> <div class="arrow-c" id="close-rtl_proceso_alimentacion"></div> <div class="arrow-o" id="open-rtl_proceso_alimentacion" ></div> <font>Valoracion terapia lenguaje - rtl_proceso_alimentacion</font></legend>
    <div id="content-rtl_proceso_alimentacion">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rtl_proceso_alimentacion" id="guardar_rtl_proceso_alimentacion" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rtl_proceso_alimentacion" name="form_rtl_proceso_alimentacion" action="<?php echo @$action_form_rtl_proceso_alimentacion ?>#rtl_proceso_alimentacion" method="post">

            <input type="hidden" id="id_rtl_proceso_alimentacion" name="id_rtl_proceso_alimentacion" value="<?php echo @$id_rtl_proceso_alimentacion ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td><b>Liquidos</b></td>
                    <td><b>Semi-solidos</b></td>
                    <td><b>Solidos</b></td>
                </tr>
                <tr class="row1">
                    <td><input type="text" class="input_txt valid" id="liquidos" name="liquidos" value="<?php echo @$liquidos; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="semisolidos" name="semisolidos" value="<?php echo @$semisolidos; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="solidos" name="solidos" value="<?php echo @$solidos; ?>" />
                    </td>
                </tr>
            </table>


            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>