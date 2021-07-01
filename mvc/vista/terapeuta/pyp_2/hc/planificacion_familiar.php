<?php
if (isset($_REQUEST['guardar_hc_planificacion_familiar']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['idhc_planificacion_familiar'] == 'new') {

$sql = "INSERT INTO hc_planificacion_familiar (
`idhc_planificacion_familiar`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`hiperte_s`,
`hiperte_n`,
`hiperte_par`,
`dia_m_s`,
`dia_m_n`,
`dia_m__par`,
`cardio_s`,
`cardio_n`,
`cardio_par`,
`hepa_1`,
`hepa_2`,
`hepa_3`,
`tumores_1`,
`tumores_2`,
`tumores_3`,
`otros_2`,
`p_hiper_1`,
`p_hiper_2`,
`p_hiper_3`,
`p_dia_1`,
`p_dia_2`,
`p_dia_3`,
`p_cardio_1`,
`p_cardio_2`,
`p_cardio_3`,
`p_hepato_1`,
`p_hepato_2`,
`p_hepato_3`,
`p_tumor_1`,
`p_tumor_2`,
`p_tumor_3`,
`p_mental_1`,
`p_mental_2`,
`p_mental_3`,
`p_varices_1`,
`p_varices_2`,
`p_varices_3`,
`p_tromb_1`,
`p_tromb_2`,
`p_tromb_3`,
`p_cefal_1`,
`p_cefal_2`,
`p_cefal_3`,
`p__pulmo_1`,
`p__pulmo_2`,
`p__pulmo_3`,
`otro_2_2`,
`tabaco_1`,
`tabaco_2`,
`tabaco_3`,
`droga_1`,
`droga_2`,
`droga_3`,
`medic_1`,
`medic_2`,
`medic_3`,
`dieta_1`,
`dieta_2`,
`dieta_3`,
`otros_2_3`,
`menarca`,
`fum`,
`ciclo_s`,
`ciclo_n`,
`patron_m`,
`trastorno`,
`inicio_sex`,
`numero_sex`,
`g_3`,
`p_3`,
`a_3`,
`c_3`,
`numero_vivo`,
`embarazo_s`,
`embarazo_n`,
`embarazo_cuanto`,
`fup_2`,
`ets_s`,
`ets_n`,
`ets_cual`,
`cita_p_fecha`,
`cita_p_res`,
`metodo_1`,
`metodo_2`,
`metodo_3`,
`prescrip_1`,
`prescrip_2`,
`prescrip_3`,
`tiempo_1`,
`tiempo_2`,
`tiempo_3`,
`problemas_1`,
`problemas_2`,
`problemas_3`,
`sv_pa`,
`sv_fc`,
`sv_fr`,
`sv_temp`,
`peso`,
`talla`,
`cabeza`,
`ojos`,
`boca`,
`orl`,
`cuello`,
`cardiopul`,
`mamas`,
`abdomen`,
`genitoun`,
`exttem`,
`snc`,
`cp`,
`piel_muco`,
`rdo`,
`pla_pild`,
`pla_diu`,
`pla_quirur`,
`pla_otros`,
`pla_inyec`,
`pla_conducta`,
`pla_cita`,
`metodoporuso`,
`anamesi`,
`sm_peso_1`,
`sm_peso_2`,
`sm_cabeza_1`,
`sm_cabeza_2`,
`sm_ojos_1`,
`sm_ojos_2`,
`sm_boca_1`,
`sm_boca_2`,
`sm_orl_1`,
`sm_orl_2`,
`sm_cuello_1`,
`sm_cuello_2`,
`sm_mamas_1`,
`sm_mamas_2`,
`sm_cardio_1`,
`sm_cardio_2`,
`sm_abdo_1`,
`sm_abdo_2`,
`sm_genito_1`,
`sm_genito_2`,
`sm_extre_1`,
`sm_extre_2`,
`sm_piel_1`,
`sm_piel_2`,
`sm_nerv_1`,
`sm_nerv_2`,
`sm_diag_1`,
`sm_diag_2`,
`sm_riesgo_1`,
`sm_riesgo_2`,
`sm_conduc`,
`cambio_1`,
`cambio_2`,
`remision_1`,
`remision_2`,
`sm_otras_1`,
`sm_otras_2`,
`educacion_1`,
`educacion_2`,
`prox_cita`,
`pmental_1`,
`pmental_2`,
`pmental_3`,
`palcohol_1`,
`palcohol_2`,
`palcohol_3`,
`uso_metodo_1`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['hiperte_s']."' ,
'".$_REQUEST['hiperte_n']."' ,
'".$_REQUEST['hiperte_par']."' ,
'".$_REQUEST['dia_m_s']."' ,
'".$_REQUEST['dia_m_n']."' ,
'".$_REQUEST['dia_m__par']."' ,
'".$_REQUEST['cardio_s']."' ,
'".$_REQUEST['cardio_n']."' ,
'".$_REQUEST['cardio_par']."' ,
'".$_REQUEST['hepa_1']."' ,
'".$_REQUEST['hepa_2']."' ,
'".$_REQUEST['hepa_3']."' ,
'".$_REQUEST['tumores_1']."' ,
'".$_REQUEST['tumores_2']."' ,
'".$_REQUEST['tumores_3']."' ,
'".$_REQUEST['otros_2']."' ,
'".$_REQUEST['p_hiper_1']."' ,
'".$_REQUEST['p_hiper_2']."' ,
'".$_REQUEST['p_hiper_3']."' ,
'".$_REQUEST['p_dia_1']."' ,
'".$_REQUEST['p_dia_2']."' ,
'".$_REQUEST['p_dia_3']."' ,
'".$_REQUEST['p_cardio_1']."' ,
'".$_REQUEST['p_cardio_2']."' ,
'".$_REQUEST['p_cardio_3']."' ,
'".$_REQUEST['p_hepato_1']."' ,
'".$_REQUEST['p_hepato_2']."' ,
'".$_REQUEST['p_hepato_3']."' ,
'".$_REQUEST['p_tumor_1']."' ,
'".$_REQUEST['p_tumor_2']."' ,
'".$_REQUEST['p_tumor_3']."' ,
'".$_REQUEST['p_mental_1']."' ,
'".$_REQUEST['p_mental_2']."' ,
'".$_REQUEST['p_mental_3']."' ,
'".$_REQUEST['p_varices_1']."' ,
'".$_REQUEST['p_varices_2']."' ,
'".$_REQUEST['p_varices_3']."' ,
'".$_REQUEST['p_tromb_1']."' ,
'".$_REQUEST['p_tromb_2']."' ,
'".$_REQUEST['p_tromb_3']."' ,
'".$_REQUEST['p_cefal_1']."' ,
'".$_REQUEST['p_cefal_2']."' ,
'".$_REQUEST['p_cefal_3']."' ,
'".$_REQUEST['p__pulmo_1']."' ,
'".$_REQUEST['p__pulmo_2']."' ,
'".$_REQUEST['p__pulmo_3']."' ,
'".$_REQUEST['otro_2_2']."' ,
'".$_REQUEST['tabaco_1']."' ,
'".$_REQUEST['tabaco_2']."' ,
'".$_REQUEST['tabaco_3']."' ,
'".$_REQUEST['droga_1']."' ,
'".$_REQUEST['droga_2']."' ,
'".$_REQUEST['droga_3']."' ,
'".$_REQUEST['medic_1']."' ,
'".$_REQUEST['medic_2']."' ,
'".$_REQUEST['medic_3']."' ,
'".$_REQUEST['dieta_1']."' ,
'".$_REQUEST['dieta_2']."' ,
'".$_REQUEST['dieta_3']."' ,
'".$_REQUEST['otros_2_3']."' ,
'".$_REQUEST['menarca']."' ,
'".$_REQUEST['fum']."' ,
'".$_REQUEST['ciclo_s']."' ,
'".$_REQUEST['ciclo_n']."' ,
'".$_REQUEST['patron_m']."' ,
'".$_REQUEST['trastorno']."' ,
'".$_REQUEST['inicio_sex']."' ,
'".$_REQUEST['numero_sex']."' ,
'".$_REQUEST['g_3']."' ,
'".$_REQUEST['p_3']."' ,
'".$_REQUEST['a_3']."' ,
'".$_REQUEST['c_3']."' ,
'".$_REQUEST['numero_vivo']."' ,
'".$_REQUEST['embarazo_s']."' ,
'".$_REQUEST['embarazo_n']."' ,
'".$_REQUEST['embarazo_cuanto']."' ,
'".$_REQUEST['fup_2']."' ,
'".$_REQUEST['ets_s']."' ,
'".$_REQUEST['ets_n']."' ,
'".$_REQUEST['ets_cual']."' ,
'".$_REQUEST['cita_p_fecha']."' ,
'".$_REQUEST['cita_p_res']."' ,
'".$_REQUEST['metodo_1']."' ,
'".$_REQUEST['metodo_2']."' ,
'".$_REQUEST['metodo_3']."' ,
'".$_REQUEST['prescrip_1']."' ,
'".$_REQUEST['prescrip_2']."' ,
'".$_REQUEST['prescrip_3']."' ,
'".$_REQUEST['tiempo_1']."' ,
'".$_REQUEST['tiempo_2']."' ,
'".$_REQUEST['tiempo_3']."' ,
'".$_REQUEST['problemas_1']."' ,
'".$_REQUEST['problemas_2']."' ,
'".$_REQUEST['problemas_3']."' ,
'".$_REQUEST['sv_pa']."' ,
'".$_REQUEST['sv_fc']."' ,
'".$_REQUEST['sv_fr']."' ,
'".$_REQUEST['sv_temp']."' ,
'".$_REQUEST['peso']."' ,
'".$_REQUEST['talla']."' ,
'".$_REQUEST['cabeza']."' ,
'".$_REQUEST['ojos']."' ,
'".$_REQUEST['boca']."' ,
'".$_REQUEST['orl']."' ,
'".$_REQUEST['cuello']."' ,
'".$_REQUEST['cardiopul']."' ,
'".$_REQUEST['mamas']."' ,
'".$_REQUEST['abdomen']."' ,
'".$_REQUEST['genitoun']."' ,
'".$_REQUEST['exttem']."' ,
'".$_REQUEST['snc']."' ,
'".$_REQUEST['cp']."' ,
'".$_REQUEST['piel_muco']."' ,
'".$_REQUEST['rdo']."' ,
'".$_REQUEST['pla_pild']."' ,
'".$_REQUEST['pla_diu']."' ,
'".$_REQUEST['pla_quirur']."' ,
'".$_REQUEST['pla_otros']."' ,
'".$_REQUEST['pla_inyec']."' ,
'".$_REQUEST['pla_conducta']."' ,
'".$_REQUEST['pla_cita']."' ,
'".$_REQUEST['metodoporuso']."' ,
'".$_REQUEST['anamesi']."' ,
'".$_REQUEST['sm_peso_1']."' ,
'".$_REQUEST['sm_peso_2']."' ,
'".$_REQUEST['sm_cabeza_1']."' ,
'".$_REQUEST['sm_cabeza_2']."' ,
'".$_REQUEST['sm_ojos_1']."' ,
'".$_REQUEST['sm_ojos_2']."' ,
'".$_REQUEST['sm_boca_1']."' ,
'".$_REQUEST['sm_boca_2']."' ,
'".$_REQUEST['sm_orl_1']."' ,
'".$_REQUEST['sm_orl_2']."' ,
'".$_REQUEST['sm_cuello_1']."' ,
'".$_REQUEST['sm_cuello_2']."' ,
'".$_REQUEST['sm_mamas_1']."' ,
'".$_REQUEST['sm_mamas_2']."' ,
'".$_REQUEST['sm_cardio_1']."' ,
'".$_REQUEST['sm_cardio_2']."' ,
'".$_REQUEST['sm_abdo_1']."' ,
'".$_REQUEST['sm_abdo_2']."' ,
'".$_REQUEST['sm_genito_1']."' ,
'".$_REQUEST['sm_genito_2']."' ,
'".$_REQUEST['sm_extre_1']."' ,
'".$_REQUEST['sm_extre_2']."' ,
'".$_REQUEST['sm_piel_1']."' ,
'".$_REQUEST['sm_piel_2']."' ,
'".$_REQUEST['sm_nerv_1']."' ,
'".$_REQUEST['sm_nerv_2']."' ,
'".$_REQUEST['sm_diag_1']."' ,
'".$_REQUEST['sm_diag_2']."' ,
'".$_REQUEST['sm_riesgo_1']."' ,
'".$_REQUEST['sm_riesgo_2']."' ,
'".$_REQUEST['sm_conduc']."' ,
'".$_REQUEST['cambio_1']."' ,
'".$_REQUEST['cambio_2']."' ,
'".$_REQUEST['remision_1']."' ,
'".$_REQUEST['remision_2']."' ,
'".$_REQUEST['sm_otras_1']."' ,
'".$_REQUEST['sm_otras_2']."' ,
'".$_REQUEST['educacion_1']."' ,
'".$_REQUEST['educacion_2']."' ,
'".$_REQUEST['prox_cita']."' ,
'".$_REQUEST['pmental_1']."' ,
'".$_REQUEST['pmental_2']."' ,
'".$_REQUEST['pmental_3']."' ,
'".$_REQUEST['palcohol_1']."' ,
'".$_REQUEST['palcohol_2']."' ,
'".$_REQUEST['palcohol_3']."' ,
'".$_REQUEST['uso_metodo_1']."'
) ";


} else if ($_REQUEST['idhc_planificacion_familiar'] != '') {

$sql = "UPDATE hc_planificacion_familiar set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`hiperte_s` = '".$_REQUEST['hiperte_s']."' ,
`hiperte_n` = '".$_REQUEST['hiperte_n']."' ,
`hiperte_par` = '".$_REQUEST['hiperte_par']."' ,
`dia_m_s` = '".$_REQUEST['dia_m_s']."' ,
`dia_m_n` = '".$_REQUEST['dia_m_n']."' ,
`dia_m__par` = '".$_REQUEST['dia_m__par']."' ,
`cardio_s` = '".$_REQUEST['cardio_s']."' ,
`cardio_n` = '".$_REQUEST['cardio_n']."' ,
`cardio_par` = '".$_REQUEST['cardio_par']."' ,
`hepa_1` = '".$_REQUEST['hepa_1']."' ,
`hepa_2` = '".$_REQUEST['hepa_2']."' ,
`hepa_3` = '".$_REQUEST['hepa_3']."' ,
`tumores_1` = '".$_REQUEST['tumores_1']."' ,
`tumores_2` = '".$_REQUEST['tumores_2']."' ,
`tumores_3` = '".$_REQUEST['tumores_3']."' ,
`otros_2` = '".$_REQUEST['otros_2']."' ,
`p_hiper_1` = '".$_REQUEST['p_hiper_1']."' ,
`p_hiper_2` = '".$_REQUEST['p_hiper_2']."' ,
`p_hiper_3` = '".$_REQUEST['p_hiper_3']."' ,
`p_dia_1` = '".$_REQUEST['p_dia_1']."' ,
`p_dia_2` = '".$_REQUEST['p_dia_2']."' ,
`p_dia_3` = '".$_REQUEST['p_dia_3']."' ,
`p_cardio_1` = '".$_REQUEST['p_cardio_1']."' ,
`p_cardio_2` = '".$_REQUEST['p_cardio_2']."' ,
`p_cardio_3` = '".$_REQUEST['p_cardio_3']."' ,
`p_hepato_1` = '".$_REQUEST['p_hepato_1']."' ,
`p_hepato_2` = '".$_REQUEST['p_hepato_2']."' ,
`p_hepato_3` = '".$_REQUEST['p_hepato_3']."' ,
`p_tumor_1` = '".$_REQUEST['p_tumor_1']."' ,
`p_tumor_2` = '".$_REQUEST['p_tumor_2']."' ,
`p_tumor_3` = '".$_REQUEST['p_tumor_3']."' ,
`p_mental_1` = '".$_REQUEST['p_mental_1']."' ,
`p_mental_2` = '".$_REQUEST['p_mental_2']."' ,
`p_mental_3` = '".$_REQUEST['p_mental_3']."' ,
`p_varices_1` = '".$_REQUEST['p_varices_1']."' ,
`p_varices_2` = '".$_REQUEST['p_varices_2']."' ,
`p_varices_3` = '".$_REQUEST['p_varices_3']."' ,
`p_tromb_1` = '".$_REQUEST['p_tromb_1']."' ,
`p_tromb_2` = '".$_REQUEST['p_tromb_2']."' ,
`p_tromb_3` = '".$_REQUEST['p_tromb_3']."' ,
`p_cefal_1` = '".$_REQUEST['p_cefal_1']."' ,
`p_cefal_2` = '".$_REQUEST['p_cefal_2']."' ,
`p_cefal_3` = '".$_REQUEST['p_cefal_3']."' ,
`p__pulmo_1` = '".$_REQUEST['p__pulmo_1']."' ,
`p__pulmo_2` = '".$_REQUEST['p__pulmo_2']."' ,
`p__pulmo_3` = '".$_REQUEST['p__pulmo_3']."' ,
`otro_2_2` = '".$_REQUEST['otro_2_2']."' ,
`tabaco_1` = '".$_REQUEST['tabaco_1']."' ,
`tabaco_2` = '".$_REQUEST['tabaco_2']."' ,
`tabaco_3` = '".$_REQUEST['tabaco_3']."' ,
`droga_1` = '".$_REQUEST['droga_1']."' ,
`droga_2` = '".$_REQUEST['droga_2']."' ,
`droga_3` = '".$_REQUEST['droga_3']."' ,
`medic_1` = '".$_REQUEST['medic_1']."' ,
`medic_2` = '".$_REQUEST['medic_2']."' ,
`medic_3` = '".$_REQUEST['medic_3']."' ,
`dieta_1` = '".$_REQUEST['dieta_1']."' ,
`dieta_2` = '".$_REQUEST['dieta_2']."' ,
`dieta_3` = '".$_REQUEST['dieta_3']."' ,
`otros_2_3` = '".$_REQUEST['otros_2_3']."' ,
`menarca` = '".$_REQUEST['menarca']."' ,
`fum` = '".$_REQUEST['fum']."' ,
`ciclo_s` = '".$_REQUEST['ciclo_s']."' ,
`ciclo_n` = '".$_REQUEST['ciclo_n']."' ,
`patron_m` = '".$_REQUEST['patron_m']."' ,
`trastorno` = '".$_REQUEST['trastorno']."' ,
`inicio_sex` = '".$_REQUEST['inicio_sex']."' ,
`numero_sex` = '".$_REQUEST['numero_sex']."' ,
`g_3` = '".$_REQUEST['g_3']."' ,
`p_3` = '".$_REQUEST['p_3']."' ,
`a_3` = '".$_REQUEST['a_3']."' ,
`c_3` = '".$_REQUEST['c_3']."' ,
`numero_vivo` = '".$_REQUEST['numero_vivo']."' ,
`embarazo_s` = '".$_REQUEST['embarazo_s']."' ,
`embarazo_n` = '".$_REQUEST['embarazo_n']."' ,
`embarazo_cuanto` = '".$_REQUEST['embarazo_cuanto']."' ,
`fup_2` = '".$_REQUEST['fup_2']."' ,
`ets_s` = '".$_REQUEST['ets_s']."' ,
`ets_n` = '".$_REQUEST['ets_n']."' ,
`ets_cual` = '".$_REQUEST['ets_cual']."' ,
`cita_p_fecha` = '".$_REQUEST['cita_p_fecha']."' ,
`cita_p_res` = '".$_REQUEST['cita_p_res']."' ,
`metodo_1` = '".$_REQUEST['metodo_1']."' ,
`metodo_2` = '".$_REQUEST['metodo_2']."' ,
`metodo_3` = '".$_REQUEST['metodo_3']."' ,
`prescrip_1` = '".$_REQUEST['prescrip_1']."' ,
`prescrip_2` = '".$_REQUEST['prescrip_2']."' ,
`prescrip_3` = '".$_REQUEST['prescrip_3']."' ,
`tiempo_1` = '".$_REQUEST['tiempo_1']."' ,
`tiempo_2` = '".$_REQUEST['tiempo_2']."' ,
`tiempo_3` = '".$_REQUEST['tiempo_3']."' ,
`problemas_1` = '".$_REQUEST['problemas_1']."' ,
`problemas_2` = '".$_REQUEST['problemas_2']."' ,
`problemas_3` = '".$_REQUEST['problemas_3']."' ,
`sv_pa` = '".$_REQUEST['sv_pa']."' ,
`sv_fc` = '".$_REQUEST['sv_fc']."' ,
`sv_fr` = '".$_REQUEST['sv_fr']."' ,
`sv_temp` = '".$_REQUEST['sv_temp']."' ,
`peso` = '".$_REQUEST['peso']."' ,
`talla` = '".$_REQUEST['talla']."' ,
`cabeza` = '".$_REQUEST['cabeza']."' ,
`ojos` = '".$_REQUEST['ojos']."' ,
`boca` = '".$_REQUEST['boca']."' ,
`orl` = '".$_REQUEST['orl']."' ,
`cuello` = '".$_REQUEST['cuello']."' ,
`cardiopul` = '".$_REQUEST['cardiopul']."' ,
`mamas` = '".$_REQUEST['mamas']."' ,
`abdomen` = '".$_REQUEST['abdomen']."' ,
`genitoun` = '".$_REQUEST['genitoun']."' ,
`exttem` = '".$_REQUEST['exttem']."' ,
`snc` = '".$_REQUEST['snc']."' ,
`cp` = '".$_REQUEST['cp']."' ,
`piel_muco` = '".$_REQUEST['piel_muco']."' ,
`rdo` = '".$_REQUEST['rdo']."' ,
`pla_pild` = '".$_REQUEST['pla_pild']."' ,
`pla_diu` = '".$_REQUEST['pla_diu']."' ,
`pla_quirur` = '".$_REQUEST['pla_quirur']."' ,
`pla_otros` = '".$_REQUEST['pla_otros']."' ,
`pla_inyec` = '".$_REQUEST['pla_inyec']."' ,
`pla_conducta` = '".$_REQUEST['pla_conducta']."' ,
`pla_cita` = '".$_REQUEST['pla_cita']."' ,
`metodoporuso` = '".$_REQUEST['metodoporuso']."' ,
`anamesi` = '".$_REQUEST['anamesi']."' ,
`sm_peso_1` = '".$_REQUEST['sm_peso_1']."' ,
`sm_peso_2` = '".$_REQUEST['sm_peso_2']."' ,
`sm_cabeza_1` = '".$_REQUEST['sm_cabeza_1']."' ,
`sm_cabeza_2` = '".$_REQUEST['sm_cabeza_2']."' ,
`sm_ojos_1` = '".$_REQUEST['sm_ojos_1']."' ,
`sm_ojos_2` = '".$_REQUEST['sm_ojos_2']."' ,
`sm_boca_1` = '".$_REQUEST['sm_boca_1']."' ,
`sm_boca_2` = '".$_REQUEST['sm_boca_2']."' ,
`sm_orl_1` = '".$_REQUEST['sm_orl_1']."' ,
`sm_orl_2` = '".$_REQUEST['sm_orl_2']."' ,
`sm_cuello_1` = '".$_REQUEST['sm_cuello_1']."' ,
`sm_cuello_2` = '".$_REQUEST['sm_cuello_2']."' ,
`sm_mamas_1` = '".$_REQUEST['sm_mamas_1']."' ,
`sm_mamas_2` = '".$_REQUEST['sm_mamas_2']."' ,
`sm_cardio_1` = '".$_REQUEST['sm_cardio_1']."' ,
`sm_cardio_2` = '".$_REQUEST['sm_cardio_2']."' ,
`sm_abdo_1` = '".$_REQUEST['sm_abdo_1']."' ,
`sm_abdo_2` = '".$_REQUEST['sm_abdo_2']."' ,
`sm_genito_1` = '".$_REQUEST['sm_genito_1']."' ,
`sm_genito_2` = '".$_REQUEST['sm_genito_2']."' ,
`sm_extre_1` = '".$_REQUEST['sm_extre_1']."' ,
`sm_extre_2` = '".$_REQUEST['sm_extre_2']."' ,
`sm_piel_1` = '".$_REQUEST['sm_piel_1']."' ,
`sm_piel_2` = '".$_REQUEST['sm_piel_2']."' ,
`sm_nerv_1` = '".$_REQUEST['sm_nerv_1']."' ,
`sm_nerv_2` = '".$_REQUEST['sm_nerv_2']."' ,
`sm_diag_1` = '".$_REQUEST['sm_diag_1']."' ,
`sm_diag_2` = '".$_REQUEST['sm_diag_2']."' ,
`sm_riesgo_1` = '".$_REQUEST['sm_riesgo_1']."' ,
`sm_riesgo_2` = '".$_REQUEST['sm_riesgo_2']."' ,
`sm_conduc` = '".$_REQUEST['sm_conduc']."' ,
`cambio_1` = '".$_REQUEST['cambio_1']."' ,
`cambio_2` = '".$_REQUEST['cambio_2']."' ,
`remision_1` = '".$_REQUEST['remision_1']."' ,
`remision_2` = '".$_REQUEST['remision_2']."' ,
`sm_otras_1` = '".$_REQUEST['sm_otras_1']."' ,
`sm_otras_2` = '".$_REQUEST['sm_otras_2']."' ,
`educacion_1` = '".$_REQUEST['educacion_1']."' ,
`educacion_2` = '".$_REQUEST['educacion_2']."' ,
`prox_cita` = '".$_REQUEST['prox_cita']."' ,
`pmental_1` = '".$_REQUEST['pmental_1']."' ,
`pmental_2` = '".$_REQUEST['pmental_2']."' ,
`pmental_3` = '".$_REQUEST['pmental_3']."' ,
`palcohol_1` = '".$_REQUEST['palcohol_1']."' ,
`palcohol_2` = '".$_REQUEST['palcohol_2']."' ,
`palcohol_3` = '".$_REQUEST['palcohol_3']."' ,
`uso_metodo_1` = '".$_REQUEST['uso_metodo_1']."' WHERE `idhc_planificacion_familiar` = '".$_REQUEST['idhc_planificacion_familiar']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$idhc_planificacion_familiar = 'new';
$sql = "SELECT * from hc_planificacion_familiar WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$idhc_planificacion_familiar = $row['idhc_planificacion_familiar'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$hiperte_s = $row['hiperte_s'];
$hiperte_n = $row['hiperte_n'];
$hiperte_par = $row['hiperte_par'];
$dia_m_s = $row['dia_m_s'];
$dia_m_n = $row['dia_m_n'];
$dia_m__par = $row['dia_m__par'];
$cardio_s = $row['cardio_s'];
$cardio_n = $row['cardio_n'];
$cardio_par = $row['cardio_par'];
$hepa_1 = $row['hepa_1'];
$hepa_2 = $row['hepa_2'];
$hepa_3 = $row['hepa_3'];
$tumores_1 = $row['tumores_1'];
$tumores_2 = $row['tumores_2'];
$tumores_3 = $row['tumores_3'];
$otros_2 = $row['otros_2'];
$p_hiper_1 = $row['p_hiper_1'];
$p_hiper_2 = $row['p_hiper_2'];
$p_hiper_3 = $row['p_hiper_3'];
$p_dia_1 = $row['p_dia_1'];
$p_dia_2 = $row['p_dia_2'];
$p_dia_3 = $row['p_dia_3'];
$p_cardio_1 = $row['p_cardio_1'];
$p_cardio_2 = $row['p_cardio_2'];
$p_cardio_3 = $row['p_cardio_3'];
$p_hepato_1 = $row['p_hepato_1'];
$p_hepato_2 = $row['p_hepato_2'];
$p_hepato_3 = $row['p_hepato_3'];
$p_tumor_1 = $row['p_tumor_1'];
$p_tumor_2 = $row['p_tumor_2'];
$p_tumor_3 = $row['p_tumor_3'];
$p_mental_1 = $row['p_mental_1'];
$p_mental_2 = $row['p_mental_2'];
$p_mental_3 = $row['p_mental_3'];
$p_varices_1 = $row['p_varices_1'];
$p_varices_2 = $row['p_varices_2'];
$p_varices_3 = $row['p_varices_3'];
$p_tromb_1 = $row['p_tromb_1'];
$p_tromb_2 = $row['p_tromb_2'];
$p_tromb_3 = $row['p_tromb_3'];
$p_cefal_1 = $row['p_cefal_1'];
$p_cefal_2 = $row['p_cefal_2'];
$p_cefal_3 = $row['p_cefal_3'];
$p__pulmo_1 = $row['p__pulmo_1'];
$p__pulmo_2 = $row['p__pulmo_2'];
$p__pulmo_3 = $row['p__pulmo_3'];
$otro_2_2 = $row['otro_2_2'];
$tabaco_1 = $row['tabaco_1'];
$tabaco_2 = $row['tabaco_2'];
$tabaco_3 = $row['tabaco_3'];
$droga_1 = $row['droga_1'];
$droga_2 = $row['droga_2'];
$droga_3 = $row['droga_3'];
$medic_1 = $row['medic_1'];
$medic_2 = $row['medic_2'];
$medic_3 = $row['medic_3'];
$dieta_1 = $row['dieta_1'];
$dieta_2 = $row['dieta_2'];
$dieta_3 = $row['dieta_3'];
$otros_2_3 = $row['otros_2_3'];
$menarca = $row['menarca'];
$fum = $row['fum'];
$ciclo_s = $row['ciclo_s'];
$ciclo_n = $row['ciclo_n'];
$patron_m = $row['patron_m'];
$trastorno = $row['trastorno'];
$inicio_sex = $row['inicio_sex'];
$numero_sex = $row['numero_sex'];
$g_3 = $row['g_3'];
$p_3 = $row['p_3'];
$a_3 = $row['a_3'];
$c_3 = $row['c_3'];
$numero_vivo = $row['numero_vivo'];
$embarazo_s = $row['embarazo_s'];
$embarazo_n = $row['embarazo_n'];
$embarazo_cuanto = $row['embarazo_cuanto'];
$fup_2 = $row['fup_2'];
$ets_s = $row['ets_s'];
$ets_n = $row['ets_n'];
$ets_cual = $row['ets_cual'];
$cita_p_fecha = $row['cita_p_fecha'];
$cita_p_res = $row['cita_p_res'];
$metodo_1 = $row['metodo_1'];
$metodo_2 = $row['metodo_2'];
$metodo_3 = $row['metodo_3'];
$prescrip_1 = $row['prescrip_1'];
$prescrip_2 = $row['prescrip_2'];
$prescrip_3 = $row['prescrip_3'];
$tiempo_1 = $row['tiempo_1'];
$tiempo_2 = $row['tiempo_2'];
$tiempo_3 = $row['tiempo_3'];
$problemas_1 = $row['problemas_1'];
$problemas_2 = $row['problemas_2'];
$problemas_3 = $row['problemas_3'];
$sv_pa = $row['sv_pa'];
$sv_fc = $row['sv_fc'];
$sv_fr = $row['sv_fr'];
$sv_temp = $row['sv_temp'];
$peso = $row['peso'];
$talla = $row['talla'];
$cabeza = $row['cabeza'];
$ojos = $row['ojos'];
$boca = $row['boca'];
$orl = $row['orl'];
$cuello = $row['cuello'];
$cardiopul = $row['cardiopul'];
$mamas = $row['mamas'];
$abdomen = $row['abdomen'];
$genitoun = $row['genitoun'];
$exttem = $row['exttem'];
$snc = $row['snc'];
$cp = $row['cp'];
$piel_muco = $row['piel_muco'];
$rdo = $row['rdo'];
$pla_pild = $row['pla_pild'];
$pla_diu = $row['pla_diu'];
$pla_quirur = $row['pla_quirur'];
$pla_otros = $row['pla_otros'];
$pla_inyec = $row['pla_inyec'];
$pla_conducta = $row['pla_conducta'];
$pla_cita = $row['pla_cita'];
$metodoporuso = $row['metodoporuso'];
$anamesi = $row['anamesi'];
$sm_peso_1 = $row['sm_peso_1'];
$sm_peso_2 = $row['sm_peso_2'];
$sm_cabeza_1 = $row['sm_cabeza_1'];
$sm_cabeza_2 = $row['sm_cabeza_2'];
$sm_ojos_1 = $row['sm_ojos_1'];
$sm_ojos_2 = $row['sm_ojos_2'];
$sm_boca_1 = $row['sm_boca_1'];
$sm_boca_2 = $row['sm_boca_2'];
$sm_orl_1 = $row['sm_orl_1'];
$sm_orl_2 = $row['sm_orl_2'];
$sm_cuello_1 = $row['sm_cuello_1'];
$sm_cuello_2 = $row['sm_cuello_2'];
$sm_mamas_1 = $row['sm_mamas_1'];
$sm_mamas_2 = $row['sm_mamas_2'];
$sm_cardio_1 = $row['sm_cardio_1'];
$sm_cardio_2 = $row['sm_cardio_2'];
$sm_abdo_1 = $row['sm_abdo_1'];
$sm_abdo_2 = $row['sm_abdo_2'];
$sm_genito_1 = $row['sm_genito_1'];
$sm_genito_2 = $row['sm_genito_2'];
$sm_extre_1 = $row['sm_extre_1'];
$sm_extre_2 = $row['sm_extre_2'];
$sm_piel_1 = $row['sm_piel_1'];
$sm_piel_2 = $row['sm_piel_2'];
$sm_nerv_1 = $row['sm_nerv_1'];
$sm_nerv_2 = $row['sm_nerv_2'];
$sm_diag_1 = $row['sm_diag_1'];
$sm_diag_2 = $row['sm_diag_2'];
$sm_riesgo_1 = $row['sm_riesgo_1'];
$sm_riesgo_2 = $row['sm_riesgo_2'];
$sm_conduc = $row['sm_conduc'];
$cambio_1 = $row['cambio_1'];
$cambio_2 = $row['cambio_2'];
$remision_1 = $row['remision_1'];
$remision_2 = $row['remision_2'];
$sm_otras_1 = $row['sm_otras_1'];
$sm_otras_2 = $row['sm_otras_2'];
$educacion_1 = $row['educacion_1'];
$educacion_2 = $row['educacion_2'];
$prox_cita = $row['prox_cita'];
$pmental_1 = $row['pmental_1'];
$pmental_2 = $row['pmental_2'];
$pmental_3 = $row['pmental_3'];
$palcohol_1 = $row['palcohol_1'];
$palcohol_2 = $row['palcohol_2'];
$palcohol_3 = $row['palcohol_3'];
$uso_metodo_1 = $row['uso_metodo_1'];
break; }

?>
<script>

$(function(){

$("#close-hc_planificacion_familiar").click(function(){
$("#open-hc_planificacion_familiar").show();
$(this).hide();
$("#content-hc_planificacion_familiar").hide('slow');
});

$("#open-hc_planificacion_familiar").click(function(){
$("#close-hc_planificacion_familiar").show();
$(this).hide();
$("#content-hc_planificacion_familiar").show('slow');
});

});

</script>
<fieldset id="hc_planificacion_familiar">
<legend align="left"> <div class="arrow-c" id="close-hc_planificacion_familiar"></div> <div class="arrow-o" id="open-hc_planificacion_familiar" ></div> 
<font>Planificación familiar</font></legend>
<div id="content-hc_planificacion_familiar">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_planificacion_familiar" id="guardar_hc_planificacion_familiar" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_planificacion_familiar" name="form_hc_planificacion_familiar" action="<?php echo @$action_form_hc_planificacion_familiar ?>#hc_planificacion_familiar" method="post">

<input type="hidden" id="id_hc_planificacion_familiar" name="id_hc_planificacion_familiar" value="<?php echo @$id_hc_planificacion_familiar ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="idhc_planificacion_familiar" name="idhc_planificacion_familiar" value="<?php echo @$idhc_planificacion_familiar; ?>" />

<div align="center">PLANIFICACIÓN FAMILIAR
</div>
<div align="center">
  <table width="731" cellpadding="0" cellspacing="0" border="1">
    <col width="137" />
    <col width="165" />
    <col width="86" />
    <col width="70" />
    <tr height="19">
      <td colspan="4" height="19">2-ANTECEDENTES</td>
      </tr>
    <tr height="38">
      <td height="38" width="210">ANTECEDENTES FAMILIARES</td>
        <td width="177">SI</td>
        <td width="168">NO </td>
        <td width="359">PARENTESCO</td>
      </tr>
    <tr height="19">
      <td height="19" width="210">Hipertensión Arterial</td>
        <td width="177"><input type="text" class="input_txt valid" id="hiperte_s" name="hiperte_s" value="<?php echo @$hiperte_s; ?>" /></td>
        <td width="168"><input type="text" class="input_txt valid" id="hiperte_n" name="hiperte_n" value="<?php echo @$hiperte_n; ?>" /></td>
        <td width="359"><input type="text" class="input_txt valid" id="hiperte_par" name="hiperte_par" value="<?php echo @$hiperte_par; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="210">Diabetes Mellitus</td>
        <td width="177"><input type="text" class="input_txt valid" id="dia_m_s" name="dia_m_s" value="<?php echo @$dia_m_s; ?>" /></td>
        <td width="168"><input type="text" class="input_txt valid" id="dia_m_n" name="dia_m_n" value="<?php echo @$dia_m_n; ?>" /></td>
        <td width="359"><input type="text" class="input_txt valid" id="dia_m__par" name="dia_m__par" value="<?php echo @$dia_m__par; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="210">Cardiopatias</td>
        <td width="177"><input type="text" class="input_txt valid" id="cardio_s" name="cardio_s" value="<?php echo @$cardio_s; ?>" /></td>
        <td width="168"><input type="text" class="input_txt valid" id="cardio_n" name="cardio_n" value="<?php echo @$cardio_n; ?>" /></td>
        <td width="359"><input type="text" class="input_txt valid" id="cardio_par" name="cardio_par" value="<?php echo @$cardio_par; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="210">Hepatopatias</td>
        <td width="177"><input type="text" class="input_txt valid" id="hepa_1" name="hepa_1" value="<?php echo @$hepa_1; ?>" /></td>
        <td width="168"><input type="text" class="input_txt valid" id="hepa_2" name="hepa_2" value="<?php echo @$hepa_2; ?>" /></td>
        <td width="359"><input type="text" class="input_txt valid" id="hepa_3" name="hepa_3" value="<?php echo @$hepa_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="210">Tumores</td>
        <td width="177"><input type="text" class="input_txt valid" id="tumores_1" name="tumores_1" value="<?php echo @$tumores_1; ?>" /></td>
        <td width="168"><input type="text" class="input_txt valid" id="tumores_2" name="tumores_2" value="<?php echo @$tumores_2; ?>" /></td>
        <td width="359"><input type="text" class="input_txt valid" id="tumores_3" name="tumores_3" value="<?php echo @$tumores_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="210">Problemas mentales</td>
        <td width="177"><input type="text" class="input_txt valid" id="pmental_1" name="pmental_1" value="<?php echo @$pmental_1; ?>" /></td>
        <td width="168"><input type="text" class="input_txt valid" id="pmental_2" name="pmental_2" value="<?php echo @$pmental_2; ?>" /></td>
        <td width="359"><input type="text" class="input_txt valid" id="pmental_3" name="pmental_3" value="<?php echo @$pmental_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="210">Otros? Cuales?</td>
        <td colspan="3"><input type="text" class="input_txt valid" id="otros_2" name="otros_2" value="<?php echo @$otros_2; ?>" /></td>
      </tr>
  </table>
</div>
<p align="center">&nbsp;</p>

<div align="center">
  <table border="1" cellpadding="0" cellspacing="0">
    <col width="137" />
    <col width="165" />
    <col width="86" />
    <col width="70" />
    <tr height="38">
      <td height="38" width="137">ANTECEDENTES    PERSONALES</td>
        <td width="165">SI</td>
        <td width="86">NO </td>
        <td width="70">OBSERVACIONES</td>
      </tr>
    <tr height="19">
      <td height="19" width="137">Hipertensión Arterial</td>
        <td width="165"><input type="text" class="input_txt valid" id="p_hiper_1" name="p_hiper_1" value="<?php echo @$p_hiper_1; ?>" /></td>
        <td width="86"><input type="text" class="input_txt valid" id="p_hiper_2" name="p_hiper_2" value="<?php echo @$p_hiper_2; ?>" /></td>
        <td width="70"><input type="text" class="input_txt valid" id="p_hiper_3" name="p_hiper_3" value="<?php echo @$p_hiper_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="137">Diabetes Mellitus</td>
        <td width="165"><input type="text" class="input_txt valid" id="p_dia_1" name="p_dia_1" value="<?php echo @$p_dia_1; ?>" /></td>
        <td width="86"><input type="text" class="input_txt valid" id="p_dia_2" name="p_dia_2" value="<?php echo @$p_dia_2; ?>" /></td>
        <td width="70"><input type="text" class="input_txt valid" id="p_dia_3" name="p_dia_3" value="<?php echo @$p_dia_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="137">Cardiopatias</td>
        <td width="165"><input type="text" class="input_txt valid" id="p_cardio_1" name="p_cardio_1" value="<?php echo @$p_cardio_1; ?>" /></td>
        <td width="86"><input type="text" class="input_txt valid" id="p_cardio_2" name="p_cardio_2" value="<?php echo @$p_cardio_2; ?>" /></td>
        <td width="70"><input type="text" class="input_txt valid" id="p_cardio_3" name="p_cardio_3" value="<?php echo @$p_cardio_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="137">Hepatopatias</td>
        <td width="165"><input type="text" class="input_txt valid" id="p_hepato_1" name="p_hepato_1" value="<?php echo @$p_hepato_1; ?>" /></td>
        <td width="86"><input type="text" class="input_txt valid" id="p_hepato_2" name="p_hepato_2" value="<?php echo @$p_hepato_2; ?>" /></td>
        <td width="70"><input type="text" class="input_txt valid" id="p_hepato_3" name="p_hepato_3" value="<?php echo @$p_hepato_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="137">Tumores</td>
        <td width="165"><input type="text" class="input_txt valid" id="p_tumor_1" name="p_tumor_1" value="<?php echo @$p_tumor_1; ?>" /></td>
        <td width="86"><input type="text" class="input_txt valid" id="p_tumor_2" name="p_tumor_2" value="<?php echo @$p_tumor_2; ?>" /></td>
        <td width="70"><input type="text" class="input_txt valid" id="p_tumor_3" name="p_tumor_3" value="<?php echo @$p_tumor_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="137">Problemas mentales</td>
        <td width="165"><input type="text" class="input_txt valid" id="p_mental_1" name="p_mental_1" value="<?php echo @$p_mental_1; ?>" /></td>
        <td width="86"><input type="text" class="input_txt valid" id="p_mental_2" name="p_mental_2" value="<?php echo @$p_mental_2; ?>" /></td>
        <td width="70"><input type="text" class="input_txt valid" id="p_mental_3" name="p_mental_3" value="<?php echo @$p_mental_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="137">Varices</td>
        <td width="165"><input type="text" class="input_txt valid" id="p_varices_1" name="p_varices_1" value="<?php echo @$p_varices_1; ?>" /></td>
        <td width="86"><input type="text" class="input_txt valid" id="p_varices_2" name="p_varices_2" value="<?php echo @$p_varices_2; ?>" /></td>
        <td width="70"><input type="text" class="input_txt valid" id="p_varices_3" name="p_varices_3" value="<?php echo @$p_varices_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="137">Tromboflebitis</td>
        <td width="165"><input type="text" class="input_txt valid" id="p_tromb_1" name="p_tromb_1" value="<?php echo @$p_tromb_1; ?>" /></td>
        <td width="86"><input type="text" class="input_txt valid" id="p_tromb_2" name="p_tromb_2" value="<?php echo @$p_tromb_2; ?>" /></td>
        <td width="70"><input type="text" class="input_txt valid" id="p_tromb_3" name="p_tromb_3" value="<?php echo @$p_tromb_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="137">Cefaleas</td>
        <td width="165"><input type="text" class="input_txt valid" id="p_cefal_1" name="p_cefal_1" value="<?php echo @$p_cefal_1; ?>" /></td>
        <td width="86"><input type="text" class="input_txt valid" id="p_cefal_2" name="p_cefal_2" value="<?php echo @$p_cefal_2; ?>" /></td>
        <td width="70"><input type="text" class="input_txt valid" id="p_cefal_3" name="p_cefal_3" value="<?php echo @$p_cefal_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="137">Enf. Pulmonar</td>
        <td width="165"><input type="text" class="input_txt valid" id="p__pulmo_1" name="p__pulmo_1" value="<?php echo @$p__pulmo_1; ?>" /></td>
        <td width="86"><input type="text" class="input_txt valid" id="p__pulmo_2" name="p__pulmo_2" value="<?php echo @$p__pulmo_2; ?>" /></td>
        <td width="70"><input type="text" class="input_txt valid" id="p__pulmo_3" name="p__pulmo_3" value="<?php echo @$p__pulmo_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="137">Otros? Cuales?</td>
        <td colspan="3" width="321"><input type="text" class="input_txt valid" id="otro_2_2" name="otro_2_2" value="<?php echo @$otro_2_2; ?>" /></td>
      </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<div align="center">
  <table border="1" cellpadding="0" cellspacing="0">
    <col width="137" />
    <col width="165" />
    <col width="86" />
    <col width="70" />
    <tr height="19">
      <td colspan="4" height="19" width="458">3. HÁBITOS</td>
      </tr>
    <tr height="38">
      <td height="38" width="137">TIPO</td>
        <td width="165">SI</td>
        <td width="86">NO</td>
        <td width="70">FREC.    O TIPO</td>
      </tr>
    <tr height="19">
      <td height="19" width="137">Tabaquismo</td>
        <td width="165"><input type="text" class="input_txt valid" id="tabaco_1" name="tabaco_1" value="<?php echo @$tabaco_1; ?>" /></td>
        <td width="86"><input type="text" class="input_txt valid" id="tabaco_2" name="tabaco_2" value="<?php echo @$tabaco_2; ?>" /></td>
        <td width="70"><input type="text" class="input_txt valid" id="tabaco_3" name="tabaco_3" value="<?php echo @$tabaco_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="137">Consumo de Alcohol</td>
        <td width="165"><input type="text" class="input_txt valid" id="palcohol_1" name="palcohol_1" value="<?php echo @$palcohol_1; ?>" /></td>
        <td width="86"><input type="text" class="input_txt valid" id="palcohol_2" name="palcohol_2" value="<?php echo @$palcohol_2; ?>" /></td>
        <td width="70"><input type="text" class="input_txt valid" id="palcohol_3" name="palcohol_3" value="<?php echo @$palcohol_3; ?>" /></td>
      </tr>
    <tr height="38">
      <td height="38" width="137">Consumo Psicoactivos</td>
        <td width="165"><input type="text" class="input_txt valid" id="droga_1" name="droga_1" value="<?php echo @$droga_1; ?>" /></td>
        <td width="86"><input type="text" class="input_txt valid" id="droga_2" name="droga_2" value="<?php echo @$droga_2; ?>" /></td>
        <td width="70"><input type="text" class="input_txt valid" id="droga_3" name="droga_3" value="<?php echo @$droga_3; ?>" /></td>
      </tr>
    <tr height="38">
      <td height="38" width="137">Uso de Medicamentos</td>
        <td width="165"><input type="text" class="input_txt valid" id="medic_1" name="medic_1" value="<?php echo @$medic_1; ?>" /></td>
        <td width="86"><input type="text" class="input_txt valid" id="medic_2" name="medic_2" value="<?php echo @$medic_2; ?>" /></td>
        <td width="70"><input type="text" class="input_txt valid" id="medic_3" name="medic_3" value="<?php echo @$medic_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="137">Dieta saludable</td>
        <td width="165"><input type="text" class="input_txt valid" id="dieta_1" name="dieta_1" value="<?php echo @$dieta_1; ?>" /></td>
        <td width="86"><input type="text" class="input_txt valid" id="dieta_2" name="dieta_2" value="<?php echo @$dieta_2; ?>" /></td>
        <td width="70"><input type="text" class="input_txt valid" id="dieta_3" name="dieta_3" value="<?php echo @$dieta_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="137">Otros? Cuales?</td>
        <td colspan="3" width="321"><input type="text" class="input_txt valid" id="otros_2_3" name="otros_2_3" value="<?php echo @$otros_2_3; ?>" /></td>
      </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<div align="center">
  <table border="1" cellpadding="0" cellspacing="0">
    <col width="137" />
    <col width="165" />
    <col width="86" />
    <col width="70" />
    <tr height="19">
      <td colspan="4" height="19">4    - SALUD SEXUAL</td>
      </tr>
    <tr height="19">
      <td height="19" width="193">Menarca(años)</td>
        <td colspan="3"><input type="text" class="input_txt valid" id="menarca" name="menarca" value="<?php echo @$menarca; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="193">FUM</td>
        <td colspan="3"><input type="text" class="input_txt valid" id="fum" name="fum" value="<?php echo @$fum; ?>" /></td>
      </tr>
    <tr height="19">
      <td rowspan="2" height="38" width="193">Ciclos Regular</td>
        <td width="168">SI</td>
        <td colspan="2">NO</td>
      </tr>
    <tr height="19">
      <td height="19" width="168"><input type="text" class="input_txt valid" id="ciclo_s" name="ciclo_s" value="<?php echo @$ciclo_s; ?>" /></td>
        <td colspan="2"><input type="text" class="input_txt valid" id="ciclo_n" name="ciclo_n" value="<?php echo @$ciclo_n; ?>" /></td>
      </tr>
    <tr height="19">
      <td colspan="2" height="19">Patrón    menstrual(dias)</td>
        <td colspan="2"><input type="text" class="input_txt valid" id="patron_m" name="patron_m" value="<?php echo @$patron_m; ?>" /></td>
      </tr>
    <tr height="19">
      <td colspan="2" height="19">Transtornos    mestruales</td>
        <td colspan="2"><input type="text" class="input_txt valid" id="trastorno" name="trastorno" value="<?php echo @$trastorno; ?>" /></td>
      </tr>
    <tr height="19">
      <td colspan="2" height="19">Edad    inicio actividad sexual(años)</td>
        <td colspan="2"><input type="text" class="input_txt valid" id="inicio_sex" name="inicio_sex" value="<?php echo @$inicio_sex; ?>" /></td>
      </tr>
    <tr height="19">
      <td colspan="2" height="19">Numero    de compañeros sexuales actuales</td>
        <td colspan="2"><input type="text" class="input_txt valid" id="numero_sex" name="numero_sex" value="<?php echo @$numero_sex; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="193">G</td>
        <td width="168">P</td>
        <td width="173">A</td>
        <td width="168">C</td>
      </tr>
    <tr height="19">
      <td height="19" width="193"><input type="text" class="input_txt valid" id="g_3" name="g_3" value="<?php echo @$g_3; ?>" /></td>
        <td width="168"><input type="text" class="input_txt valid" id="p_3" name="p_3" value="<?php echo @$p_3; ?>" /></td>
        <td width="173"><input type="text" class="input_txt valid" id="a_3" name="a_3" value="<?php echo @$a_3; ?>" /></td>
        <td width="168"><input type="text" class="input_txt valid" id="c_3" name="c_3" value="<?php echo @$c_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="193">N° Vivos</td>
        <td colspan="3"><input type="text" class="input_txt valid" id="numero_vivo" name="numero_vivo" value="<?php echo @$numero_vivo; ?>" /></td>
      </tr>
    <tr height="19">
      <td rowspan="2" height="38" width="193">Embarazo ectópico</td>
        <td width="168">SI</td>
        <td width="173">NO</td>
        <td width="168">CUANTOS</td>
      </tr>
    <tr height="19">
      <td height="19" width="168"><input type="text" class="input_txt valid" id="embarazo_s" name="embarazo_s" value="<?php echo @$embarazo_s; ?>" /></td>
        <td width="173"><input type="text" class="input_txt valid" id="embarazo_n" name="embarazo_n" value="<?php echo @$embarazo_n; ?>" /></td>
        <td width="168"><input type="text" class="input_txt valid" id="embarazo_cuanto" name="embarazo_cuanto" value="<?php echo @$embarazo_cuanto; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="193">F.U.P</td>
        <td colspan="3"><input type="text" class="input_txt valid" id="fup_2" name="fup_2" value="<?php echo @$fup_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td rowspan="2" height="38" width="193">Antecedentes ETS</td>
        <td width="168">SI</td>
        <td width="173">NO</td>
        <td width="168">CUAL</td>
      </tr>
    <tr height="19">
      <td height="19" width="168"><input type="text" class="input_txt valid" id="ets_s" name="ets_s" value="<?php echo @$ets_s; ?>" /></td>
        <td width="173"><input type="text" class="input_txt valid" id="ets_n" name="ets_n" value="<?php echo @$ets_n; ?>" /></td>
        <td width="168"><input type="text" class="input_txt valid" id="ets_cual" name="ets_cual" value="<?php echo @$ets_cual; ?>" /></td>
      </tr>
    <tr height="19">
      <td rowspan="2" height="38" width="193">Citologia Previa</td>
        <td width="168">FECHA</td>
        <td colspan="2">RESULTADO</td>
      </tr>
    <tr height="19">
      <td height="19" width="168"><input type="text" class="input_txt valid" id="cita_p_fecha" name="cita_p_fecha" value="<?php echo @$cita_p_fecha; ?>" /></td>
        <td colspan="2"><input type="text" class="input_txt valid" id="cita_p_res" name="cita_p_res" value="<?php echo @$cita_p_res; ?>" /></td>
      </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<div align="center">
  <table border="1" cellpadding="0" cellspacing="0">
    <col width="137" />
    <col width="165" />
    <col width="86" />
    <col width="70" />
    <tr height="19">
      <td colspan="4" height="19" width="458">5    -ANTECEDENTES EN PLANIFICACIÓN FAMILIAR</td>
      </tr>
    <tr height="19">
      <td colspan="4" height="19" width="458">Uso    anterior método de P.F.</td>
      </tr>
    <tr height="19">
      <td height="19" width="137">Método utilizado</td>
        <td width="165">Prescrito    por</td>
        <td width="86">Tiempo    uso</td>
        <td width="70">Problemas</td>
      </tr>
    <tr height="19">
      <td height="19" width="137"><input type="text" class="input_txt valid" id="metodo_1" name="metodo_1" value="<?php echo @$metodo_1; ?>" /></td>
        <td width="165"><input type="text" class="input_txt valid" id="prescrip_1" name="prescrip_1" value="<?php echo @$prescrip_1; ?>" /></td>
        <td width="86"><input type="text" class="input_txt valid" id="tiempo_1" name="tiempo_1" value="<?php echo @$tiempo_1; ?>" /></td>
        <td width="70"><input type="text" class="input_txt valid" id="problemas_1" name="problemas_1" value="<?php echo @$problemas_1; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="137"><input type="text" class="input_txt valid" id="metodo_2" name="metodo_2" value="<?php echo @$metodo_2; ?>" /></td>
        <td width="165"><input type="text" class="input_txt valid" id="prescrip_2" name="prescrip_2" value="<?php echo @$prescrip_2; ?>" /></td>
        <td width="86"><input type="text" class="input_txt valid" id="tiempo_2" name="tiempo_2" value="<?php echo @$tiempo_2; ?>" /></td>
        <td width="70"><input type="text" class="input_txt valid" id="problemas_2" name="problemas_2" value="<?php echo @$problemas_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="137"><input type="text" class="input_txt valid" id="metodo_3" name="metodo_3" value="<?php echo @$metodo_3; ?>" /></td>
        <td width="165"><input type="text" class="input_txt valid" id="prescrip_3" name="prescrip_3" value="<?php echo @$prescrip_3; ?>" /></td>
        <td width="86"><input type="text" class="input_txt valid" id="tiempo_3" name="tiempo_3" value="<?php echo @$tiempo_3; ?>" /></td>
        <td width="70"><input type="text" class="input_txt valid" id="problemas_3" name="problemas_3" value="<?php echo @$problemas_3; ?>" /></td>
      </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<div align="center">
  <table border="1" cellpadding="0" cellspacing="0">
    <col width="137" />
    <col width="165" />
    <col width="86" />
    <col width="70" />
    <col width="83" />
    <tr height="19">
      <td colspan="5" height="19">6.    EXAMEN FÍSICO</td>
      </tr>
    <tr height="19">
      <td rowspan="2" height="38" width="227">SIGNOS VITALES</td>
        <td width="168">PA</td>
        <td width="168">FC </td>
        <td width="168">FR</td>
        <td width="168">T°</td>
      </tr>
    <tr height="19">
      <td height="19" width="168"><input type="text" class="input_txt valid" id="sv_pa" name="sv_pa" value="<?php echo @$sv_pa; ?>" /></td>
        <td width="168"><input type="text" class="input_txt valid" id="sv_fc" name="sv_fc" value="<?php echo @$sv_fc; ?>" /></td>
        <td width="168"><input type="text" class="input_txt valid" id="sv_fr" name="sv_fr" value="<?php echo @$sv_fr; ?>" /></td>
        <td width="168"><input type="text" class="input_txt valid" id="sv_temp" name="sv_temp" value="<?php echo @$sv_temp; ?>" /></td>
      </tr>
    <tr height="19">
      <td rowspan="2" height="38" width="227">Valoración nutricional</td>
        <td width="168">Peso: </td>
        <td colspan="3">Talla:  </td>
      </tr>
    <tr height="19">
      <td height="19" width="168"><input type="text" class="input_txt valid" id="peso" name="peso" value="<?php echo @$peso; ?>" /></td>
        <td colspan="3"><input type="text" class="input_txt valid" id="talla" name="talla" value="<?php echo @$talla; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="227">Cabeza</td>
        <td colspan="4"><input type="text" class="input_txt valid" id="cabeza" name="cabeza" value="<?php echo @$cabeza; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="227">Ojos</td>
        <td colspan="4"><input type="text" class="input_txt valid" id="ojos" name="ojos" value="<?php echo @$ojos; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="227">Boca</td>
        <td colspan="4"><input type="text" class="input_txt valid" id="boca" name="boca" value="<?php echo @$boca; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="227">ORL</td>
        <td colspan="4"><input type="text" class="input_txt valid" id="orl" name="orl" value="<?php echo @$orl; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="227">Cuello</td>
        <td colspan="4"><input type="text" class="input_txt valid" id="cuello" name="cuello" value="<?php echo @$cuello; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="227">Cardiopulmonar</td>
        <td colspan="4"><input type="text" class="input_txt valid" id="cardiopul" name="cardiopul" value="<?php echo @$cardiopul; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="227">Mamas</td>
        <td colspan="4"><input type="text" class="input_txt valid" id="mamas" name="mamas" value="<?php echo @$mamas; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="227">Abdomen</td>
        <td colspan="4"><input type="text" class="input_txt valid" id="abdomen" name="abdomen" value="<?php echo @$abdomen; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="227">Genitourinario</td>
        <td colspan="4"><input type="text" class="input_txt valid" id="genitoun" name="genitoun" value="<?php echo @$genitoun; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="227">Extremidades</td>
        <td colspan="4"><input type="text" class="input_txt valid" id="exttem" name="exttem" value="<?php echo @$exttem; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="227">SNC</td>
        <td colspan="4"><input type="text" class="input_txt valid" id="snc" name="snc" value="<?php echo @$snc; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="227">CP</td>
        <td colspan="4"><input type="text" class="input_txt valid" id="cp" name="cp" value="<?php echo @$cp; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="227">PIEL/MUCOSAS</td>
        <td colspan="4"><input type="text" class="input_txt valid" id="piel_muco" name="piel_muco" value="<?php echo @$piel_muco; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="227">RDO BHCG:</td>
        <td colspan="4"><input type="text" class="input_txt valid" id="rdo" name="rdo" value="<?php echo @$rdo; ?>" /></td>
      </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<div align="center">
  <table border="1" cellpadding="0" cellspacing="0">
    <col width="137" />
    <col width="165" />
    <col width="86" />
    <col width="70" />
    <tr height="19">
      <td colspan="4" height="19" width="458">MÉTODO ADOPTADO</td>
      </tr>
    <tr height="19">
      <td height="19" width="458">PILDORA</td>
        <td width="458"><input type="text" class="input_txt valid" id="pla_pild" name="pla_pild" value="<?php echo @$pla_pild; ?>" /></td>
        <td width="458">QUIRÚRGICO</td>
        <td width="458"><input type="text" class="input_txt valid" id="pla_quirur" name="pla_quirur" value="<?php echo @$pla_quirur; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="458">DIU</td>
        <td width="458"><input type="text" class="input_txt valid" id="pla_diu" name="pla_diu" value="<?php echo @$pla_diu; ?>" /></td>
        <td width="458">OTROS</td>
        <td width="458"><input type="text" class="input_txt valid" id="pla_otros" name="pla_otros" value="<?php echo @$pla_otros; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="458">INYECTABLE</td>
        <td colspan="3" width="458"><input type="text" class="input_txt valid" id="pla_inyec" name="pla_inyec" value="<?php echo @$pla_inyec; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="458">** CONDUCTA</td>
        <td colspan="3" width="458"><input type="text" class="input_txt valid" id="pla_conducta" name="pla_conducta" value="<?php echo @$pla_conducta; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="458">** PRÓXIMA CITA</td>
        <td colspan="3" width="458"><input type="text" class="input_txt valid" id="pla_cita" name="pla_cita" value="<?php echo @$pla_cita; ?>" /></td>
      </tr>
    
    <tr height="19">
      <td height="19" colspan="4">&nbsp;</td>
      </tr>
    <tr height="19">
      <td colspan="2" height="19" width="458">MÉTODO    UTILIZADO/TIEMPO DE USO</td>
        <td colspan="2" width="458"><input type="text" class="input_txt valid" id="metodoporuso" name="metodoporuso" value="<?php echo @$metodoporuso; ?>" /></td>
      </tr>
    <tr height="19">
      <td colspan="2" height="19" width="458">USO    DEL MÉTODO (CORRECTO/INCORRECTO.PORQUE?</td>
        <td colspan="2" width="458"><input type="text" class="input_txt valid" id="uso_metodo_1" name="uso_metodo_1" value="<?php echo @$uso_metodo_1; ?>" /></td>
      </tr>
    <tr height="41">
      <td colspan="4" height="41" width="458">ANAMNESIS    (AGO, pairan menstrual, trantomos menstruales,<br />
        fecha última citología, cefalea, mareos, molestias<br />
        ramarias, cambios de comportamiento, uso de medicamentos,<br />
        dolor bajo vientre, flujo vaginal, etc.)</td>
      </tr>
    <tr height="19">
      <td colspan="4" height="38" width="458"><input type="text" class="input_txt valid" id="anamesi" name="anamesi" value="<?php echo @$anamesi; ?>" /></td>
      </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<div align="center">
  <table width="683" border="1" cellpadding="0" cellspacing="0">
    <col width="137" />
    <col width="165" />
    <col width="86" />
    <tr height="19">
      <td colspan="3" height="19">SATISFACCIÓN    CON EL MÉTODO (SI/NO - PORQUE)</td>
      </tr>
    <tr height="38">
      <td height="38" width="320">EXAMEN FÍSICO</td>
        <td width="168">Peso    Kg TA MmHg</td>
        <td width="464">Peso    Kg TA 4 MmHg</td>
      </tr>
    <tr height="19">
      <td height="19" width="320">PESO /T. ARTERIAL</td>
        <td width="168"><input type="text" class="input_txt valid" id="sm_peso_1" name="sm_peso_1" value="<?php echo @$sm_peso_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="sm_peso_2" name="sm_peso_2" value="<?php echo @$sm_peso_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="320">CABEZA</td>
        <td width="168"><input type="text" class="input_txt valid" id="sm_cabeza_1" name="sm_cabeza_1" value="<?php echo @$sm_cabeza_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="sm_cabeza_2" name="sm_cabeza_2" value="<?php echo @$sm_cabeza_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="320">OJOS</td>
        <td width="168"><input type="text" class="input_txt valid" id="sm_ojos_1" name="sm_ojos_1" value="<?php echo @$sm_ojos_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="sm_ojos_2" name="sm_ojos_2" value="<?php echo @$sm_ojos_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="320">BOCA</td>
        <td width="168"><input type="text" class="input_txt valid" id="sm_boca_1" name="sm_boca_1" value="<?php echo @$sm_boca_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="sm_boca_2" name="sm_boca_2" value="<?php echo @$sm_boca_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="320">ORL </td>
        <td width="168"><input type="text" class="input_txt valid" id="sm_orl_1" name="sm_orl_1" value="<?php echo @$sm_orl_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="sm_orl_2" name="sm_orl_2" value="<?php echo @$sm_orl_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="320">CUELLO </td>
        <td width="168"><input type="text" class="input_txt valid" id="sm_cuello_1" name="sm_cuello_1" value="<?php echo @$sm_cuello_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="sm_cuello_2" name="sm_cuello_2" value="<?php echo @$sm_cuello_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="320">MAMAS</td>
        <td width="168"><input type="text" class="input_txt valid" id="sm_mamas_1" name="sm_mamas_1" value="<?php echo @$sm_mamas_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="sm_mamas_2" name="sm_mamas_2" value="<?php echo @$sm_mamas_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="320">CARDIOPULMONAR</td>
        <td width="168"><input type="text" class="input_txt valid" id="sm_cardio_1" name="sm_cardio_1" value="<?php echo @$sm_cardio_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="sm_cardio_2" name="sm_cardio_2" value="<?php echo @$sm_cardio_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="320">ABDOMEN</td>
        <td width="168"><input type="text" class="input_txt valid" id="sm_abdo_1" name="sm_abdo_1" value="<?php echo @$sm_abdo_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="sm_abdo_2" name="sm_abdo_2" value="<?php echo @$sm_abdo_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="320">GENITOURINARIO</td>
        <td width="168"><input type="text" class="input_txt valid" id="sm_genito_1" name="sm_genito_1" value="<?php echo @$sm_genito_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="sm_genito_2" name="sm_genito_2" value="<?php echo @$sm_genito_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="320">EXTREMIDADES</td>
        <td width="168"><input type="text" class="input_txt valid" id="sm_extre_1" name="sm_extre_1" value="<?php echo @$sm_extre_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="sm_extre_2" name="sm_extre_2" value="<?php echo @$sm_extre_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="320">PIEL</td>
        <td width="168"><input type="text" class="input_txt valid" id="sm_piel_1" name="sm_piel_1" value="<?php echo @$sm_piel_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="sm_piel_2" name="sm_piel_2" value="<?php echo @$sm_piel_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="320">S. NERVIOSO</td>
        <td width="168"><input type="text" class="input_txt valid" id="sm_nerv_1" name="sm_nerv_1" value="<?php echo @$sm_nerv_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="sm_nerv_2" name="sm_nerv_2" value="<?php echo @$sm_nerv_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="320">DIAGNOSTICO</td>
        <td width="168"><input type="text" class="input_txt valid" id="sm_diag_1" name="sm_diag_1" value="<?php echo @$sm_diag_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="sm_diag_2" name="sm_diag_2" value="<?php echo @$sm_diag_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="320">RIESGO</td>
        <td width="168"><input type="text" class="input_txt valid" id="sm_riesgo_1" name="sm_riesgo_1" value="<?php echo @$sm_riesgo_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="sm_riesgo_2" name="sm_riesgo_2" value="<?php echo @$sm_riesgo_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td colspan="3" height="19">CONDUCTAS
        <input type="text" class="input_txt valid" id="sm_conduc" name="sm_conduc" value="<?php echo @$sm_conduc; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="320">CAMBIO DE MÉTODO (SI - Porqué - NO)</td>
        <td width="168"><input type="text" class="input_txt valid" id="cambio_1" name="cambio_1" value="<?php echo @$cambio_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="cambio_2" name="cambio_2" value="<?php echo @$cambio_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="320">REMISIÓN</td>
        <td width="168"><input type="text" class="input_txt valid" id="remision_1" name="remision_1" value="<?php echo @$remision_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="remision_2" name="remision_2" value="<?php echo @$remision_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="320">OTRAS</td>
        <td width="168"><input type="text" class="input_txt valid" id="sm_otras_1" name="sm_otras_1" value="<?php echo @$sm_otras_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="sm_otras_2" name="sm_otras_2" value="<?php echo @$sm_otras_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="19" width="320">EDUCACIÓN</td>
        <td width="168"><input type="text" class="input_txt valid" id="educacion_1" name="educacion_1" value="<?php echo @$educacion_1; ?>" /></td>
        <td width="464"><input type="text" class="input_txt valid" id="educacion_2" name="educacion_2" value="<?php echo @$educacion_2; ?>" /></td>
      </tr>
    <tr height="38">
      <td height="38" width="320">FECHA-PRÓXIMA CITA</td>
        <td colspan="2"><input type="text" class="input_txt valid" id="prox_cita" name="prox_cita" value="<?php echo @$prox_cita; ?>" /></td>
      </tr>
  </table>
  <?php echo @$button ?>
</div>
</form><br>
</div>
</fieldset>