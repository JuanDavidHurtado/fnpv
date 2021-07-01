<?php
if (isset($_REQUEST['guardar_h3_fonoaudiologia_nino2']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h3_fonoaudiologia_nino'] == 'new') {

        $sql = "INSERT INTO h3_fonoaudiologia_nino (
`id_h3_fonoaudiologia_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`f_produc`,
`f_comun`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`f_agude`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['f_produc'] . "' ,
'" . $_REQUEST['f_comun'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['f_agude'] . "' 
) ";
    } else if ($_REQUEST['id_h3_fonoaudiologia_nino'] != '') {

        $sql = "UPDATE h3_fonoaudiologia_nino set
`id_usuario` = '" . $_REQUEST['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`f_produc` = '" . $_REQUEST['f_produc'] . "' ,
`f_comun` = '" . $_REQUEST['f_comun'] . "' ,
`f_agude` = '" . $_REQUEST['f_agude'] . "'  WHERE `id_h3_fonoaudiologia_nino` = '" . $_REQUEST['id_h3_fonoaudiologia_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h3_fonoaudiologia_nino = 'new';
$sql = "SELECT * from h3_fonoaudiologia_nino WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h3_fonoaudiologia_nino = $row['id_h3_fonoaudiologia_nino'];

    $f_produc = $row['f_produc'];
    $f_comun = $row['f_comun'];
    $f_agude = $row['f_agude'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h3_fonoaudiologia_nino2").click(function() {
            $("#open-h3_fonoaudiologia_nino2").show();
            $(this).hide();
            $("#content-h3_fonoaudiologia_nino2").hide('slow');
        });

        $("#open-h3_fonoaudiologia_nino2").click(function() {
            $("#close-h3_fonoaudiologia_nino2").show();
            $(this).hide();
            $("#content-h3_fonoaudiologia_nino2").show('slow');
        });

    });

</script>
<fieldset id="h3_fonoaudiologia_nino2">
    <legend align="left"> <div class="arrow-c" id="close-h3_fonoaudiologia_nino2"></div> <div class="arrow-o" id="open-h3_fonoaudiologia_nino2" ></div> <font>Valoracion fonoaudiologia neurodesarrollo - Funcion comunicativa</font></legend>
    <div id="content-h3_fonoaudiologia_nino2">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h3_fonoaudiologia_nino2" id="guardar_h3_fonoaudiologia_nino2" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h3_fonoaudiologia_nino2" name="form_h3_fonoaudiologia_nino2" action="<?php echo @$action_form_h3_fonoaudiologia_nino2 ?>#h3_fonoaudiologia_nino2" method="post">

            <input type="hidden" id="id_h3_fonoaudiologia_nino" name="id_h3_fonoaudiologia_nino" value="<?php echo @$id_h3_fonoaudiologia_nino ?>" />

            <p><strong>Producción de palabras:</strong><strong>
                    <input type="text" class="input_txt valid" id="f_comun" name="f_comun" value="<?php echo @$f_comun; ?>" />
                </strong><br />
            </p>
            <p><strong>Comunicación no verbal:</strong><strong>
                    <input type="text" class="input_txt valid" id="f_produc" name="f_produc" value="<?php echo @$f_produc; ?>" />
                </strong><br />
                <br />
                <strong>Agudeza auditiva:</strong><strong>
                    <input type="text" class="input_txt valid" id="f_agude" name="f_agude" value="<?php echo @$f_agude; ?>" />
                </strong><br />
            </p>


            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>