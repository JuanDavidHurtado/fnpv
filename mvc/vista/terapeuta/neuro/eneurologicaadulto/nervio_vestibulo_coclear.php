<?php
if (isset($_REQUEST['guardar_vestibulo_n_coclear']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_vestibulo_n_coclear'] == 'new') {

        $sql = "INSERT INTO vestibulo_n_coclear (
`id_vestibulo_n_coclear`,
`id_usuario`,
`historia`,
`id_proceso`,
`hipo_od`,
`hipo_id`,
`hipe_od`,
`hipe_id`,
`acu_od`,
`acu_id`,
`tini_od`,
`tini_id`,
`romb_posi`,
`romb_neg`,
`roms_pos`,
`roms_neg`,
`pos_firme_osc`,
`pos_firme_nosc`,
`labe_observ`,
`talonr_d`,
`talonr_i`,
`tgluteo_d`,
`tgluteo_i`,
`pie_mano_d`,
`pie_mano_i`,
`tibia_d`,
`tibia_i`,
`dinamica_obser`,
`ind_narizd`,
`ind_narizi`,
`ind_orejad`,
`ind_orejai`,
`ind_indiced`,
`ind_indicei`,
`ind_exad`,
`ind_exai`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`vesti_observacion`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['hipo_od'] . "' ,
'" . $_REQUEST['hipo_id'] . "' ,
'" . $_REQUEST['hipe_od'] . "' ,
'" . $_REQUEST['hipe_id'] . "' ,
'" . $_REQUEST['acu_od'] . "' ,
'" . $_REQUEST['acu_id'] . "' ,
'" . $_REQUEST['tini_od'] . "' ,
'" . $_REQUEST['tini_id'] . "' ,
'" . $_REQUEST['romb_posi'] . "' ,
'" . $_REQUEST['romb_neg'] . "' ,
'" . $_REQUEST['roms_pos'] . "' ,
'" . $_REQUEST['roms_neg'] . "' ,
'" . $_REQUEST['pos_firme_osc'] . "' ,
'" . $_REQUEST['pos_firme_nosc'] . "' ,
'" . $_REQUEST['labe_observ'] . "' ,
'" . $_REQUEST['talonr_d'] . "' ,
'" . $_REQUEST['talonr_i'] . "' ,
'" . $_REQUEST['tgluteo_d'] . "' ,
'" . $_REQUEST['tgluteo_i'] . "' ,
'" . $_REQUEST['pie_mano_d'] . "' ,
'" . $_REQUEST['pie_mano_i'] . "' ,
'" . $_REQUEST['tibia_d'] . "' ,
'" . $_REQUEST['tibia_i'] . "' ,
'" . $_REQUEST['dinamica_obser'] . "' ,
'" . $_REQUEST['ind_narizd'] . "' ,
'" . $_REQUEST['ind_narizi'] . "' ,
'" . $_REQUEST['ind_orejad'] . "' ,
'" . $_REQUEST['ind_orejai'] . "' ,
'" . $_REQUEST['ind_indiced'] . "' ,
'" . $_REQUEST['ind_indicei'] . "' ,
'" . $_REQUEST['ind_exad'] . "' ,
'" . $_REQUEST['ind_exai'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['vesti_observacion'] . "'
) ";
    } else if ($_REQUEST['id_vestibulo_n_coclear'] != '') {

        $sql = "UPDATE vestibulo_n_coclear set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`id_historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`hipo_od` = '" . $_REQUEST['hipo_od'] . "' ,
`hipo_id` = '" . $_REQUEST['hipo_id'] . "' ,
`hipe_od` = '" . $_REQUEST['hipe_od'] . "' ,
`hipe_id` = '" . $_REQUEST['hipe_id'] . "' ,
`acu_od` = '" . $_REQUEST['acu_od'] . "' ,
`acu_id` = '" . $_REQUEST['acu_id'] . "' ,
`tini_od` = '" . $_REQUEST['tini_od'] . "' ,
`tini_id` = '" . $_REQUEST['tini_id'] . "' ,
`romb_posi` = '" . $_REQUEST['romb_posi'] . "' ,
`romb_neg` = '" . $_REQUEST['romb_neg'] . "' ,
`roms_pos` = '" . $_REQUEST['roms_pos'] . "' ,
`roms_neg` = '" . $_REQUEST['roms_neg'] . "' ,
`pos_firme_osc` = '" . $_REQUEST['pos_firme_osc'] . "' ,
`pos_firme_nosc` = '" . $_REQUEST['pos_firme_nosc'] . "' ,
`labe_observ` = '" . $_REQUEST['labe_observ'] . "' ,
`talonr_d` = '" . $_REQUEST['talonr_d'] . "' ,
`talonr_i` = '" . $_REQUEST['talonr_i'] . "' ,
`tgluteo_d` = '" . $_REQUEST['tgluteo_d'] . "' ,
`tgluteo_i` = '" . $_REQUEST['tgluteo_i'] . "' ,
`pie_mano_d` = '" . $_REQUEST['pie_mano_d'] . "' ,
`pie_mano_i` = '" . $_REQUEST['pie_mano_i'] . "' ,
`tibia_d` = '" . $_REQUEST['tibia_d'] . "' ,
`tibia_i` = '" . $_REQUEST['tibia_i'] . "' ,
`dinamica_obser` = '" . $_REQUEST['dinamica_obser'] . "' ,
`ind_narizd` = '" . $_REQUEST['ind_narizd'] . "' ,
`ind_narizi` = '" . $_REQUEST['ind_narizi'] . "' ,
`ind_orejad` = '" . $_REQUEST['ind_orejad'] . "' ,
`ind_orejai` = '" . $_REQUEST['ind_orejai'] . "' ,
`ind_indiced` = '" . $_REQUEST['ind_indiced'] . "' ,
`ind_indicei` = '" . $_REQUEST['ind_indicei'] . "' ,
`ind_exad` = '" . $_REQUEST['ind_exad'] . "' ,
`ind_exai` = '" . $_REQUEST['ind_exai'] . "' ,
`vesti_observacion` = '" . $_REQUEST['vesti_observacion'] . "' WHERE `id_vestibulo_n_coclear` = '" . $_REQUEST['id_vestibulo_n_coclear'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_vestibulo_n_coclear = 'new';
$sql = "SELECT * from vestibulo_n_coclear WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_vestibulo_n_coclear = $row['id_vestibulo_n_coclear'];
  
    $hipo_od = $row['hipo_od'];
    $hipo_id = $row['hipo_id'];
    $hipe_od = $row['hipe_od'];
    $hipe_id = $row['hipe_id'];
    $acu_od = $row['acu_od'];
    $acu_id = $row['acu_id'];
    $tini_od = $row['tini_od'];
    $tini_id = $row['tini_id'];
    $romb_posi = $row['romb_posi'];
    $romb_neg = $row['romb_neg'];
    $roms_pos = $row['roms_pos'];
    $roms_neg = $row['roms_neg'];
    $pos_firme_osc = $row['pos_firme_osc'];
    $pos_firme_nosc = $row['pos_firme_nosc'];
    $labe_observ = $row['labe_observ'];
    $talonr_d = $row['talonr_d'];
    $talonr_i = $row['talonr_i'];
    $tgluteo_d = $row['tgluteo_d'];
    $tgluteo_i = $row['tgluteo_i'];
    $pie_mano_d = $row['pie_mano_d'];
    $pie_mano_i = $row['pie_mano_i'];
    $tibia_d = $row['tibia_d'];
    $tibia_i = $row['tibia_i'];
    $dinamica_obser = $row['dinamica_obser'];
    $ind_narizd = $row['ind_narizd'];
    $ind_narizi = $row['ind_narizi'];
    $ind_orejad = $row['ind_orejad'];
    $ind_orejai = $row['ind_orejai'];
    $ind_indiced = $row['ind_indiced'];
    $ind_indicei = $row['ind_indicei'];
    $ind_exad = $row['ind_exad'];
    $ind_exai = $row['ind_exai'];
    $vesti_observacion = $row['vesti_observacion'];
    break;
}
?>
<script>

    $(function() {

        $("#close-vestibulo_n_coclear").click(function() {
            $("#open-vestibulo_n_coclear").show();
            $(this).hide();
            $("#content-vestibulo_n_coclear").hide('slow');
        });

        $("#open-vestibulo_n_coclear").click(function() {
            $("#close-vestibulo_n_coclear").show();
            $(this).hide();
            $("#content-vestibulo_n_coclear").show('slow');
        });

    });

</script>
<fieldset id="vestibulo_n_coclear">
    <legend align="left"> <div class="arrow-c" id="close-vestibulo_n_coclear"></div> <div class="arrow-o" id="open-vestibulo_n_coclear" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Nervio vestibulo coclear</font></legend>
    <div id="content-vestibulo_n_coclear">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_vestibulo_n_coclear" id="guardar_vestibulo_n_coclear" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
        <form id="form_vestibulo_n_coclear" name="form_vestibulo_n_coclear" action="<?php echo @$action_form_vestibulo_n_coclear ?>#vestibulo_n_coclear" method="post">

            <input type="hidden" id="id_vestibulo_n_coclear" name="id_vestibulo_n_coclear" value="<?php echo @$id_vestibulo_n_coclear ?>" />



            <input type="hidden" class="input_txt valid" id="id_vestibulo_n_coclear" name="id_vestibulo_n_coclear" value="<?php echo @$id_vestibulo_n_coclear; ?>" />

           
            <table border="0" cellspacing="0" cellpadding="0" class="data" >
                <tr>
                    <td width="240" valign="top"><p align="center"><strong>Evaluación    coclear</strong></p></td>
                    <td width="240" valign="top"><p align="center"><strong>O.D</strong></p></td>
                    <td width="240" valign="top"><p align="center"><strong>O.I</strong></p></td>
                </tr>
                <tr>
                    <td width="240" valign="top"><p align="center">Hipoacusia</p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="hipo_od" name="hipo_od" value="<?php echo @$hipo_od; ?>" />
                        </p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="hipo_id" name="hipo_id" value="<?php echo @$hipo_id; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="240" valign="top"><p align="center">Hiperacusia</p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="hipe_od" name="hipe_od" value="<?php echo @$hipe_od; ?>" />
                        </p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="hipe_id" name="hipe_id" value="<?php echo @$hipe_id; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="240" valign="top"><p align="center">Acusia</p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="acu_od" name="acu_od" value="<?php echo @$acu_od; ?>" />
                        </p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="acu_id" name="acu_id" value="<?php echo @$acu_id; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="240" valign="top"><p align="center"> Tinitus</p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="tini_od" name="tini_od" value="<?php echo @$tini_od; ?>" />
                        </p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="tini_id" name="tini_id" value="<?php echo @$tini_id; ?>" />
                        </p></td>
                </tr>
            </table>
            <p><strong>Evaluación laberíntica:</strong></p>
            <ul>
                <li>Pruebas estáticas:</li>
            </ul>
            <p>Romberg:  Positivo: <strong>
                    <input type="text" class="input_txt valid" id="romb_posi" name="romb_posi" value="<?php echo @$romb_posi; ?>" />
                </strong>Negativo:
                <input type="text" class="input_txt valid" id="romb_neg" name="romb_neg" value="<?php echo @$romb_neg; ?>" />
                <br />
                Romberg  sensibilizado: Positivo:
                <input type="text" class="input_txt valid" id="roms_pos" name="roms_pos" value="<?php echo @$roms_pos; ?>" />
                Negativo: <strong>
                    <input type="text" class="input_txt valid" id="roms_neg" name="roms_neg" value="<?php echo @$roms_neg; ?>" />
                </strong><br />
                Posición  firme: oscila:
                <input type="text" class="input_txt valid" id="pos_firme_osc" name="pos_firme_osc" value="<?php echo @$pos_firme_osc; ?>" />
                No oscila: <strong>
                    <input type="text" class="input_txt valid" id="pos_firme_nosc" name="pos_firme_nosc" value="<?php echo @$pos_firme_nosc; ?>" />
                </strong></p>
            <p><strong>OBSERVACIONES:
                    <input type="text" class="input_txt valid" id="labe_observ" name="labe_observ" value="<?php echo @$labe_observ; ?>" />
                </strong></p>
            <ul>
                <li>Pruebas dinámicas:<strong>&nbsp;</strong></li>
            </ul>
            <table border="0" cellspacing="0" cellpadding="0" class="data" >
                <tr>
                    <td width="240" valign="top"><p align="center"><strong>Miembro    inferior</strong></p></td>
                    <td width="240" valign="top"><p align="center"><strong>Derecho</strong></p></td>
                    <td width="240" valign="top"><p align="center"><strong>Izquierdo</strong></p></td>
                </tr>
                <tr>
                    <td width="240" valign="top"><p align="center">Talón rodilla</p></td>
                    <td width="240" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="talonr_d" name="talonr_d" value="<?php echo @$talonr_d; ?>" />
                                &nbsp;</strong></p></td>
                    <td width="240" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="talonr_i" name="talonr_i" value="<?php echo @$talonr_i; ?>" />
                                &nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="240" valign="top"><p align="center">Talón glúteo</p></td>
                    <td width="240" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="tgluteo_d" name="tgluteo_d" value="<?php echo @$tgluteo_d; ?>" />
                                &nbsp;</strong></p></td>
                    <td width="240" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="tgluteo_i" name="tgluteo_i" value="<?php echo @$tgluteo_i; ?>" />
                                &nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="240" valign="top"><p align="center">Pie mano examinador</p></td>
                    <td width="240" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="pie_mano_d" name="pie_mano_d" value="<?php echo @$pie_mano_d; ?>" />
                                &nbsp;</strong></p></td>
                    <td width="240" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="pie_mano_i" name="pie_mano_i" value="<?php echo @$pie_mano_i; ?>" />
                                &nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="240" valign="top"><p align="center">Golpe talón tibia</p></td>
                    <td width="240" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="tibia_d" name="tibia_d" value="<?php echo @$tibia_d; ?>" />
                                &nbsp;</strong></p></td>
                    <td width="240" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="tibia_i" name="tibia_i" value="<?php echo @$tibia_i; ?>" />
                                &nbsp;</strong></p></td>
                </tr>
            </table>
            <p><strong>OBSERVACIONES:  <input type="text" class="input_txt valid" id="dinamica_obser" name="dinamica_obser" value="<?php echo @$dinamica_obser; ?>" />
                </strong></p>
            <table border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="293" valign="top"><p align="center"><strong>Miembro    superior</strong></p></td>
                    <td width="213" valign="top"><p align="center"><strong>Derecho</strong></p></td>
                    <td width="215" valign="top"><p align="center"><strong>Izquierdo</strong></p></td>
                </tr>
                <tr>
                    <td width="293" valign="top"><p align="center">Índice nariz</p></td>
                    <td width="213" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="ind_narizd" name="ind_narizd" value="<?php echo @$ind_narizd; ?>" />
                                &nbsp;</strong></p></td>
                    <td width="215" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="ind_narizi" name="ind_narizi" value="<?php echo @$ind_narizi; ?>" />
                                &nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="293" valign="top"><p align="center">Índice oreja</p></td>
                    <td width="213" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="ind_orejad" name="ind_orejad" value="<?php echo @$ind_orejad; ?>" />
                                &nbsp;</strong></p></td>
                    <td width="215" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="ind_orejai" name="ind_orejai" value="<?php echo @$ind_orejai; ?>" />
                                &nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="293" valign="top"><p align="center">Índice índice</p></td>
                    <td width="213" valign="top"><p align="center"><strong>&nbsp;</strong><strong>
                                <input type="text" class="input_txt valid" id="ind_indiced" name="ind_indiced" value="<?php echo @$ind_indiced; ?>" />
                            </strong></p></td>
                    <td width="215" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="ind_indicei" name="ind_indicei" value="<?php echo @$ind_indicei; ?>" />
                                &nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="293" valign="top"><p align="center">Índice índice del examinador</p></td>
                    <td width="213" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="ind_exad" name="ind_exad" value="<?php echo @$ind_exad; ?>" />
                                &nbsp;</strong></p></td>
                    <td width="215" valign="top"><p align="center"><strong>
                                <input type="text" class="input_txt valid" id="ind_exai" name="ind_exai" value="<?php echo @$ind_exai; ?>" />
                                &nbsp;</strong></p></td>
                </tr>
            </table>
            <p><strong>OBSERVACIONES:
                    <input type="text" class="input_txt valid" id="vesti_observacion" name="vesti_observacion" value="<?php echo @$vesti_observacion; ?>" />
                </strong></p>

<?php echo @$button ?>
        </form><br>
    </div>
</fieldset>