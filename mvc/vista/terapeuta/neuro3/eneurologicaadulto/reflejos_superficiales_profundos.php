<?php
if (isset($_REQUEST['guardar_ner_neuro_pato_reflejos1']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_ner_neuro_pato_reflejos'] == 'new') {

        $sql = "INSERT INTO ner_neuro_pato_reflejos (
`id_ner_neuro_pato_reflejos`,
`id_usuario`,
`historia`,
`id_proceso`,
`refp_rotud`,
`refp_rotuizq`,
`refp_aductord`,
`refp_aductorizq`,
`refp_contrad`,
`refp_contraizq`,
`refp_aquild`,
`refp_aquilizq`,
`refp_brand`,
`refp_branizq`,
`refp_flexd`,
`refp_flexizq`,
`refp_bicd`,
`refp_bicizq`,
`refp_tricd`,
`refp_tricizq`,
`refp_olecrad`,
`refp_olecraizq`,
`refp_pectod`,
`refp_pectoizq`,
`refp_mediod`,
`refp_medioizq`,
`refp_nasod`,
`refp_nasoizq`,
`refp_superd`,
`refp_superizq`,
`refp_masad`,
`refp_masaizq`,
`rs_cornieop1`,
`rs_cornieoau1`,
`rs_cornieop2`,
`rs_cornieoau2`,
`rs_nasalp1`,
`rs_nasalau1`,
`rs_nasalp2`,
`rs_nasalau2`,
`rs_faringeop1`,
`rs_faringeoau1`,
`rs_faringeop2`,
`rs_faringeoau2`,
`rs_velop1`,
`rs_veloau1`,
`rs_velop2`,
`rs_veloau2`,
`rs_cutap1`,
`rs_cutaau1`,
`rs_cutap2`,
`rs_cutaau2`,
`rs_glup1`,
`rs_gluau1`,
`rs_glup2`,
`rs_gluau2`,
`rs_anap1`,
`rs_anaau1`,
`rs_anap2`,
`rs_anaau2`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`rs_observ`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['refp_rotud'] . "' ,
'" . $_REQUEST['refp_rotuizq'] . "' ,
'" . $_REQUEST['refp_aductord'] . "' ,
'" . $_REQUEST['refp_aductorizq'] . "' ,
'" . $_REQUEST['refp_contrad'] . "' ,
'" . $_REQUEST['refp_contraizq'] . "' ,
'" . $_REQUEST['refp_aquild'] . "' ,
'" . $_REQUEST['refp_aquilizq'] . "' ,
'" . $_REQUEST['refp_brand'] . "' ,
'" . $_REQUEST['refp_branizq'] . "' ,
'" . $_REQUEST['refp_flexd'] . "' ,
'" . $_REQUEST['refp_flexizq'] . "' ,
'" . $_REQUEST['refp_bicd'] . "' ,
'" . $_REQUEST['refp_bicizq'] . "' ,
'" . $_REQUEST['refp_tricd'] . "' ,
'" . $_REQUEST['refp_tricizq'] . "' ,
'" . $_REQUEST['refp_olecrad'] . "' ,
'" . $_REQUEST['refp_olecraizq'] . "' ,
'" . $_REQUEST['refp_pectod'] . "' ,
'" . $_REQUEST['refp_pectoizq'] . "' ,
'" . $_REQUEST['refp_mediod'] . "' ,
'" . $_REQUEST['refp_medioizq'] . "' ,
'" . $_REQUEST['refp_nasod'] . "' ,
'" . $_REQUEST['refp_nasoizq'] . "' ,
'" . $_REQUEST['refp_superd'] . "' ,
'" . $_REQUEST['refp_superizq'] . "' ,
'" . $_REQUEST['refp_masad'] . "' ,
'" . $_REQUEST['refp_masaizq'] . "' ,
'" . $_REQUEST['rs_cornieop1'] . "' ,
'" . $_REQUEST['rs_cornieoau1'] . "' ,
'" . $_REQUEST['rs_cornieop2'] . "' ,
'" . $_REQUEST['rs_cornieoau2'] . "' ,
'" . $_REQUEST['rs_nasalp1'] . "' ,
'" . $_REQUEST['rs_nasalau1'] . "' ,
'" . $_REQUEST['rs_nasalp2'] . "' ,
'" . $_REQUEST['rs_nasalau2'] . "' ,
'" . $_REQUEST['rs_faringeop1'] . "' ,
'" . $_REQUEST['rs_faringeoau1'] . "' ,
'" . $_REQUEST['rs_faringeop2'] . "' ,
'" . $_REQUEST['rs_faringeoau2'] . "' ,
'" . $_REQUEST['rs_velop1'] . "' ,
'" . $_REQUEST['rs_veloau1'] . "' ,
'" . $_REQUEST['rs_velop2'] . "' ,
'" . $_REQUEST['rs_veloau2'] . "' ,
'" . $_REQUEST['rs_cutap1'] . "' ,
'" . $_REQUEST['rs_cutaau1'] . "' ,
'" . $_REQUEST['rs_cutap2'] . "' ,
'" . $_REQUEST['rs_cutaau2'] . "' ,
'" . $_REQUEST['rs_glup1'] . "' ,
'" . $_REQUEST['rs_gluau1'] . "' ,
'" . $_REQUEST['rs_glup2'] . "' ,
'" . $_REQUEST['rs_gluau2'] . "' ,
'" . $_REQUEST['rs_anap1'] . "' ,
'" . $_REQUEST['rs_anaau1'] . "' ,
'" . $_REQUEST['rs_anap2'] . "' ,
'" . $_REQUEST['rs_anaau2'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['rs_observ'] . "'
) ";
    } else if ($_REQUEST['id_ner_neuro_pato_reflejos'] != '') {

       $sql = "UPDATE ner_neuro_pato_reflejos set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`refp_rotud` = '" . $_REQUEST['refp_rotud'] . "' ,
`refp_rotuizq` = '" . $_REQUEST['refp_rotuizq'] . "' ,
`refp_aductord` = '" . $_REQUEST['refp_aductord'] . "' ,
`refp_aductorizq` = '" . $_REQUEST['refp_aductorizq'] . "' ,
`refp_contrad` = '" . $_REQUEST['refp_contrad'] . "' ,
`refp_contraizq` = '" . $_REQUEST['refp_contraizq'] . "' ,
`refp_aquild` = '" . $_REQUEST['refp_aquild'] . "' ,
`refp_aquilizq` = '" . $_REQUEST['refp_aquilizq'] . "' ,
`refp_brand` = '" . $_REQUEST['refp_brand'] . "' ,
`refp_branizq` = '" . $_REQUEST['refp_branizq'] . "' ,
`refp_flexd` = '" . $_REQUEST['refp_flexd'] . "' ,
`refp_flexizq` = '" . $_REQUEST['refp_flexizq'] . "' ,
`refp_bicd` = '" . $_REQUEST['refp_bicd'] . "' ,
`refp_bicizq` = '" . $_REQUEST['refp_bicizq'] . "' ,
`refp_tricd` = '" . $_REQUEST['refp_tricd'] . "' ,
`refp_tricizq` = '" . $_REQUEST['refp_tricizq'] . "' ,
`refp_olecrad` = '" . $_REQUEST['refp_olecrad'] . "' ,
`refp_olecraizq` = '" . $_REQUEST['refp_olecraizq'] . "' ,
`refp_pectod` = '" . $_REQUEST['refp_pectod'] . "' ,
`refp_pectoizq` = '" . $_REQUEST['refp_pectoizq'] . "' ,
`refp_mediod` = '" . $_REQUEST['refp_mediod'] . "' ,
`refp_medioizq` = '" . $_REQUEST['refp_medioizq'] . "' ,
`refp_nasod` = '" . $_REQUEST['refp_nasod'] . "' ,
`refp_nasoizq` = '" . $_REQUEST['refp_nasoizq'] . "' ,
`refp_superd` = '" . $_REQUEST['refp_superd'] . "' ,
`refp_superizq` = '" . $_REQUEST['refp_superizq'] . "' ,
`refp_masad` = '" . $_REQUEST['refp_masad'] . "' ,
`refp_masaizq` = '" . $_REQUEST['refp_masaizq'] . "' ,
`rs_cornieop1` = '" . $_REQUEST['rs_cornieop1'] . "' ,
`rs_cornieoau1` = '" . $_REQUEST['rs_cornieoau1'] . "' ,
`rs_cornieop2` = '" . $_REQUEST['rs_cornieop2'] . "' ,
`rs_cornieoau2` = '" . $_REQUEST['rs_cornieoau2'] . "' ,
`rs_nasalp1` = '" . $_REQUEST['rs_nasalp1'] . "' ,
`rs_nasalau1` = '" . $_REQUEST['rs_nasalau1'] . "' ,
`rs_nasalp2` = '" . $_REQUEST['rs_nasalp2'] . "' ,
`rs_nasalau2` = '" . $_REQUEST['rs_nasalau2'] . "' ,
`rs_faringeop1` = '" . $_REQUEST['rs_faringeop1'] . "' ,
`rs_faringeoau1` = '" . $_REQUEST['rs_faringeoau1'] . "' ,
`rs_faringeop2` = '" . $_REQUEST['rs_faringeop2'] . "' ,
`rs_faringeoau2` = '" . $_REQUEST['rs_faringeoau2'] . "' ,
`rs_velop1` = '" . $_REQUEST['rs_velop1'] . "' ,
`rs_veloau1` = '" . $_REQUEST['rs_veloau1'] . "' ,
`rs_velop2` = '" . $_REQUEST['rs_velop2'] . "' ,
`rs_veloau2` = '" . $_REQUEST['rs_veloau2'] . "' ,
`rs_cutap1` = '" . $_REQUEST['rs_cutap1'] . "' ,
`rs_cutaau1` = '" . $_REQUEST['rs_cutaau1'] . "' ,
`rs_cutap2` = '" . $_REQUEST['rs_cutap2'] . "' ,
`rs_cutaau2` = '" . $_REQUEST['rs_cutaau2'] . "' ,
`rs_glup1` = '" . $_REQUEST['rs_glup1'] . "' ,
`rs_gluau1` = '" . $_REQUEST['rs_gluau1'] . "' ,
`rs_glup2` = '" . $_REQUEST['rs_glup2'] . "' ,
`rs_gluau2` = '" . $_REQUEST['rs_gluau2'] . "' ,
`rs_anap1` = '" . $_REQUEST['rs_anap1'] . "' ,
`rs_anaau1` = '" . $_REQUEST['rs_anaau1'] . "' ,
`rs_anap2` = '" . $_REQUEST['rs_anap2'] . "' ,
`rs_anaau2` = '" . $_REQUEST['rs_anaau2'] . "' ,
`rs_observ` = '" . $_REQUEST['rs_observ'] . "' WHERE `id_ner_neuro_pato_reflejos` = '" . $_REQUEST['id_ner_neuro_pato_reflejos'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_ner_neuro_pato_reflejos1 = 'new';
$sql = "SELECT * from ner_neuro_pato_reflejos WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_ner_neuro_pato_reflejos1 = $row['id_ner_neuro_pato_reflejos'];
    
    $refp_rotud = $row['refp_rotud'];
    $refp_rotuizq = $row['refp_rotuizq'];
    $refp_aductord = $row['refp_aductord'];
    $refp_aductorizq = $row['refp_aductorizq'];
    $refp_contrad = $row['refp_contrad'];
    $refp_contraizq = $row['refp_contraizq'];
    $refp_aquild = $row['refp_aquild'];
    $refp_aquilizq = $row['refp_aquilizq'];
    $refp_brand = $row['refp_brand'];
    $refp_branizq = $row['refp_branizq'];
    $refp_flexd = $row['refp_flexd'];
    $refp_flexizq = $row['refp_flexizq'];
    $refp_bicd = $row['refp_bicd'];
    $refp_bicizq = $row['refp_bicizq'];
    $refp_tricd = $row['refp_tricd'];
    $refp_tricizq = $row['refp_tricizq'];
    $refp_olecrad = $row['refp_olecrad'];
    $refp_olecraizq = $row['refp_olecraizq'];
    $refp_pectod = $row['refp_pectod'];
    $refp_pectoizq = $row['refp_pectoizq'];
    $refp_mediod = $row['refp_mediod'];
    $refp_medioizq = $row['refp_medioizq'];
    $refp_nasod = $row['refp_nasod'];
    $refp_nasoizq = $row['refp_nasoizq'];
    $refp_superd = $row['refp_superd'];
    $refp_superizq = $row['refp_superizq'];
    $refp_masad = $row['refp_masad'];
    $refp_masaizq = $row['refp_masaizq'];
    $rs_cornieop1 = $row['rs_cornieop1'];
    $rs_cornieoau1 = $row['rs_cornieoau1'];
    $rs_cornieop2 = $row['rs_cornieop2'];
    $rs_cornieoau2 = $row['rs_cornieoau2'];
    $rs_nasalp1 = $row['rs_nasalp1'];
    $rs_nasalau1 = $row['rs_nasalau1'];
    $rs_nasalp2 = $row['rs_nasalp2'];
    $rs_nasalau2 = $row['rs_nasalau2'];
    $rs_faringeop1 = $row['rs_faringeop1'];
    $rs_faringeoau1 = $row['rs_faringeoau1'];
    $rs_faringeop2 = $row['rs_faringeop2'];
    $rs_faringeoau2 = $row['rs_faringeoau2'];
    $rs_velop1 = $row['rs_velop1'];
    $rs_veloau1 = $row['rs_veloau1'];
    $rs_velop2 = $row['rs_velop2'];
    $rs_veloau2 = $row['rs_veloau2'];
    $rs_cutap1 = $row['rs_cutap1'];
    $rs_cutaau1 = $row['rs_cutaau1'];
    $rs_cutap2 = $row['rs_cutap2'];
    $rs_cutaau2 = $row['rs_cutaau2'];
    $rs_glup1 = $row['rs_glup1'];
    $rs_gluau1 = $row['rs_gluau1'];
    $rs_glup2 = $row['rs_glup2'];
    $rs_gluau2 = $row['rs_gluau2'];
    $rs_anap1 = $row['rs_anap1'];
    $rs_anaau1 = $row['rs_anaau1'];
    $rs_anap2 = $row['rs_anap2'];
    $rs_anaau2 = $row['rs_anaau2'];
    $rs_observ = $row['rs_observ'];
    break;
}
?>
<script>

    $(function() {

        $("#close-ner_neuro_pato_reflejos1").click(function() {
            $("#open-ner_neuro_pato_reflejos1").show();
            $(this).hide();
            $("#content-ner_neuro_pato_reflejos1").hide('slow');
        });

        $("#open-ner_neuro_pato_reflejos1").click(function() {
            $("#close-ner_neuro_pato_reflejos1").show();
            $(this).hide();
            $("#content-ner_neuro_pato_reflejos1").show('slow');
        });

    });

</script>
<fieldset id="ner_neuro_pato_reflejos1">
    <legend align="left"> <div class="arrow-c" id="close-ner_neuro_pato_reflejos1"></div> <div class="arrow-o" id="open-ner_neuro_pato_reflejos1" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Reflejos superficiales y profundos</font></legend>
    <div id="content-ner_neuro_pato_reflejos1">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_ner_neuro_pato_reflejos1" id="guardar_ner_neuro_pato_reflejos1" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_ner_neuro_pato_reflejos1" name="form_ner_neuro_pato_reflejos1" action="<?php echo @$action_form_ner_neuro_pato_reflejos1 ?>#ner_neuro_pato_reflejos1" method="post">

            <input type="hidden" id="id_ner_neuro_pato_reflejos" name="id_ner_neuro_pato_reflejos" value="<?php echo @$id_ner_neuro_pato_reflejos ?>" />

            <input type="hidden" class="input_txt valid" id="id_ner_neuro_pato_reflejos" name="id_ner_neuro_pato_reflejos" value="<?php echo @$id_ner_neuro_pato_reflejos; ?>" />
            
            <table  border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="215" valign="top"><p align="center"><strong>Reflejos profundos</strong></p></td>
                    <td colspan="2" valign="top"><p align="center"><strong>Derecho</strong></p></td>
                    <td colspan="2" valign="top"><p align="center"><strong>Izquierdo</strong></p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Rotuliano</li>
                        </ul></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_rotud" name="refp_rotud" value="<?php echo @$refp_rotud; ?>" />
                        </p></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_rotuizq" name="refp_rotuizq" value="<?php echo @$refp_rotuizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Aductor mayor</li>
                        </ul></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_aductord" name="refp_aductord" value="<?php echo @$refp_aductord; ?>" />
                        </p></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_aductorizq" name="refp_aductorizq" value="<?php echo @$refp_aductorizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Contralateral de los aductores</li>
                        </ul></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_contrad" name="refp_contrad" value="<?php echo @$refp_contrad; ?>" />
                        </p></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_contraizq" name="refp_contraizq" value="<?php echo @$refp_contraizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Aquiliano</li>
                        </ul></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_aquild" name="refp_aquild" value="<?php echo @$refp_aquild; ?>" />
                        </p></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_aquilizq" name="refp_aquilizq" value="<?php echo @$refp_aquilizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Braquioradial</li>
                        </ul></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_brand" name="refp_brand" value="<?php echo @$refp_brand; ?>" />
                        </p></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_branizq" name="refp_branizq" value="<?php echo @$refp_branizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Flexor de los dedos</li>
                        </ul></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_flexd" name="refp_flexd" value="<?php echo @$refp_flexd; ?>" />
                        </p></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_flexizq" name="refp_flexizq" value="<?php echo @$refp_flexizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Bicipital</li>
                        </ul></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_bicd" name="refp_bicd" value="<?php echo @$refp_bicd; ?>" />
                        </p></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_bicizq" name="refp_bicizq" value="<?php echo @$refp_bicizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Tricipital</li>
                        </ul></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_tricd" name="refp_tricd" value="<?php echo @$refp_tricd; ?>" />
                        </p></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_tricizq" name="refp_tricizq" value="<?php echo @$refp_tricizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Olecraneano</li>
                        </ul></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_olecrad" name="refp_olecrad" value="<?php echo @$refp_olecrad; ?>" />
                        </p></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_olecraizq" name="refp_olecraizq" value="<?php echo @$refp_olecraizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Pectoral mayor</li>
                        </ul></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_pectod" name="refp_pectod" value="<?php echo @$refp_pectod; ?>" />
                        </p></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_pectoizq" name="refp_pectoizq" value="<?php echo @$refp_pectoizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Medio esternal</li>
                        </ul></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_mediod" name="refp_mediod" value="<?php echo @$refp_mediod; ?>" />
                        </p></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_medioizq" name="refp_medioizq" value="<?php echo @$refp_medioizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Nasopalpebral</li>
                        </ul></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_nasod" name="refp_nasod" value="<?php echo @$refp_nasod; ?>" />
                        </p></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_nasoizq" name="refp_nasoizq" value="<?php echo @$refp_nasoizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Superciliar</li>
                        </ul></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_superd" name="refp_superd" value="<?php echo @$refp_superd; ?>" />
                        </p></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_superizq" name="refp_superizq" value="<?php echo @$refp_superizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Maseteriano</li>
                        </ul></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_masad" name="refp_masad" value="<?php echo @$refp_masad; ?>" />
                        </p></td>
                    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="refp_masaizq" name="refp_masaizq" value="<?php echo @$refp_masaizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><p align="center"><strong>Reflejos    superficiales</strong></p></td>
                    <td width="179" valign="top"><p align="center"><strong>Presente</strong></p></td>
                    <td width="187" valign="top"><p align="center"><strong>Ausente</strong></p></td>
                    <td width="180" valign="top"><p align="center"><strong>Presente</strong></p></td>
                    <td width="181" valign="top"><p align="center"><strong>Ausente</strong></p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li> Corneo</li>
                        </ul></td>
                    <td width="179" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_cornieop1" name="rs_cornieop1" value="<?php echo @$rs_cornieop1; ?>" />
                            </strong></p></td>
                    <td width="187" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_cornieoau1" name="rs_cornieoau1" value="<?php echo @$rs_cornieoau1; ?>" />
                            </strong></p></td>
                    <td width="180" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_cornieop2" name="rs_cornieop2" value="<?php echo @$rs_cornieop2; ?>" />
                            </strong></p></td>
                    <td width="181" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_cornieoau2" name="rs_cornieoau2" value="<?php echo @$rs_cornieoau2; ?>" />
                            </strong></p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Nasal</li>
                        </ul></td>
                    <td width="179" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_nasalp1" name="rs_nasalp1" value="<?php echo @$rs_nasalp1; ?>" />
                            </strong></p></td>
                    <td width="187" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_nasalau1" name="rs_nasalau1" value="<?php echo @$rs_nasalau1; ?>" />
                            </strong></p></td>
                    <td width="180" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_nasalp2" name="rs_nasalp2" value="<?php echo @$rs_nasalp2; ?>" />
                            </strong></p></td>
                    <td width="181" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_nasalau2" name="rs_nasalau2" value="<?php echo @$rs_nasalau2; ?>" />
                            </strong></p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Far??ngeo</li>
                        </ul></td>
                    <td width="179" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_faringeop1" name="rs_faringeop1" value="<?php echo @$rs_faringeop1; ?>" />
                            </strong></p></td>
                    <td width="187" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_faringeoau1" name="rs_faringeoau1" value="<?php echo @$rs_faringeoau1; ?>" />
                            </strong></p></td>
                    <td width="180" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_faringeop2" name="rs_faringeop2" value="<?php echo @$rs_faringeop2; ?>" />
                            </strong></p></td>
                    <td width="181" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_faringeoau2" name="rs_faringeoau2" value="<?php echo @$rs_faringeoau2; ?>" />
                            </strong></p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Velopalatino</li>
                        </ul></td>
                    <td width="179" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_velop1" name="rs_velop1" value="<?php echo @$rs_velop1; ?>" />
                            </strong></p></td>
                    <td width="187" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_veloau1" name="rs_veloau1" value="<?php echo @$rs_veloau1; ?>" />
                            </strong></p></td>
                    <td width="180" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_velop2" name="rs_velop2" value="<?php echo @$rs_velop2; ?>" />
                            </strong></p></td>
                    <td width="181" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_veloau2" name="rs_veloau2" value="<?php echo @$rs_veloau2; ?>" />
                            </strong></p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Cutaneoabdominal</li>
                        </ul></td>
                    <td width="179" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_cutap1" name="rs_cutap1" value="<?php echo @$rs_cutap1; ?>" />
                            </strong></p></td>
                    <td width="187" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_cutaau1" name="rs_cutaau1" value="<?php echo @$rs_cutaau1; ?>" />
                            </strong></p></td>
                    <td width="180" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_cutap2" name="rs_cutap2" value="<?php echo @$rs_cutap2; ?>" />
                            </strong></p></td>
                    <td width="181" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_cutaau2" name="rs_cutaau2" value="<?php echo @$rs_cutaau2; ?>" />
                            </strong></p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Gl??teo</li>
                        </ul></td>
                    <td width="179" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_glup1" name="rs_glup1" value="<?php echo @$rs_glup1; ?>" />
                            </strong></p></td>
                    <td width="187" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_gluau1" name="rs_gluau1" value="<?php echo @$rs_gluau1; ?>" />
                            </strong></p></td>
                    <td width="180" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_glup2" name="rs_glup2" value="<?php echo @$rs_glup2; ?>" />
                            </strong></p></td>
                    <td width="181" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_gluau2" name="rs_gluau2" value="<?php echo @$rs_gluau2; ?>" />
                            </strong></p></td>
                </tr>
                <tr>
                    <td width="215" valign="top"><ul>
                            <li>Anal</li>
                        </ul></td>
                    <td width="179" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_anap1" name="rs_anap1" value="<?php echo @$rs_anap1; ?>" />
                            </strong></p></td>
                    <td width="187" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_anaau1" name="rs_anaau1" value="<?php echo @$rs_anaau1; ?>" />
                            </strong></p></td>
                    <td width="180" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_anap2" name="rs_anap2" value="<?php echo @$rs_anap2; ?>" />
                            </strong></p></td>
                    <td width="181" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="rs_anaau2" name="rs_anaau2" value="<?php echo @$rs_anaau2; ?>" />
                            </strong></p></td>
                </tr>
            </table>
            
            <p><strong>OBSERVACIONES:
                    <input type="text" class="input_txt valid" id="rs_observ" name="rs_observ" value="<?php echo @$rs_observ; ?>" />
                    &nbsp;</strong></p>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>