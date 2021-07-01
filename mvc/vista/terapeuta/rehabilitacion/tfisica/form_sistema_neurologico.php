<?php
if (isset($_REQUEST['guardar_rtf_sistema_neurologico']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_valoracion_rtf_sistema_neurologico'] == 'new') {


         $sql = "INSERT INTO valoracion_rtf_sistema_neurologico (
        `id_valoracion_rtf_sistema_neurologico`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `estado_conciencia`,
        `id_cita`,
        `id_vinicial`,
        `estado_mental`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['estado_conciencia'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['estado_mental'] . "' 
        ) ";
        
    } else if ($_REQUEST['id_valoracion_rtf_sistema_neurologico'] != '') {

         $sql = "UPDATE valoracion_rtf_sistema_neurologico set 
        `id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
        `id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
        `historia` = '" . $_REQUEST['historia'] . "' ,
        `estado_conciencia` = '" . $_REQUEST['estado_conciencia'] . "' ,
        `estado_mental` = '" . $_REQUEST['estado_mental'] . "' WHERE `id_valoracion_rtf_sistema_neurologico` = '" . $_REQUEST['id_valoracion_rtf_sistema_neurologico'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}

$id_valoracion_rtf_sistema_neurologico = 'new';
$sql = "SELECT * from valoracion_rtf_sistema_neurologico WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_valoracion_rtf_sistema_neurologico = $row['id_valoracion_rtf_sistema_neurologico'];
    $estado_conciencia = $row['estado_conciencia'];
    $estado_mental = $row['estado_mental'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rtf-sistema-neurologico").click(function(){
            $("#open-rtf-sistema-neurologico").show();
            $(this).hide();
            $("#content-rtf-sistema-neurologico").hide('slow');
        });
        
        $("#open-rtf-sistema-neurologico").click(function(){
            $("#close-rtf-sistema-neurologico").show();
            $(this).hide();
            $("#content-rtf-sistema-neurologico").show('slow');
        });
    
    });

</script>
<fieldset id="rtf-sistema-neurologico">
    <legend align="left"> <div class="arrow-c" id="close-rtf-sistema-neurologico"></div> <div class="arrow-o" id="open-rtf-sistema-neurologico" ></div> <font>Valoracion terapia fisica - Sistema neurologico</font></legend>
    <div id="content-rtf-sistema-neurologico">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button  name="guardar_rtf_sistema_neurologico" id="guardar_rtf_sistema_neurologico" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
        <form id="form_rtf_sistema_neurologico" name="form_rtf_sistema_neurologico" action="<?php echo @$action_form_sn ?>#rtf-sistema-neurologico" method="post">

            <input type="hidden" id="id_valoracion_rtf_sistema_neurologico" name="id_valoracion_rtf_sistema_neurologico" value="<?php echo @$id_valoracion_rtf_sistema_neurologico ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td>Estado conciencia</td>
                    <td><textarea id="estado_conciencia" name="estado_conciencia" class="input_txt valid"><?php echo @$estado_conciencia ?></textarea></td>
                </tr>
                <tr class="row1">
                    <td>Estado mental</td>
                    <td><textarea id="estado_mental" name="estado_mental" class="input_txt valid"><?php echo @$estado_mental ?></textarea></td>
                </tr>

            </table>

<?php echo @$button ?>
        </form><br>
    </div>
</fieldset>