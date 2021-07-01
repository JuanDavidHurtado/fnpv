<?php
if (isset($_REQUEST['guardar_h1_maduracion_nino']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h1_maduracion_nino'] == 'new') {

        $sql = "INSERT INTO h1_maduracion_nino (
`id_h1_maduracion_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`marcha_1`,
`marcha_2`,
`cruza_1`,
`cruza_2`,
`ret_flex_1`,
`ret_flex_2`,
`toni_1`,
`toni_2`,
`tinisi_1`,
`tinisi_2`,
`palmar_1`,
`palmar_2`,
`plantar_1`,
`plantar_2`,
`postivo_1`,
`positivo_2`,
`negativo_1`,
`negativo_2`,
`ende_1`,
`ende_2`,
`endecu_1`,
`endecu_2`,
`cuerpo_1`,
`cuerpo_2`,
`optico_1`,
`opctico_2`,
`esupino_1`,
`esupino_2`,
`eprono_1`,
`eprono_2`,
`cor_supino_1`,
`cor_supino_2`,
`cor_prono_1`,
`cor_prono_2`,
`cor_sed_1`,
`cor_sed_2`,
`cor_cuad_1`,
`cor_cuad_2`,
`cor_arrodilla_1`,
`cor_arrodilla_2`,
`cor_bipedo_1`,
`cor_bipedo_2`,
`brin1_1`,
`brin1_2`,
`brin2_1`,
`brin2_2`,
`brin3_1`,
`brin3_2`,
`moro_1`,
`moro_2`,
`alpini_1`,
`alpini_2`,
`n_landau_1`,
`n_landau_2`,
`galan_1`,
`galan_2`,
`para_1`,
`para_2`,
`paral_1`,
`paral_2`,
`parap_1`,
`parap_2`,
`n_asos_1`,
`n_asos_2`,
`n_anfibia_1`,
`nanfibia_2`,
`reti_ext_1`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`reti_ext_2`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['marcha_1'] . "' ,
'" . $_REQUEST['marcha_2'] . "' ,
'" . $_REQUEST['cruza_1'] . "' ,
'" . $_REQUEST['cruza_2'] . "' ,
'" . $_REQUEST['ret_flex_1'] . "' ,
'" . $_REQUEST['ret_flex_2'] . "' ,
'" . $_REQUEST['toni_1'] . "' ,
'" . $_REQUEST['toni_2'] . "' ,
'" . $_REQUEST['tinisi_1'] . "' ,
'" . $_REQUEST['tinisi_2'] . "' ,
'" . $_REQUEST['palmar_1'] . "' ,
'" . $_REQUEST['palmar_2'] . "' ,
'" . $_REQUEST['plantar_1'] . "' ,
'" . $_REQUEST['plantar_2'] . "' ,
'" . $_REQUEST['postivo_1'] . "' ,
'" . $_REQUEST['positivo_2'] . "' ,
'" . $_REQUEST['negativo_1'] . "' ,
'" . $_REQUEST['negativo_2'] . "' ,
'" . $_REQUEST['ende_1'] . "' ,
'" . $_REQUEST['ende_2'] . "' ,
'" . $_REQUEST['endecu_1'] . "' ,
'" . $_REQUEST['endecu_2'] . "' ,
'" . $_REQUEST['cuerpo_1'] . "' ,
'" . $_REQUEST['cuerpo_2'] . "' ,
'" . $_REQUEST['optico_1'] . "' ,
'" . $_REQUEST['opctico_2'] . "' ,
'" . $_REQUEST['esupino_1'] . "' ,
'" . $_REQUEST['esupino_2'] . "' ,
'" . $_REQUEST['eprono_1'] . "' ,
'" . $_REQUEST['eprono_2'] . "' ,
'" . $_REQUEST['cor_supino_1'] . "' ,
'" . $_REQUEST['cor_supino_2'] . "' ,
'" . $_REQUEST['cor_prono_1'] . "' ,
'" . $_REQUEST['cor_prono_2'] . "' ,
'" . $_REQUEST['cor_sed_1'] . "' ,
'" . $_REQUEST['cor_sed_2'] . "' ,
'" . $_REQUEST['cor_cuad_1'] . "' ,
'" . $_REQUEST['cor_cuad_2'] . "' ,
'" . $_REQUEST['cor_arrodilla_1'] . "' ,
'" . $_REQUEST['cor_arrodilla_2'] . "' ,
'" . $_REQUEST['cor_bipedo_1'] . "' ,
'" . $_REQUEST['cor_bipedo_2'] . "' ,
'" . $_REQUEST['brin1_1'] . "' ,
'" . $_REQUEST['brin1_2'] . "' ,
'" . $_REQUEST['brin2_1'] . "' ,
'" . $_REQUEST['brin2_2'] . "' ,
'" . $_REQUEST['brin3_1'] . "' ,
'" . $_REQUEST['brin3_2'] . "' ,
'" . $_REQUEST['moro_1'] . "' ,
'" . $_REQUEST['moro_2'] . "' ,
'" . $_REQUEST['alpini_1'] . "' ,
'" . $_REQUEST['alpini_2'] . "' ,
'" . $_REQUEST['n_landau_1'] . "' ,
'" . $_REQUEST['n_landau_2'] . "' ,
'" . $_REQUEST['galan_1'] . "' ,
'" . $_REQUEST['galan_2'] . "' ,
'" . $_REQUEST['para_1'] . "' ,
'" . $_REQUEST['para_2'] . "' ,
'" . $_REQUEST['paral_1'] . "' ,
'" . $_REQUEST['paral_2'] . "' ,
'" . $_REQUEST['parap_1'] . "' ,
'" . $_REQUEST['parap_2'] . "' ,
'" . $_REQUEST['n_asos_1'] . "' ,
'" . $_REQUEST['n_asos_2'] . "' ,
'" . $_REQUEST['n_anfibia_1'] . "' ,
'" . $_REQUEST['nanfibia_2'] . "' ,
'" . $_REQUEST['reti_ext_1'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['reti_ext_2'] . "'
) ";
    } else if ($_REQUEST['id_h1_maduracion_nino'] != '') {

        $sql = "UPDATE h1_maduracion_nino set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`marcha_1` = '" . $_REQUEST['marcha_1'] . "' ,
`marcha_2` = '" . $_REQUEST['marcha_2'] . "' ,
`cruza_1` = '" . $_REQUEST['cruza_1'] . "' ,
`cruza_2` = '" . $_REQUEST['cruza_2'] . "' ,
`ret_flex_1` = '" . $_REQUEST['ret_flex_1'] . "' ,
`ret_flex_2` = '" . $_REQUEST['ret_flex_2'] . "' ,
`toni_1` = '" . $_REQUEST['toni_1'] . "' ,
`toni_2` = '" . $_REQUEST['toni_2'] . "' ,
`tinisi_1` = '" . $_REQUEST['tinisi_1'] . "' ,
`tinisi_2` = '" . $_REQUEST['tinisi_2'] . "' ,
`palmar_1` = '" . $_REQUEST['palmar_1'] . "' ,
`palmar_2` = '" . $_REQUEST['palmar_2'] . "' ,
`plantar_1` = '" . $_REQUEST['plantar_1'] . "' ,
`plantar_2` = '" . $_REQUEST['plantar_2'] . "' ,
`postivo_1` = '" . $_REQUEST['postivo_1'] . "' ,
`positivo_2` = '" . $_REQUEST['positivo_2'] . "' ,
`negativo_1` = '" . $_REQUEST['negativo_1'] . "' ,
`negativo_2` = '" . $_REQUEST['negativo_2'] . "' ,
`ende_1` = '" . $_REQUEST['ende_1'] . "' ,
`ende_2` = '" . $_REQUEST['ende_2'] . "' ,
`endecu_1` = '" . $_REQUEST['endecu_1'] . "' ,
`endecu_2` = '" . $_REQUEST['endecu_2'] . "' ,
`cuerpo_1` = '" . $_REQUEST['cuerpo_1'] . "' ,
`cuerpo_2` = '" . $_REQUEST['cuerpo_2'] . "' ,
`optico_1` = '" . $_REQUEST['optico_1'] . "' ,
`opctico_2` = '" . $_REQUEST['opctico_2'] . "' ,
`esupino_1` = '" . $_REQUEST['esupino_1'] . "' ,
`esupino_2` = '" . $_REQUEST['esupino_2'] . "' ,
`eprono_1` = '" . $_REQUEST['eprono_1'] . "' ,
`eprono_2` = '" . $_REQUEST['eprono_2'] . "' ,
`cor_supino_1` = '" . $_REQUEST['cor_supino_1'] . "' ,
`cor_supino_2` = '" . $_REQUEST['cor_supino_2'] . "' ,
`cor_prono_1` = '" . $_REQUEST['cor_prono_1'] . "' ,
`cor_prono_2` = '" . $_REQUEST['cor_prono_2'] . "' ,
`cor_sed_1` = '" . $_REQUEST['cor_sed_1'] . "' ,
`cor_sed_2` = '" . $_REQUEST['cor_sed_2'] . "' ,
`cor_cuad_1` = '" . $_REQUEST['cor_cuad_1'] . "' ,
`cor_cuad_2` = '" . $_REQUEST['cor_cuad_2'] . "' ,
`cor_arrodilla_1` = '" . $_REQUEST['cor_arrodilla_1'] . "' ,
`cor_arrodilla_2` = '" . $_REQUEST['cor_arrodilla_2'] . "' ,
`cor_bipedo_1` = '" . $_REQUEST['cor_bipedo_1'] . "' ,
`cor_bipedo_2` = '" . $_REQUEST['cor_bipedo_2'] . "' ,
`brin1_1` = '" . $_REQUEST['brin1_1'] . "' ,
`brin1_2` = '" . $_REQUEST['brin1_2'] . "' ,
`brin2_1` = '" . $_REQUEST['brin2_1'] . "' ,
`brin2_2` = '" . $_REQUEST['brin2_2'] . "' ,
`brin3_1` = '" . $_REQUEST['brin3_1'] . "' ,
`brin3_2` = '" . $_REQUEST['brin3_2'] . "' ,
`moro_1` = '" . $_REQUEST['moro_1'] . "' ,
`moro_2` = '" . $_REQUEST['moro_2'] . "' ,
`alpini_1` = '" . $_REQUEST['alpini_1'] . "' ,
`alpini_2` = '" . $_REQUEST['alpini_2'] . "' ,
`n_landau_1` = '" . $_REQUEST['n_landau_1'] . "' ,
`n_landau_2` = '" . $_REQUEST['n_landau_2'] . "' ,
`galan_1` = '" . $_REQUEST['galan_1'] . "' ,
`galan_2` = '" . $_REQUEST['galan_2'] . "' ,
`para_1` = '" . $_REQUEST['para_1'] . "' ,
`para_2` = '" . $_REQUEST['para_2'] . "' ,
`paral_1` = '" . $_REQUEST['paral_1'] . "' ,
`paral_2` = '" . $_REQUEST['paral_2'] . "' ,
`parap_1` = '" . $_REQUEST['parap_1'] . "' ,
`parap_2` = '" . $_REQUEST['parap_2'] . "' ,
`n_asos_1` = '" . $_REQUEST['n_asos_1'] . "' ,
`n_asos_2` = '" . $_REQUEST['n_asos_2'] . "' ,
`n_anfibia_1` = '" . $_REQUEST['n_anfibia_1'] . "' ,
`nanfibia_2` = '" . $_REQUEST['nanfibia_2'] . "' ,
`reti_ext_1` = '" . $_REQUEST['reti_ext_1'] . "' ,
`reti_ext_2` = '" . $_REQUEST['reti_ext_2'] . "' WHERE `id_h1_maduracion_nino` = '" . $_REQUEST['id_h1_maduracion_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h1_maduracion_nino = 'new';
$sql = "SELECT * from h1_maduracion_nino WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h1_maduracion_nino = $row['id_h1_maduracion_nino'];

    $marcha_1 = $row['marcha_1'];
    $marcha_2 = $row['marcha_2'];
    $cruza_1 = $row['cruza_1'];
    $cruza_2 = $row['cruza_2'];
    $ret_flex_1 = $row['ret_flex_1'];
    $ret_flex_2 = $row['ret_flex_2'];
    $toni_1 = $row['toni_1'];
    $toni_2 = $row['toni_2'];
    $tinisi_1 = $row['tinisi_1'];
    $tinisi_2 = $row['tinisi_2'];
    $palmar_1 = $row['palmar_1'];
    $palmar_2 = $row['palmar_2'];
    $plantar_1 = $row['plantar_1'];
    $plantar_2 = $row['plantar_2'];
    $postivo_1 = $row['postivo_1'];
    $positivo_2 = $row['positivo_2'];
    $negativo_1 = $row['negativo_1'];
    $negativo_2 = $row['negativo_2'];
    $ende_1 = $row['ende_1'];
    $ende_2 = $row['ende_2'];
    $endecu_1 = $row['endecu_1'];
    $endecu_2 = $row['endecu_2'];
    $cuerpo_1 = $row['cuerpo_1'];
    $cuerpo_2 = $row['cuerpo_2'];
    $optico_1 = $row['optico_1'];
    $opctico_2 = $row['opctico_2'];
    $esupino_1 = $row['esupino_1'];
    $esupino_2 = $row['esupino_2'];
    $eprono_1 = $row['eprono_1'];
    $eprono_2 = $row['eprono_2'];
    $cor_supino_1 = $row['cor_supino_1'];
    $cor_supino_2 = $row['cor_supino_2'];
    $cor_prono_1 = $row['cor_prono_1'];
    $cor_prono_2 = $row['cor_prono_2'];
    $cor_sed_1 = $row['cor_sed_1'];
    $cor_sed_2 = $row['cor_sed_2'];
    $cor_cuad_1 = $row['cor_cuad_1'];
    $cor_cuad_2 = $row['cor_cuad_2'];
    $cor_arrodilla_1 = $row['cor_arrodilla_1'];
    $cor_arrodilla_2 = $row['cor_arrodilla_2'];
    $cor_bipedo_1 = $row['cor_bipedo_1'];
    $cor_bipedo_2 = $row['cor_bipedo_2'];
    $brin1_1 = $row['brin1_1'];
    $brin1_2 = $row['brin1_2'];
    $brin2_1 = $row['brin2_1'];
    $brin2_2 = $row['brin2_2'];
    $brin3_1 = $row['brin3_1'];
    $brin3_2 = $row['brin3_2'];
    $moro_1 = $row['moro_1'];
    $moro_2 = $row['moro_2'];
    $alpini_1 = $row['alpini_1'];
    $alpini_2 = $row['alpini_2'];
    $n_landau_1 = $row['n_landau_1'];
    $n_landau_2 = $row['n_landau_2'];
    $galan_1 = $row['galan_1'];
    $galan_2 = $row['galan_2'];
    $para_1 = $row['para_1'];
    $para_2 = $row['para_2'];
    $paral_1 = $row['paral_1'];
    $paral_2 = $row['paral_2'];
    $parap_1 = $row['parap_1'];
    $parap_2 = $row['parap_2'];
    $n_asos_1 = $row['n_asos_1'];
    $n_asos_2 = $row['n_asos_2'];
    $n_anfibia_1 = $row['n_anfibia_1'];
    $nanfibia_2 = $row['nanfibia_2'];
    $reti_ext_1 = $row['reti_ext_1'];
    $reti_ext_2 = $row['reti_ext_2'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h1_maduracion_nino").click(function() {
            $("#open-h1_maduracion_nino").show();
            $(this).hide();
            $("#content-h1_maduracion_nino").hide('slow');
        });

        $("#open-h1_maduracion_nino").click(function() {
            $("#close-h1_maduracion_nino").show();
            $(this).hide();
            $("#content-h1_maduracion_nino").show('slow');
        });

    });

</script>
<fieldset id="h1_maduracion_nino">
    <legend align="left"> <div class="arrow-c" id="close-h1_maduracion_nino"></div> <div class="arrow-o" id="open-h1_maduracion_nino" ></div> <font>Valoracion fisioterapia de neurodesarrollo - Evaluacion por sistemas / Reflejos</font></legend>
    <div id="content-h1_maduracion_nino">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h1_maduracion_nino" id="guardar_h1_maduracion_nino" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h1_maduracion_nino" name="form_h1_maduracion_nino" action="<?php echo @$action_form_h1_maduracion_nino ?>#h1_maduracion_nino" method="post">

            <input type="hidden" id="id_h1_maduracion_nino" name="id_h1_maduracion_nino" value="<?php echo @$id_h1_maduracion_nino ?>" />

            <input type="hidden" class="input_txt valid" id="id_h1_maduracion_nino" name="id_h1_maduracion_nino" value="<?php echo @$id_h1_maduracion_nino; ?>" />

            <ul>
                <li><strong>Por Niveles De Maduración</strong></li>
            </ul>
            <p><strong>ESPINAL </strong></p>
            <p>&nbsp;</p>
            <table  border="0" class="data" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="186" valign="top"><br />
                        <strong>Reflejo</strong> </td>
                    <td width="167" valign="top"><p align="center"><strong>Edad de aparición e integración</strong></p></td>
                    <td width="177" valign="top"><p align="center"><strong>Integrado </strong></p></td>
                    <td width="177" valign="top"><p align="center"><strong>No integrado </strong></p></td>
                </tr>
                <tr>
                    <td width="186" valign="top"><p>Marcha automática</p></td>
                    <td width="167" valign="top"><p align="center">0 a 12 meses</p></td>
                    <td width="177" valign="top"><p>
                            <input type="text" class="input_txt valid" id="marcha_1" name="marcha_1" value="<?php echo @$marcha_1; ?>" />
                        </p></td>
                    <td width="177" valign="top"><p>
                            <input type="text" class="input_txt valid" id="marcha_2" name="marcha_2" value="<?php echo @$marcha_2; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="186" valign="top"><p>Extensión cruzada</p></td>
                    <td width="167" valign="top"><p align="center">0 a 2 meses</p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="cruza_1" name="cruza_1" value="<?php echo @$cruza_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="cruza_2" name="cruza_2" value="<?php echo @$cruza_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="186" valign="top"><p>Retirada flexora</p></td>
                    <td width="167" valign="top"><p align="center">0 a 2 meses</p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="ret_flex_1" name="ret_flex_1" value="<?php echo @$ret_flex_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="ret_flex_2" name="ret_flex_2" value="<?php echo @$ret_flex_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="186" valign="top"><p>Retirada extensora</p></td>
                    <td width="167" valign="top"><p align="center">0 a 2 meses</p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="reti_ext_1" name="reti_ext_1" value="<?php echo @$reti_ext_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="reti_ext_2" name="reti_ext_2" value="<?php echo @$reti_ext_2; ?>" /></td>
                </tr>
            </table>
            <p><strong>TALLO</strong></p>
            <table  border="0" class="data" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="177" valign="top"><br />
                        <strong>Reflejo</strong> </td>
                    <td width="177" valign="top"><p align="center"><strong>Edad de aparición e integración</strong></p></td>
                    <td width="177" valign="top"><p align="center"><strong>Integrado </strong></p></td>
                    <td width="177" valign="top"><p align="center"><strong>No integrado </strong></p></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Tónico asimétrico de cuello</p></td>
                    <td width="177" valign="top"><p align="center">0 a 2-3 meses<strong></strong></p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="toni_1" name="toni_1" value="<?php echo @$toni_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="toni_2" name="toni_2" value="<?php echo @$toni_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Tónico simétrico de cuello</p></td>
                    <td width="177" valign="top"><p align="center">Patológico siempre</p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="tinisi_1" name="tinisi_1" value="<?php echo @$tinisi_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="tinisi_2" name="tinisi_2" value="<?php echo @$tinisi_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Prensión palmar</p></td>
                    <td width="177" valign="top"><p align="center">0 a 2-3 meses<strong></strong></p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="palmar_1" name="palmar_1" value="<?php echo @$palmar_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="palmar_2" name="palmar_2" value="<?php echo @$palmar_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Prensión plantar</p></td>
                    <td width="177" valign="top"><p align="center">0 a 12 meses<strong></strong></p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="plantar_1" name="plantar_1" value="<?php echo @$plantar_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="plantar_2" name="plantar_2" value="<?php echo @$plantar_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Apoyo Positivo</p></td>
                    <td width="177" valign="top"><p align="center">0 a 7 – 8 meses</p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="postivo_1" name="postivo_1" value="<?php echo @$postivo_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="positivo_2" name="positivo_2" value="<?php echo @$positivo_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Apoyo negativo</p></td>
                    <td width="177" valign="top"><p align="center">0 a 7 – 8 meses </p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="negativo_1" name="negativo_1" value="<?php echo @$negativo_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="negativo_2" name="negativo_2" value="<?php echo @$negativo_2; ?>" /></td>
                </tr>
            </table>
            <p><strong>MESENCÉFALO</strong></p>
            <table  border="0" class="data" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="177" valign="top"><br />
                        <strong>Reflejo</strong> </td>
                    <td width="177" valign="top"><p align="center"><strong>Edad de aparición e integración</strong></p></td>
                    <td width="177" valign="top"><p align="center"><strong>Integrado </strong></p></td>
                    <td width="177" valign="top"><p align="center"><strong>No integrado </strong></p></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Enderezamiento cuello sobre cuerpo</p></td>
                    <td width="177" valign="top"><p align="center">0 a 2 meses<strong></strong></p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="ende_1" name="ende_1" value="<?php echo @$ende_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="ende_2" name="ende_2" value="<?php echo @$ende_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Enderezamiento cuerpo sobre cuello</p></td>
                    <td width="177" valign="top"><p align="center">2 a 5 meses<strong></strong></p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="endecu_1" name="endecu_1" value="<?php echo @$endecu_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="endecu_2" name="endecu_2" value="<?php echo @$endecu_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Enderezamiento cuerpo sobre cuerpo</p></td>
                    <td width="177" valign="top"><p align="center">5 a 18 meses<strong></strong></p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="cuerpo_1" name="cuerpo_1" value="<?php echo @$cuerpo_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="cuerpo_2" name="cuerpo_2" value="<?php echo @$cuerpo_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Enderezamiento óptico</p></td>
                    <td width="177" valign="top"><p align="center">6 a 8 meses y perdura</p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="optico_1" name="optico_1" value="<?php echo @$optico_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="opctico_2" name="opctico_2" value="<?php echo @$opctico_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Enderezamiento laberintico supino</p></td>
                    <td width="177" valign="top"><p align="center">6 a 8 meses y perdura<strong></strong></p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="esupino_1" name="esupino_1" value="<?php echo @$esupino_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="esupino_2" name="esupino_2" value="<?php echo @$esupino_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Enderezamiento laberintico prono</p></td>
                    <td width="177" valign="top"><p align="center">6 a 8 meses y perdura<strong></strong></p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="eprono_1" name="eprono_1" value="<?php echo @$eprono_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="eprono_2" name="eprono_2" value="<?php echo @$eprono_2; ?>" /></td>
                </tr>
            </table>
            <p><strong>CORTICAL</strong></p>
            <table  border="0" class="data" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="177" valign="top"><br />
                        <strong>Reflejo</strong> </td>
                    <td width="177" valign="top"><p align="center"><strong>Edad de aparición e integración</strong></p></td>
                    <td width="177" valign="top"><p align="center"><strong>Integrado </strong></p></td>
                    <td width="177" valign="top"><p align="center"><strong>No integrado </strong></p></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Equilibrio en supino</p></td>
                    <td width="177" valign="top"><p align="center">4 a 5 meses y perdura<strong></strong></p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="cor_supino_1" name="cor_supino_1" value="<?php echo @$cor_supino_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="cor_supino_2" name="cor_supino_2" value="<?php echo @$cor_supino_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Equilibrio en prono<strong></strong></p></td>
                    <td width="177" valign="top"><p align="center">5 a 6 meses y perdura<strong></strong></p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="cor_prono_1" name="cor_prono_1" value="<?php echo @$cor_prono_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="cor_prono_2" name="cor_prono_2" value="<?php echo @$cor_prono_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Equilibrio en sedente<strong></strong></p></td>
                    <td width="177" valign="top"><p align="center">6 a 7 meses y perdura</p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="cor_sed_1" name="cor_sed_1" value="<?php echo @$cor_sed_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="cor_sed_2" name="cor_sed_2" value="<?php echo @$cor_sed_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Equilibrio en cuadrúpedo</p></td>
                    <td width="177" valign="top"><p align="center">10 a 11 meses y perdura<strong></strong></p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="cor_cuad_1" name="cor_cuad_1" value="<?php echo @$cor_cuad_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="cor_cuad_2" name="cor_cuad_2" value="<?php echo @$cor_cuad_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Equilibrio en arrodillado</p></td>
                    <td width="177" valign="top"><p align="center">10 a 11 meses y perdura<strong></strong></p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="cor_arrodilla_1" name="cor_arrodilla_1" value="<?php echo @$cor_arrodilla_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="cor_arrodilla_2" name="cor_arrodilla_2" value="<?php echo @$cor_arrodilla_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Equilibrio en bípedo<strong></strong></p></td>
                    <td width="177" valign="top"><p align="center">12 meses en adelante y    perdura</p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="cor_bipedo_1" name="cor_bipedo_1" value="<?php echo @$cor_bipedo_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="cor_bipedo_2" name="cor_bipedo_2" value="<?php echo @$cor_bipedo_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Brincos 1</p></td>
                    <td width="177" valign="top"><p>12 meses en adelante y perdura<strong></strong></p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="brin1_1" name="brin1_1" value="<?php echo @$brin1_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="brin1_2" name="brin1_2" value="<?php echo @$brin1_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Brincos 2</p></td>
                    <td width="177" valign="top"><p>12 meses en adelante y perdura<strong></strong></p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="brin2_1" name="brin2_1" value="<?php echo @$brin2_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="brin2_2" name="brin2_2" value="<?php echo @$brin2_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Brincos 3</p></td>
                    <td width="177" valign="top"><p>12 meses en adelante y perdura<strong></strong></p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="brin3_1" name="brin3_1" value="<?php echo @$brin3_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="brin3_2" name="brin3_2" value="<?php echo @$brin3_2; ?>" /></td>
                </tr>
            </table>
            <p><strong>NO CATALOGABLES Y REACCIONES AUTOMÁTICAS:</strong>&nbsp;</p>
            <table  border="0" class="data" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="177" valign="top"><br />
                        <strong>Reflejo</strong> </td>
                    <td width="177" valign="top"><p align="center"><strong>Edad de aparición y/o integración</strong></p></td>
                    <td width="177" valign="top"><p align="center"><strong>Presente  </strong></p></td>
                    <td width="177" valign="top"><p align="center"><strong>Ausente </strong></p></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Moro</p></td>
                    <td width="177" valign="top"><p align="center">0 a 2 – 3 meses<strong></strong></p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="moro_1" name="moro_1" value="<?php echo @$moro_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="moro_2" name="moro_2" value="<?php echo @$moro_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Alpinista </p></td>
                    <td width="177" valign="top"><p align="center">0 a 2 meses</p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="alpini_1" name="alpini_1" value="<?php echo @$alpini_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="alpini_2" name="alpini_2" value="<?php echo @$alpini_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Landau</p></td>
                    <td width="177" valign="top"><p align="center">4 a 24 - 30 meses</p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="n_landau_1" name="n_landau_1" value="<?php echo @$n_landau_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="n_landau_2" name="n_landau_2" value="<?php echo @$n_landau_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Galant</p></td>
                    <td width="177" valign="top"><p align="center">0 a 2 meses</p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="galan_1" name="galan_1" value="<?php echo @$galan_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="galan_2" name="galan_2" value="<?php echo @$galan_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Paracaídas anterior</p></td>
                    <td width="177" valign="top"><p align="center">6 meses</p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="para_1" name="para_1" value="<?php echo @$para_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="para_2" name="para_2" value="<?php echo @$para_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Paracaídas lateral<strong></strong></p></td>
                    <td width="177" valign="top"><p align="center">8 meses</p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="paral_1" name="paral_1" value="<?php echo @$paral_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="paral_2" name="paral_2" value="<?php echo @$paral_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Paracaídas posterior<strong></strong></p></td>
                    <td width="177" valign="top"><p align="center">10 meses</p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="parap_1" name="parap_1" value="<?php echo @$parap_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="parap_2" name="parap_2" value="<?php echo @$parap_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Reacciones asociadas</p></td>
                    <td width="177" valign="top"><p align="center">0 a 4 meses</p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="n_asos_1" name="n_asos_1" value="<?php echo @$n_asos_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="n_asos_2" name="n_asos_2" value="<?php echo @$n_asos_2; ?>" /></td>
                </tr>
                <tr>
                    <td width="177" valign="top"><p>Reacción anfibia</p></td>
                    <td width="177" valign="top"><p align="center">6 a 24 – 30 meses </p></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="n_anfibia_1" name="n_anfibia_1" value="<?php echo @$n_anfibia_1; ?>" /></td>
                    <td width="177" valign="top"><input type="text" class="input_txt valid" id="nanfibia_2" name="nanfibia_2" value="<?php echo @$nanfibia_2; ?>" /></td>
                </tr>
            </table>

            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>