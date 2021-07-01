<?php
if (isset($_REQUEST['guardar_hc_desarrollo_joven']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['idhc_desarrollo_joven'] == 'new') {

$sql = "INSERT INTO hc_desarrollo_joven (
`idhc_desarrollo_joven`,
`id_usuario`,
`id_proceso`,
`id_historia`,
`id_vinicial`,
`id_revaloracion`,
`dep_padre`,
`dep_madre`,
`dep_otro`,
`intra_b`,
`intra_r`,
`intra_ma`,
`com_b`,
`com_r`,
`com_ma`,
`aut_pa`,
`aut_ma`,
`aut_otros`,
`esco_padre`,
`ocupacion_p`,
`esco_madre`,
`ocupacion_m`,
`h_art_s`,
`h_art_n`,
`h_art_par`,
`dia_m_s`,
`dia_m_n`,
`dia_m_par`,
`tuber_s`,
`tuber_n`,
`tuber_par`,
`cancer_s`,
`cancer_n`,
`cancer_par`,
`cardio_s`,
`cardio_n`,
`cardio_par`,
`autoin_s`,
`autoin_n`,
`autoin_par`,
`epilep_s`,
`epilep_n`,
`epilep_par`,
`mental_s`,
`mental_n`,
`mental_par`,
`lipid_s`,
`lipid_n`,
`lipid_par`,
`alcohol_s`,
`alcohol_n`,
`alcohol_par`,
`tabaco_s`,
`tabaco_n`,
`tabaco_par`,
`farma_s`,
`farma_n`,
`farma_par`,
`otros_3`,
`patolo_1`,
`patolo_2`,
`patolo_3`,
`tiempo_1`,
`tiempo_2`,
`tiempo_3`,
`tratam_1`,
`tratam_2`,
`tratam_3`,
`ante_quirur`,
`fuma_s`,
`fuma_n`,
`fuma_fre`,
`con_alc_s`,
`con_alc_n`,
`con_alc_fre`,
`act_fis_s`,
`act_fis_n`,
`act_fis_fre`,
`estres_s`,
`estres_n`,
`estres_fre`,
`dieta_s`,
`dieta_n`,
`dieta_fre`,
`medio_s`,
`medio_n`,
`medio_fre`,
`otros_4`,
`menarca`,
`anios`,
`g_2`,
`p_2`,
`a_2`,
`c_2`,
`fum_2`,
`sex_s`,
`sex_n`,
`sex_numero`,
`planifica_s`,
`planifica_n`,
`planifica_metodo`,
`fecha_citologia`,
`res_citrologia`,
`ets_s`,
`ets_n`,
`ets_cual`,
`armas_s`,
`armas_n`,
`armas_cual`,
`judicial_s`,
`judicial_n`,
`ocupa_actual`,
`escolaridad`,
`tiempo_libre`,
`relaciona_b`,
`relaciona_r`,
`relaciona_mal`,
`religion`,
`grupos_s`,
`grupos_n`,
`grupos_cual`,
`mot_consulta`,
`enferme_actual`,
`sv_ta`,
`sv_fc`,
`sv_fr`,
`sv_tem`,
`va_peso`,
`va_talla`,
`va_imc`,
`va_inter_imc`,
`aspec_gen`,
`piel_muco`,
`cabeza`,
`cuello`,
`cardiores`,
`exa_mamas`,
`abdomen`,
`genito`,
`soma`,
`snc`,
`diagnostico_1`,
`conducta_1`,
`lab_hemo_s`,
`lab_hemo_n`,
`lab_hemo_res`,
`lab_col_s`,
`lab_col_n`,
`lab_col_res`,
`lab_vdrl_s`,
`lab_vdrl_n`,
`lab_vdrl_res`,
`lab_cito_s`,
`lab_cito_n`,
`lab_cito_res`,
`otras_6`,
`espermarca`,
`anios_2`,
`evolucion_1`,
`evolucion_2`,
`evolucion_3`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['dep_padre']."' ,
'".$_REQUEST['dep_madre']."' ,
'".$_REQUEST['dep_otro']."' ,
'".$_REQUEST['intra_b']."' ,
'".$_REQUEST['intra_r']."' ,
'".$_REQUEST['intra_ma']."' ,
'".$_REQUEST['com_b']."' ,
'".$_REQUEST['com_r']."' ,
'".$_REQUEST['com_ma']."' ,
'".$_REQUEST['aut_pa']."' ,
'".$_REQUEST['aut_ma']."' ,
'".$_REQUEST['aut_otros']."' ,
'".$_REQUEST['esco_padre']."' ,
'".$_REQUEST['ocupacion_p']."' ,
'".$_REQUEST['esco_madre']."' ,
'".$_REQUEST['ocupacion_m']."' ,
'".$_REQUEST['h_art_s']."' ,
'".$_REQUEST['h_art_n']."' ,
'".$_REQUEST['h_art_par']."' ,
'".$_REQUEST['dia_m_s']."' ,
'".$_REQUEST['dia_m_n']."' ,
'".$_REQUEST['dia_m_par']."' ,
'".$_REQUEST['tuber_s']."' ,
'".$_REQUEST['tuber_n']."' ,
'".$_REQUEST['tuber_par']."' ,
'".$_REQUEST['cancer_s']."' ,
'".$_REQUEST['cancer_n']."' ,
'".$_REQUEST['cancer_par']."' ,
'".$_REQUEST['cardio_s']."' ,
'".$_REQUEST['cardio_n']."' ,
'".$_REQUEST['cardio_par']."' ,
'".$_REQUEST['autoin_s']."' ,
'".$_REQUEST['autoin_n']."' ,
'".$_REQUEST['autoin_par']."' ,
'".$_REQUEST['epilep_s']."' ,
'".$_REQUEST['epilep_n']."' ,
'".$_REQUEST['epilep_par']."' ,
'".$_REQUEST['mental_s']."' ,
'".$_REQUEST['mental_n']."' ,
'".$_REQUEST['mental_par']."' ,
'".$_REQUEST['lipid_s']."' ,
'".$_REQUEST['lipid_n']."' ,
'".$_REQUEST['lipid_par']."' ,
'".$_REQUEST['alcohol_s']."' ,
'".$_REQUEST['alcohol_n']."' ,
'".$_REQUEST['alcohol_par']."' ,
'".$_REQUEST['tabaco_s']."' ,
'".$_REQUEST['tabaco_n']."' ,
'".$_REQUEST['tabaco_par']."' ,
'".$_REQUEST['farma_s']."' ,
'".$_REQUEST['farma_n']."' ,
'".$_REQUEST['farma_par']."' ,
'".$_REQUEST['otros_3']."' ,
'".$_REQUEST['patolo_1']."' ,
'".$_REQUEST['patolo_2']."' ,
'".$_REQUEST['patolo_3']."' ,
'".$_REQUEST['tiempo_1']."' ,
'".$_REQUEST['tiempo_2']."' ,
'".$_REQUEST['tiempo_3']."' ,
'".$_REQUEST['tratam_1']."' ,
'".$_REQUEST['tratam_2']."' ,
'".$_REQUEST['tratam_3']."' ,
'".$_REQUEST['ante_quirur']."' ,
'".$_REQUEST['fuma_s']."' ,
'".$_REQUEST['fuma_n']."' ,
'".$_REQUEST['fuma_fre']."' ,
'".$_REQUEST['con_alc_s']."' ,
'".$_REQUEST['con_alc_n']."' ,
'".$_REQUEST['con_alc_fre']."' ,
'".$_REQUEST['act_fis_s']."' ,
'".$_REQUEST['act_fis_n']."' ,
'".$_REQUEST['act_fis_fre']."' ,
'".$_REQUEST['estres_s']."' ,
'".$_REQUEST['estres_n']."' ,
'".$_REQUEST['estres_fre']."' ,
'".$_REQUEST['dieta_s']."' ,
'".$_REQUEST['dieta_n']."' ,
'".$_REQUEST['dieta_fre']."' ,
'".$_REQUEST['medio_s']."' ,
'".$_REQUEST['medio_n']."' ,
'".$_REQUEST['medio_fre']."' ,
'".$_REQUEST['otros_4']."' ,
'".$_REQUEST['menarca']."' ,
'".$_REQUEST['anios']."' ,
'".$_REQUEST['g_2']."' ,
'".$_REQUEST['p_2']."' ,
'".$_REQUEST['a_2']."' ,
'".$_REQUEST['c_2']."' ,
'".$_REQUEST['fum_2']."' ,
'".$_REQUEST['sex_s']."' ,
'".$_REQUEST['sex_n']."' ,
'".$_REQUEST['sex_numero']."' ,
'".$_REQUEST['planifica_s']."' ,
'".$_REQUEST['planifica_n']."' ,
'".$_REQUEST['planifica_metodo']."' ,
'".$_REQUEST['fecha_citologia']."' ,
'".$_REQUEST['res_citrologia']."' ,
'".$_REQUEST['ets_s']."' ,
'".$_REQUEST['ets_n']."' ,
'".$_REQUEST['ets_cual']."' ,
'".$_REQUEST['armas_s']."' ,
'".$_REQUEST['armas_n']."' ,
'".$_REQUEST['armas_cual']."' ,
'".$_REQUEST['judicial_s']."' ,
'".$_REQUEST['judicial_n']."' ,
'".$_REQUEST['ocupa_actual']."' ,
'".$_REQUEST['escolaridad']."' ,
'".$_REQUEST['tiempo_libre']."' ,
'".$_REQUEST['relaciona_b']."' ,
'".$_REQUEST['relaciona_r']."' ,
'".$_REQUEST['relaciona_mal']."' ,
'".$_REQUEST['religion']."' ,
'".$_REQUEST['grupos_s']."' ,
'".$_REQUEST['grupos_n']."' ,
'".$_REQUEST['grupos_cual']."' ,
'".$_REQUEST['mot_consulta']."' ,
'".$_REQUEST['enferme_actual']."' ,
'".$_REQUEST['sv_ta']."' ,
'".$_REQUEST['sv_fc']."' ,
'".$_REQUEST['sv_fr']."' ,
'".$_REQUEST['sv_tem']."' ,
'".$_REQUEST['va_peso']."' ,
'".$_REQUEST['va_talla']."' ,
'".$_REQUEST['va_imc']."' ,
'".$_REQUEST['va_inter_imc']."' ,
'".$_REQUEST['aspec_gen']."' ,
'".$_REQUEST['piel_muco']."' ,
'".$_REQUEST['cabeza']."' ,
'".$_REQUEST['cuello']."' ,
'".$_REQUEST['cardiores']."' ,
'".$_REQUEST['exa_mamas']."' ,
'".$_REQUEST['abdomen']."' ,
'".$_REQUEST['genito']."' ,
'".$_REQUEST['soma']."' ,
'".$_REQUEST['snc']."' ,
'".$_REQUEST['diagnostico_1']."' ,
'".$_REQUEST['conducta_1']."' ,
'".$_REQUEST['lab_hemo_s']."' ,
'".$_REQUEST['lab_hemo_n']."' ,
'".$_REQUEST['lab_hemo_res']."' ,
'".$_REQUEST['lab_col_s']."' ,
'".$_REQUEST['lab_col_n']."' ,
'".$_REQUEST['lab_col_res']."' ,
'".$_REQUEST['lab_vdrl_s']."' ,
'".$_REQUEST['lab_vdrl_n']."' ,
'".$_REQUEST['lab_vdrl_res']."' ,
'".$_REQUEST['lab_cito_s']."' ,
'".$_REQUEST['lab_cito_n']."' ,
'".$_REQUEST['lab_cito_res']."' ,
'".$_REQUEST['otras_6']."' ,
'".$_REQUEST['espermarca']."' ,
'".$_REQUEST['anios_2']."' ,
'".$_REQUEST['evolucion_1']."' ,
'".$_REQUEST['evolucion_2']."' ,
'".$_REQUEST['evolucion_3']."'
) ";


} else if ($_REQUEST['idhc_desarrollo_joven'] != '') {

$sql = "UPDATE hc_desarrollo_joven set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`dep_padre` = '".$_REQUEST['dep_padre']."' ,
`dep_madre` = '".$_REQUEST['dep_madre']."' ,
`dep_otro` = '".$_REQUEST['dep_otro']."' ,
`intra_b` = '".$_REQUEST['intra_b']."' ,
`intra_r` = '".$_REQUEST['intra_r']."' ,
`intra_ma` = '".$_REQUEST['intra_ma']."' ,
`com_b` = '".$_REQUEST['com_b']."' ,
`com_r` = '".$_REQUEST['com_r']."' ,
`com_ma` = '".$_REQUEST['com_ma']."' ,
`aut_pa` = '".$_REQUEST['aut_pa']."' ,
`aut_ma` = '".$_REQUEST['aut_ma']."' ,
`aut_otros` = '".$_REQUEST['aut_otros']."' ,
`esco_padre` = '".$_REQUEST['esco_padre']."' ,
`ocupacion_p` = '".$_REQUEST['ocupacion_p']."' ,
`esco_madre` = '".$_REQUEST['esco_madre']."' ,
`ocupacion_m` = '".$_REQUEST['ocupacion_m']."' ,
`h_art_s` = '".$_REQUEST['h_art_s']."' ,
`h_art_n` = '".$_REQUEST['h_art_n']."' ,
`h_art_par` = '".$_REQUEST['h_art_par']."' ,
`dia_m_s` = '".$_REQUEST['dia_m_s']."' ,
`dia_m_n` = '".$_REQUEST['dia_m_n']."' ,
`dia_m_par` = '".$_REQUEST['dia_m_par']."' ,
`tuber_s` = '".$_REQUEST['tuber_s']."' ,
`tuber_n` = '".$_REQUEST['tuber_n']."' ,
`tuber_par` = '".$_REQUEST['tuber_par']."' ,
`cancer_s` = '".$_REQUEST['cancer_s']."' ,
`cancer_n` = '".$_REQUEST['cancer_n']."' ,
`cancer_par` = '".$_REQUEST['cancer_par']."' ,
`cardio_s` = '".$_REQUEST['cardio_s']."' ,
`cardio_n` = '".$_REQUEST['cardio_n']."' ,
`cardio_par` = '".$_REQUEST['cardio_par']."' ,
`autoin_s` = '".$_REQUEST['autoin_s']."' ,
`autoin_n` = '".$_REQUEST['autoin_n']."' ,
`autoin_par` = '".$_REQUEST['autoin_par']."' ,
`epilep_s` = '".$_REQUEST['epilep_s']."' ,
`epilep_n` = '".$_REQUEST['epilep_n']."' ,
`epilep_par` = '".$_REQUEST['epilep_par']."' ,
`mental_s` = '".$_REQUEST['mental_s']."' ,
`mental_n` = '".$_REQUEST['mental_n']."' ,
`mental_par` = '".$_REQUEST['mental_par']."' ,
`lipid_s` = '".$_REQUEST['lipid_s']."' ,
`lipid_n` = '".$_REQUEST['lipid_n']."' ,
`lipid_par` = '".$_REQUEST['lipid_par']."' ,
`alcohol_s` = '".$_REQUEST['alcohol_s']."' ,
`alcohol_n` = '".$_REQUEST['alcohol_n']."' ,
`alcohol_par` = '".$_REQUEST['alcohol_par']."' ,
`tabaco_s` = '".$_REQUEST['tabaco_s']."' ,
`tabaco_n` = '".$_REQUEST['tabaco_n']."' ,
`tabaco_par` = '".$_REQUEST['tabaco_par']."' ,
`farma_s` = '".$_REQUEST['farma_s']."' ,
`farma_n` = '".$_REQUEST['farma_n']."' ,
`farma_par` = '".$_REQUEST['farma_par']."' ,
`otros_3` = '".$_REQUEST['otros_3']."' ,
`patolo_1` = '".$_REQUEST['patolo_1']."' ,
`patolo_2` = '".$_REQUEST['patolo_2']."' ,
`patolo_3` = '".$_REQUEST['patolo_3']."' ,
`tiempo_1` = '".$_REQUEST['tiempo_1']."' ,
`tiempo_2` = '".$_REQUEST['tiempo_2']."' ,
`tiempo_3` = '".$_REQUEST['tiempo_3']."' ,
`tratam_1` = '".$_REQUEST['tratam_1']."' ,
`tratam_2` = '".$_REQUEST['tratam_2']."' ,
`tratam_3` = '".$_REQUEST['tratam_3']."' ,
`ante_quirur` = '".$_REQUEST['ante_quirur']."' ,
`fuma_s` = '".$_REQUEST['fuma_s']."' ,
`fuma_n` = '".$_REQUEST['fuma_n']."' ,
`fuma_fre` = '".$_REQUEST['fuma_fre']."' ,
`con_alc_s` = '".$_REQUEST['con_alc_s']."' ,
`con_alc_n` = '".$_REQUEST['con_alc_n']."' ,
`con_alc_fre` = '".$_REQUEST['con_alc_fre']."' ,
`act_fis_s` = '".$_REQUEST['act_fis_s']."' ,
`act_fis_n` = '".$_REQUEST['act_fis_n']."' ,
`act_fis_fre` = '".$_REQUEST['act_fis_fre']."' ,
`estres_s` = '".$_REQUEST['estres_s']."' ,
`estres_n` = '".$_REQUEST['estres_n']."' ,
`estres_fre` = '".$_REQUEST['estres_fre']."' ,
`dieta_s` = '".$_REQUEST['dieta_s']."' ,
`dieta_n` = '".$_REQUEST['dieta_n']."' ,
`dieta_fre` = '".$_REQUEST['dieta_fre']."' ,
`medio_s` = '".$_REQUEST['medio_s']."' ,
`medio_n` = '".$_REQUEST['medio_n']."' ,
`medio_fre` = '".$_REQUEST['medio_fre']."' ,
`otros_4` = '".$_REQUEST['otros_4']."' ,
`menarca` = '".$_REQUEST['menarca']."' ,
`anios` = '".$_REQUEST['anios']."' ,
`g_2` = '".$_REQUEST['g_2']."' ,
`p_2` = '".$_REQUEST['p_2']."' ,
`a_2` = '".$_REQUEST['a_2']."' ,
`c_2` = '".$_REQUEST['c_2']."' ,
`fum_2` = '".$_REQUEST['fum_2']."' ,
`sex_s` = '".$_REQUEST['sex_s']."' ,
`sex_n` = '".$_REQUEST['sex_n']."' ,
`sex_numero` = '".$_REQUEST['sex_numero']."' ,
`planifica_s` = '".$_REQUEST['planifica_s']."' ,
`planifica_n` = '".$_REQUEST['planifica_n']."' ,
`planifica_metodo` = '".$_REQUEST['planifica_metodo']."' ,
`fecha_citologia` = '".$_REQUEST['fecha_citologia']."' ,
`res_citrologia` = '".$_REQUEST['res_citrologia']."' ,
`ets_s` = '".$_REQUEST['ets_s']."' ,
`ets_n` = '".$_REQUEST['ets_n']."' ,
`ets_cual` = '".$_REQUEST['ets_cual']."' ,
`armas_s` = '".$_REQUEST['armas_s']."' ,
`armas_n` = '".$_REQUEST['armas_n']."' ,
`armas_cual` = '".$_REQUEST['armas_cual']."' ,
`judicial_s` = '".$_REQUEST['judicial_s']."' ,
`judicial_n` = '".$_REQUEST['judicial_n']."' ,
`ocupa_actual` = '".$_REQUEST['ocupa_actual']."' ,
`escolaridad` = '".$_REQUEST['escolaridad']."' ,
`tiempo_libre` = '".$_REQUEST['tiempo_libre']."' ,
`relaciona_b` = '".$_REQUEST['relaciona_b']."' ,
`relaciona_r` = '".$_REQUEST['relaciona_r']."' ,
`relaciona_mal` = '".$_REQUEST['relaciona_mal']."' ,
`religion` = '".$_REQUEST['religion']."' ,
`grupos_s` = '".$_REQUEST['grupos_s']."' ,
`grupos_n` = '".$_REQUEST['grupos_n']."' ,
`grupos_cual` = '".$_REQUEST['grupos_cual']."' ,
`mot_consulta` = '".$_REQUEST['mot_consulta']."' ,
`enferme_actual` = '".$_REQUEST['enferme_actual']."' ,
`sv_ta` = '".$_REQUEST['sv_ta']."' ,
`sv_fc` = '".$_REQUEST['sv_fc']."' ,
`sv_fr` = '".$_REQUEST['sv_fr']."' ,
`sv_tem` = '".$_REQUEST['sv_tem']."' ,
`va_peso` = '".$_REQUEST['va_peso']."' ,
`va_talla` = '".$_REQUEST['va_talla']."' ,
`va_imc` = '".$_REQUEST['va_imc']."' ,
`va_inter_imc` = '".$_REQUEST['va_inter_imc']."' ,
`aspec_gen` = '".$_REQUEST['aspec_gen']."' ,
`piel_muco` = '".$_REQUEST['piel_muco']."' ,
`cabeza` = '".$_REQUEST['cabeza']."' ,
`cuello` = '".$_REQUEST['cuello']."' ,
`cardiores` = '".$_REQUEST['cardiores']."' ,
`exa_mamas` = '".$_REQUEST['exa_mamas']."' ,
`abdomen` = '".$_REQUEST['abdomen']."' ,
`genito` = '".$_REQUEST['genito']."' ,
`soma` = '".$_REQUEST['soma']."' ,
`snc` = '".$_REQUEST['snc']."' ,
`diagnostico_1` = '".$_REQUEST['diagnostico_1']."' ,
`conducta_1` = '".$_REQUEST['conducta_1']."' ,
`lab_hemo_s` = '".$_REQUEST['lab_hemo_s']."' ,
`lab_hemo_n` = '".$_REQUEST['lab_hemo_n']."' ,
`lab_hemo_res` = '".$_REQUEST['lab_hemo_res']."' ,
`lab_col_s` = '".$_REQUEST['lab_col_s']."' ,
`lab_col_n` = '".$_REQUEST['lab_col_n']."' ,
`lab_col_res` = '".$_REQUEST['lab_col_res']."' ,
`lab_vdrl_s` = '".$_REQUEST['lab_vdrl_s']."' ,
`lab_vdrl_n` = '".$_REQUEST['lab_vdrl_n']."' ,
`lab_vdrl_res` = '".$_REQUEST['lab_vdrl_res']."' ,
`lab_cito_s` = '".$_REQUEST['lab_cito_s']."' ,
`lab_cito_n` = '".$_REQUEST['lab_cito_n']."' ,
`lab_cito_res` = '".$_REQUEST['lab_cito_res']."' ,
`otras_6` = '".$_REQUEST['otras_6']."' ,
`espermarca` = '".$_REQUEST['espermarca']."' ,
`anios_2` = '".$_REQUEST['anios_2']."' ,
`evolucion_1` = '".$_REQUEST['evolucion_1']."' ,
`evolucion_2` = '".$_REQUEST['evolucion_2']."' ,
`evolucion_3` = '".$_REQUEST['evolucion_3']."' WHERE `idhc_desarrollo_joven` = '".$_REQUEST['idhc_desarrollo_joven']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$idhc_desarrollo_joven = 'new';
$sql = "SELECT * from hc_desarrollo_joven WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$idhc_desarrollo_joven = $row['idhc_desarrollo_joven'];
$id_usuario = $row['id_usuario'];
$id_proceso = $row['id_proceso'];
$id_historia = $row['id_historia'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$dep_padre = $row['dep_padre'];
$dep_madre = $row['dep_madre'];
$dep_otro = $row['dep_otro'];
$intra_b = $row['intra_b'];
$intra_r = $row['intra_r'];
$intra_ma = $row['intra_ma'];
$com_b = $row['com_b'];
$com_r = $row['com_r'];
$com_ma = $row['com_ma'];
$aut_pa = $row['aut_pa'];
$aut_ma = $row['aut_ma'];
$aut_otros = $row['aut_otros'];
$esco_padre = $row['esco_padre'];
$ocupacion_p = $row['ocupacion_p'];
$esco_madre = $row['esco_madre'];
$ocupacion_m = $row['ocupacion_m'];
$h_art_s = $row['h_art_s'];
$h_art_n = $row['h_art_n'];
$h_art_par = $row['h_art_par'];
$dia_m_s = $row['dia_m_s'];
$dia_m_n = $row['dia_m_n'];
$dia_m_par = $row['dia_m_par'];
$tuber_s = $row['tuber_s'];
$tuber_n = $row['tuber_n'];
$tuber_par = $row['tuber_par'];
$cancer_s = $row['cancer_s'];
$cancer_n = $row['cancer_n'];
$cancer_par = $row['cancer_par'];
$cardio_s = $row['cardio_s'];
$cardio_n = $row['cardio_n'];
$cardio_par = $row['cardio_par'];
$autoin_s = $row['autoin_s'];
$autoin_n = $row['autoin_n'];
$autoin_par = $row['autoin_par'];
$epilep_s = $row['epilep_s'];
$epilep_n = $row['epilep_n'];
$epilep_par = $row['epilep_par'];
$mental_s = $row['mental_s'];
$mental_n = $row['mental_n'];
$mental_par = $row['mental_par'];
$lipid_s = $row['lipid_s'];
$lipid_n = $row['lipid_n'];
$lipid_par = $row['lipid_par'];
$alcohol_s = $row['alcohol_s'];
$alcohol_n = $row['alcohol_n'];
$alcohol_par = $row['alcohol_par'];
$tabaco_s = $row['tabaco_s'];
$tabaco_n = $row['tabaco_n'];
$tabaco_par = $row['tabaco_par'];
$farma_s = $row['farma_s'];
$farma_n = $row['farma_n'];
$farma_par = $row['farma_par'];
$otros_3 = $row['otros_3'];
$patolo_1 = $row['patolo_1'];
$patolo_2 = $row['patolo_2'];
$patolo_3 = $row['patolo_3'];
$tiempo_1 = $row['tiempo_1'];
$tiempo_2 = $row['tiempo_2'];
$tiempo_3 = $row['tiempo_3'];
$tratam_1 = $row['tratam_1'];
$tratam_2 = $row['tratam_2'];
$tratam_3 = $row['tratam_3'];
$ante_quirur = $row['ante_quirur'];
$fuma_s = $row['fuma_s'];
$fuma_n = $row['fuma_n'];
$fuma_fre = $row['fuma_fre'];
$con_alc_s = $row['con_alc_s'];
$con_alc_n = $row['con_alc_n'];
$con_alc_fre = $row['con_alc_fre'];
$act_fis_s = $row['act_fis_s'];
$act_fis_n = $row['act_fis_n'];
$act_fis_fre = $row['act_fis_fre'];
$estres_s = $row['estres_s'];
$estres_n = $row['estres_n'];
$estres_fre = $row['estres_fre'];
$dieta_s = $row['dieta_s'];
$dieta_n = $row['dieta_n'];
$dieta_fre = $row['dieta_fre'];
$medio_s = $row['medio_s'];
$medio_n = $row['medio_n'];
$medio_fre = $row['medio_fre'];
$otros_4 = $row['otros_4'];
$menarca = $row['menarca'];
$anios = $row['anios'];
$g_2 = $row['g_2'];
$p_2 = $row['p_2'];
$a_2 = $row['a_2'];
$c_2 = $row['c_2'];
$fum_2 = $row['fum_2'];
$sex_s = $row['sex_s'];
$sex_n = $row['sex_n'];
$sex_numero = $row['sex_numero'];
$planifica_s = $row['planifica_s'];
$planifica_n = $row['planifica_n'];
$planifica_metodo = $row['planifica_metodo'];
$fecha_citologia = $row['fecha_citologia'];
$res_citrologia = $row['res_citrologia'];
$ets_s = $row['ets_s'];
$ets_n = $row['ets_n'];
$ets_cual = $row['ets_cual'];
$armas_s = $row['armas_s'];
$armas_n = $row['armas_n'];
$armas_cual = $row['armas_cual'];
$judicial_s = $row['judicial_s'];
$judicial_n = $row['judicial_n'];
$ocupa_actual = $row['ocupa_actual'];
$escolaridad = $row['escolaridad'];
$tiempo_libre = $row['tiempo_libre'];
$relaciona_b = $row['relaciona_b'];
$relaciona_r = $row['relaciona_r'];
$relaciona_mal = $row['relaciona_mal'];
$religion = $row['religion'];
$grupos_s = $row['grupos_s'];
$grupos_n = $row['grupos_n'];
$grupos_cual = $row['grupos_cual'];
$mot_consulta = $row['mot_consulta'];
$enferme_actual = $row['enferme_actual'];
$sv_ta = $row['sv_ta'];
$sv_fc = $row['sv_fc'];
$sv_fr = $row['sv_fr'];
$sv_tem = $row['sv_tem'];
$va_peso = $row['va_peso'];
$va_talla = $row['va_talla'];
$va_imc = $row['va_imc'];
$va_inter_imc = $row['va_inter_imc'];
$aspec_gen = $row['aspec_gen'];
$piel_muco = $row['piel_muco'];
$cabeza = $row['cabeza'];
$cuello = $row['cuello'];
$cardiores = $row['cardiores'];
$exa_mamas = $row['exa_mamas'];
$abdomen = $row['abdomen'];
$genito = $row['genito'];
$soma = $row['soma'];
$snc = $row['snc'];
$diagnostico_1 = $row['diagnostico_1'];
$conducta_1 = $row['conducta_1'];
$lab_hemo_s = $row['lab_hemo_s'];
$lab_hemo_n = $row['lab_hemo_n'];
$lab_hemo_res = $row['lab_hemo_res'];
$lab_col_s = $row['lab_col_s'];
$lab_col_n = $row['lab_col_n'];
$lab_col_res = $row['lab_col_res'];
$lab_vdrl_s = $row['lab_vdrl_s'];
$lab_vdrl_n = $row['lab_vdrl_n'];
$lab_vdrl_res = $row['lab_vdrl_res'];
$lab_cito_s = $row['lab_cito_s'];
$lab_cito_n = $row['lab_cito_n'];
$lab_cito_res = $row['lab_cito_res'];
$otras_6 = $row['otras_6'];
$espermarca = $row['espermarca'];
$anios_2 = $row['anios_2'];
$evolucion_1 = $row['evolucion_1'];
$evolucion_2 = $row['evolucion_2'];
$evolucion_3 = $row['evolucion_3'];
break; }

?>
<script>

$(function(){

$("#close-hc_desarrollo_joven").click(function(){
$("#open-hc_desarrollo_joven").show();
$(this).hide();
$("#content-hc_desarrollo_joven").hide('slow');
});

$("#open-hc_desarrollo_joven").click(function(){
$("#close-hc_desarrollo_joven").show();
$(this).hide();
$("#content-hc_desarrollo_joven").show('slow');
});

});

</script>
<fieldset id="hc_desarrollo_joven">
<legend align="left"> <div class="arrow-c" id="close-hc_desarrollo_joven"></div> <div class="arrow-o" id="open-hc_desarrollo_joven" ></div> 
<font>Desarrollo del joven</font></legend>
<div id="content-hc_desarrollo_joven">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_desarrollo_joven" id="guardar_hc_desarrollo_joven" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_desarrollo_joven" name="form_hc_desarrollo_joven" action="<?php echo @$action_form_hc_desarrollo_joven ?>#hc_desarrollo_joven" method="post">

<input type="hidden" id="id_hc_desarrollo_joven" name="id_hc_desarrollo_joven" value="<?php echo @$id_hc_desarrollo_joven ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="idhc_desarrollo_joven" name="idhc_desarrollo_joven" value="<?php echo @$idhc_desarrollo_joven; ?>" />

<div align="center">DESARROLLO DEL JOVEN
  <br />
  <br />
</div>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="190" />
  <col width="83" span="2" />
  <col width="161" />
  <tr height="19">
    <td colspan="4" height="19" width="517">2.    ANTECEDENTES DEL ENTORNO FAMILIAR</td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">Dependencia    económica</td>
    <td>Padre</td>
    <td>Madre</td>
    <td>Otros</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="dep_padre" name="dep_padre" value="<?php echo @$dep_padre; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="dep_madre" name="dep_madre" value="<?php echo @$dep_madre; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="dep_otro" name="dep_otro" value="<?php echo @$dep_otro; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">Relaciones    Intrafamiliares</td>
    <td>Buena</td>
    <td>Regular</td>
    <td>Mala</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="intra_b" name="intra_b" value="<?php echo @$intra_b; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="intra_r" name="intra_r" value="<?php echo @$intra_r; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="intra_ma" name="intra_ma" value="<?php echo @$intra_ma; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">Comunicación    Intrafamil.</td>
    <td>Buena</td>
    <td>Regular</td>
    <td>Mala</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="com_b" name="com_b" value="<?php echo @$com_b; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="com_r" name="com_r" value="<?php echo @$com_r; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="com_ma" name="com_ma" value="<?php echo @$com_ma; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">Fig,    Autoridad en el Hogar</td>
    <td>Padre</td>
    <td>Madre</td>
    <td>Otros</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="aut_pa" name="aut_pa" value="<?php echo @$aut_pa; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="aut_ma" name="aut_ma" value="<?php echo @$aut_ma; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="aut_otros" name="aut_otros" value="<?php echo @$aut_otros; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Formacion    Profesional</td>
    <td>Escolaridad</td>
    <td colspan="2">Ocupación</td>
  </tr>
  <tr height="19">
    <td height="19">Padre</td>
    <td><input type="text" class="input_txt valid" id="esco_padre" name="esco_padre" value="<?php echo @$esco_padre; ?>" /></td>
    <td colspan="2"><input type="text" class="input_txt valid" id="ocupacion_p" name="ocupacion_p" value="<?php echo @$ocupacion_p; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Madre</td>
    <td><input type="text" class="input_txt valid" id="esco_madre" name="esco_madre" value="<?php echo @$esco_madre; ?>" /></td>
    <td colspan="2"><input type="text" class="input_txt valid" id="ocupacion_m" name="ocupacion_m" value="<?php echo @$ocupacion_m; ?>" /></td>
  </tr>
</table>
<p>&nbsp; </p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="190" />
  <col width="83" span="2" />
  <col width="161" />
  <tr height="19">
    <td colspan="4" height="19" width="517">3.    ANTECEDENTES FAMILIARES</td>
  </tr>
  <tr height="19">
    <td height="19">ANTECEDENTES</td>
    <td>SI</td>
    <td>NO</td>
    <td>PARENTESCO</td>
  </tr>
  <tr height="19">
    <td height="19">Hipertensiórv    Arterial</td>
    <td><input type="text" class="input_txt valid" id="h_art_s" name="h_art_s" value="<?php echo @$h_art_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="h_art_n" name="h_art_n" value="<?php echo @$h_art_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="h_art_par" name="h_art_par" value="<?php echo @$h_art_par; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Diabetes    Mellitus</td>
    <td><input type="text" class="input_txt valid" id="dia_m_s" name="dia_m_s" value="<?php echo @$dia_m_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="dia_m_n" name="dia_m_n" value="<?php echo @$dia_m_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="dia_m_par" name="dia_m_par" value="<?php echo @$dia_m_par; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Tuberculosis </td>
    <td><input type="text" class="input_txt valid" id="tuber_s" name="tuber_s" value="<?php echo @$tuber_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="tuber_n" name="tuber_n" value="<?php echo @$tuber_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="tuber_par" name="tuber_par" value="<?php echo @$tuber_par; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Cáncér</td>
    <td><input type="text" class="input_txt valid" id="cancer_s" name="cancer_s" value="<?php echo @$cancer_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="cancer_n" name="cancer_n" value="<?php echo @$cancer_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="cancer_par" name="cancer_par" value="<?php echo @$cancer_par; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Cardiopatias</td>
    <td><input type="text" class="input_txt valid" id="cardio_s" name="cardio_s" value="<?php echo @$cardio_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="cardio_n" name="cardio_n" value="<?php echo @$cardio_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="cardio_par" name="cardio_par" value="<?php echo @$cardio_par; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Enfermedad    Autoinmune</td>
    <td><input type="text" class="input_txt valid" id="autoin_s" name="autoin_s" value="<?php echo @$autoin_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="autoin_n" name="autoin_n" value="<?php echo @$autoin_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="autoin_par" name="autoin_par" value="<?php echo @$autoin_par; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Epilepsia</td>
    <td><input type="text" class="input_txt valid" id="epilep_s" name="epilep_s" value="<?php echo @$epilep_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="epilep_n" name="epilep_n" value="<?php echo @$epilep_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="epilep_par" name="epilep_par" value="<?php echo @$epilep_par; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Trastornos    Mentales </td>
    <td><input type="text" class="input_txt valid" id="mental_s" name="mental_s" value="<?php echo @$mental_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="mental_n" name="mental_n" value="<?php echo @$mental_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="mental_par" name="mental_par" value="<?php echo @$mental_par; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Trast. Met.    Lipidos</td>
    <td><input type="text" class="input_txt valid" id="lipid_s" name="lipid_s" value="<?php echo @$lipid_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="lipid_n" name="lipid_n" value="<?php echo @$lipid_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="lipid_par" name="lipid_par" value="<?php echo @$lipid_par; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Alcoholismo </td>
    <td><input type="text" class="input_txt valid" id="alcohol_s" name="alcohol_s" value="<?php echo @$alcohol_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="alcohol_n" name="alcohol_n" value="<?php echo @$alcohol_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="alcohol_par" name="alcohol_par" value="<?php echo @$alcohol_par; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Tabaquismo </td>
    <td><input type="text" class="input_txt valid" id="tabaco_s" name="tabaco_s" value="<?php echo @$tabaco_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="tabaco_n" name="tabaco_n" value="<?php echo @$tabaco_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="tabaco_par" name="tabaco_par" value="<?php echo @$tabaco_par; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Farrnacodependencia </td>
    <td><input type="text" class="input_txt valid" id="farma_s" name="farma_s" value="<?php echo @$farma_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="farma_n" name="farma_n" value="<?php echo @$farma_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="farma_par" name="farma_par" value="<?php echo @$farma_par; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Otros. Cuales?</td>
    <td colspan="3"><input type="text" class="input_txt valid" id="otros_3" name="otros_3" value="<?php echo @$otros_3; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="190" />
  <col width="83" span="2" />
  <col width="161" />
  <tr height="19">
    <td colspan="4" height="19" width="517">4.    ANTECEDENTES PERSONALES</td>
  </tr>
  <tr height="19">
    <td height="19">PATOLOGIA</td>
    <td>TIEMPO</td>
    <td>EVOLUCION</td>
    <td>TRATAMIENTO</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="patolo_1" name="patolo_1" value="<?php echo @$patolo_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="tiempo_1" name="tiempo_1" value="<?php echo @$tiempo_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="evolucion_1" name="evolucion_1" value="<?php echo @$evolucion_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="tratam_1" name="tratam_1" value="<?php echo @$tratam_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="patolo_2" name="patolo_2" value="<?php echo @$patolo_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="tiempo_2" name="tiempo_2" value="<?php echo @$tiempo_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="evolucion_2" name="evolucion_2" value="<?php echo @$evolucion_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="tratam_3" name="tratam_3" value="<?php echo @$tratam_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="patolo_3" name="patolo_3" value="<?php echo @$patolo_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="tiempo_3" name="tiempo_3" value="<?php echo @$tiempo_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="evolucion_3" name="evolucion_3" value="<?php echo @$evolucion_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="tratam_2" name="tratam_2" value="<?php echo @$tratam_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Antecedentes    Quirúrgicos:</td>
    <td colspan="3"><input type="text" class="input_txt valid" id="ante_quirur" name="ante_quirur" value="<?php echo @$ante_quirur; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">FAC. RIESGO</td>
    <td>SI</td>
    <td>NO</td>
    <td>FRECUENCIA</td>
  </tr>
  <tr height="19">
    <td height="19">Fumador</td>
    <td><input type="text" class="input_txt valid" id="fuma_s" name="fuma_s" value="<?php echo @$fuma_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="fuma_n" name="fuma_n" value="<?php echo @$fuma_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="fuma_fre" name="fuma_fre" value="<?php echo @$fuma_fre; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Consumo de    Alcohol</td>
    <td><input type="text" class="input_txt valid" id="con_alc_s" name="con_alc_s" value="<?php echo @$con_alc_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="con_alc_n" name="con_alc_n" value="<?php echo @$con_alc_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="con_alc_fre" name="con_alc_fre" value="<?php echo @$con_alc_fre; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Actividad    Física</td>
    <td><input type="text" class="input_txt valid" id="act_fis_s" name="act_fis_s" value="<?php echo @$act_fis_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="act_fis_n" name="act_fis_n" value="<?php echo @$act_fis_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="act_fis_fre" name="act_fis_fre" value="<?php echo @$act_fis_fre; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Manejo de    Estrés</td>
    <td><input type="text" class="input_txt valid" id="estres_s" name="estres_s" value="<?php echo @$estres_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="estres_n" name="estres_n" value="<?php echo @$estres_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="estres_fre" name="estres_fre" value="<?php echo @$estres_fre; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Dieta    Balanceada</td>
    <td><input type="text" class="input_txt valid" id="dieta_s" name="dieta_s" value="<?php echo @$dieta_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="dieta_n" name="dieta_n" value="<?php echo @$dieta_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="dieta_fre" name="dieta_fre" value="<?php echo @$dieta_fre; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Medioambientales</td>
    <td><input type="text" class="input_txt valid" id="medio_s" name="medio_s" value="<?php echo @$medio_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="medio_n" name="medio_n" value="<?php echo @$medio_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="medio_fre" name="medio_fre" value="<?php echo @$medio_fre; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Otros</td>
    <td colspan="3"><input type="text" class="input_txt valid" id="otros_4" name="otros_4" value="<?php echo @$otros_4; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="190" />
  <col width="83" span="2" />
  <col width="161" />
  <tr height="19">
    <td colspan="4" height="19" width="517">5. SITUACIÓN PERSONAL</td>
  </tr>
  <tr height="19">
    <td height="19">Menarca:</td>
    <td><input type="text" class="input_txt valid" id="menarca" name="menarca" value="<?php echo @$menarca; ?>" /></td>
    <td>Años:</td>
    <td><input type="text" class="input_txt valid" id="anios" name="anios" value="<?php echo @$anios; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">G:</td>
    <td>P:</td>
    <td>A:</td>
    <td>C:</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="g_2" name="g_2" value="<?php echo @$g_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="p_2" name="p_2" value="<?php echo @$p_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="a_2" name="a_2" value="<?php echo @$a_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="c_2" name="c_2" value="<?php echo @$c_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Espermarca:</td>
    <td><input type="text" class="input_txt valid" id="espermarca" name="espermarca" value="<?php echo @$espermarca; ?>" /></td>
    <td>Años:</td>
    <td><input type="text" class="input_txt valid" id="anios_2" name="anios_2" value="<?php echo @$anios_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">FUM:</td>
    <td colspan="3"><input type="text" class="input_txt valid" id="fum_2" name="fum_2" value="<?php echo @$fum_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">Actividad Sexual:</td>
    <td>SI</td>
    <td>NO</td>
    <td>No. Compañeros    sexuales</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="sex_s" name="sex_s" value="<?php echo @$sex_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sex_n" name="sex_n" value="<?php echo @$sex_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sex_numero" name="sex_numero" value="<?php echo @$sex_numero; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">Planificación Familiar:</td>
    <td>SI</td>
    <td>NO</td>
    <td>Método:</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="planifica_s" name="planifica_s" value="<?php echo @$planifica_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="planifica_n" name="planifica_n" value="<?php echo @$planifica_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="planifica_metodo" name="planifica_metodo" value="<?php echo @$planifica_metodo; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Fecha última    citología:</td>
    <td><input type="text" class="input_txt valid" id="fecha_citologia" name="fecha_citologia" value="<?php echo @$fecha_citologia; ?>" /></td>
    <td>Resultado:</td>
    <td><input type="text" class="input_txt valid" id="res_citrologia" name="res_citrologia" value="<?php echo @$res_citrologia; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">Antecedentes de ETS:</td>
    <td>SI</td>
    <td>NO</td>
    <td>CUAL:</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="ets_s" name="ets_s" value="<?php echo @$ets_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="ets_n" name="ets_n" value="<?php echo @$ets_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="ets_cual" name="ets_cual" value="<?php echo @$ets_cual; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">Uso de Armas:</td>
    <td>SI</td>
    <td>NO</td>
    <td>CUAL:</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="armas_s" name="armas_s" value="<?php echo @$armas_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="armas_n" name="armas_n" value="<?php echo @$armas_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="armas_cual" name="armas_cual" value="<?php echo @$armas_cual; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">Antecedentes Judiciales:</td>
    <td>SI</td>
    <td colspan="2">NO</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="judicial_s" name="judicial_s" value="<?php echo @$judicial_s; ?>" /></td>
    <td colspan="2"><input type="text" class="input_txt valid" id="judicial_n" name="judicial_n" value="<?php echo @$judicial_n; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Ocupación    Actual:</td>
    <td colspan="3"><input type="text" class="input_txt valid" id="ocupa_actual" name="ocupa_actual" value="<?php echo @$ocupa_actual; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Grado de    Escolaridad:</td>
    <td colspan="3"><input type="text" class="input_txt valid" id="escolaridad" name="escolaridad" value="<?php echo @$escolaridad; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Uso del Tiempo    Libre:</td>
    <td colspan="3"><input type="text" class="input_txt valid" id="tiempo_libre" name="tiempo_libre" value="<?php echo @$tiempo_libre; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">Relaciones Interpersonales:</td>
    <td>BUENAS  </td>
    <td>REGULARES</td>
    <td>MALAS</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="relaciona_b" name="relaciona_b" value="<?php echo @$relaciona_b; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="relaciona_r" name="relaciona_r" value="<?php echo @$relaciona_r; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="relaciona_mal" name="relaciona_mal" value="<?php echo @$relaciona_mal; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Religión</td>
    <td colspan="3"><input type="text" class="input_txt valid" id="religion" name="religion" value="<?php echo @$religion; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">Pertenencia a Grupos</td>
    <td>SI</td>
    <td>NO</td>
    <td>CUAL:</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="grupos_s" name="grupos_s" value="<?php echo @$grupos_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="grupos_n" name="grupos_n" value="<?php echo @$grupos_n; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="grupos_cual" name="grupos_cual" value="<?php echo @$grupos_cual; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="190" />
  <col width="83" span="2" />
  <col width="161" />
  <col width="197" />
  <tr height="19">
    <td colspan="5" height="19" width="714">6.    EXAMEN FÍSICO</td>
  </tr>
  <tr height="19">
    <td height="19">MOTIVO DE    CONSULTA:</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="mot_consulta" name="mot_consulta" value="<?php echo @$mot_consulta; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">ENFERMEDAD    ACTUAL:</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="enferme_actual" name="enferme_actual" value="<?php echo @$enferme_actual; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">SIGNOS    VITALES</td>
    <td>TA</td>
    <td>FC </td>
    <td>FR</td>
    <td>T°</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="sv_ta" name="sv_ta" value="<?php echo @$sv_ta; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sv_fc" name="sv_fc" value="<?php echo @$sv_fc; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sv_fr" name="sv_fr" value="<?php echo @$sv_fr; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sv_tem" name="sv_tem" value="<?php echo @$sv_tem; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">Valoración    Antropométrica</td>
    <td>Peso: </td>
    <td>Talla:</td>
    <td> IMC:  </td>
    <td>Interpretación IMC:</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="va_peso" name="va_peso" value="<?php echo @$va_peso; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="va_talla" name="va_talla" value="<?php echo @$va_talla; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="va_imc" name="va_imc" value="<?php echo @$va_imc; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="va_inter_imc" name="va_inter_imc" value="<?php echo @$va_inter_imc; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Aspecto    General:</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="aspec_gen" name="aspec_gen" value="<?php echo @$aspec_gen; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Piel y    Mucosas:</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="piel_muco" name="piel_muco" value="<?php echo @$piel_muco; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Cabeza:</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="cabeza" name="cabeza" value="<?php echo @$cabeza; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Cuello:</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="cuello" name="cuello" value="<?php echo @$cuello; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Cardiorespiratorio:</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="cardiores" name="cardiores" value="<?php echo @$cardiores; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">EXAMEN    MAMARIO:</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="exa_mamas" name="exa_mamas" value="<?php echo @$exa_mamas; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Abdomen:</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="abdomen" name="abdomen" value="<?php echo @$abdomen; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Genito    Urinario:</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="genito" name="genito" value="<?php echo @$genito; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">SOMA:</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="soma" name="soma" value="<?php echo @$soma; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">SNC:</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="snc" name="snc" value="<?php echo @$snc; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">DIAGNÓSTICO:</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="diagnostico_1" name="diagnostico_1" value="<?php echo @$diagnostico_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">CONDUCTAS:</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="conducta_1" name="conducta_1" value="<?php echo @$conducta_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">LABORATORIO</td>
    <td colspan="2">SOLICITUD</td>
    <td colspan="2">RESULTADO</td>
  </tr>
  <tr height="19">
    <td height="19">SI</td>
    <td>NO</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr height="19">
    <td height="19">Hemoglobina</td>
    <td><input type="text" class="input_txt valid" id="lab_hemo_s" name="lab_hemo_s" value="<?php echo @$lab_hemo_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="lab_hemo_n" name="lab_hemo_n" value="<?php echo @$lab_hemo_n; ?>" /></td>
    <td colspan="2"><input type="text" class="input_txt valid" id="lab_hemo_res" name="lab_hemo_res" value="<?php echo @$lab_hemo_res; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Colest. HDL</td>
    <td><input type="text" class="input_txt valid" id="lab_col_s" name="lab_col_s" value="<?php echo @$lab_col_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="lab_col_n" name="lab_col_n" value="<?php echo @$lab_col_n; ?>" /></td>
    <td colspan="2"><input type="text" class="input_txt valid" id="lab_col_res" name="lab_col_res" value="<?php echo @$lab_col_res; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">LABORATORIO</td>
    <td colspan="2">SOLICITUD</td>
    <td colspan="2">RESULTADO</td>
  </tr>
  <tr height="19">
    <td height="19">SI</td>
    <td>NO</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr height="19">
    <td height="19">VDRL</td>
    <td><input type="text" class="input_txt valid" id="lab_vdrl_s" name="lab_vdrl_s" value="<?php echo @$lab_vdrl_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="lab_vdrl_n" name="lab_vdrl_n" value="<?php echo @$lab_vdrl_n; ?>" /></td>
    <td colspan="2"><input type="text" class="input_txt valid" id="lab_vdrl_res" name="lab_vdrl_res" value="<?php echo @$lab_vdrl_res; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">Citología</td>
    <td><input type="text" class="input_txt valid" id="lab_cito_s" name="lab_cito_s" value="<?php echo @$lab_cito_s; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="lab_cito_n" name="lab_cito_n" value="<?php echo @$lab_cito_n; ?>" /></td>
    <td colspan="2"><input type="text" class="input_txt valid" id="lab_cito_res" name="lab_cito_res" value="<?php echo @$lab_cito_res; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">OTRAS:</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="otras_6" name="otras_6" value="<?php echo @$otras_6; ?>" /></td>
  </tr>
</table>

<?php echo @$button ?>
</form><br>
</div>
</fieldset>