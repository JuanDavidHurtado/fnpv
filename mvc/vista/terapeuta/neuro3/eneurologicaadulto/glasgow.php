<?php
if (isset($_REQUEST['guardar_glasgow']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_glasgow'] == 'new') {

        $sql = "INSERT INTO glasgow (
`id_glasgow`,
`id_usuario`,
`id_proceso`,
`historia`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`glasgow`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['glasgow'] . "' 
) ";
    } else if ($_REQUEST['id_glasgow'] != '') {

        $sql = "UPDATE glasgow set 
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`glasgow` = '" . $_REQUEST['glasgow'] . "' WHERE `id_glasgow` = '" . $_REQUEST['id_glasgow'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_glasgow = 'new';
$sql = "SELECT * from glasgow WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_glasgow = $row['id_glasgow'];
    $glasgow = $row['glasgow'];
    break;
}
?>
<script>

    $(function() {

        $("#close-glasgow").click(function() {
            $("#open-glasgow").show();
            $(this).hide();
            $("#content-glasgow").hide('slow');
        });

        $("#open-glasgow").click(function() {
            $("#close-glasgow").show();
            $(this).hide();
            $("#content-glasgow").show('slow');
        });

    });

</script>
<fieldset id="glasgow">
    <legend align="left"> <div class="arrow-c" id="close-glasgow"></div> <div class="arrow-o" id="open-glasgow" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Glasgow</font></legend>
    <div id="content-glasgow">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_glasgow" id="guardar_glasgow" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_glasgow" name="form_glasgow" action="<?php echo @$action_form_glasgow ?>#glasgow" method="post">

            <input type="hidden" id="id_glasgow" name="id_glasgow" value="<?php echo @$id_glasgow ?>" />

            <textarea class="input_txt valid" id="glasgow" name="glasgow"><?php echo @$glasgow; ?></textarea>

            <br>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>