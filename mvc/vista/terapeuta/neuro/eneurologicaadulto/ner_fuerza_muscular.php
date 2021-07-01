<?php
if (isset($_REQUEST['guardar_ner_fuerza_musculares']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_ner_fuerza_musculares'] == 'new') {

        $sql = "INSERT INTO ner_fuerza_musculares (
`id_ner_fuerza_musculares`,
`id_usuario`,
`historia`,
`id_proceso`,
`fuerza`,
`arcos`,
`cabeza`,
`cab_incld`,
`cab_incli`,
`cab_rotd`,
`cab_roti`,
`cab_flex`,
`cab_extension`,
`homb_flexd`,
`homb_felxi`,
`homb_extd`,
`homb_exti`,
`homb_abdd`,
`homb_abdi`,
`homb_addd`,
`homb_addi`,
`cod_intd`,
`cod_inti`,
`cod_extd`,
`cod_exti`,
`cod_flexd`,
`cod_flexi`,
`codo_ext2d`,
`codo_ext2i`,
`mun_extd`,
`mun_exti`,
`mun_fled`,
`mun_flexi`,
`mun_ulnad`,
`mun_ulnai`,
`mun_radd`,
`mun_radi`,
`cad_felxd`,
`cad_flexi`,
`cad_extd`,
`cad_exti`,
`cad_adbd`,
`cad_adbi`,
`cad_addd`,
`cad_addi`,
`rod_intd`,
`rod_inti`,
`rod_extd`,
`rod_exti`,
`rod_flexd`,
`rod_flexi`,
`rod_ext2d`,
`rod_ext_2i`,
`tob_dorsd`,
`tob_dorsi`,
`tob_pland`,
`tob_plani`,
`tob_tibiad`,
`tob_tibiai`,
`tob_fibulard`,
`tob_tibulari`,
`col_felxcion`,
`col_ext`,
`col_inclid`,
`col_inclii`,
`supino_cabeza`,
`supino_tronco`,
`supino_mmss`,
`supino_mmii`,
`lateral_cabeza`,
`lateral_tronco`,
`lateral_mmss`,
`lateral_mmii`,
`prono_cabeza`,
`prono_tronco`,
`prono_mmss`,
`prono_mii`,
`sedente_cabeza`,
`sedente_tronco`,
`sedente_mmss`,
`sedente_mmii`,
`bipedo_cabeza`,
`bipedo_tronco`,
`bipedo_mmss`,
`bipedo_mmii`,
`sinergia_flexsd`,
`sinergi_flexsi`,
`sinergi_flexind`,
`sinergi_flexini`,
`sinergi_extsd`,
`sinergi_extsi`,
`sinergi_extind`,
`sinergi_extini`,
`mus_obser2`,
`mmss_ext_codo`,
`mmss_flex_codo`,
`mmii_dors_piecue`,
`mmii_panti_pie`,
`sinc_globalpre`,
`sinc_globalau`,
`sinc_imitacionp`,
`sinc_imitacioni`,
`sinc_coopre`,
`sinc_coo_au`,
`sinc_flexpre`,
`sinc_flexau`,
`sinc_neripre`,
`sinc_neriau`,
`sinc_hoopre`,
`sinc_hooau`,
`sinc_caupre`,
`sinc_cauau`,
`sinc_kippre`,
`sinc_kipau`,
`sinc_raimpre`,
`sinc_rainau`,
`sinc_grapre`,
`sinc_gra_au`,
`sinc_esterpre`,
`sinc_esterau`,
`obser3`,
`espa_mun`,
`espa_codo`,
`espa_nomb`,
`espa_cuello`,
`espa_rodilla`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`espa_cadera`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['fuerza'] . "' ,
'" . $_REQUEST['arcos'] . "' ,
'" . $_REQUEST['cabeza'] . "' ,
'" . $_REQUEST['cab_incld'] . "' ,
'" . $_REQUEST['cab_incli'] . "' ,
'" . $_REQUEST['cab_rotd'] . "' ,
'" . $_REQUEST['cab_roti'] . "' ,
'" . $_REQUEST['cab_flex'] . "' ,
'" . $_REQUEST['cab_extension'] . "' ,
'" . $_REQUEST['homb_flexd'] . "' ,
'" . $_REQUEST['homb_felxi'] . "' ,
'" . $_REQUEST['homb_extd'] . "' ,
'" . $_REQUEST['homb_exti'] . "' ,
'" . $_REQUEST['homb_abdd'] . "' ,
'" . $_REQUEST['homb_abdi'] . "' ,
'" . $_REQUEST['homb_addd'] . "' ,
'" . $_REQUEST['homb_addi'] . "' ,
'" . $_REQUEST['cod_intd'] . "' ,
'" . $_REQUEST['cod_inti'] . "' ,
'" . $_REQUEST['cod_extd'] . "' ,
'" . $_REQUEST['cod_exti'] . "' ,
'" . $_REQUEST['cod_flexd'] . "' ,
'" . $_REQUEST['cod_flexi'] . "' ,
'" . $_REQUEST['codo_ext2d'] . "' ,
'" . $_REQUEST['codo_ext2i'] . "' ,
'" . $_REQUEST['mun_extd'] . "' ,
'" . $_REQUEST['mun_exti'] . "' ,
'" . $_REQUEST['mun_fled'] . "' ,
'" . $_REQUEST['mun_flexi'] . "' ,
'" . $_REQUEST['mun_ulnad'] . "' ,
'" . $_REQUEST['mun_ulnai'] . "' ,
'" . $_REQUEST['mun_radd'] . "' ,
'" . $_REQUEST['mun_radi'] . "' ,
'" . $_REQUEST['cad_felxd'] . "' ,
'" . $_REQUEST['cad_flexi'] . "' ,
'" . $_REQUEST['cad_extd'] . "' ,
'" . $_REQUEST['cad_exti'] . "' ,
'" . $_REQUEST['cad_adbd'] . "' ,
'" . $_REQUEST['cad_adbi'] . "' ,
'" . $_REQUEST['cad_addd'] . "' ,
'" . $_REQUEST['cad_addi'] . "' ,
'" . $_REQUEST['rod_intd'] . "' ,
'" . $_REQUEST['rod_inti'] . "' ,
'" . $_REQUEST['rod_extd'] . "' ,
'" . $_REQUEST['rod_exti'] . "' ,
'" . $_REQUEST['rod_flexd'] . "' ,
'" . $_REQUEST['rod_flexi'] . "' ,
'" . $_REQUEST['rod_ext2d'] . "' ,
'" . $_REQUEST['rod_ext_2i'] . "' ,
'" . $_REQUEST['tob_dorsd'] . "' ,
'" . $_REQUEST['tob_dorsi'] . "' ,
'" . $_REQUEST['tob_pland'] . "' ,
'" . $_REQUEST['tob_plani'] . "' ,
'" . $_REQUEST['tob_tibiad'] . "' ,
'" . $_REQUEST['tob_tibiai'] . "' ,
'" . $_REQUEST['tob_fibulard'] . "' ,
'" . $_REQUEST['tob_tibulari'] . "' ,
'" . $_REQUEST['col_felxcion'] . "' ,
'" . $_REQUEST['col_ext'] . "' ,
'" . $_REQUEST['col_inclid'] . "' ,
'" . $_REQUEST['col_inclii'] . "' ,
'" . $_REQUEST['supino_cabeza'] . "' ,
'" . $_REQUEST['supino_tronco'] . "' ,
'" . $_REQUEST['supino_mmss'] . "' ,
'" . $_REQUEST['supino_mmii'] . "' ,
'" . $_REQUEST['lateral_cabeza'] . "' ,
'" . $_REQUEST['lateral_tronco'] . "' ,
'" . $_REQUEST['lateral_mmss'] . "' ,
'" . $_REQUEST['lateral_mmii'] . "' ,
'" . $_REQUEST['prono_cabeza'] . "' ,
'" . $_REQUEST['prono_tronco'] . "' ,
'" . $_REQUEST['prono_mmss'] . "' ,
'" . $_REQUEST['prono_mii'] . "' ,
'" . $_REQUEST['sedente_cabeza'] . "' ,
'" . $_REQUEST['sedente_tronco'] . "' ,
'" . $_REQUEST['sedente_mmss'] . "' ,
'" . $_REQUEST['sedente_mmii'] . "' ,
'" . $_REQUEST['bipedo_cabeza'] . "' ,
'" . $_REQUEST['bipedo_tronco'] . "' ,
'" . $_REQUEST['bipedo_mmss'] . "' ,
'" . $_REQUEST['bipedo_mmii'] . "' ,
'" . $_REQUEST['sinergia_flexsd'] . "' ,
'" . $_REQUEST['sinergi_flexsi'] . "' ,
'" . $_REQUEST['sinergi_flexind'] . "' ,
'" . $_REQUEST['sinergi_flexini'] . "' ,
'" . $_REQUEST['sinergi_extsd'] . "' ,
'" . $_REQUEST['sinergi_extsi'] . "' ,
'" . $_REQUEST['sinergi_extind'] . "' ,
'" . $_REQUEST['sinergi_extini'] . "' ,
'" . $_REQUEST['mus_obser2'] . "' ,
'" . $_REQUEST['mmss_ext_codo'] . "' ,
'" . $_REQUEST['mmss_flex_codo'] . "' ,
'" . $_REQUEST['mmii_dors_piecue'] . "' ,
'" . $_REQUEST['mmii_panti_pie'] . "' ,
'" . $_REQUEST['sinc_globalpre'] . "' ,
'" . $_REQUEST['sinc_globalau'] . "' ,
'" . $_REQUEST['sinc_imitacionp'] . "' ,
'" . $_REQUEST['sinc_imitacioni'] . "' ,
'" . $_REQUEST['sinc_coopre'] . "' ,
'" . $_REQUEST['sinc_coo_au'] . "' ,
'" . $_REQUEST['sinc_flexpre'] . "' ,
'" . $_REQUEST['sinc_flexau'] . "' ,
'" . $_REQUEST['sinc_neripre'] . "' ,
'" . $_REQUEST['sinc_neriau'] . "' ,
'" . $_REQUEST['sinc_hoopre'] . "' ,
'" . $_REQUEST['sinc_hooau'] . "' ,
'" . $_REQUEST['sinc_caupre'] . "' ,
'" . $_REQUEST['sinc_cauau'] . "' ,
'" . $_REQUEST['sinc_kippre'] . "' ,
'" . $_REQUEST['sinc_kipau'] . "' ,
'" . $_REQUEST['sinc_raimpre'] . "' ,
'" . $_REQUEST['sinc_rainau'] . "' ,
'" . $_REQUEST['sinc_grapre'] . "' ,
'" . $_REQUEST['sinc_gra_au'] . "' ,
'" . $_REQUEST['sinc_esterpre'] . "' ,
'" . $_REQUEST['sinc_esterau'] . "' ,
'" . $_REQUEST['obser3'] . "' ,
'" . $_REQUEST['espa_mun'] . "' ,
'" . $_REQUEST['espa_codo'] . "' ,
'" . $_REQUEST['espa_nomb'] . "' ,
'" . $_REQUEST['espa_cuello'] . "' ,
'" . $_REQUEST['espa_rodilla'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['espa_cadera'] . "'
) ";
    } else if ($_REQUEST['id_ner_fuerza_musculares'] != '') {

        $sql = "UPDATE ner_fuerza_musculares set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`fuerza` = '" . $_REQUEST['fuerza'] . "' ,
`arcos` = '" . $_REQUEST['arcos'] . "' ,
`cabeza` = '" . $_REQUEST['cabeza'] . "' ,
`cab_incld` = '" . $_REQUEST['cab_incld'] . "' ,
`cab_incli` = '" . $_REQUEST['cab_incli'] . "' ,
`cab_rotd` = '" . $_REQUEST['cab_rotd'] . "' ,
`cab_roti` = '" . $_REQUEST['cab_roti'] . "' ,
`cab_flex` = '" . $_REQUEST['cab_flex'] . "' ,
`cab_extension` = '" . $_REQUEST['cab_extension'] . "' ,
`homb_flexd` = '" . $_REQUEST['homb_flexd'] . "' ,
`homb_felxi` = '" . $_REQUEST['homb_felxi'] . "' ,
`homb_extd` = '" . $_REQUEST['homb_extd'] . "' ,
`homb_exti` = '" . $_REQUEST['homb_exti'] . "' ,
`homb_abdd` = '" . $_REQUEST['homb_abdd'] . "' ,
`homb_abdi` = '" . $_REQUEST['homb_abdi'] . "' ,
`homb_addd` = '" . $_REQUEST['homb_addd'] . "' ,
`homb_addi` = '" . $_REQUEST['homb_addi'] . "' ,
`cod_intd` = '" . $_REQUEST['cod_intd'] . "' ,
`cod_inti` = '" . $_REQUEST['cod_inti'] . "' ,
`cod_extd` = '" . $_REQUEST['cod_extd'] . "' ,
`cod_exti` = '" . $_REQUEST['cod_exti'] . "' ,
`cod_flexd` = '" . $_REQUEST['cod_flexd'] . "' ,
`cod_flexi` = '" . $_REQUEST['cod_flexi'] . "' ,
`codo_ext2d` = '" . $_REQUEST['codo_ext2d'] . "' ,
`codo_ext2i` = '" . $_REQUEST['codo_ext2i'] . "' ,
`mun_extd` = '" . $_REQUEST['mun_extd'] . "' ,
`mun_exti` = '" . $_REQUEST['mun_exti'] . "' ,
`mun_fled` = '" . $_REQUEST['mun_fled'] . "' ,
`mun_flexi` = '" . $_REQUEST['mun_flexi'] . "' ,
`mun_ulnad` = '" . $_REQUEST['mun_ulnad'] . "' ,
`mun_ulnai` = '" . $_REQUEST['mun_ulnai'] . "' ,
`mun_radd` = '" . $_REQUEST['mun_radd'] . "' ,
`mun_radi` = '" . $_REQUEST['mun_radi'] . "' ,
`cad_felxd` = '" . $_REQUEST['cad_felxd'] . "' ,
`cad_flexi` = '" . $_REQUEST['cad_flexi'] . "' ,
`cad_extd` = '" . $_REQUEST['cad_extd'] . "' ,
`cad_exti` = '" . $_REQUEST['cad_exti'] . "' ,
`cad_adbd` = '" . $_REQUEST['cad_adbd'] . "' ,
`cad_adbi` = '" . $_REQUEST['cad_adbi'] . "' ,
`cad_addd` = '" . $_REQUEST['cad_addd'] . "' ,
`cad_addi` = '" . $_REQUEST['cad_addi'] . "' ,
`rod_intd` = '" . $_REQUEST['rod_intd'] . "' ,
`rod_inti` = '" . $_REQUEST['rod_inti'] . "' ,
`rod_extd` = '" . $_REQUEST['rod_extd'] . "' ,
`rod_exti` = '" . $_REQUEST['rod_exti'] . "' ,
`rod_flexd` = '" . $_REQUEST['rod_flexd'] . "' ,
`rod_flexi` = '" . $_REQUEST['rod_flexi'] . "' ,
`rod_ext2d` = '" . $_REQUEST['rod_ext2d'] . "' ,
`rod_ext_2i` = '" . $_REQUEST['rod_ext_2i'] . "' ,
`tob_dorsd` = '" . $_REQUEST['tob_dorsd'] . "' ,
`tob_dorsi` = '" . $_REQUEST['tob_dorsi'] . "' ,
`tob_pland` = '" . $_REQUEST['tob_pland'] . "' ,
`tob_plani` = '" . $_REQUEST['tob_plani'] . "' ,
`tob_tibiad` = '" . $_REQUEST['tob_tibiad'] . "' ,
`tob_tibiai` = '" . $_REQUEST['tob_tibiai'] . "' ,
`tob_fibulard` = '" . $_REQUEST['tob_fibulard'] . "' ,
`tob_tibulari` = '" . $_REQUEST['tob_tibulari'] . "' ,
`col_felxcion` = '" . $_REQUEST['col_felxcion'] . "' ,
`col_ext` = '" . $_REQUEST['col_ext'] . "' ,
`col_inclid` = '" . $_REQUEST['col_inclid'] . "' ,
`col_inclii` = '" . $_REQUEST['col_inclii'] . "' ,
`supino_cabeza` = '" . $_REQUEST['supino_cabeza'] . "' ,
`supino_tronco` = '" . $_REQUEST['supino_tronco'] . "' ,
`supino_mmss` = '" . $_REQUEST['supino_mmss'] . "' ,
`supino_mmii` = '" . $_REQUEST['supino_mmii'] . "' ,
`lateral_cabeza` = '" . $_REQUEST['lateral_cabeza'] . "' ,
`lateral_tronco` = '" . $_REQUEST['lateral_tronco'] . "' ,
`lateral_mmss` = '" . $_REQUEST['lateral_mmss'] . "' ,
`lateral_mmii` = '" . $_REQUEST['lateral_mmii'] . "' ,
`prono_cabeza` = '" . $_REQUEST['prono_cabeza'] . "' ,
`prono_tronco` = '" . $_REQUEST['prono_tronco'] . "' ,
`prono_mmss` = '" . $_REQUEST['prono_mmss'] . "' ,
`prono_mii` = '" . $_REQUEST['prono_mii'] . "' ,
`sedente_cabeza` = '" . $_REQUEST['sedente_cabeza'] . "' ,
`sedente_tronco` = '" . $_REQUEST['sedente_tronco'] . "' ,
`sedente_mmss` = '" . $_REQUEST['sedente_mmss'] . "' ,
`sedente_mmii` = '" . $_REQUEST['sedente_mmii'] . "' ,
`bipedo_cabeza` = '" . $_REQUEST['bipedo_cabeza'] . "' ,
`bipedo_tronco` = '" . $_REQUEST['bipedo_tronco'] . "' ,
`bipedo_mmss` = '" . $_REQUEST['bipedo_mmss'] . "' ,
`bipedo_mmii` = '" . $_REQUEST['bipedo_mmii'] . "' ,
`sinergia_flexsd` = '" . $_REQUEST['sinergia_flexsd'] . "' ,
`sinergi_flexsi` = '" . $_REQUEST['sinergi_flexsi'] . "' ,
`sinergi_flexind` = '" . $_REQUEST['sinergi_flexind'] . "' ,
`sinergi_flexini` = '" . $_REQUEST['sinergi_flexini'] . "' ,
`sinergi_extsd` = '" . $_REQUEST['sinergi_extsd'] . "' ,
`sinergi_extsi` = '" . $_REQUEST['sinergi_extsi'] . "' ,
`sinergi_extind` = '" . $_REQUEST['sinergi_extind'] . "' ,
`sinergi_extini` = '" . $_REQUEST['sinergi_extini'] . "' ,
`mus_obser2` = '" . $_REQUEST['mus_obser2'] . "' ,
`mmss_ext_codo` = '" . $_REQUEST['mmss_ext_codo'] . "' ,
`mmss_flex_codo` = '" . $_REQUEST['mmss_flex_codo'] . "' ,
`mmii_dors_piecue` = '" . $_REQUEST['mmii_dors_piecue'] . "' ,
`mmii_panti_pie` = '" . $_REQUEST['mmii_panti_pie'] . "' ,
`sinc_globalpre` = '" . $_REQUEST['sinc_globalpre'] . "' ,
`sinc_globalau` = '" . $_REQUEST['sinc_globalau'] . "' ,
`sinc_imitacionp` = '" . $_REQUEST['sinc_imitacionp'] . "' ,
`sinc_imitacioni` = '" . $_REQUEST['sinc_imitacioni'] . "' ,
`sinc_coopre` = '" . $_REQUEST['sinc_coopre'] . "' ,
`sinc_coo_au` = '" . $_REQUEST['sinc_coo_au'] . "' ,
`sinc_flexpre` = '" . $_REQUEST['sinc_flexpre'] . "' ,
`sinc_flexau` = '" . $_REQUEST['sinc_flexau'] . "' ,
`sinc_neripre` = '" . $_REQUEST['sinc_neripre'] . "' ,
`sinc_neriau` = '" . $_REQUEST['sinc_neriau'] . "' ,
`sinc_hoopre` = '" . $_REQUEST['sinc_hoopre'] . "' ,
`sinc_hooau` = '" . $_REQUEST['sinc_hooau'] . "' ,
`sinc_caupre` = '" . $_REQUEST['sinc_caupre'] . "' ,
`sinc_cauau` = '" . $_REQUEST['sinc_cauau'] . "' ,
`sinc_kippre` = '" . $_REQUEST['sinc_kippre'] . "' ,
`sinc_kipau` = '" . $_REQUEST['sinc_kipau'] . "' ,
`sinc_raimpre` = '" . $_REQUEST['sinc_raimpre'] . "' ,
`sinc_rainau` = '" . $_REQUEST['sinc_rainau'] . "' ,
`sinc_grapre` = '" . $_REQUEST['sinc_grapre'] . "' ,
`sinc_gra_au` = '" . $_REQUEST['sinc_gra_au'] . "' ,
`sinc_esterpre` = '" . $_REQUEST['sinc_esterpre'] . "' ,
`sinc_esterau` = '" . $_REQUEST['sinc_esterau'] . "' ,
`obser3` = '" . $_REQUEST['obser3'] . "' ,
`espa_mun` = '" . $_REQUEST['espa_mun'] . "' ,
`espa_codo` = '" . $_REQUEST['espa_codo'] . "' ,
`espa_nomb` = '" . $_REQUEST['espa_nomb'] . "' ,
`espa_cuello` = '" . $_REQUEST['espa_cuello'] . "' ,
`espa_rodilla` = '" . $_REQUEST['espa_rodilla'] . "' ,
`espa_cadera` = '" . $_REQUEST['espa_cadera'] . "' WHERE `id_ner_fuerza_musculares` = '" . $_REQUEST['id_ner_fuerza_musculares'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_ner_fuerza_musculares = 'new';
$sql = "SELECT * from ner_fuerza_musculares WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_ner_fuerza_musculares = $row['id_ner_fuerza_musculares'];
    $fuerza = $row['fuerza'];
    $arcos = $row['arcos'];
    $cabeza = $row['cabeza'];
    $cab_incld = $row['cab_incld'];
    $cab_incli = $row['cab_incli'];
    $cab_rotd = $row['cab_rotd'];
    $cab_roti = $row['cab_roti'];
    $cab_flex = $row['cab_flex'];
    $cab_extension = $row['cab_extension'];
    $homb_flexd = $row['homb_flexd'];
    $homb_felxi = $row['homb_felxi'];
    $homb_extd = $row['homb_extd'];
    $homb_exti = $row['homb_exti'];
    $homb_abdd = $row['homb_abdd'];
    $homb_abdi = $row['homb_abdi'];
    $homb_addd = $row['homb_addd'];
    $homb_addi = $row['homb_addi'];
    $cod_intd = $row['cod_intd'];
    $cod_inti = $row['cod_inti'];
    $cod_extd = $row['cod_extd'];
    $cod_exti = $row['cod_exti'];
    $cod_flexd = $row['cod_flexd'];
    $cod_flexi = $row['cod_flexi'];
    $codo_ext2d = $row['codo_ext2d'];
    $codo_ext2i = $row['codo_ext2i'];
    $mun_extd = $row['mun_extd'];
    $mun_exti = $row['mun_exti'];
    $mun_fled = $row['mun_fled'];
    $mun_flexi = $row['mun_flexi'];
    $mun_ulnad = $row['mun_ulnad'];
    $mun_ulnai = $row['mun_ulnai'];
    $mun_radd = $row['mun_radd'];
    $mun_radi = $row['mun_radi'];
    $cad_felxd = $row['cad_felxd'];
    $cad_flexi = $row['cad_flexi'];
    $cad_extd = $row['cad_extd'];
    $cad_exti = $row['cad_exti'];
    $cad_adbd = $row['cad_adbd'];
    $cad_adbi = $row['cad_adbi'];
    $cad_addd = $row['cad_addd'];
    $cad_addi = $row['cad_addi'];
    $rod_intd = $row['rod_intd'];
    $rod_inti = $row['rod_inti'];
    $rod_extd = $row['rod_extd'];
    $rod_exti = $row['rod_exti'];
    $rod_flexd = $row['rod_flexd'];
    $rod_flexi = $row['rod_flexi'];
    $rod_ext2d = $row['rod_ext2d'];
    $rod_ext_2i = $row['rod_ext_2i'];
    $tob_dorsd = $row['tob_dorsd'];
    $tob_dorsi = $row['tob_dorsi'];
    $tob_pland = $row['tob_pland'];
    $tob_plani = $row['tob_plani'];
    $tob_tibiad = $row['tob_tibiad'];
    $tob_tibiai = $row['tob_tibiai'];
    $tob_fibulard = $row['tob_fibulard'];
    $tob_tibulari = $row['tob_tibulari'];
    $col_felxcion = $row['col_felxcion'];
    $col_ext = $row['col_ext'];
    $col_inclid = $row['col_inclid'];
    $col_inclii = $row['col_inclii'];
    $supino_cabeza = $row['supino_cabeza'];
    $supino_tronco = $row['supino_tronco'];
    $supino_mmss = $row['supino_mmss'];
    $supino_mmii = $row['supino_mmii'];
    $lateral_cabeza = $row['lateral_cabeza'];
    $lateral_tronco = $row['lateral_tronco'];
    $lateral_mmss = $row['lateral_mmss'];
    $lateral_mmii = $row['lateral_mmii'];
    $prono_cabeza = $row['prono_cabeza'];
    $prono_tronco = $row['prono_tronco'];
    $prono_mmss = $row['prono_mmss'];
    $prono_mii = $row['prono_mii'];
    $sedente_cabeza = $row['sedente_cabeza'];
    $sedente_tronco = $row['sedente_tronco'];
    $sedente_mmss = $row['sedente_mmss'];
    $sedente_mmii = $row['sedente_mmii'];
    $bipedo_cabeza = $row['bipedo_cabeza'];
    $bipedo_tronco = $row['bipedo_tronco'];
    $bipedo_mmss = $row['bipedo_mmss'];
    $bipedo_mmii = $row['bipedo_mmii'];
    $sinergia_flexsd = $row['sinergia_flexsd'];
    $sinergi_flexsi = $row['sinergi_flexsi'];
    $sinergi_flexind = $row['sinergi_flexind'];
    $sinergi_flexini = $row['sinergi_flexini'];
    $sinergi_extsd = $row['sinergi_extsd'];
    $sinergi_extsi = $row['sinergi_extsi'];
    $sinergi_extind = $row['sinergi_extind'];
    $sinergi_extini = $row['sinergi_extini'];
    $mus_obser2 = $row['mus_obser2'];
    $mmss_ext_codo = $row['mmss_ext_codo'];
    $mmss_flex_codo = $row['mmss_flex_codo'];
    $mmii_dors_piecue = $row['mmii_dors_piecue'];
    $mmii_panti_pie = $row['mmii_panti_pie'];
    $sinc_globalpre = $row['sinc_globalpre'];
    $sinc_globalau = $row['sinc_globalau'];
    $sinc_imitacionp = $row['sinc_imitacionp'];
    $sinc_imitacioni = $row['sinc_imitacioni'];
    $sinc_coopre = $row['sinc_coopre'];
    $sinc_coo_au = $row['sinc_coo_au'];
    $sinc_flexpre = $row['sinc_flexpre'];
    $sinc_flexau = $row['sinc_flexau'];
    $sinc_neripre = $row['sinc_neripre'];
    $sinc_neriau = $row['sinc_neriau'];
    $sinc_hoopre = $row['sinc_hoopre'];
    $sinc_hooau = $row['sinc_hooau'];
    $sinc_caupre = $row['sinc_caupre'];
    $sinc_cauau = $row['sinc_cauau'];
    $sinc_kippre = $row['sinc_kippre'];
    $sinc_kipau = $row['sinc_kipau'];
    $sinc_raimpre = $row['sinc_raimpre'];
    $sinc_rainau = $row['sinc_rainau'];
    $sinc_grapre = $row['sinc_grapre'];
    $sinc_gra_au = $row['sinc_gra_au'];
    $sinc_esterpre = $row['sinc_esterpre'];
    $sinc_esterau = $row['sinc_esterau'];
    $obser3 = $row['obser3'];
    $espa_mun = $row['espa_mun'];
    $espa_codo = $row['espa_codo'];
    $espa_nomb = $row['espa_nomb'];
    $espa_cuello = $row['espa_cuello'];
    $espa_rodilla = $row['espa_rodilla'];
    $espa_cadera = $row['espa_cadera'];
    break;
}
?>
<script>

    $(function() {

        $("#close-ner_fuerza_musculares").click(function() {
            $("#open-ner_fuerza_musculares").show();
            $(this).hide();
            $("#content-ner_fuerza_musculares").hide('slow');
        });

        $("#open-ner_fuerza_musculares").click(function() {
            $("#close-ner_fuerza_musculares").show();
            $(this).hide();
            $("#content-ner_fuerza_musculares").show('slow');
        });

    });

</script>
<fieldset id="ner_fuerza_musculares">
    <legend align="left"> <div class="arrow-c" id="close-ner_fuerza_musculares"></div> <div class="arrow-o" id="open-ner_fuerza_musculares" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Fuerza Muscular</font></legend>
    <div id="content-ner_fuerza_musculares">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_ner_fuerza_musculares" id="guardar_ner_fuerza_musculares" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_ner_fuerza_musculares" name="form_ner_fuerza_musculares" action="<?php echo @$action_form_ner_fuerza_musculares ?>#ner_fuerza_musculares" method="post">

            <input type="hidden" id="id_ner_fuerza_musculares" name="id_ner_fuerza_musculares" value="<?php echo @$id_ner_fuerza_musculares ?>" />

            <ul>
                <li><strong>Fuerza  muscular:</strong></li>
            </ul>
            <table border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="720" valign="top">
                        
                        <textarea id="fuerza" name="fuerza"><?php echo @$fuerza ?></textarea>
                        
                    </td>
                </tr>
                <tr>
                    <td width="720" valign="top"><p>0 ninguna amplitud de movimiento sin    gravedad y sin observarse ni palparse contracción<br />
                            1 ninguna amplitud de movimiento sin    gravedad, se observa o palpa contracción  <br />
                            1+ menos de la mitad de la amplitud    del movimiento sin gravedad<br />
                            2- más de la mitad de la amplitud    del movimiento sin gravedad<br />
                            2 amplitud completa del movimiento    sin gravedad<br />
                            2+ menos de la mitad de la amplitud    del movimiento contra gravedad<br />
                            3- más de la mitad de la amplitud    del movimiento contra gravedad<br />
                            3 amplitud completa del movimiento    contra gravedad<br />
                            3+ menos de la mitad de la amplitud    del movimiento contra gravedad y con una resistencia moderada<br />
                            4- más de la mitad de la amplitud    del movimiento contra gravedad y con una resistencia moderada<br />
                            4 amplitud completa del movimiento    contra gravedad y con una resistencia moderada<br />
                            5                                                                                                                      amplitud completa del movimiento contra gravedad y con una resistencia maxima</p></td>
                </tr>
            </table>


            <input type="hidden" class="input_txt valid" id="id_ner_fuerza_musculares" name="id_ner_fuerza_musculares" value="<?php echo @$id_ner_fuerza_musculares; ?>" />
            <ul>
                <li><strong>Arcos de  movimiento articular:</strong> <input name="arcos" type="text" class="input_txt valid" id="arcos" value="<?php echo @$arcos; ?>" size="10" /> </li>
                <li><strong>Cabeza:</strong> <input name="cabeza" type="text" class="input_txt valid" id="cabeza" value="<?php echo @$cabeza; ?>" size="10" /> </li>
            </ul>
            <p>Inclinación:  D
                <input name="cab_incld" type="text" class="input_txt valid" id="cab_incld" value="<?php echo @$cab_incld; ?>" size="10" /> 
                I
                <input name="cab_incli" type="text" class="input_txt valid" id="cab_incli" value="<?php echo @$cab_incli; ?>" size="10" />  
                Rotación: D
                <input name="cab_rotd" type="text" class="input_txt valid" id="cab_rotd" value="<?php echo @$cab_rotd; ?>" size="10" /> 
                I
                <input name="cab_roti" type="text" class="input_txt valid" id="cab_roti" value="<?php echo @$cab_roti; ?>" size="10" />    
                Flexión:
                <input name="cab_flex" type="text" class="input_txt valid" id="cab_flex" value="<?php echo @$cab_flex; ?>" size="10" />   
                Extensión:
                <input name="cab_extension" type="text" class="input_txt valid" id="cab_extension" value="<?php echo @$cab_extension; ?>" size="10" />
            </p>
            <ul>
                <li><strong>MMSS:</strong> </li>
            </ul>
            <p><strong>Hombro: </strong>flexion: D
                <input name="homb_flexd" type="text" class="input_txt valid" id="homb_flexd" value="<?php echo @$homb_flexd; ?>" size="10" />
                I
                <input name="homb_felxi" type="text" class="input_txt valid" id="homb_felxi" value="<?php echo @$homb_felxi; ?>" size="10" />
                Extension: D
                <input name="homb_extd" type="text" class="input_txt valid" id="homb_extd" value="<?php echo @$homb_extd; ?>" size="10" />
                I
                <input name="homb_exti" type="text" class="input_txt valid" id="homb_exti" value="<?php echo @$homb_exti; ?>" size="10" />
                ABD: D
                <input name="homb_abdd" type="text" class="input_txt valid" id="homb_abdd" value="<?php echo @$homb_abdd; ?>" size="10" /> 
                I
                <input name="homb_abdi" type="text" class="input_txt valid" id="homb_abdi" value="<?php echo @$homb_abdi; ?>" size="10" />
                ADD: D
                <input name="homb_addd" type="text" class="input_txt valid" id="homb_addd" value="<?php echo @$homb_addd; ?>" size="10" /> 
                I
                <input name="homb_addi" type="text" class="input_txt valid" id="homb_addi" value="<?php echo @$homb_addi; ?>" size="10" />
                <br />
                <strong>Rotaciones y Codo: </strong>rotación: int D
                <input name="cod_intd" type="text" class="input_txt valid" id="cod_intd" value="<?php echo @$cod_intd; ?>" size="10" />
                I
                <input name="cod_inti" type="text" class="input_txt valid" id="cod_inti" value="<?php echo @$cod_inti; ?>" size="10" />
                ext D
                <input name="cod_extd" type="text" class="input_txt valid" id="cod_extd" value="<?php echo @$cod_extd; ?>" size="10" />
                I
                <input name="cod_exti" type="text" class="input_txt valid" id="cod_exti" value="<?php echo @$cod_exti; ?>" size="10" />
                flexión: D
                <input name="cod_flexd" type="text" class="input_txt valid" id="cod_flexd" value="<?php echo @$cod_flexd; ?>" size="10" />
                I
                <input name="cod_flexi" type="text" class="input_txt valid" id="cod_flexi" value="<?php echo @$cod_flexi; ?>" size="10" />
                  Extensión: D
                <input name="codo_ext2d" type="text" class="input_txt valid" id="codo_ext2d" value="<?php echo @$codo_ext2d; ?>" size="10" />
                I
                <input name="codo_ext2i" type="text" class="input_txt valid" id="codo_ext2i" value="<?php echo @$codo_ext2i; ?>" size="10" />
                <br />
                <strong>Muñeca: </strong>Extensión D
                <input name="mun_extd" type="text" class="input_txt valid" id="mun_extd" value="<?php echo @$mun_extd; ?>" size="10" />
                I<input name="mun_exti" type="text" class="input_txt valid" id="mun_exti" value="<?php echo @$mun_exti; ?>" size="10" />
                Flexión D
                <input name="mun_fled" type="text" class="input_txt valid" id="mun_fled" value="<?php echo @$mun_fled; ?>" size="10" />
                I
                <input name="mun_flexi" type="text" class="input_txt valid" id="mun_flexi" value="<?php echo @$mun_flexi; ?>" size="10" />
                  Desv ulnar D
                <input name="mun_ulnad" type="text" class="input_txt valid" id="mun_ulnad" value="<?php echo @$mun_ulnad; ?>" size="10" />
                I
                <input name="mun_ulnai" type="text" class="input_txt valid" id="mun_ulnai" value="<?php echo @$mun_ulnai; ?>" size="10" />
                Desv radial D
                <input name="mun_radd" type="text" class="input_txt valid" id="mun_radd" value="<?php echo @$mun_radd; ?>" size="10" />
                I
                <input name="mun_radi" type="text" class="input_txt valid" id="mun_radi" value="<?php echo @$mun_radi; ?>" size="10" />
            </p>
            <ul>
                <li><strong>MMII:</strong></li>
            </ul>
            <p><strong>Cadera: </strong>flexion<strong> </strong>D
                <input name="cad_felxd" type="text" class="input_txt valid" id="cad_felxd" value="<?php echo @$cad_felxd; ?>" size="10" />
                I
                <input name="cad_flexi" type="text" class="input_txt valid" id="cad_flexi" value="<?php echo @$cad_flexi; ?>" size="10" />
                Extension: D
                <input name="cad_extd" type="text" class="input_txt valid" id="cad_extd" value="<?php echo @$cad_extd; ?>" size="10" />
                I
                <input name="cad_exti" type="text" class="input_txt valid" id="cad_exti" value="<?php echo @$cad_exti; ?>" size="10" />
                ABD: D
                <input name="cad_adbd" type="text" class="input_txt valid" id="cad_adbd" value="<?php echo @$cad_adbd; ?>" size="10" />
                I
                <input name="cad_adbi" type="text" class="input_txt valid" id="cad_adbi" value="<?php echo @$cad_adbi; ?>" size="10" />
                ADD: D
                <input name="cad_addd" type="text" class="input_txt valid" id="cad_addd" value="<?php echo @$cad_addd; ?>" size="10" />
                I
                <input name="cad_addi" type="text" class="input_txt valid" id="cad_addi" value="<?php echo @$cad_addi; ?>" size="10" />
                <br />
                <strong>Rotaciones y Rodilla: </strong>rotación: int  D
                <input name="rod_intd" type="text" class="input_txt valid" id="rod_intd" value="<?php echo @$rod_intd; ?>" size="10" />
                I
                <input name="rod_inti" type="text" class="input_txt valid" id="rod_inti" value="<?php echo @$rod_inti; ?>" size="10" />
                 ext D
                <input name="rod_extd" type="text" class="input_txt valid" id="rod_extd" value="<?php echo @$rod_extd; ?>" size="10" />
                I
                <input name="rod_exti" type="text" class="input_txt valid" id="rod_exti" value="<?php echo @$rod_exti; ?>" size="10" />
                flexión: D
                <input name="rod_flexd" type="text" class="input_txt valid" id="rod_flexd" value="<?php echo @$rod_flexd; ?>" size="10" />
                I
                <input name="rod_flexi" type="text" class="input_txt valid" id="rod_flexi" value="<?php echo @$rod_flexi; ?>" size="10" />
                Extensión: D
                <input name="rod_ext2d" type="text" class="input_txt valid" id="rod_ext2d" value="<?php echo @$rod_ext2d; ?>" size="10" />
                I
                <input name="rod_ext_2i" type="text" class="input_txt valid" id="rod_ext_2i" value="<?php echo @$rod_ext_2i; ?>" size="10" />
                <br />
                <strong>Tobillo: </strong>Dorsiflexión D
                <input name="tob_dorsd" type="text" class="input_txt valid" id="tob_dorsd" value="<?php echo @$tob_dorsd; ?>" size="10" />
                I
                <input name="tob_dorsi" type="text" class="input_txt valid" id="tob_dorsi" value="<?php echo @$tob_dorsi; ?>" size="10" />
                Plantiflexión D
                <input name="tob_pland" type="text" class="input_txt valid" id="tob_pland" value="<?php echo @$tob_pland; ?>" size="10" />
                I
                <input name="tob_plani" type="text" class="input_txt valid" id="tob_plani" value="<?php echo @$tob_plani; ?>" size="10" />
                Desv tibial D
                <input name="tob_tibiad" type="text" class="input_txt valid" id="tob_tibiad" value="<?php echo @$tob_tibiad; ?>" size="10" />
                I
                <input name="tob_tibiai" type="text" class="input_txt valid" id="tob_tibiai" value="<?php echo @$tob_tibiai; ?>" size="10" />
                Desv fibular D
                <input name="tob_fibulard" type="text" class="input_txt valid" id="tob_fibulard" value="<?php echo @$tob_fibulard; ?>" size="10" />
                I
                <input name="tob_tibulari" type="text" class="input_txt valid" id="tob_tibulari" value="<?php echo @$tob_tibulari; ?>" size="10" />
            </p>
            <ul>
                <li><strong>Columna lumbar: </strong>flexión
                    <input name="col_felxcion" type="text" class="input_txt valid" id="col_felxcion" value="<?php echo @$col_felxcion; ?>" size="10" />
                      Extensión
                    <input name="col_ext" type="text" class="input_txt valid" id="col_ext" value="<?php echo @$col_ext; ?>" size="10" />
                    Inclinación D
                    <input name="col_inclid" type="text" class="input_txt valid" id="col_inclid" value="<?php echo @$col_inclid; ?>" size="10" />
                      I
                    <input name="col_inclii" type="text" class="input_txt valid" id="col_inclii" value="<?php echo @$col_inclii; ?>" size="10" />
                    <strong></strong></li>
            </ul>
            <ul>
                <li><strong>Patrones de  calidad de movimiento: (tener en cuenta cabeza, mmss, mmii, balance en todas  las posiciones)</strong></li>
            </ul>
            <p><strong>Decúbito Supino:</strong></p>
            <table border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="720" valign="top"><br />
                        <strong>Cabeza:</strong>
                        <input name="supino_cabeza" type="text" class="input_txt valid" id="supino_cabeza" value="<?php echo @$supino_cabeza; ?>" size="10" />
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="720" valign="top"><p><strong>Tronco y pelvis:</strong>
                            <input name="supino_tronco" type="text" class="input_txt valid" id="supino_tronco" value="<?php echo @$supino_tronco; ?>" size="10" />
                        </p>
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="720" valign="top"><p><strong>MMSS</strong>
                            <input name="supino_mmss" type="text" class="input_txt valid" id="supino_mmss" value="<?php echo @$supino_mmss; ?>" size="10" />
                        </p>
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="720" valign="top"><p><strong>MMII</strong>
                            <input name="supino_mmii" type="text" class="input_txt valid" id="supino_mmii" value="<?php echo @$supino_mmii; ?>" size="10" />
                        </p>
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
            </table>
            <p><strong>Decúbito Lateral:</strong></p>
            <table border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="720" valign="top"><br />
                        <strong>Cabeza:</strong>
                        <input type="text" class="input_txt valid" id="lateral_cabeza" name="lateral_cabeza" value="<?php echo @$lateral_cabeza; ?>" />
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="720" valign="top"><p><strong>Tronco y pelvis:</strong>
                            <input type="text" class="input_txt valid" id="lateral_tronco" name="lateral_tronco" value="<?php echo @$lateral_tronco; ?>" />
                        </p>
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="720" valign="top"><p><strong>MMSS</strong>
                            <input type="text" class="input_txt valid" id="lateral_mmss" name="lateral_mmss" value="<?php echo @$lateral_mmss; ?>" />
                        </p>
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="720" valign="top"><p><strong>MMII</strong>
                            <input type="text" class="input_txt valid" id="lateral_mmii" name="lateral_mmii" value="<?php echo @$lateral_mmii; ?>" />
                        </p>
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
            </table>
            <p><strong>Decúbito Prono:</strong></p>
            <table border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="720" valign="top"><br />
                        <strong>Cabeza:</strong>
                        <input type="text" class="input_txt valid" id="prono_cabeza" name="prono_cabeza" value="<?php echo @$prono_cabeza; ?>" />
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="720" valign="top"><p><strong>Tronco y pelvis:</strong>
                            <input type="text" class="input_txt valid" id="prono_tronco" name="prono_tronco" value="<?php echo @$prono_tronco; ?>" />
                        </p>
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="720" valign="top"><p><strong>MMSS</strong>
                            <input type="text" class="input_txt valid" id="prono_mii" name="prono_mii" value="<?php echo @$prono_mii; ?>" />
                        </p>
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="720" valign="top"><p><strong>MMII</strong>
                            <input type="text" class="input_txt valid" id="prono_mmss" name="prono_mmss" value="<?php echo @$prono_mmss; ?>" />
                        </p>
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
            </table>
            <p> <strong> </strong><br />
                <strong>Sedente:</strong></p>
            <table border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="720" valign="top"><br />
                        <strong>Cabeza:</strong>
                        <input type="text" class="input_txt valid" id="sedente_cabeza" name="sedente_cabeza" value="<?php echo @$sedente_cabeza; ?>" />
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="720" valign="top"><p><strong>Tronco y pelvis:</strong>
                            <input type="text" class="input_txt valid" id="sedente_tronco" name="sedente_tronco" value="<?php echo @$sedente_tronco; ?>" />
                        </p>
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="720" valign="top"><p><strong>MMSS</strong>
                            <input type="text" class="input_txt valid" id="sedente_mmss" name="sedente_mmss" value="<?php echo @$sedente_mmss; ?>" />
                        </p>
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="720" valign="top"><p><strong>MMII</strong>
                            <input type="text" class="input_txt valid" id="sedente_mmii" name="sedente_mmii" value="<?php echo @$sedente_mmii; ?>" />
                        </p>
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
            </table>
            <br>
            <p><strong>Bípedo:</strong></p>
            <table border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="720" valign="top"><br />
                        <strong>Cabeza:</strong>
                        <input type="text" class="input_txt valid" id="bipedo_cabeza" name="bipedo_cabeza" value="<?php echo @$bipedo_cabeza; ?>" />
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="720" valign="top"><p><strong>Tronco y pelvis:</strong>
                            <input type="text" class="input_txt valid" id="bipedo_tronco" name="bipedo_tronco" value="<?php echo @$bipedo_tronco; ?>" />
                        </p>
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="720" valign="top"><p><strong>MMSS</strong>
                            <input type="text" class="input_txt valid" id="bipedo_mmss" name="bipedo_mmss" value="<?php echo @$bipedo_mmss; ?>" />
                        </p>
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="720" valign="top"><p><strong>MMII</strong>
                            <input type="text" class="input_txt valid" id="bipedo_mmii" name="bipedo_mmii" value="<?php echo @$bipedo_mmii; ?>" />
                        </p>
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
            </table>
            <br>
            <p><strong>Sinergias y reacciones asociadas</strong></p>
            <table width="900" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="203" valign="top"><p align="center"><strong>Sinergias</strong></p></td>
                    <td colspan="2" valign="top"><p align="center"><strong>Miembro    superior</strong></p></td>
                    <td colspan="2" valign="top"><p align="center"><strong>Miembro    inferior</strong></p></td>
                </tr>
                <tr>
                    <td width="203" valign="top"><p><strong>&nbsp;</strong></p></td>
                    <td width="196" valign="top"><p align="center"><strong>derecho</strong></p></td>
                    <td width="181" valign="top"><p align="center"><strong>izquierdo</strong></p></td>
                    <td width="183" valign="top"><p align="center"><strong>derecho</strong></p></td>
                    <td width="178" valign="top"><p align="center"><strong>Izquierdo</strong></p></td>
                </tr>
                <tr>
                    <td width="203" valign="top"><p align="center">Flexora</p></td>
                    <td width="196" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="sinergia_flexsd" name="sinergia_flexsd" value="<?php echo @$sinergia_flexsd; ?>" />
                            </strong></p></td>
                    <td width="181" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="sinergi_flexsi" name="sinergi_flexsi" value="<?php echo @$sinergi_flexsi; ?>" />
                            </strong></p></td>
                    <td width="183" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="sinergi_flexind" name="sinergi_flexind" value="<?php echo @$sinergi_flexind; ?>" />
                            </strong></p></td>
                    <td width="178" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="sinergi_flexini" name="sinergi_flexini" value="<?php echo @$sinergi_flexini; ?>" />
                            </strong></p></td>
                </tr>
                <tr>
                    <td width="203" valign="top"><p align="center">Extensora</p></td>
                    <td width="196" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="sinergi_extsd" name="sinergi_extsd" value="<?php echo @$sinergi_extsd; ?>" />
                            </strong></p></td>
                    <td width="181" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="sinergi_extsi" name="sinergi_extsi" value="<?php echo @$sinergi_extsi; ?>" />
                            </strong></p></td>
                    <td width="183" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="sinergi_extind" name="sinergi_extind" value="<?php echo @$sinergi_extind; ?>" />
                            </strong></p></td>
                    <td width="178" valign="top"><p><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="sinergi_extini" name="sinergi_extini" value="<?php echo @$sinergi_extini; ?>" />
                            </strong></p></td>
                </tr>
            </table>
            <p><strong>OBSERVACIONES:








                    <input type="text" class="input_txt valid" id="mus_obser2" name="mus_obser2" value="<?php echo @$mus_obser2; ?>" />
                </strong></p>
            <ul>
                <li><strong>Reacciones  asociadas:</strong></li>
            </ul>
            <p><strong>&nbsp;</strong><strong>MMSS:</strong></p>
            <p>Resistencia  extensión codo lado sano: <strong>
                    <input type="text" class="input_txt valid" id="mmss_ext_codo" name="mmss_ext_codo" value="<?php echo @$mmss_ext_codo; ?>" />
                </strong></p>
            <p>Resistencia  flexión codo lado sano: <strong>
                    <input type="text" class="input_txt valid" id="mmss_flex_codo" name="mmss_flex_codo" value="<?php echo @$mmss_flex_codo; ?>" />
                </strong><br />
                <strong>MMII:</strong></p>
            <p>Resistencia  dorsiflexión cuello de pie lado sano: <strong>
                    <input type="text" class="input_txt valid" id="mmii_dors_piecue" name="mmii_dors_piecue" value="<?php echo @$mmii_dors_piecue; ?>" />
                </strong></p>
            <p>Resistencia  plantiflexión cuello de pie lado sano: <strong>
                    <input type="text" class="input_txt valid" id="mmii_panti_pie" name="mmii_panti_pie" value="<?php echo @$mmii_panti_pie; ?>" />
                </strong><strong>&nbsp;</strong></p>
            <ul>
                <li><strong>Sincinesias:</strong></li>
            </ul>
            <table width="800" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="494" valign="top"><p align="center"><strong>Sincinesia</strong></p></td>
                    <td width="162" valign="top"><p align="center"><strong>Presente</strong></p></td>
                    <td width="136" valign="top"><p align="center"><strong>Ausente</strong></p></td>
                </tr>
                <tr>
                    <td width="494" valign="top"><ul>
                            <li> Global</li>
                        </ul></td>
                    <td width="162" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_globalpre" name="sinc_globalpre" value="<?php echo @$sinc_globalpre; ?>" />
                            </strong></p></td>
                    <td width="136" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_globalau" name="sinc_globalau" value="<?php echo @$sinc_globalau; ?>" />
                            </strong></p></td>
                </tr>
                <tr>
                    <td width="494" valign="top"><ul>
                            <li>De imitación</li>
                        </ul></td>
                    <td width="162" valign="top"><p>
                            <input type="text" class="input_txt valid" id="sinc_imitacionp" name="sinc_imitacionp" value="<?php echo @$sinc_imitacionp; ?>" />
                            
                        </p></td>
                    <td width="136" valign="top"><p>
                            <input type="text" class="input_txt valid" id="sinc_imitacioni" name="sinc_imitacioni" value="<?php echo @$sinc_imitacioni; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="494" valign="top"><ul>
                            <li>De coordinación</li>
                        </ul></td>
                    <td width="162" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_coopre" name="sinc_coopre" value="<?php echo @$sinc_coopre; ?>" />
                            </strong></p></td>
                    <td width="136" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_coo_au" name="sinc_coo_au" value="<?php echo @$sinc_coo_au; ?>" />
                            </strong></p></td>
                </tr>
                <tr>
                    <td width="494" valign="top"><ul>
                            <li>Signo de flexión combinada del muslo y del    tronco</li>
                        </ul></td>
                    <td width="162" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_flexpre" name="sinc_flexpre" value="<?php echo @$sinc_flexpre; ?>" />
                            </strong></p></td>
                    <td width="136" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_flexau" name="sinc_flexau" value="<?php echo @$sinc_flexau; ?>" />
                            </strong></p></td>
                </tr>
                <tr>
                    <td width="494" valign="top"><ul>
                            <li>Signo de Neri</li>
                        </ul></td>
                    <td width="162" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_neripre" name="sinc_neripre" value="<?php echo @$sinc_neripre; ?>" />
                            </strong></p></td>
                    <td width="136" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_neriau" name="sinc_neriau" value="<?php echo @$sinc_neriau; ?>" />
                            </strong></p></td>
                </tr>
                <tr>
                    <td width="494" valign="top"><ul>
                            <li>Fenómeno de Hoover</li>
                        </ul></td>
                    <td width="162" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_hoopre" name="sinc_hoopre" value="<?php echo @$sinc_hoopre; ?>" />
                            </strong></p></td>
                    <td width="136" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_hooau" name="sinc_hooau" value="<?php echo @$sinc_hooau; ?>" />
                            </strong></p></td>
                </tr>
                <tr>
                    <td width="494" valign="top"><ul>
                            <li>Signo de Caucciapouti</li>
                        </ul></td>
                    <td width="162" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_caupre" name="sinc_caupre" value="<?php echo @$sinc_caupre; ?>" />
                            </strong></p></td>
                    <td width="136" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_cauau" name="sinc_cauau" value="<?php echo @$sinc_cauau; ?>" />
                            </strong></p></td>
                </tr>
                <tr>
                    <td width="494" valign="top"><ul>
                            <li>Signo de Kippel y Mattieu – Pierre Well</li>
                        </ul></td>
                    <td width="162" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_kippre" name="sinc_kippre" value="<?php echo @$sinc_kippre; ?>" />
                            </strong></p></td>
                    <td width="136" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_kipau" name="sinc_kipau" value="<?php echo @$sinc_kipau; ?>" />
                            </strong></p></td>
                </tr>
                <tr>
                    <td width="494" valign="top"><ul>
                            <li>Fenómeno de Raimiste</li>
                        </ul></td>
                    <td width="162" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_raimpre" name="sinc_raimpre" value="<?php echo @$sinc_raimpre; ?>" />
                            </strong></p></td>
                    <td width="136" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_rainau" name="sinc_rainau" value="<?php echo @$sinc_rainau; ?>" />
                            </strong></p></td>
                </tr>
                <tr>
                    <td width="494" valign="top"><ul>
                            <li>Fenómeno de grasset y gaussel</li>
                        </ul></td>
                    <td width="162" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_grapre" name="sinc_grapre" value="<?php echo @$sinc_grapre; ?>" />
                            </strong></p></td>
                    <td width="136" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_gra_au" name="sinc_gra_au" value="<?php echo @$sinc_gra_au; ?>" />
                            </strong></p></td>
                </tr>
                <tr>
                    <td width="494" valign="top"><ul>
                            <li>Fenómeno de esterling</li>
                        </ul></td>
                    <td width="162" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_esterpre" name="sinc_esterpre" value="<?php echo @$sinc_esterpre; ?>" />
                            </strong></p></td>
                    <td width="136" valign="top"><p><strong>
                                <input type="text" class="input_txt valid" id="sinc_esterau" name="sinc_esterau" value="<?php echo @$sinc_esterau; ?>" />
                            </strong></p></td>
                </tr>
            </table>
            <p><strong>OBSERVACIONES:
                    <input type="text" class="input_txt valid" id="obser3" name="obser3" value="<?php echo @$obser3; ?>" />
                </strong></p>
            <p><strong>&nbsp;</strong></p>
            <ul>
                <li><strong>Espasticidad:  (</strong>Ashworth  no modificado<strong>)</strong></li>
            </ul>
            <table border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="210" valign="top"><p align="center"><strong>REGION</strong></p></td>
                    <td width="190" valign="top"><p align="center"><strong>GRADO</strong></p></td>
                </tr>
                <tr>
                    <td width="210" valign="top"><ul>
                            <li>Muñeca</li>
                        </ul></td>
                    <td width="190" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="espa_mun" name="espa_mun" value="<?php echo @$espa_mun; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="210" valign="top"><ul>
                            <li>Codo</li>
                        </ul></td>
                    <td width="190" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="espa_codo" name="espa_codo" value="<?php echo @$espa_codo; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="210" valign="top"><ul>
                            <li>Hombro</li>
                        </ul></td>
                    <td width="190" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="espa_nomb" name="espa_nomb" value="<?php echo @$espa_nomb; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="210" valign="top"><ul>
                            <li>Cuello de pie</li>
                        </ul></td>
                    <td width="190" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="espa_cuello" name="espa_cuello" value="<?php echo @$espa_cuello; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="210" valign="top"><ul>
                            <li>Rodilla</li>
                        </ul></td>
                    <td width="190" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="espa_rodilla" name="espa_rodilla" value="<?php echo @$espa_rodilla; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="210" valign="top"><ul>
                            <li>Cadera</li>
                        </ul></td>
                    <td width="190" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="espa_cadera" name="espa_cadera" value="<?php echo @$espa_cadera; ?>" />
                        </p></td>
                </tr>
            </table>
            <br>
                <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>