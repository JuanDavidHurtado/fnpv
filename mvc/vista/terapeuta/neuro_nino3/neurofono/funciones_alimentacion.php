<?php
if (isset($_REQUEST['guardar_h3_fonoaudiologia_nino1']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h3_fonoaudiologia_nino'] == 'new') {

        $sql = "INSERT INTO h3_fonoaudiologia_nino (
`id_h3_fonoaudiologia_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`f_halimentacion`,
`f_anticiapacion`,
`f_succion`,
`f_deglu`,
`f_talimen`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`f_intrume`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['f_halimentacion'] . "' ,
'" . $_REQUEST['f_anticiapacion'] . "' ,
'" . $_REQUEST['f_succion'] . "' ,
'" . $_REQUEST['f_deglu'] . "' ,
'" . $_REQUEST['f_talimen'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['f_intrume'] . "'
) ";
    } else if ($_REQUEST['id_h3_fonoaudiologia_nino'] != '') {

        $sql = "UPDATE h3_fonoaudiologia_nino set
`id_usuario` = '" . $_REQUEST['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`f_halimentacion` = '" . $_REQUEST['f_halimentacion'] . "' ,
`f_anticiapacion` = '" . $_REQUEST['f_anticiapacion'] . "' ,
`f_succion` = '" . $_REQUEST['f_succion'] . "' ,
`f_deglu` = '" . $_REQUEST['f_deglu'] . "' ,
`f_talimen` = '" . $_REQUEST['f_talimen'] . "' ,
`f_intrume` = '" . $_REQUEST['f_intrume'] . "'  WHERE `id_h3_fonoaudiologia_nino` = '" . $_REQUEST['id_h3_fonoaudiologia_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h3_fonoaudiologia_nino = 'new';
$sql = "SELECT * from h3_fonoaudiologia_nino WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h3_fonoaudiologia_nino = $row['id_h3_fonoaudiologia_nino'];

    $f_halimentacion = $row['f_halimentacion'];
    $f_anticiapacion = $row['f_anticiapacion'];
    $f_succion = $row['f_succion'];
    $f_deglu = $row['f_deglu'];
    $f_talimen = $row['f_talimen'];
    $f_intrume = $row['f_intrume'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h3_fonoaudiologia_nino1").click(function() {
            $("#open-h3_fonoaudiologia_nino1").show();
            $(this).hide();
            $("#content-h3_fonoaudiologia_nino1").hide('slow');
        });

        $("#open-h3_fonoaudiologia_nino1").click(function() {
            $("#close-h3_fonoaudiologia_nino1").show();
            $(this).hide();
            $("#content-h3_fonoaudiologia_nino1").show('slow');
        });

    });

</script>
<fieldset id="h3_fonoaudiologia_nino1">
    <legend align="left"> <div class="arrow-c" id="close-h3_fonoaudiologia_nino1"></div> <div class="arrow-o" id="open-h3_fonoaudiologia_nino1" ></div> <font>Valoracion fonoaudiologia neurodesarrollo - Funciones alimentacion</font></legend>
    <div id="content-h3_fonoaudiologia_nino1">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h3_fonoaudiologia_nino1" id="guardar_h3_fonoaudiologia_nino1" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h3_fonoaudiologia_nino1" name="form_h3_fonoaudiologia_nino1" action="<?php echo @$action_form_h3_fonoaudiologia_nino1 ?>#h3_fonoaudiologia_nino1" method="post">

            <input type="hidden" id="id_h3_fonoaudiologia_nino" name="id_h3_fonoaudiologia_nino" value="<?php echo @$id_h3_fonoaudiologia_nino ?>" />
            
            <p><strong>Historia de la alimentaci??n:</strong><strong>
                    <input type="text" class="input_txt valid" id="f_halimentacion" name="f_halimentacion" value="<?php echo @$f_halimentacion; ?>" />
                </strong><br />
            </p>
            <p><strong>Anticipaci??n:</strong><strong>
                    <input type="text" class="input_txt valid" id="f_anticiapacion" name="f_anticiapacion" value="<?php echo @$f_anticiapacion; ?>" />
                </strong><br />
            </p>
            <p><strong>Succi??n: </strong><strong>
                    <input type="text" class="input_txt valid" id="f_succion" name="f_succion" value="<?php echo @$f_succion; ?>" />
                </strong><br />
            </p>
            <p><strong>Degluci??n:</strong><strong>
                    <input type="text" class="input_txt valid" id="f_deglu" name="f_deglu" value="<?php echo @$f_deglu; ?>" />
                </strong><br />
            </p>
            <p><strong>Tipo de  alimentaci??n:
                    <input type="text" class="input_txt valid" id="f_talimen" name="f_talimen" value="<?php echo @$f_talimen; ?>" />
                </strong><br />
            </p>
            <p><strong>Instrumentos  de alimentaci??n:</strong><strong>
                    <input type="text" class="input_txt valid" id="f_intrume" name="f_intrume" value="<?php echo @$f_intrume; ?>" />
                </strong><br />
            </p>
            <br>


            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>