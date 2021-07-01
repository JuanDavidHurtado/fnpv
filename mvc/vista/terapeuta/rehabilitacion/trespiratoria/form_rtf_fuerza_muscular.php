<?php
if (isset($_REQUEST['guardar_rtf_fuerza_muscular']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtf_fuerza_muscular'] == 'new') {

        $sql = "INSERT INTO rtf_fuerza_muscular (
        `id_rtf_fuerza_muscular`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `id_cita`,
        `id_vinicial`,
        `rtf_fuerza_muscular_descripcion`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['rtf_fuerza_muscular_descripcion'] . "' 
        ) ";
    } else if ($_REQUEST['id_rtf_fuerza_muscular'] != '') {

        $sql = "UPDATE rtf_fuerza_muscular set 
        `rtf_fuerza_muscular_descripcion` = '" . $_REQUEST['rtf_fuerza_muscular_descripcion'] . "' WHERE `id_rtf_fuerza_muscular` = '" . $_REQUEST['id_rtf_fuerza_muscular'] . "' ;";

        
    }

    $conexion->EjecutarQuery($sql);
}
$id_rtf_fuerza_muscular = 'new';
$sql = "SELECT * from rtf_fuerza_muscular WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtf_fuerza_muscular = $row['id_rtf_fuerza_muscular'];
    $id_proceso = $row['id_proceso'];
    $id_usuario = $row['id_usuario'];
    $historia = $row['historia'];
    $rtf_fuerza_muscular_descripcion = $row['rtf_fuerza_muscular_descripcion'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rtf_fuerza_muscular").click(function(){
            $("#open-rtf_fuerza_muscular").show();
            $(this).hide();
            $("#content-rtf_fuerza_muscular").hide('slow');
        });

        $("#open-rtf_fuerza_muscular").click(function(){
            $("#close-rtf_fuerza_muscular").show();
            $(this).hide();
            $("#content-rtf_fuerza_muscular").show('slow');
        });

    });

</script>
<fieldset id="rtf_fuerza_muscular">
    <legend align="left"> <div class="arrow-c" id="close-rtf_fuerza_muscular"></div> <div class="arrow-o" id="open-rtf_fuerza_muscular" ></div> <font>Valoracion terapia fisica - Fuerza muscular</font></legend>
    <div id="content-rtf_fuerza_muscular">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_rtf_fuerza_muscular" id="guardar_rtf_fuerza_muscular" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
        <form id="form_rtf_fuerza_muscular" name="form_rtf_fuerza_muscular" action="<?php echo @$action_form_rtf_fuerza_muscular ?>#rtf_fuerza_muscular" method="post">

            <input type="hidden" id="id_rtf_fuerza_muscular" name="id_rtf_fuerza_muscular" value="<?php echo @$id_rtf_fuerza_muscular ?>" />
            
            <textarea  class="input_txt_area" cols="50" id="rtf_fuerza_muscular_descripcion" name="rtf_fuerza_muscular_descripcion" ><?php echo @$rtf_fuerza_muscular_descripcion; ?></textarea><BR>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>