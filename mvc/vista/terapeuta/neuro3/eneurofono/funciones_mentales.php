<?php
if (isset($_REQUEST['guardar_h3_fonoaudiologia3']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h3_fonoaudiologia'] == 'new') {

        $sql = "INSERT INTO h3_fonoaudiologia (
`id_h3_fonoaudiologia`,
`id_usuario`,
`historia`,
`id_proceso`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`f_funcion_mentales`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "',
'" . $_REQUEST['id_cita'] . "',
'" . $_REQUEST['id_vinicial'] . "',
'" . $_REQUEST['id_revaloracion'] . "',
'" . $_REQUEST['f_funcion_mentales'] . "'
) ";
    } else if ($_REQUEST['id_h3_fonoaudiologia'] != '') {

        $sql = "UPDATE h3_fonoaudiologia set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`f_funcion_mentales` = '" . $_REQUEST['f_funcion_mentales'] . "' WHERE `id_h3_fonoaudiologia` = '" . $_REQUEST['id_h3_fonoaudiologia'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h3_fonoaudiologia = 'new';
$sql = "SELECT * from h3_fonoaudiologia WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h3_fonoaudiologia = $row['id_h3_fonoaudiologia'];

    $f_funcion_mentales = $row['f_funcion_mentales'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h3_fonoaudiologia3").click(function() {
            $("#open-h3_fonoaudiologia3").show();
            $(this).hide();
            $("#content-h3_fonoaudiologia3").hide('slow');
        });

        $("#open-h3_fonoaudiologia3").click(function() {
            $("#close-h3_fonoaudiologia3").show();
            $(this).hide();
            $("#content-h3_fonoaudiologia3").show('slow');
        });

    });

</script>
<fieldset id="h3_fonoaudiologia3">
    <legend align="left"> <div class="arrow-c" id="close-h3_fonoaudiologia3"></div> <div class="arrow-o" id="open-h3_fonoaudiologia3" ></div> <font>Valoracion fonoaudiologia neurorehabilitacion - Funciones mentales</font></legend>
    <div id="content-h3_fonoaudiologia3">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h3_fonoaudiologia3" id="guardar_h3_fonoaudiologia3" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h3_fonoaudiologia3" name="form_h3_fonoaudiologia3" action="<?php echo @$action_form_h3_fonoaudiologia3 ?>#h3_fonoaudiologia3" method="post">

            <input type="hidden" id="id_h3_fonoaudiologia" name="id_h3_fonoaudiologia" value="<?php echo @$id_h3_fonoaudiologia ?>" />

            <p>
                <input type="text" class="input_txt valid" id="f_funcion_mentales" name="f_funcion_mentales" value="<?php echo @$f_funcion_mentales; ?>" />
            </p>


            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>