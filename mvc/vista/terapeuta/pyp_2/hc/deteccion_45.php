
<?php
if (isset($_REQUEST['guardar_hc_deteccion']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['idhc_planificacion_familiar'] == 'new') {

$sql = "INSERT INTO hc_deteccion (
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
`osteo_1`,
`osteo_2`,
`osteo_3`,
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
`actv_1`,
`actv_2`,
`actv_3`,
`otros_2_3`,
`antes_quiru`,
`antes_gineco`,
`citologias`,
`tabaco2_1`,
`tabaco2_2`,
`tabaco2_3`,
`dislipide_1`,
`dislipide_2`,
`dislipide_3`,
`diabetes_1`,
`diabetes_2`,
`diabetes_3`,
`mayor_1`,
`mayor_2`,
`mayor_3`,
`menor_1`,
`menor_2`,
`menor_3`,
`menopa_1`,
`menopa_2`,
`menopa_3`,
`otros_45`,
`carbohi`,
`inge_lipido`,
`proteina`,
`vegeta`,
`sv_pa`,
`sv_fc`,
`sv_fr`,
`sv_temp`,
`peso`,
`talla`,
`imc_1`,
`cabeza`,
`ojos_d`,
`ojos_i`,
`boca`,
`orl`,
`cuello`,
`cardiopul`,
`mamas`,
`abdomen`,
`genitoun`,
`exttem`,
`snc`,
`glicemia_1`,
`glicemia_2`,
`coleste_1`,
`coleste_2`,
`ldl_1`,
`ldl_2`,
`total_1`,
`total_2`,
`triglic_1`,
`triglic_2`,
`creat_1`,
`creat_2`,
`uro_1`,
`uro_2`,
`citol_1`,
`citol_2`,
`diagnos_2`,
`medicinas_1`,
`sv_2_ta`,
`sv_2_fc`,
`sv_2_fr`,
`sv_2_t`,
`sv_2_pes`,
`sv_2_talla`,
`sv_2_imc`,
`sv_2_ojod`,
`sv_2_ojoi`,
`sv_2_boca`,
`sv_2_orl`,
`sv_2_cuello`,
`sv_2_cardio`,
`sv_2_mamas`,
`sv_2_abdo`,
`sv_2_genito`,
`sv_2_extre`,
`sv_2_snc`,
`sv_2_conducta`,
`sv_3_ta`,
`sv_3_fc`,
`sv_3_fr`,
`t`,
`sv_3_pes`,
`sv_3_talla`,
`sv_3_imc`,
`sv_3_cabeza`,
`sv_3_ojosd`,
`sv_3_ojosi`,
`sv_3_boca`,
`sv_3_orl`,
`sv_3_cuello`,
`sv_3_cardio`,
`sv_3_mamas`,
`sv_3_abdomen`,
`sv_3_genito`,
`sv_3_extre`,
`sv_3_snc`,
`sv_3_conduta`,
`mentales_1`,
`mentales_2`,
`mentales_3`,
`alcohol_1`,
`alcohol_2`,
`alcohol_3`,
`prox_cita3`,
`sv_2_cabeza`
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
'".$_REQUEST['osteo_1']."' ,
'".$_REQUEST['osteo_2']."' ,
'".$_REQUEST['osteo_3']."' ,
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
'".$_REQUEST['actv_1']."' ,
'".$_REQUEST['actv_2']."' ,
'".$_REQUEST['actv_3']."' ,
'".$_REQUEST['otros_2_3']."' ,
'".$_REQUEST['antes_quiru']."' ,
'".$_REQUEST['antes_gineco']."' ,
'".$_REQUEST['citologias']."' ,
'".$_REQUEST['tabaco2_1']."' ,
'".$_REQUEST['tabaco2_2']."' ,
'".$_REQUEST['tabaco2_3']."' ,
'".$_REQUEST['dislipide_1']."' ,
'".$_REQUEST['dislipide_2']."' ,
'".$_REQUEST['dislipide_3']."' ,
'".$_REQUEST['diabetes_1']."' ,
'".$_REQUEST['diabetes_2']."' ,
'".$_REQUEST['diabetes_3']."' ,
'".$_REQUEST['mayor_1']."' ,
'".$_REQUEST['mayor_2']."' ,
'".$_REQUEST['mayor_3']."' ,
'".$_REQUEST['menor_1']."' ,
'".$_REQUEST['menor_2']."' ,
'".$_REQUEST['menor_3']."' ,
'".$_REQUEST['menopa_1']."' ,
'".$_REQUEST['menopa_2']."' ,
'".$_REQUEST['menopa_3']."' ,
'".$_REQUEST['otros_45']."' ,
'".$_REQUEST['carbohi']."' ,
'".$_REQUEST['inge_lipido']."' ,
'".$_REQUEST['proteina']."' ,
'".$_REQUEST['vegeta']."' ,
'".$_REQUEST['sv_pa']."' ,
'".$_REQUEST['sv_fc']."' ,
'".$_REQUEST['sv_fr']."' ,
'".$_REQUEST['sv_temp']."' ,
'".$_REQUEST['peso']."' ,
'".$_REQUEST['talla']."' ,
'".$_REQUEST['imc_1']."' ,
'".$_REQUEST['cabeza']."' ,
'".$_REQUEST['ojos_d']."' ,
'".$_REQUEST['ojos_i']."' ,
'".$_REQUEST['boca']."' ,
'".$_REQUEST['orl']."' ,
'".$_REQUEST['cuello']."' ,
'".$_REQUEST['cardiopul']."' ,
'".$_REQUEST['mamas']."' ,
'".$_REQUEST['abdomen']."' ,
'".$_REQUEST['genitoun']."' ,
'".$_REQUEST['exttem']."' ,
'".$_REQUEST['snc']."' ,
'".$_REQUEST['glicemia_1']."' ,
'".$_REQUEST['glicemia_2']."' ,
'".$_REQUEST['coleste_1']."' ,
'".$_REQUEST['coleste_2']."' ,
'".$_REQUEST['ldl_1']."' ,
'".$_REQUEST['ldl_2']."' ,
'".$_REQUEST['total_1']."' ,
'".$_REQUEST['total_2']."' ,
'".$_REQUEST['triglic_1']."' ,
'".$_REQUEST['triglic_2']."' ,
'".$_REQUEST['creat_1']."' ,
'".$_REQUEST['creat_2']."' ,
'".$_REQUEST['uro_1']."' ,
'".$_REQUEST['uro_2']."' ,
'".$_REQUEST['citol_1']."' ,
'".$_REQUEST['citol_2']."' ,
'".$_REQUEST['diagnos_2']."' ,
'".$_REQUEST['medicinas_1']."' ,
'".$_REQUEST['sv_2_ta']."' ,
'".$_REQUEST['sv_2_fc']."' ,
'".$_REQUEST['sv_2_fr']."' ,
'".$_REQUEST['sv_2_t']."' ,
'".$_REQUEST['sv_2_pes']."' ,
'".$_REQUEST['sv_2_talla']."' ,
'".$_REQUEST['sv_2_imc']."' ,
'".$_REQUEST['sv_2_ojod']."' ,
'".$_REQUEST['sv_2_ojoi']."' ,
'".$_REQUEST['sv_2_boca']."' ,
'".$_REQUEST['sv_2_orl']."' ,
'".$_REQUEST['sv_2_cuello']."' ,
'".$_REQUEST['sv_2_cardio']."' ,
'".$_REQUEST['sv_2_mamas']."' ,
'".$_REQUEST['sv_2_abdo']."' ,
'".$_REQUEST['sv_2_genito']."' ,
'".$_REQUEST['sv_2_extre']."' ,
'".$_REQUEST['sv_2_snc']."' ,
'".$_REQUEST['sv_2_conducta']."' ,
'".$_REQUEST['sv_3_ta']."' ,
'".$_REQUEST['sv_3_fc']."' ,
'".$_REQUEST['sv_3_fr']."' ,
'".$_REQUEST['t']."' ,
'".$_REQUEST['sv_3_pes']."' ,
'".$_REQUEST['sv_3_talla']."' ,
'".$_REQUEST['sv_3_imc']."' ,
'".$_REQUEST['sv_3_cabeza']."' ,
'".$_REQUEST['sv_3_ojosd']."' ,
'".$_REQUEST['sv_3_ojosi']."' ,
'".$_REQUEST['sv_3_boca']."' ,
'".$_REQUEST['sv_3_orl']."' ,
'".$_REQUEST['sv_3_cuello']."' ,
'".$_REQUEST['sv_3_cardio']."' ,
'".$_REQUEST['sv_3_mamas']."' ,
'".$_REQUEST['sv_3_abdomen']."' ,
'".$_REQUEST['sv_3_genito']."' ,
'".$_REQUEST['sv_3_extre']."' ,
'".$_REQUEST['sv_3_snc']."' ,
'".$_REQUEST['sv_3_conduta']."' ,
'".$_REQUEST['mentales_1']."' ,
'".$_REQUEST['mentales_2']."' ,
'".$_REQUEST['mentales_3']."' ,
'".$_REQUEST['alcohol_1']."' ,
'".$_REQUEST['alcohol_2']."' ,
'".$_REQUEST['alcohol_3']."' ,
'".$_REQUEST['prox_cita3']."' ,
'".$_REQUEST['sv_2_cabeza']."'
) ";


} else if ($_REQUEST['idhc_planificacion_familiar'] != '') {

$sql = "UPDATE hc_deteccion set
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
`osteo_1` = '".$_REQUEST['osteo_1']."' ,
`osteo_2` = '".$_REQUEST['osteo_2']."' ,
`osteo_3` = '".$_REQUEST['osteo_3']."' ,
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
`actv_1` = '".$_REQUEST['actv_1']."' ,
`actv_2` = '".$_REQUEST['actv_2']."' ,
`actv_3` = '".$_REQUEST['actv_3']."' ,
`otros_2_3` = '".$_REQUEST['otros_2_3']."' ,
`antes_quiru` = '".$_REQUEST['antes_quiru']."' ,
`antes_gineco` = '".$_REQUEST['antes_gineco']."' ,
`citologias` = '".$_REQUEST['citologias']."' ,
`tabaco2_1` = '".$_REQUEST['tabaco2_1']."' ,
`tabaco2_2` = '".$_REQUEST['tabaco2_2']."' ,
`tabaco2_3` = '".$_REQUEST['tabaco2_3']."' ,
`dislipide_1` = '".$_REQUEST['dislipide_1']."' ,
`dislipide_2` = '".$_REQUEST['dislipide_2']."' ,
`dislipide_3` = '".$_REQUEST['dislipide_3']."' ,
`diabetes_1` = '".$_REQUEST['diabetes_1']."' ,
`diabetes_2` = '".$_REQUEST['diabetes_2']."' ,
`diabetes_3` = '".$_REQUEST['diabetes_3']."' ,
`mayor_1` = '".$_REQUEST['mayor_1']."' ,
`mayor_2` = '".$_REQUEST['mayor_2']."' ,
`mayor_3` = '".$_REQUEST['mayor_3']."' ,
`menor_1` = '".$_REQUEST['menor_1']."' ,
`menor_2` = '".$_REQUEST['menor_2']."' ,
`menor_3` = '".$_REQUEST['menor_3']."' ,
`menopa_1` = '".$_REQUEST['menopa_1']."' ,
`menopa_2` = '".$_REQUEST['menopa_2']."' ,
`menopa_3` = '".$_REQUEST['menopa_3']."' ,
`otros_45` = '".$_REQUEST['otros_45']."' ,
`carbohi` = '".$_REQUEST['carbohi']."' ,
`inge_lipido` = '".$_REQUEST['inge_lipido']."' ,
`proteina` = '".$_REQUEST['proteina']."' ,
`vegeta` = '".$_REQUEST['vegeta']."' ,
`sv_pa` = '".$_REQUEST['sv_pa']."' ,
`sv_fc` = '".$_REQUEST['sv_fc']."' ,
`sv_fr` = '".$_REQUEST['sv_fr']."' ,
`sv_temp` = '".$_REQUEST['sv_temp']."' ,
`peso` = '".$_REQUEST['peso']."' ,
`talla` = '".$_REQUEST['talla']."' ,
`imc_1` = '".$_REQUEST['imc_1']."' ,
`cabeza` = '".$_REQUEST['cabeza']."' ,
`ojos_d` = '".$_REQUEST['ojos_d']."' ,
`ojos_i` = '".$_REQUEST['ojos_i']."' ,
`boca` = '".$_REQUEST['boca']."' ,
`orl` = '".$_REQUEST['orl']."' ,
`cuello` = '".$_REQUEST['cuello']."' ,
`cardiopul` = '".$_REQUEST['cardiopul']."' ,
`mamas` = '".$_REQUEST['mamas']."' ,
`abdomen` = '".$_REQUEST['abdomen']."' ,
`genitoun` = '".$_REQUEST['genitoun']."' ,
`exttem` = '".$_REQUEST['exttem']."' ,
`snc` = '".$_REQUEST['snc']."' ,
`glicemia_1` = '".$_REQUEST['glicemia_1']."' ,
`glicemia_2` = '".$_REQUEST['glicemia_2']."' ,
`coleste_1` = '".$_REQUEST['coleste_1']."' ,
`coleste_2` = '".$_REQUEST['coleste_2']."' ,
`ldl_1` = '".$_REQUEST['ldl_1']."' ,
`ldl_2` = '".$_REQUEST['ldl_2']."' ,
`total_1` = '".$_REQUEST['total_1']."' ,
`total_2` = '".$_REQUEST['total_2']."' ,
`triglic_1` = '".$_REQUEST['triglic_1']."' ,
`triglic_2` = '".$_REQUEST['triglic_2']."' ,
`creat_1` = '".$_REQUEST['creat_1']."' ,
`creat_2` = '".$_REQUEST['creat_2']."' ,
`uro_1` = '".$_REQUEST['uro_1']."' ,
`uro_2` = '".$_REQUEST['uro_2']."' ,
`citol_1` = '".$_REQUEST['citol_1']."' ,
`citol_2` = '".$_REQUEST['citol_2']."' ,
`diagnos_2` = '".$_REQUEST['diagnos_2']."' ,
`medicinas_1` = '".$_REQUEST['medicinas_1']."' ,
`sv_2_ta` = '".$_REQUEST['sv_2_ta']."' ,
`sv_2_fc` = '".$_REQUEST['sv_2_fc']."' ,
`sv_2_fr` = '".$_REQUEST['sv_2_fr']."' ,
`sv_2_t` = '".$_REQUEST['sv_2_t']."' ,
`sv_2_pes` = '".$_REQUEST['sv_2_pes']."' ,
`sv_2_talla` = '".$_REQUEST['sv_2_talla']."' ,
`sv_2_imc` = '".$_REQUEST['sv_2_imc']."' ,
`sv_2_ojod` = '".$_REQUEST['sv_2_ojod']."' ,
`sv_2_ojoi` = '".$_REQUEST['sv_2_ojoi']."' ,
`sv_2_boca` = '".$_REQUEST['sv_2_boca']."' ,
`sv_2_orl` = '".$_REQUEST['sv_2_orl']."' ,
`sv_2_cuello` = '".$_REQUEST['sv_2_cuello']."' ,
`sv_2_cardio` = '".$_REQUEST['sv_2_cardio']."' ,
`sv_2_mamas` = '".$_REQUEST['sv_2_mamas']."' ,
`sv_2_abdo` = '".$_REQUEST['sv_2_abdo']."' ,
`sv_2_genito` = '".$_REQUEST['sv_2_genito']."' ,
`sv_2_extre` = '".$_REQUEST['sv_2_extre']."' ,
`sv_2_snc` = '".$_REQUEST['sv_2_snc']."' ,
`sv_2_conducta` = '".$_REQUEST['sv_2_conducta']."' ,
`sv_3_ta` = '".$_REQUEST['sv_3_ta']."' ,
`sv_3_fc` = '".$_REQUEST['sv_3_fc']."' ,
`sv_3_fr` = '".$_REQUEST['sv_3_fr']."' ,
`t` = '".$_REQUEST['t']."' ,
`sv_3_pes` = '".$_REQUEST['sv_3_pes']."' ,
`sv_3_talla` = '".$_REQUEST['sv_3_talla']."' ,
`sv_3_imc` = '".$_REQUEST['sv_3_imc']."' ,
`sv_3_cabeza` = '".$_REQUEST['sv_3_cabeza']."' ,
`sv_3_ojosd` = '".$_REQUEST['sv_3_ojosd']."' ,
`sv_3_ojosi` = '".$_REQUEST['sv_3_ojosi']."' ,
`sv_3_boca` = '".$_REQUEST['sv_3_boca']."' ,
`sv_3_orl` = '".$_REQUEST['sv_3_orl']."' ,
`sv_3_cuello` = '".$_REQUEST['sv_3_cuello']."' ,
`sv_3_cardio` = '".$_REQUEST['sv_3_cardio']."' ,
`sv_3_mamas` = '".$_REQUEST['sv_3_mamas']."' ,
`sv_3_abdomen` = '".$_REQUEST['sv_3_abdomen']."' ,
`sv_3_genito` = '".$_REQUEST['sv_3_genito']."' ,
`sv_3_extre` = '".$_REQUEST['sv_3_extre']."' ,
`sv_3_snc` = '".$_REQUEST['sv_3_snc']."' ,
`sv_3_conduta` = '".$_REQUEST['sv_3_conduta']."' ,
`mentales_1` = '".$_REQUEST['mentales_1']."' ,
`mentales_2` = '".$_REQUEST['mentales_2']."' ,
`mentales_3` = '".$_REQUEST['mentales_3']."' ,
`alcohol_1` = '".$_REQUEST['alcohol_1']."' ,
`alcohol_2` = '".$_REQUEST['alcohol_2']."' ,
`alcohol_3` = '".$_REQUEST['alcohol_3']."' ,
`prox_cita3` = '".$_REQUEST['prox_cita3']."' ,
`sv_2_cabeza` = '".$_REQUEST['sv_2_cabeza']."' WHERE `idhc_planificacion_familiar` = '".$_REQUEST['idhc_planificacion_familiar']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$idhc_planificacion_familiar = 'new';
$sql = "SELECT * from hc_deteccion WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
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
$osteo_1 = $row['osteo_1'];
$osteo_2 = $row['osteo_2'];
$osteo_3 = $row['osteo_3'];
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
$actv_1 = $row['actv_1'];
$actv_2 = $row['actv_2'];
$actv_3 = $row['actv_3'];
$otros_2_3 = $row['otros_2_3'];
$antes_quiru = $row['antes_quiru'];
$antes_gineco = $row['antes_gineco'];
$citologias = $row['citologias'];
$tabaco2_1 = $row['tabaco2_1'];
$tabaco2_2 = $row['tabaco2_2'];
$tabaco2_3 = $row['tabaco2_3'];
$dislipide_1 = $row['dislipide_1'];
$dislipide_2 = $row['dislipide_2'];
$dislipide_3 = $row['dislipide_3'];
$diabetes_1 = $row['diabetes_1'];
$diabetes_2 = $row['diabetes_2'];
$diabetes_3 = $row['diabetes_3'];
$mayor_1 = $row['mayor_1'];
$mayor_2 = $row['mayor_2'];
$mayor_3 = $row['mayor_3'];
$menor_1 = $row['menor_1'];
$menor_2 = $row['menor_2'];
$menor_3 = $row['menor_3'];
$menopa_1 = $row['menopa_1'];
$menopa_2 = $row['menopa_2'];
$menopa_3 = $row['menopa_3'];
$otros_45 = $row['otros_45'];
$carbohi = $row['carbohi'];
$inge_lipido = $row['inge_lipido'];
$proteina = $row['proteina'];
$vegeta = $row['vegeta'];
$sv_pa = $row['sv_pa'];
$sv_fc = $row['sv_fc'];
$sv_fr = $row['sv_fr'];
$sv_temp = $row['sv_temp'];
$peso = $row['peso'];
$talla = $row['talla'];
$imc_1 = $row['imc_1'];
$cabeza = $row['cabeza'];
$ojos_d = $row['ojos_d'];
$ojos_i = $row['ojos_i'];
$boca = $row['boca'];
$orl = $row['orl'];
$cuello = $row['cuello'];
$cardiopul = $row['cardiopul'];
$mamas = $row['mamas'];
$abdomen = $row['abdomen'];
$genitoun = $row['genitoun'];
$exttem = $row['exttem'];
$snc = $row['snc'];
$glicemia_1 = $row['glicemia_1'];
$glicemia_2 = $row['glicemia_2'];
$coleste_1 = $row['coleste_1'];
$coleste_2 = $row['coleste_2'];
$ldl_1 = $row['ldl_1'];
$ldl_2 = $row['ldl_2'];
$total_1 = $row['total_1'];
$total_2 = $row['total_2'];
$triglic_1 = $row['triglic_1'];
$triglic_2 = $row['triglic_2'];
$creat_1 = $row['creat_1'];
$creat_2 = $row['creat_2'];
$uro_1 = $row['uro_1'];
$uro_2 = $row['uro_2'];
$citol_1 = $row['citol_1'];
$citol_2 = $row['citol_2'];
$diagnos_2 = $row['diagnos_2'];
$medicinas_1 = $row['medicinas_1'];
$sv_2_ta = $row['sv_2_ta'];
$sv_2_fc = $row['sv_2_fc'];
$sv_2_fr = $row['sv_2_fr'];
$sv_2_t = $row['sv_2_t'];
$sv_2_pes = $row['sv_2_pes'];
$sv_2_talla = $row['sv_2_talla'];
$sv_2_imc = $row['sv_2_imc'];
$sv_2_ojod = $row['sv_2_ojod'];
$sv_2_ojoi = $row['sv_2_ojoi'];
$sv_2_boca = $row['sv_2_boca'];
$sv_2_orl = $row['sv_2_orl'];
$sv_2_cuello = $row['sv_2_cuello'];
$sv_2_cardio = $row['sv_2_cardio'];
$sv_2_mamas = $row['sv_2_mamas'];
$sv_2_abdo = $row['sv_2_abdo'];
$sv_2_genito = $row['sv_2_genito'];
$sv_2_extre = $row['sv_2_extre'];
$sv_2_snc = $row['sv_2_snc'];
$sv_2_conducta = $row['sv_2_conducta'];
$sv_3_ta = $row['sv_3_ta'];
$sv_3_fc = $row['sv_3_fc'];
$sv_3_fr = $row['sv_3_fr'];
$t = $row['t'];
$sv_3_pes = $row['sv_3_pes'];
$sv_3_talla = $row['sv_3_talla'];
$sv_3_imc = $row['sv_3_imc'];
$sv_3_cabeza = $row['sv_3_cabeza'];
$sv_3_ojosd = $row['sv_3_ojosd'];
$sv_3_ojosi = $row['sv_3_ojosi'];
$sv_3_boca = $row['sv_3_boca'];
$sv_3_orl = $row['sv_3_orl'];
$sv_3_cuello = $row['sv_3_cuello'];
$sv_3_cardio = $row['sv_3_cardio'];
$sv_3_mamas = $row['sv_3_mamas'];
$sv_3_abdomen = $row['sv_3_abdomen'];
$sv_3_genito = $row['sv_3_genito'];
$sv_3_extre = $row['sv_3_extre'];
$sv_3_snc = $row['sv_3_snc'];
$sv_3_conduta = $row['sv_3_conduta'];
$mentales_1 = $row['mentales_1'];
$mentales_2 = $row['mentales_2'];
$mentales_3 = $row['mentales_3'];
$alcohol_1 = $row['alcohol_1'];
$alcohol_2 = $row['alcohol_2'];
$alcohol_3 = $row['alcohol_3'];
$prox_cita3 = $row['prox_cita3'];
$sv_2_cabeza = $row['sv_2_cabeza'];
break; }

?>
<script>

$(function(){

$("#close-hc_deteccion").click(function(){
$("#open-hc_deteccion").show();
$(this).hide();
$("#content-hc_deteccion").hide('slow');
});

$("#open-hc_deteccion").click(function(){
$("#close-hc_deteccion").show();
$(this).hide();
$("#content-hc_deteccion").show('slow');
});

});

</script>
<fieldset id="hc_deteccion">
<legend align="left"> <div class="arrow-c" id="close-hc_deteccion"></div> <div class="arrow-o" id="open-hc_deteccion" ></div> <font>Valoracion terapia ocupacional - hc_deteccion</font></legend>
<div id="content-hc_deteccion">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_deteccion" id="guardar_hc_deteccion" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_deteccion" name="form_hc_deteccion" action="<?php echo @$action_form_hc_deteccion ?>#hc_deteccion" method="post">

<input type="hidden" id="id_hc_deteccion" name="id_hc_deteccion" value="<?php echo @$id_hc_deteccion ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="idhc_planificacion_familiar" name="idhc_planificacion_familiar" value="<?php echo @$idhc_planificacion_familiar; ?>" />

<table width="774" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="6" height="19" width="716"><div align="center">DETECCIÓN    TEMPRANA DE ALTERACIONES EN EL ADULTO MAYOR DE 45 AÑOS</div></td>
  </tr>
</table>
<br />
<table width="689" border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="171" />
  <col width="83" span="2" />
  <col width="113" />
  <tr height="19">
    <td colspan="4" height="19">2. ANTECEDENTES</td>
  </tr>
  <tr height="38">
    <td height="38" width="237">ANTECEDENTES FAMILIARES</td>
    <td width="170">SI</td>
    <td width="168">NO </td>
    <td width="377">PARENTESCO</td>
  </tr>
  <tr height="38">
    <td height="38" width="237">Hipertensión Arterial</td>
    <td width="170"><input type="text" class="input_txt valid" id="hiperte_s" name="hiperte_s" value="<?php echo @$hiperte_s; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="hiperte_n" name="hiperte_n" value="<?php echo @$hiperte_n; ?>" /></td>
    <td width="377"><input type="text" class="input_txt valid" id="hiperte_par" name="hiperte_par" value="<?php echo @$hiperte_par; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="237">Diabetes Mellitus</td>
    <td width="170"><input type="text" class="input_txt valid" id="dia_m_s" name="dia_m_s" value="<?php echo @$dia_m_s; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="dia_m_n" name="dia_m_n" value="<?php echo @$dia_m_n; ?>" /></td>
    <td width="377"><input type="text" class="input_txt valid" id="dia_m__par" name="dia_m__par" value="<?php echo @$dia_m__par; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="237">Cardiopatias</td>
    <td width="170"><input type="text" class="input_txt valid" id="cardio_s" name="cardio_s" value="<?php echo @$cardio_s; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="cardio_n" name="cardio_n" value="<?php echo @$cardio_n; ?>" /></td>
    <td width="377"><input type="text" class="input_txt valid" id="cardio_par" name="cardio_par" value="<?php echo @$cardio_par; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="237">Hepatopatias</td>
    <td width="170"><input type="text" class="input_txt valid" id="hepa_1" name="hepa_1" value="<?php echo @$hepa_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="hepa_2" name="hepa_2" value="<?php echo @$hepa_2; ?>" /></td>
    <td width="377"><input type="text" class="input_txt valid" id="hepa_3" name="hepa_3" value="<?php echo @$hepa_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="237">Tumores</td>
    <td width="170"><input type="text" class="input_txt valid" id="tumores_1" name="tumores_1" value="<?php echo @$tumores_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="tumores_2" name="tumores_2" value="<?php echo @$tumores_2; ?>" /></td>
    <td width="377"><input type="text" class="input_txt valid" id="tumores_3" name="tumores_3" value="<?php echo @$tumores_3; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="237">Problemas mentales</td>
    <td width="170"><input type="text" class="input_txt valid" id="mentales_1" name="mentales_1" value="<?php echo @$mentales_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="mentales_2" name="mentales_2" value="<?php echo @$mentales_2; ?>" /></td>
    <td width="377"><input type="text" class="input_txt valid" id="mentales_3" name="mentales_3" value="<?php echo @$mentales_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="237">Otros? Cuales?</td>
    <td colspan="3"><input type="text" class="input_txt valid" id="otros_2" name="otros_2" value="<?php echo @$otros_2; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="171" />
  <col width="83" span="2" />
  <col width="113" />
  <tr height="38">
    <td height="38" width="171">ANTECEDENTES    PERSONALES</td>
    <td width="83">SI</td>
    <td width="83">NO </td>
    <td width="113">OBSERVACIONES</td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Hipertensión Arterial</td>
    <td width="83"><input type="text" class="input_txt valid" id="p_hiper_1" name="p_hiper_1" value="<?php echo @$p_hiper_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="p_hiper_2" name="p_hiper_2" value="<?php echo @$p_hiper_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="p_hiper_3" name="p_hiper_3" value="<?php echo @$p_hiper_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Diabetes Mellitus</td>
    <td width="83"><input type="text" class="input_txt valid" id="p_dia_1" name="p_dia_1" value="<?php echo @$p_dia_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="p_dia_2" name="p_dia_2" value="<?php echo @$p_dia_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="p_dia_3" name="p_dia_3" value="<?php echo @$p_dia_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Cardiopatias</td>
    <td width="83"><input type="text" class="input_txt valid" id="p_cardio_1" name="p_cardio_1" value="<?php echo @$p_cardio_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="p_cardio_2" name="p_cardio_2" value="<?php echo @$p_cardio_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="p_cardio_3" name="p_cardio_3" value="<?php echo @$p_cardio_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Hepatopatias</td>
    <td width="83"><input type="text" class="input_txt valid" id="p_hepato_1" name="p_hepato_1" value="<?php echo @$p_hepato_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="p_hepato_2" name="p_hepato_2" value="<?php echo @$p_hepato_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="p_hepato_3" name="p_hepato_3" value="<?php echo @$p_hepato_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Tumores</td>
    <td width="83"><input type="text" class="input_txt valid" id="p_tumor_1" name="p_tumor_1" value="<?php echo @$p_tumor_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="p_tumor_2" name="p_tumor_2" value="<?php echo @$p_tumor_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="p_tumor_3" name="p_tumor_3" value="<?php echo @$p_tumor_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Problemas mentales</td>
    <td width="83"><input type="text" class="input_txt valid" id="p_mental_1" name="p_mental_1" value="<?php echo @$p_mental_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="p_mental_2" name="p_mental_2" value="<?php echo @$p_mental_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="p_mental_3" name="p_mental_3" value="<?php echo @$p_mental_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Varices</td>
    <td width="83"><input type="text" class="input_txt valid" id="p_varices_1" name="p_varices_1" value="<?php echo @$p_varices_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="p_varices_2" name="p_varices_2" value="<?php echo @$p_varices_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="p_varices_3" name="p_varices_3" value="<?php echo @$p_varices_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Tromboflebitis</td>
    <td width="83"><input type="text" class="input_txt valid" id="p_tromb_1" name="p_tromb_1" value="<?php echo @$p_tromb_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="p_tromb_2" name="p_tromb_2" value="<?php echo @$p_tromb_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="p_tromb_3" name="p_tromb_3" value="<?php echo @$p_tromb_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Cefaleas</td>
    <td width="83"><input type="text" class="input_txt valid" id="p_cefal_1" name="p_cefal_1" value="<?php echo @$p_cefal_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="p_cefal_2" name="p_cefal_2" value="<?php echo @$p_cefal_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="p_cefal_3" name="p_cefal_3" value="<?php echo @$p_cefal_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Osteoporosis</td>
    <td width="83"><input type="text" class="input_txt valid" id="osteo_1" name="osteo_1" value="<?php echo @$osteo_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="osteo_2" name="osteo_2" value="<?php echo @$osteo_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="osteo_3" name="osteo_3" value="<?php echo @$osteo_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Enf. Pulmonar</td>
    <td width="83"><input type="text" class="input_txt valid" id="p__pulmo_1" name="p__pulmo_1" value="<?php echo @$p__pulmo_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="p__pulmo_2" name="p__pulmo_2" value="<?php echo @$p__pulmo_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="p__pulmo_3" name="p__pulmo_3" value="<?php echo @$p__pulmo_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Otros? Cuales?</td>
    <td colspan="3" width="279"><input type="text" class="input_txt valid" id="otro_2_2" name="otro_2_2" value="<?php echo @$otro_2_2; ?>" /></td>
  </tr>
  <tr height="38">
    <td colspan="2" height="38" width="254">Antecedentes Quirúrgicos:</td>
    <td colspan="2" width="196"><input type="text" class="input_txt valid" id="antes_quiru" name="antes_quiru" value="<?php echo @$antes_quiru; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19" width="254">Antecedentes Ginecobstétricos:</td>
    <td colspan="2" width="196"><input type="text" class="input_txt valid" id="antes_gineco" name="antes_gineco" value="<?php echo @$antes_gineco; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19" width="254">Citologías:</td>
    <td colspan="2" width="196"><input type="text" class="input_txt valid" id="citologias" name="citologias" value="<?php echo @$citologias; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="171" />
  <col width="83" span="2" />
  <col width="113" />
  <tr height="19">
    <td colspan="4" height="19" width="450">3. HÁBITOS</td>
  </tr>
  <tr height="19">
    <td height="19" width="171">TIPO</td>
    <td width="83">SI</td>
    <td width="83">NO</td>
    <td width="113">FREC.    O TIPO</td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Tabaquismo</td>
    <td width="83"><input type="text" class="input_txt valid" id="tabaco_1" name="tabaco_1" value="<?php echo @$tabaco_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="tabaco_2" name="tabaco_2" value="<?php echo @$tabaco_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="tabaco_3" name="tabaco_3" value="<?php echo @$tabaco_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Consumo de Alcohol</td>
    <td width="83"><input type="text" class="input_txt valid" id="alcohol_1" name="alcohol_1" value="<?php echo @$alcohol_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="alcohol_2" name="alcohol_2" value="<?php echo @$alcohol_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="alcohol_3" name="alcohol_3" value="<?php echo @$alcohol_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Consumo Psicoactivos</td>
    <td width="83"><input type="text" class="input_txt valid" id="droga_1" name="droga_1" value="<?php echo @$droga_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="droga_2" name="droga_2" value="<?php echo @$droga_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="droga_3" name="droga_3" value="<?php echo @$droga_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Uso de Medicamentos</td>
    <td width="83"><input type="text" class="input_txt valid" id="medic_1" name="medic_1" value="<?php echo @$medic_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="medic_2" name="medic_2" value="<?php echo @$medic_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="medic_3" name="medic_3" value="<?php echo @$medic_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Dieta saludable</td>
    <td width="83"><input type="text" class="input_txt valid" id="dieta_1" name="dieta_1" value="<?php echo @$dieta_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="dieta_2" name="dieta_2" value="<?php echo @$dieta_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="dieta_3" name="dieta_3" value="<?php echo @$dieta_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Actividad Física</td>
    <td width="83"><input type="text" class="input_txt valid" id="actv_1" name="actv_1" value="<?php echo @$actv_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="actv_2" name="actv_2" value="<?php echo @$actv_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="actv_3" name="actv_3" value="<?php echo @$actv_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Otros? Cuales?</td>
    <td colspan="3" width="279"><input type="text" class="input_txt valid" id="otros_2_3" name="otros_2_3" value="<?php echo @$otros_2_3; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="171" />
  <col width="83" span="2" />
  <col width="113" />
  <tr height="19">
    <td colspan="4" height="19" width="450">4.    FACTORES DE RIESGO MAYOR</td>
  </tr>
  <tr height="19">
    <td height="19" width="171">FACTOR</td>
    <td width="83">SI</td>
    <td width="83">NO</td>
    <td width="113">TIEMPO</td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Tabaquismo</td>
    <td width="83"><input type="text" class="input_txt valid" id="tabaco2_1" name="tabaco2_1" value="<?php echo @$tabaco2_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="tabaco2_2" name="tabaco2_2" value="<?php echo @$tabaco2_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="tabaco2_3" name="tabaco2_3" value="<?php echo @$tabaco2_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Díslipidemia</td>
    <td width="83"><input type="text" class="input_txt valid" id="dislipide_1" name="dislipide_1" value="<?php echo @$dislipide_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="dislipide_2" name="dislipide_2" value="<?php echo @$dislipide_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="dislipide_3" name="dislipide_3" value="<?php echo @$dislipide_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Diabetes Mellitus</td>
    <td width="83"><input type="text" class="input_txt valid" id="diabetes_1" name="diabetes_1" value="<?php echo @$diabetes_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="diabetes_2" name="diabetes_2" value="<?php echo @$diabetes_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="diabetes_3" name="diabetes_3" value="<?php echo @$diabetes_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Mayor de 60 años</td>
    <td width="83"><input type="text" class="input_txt valid" id="mayor_1" name="mayor_1" value="<?php echo @$mayor_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="mayor_2" name="mayor_2" value="<?php echo @$mayor_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="mayor_3" name="mayor_3" value="<?php echo @$mayor_3; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="171">Hombre &gt; de 45 años</td>
    <td width="83"><input type="text" class="input_txt valid" id="menor_1" name="menor_1" value="<?php echo @$menor_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="menor_2" name="menor_2" value="<?php echo @$menor_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="menor_3" name="menor_3" value="<?php echo @$menor_3; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="171">Mujer menopausica</td>
    <td width="83"><input type="text" class="input_txt valid" id="menopa_1" name="menopa_1" value="<?php echo @$menopa_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="menopa_2" name="menopa_2" value="<?php echo @$menopa_2; ?>" /></td>
    <td width="113"><input type="text" class="input_txt valid" id="menopa_3" name="menopa_3" value="<?php echo @$menopa_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">Otros? Cuales?</td>
    <td colspan="3" width="279"><input type="text" class="input_txt valid" id="otros_45" name="otros_45" value="<?php echo @$otros_45; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="171" />
  <col width="83" span="2" />
  <col width="113" />
  <tr height="19">
    <td colspan="4" height="19" width="450">5.    DIETA</td>
  </tr>
  <tr height="38">
    <td colspan="2" height="38">DIETA</td>
    <td colspan="2" width="196">PORCENTAJE    (1-100%)</td>
  </tr>
  <tr height="38">
    <td colspan="2" height="38" width="254">Ingesta    de Carbohidratos</td>
    <td colspan="2" width="196"><input type="text" class="input_txt valid" id="carbohi" name="carbohi" value="<?php echo @$carbohi; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19" width="254">Ingesta    de Lípidos</td>
    <td colspan="2" width="196"><input type="text" class="input_txt valid" id="inge_lipido" name="inge_lipido" value="<?php echo @$inge_lipido; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19" width="254">Ingesta    de Proteínas</td>
    <td colspan="2" width="196"><input type="text" class="input_txt valid" id="proteina" name="proteina" value="<?php echo @$proteina; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19" width="254">Vegetales</td>
    <td colspan="2" width="196"><input type="text" class="input_txt valid" id="vegeta" name="vegeta" value="<?php echo @$vegeta; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="171" />
  <col width="83" span="2" />
  <col width="113" />
  <col width="125" />
  <tr height="19">
    <td colspan="5" height="19" width="575">6.    EXAMEN FÍSICO</td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">SIGNOS    VITALES</td>
    <td>TA</td>
    <td>FC </td>
    <td>FR</td>
    <td>T°</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="sv_pa" name="sv_pa" value="<?php echo @$sv_pa; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sv_fc" name="sv_fc" value="<?php echo @$sv_fc; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sv_fr" name="sv_fr" value="<?php echo @$sv_fr; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sv_temp" name="sv_temp" value="<?php echo @$sv_temp; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">Valoración    nutricional</td>
    <td>Peso: </td>
    <td>Talla:</td>
    <td colspan="2"> IMC:  </td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="peso" name="peso" value="<?php echo @$peso; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="talla" name="talla" value="<?php echo @$talla; ?>" /></td>
    <td colspan="2"><input type="text" class="input_txt valid" id="imc_1" name="imc_1" value="<?php echo @$imc_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Cabeza</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="cabeza" name="cabeza" value="<?php echo @$cabeza; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">Ojos</td>
    <td colspan="4">Agudeza Visual</td>
  </tr>
  <tr height="19">
    <td height="19">OD</td>
    <td><input type="text" class="input_txt valid" id="ojos_d" name="ojos_d" value="<?php echo @$ojos_d; ?>" /></td>
    <td>OI</td>
    <td><input type="text" class="input_txt valid" id="ojos_i" name="ojos_i" value="<?php echo @$ojos_i; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Boca</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="boca" name="boca" value="<?php echo @$boca; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">ORL</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="orl" name="orl" value="<?php echo @$orl; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Cuello</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="cuello" name="cuello" value="<?php echo @$cuello; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Cardiopulmonar</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="cardiopul" name="cardiopul" value="<?php echo @$cardiopul; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Mamas</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="mamas" name="mamas" value="<?php echo @$mamas; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Abdomen</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="abdomen" name="abdomen" value="<?php echo @$abdomen; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Genitourinario</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="genitoun" name="genitoun" value="<?php echo @$genitoun; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Extremidades</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="exttem" name="exttem" value="<?php echo @$exttem; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">SNC</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="snc" name="snc" value="<?php echo @$snc; ?>" /></td>
  </tr>
</table>
<p></p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="171" />
  <col width="83" span="2" />
  <tr height="19">
    <td colspan="3" height="19" width="337">7.    CONDUCTA</td>
  </tr>
  <tr height="19">
    <td height="19" width="171">LABORATORIO</td>
    <td width="83">FECHA</td>
    <td width="83">RESULTADO</td>
  </tr>
  <tr height="19">
    <td height="19" width="171">GLICEMIA</td>
    <td width="83"><input type="text" class="input_txt valid" id="glicemia_1" name="glicemia_1" value="<?php echo @$glicemia_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="glicemia_2" name="glicemia_2" value="<?php echo @$glicemia_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">COLESTEROL HDL</td>
    <td width="83"><input type="text" class="input_txt valid" id="coleste_1" name="coleste_1" value="<?php echo @$coleste_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="coleste_2" name="coleste_2" value="<?php echo @$coleste_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">COLESTEROL LDL</td>
    <td width="83"><input type="text" class="input_txt valid" id="ldl_1" name="ldl_1" value="<?php echo @$ldl_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="ldl_2" name="ldl_2" value="<?php echo @$ldl_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">COLESTEROL TOTAL</td>
    <td width="83"><input type="text" class="input_txt valid" id="total_1" name="total_1" value="<?php echo @$total_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total_2" name="total_2" value="<?php echo @$total_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">TRIGLICERIDOS</td>
    <td width="83"><input type="text" class="input_txt valid" id="triglic_1" name="triglic_1" value="<?php echo @$triglic_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="triglic_2" name="triglic_2" value="<?php echo @$triglic_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">CREATININA</td>
    <td width="83"><input type="text" class="input_txt valid" id="creat_1" name="creat_1" value="<?php echo @$creat_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="creat_2" name="creat_2" value="<?php echo @$creat_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">UROANALISIS</td>
    <td width="83"><input type="text" class="input_txt valid" id="uro_1" name="uro_1" value="<?php echo @$uro_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="uro_2" name="uro_2" value="<?php echo @$uro_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="171">CITOLOGÍA</td>
    <td width="83"><input type="text" class="input_txt valid" id="citol_1" name="citol_1" value="<?php echo @$citol_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="citol_2" name="citol_2" value="<?php echo @$citol_2; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="505" border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="171" />
  <col width="83" span="2" />
  <tr height="19">
    <td colspan="2" height="19">8.    DIAGNOSTICO:</td>
    <td width="203"><input type="text" class="input_txt valid" id="diagnos_2" name="diagnos_2" value="<?php echo @$diagnos_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19">9.    MEDICAMENTOS/MANEJO</td>
    <td width="203"><input type="text" class="input_txt valid" id="medicinas_1" name="medicinas_1" value="<?php echo @$medicinas_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19">FECHA    PRÓXIMA CITA</td>
    <td width="203"><input type="text" class="input_txt valid" id="prox_cita3" name="prox_cita3" value="<?php echo @$prox_cita3; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="844" border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="171" />
  <col width="83" span="2" />
  <col width="113" />
  <col width="125" />
  <tr height="19">
    <td colspan="5" height="19">8.    CONTROLES (CADA 5 AÑOS)</td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">SIGNOS    VITALES</td>
    <td width="168">TA</td>
    <td width="168">FC </td>
    <td width="168">FR</td>
    <td width="242">T°</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="sv_2_ta" name="sv_2_ta" value="<?php echo @$sv_2_ta; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sv_2_fc" name="sv_2_fc" value="<?php echo @$sv_2_fc; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sv_2_fr" name="sv_2_fr" value="<?php echo @$sv_2_fr; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sv_2_t" name="sv_2_t" value="<?php echo @$sv_2_t; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">Valoración    nutricional</td>
    <td>Peso: </td>
    <td>Talla:</td>
    <td colspan="2"> IMC:  </td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="sv_2_pes" name="sv_2_pes" value="<?php echo @$sv_2_pes; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sv_2_talla" name="sv_2_talla" value="<?php echo @$sv_2_talla; ?>" /></td>
    <td colspan="2"><input type="text" class="input_txt valid" id="sv_2_imc" name="sv_2_imc" value="<?php echo @$sv_2_imc; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Cabeza</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="sv_2_cabeza" name="sv_2_cabeza" value="<?php echo @$sv_2_cabeza; ?>" />
</td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">Ojos</td>
    <td colspan="4">Agudeza Visual</td>
  </tr>
  <tr height="19">
    <td height="19">OD</td>
    <td><input type="text" class="input_txt valid" id="sv_2_ojod" name="sv_2_ojod" value="<?php echo @$sv_2_ojod; ?>" /></td>
    <td>OI</td>
    <td><input type="text" class="input_txt valid" id="sv_2_ojoi" name="sv_2_ojoi" value="<?php echo @$sv_2_ojoi; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Boca</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="sv_2_boca" name="sv_2_boca" value="<?php echo @$sv_2_boca; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">ORL</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="sv_2_orl" name="sv_2_orl" value="<?php echo @$sv_2_orl; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Cuello</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="sv_2_cuello" name="sv_2_cuello" value="<?php echo @$sv_2_cuello; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Cardiopulmonar</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="sv_2_cardio" name="sv_2_cardio" value="<?php echo @$sv_2_cardio; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Mamas</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="sv_2_mamas" name="sv_2_mamas" value="<?php echo @$sv_2_mamas; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Abdomen</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="sv_2_abdo" name="sv_2_abdo" value="<?php echo @$sv_2_abdo; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Genitourinario</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="sv_2_genito" name="sv_2_genito" value="<?php echo @$sv_2_genito; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Extremidades</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="sv_2_extre" name="sv_2_extre" value="<?php echo @$sv_2_extre; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">SNC</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="sv_2_snc" name="sv_2_snc" value="<?php echo @$sv_2_snc; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="196">CONDUCTA:</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="sv_2_conducta" name="sv_2_conducta" value="<?php echo @$sv_2_conducta; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<?php echo @$button ?>
</form><br>
</div>
</fieldset>