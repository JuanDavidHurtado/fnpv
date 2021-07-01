<?php
if (isset($_REQUEST['guardar_ner_neuro_pato_reflejos']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_ner_neuro_pato_reflejos'] == 'new') {

        $sql = "INSERT INTO ner_neuro_pato_reflejos (
`id_ner_neuro_pato_reflejos`,
`id_usuario`,
`historia`,
`id_proceso`,
`neu_ninguno`,
`neu_navaja`,
`neu_tubo`,
`neu_rueda`,
`ref_hoff_pd`,
`ref_hoff_pizq`,
`ref_hoff_aud`,
`ref_hoff_aui`,
`ref_clo_pd`,
`ref_clo_piz`,
`ref_clo_aud`,
`ref_clo_auiz`,
`ref_bab_pd`,
`ref_bab_pizq`,
`ref_bab_aud`,
`ref_bab_auizq`,
`ref_suc_pd`,
`ref_suc_pizq`,
`ref_suc_aud`,
`ref_suc_auizq`,
`ref_gor_pd`,
`ref_gor_pizq`,
`ref_gor_aud`,
`ref_gor_auizq`,
`ref_sha_pd`,
`ref_sha_pizq`,
`ref_sha_aud`,
`ref_sha_aui`,
`ref_opp_pd`,
`ref_opp_pizq`,
`ref_opp_aud`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`ref_opp_auizq`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['neu_ninguno'] . "' ,
'" . $_REQUEST['neu_navaja'] . "' ,
'" . $_REQUEST['neu_tubo'] . "' ,
'" . $_REQUEST['neu_rueda'] . "' ,
'" . $_REQUEST['ref_hoff_pd'] . "' ,
'" . $_REQUEST['ref_hoff_pizq'] . "' ,
'" . $_REQUEST['ref_hoff_aud'] . "' ,
'" . $_REQUEST['ref_hoff_aui'] . "' ,
'" . $_REQUEST['ref_clo_pd'] . "' ,
'" . $_REQUEST['ref_clo_piz'] . "' ,
'" . $_REQUEST['ref_clo_aud'] . "' ,
'" . $_REQUEST['ref_clo_auiz'] . "' ,
'" . $_REQUEST['ref_bab_pd'] . "' ,
'" . $_REQUEST['ref_bab_pizq'] . "' ,
'" . $_REQUEST['ref_bab_aud'] . "' ,
'" . $_REQUEST['ref_bab_auizq'] . "' ,
'" . $_REQUEST['ref_suc_pd'] . "' ,
'" . $_REQUEST['ref_suc_pizq'] . "' ,
'" . $_REQUEST['ref_suc_aud'] . "' ,
'" . $_REQUEST['ref_suc_auizq'] . "' ,
'" . $_REQUEST['ref_gor_pd'] . "' ,
'" . $_REQUEST['ref_gor_pizq'] . "' ,
'" . $_REQUEST['ref_gor_aud'] . "' ,
'" . $_REQUEST['ref_gor_auizq'] . "' ,
'" . $_REQUEST['ref_sha_pd'] . "' ,
'" . $_REQUEST['ref_sha_pizq'] . "' ,
'" . $_REQUEST['ref_sha_aud'] . "' ,
'" . $_REQUEST['ref_sha_aui'] . "' ,
'" . $_REQUEST['ref_opp_pd'] . "' ,
'" . $_REQUEST['ref_opp_pizq'] . "' ,
'" . $_REQUEST['ref_opp_aud'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['ref_opp_auizq'] . "'
) ";
    } else if ($_REQUEST['id_ner_neuro_pato_reflejos'] != '') {

        $sql = "UPDATE ner_neuro_pato_reflejos set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`neu_ninguno` = '" . $_REQUEST['neu_ninguno'] . "' ,
`neu_navaja` = '" . $_REQUEST['neu_navaja'] . "' ,
`neu_tubo` = '" . $_REQUEST['neu_tubo'] . "' ,
`neu_rueda` = '" . $_REQUEST['neu_rueda'] . "' ,
`ref_hoff_pd` = '" . $_REQUEST['ref_hoff_pd'] . "' ,
`ref_hoff_pizq` = '" . $_REQUEST['ref_hoff_pizq'] . "' ,
`ref_hoff_aud` = '" . $_REQUEST['ref_hoff_aud'] . "' ,
`ref_hoff_aui` = '" . $_REQUEST['ref_hoff_aui'] . "' ,
`ref_clo_pd` = '" . $_REQUEST['ref_clo_pd'] . "' ,
`ref_clo_piz` = '" . $_REQUEST['ref_clo_piz'] . "' ,
`ref_clo_aud` = '" . $_REQUEST['ref_clo_aud'] . "' ,
`ref_clo_auiz` = '" . $_REQUEST['ref_clo_auiz'] . "' ,
`ref_bab_pd` = '" . $_REQUEST['ref_bab_pd'] . "' ,
`ref_bab_pizq` = '" . $_REQUEST['ref_bab_pizq'] . "' ,
`ref_bab_aud` = '" . $_REQUEST['ref_bab_aud'] . "' ,
`ref_bab_auizq` = '" . $_REQUEST['ref_bab_auizq'] . "' ,
`ref_suc_pd` = '" . $_REQUEST['ref_suc_pd'] . "' ,
`ref_suc_pizq` = '" . $_REQUEST['ref_suc_pizq'] . "' ,
`ref_suc_aud` = '" . $_REQUEST['ref_suc_aud'] . "' ,
`ref_suc_auizq` = '" . $_REQUEST['ref_suc_auizq'] . "' ,
`ref_gor_pd` = '" . $_REQUEST['ref_gor_pd'] . "' ,
`ref_gor_pizq` = '" . $_REQUEST['ref_gor_pizq'] . "' ,
`ref_gor_aud` = '" . $_REQUEST['ref_gor_aud'] . "' ,
`ref_gor_auizq` = '" . $_REQUEST['ref_gor_auizq'] . "' ,
`ref_sha_pd` = '" . $_REQUEST['ref_sha_pd'] . "' ,
`ref_sha_pizq` = '" . $_REQUEST['ref_sha_pizq'] . "' ,
`ref_sha_aud` = '" . $_REQUEST['ref_sha_aud'] . "' ,
`ref_sha_aui` = '" . $_REQUEST['ref_sha_aui'] . "' ,
`ref_opp_pd` = '" . $_REQUEST['ref_opp_pd'] . "' ,
`ref_opp_pizq` = '" . $_REQUEST['ref_opp_pizq'] . "' ,
`ref_opp_aud` = '" . $_REQUEST['ref_opp_aud'] . "' ,
`ref_opp_auizq` = '" . $_REQUEST['ref_opp_auizq'] . "'  WHERE `id_ner_neuro_pato_reflejos` = '" . $_REQUEST['id_ner_neuro_pato_reflejos'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_ner_neuro_pato_reflejos = 'new';
$sql = "SELECT * from ner_neuro_pato_reflejos WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_ner_neuro_pato_reflejos = $row['id_ner_neuro_pato_reflejos'];
    
    $neu_ninguno = $row['neu_ninguno'];
    $neu_navaja = $row['neu_navaja'];
    $neu_tubo = $row['neu_tubo'];
    $neu_rueda = $row['neu_rueda'];
    $ref_hoff_pd = $row['ref_hoff_pd'];
    $ref_hoff_pizq = $row['ref_hoff_pizq'];
    $ref_hoff_aud = $row['ref_hoff_aud'];
    $ref_hoff_aui = $row['ref_hoff_aui'];
    $ref_clo_pd = $row['ref_clo_pd'];
    $ref_clo_piz = $row['ref_clo_piz'];
    $ref_clo_aud = $row['ref_clo_aud'];
    $ref_clo_auiz = $row['ref_clo_auiz'];
    $ref_bab_pd = $row['ref_bab_pd'];
    $ref_bab_pizq = $row['ref_bab_pizq'];
    $ref_bab_aud = $row['ref_bab_aud'];
    $ref_bab_auizq = $row['ref_bab_auizq'];
    $ref_suc_pd = $row['ref_suc_pd'];
    $ref_suc_pizq = $row['ref_suc_pizq'];
    $ref_suc_aud = $row['ref_suc_aud'];
    $ref_suc_auizq = $row['ref_suc_auizq'];
    $ref_gor_pd = $row['ref_gor_pd'];
    $ref_gor_pizq = $row['ref_gor_pizq'];
    $ref_gor_aud = $row['ref_gor_aud'];
    $ref_gor_auizq = $row['ref_gor_auizq'];
    $ref_sha_pd = $row['ref_sha_pd'];
    $ref_sha_pizq = $row['ref_sha_pizq'];
    $ref_sha_aud = $row['ref_sha_aud'];
    $ref_sha_aui = $row['ref_sha_aui'];
    $ref_opp_pd = $row['ref_opp_pd'];
    $ref_opp_pizq = $row['ref_opp_pizq'];
    $ref_opp_aud = $row['ref_opp_aud'];
    $ref_opp_auizq = $row['ref_opp_auizq'];
    
    break;
}
?>
<script>

    $(function() {

        $("#close-ner_neuro_pato_reflejos").click(function() {
            $("#open-ner_neuro_pato_reflejos").show();
            $(this).hide();
            $("#content-ner_neuro_pato_reflejos").hide('slow');
        });

        $("#open-ner_neuro_pato_reflejos").click(function() {
            $("#close-ner_neuro_pato_reflejos").show();
            $(this).hide();
            $("#content-ner_neuro_pato_reflejos").show('slow');
        });

    });

</script>
<fieldset id="ner_neuro_pato_reflejos">
    <legend align="left"> <div class="arrow-c" id="close-ner_neuro_pato_reflejos"></div> <div class="arrow-o" id="open-ner_neuro_pato_reflejos" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Reflejos y respuestas patologicas</font></legend>
    <div id="content-ner_neuro_pato_reflejos">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_ner_neuro_pato_reflejos" id="guardar_ner_neuro_pato_reflejos" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_ner_neuro_pato_reflejos" name="form_ner_neuro_pato_reflejos" action="<?php echo @$action_form_ner_neuro_pato_reflejos ?>#ner_neuro_pato_reflejos" method="post">

            <input type="hidden" id="id_ner_neuro_pato_reflejos" name="id_ner_neuro_pato_reflejos" value="<?php echo @$id_ner_neuro_pato_reflejos ?>" />

            <input type="hidden" class="input_txt valid" id="id_ner_neuro_pato_reflejos" name="id_ner_neuro_pato_reflejos" value="<?php echo @$id_ner_neuro_pato_reflejos; ?>" />
            
            <table width="788"  border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="243" valign="top"><p align="center"><strong>REFLEJO</strong></p></td>
                    <td colspan="2" valign="top"><p align="center"><strong>PRESENTE</strong></p></td>
                    <td colspan="2" valign="top"><p align="center"><strong>AUSENTE</strong></p></td>
                </tr>
                <tr>
                    <td width="243" valign="top"><p>&nbsp;</p></td>
                    <td width="142" valign="top"><p align="center"><strong>Derecho</strong></p></td>
                    <td width="131" valign="top"><p align="center"><strong>Izquierdo</strong></p></td>
                    <td width="130" valign="top"><p align="center"><strong>Derecho</strong></p></td>
                    <td width="130" valign="top"><p align="center"><strong>Izquierdo</strong></p></td>
                </tr>
                <tr>
                    <td width="243" valign="top"><ul>
                            <li>Hoffman</li>
                        </ul></td>
                    <td width="142" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_hoff_pd" name="ref_hoff_pd" value="<?php echo @$ref_hoff_pd; ?>" />
                        </p></td>
                    <td width="131" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_hoff_pizq" name="ref_hoff_pizq" value="<?php echo @$ref_hoff_pizq; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_hoff_aud" name="ref_hoff_aud" value="<?php echo @$ref_hoff_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_hoff_aui" name="ref_hoff_aui" value="<?php echo @$ref_hoff_aui; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="243" valign="top"><ul>
                            <li>Clonus</li>
                        </ul></td>
                    <td width="142" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_clo_pd" name="ref_clo_pd" value="<?php echo @$ref_clo_pd; ?>" />
                        </p></td>
                    <td width="131" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_clo_piz" name="ref_clo_piz" value="<?php echo @$ref_clo_piz; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_clo_aud" name="ref_clo_aud" value="<?php echo @$ref_clo_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_clo_auiz" name="ref_clo_auiz" value="<?php echo @$ref_clo_auiz; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="243" valign="top"><ul>
                            <li>Babinsky</li>
                        </ul></td>
                    <td width="142" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_bab_pd" name="ref_bab_pd" value="<?php echo @$ref_bab_pd; ?>" />
                        </p></td>
                    <td width="131" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_bab_pizq" name="ref_bab_pizq" value="<?php echo @$ref_bab_pizq; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_bab_aud" name="ref_bab_aud" value="<?php echo @$ref_bab_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_bab_auizq" name="ref_bab_auizq" value="<?php echo @$ref_bab_auizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="243" valign="top"><ul>
                            <li>Sucedáneos de Babinsky</li>
                        </ul></td>
                    <td width="142" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_suc_pd" name="ref_suc_pd" value="<?php echo @$ref_suc_pd; ?>" />
                        </p></td>
                    <td width="131" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_suc_pizq" name="ref_suc_pizq" value="<?php echo @$ref_suc_pizq; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_suc_aud" name="ref_suc_aud" value="<?php echo @$ref_suc_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_suc_auizq" name="ref_suc_auizq" value="<?php echo @$ref_suc_auizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="243" valign="top"><ul>
                            <li>Gordon</li>
                        </ul></td>
                    <td width="142" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_gor_pd" name="ref_gor_pd" value="<?php echo @$ref_gor_pd; ?>" />
                        </p></td>
                    <td width="131" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_gor_pizq" name="ref_gor_pizq" value="<?php echo @$ref_gor_pizq; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_gor_aud" name="ref_gor_aud" value="<?php echo @$ref_gor_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_gor_auizq" name="ref_gor_auizq" value="<?php echo @$ref_gor_auizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="243" valign="top"><ul>
                            <li>Schafer</li>
                        </ul></td>
                    <td width="142" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_sha_pd" name="ref_sha_pd" value="<?php echo @$ref_sha_pd; ?>" />
                        </p></td>
                    <td width="131" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_sha_pizq" name="ref_sha_pizq" value="<?php echo @$ref_sha_pizq; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_sha_aud" name="ref_sha_aud" value="<?php echo @$ref_sha_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_sha_aui" name="ref_sha_aui" value="<?php echo @$ref_sha_aui; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="243" valign="top"><ul>
                            <li>Oppenheim</li>
                        </ul></td>
                    <td width="142" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_opp_pd" name="ref_opp_pd" value="<?php echo @$ref_opp_pd; ?>" />
                        </p></td>
                    <td width="131" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_opp_pizq" name="ref_opp_pizq" value="<?php echo @$ref_opp_pizq; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_opp_aud" name="ref_opp_aud" value="<?php echo @$ref_opp_aud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ref_opp_auizq" name="ref_opp_auizq" value="<?php echo @$ref_opp_auizq; ?>" />
                        </p></td>
                </tr>
            </table>
            
            <br>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>