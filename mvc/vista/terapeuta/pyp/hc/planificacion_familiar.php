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
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['id_historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['hiperte_s'] . "' ,
'" . $_REQUEST['hiperte_n'] . "' ,
'" . $_REQUEST['hiperte_par'] . "' ,
'" . $_REQUEST['dia_m_s'] . "' ,
'" . $_REQUEST['dia_m_n'] . "' ,
'" . $_REQUEST['dia_m__par'] . "' ,
'" . $_REQUEST['cardio_s'] . "' ,
'" . $_REQUEST['cardio_n'] . "' ,
'" . $_REQUEST['cardio_par'] . "' ,
'" . $_REQUEST['hepa_1'] . "' ,
'" . $_REQUEST['hepa_2'] . "' ,
'" . $_REQUEST['hepa_3'] . "' ,
'" . $_REQUEST['tumores_1'] . "' ,
'" . $_REQUEST['tumores_2'] . "' ,
'" . $_REQUEST['tumores_3'] . "' ,
'" . $_REQUEST['otros_2'] . "' ,
'" . $_REQUEST['p_hiper_1'] . "' ,
'" . $_REQUEST['p_hiper_2'] . "' ,
'" . $_REQUEST['p_hiper_3'] . "' ,
'" . $_REQUEST['p_dia_1'] . "' ,
'" . $_REQUEST['p_dia_2'] . "' ,
'" . $_REQUEST['p_dia_3'] . "' ,
'" . $_REQUEST['p_cardio_1'] . "' ,
'" . $_REQUEST['p_cardio_2'] . "' ,
'" . $_REQUEST['p_cardio_3'] . "' ,
'" . $_REQUEST['p_hepato_1'] . "' ,
'" . $_REQUEST['p_hepato_2'] . "' ,
'" . $_REQUEST['p_hepato_3'] . "' ,
'" . $_REQUEST['p_tumor_1'] . "' ,
'" . $_REQUEST['p_tumor_2'] . "' ,
'" . $_REQUEST['p_tumor_3'] . "' ,
'" . $_REQUEST['p_mental_1'] . "' ,
'" . $_REQUEST['p_mental_2'] . "' ,
'" . $_REQUEST['p_mental_3'] . "' ,
'" . $_REQUEST['p_varices_1'] . "' ,
'" . $_REQUEST['p_varices_2'] . "' ,
'" . $_REQUEST['p_varices_3'] . "' ,
'" . $_REQUEST['p_tromb_1'] . "' ,
'" . $_REQUEST['p_tromb_2'] . "' ,
'" . $_REQUEST['p_tromb_3'] . "' ,
'" . $_REQUEST['p_cefal_1'] . "' ,
'" . $_REQUEST['p_cefal_2'] . "' ,
'" . $_REQUEST['p_cefal_3'] . "' ,
'" . $_REQUEST['p__pulmo_1'] . "' ,
'" . $_REQUEST['p__pulmo_2'] . "' ,
'" . $_REQUEST['p__pulmo_3'] . "' ,
'" . $_REQUEST['otro_2_2'] . "' ,
'" . $_REQUEST['tabaco_1'] . "' ,
'" . $_REQUEST['tabaco_2'] . "' ,
'" . $_REQUEST['tabaco_3'] . "' ,
'" . $_REQUEST['droga_1'] . "' ,
'" . $_REQUEST['droga_2'] . "' ,
'" . $_REQUEST['droga_3'] . "' ,
'" . $_REQUEST['medic_1'] . "' ,
'" . $_REQUEST['medic_2'] . "' ,
'" . $_REQUEST['medic_3'] . "' ,
'" . $_REQUEST['dieta_1'] . "' ,
'" . $_REQUEST['dieta_2'] . "' ,
'" . $_REQUEST['dieta_3'] . "' ,
'" . $_REQUEST['otros_2_3'] . "' ,
'" . $_REQUEST['menarca'] . "' ,
'" . $_REQUEST['fum'] . "' ,
'" . $_REQUEST['ciclo_s'] . "' ,
'" . $_REQUEST['ciclo_n'] . "' ,
'" . $_REQUEST['patron_m'] . "' ,
'" . $_REQUEST['trastorno'] . "' ,
'" . $_REQUEST['inicio_sex'] . "' ,
'" . $_REQUEST['numero_sex'] . "' ,
'" . $_REQUEST['g_3'] . "' ,
'" . $_REQUEST['p_3'] . "' ,
'" . $_REQUEST['a_3'] . "' ,
'" . $_REQUEST['c_3'] . "' ,
'" . $_REQUEST['numero_vivo'] . "' ,
'" . $_REQUEST['embarazo_s'] . "' ,
'" . $_REQUEST['embarazo_n'] . "' ,
'" . $_REQUEST['embarazo_cuanto'] . "' ,
'" . $_REQUEST['fup_2'] . "' ,
'" . $_REQUEST['ets_s'] . "' ,
'" . $_REQUEST['ets_n'] . "' ,
'" . $_REQUEST['ets_cual'] . "' ,
'" . $_REQUEST['cita_p_fecha'] . "' ,
'" . $_REQUEST['cita_p_res'] . "' ,
'" . $_REQUEST['metodo_1'] . "' ,
'" . $_REQUEST['metodo_2'] . "' ,
'" . $_REQUEST['metodo_3'] . "' ,
'" . $_REQUEST['prescrip_1'] . "' ,
'" . $_REQUEST['prescrip_2'] . "' ,
'" . $_REQUEST['prescrip_3'] . "' ,
'" . $_REQUEST['tiempo_1'] . "' ,
'" . $_REQUEST['tiempo_2'] . "' ,
'" . $_REQUEST['tiempo_3'] . "' ,
'" . $_REQUEST['problemas_1'] . "' ,
'" . $_REQUEST['problemas_2'] . "' ,
'" . $_REQUEST['problemas_3'] . "' ,
'" . $_REQUEST['sv_pa'] . "' ,
'" . $_REQUEST['sv_fc'] . "' ,
'" . $_REQUEST['sv_fr'] . "' ,
'" . $_REQUEST['sv_temp'] . "' ,
'" . $_REQUEST['peso'] . "' ,
'" . $_REQUEST['talla'] . "' ,
'" . $_REQUEST['cabeza'] . "' ,
'" . $_REQUEST['ojos'] . "' ,
'" . $_REQUEST['boca'] . "' ,
'" . $_REQUEST['orl'] . "' ,
'" . $_REQUEST['cuello'] . "' ,
'" . $_REQUEST['cardiopul'] . "' ,
'" . $_REQUEST['mamas'] . "' ,
'" . $_REQUEST['abdomen'] . "' ,
'" . $_REQUEST['genitoun'] . "' ,
'" . $_REQUEST['exttem'] . "' ,
'" . $_REQUEST['snc'] . "' ,
'" . $_REQUEST['cp'] . "' ,
'" . $_REQUEST['piel_muco'] . "' ,
'" . $_REQUEST['rdo'] . "' ,
'" . $_REQUEST['pla_pild'] . "' ,
'" . $_REQUEST['pla_diu'] . "' ,
'" . $_REQUEST['pla_quirur'] . "' ,
'" . $_REQUEST['pla_otros'] . "' ,
'" . $_REQUEST['pla_inyec'] . "' ,
'" . $_REQUEST['pla_conducta'] . "' ,
'" . $_REQUEST['pla_cita'] . "' ,
'" . $_REQUEST['metodoporuso'] . "' ,
'" . $_REQUEST['anamesi'] . "' ,
'" . $_REQUEST['sm_peso_1'] . "' ,
'" . $_REQUEST['sm_peso_2'] . "' ,
'" . $_REQUEST['sm_cabeza_1'] . "' ,
'" . $_REQUEST['sm_cabeza_2'] . "' ,
'" . $_REQUEST['sm_ojos_1'] . "' ,
'" . $_REQUEST['sm_ojos_2'] . "' ,
'" . $_REQUEST['sm_boca_1'] . "' ,
'" . $_REQUEST['sm_boca_2'] . "' ,
'" . $_REQUEST['sm_orl_1'] . "' ,
'" . $_REQUEST['sm_orl_2'] . "' ,
'" . $_REQUEST['sm_cuello_1'] . "' ,
'" . $_REQUEST['sm_cuello_2'] . "' ,
'" . $_REQUEST['sm_mamas_1'] . "' ,
'" . $_REQUEST['sm_mamas_2'] . "' ,
'" . $_REQUEST['sm_cardio_1'] . "' ,
'" . $_REQUEST['sm_cardio_2'] . "' ,
'" . $_REQUEST['sm_abdo_1'] . "' ,
'" . $_REQUEST['sm_abdo_2'] . "' ,
'" . $_REQUEST['sm_genito_1'] . "' ,
'" . $_REQUEST['sm_genito_2'] . "' ,
'" . $_REQUEST['sm_extre_1'] . "' ,
'" . $_REQUEST['sm_extre_2'] . "' ,
'" . $_REQUEST['sm_piel_1'] . "' ,
'" . $_REQUEST['sm_piel_2'] . "' ,
'" . $_REQUEST['sm_nerv_1'] . "' ,
'" . $_REQUEST['sm_nerv_2'] . "' ,
'" . $_REQUEST['sm_diag_1'] . "' ,
'" . $_REQUEST['sm_diag_2'] . "' ,
'" . $_REQUEST['sm_riesgo_1'] . "' ,
'" . $_REQUEST['sm_riesgo_2'] . "' ,
'" . $_REQUEST['sm_conduc'] . "' ,
'" . $_REQUEST['cambio_1'] . "' ,
'" . $_REQUEST['cambio_2'] . "' ,
'" . $_REQUEST['remision_1'] . "' ,
'" . $_REQUEST['remision_2'] . "' ,
'" . $_REQUEST['sm_otras_1'] . "' ,
'" . $_REQUEST['sm_otras_2'] . "' ,
'" . $_REQUEST['educacion_1'] . "' ,
'" . $_REQUEST['educacion_2'] . "' ,
'" . $_REQUEST['prox_cita'] . "' ,
'" . $_REQUEST['pmental_1'] . "' ,
'" . $_REQUEST['pmental_2'] . "' ,
'" . $_REQUEST['pmental_3'] . "' ,
'" . $_REQUEST['palcohol_1'] . "' ,
'" . $_REQUEST['palcohol_2'] . "' ,
'" . $_REQUEST['palcohol_3'] . "' ,
'" . $_REQUEST['uso_metodo_1'] . "'
) ";

    } else if ($_REQUEST['idhc_planificacion_familiar'] != '') {

        $sql = "UPDATE hc_planificacion_familiar set
`id_usuario` = '" . $_REQUEST['id_usuario'] . "' ,
`id_historia` = '" . $_REQUEST['id_historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ,
`id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ,
`hiperte_s` = '" . $_REQUEST['hiperte_s'] . "' ,
`hiperte_n` = '" . $_REQUEST['hiperte_n'] . "' ,
`hiperte_par` = '" . $_REQUEST['hiperte_par'] . "' ,
`dia_m_s` = '" . $_REQUEST['dia_m_s'] . "' ,
`dia_m_n` = '" . $_REQUEST['dia_m_n'] . "' ,
`dia_m__par` = '" . $_REQUEST['dia_m__par'] . "' ,
`cardio_s` = '" . $_REQUEST['cardio_s'] . "' ,
`cardio_n` = '" . $_REQUEST['cardio_n'] . "' ,
`cardio_par` = '" . $_REQUEST['cardio_par'] . "' ,
`hepa_1` = '" . $_REQUEST['hepa_1'] . "' ,
`hepa_2` = '" . $_REQUEST['hepa_2'] . "' ,
`hepa_3` = '" . $_REQUEST['hepa_3'] . "' ,
`tumores_1` = '" . $_REQUEST['tumores_1'] . "' ,
`tumores_2` = '" . $_REQUEST['tumores_2'] . "' ,
`tumores_3` = '" . $_REQUEST['tumores_3'] . "' ,
`otros_2` = '" . $_REQUEST['otros_2'] . "' ,
`p_hiper_1` = '" . $_REQUEST['p_hiper_1'] . "' ,
`p_hiper_2` = '" . $_REQUEST['p_hiper_2'] . "' ,
`p_hiper_3` = '" . $_REQUEST['p_hiper_3'] . "' ,
`p_dia_1` = '" . $_REQUEST['p_dia_1'] . "' ,
`p_dia_2` = '" . $_REQUEST['p_dia_2'] . "' ,
`p_dia_3` = '" . $_REQUEST['p_dia_3'] . "' ,
`p_cardio_1` = '" . $_REQUEST['p_cardio_1'] . "' ,
`p_cardio_2` = '" . $_REQUEST['p_cardio_2'] . "' ,
`p_cardio_3` = '" . $_REQUEST['p_cardio_3'] . "' ,
`p_hepato_1` = '" . $_REQUEST['p_hepato_1'] . "' ,
`p_hepato_2` = '" . $_REQUEST['p_hepato_2'] . "' ,
`p_hepato_3` = '" . $_REQUEST['p_hepato_3'] . "' ,
`p_tumor_1` = '" . $_REQUEST['p_tumor_1'] . "' ,
`p_tumor_2` = '" . $_REQUEST['p_tumor_2'] . "' ,
`p_tumor_3` = '" . $_REQUEST['p_tumor_3'] . "' ,
`p_mental_1` = '" . $_REQUEST['p_mental_1'] . "' ,
`p_mental_2` = '" . $_REQUEST['p_mental_2'] . "' ,
`p_mental_3` = '" . $_REQUEST['p_mental_3'] . "' ,
`p_varices_1` = '" . $_REQUEST['p_varices_1'] . "' ,
`p_varices_2` = '" . $_REQUEST['p_varices_2'] . "' ,
`p_varices_3` = '" . $_REQUEST['p_varices_3'] . "' ,
`p_tromb_1` = '" . $_REQUEST['p_tromb_1'] . "' ,
`p_tromb_2` = '" . $_REQUEST['p_tromb_2'] . "' ,
`p_tromb_3` = '" . $_REQUEST['p_tromb_3'] . "' ,
`p_cefal_1` = '" . $_REQUEST['p_cefal_1'] . "' ,
`p_cefal_2` = '" . $_REQUEST['p_cefal_2'] . "' ,
`p_cefal_3` = '" . $_REQUEST['p_cefal_3'] . "' ,
`p__pulmo_1` = '" . $_REQUEST['p__pulmo_1'] . "' ,
`p__pulmo_2` = '" . $_REQUEST['p__pulmo_2'] . "' ,
`p__pulmo_3` = '" . $_REQUEST['p__pulmo_3'] . "' ,
`otro_2_2` = '" . $_REQUEST['otro_2_2'] . "' ,
`tabaco_1` = '" . $_REQUEST['tabaco_1'] . "' ,
`tabaco_2` = '" . $_REQUEST['tabaco_2'] . "' ,
`tabaco_3` = '" . $_REQUEST['tabaco_3'] . "' ,
`droga_1` = '" . $_REQUEST['droga_1'] . "' ,
`droga_2` = '" . $_REQUEST['droga_2'] . "' ,
`droga_3` = '" . $_REQUEST['droga_3'] . "' ,
`medic_1` = '" . $_REQUEST['medic_1'] . "' ,
`medic_2` = '" . $_REQUEST['medic_2'] . "' ,
`medic_3` = '" . $_REQUEST['medic_3'] . "' ,
`dieta_1` = '" . $_REQUEST['dieta_1'] . "' ,
`dieta_2` = '" . $_REQUEST['dieta_2'] . "' ,
`dieta_3` = '" . $_REQUEST['dieta_3'] . "' ,
`otros_2_3` = '" . $_REQUEST['otros_2_3'] . "' ,
`menarca` = '" . $_REQUEST['menarca'] . "' ,
`fum` = '" . $_REQUEST['fum'] . "' ,
`ciclo_s` = '" . $_REQUEST['ciclo_s'] . "' ,
`ciclo_n` = '" . $_REQUEST['ciclo_n'] . "' ,
`patron_m` = '" . $_REQUEST['patron_m'] . "' ,
`trastorno` = '" . $_REQUEST['trastorno'] . "' ,
`inicio_sex` = '" . $_REQUEST['inicio_sex'] . "' ,
`numero_sex` = '" . $_REQUEST['numero_sex'] . "' ,
`g_3` = '" . $_REQUEST['g_3'] . "' ,
`p_3` = '" . $_REQUEST['p_3'] . "' ,
`a_3` = '" . $_REQUEST['a_3'] . "' ,
`c_3` = '" . $_REQUEST['c_3'] . "' ,
`numero_vivo` = '" . $_REQUEST['numero_vivo'] . "' ,
`embarazo_s` = '" . $_REQUEST['embarazo_s'] . "' ,
`embarazo_n` = '" . $_REQUEST['embarazo_n'] . "' ,
`embarazo_cuanto` = '" . $_REQUEST['embarazo_cuanto'] . "' ,
`fup_2` = '" . $_REQUEST['fup_2'] . "' ,
`ets_s` = '" . $_REQUEST['ets_s'] . "' ,
`ets_n` = '" . $_REQUEST['ets_n'] . "' ,
`ets_cual` = '" . $_REQUEST['ets_cual'] . "' ,
`cita_p_fecha` = '" . $_REQUEST['cita_p_fecha'] . "' ,
`cita_p_res` = '" . $_REQUEST['cita_p_res'] . "' ,
`metodo_1` = '" . $_REQUEST['metodo_1'] . "' ,
`metodo_2` = '" . $_REQUEST['metodo_2'] . "' ,
`metodo_3` = '" . $_REQUEST['metodo_3'] . "' ,
`prescrip_1` = '" . $_REQUEST['prescrip_1'] . "' ,
`prescrip_2` = '" . $_REQUEST['prescrip_2'] . "' ,
`prescrip_3` = '" . $_REQUEST['prescrip_3'] . "' ,
`tiempo_1` = '" . $_REQUEST['tiempo_1'] . "' ,
`tiempo_2` = '" . $_REQUEST['tiempo_2'] . "' ,
`tiempo_3` = '" . $_REQUEST['tiempo_3'] . "' ,
`problemas_1` = '" . $_REQUEST['problemas_1'] . "' ,
`problemas_2` = '" . $_REQUEST['problemas_2'] . "' ,
`problemas_3` = '" . $_REQUEST['problemas_3'] . "' ,
`sv_pa` = '" . $_REQUEST['sv_pa'] . "' ,
`sv_fc` = '" . $_REQUEST['sv_fc'] . "' ,
`sv_fr` = '" . $_REQUEST['sv_fr'] . "' ,
`sv_temp` = '" . $_REQUEST['sv_temp'] . "' ,
`peso` = '" . $_REQUEST['peso'] . "' ,
`talla` = '" . $_REQUEST['talla'] . "' ,
`cabeza` = '" . $_REQUEST['cabeza'] . "' ,
`ojos` = '" . $_REQUEST['ojos'] . "' ,
`boca` = '" . $_REQUEST['boca'] . "' ,
`orl` = '" . $_REQUEST['orl'] . "' ,
`cuello` = '" . $_REQUEST['cuello'] . "' ,
`cardiopul` = '" . $_REQUEST['cardiopul'] . "' ,
`mamas` = '" . $_REQUEST['mamas'] . "' ,
`abdomen` = '" . $_REQUEST['abdomen'] . "' ,
`genitoun` = '" . $_REQUEST['genitoun'] . "' ,
`exttem` = '" . $_REQUEST['exttem'] . "' ,
`snc` = '" . $_REQUEST['snc'] . "' ,
`cp` = '" . $_REQUEST['cp'] . "' ,
`piel_muco` = '" . $_REQUEST['piel_muco'] . "' ,
`rdo` = '" . $_REQUEST['rdo'] . "' ,
`pla_pild` = '" . $_REQUEST['pla_pild'] . "' ,
`pla_diu` = '" . $_REQUEST['pla_diu'] . "' ,
`pla_quirur` = '" . $_REQUEST['pla_quirur'] . "' ,
`pla_otros` = '" . $_REQUEST['pla_otros'] . "' ,
`pla_inyec` = '" . $_REQUEST['pla_inyec'] . "' ,
`pla_conducta` = '" . $_REQUEST['pla_conducta'] . "' ,
`pla_cita` = '" . $_REQUEST['pla_cita'] . "' ,
`metodoporuso` = '" . $_REQUEST['metodoporuso'] . "' ,
`anamesi` = '" . $_REQUEST['anamesi'] . "' ,
`sm_peso_1` = '" . $_REQUEST['sm_peso_1'] . "' ,
`sm_peso_2` = '" . $_REQUEST['sm_peso_2'] . "' ,
`sm_cabeza_1` = '" . $_REQUEST['sm_cabeza_1'] . "' ,
`sm_cabeza_2` = '" . $_REQUEST['sm_cabeza_2'] . "' ,
`sm_ojos_1` = '" . $_REQUEST['sm_ojos_1'] . "' ,
`sm_ojos_2` = '" . $_REQUEST['sm_ojos_2'] . "' ,
`sm_boca_1` = '" . $_REQUEST['sm_boca_1'] . "' ,
`sm_boca_2` = '" . $_REQUEST['sm_boca_2'] . "' ,
`sm_orl_1` = '" . $_REQUEST['sm_orl_1'] . "' ,
`sm_orl_2` = '" . $_REQUEST['sm_orl_2'] . "' ,
`sm_cuello_1` = '" . $_REQUEST['sm_cuello_1'] . "' ,
`sm_cuello_2` = '" . $_REQUEST['sm_cuello_2'] . "' ,
`sm_mamas_1` = '" . $_REQUEST['sm_mamas_1'] . "' ,
`sm_mamas_2` = '" . $_REQUEST['sm_mamas_2'] . "' ,
`sm_cardio_1` = '" . $_REQUEST['sm_cardio_1'] . "' ,
`sm_cardio_2` = '" . $_REQUEST['sm_cardio_2'] . "' ,
`sm_abdo_1` = '" . $_REQUEST['sm_abdo_1'] . "' ,
`sm_abdo_2` = '" . $_REQUEST['sm_abdo_2'] . "' ,
`sm_genito_1` = '" . $_REQUEST['sm_genito_1'] . "' ,
`sm_genito_2` = '" . $_REQUEST['sm_genito_2'] . "' ,
`sm_extre_1` = '" . $_REQUEST['sm_extre_1'] . "' ,
`sm_extre_2` = '" . $_REQUEST['sm_extre_2'] . "' ,
`sm_piel_1` = '" . $_REQUEST['sm_piel_1'] . "' ,
`sm_piel_2` = '" . $_REQUEST['sm_piel_2'] . "' ,
`sm_nerv_1` = '" . $_REQUEST['sm_nerv_1'] . "' ,
`sm_nerv_2` = '" . $_REQUEST['sm_nerv_2'] . "' ,
`sm_diag_1` = '" . $_REQUEST['sm_diag_1'] . "' ,
`sm_diag_2` = '" . $_REQUEST['sm_diag_2'] . "' ,
`sm_riesgo_1` = '" . $_REQUEST['sm_riesgo_1'] . "' ,
`sm_riesgo_2` = '" . $_REQUEST['sm_riesgo_2'] . "' ,
`sm_conduc` = '" . $_REQUEST['sm_conduc'] . "' ,
`cambio_1` = '" . $_REQUEST['cambio_1'] . "' ,
`cambio_2` = '" . $_REQUEST['cambio_2'] . "' ,
`remision_1` = '" . $_REQUEST['remision_1'] . "' ,
`remision_2` = '" . $_REQUEST['remision_2'] . "' ,
`sm_otras_1` = '" . $_REQUEST['sm_otras_1'] . "' ,
`sm_otras_2` = '" . $_REQUEST['sm_otras_2'] . "' ,
`educacion_1` = '" . $_REQUEST['educacion_1'] . "' ,
`educacion_2` = '" . $_REQUEST['educacion_2'] . "' ,
`prox_cita` = '" . $_REQUEST['prox_cita'] . "' ,
`pmental_1` = '" . $_REQUEST['pmental_1'] . "' ,
`pmental_2` = '" . $_REQUEST['pmental_2'] . "' ,
`pmental_3` = '" . $_REQUEST['pmental_3'] . "' ,
`palcohol_1` = '" . $_REQUEST['palcohol_1'] . "' ,
`palcohol_2` = '" . $_REQUEST['palcohol_2'] . "' ,
`palcohol_3` = '" . $_REQUEST['palcohol_3'] . "' ,
`uso_metodo_1` = '" . $_REQUEST['uso_metodo_1'] . "' WHERE `idhc_planificacion_familiar` = '" . $_REQUEST['idhc_planificacion_familiar'] . "' ;";

    }

    $conexion->EjecutarQuery($sql);
}
$idhc_planificacion_familiar = 'new';
$sql                         = "SELECT * from hc_planificacion_familiar WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result                      = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $idhc_planificacion_familiar = $row['idhc_planificacion_familiar'];
    $id_usuario                  = $row['id_usuario'];
    $id_historia                 = $row['id_historia'];
    $id_proceso                  = $row['id_proceso'];
    $id_vinicial                 = $row['id_vinicial'];
    $id_revaloracion             = $row['id_revaloracion'];
    $hiperte_s                   = $row['hiperte_s'];
    $hiperte_n                   = $row['hiperte_n'];
    $hiperte_par                 = $row['hiperte_par'];
    $dia_m_s                     = $row['dia_m_s'];
    $dia_m_n                     = $row['dia_m_n'];
    $dia_m__par                  = $row['dia_m__par'];
    $cardio_s                    = $row['cardio_s'];
    $cardio_n                    = $row['cardio_n'];
    $cardio_par                  = $row['cardio_par'];
    $hepa_1                      = $row['hepa_1'];
    $hepa_2                      = $row['hepa_2'];
    $hepa_3                      = $row['hepa_3'];
    $tumores_1                   = $row['tumores_1'];
    $tumores_2                   = $row['tumores_2'];
    $tumores_3                   = $row['tumores_3'];
    $otros_2                     = $row['otros_2'];
    $p_hiper_1                   = $row['p_hiper_1'];
    $p_hiper_2                   = $row['p_hiper_2'];
    $p_hiper_3                   = $row['p_hiper_3'];
    $p_dia_1                     = $row['p_dia_1'];
    $p_dia_2                     = $row['p_dia_2'];
    if ($p_dia_2 == "") {$p_dia_2 = "NO REFIERE";}
    $p_dia_3 = $row['p_dia_3'];
    if ($p_dia_3 == "") {$p_dia_3 = "NO REFIERE";}
    $p_cardio_1  = $row['p_cardio_1'];
    $p_cardio_2  = $row['p_cardio_2'];
    $p_cardio_3  = $row['p_cardio_3'];
    $p_hepato_1  = $row['p_hepato_1'];
    $p_hepato_2  = $row['p_hepato_2'];
    $p_hepato_3  = $row['p_hepato_3'];
    $p_tumor_1   = $row['p_tumor_1'];
    $p_tumor_2   = $row['p_tumor_2'];
    $p_tumor_3   = $row['p_tumor_3'];
    $p_mental_1  = $row['p_mental_1'];
    $p_mental_2  = $row['p_mental_2'];
    $p_mental_3  = $row['p_mental_3'];
    $p_varices_1 = $_POST['p_varices_1'];
    $p_varices_2 = $row['p_varices_2'];
    $p_varices_3 = $row['p_varices_3'];
    $p_tromb_1   = $row['p_tromb_1'];
    $p_tromb_2   = $row['p_tromb_2'];
    $p_tromb_3   = $row['p_tromb_3'];
    $p_cefal_1   = $row['p_cefal_1'];
    $p_cefal_2   = $row['p_cefal_2'];
    $p_cefal_3   = $row['p_cefal_3'];
    $p__pulmo_1  = $row['p__pulmo_1'];
    $p__pulmo_2  = $row['p__pulmo_2'];
    $p__pulmo_3  = $row['p__pulmo_3'];

    break;}

// traer  datos del ultimo id
$sqlid  = "SELECT * FROM hc_planificacion_familiar ORDER BY  idhc_planificacion_familiar DESC LIMIT 1";
$result = $conexion->EjecutarQuery($sqlid);
while ($row = mysql_fetch_array($result)) {
    $hiperte_s   = $row['hiperte_s'];
    $hiperte_n   = $row['hiperte_n'];
    $hiperte_par = $row['hiperte_par'];
    $dia_m_s     = $row['dia_m_s'];
    $dia_m_n     = $row['dia_m_n'];
    $dia_m__par  = $row['dia_m__par'];
    $cardio_s    = $row['cardio_s'];
    $cardio_n    = $row['cardio_n'];
    $cardio_par  = $row['cardio_par'];
    $hepa_1      = $row['hepa_1'];
    $hepa_2      = $row['hepa_2'];
    $hepa_3      = $row['hepa_3'];
    $tumores_1   = $row['tumores_1'];
    $tumores_2   = $row['tumores_2'];
    $tumores_3   = $row['tumores_3'];
    $otros_2     = $row['otros_2'];
    $p_hiper_1   = $row['p_hiper_1'];
    $p_hiper_2   = $row['p_hiper_2'];
    $p_hiper_3   = $row['p_hiper_3'];
    $p_dia_1     = $row['p_dia_1'];
    $p_dia_2     = $row['p_dia_2'];
    if ($p_dia_2 == "") {$p_dia_2 = "NO REFIERE";}
    $p_dia_3 = $row['p_dia_3'];
    if ($p_dia_3 == "") {$p_dia_3 = "NO REFIERE";}
    $p_tumor_1 = $row['p_tumor_1'];
    break;
}

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

    <script type="text/javascript">

        function imprSelec34(nombre)
        {
            var ficha = document.getElementById(nombre);
            var ventimp = window.open(' ', 'ventana1', 'popimpr');

            var content = '<link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css.css" rel="stylesheet" />';
            content += '<title>http://190.146.87.72/fvnpv </title>';
            content += ficha.innerHTML;

            ventimp.document.write(content);
            ventimp.document.close();
            ventimp.print( );
           // history.back();
        }
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

<input type="hidden" size="3" id="idhc_planificacion_familiar" name="idhc_planificacion_familiar" value="<?php echo @$idhc_planificacion_familiar; ?>" />

<div align="center">PLANIFICACIÓN FAMILIAR<br><br></div>
<div align="center">
    <table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
   <tr height="19">
    <td colspan="4" height="19"><div align="center">ANTECEDENTES FAMILIARES<BR><BR> </div></td>
    </tr>
<tr>
    <td width="260" >Hipertensión Arterial</td>
    <td width="168">
    No<input type="radio" name="hiperte_s" id="hiperte_s" value="0" <?php if ($hiperte_s == 0) {echo 'checked="checked"';}?><?php if ($hiperte_s == 0) {$hiperte_s = "NO";}?>>
    Si<input type="radio" name="hiperte_s" id="hiperte_s" value="1"  <?php if ($hiperte_s == 1) {echo 'checked="checked"';}?><?php if ($hiperte_s == 1) {$hiperte_s = "SI";}?>>
    No Sabe<input type="radio" name="hiperte_s" id="hiperte_s" value="2"  <?php if ($hiperte_s == 2) {echo 'checked="checked"';}?><?php if ($hiperte_s == 2) {$hiperte_s = "NO SABE";}?>></td>

  </tr>
  <tr>
    <td width="260" >Diabetes Mellitus</td>
    <td width="168">
        No<input type="radio" name="hiperte_par" id="hiperte_par" value="0" <?php if ($hiperte_par == 0) {echo 'checked="checked"';}?><?php if ($hiperte_par == 0) {$hiperte_par = "NO";}?>>
       Si<input type="radio" name="hiperte_par" id="hiperte_par" value="1"  <?php if ($hiperte_par == 1) {echo 'checked="checked"';}?><?php if ($hiperte_par == 1) {$hiperte_par = "SI";}?>>
       No Sabe<input type="radio" name="hiperte_par" id="hiperte_par" value="2"  <?php if ($hiperte_par == 2) {echo 'checked="checked"';}?><?php if ($hiperte_par == 2) {$hiperte_par = "NO SABE";}?>></td>
      </tr>
  <tr>
    <td width="260" >Cardiopatias</td>
        <td width="168">
        No<input type="radio" name="dia_m_s" id="dia_m_s" value="0" <?php if ($dia_m_s == 0) {echo 'checked="checked"';}?><?php if ($dia_m_s == 0) {$dia_m_s = "NO";}?>>
          Si<input type="radio" name="dia_m_s" id="dia_m_s" value="1" <?php if ($dia_m_s == 1) {echo 'checked="checked"';}?><?php if ($dia_m_s == 1) {$dia_m_s = "SI";}?>>
          No Sabe<input type="radio" name="dia_m_s" id="dia_m_s" value="2"  <?php if ($dia_m_s == 2) {echo 'checked="checked"';}?><?php if ($dia_m_s == 2) {$dia_m_s = "NO SABE";}?>></td>
  </tr>
  <tr>
    <td width="260" >Hepatopatias</td>
          <td width="168">
              No<input type="radio" name="dia_m_n" id="dia_m_n" value="0" <?php if ($dia_m_n == 0) {echo 'checked="checked"';}?><?php if ($dia_m_n == 0) {$dia_m_n = "NO";}?>>
              Si<input type="radio" name="dia_m_n" id="dia_m_n" value="1" <?php if ($dia_m_n == 1) {echo 'checked="checked"';}?><?php if ($dia_m_n == 1) {$dia_m_n = "SI";}?>>
        No Sabe<input type="radio" name="dia_m_n" id="dia_m_n" value="2" <?php if ($dia_m_n == 2) {echo 'checked="checked"';}?><?php if ($dia_m_n == 2) {$dia_m_n = "NO SABE";}?>></td>
  </tr>
  <tr>
    <td width="260" >Tumores</td>
         <td width="168">
            No<input type="radio" name="dia_m__par" id="dia_m__par" value="0" <?php if ($dia_m__par == 0) {echo 'checked="checked"';}?><?php if ($dia_m__par == 0) {$dia_m__par = "NO";}?>>
         Si<input type="radio" name="dia_m__par" id="dia_m__par" value="1" <?php if ($dia_m__par == 1) {echo 'checked="checked"';}?><?php if ($dia_m__par == 1) {$dia_m__par = "SI";}?>>
         No Sabe<input type="radio" name="dia_m__par" id="dia_m__par" value="2"  <?php if ($dia_m__par == 2) {echo 'checked="checked"';}?><?php if ($dia_m__par == 2) {$dia_m__par = "NO SABE";}?>></td>

  </tr>
  <tr>
    <td width="260" >Problemas mentales</td>
     <td width="168">
        No<input type="radio" name="cardio_s" id="cardio_s" value="0" <?php if ($cardio_s == 0) {echo 'checked="checked"';}?><?php if ($cardio_s == 0) {$cardio_s = "NO";}?>>
    Si<input type="radio" name="cardio_s" id="cardio_s" value="1" <?php if ($cardio_s == 1) {echo 'checked="checked"';}?><?php if ($cardio_s == 1) {$cardio_s = "SI";}?>>
    No Sabe<input type="radio" name="cardio_s" id="cardio_s" value="2"  <?php if ($cardio_s == 2) {echo 'checked="checked"';}?><?php if ($cardio_s == 2) {$cardio_s = "NO SABE";}?>></td>

  </tr>
</table>
 <table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
   <tr height="19">
   <tr>
    <td colspan="4" height="19"><div align="center">ANTECEDENTES    PERSONALES<BR><BR></div></td>
    </tr>
  <tr height="19">
    <td height="19">Hipertención</td>
    <td width="168">
    No<input type="radio" class="" id="cardio_n" name="cardio_n" value="0"  <?php if ($cardio_n == 0) {echo 'checked="checked"';}?><?php if ($cardio_n == 0) {$cardio_n = "NO";}?>>
    Si<input type="radio" class="" id="cardio_n" name="cardio_n" value="1"  <?php if ($cardio_n == 1) {echo 'checked="checked"';}?><?php if ($cardio_n == 1) {$cardio_n = "SI";}?>>
    No Sabe<input type="radio" class="" id="cardio_n" name="cardio_n" value="2"  <?php if ($cardio_n == 2) {echo 'checked="checked"';}?><?php if ($cardio_n == 2) {$cardio_n = "NO SABE";}?>>
    </td>
    <td width="183">Mentales</td>
    <td width="216">
    No<input type="radio" class="" id="cardio_par" name="cardio_par"  value="0"  <?php if ($cardio_par == 0) {echo 'checked="checked"';}?><?php if ($cardio_par == 0) {$cardio_par = "NO";}?>>
    Si<input type="radio" class="" id="cardio_par" name="cardio_par"  value="1"  <?php if ($cardio_par == 1) {echo 'checked="checked"';}?><?php if ($cardio_par == 1) {$cardio_par = "SI";}?>>
    No Sabe<input type="radio" class="" id="cardio_par" name="cardio_par"  value="2"  <?php if ($cardio_par == 2) {echo 'checked="checked"';}?><?php if ($cardio_par == 2) {$cardio_par = "NO SABE";}?>>
    </td>
</tr>
<tr height="19">
    <td heigth="19">Diabetes</td>
    <td width="168">
    No<input type="radio" class="" id="hepa_1" name="hepa_1"  value="0"  <?php if ($hepa_1 == 0) {echo 'checked="checked"';}?><?php if ($hepa_1 == 0) {$hepa_1 = "NO";}?>>
    Si<input type="radio" class="" id="hepa_1" name="hepa_1"  value="1"  <?php if ($hepa_1 == 1) {echo 'checked="checked"';}?><?php if ($hepa_1 == 1) {$hepa_1 = "SI";}?>>
    No Sabe<input type="radio" class="" id="hepa_1" name="hepa_1"  value="2"  <?php if ($hepa_1 == 2) {echo 'checked="checked"';}?><?php if ($hepa_1 == 2) {$hepa_1 = "NO SABE";}?>>
    </td>
    <td width="183">Infección Pelvica</td>
    <td width="216">
    No<input type="radio" class="" id="hepa_2" name="hepa_2"  value="0"  <?php if ($hepa_2 == 0) {echo 'checked="checked"';}?><?php if ($hepa_2 == 0) {$hepa_2 = "NO";}?>>
    Si<input type="radio" class="" id="hepa_2" name="hepa_2"  value="1"  <?php if ($hepa_2 == 1) {echo 'checked="checked"';}?><?php if ($hepa_2 == 1) {$hepa_2 = "SI";}?>>
    No Sabe<input type="radio" class="" id="hepa_2" name="hepa_2"  value="2"  <?php if ($hepa_2 == 2) {echo 'checked="checked"';}?><?php if ($hepa_2 == 2) {$hepa_2 = "NO SABE";}?>>
    </td>
</tr>
<tr height="19">
    <td height="19">Cardiopatias</td>
    <td width="168">
    No<input type="radio" class="" id="hepa_3" name="hepa_3"  value="0"  <?php if ($hepa_3 == 0) {echo 'checked="checked"';}?><?php if ($hepa_3 == 0) {$hepa_3 = "NO";}?>>
    Si<input type="radio" class="" id="hepa_3" name="hepa_3"  value="1"  <?php if ($hepa_3 == 1) {echo 'checked="checked"';}?><?php if ($hepa_3 == 1) {$hepa_3 = "SI";}?>>
    No Sabe<input type="radio" class="" id="hepa_3" name="hepa_3"  value="2"  <?php if ($hepa_3 == 2) {echo 'checked="checked"';}?><?php if ($hepa_3 == 2) {$hepa_3 = "NO SABE";}?>>
    </td>
    <td width="183">Infección Cervical</td>
    <td width="216">
    No<input type="radio" class="" id="tumores_1" name="tumores_1"   value="0"  <?php if ($tumores_1 == 0) {echo 'checked="checked"';}?><?php if ($tumores_1 == 0) {$tumores_1 = "NO";}?>>
    Si<input type="radio" class="" id="tumores_1" name="tumores_1"   value="1"  <?php if ($tumores_1 == 1) {echo 'checked="checked"';}?><?php if ($tumores_1 == 1) {$tumores_1 = "SI";}?>>
    No Sabe<input type="radio" class="" id="tumores_1" name="tumores_1"   value="2"  <?php if ($tumores_1 == 2) {echo 'checked="checked"';}?><?php if ($tumores_1 == 2) {$tumores_1 = "NO SABE";}?>>
    </td>
</tr>
<tr height="19">
    <td height="19">Hepatopatias</td>
    <td width="168">
    No<input type="radio" class="" id="tumores_2"  name="tumores_2" value="0"  <?php if ($tumores_2 == 0) {echo 'checked="checked"';}?><?php if ($tumores_2 == 0) {$tumores_2 = "NO";}?>>
    Si<input type="radio" class="" id="tumores_2"  name="tumores_2" value="1"  <?php if ($tumores_2 == 1) {echo 'checked="checked"';}?><?php if ($tumores_2 == 1) {$tumores_2 = "SI";}?>>
    No Sabe<input type="radio" class="" id="tumores_2"  name="tumores_2" value="2"  <?php if ($tumores_2 == 2) {echo 'checked="checked"';}?><?php if ($tumores_2 == 2) {$tumores_2 = "NO SABE";}?>>
    </td>
    <td width="183">Flujo Vaginal</td>
    <td width="205">
    No<input type="radio" class="" id="tumores_3" name="tumores_3" value="0"  <?php if ($tumores_3 == 0) {echo 'checked="checked"';}?><?php if ($tumores_3 == 0) {$tumores_3 = "NO";}?>>
    Si<input type="radio" class="" id="tumores_3" name="tumores_3" value="1"  <?php if ($tumores_3 == 1) {echo 'checked="checked"';}?><?php if ($tumores_3 == 1) {$tumores_3 = "SI";}?>>
    No Sabe<input type="radio" class="" id="tumores_3" name="tumores_3" value="2"  <?php if ($tumores_3 == 2) {echo 'checked="checked"';}?><?php if ($tumores_3 == 2) {$tumores_3 = "NO SABE";}?>>
    </td>
</tr>
<tr height="19">
    <td height="19">Tumores</td>
    <td width="168">
    No<input type="radio" class="" id="otros_2"  name="otros_2" value="0"  <?php if ($otros_2 == 0) {echo 'checked="checked"';}?><?php if ($otros_2 == 0) {$otros_2 = "NO";}?>>
    Si<input type="radio" class="" id="otros_2"  name="otros_2" value="1"  <?php if ($otros_2 == 1) {echo 'checked="checked"';}?><?php if ($otros_2 == 1) {$otros_2 = "SI";}?>>
    No Sabe<input type="radio" class="" id="otros_2"  name="otros_2" value="2"  <?php if ($otros_2 == 2) {echo 'checked="checked"';}?><?php if ($otros_2 == 2) {$otros_2 = "NO SABE";}?>></td>
    <td width="183">Resultado Citologias</td>
    <td width="205">
    No<input type="radio" class="" id="p_hiper_1" name="p_hiper_1" value="0"  <?php if ($p_hiper_1 == 0) {echo 'checked="checked"';}?><?php if ($p_hiper_1 == 0) {$p_hiper_1 = "NO";}?>>
    Si<input type="radio" class="" id="p_hiper_1" name="p_hiper_1" value="1"  <?php if ($p_hiper_1 == 1) {echo 'checked="checked"';}?><?php if ($p_hiper_1 == 1) {$p_hiper_1 = "SI";}?>>
    No Sabe<input type="radio" class="" id="p_hiper_1" name="p_hiper_1" value=2"  <?php if ($p_hiper_1 == 2) {echo 'checked="checked"';}?><?php if ($p_hiper_1 == 2) {$p_hiper_1 = "NO SABE";}?>>
    </td>
</tr>
<tr height="19">
    <td height="19">Tromboflebitis</td>
    <td width="168">
    No<input type="radio" class="" id="p_hiper_2"  name="p_hiper_2" value="0"  <?php if ($p_hiper_2 == 0) {echo 'checked="checked"';}?><?php if ($p_hiper_2 == 0) {$p_hiper_2 = "NO";}?>>
    Si<input type="radio" class="" id="p_hiper_2"  name="p_hiper_2" value="1"  <?php if ($p_hiper_2 == 1) {echo 'checked="checked"';}?><?php if ($p_hiper_2 == 1) {$p_hiper_2 = "SI";}?>>
    No sabe<input type="radio" class="" id="p_hiper_2"  name="p_hiper_2" value="2"  <?php if ($p_hiper_2 == 2) {echo 'checked="checked"';}?><?php if ($p_hiper_2 == 2) {$p_hiper_2 = "NO SABE";}?>>
    </td>
    <td width="183">Cx. Ginecologica</td>
    <td width="205">
    No<input type="radio" class="" id="p_hiper_3" name="p_hiper_3" value="0"  <?php if ($p_hiper_3 == 0) {echo 'checked="checked"';}?><?php if ($p_hiper_3 == 0) {$p_hiper_3 = "NO";}?>>
    Si<input type="radio" class="" id="p_hiper_3" name="p_hiper_3" value="1"  <?php if ($p_hiper_3 == 1) {echo 'checked="checked"';}?><?php if ($p_hiper_3 == 1) {$p_hiper_3 = "SI";}?>>
    No Sabe<input type="radio" class="" id="p_hiper_3" name="p_hiper_3" value="2"  <?php if ($p_hiper_3 == 2) {echo 'checked="checked"';}?><?php if ($p_hiper_3 == 2) {$p_hiper_3 = "NO SABE";}?>></td>
</tr>
<tr height="19">
    <td height="19">Fuma</td>
    <td width="168">
    No<input type="radio" class="" id="p_dia_1"  name="p_dia_1" value="0"  <?php if ($p_dia_1 == 0) {echo 'checked="checked"';}?><?php if ($p_dia_1 == 0) {$p_dia_1 = "NO";}?>>
    Si<input type="radio" class="" id="p_dia_1"  name="p_dia_1" value="1"  <?php if ($p_dia_1 == 1) {echo 'checked="checked"';}?><?php if ($p_dia_1 == 1) {$p_dia_1 = "SI";}?>>
    No Sabe<input type="radio" class="" id="p_dia_1"  name="p_dia_1" value="2"  <?php if ($p_dia_1 == 2) {echo 'checked="checked"';}?><?php if ($p_dia_1 == 2) {$p_dia_1 = "NO SABE";}?>></td>
        <td height="19">Otros</td>
    <td width="168"><input type="text" class="input_txt valid" id="p_dia_2"  name="p_dia_2" value="<?php echo @$p_dia_2; ?>" /></td>
</tr>
<tr height="19">
    <td height="19">Cuantos Diarios?</td>
    <td width="168"><input type="text" class="input_txt valid" id="p_dia_3"  name="p_dia_3" value="<?php echo @$p_dia_3; ?>" /></td>
</tr>
</table>
</div>
&nbsp;

<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
   <tr height="19">
    <td colspan="4" height="19"><div align="center">HISTORIA   DE  EMBARAZOS<BR><BR></div></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">Año de Termino</td>
    <td width="168"><input type="text" class="input_txt valid" id="p_cardio_1" name="p_cardio_1" value="<?php echo $p_cardio_1; ?>" /> </td>
    <td width="183"> &nbsp; &nbsp; &nbsp; &nbsp;   Meses de Gestación</td>
    <td width="216"><input type="text" class="input_txt valid" id="p_cardio_2" name="p_cardio_2" value="<?php echo @$p_cardio_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">Terminación del Embarazo</td>
    <td width="168">
    Parto<input type="radio" class="" id="p_cardio_3" name="p_cardio_3" value="0"  <?php if ($p_cardio_3 == 0) {echo 'checked="checked"';}?><?php if ($p_cardio_3 == 0) {$p_cardio_3 = "PARTO";}?>>
    Cesarea<input type="radio" class="" id="p_cardio_3" name="p_cardio_3" value="1"  <?php if ($p_cardio_3 == 1) {echo 'checked="checked"';}?><?php if ($p_cardio_3 == 1) {$p_cardio_3 = "CESAREA";}?>>
    Aborto<input type="radio" class="" id="p_cardio_3" name="p_cardio_3" value="2"  <?php if ($p_cardio_3 == 2) {echo 'checked="checked"';}?><?php if ($p_cardio_3 == 2) {$p_cardio_3 = "ABORTO";}?>></td>
    <td width="183">&nbsp; &nbsp; &nbsp; &nbsp;  Producto   </td>
    <td width="216">
    Nacido Vivo<input type="radio" class="" id="p_hepato_1" name="p_hepato_1" value="0" <?php if ($p_hepato_1 == 0) {echo 'checked="checked"';}?><?php if ($p_hepato_1 == 0) {$p_hepato_1 = "NACIDO VIVO";}?>>
    Nacido Muerto<input type="radio" class="" id="p_hepato_1" name="p_hepato_1" value="1" <?php if ($p_hepato_1 == 1) {echo 'checked="checked"';}?><?php if ($p_hepato_1 == 1) {$p_hepato_1 = "NACIDO MUERTO";}?>></td>

  <tr height="19">
    <td height="19" width="168">Hijos Actuales Vivos</td>
    <td width="168"><input type="text" class="input_txt valid" id="p_hepato_2" name="p_hepato_2" value="<?php echo @$p_hepato_2; ?>" /></td>
    <td width="183">&nbsp; &nbsp; &nbsp; &nbsp;   Observaciones</td>
    <td width="216"><textarea type="text" class="input_txt valid" id="p_hepato_3" name="p_hepato_3" value=""><?php echo @$p_hepato_3; ?></textarea></td>
  </tr>
</table>
<p align="center">&nbsp;</p>
<div align="center">

    <table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr>
    <td height="19" width="100"><div align="center">Otros Anteceddentes ginecobstetricos (Cirugias etc)</div> </td>
  </tr>
  <tr>
    <td width="144"><textarea id="p_tumor_1" name="p_tumor_1"  cols="60" rows="1"> <?php echo @$p_tumor_1; ?></textarea> </td>
  </tr>
</table>
</div>
&nbsp;
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr>
    <td colspan="2" ><div align="center">HISTORIA MENSTRUAL </div></td>
  </tr>
  <tr>
    <td width="278" >Ciclo Regular</td>
    <td width="158" >
  No<input type="radio"  id="p_tumor_2" name="p_tumor_2" size="10" value="0" <?php if ($p_tumor_2 == 0) {echo 'checked="checked"';}?><?php if ($p_tumor_2 == 0) {$p_tumor_2 = "NO";}?>>
  Si<input type="radio"  id="p_tumor_2" name="p_tumor_2" size="10" value="1" <?php if ($p_tumor_2 == 1) {echo 'checked="checked"';}?><?php if ($p_tumor_2 == 1) {$p_tumor_2 = "SI";}?>>
    </td>
  </tr>
  <tr>
    <td width="200" >F.U.M</td>
    <td width="158" >
      <input type="date"  id="p_tumor_3" name="p_tumor_3" size="10" value="<?php echo @$p_tumor_3; ?>"/>
    </td>
  </tr>
  <tr>
    <td width="278" >Trastornos Menstruales</td>
    <td width="158" >
  No<input type="radio"  id="p_mental_1" name="p_mental_1" size="10" value="0" <?php if ($p_mental_1 == 0) {echo 'checked="checked"';}?><?php if ($p_mental_1 == 0) {$p_mental_1 = "NO";}?>>
  Si<input type="radio"  id="p_mental_1" name="p_mental_1" size="10" value="1" <?php if ($p_mental_1 == 1) {echo 'checked="checked"';}?><?php if ($p_mental_1 == 1) {$p_mental_1 = "SI";}?>>
    </td>
  </tr>
  <tr>
    <td width="278">Tipo</td>
    <td width="158" >
      <input type="text"  id="p_mental_2" name="p_mental_2" size="10" value="<?php echo @$p_mental_2; ?>"/>
    </td>
  </tr>
</table>
&nbsp;
&nbsp;
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr>
    <td colspan="2" ><div align="center">HISTORIA CONCEPCIONAL</div></td>
  </tr>
  <tr>
    <td width="278" >¿Ha usado metodo anticonceptivo antes de esta consulta?</td>
    <td width="158" >
      No<input type="radio"  id="p_mental_3" name="p_mental_3" size="10" value="0" <?php if ($p_mental_3 == 0) {echo 'checked="checked"';}?><?php if ($p_mental_3 == 0) {$p_mental_3 = "NO";}?>>
      Si<input type="radio"  id="p_mental_3" name="p_mental_3" size="10" value="1" <?php if ($p_mental_3 == 1) {echo 'checked="checked"';}?><?php if ($p_mental_3 == 1) {$p_mental_3 = "SI";}?>>
    </td>
  </tr>
  <tr>
    <td width="278" >Razon principal para planificar</td>
    <td width="158" >
      <select id="p_varices_1" name="p_varices_1" value="">
     <option value="0" <?=(($row['p_varices_1'] == "0") ? "selected" : "");?><?php if ($p_varices_1 == 0) {$p_varices_1 = "MEDICAS";}?>>Medicas</option>
     <option value="1" <?=(($row['p_varices_1'] == "1") ? "selected" : "");?><?php if ($p_varices_1 == 1) {$p_varices_1 = "DESEO DE NO MAS HIJOS";}?>>Deseo de no mas Hijos</option>
     <option value="2" <?=(($row['p_varices_1'] == "2") ? "selected" : "");?><?php if ($p_varices_1 == 2) {$p_varices_1 = "SOCIO-ECONOMICAS";}?>>Socio-económicas</option>
      </select>
    </td>
  </tr>
  <tr>
    <td width="278" >Método Utilizado</td>
    <td width="158" >
      <input type="text"  id="p_varices_2" name="p_varices_2" size="10" value="<?php echo @$p_varices_2; ?>"/>
    </td>
  </tr>
  <tr>
    <td width="278" >Fechas De</td>
    <td width="158" ><input type="date"  id="p_varices_3" name="p_varices_3" class="" onclick="style_()" autocomplete="off" size="10" value="<?php echo @$p_varices_3; ?>" />
      Hasta:<input type="date"  id="p_tromb_1" name="p_tromb_1" size="10" class=""   onclick="style_()" value="<?php echo @$p_tromb_1; ?>"/>
    </td>
  </tr>
   <tr>
    <td width="278" >Prescrito en</td>
    <td width="158"><input type="text"  id="p_tromb_2" name="p_tromb_2" size="10" value="<?php echo @$p_tromb_2; ?>"/></td>
  </tr>
    <tr>
    <td width="278" >Problemas presentados</td>
     <td width="158">
        <textarea type="text"  id="p_tromb_3" name="p_tromb_3" size="10" style="margin: 0px; width: 281px; height: 14px;" value="<?php echo @$p_tromb_3; ?>"><?php echo @$p_tromb_3; ?>
        </textarea>
    </td>
  </tr>
</table>
  <?php echo @$button ?>
</form><br>

<div id="imprimir_formularios_oculto" style="display: none">

    <?php

$tamfont = 10;
?>
<?php

include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/datos_p.php';

?>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">

       <?php

$sql2         = "Select * from valoracion_inicial_ where id_valoracion_inicial_=" . $_REQUEST['id_vinicial'];
$result2      = $conexion->EjecutarQuery($sql2);
$row2         = mysql_fetch_array($result2);
$fecha_cita_1 = $row2['fecha'];

echo '<tr><td colspan=2>-HISTORIA:-
                    ' . $_REQUEST['proceso'] . '-FECHA- ' . $fecha_cita_1 . '
                </td>
        </tr>';

if ($motivo_1 != "") {

    echo '<tr><td>- MOTIVO DE CONSULTA-</td>
                <td>
                    ' . $motivo_1 . '
                </td>
        </tr>';
}

if ($actual_1 != "") {

    echo '<tr><td>- ENFERMEDAD ACTUAL-</td>
                <td>
                    ' . @$actual_1 . '
                </td>
        </tr>';
}

//personales
//echo '<tr ><td colspan=2 align="center" ><br>PRIMERA INFANCIA</td></tr>';

?>
</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">
    <tr height="">

         <td colspan="12" height=""><div align="center">ANTECEDENTES FAMILIARES</div><BR></td>
    </tr>

            <?php
if ($hiperte_s != "") {
    echo '<tr>
    <td height="" width="168">Hipertensión Arterial </td>
                    <td>
                        ' . $hiperte_s . '
                    </td>
            </tr>';
}
if ($hiperte_par != "") {
    echo '<tr>
    <td height="" width="168">Diabetes Mellitus </td>
                    <td>
                        ' . $hiperte_par . '
                    </td>
            </tr>';
}
if ($dia_m_s != "") {
    echo '<tr>
    <td height="" width="168">Cardiopatias</td>
                    <td>
                        ' . $dia_m_s . '
                    </td>
            </tr>';
}
if ($dia_m_n != "") {
    echo '<tr>
    <td height="" width="168">Hepatopatias</td>
                    <td>
                        ' . $dia_m_n . '
                    </td>
            </tr>';
}
if ($dia_m__par != "") {
    echo '<tr>
    <td height="" width="168">Tumores</td>
                    <td>
                        ' . $dia_m__par . '
                    </td>
            </tr>';
}
if ($cardio_s != "") {
    echo '<tr>
    <td height="" width="168">Problemas mentales</td>
                    <td>
                        ' . $cardio_s . '
                    </td>
            </tr>';
}
?>

</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">
    <tr height="">
         <td colspan="12" height=""><div align="center">ANTECEDENTES PERSONALES
</div><BR></td>
    </tr>
    <tr>
            <?php
if ($cardio_n != "") {
    echo '
    <td height="" width="168">Hipertención</td>
                    <td>
                        ' . $cardio_n . '
                    </td>
            ';
}
if ($cardio_par != "") {
    echo '
    <td height="" width="168">Mentales</td>
                    <td>
                        ' . $cardio_par . '
                    </td>
            ';
}

?>
    </tr>
        <tr>
            <?php
if ($hepa_1 != "") {
    echo '
    <td height="" width="168">Diabetes</td>
                    <td>
                        ' . $hepa_1 . '
                    </td>
            ';
}
if ($hepa_2 != "") {
    echo '
    <td height="" width="168">Infección Pelvica </td>
                    <td>
                        ' . $hepa_2 . '
                    </td>
            ';
}

?>
    </tr>
        <tr>
            <?php
if ($hepa_3 != "") {
    echo '
    <td height="" width="168">Cardiopatias</td>
                    <td>
                        ' . $hepa_3 . '
                    </td>
            ';
}
if ($tumores_1 != "") {
    echo '
    <td height="" width="168">Infección Cervical    </td>
                    <td>
                        ' . $tumores_1 . '
                    </td>
            ';
}

?>
    </tr>
        <tr>
            <?php
if ($tumores_2 != "") {
    echo '
    <td height="" width="168">Hepatopatias</td>
                    <td>
                        ' . $tumores_2 . '
                    </td>
            ';
}
if ($tumores_3 != "") {
    echo '
    <td height="" width="168">Flujo Vaginal </td>
                    <td>
                        ' . $tumores_3 . '
                    </td>
            ';
}

?>
    </tr>
        <tr>
            <?php
if ($otros_2 != "") {
    echo '
    <td height="" width="168">Tumores</td>
                    <td>
                        ' . $otros_2 . '
                    </td>
            ';
}
if ($p_hiper_1 != "") {
    echo '
    <td height="" width="168">Resultado Citologias  </td>
                    <td>
                        ' . $p_hiper_1 . '
                    </td>
            ';
}

?>
    </tr>
        <tr>
            <?php
if ($p_hiper_2 != "") {
    echo '
    <td height="" width="168">Tromboflebitis</td>
                    <td>
                        ' . $p_hiper_2 . '
                    </td>
            ';
}
if ($p_hiper_3 != "") {
    echo '
    <td height="" width="168">Cx. Ginecologica  </td>
                    <td>
                        ' . $p_hiper_3 . '
                    </td>
            ';
}

?>
    </tr>
      <tr>
            <?php
if ($p_dia_1 != "") {
    echo '
    <td height="" width="168">Fuma</td>
                    <td>
                        ' . $p_dia_1 . '
                    </td>
            ';
}
if ($p_dia_2 != "") {
    echo '
    <td height="" width="168">Otros </td>
                    <td>
                        ' . $p_dia_2 . '
                    </td>
            ';
}

?>
    </tr>
      <tr>
            <?php
if ($p_dia_3 != "") {
    echo '
    <td height="" width="168">Cuantos Diarios?  </td>
                    <td>
                        ' . $p_dia_3 . '
                    </td>
            ';
}
?>
    </tr>

</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">
    <tr height="">
         <td colspan="12" height=""><div align="center">HISTORIA DE EMBARAZOS
</div><BR></td>
    </tr>
    <tr>
            <?php
if ($p_cardio_1 != "") {
    echo '
    <td height="" width="168">Año de Termino</td>
                    <td>
                        ' . $p_cardio_1 . '
                    </td>
            ';
}
if ($p_cardio_2 != "") {
    echo '
    <td height="" width="168"> Meses de Gestación   </td>
                    <td>
                        ' . $p_cardio_2 . '
                    </td>
            ';
}

?>
    </tr>
        <tr>
            <?php
if ($p_cardio_3 != "") {
    echo '
    <td height="" width="168">Terminación del Embarazo  </td>
                    <td>
                        ' . $p_cardio_3 . '
                    </td>
            ';
}
if ($p_hepato_1 != "") {
    echo '
    <td height="" width="168">Producto</td>
                    <td>
                        ' . $p_hepato_1 . '
                    </td>
            ';
}

?>
    </tr>
        <tr>
            <?php
if ($p_hepato_2 != "") {
    echo '
    <td height="" width="168">Hijos Actuales Vivos</td>
                    <td>
                        ' . $p_hepato_2 . '
                    </td>
            ';
}
if ($p_hepato_3 != "") {
    echo '
    <td height="" width="168">Observaciones</td>
                    <td>
                        ' . $p_hepato_3 . '
                    </td>
            ';
}

?>
    </tr>
</table>
<hr width=750>
<BR>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">
    <tr height="">
         <td colspan="12" height=""><div align="center">Otros Anteceddentes ginecobstetricos (Cirugias etc)</div><BR></td>
    </tr>
      <tr>
            <?php
if ($p_tumor_1 != "") {
    echo '
                    <td>
                        ' . $p_tumor_1 . '
                    </td>
            ';
}
?>
    </tr>
</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">
    <tr height="">
         <td colspan="12" height=""><div align="center">HISTORIA MENSTRUAL
</div><BR></td>
    </tr>

        <tr>
            <?php
if ($hiperte_s != "") {
    echo '<tr>
    <td height="" width="168">Ciclo Regular </td>
                    <td>
                        ' . $p_tumor_2 . '
                    </td>
           </tr> ';
}if ($p_tumor_3 != "") {
    echo '<tr>
    <td height="" width="168">F.U.M </td>
                    <td>
                        ' . $p_tumor_3 . '
                    </td>
           </tr> ';
}if ($p_mental_1 != "") {
    echo '<tr>
    <td height="" width="168">Trastornos Menstruales    </td>
                    <td>
                        ' . $p_mental_1 . '
                    </td>
           </tr> ';
}if ($p_mental_2 != "") {
    echo '<tr>
    <td height="" width="168">Tipo</td>
                    <td>
                        ' . $p_mental_2 . '
                    </td>
           </tr> ';
}
?>
    </tr>
</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">
    <tr height="">
         <td colspan="12" height=""><div align="center">HISTORIA CONCEPCIONAL</div><BR></td>
    </tr>

            <?php
if ($p_mental_3 != "") {
    echo '<tr>
    <td height="" width="250px">¿Ha usado metodo anticonceptivo antes de esta consulta?</td>
                    <td>
                        ' . $p_mental_3 . '
                    </td>
           </tr> ';
}if ($p_varices_1 != "") {
    echo '<tr>
            <td height="" width="">Razon principal para planificar</td>
                    <td>
                        ' . $p_varices_1 . '
                    </td>
           </tr> ';
}if ($p_varices_2 != "") {
    echo '<tr>
    <td height="" width="">Método Utilizado</td>
                    <td>
                        ' . $p_varices_2 . '
                    </td>
           </tr> ';
}
?>

       <tr>
        <?php
if ($p_varices_3 != "") {
    echo '<td height="" width="">Fechas De</td>
                    <td width="">
                        ' . $p_varices_3 . '
                    </td>
          ';
}if ($p_tromb_1 != "") {
    echo '<td height="" width="10%">Hasta</td>
                    <td width="">
                        ' . $p_tromb_1 . '
                    </td>
            ';
}
?>
    </tr>

      <?php
if ($p_tromb_2 != "") {
    echo '<tr>
    <td height="" width="168">Prescrito en</td>
                    <td>
                        ' . $p_tromb_2 . '
                    </td>
           </tr> ';
}if ($p_tromb_3 != "") {
    echo '<tr>
    <td height="" width="168">Problemas presentados</td>
                    <td>
                        ' . $p_tromb_3 . '
                    </td>
           </tr> ';
}
?>

</table>
<hr width=750>
<br>
<!-- *************************************************IMPRIMIR DIAGNOSTICO ******************************************** -->
 <div id="content_notas">
<table width="745" border="0"  align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="left">Tipo de Consulta:</td>

                   <?php
$sql4f         = "Select fin_consulta from valoracion_inicial where id_vinicial=" . $_REQUEST['id_vinicial'] . " and historia=" . $_REQUEST['historia'];
$result4f      = $conexion->EjecutarQuery($sql4f);
$row4f         = mysql_fetch_array($result4f);
$tipo_consulta = $row4f['fin_consulta'];
echo '
     <td width="85%">
                    ' . $tipo_consulta . '
                </td>

             ';
?>
</tr>
</table>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="left">Tipo de Dianostico:</td>

                   <?php
$sql4f             = "Select tipo_diagnostico from valoracion_inicial where id_vinicial=" . $_REQUEST['id_vinicial'] . " and historia=" . $_REQUEST['historia'];
$result4f          = $conexion->EjecutarQuery($sql4f);
$row4f             = mysql_fetch_array($result4f);
$tipo_diagnostico1 = $row4f['tipo_diagnostico'];
echo '
     <td width="85%"> ' . $tipo_diagnostico1 . '
                </td>

             ';
?>
</tr>
</table>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="left">Causa Extrema:</td>

                   <?php
$sql4f          = "Select causa_externa from valoracion_inicial where id_vinicial=" . $_REQUEST['id_vinicial'] . " and historia=" . $_REQUEST['historia'];
$result4f       = $conexion->EjecutarQuery($sql4f);
$row4f          = mysql_fetch_array($result4f);
$causa_externa1 = $row4f['causa_externa'];
echo '
     <td width="85%">
       ' . $causa_externa1 . '
                </td>

             ';
?>
</tr>
</table>
           <br>
           <br>


        <table width="750" border="0" style="border:1px solid #000000; font-size:90%;" align="left" width="80%" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">

            <?php

$sql = "Select c.estado,c.id_usuario,vi.*,us.nombre,us.apellido
                        from valoracion_inicial  as vi inner join usuario as us
                        on vi.id_usuario = us.id_usuario
                        inner join cita as c on vi.id_cita = c.id_cita
                        where id_vinicial=" . $_REQUEST['id_vinicial'] . " and  vi.historia='" . @$_REQUEST['historia'] . "'";

$resultados      = $conexion->EjecutarQuery($sql);
$total_registros = mysql_num_rows($resultados);
$sql_search      = $sql . " ORDER BY vi.fecha DESC ";
$resultados      = $conexion->EjecutarQuery($sql_search);
//   $total_paginas = ceil($total_registros / $registros);

echo "<tbody><tr class='t_head'>
                        <th valign='left' width='50px'>Cita</th>

                        <th valign='center' width='100px'>Profesional</th>
                        <th valign='center' width='70px'>Fecha</th>
                        <th valign='center'>Diagnostico</th>
                        <th valign='center'>Observacion</th>
                      </tr></tbody>";
$contador = 0;
if ($total_registros) {
    $bool_style = true;
    while ($row_f = mysql_fetch_array($resultados)) {

        if ($bool_style) {
            $style_file_table = "row1";
        } else {
            $style_file_table = "row2";
        }
        $bool_style = !$bool_style;

        $diagnostico = '';
        if ($row_f['diagnostico_principal'] != '') {
            $sql      = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_principal'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d    = mysql_fetch_array($result_d);
            $diagnostico .= $row_d['codigo'] . "-" . $row_d['enfermedad'];
        }
        if ($row_f['diagnostico_dx1'] != '') {
            $sql      = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_dx1'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d    = mysql_fetch_array($result_d);
            $diagnostico .= "<br>" . $row_d['codigo'] . "-" . $row_d['enfermedad'];
        }
        if ($row_f['diagnostico_dx2'] != '') {
            $sql      = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_dx2'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d    = mysql_fetch_array($result_d);
            $diagnostico .= "<br>" . $row_d['codigo'] . "-" . $row_d['enfermedad'];
        }
        if ($row_f['diagnostico_dx3'] != '') {
            $sql      = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_dx3'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d    = mysql_fetch_array($result_d);
            $diagnostico .= "<br>" . $row_d['codigo'] . "-" . $row_d['enfermedad'];
        }

        echo "<tr class='$style_file_table'>";

        $sesion = $row_f['id_cita'];
        if ($row_f['estado'] == 'FINALIZADO' && ($row_f['id_usuario'] == $_SESSION['id_usuario'])) {
            $sesion = "<a href='index.php?option=init_cita&acc_c=" . $row_f['id_cita'] . "'>" . $row_f['id_cita'] . "</a>";
        }

        echo "<td align='left'>" . $sesion . "</td>";

        echo "<td align='center'>" . $row_f['nombre'] . " " . $row_f['apellido'] . "</td>";
        echo "<td align='center'>" . $row_f['fecha'] . "</td>";
        echo "<td align='left'>" . $diagnostico . "</td>";
        echo "<td align='left'>" . $row_f['valoracion_inicial'] . "</td>";

        echo "</tr>";
    }
} else {
    echo "<font color='darkgray'>(sin resultados)</font>";
}

?>
  </table>
 </div>

</div>

<a href='#' onclick='imprSelec34("imprimir_formularios_oculto", true, "v")' class="no_print" >Imprimir Planificación Familiar</a>
</fieldset>



  <style type="text/css">

        @media print
        {
            #imprimir_formularios_oculto{
                font-size: 10px !important;
            }
            /*
            .Estilo2 {font-size: 12px}
            .Estilo4 {
                font-size: 24px;
                color: #CC3300;
            }
            .Estilo5 {font-size: 18px}
            */
        }
    </style>
