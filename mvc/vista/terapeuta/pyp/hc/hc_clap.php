<?php
if (isset($_REQUEST['guardar_hc_clap']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_hc_clap'] == 'new') {

$sql = "INSERT INTO hc_clap (
`id_hc_clap`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`gesta_prey`,
`abortosy`,
`vaginalesy`,
`nac_vivosy`,
`viveny`,
`partos_1y`,
`cesaresa_hdy`,
`nac_muertosy`,
`muertos1semy`,
`muertos_despuesy`,
`planeadoy`,
`metodo_anty`,
`fin_embaanteriory`,
`eptopicoy`,
`gemelosy`,
`ultimo25y`,
`normal40y`,
`ges_pesoy`,
`ges_tallay`,
`fppy`,
`ges__fumy`,
`eg_fumy`,
`eg_ecoy`,
`antirubeola_1y`,
`fum_1_acty`,
`fum_1_pasy`,
`fum_1_drogy`,
`fum_1_alcoholy`,
`fum_1_violenciay`,
`fum_2_acty`,
`fum_2_pasy`,
`fum_2_drogy`,
`fum_2_alcoholy`,
`fum_2_violenciay`,
`fum_3_acty`,
`fum_3_pasy`,
`fum_3_drogy`,
`fum_3_alcoholy`,
`fum_3_violenciay`,
`ex_mamasy`,
`ex_odony`,
`tetano1y`,
`tetano2y`,
`tetano3y`,
`cervix_1y`,
`cervix_2y`,
`cervix_3y`,
`rh_grupoy`,
`fh_factory`,
`rh_gluboy`,
`rh_inmuy`,
`toxo_1y`,
`toxo_2y`,
`toxo_3y`,
`vih_1y`,
`vih_2y`,
`vih_3y`,
`vih_4y`,
`vih_5y`,
`vih_6y`,
`folatos_1y`,
`folatos_2y`,
`hb20_1y`,
`hb20_2y`,
`estreptoc_1y`,
`prep_partoy`,
`conse_lacty`,
`chagasy`,
`plaudismo_1y`,
`bacteriu_1y`,
`bacteriu_2y`,
`bacteriu_3y`,
`bacteriu_4y`,
`glicemia_1y`,
`glicemia_2y`,
`glicemia_3y`,
`glicemia_4y`,
`sifilis20_1y`,
`sifilis20_2y`,
`sifilis20_3y`,
`sifilis20_4y`,
`sifilis20_5y`,
`sifilis20_6y`,
`sifilis20_7y`,
`sifilis20_8y`,
`sifilis20_9y`,
`sifilis20_10y`,
`sifilis20_11y`,
`sifilis20_12y`,
`sifilis20mas_1y`,
`sifilis20mas_2y`,
`sifilis20mas_3y`,
`sifilis20mas_4y`,
`sifilis20mas_5y`,
`sifilis20mas_6y`,
`sifilis20mas_7y`,
`sifilis20mas_8y`,
`sifilis20mas_9y`,
`sifilis20mas_10y`,
`sifilis20mas_11y`,
`sifilis20mas_12y`,
`con_ant_1_1y`,
`con_ant_1_2y`,
`con_ant_1_3y`,
`con_ant_1_4y`,
`con_ant_1_5y`,
`con_ant_1_6y`,
`con_ant_1_7y`,
`con_ant_1_8y`,
`con_ant_1_9y`,
`con_ant_1_10y`,
`con_ant_1_11y`,
`con_ant_1_12y`,
`con_ant_2_1y`,
`con_ant_2_2y`,
`con_ant_2_3y`,
`con_ant_2_4y`,
`con_ant_2_5y`,
`con_ant_2_6y`,
`con_ant_2_7y`,
`con_ant_2_8y`,
`con_ant_2_9y`,
`con_ant_2_10y`,
`con_ant_2_11y`,
`con_ant_2_12y`,
`con_ant_3_1y`,
`con_ant_3_2y`,
`con_ant_3_3y`,
`con_ant_3_4y`,
`con_ant_3_5y`,
`con_ant_3_6y`,
`con_ant_3_7y`,
`con_ant_3_8y`,
`con_ant_3_9y`,
`con_ant_3_10y`,
`con_ant_3_11y`,
`con_ant_3_12y`,
`Parto_65y`,
`aborto_65y`,
`fecha_65y`,
`carnet_65y`,
`total_con_prenay`,
`hops_emb_1y`,
`hops_emb_2y`,
`corti_1y`,
`corti_2y`,
`corti_3y`,
`corti_4y`,
`inicio_1y`,
`inicio_2y`,
`inicio_3y`,
`pre_sit_1y`,
`pre_sit_2y`,
`pre_sit_3y`,
`tama_fetoy`,
`acompa_1y`,
`acompa_2y`,
`acompa_3y`,
`acompa_4y`,
`acompa_5y`,
`acompa_6y`,
`acompa_7y`,
`acompa_8y`,
`t_parto_1_1y`,
`t_parto_1_2y`,
`t_parto_1_3y`,
`t_parto_1_4y`,
`t_parto_1_5y`,
`t_parto_1_6y`,
`t_parto_1_7y`,
`t_parto_1_8y`,
`t_parto_1_9y`,
`t_parto_1_10y`,
`t_parto_2_1y`,
`t_parto_2_2y`,
`t_parto_2_3y`,
`t_parto_2_4y`,
`t_parto_2_5y`,
`t_parto_2_6y`,
`t_parto_2_7y`,
`t_parto_2_8y`,
`t_parto_2_9y`,
`t_parto_2_10y`,
`t_parto_3_1y`,
`t_parto_3_2y`,
`t_parto_3_3y`,
`t_parto_3_4y`,
`t_parto_3_5y`,
`t_parto_3_6y`,
`t_parto_3_7y`,
`t_parto_3_8y`,
`t_parto_3_9y`,
`t_parto_3_10y`,
`enferme_1y`,
`enferme_2y`,
`enferme_3y`,
`enferme_4y`,
`enferme_5y`,
`enferme_6y`,
`enferme_7y`,
`enferme_8y`,
`enferme_9y`,
`enferme_10y`,
`enferme_11y`,
`enferme_12y`,
`enferme_13y`,
`enferme_14y`,
`enferme_15y`,
`enferme_16y`,
`enferme_17y`,
`enferme_18y`,
`enferme_19y`,
`enferme_20y`,
`enferme_21y`,
`enferme_22y`,
`enferme_23y`,
`enferme_24y`,
`enferme_25y`,
`enferme_26y`,
`enferme_27y`,
`nac2_1y`,
`nac2_2y`,
`nac2_3y`,
`nac2_4y`,
`nac2_5y`,
`nac2_6y`,
`nac2_7y`,
`nac2_8y`,
`nac2_9y`,
`indica_p_1y`,
`indica_p_2y`,
`indica_p_3y`,
`pos_partoy`,
`desgarroy`,
`grado14y`,
`ocitoc_1y`,
`ocitoc_2y`,
`placenta_1y`,
`placenta2y`,
`placenta3y`,
`medicacion_1y`,
`medicacion_2y`,
`medicacion_3y`,
`medicacion_4y`,
`medicacion_5y`,
`medicacion_6y`,
`medicacion_7y`,
`medicacion_8y`,
`medicacion_9y`,
`medicacion_10y`,
`rnacid_1y`,
`rnacid_2y`,
`rnacid_3y`,
`rnacid_4y`,
`rnacid_5y`,
`rnacid_6y`,
`rnacid_7y`,
`rnacid_8y`,
`rnacid_9y`,
`rnacid_10y`,
`rnacid_11y`,
`rnacid_12y`,
`rnacid_13y`,
`rnacid_14y`,
`rnacid_15y`,
`rnacid_16y`,
`rnacid_18y`,
`rnacid_19y`,
`rnacid_20y`,
`rnacid_21y`,
`rnacid2_1y`,
`rnacid2_2y`,
`rnacid2_3y`,
`rnacid2_4y`,
`rnacid2_5y`,
`rnacid2_6y`,
`rnacid2_7y`,
`rnacid2_8y`,
`rnacid2_9y`,
`rnacid2_10y`,
`rnacid2_11y`,
`rnacid2_12y`,
`rnacid2_13y`,
`rnacid2_14y`,
`rnacid2_15y`,
`rnacid2_16y`,
`rnacid2_17y`,
`rnacid2_18y`,
`rnacid2_19y`,
`rnacid2_20y`,
`puerpe_2_1y`,
`puerpe_2_2y`,
`puerpe_2_3y`,
`puerpe_2_4y`,
`puerpe_2_5y`,
`puerpe_2_6y`,
`meconio_1y`,
`rubeo_1y`,
`rubeo_2y`,
`yglu65_1y`,
`yglu65_2y`,
`antic_1y`,
`antica_2y`,
`egre_rn_1y`,
`egre_rn_2y`,
`egre_rn_3y`,
`egre_rn_4y`,
`egre_rn_5y`,
`egre_rn_6y`,
`egre_rn_7y`,
`egre_rn_8y`,
`egre_rn_9y`,
`egre_rn_10y`,
`egre_rn_11y`,
`egre_rn_12y`,
`egre_rn_13y`,
`egre_rn_14y`,
`egre_rn_15y`,
`egre_rn_16y`,
`egre_rn_17y`,
`egre_rn_18y`,
`egre_rn_19y`,
`egre_rn_20y`,
`egre_rn_21y`,
`egre_rn_22y`,
`egre_rn_23y`,
`inicio_2_4y`,
`inicio_2_5y`,
`inicio_2_6y`,
`inicio_2_7y`,
`inicio_2_8y`,
`inicio_2_9y`,
`inicio_2_10`,
`edad_ges_partp_1y`,
`edad_ges_partp_2y`,
`edad_ges_partp_3y`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['gesta_prey']."' ,
'".$_REQUEST['abortosy']."' ,
'".$_REQUEST['vaginalesy']."' ,
'".$_REQUEST['nac_vivosy']."' ,
'".$_REQUEST['viveny']."' ,
'".$_REQUEST['partos_1y']."' ,
'".$_REQUEST['cesaresa_hdy']."' ,
'".$_REQUEST['nac_muertosy']."' ,
'".$_REQUEST['muertos1semy']."' ,
'".$_REQUEST['muertos_despuesy']."' ,
'".$_REQUEST['planeadoy']."' ,
'".$_REQUEST['metodo_anty']."' ,
'".$_REQUEST['fin_embaanteriory']."' ,
'".$_REQUEST['eptopicoy']."' ,
'".$_REQUEST['gemelosy']."' ,
'".$_REQUEST['ultimo25y']."' ,
'".$_REQUEST['normal40y']."' ,
'".$_REQUEST['ges_pesoy']."' ,
'".$_REQUEST['ges_tallay']."' ,
'".$_REQUEST['fppy']."' ,
'".$_REQUEST['ges__fumy']."' ,
'".$_REQUEST['eg_fumy']."' ,
'".$_REQUEST['eg_ecoy']."' ,
'".$_REQUEST['antirubeola_1y']."' ,
'".$_REQUEST['fum_1_acty']."' ,
'".$_REQUEST['fum_1_pasy']."' ,
'".$_REQUEST['fum_1_drogy']."' ,
'".$_REQUEST['fum_1_alcoholy']."' ,
'".$_REQUEST['fum_1_violenciay']."' ,
'".$_REQUEST['fum_2_acty']."' ,
'".$_REQUEST['fum_2_pasy']."' ,
'".$_REQUEST['fum_2_drogy']."' ,
'".$_REQUEST['fum_2_alcoholy']."' ,
'".$_REQUEST['fum_2_violenciay']."' ,
'".$_REQUEST['fum_3_acty']."' ,
'".$_REQUEST['fum_3_pasy']."' ,
'".$_REQUEST['fum_3_drogy']."' ,
'".$_REQUEST['fum_3_alcoholy']."' ,
'".$_REQUEST['fum_3_violenciay']."' ,
'".$_REQUEST['ex_mamasy']."' ,
'".$_REQUEST['ex_odony']."' ,
'".$_REQUEST['tetano1y']."' ,
'".$_REQUEST['tetano2y']."' ,
'".$_REQUEST['tetano3y']."' ,
'".$_REQUEST['cervix_1y']."' ,
'".$_REQUEST['cervix_2y']."' ,
'".$_REQUEST['cervix_3y']."' ,
'".$_REQUEST['rh_grupoy']."' ,
'".$_REQUEST['fh_factory']."' ,
'".$_REQUEST['rh_gluboy']."' ,
'".$_REQUEST['rh_inmuy']."' ,
'".$_REQUEST['toxo_1y']."' ,
'".$_REQUEST['toxo_2y']."' ,
'".$_REQUEST['toxo_3y']."' ,
'".$_REQUEST['vih_1y']."' ,
'".$_REQUEST['vih_2y']."' ,
'".$_REQUEST['vih_3y']."' ,
'".$_REQUEST['vih_4y']."' ,
'".$_REQUEST['vih_5y']."' ,
'".$_REQUEST['vih_6y']."' ,
'".$_REQUEST['folatos_1y']."' ,
'".$_REQUEST['folatos_2y']."' ,
'".$_REQUEST['hb20_1y']."' ,
'".$_REQUEST['hb20_2y']."' ,
'".$_REQUEST['estreptoc_1y']."' ,
'".$_REQUEST['prep_partoy']."' ,
'".$_REQUEST['conse_lacty']."' ,
'".$_REQUEST['chagasy']."' ,
'".$_REQUEST['plaudismo_1y']."' ,
'".$_REQUEST['bacteriu_1y']."' ,
'".$_REQUEST['bacteriu_2y']."' ,
'".$_REQUEST['bacteriu_3y']."' ,
'".$_REQUEST['bacteriu_4y']."' ,
'".$_REQUEST['glicemia_1y']."' ,
'".$_REQUEST['glicemia_2y']."' ,
'".$_REQUEST['glicemia_3y']."' ,
'".$_REQUEST['glicemia_4y']."' ,
'".$_REQUEST['sifilis20_1y']."' ,
'".$_REQUEST['sifilis20_2y']."' ,
'".$_REQUEST['sifilis20_3y']."' ,
'".$_REQUEST['sifilis20_4y']."' ,
'".$_REQUEST['sifilis20_5y']."' ,
'".$_REQUEST['sifilis20_6y']."' ,
'".$_REQUEST['sifilis20_7y']."' ,
'".$_REQUEST['sifilis20_8y']."' ,
'".$_REQUEST['sifilis20_9y']."' ,
'".$_REQUEST['sifilis20_10y']."' ,
'".$_REQUEST['sifilis20_11y']."' ,
'".$_REQUEST['sifilis20_12y']."' ,
'".$_REQUEST['sifilis20mas_1y']."' ,
'".$_REQUEST['sifilis20mas_2y']."' ,
'".$_REQUEST['sifilis20mas_3y']."' ,
'".$_REQUEST['sifilis20mas_4y']."' ,
'".$_REQUEST['sifilis20mas_5y']."' ,
'".$_REQUEST['sifilis20mas_6y']."' ,
'".$_REQUEST['sifilis20mas_7y']."' ,
'".$_REQUEST['sifilis20mas_8y']."' ,
'".$_REQUEST['sifilis20mas_9y']."' ,
'".$_REQUEST['sifilis20mas_10y']."' ,
'".$_REQUEST['sifilis20mas_11y']."' ,
'".$_REQUEST['sifilis20mas_12y']."' ,
'".$_REQUEST['con_ant_1_1y']."' ,
'".$_REQUEST['con_ant_1_2y']."' ,
'".$_REQUEST['con_ant_1_3y']."' ,
'".$_REQUEST['con_ant_1_4y']."' ,
'".$_REQUEST['con_ant_1_5y']."' ,
'".$_REQUEST['con_ant_1_6y']."' ,
'".$_REQUEST['con_ant_1_7y']."' ,
'".$_REQUEST['con_ant_1_8y']."' ,
'".$_REQUEST['con_ant_1_9y']."' ,
'".$_REQUEST['con_ant_1_10y']."' ,
'".$_REQUEST['con_ant_1_11y']."' ,
'".$_REQUEST['con_ant_1_12y']."' ,
'".$_REQUEST['con_ant_2_1y']."' ,
'".$_REQUEST['con_ant_2_2y']."' ,
'".$_REQUEST['con_ant_2_3y']."' ,
'".$_REQUEST['con_ant_2_4y']."' ,
'".$_REQUEST['con_ant_2_5y']."' ,
'".$_REQUEST['con_ant_2_6y']."' ,
'".$_REQUEST['con_ant_2_7y']."' ,
'".$_REQUEST['con_ant_2_8y']."' ,
'".$_REQUEST['con_ant_2_9y']."' ,
'".$_REQUEST['con_ant_2_10y']."' ,
'".$_REQUEST['con_ant_2_11y']."' ,
'".$_REQUEST['con_ant_2_12y']."' ,
'".$_REQUEST['con_ant_3_1y']."' ,
'".$_REQUEST['con_ant_3_2y']."' ,
'".$_REQUEST['con_ant_3_3y']."' ,
'".$_REQUEST['con_ant_3_4y']."' ,
'".$_REQUEST['con_ant_3_5y']."' ,
'".$_REQUEST['con_ant_3_6y']."' ,
'".$_REQUEST['con_ant_3_7y']."' ,
'".$_REQUEST['con_ant_3_8y']."' ,
'".$_REQUEST['con_ant_3_9y']."' ,
'".$_REQUEST['con_ant_3_10y']."' ,
'".$_REQUEST['con_ant_3_11y']."' ,
'".$_REQUEST['con_ant_3_12y']."' ,
'".$_REQUEST['Parto_65y']."' ,
'".$_REQUEST['aborto_65y']."' ,
'".$_REQUEST['fecha_65y']."' ,
'".$_REQUEST['carnet_65y']."' ,
'".$_REQUEST['total_con_prenay']."' ,
'".$_REQUEST['hops_emb_1y']."' ,
'".$_REQUEST['hops_emb_2y']."' ,
'".$_REQUEST['corti_1y']."' ,
'".$_REQUEST['corti_2y']."' ,
'".$_REQUEST['corti_3y']."' ,
'".$_REQUEST['corti_4y']."' ,
'".$_REQUEST['inicio_1y']."' ,
'".$_REQUEST['inicio_2y']."' ,
'".$_REQUEST['inicio_3y']."' ,
'".$_REQUEST['pre_sit_1y']."' ,
'".$_REQUEST['pre_sit_2y']."' ,
'".$_REQUEST['pre_sit_3y']."' ,
'".$_REQUEST['tama_fetoy']."' ,
'".$_REQUEST['acompa_1y']."' ,
'".$_REQUEST['acompa_2y']."' ,
'".$_REQUEST['acompa_3y']."' ,
'".$_REQUEST['acompa_4y']."' ,
'".$_REQUEST['acompa_5y']."' ,
'".$_REQUEST['acompa_6y']."' ,
'".$_REQUEST['acompa_7y']."' ,
'".$_REQUEST['acompa_8y']."' ,
'".$_REQUEST['t_parto_1_1y']."' ,
'".$_REQUEST['t_parto_1_2y']."' ,
'".$_REQUEST['t_parto_1_3y']."' ,
'".$_REQUEST['t_parto_1_4y']."' ,
'".$_REQUEST['t_parto_1_5y']."' ,
'".$_REQUEST['t_parto_1_6y']."' ,
'".$_REQUEST['t_parto_1_7y']."' ,
'".$_REQUEST['t_parto_1_8y']."' ,
'".$_REQUEST['t_parto_1_9y']."' ,
'".$_REQUEST['t_parto_1_10y']."' ,
'".$_REQUEST['t_parto_2_1y']."' ,
'".$_REQUEST['t_parto_2_2y']."' ,
'".$_REQUEST['t_parto_2_3y']."' ,
'".$_REQUEST['t_parto_2_4y']."' ,
'".$_REQUEST['t_parto_2_5y']."' ,
'".$_REQUEST['t_parto_2_6y']."' ,
'".$_REQUEST['t_parto_2_7y']."' ,
'".$_REQUEST['t_parto_2_8y']."' ,
'".$_REQUEST['t_parto_2_9y']."' ,
'".$_REQUEST['t_parto_2_10y']."' ,
'".$_REQUEST['t_parto_3_1y']."' ,
'".$_REQUEST['t_parto_3_2y']."' ,
'".$_REQUEST['t_parto_3_3y']."' ,
'".$_REQUEST['t_parto_3_4y']."' ,
'".$_REQUEST['t_parto_3_5y']."' ,
'".$_REQUEST['t_parto_3_6y']."' ,
'".$_REQUEST['t_parto_3_7y']."' ,
'".$_REQUEST['t_parto_3_8y']."' ,
'".$_REQUEST['t_parto_3_9y']."' ,
'".$_REQUEST['t_parto_3_10y']."' ,
'".$_REQUEST['enferme_1y']."' ,
'".$_REQUEST['enferme_2y']."' ,
'".$_REQUEST['enferme_3y']."' ,
'".$_REQUEST['enferme_4y']."' ,
'".$_REQUEST['enferme_5y']."' ,
'".$_REQUEST['enferme_6y']."' ,
'".$_REQUEST['enferme_7y']."' ,
'".$_REQUEST['enferme_8y']."' ,
'".$_REQUEST['enferme_9y']."' ,
'".$_REQUEST['enferme_10y']."' ,
'".$_REQUEST['enferme_11y']."' ,
'".$_REQUEST['enferme_12y']."' ,
'".$_REQUEST['enferme_13y']."' ,
'".$_REQUEST['enferme_14y']."' ,
'".$_REQUEST['enferme_15y']."' ,
'".$_REQUEST['enferme_16y']."' ,
'".$_REQUEST['enferme_17y']."' ,
'".$_REQUEST['enferme_18y']."' ,
'".$_REQUEST['enferme_19y']."' ,
'".$_REQUEST['enferme_20y']."' ,
'".$_REQUEST['enferme_21y']."' ,
'".$_REQUEST['enferme_22y']."' ,
'".$_REQUEST['enferme_23y']."' ,
'".$_REQUEST['enferme_24y']."' ,
'".$_REQUEST['enferme_25y']."' ,
'".$_REQUEST['enferme_26y']."' ,
'".$_REQUEST['enferme_27y']."' ,
'".$_REQUEST['nac2_1y']."' ,
'".$_REQUEST['nac2_2y']."' ,
'".$_REQUEST['nac2_3y']."' ,
'".$_REQUEST['nac2_4y']."' ,
'".$_REQUEST['nac2_5y']."' ,
'".$_REQUEST['nac2_6y']."' ,
'".$_REQUEST['nac2_7y']."' ,
'".$_REQUEST['nac2_8y']."' ,
'".$_REQUEST['nac2_9y']."' ,
'".$_REQUEST['indica_p_1y']."' ,
'".$_REQUEST['indica_p_2y']."' ,
'".$_REQUEST['indica_p_3y']."' ,
'".$_REQUEST['pos_partoy']."' ,
'".$_REQUEST['desgarroy']."' ,
'".$_REQUEST['grado14y']."' ,
'".$_REQUEST['ocitoc_1y']."' ,
'".$_REQUEST['ocitoc_2y']."' ,
'".$_REQUEST['placenta_1y']."' ,
'".$_REQUEST['placenta2y']."' ,
'".$_REQUEST['placenta3y']."' ,
'".$_REQUEST['medicacion_1y']."' ,
'".$_REQUEST['medicacion_2y']."' ,
'".$_REQUEST['medicacion_3y']."' ,
'".$_REQUEST['medicacion_4y']."' ,
'".$_REQUEST['medicacion_5y']."' ,
'".$_REQUEST['medicacion_6y']."' ,
'".$_REQUEST['medicacion_7y']."' ,
'".$_REQUEST['medicacion_8y']."' ,
'".$_REQUEST['medicacion_9y']."' ,
'".$_REQUEST['medicacion_10y']."' ,
'".$_REQUEST['rnacid_1y']."' ,
'".$_REQUEST['rnacid_2y']."' ,
'".$_REQUEST['rnacid_3y']."' ,
'".$_REQUEST['rnacid_4y']."' ,
'".$_REQUEST['rnacid_5y']."' ,
'".$_REQUEST['rnacid_6y']."' ,
'".$_REQUEST['rnacid_7y']."' ,
'".$_REQUEST['rnacid_8y']."' ,
'".$_REQUEST['rnacid_9y']."' ,
'".$_REQUEST['rnacid_10y']."' ,
'".$_REQUEST['rnacid_11y']."' ,
'".$_REQUEST['rnacid_12y']."' ,
'".$_REQUEST['rnacid_13y']."' ,
'".$_REQUEST['rnacid_14y']."' ,
'".$_REQUEST['rnacid_15y']."' ,
'".$_REQUEST['rnacid_16y']."' ,
'".$_REQUEST['rnacid_18y']."' ,
'".$_REQUEST['rnacid_19y']."' ,
'".$_REQUEST['rnacid_20y']."' ,
'".$_REQUEST['rnacid_21y']."' ,
'".$_REQUEST['rnacid2_1y']."' ,
'".$_REQUEST['rnacid2_2y']."' ,
'".$_REQUEST['rnacid2_3y']."' ,
'".$_REQUEST['rnacid2_4y']."' ,
'".$_REQUEST['rnacid2_5y']."' ,
'".$_REQUEST['rnacid2_6y']."' ,
'".$_REQUEST['rnacid2_7y']."' ,
'".$_REQUEST['rnacid2_8y']."' ,
'".$_REQUEST['rnacid2_9y']."' ,
'".$_REQUEST['rnacid2_10y']."' ,
'".$_REQUEST['rnacid2_11y']."' ,
'".$_REQUEST['rnacid2_12y']."' ,
'".$_REQUEST['rnacid2_13y']."' ,
'".$_REQUEST['rnacid2_14y']."' ,
'".$_REQUEST['rnacid2_15y']."' ,
'".$_REQUEST['rnacid2_16y']."' ,
'".$_REQUEST['rnacid2_17y']."' ,
'".$_REQUEST['rnacid2_18y']."' ,
'".$_REQUEST['rnacid2_19y']."' ,
'".$_REQUEST['rnacid2_20y']."' ,
'".$_REQUEST['puerpe_2_1y']."' ,
'".$_REQUEST['puerpe_2_2y']."' ,
'".$_REQUEST['puerpe_2_3y']."' ,
'".$_REQUEST['puerpe_2_4y']."' ,
'".$_REQUEST['puerpe_2_5y']."' ,
'".$_REQUEST['puerpe_2_6y']."' ,
'".$_REQUEST['meconio_1y']."' ,
'".$_REQUEST['rubeo_1y']."' ,
'".$_REQUEST['rubeo_2y']."' ,
'".$_REQUEST['yglu65_1y']."' ,
'".$_REQUEST['yglu65_2y']."' ,
'".$_REQUEST['antic_1y']."' ,
'".$_REQUEST['antica_2y']."' ,
'".$_REQUEST['egre_rn_1y']."' ,
'".$_REQUEST['egre_rn_2y']."' ,
'".$_REQUEST['egre_rn_3y']."' ,
'".$_REQUEST['egre_rn_4y']."' ,
'".$_REQUEST['egre_rn_5y']."' ,
'".$_REQUEST['egre_rn_6y']."' ,
'".$_REQUEST['egre_rn_7y']."' ,
'".$_REQUEST['egre_rn_8y']."' ,
'".$_REQUEST['egre_rn_9y']."' ,
'".$_REQUEST['egre_rn_10y']."' ,
'".$_REQUEST['egre_rn_11y']."' ,
'".$_REQUEST['egre_rn_12y']."' ,
'".$_REQUEST['egre_rn_13y']."' ,
'".$_REQUEST['egre_rn_14y']."' ,
'".$_REQUEST['egre_rn_15y']."' ,
'".$_REQUEST['egre_rn_16y']."' ,
'".$_REQUEST['egre_rn_17y']."' ,
'".$_REQUEST['egre_rn_18y']."' ,
'".$_REQUEST['egre_rn_19y']."' ,
'".$_REQUEST['egre_rn_20y']."' ,
'".$_REQUEST['egre_rn_21y']."' ,
'".$_REQUEST['egre_rn_22y']."' ,
'".$_REQUEST['egre_rn_23y']."' ,
'".$_REQUEST['inicio_2_4y']."' ,
'".$_REQUEST['inicio_2_5y']."' ,
'".$_REQUEST['inicio_2_6y']."' ,
'".$_REQUEST['inicio_2_7y']."' ,
'".$_REQUEST['inicio_2_8y']."' ,
'".$_REQUEST['inicio_2_9y']."' ,
'".$_REQUEST['inicio_2_10']."' ,
'".$_REQUEST['edad_ges_partp_1y']."' ,
'".$_REQUEST['edad_ges_partp_2y']."' ,
'".$_REQUEST['edad_ges_partp_3y']."'
) ";


} else if ($_REQUEST['id_hc_clap'] != '') {

$sql = "UPDATE hc_clap set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`gesta_prey` = '".$_REQUEST['gesta_prey']."' ,
`abortosy` = '".$_REQUEST['abortosy']."' ,
`vaginalesy` = '".$_REQUEST['vaginalesy']."' ,
`nac_vivosy` = '".$_REQUEST['nac_vivosy']."' ,
`viveny` = '".$_REQUEST['viveny']."' ,
`partos_1y` = '".$_REQUEST['partos_1y']."' ,
`cesaresa_hdy` = '".$_REQUEST['cesaresa_hdy']."' ,
`nac_muertosy` = '".$_REQUEST['nac_muertosy']."' ,
`muertos1semy` = '".$_REQUEST['muertos1semy']."' ,
`muertos_despuesy` = '".$_REQUEST['muertos_despuesy']."' ,
`planeadoy` = '".$_REQUEST['planeadoy']."' ,
`metodo_anty` = '".$_REQUEST['metodo_anty']."' ,
`fin_embaanteriory` = '".$_REQUEST['fin_embaanteriory']."' ,
`eptopicoy` = '".$_REQUEST['eptopicoy']."' ,
`gemelosy` = '".$_REQUEST['gemelosy']."' ,
`ultimo25y` = '".$_REQUEST['ultimo25y']."' ,
`normal40y` = '".$_REQUEST['normal40y']."' ,
`ges_pesoy` = '".$_REQUEST['ges_pesoy']."' ,
`ges_tallay` = '".$_REQUEST['ges_tallay']."' ,
`fppy` = '".$_REQUEST['fppy']."' ,
`ges__fumy` = '".$_REQUEST['ges__fumy']."' ,
`eg_fumy` = '".$_REQUEST['eg_fumy']."' ,
`eg_ecoy` = '".$_REQUEST['eg_ecoy']."' ,
`antirubeola_1y` = '".$_REQUEST['antirubeola_1y']."' ,
`fum_1_acty` = '".$_REQUEST['fum_1_acty']."' ,
`fum_1_pasy` = '".$_REQUEST['fum_1_pasy']."' ,
`fum_1_drogy` = '".$_REQUEST['fum_1_drogy']."' ,
`fum_1_alcoholy` = '".$_REQUEST['fum_1_alcoholy']."' ,
`fum_1_violenciay` = '".$_REQUEST['fum_1_violenciay']."' ,
`fum_2_acty` = '".$_REQUEST['fum_2_acty']."' ,
`fum_2_pasy` = '".$_REQUEST['fum_2_pasy']."' ,
`fum_2_drogy` = '".$_REQUEST['fum_2_drogy']."' ,
`fum_2_alcoholy` = '".$_REQUEST['fum_2_alcoholy']."' ,
`fum_2_violenciay` = '".$_REQUEST['fum_2_violenciay']."' ,
`fum_3_acty` = '".$_REQUEST['fum_3_acty']."' ,
`fum_3_pasy` = '".$_REQUEST['fum_3_pasy']."' ,
`fum_3_drogy` = '".$_REQUEST['fum_3_drogy']."' ,
`fum_3_alcoholy` = '".$_REQUEST['fum_3_alcoholy']."' ,
`fum_3_violenciay` = '".$_REQUEST['fum_3_violenciay']."' ,
`ex_mamasy` = '".$_REQUEST['ex_mamasy']."' ,
`ex_odony` = '".$_REQUEST['ex_odony']."' ,
`tetano1y` = '".$_REQUEST['tetano1y']."' ,
`tetano2y` = '".$_REQUEST['tetano2y']."' ,
`tetano3y` = '".$_REQUEST['tetano3y']."' ,
`cervix_1y` = '".$_REQUEST['cervix_1y']."' ,
`cervix_2y` = '".$_REQUEST['cervix_2y']."' ,
`cervix_3y` = '".$_REQUEST['cervix_3y']."' ,
`rh_grupoy` = '".$_REQUEST['rh_grupoy']."' ,
`fh_factory` = '".$_REQUEST['fh_factory']."' ,
`rh_gluboy` = '".$_REQUEST['rh_gluboy']."' ,
`rh_inmuy` = '".$_REQUEST['rh_inmuy']."' ,
`toxo_1y` = '".$_REQUEST['toxo_1y']."' ,
`toxo_2y` = '".$_REQUEST['toxo_2y']."' ,
`toxo_3y` = '".$_REQUEST['toxo_3y']."' ,
`vih_1y` = '".$_REQUEST['vih_1y']."' ,
`vih_2y` = '".$_REQUEST['vih_2y']."' ,
`vih_3y` = '".$_REQUEST['vih_3y']."' ,
`vih_4y` = '".$_REQUEST['vih_4y']."' ,
`vih_5y` = '".$_REQUEST['vih_5y']."' ,
`vih_6y` = '".$_REQUEST['vih_6y']."' ,
`folatos_1y` = '".$_REQUEST['folatos_1y']."' ,
`folatos_2y` = '".$_REQUEST['folatos_2y']."' ,
`hb20_1y` = '".$_REQUEST['hb20_1y']."' ,
`hb20_2y` = '".$_REQUEST['hb20_2y']."' ,
`estreptoc_1y` = '".$_REQUEST['estreptoc_1y']."' ,
`prep_partoy` = '".$_REQUEST['prep_partoy']."' ,
`conse_lacty` = '".$_REQUEST['conse_lacty']."' ,
`chagasy` = '".$_REQUEST['chagasy']."' ,
`plaudismo_1y` = '".$_REQUEST['plaudismo_1y']."' ,
`bacteriu_1y` = '".$_REQUEST['bacteriu_1y']."' ,
`bacteriu_2y` = '".$_REQUEST['bacteriu_2y']."' ,
`bacteriu_3y` = '".$_REQUEST['bacteriu_3y']."' ,
`bacteriu_4y` = '".$_REQUEST['bacteriu_4y']."' ,
`glicemia_1y` = '".$_REQUEST['glicemia_1y']."' ,
`glicemia_2y` = '".$_REQUEST['glicemia_2y']."' ,
`glicemia_3y` = '".$_REQUEST['glicemia_3y']."' ,
`glicemia_4y` = '".$_REQUEST['glicemia_4y']."' ,
`sifilis20_1y` = '".$_REQUEST['sifilis20_1y']."' ,
`sifilis20_2y` = '".$_REQUEST['sifilis20_2y']."' ,
`sifilis20_3y` = '".$_REQUEST['sifilis20_3y']."' ,
`sifilis20_4y` = '".$_REQUEST['sifilis20_4y']."' ,
`sifilis20_5y` = '".$_REQUEST['sifilis20_5y']."' ,
`sifilis20_6y` = '".$_REQUEST['sifilis20_6y']."' ,
`sifilis20_7y` = '".$_REQUEST['sifilis20_7y']."' ,
`sifilis20_8y` = '".$_REQUEST['sifilis20_8y']."' ,
`sifilis20_9y` = '".$_REQUEST['sifilis20_9y']."' ,
`sifilis20_10y` = '".$_REQUEST['sifilis20_10y']."' ,
`sifilis20_11y` = '".$_REQUEST['sifilis20_11y']."' ,
`sifilis20_12y` = '".$_REQUEST['sifilis20_12y']."' ,
`sifilis20mas_1y` = '".$_REQUEST['sifilis20mas_1y']."' ,
`sifilis20mas_2y` = '".$_REQUEST['sifilis20mas_2y']."' ,
`sifilis20mas_3y` = '".$_REQUEST['sifilis20mas_3y']."' ,
`sifilis20mas_4y` = '".$_REQUEST['sifilis20mas_4y']."' ,
`sifilis20mas_5y` = '".$_REQUEST['sifilis20mas_5y']."' ,
`sifilis20mas_6y` = '".$_REQUEST['sifilis20mas_6y']."' ,
`sifilis20mas_7y` = '".$_REQUEST['sifilis20mas_7y']."' ,
`sifilis20mas_8y` = '".$_REQUEST['sifilis20mas_8y']."' ,
`sifilis20mas_9y` = '".$_REQUEST['sifilis20mas_9y']."' ,
`sifilis20mas_10y` = '".$_REQUEST['sifilis20mas_10y']."' ,
`sifilis20mas_11y` = '".$_REQUEST['sifilis20mas_11y']."' ,
`sifilis20mas_12y` = '".$_REQUEST['sifilis20mas_12y']."' ,
`con_ant_1_1y` = '".$_REQUEST['con_ant_1_1y']."' ,
`con_ant_1_2y` = '".$_REQUEST['con_ant_1_2y']."' ,
`con_ant_1_3y` = '".$_REQUEST['con_ant_1_3y']."' ,
`con_ant_1_4y` = '".$_REQUEST['con_ant_1_4y']."' ,
`con_ant_1_5y` = '".$_REQUEST['con_ant_1_5y']."' ,
`con_ant_1_6y` = '".$_REQUEST['con_ant_1_6y']."' ,
`con_ant_1_7y` = '".$_REQUEST['con_ant_1_7y']."' ,
`con_ant_1_8y` = '".$_REQUEST['con_ant_1_8y']."' ,
`con_ant_1_9y` = '".$_REQUEST['con_ant_1_9y']."' ,
`con_ant_1_10y` = '".$_REQUEST['con_ant_1_10y']."' ,
`con_ant_1_11y` = '".$_REQUEST['con_ant_1_11y']."' ,
`con_ant_1_12y` = '".$_REQUEST['con_ant_1_12y']."' ,
`con_ant_2_1y` = '".$_REQUEST['con_ant_2_1y']."' ,
`con_ant_2_2y` = '".$_REQUEST['con_ant_2_2y']."' ,
`con_ant_2_3y` = '".$_REQUEST['con_ant_2_3y']."' ,
`con_ant_2_4y` = '".$_REQUEST['con_ant_2_4y']."' ,
`con_ant_2_5y` = '".$_REQUEST['con_ant_2_5y']."' ,
`con_ant_2_6y` = '".$_REQUEST['con_ant_2_6y']."' ,
`con_ant_2_7y` = '".$_REQUEST['con_ant_2_7y']."' ,
`con_ant_2_8y` = '".$_REQUEST['con_ant_2_8y']."' ,
`con_ant_2_9y` = '".$_REQUEST['con_ant_2_9y']."' ,
`con_ant_2_10y` = '".$_REQUEST['con_ant_2_10y']."' ,
`con_ant_2_11y` = '".$_REQUEST['con_ant_2_11y']."' ,
`con_ant_2_12y` = '".$_REQUEST['con_ant_2_12y']."' ,
`con_ant_3_1y` = '".$_REQUEST['con_ant_3_1y']."' ,
`con_ant_3_2y` = '".$_REQUEST['con_ant_3_2y']."' ,
`con_ant_3_3y` = '".$_REQUEST['con_ant_3_3y']."' ,
`con_ant_3_4y` = '".$_REQUEST['con_ant_3_4y']."' ,
`con_ant_3_5y` = '".$_REQUEST['con_ant_3_5y']."' ,
`con_ant_3_6y` = '".$_REQUEST['con_ant_3_6y']."' ,
`con_ant_3_7y` = '".$_REQUEST['con_ant_3_7y']."' ,
`con_ant_3_8y` = '".$_REQUEST['con_ant_3_8y']."' ,
`con_ant_3_9y` = '".$_REQUEST['con_ant_3_9y']."' ,
`con_ant_3_10y` = '".$_REQUEST['con_ant_3_10y']."' ,
`con_ant_3_11y` = '".$_REQUEST['con_ant_3_11y']."' ,
`con_ant_3_12y` = '".$_REQUEST['con_ant_3_12y']."' ,
`Parto_65y` = '".$_REQUEST['Parto_65y']."' ,
`aborto_65y` = '".$_REQUEST['aborto_65y']."' ,
`fecha_65y` = '".$_REQUEST['fecha_65y']."' ,
`carnet_65y` = '".$_REQUEST['carnet_65y']."' ,
`total_con_prenay` = '".$_REQUEST['total_con_prenay']."' ,
`hops_emb_1y` = '".$_REQUEST['hops_emb_1y']."' ,
`hops_emb_2y` = '".$_REQUEST['hops_emb_2y']."' ,
`corti_1y` = '".$_REQUEST['corti_1y']."' ,
`corti_2y` = '".$_REQUEST['corti_2y']."' ,
`corti_3y` = '".$_REQUEST['corti_3y']."' ,
`corti_4y` = '".$_REQUEST['corti_4y']."' ,
`inicio_1y` = '".$_REQUEST['inicio_1y']."' ,
`inicio_2y` = '".$_REQUEST['inicio_2y']."' ,
`inicio_3y` = '".$_REQUEST['inicio_3y']."' ,
`pre_sit_1y` = '".$_REQUEST['pre_sit_1y']."' ,
`pre_sit_2y` = '".$_REQUEST['pre_sit_2y']."' ,
`pre_sit_3y` = '".$_REQUEST['pre_sit_3y']."' ,
`tama_fetoy` = '".$_REQUEST['tama_fetoy']."' ,
`acompa_1y` = '".$_REQUEST['acompa_1y']."' ,
`acompa_2y` = '".$_REQUEST['acompa_2y']."' ,
`acompa_3y` = '".$_REQUEST['acompa_3y']."' ,
`acompa_4y` = '".$_REQUEST['acompa_4y']."' ,
`acompa_5y` = '".$_REQUEST['acompa_5y']."' ,
`acompa_6y` = '".$_REQUEST['acompa_6y']."' ,
`acompa_7y` = '".$_REQUEST['acompa_7y']."' ,
`acompa_8y` = '".$_REQUEST['acompa_8y']."' ,
`t_parto_1_1y` = '".$_REQUEST['t_parto_1_1y']."' ,
`t_parto_1_2y` = '".$_REQUEST['t_parto_1_2y']."' ,
`t_parto_1_3y` = '".$_REQUEST['t_parto_1_3y']."' ,
`t_parto_1_4y` = '".$_REQUEST['t_parto_1_4y']."' ,
`t_parto_1_5y` = '".$_REQUEST['t_parto_1_5y']."' ,
`t_parto_1_6y` = '".$_REQUEST['t_parto_1_6y']."' ,
`t_parto_1_7y` = '".$_REQUEST['t_parto_1_7y']."' ,
`t_parto_1_8y` = '".$_REQUEST['t_parto_1_8y']."' ,
`t_parto_1_9y` = '".$_REQUEST['t_parto_1_9y']."' ,
`t_parto_1_10y` = '".$_REQUEST['t_parto_1_10y']."' ,
`t_parto_2_1y` = '".$_REQUEST['t_parto_2_1y']."' ,
`t_parto_2_2y` = '".$_REQUEST['t_parto_2_2y']."' ,
`t_parto_2_3y` = '".$_REQUEST['t_parto_2_3y']."' ,
`t_parto_2_4y` = '".$_REQUEST['t_parto_2_4y']."' ,
`t_parto_2_5y` = '".$_REQUEST['t_parto_2_5y']."' ,
`t_parto_2_6y` = '".$_REQUEST['t_parto_2_6y']."' ,
`t_parto_2_7y` = '".$_REQUEST['t_parto_2_7y']."' ,
`t_parto_2_8y` = '".$_REQUEST['t_parto_2_8y']."' ,
`t_parto_2_9y` = '".$_REQUEST['t_parto_2_9y']."' ,
`t_parto_2_10y` = '".$_REQUEST['t_parto_2_10y']."' ,
`t_parto_3_1y` = '".$_REQUEST['t_parto_3_1y']."' ,
`t_parto_3_2y` = '".$_REQUEST['t_parto_3_2y']."' ,
`t_parto_3_3y` = '".$_REQUEST['t_parto_3_3y']."' ,
`t_parto_3_4y` = '".$_REQUEST['t_parto_3_4y']."' ,
`t_parto_3_5y` = '".$_REQUEST['t_parto_3_5y']."' ,
`t_parto_3_6y` = '".$_REQUEST['t_parto_3_6y']."' ,
`t_parto_3_7y` = '".$_REQUEST['t_parto_3_7y']."' ,
`t_parto_3_8y` = '".$_REQUEST['t_parto_3_8y']."' ,
`t_parto_3_9y` = '".$_REQUEST['t_parto_3_9y']."' ,
`t_parto_3_10y` = '".$_REQUEST['t_parto_3_10y']."' ,
`enferme_1y` = '".$_REQUEST['enferme_1y']."' ,
`enferme_2y` = '".$_REQUEST['enferme_2y']."' ,
`enferme_3y` = '".$_REQUEST['enferme_3y']."' ,
`enferme_4y` = '".$_REQUEST['enferme_4y']."' ,
`enferme_5y` = '".$_REQUEST['enferme_5y']."' ,
`enferme_6y` = '".$_REQUEST['enferme_6y']."' ,
`enferme_7y` = '".$_REQUEST['enferme_7y']."' ,
`enferme_8y` = '".$_REQUEST['enferme_8y']."' ,
`enferme_9y` = '".$_REQUEST['enferme_9y']."' ,
`enferme_10y` = '".$_REQUEST['enferme_10y']."' ,
`enferme_11y` = '".$_REQUEST['enferme_11y']."' ,
`enferme_12y` = '".$_REQUEST['enferme_12y']."' ,
`enferme_13y` = '".$_REQUEST['enferme_13y']."' ,
`enferme_14y` = '".$_REQUEST['enferme_14y']."' ,
`enferme_15y` = '".$_REQUEST['enferme_15y']."' ,
`enferme_16y` = '".$_REQUEST['enferme_16y']."' ,
`enferme_17y` = '".$_REQUEST['enferme_17y']."' ,
`enferme_18y` = '".$_REQUEST['enferme_18y']."' ,
`enferme_19y` = '".$_REQUEST['enferme_19y']."' ,
`enferme_20y` = '".$_REQUEST['enferme_20y']."' ,
`enferme_21y` = '".$_REQUEST['enferme_21y']."' ,
`enferme_22y` = '".$_REQUEST['enferme_22y']."' ,
`enferme_23y` = '".$_REQUEST['enferme_23y']."' ,
`enferme_24y` = '".$_REQUEST['enferme_24y']."' ,
`enferme_25y` = '".$_REQUEST['enferme_25y']."' ,
`enferme_26y` = '".$_REQUEST['enferme_26y']."' ,
`enferme_27y` = '".$_REQUEST['enferme_27y']."' ,
`nac2_1y` = '".$_REQUEST['nac2_1y']."' ,
`nac2_2y` = '".$_REQUEST['nac2_2y']."' ,
`nac2_3y` = '".$_REQUEST['nac2_3y']."' ,
`nac2_4y` = '".$_REQUEST['nac2_4y']."' ,
`nac2_5y` = '".$_REQUEST['nac2_5y']."' ,
`nac2_6y` = '".$_REQUEST['nac2_6y']."' ,
`nac2_7y` = '".$_REQUEST['nac2_7y']."' ,
`nac2_8y` = '".$_REQUEST['nac2_8y']."' ,
`nac2_9y` = '".$_REQUEST['nac2_9y']."' ,
`indica_p_1y` = '".$_REQUEST['indica_p_1y']."' ,
`indica_p_2y` = '".$_REQUEST['indica_p_2y']."' ,
`indica_p_3y` = '".$_REQUEST['indica_p_3y']."' ,
`pos_partoy` = '".$_REQUEST['pos_partoy']."' ,
`desgarroy` = '".$_REQUEST['desgarroy']."' ,
`grado14y` = '".$_REQUEST['grado14y']."' ,
`ocitoc_1y` = '".$_REQUEST['ocitoc_1y']."' ,
`ocitoc_2y` = '".$_REQUEST['ocitoc_2y']."' ,
`placenta_1y` = '".$_REQUEST['placenta_1y']."' ,
`placenta2y` = '".$_REQUEST['placenta2y']."' ,
`placenta3y` = '".$_REQUEST['placenta3y']."' ,
`medicacion_1y` = '".$_REQUEST['medicacion_1y']."' ,
`medicacion_2y` = '".$_REQUEST['medicacion_2y']."' ,
`medicacion_3y` = '".$_REQUEST['medicacion_3y']."' ,
`medicacion_4y` = '".$_REQUEST['medicacion_4y']."' ,
`medicacion_5y` = '".$_REQUEST['medicacion_5y']."' ,
`medicacion_6y` = '".$_REQUEST['medicacion_6y']."' ,
`medicacion_7y` = '".$_REQUEST['medicacion_7y']."' ,
`medicacion_8y` = '".$_REQUEST['medicacion_8y']."' ,
`medicacion_9y` = '".$_REQUEST['medicacion_9y']."' ,
`medicacion_10y` = '".$_REQUEST['medicacion_10y']."' ,
`rnacid_1y` = '".$_REQUEST['rnacid_1y']."' ,
`rnacid_2y` = '".$_REQUEST['rnacid_2y']."' ,
`rnacid_3y` = '".$_REQUEST['rnacid_3y']."' ,
`rnacid_4y` = '".$_REQUEST['rnacid_4y']."' ,
`rnacid_5y` = '".$_REQUEST['rnacid_5y']."' ,
`rnacid_6y` = '".$_REQUEST['rnacid_6y']."' ,
`rnacid_7y` = '".$_REQUEST['rnacid_7y']."' ,
`rnacid_8y` = '".$_REQUEST['rnacid_8y']."' ,
`rnacid_9y` = '".$_REQUEST['rnacid_9y']."' ,
`rnacid_10y` = '".$_REQUEST['rnacid_10y']."' ,
`rnacid_11y` = '".$_REQUEST['rnacid_11y']."' ,
`rnacid_12y` = '".$_REQUEST['rnacid_12y']."' ,
`rnacid_13y` = '".$_REQUEST['rnacid_13y']."' ,
`rnacid_14y` = '".$_REQUEST['rnacid_14y']."' ,
`rnacid_15y` = '".$_REQUEST['rnacid_15y']."' ,
`rnacid_16y` = '".$_REQUEST['rnacid_16y']."' ,
`rnacid_18y` = '".$_REQUEST['rnacid_18y']."' ,
`rnacid_19y` = '".$_REQUEST['rnacid_19y']."' ,
`rnacid_20y` = '".$_REQUEST['rnacid_20y']."' ,
`rnacid_21y` = '".$_REQUEST['rnacid_21y']."' ,
`rnacid2_1y` = '".$_REQUEST['rnacid2_1y']."' ,
`rnacid2_2y` = '".$_REQUEST['rnacid2_2y']."' ,
`rnacid2_3y` = '".$_REQUEST['rnacid2_3y']."' ,
`rnacid2_4y` = '".$_REQUEST['rnacid2_4y']."' ,
`rnacid2_5y` = '".$_REQUEST['rnacid2_5y']."' ,
`rnacid2_6y` = '".$_REQUEST['rnacid2_6y']."' ,
`rnacid2_7y` = '".$_REQUEST['rnacid2_7y']."' ,
`rnacid2_8y` = '".$_REQUEST['rnacid2_8y']."' ,
`rnacid2_9y` = '".$_REQUEST['rnacid2_9y']."' ,
`rnacid2_10y` = '".$_REQUEST['rnacid2_10y']."' ,
`rnacid2_11y` = '".$_REQUEST['rnacid2_11y']."' ,
`rnacid2_12y` = '".$_REQUEST['rnacid2_12y']."' ,
`rnacid2_13y` = '".$_REQUEST['rnacid2_13y']."' ,
`rnacid2_14y` = '".$_REQUEST['rnacid2_14y']."' ,
`rnacid2_15y` = '".$_REQUEST['rnacid2_15y']."' ,
`rnacid2_16y` = '".$_REQUEST['rnacid2_16y']."' ,
`rnacid2_17y` = '".$_REQUEST['rnacid2_17y']."' ,
`rnacid2_18y` = '".$_REQUEST['rnacid2_18y']."' ,
`rnacid2_19y` = '".$_REQUEST['rnacid2_19y']."' ,
`rnacid2_20y` = '".$_REQUEST['rnacid2_20y']."' ,
`puerpe_2_1y` = '".$_REQUEST['puerpe_2_1y']."' ,
`puerpe_2_2y` = '".$_REQUEST['puerpe_2_2y']."' ,
`puerpe_2_3y` = '".$_REQUEST['puerpe_2_3y']."' ,
`puerpe_2_4y` = '".$_REQUEST['puerpe_2_4y']."' ,
`puerpe_2_5y` = '".$_REQUEST['puerpe_2_5y']."' ,
`puerpe_2_6y` = '".$_REQUEST['puerpe_2_6y']."' ,
`meconio_1y` = '".$_REQUEST['meconio_1y']."' ,
`rubeo_1y` = '".$_REQUEST['rubeo_1y']."' ,
`rubeo_2y` = '".$_REQUEST['rubeo_2y']."' ,
`yglu65_1y` = '".$_REQUEST['yglu65_1y']."' ,
`yglu65_2y` = '".$_REQUEST['yglu65_2y']."' ,
`antic_1y` = '".$_REQUEST['antic_1y']."' ,
`antica_2y` = '".$_REQUEST['antica_2y']."' ,
`egre_rn_1y` = '".$_REQUEST['egre_rn_1y']."' ,
`egre_rn_2y` = '".$_REQUEST['egre_rn_2y']."' ,
`egre_rn_3y` = '".$_REQUEST['egre_rn_3y']."' ,
`egre_rn_4y` = '".$_REQUEST['egre_rn_4y']."' ,
`egre_rn_5y` = '".$_REQUEST['egre_rn_5y']."' ,
`egre_rn_6y` = '".$_REQUEST['egre_rn_6y']."' ,
`egre_rn_7y` = '".$_REQUEST['egre_rn_7y']."' ,
`egre_rn_8y` = '".$_REQUEST['egre_rn_8y']."' ,
`egre_rn_9y` = '".$_REQUEST['egre_rn_9y']."' ,
`egre_rn_10y` = '".$_REQUEST['egre_rn_10y']."' ,
`egre_rn_11y` = '".$_REQUEST['egre_rn_11y']."' ,
`egre_rn_12y` = '".$_REQUEST['egre_rn_12y']."' ,
`egre_rn_13y` = '".$_REQUEST['egre_rn_13y']."' ,
`egre_rn_14y` = '".$_REQUEST['egre_rn_14y']."' ,
`egre_rn_15y` = '".$_REQUEST['egre_rn_15y']."' ,
`egre_rn_16y` = '".$_REQUEST['egre_rn_16y']."' ,
`egre_rn_17y` = '".$_REQUEST['egre_rn_17y']."' ,
`egre_rn_18y` = '".$_REQUEST['egre_rn_18y']."' ,
`egre_rn_19y` = '".$_REQUEST['egre_rn_19y']."' ,
`egre_rn_20y` = '".$_REQUEST['egre_rn_20y']."' ,
`egre_rn_21y` = '".$_REQUEST['egre_rn_21y']."' ,
`egre_rn_22y` = '".$_REQUEST['egre_rn_22y']."' ,
`egre_rn_23y` = '".$_REQUEST['egre_rn_23y']."' ,
`inicio_2_4y` = '".$_REQUEST['inicio_2_4y']."' ,
`inicio_2_5y` = '".$_REQUEST['inicio_2_5y']."' ,
`inicio_2_6y` = '".$_REQUEST['inicio_2_6y']."' ,
`inicio_2_7y` = '".$_REQUEST['inicio_2_7y']."' ,
`inicio_2_8y` = '".$_REQUEST['inicio_2_8y']."' ,
`inicio_2_9y` = '".$_REQUEST['inicio_2_9y']."' ,
`inicio_2_10` = '".$_REQUEST['inicio_2_10']."' ,
`edad_ges_partp_1y` = '".$_REQUEST['edad_ges_partp_1y']."' ,
`edad_ges_partp_2y` = '".$_REQUEST['edad_ges_partp_2y']."' ,
`edad_ges_partp_3y` = '".$_REQUEST['edad_ges_partp_3y']."' WHERE `id_hc_clap` = '".$_REQUEST['id_hc_clap']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_hc_clap = 'new';
$sql = "SELECT * from hc_clap WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_hc_clap = $row['id_hc_clap'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$gesta_prey = $row['gesta_prey'];
$abortosy = $row['abortosy'];
$vaginalesy = $row['vaginalesy'];
$nac_vivosy = $row['nac_vivosy'];
$viveny = $row['viveny'];
$partos_1y = $row['partos_1y'];
$cesaresa_hdy = $row['cesaresa_hdy'];
$nac_muertosy = $row['nac_muertosy'];
$muertos1semy = $row['muertos1semy'];
$muertos_despuesy = $row['muertos_despuesy'];
$planeadoy = $row['planeadoy'];
$metodo_anty = $row['metodo_anty'];
$fin_embaanteriory = $row['fin_embaanteriory'];
$eptopicoy = $row['eptopicoy'];
$gemelosy = $row['gemelosy'];
$ultimo25y = $row['ultimo25y'];
$normal40y = $row['normal40y'];
$ges_pesoy = $row['ges_pesoy'];
$ges_tallay = $row['ges_tallay'];
$fppy = $row['fppy'];
$ges__fumy = $row['ges__fumy'];
$eg_fumy = $row['eg_fumy'];
$eg_ecoy = $row['eg_ecoy'];
$antirubeola_1y = $row['antirubeola_1y'];
$fum_1_acty = $row['fum_1_acty'];
$fum_1_pasy = $row['fum_1_pasy'];
$fum_1_drogy = $row['fum_1_drogy'];
$fum_1_alcoholy = $row['fum_1_alcoholy'];
$fum_1_violenciay = $row['fum_1_violenciay'];
$fum_2_acty = $row['fum_2_acty'];
$fum_2_pasy = $row['fum_2_pasy'];
$fum_2_drogy = $row['fum_2_drogy'];
$fum_2_alcoholy = $row['fum_2_alcoholy'];
$fum_2_violenciay = $row['fum_2_violenciay'];
$fum_3_acty = $row['fum_3_acty'];
$fum_3_pasy = $row['fum_3_pasy'];
$fum_3_drogy = $row['fum_3_drogy'];
$fum_3_alcoholy = $row['fum_3_alcoholy'];
$fum_3_violenciay = $row['fum_3_violenciay'];
$ex_mamasy = $row['ex_mamasy'];
$ex_odony = $row['ex_odony'];
$tetano1y = $row['tetano1y'];
$tetano2y = $row['tetano2y'];
$tetano3y = $row['tetano3y'];
$cervix_1y = $row['cervix_1y'];
$cervix_2y = $row['cervix_2y'];
$cervix_3y = $row['cervix_3y'];
$rh_grupoy = $row['rh_grupoy'];
$fh_factory = $row['fh_factory'];
$rh_gluboy = $row['rh_gluboy'];
$rh_inmuy = $row['rh_inmuy'];
$toxo_1y = $row['toxo_1y'];
$toxo_2y = $row['toxo_2y'];
$toxo_3y = $row['toxo_3y'];
$vih_1y = $row['vih_1y'];
$vih_2y = $row['vih_2y'];
$vih_3y = $row['vih_3y'];
$vih_4y = $row['vih_4y'];
$vih_5y = $row['vih_5y'];
$vih_6y = $row['vih_6y'];
$folatos_1y = $row['folatos_1y'];
$folatos_2y = $row['folatos_2y'];
$hb20_1y = $row['hb20_1y'];
$hb20_2y = $row['hb20_2y'];
$estreptoc_1y = $row['estreptoc_1y'];
$prep_partoy = $row['prep_partoy'];
$conse_lacty = $row['conse_lacty'];
$chagasy = $row['chagasy'];
$plaudismo_1y = $row['plaudismo_1y'];
$bacteriu_1y = $row['bacteriu_1y'];
$bacteriu_2y = $row['bacteriu_2y'];
$bacteriu_3y = $row['bacteriu_3y'];
$bacteriu_4y = $row['bacteriu_4y'];
$glicemia_1y = $row['glicemia_1y'];
$glicemia_2y = $row['glicemia_2y'];
$glicemia_3y = $row['glicemia_3y'];
$glicemia_4y = $row['glicemia_4y'];
$sifilis20_1y = $row['sifilis20_1y'];
$sifilis20_2y = $row['sifilis20_2y'];
$sifilis20_3y = $row['sifilis20_3y'];
$sifilis20_4y = $row['sifilis20_4y'];
$sifilis20_5y = $row['sifilis20_5y'];
$sifilis20_6y = $row['sifilis20_6y'];
$sifilis20_7y = $row['sifilis20_7y'];
$sifilis20_8y = $row['sifilis20_8y'];
$sifilis20_9y = $row['sifilis20_9y'];
$sifilis20_10y = $row['sifilis20_10y'];
$sifilis20_11y = $row['sifilis20_11y'];
$sifilis20_12y = $row['sifilis20_12y'];
$sifilis20mas_1y = $row['sifilis20mas_1y'];
$sifilis20mas_2y = $row['sifilis20mas_2y'];
$sifilis20mas_3y = $row['sifilis20mas_3y'];
$sifilis20mas_4y = $row['sifilis20mas_4y'];
$sifilis20mas_5y = $row['sifilis20mas_5y'];
$sifilis20mas_6y = $row['sifilis20mas_6y'];
$sifilis20mas_7y = $row['sifilis20mas_7y'];
$sifilis20mas_8y = $row['sifilis20mas_8y'];
$sifilis20mas_9y = $row['sifilis20mas_9y'];
$sifilis20mas_10y = $row['sifilis20mas_10y'];
$sifilis20mas_11y = $row['sifilis20mas_11y'];
$sifilis20mas_12y = $row['sifilis20mas_12y'];
$con_ant_1_1y = $row['con_ant_1_1y'];
$con_ant_1_2y = $row['con_ant_1_2y'];
$con_ant_1_3y = $row['con_ant_1_3y'];
$con_ant_1_4y = $row['con_ant_1_4y'];
$con_ant_1_5y = $row['con_ant_1_5y'];
$con_ant_1_6y = $row['con_ant_1_6y'];
$con_ant_1_7y = $row['con_ant_1_7y'];
$con_ant_1_8y = $row['con_ant_1_8y'];
$con_ant_1_9y = $row['con_ant_1_9y'];
$con_ant_1_10y = $row['con_ant_1_10y'];
$con_ant_1_11y = $row['con_ant_1_11y'];
$con_ant_1_12y = $row['con_ant_1_12y'];
$con_ant_2_1y = $row['con_ant_2_1y'];
$con_ant_2_2y = $row['con_ant_2_2y'];
$con_ant_2_3y = $row['con_ant_2_3y'];
$con_ant_2_4y = $row['con_ant_2_4y'];
$con_ant_2_5y = $row['con_ant_2_5y'];
$con_ant_2_6y = $row['con_ant_2_6y'];
$con_ant_2_7y = $row['con_ant_2_7y'];
$con_ant_2_8y = $row['con_ant_2_8y'];
$con_ant_2_9y = $row['con_ant_2_9y'];
$con_ant_2_10y = $row['con_ant_2_10y'];
$con_ant_2_11y = $row['con_ant_2_11y'];
$con_ant_2_12y = $row['con_ant_2_12y'];
$con_ant_3_1y = $row['con_ant_3_1y'];
$con_ant_3_2y = $row['con_ant_3_2y'];
$con_ant_3_3y = $row['con_ant_3_3y'];
$con_ant_3_4y = $row['con_ant_3_4y'];
$con_ant_3_5y = $row['con_ant_3_5y'];
$con_ant_3_6y = $row['con_ant_3_6y'];
$con_ant_3_7y = $row['con_ant_3_7y'];
$con_ant_3_8y = $row['con_ant_3_8y'];
$con_ant_3_9y = $row['con_ant_3_9y'];
$con_ant_3_10y = $row['con_ant_3_10y'];
$con_ant_3_11y = $row['con_ant_3_11y'];
$con_ant_3_12y = $row['con_ant_3_12y'];
$Parto_65y = $row['Parto_65y'];
$aborto_65y = $row['aborto_65y'];
$fecha_65y = $row['fecha_65y'];
$carnet_65y = $row['carnet_65y'];
$total_con_prenay = $row['total_con_prenay'];
$hops_emb_1y = $row['hops_emb_1y'];
$hops_emb_2y = $row['hops_emb_2y'];
$corti_1y = $row['corti_1y'];
$corti_2y = $row['corti_2y'];
$corti_3y = $row['corti_3y'];
$corti_4y = $row['corti_4y'];
$inicio_1y = $row['inicio_1y'];
$inicio_2y = $row['inicio_2y'];
$inicio_3y = $row['inicio_3y'];
$pre_sit_1y = $row['pre_sit_1y'];
$pre_sit_2y = $row['pre_sit_2y'];
$pre_sit_3y = $row['pre_sit_3y'];
$tama_fetoy = $row['tama_fetoy'];
$acompa_1y = $row['acompa_1y'];
$acompa_2y = $row['acompa_2y'];
$acompa_3y = $row['acompa_3y'];
$acompa_4y = $row['acompa_4y'];
$acompa_5y = $row['acompa_5y'];
$acompa_6y = $row['acompa_6y'];
$acompa_7y = $row['acompa_7y'];
$acompa_8y = $row['acompa_8y'];
$t_parto_1_1y = $row['t_parto_1_1y'];
$t_parto_1_2y = $row['t_parto_1_2y'];
$t_parto_1_3y = $row['t_parto_1_3y'];
$t_parto_1_4y = $row['t_parto_1_4y'];
$t_parto_1_5y = $row['t_parto_1_5y'];
$t_parto_1_6y = $row['t_parto_1_6y'];
$t_parto_1_7y = $row['t_parto_1_7y'];
$t_parto_1_8y = $row['t_parto_1_8y'];
$t_parto_1_9y = $row['t_parto_1_9y'];
$t_parto_1_10y = $row['t_parto_1_10y'];
$t_parto_2_1y = $row['t_parto_2_1y'];
$t_parto_2_2y = $row['t_parto_2_2y'];
$t_parto_2_3y = $row['t_parto_2_3y'];
$t_parto_2_4y = $row['t_parto_2_4y'];
$t_parto_2_5y = $row['t_parto_2_5y'];
$t_parto_2_6y = $row['t_parto_2_6y'];
$t_parto_2_7y = $row['t_parto_2_7y'];
$t_parto_2_8y = $row['t_parto_2_8y'];
$t_parto_2_9y = $row['t_parto_2_9y'];
$t_parto_2_10y = $row['t_parto_2_10y'];
$t_parto_3_1y = $row['t_parto_3_1y'];
$t_parto_3_2y = $row['t_parto_3_2y'];
$t_parto_3_3y = $row['t_parto_3_3y'];
$t_parto_3_4y = $row['t_parto_3_4y'];
$t_parto_3_5y = $row['t_parto_3_5y'];
$t_parto_3_6y = $row['t_parto_3_6y'];
$t_parto_3_7y = $row['t_parto_3_7y'];
$t_parto_3_8y = $row['t_parto_3_8y'];
$t_parto_3_9y = $row['t_parto_3_9y'];
$t_parto_3_10y = $row['t_parto_3_10y'];
$enferme_1y = $row['enferme_1y'];
$enferme_2y = $row['enferme_2y'];
$enferme_3y = $row['enferme_3y'];
$enferme_4y = $row['enferme_4y'];
$enferme_5y = $row['enferme_5y'];
$enferme_6y = $row['enferme_6y'];
$enferme_7y = $row['enferme_7y'];
$enferme_8y = $row['enferme_8y'];
$enferme_9y = $row['enferme_9y'];
$enferme_10y = $row['enferme_10y'];
$enferme_11y = $row['enferme_11y'];
$enferme_12y = $row['enferme_12y'];
$enferme_13y = $row['enferme_13y'];
$enferme_14y = $row['enferme_14y'];
$enferme_15y = $row['enferme_15y'];
$enferme_16y = $row['enferme_16y'];
$enferme_17y = $row['enferme_17y'];
$enferme_18y = $row['enferme_18y'];
$enferme_19y = $row['enferme_19y'];
$enferme_20y = $row['enferme_20y'];
$enferme_21y = $row['enferme_21y'];
$enferme_22y = $row['enferme_22y'];
$enferme_23y = $row['enferme_23y'];
$enferme_24y = $row['enferme_24y'];
$enferme_25y = $row['enferme_25y'];
$enferme_26y = $row['enferme_26y'];
$enferme_27y = $row['enferme_27y'];
$nac2_1y = $row['nac2_1y'];
$nac2_2y = $row['nac2_2y'];
$nac2_3y = $row['nac2_3y'];
$nac2_4y = $row['nac2_4y'];
$nac2_5y = $row['nac2_5y'];
$nac2_6y = $row['nac2_6y'];
$nac2_7y = $row['nac2_7y'];
$nac2_8y = $row['nac2_8y'];
$nac2_9y = $row['nac2_9y'];
$indica_p_1y = $row['indica_p_1y'];
$indica_p_2y = $row['indica_p_2y'];
$indica_p_3y = $row['indica_p_3y'];
$pos_partoy = $row['pos_partoy'];
$desgarroy = $row['desgarroy'];
$grado14y = $row['grado14y'];
$ocitoc_1y = $row['ocitoc_1y'];
$ocitoc_2y = $row['ocitoc_2y'];
$placenta_1y = $row['placenta_1y'];
$placenta2y = $row['placenta2y'];
$placenta3y = $row['placenta3y'];
$medicacion_1y = $row['medicacion_1y'];
$medicacion_2y = $row['medicacion_2y'];
$medicacion_3y = $row['medicacion_3y'];
$medicacion_4y = $row['medicacion_4y'];
$medicacion_5y = $row['medicacion_5y'];
$medicacion_6y = $row['medicacion_6y'];
$medicacion_7y = $row['medicacion_7y'];
$medicacion_8y = $row['medicacion_8y'];
$medicacion_9y = $row['medicacion_9y'];
$medicacion_10y = $row['medicacion_10y'];
$rnacid_1y = $row['rnacid_1y'];
$rnacid_2y = $row['rnacid_2y'];
$rnacid_3y = $row['rnacid_3y'];
$rnacid_4y = $row['rnacid_4y'];
$rnacid_5y = $row['rnacid_5y'];
$rnacid_6y = $row['rnacid_6y'];
$rnacid_7y = $row['rnacid_7y'];
$rnacid_8y = $row['rnacid_8y'];
$rnacid_9y = $row['rnacid_9y'];
$rnacid_10y = $row['rnacid_10y'];
$rnacid_11y = $row['rnacid_11y'];
$rnacid_12y = $row['rnacid_12y'];
$rnacid_13y = $row['rnacid_13y'];
$rnacid_14y = $row['rnacid_14y'];
$rnacid_15y = $row['rnacid_15y'];
$rnacid_16y = $row['rnacid_16y'];
$rnacid_18y = $row['rnacid_18y'];
$rnacid_19y = $row['rnacid_19y'];
$rnacid_20y = $row['rnacid_20y'];
$rnacid_21y = $row['rnacid_21y'];
$rnacid2_1y = $row['rnacid2_1y'];
$rnacid2_2y = $row['rnacid2_2y'];
$rnacid2_3y = $row['rnacid2_3y'];
$rnacid2_4y = $row['rnacid2_4y'];
$rnacid2_5y = $row['rnacid2_5y'];
$rnacid2_6y = $row['rnacid2_6y'];
$rnacid2_7y = $row['rnacid2_7y'];
$rnacid2_8y = $row['rnacid2_8y'];
$rnacid2_9y = $row['rnacid2_9y'];
$rnacid2_10y = $row['rnacid2_10y'];
$rnacid2_11y = $row['rnacid2_11y'];
$rnacid2_12y = $row['rnacid2_12y'];
$rnacid2_13y = $row['rnacid2_13y'];
$rnacid2_14y = $row['rnacid2_14y'];
$rnacid2_15y = $row['rnacid2_15y'];
$rnacid2_16y = $row['rnacid2_16y'];
$rnacid2_17y = $row['rnacid2_17y'];
$rnacid2_18y = $row['rnacid2_18y'];
$rnacid2_19y = $row['rnacid2_19y'];
$rnacid2_20y = $row['rnacid2_20y'];
$puerpe_2_1y = $row['puerpe_2_1y'];
$puerpe_2_2y = $row['puerpe_2_2y'];
$puerpe_2_3y = $row['puerpe_2_3y'];
$puerpe_2_4y = $row['puerpe_2_4y'];
$puerpe_2_5y = $row['puerpe_2_5y'];
$puerpe_2_6y = $row['puerpe_2_6y'];
$meconio_1y = $row['meconio_1y'];
$rubeo_1y = $row['rubeo_1y'];
$rubeo_2y = $row['rubeo_2y'];
$yglu65_1y = $row['yglu65_1y'];
$yglu65_2y = $row['yglu65_2y'];
$antic_1y = $row['antic_1y'];
$antica_2y = $row['antica_2y'];
$egre_rn_1y = $row['egre_rn_1y'];
$egre_rn_2y = $row['egre_rn_2y'];
$egre_rn_3y = $row['egre_rn_3y'];
$egre_rn_4y = $row['egre_rn_4y'];
$egre_rn_5y = $row['egre_rn_5y'];
$egre_rn_6y = $row['egre_rn_6y'];
$egre_rn_7y = $row['egre_rn_7y'];
$egre_rn_8y = $row['egre_rn_8y'];
$egre_rn_9y = $row['egre_rn_9y'];
$egre_rn_10y = $row['egre_rn_10y'];
$egre_rn_11y = $row['egre_rn_11y'];
$egre_rn_12y = $row['egre_rn_12y'];
$egre_rn_13y = $row['egre_rn_13y'];
$egre_rn_14y = $row['egre_rn_14y'];
$egre_rn_15y = $row['egre_rn_15y'];
$egre_rn_16y = $row['egre_rn_16y'];
$egre_rn_17y = $row['egre_rn_17y'];
$egre_rn_18y = $row['egre_rn_18y'];
$egre_rn_19y = $row['egre_rn_19y'];
$egre_rn_20y = $row['egre_rn_20y'];
$egre_rn_21y = $row['egre_rn_21y'];
$egre_rn_22y = $row['egre_rn_22y'];
$egre_rn_23y = $row['egre_rn_23y'];
$inicio_2_4y = $row['inicio_2_4y'];
$inicio_2_5y = $row['inicio_2_5y'];
$inicio_2_6y = $row['inicio_2_6y'];
$inicio_2_7y = $row['inicio_2_7y'];
$inicio_2_8y = $row['inicio_2_8y'];
$inicio_2_9y = $row['inicio_2_9y'];
$inicio_2_10 = $row['inicio_2_10'];
$edad_ges_partp_1y = $row['edad_ges_partp_1y'];
$edad_ges_partp_2y = $row['edad_ges_partp_2y'];
$edad_ges_partp_3y = $row['edad_ges_partp_3y'];
break; }

?>
<script>

$(function(){

$("#close-hc_clap").click(function(){
$("#open-hc_clap").show();
$(this).hide();
$("#content-hc_clap").hide('slow');
});

$("#open-hc_clap").click(function(){
$("#close-hc_clap").show();
$(this).hide();
$("#content-hc_clap").show('slow');
});

});

</script>
<fieldset id="hc_clap">
<legend align="left"> <div class="arrow-c" id="close-hc_clap"></div> <div class="arrow-o" id="open-hc_clap" ></div> 
HISTORIA CLINICA MATERNO-PERINATAL-CLAP-OPS/OMS
<div id="content-hc_clap">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_clap" id="guardar_hc_clap" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
    
    <style type="text/css">


input {
    border: 1px solid #848484;
    padding: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    /*color: #0B2F3A;*/
    max-width: 30px;
    min-width: 10px;
    text-transform: uppercase;
}

</style>
<form id="form_hc_clap" name="form_hc_clap" action="<?php echo @$action_form_hc_clap ?>#hc_clap" method="post">

<input type="hidden" id="id_hc_clap" name="id_hc_clap" value="<?php echo @$id_hc_clap ?>" />


<input type="hidden" class="input_txt valid" id="id_hc_clap" name="id_hc_clap" value="<?php echo @$id_hc_clap; ?>" />

<p align="left">HISTORIA CLINICA MATERNO-PERINATAL-CLAP-OPS/OMS</p>

<table border="1" align="center" cellpadding="0" cellspacing="0">

  <tr "19">
    <td width="168" rowspan="7" "171" "407">ANTECEDENTES </td>
    <td colspan="8" "824">OBSTETRICOS</td>
  </tr>
  <tr "19">
    <td width="168" "19" "824">Gestas previas</td>
    <td width="168" "215">Abortos</td>
    <td width="168" "224">Vaginales</td>
    <td width="168" "477">Nacidos    vivos</td>
    <td width="168" "237">Viven</td>
    <td "236" colspan="2">Partos</td>
    <td width="200" "110">Cesareas</td>
  </tr>
  <tr "19">
    <td "19" "824"><input type="text"  class="input_box" id="gesta_prey" name="gesta_prey" value="<?php echo @$gesta_prey; ?>" /></td>
    <td "215"><input type="text" class="" style="background-color:#FFFF00" id="abortosy" name="abortosy" value="<?php echo @$abortosy; ?>" /></td>
    <td "224"><input type="text" class="" id="vaginalesy" name="vaginalesy" value="<?php echo @$vaginalesy; ?>" /></td>
    <td "477"><input type="text" class="" id="nac_vivosy" name="nac_vivosy" value="<?php echo @$nac_vivosy; ?>" /></td>
    <td "237"><input type="text" class="" id="viveny" name="viveny" value="<?php echo @$viveny; ?>" /></td>
    <td "236" colspan="2"><input type="text" class="" id="partos_1y" name="partos_1y" value="<?php echo @$partos_1y; ?>" /></td>
    <td "110"><input type="text" class="" id="cesaresa_hdy" name="cesaresa_hdy" style="background-color:#FFFF00" value="<?php echo @$cesaresa_hdy; ?>" /></td>
  </tr>
  <tr "38">
    <td "38" "824">Nacidos muertos</td>
    <td "215">Muertos    1 semana</td>
    <td "224">Despues    1 semana</td>
    <td "477">Embarazo    planeado</td>
    <td "237">Fracaso    metodo anticonceptivo</td>
    <td "236" colspan="2">Fin    embarazo Anterior</td>
    <td "110">Embarazo    Eptopico</td>
  </tr>
  <tr "19">
    <td "19" "824"><input type="text" class="" id="nac_muertosy" style="background-color:#FFFF00" name="nac_muertosy" value="<?php echo @$nac_muertosy; ?>" /></td>
    <td "215"><input type="text" class="" style="background-color:#FFFF00" id="muertos1semy" name="muertos1semy" value="<?php echo @$muertos1semy; ?>" /></td>
    <td "224"><input type="text" class="" id="muertos_despuesy"style="background-color:#FFFF00" name="muertos_despuesy" value="<?php echo @$muertos_despuesy; ?>" /></td>
    <td "477">NO
      <input name="planeadoy" type="text" style="background-color:#FFFF00" class="" id="planeadoy" value="<?php echo @$planeadoy; ?>" />
    <br>SI
    <input type="text" class="" id="bacteriu_4y" name="bacteriu_4y" value="<?php echo @$bacteriu_4y; ?>" /></td>
    <td "237"><input type="text" class="" id="metodo_anty" style="background-color:#FFFF00" name="metodo_anty" value="<?php echo @$metodo_anty; ?>" /></td>
    <td "236" colspan="2"><input type="text" class="" id="fin_embaanteriory" name="fin_embaanteriory" value="<?php echo @$fin_embaanteriory; ?>" /></td>
    <td "110"><input type="text" class="" id="eptopicoy" name="eptopicoy" value="<?php echo @$eptopicoy; ?>" /></td>
  </tr>
  <tr "38">
    <td "38" "824">Antecedentes gemelares</td>
    <td "215">Ultimo    previo&lt;2500gr </td>
    <td "224">Normal    4000gr</td>
    <td colspan="5" rowspan="2" "477">&nbsp;</td>
  </tr>
  <tr "19">
    <td "19" "824"><input type="text" class="" id="gemelosy" name="gemelosy" value="<?php echo @$gemelosy; ?>" /></td>
    <td "215"><input type="text" class="" id="ultimo25y" name="ultimo25y" value="<?php echo @$ultimo25y; ?>" /></td>
    <td "224"><input type="text" class="" id="normal40y" name="normal40y" value="<?php echo @$normal40y; ?>" /></td>
  </tr>
  <tr "19">
    <td colspan="2" "19" "407">GESTACION ACTUAL</td>
    <td "215">FPP</td>
    <td "224">FUM</td>
    <td colspan="2" "477">EG    CONFIABLE por</td>
    <td colspan="3" "236">Antirubeola(previa, no sabe, embarazo, no    tiene)</td>
  </tr>
  <tr "19">
    <td "19" "407">Peso</td>
    <td "824">Talla</td>
    <td "215" rowspan="2"><input type="text" class="input_txt valid" id="fppy" name="fppy" value="<?php echo @$fppy; ?>" /></td>
    <td "224" rowspan="2"><input type="text" class="input_txt valid" id="ges__fumy" name="ges__fumy" value="<?php echo @$ges__fumy; ?>" /></td>
    <td "477">FUM</td>
    <td "237">ECO    &lt; 20s</td>
    <td colspan="3" rowspan="2" "236"><input name="antirubeola_1y" type="text" id="antirubeola_1y" value="<?php echo @$antirubeola_1y; ?>" size="30" /></td>
  </tr>
  <tr "20">
    <td "20" "407"><input name="ges_pesoy" type="text" class="input_txt valid" id="ges_pesoy" value="<?php echo @$ges_pesoy; ?>"  /></td>
    <td "824"><input type="text" class="input_txt valid" id="ges_tallay" name="ges_tallay" value="<?php echo @$ges_tallay; ?>" /></td>
    <td "477">SI
      NO
      <input type="text" class="" id="eg_fumy" name="eg_fumy" style="background-color:#FFFF00" value="<?php echo @$eg_fumy; ?>" /></td>
    <td "237">SI NO
      <input type="text" class="" id="eg_ecoy" name="eg_ecoy" value="<?php echo @$eg_ecoy; ?>" style="background-color:#FFFF00" /></td>
  </tr>
  <tr "19">
    <td "407" rowspan="3">FUMADOR</td>
    <td "824" "19">ACT</td>
    <td "215">PAS</td>
    <td "224">DROGAS</td>
    <td "477">ALCOHOL</td>
    <td "237">VIOLENCIA</td>
    <td "236" colspan="2" rowspan="4">EX NORMAL(si/no)</td>
    <td "110">Mamas</td>
  </tr>
  <tr "19">
    <td "824" "19">NO
    <input type="text" class="" id="fum_1_acty" name="fum_1_acty" value="<?php echo @$fum_1_acty; ?>" /></td>
    <td "215">NO
      <input type="text" class="" id="fum_1_pasy" name="fum_1_pasy" value="<?php echo @$fum_1_pasy; ?>" /></td>
    <td "224">NO
    <input type="text" class="" id="fum_1_drog" name="fum_1_drog" value="<?php echo @$fum_1_drogy; ?>" /></td>
    <td "477">NO
    <input type="text" class="" id="fum_1_alcoholy" name="fum_1_alcoholy" value="<?php echo @$fum_1_alcoholy; ?>" /></td>
    <td "237">NO
      <input type="text" class="" id="fum_1_violenciay" name="fum_1_violenciay" value="<?php echo @$fum_1_violenciay; ?>" /></td>
    <td "110">SI
      <input type="text" class="" id="ex_mamasy" name="ex_mamasy" value="<?php echo @$ex_mamasy; ?>" />
    NO
    <input type="text" class="" id="glicemia_3y" name="glicemia_3y" value="<?php echo @$glicemia_3y; ?>" style="background-color:#FFFF00"/></td>
  </tr>
  <tr "19">
    <td "824" "19">SI
    <input type="text" class="" id="fum_2_acty" name="fum_2_acty" style="background-color:#FFFF00" value="<?php echo @$fum_2_acty; ?>" /></td>
    <td "215">SI
    <input type="text" class="" id="fum_2_pasy" name="fum_2_pasy" style="background-color:#FFFF00" value="<?php echo @$fum_2_pasy; ?>" /></td>
    <td "224">SI
    <input type="text" class="" id="fum_2_drogy" name="fum_2_drogy" style="background-color:#FFFF00" value="<?php echo @$fum_2_drogy; ?>" /></td>
    <td "477">SI
      <input type="text" class="" id="fum_2_alcoholy" name="fum_2_alcoholy" style="background-color:#FFFF00" value="<?php echo @$fum_2_alcoholy; ?>" /></td>
    <td "237">SI
      <input type="text" class="" id="fum_2_violenciay" name="fum_2_violenciay" style="background-color:#FFFF00" value="<?php echo @$fum_2_violenciay; ?>" /></td>
    <td "110">Odont.</td>
  </tr>
  <tr "20">
    <td "20" "407">CITOLOGIA</td>
    <td "824">SI
      <input type="text" class="" id="fum_3_acty" name="fum_3_acty" value="<?php echo @$fum_3_acty; ?>" />
      <br>NO
      <input type="text" class="" id="fum_3_pasy" name="fum_3_pasy" style="background-color:#FFFF00" value="<?php echo @$fum_3_pasy; ?>" /></td>
    <td "215">COLPOSCOPIA</td>
    <td "224">SI
      <input type="text" class="" id="fum_3_drogy" name="fum_3_drogy" value="<?php echo @$fum_3_drogy; ?>" />
   <br> NO
    <input type="text" class="" id="fum_3_alcohol" name="fum_3_alcohol" style="background-color:#FFFF00" value="<?php echo @$fum_3_alcohol; ?>" /></td>
    <td "477">&nbsp;</td>
    <td "237">&nbsp;</td>
    <td "110">SI
      <input type="text" class="" id="ex_odony" name="ex_odony" value="<?php echo @$ex_odony; ?>" />
    NO
    <input type="text" class="" id="glicemia_1y" name="glicemia_1y" value="<?php echo @$glicemia_1y; ?>" style="background-color:#FFFF00"/></td>
  </tr>
  <tr "19">
    <td colspan="3" "19" "407">ANTITETANICA</td>
    <td colspan="2" "224">CERVIX(Normal, anormal, no se hizo)</td>
    <td "237">Factor    RH</td>
    <td "236" colspan="2">Grupo</td>
    <td "110"><input type="text" class="" id="rh_grupoy" name="rh_grupoy" value="<?php echo @$rh_grupoy; ?>" /></td>
  </tr>
  <tr "19">
    <td "19" "407">Vigente</td>
    <td colspan="2" "824"><input type="text" class="" id="tetano1y" name="tetano1y" value="<?php echo @$tetano1y; ?>" /></td>
    <td "224">Ins    Visual</td>
    <td "477"><input type="text" class="" id="cervix_1y" name="cervix_1y" value="<?php echo @$cervix_1y; ?>" /></td>
    <td "237">positivo/negativo</td>
    <td "236" colspan="2">yglubina    anti D</td>
    <td "110">Inmuniz</td>
  </tr>
  <tr "19">
    <td rowspan="2" "39" "407">Mes gestacion</td>
    <td "824">Dosis    1</td>
    <td "215"><input type="text" class="" id="tetano2y" name="tetano2y" value="<?php echo @$tetano2y; ?>" /></td>
    <td "224">PAP</td>
    <td "477"><input type="text" class="" id="cervix_3" name="cervix_3" value="<?php echo @$cervix_3; ?>" />
    <input type="text" class="" id="cervix_2y" name="cervix_2y" value="<?php echo @$cervix_2y; ?>" /></td>
    <td rowspan="2" "237"><input type="text" class="" id="fh_factory" name="fh_factory" value="<?php echo @$fh_factory; ?>" /></td>
    <td "236" colspan="2" rowspan="2"><input type="text" class="" id="rh_gluboy" name="rh_gluboy" value="<?php echo @$rh_gluboy; ?>" /></td>
    <td rowspan="2" "110"><input type="text" class="" id="rh_inmuy" name="rh_inmuy" value="<?php echo @$rh_inmuy; ?>" /></td>
  </tr>
  <tr "20">
    <td "20" "824">Dosis 2</td>
    <td "215"><input type="text" class="" id="tetano3y" name="tetano3y" value="<?php echo @$tetano3y; ?>" /></td>
    <td "224">COLP</td>
    <td "477">&nbsp;</td>
  </tr>
  <tr "19">
    <td colspan="3" "19" "407">Ag SHB</td>
    <td colspan="2" "224">VIH</td>
    <td colspan="3" "237">&nbsp;</td>
    <td "110">Hb &lt;20 sem</td>
  </tr>
  <tr "19">
    <td "19" "407">SI
    <input type="text" class="" id="toxo_1y" name="toxo_1y" value="<?php echo @$toxo_1y; ?>" /></td>
    <td colspan="2" "824">&nbsp;</td>
    <td "224">SI</td>
    <td "477">NO</td>
    <td "237">Hb.20 sem</td>
    <td "236" colspan="2">&lt;11.Og</td>
    <td "110"><input type="text" class="" id="vih_5y" name="vih_5y" value="<?php echo @$vih_5y; ?>" /></td>
  </tr>
  <tr "19">
    <td "19" "407">NO
    <input type="text" class="" id="toxo_2y" style="background-color:#FFFF00" name="toxo_2y" value="<?php echo @$toxo_2y; ?>" /></td>
    <td colspan="2" "824">&nbsp;</td>
    <td rowspan="2" "224"><input type="text" class="" id="vih_1y" name="vih_1y" value="<?php echo @$vih_1y; ?>" /></td>
    <td rowspan="2" "477"><input type="text" class="" id="vih_2y" name="vih_2y" style="background-color:#FFFF00" value="<?php echo @$vih_2y; ?>" /></td>
    <td rowspan="2" "237"><input type="text" class="" id="vih_3y" name="vih_3y" value="<?php echo @$vih_3y; ?>" /></td>
    <td "236" colspan="2" rowspan="2"><input type="text" class="" id="vih_4y" name="vih_4y" value="<?php echo @$vih_4y; ?>" style="background-color:#FFFF00"/></td>
    <td "110">&lt;11,0 g/dl</td>
  </tr>
  <tr "20">
    <td "20" "407">&nbsp;</td>
    <td colspan="2" "824">&nbsp;</td>
    <td "110"><input type="text" class="" id="vih_6y" name="vih_6y" value="<?php echo @$vih_6y; ?>" style="background-color:#FFFF00"/></td>
  </tr>
  <tr "19">
    <td colspan="4" "19">TES OSULLIVAN</td>
    <td colspan="2" "477">&nbsp;</td>
    <td colspan="3" "236">VDRL/RPR .20 SEM</td>
  </tr>
  <tr "20">
    <td "20" "407">&lt;135</td>
    <td "824"><p>135-199</p>
    <p>&gt;</p></td>
    <td "215">&gt;=200</td>
    <td "224">NO SE HIZO</td>
    <td "477" rowspan="2">CONSEJERIA</td>
    <td "237">SI
      <input type="text" class="" id="estreptoc_1y" name="estreptoc_1y" value="<?php echo @$estreptoc_1y; ?>" /></td>
    <td colspan="3" "236">-
      <input type="text" class="" id="conse_lacty" name="conse_lacty" value="<?php echo @$conse_lactyy; ?>" /><br>
      +
      <input type="text" class="" id="toxo_3y" name="toxo_3y" value="<?php echo @$toxo_3y; ?>" style="background-color:#FFFF00"/>
      <br>NO
      <input type="text" class="" id="chagasy" name="chagasy" value="<?php echo @$chagasy; ?>" style="background-color:#FFFF00"/></td>
  </tr>
  <tr "39">
    <td ><input type="text" class="" id="folatos_1y" name="folatos_1y" value="<?php echo @$folatos_1y; ?>" /></td>
    <td "824"><input type="text" class="" id="folatos_2y" style="background-color:#FFFF00" name="folatos_2y" value="<?php echo @$folatos_2y; ?>" /></td>
    <td "215"><input type="text" class="" id="hb20_1y" style="background-color:#FFFF00" name="hb20_1y" value="<?php echo @$hb20_1y; ?>" /></td>
    <td "224"><input type="text" class="" id="hb20_2y" style="background-color:#FFFF00" name="hb20_2y" value="<?php echo @$hb20_2y; ?>" /></td>
    <td "237">NO
    <input type="text" class="" id="prep_partoy" name="prep_partoy" style="background-color:#FFFF00" value="<?php echo @$prep_partoy; ?>" /></td>
    <td >VDRL/RPR &lt;20 SEM</td>
    <td >-<input type="text" class="" id="plaudismo_1y" name="plaudismo_1y" value="<?php echo @$plaudismo_1y; ?>" />
      <br>+<input type="text" class="" id="bacteriu_1y" name="bacteriu_1y" style="background-color:#FFFF00" value="<?php echo @$bacteriu_1y; ?>" /><br>NO<input type="text" class="" id="bacteriu_3y" name="bacteriu_3y" style="background-color:#FFFF00" value="<?php echo @$bacteriu_3y; ?>" /></td>
    <td "110">TOTAL CONSULTAS
    PRENATALES  <input type="text" class="" id="glicemia_2y" name="glicemia_2y" value="<?php echo @$glicemia_2y; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <tr "19">
    <td rowspan="2" "38" "154">SIFILIS CONFIRMADA POR FTA</td>
    <td "210">NO SE HIZO
    <input type="text" class="" id="bacteriu_2y" name="bacteriu_2y" value="<?php echo @$bacteriu_2y; ?>" /></td>
  </tr>
  <tr "19">
    <td "19" "210">SI
      <input type="text" class="" id="sifilis20_3y" name="sifilis20_3y" value="<?php echo @$sifilis20_3y; ?>" />
NO
<input type="text" class="" id="sifilis20_2y" name="sifilis20_2y" value="<?php echo @$sifilis20_2y; ?>" /></td>
  </tr>
</table>
<p>&nbsp;	</p>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">


  <tr "58">
    <td rowspan="4" "116" "154">CONSULTAS ANTENATALES</td>
    <td "132">Fecha</td>
    <td "121">Edad Ges</td>
    <td "94">Peso</td>
    <td "130">PA</td>
    <td "111">Altura</td>
    <td "126">Presentacion</td>
    <td "110">FCF(lpm)</td>
    <td "131">Mov Fetales</td>
    <td "120">Porteinuria</td>
    <td "140">Signos de    alarma,Examexamenes,trat.</td>
    <td "83">Iniciales tecnico</td>
    <td "83">Prox Cita</td>
  </tr>
  <tr "19">
    <td "19" "132"><input type="text" class="input_txt valid" id="con_ant_1_1y" name="con_ant_1_1y" value="<?php echo @$con_ant_1_1y; ?>" /></td>
    <td "121"><input type="text" class="" id="con_ant_1_2y" name="con_ant_1_2y" value="<?php echo @$con_ant_1_2y; ?>" /></td>
    <td "94"><input type="text" class="input_txt valid" id="con_ant_1_3" name="con_ant_1_3" value="<?php echo @$con_ant_1_3y; ?>" /></td>
    <td "130"><input type="text" class="" id="con_ant_1_4y" name="con_ant_1_4y" value="<?php echo @$con_ant_1_4y; ?>" /></td>
    <td "111"><input type="text" class="" id="con_ant_1_5y" name="con_ant_1_5y" value="<?php echo @$con_ant_1_5y; ?>" /></td>
    <td "126"><input type="text" class="" id="con_ant_1_6y" name="con_ant_1_6y" value="<?php echo @$con_ant_1_6y; ?>" /></td>
    <td "110"><input type="text" class="" id="con_ant_1_7y" name="con_ant_1_7y" value="<?php echo @$con_ant_1_7y; ?>" /></td>
    <td "131"><input type="text" class="" id="con_ant_1_8y" name="con_ant_1_8y" value="<?php echo @$con_ant_1_8y; ?>" /></td>
    <td "120"><input type="text" class="" id="con_ant_1_9y" name="con_ant_1_9y" value="<?php echo @$con_ant_1_9y; ?>" /></td>
    <td "140"><input type="text" class="" id="con_ant_1_10y" name="con_ant_1_10y" value="<?php echo @$con_ant_1_10y; ?>" /></td>
    <td "83"><input type="text" class="" id="con_ant_1_11y" name="con_ant_1_11y" value="<?php echo @$con_ant_1_11y; ?>" /></td>
    <td "83"><input type="text" class="input_txt valid" id="con_ant_1_12y" name="con_ant_1_12y" value="<?php echo @$con_ant_1_12y; ?>" /></td>
  </tr>
  <tr "19">
    <td "19" "132"><input type="text" class="input_txt valid" id="con_ant_2_1y" name="con_ant_2_1y" value="<?php echo @$con_ant_2_1y; ?>" /></td>
    <td "121"><input type="text" class="" id="con_ant_2_2y" name="con_ant_2_2y" value="<?php echo @$con_ant_2_2y; ?>" /></td>
    <td "94"><input type="text" class="input_txt valid" id="con_ant_2_3y" name="con_ant_2_3y" value="<?php echo @$con_ant_2_3y; ?>" /></td>
    <td "130"><input type="text" class="" id="con_ant_2_4y" name="con_ant_2_4y" value="<?php echo @$con_ant_2_4y; ?>" /></td>
    <td "111"><input type="text" class="" id="con_ant_2_5y" name="con_ant_2_5y" value="<?php echo @$con_ant_2_5y; ?>" /></td>
    <td "126"><input type="text" class="" id="con_ant_2_6y" name="con_ant_2_6y" value="<?php echo @$con_ant_2_6y; ?>" /></td>
    <td "110"><input type="text" class="" id="con_ant_2_7y" name="con_ant_2_7y" value="<?php echo @$con_ant_2_7y; ?>" /></td>
    <td "131"><input type="text" class="" id="con_ant_2_8y" name="con_ant_2_8y" value="<?php echo @$con_ant_2_8y; ?>" /></td>
    <td "120"><input type="text" class="" id="con_ant_2_9y" name="con_ant_2_9y" value="<?php echo @$con_ant_2_9y; ?>" /></td>
    <td "140"><input type="text" class="" id="con_ant_2_10y" name="con_ant_2_10y" value="<?php echo @$con_ant_2_10y; ?>" /></td>
    <td "83"><input type="text" class="" id="con_ant_2_11y" name="con_ant_2_11y" value="<?php echo @$con_ant_2_11y; ?>" /></td>
    <td "83"><input type="text" class="input_txt valid" id="con_ant_2_12y" name="con_ant_2_12y" value="<?php echo @$con_ant_2_12y; ?>" /></td>
  </tr>
  <tr "20">
    <td "20" "132"><input type="text" class="input_txt valid" id="con_ant_3_1y" name="con_ant_3_1y" value="<?php echo @$con_ant_3_1y; ?>" /></td>
    <td "121"><input type="text" class="" id="con_ant_3_2y" name="con_ant_3_2y" value="<?php echo @$con_ant_3_2y; ?>" /></td>
    <td "94"><input type="text" class="input_txt valid" id="con_ant_3_3y" name="con_ant_3_3y" value="<?php echo @$con_ant_3_3y; ?>" /></td>
    <td "130"><input type="text" class="" id="con_ant_3_4y" name="con_ant_3_4y" value="<?php echo @$con_ant_3_4y; ?>" /></td>
    <td "111"><input type="text" class="" id="con_ant_3_5y" name="con_ant_3_5y" value="<?php echo @$con_ant_3_5y; ?>" /></td>
    <td "126"><input type="text" class="" id="con_ant_3_6y" name="con_ant_3_6y" value="<?php echo @$con_ant_3_6y; ?>" /></td>
    <td "110"><input type="text" class="" id="con_ant_3_7y" name="con_ant_3_7y" value="<?php echo @$con_ant_3_7y; ?>" /></td>
    <td "131"><input type="text" class="" id="con_ant_3_8y" name="con_ant_3_8y" value="<?php echo @$con_ant_3_8y; ?>" /></td>
    <td "120"><input type="text" class="" id="con_ant_3_9y" name="con_ant_3_9y" value="<?php echo @$con_ant_3_9y; ?>" /></td>
    <td "140"><input type="text" class="" id="con_ant_3_10y" name="con_ant_3_10y" value="<?php echo @$con_ant_3_10y; ?>" /></td>
    <td "83"><input type="text" class="" id="con_ant_3_11y" name="con_ant_3_11y" value="<?php echo @$con_ant_3_11y; ?>" /></td>
    <td "83"><input type="text" class="input_txt valid" id="con_ant_3_12y" name="con_ant_3_12y" value="<?php echo @$con_ant_3_12y; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">

  <tr "38">
    <td colspan="2" rowspan="2">Parto/Aborto</td>
    <td "121" "38">Carnet</td>
    <td rowspan="2" "94">Total Cosultas    Prenatales</td>
    <td colspan="2" "241">Hosp. Embarazo</td>
    <td colspan="4" "487">Corticoides antenatales</td>
  </tr>
  <tr "38">
    <td rowspan="2" "121">SI
      <input type="text" class="" id="carnet_65y" name="carnet_65y" value="<?php echo @$carnet_65y; ?>" />
    NO
    <input type="text" class="" id="aborto_65y" name="aborto_65y" value="<?php echo @$aborto_65y; ?>" style="background-color:#FFFF00"/></td>
    <td "38" colspan="2">SI
      <input type="text" class="" id="hops_emb_1y" name="hops_emb_1y" value="<?php echo @$hops_emb_1y; ?>" />
      NO
    <input type="text" class="" id="sifilis20mas_1y" style="background-color:#FFFF00" name="sifilis20mas_1y" value="<?php echo @$sifilis20mas_1y; ?>" /></td>
    <td "487">Complemento/incomplemento</td>
    <td "110">Ninguna</td>
    <td "131">Multiple</td>
    <td "120">semana    inicio</td>
  </tr>
  <tr "20">
    <td "20" "154">Fecha Ingreso</td>
    <td "132"><input type="text" class="" id="fecha_65y" name="fecha_65y" value="<?php echo @$fecha_65y; ?>" /></td>
    <td "94"><input type="text" class="" id="total_con_prenay" name="total_con_prenay" value="<?php echo @$total_con_prenay; ?>" /></td>
    <td "241">N° dias</td>
    <td "111"><input type="text" class="" id="hops_emb_2y" name="hops_emb_2y" value="<?php echo @$hops_emb_2y; ?>" /></td>
    <td "487"><input type="text" class="" id="corti_1y" style="background-color:#FFFF00" name="corti_1y" value="<?php echo @$corti_1y; ?>" /></td>
    <td "110"><input type="text" class="" id="corti_2y" name="corti_2y" style="background-color:#FFFF00" value="<?php echo @$corti_2y; ?>" /></td>
    <td "131"><input type="text" class="" id="corti_3y" style="background-color:#FFFF00"name="corti_3y" value="<?php echo @$corti_3y; ?>" /></td>
    <td "120"><input type="text" class="" id="corti_4y" name="corti_4y" value="<?php echo @$corti_4y; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">

  <tr "19">
    <td colspan="3" "19" "407">INICIO</td>
    <td colspan="9" "822">Rotura de membrana anteparto</td>
  </tr>
  <tr "19">
    <td "19" "154">Espontaneo</td>
    <td "132">Inducido</td>
    <td "121">Cesar.    Elec</td>
    <td "94">Integras</td>
    <td "130">fecha</td>
    <td "111">hora</td>
    <td "126">&lt;37    Sem</td>
    <td "110">-12    hr</td>
    <td "131">rotas</td>
    <td "120">T    &gt;=38°C</td>
    <td "120">horas entre rupturay parto</td>
    <td "120">semana de ruptura</td>
  </tr>
  <tr "20">
    <td "20" "154"><input type="text" class="" id="inicio_1y" name="inicio_1y" value="<?php echo @$inicio_1y; ?>" /></td>
    <td "132"><input type="text" style="background-color:#FFFF00" class="" id="inicio_2y" name="inicio_2y" value="<?php echo @$inicio_2y; ?>" /></td>
    <td "121"><input type="text" class="" style="background-color:#FFFF00" id="inicio_3y" name="inicio_3y" value="<?php echo @$inicio_3y; ?>" /></td>
    <td "94"><input type="text" class="" id="inicio_2_4y" name="inicio_2_4y" value="<?php echo @$inicio_2_4y; ?>" /></td>
    <td "130"><input type="text" class="" id="inicio_2_5y" name="inicio_2_5y" value="<?php echo @$inicio_2_5y; ?>" /></td>
    <td "111"><input type="text" class="" id="inicio_2_6y" name="inicio_2_6y" value="<?php echo @$inicio_2_6y; ?>" /></td>
    <td "126"><input type="text" class="" id="inicio_2_7y" style="background-color:#FFFF00"name="inicio_2_7y" value="<?php echo @$inicio_2_7y; ?>" /></td>
    <td "110"><input type="text" class="" id="inicio_2_8y" name="inicio_2_8y"style="background-color:#FFFF00" value="<?php echo @$inicio_2_8y; ?>" /></td>
    <td "131"><input type="text" class="" id="inicio_2_9y" name="inicio_2_9y" value="<?php echo @$inicio_2_9y; ?>" style="background-color:#FFFF00"/></td>
    <td "120"><input type="text" class="" id="inicio_2_10y" name="inicio_2_10y" value="<?php echo @$inicio_2_10y; ?>" style="background-color:#FFFF00"/></td>
    <td "120"><input type="text" class="" id="sifilis20mas_12y" name="sifilis20mas_12y" value="<?php echo @$sifilis20mas_12y; ?>" /></td>
    <td "120"><input type="text" class="" id="sifilis20mas_9y" name="sifilis20mas_9y" value="<?php echo @$sifilis20mas_9y; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">

  <tr "19">
    <td colspan="3" "19" "407">EDAD GES al parto</td>
    <td colspan="3" "335">Presentacion Situacion</td>
    <td colspan="2" "236">Tamaño Fetal Acorde</td>
  </tr>
  <tr "19">
    <td "19" "154">Semanas y dias</td>
    <td "132">Por    FUM</td>
    <td "121">Por    ECO</td>
    <td "94">Cefalica</td>
    <td "130">Pelvica</td>
    <td "111">Transversa</td>
    <td rowspan="2" "126">si /no</td>
    <td rowspan="2" "110"><input type="text" class="" id="tama_fetoy" name="tama_fetoy" value="<?php echo @$tama_fetoy; ?>" /></td>
  </tr>
  <tr "20">
    <td "20" "154"><input type="text" class="" id="edad_ges_partp_1y" name="edad_ges_partp_1y" value="<?php echo @$edad_ges_partp_1y; ?>" /></td>
    <td "132"><input type="text" class="" id="edad_ges_partp_2y" name="edad_ges_partp_2y" value="<?php echo @$edad_ges_partp_2y; ?>" /></td>
    <td "121"><input type="text" class="" id="edad_ges_partp_3y" name="edad_ges_partp_3y" value="<?php echo @$edad_ges_partp_3y; ?>" /></td>
    <td "94"><input type="text" class="" id="pre_sit_1y" name="pre_sit_1y" value="<?php echo @$pre_sit_1y; ?>" /></td>
    <td "130"><input type="text" class="" id="pre_sit_2y" style="background-color:#FFFF00" name="pre_sit_2y" value="<?php echo @$pre_sit_2y; ?>" /></td>
    <td "111"><input type="text" class="" id="pre_sit_3y" name="pre_sit_3y" style="background-color:#FFFF00"value="<?php echo @$pre_sit_3y; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">

  <tr "19">
    <td "19" "154">Acompañante TDP </td>
    <td "132">Pareja</td>
    <td "121">Familiar</td>
    <td "94">Otro</td>
    <td "130">Ninguno</td>
  </tr>
  <tr "19">
    <td "19" "154">&nbsp;</td>
    <td "132"><input type="text" class="" id="acompa_3y" name="acompa_3y" value="<?php echo @$acompa_3y; ?>" /></td>
    <td "121"><input type="text" class="" id="acompa_2y" name="acompa_2y" value="<?php echo @$acompa_2y; ?>" /></td>
    <td "94"><input type="text" class="" id="acompa_1y" name="acompa_1y" value="<?php echo @$acompa_1y; ?>" /></td>
    <td "130"><input type="text" class="" id="acompa_4y" name="acompa_4y" value="<?php echo @$acompa_4y; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table "" border="1" align="center" cellpadding="0" cellspacing="0">

  <tr "77">
    <td rowspan="2" "" "">NACIMIENTO</td>
    <td "">Vivo</td>
    <td "">Muerto anteparto</td>
    <td "">Parto</td>
    <td "">Ignora momento</td>
    <td "">Hora</td>
    <td "">Fecha</td>
    <td "">Multiple</td>
    <td "">Orden</td>
  </tr>
  <tr "">
    <td "" ""><input  type="text" class="" id="nac2_1y" name="nac2_1y" value="<?php echo @$nac2_1y; ?>" /></td>
    <td ""><input type="text" style="background-color:#FFFF00"class="" id="nac2_2y" name="nac2_2y" value="<?php echo @$nac2_2y; ?>" /></td>
    <td ""><input type="text" style="background-color:#FFFF00"class="" id="nac2_3y" name="nac2_3y" value="<?php echo @$nac2_3y; ?>" /></td>
    <td ""><input type="text"style="background-color:#FFFF00" class="" id="nac2_4y" name="nac2_4y" value="<?php echo @$nac2_4y; ?>" /></td>
    <td ""><input type="text" class="" id="nac2_5y" name="nac2_5y" value="<?php echo @$nac2_5y; ?>" /></td>
    <td ""><input type="text" class="" id="nac2_6y" name="nac2_6y" value="<?php echo @$nac2_6y; ?>" /></td>
    <td ""><input type="text" class="" id="nac2_7y" name="nac2_7y" value="<?php echo @$nac2_7y; ?>" /></td>
    <td ""><input type="text" class="" id="nac2_8y" name="nac2_8y" value="<?php echo @$nac2_8y; ?>" /></td>
  </tr>
  <tr "">
    <td "">Terminacion</td>
    <td "">Espontanea</td>
    <td><input type="text" class="" id="sifilis20_4y" name="sifilis20_4y" value="<?php echo @$sifilis20_4y; ?>" /></td>
    <td>cesarea</td>
    <td><input type="text" style="background-color:#FFFF00"class="" id="sifilis20_5y" name="sifilis20_5y" value="<?php echo @$sifilis20_5y; ?>" /></td>
    <td>forceps</td>
    <td><input type="text" style="background-color:#FFFF00" class="" id="sifilis20_6y" name="sifilis20_6y" value="<?php echo @$sifilis20_6y; ?>" /></td>
    <td>espatula</td>
    <td><input type="text" style="background-color:#FFFF00" class="" id="nac2_9y" name="nac2_9y" value="<?php echo @$nac2_9y; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">

  <tr "">
    <td colspan="3" "" "">Indicacion    Principal de Induccion o parto operatorio</td>
    <td "">INDUC</td>
    <td "">OPER</td>
  </tr>
  <tr "">
    <td colspan="3" "" ""><input type="text" class="input_txt valid" id="indica_p_1y" name="indica_p_1y" value="<?php echo @$indica_p_1y; ?>" /></td>
    <td ""><input type="text" class="input_txt valid" id="indica_p_2y" name="indica_p_2y" value="<?php echo @$indica_p_2y; ?>" /></td>
    <td ""><input type="text" class="input_txt valid" id="indica_p_3y" name="indica_p_3y" value="<?php echo @$indica_p_3y; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">

  <tr "58">
    <td "58" "154">POSICION    PARTO</td>
    <td "132">sentada
    <input type="text" class="" id="sifilis20_10y" name="sifilis20_10y" value="<?php echo @$sifilis20_10y; ?>" />
    cunclillas
    <input type="text" class="" id="sifilis20_11y" name="sifilis20_11y" value="<?php echo @$sifilis20_11y; ?>" />
    acostada
    <input type="text" class="" id="sifilis20_12y" style="background-color:#FFFF00" name="sifilis20_12y" value="<?php echo @$sifilis20_12y; ?>" /></td>
    <td "121">Desgarros</td>
    <td "121">NO
      <input type="text" class="" id="grado14y" name="grado14y" value="<?php echo @$grado14y; ?>" />
    grado 1 a 4
    <input type="text" class="" id="desgarroy" name="desgarroy" value="<?php echo @$desgarroy; ?>" /></td>
    <td rowspan="2" "130">Ociocitos (s/n)</td>
    <td "111">Prealumbr</td>
    <td "126"><input type="text" class="" id="ocitoc_1y" name="ocitoc_1y" value="<?php echo @$ocitoc_1y; ?>" /></td>
    <td rowspan="2" "110">Placenta </td>
    <td "131">Completa</td>
    <td "120">si
      <input type="text" class="" id="placenta_1y" name="placenta_1y" value="<?php echo @$placenta_1y; ?>" />
      no
      <input type="text" class="" id="sifilis20_7y" name="sifilis20_7y" value="<?php echo @$sifilis20_7y; ?>" style="background-color:#FFFF00" /></td>
    <td "140">Ligadura    cordon(S/N)</td>
  </tr>
  <tr "19">
    <td "19" "154">Episiotomia </td>
    <td "132">si
      <input type="text" class="" id="pos_partoy" style="background-color:#FFFF00"name="pos_partoy" value="<?php echo @$pos_partoy; ?>" />
    no
    <input type="text" class="" id="glicemia_4y" name="glicemia_4y" value="<?php echo @$glicemia_4y; ?>" /></td>
    <td "121">&nbsp;</td>
    <td "94">&nbsp;</td>
    <td "111">posprealumbr</td>
    <td "126"><input type="text" class="" id="ocitoc_2y" name="ocitoc_2y" value="<?php echo @$ocitoc_2y; ?>" /></td>
    <td "131">Retenida</td>
    <td "120">si
      <input type="text" class="" id="placenta2y" name="placenta2y" value="<?php echo @$placenta2y; ?>" style="background-color:#FFFF00" />
      no
      <input type="text" class="" id="sifilis20_8y" name="sifilis20_8y" value="<?php echo @$sifilis20_8y; ?>" /></td>
    <td "140"><input type="text" class="" id="placenta3y" name="placenta3y" value="<?php echo @$placenta3y; ?>" /></td>
  </tr>
  <tr "19">
    <td rowspan="2" "39" "154">Medicacion Recibida(S/N)</td>
    <td "132">Ocitocitos    en TDP</td>
    <td "121">Antibiot</td>
    <td "94">Analgesia</td>
    <td "130">Anest.    Local</td>
    <td "111">Anest:    regional</td>
    <td "126">Anest.    Gral</td>
    <td "110">Translusion</td>
    <td "131">Otros    (Cual)</td>
    <td "120">Medico</td>
    <td "140">Codigo del profesional</td>
  </tr>
  <tr "20">
    <td "20" "132">si
      <input type="text" class="" id="medicacion_1y" name="medicacion_1y" value="<?php echo @$medicacion_1y; ?>" />
      no
      <input type="text" class="" id="sifilis20mas_2y" name="sifilis20mas_2y" value="<?php echo @$sifilis20mas_2y; ?>" /></td>
    <td "121">si
      <input type="text" class="" id="medicacion_2y" name="medicacion_2y" value="<?php echo @$medicacion_2y; ?>" />
      no
      <input type="text" class="" id="sifilis20_9y" name="sifilis20_9y" value="<?php echo @$sifilis20_9y; ?>" /></td>
    <td "94">si
      <input type="text" class="" id="medicacion_3y" name="medicacion_3y" value="<?php echo @$medicacion_3y; ?>" />
      no
      <input type="text" class="" id="sifilis20mas_4y" name="sifilis20mas_4y" value="<?php echo @$sifilis20mas_4y; ?>" /></td>
    <td "130">si
      <input type="text" class="" id="medicacion_4y" name="medicacion_4y" value="<?php echo @$medicacion_4y; ?>" />
    no
    <input type="text" class="" id="sifilis20mas_7y" name="sifilis20mas_7y" value="<?php echo @$sifilis20mas_7y; ?>" /></td>
    <td "111">si
      <input type="text" class="" id="medicacion_5y" name="medicacion_5y" value="<?php echo @$medicacion_5y; ?>" />
      no
      <input type="text" class="" id="sifilis20mas_10y" name="sifilis20mas_10y" value="<?php echo @$sifilis20mas_10y; ?>" /></td>
    <td "126">si
      <input type="text" class="" id="medicacion_6y" name="medicacion_6y" value="<?php echo @$medicacion_6y; ?>" />
      no
      <input type="text" class="" id="sifilis20mas_11y" name="sifilis20mas_11y" value="<?php echo @$sifilis20mas_11y; ?>" /></td>
    <td "110">si
      <input type="text" class="" id="medicacion_7y" name="medicacion_7y" value="<?php echo @$medicacion_7y; ?>" />
      no
      <input type="text" class="" id="sifilis20mas_8y" name="sifilis20mas_8y" value="<?php echo @$sifilis20mas_8y; ?>" /></td>
    <td "131"><input type="text" class="input_txt valid" id="medicacion_8y" name="medicacion_8y" value="<?php echo @$medicacion_8y; ?>" /></td>
    <td "120"><input type="text" class="input_txt valid" id="medicacion_9y" name="medicacion_9y" value="<?php echo @$medicacion_9y; ?>" /></td>
    <td "140"><input type="text" class="input_txt valid" id="medicacion_10y" name="medicacion_10y" value="<?php echo @$medicacion_10y; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>d</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">

  <tr "19">
    <td colspan="9" "19">Enfermedades(s/n)</td>
    <td "176">&nbsp;</td>
  </tr>
  <tr "19">
    <td "154" rowspan="3">1 o mas</td>
    <td "208" rowspan="2">no</td>
    <td "208" rowspan="2">si</td>
    <td "19">&nbsp;</td>
    <td>no</td>
    <td>si</td>
    <td>&nbsp;</td>
    <td "176" rowspan="2">no</td>
    <td "176" rowspan="2">si</td>
    <td>&nbsp;</td>
  </tr>
  <tr "19">
    <td "89" "19">Infec    Ovular</td>
    <td "176"><input type="text" class=" valid" id="t_parto_1_2y" name="t_parto_1_2y" value="<?php echo @$t_parto_1_2y; ?>" /></td>
    <td "176"><input type="text" class="" id="enferme_9y"style="background-color:#FFFF00" name="enferme_9y" value="<?php echo @$enferme_9y; ?>" /></td>
    <td "130">Hemorragia</td>
    <td "176">Codigo</td>
  </tr>
  <tr "19">
    <td "208" "19"><input type="text" class="" id="sifilis20_1y" name="sifilis20_1y" value="<?php echo @$sifilis20_1y; ?>" /></td>
    <td "208"><input type="text" class="" id="enferme_2y" style="background-color:#FFFF00"name="enferme_2y" value="<?php echo @$enferme_2y; ?>" /></td>
    <td "89">Infec    Urinaria</td>
    <td "176"><input type="text" class=" valid" id="t_parto_3_4y" name="t_parto_3_4y" value="<?php echo @$t_parto_3_4y; ?>" /></td>
    <td "176"><input type="text" class="" id="enferme_10y" name="enferme_10y" value="<?php echo @$enferme_10y; ?>" style="background-color:#FFFF00" /></td>
    <td "130">1er    trim</td>
    <td "176"><input type="text" class=" valid" id="t_parto_1_6y" name="t_parto_1_6y" value="<?php echo @$t_parto_1_6y; ?>" /></td>
    <td "176"><input type="text" class="" style="background-color:#FFFF00"id="enferme_17y" name="enferme_17y" value="<?php echo @$enferme_17y; ?>" /></td>
    <td "176"><input type="text" style="background-color:#FFFF00"class="input_txt valid" id="enferme_18y" name="enferme_18y" value="<?php echo @$enferme_18y; ?>" /></td>
  </tr>
  <tr "38">
    <td "38" "154">HTA Previa</td>
    <td "208"><input type="text" class="" id="enferme_1y" name="enferme_1y" value="<?php echo @$enferme_1y; ?>" /></td>
    <td "208"><input type="text" class="" id="enferme_3y"style="background-color:#FFFF00" name="enferme_3y" value="<?php echo @$enferme_3y; ?>" /></td>
    <td "89">Amenaza    parto preter</td>
    <td "176"><input type="text" class=" valid" id="t_parto_2_2y" name="t_parto_2_2y" value="<?php echo @$t_parto_2_2y; ?>" /></td>
    <td "176"><input type="text" class="" id="enferme_11y" style="background-color:#FFFF00"name="enferme_11y" value="<?php echo @$enferme_11y; ?>" /></td>
    <td "130">2do    trim</td>
    <td "176"><input type="text" class=" valid" id="t_parto_2_6y" name="t_parto_2_6y" value="<?php echo @$t_parto_2_6y; ?>" /></td>
    <td "176"><input type="text" style="background-color:#FFFF00" class="" id="enferme_19y" name="enferme_19y" value="<?php echo @$enferme_19y; ?>" /></td>
    <td "176"><input type="text" class="input_txt valid" style="background-color:#FFFF00" id="enferme_20y" name="enferme_20y" value="<?php echo @$enferme_20y; ?>" /></td>
  </tr>
  <tr "19">
    <td "19" "154">HTA inducida embarazo</td>
    <td "208"><input type="text" class="" id="sifilis20mas_3y" name="sifilis20mas_3y" value="<?php echo @$sifilis20mas_3y; ?>" /></td>
    <td "208"><input type="text" class="" id="enferme_4y" name="enferme_4y"style="background-color:#FFFF00" value="<?php echo @$enferme_4y; ?>" /></td>
    <td "89">R.C.I.U</td>
    <td "176"><input type="text" class=" valid" id="t_parto_1_3y" name="t_parto_1_3y" value="<?php echo @$t_parto_1_3y; ?>" /></td>
    <td "176"><input type="text" class="" id="enferme_12y"style="background-color:#FFFF00" name="enferme_12y" value="<?php echo @$enferme_12y; ?>" /></td>
    <td "130">3er    trim</td>
    <td "176"><input type="text" class=" valid" id="t_parto_2_5y" name="t_parto_2_5y" value="<?php echo @$t_parto_2_5y; ?>" /></td>
    <td "176"><input type="text" class="" id="enferme_21y" style="background-color:#FFFF00"name="enferme_21y" value="<?php echo @$enferme_21y; ?>" /></td>
    <td "176"><input type="text" class="input_txt valid" id="enferme_22y" style="background-color:#FFFF00"name="enferme_22y" value="<?php echo @$enferme_22y; ?>" /></td>
  </tr>
  <tr "38">
    <td "38" "154">Preeclamsia</td>
    <td "208"><input type="text" class="" id="sifilis20mas_5y" name="sifilis20mas_5y" value="<?php echo @$sifilis20mas_5y; ?>" /></td>
    <td "208"><input type="text" style="background-color:#FFFF00"class="" id="enferme_5" name="enferme_5" value="<?php echo @$enferme_5y; ?>" /></td>
    <td "89">Rotura    prem de membranas</td>
    <td "176"><input type="text" class=" valid" id="t_parto_2_3y" name="t_parto_2_3y" value="<?php echo @$t_parto_2_3y; ?>" /></td>
    <td "176"><input type="text" class="" style="background-color:#FFFF00" id="enferme_13y" name="enferme_13y" value="<?php echo @$enferme_13y; ?>" /></td>
    <td "130">Posparto</td>
    <td "176"><input type="text" class=" valid" id="t_parto_3_5y" name="t_parto_3_5y" value="<?php echo @$t_parto_3_5y; ?>" /></td>
    <td "176"><input type="text" class="" id="enferme_23y" name="enferme_23y" value="<?php echo @$enferme_23y; ?>" /></td>
    <td "176"><input type="text" class="" id="enferme_24y" name="enferme_24y" value="<?php echo @$enferme_24y; ?>" /></td>
  </tr>
  <tr "19">
    <td "19" "154">Ecalamcia</td>
    <td "208"><input type="text" class="" id="sifilis20mas_6y" name="sifilis20mas_6y" value="<?php echo @$sifilis20mas_6y; ?>" /></td>
    <td "208"><input type="text" style="background-color:#FFFF00"class="" id="enferme_6y" name="enferme_6y" value="<?php echo @$enferme_6y; ?>" /></td>
    <td "89">Anemia</td>
    <td "176"><input type="text" class=" valid" id="t_parto_1_4y" name="t_parto_1_4y" value="<?php echo @$t_parto_1_4y; ?>" /></td>
    <td "176"><input type="text" class="" style="background-color:#FFFF00" id="enferme_14y" name="enferme_14y" value="<?php echo @$enferme_14y; ?>" /></td>
    <td "130">Infec    puerperal</td>
    <td "176"><input type="text" class=" valid" id="t_parto_1_7y" name="t_parto_1_7y" value="<?php echo @$t_parto_1_7y; ?>" /></td>
    <td "176"><input type="text" class="" id="enferme_25y" name="enferme_25y" value="<?php echo @$enferme_25y; ?>" /></td>
    <td "176"><input type="text" class="" id="enferme_26" name="enferme_26" value="<?php echo @$enferme_26y; ?>" /></td>
  </tr>
  <tr "19">
    <td "19" "154">Cardiopatia</td>
    <td "208"><input type="text" class=" valid" id="t_parto_1_1y" name="t_parto_1_1y" value="<?php echo @$t_parto_1_1y; ?>" /></td>
    <td "208"><input type="text"style="background-color:#FFFF00" class="" id="enferme_7y" name="enferme_7y" value="<?php echo @$enferme_7y; ?>" /></td>
    <td "89">Otra    con Grave</td>
    <td "176"><input type="text" class=" valid" id="t_parto_2_4y" name="t_parto_2_4y" value="<?php echo @$t_parto_2_4y; ?>" /></td>
    <td "176"><input type="text" class="" style="background-color:#FFFF00"id="enferme_15y" name="enferme_15y" value="<?php echo @$enferme_15y; ?>" /></td>
    <td rowspan="2" "130">Notas</td>
    <td colspan="3" rowspan="2"><input type="text" class="input_txt valid" id="enferme_27y" name="enferme_27y" value="<?php echo @$enferme_27y; ?>" /></td>
  </tr>
  <tr "20">
    <td "20" "154">Nefropatia</td>
    <td "208"><input type="text" class=" valid" id="t_parto_2_1y" name="t_parto_2_1y" value="<?php echo @$t_parto_2_1y; ?>" /></td>
    <td "208"><input type="text" style="background-color:#FFFF00"class="" id="enferme_8y" name="enferme_8y" value="<?php echo @$enferme_8y; ?>" /></td>
    <td "89">Diabetes</td>
    <td "176"><input type="text" class=" valid" id="t_parto_1_5y" name="t_parto_1_5y" value="<?php echo @$t_parto_1_5y; ?>" /></td>
    <td "176"><input type="text" class="" id="enferme_16y" style="background-color:#FFFF00"name="enferme_16y" value="<?php echo @$enferme_16y; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">

  <tr "19">
    <td rowspan="11" "252" "154">RECIEN NACIDO</td>
    <td "132">Sexo</td>
    <td "121">Peso</td>
    <td "94">P.cafalico cm</td>
    <td "130">Longitud cm</td>
    <td rowspan="2" "738">Edad Ges</td>
    <td "236">semanas y dias</td>
    <td "501">Estimada</td>
    <td "391">FUM</td>
    <td "260">ECO</td>
    <td "140">Peso (Adec,    peq, gde)</td>
  </tr>
  <tr "20">
    <td "20" "132"><input type="text" class="" id="rnacid_1y" name="rnacid_1y" value="<?php echo @$rnacid_1y; ?>" /></td>
    <td "121"><input type="text" class="" id="rnacid_2y" name="rnacid_2y" value="<?php echo @$rnacid_2y; ?>" /></td>
    <td "94"><input type="text" class="" id="rnacid_3y" name="rnacid_3y" value="<?php echo @$rnacid_3y; ?>" /></td>
    <td "130"><input type="text" class="" id="rnacid_4y" name="rnacid_4y" value="<?php echo @$rnacid_4y; ?>" /></td>
    <td "236"><input type="text" class="" id="rnacid_5y" name="rnacid_5y" value="<?php echo @$rnacid_5y; ?>" /></td>
    <td "501"><input type="text" class="" id="rnacid_6y" name="rnacid_6y" value="<?php echo @$rnacid_6y; ?>" /></td>
    <td "391"><input type="text" class="" id="rnacid_7y" name="rnacid_7y" value="<?php echo @$rnacid_7y; ?>" /></td>
    <td "260"><input type="text" class="" id="rnacid_8y" name="rnacid_8y" value="<?php echo @$rnacid_8y; ?>" /></td>
    <td "140"><input type="text" class="" id="rnacid_9y" name="rnacid_9y" value="<?php echo @$rnacid_9y; ?>" /></td>
  </tr>
  <tr "38">
    <td "38" "132">APGAR(min) 1ro</td>
    <td "121">APGAR(min) 5to</td>
    <td rowspan="2" "94">Reanimacion</td>
    <td "130">Estimulac</td>
    <td "738">Aspiracion</td>
    <td "236">Mascara</td>
    <td "501">Oxigeno</td>
    <td "391">Masaje</td>
    <td "260">Tubo</td>
    <td "140">Fallece lugar    de parto(S/N)</td>
  </tr>
  <tr "20">
    <td "20" "132"><input type="text" class="" id="rnacid_10y" name="rnacid_10y" value="<?php echo @$rnacid_10y; ?>" /></td>
    <td "121"><input type="text" class="" id="rnacid_11y" name="rnacid_11y" value="<?php echo @$rnacid_11y; ?>" /></td>
    <td "130"><input type="text" class="" id="rnacid_12y" name="rnacid_12y" value="<?php echo @$rnacid_12y; ?>" /></td>
    <td "738"><input type="text" class="" id="rnacid_13y" name="rnacid_13y" value="<?php echo @$rnacid_13y; ?>" /></td>
    <td "236"><input type="text" class="" id="rnacid_14y" name="rnacid_14y" value="<?php echo @$rnacid_14y; ?>" /></td>
    <td "501"><input type="text" class="" id="rnacid_15y" name="rnacid_15y" value="<?php echo @$rnacid_15y; ?>" /></td>
    <td "391"><input type="text" class="" id="rnacid_16y" name="rnacid_16y" value="<?php echo @$rnacid_16y; ?>" /></td>
    <td "260"><input type="text" class="" id="rnacid_18y" name="rnacid_18y" value="<?php echo @$rnacid_18y; ?>" /></td>
    <td "140"><input type="text" class="" id="rnacid_19y" name="rnacid_19y" value="<?php echo @$rnacid_19y; ?>" /></td>
  </tr>
  <tr "19">
    <td rowspan="2" "39" "132">Referido</td>
    <td "121">Aloj.    corj</td>
    <td "94">Negra. Tolog</td>
    <td "130">otro hosp.</td>
    <td colspan="6" rowspan="2" "738"></td>
  </tr>
  <tr "20">
    <td "20" "121"><input type="text" class="" id="rnacid_20y" name="rnacid_20y" value="<?php echo @$rnacid_20y; ?>" /></td>
    <td "94"><input type="text" class="" id="rnacid_21y" name="rnacid_21y" value="<?php echo @$rnacid_21y; ?>" /></td>
    <td "130"><input type="text" class="" id="rnacid2_1y" name="rnacid2_1y" value="<?php echo @$rnacid2_1y; ?>" /></td>
  </tr>
  <tr "19">
    <td rowspan="2" "39" "132">ATENDIO</td>
    <td "121">medico</td>
    <td "94">obst</td>
    <td "130">enf</td>
    <td "738">auxil</td>
    <td "236">estud</td>
    <td "501">empir</td>
    <td "391">otro</td>
    <td colspan="2" "260">nombre</td>
  </tr>
  <tr "20">
    <td "20" "121"><input type="text" class="" id="rnacid2_2y" name="rnacid2_2y" value="<?php echo @$rnacid2_2y; ?>" /></td>
    <td "94"><input type="text" class="" id="rnacid2_3y" name="rnacid2_3y" value="<?php echo @$rnacid2_3y; ?>" /></td>
    <td "130"><input type="text" class="" id="rnacid2_4y" name="rnacid2_4y" value="<?php echo @$rnacid2_4y; ?>" /></td>
    <td "738"><input type="text" class="" id="rnacid2_5y" name="rnacid2_5y" value="<?php echo @$rnacid2_5y; ?>" /></td>
    <td "236"><input type="text" class="" id="rnacid2_6y" name="rnacid2_6y" value="<?php echo @$rnacid2_6y; ?>" /></td>
    <td "501"><input type="text" class="" id="rnacid2_7y" name="rnacid2_7y" value="<?php echo @$rnacid2_7y; ?>" /></td>
    <td "391"><input type="text" class="" id="rnacid2_8y" name="rnacid2_8y" value="<?php echo @$rnacid2_8y; ?>" /></td>
    <td colspan="2" "260"><input type="text" class="" id="rnacid2_9y" name="rnacid2_9y" value="<?php echo @$rnacid2_9y; ?>" /></td>
  </tr>
  <tr "19">
    <td rowspan="3" "77" "132">Defectos congenitos</td>
    <td "121">no/menor/mayor</td>
    <td "94">codigo</td>
    <td rowspan="3" "130">Enfermedades</td>
    <td "738">Ninguna/1    ó mas</td>
    <td "236">codigo</td>
    <td colspan="4" "501">Tamizaje neonatal</td>
  </tr>
  <tr "38">
    <td rowspan="2" "58" "121"><input style="background-color:#FFFF00" type="text" class="" id="rnacid2_10y" name="rnacid2_10y" value="<?php echo @$rnacid2_10y; ?>" /></td>
    <td rowspan="2" "94"><input type="text" class="" id="rnacid2_11y" name="rnacid2_11y" value="<?php echo @$rnacid2_11y; ?>" /></td>
    <td rowspan="2" "738"><input type="text" class="" id="rnacid2_12y" name="rnacid2_12y" value="<?php echo @$rnacid2_12y; ?>" /></td>
    <td rowspan="2" "236"><input type="text" class="" id="rnacid2_13y" name="rnacid2_13y" value="<?php echo @$rnacid2_13y; ?>" /></td>
    <td "501">VDRL    (Pos, Neg, No hizo)</td>
    <td "391">Tto    (s/n)</td>
    <td "260">Tto n/c</td>
    <td "140">Tto s/d</td>
  </tr>
  <tr "20">
    <td "20" "501"><input type="text" class="" id="rnacid2_14y" name="rnacid2_14y" value="<?php echo @$rnacid2_14y; ?>" /></td>
    <td "391"><input type="text" class="" id="rnacid2_15y" name="rnacid2_15y" value="<?php echo @$rnacid2_15y; ?>" /></td>
    <td "260"><input type="text" class="" id="rnacid2_16y" name="rnacid2_16y" value="<?php echo @$rnacid2_16y; ?>" /></td>
    <td "140"><input type="text" class="" id="rnacid2_17y" name="rnacid2_17y" value="<?php echo @$rnacid2_17y; ?>" /></td>
  </tr>
  <tr "38">
    <td rowspan="2" "58" "154">VACUNAS</td>
    <td "132">POLIO</td>
    <td "121">BCG</td>
    <td "94">HEPAT B</td>
    <td "130">PROF OFTALMICA</td>
    <td colspan="2">HEMOCLASIFICACION</td>
    <td "501">THS    (Pos, Neg, No hizo)</td>
    <td "391">HB    patia</td>
    <td "260">Bilirrub</td>
    <td "140">Toxo    igm</td>
  </tr>
  <tr "20">
    <td "20" "132">SI
      <input type="text" class="" id="rnacid2_18y" name="rnacid2_18y" value="<?php echo @$rnacid2_18y; ?>" />
    NO
    <input type="text" class=" valid" id="t_parto_3_1y" name="t_parto_3_1y" value="<?php echo @$t_parto_3_1y; ?>" /></td>
    <td "121">SI
      <input type="text" class="" id="rnacid2_19y" name="rnacid2_19y" value="<?php echo @$rnacid2_19y; ?>" />
    NO
    <input type="text" class=" valid" id="t_parto_1_8y" name="t_parto_1_8y" value="<?php echo @$t_parto_1_8y; ?>" /></td>
    <td "94">SI
      <input type="text" class="" id="rnacid2_20y" name="rnacid2_20y" value="<?php echo @$rnacid2_20y; ?>" />
    NO
    <input type="text" class=" valid" id="t_parto_2_8y" name="t_parto_2_8y" value="<?php echo @$t_parto_2_8y; ?>" /></td>
    <td "130">SI
      <input type="text" class="" id="puerpe_2_1y" name="puerpe_2_1y" value="<?php echo @$puerpe_2_1y; ?>" />
    NO
    <input type="text" class=" valid" id="t_parto_1_10y" name="t_parto_1_10y" value="<?php echo @$t_parto_1_10y; ?>" /></td>
    <td "738">GRUPO
      <input type="text" class="" id="puerpe_2_2y" name="puerpe_2_2y" value="<?php echo @$puerpe_2_2y; ?>" />
      RH +
      <input type="text" class=" valid" id="t_parto_2_7y" name="t_parto_2_7y" value="<?php echo @$t_parto_2_7y; ?>" />
      -
      <input type="text" class=" valid" id="t_parto_2_10y" name="t_parto_2_10y" value="<?php echo @$t_parto_2_10y; ?>" /></td>
    <td "236">SESIBILIZADO
      SI
      <input type="text" class="" id="puerpe_2_3y" name="puerpe_2_3y" value="<?php echo @$puerpe_2_3y; ?>" />
      NO
      <input type="text" class=" valid" id="t_parto_1_9y" name="t_parto_1_9y" value="<?php echo @$t_parto_1_9y; ?>" /></td>
    <td "501"><input type="text" class="" id="puerpe_2_4y"  name="puerpe_2_4y" value="<?php echo @$puerpe_2_4y; ?>" /></td>
    <td "391"><input type="text" class="" id="puerpe_2_5y" name="puerpe_2_5y" value="<?php echo @$puerpe_2_5y; ?>" /></td>
    <td "260"><input type="text" class="" id="puerpe_2_6y" name="puerpe_2_6y" value="<?php echo @$puerpe_2_6y; ?>" /></td>
    <td "140"><input type="text" class="" id="meconio_1y" name="meconio_1y" value="<?php echo @$meconio_1y; ?>" /></td>
  </tr>
  <tr "19">
    <td "19" "154">&nbsp;</td>
    <td rowspan="2" "132">vitamina K</td>
    <td "121">SI</td>
    <td "94">NO</td>
    <td rowspan="2" "130">yglulina anti D</td>
    <td "738">S/N</td>
    <td "236">n/c</td>
    <td colspan="4" "501">Anticoncepcion</td>
  </tr>
  <tr "20">
    <td "20" "154">&nbsp;</td>
    <td "121"><input type="text" class="" id="rubeo_1y" name="rubeo_1y" value="<?php echo @$rubeo_1y; ?>" /></td>
    <td "94"><input type="text" class=""style="background-color:#FFFF00" id="rubeo_2y" name="rubeo_2y" value="<?php echo @$rubeo_2y; ?>" /></td>
    <td "738"><input type="text" class="" id="yglu65_1y" name="yglu65_1y" value="<?php echo @$yglu65_1y; ?>" /></td>
    <td "236"><input type="text" class="" id="yglu65_2y" name="yglu65_2y" value="<?php echo @$yglu65_2y; ?>" /></td>
    <td "501">Consejeria    (si/no)    </td>
    <td "391"><input type="text" class="" id="antic_1" name="antic_1" value="<?php echo @$antic_1; ?>" /></td>
    <td "260">Metodo    elegido    </td>
    <td "140">&nbsp;</td>
  </tr>
  <tr "20">
    <td rowspan="6" "155" "154">EGRESO RN</td>
    <td "132">Vivo</td>
    <td "121">Fallece</td>
    <td "94">traslado</td>
    <td "130">Edad dias Egreso</td>
    <td rowspan="2" "738">Alimento al alta</td>
    <td "236">Lact Excl</td>
    <td "501">Parcial</td>
    <td "391">Artificial;
    <input type="text" class="" id="egre_rn_7y" name="egre_rn_7y" value="<?php echo @$egre_rn_7y; ?>" /></td>
    <td colspan="2" "260"><input type="text" class="input_txt valid" id="antica_2y" name="antica_2y" value="<?php echo @$antica_2y; ?>" /></td>
  </tr>
  <tr "19">
    <td "19" "132"><input type="text" class="" id="egre_rn_1y" name="egre_rn_1y" value="<?php echo @$egre_rn_1y; ?>" /></td>
    <td "121"><input type="text" class="" id="egre_rn_2y"style="background-color:#FFFF00" name="egre_rn_2y" value="<?php echo @$egre_rn_2y; ?>" /></td>
    <td "94"><input type="text" class="" style="background-color:#FFFF00" id="egre_rn_3y" name="egre_rn_3y" value="<?php echo @$egre_rn_3y; ?>" /></td>
    <td "130"><input type="text" class="" id="egre_rn_4y" name="egre_rn_4y" value="<?php echo @$egre_rn_4y; ?>" /></td>
    <td "236"><input type="text" class="" id="egre_rn_5y" name="egre_rn_5y" value="<?php echo @$egre_rn_5y; ?>" /></td>
    <td "501"><input type="text" class="" id="egre_rn_6y" name="egre_rn_6y" style="background-color:#FFFF00"value="<?php echo @$egre_rn_6y; ?>" /></td>
    <td colspan="3" "391">Egreso Materno</td>
  </tr>
  <tr "38">
    <td "38" "132">Fecha</td>
    <td "121">Hora</td>
    <td "94">fallece    en traslado</td>
    <td "130">Lugar</td>
    <td "738">Boca    arriba</td>
    <td "236">BCG(s/n)</td>
    <td "501">Peso    egreso gr</td>
    <td "391">Fecha</td>
    <td "260">Viva</td>
    <td "140">Fallece    traslado</td>
  </tr>
  <tr "19">
    <td "19" "132"><input type="text" class="input_txt valid" id="egre_rn_8y" name="egre_rn_8y" value="<?php echo @$egre_rn_8y; ?>" /></td>
    <td "121"><input type="text" class="" id="egre_rn_9y" name="egre_rn_9y" value="<?php echo @$egre_rn_9y; ?>" /></td>
    <td "94"><input type="text" class="" id="egre_rn_10y" style="background-color:#FFFF00" name="egre_rn_10y" value="<?php echo @$egre_rn_10y; ?>" /></td>
    <td "130"><input type="text" class="" id="egre_rn_11y" name="egre_rn_11y" value="<?php echo @$egre_rn_11y; ?>" /></td>
    <td "738"><input type="text" class="" id="egre_rn_12y" name="egre_rn_12y" value="<?php echo @$egre_rn_12y; ?>" /></td>
    <td "236"><input type="text" class="" id="egre_rn_13y" name="egre_rn_13y" value="<?php echo @$egre_rn_13y; ?>" /></td>
    <td "501"><input type="text" class="" id="egre_rn_14y" name="egre_rn_14y" value="<?php echo @$egre_rn_14y; ?>" /></td>
    <td "391"><input type="text" class="" id="egre_rn_15y" name="egre_rn_15y" value="<?php echo @$egre_rn_15y; ?>" /></td>
    <td "260"><input type="text" class="" id="egre_rn_16y" name="egre_rn_16y" value="<?php echo @$egre_rn_16y; ?>" /></td>
    <td "140"><input type="text" class="" id="egre_rn_17y" name="egre_rn_17y" style="background-color:#FFFF00" value="<?php echo @$egre_rn_17y; ?>" /></td>
  </tr>
  <tr "39">
    <td rowspan="2" "59" "132">ID RN</td>
    <td rowspan="2" "121"><input type="text" class="input_txt valid" id="egre_rn_18y" name="egre_rn_18y" value="<?php echo @$egre_rn_18y; ?>" /></td>
    <td rowspan="2" "94">Nombre</td>
    <td rowspan="2" "130"><input type="text" class="input_txt valid" id="egre_rn_19y" name="egre_rn_19y" value="<?php echo @$egre_rn_19y; ?>" /></td>
    <td "738" rowspan="2">Responsable</td>
    <td colspan="2" rowspan="2" "236"><input type="text" class="input_txt valid" id="egre_rn_20y" name="egre_rn_20y" value="<?php echo @$egre_rn_20y; ?>" /></td>
    <td "391">Traslado(S/N)</td>
    <td "260">Lugar</td>
    <td "140">Dias    completos desde el parro</td>
  </tr>
  <tr "20">
    <td "391" "20"><input type="text" class="" id="egre_rn_21y" name="egre_rn_21y" value="<?php echo @$egre_rn_21y; ?>" /></td>
    <td "260"><input type="text" class="input_txt valid" id="egre_rn_22y" name="egre_rn_22y" value="<?php echo @$egre_rn_22y; ?>" /></td>
    <td "140"><input type="text" class="" id="egre_rn_23y" name="egre_rn_23y" value="<?php echo @$egre_rn_23y; ?>" /></td>
  </tr>
</table>


<?php echo @$button ?>
</form><br>
</div>
</fieldset>