<?php
if (isset($_REQUEST['guardar_nervio_optico_trigemino']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_nervio_optico'] == 'new') {

        $sql = "INSERT INTO nervio_optico_trigemino (
`id_nervio_optico`,
`op_normal`,
`op_presente`,
`op_positivo`,
`op_negativo`,
`op_centellante`,
`op_ausente`,
`op_hermianopsia`,
`op_cuadratanopsia`,
`op_hermianopsia_h`,
`op_anopsia`,
`vc_normal`,
`vc_discromatosia`,
`vc_acromatosia`,
`id_usuario`,
`historia`,
`id_proceso`,
`OI`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`OD`
) VALUES (
NULL,
'" . $_REQUEST['op_normal'] . "' ,
'" . $_REQUEST['op_presente'] . "' ,
'" . $_REQUEST['op_positivo'] . "' ,
'" . $_REQUEST['op_negativo'] . "' ,
'" . $_REQUEST['op_centellante'] . "' ,
'" . $_REQUEST['op_ausente'] . "' ,
'" . $_REQUEST['op_hermianopsia'] . "' ,
'" . $_REQUEST['op_cuadratanopsia'] . "' ,
'" . $_REQUEST['op_hermianopsia_h'] . "' ,
'" . $_REQUEST['op_anopsia'] . "' ,
'" . $_REQUEST['vc_normal'] . "' ,
'" . $_REQUEST['vc_discromatosia'] . "' ,
'" . $_REQUEST['vc_acromatosia'] . "' ,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "',
'" . $_REQUEST['OI'] . "',
'" . $_REQUEST['id_cita'] . "',
'" . $_REQUEST['id_vinicial'] . "',
'" . $_REQUEST['id_revaloracion'] . "',
'" . $_REQUEST['OD'] . "'
) ";
    } else if ($_REQUEST['id_nervio_optico'] != '') {

        $sql = "UPDATE nervio_optico_trigemino set
`op_normal` = '" . $_REQUEST['op_normal'] . "' ,
`op_presente` = '" . $_REQUEST['op_presente'] . "' ,
`op_positivo` = '" . $_REQUEST['op_positivo'] . "' ,
`op_negativo` = '" . $_REQUEST['op_negativo'] . "' ,
`op_centellante` = '" . $_REQUEST['op_centellante'] . "' ,
`op_ausente` = '" . $_REQUEST['op_ausente'] . "' ,
`op_hermianopsia` = '" . $_REQUEST['op_hermianopsia'] . "' ,
`op_cuadratanopsia` = '" . $_REQUEST['op_cuadratanopsia'] . "' ,
`op_hermianopsia_h` = '" . $_REQUEST['op_hermianopsia_h'] . "' ,
`op_anopsia` = '" . $_REQUEST['op_anopsia'] . "' ,
`vc_normal` = '" . $_REQUEST['vc_normal'] . "' ,
`vc_discromatosia` = '" . $_REQUEST['vc_discromatosia'] . "' ,
`vc_acromatosia` = '" . $_REQUEST['vc_acromatosia'] . "' ,
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`OI` = '" . $_REQUEST['OI'] . "' ,
`OD` = '" . $_REQUEST['OD'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' 
 WHERE `id_nervio_optico` = '" . $_REQUEST['id_nervio_optico'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_nervio_optico = 'new';
$sql = "SELECT * from nervio_optico_trigemino WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_nervio_optico = $row['id_nervio_optico'];
    $op_normal = $row['op_normal'];
    $op_presente = $row['op_presente'];
    $op_positivo = $row['op_positivo'];
    $op_negativo = $row['op_negativo'];
    $op_centellante = $row['op_centellante'];
    $op_ausente = $row['op_ausente'];
    $op_hermianopsia = $row['op_hermianopsia'];
    $op_cuadratanopsia = $row['op_cuadratanopsia'];
    $op_hermianopsia_h = $row['op_hermianopsia_h'];
    $op_anopsia = $row['op_anopsia'];
    $vc_normal = $row['vc_normal'];
    $vc_discromatosia = $row['vc_discromatosia'];
    $vc_acromatosia = $row['vc_acromatosia'];
    $OD = $row['OD'];
    $OI = $row['OI'];

    break;
}
?>
<style>
    .div_ojo {
        position: relative;
        width: 100px;
        height: 100px;
        border-radius: 40px;
        border-collapse: collapse;
        border-radius: 60px;
        border: 1px solid #000;
    }

    .area_ojo1, .area_ojo2 {
        position: relative;
        width: 48px;
        height: 48px;
        float: left;
        border: 1px solid #000000;
        cursor: pointer;
    }

    .area_ojo1.select {
        background-color: #004276;
    }

    .area_ojo2.select {
        background-color: #3f7506;
    }

    .is {
        border-top-left-radius: 60px;
    }
    .ds {
        border-top-right-radius: 60px;
    }
    .ii {
        border-bottom-left-radius: 60px;
    }
    .di {
        border-bottom-right-radius: 60px;
    }

</style>
<script>

    $(function() {

        $("#close-nervio_optico_trigemino").click(function() {
            $("#open-nervio_optico_trigemino").show();
            $(this).hide();
            $("#content-nervio_optico_trigemino").hide('slow');
        });

        $("#open-nervio_optico_trigemino").click(function() {
            $("#close-nervio_optico_trigemino").show();
            $(this).hide();
            $("#content-nervio_optico_trigemino").show('slow');
        });

        $('.area_ojo1').click(function() {
            $(".area_ojo1").each(function(index) {
                if ($(this).hasClass('select')) {
                    $(this).removeClass('select')
                }
            });
            $('#OI').val($(this).attr('id'));
            $(this).addClass('select');
        });

        $('.area_ojo2').click(function() {
            $(".area_ojo2").each(function(index) {
                if ($(this).hasClass('select')) {
                    $(this).removeClass('select')
                }
            });
            $('#OD').val($(this).attr('id'));
            $(this).addClass('select');
        });

        $('#<?php echo @$OI ?>').addClass('select');
        $('#<?php echo @$OD ?>').addClass('select');

    });

</script>
<fieldset id="nervio_optico_trigemino">
    <legend align="left"> <div class="arrow-c" id="close-nervio_optico_trigemino"></div> <div class="arrow-o" id="open-nervio_optico_trigemino" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Nervio optico</font></legend>
    <div id="content-nervio_optico_trigemino">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_nervio_optico_trigemino" id="guardar_nervio_optico_trigemino" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_nervio_optico_trigemino" name="form_nervio_optico_trigemino" action="<?php echo @$action_form_nervio_optico_trigemino ?>#nervio_optico_trigemino" method="post">

            <input type="hidden" id="id_nervio_optico" name="id_nervio_optico" value="<?php echo @$id_nervio_optico ?>" />

            <ul>
                <li><h2>Campos Visuales:</h2></li>
            </ul>
            <p><strong>Normales:</strong>
                <input type="text" class="input_txt valid" id="op_normal" name="op_normal" value="<?php echo @$op_normal; ?>" />
            </p>
            Escotomas:<br>
            <strong>Presentes:</strong> 
            <input type="text" class="input_txt valid" id="op_presente" name="op_presente" value="<?php echo @$op_presente; ?>" />
            <strong>Positivo:</strong>
            <input type="text" class="input_txt valid" id="op_positivo" name="op_positivo" value="<?php echo @$op_positivo; ?>" />
            <strong>Negativo:</strong>
            <input type="text" class="input_txt valid" id="op_negativo" name="op_negativo" value="<?php echo @$op_negativo; ?>" />
            <strong>Centellante: </strong>
            <input type="text" class="input_txt valid" id="op_centellante" name="op_centellante" value="<?php echo @$op_centellante; ?>" />
            <strong>Ausentes:</strong>
            <input type="text" class="input_txt valid" id="op_ausente" name="op_ausente" value="<?php echo @$op_ausente; ?>" />
            <strong>Hemianopsia: </strong>
            <input type="text" class="input_txt valid" id="op_hermianopsia" name="op_hermianopsia" value="<?php echo @$op_hermianopsia; ?>" />                                     
            <strong>Cuadrantanopsia</strong>
            <input type="text" class="input_txt valid" id="op_cuadratanopsia" name="op_cuadratanopsia" value="<?php echo @$op_cuadratanopsia; ?>" />
            <strong>Hemianopsia horizontal</strong>
            <input type="text" class="input_txt valid" id="op_hermianopsia_h" name="op_hermianopsia_h" value="<?php echo @$op_hermianopsia_h; ?>" />
            <br />
            <strong>Anopsia:</strong>
            <input type="text" class="input_txt valid" id="op_anopsia" name="op_anopsia" value="<?php echo @$op_anopsia; ?>" />
            </p>
            <br>

            <table border='0'>
                <tr>
                    <td>
                        <input type="hidden" id="OI" name="OI" value="<?php echo @$OI ?>" />
                        <strong>O.I.</strong>
                        <div class="div_ojo">
                            <div class="area_ojo1 is" id='iis' ></div>
                            <div class="area_ojo1 ds" id='ids'></div>
                            <div class="area_ojo1 ii" id='iii'></div>
                            <div class="area_ojo1 di" id='iid'></div>
                        </div>
                    </td>
                    <td>
                        <input type="hidden" id="OD" name="OD" value="<?php echo @$OD ?>" />
                        <strong>O.D.</strong>
                        <div class="div_ojo">
                            <div class="area_ojo2 is" id='dis'></div>
                            <div class="area_ojo2 ds" id='dds'></div>
                            <div class="area_ojo2 ii" id='dii'></div>
                            <div class="area_ojo2 di" id='ddi'></div>
                        </div>
                    </td>
                </tr>
            </table>
            <ul>
                <li><h2>Visión de colores:</h2></li>
            </ul>
            <p>Normal: <strong>
                    <input type="text" class="input_txt valid" id="vc_normal" name="vc_normal" value="<?php echo @$vc_normal; ?>" />
                </strong>Discromatopsia: <strong>
                    <input type="text" class="input_txt valid" id="vc_discromatosia" name="vc_discromatosia" value="<?php echo @$vc_discromatosia; ?>" />
                </strong>Acromatopsia: <strong>
                    <input type="text" class="input_txt valid" id="vc_acromatosia" name="vc_acromatosia" value="<?php echo @$vc_acromatosia; ?>" />
                </strong></p>
            <br>



            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>