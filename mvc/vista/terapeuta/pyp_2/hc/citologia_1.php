<?php
if (isset($_REQUEST['guardar_hc_citologia']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_citologia'] == 'new') {

        $sql = "INSERT INTO hc_citologia (
`id_citologia`,
`id_usuario`,
`id_proceso`,
`id_historia`,
`id_vinicial`,
`id_revaloracion`,
`ac_sex_1`,
`ac_sex_2`,
`embarazo_s`,
`embarazo_n`,
`embarazo_ns`,
`fum_1`,
`g_1`,
`p_1`,
`a_1`,
`c_1`,
`ciclo_1`,
`c_previa_s`,
`c_previa_n`,
`c_fecha`,
`r_normal`,
`r_anormal`,
`r_nosabe`,
`planifica_s`,
`planifica_n`,
`m_inyec`,
`m_ligadura`,
`m_pildora`,
`m_preser`,
`m_diu`,
`m_natural`,
`proc_s`,
`proc_n`,
`proc_cauter`,
`proc_hister`,
`proc_coniza`,
`proc_radia`,
`proc_otro`,
`asp_ausente`,
`asp_sano`,
`asp_lesionv`,
`asp_atrof`,
`asp_sangran`,
`asp_quiste`,
`asp_polipo`,
`asp_conges`,
`asp_ulcerado`,
`asp_ectro`,
`asp_observa`,
`preg_1_a`,
`preg_1_b`,
`preg_1_c`,
`preg_1_d`,
`preg_2_a`,
`preg_2_b`,
`preg_3_a`,
`preg_3_b`,
`preg_3_c`,
`preg_3_d`,
`preg_3_e`,
`preg_3_f`,
`preg_4_a`,
`preg_4_b`,
`preg_4_c`,
`preg_4_d`,
`preg_4_e`,
`preg_4_f`,
`preg_5_a`,
`preg_5_b`,
`preg_5_c`,
`preg_5_d`,
`preg_5_e`,
`preg_5_f`,
`preg_6_a`,
`preg_6_b`,
`preg_6_c`,
`preg_6_d`,
`preg_6_e`,
`preg_6_f`,
`preg_6_g`,
`preg_6_h`,
`preg_6_i`,
`obser_2`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['id_historia'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['ac_sex_1'] . "' ,
'" . $_REQUEST['ac_sex_2'] . "' ,
'" . $_REQUEST['embarazo_s'] . "' ,
'" . $_REQUEST['embarazo_n'] . "' ,
'" . $_REQUEST['embarazo_ns'] . "' ,
'" . $_REQUEST['fum_1'] . "' ,
'" . $_REQUEST['g_1'] . "' ,
'" . $_REQUEST['p_1'] . "' ,
'" . $_REQUEST['a_1'] . "' ,
'" . $_REQUEST['c_1'] . "' ,
'" . $_REQUEST['ciclo_1'] . "' ,
'" . $_REQUEST['c_previa_s'] . "' ,
'" . $_REQUEST['c_previa_n'] . "' ,
'" . $_REQUEST['c_fecha'] . "' ,
'" . $_REQUEST['r_normal'] . "' ,
'" . $_REQUEST['r_anormal'] . "' ,
'" . $_REQUEST['r_nosabe'] . "' ,
'" . $_REQUEST['planifica_s'] . "' ,
'" . $_REQUEST['planifica_n'] . "' ,
'" . $_REQUEST['m_inyec'] . "' ,
'" . $_REQUEST['m_ligadura'] . "' ,
'" . $_REQUEST['m_pildora'] . "' ,
'" . $_REQUEST['m_preser'] . "' ,
'" . $_REQUEST['m_diu'] . "' ,
'" . $_REQUEST['m_natural'] . "' ,
'" . $_REQUEST['proc_s'] . "' ,
'" . $_REQUEST['proc_n'] . "' ,
'" . $_REQUEST['proc_cauter'] . "' ,
'" . $_REQUEST['proc_hister'] . "' ,
'" . $_REQUEST['proc_coniza'] . "' ,
'" . $_REQUEST['proc_radia'] . "' ,
'" . $_REQUEST['proc_otro'] . "' ,
'" . $_REQUEST['asp_ausente'] . "' ,
'" . $_REQUEST['asp_sano'] . "' ,
'" . $_REQUEST['asp_lesionv'] . "' ,
'" . $_REQUEST['asp_atrof'] . "' ,
'" . $_REQUEST['asp_sangran'] . "' ,
'" . $_REQUEST['asp_quiste'] . "' ,
'" . $_REQUEST['asp_polipo'] . "' ,
'" . $_REQUEST['asp_conges'] . "' ,
'" . $_REQUEST['asp_ulcerado'] . "' ,
'" . $_REQUEST['asp_ectro'] . "' ,
'" . $_REQUEST['asp_observa'] . "' ,
'" . $_REQUEST['preg_1_a'] . "' ,
'" . $_REQUEST['preg_1_b'] . "' ,
'" . $_REQUEST['preg_1_c'] . "' ,
'" . $_REQUEST['preg_1_d'] . "' ,
'" . $_REQUEST['preg_2_a'] . "' ,
'" . $_REQUEST['preg_2_b'] . "' ,
'" . $_REQUEST['preg_3_a'] . "' ,
'" . $_REQUEST['preg_3_b'] . "' ,
'" . $_REQUEST['preg_3_c'] . "' ,
'" . $_REQUEST['preg_3_d'] . "' ,
'" . $_REQUEST['preg_3_e'] . "' ,
'" . $_REQUEST['preg_3_f'] . "' ,
'" . $_REQUEST['preg_4_a'] . "' ,
'" . $_REQUEST['preg_4_b'] . "' ,
'" . $_REQUEST['preg_4_c'] . "' ,
'" . $_REQUEST['preg_4_d'] . "' ,
'" . $_REQUEST['preg_4_e'] . "' ,
'" . $_REQUEST['preg_4_f'] . "' ,
'" . $_REQUEST['preg_5_a'] . "' ,
'" . $_REQUEST['preg_5_b'] . "' ,
'" . $_REQUEST['preg_5_c'] . "' ,
'" . $_REQUEST['preg_5_d'] . "' ,
'" . $_REQUEST['preg_5_e'] . "' ,
'" . $_REQUEST['preg_5_f'] . "' ,
'" . $_REQUEST['preg_6_a'] . "' ,
'" . $_REQUEST['preg_6_b'] . "' ,
'" . $_REQUEST['preg_6_c'] . "' ,
'" . $_REQUEST['preg_6_d'] . "' ,
'" . $_REQUEST['preg_6_e'] . "' ,
'" . $_REQUEST['preg_6_f'] . "' ,
'" . $_REQUEST['preg_6_g'] . "' ,
'" . $_REQUEST['preg_6_h'] . "' ,
'" . $_REQUEST['preg_6_i'] . "' ,
'" . $_REQUEST['obser_2'] . "'
) ";
    } else if ($_REQUEST['id_citologia'] != '') {

        $sql = "UPDATE hc_citologia set
`id_usuario` = '" . $_REQUEST['id_usuario'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`id_historia` = '" . $_REQUEST['id_historia'] . "' ,
`id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ,
`id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ,
`ac_sex_1` = '" . $_REQUEST['ac_sex_1'] . "' ,
`ac_sex_2` = '" . $_REQUEST['ac_sex_2'] . "' ,
`embarazo_s` = '" . $_REQUEST['embarazo_s'] . "' ,
`embarazo_n` = '" . $_REQUEST['embarazo_n'] . "' ,
`embarazo_ns` = '" . $_REQUEST['embarazo_ns'] . "' ,
`fum_1` = '" . $_REQUEST['fum_1'] . "' ,
`g_1` = '" . $_REQUEST['g_1'] . "' ,
`p_1` = '" . $_REQUEST['p_1'] . "' ,
`a_1` = '" . $_REQUEST['a_1'] . "' ,
`c_1` = '" . $_REQUEST['c_1'] . "' ,
`ciclo_1` = '" . $_REQUEST['ciclo_1'] . "' ,
`c_previa_s` = '" . $_REQUEST['c_previa_s'] . "' ,
`c_previa_n` = '" . $_REQUEST['c_previa_n'] . "' ,
`c_fecha` = '" . $_REQUEST['c_fecha'] . "' ,
`r_normal` = '" . $_REQUEST['r_normal'] . "' ,
`r_anormal` = '" . $_REQUEST['r_anormal'] . "' ,
`r_nosabe` = '" . $_REQUEST['r_nosabe'] . "' ,
`planifica_s` = '" . $_REQUEST['planifica_s'] . "' ,
`planifica_n` = '" . $_REQUEST['planifica_n'] . "' ,
`m_inyec` = '" . $_REQUEST['m_inyec'] . "' ,
`m_ligadura` = '" . $_REQUEST['m_ligadura'] . "' ,
`m_pildora` = '" . $_REQUEST['m_pildora'] . "' ,
`m_preser` = '" . $_REQUEST['m_preser'] . "' ,
`m_diu` = '" . $_REQUEST['m_diu'] . "' ,
`m_natural` = '" . $_REQUEST['m_natural'] . "' ,
`proc_s` = '" . $_REQUEST['proc_s'] . "' ,
`proc_n` = '" . $_REQUEST['proc_n'] . "' ,
`proc_cauter` = '" . $_REQUEST['proc_cauter'] . "' ,
`proc_hister` = '" . $_REQUEST['proc_hister'] . "' ,
`proc_coniza` = '" . $_REQUEST['proc_coniza'] . "' ,
`proc_radia` = '" . $_REQUEST['proc_radia'] . "' ,
`proc_otro` = '" . $_REQUEST['proc_otro'] . "' ,
`asp_ausente` = '" . $_REQUEST['asp_ausente'] . "' ,
`asp_sano` = '" . $_REQUEST['asp_sano'] . "' ,
`asp_lesionv` = '" . $_REQUEST['asp_lesionv'] . "' ,
`asp_atrof` = '" . $_REQUEST['asp_atrof'] . "' ,
`asp_sangran` = '" . $_REQUEST['asp_sangran'] . "' ,
`asp_quiste` = '" . $_REQUEST['asp_quiste'] . "' ,
`asp_polipo` = '" . $_REQUEST['asp_polipo'] . "' ,
`asp_conges` = '" . $_REQUEST['asp_conges'] . "' ,
`asp_ulcerado` = '" . $_REQUEST['asp_ulcerado'] . "' ,
`asp_ectro` = '" . $_REQUEST['asp_ectro'] . "' ,
`asp_observa` = '" . $_REQUEST['asp_observa'] . "' ,
`preg_1_a` = '" . $_REQUEST['preg_1_a'] . "' ,
`preg_1_b` = '" . $_REQUEST['preg_1_b'] . "' ,
`preg_1_c` = '" . $_REQUEST['preg_1_c'] . "' ,
`preg_1_d` = '" . $_REQUEST['preg_1_d'] . "' ,
`preg_2_a` = '" . $_REQUEST['preg_2_a'] . "' ,
`preg_2_b` = '" . $_REQUEST['preg_2_b'] . "' ,
`preg_3_a` = '" . $_REQUEST['preg_3_a'] . "' ,
`preg_3_b` = '" . $_REQUEST['preg_3_b'] . "' ,
`preg_3_c` = '" . $_REQUEST['preg_3_c'] . "' ,
`preg_3_d` = '" . $_REQUEST['preg_3_d'] . "' ,
`preg_3_e` = '" . $_REQUEST['preg_3_e'] . "' ,
`preg_3_f` = '" . $_REQUEST['preg_3_f'] . "' ,
`preg_4_a` = '" . $_REQUEST['preg_4_a'] . "' ,
`preg_4_b` = '" . $_REQUEST['preg_4_b'] . "' ,
`preg_4_c` = '" . $_REQUEST['preg_4_c'] . "' ,
`preg_4_d` = '" . $_REQUEST['preg_4_d'] . "' ,
`preg_4_e` = '" . $_REQUEST['preg_4_e'] . "' ,
`preg_4_f` = '" . $_REQUEST['preg_4_f'] . "' ,
`preg_5_a` = '" . $_REQUEST['preg_5_a'] . "' ,
`preg_5_b` = '" . $_REQUEST['preg_5_b'] . "' ,
`preg_5_c` = '" . $_REQUEST['preg_5_c'] . "' ,
`preg_5_d` = '" . $_REQUEST['preg_5_d'] . "' ,
`preg_5_e` = '" . $_REQUEST['preg_5_e'] . "' ,
`preg_5_f` = '" . $_REQUEST['preg_5_f'] . "' ,
`preg_6_a` = '" . $_REQUEST['preg_6_a'] . "' ,
`preg_6_b` = '" . $_REQUEST['preg_6_b'] . "' ,
`preg_6_c` = '" . $_REQUEST['preg_6_c'] . "' ,
`preg_6_d` = '" . $_REQUEST['preg_6_d'] . "' ,
`preg_6_e` = '" . $_REQUEST['preg_6_e'] . "' ,
`preg_6_f` = '" . $_REQUEST['preg_6_f'] . "' ,
`preg_6_g` = '" . $_REQUEST['preg_6_g'] . "' ,
`preg_6_h` = '" . $_REQUEST['preg_6_h'] . "' ,
`preg_6_i` = '" . $_REQUEST['preg_6_i'] . "' ,
`obser_2` = '" . $_REQUEST['obser_2'] . "' WHERE `id_citologia` = '" . $_REQUEST['id_citologia'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_citologia = 'new';
$sql = "SELECT * from hc_citologia WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_citologia = $row['id_citologia'];
    $id_usuario = $row['id_usuario'];
    $id_proceso = $row['id_proceso'];
    $id_historia = $row['id_historia'];
    $id_vinicial = $row['id_vinicial'];
    $id_revaloracion = $row['id_revaloracion'];
    $ac_sex_1 = $row['ac_sex_1'];
    $ac_sex_2 = $row['ac_sex_2'];
    $embarazo_s = $row['embarazo_s'];
    $embarazo_n = $row['embarazo_n'];
    $embarazo_ns = $row['embarazo_ns'];
    $fum_1 = $row['fum_1'];
    $g_1 = $row['g_1'];
    $p_1 = $row['p_1'];
    $a_1 = $row['a_1'];
    $c_1 = $row['c_1'];
    $ciclo_1 = $row['ciclo_1'];
    $c_previa_s = $row['c_previa_s'];
    $c_previa_n = $row['c_previa_n'];
    $c_fecha = $row['c_fecha'];
    $r_normal = $row['r_normal'];
    $r_anormal = $row['r_anormal'];
    $r_nosabe = $row['r_nosabe'];
    $planifica_s = $row['planifica_s'];
    $planifica_n = $row['planifica_n'];
    $m_inyec = $row['m_inyec'];
    $m_ligadura = $row['m_ligadura'];
    $m_pildora = $row['m_pildora'];
    $m_preser = $row['m_preser'];
    $m_diu = $row['m_diu'];
    $m_natural = $row['m_natural'];
    $proc_s = $row['proc_s'];
    $proc_n = $row['proc_n'];
    $proc_cauter = $row['proc_cauter'];
    $proc_hister = $row['proc_hister'];
    $proc_coniza = $row['proc_coniza'];
    $proc_radia = $row['proc_radia'];
    $proc_otro = $row['proc_otro'];
    $asp_ausente = $row['asp_ausente'];
    $asp_sano = $row['asp_sano'];
    $asp_lesionv = $row['asp_lesionv'];
    $asp_atrof = $row['asp_atrof'];
    $asp_sangran = $row['asp_sangran'];
    $asp_quiste = $row['asp_quiste'];
    $asp_polipo = $row['asp_polipo'];
    $asp_conges = $row['asp_conges'];
    $asp_ulcerado = $row['asp_ulcerado'];
    $asp_ectro = $row['asp_ectro'];
    $asp_observa = $row['asp_observa'];
    $preg_1_a = $row['preg_1_a'];
    $preg_1_b = $row['preg_1_b'];
    $preg_1_c = $row['preg_1_c'];
    $preg_1_d = $row['preg_1_d'];
    $preg_2_a = $row['preg_2_a'];
    $preg_2_b = $row['preg_2_b'];
    $preg_3_a = $row['preg_3_a'];
    $preg_3_b = $row['preg_3_b'];
    $preg_3_c = $row['preg_3_c'];
    $preg_3_d = $row['preg_3_d'];
    $preg_3_e = $row['preg_3_e'];
    $preg_3_f = $row['preg_3_f'];
    $preg_4_a = $row['preg_4_a'];
    $preg_4_b = $row['preg_4_b'];
    $preg_4_c = $row['preg_4_c'];
    $preg_4_d = $row['preg_4_d'];
    $preg_4_e = $row['preg_4_e'];
    $preg_4_f = $row['preg_4_f'];
    $preg_5_a = $row['preg_5_a'];
    $preg_5_b = $row['preg_5_b'];
    $preg_5_c = $row['preg_5_c'];
    $preg_5_d = $row['preg_5_d'];
    $preg_5_e = $row['preg_5_e'];
    $preg_5_f = $row['preg_5_f'];
    $preg_6_a = $row['preg_6_a'];
    $preg_6_b = $row['preg_6_b'];
    $preg_6_c = $row['preg_6_c'];
    $preg_6_d = $row['preg_6_d'];
    $preg_6_e = $row['preg_6_e'];
    $preg_6_f = $row['preg_6_f'];
    $preg_6_g = $row['preg_6_g'];
    $preg_6_h = $row['preg_6_h'];
    $preg_6_i = $row['preg_6_i'];
    $obser_2 = $row['obser_2'];
    break;
}
?>
<script>

    $(function() {

        $("#close-hc_citologia").click(function() {
            $("#open-hc_citologia").show();
            $(this).hide();
            $("#content-hc_citologia").hide('slow');
        });

        $("#open-hc_citologia").click(function() {
            $("#close-hc_citologia").show();
            $(this).hide();
            $("#content-hc_citologia").show('slow');
        });

    });

</script>
<fieldset id="hc_citologia">
    <legend align="left"> <div class="arrow-c" id="close-hc_citologia"></div> <div class="arrow-o" id="open-hc_citologia" ></div> <font>Valoracion terapia ocupacional - hc_citologia</font></legend>
    <div id="content-hc_citologia">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_hc_citologia" id="guardar_hc_citologia" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
        <form id="form_hc_citologia" name="form_hc_citologia" action="<?php echo @$action_form_hc_citologia ?>#hc_citologia" method="post">

            <input type="hidden" id="id_hc_citologia" name="id_hc_citologia" value="<?php echo @$id_hc_citologia ?>" />

            <input type="hidden" class="input_txt valid" id="id_citologia" name="id_citologia" value="<?php echo @$id_citologia; ?>" />

            <table border="1" cellpadding="0" cellspacing="0">
                <col width="185" />
                <col width="105" />
                <col width="132" />
                <col width="119" />
                <col width="111" />
                <tr height="38">
                    <td colspan="5" height="38" width="652">ANTECEDENTES</td>
                </tr>
                <tr height="19">
                    <td rowspan="2" height="38" width="652">Actividad Sexual:</td>
                    <td colspan="2" width="467">SI</td>
                    <td colspan="2" width="230">NO</td>
                </tr>
                <tr height="19">
                    <td colspan="2" height="19" width="467"><input type="text" class="input_txt valid" id="ac_sex_1" name="ac_sex_1" value="<?php echo @$ac_sex_1; ?>" /></td>
                    <td colspan="2" width="230"><input type="text" class="input_txt valid" id="ac_sex_2" name="ac_sex_2" value="<?php echo @$ac_sex_2; ?>" /></td>
                </tr>
                <tr height="19">
                    <td rowspan="2" height="38" width="652">EMBARAZADA    ACTUALMENTE</td>
                    <td width="467">SI</td>
                    <td width="362">NO</td>
                    <td width="230">NO SABE</td>
                    <td width="111">FUM</td>
                </tr>
                <tr height="19">
                    <td height="19" width="467"><input type="text" class="input_txt valid" id="embarazo_s" name="embarazo_s" value="<?php echo @$embarazo_s; ?>" /></td>
                    <td width="362"><input type="text" class="input_txt valid" id="embarazo_n" name="embarazo_n" value="<?php echo @$embarazo_n; ?>" /></td>
                    <td width="230"><input type="text" class="input_txt valid" id="embarazo_ns" name="embarazo_ns" value="<?php echo @$embarazo_ns; ?>" /></td>
                    <td width="111"><input type="text" class="input_txt valid" id="fum_1" name="fum_1" value="<?php echo @$fum_1; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="652">G:</td>
                    <td width="467">P:</td>
                    <td width="362">A:</td>
                    <td width="230">C:</td>
                    <td width="111">CICLO</td>
                </tr>
                <tr height="19">
                    <td height="19" width="652"><input type="text" class="input_txt valid" id="g_1" name="g_1" value="<?php echo @$g_1; ?>" /></td>
                    <td width="467"><input type="text" class="input_txt valid" id="p_1" name="p_1" value="<?php echo @$p_1; ?>" /></td>
                    <td width="362"><input type="text" class="input_txt valid" id="a_1" name="a_1" value="<?php echo @$a_1; ?>" /></td>
                    <td width="230"><input type="text" class="input_txt valid" id="c_1" name="c_1" value="<?php echo @$c_1; ?>" /></td>
                    <td width="111"><input type="text" class="input_txt valid" id="ciclo_1" name="ciclo_1" value="<?php echo @$ciclo_1; ?>" /></td>
                </tr>
                <tr height="19">
                    <td rowspan="5" height="95" width="652">Citologia Previa</td>
                    <td colspan="2" width="467">SI</td>
                    <td colspan="2" width="230">NO</td>
                </tr>
                <tr height="19">
                    <td colspan="2" height="19" width="467"><input type="text" class="input_txt valid" id="c_previa_s" name="c_previa_s" value="<?php echo @$c_previa_s; ?>" /></td>
                    <td colspan="2" width="230"><input type="text" class="input_txt valid" id="c_previa_n" name="c_previa_n" value="<?php echo @$c_previa_n; ?>" /></td>
                </tr>
                <tr height="19">
                    <td colspan="4" height="19" width="467">Resultado</td>
                </tr>
                <tr height="19">
                    <td height="19" width="467">FECHA</td>
                    <td width="362">NORMAL</td>
                    <td width="230">ANORMAL</td>
                    <td width="111">NO    SABE</td>
                </tr>
                <tr height="19">
                    <td height="19" width="467"><input type="text" class="input_txt valid" id="c_fecha" name="c_fecha" value="<?php echo @$c_fecha; ?>" /></td>
                    <td width="362"><input type="text" class="input_txt valid" id="r_normal" name="r_normal" value="<?php echo @$r_normal; ?>" /></td>
                    <td width="230"><input type="text" class="input_txt valid" id="r_anormal" name="r_anormal" value="<?php echo @$r_anormal; ?>" /></td>
                    <td width="111"><input type="text" class="input_txt valid" id="r_nosabe" name="r_nosabe" value="<?php echo @$r_nosabe; ?>" /></td>
                </tr>
                <tr height="19">
                    <td rowspan="2" height="38" width="652">PLANIFICA</td>
                    <td colspan="2" width="467">SI</td>
                    <td colspan="2" width="230">NO</td>
                </tr>
                <tr height="19">
                    <td colspan="2" height="19" width="467"><input type="text" class="input_txt valid" id="planifica_s" name="planifica_s" value="<?php echo @$planifica_s; ?>" /></td>
                    <td colspan="2" width="230"><input type="text" class="input_txt valid" id="planifica_n" name="planifica_n" value="<?php echo @$planifica_n; ?>" /></td>
                </tr>
                <tr height="19">
                    <td colspan="5" height="19" width="652">MÉTODO</td>
                </tr>
                <tr height="19">
                    <td height="19" width="652">INYECTABLE</td>
                    <td width="467">LIGADURA</td>
                    <td width="362">PILDORA</td>
                    <td width="230">PRESERVATIVO</td>
                    <td width="111">DIU</td>
                </tr>
                <tr height="19">
                    <td height="19" width="652"><input type="text" class="input_txt valid" id="m_inyec" name="m_inyec" value="<?php echo @$m_inyec; ?>" /></td>
                    <td width="467"><input type="text" class="input_txt valid" id="m_ligadura" name="m_ligadura" value="<?php echo @$m_ligadura; ?>" /></td>
                    <td width="362"><input type="text" class="input_txt valid" id="m_pildora" name="m_pildora" value="<?php echo @$m_pildora; ?>" /></td>
                    <td width="230"><input type="text" class="input_txt valid" id="m_preser" name="m_preser" value="<?php echo @$m_preser; ?>" /></td>
                    <td width="111"><input type="text" class="input_txt valid" id="m_diu" name="m_diu" value="<?php echo @$m_diu; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="652">NATURAL</td>
                    <td colspan="4" width="467"><input type="text" class="input_txt valid" id="m_natural" name="m_natural" value="<?php echo @$m_natural; ?>" /></td>
                </tr>
                <tr height="19">
                    <td rowspan="5" height="95" width="652">PROCEDIMIENTOS ANTERIORES EN EL CUELLO UTERINO</td>
                    <td colspan="2" width="467">SI</td>
                    <td colspan="2" width="230">NO</td>
                </tr>
                <tr height="19">
                    <td colspan="2" height="19" width="467"><input type="text" class="input_txt valid" id="proc_s" name="proc_s" value="<?php echo @$proc_s; ?>" /></td>
                    <td colspan="2" width="230"><input type="text" class="input_txt valid" id="proc_n" name="proc_n" value="<?php echo @$proc_n; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="467">CAUTERIZACIÓN</td>
                    <td width="362">HISTERECTOMÍA</td>
                    <td width="230">CONIZACIÓN</td>
                    <td width="111">RADIACION</td>
                </tr>
                <tr height="19">
                    <td height="19" width="467"><input type="text" class="input_txt valid" id="proc_cauter" name="proc_cauter" value="<?php echo @$proc_cauter; ?>" /></td>
                    <td width="362"><input type="text" class="input_txt valid" id="proc_hister" name="proc_hister" value="<?php echo @$proc_hister; ?>" /></td>
                    <td width="230"><input type="text" class="input_txt valid" id="proc_coniza" name="proc_coniza" value="<?php echo @$proc_coniza; ?>" /></td>
                    <td width="111"><input type="text" class="input_txt valid" id="proc_radia" name="proc_radia" value="<?php echo @$proc_radia; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="467">OTRO</td>
                    <td colspan="3" width="362"><input type="text" class="input_txt valid" id="proc_otro" name="proc_otro" value="<?php echo @$proc_otro; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="652"></td>
                    <td width="467"></td>
                    <td width="362"></td>
                    <td width="230"></td>
                    <td width="111"></td>
                </tr>
                <tr height="19">
                    <td rowspan="6" height="114" width="652">ASPECTO DEL CUELLO</td>
                    <td width="467">AUSENTE</td>
                    <td width="362">SANO</td>
                    <td width="230">LESIÓN VISIBLE</td>
                    <td width="111">ATRÓFICO</td>
                </tr>
                <tr height="19">
                    <td height="19" width="467"><input type="text" class="input_txt valid" id="asp_ausente" name="asp_ausente" value="<?php echo @$asp_ausente; ?>" /></td>
                    <td width="362"><input type="text" class="input_txt valid" id="asp_sano" name="asp_sano" value="<?php echo @$asp_sano; ?>" /></td>
                    <td width="230"><input type="text" class="input_txt valid" id="asp_lesionv" name="asp_lesionv" value="<?php echo @$asp_lesionv; ?>" /></td>
                    <td width="111"><input type="text" class="input_txt valid" id="asp_atrof" name="asp_atrof" value="<?php echo @$asp_atrof; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="467">SANGRANTE</td>
                    <td width="362">QUISTE    DE NABOTH</td>
                    <td width="230">PÓLIPO</td>
                    <td width="111">CONGESTIVO</td>
                </tr>
                <tr height="19">
                    <td height="19" width="467"><input type="text" class="input_txt valid" id="asp_sangran" name="asp_sangran" value="<?php echo @$asp_sangran; ?>" /></td>
                    <td width="362"><input type="text" class="input_txt valid" id="asp_quiste" name="asp_quiste" value="<?php echo @$asp_quiste; ?>" /></td>
                    <td width="230"><input type="text" class="input_txt valid" id="asp_polipo" name="asp_polipo" value="<?php echo @$asp_polipo; ?>" /></td>
                    <td width="111"><input type="text" class="input_txt valid" id="asp_conges" name="asp_conges" value="<?php echo @$asp_conges; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="467">ULCERADO</td>
                    <td width="362">ECTROPIÓN</td>
                    <td colspan="2" width="230">OBSERVACIONES</td>
                </tr>
                <tr height="19">
                    <td height="19" width="467"><input type="text" class="input_txt valid" id="asp_ulcerado" name="asp_ulcerado" value="<?php echo @$asp_ulcerado; ?>" /></td>
                    <td width="362"><input type="text" class="input_txt valid" id="asp_ectro" name="asp_ectro" value="<?php echo @$asp_ectro; ?>" /></td>
                    <td colspan="2" width="230"><input type="text" class="input_txt valid" id="asp_observa" name="asp_observa" value="<?php echo @$asp_observa; ?>" /></td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <table width="608" border="1" cellpadding="0" cellspacing="0">
                <col width="185" />
                <col width="105" />
                <tr height="19">
                    <td colspan="2" height="19">1). CALIDAD DE LA MUESTRA</td>
                </tr>
                <tr height="58">
                    <td height="22" width="462">a. Satisfactoria con endocervicales/zona de transformación</td>
                    <td width="40"><input type="text" class="input_txt valid" id="preg_1_a" name="preg_1_a" value="<?php echo @$preg_1_a; ?>" /></td>
                </tr>
                <tr height="58">
                    <td height="22" width="462"> b. Satisfactoria sin    endocervicales/zona de transformación</td>
                    <td width="40"><input type="text" class="input_txt valid" id="preg_1_b" name="preg_1_b" value="<?php echo @$preg_1_b; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="462">c. Insatisfactoria</td>
                    <td width="40"><input type="text" class="input_txt valid" id="preg_1_c" name="preg_1_c" value="<?php echo @$preg_1_c; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="462">d. Rechazada</td>
                    <td width="40"><input type="text" class="input_txt valid" id="preg_1_d" name="preg_1_d" value="<?php echo @$preg_1_d; ?>" /></td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <table border="1" cellpadding="0" cellspacing="0">
                <col width="328" />
                <col width="50" />
                <tr height="19">
                    <td colspan="2" height="19">2). CATEGORIZACIÓN GENERAL</td>
                </tr>
                <tr height="19">
                    <td height="19" width="474">a. Negativa para lesión Intraepitelial o Malignidad</td>
                    <td width="74"><input type="text" class="input_txt valid" id="preg_2_a" name="preg_2_a" value="<?php echo @$preg_2_a; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="474">b. Anormalidades en Células Epiteliales</td>
                    <td width="74"><input type="text" class="input_txt valid" id="preg_2_b" name="preg_2_b" value="<?php echo @$preg_2_b; ?>" /></td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <table width="623" border="1" cellpadding="0" cellspacing="0">
                <col width="328" />
                <col width="50" />
                <tr height="19">
                    <td colspan="2" height="19">3).  MICROORGANISMOS</td>
                </tr>
                <tr height="19">
                    <td height="19" width="555">a. Tricomonas vaginalis</td>
                    <td width="62"><input type="text" class="input_txt valid" id="preg_3_a" name="preg_3_a" value="<?php echo @$preg_3_a; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="555">b. Hongos consistentes con Cándida sp.</td>
                    <td width="62"><input type="text" class="input_txt valid" id="preg_3_b" name="preg_3_b" value="<?php echo @$preg_3_b; ?>" /></td>
                </tr>
                <tr height="38">
                    <td height="24" width="555">c. Cambio de la flora vaginal normal, sugestivo de vaginosis bacteriana</td>
                    <td width="62"><input type="text" class="input_txt valid" id="preg_3_c" name="preg_3_c" value="<?php echo @$preg_3_c; ?>" /></td>
                </tr>

                <tr height="19">
                    <td height="19" width="555">d. Consistente con Actinom ices sp.</td>
                    <td width="62"><input type="text" class="input_txt valid" id="preg_3_d" name="preg_3_d" value="<?php echo @$preg_3_d; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="555">e. Efectos Citopáticos por virus del Herpes simple</td>
                    <td width="62"><input type="text" class="input_txt valid" id="preg_3_e" name="preg_3_e" value="<?php echo @$preg_3_e; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="555">f. Lactobasilo</td>
                    <td width="62"><input type="text" class="input_txt valid" id="preg_3_f" name="preg_3_f" value="<?php echo @$preg_3_f; ?>" /></td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <table width="639" border="1" cellpadding="0" cellspacing="0">
                <col width="328" />
                <col width="50" />
                <tr height="19">
                    <td colspan="2" height="19">4).    OTROS HALLAZGOS NO NEOPLÁSICOS</td>
                </tr>
                <tr height="16">
                    <td height="16" width="563">a. Cambios celulares reactivos asociados a Inflamación</td>
                    <td width="70"><input type="text" class="input_txt valid" id="preg_4_a" name="preg_4_a" value="<?php echo @$preg_4_a; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="563">b. Cambios cel

                        ulares reactivos asociado a Radiación</td>
                    <td width="70"><input type="text" class="input_txt valid" id="preg_4_b" name="preg_4_b" value="<?php echo @$preg_4_b; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="563">c. Cambios celulares a DIU</td>
                    <td width="70"><input type="text" class="input_txt valid" id="preg_4_c" name="preg_4_c" value="<?php echo @$preg_4_c; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="563">d. Células glandulares post-histerectomía</td>
                    <td width="70"><input type="text" class="input_txt valid" id="preg_4_d" name="preg_4_d" value="<?php echo @$preg_4_d; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="563">e. Atrofia</td>
                    <td width="70"><input type="text" class="input_txt valid" id="preg_4_e" name="preg_4_e" value="<?php echo @$preg_4_e; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="563">f. Células endometriales (en mayores de los 40 años</td>
                    <td width="70"><input type="text" class="input_txt valid" id="preg_4_f" name="preg_4_f" value="<?php echo @$preg_4_f; ?>" /></td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <table border="1" cellpadding="0" cellspacing="0">
                <col width="328" />
                <col width="50" />
                <tr height="38">
                    <td colspan="2" height="38">5).    ANORMALIDADES EN CÉLULAS ESCAMOSAS</td>
                </tr>
                <tr height="38">
                    <td height="38" width="690">a. Atiplas en células escamosas de significado Indeterminado    (ASC-US).</td>
                    <td width="66"><input type="text" class="input_txt valid" id="preg_5_a" name="preg_5_a" value="<?php echo @$preg_5_a; ?>" /></td>
                </tr>
                <tr height="38">
                    <td height="38" width="690">b. Atiplas en células escamosas de significado indeterminado    sugestivo de LIE de alto grado (ASC-H).</td>
                    <td width="66"><input type="text" class="input_txt valid" id="preg_5_b" name="preg_5_b" value="<?php echo @$preg_5_b; ?>" /></td>
                </tr>
                <tr height="58">
                    <td height="58" width="690">c. Lesión Intraepitelial escamosa de bajo grado LEIBG (Cambios    asociados a infección por VPH o displasia leve (NIC I).</td>
                    <td width="66"><input type="text" class="input_txt valid" id="preg_5_c" name="preg_5_c" value="<?php echo @$preg_5_c; ?>" /></td>
                </tr>
                <tr height="38">
                    <td height="38" width="690">d. Lesión Escamosa ¡ntraepitelial de alto grado LEIAG (NIC II,    NIC III, Ca In Situ).</td>
                    <td width="66"><input type="text" class="input_txt valid" id="preg_5_d" name="preg_5_d" value="<?php echo @$preg_5_d; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="690">e. Lesión intraepitelial escamosa alto grado sospechosa de    Invasión.</td>
                    <td width="66"><input type="text" class="input_txt valid" id="preg_5_e" name="preg_5_e" value="<?php echo @$preg_5_e; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="690">f. Carcinoma Escamocelular Invasivo.</td>
                    <td width="66"><input type="text" class="input_txt valid" id="preg_5_f" name="preg_5_f" value="<?php echo @$preg_5_f; ?>" /></td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <table border="1" cellpadding="0" cellspacing="0">
                <col width="328" />
                <col width="50" />
                <tr height="19">
                    <td colspan="2" height="19">6).    ANORMALIDADES EN CÉLULAS GLANDULARES</td>
                </tr>
                <tr height="38">
                    <td height="38" width="681">a. Células endocervicales atípicas sin ningún otro significado.</td>
                    <td width="59"><input type="text" class="input_txt valid" id="preg_6_a" name="preg_6_a" value="<?php echo @$preg_6_a; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="681">b. Células endometriales atípicas sin ningún sin otro    significado.</td>
                    <td width="59"><input type="text" class="input_txt valid" id="preg_6_b" name="preg_6_b" value="<?php echo @$preg_6_b; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="681">c. Células endocervicales atípicas sospecha de malignidad.</td>
                    <td width="59"><input type="text" class="input_txt valid" id="preg_6_c" name="preg_6_c" value="<?php echo @$preg_6_c; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="681">d. Células endometriales atípicas sospechosas de malignidad</td>
                    <td width="59"><input type="text" class="input_txt valid" id="preg_6_d" name="preg_6_d" value="<?php echo @$preg_6_d; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="681">e. Células glandulares atípicas sospecha de malignidad</td>
                    <td width="59"><input type="text" class="input_txt valid" id="preg_6_e" name="preg_6_e" value="<?php echo @$preg_6_e; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="681">f. Adenocarcinoma endocervical in situ</td>
                    <td width="59"><input type="text" class="input_txt valid" id="preg_6_f" name="preg_6_f" value="<?php echo @$preg_6_f; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="681">g. Adenocarcinoma endocervicales</td>
                    <td width="59"><input type="text" class="input_txt valid" id="preg_6_g" name="preg_6_g" value="<?php echo @$preg_6_g; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="681">h. Adenocarcinoma endometrial</td>
                    <td width="59"><input type="text" class="input_txt valid" id="preg_6_h" name="preg_6_h" value="<?php echo @$preg_6_h; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="681">i. Otras neoplasias</td>
                    <td width="59"><input type="text" class="input_txt valid" id="preg_6_i" name="preg_6_i" value="<?php echo @$preg_6_i; ?>" /></td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <table border="1" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="19" width="328">Observaciones:</td>
                    <td width="50"><input type="text" class="input_txt valid" id="obser_2" name="obser_2" value="<?php echo @$obser_2; ?>" /></td>
                </tr>
            </table>
<?php echo @$button ?>
        </form><br>
    </div>
</fieldset>