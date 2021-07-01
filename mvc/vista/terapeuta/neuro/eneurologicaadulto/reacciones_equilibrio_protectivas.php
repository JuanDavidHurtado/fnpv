<?php
if (isset($_REQUEST['guardar_ner_equi_protectivas']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_ner_equi_protectivas'] == 'new') {

        $sql = "INSERT INTO ner_equi_protectivas (
`id_ner_equi_protectivas`,
`id_usuario`,
`historia`,
`id_proceso`,
`apoyo_pd`,
`apoyo_aud`,
`apoyo_pizq`,
`apoyo_auizq`,
`sent_pd`,
`sent_aud`,
`sent_pizq`,
`sent_auizq`,
`cuad_pd`,
`cuad_aud`,
`cuad_pizq`,
`cuad_auizq`,
`arro_pd`,
`arro_aud`,
`arro_pizq`,
`arro_auizq`,
`eqpie2_pd`,
`eqpie2_aud`,
`eqpie2_pi`,
`eqpie2_aui`,
`semi_pd`,
`semi_aud`,
`semi_pizq`,
`semi_auizq`,
`bipe_pd`,
`bipe_aud`,
`bipe_pizq`,
`bipe_auizq`,
`paso_pd`,
`paso_aud`,
`paso_pi`,
`paso_aui`,
`equil_pd`,
`equil_aud`,
`equil_pi`,
`equil_aui`,
`eqpie_pd`,
`eqpie_aud`,
`eqpie_pi`,
`eqpie_aui`,
`profue_pd`,
`profue_aud`,
`profue_pi`,
`profue_aui`,
`prolat_pd`,
`prolat_aud`,
`prolat_pi`,
`prolat_aui`,
`protec_pd`,
`protec_aud`,
`protec_pi`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`protec_aui`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['apoyo_pd'] . "' ,
'" . $_REQUEST['apoyo_aud'] . "' ,
'" . $_REQUEST['apoyo_pizq'] . "' ,
'" . $_REQUEST['apoyo_auizq'] . "' ,
'" . $_REQUEST['sent_pd'] . "' ,
'" . $_REQUEST['sent_aud'] . "' ,
'" . $_REQUEST['sent_pizq'] . "' ,
'" . $_REQUEST['sent_auizq'] . "' ,
'" . $_REQUEST['cuad_pd'] . "' ,
'" . $_REQUEST['cuad_aud'] . "' ,
'" . $_REQUEST['cuad_pizq'] . "' ,
'" . $_REQUEST['cuad_auizq'] . "' ,
'" . $_REQUEST['arro_pd'] . "' ,
'" . $_REQUEST['arro_aud'] . "' ,
'" . $_REQUEST['arro_pizq'] . "' ,
'" . $_REQUEST['arro_auizq'] . "' ,
'" . $_REQUEST['eqpie2_pd'] . "' ,
'" . $_REQUEST['eqpie2_aud'] . "' ,
'" . $_REQUEST['eqpie2_pi'] . "' ,
'" . $_REQUEST['eqpie2_aui'] . "' ,
'" . $_REQUEST['semi_pd'] . "' ,
'" . $_REQUEST['semi_aud'] . "' ,
'" . $_REQUEST['semi_pizq'] . "' ,
'" . $_REQUEST['semi_auizq'] . "' ,
'" . $_REQUEST['bipe_pd'] . "' ,
'" . $_REQUEST['bipe_aud'] . "' ,
'" . $_REQUEST['bipe_pizq'] . "' ,
'" . $_REQUEST['bipe_auizq'] . "' ,
'" . $_REQUEST['paso_pd'] . "' ,
'" . $_REQUEST['paso_aud'] . "' ,
'" . $_REQUEST['paso_pi'] . "' ,
'" . $_REQUEST['paso_aui'] . "' ,
'" . $_REQUEST['equil_pd'] . "' ,
'" . $_REQUEST['equil_aud'] . "' ,
'" . $_REQUEST['equil_pi'] . "' ,
'" . $_REQUEST['equil_aui'] . "' ,
'" . $_REQUEST['eqpie_pd'] . "' ,
'" . $_REQUEST['eqpie_aud'] . "' ,
'" . $_REQUEST['eqpie_pi'] . "' ,
'" . $_REQUEST['eqpie_aui'] . "' ,
'" . $_REQUEST['profue_pd'] . "' ,
'" . $_REQUEST['profue_aud'] . "' ,
'" . $_REQUEST['profue_pi'] . "' ,
'" . $_REQUEST['profue_aui'] . "' ,
'" . $_REQUEST['prolat_pd'] . "' ,
'" . $_REQUEST['prolat_aud'] . "' ,
'" . $_REQUEST['prolat_pi'] . "' ,
'" . $_REQUEST['prolat_aui'] . "' ,
'" . $_REQUEST['protec_pd'] . "' ,
'" . $_REQUEST['protec_aud'] . "' ,
'" . $_REQUEST['protec_pi'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['protec_aui'] . "'
) ";
    } else if ($_REQUEST['id_ner_equi_protectivas'] != '') {

        $sql = "UPDATE ner_equi_protectivas set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`apoyo_pd` = '" . $_REQUEST['apoyo_pd'] . "' ,
`apoyo_aud` = '" . $_REQUEST['apoyo_aud'] . "' ,
`apoyo_pizq` = '" . $_REQUEST['apoyo_pizq'] . "' ,
`apoyo_auizq` = '" . $_REQUEST['apoyo_auizq'] . "' ,
`sent_pd` = '" . $_REQUEST['sent_pd'] . "' ,
`sent_aud` = '" . $_REQUEST['sent_aud'] . "' ,
`sent_pizq` = '" . $_REQUEST['sent_pizq'] . "' ,
`sent_auizq` = '" . $_REQUEST['sent_auizq'] . "' ,
`cuad_pd` = '" . $_REQUEST['cuad_pd'] . "' ,
`cuad_aud` = '" . $_REQUEST['cuad_aud'] . "' ,
`cuad_pizq` = '" . $_REQUEST['cuad_pizq'] . "' ,
`cuad_auizq` = '" . $_REQUEST['cuad_auizq'] . "' ,
`arro_pd` = '" . $_REQUEST['arro_pd'] . "' ,
`arro_aud` = '" . $_REQUEST['arro_aud'] . "' ,
`arro_pizq` = '" . $_REQUEST['arro_pizq'] . "' ,
`arro_auizq` = '" . $_REQUEST['arro_auizq'] . "' ,
`eqpie2_pd` = '" . $_REQUEST['eqpie2_pd'] . "' ,
`eqpie2_aud` = '" . $_REQUEST['eqpie2_aud'] . "' ,
`eqpie2_pi` = '" . $_REQUEST['eqpie2_pi'] . "' ,
`eqpie2_aui` = '" . $_REQUEST['eqpie2_aui'] . "' ,
`semi_pd` = '" . $_REQUEST['semi_pd'] . "' ,
`semi_aud` = '" . $_REQUEST['semi_aud'] . "' ,
`semi_pizq` = '" . $_REQUEST['semi_pizq'] . "' ,
`semi_auizq` = '" . $_REQUEST['semi_auizq'] . "' ,
`bipe_pd` = '" . $_REQUEST['bipe_pd'] . "' ,
`bipe_aud` = '" . $_REQUEST['bipe_aud'] . "' ,
`bipe_pizq` = '" . $_REQUEST['bipe_pizq'] . "' ,
`bipe_auizq` = '" . $_REQUEST['bipe_auizq'] . "' ,
`paso_pd` = '" . $_REQUEST['paso_pd'] . "' ,
`paso_aud` = '" . $_REQUEST['paso_aud'] . "' ,
`paso_pi` = '" . $_REQUEST['paso_pi'] . "' ,
`paso_aui` = '" . $_REQUEST['paso_aui'] . "' ,
`equil_pd` = '" . $_REQUEST['equil_pd'] . "' ,
`equil_aud` = '" . $_REQUEST['equil_aud'] . "' ,
`equil_pi` = '" . $_REQUEST['equil_pi'] . "' ,
`equil_aui` = '" . $_REQUEST['equil_aui'] . "' ,
`eqpie_pd` = '" . $_REQUEST['eqpie_pd'] . "' ,
`eqpie_aud` = '" . $_REQUEST['eqpie_aud'] . "' ,
`eqpie_pi` = '" . $_REQUEST['eqpie_pi'] . "' ,
`eqpie_aui` = '" . $_REQUEST['eqpie_aui'] . "' ,
`profue_pd` = '" . $_REQUEST['profue_pd'] . "' ,
`profue_aud` = '" . $_REQUEST['profue_aud'] . "' ,
`profue_pi` = '" . $_REQUEST['profue_pi'] . "' ,
`profue_aui` = '" . $_REQUEST['profue_aui'] . "' ,
`prolat_pd` = '" . $_REQUEST['prolat_pd'] . "' ,
`prolat_aud` = '" . $_REQUEST['prolat_aud'] . "' ,
`prolat_pi` = '" . $_REQUEST['prolat_pi'] . "' ,
`prolat_aui` = '" . $_REQUEST['prolat_aui'] . "' ,
`protec_pd` = '" . $_REQUEST['protec_pd'] . "' ,
`protec_aud` = '" . $_REQUEST['protec_aud'] . "' ,
`protec_pi` = '" . $_REQUEST['protec_pi'] . "' ,
`protec_aui` = '" . $_REQUEST['protec_aui'] . "' WHERE `id_ner_equi_protectivas` = '" . $_REQUEST['id_ner_equi_protectivas'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_ner_equi_protectivas = 'new';
$sql = "SELECT * from ner_equi_protectivas WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_ner_equi_protectivas = $row['id_ner_equi_protectivas'];
    $id_usuario = $row['id_usuario'];
    $historia = $row['historia'];
    $id_proceso = $row['id_proceso'];
    $apoyo_pd = $row['apoyo_pd'];
    $apoyo_aud = $row['apoyo_aud'];
    $apoyo_pizq = $row['apoyo_pizq'];
    $apoyo_auizq = $row['apoyo_auizq'];
    $sent_pd = $row['sent_pd'];
    $sent_aud = $row['sent_aud'];
    $sent_pizq = $row['sent_pizq'];
    $sent_auizq = $row['sent_auizq'];
    $cuad_pd = $row['cuad_pd'];
    $cuad_aud = $row['cuad_aud'];
    $cuad_pizq = $row['cuad_pizq'];
    $cuad_auizq = $row['cuad_auizq'];
    $arro_pd = $row['arro_pd'];
    $arro_aud = $row['arro_aud'];
    $arro_pizq = $row['arro_pizq'];
    $arro_auizq = $row['arro_auizq'];
    $eqpie2_pd = $row['eqpie2_pd'];
    $eqpie2_aud = $row['eqpie2_aud'];
    $eqpie2_pi = $row['eqpie2_pi'];
    $eqpie2_aui = $row['eqpie2_aui'];
    $semi_pd = $row['semi_pd'];
    $semi_aud = $row['semi_aud'];
    $semi_pizq = $row['semi_pizq'];
    $semi_auizq = $row['semi_auizq'];
    $bipe_pd = $row['bipe_pd'];
    $bipe_aud = $row['bipe_aud'];
    $bipe_pizq = $row['bipe_pizq'];
    $bipe_auizq = $row['bipe_auizq'];
    $paso_pd = $row['paso_pd'];
    $paso_aud = $row['paso_aud'];
    $paso_pi = $row['paso_pi'];
    $paso_aui = $row['paso_aui'];
    $equil_pd = $row['equil_pd'];
    $equil_aud = $row['equil_aud'];
    $equil_pi = $row['equil_pi'];
    $equil_aui = $row['equil_aui'];
    $eqpie_pd = $row['eqpie_pd'];
    $eqpie_aud = $row['eqpie_aud'];
    $eqpie_pi = $row['eqpie_pi'];
    $eqpie_aui = $row['eqpie_aui'];
    $profue_pd = $row['profue_pd'];
    $profue_aud = $row['profue_aud'];
    $profue_pi = $row['profue_pi'];
    $profue_aui = $row['profue_aui'];
    $prolat_pd = $row['prolat_pd'];
    $prolat_aud = $row['prolat_aud'];
    $prolat_pi = $row['prolat_pi'];
    $prolat_aui = $row['prolat_aui'];
    $protec_pd = $row['protec_pd'];
    $protec_aud = $row['protec_aud'];
    $protec_pi = $row['protec_pi'];
    $protec_aui = $row['protec_aui'];
    break;
}
?>
<script>

    $(function() {

        $("#close-ner_equi_protectivas").click(function() {
            $("#open-ner_equi_protectivas").show();
            $(this).hide();
            $("#content-ner_equi_protectivas").hide('slow');
        });

        $("#open-ner_equi_protectivas").click(function() {
            $("#close-ner_equi_protectivas").show();
            $(this).hide();
            $("#content-ner_equi_protectivas").show('slow');
        });

    });

</script>
<fieldset id="ner_equi_protectivas">
    <legend align="left"> <div class="arrow-c" id="close-ner_equi_protectivas"></div> <div class="arrow-o" id="open-ner_equi_protectivas" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Reacciones de equilibrio y protectivas</font></legend>
    <div id="content-ner_equi_protectivas">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_ner_equi_protectivas" id="guardar_ner_equi_protectivas" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_ner_equi_protectivas" name="form_ner_equi_protectivas" action="<?php echo @$action_form_ner_equi_protectivas ?>#ner_equi_protectivas" method="post">

            <input type="hidden" id="id_ner_equi_protectivas" name="id_ner_equi_protectivas" value="<?php echo @$id_ner_equi_protectivas ?>" />

            <input type="hidden" class="input_txt valid" id="id_ner_equi_protectivas" name="id_ner_equi_protectivas" value="<?php echo @$id_ner_equi_protectivas; ?>" />

            <table  border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="234" valign="top"><p align="center">&nbsp;</p></td>
                    <td width="248" colspan="2" valign="top"><p align="center"><strong>Derecho</strong></p></td>
                    <td width="245" colspan="2" valign="top"><p align="center"><strong>Izquierdo</strong></p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p><strong>Equilibrio</strong></p></td>
                    <td width="118" valign="top"><p align="center"><strong>Presente</strong></p></td>
                    <td width="130" valign="top"><p align="center"><strong>Ausente</strong></p></td>
                    <td width="130" valign="top"><p align="center"><strong>Presente</strong></p></td>
                    <td width="115" valign="top"><p align="center"><strong>Ausente</strong></p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Apoyo MS al cambio    de posición (supino ‘ prono)</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="apoyo_pd" name="apoyo_pd" value="<?php echo @$apoyo_pd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="apoyo_aud" name="apoyo_aud" value="<?php echo @$apoyo_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="apoyo_pizq" name="apoyo_pizq" value="<?php echo @$apoyo_pizq; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="apoyo_auizq" name="apoyo_auizq" value="<?php echo @$apoyo_auizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Sentarse sin usar    MMSS y apoyo igual en caderas</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="sent_pd" name="sent_pd" value="<?php echo @$sent_pd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="sent_aud" name="sent_aud" value="<?php echo @$sent_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="sent_pizq" name="sent_pizq" value="<?php echo @$sent_pizq; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="sent_auizq" name="sent_auizq" value="<?php echo @$sent_auizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Cuadrúpedo extiende    MS y MI c                                                                                                                  ontrarios</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cuad_pd" name="cuad_pd" value="<?php echo @$cuad_pd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cuad_aud" name="cuad_aud" value="<?php echo @$cuad_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cuad_pizq" name="cuad_pizq" value="<?php echo @$cuad_pizq; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cuad_auizq" name="cuad_auizq" value="<?php echo @$cuad_auizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" rowspan="2" valign="top"><p>Arrodillado    desestabilización<br />
                            Arrodillado carga    peso en una y otra cadera (1 arriba)</p></td>
                    <td width="118" height="44" valign="top"><p>
                            <input type="text" class="input_txt valid" id="arro_pd" name="arro_pd" value="<?php echo @$arro_pd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="arro_aud" name="arro_aud" value="<?php echo @$arro_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="arro_pizq" name="arro_pizq" value="<?php echo @$arro_pizq; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="arro_auizq" name="arro_auizq" value="<?php echo @$arro_auizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="118" valign="top"><p>

                            <input type="text" class="input_txt valid" id="eqpie2_pd" name="eqpie2_pd" value="<?php echo @$eqpie2_pd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="eqpie2_aud" name="eqpie2_aud" value="<?php echo @$eqpie2_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="eqpie2_pi" name="eqpie2_pi" value="<?php echo @$eqpie2_pi; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="eqpie2_aui" name="eqpie2_aui" value="<?php echo @$eqpie2_aui; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Semiarrodillado    desestabilización</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="semi_pd" name="semi_pd" value="<?php echo @$semi_pd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="semi_aud" name="semi_aud" value="<?php echo @$semi_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="semi_pizq" name="semi_pizq" value="<?php echo @$semi_pizq; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="semi_auizq" name="semi_auizq" value="<?php echo @$semi_auizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Bípedo pies juntos    desestabilización</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="bipe_pd" name="bipe_pd" value="<?php echo @$bipe_pd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="bipe_aud" name="bipe_aud" value="<?php echo @$bipe_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="bipe_pizq" name="bipe_pizq" value="<?php echo @$bipe_pizq; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="bipe_auizq" name="bipe_auizq" value="<?php echo @$bipe_auizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Posición de paso    (adelante apoyo talón) desestabilización</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="paso_pd" name="paso_pd" value="<?php echo @$paso_pd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="paso_aud" name="paso_aud" value="<?php echo @$paso_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="paso_pi" name="paso_pi" value="<?php echo @$paso_pi; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="paso_aui" name="paso_aui" value="<?php echo @$paso_aui; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Equilibrio sobre    una pierna (elevar una) desestabilización</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="equil_pd" name="equil_pd" value="<?php echo @$equil_pd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="equil_aud" name="equil_aud" value="<?php echo @$equil_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="equil_pi" name="equil_pi" value="<?php echo @$equil_pi; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="equil_aui" name="equil_aui" value="<?php echo @$equil_aui; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Equilibrio una    pierna (una atrás con flexión de rodilla) desestabilización</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="eqpie_pd" name="eqpie_pd" value="<?php echo @$eqpie_pd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="eqpie_aud" name="eqpie_aud" value="<?php echo @$eqpie_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="eqpie_pi" name="eqpie_pi" value="<?php echo @$eqpie_pi; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="eqpie_aui" name="eqpie_aui" value="<?php echo @$eqpie_aui; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p><strong>Protectivas</strong></p></td>
                    <td width="118" valign="top"><p>&nbsp;</p></td>
                    <td width="130" valign="top"><p>&nbsp;</p></td>
                    <td width="130" valign="top"><p>&nbsp;</p></td>
                    <td width="115" valign="top"><p>&nbsp;</p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Fuerte    desestabilización adelante (mesa ‘ paracaídas anterior)</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="profue_pi" name="profue_pi" value="<?php echo @$profue_pi; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="profue_aui" name="profue_aui" value="<?php echo @$profue_aui; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="profue_aud" name="profue_aud" value="<?php echo @$profue_aud; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="profue_pd" name="profue_pd" value="<?php echo @$profue_pd; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Fuerte    desestabilización lateral (mesa ‘ paracaídas lateral)</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="prolat_pd" name="prolat_pd" value="<?php echo @$prolat_pd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="prolat_aud" name="prolat_aud" value="<?php echo @$prolat_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="prolat_pi" name="prolat_pi" value="<?php echo @$prolat_pi; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="prolat_aui" name="prolat_aui" value="<?php echo @$prolat_aui; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Protección del    rostro con mmss</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="protec_pd" name="protec_pd" value="<?php echo @$protec_pd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="protec_aud" name="protec_aud" value="<?php echo @$protec_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="protec_pi" name="protec_pi" value="<?php echo @$protec_pi; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="protec_aui" name="protec_aui" value="<?php echo @$protec_aui; ?>" />
                        </p></td>
                </tr>
            </table>
            <p>&nbsp;</p>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>