<?php
if (isset($_REQUEST['guardar_h2_patrones_nino']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h2_patrones_nino'] == 'new') {

        $sql = "INSERT INTO h2_patrones_nino (
`id_h2_patrones_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`mc_f`,
`mc_sf`,
`mc_nf`,
`mb_f`,
`mb_sf`,
`mb_nf`,
`mcu_f`,
`mcu_sf`,
`mcu_nf`,
`mh_f`,
`mh_sf`,
`mh_nf`,
`me_f`,
`me_sf`,
`me_nf`,
`mp_f`,
`mp_sf`,
`mp_sn`,
`mpie_f`,
`mpie_sf`,
`mpie_nf`,
`ps_f`,
`ps_sf`,
`ps_nf`,
`pi_f`,
`pi_sf`,
`pi_nf`,
`pd_f`,
`pd_sf`,
`pd_nf`,
`pdi_f`,
`pdi_sf`,
`pdi_nf`,
`llena_f`,
`llena_sf`,
`llena_nf`,
`cil_f`,
`cil_sf`,
`cil_nf`,
`enga_f`,
`enga_sf`,
`enga_nf`,
`fina_f`,
`fina_sf`,
`fina_nf`,
`trip_f`,
`trip_sf`,
`trip_nf`,
`lat_f`,
`lat_sf`,
`lat_nf`,
`opo_f`,
`opo_sf`,
`opo_nf`,
`apo_f`,
`apo_sf`,
`apo_nf`,
`atra_f`,
`atra_sf`,
`atra_nf`,
`vol_f`,
`vol_sf`,
`vol_nf`,
`invo_f`,
`invo_sf`,
`invo_nf`,
`pat_f`,
`pat_sf`,
`pat_nf`,
`rud_f`,
`rud_sf`,
`rud_nf`,
`dir_f`,
`dir_sf`,
`dir_nf`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`patro_obser1`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['mc_f'] . "' ,
'" . $_REQUEST['mc_sf'] . "' ,
'" . $_REQUEST['mc_nf'] . "' ,
'" . $_REQUEST['mb_f'] . "' ,
'" . $_REQUEST['mb_sf'] . "' ,
'" . $_REQUEST['mb_nf'] . "' ,
'" . $_REQUEST['mcu_f'] . "' ,
'" . $_REQUEST['mcu_sf'] . "' ,
'" . $_REQUEST['mcu_nf'] . "' ,
'" . $_REQUEST['mh_f'] . "' ,
'" . $_REQUEST['mh_sf'] . "' ,
'" . $_REQUEST['mh_nf'] . "' ,
'" . $_REQUEST['me_f'] . "' ,
'" . $_REQUEST['me_sf'] . "' ,
'" . $_REQUEST['me_nf'] . "' ,
'" . $_REQUEST['mp_f'] . "' ,
'" . $_REQUEST['mp_sf'] . "' ,
'" . $_REQUEST['mp_sn'] . "' ,
'" . $_REQUEST['mpie_f'] . "' ,
'" . $_REQUEST['mpie_sf'] . "' ,
'" . $_REQUEST['mpie_nf'] . "' ,
'" . $_REQUEST['ps_f'] . "' ,
'" . $_REQUEST['ps_sf'] . "' ,
'" . $_REQUEST['ps_nf'] . "' ,
'" . $_REQUEST['pi_f'] . "' ,
'" . $_REQUEST['pi_sf'] . "' ,
'" . $_REQUEST['pi_nf'] . "' ,
'" . $_REQUEST['pd_f'] . "' ,
'" . $_REQUEST['pd_sf'] . "' ,
'" . $_REQUEST['pd_nf'] . "' ,
'" . $_REQUEST['pdi_f'] . "' ,
'" . $_REQUEST['pdi_sf'] . "' ,
'" . $_REQUEST['pdi_nf'] . "' ,
'" . $_REQUEST['llena_f'] . "' ,
'" . $_REQUEST['llena_sf'] . "' ,
'" . $_REQUEST['llena_nf'] . "' ,
'" . $_REQUEST['cil_f'] . "' ,
'" . $_REQUEST['cil_sf'] . "' ,
'" . $_REQUEST['cil_nf'] . "' ,
'" . $_REQUEST['enga_f'] . "' ,
'" . $_REQUEST['enga_sf'] . "' ,
'" . $_REQUEST['enga_nf'] . "' ,
'" . $_REQUEST['fina_f'] . "' ,
'" . $_REQUEST['fina_sf'] . "' ,
'" . $_REQUEST['fina_nf'] . "' ,
'" . $_REQUEST['trip_f'] . "' ,
'" . $_REQUEST['trip_sf'] . "' ,
'" . $_REQUEST['trip_nf'] . "' ,
'" . $_REQUEST['lat_f'] . "' ,
'" . $_REQUEST['lat_sf'] . "' ,
'" . $_REQUEST['lat_nf'] . "' ,
'" . $_REQUEST['opo_f'] . "' ,
'" . $_REQUEST['opo_sf'] . "' ,
'" . $_REQUEST['opo_nf'] . "' ,
'" . $_REQUEST['apo_f'] . "' ,
'" . $_REQUEST['apo_sf'] . "' ,
'" . $_REQUEST['apo_nf'] . "' ,
'" . $_REQUEST['atra_f'] . "' ,
'" . $_REQUEST['atra_sf'] . "' ,
'" . $_REQUEST['atra_nf'] . "' ,
'" . $_REQUEST['vol_f'] . "' ,
'" . $_REQUEST['vol_sf'] . "' ,
'" . $_REQUEST['vol_nf'] . "' ,
'" . $_REQUEST['invo_f'] . "' ,
'" . $_REQUEST['invo_sf'] . "' ,
'" . $_REQUEST['invo_nf'] . "' ,
'" . $_REQUEST['pat_f'] . "' ,
'" . $_REQUEST['pat_sf'] . "' ,
'" . $_REQUEST['pat_nf'] . "' ,
'" . $_REQUEST['rud_f'] . "' ,
'" . $_REQUEST['rud_sf'] . "' ,
'" . $_REQUEST['rud_nf'] . "' ,
'" . $_REQUEST['dir_f'] . "' ,
'" . $_REQUEST['dir_sf'] . "' ,
'" . $_REQUEST['dir_nf'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['patro_obser1'] . "' 
) ";
    } else if ($_REQUEST['id_h2_patrones_nino'] != '') {

        $sql = "UPDATE h2_patrones_nino set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`mc_f` = '" . $_REQUEST['mc_f'] . "' ,
`mc_sf` = '" . $_REQUEST['mc_sf'] . "' ,
`mc_nf` = '" . $_REQUEST['mc_nf'] . "' ,
`mb_f` = '" . $_REQUEST['mb_f'] . "' ,
`mb_sf` = '" . $_REQUEST['mb_sf'] . "' ,
`mb_nf` = '" . $_REQUEST['mb_nf'] . "' ,
`mcu_f` = '" . $_REQUEST['mcu_f'] . "' ,
`mcu_sf` = '" . $_REQUEST['mcu_sf'] . "' ,
`mcu_nf` = '" . $_REQUEST['mcu_nf'] . "' ,
`mh_f` = '" . $_REQUEST['mh_f'] . "' ,
`mh_sf` = '" . $_REQUEST['mh_sf'] . "' ,
`mh_nf` = '" . $_REQUEST['mh_nf'] . "' ,
`me_f` = '" . $_REQUEST['me_f'] . "' ,
`me_sf` = '" . $_REQUEST['me_sf'] . "' ,
`me_nf` = '" . $_REQUEST['me_nf'] . "' ,
`mp_f` = '" . $_REQUEST['mp_f'] . "' ,
`mp_sf` = '" . $_REQUEST['mp_sf'] . "' ,
`mp_sn` = '" . $_REQUEST['mp_sn'] . "' ,
`mpie_f` = '" . $_REQUEST['mpie_f'] . "' ,
`mpie_sf` = '" . $_REQUEST['mpie_sf'] . "' ,
`mpie_nf` = '" . $_REQUEST['mpie_nf'] . "' ,
`ps_f` = '" . $_REQUEST['ps_f'] . "' ,
`ps_sf` = '" . $_REQUEST['ps_sf'] . "' ,
`ps_nf` = '" . $_REQUEST['ps_nf'] . "' ,
`pi_f` = '" . $_REQUEST['pi_f'] . "' ,
`pi_sf` = '" . $_REQUEST['pi_sf'] . "' ,
`pi_nf` = '" . $_REQUEST['pi_nf'] . "' ,
`pd_f` = '" . $_REQUEST['pd_f'] . "' ,
`pd_sf` = '" . $_REQUEST['pd_sf'] . "' ,
`pd_nf` = '" . $_REQUEST['pd_nf'] . "' ,
`pdi_f` = '" . $_REQUEST['pdi_f'] . "' ,
`pdi_sf` = '" . $_REQUEST['pdi_sf'] . "' ,
`pdi_nf` = '" . $_REQUEST['pdi_nf'] . "' ,
`llena_f` = '" . $_REQUEST['llena_f'] . "' ,
`llena_sf` = '" . $_REQUEST['llena_sf'] . "' ,
`llena_nf` = '" . $_REQUEST['llena_nf'] . "' ,
`cil_f` = '" . $_REQUEST['cil_f'] . "' ,
`cil_sf` = '" . $_REQUEST['cil_sf'] . "' ,
`cil_nf` = '" . $_REQUEST['cil_nf'] . "' ,
`enga_f` = '" . $_REQUEST['enga_f'] . "' ,
`enga_sf` = '" . $_REQUEST['enga_sf'] . "' ,
`enga_nf` = '" . $_REQUEST['enga_nf'] . "' ,
`fina_f` = '" . $_REQUEST['fina_f'] . "' ,
`fina_sf` = '" . $_REQUEST['fina_sf'] . "' ,
`fina_nf` = '" . $_REQUEST['fina_nf'] . "' ,
`trip_f` = '" . $_REQUEST['trip_f'] . "' ,
`trip_sf` = '" . $_REQUEST['trip_sf'] . "' ,
`trip_nf` = '" . $_REQUEST['trip_nf'] . "' ,
`lat_f` = '" . $_REQUEST['lat_f'] . "' ,
`lat_sf` = '" . $_REQUEST['lat_sf'] . "' ,
`lat_nf` = '" . $_REQUEST['lat_nf'] . "' ,
`opo_f` = '" . $_REQUEST['opo_f'] . "' ,
`opo_sf` = '" . $_REQUEST['opo_sf'] . "' ,
`opo_nf` = '" . $_REQUEST['opo_nf'] . "' ,
`apo_f` = '" . $_REQUEST['apo_f'] . "' ,
`apo_sf` = '" . $_REQUEST['apo_sf'] . "' ,
`apo_nf` = '" . $_REQUEST['apo_nf'] . "' ,
`atra_f` = '" . $_REQUEST['atra_f'] . "' ,
`atra_sf` = '" . $_REQUEST['atra_sf'] . "' ,
`atra_nf` = '" . $_REQUEST['atra_nf'] . "' ,
`vol_f` = '" . $_REQUEST['vol_f'] . "' ,
`vol_sf` = '" . $_REQUEST['vol_sf'] . "' ,
`vol_nf` = '" . $_REQUEST['vol_nf'] . "' ,
`invo_f` = '" . $_REQUEST['invo_f'] . "' ,
`invo_sf` = '" . $_REQUEST['invo_sf'] . "' ,
`invo_nf` = '" . $_REQUEST['invo_nf'] . "' ,
`pat_f` = '" . $_REQUEST['pat_f'] . "' ,
`pat_sf` = '" . $_REQUEST['pat_sf'] . "' ,
`pat_nf` = '" . $_REQUEST['pat_nf'] . "' ,
`rud_f` = '" . $_REQUEST['rud_f'] . "' ,
`rud_sf` = '" . $_REQUEST['rud_sf'] . "' ,
`rud_nf` = '" . $_REQUEST['rud_nf'] . "' ,
`dir_f` = '" . $_REQUEST['dir_f'] . "' ,
`dir_sf` = '" . $_REQUEST['dir_sf'] . "' ,
`dir_nf` = '" . $_REQUEST['dir_nf'] . "' ,
`patro_obser1` = '" . $_REQUEST['patro_obser1'] . "'  WHERE `id_h2_patrones_nino` = '" . $_REQUEST['id_h2_patrones_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h2_patrones_nino = 'new';
$sql = "SELECT * from h2_patrones_nino WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h2_patrones_nino = $row['id_h2_patrones_nino'];

    $mc_f = $row['mc_f'];
    $mc_sf = $row['mc_sf'];
    $mc_nf = $row['mc_nf'];
    $mb_f = $row['mb_f'];
    $mb_sf = $row['mb_sf'];
    $mb_nf = $row['mb_nf'];
    $mcu_f = $row['mcu_f'];
    $mcu_sf = $row['mcu_sf'];
    $mcu_nf = $row['mcu_nf'];
    $mh_f = $row['mh_f'];
    $mh_sf = $row['mh_sf'];
    $mh_nf = $row['mh_nf'];
    $me_f = $row['me_f'];
    $me_sf = $row['me_sf'];
    $me_nf = $row['me_nf'];
    $mp_f = $row['mp_f'];
    $mp_sf = $row['mp_sf'];
    $mp_sn = $row['mp_sn'];
    $mpie_f = $row['mpie_f'];
    $mpie_sf = $row['mpie_sf'];
    $mpie_nf = $row['mpie_nf'];
    $ps_f = $row['ps_f'];
    $ps_sf = $row['ps_sf'];
    $ps_nf = $row['ps_nf'];
    $pi_f = $row['pi_f'];
    $pi_sf = $row['pi_sf'];
    $pi_nf = $row['pi_nf'];
    $pd_f = $row['pd_f'];
    $pd_sf = $row['pd_sf'];
    $pd_nf = $row['pd_nf'];
    $pdi_f = $row['pdi_f'];
    $pdi_sf = $row['pdi_sf'];
    $pdi_nf = $row['pdi_nf'];
    $llena_f = $row['llena_f'];
    $llena_sf = $row['llena_sf'];
    $llena_nf = $row['llena_nf'];
    $cil_f = $row['cil_f'];
    $cil_sf = $row['cil_sf'];
    $cil_nf = $row['cil_nf'];
    $enga_f = $row['enga_f'];
    $enga_sf = $row['enga_sf'];
    $enga_nf = $row['enga_nf'];
    $fina_f = $row['fina_f'];
    $fina_sf = $row['fina_sf'];
    $fina_nf = $row['fina_nf'];
    $trip_f = $row['trip_f'];
    $trip_sf = $row['trip_sf'];
    $trip_nf = $row['trip_nf'];
    $lat_f = $row['lat_f'];
    $lat_sf = $row['lat_sf'];
    $lat_nf = $row['lat_nf'];
    $opo_f = $row['opo_f'];
    $opo_sf = $row['opo_sf'];
    $opo_nf = $row['opo_nf'];
    $apo_f = $row['apo_f'];
    $apo_sf = $row['apo_sf'];
    $apo_nf = $row['apo_nf'];
    $atra_f = $row['atra_f'];
    $atra_sf = $row['atra_sf'];
    $atra_nf = $row['atra_nf'];
    $vol_f = $row['vol_f'];
    $vol_sf = $row['vol_sf'];
    $vol_nf = $row['vol_nf'];
    $invo_f = $row['invo_f'];
    $invo_sf = $row['invo_sf'];
    $invo_nf = $row['invo_nf'];
    $pat_f = $row['pat_f'];
    $pat_sf = $row['pat_sf'];
    $pat_nf = $row['pat_nf'];
    $rud_f = $row['rud_f'];
    $rud_sf = $row['rud_sf'];
    $rud_nf = $row['rud_nf'];
    $dir_f = $row['dir_f'];
    $dir_sf = $row['dir_sf'];
    $dir_nf = $row['dir_nf'];
    $patro_obser1 = $row['patro_obser1'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h2_patrones_nino").click(function() {
            $("#open-h2_patrones_nino").show();
            $(this).hide();
            $("#content-h2_patrones_nino").hide('slow');
        });

        $("#open-h2_patrones_nino").click(function() {
            $("#close-h2_patrones_nino").show();
            $(this).hide();
            $("#content-h2_patrones_nino").show('slow');
        });

    });

</script>
<fieldset id="h2_patrones_nino">
    <legend align="left"> <div class="arrow-c" id="close-h2_patrones_nino"></div> <div class="arrow-o" id="open-h2_patrones_nino" ></div> <font>Valoracion terapia ocupacional de neurodesarrollo - Patrones</font></legend>
    <div id="content-h2_patrones_nino">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h2_patrones_nino" id="guardar_h2_patrones_nino" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h2_patrones_nino" name="form_h2_patrones_nino" action="<?php echo @$action_form_h2_patrones_nino ?>#h2_patrones_nino" method="post">

            <input type="hidden" id="id_h2_patrones_nino" name="id_h2_patrones_nino" value="<?php echo @$id_h2_patrones_nino ?>" />



            <input type="hidden" class="input_txt valid" id="id_h2_patrones_nino" name="id_h2_patrones_nino" value="<?php echo @$id_h2_patrones_nino; ?>" />

            <p><strong> PATRONES FUNCIONALES DE MOVIMIENTO</strong></p>
            <table  border="0" class="data" cellspacing="0" cellpadding="0" width="850">
                <tr>
                    <td width="228" valign="top"><p align="center"><strong>PATRONES</strong></p></td>
                    <td width="203" valign="top"><p align="center"><strong>F</strong></p></td>
                    <td width="231" valign="top"><p align="center"><strong>SF</strong></p></td>
                    <td width="178" valign="top"><p align="center"><strong>NF</strong></p></td>
                </tr>
                <tr>
                    <td width="228" valign="top"><p>Mano- cabeza</p></td>
                    <td width="203" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="mc_f" name="mc_f" value="<?php echo @$mc_f; ?>" />
                                &nbsp;</strong></p></td>
                    <td width="231" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="mc_sf" name="mc_sf" value="<?php echo @$mc_sf; ?>" />
                        </p></td>
                    <td width="178" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="mc_nf" name="mc_nf" value="<?php echo @$mc_nf; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="228" valign="top">Mano-boca </td>
                    <td width="203" valign="top"><p align="center"><input type="text" class="input_txt valid" id="mb_f" name="mb_f" value="<?php echo @$mb_f; ?>" />
                        </p></td>
                    <td width="231" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="mb_sf" name="mb_sf" value="<?php echo @$mb_sf; ?>" />
                        </p></td>
                    <td width="178" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="mb_nf" name="mb_nf" value="<?php echo @$mb_nf; ?>" />
                                &nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="228" valign="top"><p>Mano-cuello</p></td>
                    <td width="203" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="mcu_f" name="mcu_f" value="<?php echo @$mcu_f; ?>" />
                                &nbsp;</strong></p></td>
                    <td width="231" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="mcu_sf" name="mcu_sf" value="<?php echo @$mcu_sf; ?>" />
                        </p></td>
                    <td width="178" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="mcu_nf" name="mcu_nf" value="<?php echo @$mcu_nf; ?>" />
                                &nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="228" valign="top"><p>Mano-hombro</p></td>
                    <td width="203" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="mh_f" name="mh_f" value="<?php echo @$mh_f; ?>" />
                                &nbsp;</strong></p></td>
                    <td width="231" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="mh_sf" name="mh_sf" value="<?php echo @$mh_sf; ?>" />
                        </p></td>
                    <td width="178" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="mh_nf" name="mh_nf" value="<?php echo @$mh_nf; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="228" valign="top"><p>Mano-espalda</p></td>
                    <td width="203" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="me_f" name="me_f" value="<?php echo @$me_f; ?>" />
                        </p></td>
                    <td width="231" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="me_sf" name="me_sf" value="<?php echo @$me_sf; ?>" />
                        </p></td>
                    <td width="178" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="me_nf" name="me_nf" value="<?php echo @$me_nf; ?>" />
                                &nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="228" valign="top"><p>Mano-pierna</p></td>
                    <td width="203" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="mp_f" name="mp_f" value="<?php echo @$mp_f; ?>" />
                                &nbsp;</strong></p></td>
                    <td width="231" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="mp_sf" name="mp_sf" value="<?php echo @$mp_sf; ?>" />
                        </p></td>
                    <td width="178" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="mp_sn" name="mp_sn" value="<?php echo @$mp_sn; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="228" valign="top"><p>Mano-pie</p></td>
                    <td width="203" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="mpie_f" name="mpie_f" value="<?php echo @$mpie_f; ?>" />
                                &nbsp;</strong></p></td>
                    <td width="231" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="mpie_sf" name="mpie_sf" value="<?php echo @$mpie_sf; ?>" />
                        </p></td>
                    <td width="178" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="mpie_nf" name="mpie_nf" value="<?php echo @$mpie_nf; ?>" />
                        </p></td>
                </tr>
            </table>
            <p><strong>PATRONES  INTEGRALES DE MOVIMIENTO</strong></p>
            <table  border="0" class="data" cellspacing="0" cellpadding="0" width="795">
                <tr>
                    <td width="390" valign="top"><p align="center"><strong>PATRONES</strong></p></td>
                    <td width="135" valign="top"><p align="center"><strong>F</strong></p></td>
                    <td width="150" valign="top"><p align="center"><strong>SF</strong></p></td>
                    <td width="120" valign="top"><p align="center"><strong>NF</strong></p></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Alcance en plano superior </p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="ps_f" name="ps_f" value="<?php echo @$ps_f; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="ps_sf" name="ps_sf" value="<?php echo @$ps_sf; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="ps_nf" name="ps_nf" value="<?php echo @$ps_nf; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Alcance en plano inferior</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="pi_f" name="pi_f" value="<?php echo @$pi_f; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="pi_sf" name="pi_sf" value="<?php echo @$pi_sf; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="pi_nf" name="pi_nf" value="<?php echo @$pi_nf; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Alcance plano lateral derecho</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="pd_f" name="pd_f" value="<?php echo @$pd_f; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="pd_sf" name="pd_sf" value="<?php echo @$pd_sf; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="pd_nf" name="pd_nf" value="<?php echo @$pd_nf; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Alcance plano diagonal</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="pdi_f" name="pdi_f" value="<?php echo @$pdi_f; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="pdi_sf" name="pdi_sf" value="<?php echo @$pdi_sf; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="pdi_nf" name="pdi_nf" value="<?php echo @$pdi_nf; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Agarre a mano llena</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="llena_f" name="llena_f" value="<?php echo @$llena_f; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="llena_sf" name="llena_sf" value="<?php echo @$llena_sf; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="llena_nf" name="llena_nf" value="<?php echo @$llena_nf; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Agarre cilíndrico</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="cil_f" name="cil_f" value="<?php echo @$cil_f; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="cil_sf" name="cil_sf" value="<?php echo @$cil_sf; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="cil_nf" name="cil_nf" value="<?php echo @$cil_nf; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Enganche</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="enga_f" name="enga_f" value="<?php echo @$enga_f; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="enga_sf" name="enga_sf" value="<?php echo @$enga_sf; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="enga_nf" name="enga_nf" value="<?php echo @$enga_nf; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Pinza fina</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="fina_f" name="fina_f" value="<?php echo @$fina_f; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="fina_sf" name="fina_sf" value="<?php echo @$fina_sf; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="fina_nf" name="fina_nf" value="<?php echo @$fina_nf; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Pinza trípode</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="trip_f" name="trip_f" value="<?php echo @$trip_f; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="trip_sf" name="trip_sf" value="<?php echo @$trip_sf; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="trip_nf" name="trip_nf" value="<?php echo @$trip_nf; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Pinza lateral</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="lat_f" name="lat_f" value="<?php echo @$lat_f; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="lat_sf" name="lat_sf" value="<?php echo @$lat_sf; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="lat_nf" name="lat_nf" value="<?php echo @$lat_nf; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Oposición</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="opo_f" name="opo_f" value="<?php echo @$opo_f; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="opo_sf" name="opo_sf" value="<?php echo @$opo_sf; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="opo_nf" name="opo_nf" value="<?php echo @$opo_nf; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Aposicion</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="apo_f" name="apo_f" value="<?php echo @$apo_f; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="apo_sf" name="apo_sf" value="<?php echo @$apo_sf; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="apo_nf" name="apo_nf" value="<?php echo @$apo_nf; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Atrapar</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="atra_f" name="atra_f" value="<?php echo @$atra_f; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="atra_sf" name="atra_sf" value="<?php echo @$atra_sf; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="atra_nf" name="atra_nf" value="<?php echo @$atra_nf; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Soltar voluntario</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="vol_f" name="vol_f" value="<?php echo @$vol_f; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="vol_sf" name="vol_sf" value="<?php echo @$vol_sf; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="vol_nf" name="vol_nf" value="<?php echo @$vol_nf; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Soltar involuntario</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="invo_f" name="invo_f" value="<?php echo @$invo_f; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="invo_sf" name="invo_sf" value="<?php echo @$invo_sf; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="invo_nf" name="invo_nf" value="<?php echo @$invo_nf; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Patear</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="pat_f" name="pat_f" value="<?php echo @$pat_f; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="pat_sf" name="pat_sf" value="<?php echo @$pat_sf; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="pat_nf" name="pat_nf" value="<?php echo @$pat_nf; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Lanzar rudimentario</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="rud_f" name="rud_f" value="<?php echo @$rud_f; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="rud_sf" name="rud_sf" value="<?php echo @$rud_sf; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="rud_nf" name="rud_nf" value="<?php echo @$rud_nf; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Lanzar con direccionalidad</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="dir_f" name="dir_f" value="<?php echo @$dir_f; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="dir_sf" name="dir_sf" value="<?php echo @$dir_sf; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="dir_nf" name="dir_nf" value="<?php echo @$dir_nf; ?>" /></td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <p><strong>OBSERVACIONES GENERALES: </strong>
                <input type="text" class="input_txt valid" id="patro_obser1" name="patro_obser1" value="<?php echo @$patro_obser1; ?>" />
                <br>
                <?php echo @$button ?>
        </form>
    </div>
</fieldset>