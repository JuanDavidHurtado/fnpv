<?php
$id_cita_ = 0;
$bool_have = true;
$id_evolucion = 'new';
$evolucion = '';
$sql = "SELECT * from evolucion WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `flujo` = '" . $_REQUEST['flujo'] . "' and id_formulario='0' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_cita_ = $row['id_cita'];
    $id_evolucion = $row['id_evolucion'];
    $evolucion = $row['evolucion'];
    break;
}

/* * ************** */

if ($id_cita_ == 0) {
    $bool_have = false;
    $sql = "SELECT * from evolucion WHERE `id_cita` = '" . $_REQUEST['id_cita'] . "' and id_formulario='0' ";
    $result_have = $conexion->EjecutarQuery($sql);
    while ($row2x = mysql_fetch_array($result_have)) {
        $bool_have = true;
        break;
    }
}

$button = '';
if ($id_cita_ > 0 || !$bool_have) {
    ?>
    <script>

        $(function() {

            $("#close-evolucion<?php echo $_REQUEST['flujo']; ?>").click(function() {
                $("#open-evolucion<?php echo $_REQUEST['flujo']; ?>").show();
                $(this).hide();
                $("#content-evolucion<?php echo $_REQUEST['flujo']; ?>").hide('slow');
            });

            $("#open-evolucion<?php echo $_REQUEST['flujo']; ?>").click(function() {
                $("#close-evolucion<?php echo $_REQUEST['flujo']; ?>").show();
                $(this).hide();
                $("#content-evolucion<?php echo $_REQUEST['flujo']; ?>").show('slow');
            });

        });

    </script>
    <fieldset id="evolucion<?php echo $_REQUEST['flujo']; ?>">
        <legend align="left"> <div class="arrow-c" id="close-evolucion<?php echo $_REQUEST['flujo']; ?>"></div> <div class="arrow-o" id="open-evolucion<?php echo $_REQUEST['flujo']; ?>" ></div> <font><?php echo $_REQUEST['label_evolution'] ?></font></legend>
        <div id="content-evolucion<?php echo $_REQUEST['flujo']; ?>">
            <?php
            $button = '';
            if (isset($_REQUEST['id_cita'])) {
                if (intval($_REQUEST['id_cita']) == intval($id_cita_) || !$bool_have) {
                    $button = '<button name="guardar_evolucion" id="guardar_evolucion" >Guardar</button>';
                }
            } else {
                $readonly = " readonly='readonly' ";
            }
            ?>
            <form id="form_evolucion" name="form_evolucion" action="<?php echo @$action_form_evolucion ?>#evolucion<?php echo $_REQUEST['flujo']; ?>" method="post">

                <input type="hidden" id="id_evolucion" name="id_evolucion" value="<?php echo @$id_evolucion ?>" />
                <input type="hidden" id="flujo" name="flujo" value="<?php echo @$_REQUEST['flujo'] ?>" />
                <input type="hidden" id="not_id_formulario" name="not_id_formulario" value="0" />

                <textarea id="evolucion" name="evolucion" cols="110" rows="5"><?php echo @$evolucion; ?></textarea>
                <br>
                <?php echo @$button ?>

            </form>
            <br>
        </div>
    </fieldset>
    <?php
} else {
    $readonly = " readonly='readonly' ";
}
?>
