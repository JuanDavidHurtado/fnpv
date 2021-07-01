<?php

$evolucion = '';
$id_evolucion = 'new';
$sql = "SELECT * from evolucion WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_formulario` = '" . $_REQUEST['id_formulario'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_evolucion = $row['id_evolucion'];
  
    $evolucion = $row['evolucion'];
    
    break;
}
?>
<script>

    $(function() {

        $("#close-evolucion_e<?php echo @$_REQUEST['id_formulario'] ?>").click(function() {
            $("#open-evolucion_e<?php echo @$_REQUEST['id_formulario'] ?>").show();
            $(this).hide();
            $("#content-evolucion_e<?php echo @$_REQUEST['id_formulario'] ?>").hide('slow');
        });

        $("#open-evolucion_e<?php echo @$_REQUEST['id_formulario'] ?>").click(function() {
            $("#close-evolucion_e<?php echo @$_REQUEST['id_formulario'] ?>").show();
            $(this).hide();
            $("#content-evolucion_e<?php echo @$_REQUEST['id_formulario'] ?>").show('slow');
        });

    });

</script>
<fieldset id="evolucion_e<?php echo @$_REQUEST['id_formulario'] ?>" class="egreso">
    <legend align="left"> <div class="arrow-c" id="close-evolucion_e<?php echo @$_REQUEST['id_formulario'] ?>"></div> <div class="arrow-o" id="open-evolucion_e<?php echo @$_REQUEST['id_formulario'] ?>" ></div> <font>Evolucion egreso</font></legend>
    <div id="content-evolucion_e<?php echo @$_REQUEST['id_formulario'] ?>">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_evolucion" id="guardar_evolucion" class="egreso" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_evolucion" name="form_evolucion" action="<?php echo @$action_form_evolucion ?>#evolucion_e<?php echo @$_REQUEST['id_formulario'] ?>" method="post">

            <input type="hidden" id="id_evolucion" name="id_evolucion" value="<?php echo @$id_evolucion ?>" />

            <input type="hidden" id="id_formulario" name="id_formulario" value="<?php echo @$_REQUEST['id_formulario'] ?>" />

            <textarea id="evolucion" name="evolucion" cols="110" rows="5"><?php echo @$evolucion; ?></textarea>
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>
<br>