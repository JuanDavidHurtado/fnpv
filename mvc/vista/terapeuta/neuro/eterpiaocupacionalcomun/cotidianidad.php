<?php
if (isset($_REQUEST['guardar_h2_cotidianidad']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h2_cotidianidad'] == 'new') {

        $sql = "INSERT INTO h2_cotidianidad (
`id_h2_cotidianidad`,
`id_usuario`,
`historia`,
`id_proceso`,
`ute_1`,
`ute_2`,
`ute_3`,
`ute_4`,
`beber_1`,
`beber_2`,
`beber_3`,
`beber_4`,
`taza_1`,
`taza_2`,
`taza_3`,
`taza_4`,
`cortar_1`,
`cortar_2`,
`cortar_3`,
`cortar_4`,
`fruta_1`,
`fruta_2`,
`fruta_3`,
`fruta_4`,
`com_ca_1`,
`com_ca_2`,
`com_ca_3`,
`com_ca_4`,
`com_fria_1`,
`com_fria_2`,
`com_fria_3`,
`com_fria_4`,
`vs_sup_1`,
`vs_sup_2`,
`vs_sup_3`,
`vs_sup_4`,
`vs_quitar_1`,
`vs_quitar_2`,
`vs_quitar_3`,
`vs_quitar_4`,
`vs_sierre_1`,
`vs_sierre_2`,
`vs_sierre_3`,
`vs_sierre_4`,
`vs_bajarsi_1`,
`vs_bajarsi_2`,
`vs_bajarsi_3`,
`vs_bajarsi_4`,
`vs_boton_1`,
`vs_boton_2`,
`vs_boton_3`,
`vs_boton_4`,
`vs_boton_out_1`,
`vs_boton_out_2`,
`vs_boton_out_3`,
`vs_boton_out_4`,
`vi_pon_1`,
`vi_pon_2`,
`vi_pon_3`,
`vi_pon_4`,
`vi_ropaout_1`,
`vi_ropaout_2`,
`vi_ropaout_3`,
`vi_ropaout_4`,
`vi_medias_1`,
`vi_medias_2`,
`vi_medias_3`,
`vi_medias_4`,
`zapatos_1`,
`zapatos_2`,
`zapatos_3`,
`zapatos_4`,
`vi_boton_1`,
`vi_boton_2`,
`vi_boton_3`,
`vi_boton_4`,
`vi_sierre_1`,
`vi_sierre_2`,
`vi_sierre_3`,
`vi_sierre_4`,
`sentar_1`,
`sentar_2`,
`sentar_3`,
`sentar_4`,
`ph_1`,
`ph_2`,
`ph_3`,
`ph_4`,
`man_ropa_1`,
`man_ropa_2`,
`man_ropa_3`,
`man_ropa_4`,
`soltar_ag_1`,
`soltar_ag_2`,
`soltar_ag_3`,
`soltar_ag_4`,
`secar_1`,
`secar_2`,
`secar_3`,
`secar_4`,
`b_mmss_1`,
`b_mmss_2`,
`b_mmss_3`,
`b_mmss_4`,
`b_mmii_1`,
`b_mmii_2`,
`b_mmii_3`,
`b_mmii_4`,
`lavado_pelo_1`,
`lavado_pelo_2`,
`lavado_pelo_3`,
`lavado_pelo_4`,
`grifos_1`,
`grifos_2`,
`grifos_3`,
`grifos_4`,
`lavado_m_1`,
`lavado_m_2`,
`lavado_m_3`,
`lavado_m_4`,
`lavado_car_1`,
`lavado_car_2`,
`lavado_car_3`,
`lavado_car_4`,
`cepillar_1`,
`cepillar_2`,
`cepillar_3`,
`cepillar_4`,
`peinar_1`,
`peinar_2`,
`peinar_3`,
`peinar_4`,
`afeitar_1`,
`afeitar_2`,
`afeitar_3`,
`afeitar_4`,
`desod_1`,
`desod_2`,
`desod_3`,
`desod_4`,
`oidos_1`,
`oidos_2`,
`oidos_3`,
`oidos_4`,
`unas_1`,
`unas_2`,
`unas_3`,
`unas_4`,
`maquilla_1`,
`maquilla_2`,
`maquilla_3`,
`maquilla_4`,
`s_cama_1`,
`s_cama_2`,
`s_cama_3`,
`s_cama_4`,
`sub_cama_1`,
`sub_cama_2`,
`sub_cama_3`,
`sub_cama_4`,
`girodi_1`,
`girodi_2`,
`girodi_3`,
`girodi_4`,
`giroid_1`,
`giroid_2`,
`giroid_3`,
`giroid_4`,
`bajar_ca_1`,
`bajar_ca_2`,
`bajar_ca_3`,
`bajar_ca_4`,
`subir_ca_1`,
`subir_ca_2`,
`subir_ca_3`,
`subir_ca_4`,
`taparse_1`,
`taparse_2`,
`taparse_3`,
`taparse_4`,
`escribir_1`,
`escribir_2`,
`escribir_3`,
`escribir_4`,
`telefono_1`,
`telefono_2`,
`telefono_3`,
`telefono_4`,
`paginar_1`,
`paginar_2`,
`paginar_3`,
`paginar_4`,
`abrir_c_1`,
`abrir_c_2`,
`abrir_c_3`,
`abrir_c_4`,
`hablar_1`,
`hablar_2`,
`hablar_3`,
`hablar_4`,
`interrup_1`,
`interrup_2`,
`interrup_3`,
`interrup_4`,
`leer_1`,
`leer_2`,
`leer_3`,
`leer_4`,
`h_lavar_1`,
`h_lavar_2`,
`h_lavar_3`,
`h_lavar_4`,
`h_planchar_1`,
`h_planchar_2`,
`h_planchar_3`,
`h_planchar_4`,
`h_cuidani_1`,
`h_cuidani_2`,
`h_cuidani_3`,
`h_cuidani_4`,
`h_limpieza_1`,
`h_limpieza_2`,
`h_limpieza_3`,
`h_limpieza_4`,
`usa_recur_1`,
`usa_recur_2`,
`usa_recur_3`,
`usa_recur_4`,
`dinero_1`,
`dinero_2`,
`dinero_3`,
`dinero_4`,
`compra_1`,
`compra_2`,
`compra_3`,
`compra_4`,
`carro_1`,
`carro_2`,
`carro_3`,
`carro_4`,
`cam_casa_1`,
`cam_casa_2`,
`cam_casa_3`,
`cam_casa_4`,
`cam_calle_1`,
`cam_calle_2`,
`cam_calle_3`,
`cam_calle_4`,
`escalera_1`,
`escalera_2`,
`escalera_3`,
`escalera_4`,
`b_escale_1`,
`b_escale_2`,
`b_escale_3`,
`b_escale_4`,
`in_out_puerta_1`,
`in_out_puerta_2`,
`in_out_puerta_3`,
`in_out_puerta_4`,
`rampa_1`,
`rampa_2`,
`rampa_3`,
`rampa_4`,
`juego_t_1`,
`juego_t_2`,
`juego_t_3`,
`juego_t_4`,
`manual_1`,
`manual_2`,
`manual_3`,
`manual_4`,
`radio_1`,
`radio_2`,
`radio_3`,
`radio_4`,
`adap_s`,
`adap_n`,
`valoracion_d`,
`valoracion_se`,
`valoracion_depe`,
`oser_5`,
`inclusion`,
`impresion`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`conducta`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['ute_1'] . "' ,
'" . $_REQUEST['ute_2'] . "' ,
'" . $_REQUEST['ute_3'] . "' ,
'" . $_REQUEST['ute_4'] . "' ,
'" . $_REQUEST['beber_1'] . "' ,
'" . $_REQUEST['beber_2'] . "' ,
'" . $_REQUEST['beber_3'] . "' ,
'" . $_REQUEST['beber_4'] . "' ,
'" . $_REQUEST['taza_1'] . "' ,
'" . $_REQUEST['taza_2'] . "' ,
'" . $_REQUEST['taza_3'] . "' ,
'" . $_REQUEST['taza_4'] . "' ,
'" . $_REQUEST['cortar_1'] . "' ,
'" . $_REQUEST['cortar_2'] . "' ,
'" . $_REQUEST['cortar_3'] . "' ,
'" . $_REQUEST['cortar_4'] . "' ,
'" . $_REQUEST['fruta_1'] . "' ,
'" . $_REQUEST['fruta_2'] . "' ,
'" . $_REQUEST['fruta_3'] . "' ,
'" . $_REQUEST['fruta_4'] . "' ,
'" . $_REQUEST['com_ca_1'] . "' ,
'" . $_REQUEST['com_ca_2'] . "' ,
'" . $_REQUEST['com_ca_3'] . "' ,
'" . $_REQUEST['com_ca_4'] . "' ,
'" . $_REQUEST['com_fria_1'] . "' ,
'" . $_REQUEST['com_fria_2'] . "' ,
'" . $_REQUEST['com_fria_3'] . "' ,
'" . $_REQUEST['com_fria_4'] . "' ,
'" . $_REQUEST['vs_sup_1'] . "' ,
'" . $_REQUEST['vs_sup_2'] . "' ,
'" . $_REQUEST['vs_sup_3'] . "' ,
'" . $_REQUEST['vs_sup_4'] . "' ,
'" . $_REQUEST['vs_quitar_1'] . "' ,
'" . $_REQUEST['vs_quitar_2'] . "' ,
'" . $_REQUEST['vs_quitar_3'] . "' ,
'" . $_REQUEST['vs_quitar_4'] . "' ,
'" . $_REQUEST['vs_sierre_1'] . "' ,
'" . $_REQUEST['vs_sierre_2'] . "' ,
'" . $_REQUEST['vs_sierre_3'] . "' ,
'" . $_REQUEST['vs_sierre_4'] . "' ,
'" . $_REQUEST['vs_bajarsi_1'] . "' ,
'" . $_REQUEST['vs_bajarsi_2'] . "' ,
'" . $_REQUEST['vs_bajarsi_3'] . "' ,
'" . $_REQUEST['vs_bajarsi_4'] . "' ,
'" . $_REQUEST['vs_boton_1'] . "' ,
'" . $_REQUEST['vs_boton_2'] . "' ,
'" . $_REQUEST['vs_boton_3'] . "' ,
'" . $_REQUEST['vs_boton_4'] . "' ,
'" . $_REQUEST['vs_boton_out_1'] . "' ,
'" . $_REQUEST['vs_boton_out_2'] . "' ,
'" . $_REQUEST['vs_boton_out_3'] . "' ,
'" . $_REQUEST['vs_boton_out_4'] . "' ,
'" . $_REQUEST['vi_pon_1'] . "' ,
'" . $_REQUEST['vi_pon_2'] . "' ,
'" . $_REQUEST['vi_pon_3'] . "' ,
'" . $_REQUEST['vi_pon_4'] . "' ,
'" . $_REQUEST['vi_ropaout_1'] . "' ,
'" . $_REQUEST['vi_ropaout_2'] . "' ,
'" . $_REQUEST['vi_ropaout_3'] . "' ,
'" . $_REQUEST['vi_ropaout_4'] . "' ,
'" . $_REQUEST['vi_medias_1'] . "' ,
'" . $_REQUEST['vi_medias_2'] . "' ,
'" . $_REQUEST['vi_medias_3'] . "' ,
'" . $_REQUEST['vi_medias_4'] . "' ,
'" . $_REQUEST['zapatos_1'] . "' ,
'" . $_REQUEST['zapatos_2'] . "' ,
'" . $_REQUEST['zapatos_3'] . "' ,
'" . $_REQUEST['zapatos_4'] . "' ,
'" . $_REQUEST['vi_boton_1'] . "' ,
'" . $_REQUEST['vi_boton_2'] . "' ,
'" . $_REQUEST['vi_boton_3'] . "' ,
'" . $_REQUEST['vi_boton_4'] . "' ,
'" . $_REQUEST['vi_sierre_1'] . "' ,
'" . $_REQUEST['vi_sierre_2'] . "' ,
'" . $_REQUEST['vi_sierre_3'] . "' ,
'" . $_REQUEST['vi_sierre_4'] . "' ,
'" . $_REQUEST['sentar_1'] . "' ,
'" . $_REQUEST['sentar_2'] . "' ,
'" . $_REQUEST['sentar_3'] . "' ,
'" . $_REQUEST['sentar_4'] . "' ,
'" . $_REQUEST['ph_1'] . "' ,
'" . $_REQUEST['ph_2'] . "' ,
'" . $_REQUEST['ph_3'] . "' ,
'" . $_REQUEST['ph_4'] . "' ,
'" . $_REQUEST['man_ropa_1'] . "' ,
'" . $_REQUEST['man_ropa_2'] . "' ,
'" . $_REQUEST['man_ropa_3'] . "' ,
'" . $_REQUEST['man_ropa_4'] . "' ,
'" . $_REQUEST['soltar_ag_1'] . "' ,
'" . $_REQUEST['soltar_ag_2'] . "' ,
'" . $_REQUEST['soltar_ag_3'] . "' ,
'" . $_REQUEST['soltar_ag_4'] . "' ,
'" . $_REQUEST['secar_1'] . "' ,
'" . $_REQUEST['secar_2'] . "' ,
'" . $_REQUEST['secar_3'] . "' ,
'" . $_REQUEST['secar_4'] . "' ,
'" . $_REQUEST['b_mmss_1'] . "' ,
'" . $_REQUEST['b_mmss_2'] . "' ,
'" . $_REQUEST['b_mmss_3'] . "' ,
'" . $_REQUEST['b_mmss_4'] . "' ,
'" . $_REQUEST['b_mmii_1'] . "' ,
'" . $_REQUEST['b_mmii_2'] . "' ,
'" . $_REQUEST['b_mmii_3'] . "' ,
'" . $_REQUEST['b_mmii_4'] . "' ,
'" . $_REQUEST['lavado_pelo_1'] . "' ,
'" . $_REQUEST['lavado_pelo_2'] . "' ,
'" . $_REQUEST['lavado_pelo_3'] . "' ,
'" . $_REQUEST['lavado_pelo_4'] . "' ,
'" . $_REQUEST['grifos_1'] . "' ,
'" . $_REQUEST['grifos_2'] . "' ,
'" . $_REQUEST['grifos_3'] . "' ,
'" . $_REQUEST['grifos_4'] . "' ,
'" . $_REQUEST['lavado_m_1'] . "' ,
'" . $_REQUEST['lavado_m_2'] . "' ,
'" . $_REQUEST['lavado_m_3'] . "' ,
'" . $_REQUEST['lavado_m_4'] . "' ,
'" . $_REQUEST['lavado_car_1'] . "' ,
'" . $_REQUEST['lavado_car_2'] . "' ,
'" . $_REQUEST['lavado_car_3'] . "' ,
'" . $_REQUEST['lavado_car_4'] . "' ,
'" . $_REQUEST['cepillar_1'] . "' ,
'" . $_REQUEST['cepillar_2'] . "' ,
'" . $_REQUEST['cepillar_3'] . "' ,
'" . $_REQUEST['cepillar_4'] . "' ,
'" . $_REQUEST['peinar_1'] . "' ,
'" . $_REQUEST['peinar_2'] . "' ,
'" . $_REQUEST['peinar_3'] . "' ,
'" . $_REQUEST['peinar_4'] . "' ,
'" . $_REQUEST['afeitar_1'] . "' ,
'" . $_REQUEST['afeitar_2'] . "' ,
'" . $_REQUEST['afeitar_3'] . "' ,
'" . $_REQUEST['afeitar_4'] . "' ,
'" . $_REQUEST['desod_1'] . "' ,
'" . $_REQUEST['desod_2'] . "' ,
'" . $_REQUEST['desod_3'] . "' ,
'" . $_REQUEST['desod_4'] . "' ,
'" . $_REQUEST['oidos_1'] . "' ,
'" . $_REQUEST['oidos_2'] . "' ,
'" . $_REQUEST['oidos_3'] . "' ,
'" . $_REQUEST['oidos_4'] . "' ,
'" . $_REQUEST['unas_1'] . "' ,
'" . $_REQUEST['unas_2'] . "' ,
'" . $_REQUEST['unas_3'] . "' ,
'" . $_REQUEST['unas_4'] . "' ,
'" . $_REQUEST['maquilla_1'] . "' ,
'" . $_REQUEST['maquilla_2'] . "' ,
'" . $_REQUEST['maquilla_3'] . "' ,
'" . $_REQUEST['maquilla_4'] . "' ,
'" . $_REQUEST['s_cama_1'] . "' ,
'" . $_REQUEST['s_cama_2'] . "' ,
'" . $_REQUEST['s_cama_3'] . "' ,
'" . $_REQUEST['s_cama_4'] . "' ,
'" . $_REQUEST['sub_cama_1'] . "' ,
'" . $_REQUEST['sub_cama_2'] . "' ,
'" . $_REQUEST['sub_cama_3'] . "' ,
'" . $_REQUEST['sub_cama_4'] . "' ,
'" . $_REQUEST['girodi_1'] . "' ,
'" . $_REQUEST['girodi_2'] . "' ,
'" . $_REQUEST['girodi_3'] . "' ,
'" . $_REQUEST['girodi_4'] . "' ,
'" . $_REQUEST['giroid_1'] . "' ,
'" . $_REQUEST['giroid_2'] . "' ,
'" . $_REQUEST['giroid_3'] . "' ,
'" . $_REQUEST['giroid_4'] . "' ,
'" . $_REQUEST['bajar_ca_1'] . "' ,
'" . $_REQUEST['bajar_ca_2'] . "' ,
'" . $_REQUEST['bajar_ca_3'] . "' ,
'" . $_REQUEST['bajar_ca_4'] . "' ,
'" . $_REQUEST['subir_ca_1'] . "' ,
'" . $_REQUEST['subir_ca_2'] . "' ,
'" . $_REQUEST['subir_ca_3'] . "' ,
'" . $_REQUEST['subir_ca_4'] . "' ,
'" . $_REQUEST['taparse_1'] . "' ,
'" . $_REQUEST['taparse_2'] . "' ,
'" . $_REQUEST['taparse_3'] . "' ,
'" . $_REQUEST['taparse_4'] . "' ,
'" . $_REQUEST['escribir_1'] . "' ,
'" . $_REQUEST['escribir_2'] . "' ,
'" . $_REQUEST['escribir_3'] . "' ,
'" . $_REQUEST['escribir_4'] . "' ,
'" . $_REQUEST['telefono_1'] . "' ,
'" . $_REQUEST['telefono_2'] . "' ,
'" . $_REQUEST['telefono_3'] . "' ,
'" . $_REQUEST['telefono_4'] . "' ,
'" . $_REQUEST['paginar_1'] . "' ,
'" . $_REQUEST['paginar_2'] . "' ,
'" . $_REQUEST['paginar_3'] . "' ,
'" . $_REQUEST['paginar_4'] . "' ,
'" . $_REQUEST['abrir_c_1'] . "' ,
'" . $_REQUEST['abrir_c_2'] . "' ,
'" . $_REQUEST['abrir_c_3'] . "' ,
'" . $_REQUEST['abrir_c_4'] . "' ,
'" . $_REQUEST['hablar_1'] . "' ,
'" . $_REQUEST['hablar_2'] . "' ,
'" . $_REQUEST['hablar_3'] . "' ,
'" . $_REQUEST['hablar_4'] . "' ,
'" . $_REQUEST['interrup_1'] . "' ,
'" . $_REQUEST['interrup_2'] . "' ,
'" . $_REQUEST['interrup_3'] . "' ,
'" . $_REQUEST['interrup_4'] . "' ,
'" . $_REQUEST['leer_1'] . "' ,
'" . $_REQUEST['leer_2'] . "' ,
'" . $_REQUEST['leer_3'] . "' ,
'" . $_REQUEST['leer_4'] . "' ,
'" . $_REQUEST['h_lavar_1'] . "' ,
'" . $_REQUEST['h_lavar_2'] . "' ,
'" . $_REQUEST['h_lavar_3'] . "' ,
'" . $_REQUEST['h_lavar_4'] . "' ,
'" . $_REQUEST['h_planchar_1'] . "' ,
'" . $_REQUEST['h_planchar_2'] . "' ,
'" . $_REQUEST['h_planchar_3'] . "' ,
'" . $_REQUEST['h_planchar_4'] . "' ,
'" . $_REQUEST['h_cuidani_1'] . "' ,
'" . $_REQUEST['h_cuidani_2'] . "' ,
'" . $_REQUEST['h_cuidani_3'] . "' ,
'" . $_REQUEST['h_cuidani_4'] . "' ,
'" . $_REQUEST['h_limpieza_1'] . "' ,
'" . $_REQUEST['h_limpieza_2'] . "' ,
'" . $_REQUEST['h_limpieza_3'] . "' ,
'" . $_REQUEST['h_limpieza_4'] . "' ,
'" . $_REQUEST['usa_recur_1'] . "' ,
'" . $_REQUEST['usa_recur_2'] . "' ,
'" . $_REQUEST['usa_recur_3'] . "' ,
'" . $_REQUEST['usa_recur_4'] . "' ,
'" . $_REQUEST['dinero_1'] . "' ,
'" . $_REQUEST['dinero_2'] . "' ,
'" . $_REQUEST['dinero_3'] . "' ,
'" . $_REQUEST['dinero_4'] . "' ,
'" . $_REQUEST['compra_1'] . "' ,
'" . $_REQUEST['compra_2'] . "' ,
'" . $_REQUEST['compra_3'] . "' ,
'" . $_REQUEST['compra_4'] . "' ,
'" . $_REQUEST['carro_1'] . "' ,
'" . $_REQUEST['carro_2'] . "' ,
'" . $_REQUEST['carro_3'] . "' ,
'" . $_REQUEST['carro_4'] . "' ,
'" . $_REQUEST['cam_casa_1'] . "' ,
'" . $_REQUEST['cam_casa_2'] . "' ,
'" . $_REQUEST['cam_casa_3'] . "' ,
'" . $_REQUEST['cam_casa_4'] . "' ,
'" . $_REQUEST['cam_calle_1'] . "' ,
'" . $_REQUEST['cam_calle_2'] . "' ,
'" . $_REQUEST['cam_calle_3'] . "' ,
'" . $_REQUEST['cam_calle_4'] . "' ,
'" . $_REQUEST['escalera_1'] . "' ,
'" . $_REQUEST['escalera_2'] . "' ,
'" . $_REQUEST['escalera_3'] . "' ,
'" . $_REQUEST['escalera_4'] . "' ,
'" . $_REQUEST['b_escale_1'] . "' ,
'" . $_REQUEST['b_escale_2'] . "' ,
'" . $_REQUEST['b_escale_3'] . "' ,
'" . $_REQUEST['b_escale_4'] . "' ,
'" . $_REQUEST['in_out_puerta_1'] . "' ,
'" . $_REQUEST['in_out_puerta_2'] . "' ,
'" . $_REQUEST['in_out_puerta_3'] . "' ,
'" . $_REQUEST['in_out_puerta_4'] . "' ,
'" . $_REQUEST['rampa_1'] . "' ,
'" . $_REQUEST['rampa_2'] . "' ,
'" . $_REQUEST['rampa_3'] . "' ,
'" . $_REQUEST['rampa_4'] . "' ,
'" . $_REQUEST['juego_t_1'] . "' ,
'" . $_REQUEST['juego_t_2'] . "' ,
'" . $_REQUEST['juego_t_3'] . "' ,
'" . $_REQUEST['juego_t_4'] . "' ,
'" . $_REQUEST['manual_1'] . "' ,
'" . $_REQUEST['manual_2'] . "' ,
'" . $_REQUEST['manual_3'] . "' ,
'" . $_REQUEST['manual_4'] . "' ,
'" . $_REQUEST['radio_1'] . "' ,
'" . $_REQUEST['radio_2'] . "' ,
'" . $_REQUEST['radio_3'] . "' ,
'" . $_REQUEST['radio_4'] . "' ,
'" . $_REQUEST['adap_s'] . "' ,
'" . $_REQUEST['adap_n'] . "' ,
'" . $_REQUEST['valoracion_d'] . "' ,
'" . $_REQUEST['valoracion_se'] . "' ,
'" . $_REQUEST['valoracion_depe'] . "' ,
'" . $_REQUEST['oser_5'] . "' ,
'" . $_REQUEST['inclusion'] . "' ,
'" . $_REQUEST['impresion'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['conducta'] . "'
) ";
    } else if ($_REQUEST['id_h2_cotidianidad'] != '') {

        $sql = "UPDATE h2_cotidianidad set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`ute_1` = '" . $_REQUEST['ute_1'] . "' ,
`ute_2` = '" . $_REQUEST['ute_2'] . "' ,
`ute_3` = '" . $_REQUEST['ute_3'] . "' ,
`ute_4` = '" . $_REQUEST['ute_4'] . "' ,
`beber_1` = '" . $_REQUEST['beber_1'] . "' ,
`beber_2` = '" . $_REQUEST['beber_2'] . "' ,
`beber_3` = '" . $_REQUEST['beber_3'] . "' ,
`beber_4` = '" . $_REQUEST['beber_4'] . "' ,
`taza_1` = '" . $_REQUEST['taza_1'] . "' ,
`taza_2` = '" . $_REQUEST['taza_2'] . "' ,
`taza_3` = '" . $_REQUEST['taza_3'] . "' ,
`taza_4` = '" . $_REQUEST['taza_4'] . "' ,
`cortar_1` = '" . $_REQUEST['cortar_1'] . "' ,
`cortar_2` = '" . $_REQUEST['cortar_2'] . "' ,
`cortar_3` = '" . $_REQUEST['cortar_3'] . "' ,
`cortar_4` = '" . $_REQUEST['cortar_4'] . "' ,
`fruta_1` = '" . $_REQUEST['fruta_1'] . "' ,
`fruta_2` = '" . $_REQUEST['fruta_2'] . "' ,
`fruta_3` = '" . $_REQUEST['fruta_3'] . "' ,
`fruta_4` = '" . $_REQUEST['fruta_4'] . "' ,
`com_ca_1` = '" . $_REQUEST['com_ca_1'] . "' ,
`com_ca_2` = '" . $_REQUEST['com_ca_2'] . "' ,
`com_ca_3` = '" . $_REQUEST['com_ca_3'] . "' ,
`com_ca_4` = '" . $_REQUEST['com_ca_4'] . "' ,
`com_fria_1` = '" . $_REQUEST['com_fria_1'] . "' ,
`com_fria_2` = '" . $_REQUEST['com_fria_2'] . "' ,
`com_fria_3` = '" . $_REQUEST['com_fria_3'] . "' ,
`com_fria_4` = '" . $_REQUEST['com_fria_4'] . "' ,
`vs_sup_1` = '" . $_REQUEST['vs_sup_1'] . "' ,
`vs_sup_2` = '" . $_REQUEST['vs_sup_2'] . "' ,
`vs_sup_3` = '" . $_REQUEST['vs_sup_3'] . "' ,
`vs_sup_4` = '" . $_REQUEST['vs_sup_4'] . "' ,
`vs_quitar_1` = '" . $_REQUEST['vs_quitar_1'] . "' ,
`vs_quitar_2` = '" . $_REQUEST['vs_quitar_2'] . "' ,
`vs_quitar_3` = '" . $_REQUEST['vs_quitar_3'] . "' ,
`vs_quitar_4` = '" . $_REQUEST['vs_quitar_4'] . "' ,
`vs_sierre_1` = '" . $_REQUEST['vs_sierre_1'] . "' ,
`vs_sierre_2` = '" . $_REQUEST['vs_sierre_2'] . "' ,
`vs_sierre_3` = '" . $_REQUEST['vs_sierre_3'] . "' ,
`vs_sierre_4` = '" . $_REQUEST['vs_sierre_4'] . "' ,
`vs_bajarsi_1` = '" . $_REQUEST['vs_bajarsi_1'] . "' ,
`vs_bajarsi_2` = '" . $_REQUEST['vs_bajarsi_2'] . "' ,
`vs_bajarsi_3` = '" . $_REQUEST['vs_bajarsi_3'] . "' ,
`vs_bajarsi_4` = '" . $_REQUEST['vs_bajarsi_4'] . "' ,
`vs_boton_1` = '" . $_REQUEST['vs_boton_1'] . "' ,
`vs_boton_2` = '" . $_REQUEST['vs_boton_2'] . "' ,
`vs_boton_3` = '" . $_REQUEST['vs_boton_3'] . "' ,
`vs_boton_4` = '" . $_REQUEST['vs_boton_4'] . "' ,
`vs_boton_out_1` = '" . $_REQUEST['vs_boton_out_1'] . "' ,
`vs_boton_out_2` = '" . $_REQUEST['vs_boton_out_2'] . "' ,
`vs_boton_out_3` = '" . $_REQUEST['vs_boton_out_3'] . "' ,
`vs_boton_out_4` = '" . $_REQUEST['vs_boton_out_4'] . "' ,
`vi_pon_1` = '" . $_REQUEST['vi_pon_1'] . "' ,
`vi_pon_2` = '" . $_REQUEST['vi_pon_2'] . "' ,
`vi_pon_3` = '" . $_REQUEST['vi_pon_3'] . "' ,
`vi_pon_4` = '" . $_REQUEST['vi_pon_4'] . "' ,
`vi_ropaout_1` = '" . $_REQUEST['vi_ropaout_1'] . "' ,
`vi_ropaout_2` = '" . $_REQUEST['vi_ropaout_2'] . "' ,
`vi_ropaout_3` = '" . $_REQUEST['vi_ropaout_3'] . "' ,
`vi_ropaout_4` = '" . $_REQUEST['vi_ropaout_4'] . "' ,
`vi_medias_1` = '" . $_REQUEST['vi_medias_1'] . "' ,
`vi_medias_2` = '" . $_REQUEST['vi_medias_2'] . "' ,
`vi_medias_3` = '" . $_REQUEST['vi_medias_3'] . "' ,
`vi_medias_4` = '" . $_REQUEST['vi_medias_4'] . "' ,
`zapatos_1` = '" . $_REQUEST['zapatos_1'] . "' ,
`zapatos_2` = '" . $_REQUEST['zapatos_2'] . "' ,
`zapatos_3` = '" . $_REQUEST['zapatos_3'] . "' ,
`zapatos_4` = '" . $_REQUEST['zapatos_4'] . "' ,
`vi_boton_1` = '" . $_REQUEST['vi_boton_1'] . "' ,
`vi_boton_2` = '" . $_REQUEST['vi_boton_2'] . "' ,
`vi_boton_3` = '" . $_REQUEST['vi_boton_3'] . "' ,
`vi_boton_4` = '" . $_REQUEST['vi_boton_4'] . "' ,
`vi_sierre_1` = '" . $_REQUEST['vi_sierre_1'] . "' ,
`vi_sierre_2` = '" . $_REQUEST['vi_sierre_2'] . "' ,
`vi_sierre_3` = '" . $_REQUEST['vi_sierre_3'] . "' ,
`vi_sierre_4` = '" . $_REQUEST['vi_sierre_4'] . "' ,
`sentar_1` = '" . $_REQUEST['sentar_1'] . "' ,
`sentar_2` = '" . $_REQUEST['sentar_2'] . "' ,
`sentar_3` = '" . $_REQUEST['sentar_3'] . "' ,
`sentar_4` = '" . $_REQUEST['sentar_4'] . "' ,
`ph_1` = '" . $_REQUEST['ph_1'] . "' ,
`ph_2` = '" . $_REQUEST['ph_2'] . "' ,
`ph_3` = '" . $_REQUEST['ph_3'] . "' ,
`ph_4` = '" . $_REQUEST['ph_4'] . "' ,
`man_ropa_1` = '" . $_REQUEST['man_ropa_1'] . "' ,
`man_ropa_2` = '" . $_REQUEST['man_ropa_2'] . "' ,
`man_ropa_3` = '" . $_REQUEST['man_ropa_3'] . "' ,
`man_ropa_4` = '" . $_REQUEST['man_ropa_4'] . "' ,
`soltar_ag_1` = '" . $_REQUEST['soltar_ag_1'] . "' ,
`soltar_ag_2` = '" . $_REQUEST['soltar_ag_2'] . "' ,
`soltar_ag_3` = '" . $_REQUEST['soltar_ag_3'] . "' ,
`soltar_ag_4` = '" . $_REQUEST['soltar_ag_4'] . "' ,
`secar_1` = '" . $_REQUEST['secar_1'] . "' ,
`secar_2` = '" . $_REQUEST['secar_2'] . "' ,
`secar_3` = '" . $_REQUEST['secar_3'] . "' ,
`secar_4` = '" . $_REQUEST['secar_4'] . "' ,
`b_mmss_1` = '" . $_REQUEST['b_mmss_1'] . "' ,
`b_mmss_2` = '" . $_REQUEST['b_mmss_2'] . "' ,
`b_mmss_3` = '" . $_REQUEST['b_mmss_3'] . "' ,
`b_mmss_4` = '" . $_REQUEST['b_mmss_4'] . "' ,
`b_mmii_1` = '" . $_REQUEST['b_mmii_1'] . "' ,
`b_mmii_2` = '" . $_REQUEST['b_mmii_2'] . "' ,
`b_mmii_3` = '" . $_REQUEST['b_mmii_3'] . "' ,
`b_mmii_4` = '" . $_REQUEST['b_mmii_4'] . "' ,
`lavado_pelo_1` = '" . $_REQUEST['lavado_pelo_1'] . "' ,
`lavado_pelo_2` = '" . $_REQUEST['lavado_pelo_2'] . "' ,
`lavado_pelo_3` = '" . $_REQUEST['lavado_pelo_3'] . "' ,
`lavado_pelo_4` = '" . $_REQUEST['lavado_pelo_4'] . "' ,
`grifos_1` = '" . $_REQUEST['grifos_1'] . "' ,
`grifos_2` = '" . $_REQUEST['grifos_2'] . "' ,
`grifos_3` = '" . $_REQUEST['grifos_3'] . "' ,
`grifos_4` = '" . $_REQUEST['grifos_4'] . "' ,
`lavado_m_1` = '" . $_REQUEST['lavado_m_1'] . "' ,
`lavado_m_2` = '" . $_REQUEST['lavado_m_2'] . "' ,
`lavado_m_3` = '" . $_REQUEST['lavado_m_3'] . "' ,
`lavado_m_4` = '" . $_REQUEST['lavado_m_4'] . "' ,
`lavado_car_1` = '" . $_REQUEST['lavado_car_1'] . "' ,
`lavado_car_2` = '" . $_REQUEST['lavado_car_2'] . "' ,
`lavado_car_3` = '" . $_REQUEST['lavado_car_3'] . "' ,
`lavado_car_4` = '" . $_REQUEST['lavado_car_4'] . "' ,
`cepillar_1` = '" . $_REQUEST['cepillar_1'] . "' ,
`cepillar_2` = '" . $_REQUEST['cepillar_2'] . "' ,
`cepillar_3` = '" . $_REQUEST['cepillar_3'] . "' ,
`cepillar_4` = '" . $_REQUEST['cepillar_4'] . "' ,
`peinar_1` = '" . $_REQUEST['peinar_1'] . "' ,
`peinar_2` = '" . $_REQUEST['peinar_2'] . "' ,
`peinar_3` = '" . $_REQUEST['peinar_3'] . "' ,
`peinar_4` = '" . $_REQUEST['peinar_4'] . "' ,
`afeitar_1` = '" . $_REQUEST['afeitar_1'] . "' ,
`afeitar_2` = '" . $_REQUEST['afeitar_2'] . "' ,
`afeitar_3` = '" . $_REQUEST['afeitar_3'] . "' ,
`afeitar_4` = '" . $_REQUEST['afeitar_4'] . "' ,
`desod_1` = '" . $_REQUEST['desod_1'] . "' ,
`desod_2` = '" . $_REQUEST['desod_2'] . "' ,
`desod_3` = '" . $_REQUEST['desod_3'] . "' ,
`desod_4` = '" . $_REQUEST['desod_4'] . "' ,
`oidos_1` = '" . $_REQUEST['oidos_1'] . "' ,
`oidos_2` = '" . $_REQUEST['oidos_2'] . "' ,
`oidos_3` = '" . $_REQUEST['oidos_3'] . "' ,
`oidos_4` = '" . $_REQUEST['oidos_4'] . "' ,
`unas_1` = '" . $_REQUEST['unas_1'] . "' ,
`unas_2` = '" . $_REQUEST['unas_2'] . "' ,
`unas_3` = '" . $_REQUEST['unas_3'] . "' ,
`unas_4` = '" . $_REQUEST['unas_4'] . "' ,
`maquilla_1` = '" . $_REQUEST['maquilla_1'] . "' ,
`maquilla_2` = '" . $_REQUEST['maquilla_2'] . "' ,
`maquilla_3` = '" . $_REQUEST['maquilla_3'] . "' ,
`maquilla_4` = '" . $_REQUEST['maquilla_4'] . "' ,
`s_cama_1` = '" . $_REQUEST['s_cama_1'] . "' ,
`s_cama_2` = '" . $_REQUEST['s_cama_2'] . "' ,
`s_cama_3` = '" . $_REQUEST['s_cama_3'] . "' ,
`s_cama_4` = '" . $_REQUEST['s_cama_4'] . "' ,
`sub_cama_1` = '" . $_REQUEST['sub_cama_1'] . "' ,
`sub_cama_2` = '" . $_REQUEST['sub_cama_2'] . "' ,
`sub_cama_3` = '" . $_REQUEST['sub_cama_3'] . "' ,
`sub_cama_4` = '" . $_REQUEST['sub_cama_4'] . "' ,
`girodi_1` = '" . $_REQUEST['girodi_1'] . "' ,
`girodi_2` = '" . $_REQUEST['girodi_2'] . "' ,
`girodi_3` = '" . $_REQUEST['girodi_3'] . "' ,
`girodi_4` = '" . $_REQUEST['girodi_4'] . "' ,
`giroid_1` = '" . $_REQUEST['giroid_1'] . "' ,
`giroid_2` = '" . $_REQUEST['giroid_2'] . "' ,
`giroid_3` = '" . $_REQUEST['giroid_3'] . "' ,
`giroid_4` = '" . $_REQUEST['giroid_4'] . "' ,
`bajar_ca_1` = '" . $_REQUEST['bajar_ca_1'] . "' ,
`bajar_ca_2` = '" . $_REQUEST['bajar_ca_2'] . "' ,
`bajar_ca_3` = '" . $_REQUEST['bajar_ca_3'] . "' ,
`bajar_ca_4` = '" . $_REQUEST['bajar_ca_4'] . "' ,
`subir_ca_1` = '" . $_REQUEST['subir_ca_1'] . "' ,
`subir_ca_2` = '" . $_REQUEST['subir_ca_2'] . "' ,
`subir_ca_3` = '" . $_REQUEST['subir_ca_3'] . "' ,
`subir_ca_4` = '" . $_REQUEST['subir_ca_4'] . "' ,
`taparse_1` = '" . $_REQUEST['taparse_1'] . "' ,
`taparse_2` = '" . $_REQUEST['taparse_2'] . "' ,
`taparse_3` = '" . $_REQUEST['taparse_3'] . "' ,
`taparse_4` = '" . $_REQUEST['taparse_4'] . "' ,
`escribir_1` = '" . $_REQUEST['escribir_1'] . "' ,
`escribir_2` = '" . $_REQUEST['escribir_2'] . "' ,
`escribir_3` = '" . $_REQUEST['escribir_3'] . "' ,
`escribir_4` = '" . $_REQUEST['escribir_4'] . "' ,
`telefono_1` = '" . $_REQUEST['telefono_1'] . "' ,
`telefono_2` = '" . $_REQUEST['telefono_2'] . "' ,
`telefono_3` = '" . $_REQUEST['telefono_3'] . "' ,
`telefono_4` = '" . $_REQUEST['telefono_4'] . "' ,
`paginar_1` = '" . $_REQUEST['paginar_1'] . "' ,
`paginar_2` = '" . $_REQUEST['paginar_2'] . "' ,
`paginar_3` = '" . $_REQUEST['paginar_3'] . "' ,
`paginar_4` = '" . $_REQUEST['paginar_4'] . "' ,
`abrir_c_1` = '" . $_REQUEST['abrir_c_1'] . "' ,
`abrir_c_2` = '" . $_REQUEST['abrir_c_2'] . "' ,
`abrir_c_3` = '" . $_REQUEST['abrir_c_3'] . "' ,
`abrir_c_4` = '" . $_REQUEST['abrir_c_4'] . "' ,
`hablar_1` = '" . $_REQUEST['hablar_1'] . "' ,
`hablar_2` = '" . $_REQUEST['hablar_2'] . "' ,
`hablar_3` = '" . $_REQUEST['hablar_3'] . "' ,
`hablar_4` = '" . $_REQUEST['hablar_4'] . "' ,
`interrup_1` = '" . $_REQUEST['interrup_1'] . "' ,
`interrup_2` = '" . $_REQUEST['interrup_2'] . "' ,
`interrup_3` = '" . $_REQUEST['interrup_3'] . "' ,
`interrup_4` = '" . $_REQUEST['interrup_4'] . "' ,
`leer_1` = '" . $_REQUEST['leer_1'] . "' ,
`leer_2` = '" . $_REQUEST['leer_2'] . "' ,
`leer_3` = '" . $_REQUEST['leer_3'] . "' ,
`leer_4` = '" . $_REQUEST['leer_4'] . "' ,
`h_lavar_1` = '" . $_REQUEST['h_lavar_1'] . "' ,
`h_lavar_2` = '" . $_REQUEST['h_lavar_2'] . "' ,
`h_lavar_3` = '" . $_REQUEST['h_lavar_3'] . "' ,
`h_lavar_4` = '" . $_REQUEST['h_lavar_4'] . "' ,
`h_planchar_1` = '" . $_REQUEST['h_planchar_1'] . "' ,
`h_planchar_2` = '" . $_REQUEST['h_planchar_2'] . "' ,
`h_planchar_3` = '" . $_REQUEST['h_planchar_3'] . "' ,
`h_planchar_4` = '" . $_REQUEST['h_planchar_4'] . "' ,
`h_cuidani_1` = '" . $_REQUEST['h_cuidani_1'] . "' ,
`h_cuidani_2` = '" . $_REQUEST['h_cuidani_2'] . "' ,
`h_cuidani_3` = '" . $_REQUEST['h_cuidani_3'] . "' ,
`h_cuidani_4` = '" . $_REQUEST['h_cuidani_4'] . "' ,
`h_limpieza_1` = '" . $_REQUEST['h_limpieza_1'] . "' ,
`h_limpieza_2` = '" . $_REQUEST['h_limpieza_2'] . "' ,
`h_limpieza_3` = '" . $_REQUEST['h_limpieza_3'] . "' ,
`h_limpieza_4` = '" . $_REQUEST['h_limpieza_4'] . "' ,
`usa_recur_1` = '" . $_REQUEST['usa_recur_1'] . "' ,
`usa_recur_2` = '" . $_REQUEST['usa_recur_2'] . "' ,
`usa_recur_3` = '" . $_REQUEST['usa_recur_3'] . "' ,
`usa_recur_4` = '" . $_REQUEST['usa_recur_4'] . "' ,
`dinero_1` = '" . $_REQUEST['dinero_1'] . "' ,
`dinero_2` = '" . $_REQUEST['dinero_2'] . "' ,
`dinero_3` = '" . $_REQUEST['dinero_3'] . "' ,
`dinero_4` = '" . $_REQUEST['dinero_4'] . "' ,
`compra_1` = '" . $_REQUEST['compra_1'] . "' ,
`compra_2` = '" . $_REQUEST['compra_2'] . "' ,
`compra_3` = '" . $_REQUEST['compra_3'] . "' ,
`compra_4` = '" . $_REQUEST['compra_4'] . "' ,
`carro_1` = '" . $_REQUEST['carro_1'] . "' ,
`carro_2` = '" . $_REQUEST['carro_2'] . "' ,
`carro_3` = '" . $_REQUEST['carro_3'] . "' ,
`carro_4` = '" . $_REQUEST['carro_4'] . "' ,
`cam_casa_1` = '" . $_REQUEST['cam_casa_1'] . "' ,
`cam_casa_2` = '" . $_REQUEST['cam_casa_2'] . "' ,
`cam_casa_3` = '" . $_REQUEST['cam_casa_3'] . "' ,
`cam_casa_4` = '" . $_REQUEST['cam_casa_4'] . "' ,
`cam_calle_1` = '" . $_REQUEST['cam_calle_1'] . "' ,
`cam_calle_2` = '" . $_REQUEST['cam_calle_2'] . "' ,
`cam_calle_3` = '" . $_REQUEST['cam_calle_3'] . "' ,
`cam_calle_4` = '" . $_REQUEST['cam_calle_4'] . "' ,
`escalera_1` = '" . $_REQUEST['escalera_1'] . "' ,
`escalera_2` = '" . $_REQUEST['escalera_2'] . "' ,
`escalera_3` = '" . $_REQUEST['escalera_3'] . "' ,
`escalera_4` = '" . $_REQUEST['escalera_4'] . "' ,
`b_escale_1` = '" . $_REQUEST['b_escale_1'] . "' ,
`b_escale_2` = '" . $_REQUEST['b_escale_2'] . "' ,
`b_escale_3` = '" . $_REQUEST['b_escale_3'] . "' ,
`b_escale_4` = '" . $_REQUEST['b_escale_4'] . "' ,
`in_out_puerta_1` = '" . $_REQUEST['in_out_puerta_1'] . "' ,
`in_out_puerta_2` = '" . $_REQUEST['in_out_puerta_2'] . "' ,
`in_out_puerta_3` = '" . $_REQUEST['in_out_puerta_3'] . "' ,
`in_out_puerta_4` = '" . $_REQUEST['in_out_puerta_4'] . "' ,
`rampa_1` = '" . $_REQUEST['rampa_1'] . "' ,
`rampa_2` = '" . $_REQUEST['rampa_2'] . "' ,
`rampa_3` = '" . $_REQUEST['rampa_3'] . "' ,
`rampa_4` = '" . $_REQUEST['rampa_4'] . "' ,
`juego_t_1` = '" . $_REQUEST['juego_t_1'] . "' ,
`juego_t_2` = '" . $_REQUEST['juego_t_2'] . "' ,
`juego_t_3` = '" . $_REQUEST['juego_t_3'] . "' ,
`juego_t_4` = '" . $_REQUEST['juego_t_4'] . "' ,
`manual_1` = '" . $_REQUEST['manual_1'] . "' ,
`manual_2` = '" . $_REQUEST['manual_2'] . "' ,
`manual_3` = '" . $_REQUEST['manual_3'] . "' ,
`manual_4` = '" . $_REQUEST['manual_4'] . "' ,
`radio_1` = '" . $_REQUEST['radio_1'] . "' ,
`radio_2` = '" . $_REQUEST['radio_2'] . "' ,
`radio_3` = '" . $_REQUEST['radio_3'] . "' ,
`radio_4` = '" . $_REQUEST['radio_4'] . "' ,
`adap_s` = '" . $_REQUEST['adap_s'] . "' ,
`adap_n` = '" . $_REQUEST['adap_n'] . "' ,
`valoracion_d` = '" . $_REQUEST['valoracion_d'] . "' ,
`valoracion_se` = '" . $_REQUEST['valoracion_se'] . "' ,
`valoracion_depe` = '" . $_REQUEST['valoracion_depe'] . "' ,
`oser_5` = '" . $_REQUEST['oser_5'] . "' ,
`inclusion` = '" . $_REQUEST['inclusion'] . "' ,
`impresion` = '" . $_REQUEST['impresion'] . "' ,
`conducta` = '" . $_REQUEST['conducta'] . "' WHERE `id_h2_cotidianidad` = '" . $_REQUEST['id_h2_cotidianidad'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h2_cotidianidad = 'new';
$sql = "SELECT * from h2_cotidianidad WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h2_cotidianidad = $row['id_h2_cotidianidad'];

    $ute_1 = $row['ute_1'];
    $ute_2 = $row['ute_2'];
    $ute_3 = $row['ute_3'];
    $ute_4 = $row['ute_4'];
    $beber_1 = $row['beber_1'];
    $beber_2 = $row['beber_2'];
    $beber_3 = $row['beber_3'];
    $beber_4 = $row['beber_4'];
    $taza_1 = $row['taza_1'];
    $taza_2 = $row['taza_2'];
    $taza_3 = $row['taza_3'];
    $taza_4 = $row['taza_4'];
    $cortar_1 = $row['cortar_1'];
    $cortar_2 = $row['cortar_2'];
    $cortar_3 = $row['cortar_3'];
    $cortar_4 = $row['cortar_4'];
    $fruta_1 = $row['fruta_1'];
    $fruta_2 = $row['fruta_2'];
    $fruta_3 = $row['fruta_3'];
    $fruta_4 = $row['fruta_4'];
    $com_ca_1 = $row['com_ca_1'];
    $com_ca_2 = $row['com_ca_2'];
    $com_ca_3 = $row['com_ca_3'];
    $com_ca_4 = $row['com_ca_4'];
    $com_fria_1 = $row['com_fria_1'];
    $com_fria_2 = $row['com_fria_2'];
    $com_fria_3 = $row['com_fria_3'];
    $com_fria_4 = $row['com_fria_4'];
    $vs_sup_1 = $row['vs_sup_1'];
    $vs_sup_2 = $row['vs_sup_2'];
    $vs_sup_3 = $row['vs_sup_3'];
    $vs_sup_4 = $row['vs_sup_4'];
    $vs_quitar_1 = $row['vs_quitar_1'];
    $vs_quitar_2 = $row['vs_quitar_2'];
    $vs_quitar_3 = $row['vs_quitar_3'];
    $vs_quitar_4 = $row['vs_quitar_4'];
    $vs_sierre_1 = $row['vs_sierre_1'];
    $vs_sierre_2 = $row['vs_sierre_2'];
    $vs_sierre_3 = $row['vs_sierre_3'];
    $vs_sierre_4 = $row['vs_sierre_4'];
    $vs_bajarsi_1 = $row['vs_bajarsi_1'];
    $vs_bajarsi_2 = $row['vs_bajarsi_2'];
    $vs_bajarsi_3 = $row['vs_bajarsi_3'];
    $vs_bajarsi_4 = $row['vs_bajarsi_4'];
    $vs_boton_1 = $row['vs_boton_1'];
    $vs_boton_2 = $row['vs_boton_2'];
    $vs_boton_3 = $row['vs_boton_3'];
    $vs_boton_4 = $row['vs_boton_4'];
    $vs_boton_out_1 = $row['vs_boton_out_1'];
    $vs_boton_out_2 = $row['vs_boton_out_2'];
    $vs_boton_out_3 = $row['vs_boton_out_3'];
    $vs_boton_out_4 = $row['vs_boton_out_4'];
    $vi_pon_1 = $row['vi_pon_1'];
    $vi_pon_2 = $row['vi_pon_2'];
    $vi_pon_3 = $row['vi_pon_3'];
    $vi_pon_4 = $row['vi_pon_4'];
    $vi_ropaout_1 = $row['vi_ropaout_1'];
    $vi_ropaout_2 = $row['vi_ropaout_2'];
    $vi_ropaout_3 = $row['vi_ropaout_3'];
    $vi_ropaout_4 = $row['vi_ropaout_4'];
    $vi_medias_1 = $row['vi_medias_1'];
    $vi_medias_2 = $row['vi_medias_2'];
    $vi_medias_3 = $row['vi_medias_3'];
    $vi_medias_4 = $row['vi_medias_4'];
    $zapatos_1 = $row['zapatos_1'];
    $zapatos_2 = $row['zapatos_2'];
    $zapatos_3 = $row['zapatos_3'];
    $zapatos_4 = $row['zapatos_4'];
    $vi_boton_1 = $row['vi_boton_1'];
    $vi_boton_2 = $row['vi_boton_2'];
    $vi_boton_3 = $row['vi_boton_3'];
    $vi_boton_4 = $row['vi_boton_4'];
    $vi_sierre_1 = $row['vi_sierre_1'];
    $vi_sierre_2 = $row['vi_sierre_2'];
    $vi_sierre_3 = $row['vi_sierre_3'];
    $vi_sierre_4 = $row['vi_sierre_4'];
    $sentar_1 = $row['sentar_1'];
    $sentar_2 = $row['sentar_2'];
    $sentar_3 = $row['sentar_3'];
    $sentar_4 = $row['sentar_4'];
    $ph_1 = $row['ph_1'];
    $ph_2 = $row['ph_2'];
    $ph_3 = $row['ph_3'];
    $ph_4 = $row['ph_4'];
    $man_ropa_1 = $row['man_ropa_1'];
    $man_ropa_2 = $row['man_ropa_2'];
    $man_ropa_3 = $row['man_ropa_3'];
    $man_ropa_4 = $row['man_ropa_4'];
    $soltar_ag_1 = $row['soltar_ag_1'];
    $soltar_ag_2 = $row['soltar_ag_2'];
    $soltar_ag_3 = $row['soltar_ag_3'];
    $soltar_ag_4 = $row['soltar_ag_4'];
    $secar_1 = $row['secar_1'];
    $secar_2 = $row['secar_2'];
    $secar_3 = $row['secar_3'];
    $secar_4 = $row['secar_4'];
    $b_mmss_1 = $row['b_mmss_1'];
    $b_mmss_2 = $row['b_mmss_2'];
    $b_mmss_3 = $row['b_mmss_3'];
    $b_mmss_4 = $row['b_mmss_4'];
    $b_mmii_1 = $row['b_mmii_1'];
    $b_mmii_2 = $row['b_mmii_2'];
    $b_mmii_3 = $row['b_mmii_3'];
    $b_mmii_4 = $row['b_mmii_4'];
    $lavado_pelo_1 = $row['lavado_pelo_1'];
    $lavado_pelo_2 = $row['lavado_pelo_2'];
    $lavado_pelo_3 = $row['lavado_pelo_3'];
    $lavado_pelo_4 = $row['lavado_pelo_4'];
    $grifos_1 = $row['grifos_1'];
    $grifos_2 = $row['grifos_2'];
    $grifos_3 = $row['grifos_3'];
    $grifos_4 = $row['grifos_4'];
    $lavado_m_1 = $row['lavado_m_1'];
    $lavado_m_2 = $row['lavado_m_2'];
    $lavado_m_3 = $row['lavado_m_3'];
    $lavado_m_4 = $row['lavado_m_4'];
    $lavado_car_1 = $row['lavado_car_1'];
    $lavado_car_2 = $row['lavado_car_2'];
    $lavado_car_3 = $row['lavado_car_3'];
    $lavado_car_4 = $row['lavado_car_4'];
    $cepillar_1 = $row['cepillar_1'];
    $cepillar_2 = $row['cepillar_2'];
    $cepillar_3 = $row['cepillar_3'];
    $cepillar_4 = $row['cepillar_4'];
    $peinar_1 = $row['peinar_1'];
    $peinar_2 = $row['peinar_2'];
    $peinar_3 = $row['peinar_3'];
    $peinar_4 = $row['peinar_4'];
    $afeitar_1 = $row['afeitar_1'];
    $afeitar_2 = $row['afeitar_2'];
    $afeitar_3 = $row['afeitar_3'];
    $afeitar_4 = $row['afeitar_4'];
    $desod_1 = $row['desod_1'];
    $desod_2 = $row['desod_2'];
    $desod_3 = $row['desod_3'];
    $desod_4 = $row['desod_4'];
    $oidos_1 = $row['oidos_1'];
    $oidos_2 = $row['oidos_2'];
    $oidos_3 = $row['oidos_3'];
    $oidos_4 = $row['oidos_4'];
    $unas_1 = $row['unas_1'];
    $unas_2 = $row['unas_2'];
    $unas_3 = $row['unas_3'];
    $unas_4 = $row['unas_4'];
    $maquilla_1 = $row['maquilla_1'];
    $maquilla_2 = $row['maquilla_2'];
    $maquilla_3 = $row['maquilla_3'];
    $maquilla_4 = $row['maquilla_4'];
    $s_cama_1 = $row['s_cama_1'];
    $s_cama_2 = $row['s_cama_2'];
    $s_cama_3 = $row['s_cama_3'];
    $s_cama_4 = $row['s_cama_4'];
    $sub_cama_1 = $row['sub_cama_1'];
    $sub_cama_2 = $row['sub_cama_2'];
    $sub_cama_3 = $row['sub_cama_3'];
    $sub_cama_4 = $row['sub_cama_4'];
    $girodi_1 = $row['girodi_1'];
    $girodi_2 = $row['girodi_2'];
    $girodi_3 = $row['girodi_3'];
    $girodi_4 = $row['girodi_4'];
    $giroid_1 = $row['giroid_1'];
    $giroid_2 = $row['giroid_2'];
    $giroid_3 = $row['giroid_3'];
    $giroid_4 = $row['giroid_4'];
    $bajar_ca_1 = $row['bajar_ca_1'];
    $bajar_ca_2 = $row['bajar_ca_2'];
    $bajar_ca_3 = $row['bajar_ca_3'];
    $bajar_ca_4 = $row['bajar_ca_4'];
    $subir_ca_1 = $row['subir_ca_1'];
    $subir_ca_2 = $row['subir_ca_2'];
    $subir_ca_3 = $row['subir_ca_3'];
    $subir_ca_4 = $row['subir_ca_4'];
    $taparse_1 = $row['taparse_1'];
    $taparse_2 = $row['taparse_2'];
    $taparse_3 = $row['taparse_3'];
    $taparse_4 = $row['taparse_4'];
    $escribir_1 = $row['escribir_1'];
    $escribir_2 = $row['escribir_2'];
    $escribir_3 = $row['escribir_3'];
    $escribir_4 = $row['escribir_4'];
    $telefono_1 = $row['telefono_1'];
    $telefono_2 = $row['telefono_2'];
    $telefono_3 = $row['telefono_3'];
    $telefono_4 = $row['telefono_4'];
    $paginar_1 = $row['paginar_1'];
    $paginar_2 = $row['paginar_2'];
    $paginar_3 = $row['paginar_3'];
    $paginar_4 = $row['paginar_4'];
    $abrir_c_1 = $row['abrir_c_1'];
    $abrir_c_2 = $row['abrir_c_2'];
    $abrir_c_3 = $row['abrir_c_3'];
    $abrir_c_4 = $row['abrir_c_4'];
    $hablar_1 = $row['hablar_1'];
    $hablar_2 = $row['hablar_2'];
    $hablar_3 = $row['hablar_3'];
    $hablar_4 = $row['hablar_4'];
    $interrup_1 = $row['interrup_1'];
    $interrup_2 = $row['interrup_2'];
    $interrup_3 = $row['interrup_3'];
    $interrup_4 = $row['interrup_4'];
    $leer_1 = $row['leer_1'];
    $leer_2 = $row['leer_2'];
    $leer_3 = $row['leer_3'];
    $leer_4 = $row['leer_4'];
    $h_lavar_1 = $row['h_lavar_1'];
    $h_lavar_2 = $row['h_lavar_2'];
    $h_lavar_3 = $row['h_lavar_3'];
    $h_lavar_4 = $row['h_lavar_4'];
    $h_planchar_1 = $row['h_planchar_1'];
    $h_planchar_2 = $row['h_planchar_2'];
    $h_planchar_3 = $row['h_planchar_3'];
    $h_planchar_4 = $row['h_planchar_4'];
    $h_cuidani_1 = $row['h_cuidani_1'];
    $h_cuidani_2 = $row['h_cuidani_2'];
    $h_cuidani_3 = $row['h_cuidani_3'];
    $h_cuidani_4 = $row['h_cuidani_4'];
    $h_limpieza_1 = $row['h_limpieza_1'];
    $h_limpieza_2 = $row['h_limpieza_2'];
    $h_limpieza_3 = $row['h_limpieza_3'];
    $h_limpieza_4 = $row['h_limpieza_4'];
    $usa_recur_1 = $row['usa_recur_1'];
    $usa_recur_2 = $row['usa_recur_2'];
    $usa_recur_3 = $row['usa_recur_3'];
    $usa_recur_4 = $row['usa_recur_4'];
    $dinero_1 = $row['dinero_1'];
    $dinero_2 = $row['dinero_2'];
    $dinero_3 = $row['dinero_3'];
    $dinero_4 = $row['dinero_4'];
    $compra_1 = $row['compra_1'];
    $compra_2 = $row['compra_2'];
    $compra_3 = $row['compra_3'];
    $compra_4 = $row['compra_4'];
    $carro_1 = $row['carro_1'];
    $carro_2 = $row['carro_2'];
    $carro_3 = $row['carro_3'];
    $carro_4 = $row['carro_4'];
    $cam_casa_1 = $row['cam_casa_1'];
    $cam_casa_2 = $row['cam_casa_2'];
    $cam_casa_3 = $row['cam_casa_3'];
    $cam_casa_4 = $row['cam_casa_4'];
    $cam_calle_1 = $row['cam_calle_1'];
    $cam_calle_2 = $row['cam_calle_2'];
    $cam_calle_3 = $row['cam_calle_3'];
    $cam_calle_4 = $row['cam_calle_4'];
    $escalera_1 = $row['escalera_1'];
    $escalera_2 = $row['escalera_2'];
    $escalera_3 = $row['escalera_3'];
    $escalera_4 = $row['escalera_4'];
    $b_escale_1 = $row['b_escale_1'];
    $b_escale_2 = $row['b_escale_2'];
    $b_escale_3 = $row['b_escale_3'];
    $b_escale_4 = $row['b_escale_4'];
    $in_out_puerta_1 = $row['in_out_puerta_1'];
    $in_out_puerta_2 = $row['in_out_puerta_2'];
    $in_out_puerta_3 = $row['in_out_puerta_3'];
    $in_out_puerta_4 = $row['in_out_puerta_4'];
    $rampa_1 = $row['rampa_1'];
    $rampa_2 = $row['rampa_2'];
    $rampa_3 = $row['rampa_3'];
    $rampa_4 = $row['rampa_4'];
    $juego_t_1 = $row['juego_t_1'];
    $juego_t_2 = $row['juego_t_2'];
    $juego_t_3 = $row['juego_t_3'];
    $juego_t_4 = $row['juego_t_4'];
    $manual_1 = $row['manual_1'];
    $manual_2 = $row['manual_2'];
    $manual_3 = $row['manual_3'];
    $manual_4 = $row['manual_4'];
    $radio_1 = $row['radio_1'];
    $radio_2 = $row['radio_2'];
    $radio_3 = $row['radio_3'];
    $radio_4 = $row['radio_4'];
    $adap_s = $row['adap_s'];
    $adap_n = $row['adap_n'];
    $valoracion_d = $row['valoracion_d'];
    $valoracion_se = $row['valoracion_se'];
    $valoracion_depe = $row['valoracion_depe'];
    $oser_5 = $row['oser_5'];
    $inclusion = $row['inclusion'];
    $impresion = $row['impresion'];
    $conducta = $row['conducta'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h2_cotidianidad").click(function() {
            $("#open-h2_cotidianidad").show();
            $(this).hide();
            $("#content-h2_cotidianidad").hide('slow');
        });

        $("#open-h2_cotidianidad").click(function() {
            $("#close-h2_cotidianidad").show();
            $(this).hide();
            $("#content-h2_cotidianidad").show('slow');
        });

    });

</script>
<fieldset id="h2_cotidianidad">
    <legend align="left"> <div class="arrow-c" id="close-h2_cotidianidad"></div> <div class="arrow-o" id="open-h2_cotidianidad" ></div> <font>Valoracion terapia ocupacional neurorehabilitacion - Desempeño Ocupacional Realizante (DOR)</font></legend>
    <div id="content-h2_cotidianidad">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h2_cotidianidad" id="guardar_h2_cotidianidad" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h2_cotidianidad" name="form_h2_cotidianidad" action="<?php echo @$action_form_h2_cotidianidad ?>#h2_cotidianidad" method="post">

            <input type="hidden" id="id_h2_cotidianidad" name="id_h2_cotidianidad" value="<?php echo @$id_h2_cotidianidad ?>" />


            <input type="hidden" class="input_txt valid" id="id_h2_cotidianidad" name="id_h2_cotidianidad" value="<?php echo @$id_h2_cotidianidad; ?>" />

            <table  border="0" cellspacing="0" cellpadding="0" class="data" align="left">
                <tr>
                    <td colspan="5" valign="top"><p align="center"><strong>ACTIVIDADES DE LA VIDA DIARIA BASICAS</strong></p>    </td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p align="center"><strong>ALIMENTACION</strong></p></td>
                    <td width="168" valign="top"><p align="center"><strong>1</strong></p></td>
                    <td width="168" valign="top"><p align="center"><strong>2</strong></p></td>
                    <td width="186" valign="top"><p align="center"><strong>3</strong></p></td>
                    <td width="248" valign="top"><p align="center"><strong>OBSERVACIONES</strong></p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Uso de utensilios </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ute_1" name="ute_1" value="<?php echo @$ute_1; ?>" />
                        </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ute_2" name="ute_2" value="<?php echo @$ute_2; ?>" />
                        </p></td>
                    <td width="186" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ute_3" name="ute_3" value="<?php echo @$ute_3; ?>" />
                        </p></td>
                    <td width="248" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ute_4" name="ute_4" value="<?php echo @$ute_4; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Beber / sorber </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="beber_1" name="beber_1" value="<?php echo @$beber_1; ?>" />
                        </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="beber_2" name="beber_2" value="<?php echo @$beber_2; ?>" />
                        </p></td>
                    <td width="186" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="beber_3" name="beber_3" value="<?php echo @$beber_3; ?>" />
                        </p></td>
                    <td width="248" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="beber_4" name="beber_4" value="<?php echo @$beber_4; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Uso de taza </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="taza_1" name="taza_1" value="<?php echo @$taza_1; ?>" />
                        </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="taza_2" name="taza_2" value="<?php echo @$taza_2; ?>" />
                        </p></td>
                    <td width="186" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="taza_3" name="taza_3" value="<?php echo @$taza_3; ?>" />
                        </p></td>
                    <td width="248" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="taza_4" name="taza_4" value="<?php echo @$taza_4; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Cortar comida</p></td>
                    <td width="168" valign="top"><p align="center"><input type="text" class="input_txt valid" id="cortar_1" name="cortar_1" value="<?php echo @$cortar_1; ?>" />
                            &nbsp;</p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cortar_2" name="cortar_2" value="<?php echo @$cortar_2; ?>" />
                        </p></td>
                    <td width="186" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cortar_3" name="cortar_3" value="<?php echo @$cortar_3; ?>" />
                        </p></td>
                    <td width="248" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cortar_4" name="cortar_4" value="<?php echo @$cortar_4; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Pelar fruta</p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="fruta_1" name="fruta_1" value="<?php echo @$fruta_1; ?>" />
                        </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="fruta_2" name="fruta_2" value="<?php echo @$fruta_2; ?>" />
                        </p></td>
                    <td width="186" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="fruta_3" name="fruta_3" value="<?php echo @$fruta_3; ?>" />
                        </p></td>
                    <td width="248" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="fruta_4" name="fruta_4" value="<?php echo @$fruta_4; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Preparar    comida caliente</p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="com_ca_1" name="com_ca_1" value="<?php echo @$com_ca_1; ?>" />
                        </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="com_ca_2" name="com_ca_2" value="<?php echo @$com_ca_2; ?>" />
                        </p></td>
                    <td width="186" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="com_ca_3" name="com_ca_3" value="<?php echo @$com_ca_3; ?>" />
                        </p></td>
                    <td width="248" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="com_ca_4" name="com_ca_4" value="<?php echo @$com_ca_4; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Preparar    comida fría</p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="com_fria_1" name="com_fria_1" value="<?php echo @$com_fria_1; ?>" />
                        </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="com_fria_2" name="com_fria_2" value="<?php echo @$com_fria_2; ?>" />
                        </p></td>
                    <td width="186" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="com_fria_3" name="com_fria_3" value="<?php echo @$com_fria_3; ?>" />
                        </p></td>
                    <td width="248" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="com_fria_4" name="com_fria_4" value="<?php echo @$com_fria_4; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p align="center"><strong>VESTIDO</strong></p></td>
                    <td width="168" valign="top"><p align="center"><strong>1</strong> </p></td>
                    <td width="168" valign="top"><p align="center"><strong>2</strong> </p></td>
                    <td width="186" valign="top"><p align="center"><strong>3</strong> </p></td>
                    <td width="248" valign="top"><p align="center"><strong>OBSERVACIONES</strong> </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p><strong>VESTIDO SUPERIOR</strong></p></td>
                    <td width="168" valign="top">&nbsp;</td>
                    <td width="168" valign="top">&nbsp;</td>
                    <td width="186" valign="top">&nbsp;</td>
                    <td width="248" valign="top">&nbsp;</td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Ponerse la    parte superior</p></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="vs_sup_1" name="vs_sup_1" value="<?php echo @$vs_sup_1; ?>" /></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="vs_sup_2" name="vs_sup_2" value="<?php echo @$vs_sup_2; ?>" /></td>
                    <td width="186" valign="top"><input type="text" class="input_txt valid" id="vs_sup_3" name="vs_sup_3" value="<?php echo @$vs_sup_3; ?>" /></td>
                    <td width="248" valign="top"><input type="text" class="input_txt valid" id="vs_sup_4" name="vs_sup_4" value="<?php echo @$vs_sup_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Quitarse la    parte superior</p></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="vs_quitar_1" name="vs_quitar_1" value="<?php echo @$vs_quitar_1; ?>" /></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="vs_quitar_2" name="vs_quitar_2" value="<?php echo @$vs_quitar_2; ?>" /></td>
                    <td width="186" valign="top"><input type="text" class="input_txt valid" id="vs_quitar_3" name="vs_quitar_3" value="<?php echo @$vs_quitar_3; ?>" /></td>
                    <td width="248" valign="top"><input type="text" class="input_txt valid" id="vs_quitar_4" name="vs_quitar_4" value="<?php echo @$vs_quitar_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Subir    cremalleras </p></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="vs_sierre_1" name="vs_sierre_1" value="<?php echo @$vs_sierre_1; ?>" /></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="vs_sierre_2" name="vs_sierre_2" value="<?php echo @$vs_sierre_2; ?>" /></td>
                    <td width="186" valign="top"><input type="text" class="input_txt valid" id="vs_sierre_3" name="vs_sierre_3" value="<?php echo @$vs_sierre_3; ?>" /></td>
                    <td width="248" valign="top"><input type="text" class="input_txt valid" id="vs_sierre_4" name="vs_sierre_4" value="<?php echo @$vs_sierre_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Bajar    cremalleras</p></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="vs_bajarsi_1" name="vs_bajarsi_1" value="<?php echo @$vs_bajarsi_1; ?>" /></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="vs_bajarsi_2" name="vs_bajarsi_2" value="<?php echo @$vs_bajarsi_2; ?>" /></td>
                    <td width="186" valign="top"><input type="text" class="input_txt valid" id="vs_bajarsi_3" name="vs_bajarsi_3" value="<?php echo @$vs_bajarsi_3; ?>" /></td>
                    <td width="248" valign="top"><input type="text" class="input_txt valid" id="vs_bajarsi_4" name="vs_bajarsi_4" value="<?php echo @$vs_bajarsi_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Abrochar    botones</p></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="vs_boton_1" name="vs_boton_1" value="<?php echo @$vs_boton_1; ?>" /></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="vs_boton_2" name="vs_boton_2" value="<?php echo @$vs_boton_2; ?>" /></td>
                    <td width="186" valign="top"><input type="text" class="input_txt valid" id="vs_boton_3" name="vs_boton_3" value="<?php echo @$vs_boton_3; ?>" /></td>
                    <td width="248" valign="top"><input type="text" class="input_txt valid" id="vs_boton_4" name="vs_boton_4" value="<?php echo @$vs_boton_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Desabrochar    botones</p></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="vs_boton_out_1" name="vs_boton_out_1" value="<?php echo @$vs_boton_out_1; ?>" /></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="vs_boton_out_2" name="vs_boton_out_2" value="<?php echo @$vs_boton_out_2; ?>" /></td>
                    <td width="186" valign="top"><input type="text" class="input_txt valid" id="vs_boton_out_3" name="vs_boton_out_3" value="<?php echo @$vs_boton_out_3; ?>" /></td>
                    <td width="248" valign="top"><input type="text" class="input_txt valid" id="vs_boton_out_4" name="vs_boton_out_4" value="<?php echo @$vs_boton_out_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p><strong>VESTIDO INFERIOR</strong></p></td>
                    <td width="168" valign="top">&nbsp;</td>
                    <td width="168" valign="top">&nbsp;</td>
                    <td width="186" valign="top">&nbsp;</td>
                    <td width="248" valign="top">&nbsp;</td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Ponerse la    parte inferior</p></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="vi_pon_1" name="vi_pon_1" value="<?php echo @$vi_pon_1; ?>" /></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="vi_pon_2" name="vi_pon_2" value="<?php echo @$vi_pon_2; ?>" /></td>
                    <td width="186" valign="top"><input type="text" class="input_txt valid" id="vi_pon_3" name="vi_pon_3" value="<?php echo @$vi_pon_3; ?>" /></td>
                    <td width="248" valign="top"><input type="text" class="input_txt valid" id="vi_pon_4" name="vi_pon_4" value="<?php echo @$vi_pon_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Quitarse la    parte inferior</p></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="vi_ropaout_1" name="vi_ropaout_1" value="<?php echo @$vi_ropaout_1; ?>" /></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="vi_ropaout_2" name="vi_ropaout_2" value="<?php echo @$vi_ropaout_2; ?>" /></td>
                    <td width="186" valign="top"><input type="text" class="input_txt valid" id="vi_ropaout_3" name="vi_ropaout_3" value="<?php echo @$vi_ropaout_3; ?>" /></td>
                    <td width="248" valign="top"><input type="text" class="input_txt valid" id="vi_ropaout_4" name="vi_ropaout_4" value="<?php echo @$vi_ropaout_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Poner y    quitar calcetines</p></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="vi_medias_1" name="vi_medias_1" value="<?php echo @$vi_medias_1; ?>" /></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="vi_medias_2" name="vi_medias_2" value="<?php echo @$vi_medias_2; ?>" /></td>
                    <td width="186" valign="top"><input type="text" class="input_txt valid" id="vi_medias_3" name="vi_medias_3" value="<?php echo @$vi_medias_3; ?>" /></td>
                    <td width="248" valign="top"><input type="text" class="input_txt valid" id="vi_medias_4" name="vi_medias_4" value="<?php echo @$vi_medias_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Poner y    quitar zapatos</p></td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="zapatos_1" name="zapatos_1" value="<?php echo @$zapatos_1; ?>" />
                        &nbsp;</td>
                    <td width="168" valign="top"><input type="text" class="input_txt valid" id="zapatos_2" name="zapatos_2" value="<?php echo @$zapatos_2; ?>" /></td>
                    <td width="186" valign="top"><input type="text" class="input_txt valid" id="zapatos_3" name="zapatos_3" value="<?php echo @$zapatos_3; ?>" /></td>
                    <td width="248" valign="top"><input type="text" class="input_txt valid" id="zapatos_4" name="zapatos_4" value="<?php echo @$zapatos_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Abrochar y    desabrochar botones</p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="vi_boton_1" name="vi_boton_1" value="<?php echo @$vi_boton_1; ?>" />
                        </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="vi_boton_2" name="vi_boton_2" value="<?php echo @$vi_boton_2; ?>" />
                        </p></td>
                    <td width="186" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="vi_boton_3" name="vi_boton_3" value="<?php echo @$vi_boton_3; ?>" />
                        </p></td>
                    <td width="248" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="vi_boton_4" name="vi_boton_4" value="<?php echo @$vi_boton_4; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Subir y bajar    cremalleras</p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="vi_sierre_1" name="vi_sierre_1" value="<?php echo @$vi_sierre_1; ?>" />
                        </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="vi_sierre_2" name="vi_sierre_2" value="<?php echo @$vi_sierre_2; ?>" />
                        </p></td>
                    <td width="186" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="vi_sierre_3" name="vi_sierre_3" value="<?php echo @$vi_sierre_3; ?>" />
                        </p></td>
                    <td width="248" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="vi_sierre_4" name="vi_sierre_4" value="<?php echo @$vi_sierre_4; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p align="center"><strong>HIGIENE</strong></p></td>
                    <td width="168" valign="top"><p align="center"><strong>1</strong> </p></td>
                    <td width="168" valign="top"><p align="center"><strong>2</strong> </p></td>
                    <td width="186" valign="top"><p align="center"><strong>3</strong> </p></td>
                    <td width="248" valign="top"><p align="center"><strong>OBSERVACIONES</strong> </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p><strong>HIGIENE PARA DEFECAR</strong></p></td>
                    <td width="168" valign="top"><p align="center">&nbsp;</p></td>
                    <td width="168" valign="top"><p align="center">&nbsp;</p></td>
                    <td width="186" valign="top"><p align="center">&nbsp;</p></td>
                    <td width="248" valign="top"><p align="center">&nbsp;</p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Sentarse/levantarse </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="sentar_1" name="sentar_1" value="<?php echo @$sentar_1; ?>" />
                        </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="sentar_2" name="sentar_2" value="<?php echo @$sentar_2; ?>" />
                        </p></td>
                    <td width="186" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="sentar_3" name="sentar_3" value="<?php echo @$sentar_3; ?>" />
                        </p></td>
                    <td width="248" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="sentar_4" name="sentar_4" value="<?php echo @$sentar_4; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Uso de papel    higiénico</p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ph_1" name="ph_1" value="<?php echo @$ph_1; ?>" />
                        </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ph_2" name="ph_2" value="<?php echo @$ph_2; ?>" />
                        </p></td>
                    <td width="186" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ph_3" name="ph_3" value="<?php echo @$ph_3; ?>" />
                        </p></td>
                    <td width="248" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ph_4" name="ph_4" value="<?php echo @$ph_4; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Manejo de    ropa</p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="man_ropa_1" name="man_ropa_1" value="<?php echo @$man_ropa_1; ?>" />
                        </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="man_ropa_2" name="man_ropa_2" value="<?php echo @$man_ropa_2; ?>" />
                        </p></td>
                    <td width="186" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="man_ropa_3" name="man_ropa_3" value="<?php echo @$man_ropa_3; ?>" />
                        </p></td>
                    <td width="248" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="man_ropa_4" name="man_ropa_4" value="<?php echo @$man_ropa_4; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Soltar el    agua</p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="soltar_ag_1" name="soltar_ag_1" value="<?php echo @$soltar_ag_1; ?>" />
                        </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="soltar_ag_2" name="soltar_ag_2" value="<?php echo @$soltar_ag_2; ?>" />
                        </p></td>
                    <td width="186" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="soltar_ag_3" name="soltar_ag_3" value="<?php echo @$soltar_ag_3; ?>" />
                        </p></td>
                    <td width="248" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="soltar_ag_4" name="soltar_ag_4" value="<?php echo @$soltar_ag_4; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p><strong>BAÑO</strong></p></td>
                    <td width="168" valign="top"><p align="center">&nbsp;</p></td>
                    <td width="168" valign="top"><p align="center">&nbsp;</p></td>
                    <td width="186" valign="top"><p align="center">&nbsp;</p></td>
                    <td width="248" valign="top"><p align="center">&nbsp;</p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Baño y secado    del cuerpo</p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="secar_1" name="secar_1" value="<?php echo @$secar_1; ?>" />
                        </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="secar_2" name="secar_2" value="<?php echo @$secar_2; ?>" />
                        </p></td>
                    <td width="186" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="secar_3" name="secar_3" value="<?php echo @$secar_3; ?>" />
                        </p></td>
                    <td width="248" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="secar_4" name="secar_4" value="<?php echo @$secar_4; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Baño y secado    de MMSS</p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="b_mmss_1" name="b_mmss_1" value="<?php echo @$b_mmss_1; ?>" />
                        </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="b_mmss_2" name="b_mmss_2" value="<?php echo @$b_mmss_2; ?>" />
                        </p></td>
                    <td width="186" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="b_mmss_3" name="b_mmss_3" value="<?php echo @$b_mmss_3; ?>" />
                        </p></td>
                    <td width="248" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="b_mmss_4" name="b_mmss_4" value="<?php echo @$b_mmss_4; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Baño y secado    de MMII</p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="b_mmii_1" name="b_mmii_1" value="<?php echo @$b_mmii_1; ?>" />
                        </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="b_mmii_2" name="b_mmii_2" value="<?php echo @$b_mmii_2; ?>" />
                        </p></td>
                    <td width="186" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="b_mmii_3" name="b_mmii_3" value="<?php echo @$b_mmii_3; ?>" />
                        </p></td>
                    <td width="248" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="b_mmii_4" name="b_mmii_4" value="<?php echo @$b_mmii_4; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Lavado de    cabello</p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="lavado_pelo_1" name="lavado_pelo_1" value="<?php echo @$lavado_pelo_1; ?>" />
                            &nbsp;</p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="lavado_pelo_2" name="lavado_pelo_2" value="<?php echo @$lavado_pelo_2; ?>" />
                        </p></td>
                    <td width="186" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="lavado_pelo_3" name="lavado_pelo_3" value="<?php echo @$lavado_pelo_3; ?>" />
                        </p></td>
                    <td width="248" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="lavado_pelo_4" name="lavado_pelo_4" value="<?php echo @$lavado_pelo_4; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="172" valign="top"><p>Uso de    grifos/graduación de Tª </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="grifos_1" name="grifos_1" value="<?php echo @$grifos_1; ?>" />
                        </p></td>
                    <td width="168" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="grifos_2" name="grifos_2" value="<?php echo @$grifos_2; ?>" />
                        </p></td>
                    <td width="186" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="grifos_3" name="grifos_3" value="<?php echo @$grifos_3; ?>" />
                        </p></td>
                    <td width="248" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="grifos_4" name="grifos_4" value="<?php echo @$grifos_4; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p align="center"><strong>ARREGLO PERSONAL</strong></p></td>
                    <td width="47" valign="top"><p align="center"><strong>1</strong></p></td>
                    <td width="47" valign="top"><p align="center"><strong>2</strong></p></td>
                    <td width="35" valign="top"><p align="center"><strong>3</strong></p></td>
                    <td width="262" valign="top"><p align="center">&nbsp;</p></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Lavado de manos</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="lavado_m_1" name="lavado_m_1" value="<?php echo @$lavado_m_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="lavado_m_2" name="lavado_m_2" value="<?php echo @$lavado_m_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="lavado_m_3" name="lavado_m_3" value="<?php echo @$lavado_m_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="lavado_m_4" name="lavado_m_4" value="<?php echo @$lavado_m_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Lavado de cara</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="lavado_car_1" name="lavado_car_1" value="<?php echo @$lavado_car_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="lavado_car_2" name="lavado_car_2" value="<?php echo @$lavado_car_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="lavado_car_3" name="lavado_car_3" value="<?php echo @$lavado_car_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="lavado_car_4" name="lavado_car_4" value="<?php echo @$lavado_car_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Cepillado de dientes </p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="cepillar_1" name="cepillar_1" value="<?php echo @$cepillar_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="cepillar_2" name="cepillar_2" value="<?php echo @$cepillar_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="cepillar_3" name="cepillar_3" value="<?php echo @$cepillar_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="cepillar_4" name="cepillar_4" value="<?php echo @$cepillar_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Peinarse</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="peinar_1" name="peinar_1" value="<?php echo @$peinar_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="peinar_2" name="peinar_2" value="<?php echo @$peinar_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="peinar_3" name="peinar_3" value="<?php echo @$peinar_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="peinar_4" name="peinar_4" value="<?php echo @$peinar_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Afeitarse </p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="afeitar_1" name="afeitar_1" value="<?php echo @$afeitar_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="afeitar_2" name="afeitar_2" value="<?php echo @$afeitar_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="afeitar_3" name="afeitar_3" value="<?php echo @$afeitar_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="afeitar_4" name="afeitar_4" value="<?php echo @$afeitar_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Aplicación de desodorante</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="desod_1" name="desod_1" value="<?php echo @$desod_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="desod_2" name="desod_2" value="<?php echo @$desod_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="desod_3" name="desod_3" value="<?php echo @$desod_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="desod_4" name="desod_4" value="<?php echo @$desod_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Cuidado de oídos </p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="oidos_1" name="oidos_1" value="<?php echo @$oidos_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="oidos_2" name="oidos_2" value="<?php echo @$oidos_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="oidos_3" name="oidos_3" value="<?php echo @$oidos_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="oidos_4" name="oidos_4" value="<?php echo @$oidos_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Cuidado de uñas</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="unas_1" name="unas_1" value="<?php echo @$unas_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="unas_2" name="unas_2" value="<?php echo @$unas_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="unas_3" name="unas_3" value="<?php echo @$unas_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="unas_4" name="unas_4" value="<?php echo @$unas_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Maquillaje</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="maquilla_1" name="maquilla_1" value="<?php echo @$maquilla_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="maquilla_2" name="maquilla_2" value="<?php echo @$maquilla_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="maquilla_3" name="maquilla_3" value="<?php echo @$maquilla_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="maquilla_4" name="maquilla_4" value="<?php echo @$maquilla_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p align="center"><strong>MOVILIDAD EN LA CAMA</strong></p></td>
                    <td width="47" valign="top"><p align="center"><strong>1</strong> </p></td>
                    <td width="47" valign="top"><p align="center"><strong>2</strong> </p></td>
                    <td width="35" valign="top"><p align="center"><strong>3</strong> </p></td>
                    <td width="262" valign="top"><p align="center"><strong>OBSERVACIONES</strong> </p></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Sentarse en la cama</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="s_cama_1" name="s_cama_1" value="<?php echo @$s_cama_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="s_cama_2" name="s_cama_2" value="<?php echo @$s_cama_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="s_cama_3" name="s_cama_3" value="<?php echo @$s_cama_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="s_cama_4" name="s_cama_4" value="<?php echo @$s_cama_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Sentarse en un borde de la cama</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="sub_cama_1" name="sub_cama_1" value="<?php echo @$sub_cama_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="sub_cama_2" name="sub_cama_2" value="<?php echo @$sub_cama_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="sub_cama_3" name="sub_cama_3" value="<?php echo @$sub_cama_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="sub_cama_4" name="sub_cama_4" value="<?php echo @$sub_cama_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Giros D-I</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="girodi_1" name="girodi_1" value="<?php echo @$girodi_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="girodi_2" name="girodi_2" value="<?php echo @$girodi_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="girodi_3" name="girodi_3" value="<?php echo @$girodi_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="girodi_4" name="girodi_4" value="<?php echo @$girodi_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Giros I-D</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="giroid_1" name="giroid_1" value="<?php echo @$giroid_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="giroid_2" name="giroid_2" value="<?php echo @$giroid_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="giroid_3" name="giroid_3" value="<?php echo @$giroid_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="giroid_4" name="giroid_4" value="<?php echo @$giroid_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Bajar de la cama</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="bajar_ca_1" name="bajar_ca_1" value="<?php echo @$bajar_ca_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="bajar_ca_2" name="bajar_ca_2" value="<?php echo @$bajar_ca_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="bajar_ca_3" name="bajar_ca_3" value="<?php echo @$bajar_ca_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="bajar_ca_4" name="bajar_ca_4" value="<?php echo @$bajar_ca_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Subir a la cama</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="subir_ca_1" name="subir_ca_1" value="<?php echo @$subir_ca_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="subir_ca_2" name="subir_ca_2" value="<?php echo @$subir_ca_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="subir_ca_3" name="subir_ca_3" value="<?php echo @$subir_ca_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="subir_ca_4" name="subir_ca_4" value="<?php echo @$subir_ca_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Taparse y destaparse</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="taparse_1" name="taparse_1" value="<?php echo @$taparse_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="taparse_2" name="taparse_2" value="<?php echo @$taparse_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="taparse_3" name="taparse_3" value="<?php echo @$taparse_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="taparse_4" name="taparse_4" value="<?php echo @$taparse_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="834" colspan="5" valign="top"><p align="center"><strong>ACTIVIDADeS DE LA VIDA DIARIA INSTRUMENTALES</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p align="center"><strong>COMUNICACIÓN</strong></p></td>
                    <td width="47" valign="top"><p align="center"><strong>1</strong> </p></td>
                    <td width="47" valign="top"><p align="center"><strong>2</strong> </p></td>
                    <td width="35" valign="top"><p align="center"><strong>3</strong> </p></td>
                    <td width="262" valign="top"><p align="center"><strong>OBSERVACIONES</strong> </p></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Escribir </p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="escribir_1" name="escribir_1" value="<?php echo @$escribir_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="escribir_2" name="escribir_2" value="<?php echo @$escribir_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="escribir_3" name="escribir_3" value="<?php echo @$escribir_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="escribir_4" name="escribir_4" value="<?php echo @$escribir_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Uso del teléfono</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="telefono_1" name="telefono_1" value="<?php echo @$telefono_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="telefono_2" name="telefono_2" value="<?php echo @$telefono_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="telefono_3" name="telefono_3" value="<?php echo @$telefono_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="telefono_4" name="telefono_4" value="<?php echo @$telefono_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Dar vueltas a la pagina </p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="paginar_1" name="paginar_1" value="<?php echo @$paginar_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="paginar_2" name="paginar_2" value="<?php echo @$paginar_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="paginar_3" name="paginar_3" value="<?php echo @$paginar_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="paginar_4" name="paginar_4" value="<?php echo @$paginar_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Abrir cartas</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="abrir_c_1" name="abrir_c_1" value="<?php echo @$abrir_c_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="abrir_c_2" name="abrir_c_2" value="<?php echo @$abrir_c_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="abrir_c_3" name="abrir_c_3" value="<?php echo @$abrir_c_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="abrir_c_4" name="abrir_c_4" value="<?php echo @$abrir_c_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Hablar</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="hablar_1" name="hablar_1" value="<?php echo @$hablar_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="hablar_2" name="hablar_2" value="<?php echo @$hablar_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="hablar_3" name="hablar_3" value="<?php echo @$hablar_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="hablar_4" name="hablar_4" value="<?php echo @$hablar_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Manejo de interruptores</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="interrup_1" name="interrup_1" value="<?php echo @$interrup_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="interrup_2" name="interrup_2" value="<?php echo @$interrup_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="interrup_3" name="interrup_3" value="<?php echo @$interrup_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="interrup_4" name="interrup_4" value="<?php echo @$interrup_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Leer</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="leer_1" name="leer_1" value="<?php echo @$leer_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="leer_2" name="leer_2" value="<?php echo @$leer_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="leer_3" name="leer_3" value="<?php echo @$leer_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="leer_4" name="leer_4" value="<?php echo @$leer_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p align="center"><strong>TAREAS EN EL HOGAR</strong></p></td>
                    <td width="47" valign="top"><p align="center"><strong>1</strong> </p></td>
                    <td width="47" valign="top"><p align="center"><strong>2</strong> </p></td>
                    <td width="35" valign="top"><p align="center"><strong>3</strong> </p></td>
                    <td width="262" valign="top"><p align="center"><strong>OBSERVACIONES</strong> </p></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Lavar</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="h_lavar_1" name="h_lavar_1" value="<?php echo @$h_lavar_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="h_lavar_2" name="h_lavar_2" value="<?php echo @$h_lavar_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="h_lavar_3" name="h_lavar_3" value="<?php echo @$h_lavar_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="h_lavar_4" name="h_lavar_4" value="<?php echo @$h_lavar_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Planchar</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="h_planchar_1" name="h_planchar_1" value="<?php echo @$h_planchar_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="h_planchar_2" name="h_planchar_2" value="<?php echo @$h_planchar_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="h_planchar_3" name="h_planchar_3" value="<?php echo @$h_planchar_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="h_planchar_4" name="h_planchar_4" value="<?php echo @$h_planchar_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Cuidado de niños</p></td>
                    <td width="47" valign="top"><strong>
                            <input type="text" class="input_txt valid" id="h_cuidani_1" name="h_cuidani_1" value="<?php echo @$h_cuidani_1; ?>" />
                        </strong></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="h_cuidani_2" name="h_cuidani_2" value="<?php echo @$h_cuidani_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="h_cuidani_3" name="h_cuidani_3" value="<?php echo @$h_cuidani_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="h_cuidani_4" name="h_cuidani_4" value="<?php echo @$h_cuidani_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Limpieza diaria</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="h_limpieza_1" name="h_limpieza_1" value="<?php echo @$h_limpieza_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="h_limpieza_2" name="h_limpieza_2" value="<?php echo @$h_limpieza_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="h_limpieza_3" name="h_limpieza_3" value="<?php echo @$h_limpieza_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="h_limpieza_4" name="h_limpieza_4" value="<?php echo @$h_limpieza_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p align="center"><strong>INTEGRACION ALA COMUNIDAD</strong></p></td>
                    <td width="47" valign="top"><p align="center"><strong>1</strong> </p></td>
                    <td width="47" valign="top"><p align="center"><strong>2</strong> </p></td>
                    <td width="35" valign="top"><p align="center"><strong>3</strong> </p></td>
                    <td width="262" valign="top"><p align="center">&nbsp;</p></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Utilización de recursos</p></td>
                    <td width="47" valign="top">
                        <input type="text" class="input_txt valid" id="usa_recur_1" name="usa_recur_1" value="<?php echo @$usa_recur_1; ?>" />

                    </td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="usa_recur_2" name="usa_recur_2" value="<?php echo @$usa_recur_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="usa_recur_3" name="usa_recur_3" value="<?php echo @$usa_recur_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="usa_recur_4" name="usa_recur_4" value="<?php echo @$usa_recur_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Manejo de dinero</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="dinero_1" name="dinero_1" value="<?php echo @$dinero_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="dinero_2" name="dinero_2" value="<?php echo @$dinero_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="dinero_3" name="dinero_3" value="<?php echo @$dinero_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="dinero_4" name="dinero_4" value="<?php echo @$dinero_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Realización de compras</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="compra_1" name="compra_1" value="<?php echo @$compra_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="compra_2" name="compra_2" value="<?php echo @$compra_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="compra_3" name="compra_3" value="<?php echo @$compra_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="compra_4" name="compra_4" value="<?php echo @$compra_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Conducir un coche</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="carro_1" name="carro_1" value="<?php echo @$carro_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="carro_2" name="carro_2" value="<?php echo @$carro_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="carro_3" name="carro_3" value="<?php echo @$carro_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="carro_4" name="carro_4" value="<?php echo @$carro_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p align="center"><strong>DEAMBULACION</strong></p></td>
                    <td width="47" valign="top"><p align="center"><strong>1</strong> </p></td>
                    <td width="47" valign="top"><p align="center"><strong>2</strong> </p></td>
                    <td width="35" valign="top"><p align="center"><strong>3</strong> </p></td>
                    <td width="262" valign="top"><p align="center"><strong>OBSERVACIONES</strong> </p></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Caminar por la casa</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="cam_casa_1" name="cam_casa_1" value="<?php echo @$cam_casa_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="cam_casa_2" name="cam_casa_2" value="<?php echo @$cam_casa_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="cam_casa_3" name="cam_casa_3" value="<?php echo @$cam_casa_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="cam_casa_4" name="cam_casa_4" value="<?php echo @$cam_casa_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Caminar por la calle</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="cam_calle_1" name="cam_calle_1" value="<?php echo @$cam_calle_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="cam_calle_2" name="cam_calle_2" value="<?php echo @$cam_calle_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="cam_calle_3" name="cam_calle_3" value="<?php echo @$cam_calle_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="cam_calle_4" name="cam_calle_4" value="<?php echo @$cam_calle_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Subir escaleras</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="escalera_1" name="escalera_1" value="<?php echo @$escalera_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="escalera_2" name="escalera_2" value="<?php echo @$escalera_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="escalera_3" name="escalera_3" value="<?php echo @$escalera_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="escalera_4" name="escalera_4" value="<?php echo @$escalera_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Bajar escaleras</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="b_escale_1" name="b_escale_1" value="<?php echo @$b_escale_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="b_escale_2" name="b_escale_2" value="<?php echo @$b_escale_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="b_escale_3" name="b_escale_3" value="<?php echo @$b_escale_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="b_escale_4" name="b_escale_4" value="<?php echo @$b_escale_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Abrir, atravesar y cerrar la puerta</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="in_out_puerta_1" name="in_out_puerta_1" value="<?php echo @$in_out_puerta_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="in_out_puerta_2" name="in_out_puerta_2" value="<?php echo @$in_out_puerta_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="in_out_puerta_3" name="in_out_puerta_3" value="<?php echo @$in_out_puerta_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="in_out_puerta_4" name="in_out_puerta_4" value="<?php echo @$in_out_puerta_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Subir y bajar rampas</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="rampa_1" name="rampa_1" value="<?php echo @$rampa_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="rampa_2" name="rampa_2" value="<?php echo @$rampa_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="rampa_3" name="rampa_3" value="<?php echo @$rampa_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="rampa_4" name="rampa_4" value="<?php echo @$rampa_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p align="center"><strong>DESTREZAS DE ESPARCIMIENTO</strong></p></td>
                    <td width="47" valign="top"><p align="center"><strong>1</strong> </p></td>
                    <td width="47" valign="top"><p align="center"><strong>2</strong> </p></td>
                    <td width="35" valign="top"><p align="center"><strong>3</strong> </p></td>
                    <td width="262" valign="top"><p align="center"><strong>OBSERVACIONES</strong> </p></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Juego de tableros</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="juego_t_1" name="juego_t_1" value="<?php echo @$juego_t_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="juego_t_2" name="juego_t_2" value="<?php echo @$juego_t_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="juego_t_3" name="juego_t_3" value="<?php echo @$juego_t_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="juego_t_4" name="juego_t_4" value="<?php echo @$juego_t_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Actividades manuales</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="manual_1" name="manual_1" value="<?php echo @$manual_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="manual_2" name="manual_2" value="<?php echo @$manual_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="manual_3" name="manual_3" value="<?php echo @$manual_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="manual_4" name="manual_4" value="<?php echo @$manual_4; ?>" /></td>
                </tr>
                <tr>
                    <td width="442" valign="top"><p>Uso de radio y TV</p></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="radio_1" name="radio_1" value="<?php echo @$radio_1; ?>" /></td>
                    <td width="47" valign="top"><input type="text" class="input_txt valid" id="radio_2" name="radio_2" value="<?php echo @$radio_2; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="radio_3" name="radio_3" value="<?php echo @$radio_3; ?>" /></td>
                    <td width="262" valign="top"><input type="text" class="input_txt valid" id="radio_4" name="radio_4" value="<?php echo @$radio_4; ?>" /></td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <p>UTILIZACIÓN  DE DISPOSITIVOS ESPECIALES Y  ADAPTACIONES:  </p>
            <p>SI
                <input type="text" class="input_txt valid" id="adap_s" name="adap_s" value="<?php echo @$adap_s; ?>" />
                    NO
                <input type="text" class="input_txt valid" id="adap_n" name="adap_n" value="<?php echo @$adap_n; ?>" />
                   </p>
            <p><strong>CRITERIOS DE  VALORACIÓN: </strong>
                <br>
                1. Independiente.
                <!--<input type="text" class="input_txt valid" id="valoracion_d" name="valoracion_d" value="<?php echo @$valoracion_d; ?>" />
                --><br />
                2. Semidependiente
                <!--<input type="text" class="input_txt valid" id="valoracion_se" name="valoracion_se" value="<?php echo @$valoracion_se; ?>" />
                --><br />
                3. Dependiente.
                <!--<input type="text" class="input_txt valid" id="valoracion_depe" name="valoracion_depe" value="<?php echo @$valoracion_depe; ?>" />
            --></p>
            <p>OBSERVACIONES:
                <input type="text" class="input_txt valid" id="oser_5" name="oser_5" value="<?php echo @$oser_5; ?>" />
            </p>
            <p>INCLUSIÓN Y FUNCIONALIDAD:
                <input type="text" class="input_txt valid" id="inclusion" name="inclusion" value="<?php echo @$inclusion; ?>" />
            </p>
            <p ><strong>IMPRESIÓN DIAGNOSTICA</strong>:</p>
            <p >
                <input type="text" class="input_txt valid" id="impresion" name="impresion" value="<?php echo @$impresion; ?>" />
                <br />
            </p>
            <p><strong>CONDUCTA A SEGUIR:</strong>
                <input type="text" class="input_txt valid" id="conducta" name="conducta" value="<?php echo @$conducta; ?>" />
                <br />
            </p>
            <p>&nbsp;</p>


            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>