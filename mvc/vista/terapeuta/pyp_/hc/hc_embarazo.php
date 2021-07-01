Database
Tabla    Aceptar
<?php
if (isset($_REQUEST['guardar_hc_embarazo']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_hc_embarazo'] == 'new') {

$sql = "INSERT INTO hc_embarazo (
`id_hc_embarazo`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`gesta_pre`,
`abortos`,
`vaginales`,
`nac_vivos`,
`viven`,
`partos_1`,
`cesaresa_hd`,
`nac_muertos`,
`muertos1sem`,
`muertos_despues`,
`planeado`,
`metodo_ant`,
`fin_embaanterior`,
`eptopico`,
`gemelos`,
`ultimo25`,
`normal40`,
`ges_peso`,
`ges_talla`,
`fpp`,
`ges__fum`,
`eg_fum`,
`eg_eco`,
`antirubeola_1`,
`fum_1_act`,
`fum_1_pas`,
`fum_1_drog`,
`fum_1_alcohol`,
`fum_1_violencia`,
`fum_2_act`,
`fum_2_pas`,
`fum_2_drog`,
`fum_2_alcohol`,
`fum_2_violencia`,
`fum_3_act`,
`fum_3_pas`,
`fum_3_drog`,
`fum_3_alcohol`,
`fum_3_violencia`,
`ex_mamas`,
`ex_odon`,
`tetano1`,
`tetano2`,
`tetano3`,
`cervix_1`,
`cervix_2`,
`cervix_3`,
`rh_grupo`,
`fh_factor`,
`rh_glubo`,
`rh_inmu`,
`toxo_1`,
`toxo_2`,
`toxo_3`,
`vih_1`,
`vih_2`,
`vih_3`,
`vih_4`,
`vih_5`,
`vih_6`,
`folatos_1`,
`folatos_2`,
`hb20_1`,
`hb20_2`,
`estreptoc_1`,
`prep_parto`,
`conse_lact`,
`chagas`,
`plaudismo_1`,
`bacteriu_1`,
`bacteriu_2`,
`bacteriu_3`,
`bacteriu_4`,
`glicemia_1`,
`glicemia_2`,
`glicemia_3`,
`glicemia_4`,
`sifilis20_1`,
`sifilis20_2`,
`sifilis20_3`,
`sifilis20_4`,
`sifilis20_5`,
`sifilis20_6`,
`sifilis20_7`,
`sifilis20_8`,
`sifilis20_9`,
`sifilis20_10`,
`sifilis20_11`,
`sifilis20_12`,
`sifilis20mas_1`,
`sifilis20mas_2`,
`sifilis20mas_3`,
`sifilis20mas_4`,
`sifilis20mas_5`,
`sifilis20mas_6`,
`sifilis20mas_7`,
`sifilis20mas_8`,
`sifilis20mas_9`,
`sifilis20mas_10`,
`sifilis20mas_11`,
`sifilis20mas_12`,
`con_ant_1_1`,
`con_ant_1_2`,
`con_ant_1_3`,
`con_ant_1_4`,
`con_ant_1_5`,
`con_ant_1_6`,
`con_ant_1_7`,
`con_ant_1_8`,
`con_ant_1_9`,
`con_ant_1_10`,
`con_ant_1_11`,
`con_ant_1_12`,
`con_ant_2_1`,
`con_ant_2_2`,
`con_ant_2_3`,
`con_ant_2_4`,
`con_ant_2_5`,
`con_ant_2_6`,
`con_ant_2_7`,
`con_ant_2_8`,
`con_ant_2_9`,
`con_ant_2_10`,
`con_ant_2_11`,
`con_ant_2_12`,
`con_ant_3_1`,
`con_ant_3_2`,
`con_ant_3_3`,
`con_ant_3_4`,
`con_ant_3_5`,
`con_ant_3_6`,
`con_ant_3_7`,
`con_ant_3_8`,
`con_ant_3_9`,
`con_ant_3_10`,
`con_ant_3_11`,
`con_ant_3_12`,
`Parto_65`,
`aborto_65`,
`fecha_65`,
`carnet_65`,
`total_con_prena`,
`hops_emb_1`,
`hops_emb_2`,
`corti_1`,
`corti_2`,
`corti_3`,
`corti_4`,
`inicio_1`,
`inicio_2`,
`inicio_3`,
`pre_sit_1`,
`pre_sit_2`,
`pre_sit_3`,
`tama_feto`,
`acompa_1`,
`acompa_2`,
`acompa_3`,
`acompa_4`,
`acompa_5`,
`acompa_6`,
`acompa_7`,
`acompa_8`,
`t_parto_1_1`,
`t_parto_1_2`,
`t_parto_1_3`,
`t_parto_1_4`,
`t_parto_1_5`,
`t_parto_1_6`,
`t_parto_1_7`,
`t_parto_1_8`,
`t_parto_1_9`,
`t_parto_1_10`,
`t_parto_2_1`,
`t_parto_2_2`,
`t_parto_2_3`,
`t_parto_2_4`,
`t_parto_2_5`,
`t_parto_2_6`,
`t_parto_2_7`,
`t_parto_2_8`,
`t_parto_2_9`,
`t_parto_2_10`,
`t_parto_3_1`,
`t_parto_3_2`,
`t_parto_3_3`,
`t_parto_3_4`,
`t_parto_3_5`,
`t_parto_3_6`,
`t_parto_3_7`,
`t_parto_3_8`,
`t_parto_3_9`,
`t_parto_3_10`,
`enferme_1`,
`enferme_2`,
`enferme_3`,
`enferme_4`,
`enferme_5`,
`enferme_6`,
`enferme_7`,
`enferme_8`,
`enferme_9`,
`enferme_10`,
`enferme_11`,
`enferme_12`,
`enferme_13`,
`enferme_14`,
`enferme_15`,
`enferme_16`,
`enferme_17`,
`enferme_18`,
`enferme_19`,
`enferme_20`,
`enferme_21`,
`enferme_22`,
`enferme_23`,
`enferme_24`,
`enferme_25`,
`enferme_26`,
`enferme_27`,
`nac2_1`,
`nac2_2`,
`nac2_3`,
`nac2_4`,
`nac2_5`,
`nac2_6`,
`nac2_7`,
`nac2_8`,
`nac2_9`,
`indica_p_1`,
`indica_p_2`,
`indica_p_3`,
`pos_parto`,
`desgarro`,
`grado14`,
`ocitoc_1`,
`ocitoc_2`,
`placenta_1`,
`placenta2`,
`placenta3`,
`medicacion_1`,
`medicacion_2`,
`medicacion_3`,
`medicacion_4`,
`medicacion_5`,
`medicacion_6`,
`medicacion_7`,
`medicacion_8`,
`medicacion_9`,
`medicacion_10`,
`rnacid_1`,
`rnacid_2`,
`rnacid_3`,
`rnacid_4`,
`rnacid_5`,
`rnacid_6`,
`rnacid_7`,
`rnacid_8`,
`rnacid_9`,
`rnacid_10`,
`rnacid_11`,
`rnacid_12`,
`rnacid_13`,
`rnacid_14`,
`rnacid_15`,
`rnacid_16`,
`rnacid_18`,
`rnacid_19`,
`rnacid_20`,
`rnacid_21`,
`rnacid2_1`,
`rnacid2_2`,
`rnacid2_3`,
`rnacid2_4`,
`rnacid2_5`,
`rnacid2_6`,
`rnacid2_7`,
`rnacid2_8`,
`rnacid2_9`,
`rnacid2_10`,
`rnacid2_11`,
`rnacid2_12`,
`rnacid2_13`,
`rnacid2_14`,
`rnacid2_15`,
`rnacid2_16`,
`rnacid2_17`,
`rnacid2_18`,
`rnacid2_19`,
`rnacid2_20`,
`puerpe_2_1`,
`puerpe_2_2`,
`puerpe_2_3`,
`puerpe_2_4`,
`puerpe_2_5`,
`puerpe_2_6`,
`meconio_1`,
`rubeo_1`,
`rubeo_2`,
`yglu65_1`,
`yglu65_2`,
`antic_1`,
`antica_2`,
`egre_rn_1`,
`egre_rn_2`,
`egre_rn_3`,
`egre_rn_4`,
`egre_rn_5`,
`egre_rn_6`,
`egre_rn_7`,
`egre_rn_8`,
`egre_rn_9`,
`egre_rn_10`,
`egre_rn_11`,
`egre_rn_12`,
`egre_rn_13`,
`egre_rn_14`,
`egre_rn_15`,
`egre_rn_16`,
`egre_rn_17`,
`egre_rn_18`,
`egre_rn_19`,
`egre_rn_20`,
`egre_rn_21`,
`egre_rn_22`,
`egre_rn_23`,
`inicio_2_4`,
`inicio_2_5`,
`inicio_2_6`,
`inicio_2_7`,
`inicio_2_8`,
`inicio_2_9`,
`inicio_2_10`,
`edad_ges_partp_1`,
`edad_ges_partp_2`,
`edad_ges_partp_3`
) VALUES (
NULL,
'".$_REQUEST['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['gesta_pre']."' ,
'".$_REQUEST['abortos']."' ,
'".$_REQUEST['vaginales']."' ,
'".$_REQUEST['nac_vivos']."' ,
'".$_REQUEST['viven']."' ,
'".$_REQUEST['partos_1']."' ,
'".$_REQUEST['cesaresa_hd']."' ,
'".$_REQUEST['nac_muertos']."' ,
'".$_REQUEST['muertos1sem']."' ,
'".$_REQUEST['muertos_despues']."' ,
'".$_REQUEST['planeado']."' ,
'".$_REQUEST['metodo_ant']."' ,
'".$_REQUEST['fin_embaanterior']."' ,
'".$_REQUEST['eptopico']."' ,
'".$_REQUEST['gemelos']."' ,
'".$_REQUEST['ultimo25']."' ,
'".$_REQUEST['normal40']."' ,
'".$_REQUEST['ges_peso']."' ,
'".$_REQUEST['ges_talla']."' ,
'".$_REQUEST['fpp']."' ,
'".$_REQUEST['ges__fum']."' ,
'".$_REQUEST['eg_fum']."' ,
'".$_REQUEST['eg_eco']."' ,
'".$_REQUEST['antirubeola_1']."' ,
'".$_REQUEST['fum_1_act']."' ,
'".$_REQUEST['fum_1_pas']."' ,
'".$_REQUEST['fum_1_drog']."' ,
'".$_REQUEST['fum_1_alcohol']."' ,
'".$_REQUEST['fum_1_violencia']."' ,
'".$_REQUEST['fum_2_act']."' ,
'".$_REQUEST['fum_2_pas']."' ,
'".$_REQUEST['fum_2_drog']."' ,
'".$_REQUEST['fum_2_alcohol']."' ,
'".$_REQUEST['fum_2_violencia']."' ,
'".$_REQUEST['fum_3_act']."' ,
'".$_REQUEST['fum_3_pas']."' ,
'".$_REQUEST['fum_3_drog']."' ,
'".$_REQUEST['fum_3_alcohol']."' ,
'".$_REQUEST['fum_3_violencia']."' ,
'".$_REQUEST['ex_mamas']."' ,
'".$_REQUEST['ex_odon']."' ,
'".$_REQUEST['tetano1']."' ,
'".$_REQUEST['tetano2']."' ,
'".$_REQUEST['tetano3']."' ,
'".$_REQUEST['cervix_1']."' ,
'".$_REQUEST['cervix_2']."' ,
'".$_REQUEST['cervix_3']."' ,
'".$_REQUEST['rh_grupo']."' ,
'".$_REQUEST['fh_factor']."' ,
'".$_REQUEST['rh_glubo']."' ,
'".$_REQUEST['rh_inmu']."' ,
'".$_REQUEST['toxo_1']."' ,
'".$_REQUEST['toxo_2']."' ,
'".$_REQUEST['toxo_3']."' ,
'".$_REQUEST['vih_1']."' ,
'".$_REQUEST['vih_2']."' ,
'".$_REQUEST['vih_3']."' ,
'".$_REQUEST['vih_4']."' ,
'".$_REQUEST['vih_5']."' ,
'".$_REQUEST['vih_6']."' ,
'".$_REQUEST['folatos_1']."' ,
'".$_REQUEST['folatos_2']."' ,
'".$_REQUEST['hb20_1']."' ,
'".$_REQUEST['hb20_2']."' ,
'".$_REQUEST['estreptoc_1']."' ,
'".$_REQUEST['prep_parto']."' ,
'".$_REQUEST['conse_lact']."' ,
'".$_REQUEST['chagas']."' ,
'".$_REQUEST['plaudismo_1']."' ,
'".$_REQUEST['bacteriu_1']."' ,
'".$_REQUEST['bacteriu_2']."' ,
'".$_REQUEST['bacteriu_3']."' ,
'".$_REQUEST['bacteriu_4']."' ,
'".$_REQUEST['glicemia_1']."' ,
'".$_REQUEST['glicemia_2']."' ,
'".$_REQUEST['glicemia_3']."' ,
'".$_REQUEST['glicemia_4']."' ,
'".$_REQUEST['sifilis20_1']."' ,
'".$_REQUEST['sifilis20_2']."' ,
'".$_REQUEST['sifilis20_3']."' ,
'".$_REQUEST['sifilis20_4']."' ,
'".$_REQUEST['sifilis20_5']."' ,
'".$_REQUEST['sifilis20_6']."' ,
'".$_REQUEST['sifilis20_7']."' ,
'".$_REQUEST['sifilis20_8']."' ,
'".$_REQUEST['sifilis20_9']."' ,
'".$_REQUEST['sifilis20_10']."' ,
'".$_REQUEST['sifilis20_11']."' ,
'".$_REQUEST['sifilis20_12']."' ,
'".$_REQUEST['sifilis20mas_1']."' ,
'".$_REQUEST['sifilis20mas_2']."' ,
'".$_REQUEST['sifilis20mas_3']."' ,
'".$_REQUEST['sifilis20mas_4']."' ,
'".$_REQUEST['sifilis20mas_5']."' ,
'".$_REQUEST['sifilis20mas_6']."' ,
'".$_REQUEST['sifilis20mas_7']."' ,
'".$_REQUEST['sifilis20mas_8']."' ,
'".$_REQUEST['sifilis20mas_9']."' ,
'".$_REQUEST['sifilis20mas_10']."' ,
'".$_REQUEST['sifilis20mas_11']."' ,
'".$_REQUEST['sifilis20mas_12']."' ,
'".$_REQUEST['con_ant_1_1']."' ,
'".$_REQUEST['con_ant_1_2']."' ,
'".$_REQUEST['con_ant_1_3']."' ,
'".$_REQUEST['con_ant_1_4']."' ,
'".$_REQUEST['con_ant_1_5']."' ,
'".$_REQUEST['con_ant_1_6']."' ,
'".$_REQUEST['con_ant_1_7']."' ,
'".$_REQUEST['con_ant_1_8']."' ,
'".$_REQUEST['con_ant_1_9']."' ,
'".$_REQUEST['con_ant_1_10']."' ,
'".$_REQUEST['con_ant_1_11']."' ,
'".$_REQUEST['con_ant_1_12']."' ,
'".$_REQUEST['con_ant_2_1']."' ,
'".$_REQUEST['con_ant_2_2']."' ,
'".$_REQUEST['con_ant_2_3']."' ,
'".$_REQUEST['con_ant_2_4']."' ,
'".$_REQUEST['con_ant_2_5']."' ,
'".$_REQUEST['con_ant_2_6']."' ,
'".$_REQUEST['con_ant_2_7']."' ,
'".$_REQUEST['con_ant_2_8']."' ,
'".$_REQUEST['con_ant_2_9']."' ,
'".$_REQUEST['con_ant_2_10']."' ,
'".$_REQUEST['con_ant_2_11']."' ,
'".$_REQUEST['con_ant_2_12']."' ,
'".$_REQUEST['con_ant_3_1']."' ,
'".$_REQUEST['con_ant_3_2']."' ,
'".$_REQUEST['con_ant_3_3']."' ,
'".$_REQUEST['con_ant_3_4']."' ,
'".$_REQUEST['con_ant_3_5']."' ,
'".$_REQUEST['con_ant_3_6']."' ,
'".$_REQUEST['con_ant_3_7']."' ,
'".$_REQUEST['con_ant_3_8']."' ,
'".$_REQUEST['con_ant_3_9']."' ,
'".$_REQUEST['con_ant_3_10']."' ,
'".$_REQUEST['con_ant_3_11']."' ,
'".$_REQUEST['con_ant_3_12']."' ,
'".$_REQUEST['Parto_65']."' ,
'".$_REQUEST['aborto_65']."' ,
'".$_REQUEST['fecha_65']."' ,
'".$_REQUEST['carnet_65']."' ,
'".$_REQUEST['total_con_prena']."' ,
'".$_REQUEST['hops_emb_1']."' ,
'".$_REQUEST['hops_emb_2']."' ,
'".$_REQUEST['corti_1']."' ,
'".$_REQUEST['corti_2']."' ,
'".$_REQUEST['corti_3']."' ,
'".$_REQUEST['corti_4']."' ,
'".$_REQUEST['inicio_1']."' ,
'".$_REQUEST['inicio_2']."' ,
'".$_REQUEST['inicio_3']."' ,
'".$_REQUEST['pre_sit_1']."' ,
'".$_REQUEST['pre_sit_2']."' ,
'".$_REQUEST['pre_sit_3']."' ,
'".$_REQUEST['tama_feto']."' ,
'".$_REQUEST['acompa_1']."' ,
'".$_REQUEST['acompa_2']."' ,
'".$_REQUEST['acompa_3']."' ,
'".$_REQUEST['acompa_4']."' ,
'".$_REQUEST['acompa_5']."' ,
'".$_REQUEST['acompa_6']."' ,
'".$_REQUEST['acompa_7']."' ,
'".$_REQUEST['acompa_8']."' ,
'".$_REQUEST['t_parto_1_1']."' ,
'".$_REQUEST['t_parto_1_2']."' ,
'".$_REQUEST['t_parto_1_3']."' ,
'".$_REQUEST['t_parto_1_4']."' ,
'".$_REQUEST['t_parto_1_5']."' ,
'".$_REQUEST['t_parto_1_6']."' ,
'".$_REQUEST['t_parto_1_7']."' ,
'".$_REQUEST['t_parto_1_8']."' ,
'".$_REQUEST['t_parto_1_9']."' ,
'".$_REQUEST['t_parto_1_10']."' ,
'".$_REQUEST['t_parto_2_1']."' ,
'".$_REQUEST['t_parto_2_2']."' ,
'".$_REQUEST['t_parto_2_3']."' ,
'".$_REQUEST['t_parto_2_4']."' ,
'".$_REQUEST['t_parto_2_5']."' ,
'".$_REQUEST['t_parto_2_6']."' ,
'".$_REQUEST['t_parto_2_7']."' ,
'".$_REQUEST['t_parto_2_8']."' ,
'".$_REQUEST['t_parto_2_9']."' ,
'".$_REQUEST['t_parto_2_10']."' ,
'".$_REQUEST['t_parto_3_1']."' ,
'".$_REQUEST['t_parto_3_2']."' ,
'".$_REQUEST['t_parto_3_3']."' ,
'".$_REQUEST['t_parto_3_4']."' ,
'".$_REQUEST['t_parto_3_5']."' ,
'".$_REQUEST['t_parto_3_6']."' ,
'".$_REQUEST['t_parto_3_7']."' ,
'".$_REQUEST['t_parto_3_8']."' ,
'".$_REQUEST['t_parto_3_9']."' ,
'".$_REQUEST['t_parto_3_10']."' ,
'".$_REQUEST['enferme_1']."' ,
'".$_REQUEST['enferme_2']."' ,
'".$_REQUEST['enferme_3']."' ,
'".$_REQUEST['enferme_4']."' ,
'".$_REQUEST['enferme_5']."' ,
'".$_REQUEST['enferme_6']."' ,
'".$_REQUEST['enferme_7']."' ,
'".$_REQUEST['enferme_8']."' ,
'".$_REQUEST['enferme_9']."' ,
'".$_REQUEST['enferme_10']."' ,
'".$_REQUEST['enferme_11']."' ,
'".$_REQUEST['enferme_12']."' ,
'".$_REQUEST['enferme_13']."' ,
'".$_REQUEST['enferme_14']."' ,
'".$_REQUEST['enferme_15']."' ,
'".$_REQUEST['enferme_16']."' ,
'".$_REQUEST['enferme_17']."' ,
'".$_REQUEST['enferme_18']."' ,
'".$_REQUEST['enferme_19']."' ,
'".$_REQUEST['enferme_20']."' ,
'".$_REQUEST['enferme_21']."' ,
'".$_REQUEST['enferme_22']."' ,
'".$_REQUEST['enferme_23']."' ,
'".$_REQUEST['enferme_24']."' ,
'".$_REQUEST['enferme_25']."' ,
'".$_REQUEST['enferme_26']."' ,
'".$_REQUEST['enferme_27']."' ,
'".$_REQUEST['nac2_1']."' ,
'".$_REQUEST['nac2_2']."' ,
'".$_REQUEST['nac2_3']."' ,
'".$_REQUEST['nac2_4']."' ,
'".$_REQUEST['nac2_5']."' ,
'".$_REQUEST['nac2_6']."' ,
'".$_REQUEST['nac2_7']."' ,
'".$_REQUEST['nac2_8']."' ,
'".$_REQUEST['nac2_9']."' ,
'".$_REQUEST['indica_p_1']."' ,
'".$_REQUEST['indica_p_2']."' ,
'".$_REQUEST['indica_p_3']."' ,
'".$_REQUEST['pos_parto']."' ,
'".$_REQUEST['desgarro']."' ,
'".$_REQUEST['grado14']."' ,
'".$_REQUEST['ocitoc_1']."' ,
'".$_REQUEST['ocitoc_2']."' ,
'".$_REQUEST['placenta_1']."' ,
'".$_REQUEST['placenta2']."' ,
'".$_REQUEST['placenta3']."' ,
'".$_REQUEST['medicacion_1']."' ,
'".$_REQUEST['medicacion_2']."' ,
'".$_REQUEST['medicacion_3']."' ,
'".$_REQUEST['medicacion_4']."' ,
'".$_REQUEST['medicacion_5']."' ,
'".$_REQUEST['medicacion_6']."' ,
'".$_REQUEST['medicacion_7']."' ,
'".$_REQUEST['medicacion_8']."' ,
'".$_REQUEST['medicacion_9']."' ,
'".$_REQUEST['medicacion_10']."' ,
'".$_REQUEST['rnacid_1']."' ,
'".$_REQUEST['rnacid_2']."' ,
'".$_REQUEST['rnacid_3']."' ,
'".$_REQUEST['rnacid_4']."' ,
'".$_REQUEST['rnacid_5']."' ,
'".$_REQUEST['rnacid_6']."' ,
'".$_REQUEST['rnacid_7']."' ,
'".$_REQUEST['rnacid_8']."' ,
'".$_REQUEST['rnacid_9']."' ,
'".$_REQUEST['rnacid_10']."' ,
'".$_REQUEST['rnacid_11']."' ,
'".$_REQUEST['rnacid_12']."' ,
'".$_REQUEST['rnacid_13']."' ,
'".$_REQUEST['rnacid_14']."' ,
'".$_REQUEST['rnacid_15']."' ,
'".$_REQUEST['rnacid_16']."' ,
'".$_REQUEST['rnacid_18']."' ,
'".$_REQUEST['rnacid_19']."' ,
'".$_REQUEST['rnacid_20']."' ,
'".$_REQUEST['rnacid_21']."' ,
'".$_REQUEST['rnacid2_1']."' ,
'".$_REQUEST['rnacid2_2']."' ,
'".$_REQUEST['rnacid2_3']."' ,
'".$_REQUEST['rnacid2_4']."' ,
'".$_REQUEST['rnacid2_5']."' ,
'".$_REQUEST['rnacid2_6']."' ,
'".$_REQUEST['rnacid2_7']."' ,
'".$_REQUEST['rnacid2_8']."' ,
'".$_REQUEST['rnacid2_9']."' ,
'".$_REQUEST['rnacid2_10']."' ,
'".$_REQUEST['rnacid2_11']."' ,
'".$_REQUEST['rnacid2_12']."' ,
'".$_REQUEST['rnacid2_13']."' ,
'".$_REQUEST['rnacid2_14']."' ,
'".$_REQUEST['rnacid2_15']."' ,
'".$_REQUEST['rnacid2_16']."' ,
'".$_REQUEST['rnacid2_17']."' ,
'".$_REQUEST['rnacid2_18']."' ,
'".$_REQUEST['rnacid2_19']."' ,
'".$_REQUEST['rnacid2_20']."' ,
'".$_REQUEST['puerpe_2_1']."' ,
'".$_REQUEST['puerpe_2_2']."' ,
'".$_REQUEST['puerpe_2_3']."' ,
'".$_REQUEST['puerpe_2_4']."' ,
'".$_REQUEST['puerpe_2_5']."' ,
'".$_REQUEST['puerpe_2_6']."' ,
'".$_REQUEST['meconio_1']."' ,
'".$_REQUEST['rubeo_1']."' ,
'".$_REQUEST['rubeo_2']."' ,
'".$_REQUEST['yglu65_1']."' ,
'".$_REQUEST['yglu65_2']."' ,
'".$_REQUEST['antic_1']."' ,
'".$_REQUEST['antica_2']."' ,
'".$_REQUEST['egre_rn_1']."' ,
'".$_REQUEST['egre_rn_2']."' ,
'".$_REQUEST['egre_rn_3']."' ,
'".$_REQUEST['egre_rn_4']."' ,
'".$_REQUEST['egre_rn_5']."' ,
'".$_REQUEST['egre_rn_6']."' ,
'".$_REQUEST['egre_rn_7']."' ,
'".$_REQUEST['egre_rn_8']."' ,
'".$_REQUEST['egre_rn_9']."' ,
'".$_REQUEST['egre_rn_10']."' ,
'".$_REQUEST['egre_rn_11']."' ,
'".$_REQUEST['egre_rn_12']."' ,
'".$_REQUEST['egre_rn_13']."' ,
'".$_REQUEST['egre_rn_14']."' ,
'".$_REQUEST['egre_rn_15']."' ,
'".$_REQUEST['egre_rn_16']."' ,
'".$_REQUEST['egre_rn_17']."' ,
'".$_REQUEST['egre_rn_18']."' ,
'".$_REQUEST['egre_rn_19']."' ,
'".$_REQUEST['egre_rn_20']."' ,
'".$_REQUEST['egre_rn_21']."' ,
'".$_REQUEST['egre_rn_22']."' ,
'".$_REQUEST['egre_rn_23']."' ,
'".$_REQUEST['inicio_2_4']."' ,
'".$_REQUEST['inicio_2_5']."' ,
'".$_REQUEST['inicio_2_6']."' ,
'".$_REQUEST['inicio_2_7']."' ,
'".$_REQUEST['inicio_2_8']."' ,
'".$_REQUEST['inicio_2_9']."' ,
'".$_REQUEST['inicio_2_10']."' ,
'".$_REQUEST['edad_ges_partp_1']."' ,
'".$_REQUEST['edad_ges_partp_2']."' ,
'".$_REQUEST['edad_ges_partp_3']."'
) ";


} else if ($_REQUEST['id_hc_embarazo'] != '') {

$sql = "UPDATE hc_embarazo set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`gesta_pre` = '".$_REQUEST['gesta_pre']."' ,
`abortos` = '".$_REQUEST['abortos']."' ,
`vaginales` = '".$_REQUEST['vaginales']."' ,
`nac_vivos` = '".$_REQUEST['nac_vivos']."' ,
`viven` = '".$_REQUEST['viven']."' ,
`partos_1` = '".$_REQUEST['partos_1']."' ,
`cesaresa_hd` = '".$_REQUEST['cesaresa_hd']."' ,
`nac_muertos` = '".$_REQUEST['nac_muertos']."' ,
`muertos1sem` = '".$_REQUEST['muertos1sem']."' ,
`muertos_despues` = '".$_REQUEST['muertos_despues']."' ,
`planeado` = '".$_REQUEST['planeado']."' ,
`metodo_ant` = '".$_REQUEST['metodo_ant']."' ,
`fin_embaanterior` = '".$_REQUEST['fin_embaanterior']."' ,
`eptopico` = '".$_REQUEST['eptopico']."' ,
`gemelos` = '".$_REQUEST['gemelos']."' ,
`ultimo25` = '".$_REQUEST['ultimo25']."' ,
`normal40` = '".$_REQUEST['normal40']."' ,
`ges_peso` = '".$_REQUEST['ges_peso']."' ,
`ges_talla` = '".$_REQUEST['ges_talla']."' ,
`fpp` = '".$_REQUEST['fpp']."' ,
`ges__fum` = '".$_REQUEST['ges__fum']."' ,
`eg_fum` = '".$_REQUEST['eg_fum']."' ,
`eg_eco` = '".$_REQUEST['eg_eco']."' ,
`antirubeola_1` = '".$_REQUEST['antirubeola_1']."' ,
`fum_1_act` = '".$_REQUEST['fum_1_act']."' ,
`fum_1_pas` = '".$_REQUEST['fum_1_pas']."' ,
`fum_1_drog` = '".$_REQUEST['fum_1_drog']."' ,
`fum_1_alcohol` = '".$_REQUEST['fum_1_alcohol']."' ,
`fum_1_violencia` = '".$_REQUEST['fum_1_violencia']."' ,
`fum_2_act` = '".$_REQUEST['fum_2_act']."' ,
`fum_2_pas` = '".$_REQUEST['fum_2_pas']."' ,
`fum_2_drog` = '".$_REQUEST['fum_2_drog']."' ,
`fum_2_alcohol` = '".$_REQUEST['fum_2_alcohol']."' ,
`fum_2_violencia` = '".$_REQUEST['fum_2_violencia']."' ,
`fum_3_act` = '".$_REQUEST['fum_3_act']."' ,
`fum_3_pas` = '".$_REQUEST['fum_3_pas']."' ,
`fum_3_drog` = '".$_REQUEST['fum_3_drog']."' ,
`fum_3_alcohol` = '".$_REQUEST['fum_3_alcohol']."' ,
`fum_3_violencia` = '".$_REQUEST['fum_3_violencia']."' ,
`ex_mamas` = '".$_REQUEST['ex_mamas']."' ,
`ex_odon` = '".$_REQUEST['ex_odon']."' ,
`tetano1` = '".$_REQUEST['tetano1']."' ,
`tetano2` = '".$_REQUEST['tetano2']."' ,
`tetano3` = '".$_REQUEST['tetano3']."' ,
`cervix_1` = '".$_REQUEST['cervix_1']."' ,
`cervix_2` = '".$_REQUEST['cervix_2']."' ,
`cervix_3` = '".$_REQUEST['cervix_3']."' ,
`rh_grupo` = '".$_REQUEST['rh_grupo']."' ,
`fh_factor` = '".$_REQUEST['fh_factor']."' ,
`rh_glubo` = '".$_REQUEST['rh_glubo']."' ,
`rh_inmu` = '".$_REQUEST['rh_inmu']."' ,
`toxo_1` = '".$_REQUEST['toxo_1']."' ,
`toxo_2` = '".$_REQUEST['toxo_2']."' ,
`toxo_3` = '".$_REQUEST['toxo_3']."' ,
`vih_1` = '".$_REQUEST['vih_1']."' ,
`vih_2` = '".$_REQUEST['vih_2']."' ,
`vih_3` = '".$_REQUEST['vih_3']."' ,
`vih_4` = '".$_REQUEST['vih_4']."' ,
`vih_5` = '".$_REQUEST['vih_5']."' ,
`vih_6` = '".$_REQUEST['vih_6']."' ,
`folatos_1` = '".$_REQUEST['folatos_1']."' ,
`folatos_2` = '".$_REQUEST['folatos_2']."' ,
`hb20_1` = '".$_REQUEST['hb20_1']."' ,
`hb20_2` = '".$_REQUEST['hb20_2']."' ,
`estreptoc_1` = '".$_REQUEST['estreptoc_1']."' ,
`prep_parto` = '".$_REQUEST['prep_parto']."' ,
`conse_lact` = '".$_REQUEST['conse_lact']."' ,
`chagas` = '".$_REQUEST['chagas']."' ,
`plaudismo_1` = '".$_REQUEST['plaudismo_1']."' ,
`bacteriu_1` = '".$_REQUEST['bacteriu_1']."' ,
`bacteriu_2` = '".$_REQUEST['bacteriu_2']."' ,
`bacteriu_3` = '".$_REQUEST['bacteriu_3']."' ,
`bacteriu_4` = '".$_REQUEST['bacteriu_4']."' ,
`glicemia_1` = '".$_REQUEST['glicemia_1']."' ,
`glicemia_2` = '".$_REQUEST['glicemia_2']."' ,
`glicemia_3` = '".$_REQUEST['glicemia_3']."' ,
`glicemia_4` = '".$_REQUEST['glicemia_4']."' ,
`sifilis20_1` = '".$_REQUEST['sifilis20_1']."' ,
`sifilis20_2` = '".$_REQUEST['sifilis20_2']."' ,
`sifilis20_3` = '".$_REQUEST['sifilis20_3']."' ,
`sifilis20_4` = '".$_REQUEST['sifilis20_4']."' ,
`sifilis20_5` = '".$_REQUEST['sifilis20_5']."' ,
`sifilis20_6` = '".$_REQUEST['sifilis20_6']."' ,
`sifilis20_7` = '".$_REQUEST['sifilis20_7']."' ,
`sifilis20_8` = '".$_REQUEST['sifilis20_8']."' ,
`sifilis20_9` = '".$_REQUEST['sifilis20_9']."' ,
`sifilis20_10` = '".$_REQUEST['sifilis20_10']."' ,
`sifilis20_11` = '".$_REQUEST['sifilis20_11']."' ,
`sifilis20_12` = '".$_REQUEST['sifilis20_12']."' ,
`sifilis20mas_1` = '".$_REQUEST['sifilis20mas_1']."' ,
`sifilis20mas_2` = '".$_REQUEST['sifilis20mas_2']."' ,
`sifilis20mas_3` = '".$_REQUEST['sifilis20mas_3']."' ,
`sifilis20mas_4` = '".$_REQUEST['sifilis20mas_4']."' ,
`sifilis20mas_5` = '".$_REQUEST['sifilis20mas_5']."' ,
`sifilis20mas_6` = '".$_REQUEST['sifilis20mas_6']."' ,
`sifilis20mas_7` = '".$_REQUEST['sifilis20mas_7']."' ,
`sifilis20mas_8` = '".$_REQUEST['sifilis20mas_8']."' ,
`sifilis20mas_9` = '".$_REQUEST['sifilis20mas_9']."' ,
`sifilis20mas_10` = '".$_REQUEST['sifilis20mas_10']."' ,
`sifilis20mas_11` = '".$_REQUEST['sifilis20mas_11']."' ,
`sifilis20mas_12` = '".$_REQUEST['sifilis20mas_12']."' ,
`con_ant_1_1` = '".$_REQUEST['con_ant_1_1']."' ,
`con_ant_1_2` = '".$_REQUEST['con_ant_1_2']."' ,
`con_ant_1_3` = '".$_REQUEST['con_ant_1_3']."' ,
`con_ant_1_4` = '".$_REQUEST['con_ant_1_4']."' ,
`con_ant_1_5` = '".$_REQUEST['con_ant_1_5']."' ,
`con_ant_1_6` = '".$_REQUEST['con_ant_1_6']."' ,
`con_ant_1_7` = '".$_REQUEST['con_ant_1_7']."' ,
`con_ant_1_8` = '".$_REQUEST['con_ant_1_8']."' ,
`con_ant_1_9` = '".$_REQUEST['con_ant_1_9']."' ,
`con_ant_1_10` = '".$_REQUEST['con_ant_1_10']."' ,
`con_ant_1_11` = '".$_REQUEST['con_ant_1_11']."' ,
`con_ant_1_12` = '".$_REQUEST['con_ant_1_12']."' ,
`con_ant_2_1` = '".$_REQUEST['con_ant_2_1']."' ,
`con_ant_2_2` = '".$_REQUEST['con_ant_2_2']."' ,
`con_ant_2_3` = '".$_REQUEST['con_ant_2_3']."' ,
`con_ant_2_4` = '".$_REQUEST['con_ant_2_4']."' ,
`con_ant_2_5` = '".$_REQUEST['con_ant_2_5']."' ,
`con_ant_2_6` = '".$_REQUEST['con_ant_2_6']."' ,
`con_ant_2_7` = '".$_REQUEST['con_ant_2_7']."' ,
`con_ant_2_8` = '".$_REQUEST['con_ant_2_8']."' ,
`con_ant_2_9` = '".$_REQUEST['con_ant_2_9']."' ,
`con_ant_2_10` = '".$_REQUEST['con_ant_2_10']."' ,
`con_ant_2_11` = '".$_REQUEST['con_ant_2_11']."' ,
`con_ant_2_12` = '".$_REQUEST['con_ant_2_12']."' ,
`con_ant_3_1` = '".$_REQUEST['con_ant_3_1']."' ,
`con_ant_3_2` = '".$_REQUEST['con_ant_3_2']."' ,
`con_ant_3_3` = '".$_REQUEST['con_ant_3_3']."' ,
`con_ant_3_4` = '".$_REQUEST['con_ant_3_4']."' ,
`con_ant_3_5` = '".$_REQUEST['con_ant_3_5']."' ,
`con_ant_3_6` = '".$_REQUEST['con_ant_3_6']."' ,
`con_ant_3_7` = '".$_REQUEST['con_ant_3_7']."' ,
`con_ant_3_8` = '".$_REQUEST['con_ant_3_8']."' ,
`con_ant_3_9` = '".$_REQUEST['con_ant_3_9']."' ,
`con_ant_3_10` = '".$_REQUEST['con_ant_3_10']."' ,
`con_ant_3_11` = '".$_REQUEST['con_ant_3_11']."' ,
`con_ant_3_12` = '".$_REQUEST['con_ant_3_12']."' ,
`Parto_65` = '".$_REQUEST['Parto_65']."' ,
`aborto_65` = '".$_REQUEST['aborto_65']."' ,
`fecha_65` = '".$_REQUEST['fecha_65']."' ,
`carnet_65` = '".$_REQUEST['carnet_65']."' ,
`total_con_prena` = '".$_REQUEST['total_con_prena']."' ,
`hops_emb_1` = '".$_REQUEST['hops_emb_1']."' ,
`hops_emb_2` = '".$_REQUEST['hops_emb_2']."' ,
`corti_1` = '".$_REQUEST['corti_1']."' ,
`corti_2` = '".$_REQUEST['corti_2']."' ,
`corti_3` = '".$_REQUEST['corti_3']."' ,
`corti_4` = '".$_REQUEST['corti_4']."' ,
`inicio_1` = '".$_REQUEST['inicio_1']."' ,
`inicio_2` = '".$_REQUEST['inicio_2']."' ,
`inicio_3` = '".$_REQUEST['inicio_3']."' ,
`pre_sit_1` = '".$_REQUEST['pre_sit_1']."' ,
`pre_sit_2` = '".$_REQUEST['pre_sit_2']."' ,
`pre_sit_3` = '".$_REQUEST['pre_sit_3']."' ,
`tama_feto` = '".$_REQUEST['tama_feto']."' ,
`acompa_1` = '".$_REQUEST['acompa_1']."' ,
`acompa_2` = '".$_REQUEST['acompa_2']."' ,
`acompa_3` = '".$_REQUEST['acompa_3']."' ,
`acompa_4` = '".$_REQUEST['acompa_4']."' ,
`acompa_5` = '".$_REQUEST['acompa_5']."' ,
`acompa_6` = '".$_REQUEST['acompa_6']."' ,
`acompa_7` = '".$_REQUEST['acompa_7']."' ,
`acompa_8` = '".$_REQUEST['acompa_8']."' ,
`t_parto_1_1` = '".$_REQUEST['t_parto_1_1']."' ,
`t_parto_1_2` = '".$_REQUEST['t_parto_1_2']."' ,
`t_parto_1_3` = '".$_REQUEST['t_parto_1_3']."' ,
`t_parto_1_4` = '".$_REQUEST['t_parto_1_4']."' ,
`t_parto_1_5` = '".$_REQUEST['t_parto_1_5']."' ,
`t_parto_1_6` = '".$_REQUEST['t_parto_1_6']."' ,
`t_parto_1_7` = '".$_REQUEST['t_parto_1_7']."' ,
`t_parto_1_8` = '".$_REQUEST['t_parto_1_8']."' ,
`t_parto_1_9` = '".$_REQUEST['t_parto_1_9']."' ,
`t_parto_1_10` = '".$_REQUEST['t_parto_1_10']."' ,
`t_parto_2_1` = '".$_REQUEST['t_parto_2_1']."' ,
`t_parto_2_2` = '".$_REQUEST['t_parto_2_2']."' ,
`t_parto_2_3` = '".$_REQUEST['t_parto_2_3']."' ,
`t_parto_2_4` = '".$_REQUEST['t_parto_2_4']."' ,
`t_parto_2_5` = '".$_REQUEST['t_parto_2_5']."' ,
`t_parto_2_6` = '".$_REQUEST['t_parto_2_6']."' ,
`t_parto_2_7` = '".$_REQUEST['t_parto_2_7']."' ,
`t_parto_2_8` = '".$_REQUEST['t_parto_2_8']."' ,
`t_parto_2_9` = '".$_REQUEST['t_parto_2_9']."' ,
`t_parto_2_10` = '".$_REQUEST['t_parto_2_10']."' ,
`t_parto_3_1` = '".$_REQUEST['t_parto_3_1']."' ,
`t_parto_3_2` = '".$_REQUEST['t_parto_3_2']."' ,
`t_parto_3_3` = '".$_REQUEST['t_parto_3_3']."' ,
`t_parto_3_4` = '".$_REQUEST['t_parto_3_4']."' ,
`t_parto_3_5` = '".$_REQUEST['t_parto_3_5']."' ,
`t_parto_3_6` = '".$_REQUEST['t_parto_3_6']."' ,
`t_parto_3_7` = '".$_REQUEST['t_parto_3_7']."' ,
`t_parto_3_8` = '".$_REQUEST['t_parto_3_8']."' ,
`t_parto_3_9` = '".$_REQUEST['t_parto_3_9']."' ,
`t_parto_3_10` = '".$_REQUEST['t_parto_3_10']."' ,
`enferme_1` = '".$_REQUEST['enferme_1']."' ,
`enferme_2` = '".$_REQUEST['enferme_2']."' ,
`enferme_3` = '".$_REQUEST['enferme_3']."' ,
`enferme_4` = '".$_REQUEST['enferme_4']."' ,
`enferme_5` = '".$_REQUEST['enferme_5']."' ,
`enferme_6` = '".$_REQUEST['enferme_6']."' ,
`enferme_7` = '".$_REQUEST['enferme_7']."' ,
`enferme_8` = '".$_REQUEST['enferme_8']."' ,
`enferme_9` = '".$_REQUEST['enferme_9']."' ,
`enferme_10` = '".$_REQUEST['enferme_10']."' ,
`enferme_11` = '".$_REQUEST['enferme_11']."' ,
`enferme_12` = '".$_REQUEST['enferme_12']."' ,
`enferme_13` = '".$_REQUEST['enferme_13']."' ,
`enferme_14` = '".$_REQUEST['enferme_14']."' ,
`enferme_15` = '".$_REQUEST['enferme_15']."' ,
`enferme_16` = '".$_REQUEST['enferme_16']."' ,
`enferme_17` = '".$_REQUEST['enferme_17']."' ,
`enferme_18` = '".$_REQUEST['enferme_18']."' ,
`enferme_19` = '".$_REQUEST['enferme_19']."' ,
`enferme_20` = '".$_REQUEST['enferme_20']."' ,
`enferme_21` = '".$_REQUEST['enferme_21']."' ,
`enferme_22` = '".$_REQUEST['enferme_22']."' ,
`enferme_23` = '".$_REQUEST['enferme_23']."' ,
`enferme_24` = '".$_REQUEST['enferme_24']."' ,
`enferme_25` = '".$_REQUEST['enferme_25']."' ,
`enferme_26` = '".$_REQUEST['enferme_26']."' ,
`enferme_27` = '".$_REQUEST['enferme_27']."' ,
`nac2_1` = '".$_REQUEST['nac2_1']."' ,
`nac2_2` = '".$_REQUEST['nac2_2']."' ,
`nac2_3` = '".$_REQUEST['nac2_3']."' ,
`nac2_4` = '".$_REQUEST['nac2_4']."' ,
`nac2_5` = '".$_REQUEST['nac2_5']."' ,
`nac2_6` = '".$_REQUEST['nac2_6']."' ,
`nac2_7` = '".$_REQUEST['nac2_7']."' ,
`nac2_8` = '".$_REQUEST['nac2_8']."' ,
`nac2_9` = '".$_REQUEST['nac2_9']."' ,
`indica_p_1` = '".$_REQUEST['indica_p_1']."' ,
`indica_p_2` = '".$_REQUEST['indica_p_2']."' ,
`indica_p_3` = '".$_REQUEST['indica_p_3']."' ,
`pos_parto` = '".$_REQUEST['pos_parto']."' ,
`desgarro` = '".$_REQUEST['desgarro']."' ,
`grado14` = '".$_REQUEST['grado14']."' ,
`ocitoc_1` = '".$_REQUEST['ocitoc_1']."' ,
`ocitoc_2` = '".$_REQUEST['ocitoc_2']."' ,
`placenta_1` = '".$_REQUEST['placenta_1']."' ,
`placenta2` = '".$_REQUEST['placenta2']."' ,
`placenta3` = '".$_REQUEST['placenta3']."' ,
`medicacion_1` = '".$_REQUEST['medicacion_1']."' ,
`medicacion_2` = '".$_REQUEST['medicacion_2']."' ,
`medicacion_3` = '".$_REQUEST['medicacion_3']."' ,
`medicacion_4` = '".$_REQUEST['medicacion_4']."' ,
`medicacion_5` = '".$_REQUEST['medicacion_5']."' ,
`medicacion_6` = '".$_REQUEST['medicacion_6']."' ,
`medicacion_7` = '".$_REQUEST['medicacion_7']."' ,
`medicacion_8` = '".$_REQUEST['medicacion_8']."' ,
`medicacion_9` = '".$_REQUEST['medicacion_9']."' ,
`medicacion_10` = '".$_REQUEST['medicacion_10']."' ,
`rnacid_1` = '".$_REQUEST['rnacid_1']."' ,
`rnacid_2` = '".$_REQUEST['rnacid_2']."' ,
`rnacid_3` = '".$_REQUEST['rnacid_3']."' ,
`rnacid_4` = '".$_REQUEST['rnacid_4']."' ,
`rnacid_5` = '".$_REQUEST['rnacid_5']."' ,
`rnacid_6` = '".$_REQUEST['rnacid_6']."' ,
`rnacid_7` = '".$_REQUEST['rnacid_7']."' ,
`rnacid_8` = '".$_REQUEST['rnacid_8']."' ,
`rnacid_9` = '".$_REQUEST['rnacid_9']."' ,
`rnacid_10` = '".$_REQUEST['rnacid_10']."' ,
`rnacid_11` = '".$_REQUEST['rnacid_11']."' ,
`rnacid_12` = '".$_REQUEST['rnacid_12']."' ,
`rnacid_13` = '".$_REQUEST['rnacid_13']."' ,
`rnacid_14` = '".$_REQUEST['rnacid_14']."' ,
`rnacid_15` = '".$_REQUEST['rnacid_15']."' ,
`rnacid_16` = '".$_REQUEST['rnacid_16']."' ,
`rnacid_18` = '".$_REQUEST['rnacid_18']."' ,
`rnacid_19` = '".$_REQUEST['rnacid_19']."' ,
`rnacid_20` = '".$_REQUEST['rnacid_20']."' ,
`rnacid_21` = '".$_REQUEST['rnacid_21']."' ,
`rnacid2_1` = '".$_REQUEST['rnacid2_1']."' ,
`rnacid2_2` = '".$_REQUEST['rnacid2_2']."' ,
`rnacid2_3` = '".$_REQUEST['rnacid2_3']."' ,
`rnacid2_4` = '".$_REQUEST['rnacid2_4']."' ,
`rnacid2_5` = '".$_REQUEST['rnacid2_5']."' ,
`rnacid2_6` = '".$_REQUEST['rnacid2_6']."' ,
`rnacid2_7` = '".$_REQUEST['rnacid2_7']."' ,
`rnacid2_8` = '".$_REQUEST['rnacid2_8']."' ,
`rnacid2_9` = '".$_REQUEST['rnacid2_9']."' ,
`rnacid2_10` = '".$_REQUEST['rnacid2_10']."' ,
`rnacid2_11` = '".$_REQUEST['rnacid2_11']."' ,
`rnacid2_12` = '".$_REQUEST['rnacid2_12']."' ,
`rnacid2_13` = '".$_REQUEST['rnacid2_13']."' ,
`rnacid2_14` = '".$_REQUEST['rnacid2_14']."' ,
`rnacid2_15` = '".$_REQUEST['rnacid2_15']."' ,
`rnacid2_16` = '".$_REQUEST['rnacid2_16']."' ,
`rnacid2_17` = '".$_REQUEST['rnacid2_17']."' ,
`rnacid2_18` = '".$_REQUEST['rnacid2_18']."' ,
`rnacid2_19` = '".$_REQUEST['rnacid2_19']."' ,
`rnacid2_20` = '".$_REQUEST['rnacid2_20']."' ,
`puerpe_2_1` = '".$_REQUEST['puerpe_2_1']."' ,
`puerpe_2_2` = '".$_REQUEST['puerpe_2_2']."' ,
`puerpe_2_3` = '".$_REQUEST['puerpe_2_3']."' ,
`puerpe_2_4` = '".$_REQUEST['puerpe_2_4']."' ,
`puerpe_2_5` = '".$_REQUEST['puerpe_2_5']."' ,
`puerpe_2_6` = '".$_REQUEST['puerpe_2_6']."' ,
`meconio_1` = '".$_REQUEST['meconio_1']."' ,
`rubeo_1` = '".$_REQUEST['rubeo_1']."' ,
`rubeo_2` = '".$_REQUEST['rubeo_2']."' ,
`yglu65_1` = '".$_REQUEST['yglu65_1']."' ,
`yglu65_2` = '".$_REQUEST['yglu65_2']."' ,
`antic_1` = '".$_REQUEST['antic_1']."' ,
`antica_2` = '".$_REQUEST['antica_2']."' ,
`egre_rn_1` = '".$_REQUEST['egre_rn_1']."' ,
`egre_rn_2` = '".$_REQUEST['egre_rn_2']."' ,
`egre_rn_3` = '".$_REQUEST['egre_rn_3']."' ,
`egre_rn_4` = '".$_REQUEST['egre_rn_4']."' ,
`egre_rn_5` = '".$_REQUEST['egre_rn_5']."' ,
`egre_rn_6` = '".$_REQUEST['egre_rn_6']."' ,
`egre_rn_7` = '".$_REQUEST['egre_rn_7']."' ,
`egre_rn_8` = '".$_REQUEST['egre_rn_8']."' ,
`egre_rn_9` = '".$_REQUEST['egre_rn_9']."' ,
`egre_rn_10` = '".$_REQUEST['egre_rn_10']."' ,
`egre_rn_11` = '".$_REQUEST['egre_rn_11']."' ,
`egre_rn_12` = '".$_REQUEST['egre_rn_12']."' ,
`egre_rn_13` = '".$_REQUEST['egre_rn_13']."' ,
`egre_rn_14` = '".$_REQUEST['egre_rn_14']."' ,
`egre_rn_15` = '".$_REQUEST['egre_rn_15']."' ,
`egre_rn_16` = '".$_REQUEST['egre_rn_16']."' ,
`egre_rn_17` = '".$_REQUEST['egre_rn_17']."' ,
`egre_rn_18` = '".$_REQUEST['egre_rn_18']."' ,
`egre_rn_19` = '".$_REQUEST['egre_rn_19']."' ,
`egre_rn_20` = '".$_REQUEST['egre_rn_20']."' ,
`egre_rn_21` = '".$_REQUEST['egre_rn_21']."' ,
`egre_rn_22` = '".$_REQUEST['egre_rn_22']."' ,
`egre_rn_23` = '".$_REQUEST['egre_rn_23']."' ,
`inicio_2_4` = '".$_REQUEST['inicio_2_4']."' ,
`inicio_2_5` = '".$_REQUEST['inicio_2_5']."' ,
`inicio_2_6` = '".$_REQUEST['inicio_2_6']."' ,
`inicio_2_7` = '".$_REQUEST['inicio_2_7']."' ,
`inicio_2_8` = '".$_REQUEST['inicio_2_8']."' ,
`inicio_2_9` = '".$_REQUEST['inicio_2_9']."' ,
`inicio_2_10` = '".$_REQUEST['inicio_2_10']."' ,
`edad_ges_partp_1` = '".$_REQUEST['edad_ges_partp_1']."' ,
`edad_ges_partp_2` = '".$_REQUEST['edad_ges_partp_2']."' ,
`edad_ges_partp_3` = '".$_REQUEST['edad_ges_partp_3']."' WHERE `id_hc_embarazo` = '".$_REQUEST['id_hc_embarazo']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_hc_embarazo = 'new';
$sql = "SELECT * from hc_embarazo WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_hc_embarazo = $row['id_hc_embarazo'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$gesta_pre = $row['gesta_pre'];
$abortos = $row['abortos'];
$vaginales = $row['vaginales'];
$nac_vivos = $row['nac_vivos'];
$viven = $row['viven'];
$partos_1 = $row['partos_1'];
$cesaresa_hd = $row['cesaresa_hd'];
$nac_muertos = $row['nac_muertos'];
$muertos1sem = $row['muertos1sem'];
$muertos_despues = $row['muertos_despues'];
$planeado = $row['planeado'];
$metodo_ant = $row['metodo_ant'];
$fin_embaanterior = $row['fin_embaanterior'];
$eptopico = $row['eptopico'];
$gemelos = $row['gemelos'];
$ultimo25 = $row['ultimo25'];
$normal40 = $row['normal40'];
$ges_peso = $row['ges_peso'];
$ges_talla = $row['ges_talla'];
$fpp = $row['fpp'];
$ges__fum = $row['ges__fum'];
$eg_fum = $row['eg_fum'];
$eg_eco = $row['eg_eco'];
$antirubeola_1 = $row['antirubeola_1'];
$fum_1_act = $row['fum_1_act'];
$fum_1_pas = $row['fum_1_pas'];
$fum_1_drog = $row['fum_1_drog'];
$fum_1_alcohol = $row['fum_1_alcohol'];
$fum_1_violencia = $row['fum_1_violencia'];
$fum_2_act = $row['fum_2_act'];
$fum_2_pas = $row['fum_2_pas'];
$fum_2_drog = $row['fum_2_drog'];
$fum_2_alcohol = $row['fum_2_alcohol'];
$fum_2_violencia = $row['fum_2_violencia'];
$fum_3_act = $row['fum_3_act'];
$fum_3_pas = $row['fum_3_pas'];
$fum_3_drog = $row['fum_3_drog'];
$fum_3_alcohol = $row['fum_3_alcohol'];
$fum_3_violencia = $row['fum_3_violencia'];
$ex_mamas = $row['ex_mamas'];
$ex_odon = $row['ex_odon'];
$tetano1 = $row['tetano1'];
$tetano2 = $row['tetano2'];
$tetano3 = $row['tetano3'];
$cervix_1 = $row['cervix_1'];
$cervix_2 = $row['cervix_2'];
$cervix_3 = $row['cervix_3'];
$rh_grupo = $row['rh_grupo'];
$fh_factor = $row['fh_factor'];
$rh_glubo = $row['rh_glubo'];
$rh_inmu = $row['rh_inmu'];
$toxo_1 = $row['toxo_1'];
$toxo_2 = $row['toxo_2'];
$toxo_3 = $row['toxo_3'];
$vih_1 = $row['vih_1'];
$vih_2 = $row['vih_2'];
$vih_3 = $row['vih_3'];
$vih_4 = $row['vih_4'];
$vih_5 = $row['vih_5'];
$vih_6 = $row['vih_6'];
$folatos_1 = $row['folatos_1'];
$folatos_2 = $row['folatos_2'];
$hb20_1 = $row['hb20_1'];
$hb20_2 = $row['hb20_2'];
$estreptoc_1 = $row['estreptoc_1'];
$prep_parto = $row['prep_parto'];
$conse_lact = $row['conse_lact'];
$chagas = $row['chagas'];
$plaudismo_1 = $row['plaudismo_1'];
$bacteriu_1 = $row['bacteriu_1'];
$bacteriu_2 = $row['bacteriu_2'];
$bacteriu_3 = $row['bacteriu_3'];
$bacteriu_4 = $row['bacteriu_4'];
$glicemia_1 = $row['glicemia_1'];
$glicemia_2 = $row['glicemia_2'];
$glicemia_3 = $row['glicemia_3'];
$glicemia_4 = $row['glicemia_4'];
$sifilis20_1 = $row['sifilis20_1'];
$sifilis20_2 = $row['sifilis20_2'];
$sifilis20_3 = $row['sifilis20_3'];
$sifilis20_4 = $row['sifilis20_4'];
$sifilis20_5 = $row['sifilis20_5'];
$sifilis20_6 = $row['sifilis20_6'];
$sifilis20_7 = $row['sifilis20_7'];
$sifilis20_8 = $row['sifilis20_8'];
$sifilis20_9 = $row['sifilis20_9'];
$sifilis20_10 = $row['sifilis20_10'];
$sifilis20_11 = $row['sifilis20_11'];
$sifilis20_12 = $row['sifilis20_12'];
$sifilis20mas_1 = $row['sifilis20mas_1'];
$sifilis20mas_2 = $row['sifilis20mas_2'];
$sifilis20mas_3 = $row['sifilis20mas_3'];
$sifilis20mas_4 = $row['sifilis20mas_4'];
$sifilis20mas_5 = $row['sifilis20mas_5'];
$sifilis20mas_6 = $row['sifilis20mas_6'];
$sifilis20mas_7 = $row['sifilis20mas_7'];
$sifilis20mas_8 = $row['sifilis20mas_8'];
$sifilis20mas_9 = $row['sifilis20mas_9'];
$sifilis20mas_10 = $row['sifilis20mas_10'];
$sifilis20mas_11 = $row['sifilis20mas_11'];
$sifilis20mas_12 = $row['sifilis20mas_12'];
$con_ant_1_1 = $row['con_ant_1_1'];
$con_ant_1_2 = $row['con_ant_1_2'];
$con_ant_1_3 = $row['con_ant_1_3'];
$con_ant_1_4 = $row['con_ant_1_4'];
$con_ant_1_5 = $row['con_ant_1_5'];
$con_ant_1_6 = $row['con_ant_1_6'];
$con_ant_1_7 = $row['con_ant_1_7'];
$con_ant_1_8 = $row['con_ant_1_8'];
$con_ant_1_9 = $row['con_ant_1_9'];
$con_ant_1_10 = $row['con_ant_1_10'];
$con_ant_1_11 = $row['con_ant_1_11'];
$con_ant_1_12 = $row['con_ant_1_12'];
$con_ant_2_1 = $row['con_ant_2_1'];
$con_ant_2_2 = $row['con_ant_2_2'];
$con_ant_2_3 = $row['con_ant_2_3'];
$con_ant_2_4 = $row['con_ant_2_4'];
$con_ant_2_5 = $row['con_ant_2_5'];
$con_ant_2_6 = $row['con_ant_2_6'];
$con_ant_2_7 = $row['con_ant_2_7'];
$con_ant_2_8 = $row['con_ant_2_8'];
$con_ant_2_9 = $row['con_ant_2_9'];
$con_ant_2_10 = $row['con_ant_2_10'];
$con_ant_2_11 = $row['con_ant_2_11'];
$con_ant_2_12 = $row['con_ant_2_12'];
$con_ant_3_1 = $row['con_ant_3_1'];
$con_ant_3_2 = $row['con_ant_3_2'];
$con_ant_3_3 = $row['con_ant_3_3'];
$con_ant_3_4 = $row['con_ant_3_4'];
$con_ant_3_5 = $row['con_ant_3_5'];
$con_ant_3_6 = $row['con_ant_3_6'];
$con_ant_3_7 = $row['con_ant_3_7'];
$con_ant_3_8 = $row['con_ant_3_8'];
$con_ant_3_9 = $row['con_ant_3_9'];
$con_ant_3_10 = $row['con_ant_3_10'];
$con_ant_3_11 = $row['con_ant_3_11'];
$con_ant_3_12 = $row['con_ant_3_12'];
$Parto_65 = $row['Parto_65'];
$aborto_65 = $row['aborto_65'];
$fecha_65 = $row['fecha_65'];
$carnet_65 = $row['carnet_65'];
$total_con_prena = $row['total_con_prena'];
$hops_emb_1 = $row['hops_emb_1'];
$hops_emb_2 = $row['hops_emb_2'];
$corti_1 = $row['corti_1'];
$corti_2 = $row['corti_2'];
$corti_3 = $row['corti_3'];
$corti_4 = $row['corti_4'];
$inicio_1 = $row['inicio_1'];
$inicio_2 = $row['inicio_2'];
$inicio_3 = $row['inicio_3'];
$pre_sit_1 = $row['pre_sit_1'];
$pre_sit_2 = $row['pre_sit_2'];
$pre_sit_3 = $row['pre_sit_3'];
$tama_feto = $row['tama_feto'];
$acompa_1 = $row['acompa_1'];
$acompa_2 = $row['acompa_2'];
$acompa_3 = $row['acompa_3'];
$acompa_4 = $row['acompa_4'];
$acompa_5 = $row['acompa_5'];
$acompa_6 = $row['acompa_6'];
$acompa_7 = $row['acompa_7'];
$acompa_8 = $row['acompa_8'];
$t_parto_1_1 = $row['t_parto_1_1'];
$t_parto_1_2 = $row['t_parto_1_2'];
$t_parto_1_3 = $row['t_parto_1_3'];
$t_parto_1_4 = $row['t_parto_1_4'];
$t_parto_1_5 = $row['t_parto_1_5'];
$t_parto_1_6 = $row['t_parto_1_6'];
$t_parto_1_7 = $row['t_parto_1_7'];
$t_parto_1_8 = $row['t_parto_1_8'];
$t_parto_1_9 = $row['t_parto_1_9'];
$t_parto_1_10 = $row['t_parto_1_10'];
$t_parto_2_1 = $row['t_parto_2_1'];
$t_parto_2_2 = $row['t_parto_2_2'];
$t_parto_2_3 = $row['t_parto_2_3'];
$t_parto_2_4 = $row['t_parto_2_4'];
$t_parto_2_5 = $row['t_parto_2_5'];
$t_parto_2_6 = $row['t_parto_2_6'];
$t_parto_2_7 = $row['t_parto_2_7'];
$t_parto_2_8 = $row['t_parto_2_8'];
$t_parto_2_9 = $row['t_parto_2_9'];
$t_parto_2_10 = $row['t_parto_2_10'];
$t_parto_3_1 = $row['t_parto_3_1'];
$t_parto_3_2 = $row['t_parto_3_2'];
$t_parto_3_3 = $row['t_parto_3_3'];
$t_parto_3_4 = $row['t_parto_3_4'];
$t_parto_3_5 = $row['t_parto_3_5'];
$t_parto_3_6 = $row['t_parto_3_6'];
$t_parto_3_7 = $row['t_parto_3_7'];
$t_parto_3_8 = $row['t_parto_3_8'];
$t_parto_3_9 = $row['t_parto_3_9'];
$t_parto_3_10 = $row['t_parto_3_10'];
$enferme_1 = $row['enferme_1'];
$enferme_2 = $row['enferme_2'];
$enferme_3 = $row['enferme_3'];
$enferme_4 = $row['enferme_4'];
$enferme_5 = $row['enferme_5'];
$enferme_6 = $row['enferme_6'];
$enferme_7 = $row['enferme_7'];
$enferme_8 = $row['enferme_8'];
$enferme_9 = $row['enferme_9'];
$enferme_10 = $row['enferme_10'];
$enferme_11 = $row['enferme_11'];
$enferme_12 = $row['enferme_12'];
$enferme_13 = $row['enferme_13'];
$enferme_14 = $row['enferme_14'];
$enferme_15 = $row['enferme_15'];
$enferme_16 = $row['enferme_16'];
$enferme_17 = $row['enferme_17'];
$enferme_18 = $row['enferme_18'];
$enferme_19 = $row['enferme_19'];
$enferme_20 = $row['enferme_20'];
$enferme_21 = $row['enferme_21'];
$enferme_22 = $row['enferme_22'];
$enferme_23 = $row['enferme_23'];
$enferme_24 = $row['enferme_24'];
$enferme_25 = $row['enferme_25'];
$enferme_26 = $row['enferme_26'];
$enferme_27 = $row['enferme_27'];
$nac2_1 = $row['nac2_1'];
$nac2_2 = $row['nac2_2'];
$nac2_3 = $row['nac2_3'];
$nac2_4 = $row['nac2_4'];
$nac2_5 = $row['nac2_5'];
$nac2_6 = $row['nac2_6'];
$nac2_7 = $row['nac2_7'];
$nac2_8 = $row['nac2_8'];
$nac2_9 = $row['nac2_9'];
$indica_p_1 = $row['indica_p_1'];
$indica_p_2 = $row['indica_p_2'];
$indica_p_3 = $row['indica_p_3'];
$pos_parto = $row['pos_parto'];
$desgarro = $row['desgarro'];
$grado14 = $row['grado14'];
$ocitoc_1 = $row['ocitoc_1'];
$ocitoc_2 = $row['ocitoc_2'];
$placenta_1 = $row['placenta_1'];
$placenta2 = $row['placenta2'];
$placenta3 = $row['placenta3'];
$medicacion_1 = $row['medicacion_1'];
$medicacion_2 = $row['medicacion_2'];
$medicacion_3 = $row['medicacion_3'];
$medicacion_4 = $row['medicacion_4'];
$medicacion_5 = $row['medicacion_5'];
$medicacion_6 = $row['medicacion_6'];
$medicacion_7 = $row['medicacion_7'];
$medicacion_8 = $row['medicacion_8'];
$medicacion_9 = $row['medicacion_9'];
$medicacion_10 = $row['medicacion_10'];
$rnacid_1 = $row['rnacid_1'];
$rnacid_2 = $row['rnacid_2'];
$rnacid_3 = $row['rnacid_3'];
$rnacid_4 = $row['rnacid_4'];
$rnacid_5 = $row['rnacid_5'];
$rnacid_6 = $row['rnacid_6'];
$rnacid_7 = $row['rnacid_7'];
$rnacid_8 = $row['rnacid_8'];
$rnacid_9 = $row['rnacid_9'];
$rnacid_10 = $row['rnacid_10'];
$rnacid_11 = $row['rnacid_11'];
$rnacid_12 = $row['rnacid_12'];
$rnacid_13 = $row['rnacid_13'];
$rnacid_14 = $row['rnacid_14'];
$rnacid_15 = $row['rnacid_15'];
$rnacid_16 = $row['rnacid_16'];
$rnacid_18 = $row['rnacid_18'];
$rnacid_19 = $row['rnacid_19'];
$rnacid_20 = $row['rnacid_20'];
$rnacid_21 = $row['rnacid_21'];
$rnacid2_1 = $row['rnacid2_1'];
$rnacid2_2 = $row['rnacid2_2'];
$rnacid2_3 = $row['rnacid2_3'];
$rnacid2_4 = $row['rnacid2_4'];
$rnacid2_5 = $row['rnacid2_5'];
$rnacid2_6 = $row['rnacid2_6'];
$rnacid2_7 = $row['rnacid2_7'];
$rnacid2_8 = $row['rnacid2_8'];
$rnacid2_9 = $row['rnacid2_9'];
$rnacid2_10 = $row['rnacid2_10'];
$rnacid2_11 = $row['rnacid2_11'];
$rnacid2_12 = $row['rnacid2_12'];
$rnacid2_13 = $row['rnacid2_13'];
$rnacid2_14 = $row['rnacid2_14'];
$rnacid2_15 = $row['rnacid2_15'];
$rnacid2_16 = $row['rnacid2_16'];
$rnacid2_17 = $row['rnacid2_17'];
$rnacid2_18 = $row['rnacid2_18'];
$rnacid2_19 = $row['rnacid2_19'];
$rnacid2_20 = $row['rnacid2_20'];
$puerpe_2_1 = $row['puerpe_2_1'];
$puerpe_2_2 = $row['puerpe_2_2'];
$puerpe_2_3 = $row['puerpe_2_3'];
$puerpe_2_4 = $row['puerpe_2_4'];
$puerpe_2_5 = $row['puerpe_2_5'];
$puerpe_2_6 = $row['puerpe_2_6'];
$meconio_1 = $row['meconio_1'];
$rubeo_1 = $row['rubeo_1'];
$rubeo_2 = $row['rubeo_2'];
$yglu65_1 = $row['yglu65_1'];
$yglu65_2 = $row['yglu65_2'];
$antic_1 = $row['antic_1'];
$antica_2 = $row['antica_2'];
$egre_rn_1 = $row['egre_rn_1'];
$egre_rn_2 = $row['egre_rn_2'];
$egre_rn_3 = $row['egre_rn_3'];
$egre_rn_4 = $row['egre_rn_4'];
$egre_rn_5 = $row['egre_rn_5'];
$egre_rn_6 = $row['egre_rn_6'];
$egre_rn_7 = $row['egre_rn_7'];
$egre_rn_8 = $row['egre_rn_8'];
$egre_rn_9 = $row['egre_rn_9'];
$egre_rn_10 = $row['egre_rn_10'];
$egre_rn_11 = $row['egre_rn_11'];
$egre_rn_12 = $row['egre_rn_12'];
$egre_rn_13 = $row['egre_rn_13'];
$egre_rn_14 = $row['egre_rn_14'];
$egre_rn_15 = $row['egre_rn_15'];
$egre_rn_16 = $row['egre_rn_16'];
$egre_rn_17 = $row['egre_rn_17'];
$egre_rn_18 = $row['egre_rn_18'];
$egre_rn_19 = $row['egre_rn_19'];
$egre_rn_20 = $row['egre_rn_20'];
$egre_rn_21 = $row['egre_rn_21'];
$egre_rn_22 = $row['egre_rn_22'];
$egre_rn_23 = $row['egre_rn_23'];
$inicio_2_4 = $row['inicio_2_4'];
$inicio_2_5 = $row['inicio_2_5'];
$inicio_2_6 = $row['inicio_2_6'];
$inicio_2_7 = $row['inicio_2_7'];
$inicio_2_8 = $row['inicio_2_8'];
$inicio_2_9 = $row['inicio_2_9'];
$inicio_2_10 = $row['inicio_2_10'];
$edad_ges_partp_1 = $row['edad_ges_partp_1'];
$edad_ges_partp_2 = $row['edad_ges_partp_2'];
$edad_ges_partp_3 = $row['edad_ges_partp_3'];
break; }

?>
<script>

$(function(){

$("#close-hc_embarazo").click(function(){
$("#open-hc_embarazo").show();
$(this).hide();
$("#content-hc_embarazo").hide('slow');
});

$("#open-hc_embarazo").click(function(){
$("#close-hc_embarazo").show();
$(this).hide();
$("#content-hc_embarazo").show('slow');
});

});

</script>
<fieldset id="hc_embarazo">
<legend align="left"> <div class="arrow-c" id="close-hc_embarazo"></div> <div class="arrow-o" id="open-hc_embarazo" ></div> <font>Valoracion terapia ocupacional - hc_embarazo</font></legend>
<div id="content-hc_embarazo">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_embarazo" id="guardar_hc_embarazo" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_embarazo" name="form_hc_embarazo" action="<?php echo @$action_form_hc_embarazo ?>#hc_embarazo" method="post">

<input type="hidden" id="id_hc_embarazo" name="id_hc_embarazo" value="<?php echo @$id_hc_embarazo ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="id_hc_embarazo" name="id_hc_embarazo" value="<?php echo @$id_hc_embarazo; ?>" />


HISTORIA CLINICA PERINATAL REGIONAL(ANVERSO)
<p align="center">&nbsp;</p>
<table align="center" cellpadding="0" cellspacing="0" border="0" class="data">
  <col width="154" />
  <col width="132" />
  <col width="121" />
  <col width="94" />
  <col width="130" />
  <col width="111" />
  <col width="126" />
  <col width="110" />
  <tr height="19">
    <td rowspan="7" height="171" width="154">ANTECEDENTES </td>
    <td colspan="7" width="824">OBSTETRICOS</td>
  </tr>
  <tr height="19">
    <td height="19" width="132">Gestas previas</td>
    <td width="121">Abortos</td>
    <td width="94">Vaginales</td>
    <td width="130">Nacidos    vivos</td>
    <td width="111">Viven</td>
    <td width="126">Partos</td>
    <td width="110">Cesareas</td>
  </tr>
  <tr height="19">
    <td height="19" width="132"><input type="text" class="input_txt valid" id="gesta_pre" name="gesta_pre" value="<?php echo @$gesta_pre; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="abortos" name="abortos" value="<?php echo @$abortos; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="vaginales" name="vaginales" value="<?php echo @$vaginales; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="nac_vivos" name="nac_vivos" value="<?php echo @$nac_vivos; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="viven" name="viven" value="<?php echo @$viven; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="partos_1" name="partos_1" value="<?php echo @$partos_1; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="cesaresa_hd" name="cesaresa_hd" value="<?php echo @$cesaresa_hd; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="132">Nacidos muertos</td>
    <td width="121">Muertos    1 semana</td>
    <td width="94">Despues    1 semana</td>
    <td width="130">Embarazo    planeado</td>
    <td width="111">Fracaso    metodo anticonceptivo</td>
    <td width="126">Fin    embarazo Anterior</td>
    <td width="110">Embarazo    Eptopico</td>
  </tr>
  <tr height="19">
    <td height="19" width="132"><input type="text" class="input_txt valid" id="nac_muertos" name="nac_muertos" value="<?php echo @$nac_muertos; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="muertos1sem" name="muertos1sem" value="<?php echo @$muertos1sem; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="muertos_despues" name="muertos_despues" value="<?php echo @$muertos_despues; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="planeado" name="planeado" value="<?php echo @$planeado; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="metodo_ant" name="metodo_ant" value="<?php echo @$metodo_ant; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="fin_embaanterior" name="fin_embaanterior" value="<?php echo @$fin_embaanterior; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="eptopico" name="eptopico" value="<?php echo @$eptopico; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="132">Antecedentes gemelares</td>
    <td width="121">Ultimo    previo&lt;2500gr </td>
    <td width="94">Normal    4000gr</td>
    <td colspan="4" rowspan="2" width="477">&nbsp;</td>
  </tr>
  <tr height="19">
    <td height="19" width="132"><input type="text" class="input_txt valid" id="gemelos" name="gemelos" value="<?php echo @$gemelos; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="ultimo25" name="ultimo25" value="<?php echo @$ultimo25; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="normal40" name="normal40" value="<?php echo @$normal40; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19" width="286">GESTACION ACTUAL</td>
    <td width="121">FPP</td>
    <td width="94">FUM</td>
    <td colspan="2" width="241">EG    CONFIABLE por</td>
    <td colspan="2" width="236">Antirubeola(previa, no sabe, embarazo, no    tiene)</td>
  </tr>
  <tr height="19">
    <td height="19" width="154">Peso</td>
    <td width="132">Talla</td>
    <td width="121" rowspan="2"><input type="text" class="input_txt valid" id="fpp" name="fpp" value="<?php echo @$fpp; ?>" /></td>
    <td width="94" rowspan="2"><input type="text" class="input_txt valid" id="ges__fum" name="ges__fum" value="<?php echo @$ges__fum; ?>" /></td>
    <td width="130">FUM</td>
    <td width="111">ECO    &lt; 20s</td>
    <td colspan="2" rowspan="2" width="236"><input name="antirubeola_1" type="text" id="antirubeola_1" value="<?php echo @$antirubeola_1; ?>" size="30" /></td>
  </tr>
  <tr height="20">
    <td height="20" width="154"><input type="text" class="input_txt valid" id="ges_peso" name="ges_peso" value="<?php echo @$ges_peso; ?>" /></td>
    <td width="132"><input type="text" class="input_txt valid" id="ges_talla" name="ges_talla" value="<?php echo @$ges_talla; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="eg_fum" name="eg_fum" value="<?php echo @$eg_fum; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="eg_eco" name="eg_eco" value="<?php echo @$eg_eco; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="154">FUMADOR</td>
    <td width="132">ACT</td>
    <td width="121">PAS</td>
    <td width="94">DROGAS</td>
    <td width="130">ALCOHOL</td>
    <td width="111">VIOLENCIA</td>
    <td rowspan="4" width="126">EX NORMAL(si/no)</td>
    <td width="110">Mamas</td>
  </tr>
  <tr height="19">
    <td height="19" width="154">1er Trimestre</td>
    <td width="132"><input type="text" class="input_txt valid" id="fum_1_act" name="fum_1_act" value="<?php echo @$fum_1_act; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="fum_1_pas" name="fum_1_pas" value="<?php echo @$fum_1_pas; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="fum_1_drog" name="fum_1_drog" value="<?php echo @$fum_1_drog; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="fum_1_alcohol" name="fum_1_alcohol" value="<?php echo @$fum_1_alcohol; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="fum_1_violencia" name="fum_1_violencia" value="<?php echo @$fum_1_violencia; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="ex_mamas" name="ex_mamas" value="<?php echo @$ex_mamas; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="154">2do Trimestre</td>
    <td width="132"><input type="text" class="input_txt valid" id="fum_2_act" name="fum_2_act" value="<?php echo @$fum_2_act; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="fum_2_pas" name="fum_2_pas" value="<?php echo @$fum_2_pas; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="fum_2_drog" name="fum_2_drog" value="<?php echo @$fum_2_drog; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="fum_2_alcohol" name="fum_2_alcohol" value="<?php echo @$fum_2_alcohol; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="fum_2_violencia" name="fum_2_violencia" value="<?php echo @$fum_2_violencia; ?>" /></td>
    <td width="110">Odont.</td>
  </tr>
  <tr height="20">
    <td height="20" width="154">3er trimestre</td>
    <td width="132"><input type="text" class="input_txt valid" id="fum_3_act" name="fum_3_act" value="<?php echo @$fum_3_act; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="fum_3_pas" name="fum_3_pas" value="<?php echo @$fum_3_pas; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="fum_3_drog" name="fum_3_drog" value="<?php echo @$fum_3_drog; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="fum_3_alcohol" name="fum_3_alcohol" value="<?php echo @$fum_3_alcohol; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="fum_3_violencia" name="fum_3_violencia" value="<?php echo @$fum_3_violencia; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="ex_odon" name="ex_odon" value="<?php echo @$ex_odon; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19" width="407">Antitetanica</td>
    <td colspan="2" width="224">CERVIX(Normal, anormal, no se hizo)</td>
    <td width="111">Factor    RH</td>
    <td width="126">Grupo</td>
    <td width="110"><input type="text" class="input_txt valid" id="rh_grupo" name="rh_grupo" value="<?php echo @$rh_grupo; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="154">Vigente</td>
    <td colspan="2" width="253"><input type="text" class="input_txt valid" id="tetano1" name="tetano1" value="<?php echo @$tetano1; ?>" /></td>
    <td width="94">Ins    Visual</td>
    <td width="130"><input type="text" class="input_txt valid" id="cervix_1" name="cervix_1" value="<?php echo @$cervix_1; ?>" /></td>
    <td width="111">positivo/negativo</td>
    <td width="126">yglubina    anti D</td>
    <td width="110">Inmuniz</td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="39" width="154">Mes gestacion</td>
    <td width="132">Dosis    1</td>
    <td width="121"><input type="text" class="input_txt valid" id="tetano2" name="tetano2" value="<?php echo @$tetano2; ?>" /></td>
    <td width="94">PAP</td>
    <td width="130"><input type="text" class="input_txt valid" id="cervix_2" name="cervix_2" value="<?php echo @$cervix_2; ?>" /></td>
    <td rowspan="2" width="111"><input type="text" class="input_txt valid" id="fh_factor" name="fh_factor" value="<?php echo @$fh_factor; ?>" /></td>
    <td rowspan="2" width="126"><input type="text" class="input_txt valid" id="rh_glubo" name="rh_glubo" value="<?php echo @$rh_glubo; ?>" /></td>
    <td rowspan="2" width="110"><input type="text" class="input_txt valid" id="rh_inmu" name="rh_inmu" value="<?php echo @$rh_inmu; ?>" /></td>
  </tr>
  <tr height="20">
    <td height="20" width="132">Dosis 2</td>
    <td width="121"><input type="text" class="input_txt valid" id="tetano3" name="tetano3" value="<?php echo @$tetano3; ?>" /></td>
    <td width="94">COLP</td>
    <td width="130"><input type="text" class="input_txt valid" id="cervix_3" name="cervix_3" value="<?php echo @$cervix_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19" width="407">Toxoplasmosis(Positivo/Negativo/no se hizo)</td>
    <td colspan="2" width="224">VIH    &lt;20sem</td>
    <td colspan="2" width="237">VIH    &gt;=20sem</td>
    <td width="110">Hb &lt;20 sem</td>
  </tr>
  <tr height="19">
    <td height="19" width="154">&lt;20sem IgG</td>
    <td colspan="2" width="253"><input type="text" class="input_txt valid" id="toxo_1" name="toxo_1" value="<?php echo @$toxo_1; ?>" /></td>
    <td width="94">Solicitado</td>
    <td width="130">Realizado</td>
    <td width="111">Solicitado </td>
    <td width="126">Realizado</td>
    <td width="110"><input type="text" class="input_txt valid" id="vih_5" name="vih_5" value="<?php echo @$vih_5; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="154">&gt;=20sem IgG</td>
    <td colspan="2" width="253"><input type="text" class="input_txt valid" id="toxo_2" name="toxo_2" value="<?php echo @$toxo_2; ?>" /></td>
    <td rowspan="2" width="94"><input type="text" class="input_txt valid" id="vih_1" name="vih_1" value="<?php echo @$vih_1; ?>" /></td>
    <td rowspan="2" width="130"><input type="text" class="input_txt valid" id="vih_2" name="vih_2" value="<?php echo @$vih_2; ?>" /></td>
    <td rowspan="2" width="111"><input type="text" class="input_txt valid" id="vih_3" name="vih_3" value="<?php echo @$vih_3; ?>" /></td>
    <td rowspan="2" width="126"><input type="text" class="input_txt valid" id="vih_4" name="vih_4" value="<?php echo @$vih_4; ?>" /></td>
    <td width="110">&lt;11,0 g/dl</td>
  </tr>
  <tr height="20">
    <td height="20" width="154">1ra consulta IgM</td>
    <td colspan="2" width="253"><input type="text" class="input_txt valid" id="toxo_3" name="toxo_3" value="<?php echo @$toxo_3; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="vih_6" name="vih_6" value="<?php echo @$vih_6; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19" width="286">Fe/FOLATOS indicados</td>
    <td colspan="2" width="215">Hb&gt;=20sem</td>
    <td colspan="2" width="241">Estreptococo B</td>
    <td colspan="2" width="236">Consejeria Lactancia Materna (S/N)</td>
  </tr>
  <tr height="20">
    <td height="20" width="154">Fe (S/N)</td>
    <td width="132">Folatos(S/N)</td>
    <td colspan="2" width="215"><input type="text" class="input_txt valid" id="hb20_1" name="hb20_1" value="<?php echo @$hb20_1; ?>" /></td>
    <td width="130">Pos/neg/no    se hizo</td>
    <td width="111"><input type="text" class="input_txt valid" id="estreptoc_1" name="estreptoc_1" value="<?php echo @$estreptoc_1; ?>" /></td>
    <td colspan="2" width="236"><input type="text" class="input_txt valid" id="conse_lact" name="conse_lact" value="<?php echo @$conse_lact; ?>" /></td>
  </tr>
  <tr height="39">
    <td height="39" width="154"><input type="text" class="input_txt valid" id="folatos_1" name="folatos_1" value="<?php echo @$folatos_1; ?>" /></td>
    <td width="132"><input type="text" class="input_txt valid" id="folatos_2" name="folatos_2" value="<?php echo @$folatos_2; ?>" /></td>
    <td width="121">&lt;11,0    g/dl</td>
    <td width="94"><input type="text" class="input_txt valid" id="hb20_2" name="hb20_2" value="<?php echo @$hb20_2; ?>" /></td>
    <td width="130">PREPARACION    PARTO (s/n)</td>
    <td width="111"><input type="text" class="input_txt valid" id="prep_parto" name="prep_parto" value="<?php echo @$prep_parto; ?>" /></td>
    <td width="126">Chagas(Pos/neg/no    se hizo)</td>
    <td width="110"><input type="text" class="input_txt valid" id="chagas" name="chagas" value="<?php echo @$chagas; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="154" />
  <col width="132" />
  <col width="121" />
  <col width="94" />
  <col width="130" />
  <col width="111" />
  <col width="126" />
  <col width="110" />
  <tr height="19">
    <td rowspan="2" height="38" width="154">PALUDISMO    (Pos/neg/no se hizo)</td>
    <td width="132">BACTERIURIA</td>
    <td width="121">NORMAL/ANORMAL</td>
    <td width="94">NO SE HIZO</td>
    <td colspan="4" width="477">GLICEMIA</td>
  </tr>
  <tr height="19">
    <td height="19" width="132">BACTERIURIA &lt;20</td>
    <td width="121"><input type="text" class="input_txt valid" id="bacteriu_1" name="bacteriu_1" value="<?php echo @$bacteriu_1; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="bacteriu_2" name="bacteriu_2" value="<?php echo @$bacteriu_2; ?>" /></td>
    <td width="130">&lt;20</td>
    <td width="111"><input type="text" class="input_txt valid" id="glicemia_1" name="glicemia_1" value="<?php echo @$glicemia_1; ?>" /></td>
    <td width="126">&gt;=105MG/DL</td>
    <td width="110"><input type="text" class="input_txt valid" id="glicemia_2" name="glicemia_2" value="<?php echo @$glicemia_2; ?>" /></td>
  </tr>
  <tr height="20">
    <td height="20" width="154"><input type="text" class="input_txt valid" id="plaudismo_1" name="plaudismo_1" value="<?php echo @$plaudismo_1; ?>" /></td>
    <td width="132">BACTERIURIA    &gt;=20</td>
    <td width="121"><input type="text" class="input_txt valid" id="bacteriu_3" name="bacteriu_3" value="<?php echo @$bacteriu_3; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="bacteriu_4" name="bacteriu_4" value="<?php echo @$bacteriu_4; ?>" /></td>
    <td width="130">&gt;=20</td>
    <td width="111"><input type="text" class="input_txt valid" id="glicemia_3" name="glicemia_3" value="<?php echo @$glicemia_3; ?>" /></td>
    <td width="126">&gt;=105MG/DL</td>
    <td width="110"><input type="text" class="input_txt valid" id="glicemia_4" name="glicemia_4" value="<?php echo @$glicemia_4; ?>" /></td>
  </tr>
</table>
<p>&nbsp;	</p>
<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="154" />
  <col width="132" />
  <col width="121" />
  <col width="94" />
  <col width="130" />
  <col width="111" />
  <col width="126" />
  <col width="110" />
  <col width="131" />
  <col width="120" />
  <tr height="19">
    <td rowspan="4" height="77" width="154">SIFILIS &lt;20 Sem</td>
    <td width="132">&lt;20 Sem</td>
    <td colspan="2" width="215">No    treponemica</td>
    <td colspan="2" width="241">Treponemica</td>
    <td colspan="2" width="236">Tratamiento</td>
    <td colspan="2" width="251">Tto Pareja</td>
  </tr>
  <tr height="19">
    <td rowspan="3" height="58" width="132"><input type="text" class="input_txt valid" id="sifilis20_1" name="sifilis20_1" value="<?php echo @$sifilis20_1; ?>" /></td>
    <td width="121">Pos/neg</td>
    <td width="94"><input type="text" class="input_txt valid" id="sifilis20_2" name="sifilis20_2" value="<?php echo @$sifilis20_2; ?>" /></td>
    <td width="130">pos/neg </td>
    <td width="111"><input type="text" class="input_txt valid" id="sifilis20_4" name="sifilis20_4" value="<?php echo @$sifilis20_4; ?>" /></td>
    <td width="126">si/no</td>
    <td width="110"><input type="text" class="input_txt valid" id="sifilis20_7" name="sifilis20_7" value="<?php echo @$sifilis20_7; ?>" /></td>
    <td width="131">si/no</td>
    <td width="120"><input type="text" class="input_txt valid" id="sifilis20_10" name="sifilis20_10" value="<?php echo @$sifilis20_10; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="39" width="121">s/d</td>
    <td rowspan="2" width="94"><input type="text" class="input_txt valid" id="sifilis20_3" name="sifilis20_3" value="<?php echo @$sifilis20_3; ?>" /></td>
    <td width="130">s/d</td>
    <td width="111"><input type="text" class="input_txt valid" id="sifilis20_5" name="sifilis20_5" value="<?php echo @$sifilis20_5; ?>" /></td>
    <td width="126">s/d</td>
    <td width="110"><input type="text" class="input_txt valid" id="sifilis20_8" name="sifilis20_8" value="<?php echo @$sifilis20_8; ?>" /></td>
    <td width="131">s/d</td>
    <td width="120"><input type="text" class="input_txt valid" id="sifilis20_11" name="sifilis20_11" value="<?php echo @$sifilis20_11; ?>" /></td>
  </tr>
  <tr height="20">
    <td height="20" width="130">n/c</td>
    <td width="111"><input type="text" class="input_txt valid" id="sifilis20_6" name="sifilis20_6" value="<?php echo @$sifilis20_6; ?>" /></td>
    <td width="126">n/c</td>
    <td width="110"><input type="text" class="input_txt valid" id="sifilis20_9" name="sifilis20_9" value="<?php echo @$sifilis20_9; ?>" /></td>
    <td width="131">n/c</td>
    <td width="120"><input type="text" class="input_txt valid" id="sifilis20_12" name="sifilis20_12" value="<?php echo @$sifilis20_12; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="4" height="77" width="154">SIFILIS &gt;=20 Sem</td>
    <td width="132">&lt;20 Sem</td>
    <td colspan="2" width="215">No    treponemica</td>
    <td colspan="2" width="241">Treponemica</td>
    <td colspan="2" width="236">Tratamiento</td>
    <td colspan="2" width="251">Tto Pareja</td>
  </tr>
  <tr height="19">
    <td rowspan="3" height="58" width="132"><input type="text" class="input_txt valid" id="sifilis20mas_1" name="sifilis20mas_1" value="<?php echo @$sifilis20mas_1; ?>" /></td>
    <td width="121">Pos/neg</td>
    <td width="94"><input type="text" class="input_txt valid" id="sifilis20mas_2" name="sifilis20mas_2" value="<?php echo @$sifilis20mas_2; ?>" /></td>
    <td width="130">pos/neg </td>
    <td width="111"><input type="text" class="input_txt valid" id="sifilis20mas_4" name="sifilis20mas_4" value="<?php echo @$sifilis20mas_4; ?>" /></td>
    <td width="126">si/no</td>
    <td width="110"><input type="text" class="input_txt valid" id="sifilis20mas_7" name="sifilis20mas_7" value="<?php echo @$sifilis20mas_7; ?>" /></td>
    <td width="131">si/no</td>
    <td width="120"><input type="text" class="input_txt valid" id="sifilis20mas_10" name="sifilis20mas_10" value="<?php echo @$sifilis20mas_10; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="39" width="121">s/d</td>
    <td rowspan="2" width="94"><input type="text" class="input_txt valid" id="sifilis20mas_3" name="sifilis20mas_3" value="<?php echo @$sifilis20mas_3; ?>" /></td>
    <td width="130">s/d</td>
    <td width="111"><input type="text" class="input_txt valid" id="sifilis20mas_5" name="sifilis20mas_5" value="<?php echo @$sifilis20mas_5; ?>" /></td>
    <td width="126">s/d</td>
    <td width="110"><input type="text" class="input_txt valid" id="sifilis20mas_8" name="sifilis20mas_8" value="<?php echo @$sifilis20mas_8; ?>" /></td>
    <td width="131">s/d</td>
    <td width="120"><input type="text" class="input_txt valid" id="sifilis20mas_11" name="sifilis20mas_11" value="<?php echo @$sifilis20mas_11; ?>" /></td>
  </tr>
  <tr height="20">
    <td height="20" width="130">n/c</td>
    <td width="111"><input type="text" class="input_txt valid" id="sifilis20mas_6" name="sifilis20mas_6" value="<?php echo @$sifilis20mas_6; ?>" /></td>
    <td width="126">n/c</td>
    <td width="110"><input type="text" class="input_txt valid" id="sifilis20mas_9" name="sifilis20mas_9" value="<?php echo @$sifilis20mas_9; ?>" /></td>
    <td width="131">n/c</td>
    <td width="120"><input type="text" class="input_txt valid" id="sifilis20mas_12" name="sifilis20mas_12" value="<?php echo @$sifilis20mas_12; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="154" />
  <col width="132" />
  <col width="121" />
  <col width="94" />
  <col width="130" />
  <col width="111" />
  <col width="126" />
  <col width="110" />
  <col width="131" />
  <col width="120" />
  <col width="140" />
  <col width="83" span="2" />
  <tr height="58">
    <td rowspan="4" height="116" width="154">CONSULTAS ANTENATALES</td>
    <td width="132">Fecha</td>
    <td width="121">Edad Ges</td>
    <td width="94">Peso</td>
    <td width="130">PA</td>
    <td width="111">Altura</td>
    <td width="126">Presentacion</td>
    <td width="110">FCF(lpm)</td>
    <td width="131">Mov Fetales</td>
    <td width="120">Porteinuria</td>
    <td width="140">Signos de    alarma,Examexamenes,trat.</td>
    <td width="83">Iniciales tecnico</td>
    <td width="83">Prox Cita</td>
  </tr>
  <tr height="19">
    <td height="19" width="132"><input type="text" class="input_txt valid" id="con_ant_1_1" name="con_ant_1_1" value="<?php echo @$con_ant_1_1; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="con_ant_1_2" name="con_ant_1_2" value="<?php echo @$con_ant_1_2; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="con_ant_1_3" name="con_ant_1_3" value="<?php echo @$con_ant_1_3; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="con_ant_1_4" name="con_ant_1_4" value="<?php echo @$con_ant_1_4; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="con_ant_1_5" name="con_ant_1_5" value="<?php echo @$con_ant_1_5; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="con_ant_1_6" name="con_ant_1_6" value="<?php echo @$con_ant_1_6; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="con_ant_1_7" name="con_ant_1_7" value="<?php echo @$con_ant_1_7; ?>" /></td>
    <td width="131"><input type="text" class="input_txt valid" id="con_ant_1_8" name="con_ant_1_8" value="<?php echo @$con_ant_1_8; ?>" /></td>
    <td width="120"><input type="text" class="input_txt valid" id="con_ant_1_9" name="con_ant_1_9" value="<?php echo @$con_ant_1_9; ?>" /></td>
    <td width="140"><input type="text" class="input_txt valid" id="con_ant_1_10" name="con_ant_1_10" value="<?php echo @$con_ant_1_10; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="con_ant_1_11" name="con_ant_1_11" value="<?php echo @$con_ant_1_11; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="con_ant_1_12" name="con_ant_1_12" value="<?php echo @$con_ant_1_12; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="132"><input type="text" class="input_txt valid" id="con_ant_2_1" name="con_ant_2_1" value="<?php echo @$con_ant_2_1; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="con_ant_2_2" name="con_ant_2_2" value="<?php echo @$con_ant_2_2; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="con_ant_2_3" name="con_ant_2_3" value="<?php echo @$con_ant_2_3; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="con_ant_2_4" name="con_ant_2_4" value="<?php echo @$con_ant_2_4; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="con_ant_2_5" name="con_ant_2_5" value="<?php echo @$con_ant_2_5; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="con_ant_2_6" name="con_ant_2_6" value="<?php echo @$con_ant_2_6; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="con_ant_2_7" name="con_ant_2_7" value="<?php echo @$con_ant_2_7; ?>" /></td>
    <td width="131"><input type="text" class="input_txt valid" id="con_ant_2_8" name="con_ant_2_8" value="<?php echo @$con_ant_2_8; ?>" /></td>
    <td width="120"><input type="text" class="input_txt valid" id="con_ant_2_9" name="con_ant_2_9" value="<?php echo @$con_ant_2_9; ?>" /></td>
    <td width="140"><input type="text" class="input_txt valid" id="con_ant_2_10" name="con_ant_2_10" value="<?php echo @$con_ant_2_10; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="con_ant_2_11" name="con_ant_2_11" value="<?php echo @$con_ant_2_11; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="con_ant_2_12" name="con_ant_2_12" value="<?php echo @$con_ant_2_12; ?>" /></td>
  </tr>
  <tr height="20">
    <td height="20" width="132"><input type="text" class="input_txt valid" id="con_ant_3_1" name="con_ant_3_1" value="<?php echo @$con_ant_3_1; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="con_ant_3_2" name="con_ant_3_2" value="<?php echo @$con_ant_3_2; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="con_ant_3_3" name="con_ant_3_3" value="<?php echo @$con_ant_3_3; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="con_ant_3_4" name="con_ant_3_4" value="<?php echo @$con_ant_3_4; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="con_ant_3_5" name="con_ant_3_5" value="<?php echo @$con_ant_3_5; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="con_ant_3_6" name="con_ant_3_6" value="<?php echo @$con_ant_3_6; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="con_ant_3_7" name="con_ant_3_7" value="<?php echo @$con_ant_3_7; ?>" /></td>
    <td width="131"><input type="text" class="input_txt valid" id="con_ant_3_8" name="con_ant_3_8" value="<?php echo @$con_ant_3_8; ?>" /></td>
    <td width="120"><input type="text" class="input_txt valid" id="con_ant_3_9" name="con_ant_3_9" value="<?php echo @$con_ant_3_9; ?>" /></td>
    <td width="140"><input type="text" class="input_txt valid" id="con_ant_3_10" name="con_ant_3_10" value="<?php echo @$con_ant_3_10; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="con_ant_3_11" name="con_ant_3_11" value="<?php echo @$con_ant_3_11; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="con_ant_3_12" name="con_ant_3_12" value="<?php echo @$con_ant_3_12; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="154" />
  <col width="132" />
  <col width="121" />
  <col width="94" />
  <col width="130" />
  <col width="111" />
  <col width="126" />
  <col width="110" />
  <col width="131" />
  <col width="120" />
  <tr height="38">
    <td height="38" width="154">Parto</td>
    <td width="132"><input type="text" class="input_txt valid" id="Parto_65" name="Parto_65" value="<?php echo @$Parto_65; ?>" /></td>
    <td width="121">Carnet(si/no)</td>
    <td rowspan="2" width="94">Total Cosultas    Prenatales</td>
    <td colspan="2" width="241">Hosp. Embarazo</td>
    <td colspan="4" width="487">Corticoides antenatales</td>
  </tr>
  <tr height="38">
    <td height="38" width="154">Aborto</td>
    <td width="132"><input type="text" class="input_txt valid" id="aborto_65" name="aborto_65" value="<?php echo @$aborto_65; ?>" /></td>
    <td rowspan="2" width="121"><input type="text" class="input_txt valid" id="carnet_65" name="carnet_65" value="<?php echo @$carnet_65; ?>" /></td>
    <td width="130">Si/no</td>
    <td width="111"><input type="text" class="input_txt valid" id="hops_emb_1" name="hops_emb_1" value="<?php echo @$hops_emb_1; ?>" /></td>
    <td width="126">Complemento/incomplemento</td>
    <td width="110">Ninguna</td>
    <td width="131">n/c</td>
    <td width="120">semana    inicio</td>
  </tr>
  <tr height="20">
    <td height="20" width="154">Fecha Ingreso</td>
    <td width="132"><input type="text" class="input_txt valid" id="fecha_65" name="fecha_65" value="<?php echo @$fecha_65; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="total_con_prena" name="total_con_prena" value="<?php echo @$total_con_prena; ?>" /></td>
    <td width="130">N° dias</td>
    <td width="111"><input type="text" class="input_txt valid" id="hops_emb_2" name="hops_emb_2" value="<?php echo @$hops_emb_2; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="corti_1" name="corti_1" value="<?php echo @$corti_1; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="corti_2" name="corti_2" value="<?php echo @$corti_2; ?>" /></td>
    <td width="131"><input type="text" class="input_txt valid" id="corti_3" name="corti_3" value="<?php echo @$corti_3; ?>" /></td>
    <td width="120"><input type="text" class="input_txt valid" id="corti_4" name="corti_4" value="<?php echo @$corti_4; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="154" />
  <col width="132" />
  <col width="121" />
  <col width="94" />
  <col width="130" />
  <col width="111" />
  <col width="126" />
  <col width="110" />
  <col width="131" />
  <col width="120" />
  <tr height="19">
    <td colspan="3" height="19" width="407">INICIO</td>
    <td colspan="7" width="822">Rotura de membrana anteparto</td>
  </tr>
  <tr height="19">
    <td height="19" width="154">Espontaneo</td>
    <td width="132">Inducido</td>
    <td width="121">Cesar.    Elec</td>
    <td width="94">Si/no</td>
    <td width="130">fecha</td>
    <td width="111">hora</td>
    <td width="126">&lt;37    Sem</td>
    <td width="110">&gt;=18    hr</td>
    <td width="131">Temperatura</td>
    <td width="120">T    &gt;=38°C</td>
  </tr>
  <tr height="20">
    <td height="20" width="154"><input type="text" class="input_txt valid" id="inicio_1" name="inicio_1" value="<?php echo @$inicio_1; ?>" /></td>
    <td width="132"><input type="text" class="input_txt valid" id="inicio_2" name="inicio_2" value="<?php echo @$inicio_2; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="inicio_3" name="inicio_3" value="<?php echo @$inicio_3; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="inicio_2_4" name="inicio_2_4" value="<?php echo @$inicio_2_4; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="inicio_2_5" name="inicio_2_5" value="<?php echo @$inicio_2_5; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="inicio_2_6" name="inicio_2_6" value="<?php echo @$inicio_2_6; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="inicio_2_7" name="inicio_2_7" value="<?php echo @$inicio_2_7; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="inicio_2_8" name="inicio_2_8" value="<?php echo @$inicio_2_8; ?>" /></td>
    <td width="131"><input type="text" class="input_txt valid" id="inicio_2_9" name="inicio_2_9" value="<?php echo @$inicio_2_9; ?>" /></td>
    <td width="120"><input type="text" class="input_txt valid" id="inicio_2_10" name="inicio_2_10" value="<?php echo @$inicio_2_10; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="154" />
  <col width="132" />
  <col width="121" />
  <col width="94" />
  <col width="130" />
  <col width="111" />
  <col width="126" />
  <col width="110" />
  <tr height="19">
    <td colspan="3" height="19" width="407">EDAD GES al parto</td>
    <td colspan="3" width="335">Presentacion Situacion</td>
    <td colspan="2" width="236">Tamaño Fetal Acorde</td>
  </tr>
  <tr height="19">
    <td height="19" width="154">Semanas y dias</td>
    <td width="132">Por    FUM</td>
    <td width="121">Por    ECO</td>
    <td width="94">Cefalica</td>
    <td width="130">Pelvica</td>
    <td width="111">Transversa</td>
    <td rowspan="2" width="126">si /no</td>
    <td rowspan="2" width="110"><input type="text" class="input_txt valid" id="tama_feto" name="tama_feto" value="<?php echo @$tama_feto; ?>" /></td>
  </tr>
  <tr height="20">
    <td height="20" width="154"><input type="text" class="input_txt valid" id="edad_ges_partp_1" name="edad_ges_partp_1" value="<?php echo @$edad_ges_partp_1; ?>" /></td>
    <td width="132"><input type="text" class="input_txt valid" id="edad_ges_partp_2" name="edad_ges_partp_2" value="<?php echo @$edad_ges_partp_2; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="edad_ges_partp_3" name="edad_ges_partp_3" value="<?php echo @$edad_ges_partp_3; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="pre_sit_1" name="pre_sit_1" value="<?php echo @$pre_sit_1; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="pre_sit_2" name="pre_sit_2" value="<?php echo @$pre_sit_2; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="pre_sit_3" name="pre_sit_3" value="<?php echo @$pre_sit_3; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="154" />
  <col width="132" />
  <col width="121" />
  <col width="94" />
  <col width="130" />
  <tr height="19">
    <td height="19" width="154">Acompañante</td>
    <td width="132">Pareja</td>
    <td width="121">Familiar</td>
    <td width="94">Otro</td>
    <td width="130">Ninguno</td>
  </tr>
  <tr height="19">
    <td height="19" width="154">TDP </td>
    <td width="132"><input type="text" class="input_txt valid" id="acompa_3" name="acompa_3" value="<?php echo @$acompa_3; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="acompa_2" name="acompa_2" value="<?php echo @$acompa_2; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="acompa_1" name="acompa_1" value="<?php echo @$acompa_1; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="acompa_4" name="acompa_4" value="<?php echo @$acompa_4; ?>" /></td>
  </tr>
  <tr height="20">
    <td height="20" width="154">P</td>
    <td width="132"><input type="text" class="input_txt valid" id="acompa_5" name="acompa_5" value="<?php echo @$acompa_5; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="acompa_6" name="acompa_6" value="<?php echo @$acompa_6; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="acompa_7" name="acompa_7" value="<?php echo @$acompa_7; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="acompa_8" name="acompa_8" value="<?php echo @$acompa_8; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="154" />
  <col width="132" />
  <col width="121" />
  <col width="94" />
  <col width="130" />
  <col width="111" />
  <col width="126" />
  <col width="110" />
  <col width="131" />
  <col width="120" />
  <col width="140" />
  <tr height="19">
    <td rowspan="4" height="77" width="154">TRABAJO DE PARTO</td>
    <td width="132">Hora</td>
    <td width="121">Posicion Madre</td>
    <td width="94">PA</td>
    <td width="130">Pulso</td>
    <td width="111">Contrac/10'</td>
    <td width="126">Dilatacion</td>
    <td width="110">Altura presente</td>
    <td width="131">Variedad    posicion</td>
    <td width="120">Meconio</td>
    <td width="140">FCF/Disp</td>
  </tr>
  <tr height="19">
    <td height="19" width="132"><input type="text" class="input_txt valid" id="t_parto_1_1" name="t_parto_1_1" value="<?php echo @$t_parto_1_1; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="t_parto_1_2" name="t_parto_1_2" value="<?php echo @$t_parto_1_2; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="t_parto_1_3" name="t_parto_1_3" value="<?php echo @$t_parto_1_3; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="t_parto_1_4" name="t_parto_1_4" value="<?php echo @$t_parto_1_4; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="t_parto_1_5" name="t_parto_1_5" value="<?php echo @$t_parto_1_5; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="t_parto_1_6" name="t_parto_1_6" value="<?php echo @$t_parto_1_6; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="t_parto_1_7" name="t_parto_1_7" value="<?php echo @$t_parto_1_7; ?>" /></td>
    <td width="131"><input type="text" class="input_txt valid" id="t_parto_1_8" name="t_parto_1_8" value="<?php echo @$t_parto_1_8; ?>" /></td>
    <td width="120"><input type="text" class="input_txt valid" id="t_parto_1_9" name="t_parto_1_9" value="<?php echo @$t_parto_1_9; ?>" /></td>
    <td width="140"><input type="text" class="input_txt valid" id="t_parto_1_10" name="t_parto_1_10" value="<?php echo @$t_parto_1_10; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="132"><input type="text" class="input_txt valid" id="t_parto_2_1" name="t_parto_2_1" value="<?php echo @$t_parto_2_1; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="t_parto_2_2" name="t_parto_2_2" value="<?php echo @$t_parto_2_2; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="t_parto_2_3" name="t_parto_2_3" value="<?php echo @$t_parto_2_3; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="t_parto_2_4" name="t_parto_2_4" value="<?php echo @$t_parto_2_4; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="t_parto_2_5" name="t_parto_2_5" value="<?php echo @$t_parto_2_5; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="t_parto_2_6" name="t_parto_2_6" value="<?php echo @$t_parto_2_6; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="t_parto_2_7" name="t_parto_2_7" value="<?php echo @$t_parto_2_7; ?>" /></td>
    <td width="131"><input type="text" class="input_txt valid" id="t_parto_2_8" name="t_parto_2_8" value="<?php echo @$t_parto_2_8; ?>" /></td>
    <td width="120"><input type="text" class="input_txt valid" id="t_parto_2_9" name="t_parto_2_9" value="<?php echo @$t_parto_2_9; ?>" /></td>
    <td width="140"><input type="text" class="input_txt valid" id="t_parto_2_10" name="t_parto_2_10" value="<?php echo @$t_parto_2_10; ?>" /></td>
  </tr>
  <tr height="20">
    <td height="20" width="132"><input type="text" class="input_txt valid" id="t_parto_3_1" name="t_parto_3_1" value="<?php echo @$t_parto_3_1; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="t_parto_3_2" name="t_parto_3_2" value="<?php echo @$t_parto_3_2; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="t_parto_3_3" name="t_parto_3_3" value="<?php echo @$t_parto_3_3; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="t_parto_3_4" name="t_parto_3_4" value="<?php echo @$t_parto_3_4; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="t_parto_3_5" name="t_parto_3_5" value="<?php echo @$t_parto_3_5; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="t_parto_3_6" name="t_parto_3_6" value="<?php echo @$t_parto_3_6; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="t_parto_3_7" name="t_parto_3_7" value="<?php echo @$t_parto_3_7; ?>" /></td>
    <td width="131"><input type="text" class="input_txt valid" id="t_parto_3_8" name="t_parto_3_8" value="<?php echo @$t_parto_3_8; ?>" /></td>
    <td width="120"><input type="text" class="input_txt valid" id="t_parto_3_9" name="t_parto_3_9" value="<?php echo @$t_parto_3_9; ?>" /></td>
    <td width="140"><input type="text" class="input_txt valid" id="t_parto_3_10" name="t_parto_3_10" value="<?php echo @$t_parto_3_10; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="154" />
  <col width="132" />
  <col width="121" />
  <col width="94" />
  <col width="130" />
  <col width="111" />
  <col width="126" />
  <tr height="19">
    <td colspan="6" height="19" width="742">Enfermedades(s/n)</td>
    <td width="126">&nbsp;</td>
  </tr>
  <tr height="19">
    <td height="19" width="154">Ninguna</td>
    <td width="132"><input type="text" class="input_txt valid" id="enferme_1" name="enferme_1" value="<?php echo @$enferme_1; ?>" /></td>
    <td width="121">Infec    Ovular</td>
    <td width="94"><input type="text" class="input_txt valid" id="enferme_9" name="enferme_9" value="<?php echo @$enferme_9; ?>" /></td>
    <td width="130">Hemorragia</td>
    <td width="111">s/n</td>
    <td width="126">Codigo</td>
  </tr>
  <tr height="19">
    <td height="19" width="154">1 o mas</td>
    <td width="132"><input type="text" class="input_txt valid" id="enferme_2" name="enferme_2" value="<?php echo @$enferme_2; ?>" /></td>
    <td width="121">Infec    Urinaria</td>
    <td width="94"><input type="text" class="input_txt valid" id="enferme_10" name="enferme_10" value="<?php echo @$enferme_10; ?>" /></td>
    <td width="130">1er    trim</td>
    <td width="111"><input type="text" class="input_txt valid" id="enferme_17" name="enferme_17" value="<?php echo @$enferme_17; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="enferme_18" name="enferme_18" value="<?php echo @$enferme_18; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="154">HTA Previa</td>
    <td width="132"><input type="text" class="input_txt valid" id="enferme_3" name="enferme_3" value="<?php echo @$enferme_3; ?>" /></td>
    <td width="121">Amenaza    parto preter</td>
    <td width="94"><input type="text" class="input_txt valid" id="enferme_11" name="enferme_11" value="<?php echo @$enferme_11; ?>" /></td>
    <td width="130">2do    trim</td>
    <td width="111"><input type="text" class="input_txt valid" id="enferme_19" name="enferme_19" value="<?php echo @$enferme_19; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="enferme_20" name="enferme_20" value="<?php echo @$enferme_20; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="154">HTA inducida embarazo</td>
    <td width="132"><input type="text" class="input_txt valid" id="enferme_4" name="enferme_4" value="<?php echo @$enferme_4; ?>" /></td>
    <td width="121">R.C.I.U</td>
    <td width="94"><input type="text" class="input_txt valid" id="enferme_12" name="enferme_12" value="<?php echo @$enferme_12; ?>" /></td>
    <td width="130">3er    trim</td>
    <td width="111"><input type="text" class="input_txt valid" id="enferme_21" name="enferme_21" value="<?php echo @$enferme_21; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="enferme_22" name="enferme_22" value="<?php echo @$enferme_22; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="154">Preeclamsia</td>
    <td width="132"><input type="text" class="input_txt valid" id="enferme_5" name="enferme_5" value="<?php echo @$enferme_5; ?>" /></td>
    <td width="121">Rotura    prem de membranas</td>
    <td width="94"><input type="text" class="input_txt valid" id="enferme_13" name="enferme_13" value="<?php echo @$enferme_13; ?>" /></td>
    <td width="130">Posparto</td>
    <td width="111"><input type="text" class="input_txt valid" id="enferme_23" name="enferme_23" value="<?php echo @$enferme_23; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="enferme_24" name="enferme_24" value="<?php echo @$enferme_24; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="154">Ecalamcia</td>
    <td width="132"><input type="text" class="input_txt valid" id="enferme_6" name="enferme_6" value="<?php echo @$enferme_6; ?>" /></td>
    <td width="121">Anemia</td>
    <td width="94"><input type="text" class="input_txt valid" id="enferme_14" name="enferme_14" value="<?php echo @$enferme_14; ?>" /></td>
    <td width="130">Infec    puerperal</td>
    <td width="111"><input type="text" class="input_txt valid" id="enferme_25" name="enferme_25" value="<?php echo @$enferme_25; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="enferme_26" name="enferme_26" value="<?php echo @$enferme_26; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="154">Cardiopatia</td>
    <td width="132"><input type="text" class="input_txt valid" id="enferme_7" name="enferme_7" value="<?php echo @$enferme_7; ?>" /></td>
    <td width="121">Otra    con Grave</td>
    <td width="94"><input type="text" class="input_txt valid" id="enferme_15" name="enferme_15" value="<?php echo @$enferme_15; ?>" /></td>
    <td rowspan="2" width="130">Notas</td>
    <td colspan="2" rowspan="2" width="237"><input type="text" class="input_txt valid" id="enferme_27" name="enferme_27" value="<?php echo @$enferme_27; ?>" /></td>
  </tr>
  <tr height="20">
    <td height="20" width="154">Nefropatia</td>
    <td width="132"><input type="text" class="input_txt valid" id="enferme_8" name="enferme_8" value="<?php echo @$enferme_8; ?>" /></td>
    <td width="121">Diabetes</td>
    <td width="94"><input type="text" class="input_txt valid" id="enferme_16" name="enferme_16" value="<?php echo @$enferme_16; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="154" />
  <col width="132" />
  <col width="121" />
  <col width="94" />
  <col width="130" />
  <col width="111" />
  <col width="126" />
  <col width="110" />
  <col width="131" />
  <col width="120" />
  <tr height="77">
    <td rowspan="2" height="97" width="154">NACIMIENTO</td>
    <td width="132">Vivo</td>
    <td width="121">Muerto anteparto</td>
    <td width="94">Parto</td>
    <td width="130">Ignora momento</td>
    <td width="111">Hora</td>
    <td width="126">Fecha</td>
    <td width="110">Multiple</td>
    <td width="131">Orden</td>
    <td width="120">Terminacion(Espontanea,    cesarea forceps,vacuum, otra)</td>
  </tr>
  <tr height="20">
    <td height="20" width="132"><input type="text" class="input_txt valid" id="nac2_1" name="nac2_1" value="<?php echo @$nac2_1; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="nac2_2" name="nac2_2" value="<?php echo @$nac2_2; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="nac2_3" name="nac2_3" value="<?php echo @$nac2_3; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="nac2_4" name="nac2_4" value="<?php echo @$nac2_4; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="nac2_5" name="nac2_5" value="<?php echo @$nac2_5; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="nac2_6" name="nac2_6" value="<?php echo @$nac2_6; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="nac2_7" name="nac2_7" value="<?php echo @$nac2_7; ?>" /></td>
    <td width="131"><input type="text" class="input_txt valid" id="nac2_8" name="nac2_8" value="<?php echo @$nac2_8; ?>" /></td>
    <td width="120"><input type="text" class="input_txt valid" id="nac2_9" name="nac2_9" value="<?php echo @$nac2_9; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="154" />
  <col width="132" />
  <col width="121" />
  <col width="94" />
  <col width="130" />
  <tr height="19">
    <td colspan="3" height="19" width="407">Indicacion    Principal de Induccion o parto operatorio</td>
    <td width="94">INDUC</td>
    <td width="130">OPER</td>
  </tr>
  <tr height="20">
    <td colspan="3" height="20" width="407"><input type="text" class="input_txt valid" id="indica_p_1" name="indica_p_1" value="<?php echo @$indica_p_1; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="indica_p_2" name="indica_p_2" value="<?php echo @$indica_p_2; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="indica_p_3" name="indica_p_3" value="<?php echo @$indica_p_3; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="154" />
  <col width="132" />
  <col width="121" />
  <col width="94" />
  <col width="130" />
  <col width="111" />
  <col width="126" />
  <col width="110" />
  <col width="131" />
  <col width="120" />
  <col width="140" />
  <tr height="58">
    <td height="58" width="154">POSICION    PARTO(Sentada, acostada, cunclillas)</td>
    <td width="132">&nbsp;</td>
    <td width="121">Desgarros</td>
    <td width="94">Grado (1a4)</td>
    <td rowspan="2" width="130">Ociocitos (s/n)</td>
    <td width="111">Prealumbr</td>
    <td width="126"><input type="text" class="input_txt valid" id="ocitoc_1" name="ocitoc_1" value="<?php echo @$ocitoc_1; ?>" /></td>
    <td rowspan="2" width="110">Placenta (S/N)</td>
    <td width="131">Completa</td>
    <td width="120"><input type="text" class="input_txt valid" id="placenta_1" name="placenta_1" value="<?php echo @$placenta_1; ?>" /></td>
    <td width="140">Ligadura    cordon(S/N)</td>
  </tr>
  <tr height="19">
    <td height="19" width="154">Episiotomia (s/n)</td>
    <td width="132"><input type="text" class="input_txt valid" id="pos_parto" name="pos_parto" value="<?php echo @$pos_parto; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="desgarro" name="desgarro" value="<?php echo @$desgarro; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="grado14" name="grado14" value="<?php echo @$grado14; ?>" /></td>
    <td width="111">posprealumbr</td>
    <td width="126"><input type="text" class="input_txt valid" id="ocitoc_2" name="ocitoc_2" value="<?php echo @$ocitoc_2; ?>" /></td>
    <td width="131">Retenida</td>
    <td width="120"><input type="text" class="input_txt valid" id="placenta2" name="placenta2" value="<?php echo @$placenta2; ?>" /></td>
    <td width="140"><input type="text" class="input_txt valid" id="placenta3" name="placenta3" value="<?php echo @$placenta3; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="39" width="154">Medicacion Recibida(S/N)</td>
    <td width="132">Ocitocitos    en TDP</td>
    <td width="121">Antibiot</td>
    <td width="94">Analgesia</td>
    <td width="130">Anest.    Local</td>
    <td width="111">Anest:    regional</td>
    <td width="126">Anest.    Gral</td>
    <td width="110">Translusion</td>
    <td width="131">Otros    (Cual)</td>
    <td width="120">Medic    1 (cod)</td>
    <td width="140">Medic    2 (cod)</td>
  </tr>
  <tr height="20">
    <td height="20" width="132"><input type="text" class="input_txt valid" id="medicacion_1" name="medicacion_1" value="<?php echo @$medicacion_1; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="medicacion_2" name="medicacion_2" value="<?php echo @$medicacion_2; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="medicacion_3" name="medicacion_3" value="<?php echo @$medicacion_3; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="medicacion_4" name="medicacion_4" value="<?php echo @$medicacion_4; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="medicacion_5" name="medicacion_5" value="<?php echo @$medicacion_5; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="medicacion_6" name="medicacion_6" value="<?php echo @$medicacion_6; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="medicacion_7" name="medicacion_7" value="<?php echo @$medicacion_7; ?>" /></td>
    <td width="131"><input type="text" class="input_txt valid" id="medicacion_8" name="medicacion_8" value="<?php echo @$medicacion_8; ?>" /></td>
    <td width="120"><input type="text" class="input_txt valid" id="medicacion_9" name="medicacion_9" value="<?php echo @$medicacion_9; ?>" /></td>
    <td width="140"><input type="text" class="input_txt valid" id="medicacion_10" name="medicacion_10" value="<?php echo @$medicacion_10; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="154" />
  <col width="132" />
  <col width="121" />
  <col width="94" />
  <col width="130" />
  <col width="111" />
  <col width="126" />
  <col width="110" />
  <col width="131" />
  <col width="120" />
  <col width="140" />
  <tr height="19">
    <td rowspan="11" height="252" width="154">RECIEN NACIDO</td>
    <td width="132">Sexo</td>
    <td width="121">Peso</td>
    <td width="94">P.cafalico cm</td>
    <td width="130">Longitud cm</td>
    <td rowspan="2" width="111">Edad Ges</td>
    <td width="126">semanas y dias</td>
    <td width="110">Estimada</td>
    <td width="131">FUM</td>
    <td width="120">ECO</td>
    <td width="140">Peso (Adec,    peq, gde)</td>
  </tr>
  <tr height="20">
    <td height="20" width="132"><input type="text" class="input_txt valid" id="rnacid_1" name="rnacid_1" value="<?php echo @$rnacid_1; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="rnacid_2" name="rnacid_2" value="<?php echo @$rnacid_2; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="rnacid_3" name="rnacid_3" value="<?php echo @$rnacid_3; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="rnacid_4" name="rnacid_4" value="<?php echo @$rnacid_4; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="rnacid_5" name="rnacid_5" value="<?php echo @$rnacid_5; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="rnacid_6" name="rnacid_6" value="<?php echo @$rnacid_6; ?>" /></td>
    <td width="131"><input type="text" class="input_txt valid" id="rnacid_7" name="rnacid_7" value="<?php echo @$rnacid_7; ?>" /></td>
    <td width="120"><input type="text" class="input_txt valid" id="rnacid_8" name="rnacid_8" value="<?php echo @$rnacid_8; ?>" /></td>
    <td width="140"><input type="text" class="input_txt valid" id="rnacid_9" name="rnacid_9" value="<?php echo @$rnacid_9; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="132">APGAR(min) 1ro</td>
    <td width="121">APGAR(min) 5to</td>
    <td rowspan="2" width="94">Reanimacion</td>
    <td width="130">Estimulac</td>
    <td width="111">Aspiracion</td>
    <td width="126">Mascara</td>
    <td width="110">Oxigeno</td>
    <td width="131">Masaje</td>
    <td width="120">Tubo</td>
    <td width="140">Fallece lugar    de parto(S/N)</td>
  </tr>
  <tr height="20">
    <td height="20" width="132"><input type="text" class="input_txt valid" id="rnacid_10" name="rnacid_10" value="<?php echo @$rnacid_10; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="rnacid_11" name="rnacid_11" value="<?php echo @$rnacid_11; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="rnacid_12" name="rnacid_12" value="<?php echo @$rnacid_12; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="rnacid_13" name="rnacid_13" value="<?php echo @$rnacid_13; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="rnacid_14" name="rnacid_14" value="<?php echo @$rnacid_14; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="rnacid_15" name="rnacid_15" value="<?php echo @$rnacid_15; ?>" /></td>
    <td width="131"><input type="text" class="input_txt valid" id="rnacid_16" name="rnacid_16" value="<?php echo @$rnacid_16; ?>" /></td>
    <td width="120"><input type="text" class="input_txt valid" id="rnacid_18" name="rnacid_18" value="<?php echo @$rnacid_18; ?>" /></td>
    <td width="140"><input type="text" class="input_txt valid" id="rnacid_19" name="rnacid_19" value="<?php echo @$rnacid_19; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="39" width="132">Referido</td>
    <td width="121">Aloj.    corj</td>
    <td width="94">Negra. Tolog</td>
    <td width="130">otro hosp.</td>
    <td colspan="6" rowspan="2" width="738"></td>
  </tr>
  <tr height="20">
    <td height="20" width="121"><input type="text" class="input_txt valid" id="rnacid_20" name="rnacid_20" value="<?php echo @$rnacid_20; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="rnacid_21" name="rnacid_21" value="<?php echo @$rnacid_21; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="rnacid2_1" name="rnacid2_1" value="<?php echo @$rnacid2_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="39" width="132">ATENDIO</td>
    <td width="121">medico</td>
    <td width="94">obst</td>
    <td width="130">enf</td>
    <td width="111">auxil</td>
    <td width="126">estud</td>
    <td width="110">empir</td>
    <td width="131">otro</td>
    <td colspan="2" width="260">nombre</td>
  </tr>
  <tr height="20">
    <td height="20" width="121"><input type="text" class="input_txt valid" id="rnacid2_2" name="rnacid2_2" value="<?php echo @$rnacid2_2; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="rnacid2_3" name="rnacid2_3" value="<?php echo @$rnacid2_3; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="rnacid2_4" name="rnacid2_4" value="<?php echo @$rnacid2_4; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="rnacid2_5" name="rnacid2_5" value="<?php echo @$rnacid2_5; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="rnacid2_6" name="rnacid2_6" value="<?php echo @$rnacid2_6; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="rnacid2_7" name="rnacid2_7" value="<?php echo @$rnacid2_7; ?>" /></td>
    <td width="131"><input type="text" class="input_txt valid" id="rnacid2_8" name="rnacid2_8" value="<?php echo @$rnacid2_8; ?>" /></td>
    <td colspan="2" width="260"><input type="text" class="input_txt valid" id="rnacid2_9" name="rnacid2_9" value="<?php echo @$rnacid2_9; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="3" height="77" width="132">Defectos congenitos</td>
    <td width="121">no/menor/mayor</td>
    <td width="94">codigo</td>
    <td rowspan="3" width="130">Enfermedades</td>
    <td width="111">Ninguna/1    ó mas</td>
    <td width="126">codigo</td>
    <td colspan="4" width="501">Tamizaje neonatal</td>
  </tr>
  <tr height="38">
    <td rowspan="2" height="58" width="121"><input type="text" class="input_txt valid" id="rnacid2_10" name="rnacid2_10" value="<?php echo @$rnacid2_10; ?>" /></td>
    <td rowspan="2" width="94"><input type="text" class="input_txt valid" id="rnacid2_11" name="rnacid2_11" value="<?php echo @$rnacid2_11; ?>" /></td>
    <td rowspan="2" width="111"><input type="text" class="input_txt valid" id="rnacid2_12" name="rnacid2_12" value="<?php echo @$rnacid2_12; ?>" /></td>
    <td rowspan="2" width="126"><input type="text" class="input_txt valid" id="rnacid2_13" name="rnacid2_13" value="<?php echo @$rnacid2_13; ?>" /></td>
    <td width="110">VDRL    (Pos, Neg, No hizo)</td>
    <td width="131">Tto    (s/n)</td>
    <td width="120">Tto n/c</td>
    <td width="140">Tto s/d</td>
  </tr>
  <tr height="20">
    <td height="20" width="110"><input type="text" class="input_txt valid" id="rnacid2_14" name="rnacid2_14" value="<?php echo @$rnacid2_14; ?>" /></td>
    <td width="131"><input type="text" class="input_txt valid" id="rnacid2_15" name="rnacid2_15" value="<?php echo @$rnacid2_15; ?>" /></td>
    <td width="120"><input type="text" class="input_txt valid" id="rnacid2_16" name="rnacid2_16" value="<?php echo @$rnacid2_16; ?>" /></td>
    <td width="140"><input type="text" class="input_txt valid" id="rnacid2_17" name="rnacid2_17" value="<?php echo @$rnacid2_17; ?>" /></td>
  </tr>
  <tr height="38">
    <td rowspan="2" height="58" width="154">Puerperio</td>
    <td width="132">Dia y hora</td>
    <td width="121">T°C</td>
    <td width="94">PA</td>
    <td width="130">Pulso</td>
    <td width="111">Invol. Uter</td>
    <td width="126">Loquios</td>
    <td width="110">THS    (Pos, Neg, No hizo)</td>
    <td width="131">HB    patia</td>
    <td width="120">Bilirrub</td>
    <td width="140">Toxo    igm</td>
  </tr>
  <tr height="20">
    <td height="20" width="132"><input type="text" class="input_txt valid" id="rnacid2_18" name="rnacid2_18" value="<?php echo @$rnacid2_18; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="rnacid2_19" name="rnacid2_19" value="<?php echo @$rnacid2_19; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="rnacid2_20" name="rnacid2_20" value="<?php echo @$rnacid2_20; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="puerpe_2_1" name="puerpe_2_1" value="<?php echo @$puerpe_2_1; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="puerpe_2_2" name="puerpe_2_2" value="<?php echo @$puerpe_2_2; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="puerpe_2_3" name="puerpe_2_3" value="<?php echo @$puerpe_2_3; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="puerpe_2_4" name="puerpe_2_4" value="<?php echo @$puerpe_2_4; ?>" /></td>
    <td width="131"><input type="text" class="input_txt valid" id="puerpe_2_5" name="puerpe_2_5" value="<?php echo @$puerpe_2_5; ?>" /></td>
    <td width="120"><input type="text" class="input_txt valid" id="puerpe_2_6" name="puerpe_2_6" value="<?php echo @$puerpe_2_6; ?>" /></td>
    <td width="140"><input type="text" class="input_txt valid" id="meconio_1" name="meconio_1" value="<?php echo @$meconio_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="154">Meconio 1er Dia (s/n)</td>
    <td rowspan="2" width="132">Antirubeola</td>
    <td width="121">S/N</td>
    <td width="94">n/c</td>
    <td rowspan="2" width="130">yglulina anti D</td>
    <td width="111">S/N</td>
    <td width="126">n/c</td>
    <td colspan="4" width="501">Anticoncepcion</td>
  </tr>
  <tr height="20">
    <td height="20" width="154">&nbsp;</td>
    <td width="121"><input type="text" class="input_txt valid" id="rubeo_1" name="rubeo_1" value="<?php echo @$rubeo_1; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="rubeo_2" name="rubeo_2" value="<?php echo @$rubeo_2; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="yglu65_1" name="yglu65_1" value="<?php echo @$yglu65_1; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="yglu65_2" name="yglu65_2" value="<?php echo @$yglu65_2; ?>" /></td>
    <td width="110">Consejeria    (si/no)</td>
    <td width="131"><input type="text" class="input_txt valid" id="antic_1" name="antic_1" value="<?php echo @$antic_1; ?>" /></td>
    <td width="120">Metodo    elegido</td>
    <td width="140"><input type="text" class="input_txt valid" id="antica_2" name="antica_2" value="<?php echo @$antica_2; ?>" /></td>
  </tr>
  <tr height="20">
    <td rowspan="6" height="155" width="154">EGRESO RN</td>
    <td width="132">Vivo</td>
    <td width="121">Fallece</td>
    <td width="94">traslado(s/n)</td>
    <td width="130">Edad Egreso</td>
    <td rowspan="2" width="111">Alimento al alta</td>
    <td width="126">Lact Excl</td>
    <td width="110">Parcial</td>
    <td width="131">Artificial</td>
    <td colspan="2" width="260"><input type="text" class="input_txt valid" id="egre_rn_7" name="egre_rn_7" value="<?php echo @$egre_rn_7; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="132"><input type="text" class="input_txt valid" id="egre_rn_1" name="egre_rn_1" value="<?php echo @$egre_rn_1; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="egre_rn_2" name="egre_rn_2" value="<?php echo @$egre_rn_2; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="egre_rn_3" name="egre_rn_3" value="<?php echo @$egre_rn_3; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="egre_rn_4" name="egre_rn_4" value="<?php echo @$egre_rn_4; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="egre_rn_5" name="egre_rn_5" value="<?php echo @$egre_rn_5; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="egre_rn_6" name="egre_rn_6" value="<?php echo @$egre_rn_6; ?>" /></td>
    <td colspan="3" width="391">Egreso Materno</td>
  </tr>
  <tr height="38">
    <td height="38" width="132">Fecha</td>
    <td width="121">Hora</td>
    <td width="94">fallece    en traslado</td>
    <td width="130">Lugar</td>
    <td width="111">Boca    arriba</td>
    <td width="126">BCG(s/n)</td>
    <td width="110">Peso    egreso gr</td>
    <td width="131">Fecha</td>
    <td width="120">Viva</td>
    <td width="140">Fallece    traslado(S/N)</td>
  </tr>
  <tr height="19">
    <td height="19" width="132"><input type="text" class="input_txt valid" id="egre_rn_8" name="egre_rn_8" value="<?php echo @$egre_rn_8; ?>" /></td>
    <td width="121"><input type="text" class="input_txt valid" id="egre_rn_9" name="egre_rn_9" value="<?php echo @$egre_rn_9; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="egre_rn_10" name="egre_rn_10" value="<?php echo @$egre_rn_10; ?>" /></td>
    <td width="130"><input type="text" class="input_txt valid" id="egre_rn_11" name="egre_rn_11" value="<?php echo @$egre_rn_11; ?>" /></td>
    <td width="111"><input type="text" class="input_txt valid" id="egre_rn_12" name="egre_rn_12" value="<?php echo @$egre_rn_12; ?>" /></td>
    <td width="126"><input type="text" class="input_txt valid" id="egre_rn_13" name="egre_rn_13" value="<?php echo @$egre_rn_13; ?>" /></td>
    <td width="110"><input type="text" class="input_txt valid" id="egre_rn_14" name="egre_rn_14" value="<?php echo @$egre_rn_14; ?>" /></td>
    <td width="131"><input type="text" class="input_txt valid" id="egre_rn_15" name="egre_rn_15" value="<?php echo @$egre_rn_15; ?>" /></td>
    <td width="120"><input type="text" class="input_txt valid" id="egre_rn_16" name="egre_rn_16" value="<?php echo @$egre_rn_16; ?>" /></td>
    <td width="140"><input type="text" class="input_txt valid" id="egre_rn_17" name="egre_rn_17" value="<?php echo @$egre_rn_17; ?>" /></td>
  </tr>
  <tr height="39">
    <td rowspan="2" height="59" width="132">ID RN</td>
    <td rowspan="2" width="121"><input type="text" class="input_txt valid" id="egre_rn_18" name="egre_rn_18" value="<?php echo @$egre_rn_18; ?>" /></td>
    <td rowspan="2" width="94">Nombre</td>
    <td rowspan="2" width="130"><input type="text" class="input_txt valid" id="egre_rn_19" name="egre_rn_19" value="<?php echo @$egre_rn_19; ?>" /></td>
    <td width="111" rowspan="2">Responsable</td>
    <td colspan="2" rowspan="2" width="236"><input type="text" class="input_txt valid" id="egre_rn_20" name="egre_rn_20" value="<?php echo @$egre_rn_20; ?>" /></td>
    <td width="131">Traslado(S/N)</td>
    <td width="120">Lugar</td>
    <td width="140">Dias    completos desde el parro</td>
  </tr>
  <tr height="20">
    <td width="131" height="20"><input type="text" class="input_txt valid" id="egre_rn_21" name="egre_rn_21" value="<?php echo @$egre_rn_21; ?>" /></td>
    <td width="120"><input type="text" class="input_txt valid" id="egre_rn_22" name="egre_rn_22" value="<?php echo @$egre_rn_22; ?>" /></td>
    <td width="140"><input type="text" class="input_txt valid" id="egre_rn_23" name="egre_rn_23" value="<?php echo @$egre_rn_23; ?>" /></td>
  </tr>
</table>




<?php echo @$button ?>
</form><br>
  <a href='#' onclick='imprSelec("content-hc_embarazo", true)' class="no_print">Imprimir formulario</a>
<br></div>
</fieldset>