<?php
if (isset($_REQUEST['guardar_h2_terapia_neuro_nino1']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h2_terapia_neuro_nino'] == 'new') {

        $sql = "INSERT INTO h2_terapia_neuro_nino (
`id_h2_terapia_neuro_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`t_lenguaje`,
`t_fisica`,
`t_ocupacional`,
`otros`,
`prenatales`,
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
`visual_oserva`,
`pre_pal`,
`retirada`,
`cruzada`,
`tonico`,
`defensivo_pro`,
`prension_plant`,
`extension_on`,
`on_moro`,
`landau`,
`paracaidas`,
`busqueda`,
`on_flexion_1`,
`nucal_asi`,
`patro_marcha`,
`on_succion`,
`babinsky`,
`nucal_sime`,
`on_dorsifl`,
`reac_pos`,
`def_pos_cuadru`,
`reac_anfibia`,
`on_arrodi`,
`on_simismo`,
`cab_sup_lat`,
`def_sedente`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`laberitnico_cabeza`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['t_lenguaje'] . "' ,
'" . $_REQUEST['t_fisica'] . "' ,
'" . $_REQUEST['t_ocupacional'] . "' ,
'" . $_REQUEST['otros'] . "' ,
'" . $_REQUEST['prenatales'] . "' ,
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
'" . $_REQUEST['visual_oserva'] . "' ,
'" . $_REQUEST['pre_pal'] . "' ,
'" . $_REQUEST['retirada'] . "' ,
'" . $_REQUEST['cruzada'] . "' ,
'" . $_REQUEST['tonico'] . "' ,
'" . $_REQUEST['defensivo_pro'] . "' ,
'" . $_REQUEST['prension_plant'] . "' ,
'" . $_REQUEST['extension_on'] . "' ,
'" . $_REQUEST['on_moro'] . "' ,
'" . $_REQUEST['landau'] . "' ,
'" . $_REQUEST['paracaidas'] . "' ,
'" . $_REQUEST['busqueda'] . "' ,
'" . $_REQUEST['on_flexion_1'] . "' ,
'" . $_REQUEST['nucal_asi'] . "' ,
'" . $_REQUEST['patro_marcha'] . "' ,
'" . $_REQUEST['on_succion'] . "' ,
'" . $_REQUEST['babinsky'] . "' ,
'" . $_REQUEST['nucal_sime'] . "' ,
'" . $_REQUEST['on_dorsifl'] . "' ,
'" . $_REQUEST['reac_pos'] . "' ,
'" . $_REQUEST['def_pos_cuadru'] . "' ,
'" . $_REQUEST['reac_anfibia'] . "' ,
'" . $_REQUEST['on_arrodi'] . "' ,
'" . $_REQUEST['on_simismo'] . "' ,
'" . $_REQUEST['cab_sup_lat'] . "' ,
'" . $_REQUEST['def_sedente'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['laberitnico_cabeza'] . "'
) ";
    } else if ($_REQUEST['id_h2_terapia_neuro_nino'] != '') {

        $sql = "UPDATE h2_terapia_neuro_nino set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`t_lenguaje` = '" . $_REQUEST['t_lenguaje'] . "' ,
`t_fisica` = '" . $_REQUEST['t_fisica'] . "' ,
`t_ocupacional` = '" . $_REQUEST['t_ocupacional'] . "' ,
`otros` = '" . $_REQUEST['otros'] . "' ,
`prenatales` = '" . $_REQUEST['prenatales'] . "' ,
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
`visual_oserva` = '" . $_REQUEST['visual_oserva'] . "' ,
`pre_pal` = '" . $_REQUEST['pre_pal'] . "' ,
`retirada` = '" . $_REQUEST['retirada'] . "' ,
`cruzada` = '" . $_REQUEST['cruzada'] . "' ,
`tonico` = '" . $_REQUEST['tonico'] . "' ,
`defensivo_pro` = '" . $_REQUEST['defensivo_pro'] . "' ,
`prension_plant` = '" . $_REQUEST['prension_plant'] . "' ,
`extension_on` = '" . $_REQUEST['extension_on'] . "' ,
`on_moro` = '" . $_REQUEST['on_moro'] . "' ,
`landau` = '" . $_REQUEST['landau'] . "' ,
`paracaidas` = '" . $_REQUEST['paracaidas'] . "' ,
`busqueda` = '" . $_REQUEST['busqueda'] . "' ,
`on_flexion_1` = '" . $_REQUEST['on_flexion_1'] . "' ,
`nucal_asi` = '" . $_REQUEST['nucal_asi'] . "' ,
`patro_marcha` = '" . $_REQUEST['patro_marcha'] . "' ,
`on_succion` = '" . $_REQUEST['on_succion'] . "' ,
`babinsky` = '" . $_REQUEST['babinsky'] . "' ,
`nucal_sime` = '" . $_REQUEST['nucal_sime'] . "' ,
`on_dorsifl` = '" . $_REQUEST['on_dorsifl'] . "' ,
`reac_pos` = '" . $_REQUEST['reac_pos'] . "' ,
`def_pos_cuadru` = '" . $_REQUEST['def_pos_cuadru'] . "' ,
`reac_anfibia` = '" . $_REQUEST['reac_anfibia'] . "' ,
`on_arrodi` = '" . $_REQUEST['on_arrodi'] . "' ,
`on_simismo` = '" . $_REQUEST['on_simismo'] . "' ,
`cab_sup_lat` = '" . $_REQUEST['cab_sup_lat'] . "' ,
`def_sedente` = '" . $_REQUEST['def_sedente'] . "' ,
`laberitnico_cabeza` = '" . $_REQUEST['laberitnico_cabeza'] . "' WHERE `id_h2_terapia_neuro_nino` = '" . $_REQUEST['id_h2_terapia_neuro_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h2_terapia_neuro_nino = 'new';
$sql = "SELECT * from h2_terapia_neuro_nino WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h2_terapia_neuro_nino = $row['id_h2_terapia_neuro_nino'];

    $t_lenguaje = $row['t_lenguaje'];
    $t_fisica = $row['t_fisica'];
    $t_ocupacional = $row['t_ocupacional'];
    $otros = $row['otros'];
    $prenatales = $row['prenatales'];
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
    $pre_pal = $row['pre_pal'];
    $retirada = $row['retirada'];
    $cruzada = $row['cruzada'];
    $tonico = $row['tonico'];
    $defensivo_pro = $row['defensivo_pro'];
    $prension_plant = $row['prension_plant'];
    $extension_on = $row['extension_on'];
    $on_moro = $row['on_moro'];
    $landau = $row['landau'];
    $paracaidas = $row['paracaidas'];
    $busqueda = $row['busqueda'];
    $on_flexion_1 = $row['on_flexion_1'];
    $nucal_asi = $row['nucal_asi'];
    $patro_marcha = $row['patro_marcha'];
    $on_succion = $row['on_succion'];
    $babinsky = $row['babinsky'];
    $nucal_sime = $row['nucal_sime'];
    $on_dorsifl = $row['on_dorsifl'];
    $reac_pos = $row['reac_pos'];
    $def_pos_cuadru = $row['def_pos_cuadru'];
    $reac_anfibia = $row['reac_anfibia'];
    $on_arrodi = $row['on_arrodi'];
    $on_simismo = $row['on_simismo'];
    $cab_sup_lat = $row['cab_sup_lat'];
    $def_sedente = $row['def_sedente'];
    $laberitnico_cabeza = $row['laberitnico_cabeza'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h2_terapia_neuro_nino1").click(function() {
            $("#open-h2_terapia_neuro_nino1").show();
            $(this).hide();
            $("#content-h2_terapia_neuro_nino1").hide('slow');
        });

        $("#open-h2_terapia_neuro_nino1").click(function() {
            $("#close-h2_terapia_neuro_nino1").show();
            $(this).hide();
            $("#content-h2_terapia_neuro_nino1").show('slow');
        });

    });

</script>
<fieldset id="h2_terapia_neuro_nino1">
    <legend align="left"> <div class="arrow-c" id="close-h2_terapia_neuro_nino1"></div> <div class="arrow-o" id="open-h2_terapia_neuro_nino1" ></div> <font>Valoracion terapia ocupacional de neurodesarrollo - Observaciones neuromusculares</font></legend>
    <div id="content-h2_terapia_neuro_nino1">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h2_terapia_neuro_nino1" id="guardar_h2_terapia_neuro_nino1" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h2_terapia_neuro_nino1" name="form_h2_terapia_neuro_nino1" action="<?php echo @$action_form_h2_terapia_neuro_nino1 ?>#h2_terapia_neuro_nino1" method="post">

            <input type="hidden" id="id_h2_terapia_neuro_nino" name="id_h2_terapia_neuro_nino" value="<?php echo @$id_h2_terapia_neuro_nino ?>" />

            <div>

                <p align="center">
                    Actividad Refleja.         <br />
                    P  ( Presente)     A ( Ausente)      I ( Integrado)</p>
                <p align="left"><br />
                    Prensión palmar.
                    <input type="text" class="input_txt valid" id="pre_pal" name="pre_pal" value="<?php echo @$pre_pal; ?>" />
                               Retirada:
                    <input type="text" class="input_txt valid" id="retirada" name="retirada" value="<?php echo @$retirada; ?>" />
                                 Cruzada:
                    <input type="text" class="input_txt valid" id="cruzada" name="cruzada" value="<?php echo @$cruzada; ?>" />
                    Tónico  laberíntico:
                    <input type="text" class="input_txt valid" id="tonico" name="tonico" value="<?php echo @$tonico; ?>" />
                          Defensivo en Prono:
                    <input type="text" class="input_txt valid" id="defensivo_pro" name="defensivo_pro" value="<?php echo @$defensivo_pro; ?>" />
                    <br />
                    Prensión plantar.
                    <input type="text" class="input_txt valid" id="prension_plant" name="prension_plant" value="<?php echo @$prension_plant; ?>" />          
                    Extensión:
                    <input type="text" class="input_txt valid" id="extension_on" name="extension_on" value="<?php echo @$extension_on; ?>" />
                                Moro:
                    <input type="text" class="input_txt valid" id="on_moro" name="on_moro" value="<?php echo @$on_moro; ?>" />
                    Landau:
                    <input type="text" class="input_txt valid" id="landau" name="landau" value="<?php echo @$landau; ?>" />
                               Paracaidista:
                    <input type="text" class="input_txt valid" id="paracaidas" name="paracaidas" value="<?php echo @$paracaidas; ?>" />                                   
                    <br />
                    Búsqueda:
                    <input type="text" class="input_txt valid" id="busqueda" name="busqueda" value="<?php echo @$busqueda; ?>" />   
                    Flexión:
                    <input type="text" class="input_txt valid" id="on_flexion_1" name="on_flexion_1" value="<?php echo @$on_flexion_1; ?>" />   
                    Tónico  Nucal Asimétrico:
                    <input type="text" class="input_txt valid" id="nucal_asi" name="nucal_asi" value="<?php echo @$nucal_asi; ?>" />
                    Patrón  Marcha:
                    <input type="text" class="input_txt valid" id="patro_marcha" name="patro_marcha" value="<?php echo @$patro_marcha; ?>" />
                    <br />
                    Succión:
                    <input type="text" class="input_txt valid" id="on_succion" name="on_succion" value="<?php echo @$on_succion; ?>" />
                          
                    Babinsky:
                    <input type="text" class="input_txt valid" id="babinsky" name="babinsky" value="<?php echo @$babinsky; ?>" />
                      
                    Tónico Nucal Simétrico:
                    <input type="text" class="input_txt valid" id="nucal_sime" name="nucal_sime" value="<?php echo @$nucal_sime; ?>" />
                    Dorsiflexión:
                    <input type="text" class="input_txt valid" id="on_dorsifl" name="on_dorsifl" value="<?php echo @$on_dorsifl; ?>" />
                    <br />
                    Reacción positiva de soporte:
                    <input type="text" class="input_txt valid" id="reac_pos" name="reac_pos" value="<?php echo @$reac_pos; ?>" />
                        
                    Defensivo en Posición  cuadrúpeda:
                    <input type="text" class="input_txt valid" id="def_pos_cuadru" name="def_pos_cuadru" value="<?php echo @$def_pos_cuadru; ?>" />
                    Reacción  Anfibia
                    <input type="text" class="input_txt valid" id="reac_anfibia" name="reac_anfibia" value="<?php echo @$reac_anfibia; ?>" />
                    :<br />
                    Defensivo arrodillado:
                    <input type="text" class="input_txt valid" id="on_arrodi" name="on_arrodi" value="<?php echo @$on_arrodi; ?>" />
                       Rotación del cuerpo sobre si mismo.
                    <input type="text" class="input_txt valid" id="on_simismo" name="on_simismo" value="<?php echo @$on_simismo; ?>" />
                          </p>
                <p align="left">Actividad de la cabeza superior y  lateral:
                    <input type="text" class="input_txt valid" id="cab_sup_lat" name="cab_sup_lat" value="<?php echo @$cab_sup_lat; ?>" />
                    <br />
                    Defensivo en posición sedente:
                    <input type="text" class="input_txt valid" id="def_sedente" name="def_sedente" value="<?php echo @$def_sedente; ?>" />
                </p>
                <p align="left"> Enderezamiento activo  laberíntico de la cabeza:
                    <input type="text" class="input_txt valid" id="laberitnico_cabeza" name="laberitnico_cabeza" value="<?php echo @$laberitnico_cabeza; ?>" />
                </p>
                <p><br />
                </p>

                <p><strong>TONO MUSCULAR:</strong></p>
                <table  border="0" class="data" cellspacing="0" cellpadding="0">
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
                <br />
                <p>OBSERVACIONES:
                    <input type="text" class="input_txt valid" id="nerurom_obser" name="nerurom_obser" value="<?php echo @$nerurom_obser; ?>" />
                </p>
                <br />

                <p><strong>OBSERVACIÓN VISUAL</strong></p>
                <p align="center">&nbsp;</p>
                <p align="left"><strong>5. SEGUIMIENTO  VISUAL                                                                     </strong></p>
                <table  border="0" class="data" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="171" valign="top"><strong>SEGUIMIENTO</strong></td>
                        <td width="60" valign="top"><strong>F</strong></td>
                        <td width="60" valign="top"><strong>SF</strong></td>
                        <td width="60" valign="top"><strong>NF</strong></td>
                    </tr>
                    <tr>
                        <td width="171" valign="top"><p>Horizontal</p></td>
                        <td width="60" valign="top">
                            <input type="text" class="input_txt valid" id="sh_f" name="sh_f" value="<?php echo @$sh_f; ?>" />
                        </td>
                        <td width="60" valign="top">
                            <input type="text" class="input_txt valid" id="sh_sf" name="sh_sf" value="<?php echo @$sh_sf; ?>" />
                        </td>
                        <td width="60" valign="top">
                            <input type="text" class="input_txt valid" id="sh_nf" name="sh_nf" value="<?php echo @$sh_nf; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td width="171" valign="top"><p>Vertical</p></td>
                        <td width="60" valign="top">
                            <input type="text" class="input_txt valid" id="sv_f" name="sv_f" value="<?php echo @$sv_f; ?>" />
                        </td>
                        <td width="60" valign="top">
                            <input type="text" class="input_txt valid" id="sv_sf" name="sv_sf" value="<?php echo @$sv_sf; ?>" />
                        </td>
                        <td width="60" valign="top">
                            <input type="text" class="input_txt valid" id="sv_nf" name="sv_nf" value="<?php echo @$sv_nf; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td width="171" valign="top"><p>Diagonal</p></td>
                        <td width="60" valign="top">
                            <input type="text" class="input_txt valid" id="sd_f" name="sd_f" value="<?php echo @$sd_f; ?>" />
                        </td>
                        <td width="60" valign="top">
                            <input type="text" class="input_txt valid" id="sd_sf" name="sd_sf" value="<?php echo @$sd_sf; ?>" />
                        </td>
                        <td width="60" valign="top">
                            <input type="text" class="input_txt valid" id="sd_nf" name="sd_nf" value="<?php echo @$sd_nf; ?>" />
                        </td>
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
                <strong>6. MECANISMOS  OCULARES</strong>
                <br>
                <table  border="0" class="data" cellspacing="0" cellpadding="0"  width="898">
                    <tr>
                        <td width="894" valign="top"><p align="left">
                                
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
                                <br>
                                OBSERVACIONES:
                                <input type="text" class="input_txt valid" id="visual_oserva" name="visual_oserva" value="<?php echo @$visual_oserva; ?>" />
                        </td>
                    </tr>
                </table>
            </div>
            <br />
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>