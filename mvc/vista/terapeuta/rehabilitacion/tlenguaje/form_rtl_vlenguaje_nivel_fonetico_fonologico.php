<?php
if (isset($_REQUEST['guardar_rtl_vlenguaje_nivel_fonetico_fonologico']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtl_vlenguaje_nivel_fonetico_fonologico'] == 'new') {

        $sql = "INSERT INTO rtl_vlenguaje_nivel_fonetico_fonologico (
        `id_rtl_vlenguaje_nivel_fonetico_fonologico`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `id_cita`,
        `id_vinicial`,
        `t4_escripcion`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['t4_escripcion'] . "' 
        ) ";
    } else if ($_REQUEST['id_rtl_vlenguaje_nivel_fonetico_fonologico'] != '') {

        $sql = "UPDATE rtl_vlenguaje_nivel_fonetico_fonologico set 
        `t4_escripcion` = '" . $_REQUEST['t4_escripcion'] . "' WHERE `id_rtl_vlenguaje_nivel_fonetico_fonologico` = '" . $_REQUEST['id_rtl_vlenguaje_nivel_fonetico_fonologico'] . "' ;";
   }

    $conexion->EjecutarQuery($sql);
}
$id_rtl_vlenguaje_nivel_fonetico_fonologico = 'new';
$sql = "SELECT * from rtl_vlenguaje_nivel_fonetico_fonologico WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtl_vlenguaje_nivel_fonetico_fonologico = $row['id_rtl_vlenguaje_nivel_fonetico_fonologico'];
    $t4_escripcion = $row['t4_escripcion'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rtl_vlenguaje_nivel_fonetico_fonologico").click(function(){
            $("#open-rtl_vlenguaje_nivel_fonetico_fonologico").show();
            $(this).hide();
            $("#content-rtl_vlenguaje_nivel_fonetico_fonologico").hide('slow');
        });

        $("#open-rtl_vlenguaje_nivel_fonetico_fonologico").click(function(){
            $("#close-rtl_vlenguaje_nivel_fonetico_fonologico").show();
            $(this).hide();
            $("#content-rtl_vlenguaje_nivel_fonetico_fonologico").show('slow');
        });

    });

</script>
<fieldset id="rtl_vlenguaje_nivel_fonetico_fonologico">
    <legend align="left"> <div class="arrow-c" id="close-rtl_vlenguaje_nivel_fonetico_fonologico"></div> <div class="arrow-o" id="open-rtl_vlenguaje_nivel_fonetico_fonologico" ></div> <font>Valoracion terapia lenguaje - Evaluación lenguaje oral nivel fonetico fonologico</font></legend>
    <div id="content-rtl_vlenguaje_nivel_fonetico_fonologico">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rtl_vlenguaje_nivel_fonetico_fonologico" id="guardar_rtl_vlenguaje_nivel_fonetico_fonologico" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rtl_vlenguaje_nivel_fonetico_fonologico" name="form_rtl_vlenguaje_nivel_fonetico_fonologico" action="<?php echo @$action_form_rtl_vlenguaje_nivel_fonetico_fonologico ?>#rtl_vlenguaje_nivel_fonetico_fonologico" method="post">

            <input type="hidden" id="id_rtl_vlenguaje_nivel_fonetico_fonologico" name="id_rtl_vlenguaje_nivel_fonetico_fonologico" value="<?php echo @$id_rtl_vlenguaje_nivel_fonetico_fonologico ?>" />

            <textarea class="input_txt_area" rows="3" cols="50" id="t4_escripcion" name="t4_escripcion" ><?php echo @$t4_escripcion; ?></textarea><br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>