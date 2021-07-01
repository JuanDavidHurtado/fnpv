<?php
if (isset($_REQUEST['guardar_rtf_propiocepcion']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtf_propiocepcion'] == 'new') {

        $sql = "INSERT INTO rtf_propiocepcion (
        `id_rtf_propiocepcion`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `estatica`,
        `id_cita`,
        `id_vinicial`,
        `dinamica`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['estatica'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['dinamica'] . "' 
        ) ";
        
    } else if ($_REQUEST['id_rtf_propiocepcion'] != '') {

        $sql = "UPDATE rtf_propiocepcion set 
        `estatica` = '" . $_REQUEST['estatica'] . "' ,
        `dinamica` = '" . $_REQUEST['dinamica'] . "' WHERE `id_rtf_propiocepcion` = '" . $_REQUEST['id_rtf_propiocepcion'] . "' ;";
    
        
    }

    $conexion->EjecutarQuery($sql);
}

$id_rtf_propiocepcion = 'new';
$sql = "SELECT * from rtf_propiocepcion WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtf_propiocepcion = $row['id_rtf_propiocepcion'];
    $estatica = $row['estatica'];
    $dinamica = $row['dinamica'];
    break;
}

?>
<script>

    $(function(){

        $("#close-rtf_propiocepcion").click(function(){
            $("#open-rtf_propiocepcion").show();
            $(this).hide();
            $("#content-rtf_propiocepcion").hide('slow');
        });

        $("#open-rtf_propiocepcion").click(function(){
            $("#close-rtf_propiocepcion").show();
            $(this).hide();
            $("#content-rtf_propiocepcion").show('slow');
        });

    });

</script>
<fieldset id="rtf_propiocepcion">
    <legend align="left"> <div class="arrow-c" id="close-rtf_propiocepcion"></div> <div class="arrow-o" id="open-rtf_propiocepcion" ></div> <font>Valoracion terapia fisica - Propiocepcion</font></legend>
    <div id="content-rtf_propiocepcion">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rtf_propiocepcion" id="guardar_rtf_propiocepcion" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rtf_propiocepcion" name="form_rtf_propiocepcion" action="<?php echo @$action_form_rtf_propiocepcion ?>#rtf_propiocepcion" method="post">

            <input type="hidden" id="id_rtf_propiocepcion" name="id_rtf_propiocepcion" value="<?php echo @$id_rtf_propiocepcion ?>" />
            
            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td>Estatica</td>
                    <td><input type="text" class="input_txt valid" id="estatica" name="estatica" value="<?php echo @$estatica; ?>" />
            </td>
                </tr>
                <tr class="row1">
                    <td>Dinamica</td>
                    <td><input type="text" class="input_txt valid" id="dinamica" name="dinamica" value="<?php echo @$dinamica; ?>" />
            </td>
                </tr>
            </table>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>