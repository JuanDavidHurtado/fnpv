<?php
if (isset($_REQUEST['guardar_h3_fonoaudiologia']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h3_fonoaudiologia'] == 'new') {

        $sql = "INSERT INTO h3_fonoaudiologia (
`id_h3_fonoaudiologia`,
`id_usuario`,
`historia`,
`id_proceso`,
`f_t_lenguaje`,
`ff_fisica`,
`fto_ocupacional`,
`ft_otros`,
`fant_relevantes`,
`fh_patologia`,
`f_alaobserva`,
`fpatron`,
`fsimetria`,
`fcuello`,
`freja`,
`f_cavidad`,
`f_refleo`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`f_ofa`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "',
'" . $_REQUEST['f_t_lenguaje'] . "' ,
'" . $_REQUEST['ff_fisica'] . "' ,
'" . $_REQUEST['fto_ocupacional'] . "' ,
'" . $_REQUEST['ft_otros'] . "' ,
'" . $_REQUEST['fant_relevantes'] . "' ,
'" . $_REQUEST['fh_patologia'] . "' ,
'" . $_REQUEST['f_alaobserva'] . "' ,
'" . $_REQUEST['fpatron'] . "' ,
'" . $_REQUEST['fsimetria'] . "' ,
'" . $_REQUEST['fcuello'] . "' ,
'" . $_REQUEST['freja'] . "' ,
'" . $_REQUEST['f_cavidad'] . "' ,
'" . $_REQUEST['f_refleo'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['f_ofa'] . "' 
) ";
    } else if ($_REQUEST['id_h3_fonoaudiologia'] != '') {

       $sql = "UPDATE h3_fonoaudiologia set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`f_t_lenguaje` = '" . $_REQUEST['f_t_lenguaje'] . "' ,
`ff_fisica` = '" . $_REQUEST['ff_fisica'] . "' ,
`fto_ocupacional` = '" . $_REQUEST['fto_ocupacional'] . "' ,
`ft_otros` = '" . $_REQUEST['ft_otros'] . "' ,
`fant_relevantes` = '" . $_REQUEST['fant_relevantes'] . "' ,
`fh_patologia` = '" . $_REQUEST['fh_patologia'] . "' ,
`f_alaobserva` = '" . $_REQUEST['f_alaobserva'] . "' ,
`fpatron` = '" . $_REQUEST['fpatron'] . "' ,
`fsimetria` = '" . $_REQUEST['fsimetria'] . "' ,
`fcuello` = '" . $_REQUEST['fcuello'] . "' ,
`freja` = '" . $_REQUEST['freja'] . "' ,
`f_cavidad` = '" . $_REQUEST['f_cavidad'] . "' ,
`f_refleo` = '" . $_REQUEST['f_refleo'] . "' ,
`f_ofa` = '" . $_REQUEST['f_ofa'] . "'  WHERE `id_h3_fonoaudiologia` = '" . $_REQUEST['id_h3_fonoaudiologia'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h3_fonoaudiologia = 'new';
$sql = "SELECT * from h3_fonoaudiologia WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h3_fonoaudiologia = $row['id_h3_fonoaudiologia'];
    
    $f_t_lenguaje = $row['f_t_lenguaje'];
    $ff_fisica = $row['ff_fisica'];
    $fto_ocupacional = $row['fto_ocupacional'];
    $ft_otros = $row['ft_otros'];
    $fant_relevantes = $row['fant_relevantes'];
    $fh_patologia = $row['fh_patologia'];
    $f_alaobserva = $row['f_alaobserva'];
    $fpatron = $row['fpatron'];
    $fsimetria = $row['fsimetria'];
    $fcuello = $row['fcuello'];
    $freja = $row['freja'];
    $f_cavidad = $row['f_cavidad'];
    $f_refleo = $row['f_refleo'];
    $f_ofa = $row['f_ofa'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h3_fonoaudiologia").click(function() {
            $("#open-h3_fonoaudiologia").show();
            $(this).hide();
            $("#content-h3_fonoaudiologia").hide('slow');
        });

        $("#open-h3_fonoaudiologia").click(function() {
            $("#close-h3_fonoaudiologia").show();
            $(this).hide();
            $("#content-h3_fonoaudiologia").show('slow');
        });

    });

</script>
<fieldset id="h3_fonoaudiologia">
    <legend align="left"> <div class="arrow-c" id="close-h3_fonoaudiologia"></div> <div class="arrow-o" id="open-h3_fonoaudiologia" ></div> <font>Valoracion fonoaudiologia neurorehabilitacion - Antecedentes</font></legend>
    <div id="content-h3_fonoaudiologia">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h3_fonoaudiologia" id="guardar_h3_fonoaudiologia" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h3_fonoaudiologia" name="form_h3_fonoaudiologia" action="<?php echo @$action_form_h3_fonoaudiologia ?>#h3_fonoaudiologia" method="post">

            <input type="hidden" id="id_h3_fonoaudiologia" name="id_h3_fonoaudiologia" value="<?php echo @$id_h3_fonoaudiologia ?>" />

            <strong>ANTECEDENTES TERAP??UTICOS</strong><br />
            TERAPIA DE LENGUAJE:

            <input type="text" class="input_txt valid" id="f_t_lenguaje" name="f_t_lenguaje" value="<?php echo @$f_t_lenguaje; ?>" />
            <br />
            TERAPIA F??SICA:
            <input type="text" class="input_txt valid" id="ff_fisica" name="ff_fisica" value="<?php echo @$ff_fisica; ?>" />
            <br />
            TERAPIA OCUPACIONAL:
            <input type="text" class="input_txt valid" id="fto_ocupacional" name="fto_ocupacional" value="<?php echo @$fto_ocupacional; ?>" />
            <br />
            OTROS:
            <input type="text" class="input_txt valid" id="ft_otros" name="ft_otros" value="<?php echo @$ft_otros; ?>" />
            </p>
            <p><strong>ANTECEDENTES RELEVANTES</strong><strong>
                    <input type="text" class="input_txt valid" id="fant_relevantes" name="fant_relevantes" value="<?php echo @$fant_relevantes; ?>" />
                </strong><br />
            </p>
            <p><strong>HISTORIA DE LA PATOLOG??A ACTUAL</strong><strong>
                    <input type="text" class="input_txt valid" id="fh_patologia" name="fh_patologia" value="<?php echo @$fh_patologia; ?>" />
                </strong><br />
            </p>
            <p><strong>A LA OBSERVACI??N</strong><strong>
                    <input type="text" class="input_txt valid" id="f_alaobserva" name="f_alaobserva" value="<?php echo @$f_alaobserva; ?>" />
                </strong><br />
            </p>
            <p><strong>PATR??N  RESPIRATORIO</strong><strong>
                    <input type="text" class="input_txt valid" id="fpatron" name="fpatron" value="<?php echo @$fpatron; ?>" />
                </strong><br />
            </p>
            <p><strong>SIMETR??A  Y CARACTER??STICAS FACIALES
                    <input type="text" class="input_txt valid" id="fsimetria" name="fsimetria" value="<?php echo @$fsimetria; ?>" />
                </strong><br />
            </p>
            <p><strong>CUELLO</strong><strong>
                    <input type="text" class="input_txt valid" id="fcuello" name="fcuello" value="<?php echo @$fcuello; ?>" />
                </strong><br />
            </p>
            <p><strong>REJA  COSTAL</strong><strong>
                    <input type="text" class="input_txt valid" id="freja" name="freja" value="<?php echo @$freja; ?>" />
                </strong><br />
            </p>
            <p><strong>CAVIDAD  ORAL</strong><strong>
                    <input type="text" class="input_txt valid" id="f_cavidad" name="f_cavidad" value="<?php echo @$f_cavidad; ?>" />
                </strong><br />
                <br />
                <strong>Reflejos orales</strong><strong>
                    <input type="text" class="input_txt valid" id="f_refleo" name="f_refleo" value="<?php echo @$f_refleo; ?>" />
                </strong><br />
                <br />
                <strong>Musculatura OFA</strong><strong>
                    <input type="text" class="input_txt valid" id="f_ofa" name="f_ofa" value="<?php echo @$f_ofa; ?>" />
                </strong><br />
            </p>
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>