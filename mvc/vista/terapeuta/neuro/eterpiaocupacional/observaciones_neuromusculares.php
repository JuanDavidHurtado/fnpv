<?php
if (isset($_REQUEST['guardar_h2_terapia_neuro1']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h2_terapia_neuro'] == 'new') {

        $sql = "INSERT INTO h2_terapia_neuro (
`id_h2_terapia_neuro`,
`id_usuario`,
`historia`,
`id_proceso`,
`tc_eutono`,
`tc_hiper`,
`tc_hipo`,
`tt_eutono`,
`tt_hiper`,
`tt_hipo`,
`tmd_eutono`,
`tmd_hiper`,
`tmd_hipo`,
`tmi_eutono`,
`tmi_hiper`,
`tmi_hipo`,
`tmd2_eutono`,
`tmd2_hiper`,
`tmd2_hipo`,
`tii_eutono`,
`tii_hiper`,
`ti_hipo`,
`nerurom_obser`,
`sh_f`,
`sh_sf`,
`sh_nf`,
`sv_f`,
`sv_sf`,
`sv_nf`,
`sd_f`,
`sd_sf`,
`sd_nf`,
`sc_f`,
`sc_sf`,
`sc_nf`,
`acomo_f`,
`acomo_sf`,
`acomo_nf`,
`fijacion`,
`seg_doc`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`visual_oserva`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['tc_eutono'] . "' ,
'" . $_REQUEST['tc_hiper'] . "' ,
'" . $_REQUEST['tc_hipo'] . "' ,
'" . $_REQUEST['tt_eutono'] . "' ,
'" . $_REQUEST['tt_hiper'] . "' ,
'" . $_REQUEST['tt_hipo'] . "' ,
'" . $_REQUEST['tmd_eutono'] . "' ,
'" . $_REQUEST['tmd_hiper'] . "' ,
'" . $_REQUEST['tmd_hipo'] . "' ,
'" . $_REQUEST['tmi_eutono'] . "' ,
'" . $_REQUEST['tmi_hiper'] . "' ,
'" . $_REQUEST['tmi_hipo'] . "' ,
'" . $_REQUEST['tmd2_eutono'] . "' ,
'" . $_REQUEST['tmd2_hiper'] . "' ,
'" . $_REQUEST['tmd2_hipo'] . "' ,
'" . $_REQUEST['tii_eutono'] . "' ,
'" . $_REQUEST['tii_hiper'] . "' ,
'" . $_REQUEST['ti_hipo'] . "' ,
'" . $_REQUEST['nerurom_obser'] . "' ,
'" . $_REQUEST['sh_f'] . "' ,
'" . $_REQUEST['sh_sf'] . "' ,
'" . $_REQUEST['sh_nf'] . "' ,
'" . $_REQUEST['sv_f'] . "' ,
'" . $_REQUEST['sv_sf'] . "' ,
'" . $_REQUEST['sv_nf'] . "' ,
'" . $_REQUEST['sd_f'] . "' ,
'" . $_REQUEST['sd_sf'] . "' ,
'" . $_REQUEST['sd_nf'] . "' ,
'" . $_REQUEST['sc_f'] . "' ,
'" . $_REQUEST['sc_sf'] . "' ,
'" . $_REQUEST['sc_nf'] . "' ,
'" . $_REQUEST['acomo_f'] . "' ,
'" . $_REQUEST['acomo_sf'] . "' ,
'" . $_REQUEST['acomo_nf'] . "' ,
'" . $_REQUEST['fijacion'] . "' ,
'" . $_REQUEST['seg_doc'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['visual_oserva'] . "'
) ";
    } else if ($_REQUEST['id_h2_terapia_neuro'] != '') {

        $sql = "UPDATE h2_terapia_neuro set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`tc_eutono` = '" . $_REQUEST['tc_eutono'] . "' ,
`tc_hiper` = '" . $_REQUEST['tc_hiper'] . "' ,
`tc_hipo` = '" . $_REQUEST['tc_hipo'] . "' ,
`tt_eutono` = '" . $_REQUEST['tt_eutono'] . "' ,
`tt_hiper` = '" . $_REQUEST['tt_hiper'] . "' ,
`tt_hipo` = '" . $_REQUEST['tt_hipo'] . "' ,
`tmd_eutono` = '" . $_REQUEST['tmd_eutono'] . "' ,
`tmd_hiper` = '" . $_REQUEST['tmd_hiper'] . "' ,
`tmd_hipo` = '" . $_REQUEST['tmd_hipo'] . "' ,
`tmi_eutono` = '" . $_REQUEST['tmi_eutono'] . "' ,
`tmi_hiper` = '" . $_REQUEST['tmi_hiper'] . "' ,
`tmi_hipo` = '" . $_REQUEST['tmi_hipo'] . "' ,
`tmd2_eutono` = '" . $_REQUEST['tmd2_eutono'] . "' ,
`tmd2_hiper` = '" . $_REQUEST['tmd2_hiper'] . "' ,
`tmd2_hipo` = '" . $_REQUEST['tmd2_hipo'] . "' ,
`tii_eutono` = '" . $_REQUEST['tii_eutono'] . "' ,
`tii_hiper` = '" . $_REQUEST['tii_hiper'] . "' ,
`ti_hipo` = '" . $_REQUEST['ti_hipo'] . "' ,
`nerurom_obser` = '" . $_REQUEST['nerurom_obser'] . "' ,
`sh_f` = '" . $_REQUEST['sh_f'] . "' ,
`sh_sf` = '" . $_REQUEST['sh_sf'] . "' ,
`sh_nf` = '" . $_REQUEST['sh_nf'] . "' ,
`sv_f` = '" . $_REQUEST['sv_f'] . "' ,
`sv_sf` = '" . $_REQUEST['sv_sf'] . "' ,
`sv_nf` = '" . $_REQUEST['sv_nf'] . "' ,
`sd_f` = '" . $_REQUEST['sd_f'] . "' ,
`sd_sf` = '" . $_REQUEST['sd_sf'] . "' ,
`sd_nf` = '" . $_REQUEST['sd_nf'] . "' ,
`sc_f` = '" . $_REQUEST['sc_f'] . "' ,
`sc_sf` = '" . $_REQUEST['sc_sf'] . "' ,
`sc_nf` = '" . $_REQUEST['sc_nf'] . "' ,
`acomo_f` = '" . $_REQUEST['acomo_f'] . "' ,
`acomo_sf` = '" . $_REQUEST['acomo_sf'] . "' ,
`acomo_nf` = '" . $_REQUEST['acomo_nf'] . "' ,
`fijacion` = '" . $_REQUEST['fijacion'] . "' ,
`seg_doc` = '" . $_REQUEST['seg_doc'] . "' ,
`visual_oserva` = '" . $_REQUEST['visual_oserva'] . "' WHERE `id_h2_terapia_neuro` = '" . $_REQUEST['id_h2_terapia_neuro'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h2_terapia_neuro = 'new';
$sql = "SELECT * from h2_terapia_neuro WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h2_terapia_neuro = $row['id_h2_terapia_neuro'];

    $tc_eutono = $row['tc_eutono'];
    $tc_hiper = $row['tc_hiper'];
    $tc_hipo = $row['tc_hipo'];
    $tt_eutono = $row['tt_eutono'];
    $tt_hiper = $row['tt_hiper'];
    $tt_hipo = $row['tt_hipo'];
    $tmd_eutono = $row['tmd_eutono'];
    $tmd_hiper = $row['tmd_hiper'];
    $tmd_hipo = $row['tmd_hipo'];
    $tmi_eutono = $row['tmi_eutono'];
    $tmi_hiper = $row['tmi_hiper'];
    $tmi_hipo = $row['tmi_hipo'];
    $tmd2_eutono = $row['tmd2_eutono'];
    $tmd2_hiper = $row['tmd2_hiper'];
    $tmd2_hipo = $row['tmd2_hipo'];
    $tii_eutono = $row['tii_eutono'];
    $tii_hiper = $row['tii_hiper'];
    $ti_hipo = $row['ti_hipo'];
    $nerurom_obser = $row['nerurom_obser'];
    $sh_f = $row['sh_f'];
    $sh_sf = $row['sh_sf'];
    $sh_nf = $row['sh_nf'];
    $sv_f = $row['sv_f'];
    $sv_sf = $row['sv_sf'];
    $sv_nf = $row['sv_nf'];
    $sd_f = $row['sd_f'];
    $sd_sf = $row['sd_sf'];
    $sd_nf = $row['sd_nf'];
    $sc_f = $row['sc_f'];
    $sc_sf = $row['sc_sf'];
    $sc_nf = $row['sc_nf'];
    $acomo_f = $row['acomo_f'];
    $acomo_sf = $row['acomo_sf'];
    $acomo_nf = $row['acomo_nf'];
    $fijacion = $row['fijacion'];
    $seg_doc = $row['seg_doc'];
    $visual_oserva = $row['visual_oserva'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h2_terapia_neuro1").click(function() {
            $("#open-h2_terapia_neuro1").show();
            $(this).hide();
            $("#content-h2_terapia_neuro1").hide('slow');
        });

        $("#open-h2_terapia_neuro1").click(function() {
            $("#close-h2_terapia_neuro1").show();
            $(this).hide();
            $("#content-h2_terapia_neuro1").show('slow');
        });

    });

</script>
<fieldset id="h2_terapia_neuro1">
    <legend align="left"> <div class="arrow-c" id="close-h2_terapia_neuro1"></div> <div class="arrow-o" id="open-h2_terapia_neuro1" ></div> <font>Valoracion terapia ocupacional neurorehabilitacion - Observaciones neuromusculares</font></legend>
    <div id="content-h2_terapia_neuro1">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h2_terapia_neuro1" id="guardar_h2_terapia_neuro1" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h2_terapia_neuro1" name="form_h2_terapia_neuro1" action="<?php echo @$action_form_h2_terapia_neuro1 ?>#h2_terapia_neuro1" method="post">

            <input type="hidden" id="id_h2_terapia_neuro" name="id_h2_terapia_neuro" value="<?php echo @$id_h2_terapia_neuro ?>" />

            <input type="hidden" class="input_txt valid" id="id_h2_terapia_neuro" name="id_h2_terapia_neuro" value="<?php echo @$id_h2_terapia_neuro; ?>" />


            <p><strong>TONO MUSCULAR:</strong></p>
            <table  border="0" cellspacing="0" cellpadding="0" class="data" >
                <tr>
                    <td width="120" valign="top"><p align="center">&nbsp;</p></td>
                    <td width="120" valign="top"><p align="center"><strong>EUTONO</strong></p></td>
                    <td width="120" valign="top"><p align="center"><strong>HIPERTONO</strong></p></td>
                    <td width="120" valign="top"><p align="center"><strong>HIPOTONO</strong></p></td>
                </tr>
                <tr>
                    <td width="120" valign="top"><p align="left">Cuello</p></td>
                    <td width="120" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="tc_eutono" name="tc_eutono" value="<?php echo @$tc_eutono; ?>" />
                        </p></td>
                    <td width="120" valign="top"><p align="left">
                            <input type="text" class="input_txt valid" id="tc_hiper" name="tc_hiper" value="<?php echo @$tc_hiper; ?>" />
                        </p></td>
                    <td width="120" valign="top"><p align="left"><input type="text" class="input_txt valid" id="tc_hipo" name="tc_hipo" value="<?php echo @$tc_hipo; ?>" /></p></td>
                </tr>
                <tr>
                    <td width="120" valign="top"><p align="left">Tronco</p></td>
                    <td width="120" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="tt_eutono" name="tt_eutono" value="<?php echo @$tt_eutono; ?>" />
                        </p></td>
                    <td width="120" valign="top"><p align="left">
                            <input type="text" class="input_txt valid" id="tt_hiper" name="tt_hiper" value="<?php echo @$tt_hiper; ?>" />
                        </p></td>
                    <td width="120" valign="top"><p align="left">
                            <input type="text" class="input_txt valid" id="tt_hipo" name="tt_hipo" value="<?php echo @$tt_hipo; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="120" valign="top"><p align="left">MMSSD</p></td>
                    <td width="120" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="tmd_eutono" name="tmd_eutono" value="<?php echo @$tmd_eutono; ?>" />
                        </p></td>
                    <td width="120" valign="top"><p align="left">
                            <input type="text" class="input_txt valid" id="tmd_hiper" name="tmd_hiper" value="<?php echo @$tmd_hiper; ?>" />
                        </p></td>
                    <td width="120" valign="top"><p align="left">
                            <input type="text" class="input_txt valid" id="tmd_hipo" name="tmd_hipo" value="<?php echo @$tmd_hipo; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="120" valign="top"><p align="left">MMSSI</p></td>
                    <td width="120" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="tmi_eutono" name="tmi_eutono" value="<?php echo @$tmi_eutono; ?>" />
                        </p></td>
                    <td width="120" valign="top"><p align="left">
                            <input type="text" class="input_txt valid" id="tmi_hiper" name="tmi_hiper" value="<?php echo @$tmi_hiper; ?>" />
                        </p></td>
                    <td width="120" valign="top"><p align="left">
                            <input type="text" class="input_txt valid" id="tmi_hipo" name="tmi_hipo" value="<?php echo @$tmi_hipo; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="120" valign="top"><p align="left">MMIID</p></td>
                    <td width="120" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="tmd2_eutono" name="tmd2_eutono" value="<?php echo @$tmd2_eutono; ?>" />
                        </p></td>
                    <td width="120" valign="top"><p align="left">
                            <input type="text" class="input_txt valid" id="tmd2_hiper" name="tmd2_hiper" value="<?php echo @$tmd2_hiper; ?>" />
                        </p></td>
                    <td width="120" valign="top"><p align="left">
                            <input type="text" class="input_txt valid" id="tmd2_hipo" name="tmd2_hipo" value="<?php echo @$tmd2_hipo; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="120" valign="top"><p align="left">MMIII</p></td>
                    <td width="120" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="tii_eutono" name="tii_eutono" value="<?php echo @$tii_eutono; ?>" />
                        </p></td>
                    <td width="120" valign="top"><p align="left">
                            <input type="text" class="input_txt valid" id="tii_hiper" name="tii_hiper" value="<?php echo @$tii_hiper; ?>" />
                        </p></td>
                    <td width="120" valign="top"><p align="left">
                            <input type="text" class="input_txt valid" id="ti_hipo" name="ti_hipo" value="<?php echo @$ti_hipo; ?>" />
                        </p></td>
                </tr>
            </table>
            <br />
            <p>OBSERVACIONES:
                <input type="text" class="input_txt valid" id="nerurom_obser" name="nerurom_obser" value="<?php echo @$nerurom_obser; ?>" />
            </p>
            <br />

            <p><strong>OBSERVACIÓN VISUAL</strong></p>
            <p><strong>5. SEGUIMIENTO  VISUAL</strong></p>
            <table   border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="171" valign="top"><p><strong>SEGUIMIENTO</strong></p></td>
                    <td width="60" valign="top"><p align="center"><strong>F</strong></p></td>
                    <td width="60" valign="top"><p align="center"><strong>SF</strong></p></td>
                    <td width="60" valign="top"><p align="center"><strong>NF</strong></p></td>
                </tr>
                <tr>
                    <td width="171" valign="top"><p>Horizontal</p></td>
                    <td width="60" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="sh_f" name="sh_f" value="<?php echo @$sh_f; ?>" />
                        </p></td>
                    <td width="60" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="sh_sf" name="sh_sf" value="<?php echo @$sh_sf; ?>" />
                        </p></td>
                    <td width="60" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="sh_nf" name="sh_nf" value="<?php echo @$sh_nf; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="171" valign="top"><p>Vertical</p></td>
                    <td width="60" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="sv_f" name="sv_f" value="<?php echo @$sv_f; ?>" />
                        </p></td>
                    <td width="60" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="sv_sf" name="sv_sf" value="<?php echo @$sv_sf; ?>" />
                        </p></td>
                    <td width="60" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="sv_nf" name="sv_nf" value="<?php echo @$sv_nf; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="171" valign="top"><p>Diagonal</p></td>
                    <td width="60" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="sd_f" name="sd_f" value="<?php echo @$sd_f; ?>" />
                        </p></td>
                    <td width="60" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="sd_sf" name="sd_sf" value="<?php echo @$sd_sf; ?>" />
                        </p></td>
                    <td width="60" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="sd_nf" name="sd_nf" value="<?php echo @$sd_nf; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="171" valign="top"><p>Circular</p></td>
                    <td width="60" valign="top">
                        <input type="text" class="input_txt valid" id="sc_f" name="sc_f" value="<?php echo @$sc_f; ?>" />
                    </td>
                    <td width="60" valign="top">
                        <input type="text" class="input_txt valid" id="sc_sf" name="sc_sf" value="<?php echo @$sc_sf; ?>" />
                    </td>
                    <td width="60" valign="top">
                        <input type="text" class="input_txt valid" id="sc_nf" name="sc_nf" value="<?php echo @$sc_nf; ?>" />
                    </td>
                </tr>
            </table>
            <br>
            <p ><strong>6. MECANISMOS  OCULARES</strong></p>
            <table  border="0" cellspacing="0" cellpadding="0" class="data" width="898">
                <tr>
                    <td width="894" valign="top"><p align="left">&nbsp;</p>

                        <p>ACOMODACIÓN:    F
                            <input type="text" class="input_txt valid" id="acomo_f" name="acomo_f" value="<?php echo @$acomo_f; ?>" />
                            SF
                            <input type="text" class="input_txt valid" id="acomo_sf" name="acomo_sf" value="<?php echo @$acomo_sf; ?>" />
                            NF
                            <input type="text" class="input_txt valid" id="acomo_nf" name="acomo_nf" value="<?php echo @$acomo_nf; ?>" />
                            <br />
                            FIJACIÓN:
                            <input type="text" class="input_txt valid" id="fijacion" name="fijacion" value="<?php echo @$fijacion; ?>" />
                            seg. DOC
                            <input type="text" class="input_txt valid" id="seg_doc" name="seg_doc" value="<?php echo @$seg_doc; ?>" />
                        </p>
                        <p>OBSERVACIONES:
                            <input type="text" class="input_txt valid" id="visual_oserva" name="visual_oserva" value="<?php echo @$visual_oserva; ?>" />
                        </p></td>
                </tr>
            </table>
            <br />

            <br />
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>