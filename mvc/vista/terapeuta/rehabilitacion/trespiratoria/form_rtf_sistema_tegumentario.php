<?php
if (isset($_REQUEST['guardar_rtf_sistema_tegumentario']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtf_sistema_tegumentario'] == 'new') {

        $sql = "INSERT INTO rtf_sistema_tegumentario (
        `id_rtf_sistema_tegumentario`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `id_cita`,
        `id_vinicial`,
        `rtf_sistema_tegumentario_descripcion`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['rtf_sistema_tegumentario_descripcion'] . "' 
        ) ";
    } else if ($_REQUEST['id_rtf_sistema_tegumentario'] != '') {

        $sql = "UPDATE rtf_sistema_tegumentario set 
        `rtf_sistema_tegumentario_descripcion` = '" . $_REQUEST['rtf_sistema_tegumentario_descripcion'] . "' WHERE `id_rtf_sistema_tegumentario` = '" . $_REQUEST['id_rtf_sistema_tegumentario'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rtf_sistema_tegumentario = 'new';
$sql = "SELECT * from rtf_sistema_tegumentario WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtf_sistema_tegumentario = $row['id_rtf_sistema_tegumentario'];
    $rtf_sistema_tegumentario_descripcion = $row['rtf_sistema_tegumentario_descripcion'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rtf_sistema_tegumentario").click(function(){
            $("#open-rtf_sistema_tegumentario").show();
            $(this).hide();
            $("#content-rtf_sistema_tegumentario").hide('slow');
        });

        $("#open-rtf_sistema_tegumentario").click(function(){
            $("#close-rtf_sistema_tegumentario").show();
            $(this).hide();
            $("#content-rtf_sistema_tegumentario").show('slow');
        });

    });

</script>
<fieldset id="rtf_sistema_tegumentario">
    <legend align="left"> <div class="arrow-c" id="close-rtf_sistema_tegumentario"></div> <div class="arrow-o" id="open-rtf_sistema_tegumentario" ></div> <font>Valoracion terapia fisica - Sistema tegumentario</font></legend>
    <div id="content-rtf_sistema_tegumentario">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rtf_sistema_tegumentario" id="guardar_rtf_sistema_tegumentario" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rtf_sistema_tegumentario" name="form_rtf_sistema_tegumentario" action="<?php echo @$action_form_rtf_sistema_tegumentario ?>#rtf_sistema_tegumentario" method="post">

            <input type="hidden" id="id_rtf_sistema_tegumentario" name="id_rtf_sistema_tegumentario" value="<?php echo @$id_rtf_sistema_tegumentario ?>" />

            <textarea class="input_txt_area" cols="50"  id="rtf_sistema_tegumentario_descripcion" name="rtf_sistema_tegumentario_descripcion"> <?php echo @$rtf_sistema_tegumentario_descripcion; ?></textarea>
            <BR><?php echo @$button ?>
        </form><br>
    </div>
</fieldset>