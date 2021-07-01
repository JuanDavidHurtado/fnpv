<?php
if (isset($_REQUEST['guardar_rtf_arcos_movilidad_articulada']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtf_arcos_movilidad_articulada'] == 'new') {

        $sql = "INSERT INTO rtf_arcos_movilidad_articulada (
        `id_rtf_arcos_movilidad_articulada`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `id_cita`,
        `id_vinicial`,
        `arcos_movilidad_articulada_escripcion`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['arcos_movilidad_articulada_escripcion'] . "' 
        ) ";
        
    } else if ($_REQUEST['id_rtf_arcos_movilidad_articulada'] != '') {

        $sql = "UPDATE rtf_arcos_movilidad_articulada set 
        `arcos_movilidad_articulada_escripcion` = '" . $_REQUEST['arcos_movilidad_articulada_escripcion'] . "' WHERE `id_rtf_arcos_movilidad_articulada` = '" . $_REQUEST['id_rtf_arcos_movilidad_articulada'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}

$id_rtf_arcos_movilidad_articulada = 'new';
$sql = "SELECT * from rtf_arcos_movilidad_articulada WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtf_arcos_movilidad_articulada = $row['id_rtf_arcos_movilidad_articulada'];
    $id_proceso = $row['id_proceso'];
    $id_usuario = $row['id_usuario'];
    $historia = $row['historia'];
    $arcos_movilidad_articulada_escripcion = $row['arcos_movilidad_articulada_escripcion'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rtf_arcos_movilidad_articulada").click(function(){
            $("#open-rtf_arcos_movilidad_articulada").show();
            $(this).hide();
            $("#content-rtf_arcos_movilidad_articulada").hide('slow');
        });

        $("#open-rtf_arcos_movilidad_articulada").click(function(){
            $("#close-rtf_arcos_movilidad_articulada").show();
            $(this).hide();
            $("#content-rtf_arcos_movilidad_articulada").show('slow');
        });

    });

</script>
<fieldset id="rtf_arcos_movilidad_articulada">
    <legend align="left"> <div class="arrow-c" id="close-rtf_arcos_movilidad_articulada"></div> <div class="arrow-o" id="open-rtf_arcos_movilidad_articulada" ></div> <font>Valoracion terapia fisica - Arcos movilidad articulada</font></legend>
    <div id="content-rtf_arcos_movilidad_articulada">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rtf_arcos_movilidad_articulada" id="guardar_rtf_arcos_movilidad_articulada" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rtf_arcos_movilidad_articulada" name="form_rtf_arcos_movilidad_articulada" action="<?php echo @$action_form_rtf_arcos_movilidad_articulada ?>#rtf_arcos_movilidad_articulada" method="post">

            <input type="hidden" id="id_rtf_arcos_movilidad_articulada" name="id_rtf_arcos_movilidad_articulada" value="<?php echo @$id_rtf_arcos_movilidad_articulada ?>" />

            
            <textarea  class="input_txt_area" cols="50" id="arcos_movilidad_articulada_escripcion" name="arcos_movilidad_articulada_escripcion" ><?php echo @$arcos_movilidad_articulada_escripcion; ?></textarea>
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>