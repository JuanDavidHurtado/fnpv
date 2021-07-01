<?php
if (isset($_REQUEST['guardar_hc_crecimiento_desarrollo']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['idhc_crecimiento_desarrollo'] == 'new') {

$sql = "INSERT INTO hc_crecimiento_desarrollo (
`idhc_crecimiento_desarrollo`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`fecha`,
`sv_res_1`,
`sv_res_2`,
`sv_res_3`,
`sv_res_4`,
`sv_card_1`,
`sv_card_2`,
`sv_card_3`,
`sv_card_4`,
`sv_temp_1`,
`sv_temp_2`,
`sv_temp_3`,
`sv_temp_4`,
`med_pes_1`,
`med_pes_2`,
`med_pes_3`,
`med_pes_4`,
`med_tal_1`,
`med_tal_2`,
`med_tal_3`,
`med_tal_4`,
`med_cefa_1`,
`med_cefa_2`,
`med_cefa_3`,
`med_cefa_4`,
`recome_s_1`,
`recome_s_2`,
`recome_s_3`,
`recome_s_4`,
`recome_n_1`,
`recome_n_2`,
`recome_n_3`,
`recome_n_4`,
`nut_nor_1`,
`nut_nor_2`,
`nut_nor_3`,
`nut_nor_4`,
`nut_ries_1`,
`nut_ries_2`,
`nut_ries_3`,
`nut_ries_4`,
`nut_agu_1`,
`nut_agu_2`,
`nut_agu_3`,
`nut_agu_4`,
`nut_cronica_1`,
`nut_cronica_2`,
`nut_cronica_3`,
`nut_cronica_4`,
`sn_cabeza_1`,
`sn_cabeza_2`,
`sn_cabeza_3`,
`sn_cabeza_4`,
`sn_ojos_1`,
`sn_ojos_2`,
`sn_ojos_3`,
`sn_ojos_4`,
`sn_oido_1`,
`sn_oido_2`,
`sn_oido_3`,
`sn_oido_4`,
`sn_nariz_1`,
`sn_nariz_2`,
`sn_nariz_3`,
`sn_nariz_4`,
`sn_boca_1`,
`sn_boca_2`,
`sn_boca_3`,
`sn_boca_4`,
`sn_cuello_1`,
`sn_cuello_2`,
`sn_cuello_3`,
`sn_cuello_4`,
`sn_torax_1`,
`sn_torax_2`,
`sn_torax_3`,
`sn_torax_4`,
`sn_corazon_1`,
`sn_corazon_2`,
`sn_corazon_3`,
`sn_corazon_4`,
`sn_pulm_1`,
`sn_pulm_2`,
`sn_pulm_3`,
`sn_pulm_4`,
`sn_abdo_2`,
`sn_abdo_1`,
`sn_abdo_3`,
`sn_abdo_4`,
`sn_geni_1`,
`sn_geni_2`,
`sn_geni_3`,
`sn_geni_4`,
`sn_extremi_1`,
`sn_extremi_2`,
`sn_extremi_3`,
`sn_extremi_4`,
`sn_piel_1`,
`sn_piel_2`,
`sn_piel_3`,
`sn_piel_4`,
`sn_nervi_1`,
`sn_nervi_2`,
`sn_nervi_3`,
`sn_nervi_4`,
`lact_excl_1`,
`lact_excl_2`,
`lact_excl_3`,
`lact_excl_4`,
`lact_mixta_1`,
`lact_mixta_2`,
`lact_mixta_3`,
`lact_mixta_4`,
`lact_no_1`,
`lact_no_2`,
`lact_no_3`,
`lact_no_4`,
`alim_ini_1`,
`alim_ini_2`,
`alim_ini_3`,
`alim_ini_4`,
`alim_ade_1`,
`alim_ade_2`,
`alim_ade_3`,
`alim_ade_4`,
`alim_actual_1`,
`alim_actual_2`,
`alim_actual_3`,
`alim_actual_4`,
`vacu_comple_1`,
`vacu_comple_2`,
`vacu_comple_3`,
`vacu_comple_4`,
`vacu_incomple_1`,
`vacu_incomple_2`,
`vacu_incomple_3`,
`vacu_incomple_4`,
`vacu_bio_1`,
`vacu_bio_2`,
`vacu_bio_3`,
`vacu_bio_4`,
`t_ojod_1`,
`t_ojod_2`,
`t_ojod_3`,
`t_ojod_4`,
`t_ojoiz_1`,
`t_ojoiz_2`,
`t_ojoiz_3`,
`t_ojoiz_4`,
`h_oral_s_1`,
`h_oral_s_2`,
`h_oral_s_3`,
`h_oral_s_4`,
`h_oral_n_1`,
`h_oral_n_2`,
`h_oral_n_3`,
`h_oral_n_4`,
`ed_vacu_1`,
`ed_vacu_2`,
`ed_vacu_3`,
`ed_vacu_4`,
`ed_hgeneral_1`,
`ed_hgeneral_2`,
`ed_hgeneral_3`,
`ed_hgeneral_4`,
`ed_estimul_1`,
`ed_estimul_2`,
`ed_estimul_3`,
`ed_estimul_4`,
`ed_alarma_1`,
`ed_alarma_2`,
`ed_alarma_3`,
`ed_alarma_4`,
`ed_nutricion_1`,
`ed_nutricion_2`,
`ed_nutricion_3`,
`ed_nutricion_4`,
`pariente_responsable`,
`maltrato_s_1`,
`maltrato_s_2`,
`maltrato_s_3`,
`maltrato_s_4`,
`maltrato_n_1`,
`maltrato_n_2`,
`maltrato_n_3`,
`maltrato_n_4`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['fecha']."' ,
'".$_REQUEST['sv_res_1']."' ,
'".$_REQUEST['sv_res_2']."' ,
'".$_REQUEST['sv_res_3']."' ,
'".$_REQUEST['sv_res_4']."' ,
'".$_REQUEST['sv_card_1']."' ,
'".$_REQUEST['sv_card_2']."' ,
'".$_REQUEST['sv_card_3']."' ,
'".$_REQUEST['sv_card_4']."' ,
'".$_REQUEST['sv_temp_1']."' ,
'".$_REQUEST['sv_temp_2']."' ,
'".$_REQUEST['sv_temp_3']."' ,
'".$_REQUEST['sv_temp_4']."' ,
'".$_REQUEST['med_pes_1']."' ,
'".$_REQUEST['med_pes_2']."' ,
'".$_REQUEST['med_pes_3']."' ,
'".$_REQUEST['med_pes_4']."' ,
'".$_REQUEST['med_tal_1']."' ,
'".$_REQUEST['med_tal_2']."' ,
'".$_REQUEST['med_tal_3']."' ,
'".$_REQUEST['med_tal_4']."' ,
'".$_REQUEST['med_cefa_1']."' ,
'".$_REQUEST['med_cefa_2']."' ,
'".$_REQUEST['med_cefa_3']."' ,
'".$_REQUEST['med_cefa_4']."' ,
'".$_REQUEST['recome_s_1']."' ,
'".$_REQUEST['recome_s_2']."' ,
'".$_REQUEST['recome_s_3']."' ,
'".$_REQUEST['recome_s_4']."' ,
'".$_REQUEST['recome_n_1']."' ,
'".$_REQUEST['recome_n_2']."' ,
'".$_REQUEST['recome_n_3']."' ,
'".$_REQUEST['recome_n_4']."' ,
'".$_REQUEST['nut_nor_1']."' ,
'".$_REQUEST['nut_nor_2']."' ,
'".$_REQUEST['nut_nor_3']."' ,
'".$_REQUEST['nut_nor_4']."' ,
'".$_REQUEST['nut_ries_1']."' ,
'".$_REQUEST['nut_ries_2']."' ,
'".$_REQUEST['nut_ries_3']."' ,
'".$_REQUEST['nut_ries_4']."' ,
'".$_REQUEST['nut_agu_1']."' ,
'".$_REQUEST['nut_agu_2']."' ,
'".$_REQUEST['nut_agu_3']."' ,
'".$_REQUEST['nut_agu_4']."' ,
'".$_REQUEST['nut_cronica_1']."' ,
'".$_REQUEST['nut_cronica_2']."' ,
'".$_REQUEST['nut_cronica_3']."' ,
'".$_REQUEST['nut_cronica_4']."' ,
'".$_REQUEST['sn_cabeza_1']."' ,
'".$_REQUEST['sn_cabeza_2']."' ,
'".$_REQUEST['sn_cabeza_3']."' ,
'".$_REQUEST['sn_cabeza_4']."' ,
'".$_REQUEST['sn_ojos_1']."' ,
'".$_REQUEST['sn_ojos_2']."' ,
'".$_REQUEST['sn_ojos_3']."' ,
'".$_REQUEST['sn_ojos_4']."' ,
'".$_REQUEST['sn_oido_1']."' ,
'".$_REQUEST['sn_oido_2']."' ,
'".$_REQUEST['sn_oido_3']."' ,
'".$_REQUEST['sn_oido_4']."' ,
'".$_REQUEST['sn_nariz_1']."' ,
'".$_REQUEST['sn_nariz_2']."' ,
'".$_REQUEST['sn_nariz_3']."' ,
'".$_REQUEST['sn_nariz_4']."' ,
'".$_REQUEST['sn_boca_1']."' ,
'".$_REQUEST['sn_boca_2']."' ,
'".$_REQUEST['sn_boca_3']."' ,
'".$_REQUEST['sn_boca_4']."' ,
'".$_REQUEST['sn_cuello_1']."' ,
'".$_REQUEST['sn_cuello_2']."' ,
'".$_REQUEST['sn_cuello_3']."' ,
'".$_REQUEST['sn_cuello_4']."' ,
'".$_REQUEST['sn_torax_1']."' ,
'".$_REQUEST['sn_torax_2']."' ,
'".$_REQUEST['sn_torax_3']."' ,
'".$_REQUEST['sn_torax_4']."' ,
'".$_REQUEST['sn_corazon_1']."' ,
'".$_REQUEST['sn_corazon_2']."' ,
'".$_REQUEST['sn_corazon_3']."' ,
'".$_REQUEST['sn_corazon_4']."' ,
'".$_REQUEST['sn_pulm_1']."' ,
'".$_REQUEST['sn_pulm_2']."' ,
'".$_REQUEST['sn_pulm_3']."' ,
'".$_REQUEST['sn_pulm_4']."' ,
'".$_REQUEST['sn_abdo_2']."' ,
'".$_REQUEST['sn_abdo_1']."' ,
'".$_REQUEST['sn_abdo_3']."' ,
'".$_REQUEST['sn_abdo_4']."' ,
'".$_REQUEST['sn_geni_1']."' ,
'".$_REQUEST['sn_geni_2']."' ,
'".$_REQUEST['sn_geni_3']."' ,
'".$_REQUEST['sn_geni_4']."' ,
'".$_REQUEST['sn_extremi_1']."' ,
'".$_REQUEST['sn_extremi_2']."' ,
'".$_REQUEST['sn_extremi_3']."' ,
'".$_REQUEST['sn_extremi_4']."' ,
'".$_REQUEST['sn_piel_1']."' ,
'".$_REQUEST['sn_piel_2']."' ,
'".$_REQUEST['sn_piel_3']."' ,
'".$_REQUEST['sn_piel_4']."' ,
'".$_REQUEST['sn_nervi_1']."' ,
'".$_REQUEST['sn_nervi_2']."' ,
'".$_REQUEST['sn_nervi_3']."' ,
'".$_REQUEST['sn_nervi_4']."' ,
'".$_REQUEST['lact_excl_1']."' ,
'".$_REQUEST['lact_excl_2']."' ,
'".$_REQUEST['lact_excl_3']."' ,
'".$_REQUEST['lact_excl_4']."' ,
'".$_REQUEST['lact_mixta_1']."' ,
'".$_REQUEST['lact_mixta_2']."' ,
'".$_REQUEST['lact_mixta_3']."' ,
'".$_REQUEST['lact_mixta_4']."' ,
'".$_REQUEST['lact_no_1']."' ,
'".$_REQUEST['lact_no_2']."' ,
'".$_REQUEST['lact_no_3']."' ,
'".$_REQUEST['lact_no_4']."' ,
'".$_REQUEST['alim_ini_1']."' ,
'".$_REQUEST['alim_ini_2']."' ,
'".$_REQUEST['alim_ini_3']."' ,
'".$_REQUEST['alim_ini_4']."' ,
'".$_REQUEST['alim_ade_1']."' ,
'".$_REQUEST['alim_ade_2']."' ,
'".$_REQUEST['alim_ade_3']."' ,
'".$_REQUEST['alim_ade_4']."' ,
'".$_REQUEST['alim_actual_1']."' ,
'".$_REQUEST['alim_actual_2']."' ,
'".$_REQUEST['alim_actual_3']."' ,
'".$_REQUEST['alim_actual_4']."' ,
'".$_REQUEST['vacu_comple_1']."' ,
'".$_REQUEST['vacu_comple_2']."' ,
'".$_REQUEST['vacu_comple_3']."' ,
'".$_REQUEST['vacu_comple_4']."' ,
'".$_REQUEST['vacu_incomple_1']."' ,
'".$_REQUEST['vacu_incomple_2']."' ,
'".$_REQUEST['vacu_incomple_3']."' ,
'".$_REQUEST['vacu_incomple_4']."' ,
'".$_REQUEST['vacu_bio_1']."' ,
'".$_REQUEST['vacu_bio_2']."' ,
'".$_REQUEST['vacu_bio_3']."' ,
'".$_REQUEST['vacu_bio_4']."' ,
'".$_REQUEST['t_ojod_1']."' ,
'".$_REQUEST['t_ojod_2']."' ,
'".$_REQUEST['t_ojod_3']."' ,
'".$_REQUEST['t_ojod_4']."' ,
'".$_REQUEST['t_ojoiz_1']."' ,
'".$_REQUEST['t_ojoiz_2']."' ,
'".$_REQUEST['t_ojoiz_3']."' ,
'".$_REQUEST['t_ojoiz_4']."' ,
'".$_REQUEST['h_oral_s_1']."' ,
'".$_REQUEST['h_oral_s_2']."' ,
'".$_REQUEST['h_oral_s_3']."' ,
'".$_REQUEST['h_oral_s_4']."' ,
'".$_REQUEST['h_oral_n_1']."' ,
'".$_REQUEST['h_oral_n_2']."' ,
'".$_REQUEST['h_oral_n_3']."' ,
'".$_REQUEST['h_oral_n_4']."' ,
'".$_REQUEST['ed_vacu_1']."' ,
'".$_REQUEST['ed_vacu_2']."' ,
'".$_REQUEST['ed_vacu_3']."' ,
'".$_REQUEST['ed_vacu_4']."' ,
'".$_REQUEST['ed_hgeneral_1']."' ,
'".$_REQUEST['ed_hgeneral_2']."' ,
'".$_REQUEST['ed_hgeneral_3']."' ,
'".$_REQUEST['ed_hgeneral_4']."' ,
'".$_REQUEST['ed_estimul_1']."' ,
'".$_REQUEST['ed_estimul_2']."' ,
'".$_REQUEST['ed_estimul_3']."' ,
'".$_REQUEST['ed_estimul_4']."' ,
'".$_REQUEST['ed_alarma_1']."' ,
'".$_REQUEST['ed_alarma_2']."' ,
'".$_REQUEST['ed_alarma_3']."' ,
'".$_REQUEST['ed_alarma_4']."' ,
'".$_REQUEST['ed_nutricion_1']."' ,
'".$_REQUEST['ed_nutricion_2']."' ,
'".$_REQUEST['ed_nutricion_3']."' ,
'".$_REQUEST['ed_nutricion_4']."' ,
'".$_REQUEST['pariente_responsable']."' ,
'".$_REQUEST['maltrato_s_1']."' ,
'".$_REQUEST['maltrato_s_2']."' ,
'".$_REQUEST['maltrato_s_3']."' ,
'".$_REQUEST['maltrato_s_4']."' ,
'".$_REQUEST['maltrato_n_1']."' ,
'".$_REQUEST['maltrato_n_2']."' ,
'".$_REQUEST['maltrato_n_3']."' ,
'".$_REQUEST['maltrato_n_4']."'
) ";


} else if ($_REQUEST['idhc_crecimiento_desarrollo'] != '') {

$sql = "UPDATE hc_crecimiento_desarrollo set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`fecha` = '".$_REQUEST['fecha']."' ,
`sv_res_1` = '".$_REQUEST['sv_res_1']."' ,
`sv_res_2` = '".$_REQUEST['sv_res_2']."' ,
`sv_res_3` = '".$_REQUEST['sv_res_3']."' ,
`sv_res_4` = '".$_REQUEST['sv_res_4']."' ,
`sv_card_1` = '".$_REQUEST['sv_card_1']."' ,
`sv_card_2` = '".$_REQUEST['sv_card_2']."' ,
`sv_card_3` = '".$_REQUEST['sv_card_3']."' ,
`sv_card_4` = '".$_REQUEST['sv_card_4']."' ,
`sv_temp_1` = '".$_REQUEST['sv_temp_1']."' ,
`sv_temp_2` = '".$_REQUEST['sv_temp_2']."' ,
`sv_temp_3` = '".$_REQUEST['sv_temp_3']."' ,
`sv_temp_4` = '".$_REQUEST['sv_temp_4']."' ,
`med_pes_1` = '".$_REQUEST['med_pes_1']."' ,
`med_pes_2` = '".$_REQUEST['med_pes_2']."' ,
`med_pes_3` = '".$_REQUEST['med_pes_3']."' ,
`med_pes_4` = '".$_REQUEST['med_pes_4']."' ,
`med_tal_1` = '".$_REQUEST['med_tal_1']."' ,
`med_tal_2` = '".$_REQUEST['med_tal_2']."' ,
`med_tal_3` = '".$_REQUEST['med_tal_3']."' ,
`med_tal_4` = '".$_REQUEST['med_tal_4']."' ,
`med_cefa_1` = '".$_REQUEST['med_cefa_1']."' ,
`med_cefa_2` = '".$_REQUEST['med_cefa_2']."' ,
`med_cefa_3` = '".$_REQUEST['med_cefa_3']."' ,
`med_cefa_4` = '".$_REQUEST['med_cefa_4']."' ,
`recome_s_1` = '".$_REQUEST['recome_s_1']."' ,
`recome_s_2` = '".$_REQUEST['recome_s_2']."' ,
`recome_s_3` = '".$_REQUEST['recome_s_3']."' ,
`recome_s_4` = '".$_REQUEST['recome_s_4']."' ,
`recome_n_1` = '".$_REQUEST['recome_n_1']."' ,
`recome_n_2` = '".$_REQUEST['recome_n_2']."' ,
`recome_n_3` = '".$_REQUEST['recome_n_3']."' ,
`recome_n_4` = '".$_REQUEST['recome_n_4']."' ,
`nut_nor_1` = '".$_REQUEST['nut_nor_1']."' ,
`nut_nor_2` = '".$_REQUEST['nut_nor_2']."' ,
`nut_nor_3` = '".$_REQUEST['nut_nor_3']."' ,
`nut_nor_4` = '".$_REQUEST['nut_nor_4']."' ,
`nut_ries_1` = '".$_REQUEST['nut_ries_1']."' ,
`nut_ries_2` = '".$_REQUEST['nut_ries_2']."' ,
`nut_ries_3` = '".$_REQUEST['nut_ries_3']."' ,
`nut_ries_4` = '".$_REQUEST['nut_ries_4']."' ,
`nut_agu_1` = '".$_REQUEST['nut_agu_1']."' ,
`nut_agu_2` = '".$_REQUEST['nut_agu_2']."' ,
`nut_agu_3` = '".$_REQUEST['nut_agu_3']."' ,
`nut_agu_4` = '".$_REQUEST['nut_agu_4']."' ,
`nut_cronica_1` = '".$_REQUEST['nut_cronica_1']."' ,
`nut_cronica_2` = '".$_REQUEST['nut_cronica_2']."' ,
`nut_cronica_3` = '".$_REQUEST['nut_cronica_3']."' ,
`nut_cronica_4` = '".$_REQUEST['nut_cronica_4']."' ,
`sn_cabeza_1` = '".$_REQUEST['sn_cabeza_1']."' ,
`sn_cabeza_2` = '".$_REQUEST['sn_cabeza_2']."' ,
`sn_cabeza_3` = '".$_REQUEST['sn_cabeza_3']."' ,
`sn_cabeza_4` = '".$_REQUEST['sn_cabeza_4']."' ,
`sn_ojos_1` = '".$_REQUEST['sn_ojos_1']."' ,
`sn_ojos_2` = '".$_REQUEST['sn_ojos_2']."' ,
`sn_ojos_3` = '".$_REQUEST['sn_ojos_3']."' ,
`sn_ojos_4` = '".$_REQUEST['sn_ojos_4']."' ,
`sn_oido_1` = '".$_REQUEST['sn_oido_1']."' ,
`sn_oido_2` = '".$_REQUEST['sn_oido_2']."' ,
`sn_oido_3` = '".$_REQUEST['sn_oido_3']."' ,
`sn_oido_4` = '".$_REQUEST['sn_oido_4']."' ,
`sn_nariz_1` = '".$_REQUEST['sn_nariz_1']."' ,
`sn_nariz_2` = '".$_REQUEST['sn_nariz_2']."' ,
`sn_nariz_3` = '".$_REQUEST['sn_nariz_3']."' ,
`sn_nariz_4` = '".$_REQUEST['sn_nariz_4']."' ,
`sn_boca_1` = '".$_REQUEST['sn_boca_1']."' ,
`sn_boca_2` = '".$_REQUEST['sn_boca_2']."' ,
`sn_boca_3` = '".$_REQUEST['sn_boca_3']."' ,
`sn_boca_4` = '".$_REQUEST['sn_boca_4']."' ,
`sn_cuello_1` = '".$_REQUEST['sn_cuello_1']."' ,
`sn_cuello_2` = '".$_REQUEST['sn_cuello_2']."' ,
`sn_cuello_3` = '".$_REQUEST['sn_cuello_3']."' ,
`sn_cuello_4` = '".$_REQUEST['sn_cuello_4']."' ,
`sn_torax_1` = '".$_REQUEST['sn_torax_1']."' ,
`sn_torax_2` = '".$_REQUEST['sn_torax_2']."' ,
`sn_torax_3` = '".$_REQUEST['sn_torax_3']."' ,
`sn_torax_4` = '".$_REQUEST['sn_torax_4']."' ,
`sn_corazon_1` = '".$_REQUEST['sn_corazon_1']."' ,
`sn_corazon_2` = '".$_REQUEST['sn_corazon_2']."' ,
`sn_corazon_3` = '".$_REQUEST['sn_corazon_3']."' ,
`sn_corazon_4` = '".$_REQUEST['sn_corazon_4']."' ,
`sn_pulm_1` = '".$_REQUEST['sn_pulm_1']."' ,
`sn_pulm_2` = '".$_REQUEST['sn_pulm_2']."' ,
`sn_pulm_3` = '".$_REQUEST['sn_pulm_3']."' ,
`sn_pulm_4` = '".$_REQUEST['sn_pulm_4']."' ,
`sn_abdo_2` = '".$_REQUEST['sn_abdo_2']."' ,
`sn_abdo_1` = '".$_REQUEST['sn_abdo_1']."' ,
`sn_abdo_3` = '".$_REQUEST['sn_abdo_3']."' ,
`sn_abdo_4` = '".$_REQUEST['sn_abdo_4']."' ,
`sn_geni_1` = '".$_REQUEST['sn_geni_1']."' ,
`sn_geni_2` = '".$_REQUEST['sn_geni_2']."' ,
`sn_geni_3` = '".$_REQUEST['sn_geni_3']."' ,
`sn_geni_4` = '".$_REQUEST['sn_geni_4']."' ,
`sn_extremi_1` = '".$_REQUEST['sn_extremi_1']."' ,
`sn_extremi_2` = '".$_REQUEST['sn_extremi_2']."' ,
`sn_extremi_3` = '".$_REQUEST['sn_extremi_3']."' ,
`sn_extremi_4` = '".$_REQUEST['sn_extremi_4']."' ,
`sn_piel_1` = '".$_REQUEST['sn_piel_1']."' ,
`sn_piel_2` = '".$_REQUEST['sn_piel_2']."' ,
`sn_piel_3` = '".$_REQUEST['sn_piel_3']."' ,
`sn_piel_4` = '".$_REQUEST['sn_piel_4']."' ,
`sn_nervi_1` = '".$_REQUEST['sn_nervi_1']."' ,
`sn_nervi_2` = '".$_REQUEST['sn_nervi_2']."' ,
`sn_nervi_3` = '".$_REQUEST['sn_nervi_3']."' ,
`sn_nervi_4` = '".$_REQUEST['sn_nervi_4']."' ,
`lact_excl_1` = '".$_REQUEST['lact_excl_1']."' ,
`lact_excl_2` = '".$_REQUEST['lact_excl_2']."' ,
`lact_excl_3` = '".$_REQUEST['lact_excl_3']."' ,
`lact_excl_4` = '".$_REQUEST['lact_excl_4']."' ,
`lact_mixta_1` = '".$_REQUEST['lact_mixta_1']."' ,
`lact_mixta_2` = '".$_REQUEST['lact_mixta_2']."' ,
`lact_mixta_3` = '".$_REQUEST['lact_mixta_3']."' ,
`lact_mixta_4` = '".$_REQUEST['lact_mixta_4']."' ,
`lact_no_1` = '".$_REQUEST['lact_no_1']."' ,
`lact_no_2` = '".$_REQUEST['lact_no_2']."' ,
`lact_no_3` = '".$_REQUEST['lact_no_3']."' ,
`lact_no_4` = '".$_REQUEST['lact_no_4']."' ,
`alim_ini_1` = '".$_REQUEST['alim_ini_1']."' ,
`alim_ini_2` = '".$_REQUEST['alim_ini_2']."' ,
`alim_ini_3` = '".$_REQUEST['alim_ini_3']."' ,
`alim_ini_4` = '".$_REQUEST['alim_ini_4']."' ,
`alim_ade_1` = '".$_REQUEST['alim_ade_1']."' ,
`alim_ade_2` = '".$_REQUEST['alim_ade_2']."' ,
`alim_ade_3` = '".$_REQUEST['alim_ade_3']."' ,
`alim_ade_4` = '".$_REQUEST['alim_ade_4']."' ,
`alim_actual_1` = '".$_REQUEST['alim_actual_1']."' ,
`alim_actual_2` = '".$_REQUEST['alim_actual_2']."' ,
`alim_actual_3` = '".$_REQUEST['alim_actual_3']."' ,
`alim_actual_4` = '".$_REQUEST['alim_actual_4']."' ,
`vacu_comple_1` = '".$_REQUEST['vacu_comple_1']."' ,
`vacu_comple_2` = '".$_REQUEST['vacu_comple_2']."' ,
`vacu_comple_3` = '".$_REQUEST['vacu_comple_3']."' ,
`vacu_comple_4` = '".$_REQUEST['vacu_comple_4']."' ,
`vacu_incomple_1` = '".$_REQUEST['vacu_incomple_1']."' ,
`vacu_incomple_2` = '".$_REQUEST['vacu_incomple_2']."' ,
`vacu_incomple_3` = '".$_REQUEST['vacu_incomple_3']."' ,
`vacu_incomple_4` = '".$_REQUEST['vacu_incomple_4']."' ,
`vacu_bio_1` = '".$_REQUEST['vacu_bio_1']."' ,
`vacu_bio_2` = '".$_REQUEST['vacu_bio_2']."' ,
`vacu_bio_3` = '".$_REQUEST['vacu_bio_3']."' ,
`vacu_bio_4` = '".$_REQUEST['vacu_bio_4']."' ,
`t_ojod_1` = '".$_REQUEST['t_ojod_1']."' ,
`t_ojod_2` = '".$_REQUEST['t_ojod_2']."' ,
`t_ojod_3` = '".$_REQUEST['t_ojod_3']."' ,
`t_ojod_4` = '".$_REQUEST['t_ojod_4']."' ,
`t_ojoiz_1` = '".$_REQUEST['t_ojoiz_1']."' ,
`t_ojoiz_2` = '".$_REQUEST['t_ojoiz_2']."' ,
`t_ojoiz_3` = '".$_REQUEST['t_ojoiz_3']."' ,
`t_ojoiz_4` = '".$_REQUEST['t_ojoiz_4']."' ,
`h_oral_s_1` = '".$_REQUEST['h_oral_s_1']."' ,
`h_oral_s_2` = '".$_REQUEST['h_oral_s_2']."' ,
`h_oral_s_3` = '".$_REQUEST['h_oral_s_3']."' ,
`h_oral_s_4` = '".$_REQUEST['h_oral_s_4']."' ,
`h_oral_n_1` = '".$_REQUEST['h_oral_n_1']."' ,
`h_oral_n_2` = '".$_REQUEST['h_oral_n_2']."' ,
`h_oral_n_3` = '".$_REQUEST['h_oral_n_3']."' ,
`h_oral_n_4` = '".$_REQUEST['h_oral_n_4']."' ,
`ed_vacu_1` = '".$_REQUEST['ed_vacu_1']."' ,
`ed_vacu_2` = '".$_REQUEST['ed_vacu_2']."' ,
`ed_vacu_3` = '".$_REQUEST['ed_vacu_3']."' ,
`ed_vacu_4` = '".$_REQUEST['ed_vacu_4']."' ,
`ed_hgeneral_1` = '".$_REQUEST['ed_hgeneral_1']."' ,
`ed_hgeneral_2` = '".$_REQUEST['ed_hgeneral_2']."' ,
`ed_hgeneral_3` = '".$_REQUEST['ed_hgeneral_3']."' ,
`ed_hgeneral_4` = '".$_REQUEST['ed_hgeneral_4']."' ,
`ed_estimul_1` = '".$_REQUEST['ed_estimul_1']."' ,
`ed_estimul_2` = '".$_REQUEST['ed_estimul_2']."' ,
`ed_estimul_3` = '".$_REQUEST['ed_estimul_3']."' ,
`ed_estimul_4` = '".$_REQUEST['ed_estimul_4']."' ,
`ed_alarma_1` = '".$_REQUEST['ed_alarma_1']."' ,
`ed_alarma_2` = '".$_REQUEST['ed_alarma_2']."' ,
`ed_alarma_3` = '".$_REQUEST['ed_alarma_3']."' ,
`ed_alarma_4` = '".$_REQUEST['ed_alarma_4']."' ,
`ed_nutricion_1` = '".$_REQUEST['ed_nutricion_1']."' ,
`ed_nutricion_2` = '".$_REQUEST['ed_nutricion_2']."' ,
`ed_nutricion_3` = '".$_REQUEST['ed_nutricion_3']."' ,
`ed_nutricion_4` = '".$_REQUEST['ed_nutricion_4']."' ,
`pariente_responsable` = '".$_REQUEST['pariente_responsable']."' ,
`maltrato_s_1` = '".$_REQUEST['maltrato_s_1']."' ,
`maltrato_s_2` = '".$_REQUEST['maltrato_s_2']."' ,
`maltrato_s_3` = '".$_REQUEST['maltrato_s_3']."' ,
`maltrato_s_4` = '".$_REQUEST['maltrato_s_4']."' ,
`maltrato_n_1` = '".$_REQUEST['maltrato_n_1']."' ,
`maltrato_n_2` = '".$_REQUEST['maltrato_n_2']."' ,
`maltrato_n_3` = '".$_REQUEST['maltrato_n_3']."' ,
`maltrato_n_4` = '".$_REQUEST['maltrato_n_4']."' WHERE `idhc_crecimiento_desarrollo` = '".$_REQUEST['idhc_crecimiento_desarrollo']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$idhc_crecimiento_desarrollo = 'new';
$sql = "SELECT * from hc_crecimiento_desarrollo WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$idhc_crecimiento_desarrollo = $row['idhc_crecimiento_desarrollo'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$fecha = $row['fecha'];
$sv_res_1 = $row['sv_res_1'];
$sv_res_2 = $row['sv_res_2'];
$sv_res_3 = $row['sv_res_3'];
$sv_res_4 = $row['sv_res_4'];
$sv_card_1 = $row['sv_card_1'];
$sv_card_2 = $row['sv_card_2'];
$sv_card_3 = $row['sv_card_3'];
$sv_card_4 = $row['sv_card_4'];
$sv_temp_1 = $row['sv_temp_1'];
$sv_temp_2 = $row['sv_temp_2'];
$sv_temp_3 = $row['sv_temp_3'];
$sv_temp_4 = $row['sv_temp_4'];
$med_pes_1 = $row['med_pes_1'];
$med_pes_2 = $row['med_pes_2'];
$med_pes_3 = $row['med_pes_3'];
$med_pes_4 = $row['med_pes_4'];
$med_tal_1 = $row['med_tal_1'];
$med_tal_2 = $row['med_tal_2'];
$med_tal_3 = $row['med_tal_3'];
$med_tal_4 = $row['med_tal_4'];
$med_cefa_1 = $row['med_cefa_1'];
$med_cefa_2 = $row['med_cefa_2'];
$med_cefa_3 = $row['med_cefa_3'];
$med_cefa_4 = $row['med_cefa_4'];
$recome_s_1 = $row['recome_s_1'];
$recome_s_2 = $row['recome_s_2'];
$recome_s_3 = $row['recome_s_3'];
$recome_s_4 = $row['recome_s_4'];
$recome_n_1 = $row['recome_n_1'];
$recome_n_2 = $row['recome_n_2'];
$recome_n_3 = $row['recome_n_3'];
$recome_n_4 = $row['recome_n_4'];
$nut_nor_1 = $row['nut_nor_1'];
$nut_nor_2 = $row['nut_nor_2'];
$nut_nor_3 = $row['nut_nor_3'];
$nut_nor_4 = $row['nut_nor_4'];
$nut_ries_1 = $row['nut_ries_1'];
$nut_ries_2 = $row['nut_ries_2'];
$nut_ries_3 = $row['nut_ries_3'];
$nut_ries_4 = $row['nut_ries_4'];
$nut_agu_1 = $row['nut_agu_1'];
$nut_agu_2 = $row['nut_agu_2'];
$nut_agu_3 = $row['nut_agu_3'];
$nut_agu_4 = $row['nut_agu_4'];
$nut_cronica_1 = $row['nut_cronica_1'];
$nut_cronica_2 = $row['nut_cronica_2'];
$nut_cronica_3 = $row['nut_cronica_3'];
$nut_cronica_4 = $row['nut_cronica_4'];
$sn_cabeza_1 = $row['sn_cabeza_1'];
$sn_cabeza_2 = $row['sn_cabeza_2'];
$sn_cabeza_3 = $row['sn_cabeza_3'];
$sn_cabeza_4 = $row['sn_cabeza_4'];
$sn_ojos_1 = $row['sn_ojos_1'];
$sn_ojos_2 = $row['sn_ojos_2'];
$sn_ojos_3 = $row['sn_ojos_3'];
$sn_ojos_4 = $row['sn_ojos_4'];
$sn_oido_1 = $row['sn_oido_1'];
$sn_oido_2 = $row['sn_oido_2'];
$sn_oido_3 = $row['sn_oido_3'];
$sn_oido_4 = $row['sn_oido_4'];
$sn_nariz_1 = $row['sn_nariz_1'];
$sn_nariz_2 = $row['sn_nariz_2'];
$sn_nariz_3 = $row['sn_nariz_3'];
$sn_nariz_4 = $row['sn_nariz_4'];
$sn_boca_1 = $row['sn_boca_1'];
$sn_boca_2 = $row['sn_boca_2'];
$sn_boca_3 = $row['sn_boca_3'];
$sn_boca_4 = $row['sn_boca_4'];
$sn_cuello_1 = $row['sn_cuello_1'];
$sn_cuello_2 = $row['sn_cuello_2'];
$sn_cuello_3 = $row['sn_cuello_3'];
$sn_cuello_4 = $row['sn_cuello_4'];
$sn_torax_1 = $row['sn_torax_1'];
$sn_torax_2 = $row['sn_torax_2'];
$sn_torax_3 = $row['sn_torax_3'];
$sn_torax_4 = $row['sn_torax_4'];
$sn_corazon_1 = $row['sn_corazon_1'];
$sn_corazon_2 = $row['sn_corazon_2'];
$sn_corazon_3 = $row['sn_corazon_3'];
$sn_corazon_4 = $row['sn_corazon_4'];
$sn_pulm_1 = $row['sn_pulm_1'];
$sn_pulm_2 = $row['sn_pulm_2'];
$sn_pulm_3 = $row['sn_pulm_3'];
$sn_pulm_4 = $row['sn_pulm_4'];
$sn_abdo_2 = $row['sn_abdo_2'];
$sn_abdo_1 = $row['sn_abdo_1'];
$sn_abdo_3 = $row['sn_abdo_3'];
$sn_abdo_4 = $row['sn_abdo_4'];
$sn_geni_1 = $row['sn_geni_1'];
$sn_geni_2 = $row['sn_geni_2'];
$sn_geni_3 = $row['sn_geni_3'];
$sn_geni_4 = $row['sn_geni_4'];
$sn_extremi_1 = $row['sn_extremi_1'];
$sn_extremi_2 = $row['sn_extremi_2'];
$sn_extremi_3 = $row['sn_extremi_3'];
$sn_extremi_4 = $row['sn_extremi_4'];
$sn_piel_1 = $row['sn_piel_1'];
$sn_piel_2 = $row['sn_piel_2'];
$sn_piel_3 = $row['sn_piel_3'];
$sn_piel_4 = $row['sn_piel_4'];
$sn_nervi_1 = $row['sn_nervi_1'];
$sn_nervi_2 = $row['sn_nervi_2'];
$sn_nervi_3 = $row['sn_nervi_3'];
$sn_nervi_4 = $row['sn_nervi_4'];
$lact_excl_1 = $row['lact_excl_1'];
$lact_excl_2 = $row['lact_excl_2'];
$lact_excl_3 = $row['lact_excl_3'];
$lact_excl_4 = $row['lact_excl_4'];
$lact_mixta_1 = $row['lact_mixta_1'];
$lact_mixta_2 = $row['lact_mixta_2'];
$lact_mixta_3 = $row['lact_mixta_3'];
$lact_mixta_4 = $row['lact_mixta_4'];
$lact_no_1 = $row['lact_no_1'];
$lact_no_2 = $row['lact_no_2'];
$lact_no_3 = $row['lact_no_3'];
$lact_no_4 = $row['lact_no_4'];
$alim_ini_1 = $row['alim_ini_1'];
$alim_ini_2 = $row['alim_ini_2'];
$alim_ini_3 = $row['alim_ini_3'];
$alim_ini_4 = $row['alim_ini_4'];
$alim_ade_1 = $row['alim_ade_1'];
$alim_ade_2 = $row['alim_ade_2'];
$alim_ade_3 = $row['alim_ade_3'];
$alim_ade_4 = $row['alim_ade_4'];
$alim_actual_1 = $row['alim_actual_1'];
$alim_actual_2 = $row['alim_actual_2'];
$alim_actual_3 = $row['alim_actual_3'];
$alim_actual_4 = $row['alim_actual_4'];
$vacu_comple_1 = $row['vacu_comple_1'];
$vacu_comple_2 = $row['vacu_comple_2'];
$vacu_comple_3 = $row['vacu_comple_3'];
$vacu_comple_4 = $row['vacu_comple_4'];
$vacu_incomple_1 = $row['vacu_incomple_1'];
$vacu_incomple_2 = $row['vacu_incomple_2'];
$vacu_incomple_3 = $row['vacu_incomple_3'];
$vacu_incomple_4 = $row['vacu_incomple_4'];
$vacu_bio_1 = $row['vacu_bio_1'];
$vacu_bio_2 = $row['vacu_bio_2'];
$vacu_bio_3 = $row['vacu_bio_3'];
$vacu_bio_4 = $row['vacu_bio_4'];
$t_ojod_1 = $row['t_ojod_1'];
$t_ojod_2 = $row['t_ojod_2'];
$t_ojod_3 = $row['t_ojod_3'];
$t_ojod_4 = $row['t_ojod_4'];
$t_ojoiz_1 = $row['t_ojoiz_1'];
$t_ojoiz_2 = $row['t_ojoiz_2'];
$t_ojoiz_3 = $row['t_ojoiz_3'];
$t_ojoiz_4 = $row['t_ojoiz_4'];
$h_oral_s_1 = $row['h_oral_s_1'];
$h_oral_s_2 = $row['h_oral_s_2'];
$h_oral_s_3 = $row['h_oral_s_3'];
$h_oral_s_4 = $row['h_oral_s_4'];
$h_oral_n_1 = $row['h_oral_n_1'];
$h_oral_n_2 = $row['h_oral_n_2'];
$h_oral_n_3 = $row['h_oral_n_3'];
$h_oral_n_4 = $row['h_oral_n_4'];
$ed_vacu_1 = $row['ed_vacu_1'];
$ed_vacu_2 = $row['ed_vacu_2'];
$ed_vacu_3 = $row['ed_vacu_3'];
$ed_vacu_4 = $row['ed_vacu_4'];
$ed_hgeneral_1 = $row['ed_hgeneral_1'];
$ed_hgeneral_2 = $row['ed_hgeneral_2'];
$ed_hgeneral_3 = $row['ed_hgeneral_3'];
$ed_hgeneral_4 = $row['ed_hgeneral_4'];
$ed_estimul_1 = $row['ed_estimul_1'];
$ed_estimul_2 = $row['ed_estimul_2'];
$ed_estimul_3 = $row['ed_estimul_3'];
$ed_estimul_4 = $row['ed_estimul_4'];
$ed_alarma_1 = $row['ed_alarma_1'];
$ed_alarma_2 = $row['ed_alarma_2'];
$ed_alarma_3 = $row['ed_alarma_3'];
$ed_alarma_4 = $row['ed_alarma_4'];
$ed_nutricion_1 = $row['ed_nutricion_1'];
$ed_nutricion_2 = $row['ed_nutricion_2'];
$ed_nutricion_3 = $row['ed_nutricion_3'];
$ed_nutricion_4 = $row['ed_nutricion_4'];
$pariente_responsable = $row['pariente_responsable'];
$maltrato_s_1 = $row['maltrato_s_1'];
$maltrato_s_2 = $row['maltrato_s_2'];
$maltrato_s_3 = $row['maltrato_s_3'];
$maltrato_s_4 = $row['maltrato_s_4'];
$maltrato_n_1 = $row['maltrato_n_1'];
$maltrato_n_2 = $row['maltrato_n_2'];
$maltrato_n_3 = $row['maltrato_n_3'];
$maltrato_n_4 = $row['maltrato_n_4'];
break; }

?>
<script>

$(function(){

$("#close-hc_crecimiento_desarrollo").click(function(){
$("#open-hc_crecimiento_desarrollo").show();
$(this).hide();
$("#content-hc_crecimiento_desarrollo").hide('slow');
});

$("#open-hc_crecimiento_desarrollo").click(function(){
$("#close-hc_crecimiento_desarrollo").show();
$(this).hide();
$("#content-hc_crecimiento_desarrollo").show('slow');
});

});

</script>
<fieldset id="hc_crecimiento_desarrollo">
<legend align="left"> <div class="arrow-c" id="close-hc_crecimiento_desarrollo"></div> <div class="arrow-o" id="open-hc_crecimiento_desarrollo" ></div> <font>Valoracion terapia ocupacional - hc_crecimiento_desarrollo</font></legend>
<div id="content-hc_crecimiento_desarrollo">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_crecimiento_desarrollo" id="guardar_hc_crecimiento_desarrollo" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_crecimiento_desarrollo" name="form_hc_crecimiento_desarrollo" action="<?php echo @$action_form_hc_crecimiento_desarrollo ?>#hc_crecimiento_desarrollo" method="post">

<input type="hidden" id="id_hc_crecimiento_desarrollo" name="id_hc_crecimiento_desarrollo" value="<?php echo @$id_hc_crecimiento_desarrollo ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="idhc_crecimiento_desarrollo" name="idhc_crecimiento_desarrollo" value="<?php echo @$idhc_crecimiento_desarrollo; ?>" />

<table cellspacing="0" cellpadding="0" border="1">
  <col width="106" />
  <col width="83" />
  <col width="157" />
  <col width="83" span="4" />
  <tr height="19">
    <td height="19" width="232">Fecha:</td>
    <td colspan="6"><input type="text" class="input_txt valid" id="fecha" name="fecha" value="<?php echo @$fecha; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" rowspan="3" height="57">SIGNOS    VITALES</td>
    <td width="165">F.RESP.</td>
    <td width="152"><input type="text" class="input_txt valid" id="sv_res_1" name="sv_res_1" value="<?php echo @$sv_res_1; ?>" /></td>
    <td width="119"><input type="text" class="input_txt valid" id="sv_res_2" name="sv_res_2" value="<?php echo @$sv_res_2; ?>" /></td>
    <td width="125"><input type="text" class="input_txt valid" id="sv_res_3" name="sv_res_3" value="<?php echo @$sv_res_3; ?>" /></td>
    <td width="119"><input type="text" class="input_txt valid" id="sv_res_4" name="sv_res_4" value="<?php echo @$sv_res_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">F. CARD</td>
    <td><input type="text" class="input_txt valid" id="sv_card_1" name="sv_card_1" value="<?php echo @$sv_card_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sv_card_2" name="sv_card_2" value="<?php echo @$sv_card_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sv_card_3" name="sv_card_3" value="<?php echo @$sv_card_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sv_card_4" name="sv_card_4" value="<?php echo @$sv_card_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">TEMPERATURA</td>
    <td><input type="text" class="input_txt valid" id="sv_temp_1" name="sv_temp_1" value="<?php echo @$sv_temp_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sv_temp_2" name="sv_temp_2" value="<?php echo @$sv_temp_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sv_temp_3" name="sv_temp_3" value="<?php echo @$sv_temp_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sv_temp_4" name="sv_temp_4" value="<?php echo @$sv_temp_4; ?>" /></td>
  </tr>
  <tr height="58">
    <td colspan="2" rowspan="3" height="96">MEDIDAS<br />
      ANTROPO<br />
    MÉTRICAS</td>
    <td>PESO (G)</td>
    <td><input type="text" class="input_txt valid" id="med_pes_1" name="med_pes_1" value="<?php echo @$med_pes_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="med_pes_2" name="med_pes_2" value="<?php echo @$med_pes_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="med_pes_3" name="med_pes_3" value="<?php echo @$med_pes_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="med_pes_4" name="med_pes_4" value="<?php echo @$med_pes_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">TALL (Cms)</td>
    <td><input type="text" class="input_txt valid" id="med_tal_1" name="med_tal_1" value="<?php echo @$med_tal_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="med_tal_2" name="med_tal_2" value="<?php echo @$med_tal_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="med_tal_3" name="med_tal_3" value="<?php echo @$med_tal_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="med_tal_4" name="med_tal_4" value="<?php echo @$med_tal_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">P CEFÁLICO</td>
    <td><input type="text" class="input_txt valid" id="med_cefa_1" name="med_cefa_1" value="<?php echo @$med_cefa_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="med_cefa_2" name="med_cefa_2" value="<?php echo @$med_cefa_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="med_cefa_3" name="med_cefa_3" value="<?php echo @$med_cefa_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="med_cefa_4" name="med_cefa_4" value="<?php echo @$med_cefa_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" rowspan="2" height="57">CUMPLE    RECOMENDACIONES</td>
    <td>SI</td>
    <td><input type="text" class="input_txt valid" id="recome_s_1" name="recome_s_1" value="<?php echo @$recome_s_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="recome_s_2" name="recome_s_2" value="<?php echo @$recome_s_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="recome_s_3" name="recome_s_3" value="<?php echo @$recome_s_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="recome_s_4" name="recome_s_4" value="<?php echo @$recome_s_4; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38">NO</td>
    <td><input type="text" class="input_txt valid" id="recome_n_1" name="recome_n_1" value="<?php echo @$recome_n_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="recome_n_2" name="recome_n_2" value="<?php echo @$recome_n_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="recome_n_3" name="recome_n_3" value="<?php echo @$recome_n_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="recome_n_4" name="recome_n_4" value="<?php echo @$recome_n_4; ?>" /></td>
  </tr>
  <tr height="58">
    <td rowspan="4" height="115" width="232">ESTADO<br />
    NUTRICIONAL</td>
    <td width="40" rowspan="2">&nbsp;</td>
    <td>NORMAL</td>
    <td><input type="text" class="input_txt valid" id="nut_nor_1" name="nut_nor_1" value="<?php echo @$nut_nor_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="nut_nor_2" name="nut_nor_2" value="<?php echo @$nut_nor_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="nut_nor_3" name="nut_nor_3" value="<?php echo @$nut_nor_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="nut_nor_4" name="nut_nor_4" value="<?php echo @$nut_nor_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">RIESGO</td>
    <td><input type="text" class="input_txt valid" id="nut_ries_1" name="nut_ries_1" value="<?php echo @$nut_ries_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="nut_ries_2" name="nut_ries_2" value="<?php echo @$nut_ries_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="nut_ries_3" name="nut_ries_3" value="<?php echo @$nut_ries_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="nut_ries_4" name="nut_ries_4" value="<?php echo @$nut_ries_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38">DNT</td>
    <td>AGUDA</td>
    <td><input type="text" class="input_txt valid" id="nut_agu_1" name="nut_agu_1" value="<?php echo @$nut_agu_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="nut_agu_2" name="nut_agu_2" value="<?php echo @$nut_agu_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="nut_agu_3" name="nut_agu_3" value="<?php echo @$nut_agu_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="nut_agu_4" name="nut_agu_4" value="<?php echo @$nut_agu_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">CRÓNICA</td>
    <td><input type="text" class="input_txt valid" id="nut_cronica_1" name="nut_cronica_1" value="<?php echo @$nut_cronica_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="nut_cronica_2" name="nut_cronica_2" value="<?php echo @$nut_cronica_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="nut_cronica_3" name="nut_cronica_3" value="<?php echo @$nut_cronica_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="nut_cronica_4" name="nut_cronica_4" value="<?php echo @$nut_cronica_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" rowspan="14" height="266">SISTEMA    NERVIOSO</td>
    <td>CABEZA</td>
    <td><input type="text" class="input_txt valid" id="sn_cabeza_1" name="sn_cabeza_1" value="<?php echo @$sn_cabeza_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_cabeza_2" name="sn_cabeza_2" value="<?php echo @$sn_cabeza_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_cabeza_3" name="sn_cabeza_3" value="<?php echo @$sn_cabeza_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_cabeza_4" name="sn_cabeza_4" value="<?php echo @$sn_cabeza_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">OJOS</td>
    <td><input type="text" class="input_txt valid" id="sn_ojos_1" name="sn_ojos_1" value="<?php echo @$sn_ojos_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_ojos_2" name="sn_ojos_2" value="<?php echo @$sn_ojos_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_ojos_3" name="sn_ojos_3" value="<?php echo @$sn_ojos_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_ojos_4" name="sn_ojos_4" value="<?php echo @$sn_ojos_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">OÍDOS</td>
    <td><input type="text" class="input_txt valid" id="sn_oido_1" name="sn_oido_1" value="<?php echo @$sn_oido_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_oido_2" name="sn_oido_2" value="<?php echo @$sn_oido_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_oido_3" name="sn_oido_3" value="<?php echo @$sn_oido_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_oido_4" name="sn_oido_4" value="<?php echo @$sn_oido_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">NARIZ</td>
    <td><input type="text" class="input_txt valid" id="sn_nariz_1" name="sn_nariz_1" value="<?php echo @$sn_nariz_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_nariz_2" name="sn_nariz_2" value="<?php echo @$sn_nariz_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_nariz_3" name="sn_nariz_3" value="<?php echo @$sn_nariz_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_nariz_4" name="sn_nariz_4" value="<?php echo @$sn_nariz_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">BOCA</td>
    <td><input type="text" class="input_txt valid" id="sn_boca_1" name="sn_boca_1" value="<?php echo @$sn_boca_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_boca_2" name="sn_boca_2" value="<?php echo @$sn_boca_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_boca_3" name="sn_boca_3" value="<?php echo @$sn_boca_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_boca_4" name="sn_boca_4" value="<?php echo @$sn_boca_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">CUELLO</td>
    <td><input type="text" class="input_txt valid" id="sn_cuello_1" name="sn_cuello_1" value="<?php echo @$sn_cuello_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_cuello_2" name="sn_cuello_2" value="<?php echo @$sn_cuello_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_cuello_3" name="sn_cuello_3" value="<?php echo @$sn_cuello_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_cuello_4" name="sn_cuello_4" value="<?php echo @$sn_cuello_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">TORAX</td>
    <td><input type="text" class="input_txt valid" id="sn_torax_1" name="sn_torax_1" value="<?php echo @$sn_torax_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_torax_2" name="sn_torax_2" value="<?php echo @$sn_torax_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_torax_3" name="sn_torax_3" value="<?php echo @$sn_torax_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_torax_4" name="sn_torax_4" value="<?php echo @$sn_torax_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">CORAZÓN</td>
    <td><input type="text" class="input_txt valid" id="sn_corazon_1" name="sn_corazon_1" value="<?php echo @$sn_corazon_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_corazon_2" name="sn_corazon_2" value="<?php echo @$sn_corazon_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_corazon_3" name="sn_corazon_3" value="<?php echo @$sn_corazon_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_corazon_4" name="sn_corazon_4" value="<?php echo @$sn_corazon_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">PULMONES</td>
    <td><input type="text" class="input_txt valid" id="sn_pulm_1" name="sn_pulm_1" value="<?php echo @$sn_pulm_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_pulm_2" name="sn_pulm_2" value="<?php echo @$sn_pulm_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_pulm_3" name="sn_pulm_3" value="<?php echo @$sn_pulm_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_pulm_4" name="sn_pulm_4" value="<?php echo @$sn_pulm_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">ABDOMEN</td>
    <td><input type="text" class="input_txt valid" id="sn_abdo_2" name="sn_abdo_2" value="<?php echo @$sn_abdo_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_abdo_1" name="sn_abdo_1" value="<?php echo @$sn_abdo_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_abdo_3" name="sn_abdo_3" value="<?php echo @$sn_abdo_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_abdo_4" name="sn_abdo_4" value="<?php echo @$sn_abdo_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">GENITOURINARIO</td>
    <td><input type="text" class="input_txt valid" id="sn_geni_1" name="sn_geni_1" value="<?php echo @$sn_geni_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_geni_2" name="sn_geni_2" value="<?php echo @$sn_geni_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_geni_3" name="sn_geni_3" value="<?php echo @$sn_geni_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_geni_4" name="sn_geni_4" value="<?php echo @$sn_geni_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">EXTREMIDADES</td>
    <td><input type="text" class="input_txt valid" id="sn_extremi_1" name="sn_extremi_1" value="<?php echo @$sn_extremi_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_extremi_2" name="sn_extremi_2" value="<?php echo @$sn_extremi_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_extremi_3" name="sn_extremi_3" value="<?php echo @$sn_extremi_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_extremi_4" name="sn_extremi_4" value="<?php echo @$sn_extremi_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">PIEL</td>
    <td><input type="text" class="input_txt valid" id="sn_piel_1" name="sn_piel_1" value="<?php echo @$sn_piel_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_piel_2" name="sn_piel_2" value="<?php echo @$sn_piel_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_piel_3" name="sn_piel_3" value="<?php echo @$sn_piel_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_piel_4" name="sn_piel_4" value="<?php echo @$sn_piel_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">SISTEMA NERVIOSO</td>
    <td><input type="text" class="input_txt valid" id="sn_nervi_1" name="sn_nervi_1" value="<?php echo @$sn_nervi_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_nervi_2" name="sn_nervi_2" value="<?php echo @$sn_nervi_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_nervi_3" name="sn_nervi_3" value="<?php echo @$sn_nervi_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sn_nervi_4" name="sn_nervi_4" value="<?php echo @$sn_nervi_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" rowspan="3" height="57">LACTANCIA<br />
    MATERNA</td>
    <td>EXCLUSIVA (Mes)</td>
    <td><input type="text" class="input_txt valid" id="lact_excl_1" name="lact_excl_1" value="<?php echo @$lact_excl_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="lact_excl_2" name="lact_excl_2" value="<?php echo @$lact_excl_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="lact_excl_3" name="lact_excl_3" value="<?php echo @$lact_excl_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="lact_excl_4" name="lact_excl_4" value="<?php echo @$lact_excl_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">MIXTA</td>
    <td><input type="text" class="input_txt valid" id="lact_mixta_1" name="lact_mixta_1" value="<?php echo @$lact_mixta_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="lact_mixta_2" name="lact_mixta_2" value="<?php echo @$lact_mixta_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="lact_mixta_3" name="lact_mixta_3" value="<?php echo @$lact_mixta_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="lact_mixta_4" name="lact_mixta_4" value="<?php echo @$lact_mixta_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">NO</td>
    <td><input type="text" class="input_txt valid" id="lact_no_1" name="lact_no_1" value="<?php echo @$lact_no_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="lact_no_2" name="lact_no_2" value="<?php echo @$lact_no_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="lact_no_3" name="lact_no_3" value="<?php echo @$lact_no_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="lact_no_4" name="lact_no_4" value="<?php echo @$lact_no_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" rowspan="3" height="57">ALIMENTACIÓN<br />
      COMPLEMENTARIA 0<br />
    ACTUAL</td>
    <td>INICIO (mes)</td>
    <td><input type="text" class="input_txt valid" id="alim_ini_1" name="alim_ini_1" value="<?php echo @$alim_ini_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="alim_ini_2" name="alim_ini_2" value="<?php echo @$alim_ini_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="alim_ini_3" name="alim_ini_3" value="<?php echo @$alim_ini_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="alim_ini_4" name="alim_ini_4" value="<?php echo @$alim_ini_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">ADECUADA</td>
    <td><input type="text" class="input_txt valid" id="alim_ade_1" name="alim_ade_1" value="<?php echo @$alim_ade_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="alim_ade_2" name="alim_ade_2" value="<?php echo @$alim_ade_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="alim_ade_3" name="alim_ade_3" value="<?php echo @$alim_ade_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="alim_ade_4" name="alim_ade_4" value="<?php echo @$alim_ade_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">ALIMENTACIÓN ACTUAI</td>
    <td><input type="text" class="input_txt valid" id="alim_actual_1" name="alim_actual_1" value="<?php echo @$alim_actual_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="alim_actual_2" name="alim_actual_2" value="<?php echo @$alim_actual_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="alim_actual_3" name="alim_actual_3" value="<?php echo @$alim_actual_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="alim_actual_4" name="alim_actual_4" value="<?php echo @$alim_actual_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" rowspan="3" height="57">ESQUEMA<br />
    VACUNAS</td>
    <td>COMPLEJO</td>
    <td><input type="text" class="input_txt valid" id="vacu_comple_1" name="vacu_comple_1" value="<?php echo @$vacu_comple_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="vacu_comple_2" name="vacu_comple_2" value="<?php echo @$vacu_comple_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="vacu_comple_3" name="vacu_comple_3" value="<?php echo @$vacu_comple_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="vacu_comple_4" name="vacu_comple_4" value="<?php echo @$vacu_comple_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">INCOMPLETO</td>
    <td><input type="text" class="input_txt valid" id="vacu_incomple_1" name="vacu_incomple_1" value="<?php echo @$vacu_incomple_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="vacu_incomple_2" name="vacu_incomple_2" value="<?php echo @$vacu_incomple_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="vacu_incomple_3" name="vacu_incomple_3" value="<?php echo @$vacu_incomple_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="vacu_incomple_4" name="vacu_incomple_4" value="<?php echo @$vacu_incomple_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">CUALES BIOLÓGICOS</td>
    <td><input type="text" class="input_txt valid" id="vacu_bio_1" name="vacu_bio_1" value="<?php echo @$vacu_bio_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="vacu_bio_2" name="vacu_bio_2" value="<?php echo @$vacu_bio_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="vacu_bio_3" name="vacu_bio_3" value="<?php echo @$vacu_bio_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="vacu_bio_4" name="vacu_bio_4" value="<?php echo @$vacu_bio_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" rowspan="2" height="38">TAMIZAJE<br />
    VISUAL</td>
    <td>OJO DERECHO</td>
    <td><input type="text" class="input_txt valid" id="t_ojod_1" name="t_ojod_1" value="<?php echo @$t_ojod_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="t_ojod_2" name="t_ojod_2" value="<?php echo @$t_ojod_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="t_ojod_3" name="t_ojod_3" value="<?php echo @$t_ojod_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="t_ojod_4" name="t_ojod_4" value="<?php echo @$t_ojod_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">OJO IZQUIEDO</td>
    <td><input type="text" class="input_txt valid" id="t_ojoiz_1" name="t_ojoiz_1" value="<?php echo @$t_ojoiz_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="t_ojoiz_2" name="t_ojoiz_2" value="<?php echo @$t_ojoiz_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="t_ojoiz_3" name="t_ojoiz_3" value="<?php echo @$t_ojoiz_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="t_ojoiz_4" name="t_ojoiz_4" value="<?php echo @$t_ojoiz_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" rowspan="2" height="38">HIGIENE<br />
    ORAL</td>
    <td>SI</td>
    <td><input type="text" class="input_txt valid" id="h_oral_s_1" name="h_oral_s_1" value="<?php echo @$h_oral_s_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="h_oral_s_2" name="h_oral_s_2" value="<?php echo @$h_oral_s_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="h_oral_s_3" name="h_oral_s_3" value="<?php echo @$h_oral_s_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="h_oral_s_4" name="h_oral_s_4" value="<?php echo @$h_oral_s_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">NO</td>
    <td><input type="text" class="input_txt valid" id="h_oral_n_1" name="h_oral_n_1" value="<?php echo @$h_oral_n_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="h_oral_n_2" name="h_oral_n_2" value="<?php echo @$h_oral_n_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="h_oral_n_3" name="h_oral_n_3" value="<?php echo @$h_oral_n_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="h_oral_n_4" name="h_oral_n_4" value="<?php echo @$h_oral_n_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" rowspan="2" height="38">MALTRATO    INFANTIL</td>
    <td>SI</td>
    <td><input type="text" class="input_txt valid" id="maltrato_s_1" name="maltrato_s_1" value="<?php echo @$maltrato_s_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="maltrato_s_2" name="maltrato_s_2" value="<?php echo @$maltrato_s_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="maltrato_s_3" name="maltrato_s_3" value="<?php echo @$maltrato_s_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="maltrato_s_4" name="maltrato_s_4" value="<?php echo @$maltrato_s_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">NO</td>
    <td><input type="text" class="input_txt valid" id="maltrato_n_1" name="maltrato_n_1" value="<?php echo @$maltrato_n_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="maltrato_n_2" name="maltrato_n_2" value="<?php echo @$maltrato_n_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="maltrato_n_3" name="maltrato_n_3" value="<?php echo @$maltrato_n_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="maltrato_n_4" name="maltrato_n_4" value="<?php echo @$maltrato_n_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" rowspan="5" height="95">EDUCACIÓN</td>
    <td>VACUNACIÓN</td>
    <td><input type="text" class="input_txt valid" id="ed_vacu_1" name="ed_vacu_1" value="<?php echo @$ed_vacu_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="ed_vacu_2" name="ed_vacu_2" value="<?php echo @$ed_vacu_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="ed_vacu_3" name="ed_vacu_3" value="<?php echo @$ed_vacu_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="ed_vacu_4" name="ed_vacu_4" value="<?php echo @$ed_vacu_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">HIGIENE GENERAL</td>
    <td><input type="text" class="input_txt valid" id="ed_hgeneral_1" name="ed_hgeneral_1" value="<?php echo @$ed_hgeneral_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="ed_hgeneral_2" name="ed_hgeneral_2" value="<?php echo @$ed_hgeneral_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="ed_hgeneral_3" name="ed_hgeneral_3" value="<?php echo @$ed_hgeneral_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="ed_hgeneral_4" name="ed_hgeneral_4" value="<?php echo @$ed_hgeneral_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">ESTIMULACIÓN ADEC.</td>
    <td><input type="text" class="input_txt valid" id="ed_estimul_1" name="ed_estimul_1" value="<?php echo @$ed_estimul_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="ed_estimul_2" name="ed_estimul_2" value="<?php echo @$ed_estimul_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="ed_estimul_3" name="ed_estimul_3" value="<?php echo @$ed_estimul_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="ed_estimul_4" name="ed_estimul_4" value="<?php echo @$ed_estimul_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">SIGNOS ALARMA</td>
    <td><input type="text" class="input_txt valid" id="ed_alarma_1" name="ed_alarma_1" value="<?php echo @$ed_alarma_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="ed_alarma_2" name="ed_alarma_2" value="<?php echo @$ed_alarma_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="ed_alarma_3" name="ed_alarma_3" value="<?php echo @$ed_alarma_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="ed_alarma_4" name="ed_alarma_4" value="<?php echo @$ed_alarma_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19">CONSEJERÍA NUTRICIÓN</td>
    <td><input type="text" class="input_txt valid" id="ed_nutricion_1" name="ed_nutricion_1" value="<?php echo @$ed_nutricion_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="ed_nutricion_2" name="ed_nutricion_2" value="<?php echo @$ed_nutricion_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="ed_nutricion_3" name="ed_nutricion_3" value="<?php echo @$ed_nutricion_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="ed_nutricion_4" name="ed_nutricion_4" value="<?php echo @$ed_nutricion_4; ?>" /></td>
  </tr>
  <tr height="38">
    <td colspan="7" height="38">PARENTESCO RESPONSABLE:
      <input type="text" class="input_txt valid" id="pariente_responsable" name="pariente_responsable" value="<?php echo @$pariente_responsable; ?>" /></td>
  </tr>
</table>


<?php echo @$button ?>
</form><br>
</div>
</fieldset>