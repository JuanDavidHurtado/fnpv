<?php
if (isset($_REQUEST['guardar_ner_sensibilidad_superficial']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_ner_sensibilidad_superficial'] == 'new') {

        $sql = "INSERT INTO ner_sensibilidad_superficial (
`id_ner_sensibilidad_superficial`,
`id_usuario`,
`historia`,
`id_proceso`,
`sup_tacnormal`,
`sup_tacanafia`,
`sup_tachipoafia`,
`sup_tachiperafia`,
`sup_calnormal`,
`sup_calterno`,
`sup_calhipot`,
`sup_calhipe`,
`sub_frionormal`,
`sup_frioacri`,
`sup_friohipo`,
`sup_frio_hiper`,
`sub_dolornormal`,
`sub_doloranalg`,
`sub_dolorhipo`,
`sub_dolorhiper`,
`pro_batidp`,
`pro_batidau`,
`pro_batipizq`,
`pro_batiauizq`,
`pro_barepd`,
`pro_bareaud`,
`pro_barepizq`,
`pro_bareauizq`,
`pro_baropd`,
`pro_baroaud`,
`pro_baropizq`,
`pro_baroauizq`,
`pro_palepd`,
`pro_paleuad`,
`pro_palepizq`,
`pro_paleauizq`,
`pro_cinepd`,
`pro_cineaud`,
`pro_cinepizq`,
`pro_cineauizq`,
`epi_disdsi`,
`epi_disdno`,
`epi_disizqsi`,
`epi_disizqno`,
`epi_gradsi`,
`epi_gradno`,
`epi_graizqsi`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`epi_graizqno`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['sup_tacnormal'] . "' ,
'" . $_REQUEST['sup_tacanafia'] . "' ,
'" . $_REQUEST['sup_tachipoafia'] . "' ,
'" . $_REQUEST['sup_tachiperafia'] . "' ,
'" . $_REQUEST['sup_calnormal'] . "' ,
'" . $_REQUEST['sup_calterno'] . "' ,
'" . $_REQUEST['sup_calhipot'] . "' ,
'" . $_REQUEST['sup_calhipe'] . "' ,
'" . $_REQUEST['sub_frionormal'] . "' ,
'" . $_REQUEST['sup_frioacri'] . "' ,
'" . $_REQUEST['sup_friohipo'] . "' ,
'" . $_REQUEST['sup_frio_hiper'] . "' ,
'" . $_REQUEST['sub_dolornormal'] . "' ,
'" . $_REQUEST['sub_doloranalg'] . "' ,
'" . $_REQUEST['sub_dolorhipo'] . "' ,
'" . $_REQUEST['sub_dolorhiper'] . "' ,
'" . $_REQUEST['pro_batidp'] . "' ,
'" . $_REQUEST['pro_batidau'] . "' ,
'" . $_REQUEST['pro_batipizq'] . "' ,
'" . $_REQUEST['pro_batiauizq'] . "' ,
'" . $_REQUEST['pro_barepd'] . "' ,
'" . $_REQUEST['pro_bareaud'] . "' ,
'" . $_REQUEST['pro_barepizq'] . "' ,
'" . $_REQUEST['pro_bareauizq'] . "' ,
'" . $_REQUEST['pro_baropd'] . "' ,
'" . $_REQUEST['pro_baroaud'] . "' ,
'" . $_REQUEST['pro_baropizq'] . "' ,
'" . $_REQUEST['pro_baroauizq'] . "' ,
'" . $_REQUEST['pro_palepd'] . "' ,
'" . $_REQUEST['pro_paleuad'] . "' ,
'" . $_REQUEST['pro_palepizq'] . "' ,
'" . $_REQUEST['pro_paleauizq'] . "' ,
'" . $_REQUEST['pro_cinepd'] . "' ,
'" . $_REQUEST['pro_cineaud'] . "' ,
'" . $_REQUEST['pro_cinepizq'] . "' ,
'" . $_REQUEST['pro_cineauizq'] . "' ,
'" . $_REQUEST['epi_disdsi'] . "' ,
'" . $_REQUEST['epi_disdno'] . "' ,
'" . $_REQUEST['epi_disizqsi'] . "' ,
'" . $_REQUEST['epi_disizqno'] . "' ,
'" . $_REQUEST['epi_gradsi'] . "' ,
'" . $_REQUEST['epi_gradno'] . "' ,
'" . $_REQUEST['epi_graizqsi'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['epi_graizqno'] . "' 
) ";
    } else if ($_REQUEST['id_ner_sensibilidad_superficial'] != '') {

        $sql = "UPDATE ner_sensibilidad_superficial set
`id_usuario` = '" . $_REQUEST['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`sup_tacnormal` = '" . $_REQUEST['sup_tacnormal'] . "' ,
`sup_tacanafia` = '" . $_REQUEST['sup_tacanafia'] . "' ,
`sup_tachipoafia` = '" . $_REQUEST['sup_tachipoafia'] . "' ,
`sup_tachiperafia` = '" . $_REQUEST['sup_tachiperafia'] . "' ,
`sup_calnormal` = '" . $_REQUEST['sup_calnormal'] . "' ,
`sup_calterno` = '" . $_REQUEST['sup_calterno'] . "' ,
`sup_calhipot` = '" . $_REQUEST['sup_calhipot'] . "' ,
`sup_calhipe` = '" . $_REQUEST['sup_calhipe'] . "' ,
`sub_frionormal` = '" . $_REQUEST['sub_frionormal'] . "' ,
`sup_frioacri` = '" . $_REQUEST['sup_frioacri'] . "' ,
`sup_friohipo` = '" . $_REQUEST['sup_friohipo'] . "' ,
`sup_frio_hiper` = '" . $_REQUEST['sup_frio_hiper'] . "' ,
`sub_dolornormal` = '" . $_REQUEST['sub_dolornormal'] . "' ,
`sub_doloranalg` = '" . $_REQUEST['sub_doloranalg'] . "' ,
`sub_dolorhipo` = '" . $_REQUEST['sub_dolorhipo'] . "' ,
`sub_dolorhiper` = '" . $_REQUEST['sub_dolorhiper'] . "' ,
`pro_batidp` = '" . $_REQUEST['pro_batidp'] . "' ,
`pro_batidau` = '" . $_REQUEST['pro_batidau'] . "' ,
`pro_batipizq` = '" . $_REQUEST['pro_batipizq'] . "' ,
`pro_batiauizq` = '" . $_REQUEST['pro_batiauizq'] . "' ,
`pro_barepd` = '" . $_REQUEST['pro_barepd'] . "' ,
`pro_bareaud` = '" . $_REQUEST['pro_bareaud'] . "' ,
`pro_barepizq` = '" . $_REQUEST['pro_barepizq'] . "' ,
`pro_bareauizq` = '" . $_REQUEST['pro_bareauizq'] . "' ,
`pro_baropd` = '" . $_REQUEST['pro_baropd'] . "' ,
`pro_baroaud` = '" . $_REQUEST['pro_baroaud'] . "' ,
`pro_baropizq` = '" . $_REQUEST['pro_baropizq'] . "' ,
`pro_baroauizq` = '" . $_REQUEST['pro_baroauizq'] . "' ,
`pro_palepd` = '" . $_REQUEST['pro_palepd'] . "' ,
`pro_paleuad` = '" . $_REQUEST['pro_paleuad'] . "' ,
`pro_palepizq` = '" . $_REQUEST['pro_palepizq'] . "' ,
`pro_paleauizq` = '" . $_REQUEST['pro_paleauizq'] . "' ,
`pro_cinepd` = '" . $_REQUEST['pro_cinepd'] . "' ,
`pro_cineaud` = '" . $_REQUEST['pro_cineaud'] . "' ,
`pro_cinepizq` = '" . $_REQUEST['pro_cinepizq'] . "' ,
`pro_cineauizq` = '" . $_REQUEST['pro_cineauizq'] . "' ,
`epi_disdsi` = '" . $_REQUEST['epi_disdsi'] . "' ,
`epi_disdno` = '" . $_REQUEST['epi_disdno'] . "' ,
`epi_disizqsi` = '" . $_REQUEST['epi_disizqsi'] . "' ,
`epi_disizqno` = '" . $_REQUEST['epi_disizqno'] . "' ,
`epi_gradsi` = '" . $_REQUEST['epi_gradsi'] . "' ,
`epi_gradno` = '" . $_REQUEST['epi_gradno'] . "' ,
`epi_graizqsi` = '" . $_REQUEST['epi_graizqsi'] . "' ,
`epi_graizqno` = '" . $_REQUEST['epi_graizqno'] . "' 
 WHERE `id_ner_sensibilidad_superficial` = '" . $_REQUEST['id_ner_sensibilidad_superficial'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_ner_sensibilidad_superficial = 'new';
$sql = "SELECT * from ner_sensibilidad_superficial WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_ner_sensibilidad_superficial = $row['id_ner_sensibilidad_superficial'];
    $sup_tacnormal = $row['sup_tacnormal'];
    $sup_tacanafia = $row['sup_tacanafia'];
    $sup_tachipoafia = $row['sup_tachipoafia'];
    $sup_tachiperafia = $row['sup_tachiperafia'];
    $sup_calnormal = $row['sup_calnormal'];
    $sup_calterno = $row['sup_calterno'];
    $sup_calhipot = $row['sup_calhipot'];
    $sup_calhipe = $row['sup_calhipe'];
    $sub_frionormal = $row['sub_frionormal'];
    $sup_frioacri = $row['sup_frioacri'];
    $sup_friohipo = $row['sup_friohipo'];
    $sup_frio_hiper = $row['sup_frio_hiper'];
    $sub_dolornormal = $row['sub_dolornormal'];
    $sub_doloranalg = $row['sub_doloranalg'];
    $sub_dolorhipo = $row['sub_dolorhipo'];
    $sub_dolorhiper = $row['sub_dolorhiper'];
    $pro_batidp = $row['pro_batidp'];
    $pro_batidau = $row['pro_batidau'];
    $pro_batipizq = $row['pro_batipizq'];
    $pro_batiauizq = $row['pro_batiauizq'];
    $pro_barepd = $row['pro_barepd'];
    $pro_bareaud = $row['pro_bareaud'];
    $pro_barepizq = $row['pro_barepizq'];
    $pro_bareauizq = $row['pro_bareauizq'];
    $pro_baropd = $row['pro_baropd'];
    $pro_baroaud = $row['pro_baroaud'];
    $pro_baropizq = $row['pro_baropizq'];
    $pro_baroauizq = $row['pro_baroauizq'];
    $pro_palepd = $row['pro_palepd'];
    $pro_paleuad = $row['pro_paleuad'];
    $pro_palepizq = $row['pro_palepizq'];
    $pro_paleauizq = $row['pro_paleauizq'];
    $pro_cinepd = $row['pro_cinepd'];
    $pro_cineaud = $row['pro_cineaud'];
    $pro_cinepizq = $row['pro_cinepizq'];
    $pro_cineauizq = $row['pro_cineauizq'];
    $epi_disdsi = $row['epi_disdsi'];
    $epi_disdno = $row['epi_disdno'];
    $epi_disizqsi = $row['epi_disizqsi'];
    $epi_disizqno = $row['epi_disizqno'];
    $epi_gradsi = $row['epi_gradsi'];
    $epi_gradno = $row['epi_gradno'];
    $epi_graizqsi = $row['epi_graizqsi'];
    $epi_graizqno = $row['epi_graizqno'];
    
    break;
}
?>
<script>

    $(function() {

        $("#close-ner_sensibilidad_superficial").click(function() {
            $("#open-ner_sensibilidad_superficial").show();
            $(this).hide();
            $("#content-ner_sensibilidad_superficial").hide('slow');
        });

        $("#open-ner_sensibilidad_superficial").click(function() {
            $("#close-ner_sensibilidad_superficial").show();
            $(this).hide();
            $("#content-ner_sensibilidad_superficial").show('slow');
        });

    });

</script>
<fieldset id="ner_sensibilidad_superficial">
    <legend align="left"> <div class="arrow-c" id="close-ner_sensibilidad_superficial"></div> <div class="arrow-o" id="open-ner_sensibilidad_superficial" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Sencibilidad superficial y profunda</font></legend>
    <div id="content-ner_sensibilidad_superficial">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_ner_sensibilidad_superficial" id="guardar_ner_sensibilidad_superficial" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_ner_sensibilidad_superficial" name="form_ner_sensibilidad_superficial" action="<?php echo @$action_form_ner_sensibilidad_superficial ?>#ner_sensibilidad_superficial" method="post">

            <input type="hidden" id="id_ner_sensibilidad_superficial" name="id_ner_sensibilidad_superficial" value="<?php echo @$id_ner_sensibilidad_superficial ?>" />


            <input type="hidden" class="input_txt valid" id="id_ner_sensibilidad_superficial" name="id_ner_sensibilidad_superficial" value="<?php echo @$id_ner_sensibilidad_superficial; ?>" />

            
            <p><strong>Superficial:</strong><br />
                Táctil: Normal:
                <input type="text" class="input_txt valid" id="sup_tacnormal" name="sup_tacnormal" value="<?php echo @$sup_tacnormal; ?>" />
                Anafia: <strong>
                    <input type="text" class="input_txt valid" id="sup_tacanafia" name="sup_tacanafia" value="<?php echo @$sup_tacanafia; ?>" />
                </strong>Hipoafia:
                <input type="text" class="input_txt valid" id="sup_tachipoafia" name="sup_tachipoafia" value="<?php echo @$sup_tachipoafia; ?>" />
                Hiperafia: <strong>
                    <input name="sup_tachiperafia" type="text" class="input_txt valid" id="sup_tachiperafia" value="<?php echo @$sup_tachiperafia; ?>" size="10" />
                </strong><br />
                Calor: Normal:
                <input type="text" class="input_txt valid" id="sup_calnormal" name="sup_calnormal" value="<?php echo @$sup_calnormal; ?>" />
                ternoalgesia:
                <input type="text" class="input_txt valid" id="sup_calterno" name="sup_calterno" value="<?php echo @$sup_calterno; ?>" />
                Hipotermoalgesia:
                <input type="text" class="input_txt valid" id="sup_calhipot" name="sup_calhipot" value="<?php echo @$sup_calhipot; ?>" />
                Hiperestesia:
                <input type="text" class="input_txt valid" id="sup_calhipe" name="sup_calhipe" value="<?php echo @$sup_calhipe; ?>" />
                <br />
                Frio: Normal: <strong>
                    <input type="text" class="input_txt valid" id="sub_frionormal" name="sub_frionormal" value="<?php echo @$sub_frionormal; ?>" />
                </strong>Acriestesia:
                <input type="text" class="input_txt valid" id="sup_frioacri" name="sup_frioacri" value="<?php echo @$sup_frioacri; ?>" />
                hipocriestesia: <strong>
                    <input type="text" class="input_txt valid" id="sup_friohipo" name="sup_friohipo" value="<?php echo @$sup_friohipo; ?>" />
                </strong>hipercriestesia:
                <input type="text" class="input_txt valid" id="sup_frio_hiper" name="sup_frio_hiper" value="<?php echo @$sup_frio_hiper; ?>" />
                <br />
                Dolor: Normal:
                <input type="text" class="input_txt valid" id="sub_dolornormal" name="sub_dolornormal" value="<?php echo @$sub_dolornormal; ?>" />
                Analgesia:
                <input type="text" class="input_txt valid" id="sub_doloranalg" name="sub_doloranalg" value="<?php echo @$sub_doloranalg; ?>" />
                hipoalgesia:
                <input type="text" class="input_txt valid" id="sub_dolorhipo" name="sub_dolorhipo" value="<?php echo @$sub_dolorhipo; ?>" />
                hiperalgesia: <strong>
                    <input type="text" class="input_txt valid" id="sub_dolorhiper" name="sub_dolorhiper" value="<?php echo @$sub_dolorhiper; ?>" />
                </strong></p>
            <p><strong>Profunda:</strong></p>
            <table  border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="144" valign="top"><p align="center">&nbsp;</p></td>
                    <td width="288" colspan="2" valign="top"><p align="center"><strong>Derecho</strong></p></td>
                    <td width="288" colspan="2" valign="top"><p align="center"><strong>Izquierdo</strong></p></td>
                </tr>
                <tr>
                    <td width="144" valign="top"><p><strong>Sensibilidad</strong></p></td>
                    <td width="144" valign="top"><p align="center"><strong>Presente</strong></p></td>
                    <td width="144" valign="top"><p align="center"><strong>Ausente</strong></p></td>
                    <td width="144" valign="top"><p align="center"><strong>Presente</strong></p></td>
                    <td width="144" valign="top"><p align="center"><strong>Ausente</strong></p></td>
                </tr>
                <tr>
                    <td width="144" valign="top"><p>Batiestesia</p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_batidp" name="pro_batidp" value="<?php echo @$pro_batidp; ?>" />
                        </p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_batidau" name="pro_batidau" value="<?php echo @$pro_batidau; ?>" />
                        </p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_batipizq" name="pro_batipizq" value="<?php echo @$pro_batipizq; ?>" />
                        </p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_batiauizq" name="pro_batiauizq" value="<?php echo @$pro_batiauizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="144" valign="top"><p>Barestesia</p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_barepd" name="pro_barepd" value="<?php echo @$pro_barepd; ?>" />
                        </p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_bareaud" name="pro_bareaud" value="<?php echo @$pro_bareaud; ?>" />
                        </p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_barepizq" name="pro_barepizq" value="<?php echo @$pro_barepizq; ?>" />
                        </p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_bareauizq" name="pro_bareauizq" value="<?php echo @$pro_bareauizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="144" valign="top"><p>Barognosia</p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_baropd" name="pro_baropd" value="<?php echo @$pro_baropd; ?>" />
                        </p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_baroaud" name="pro_baroaud" value="<?php echo @$pro_baroaud; ?>" />
                        </p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_baropizq" name="pro_baropizq" value="<?php echo @$pro_baropizq; ?>" />
                        </p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_baroauizq" name="pro_baroauizq" value="<?php echo @$pro_baroauizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="144" valign="top"><p>Palestesia</p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_palepd" name="pro_palepd" value="<?php echo @$pro_palepd; ?>" />
                        </p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_paleuad" name="pro_paleuad" value="<?php echo @$pro_paleuad; ?>" />
                        </p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_palepizq" name="pro_palepizq" value="<?php echo @$pro_palepizq; ?>" />
                        </p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_paleauizq" name="pro_paleauizq" value="<?php echo @$pro_paleauizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="144" valign="top"><p>Cinestesia</p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_cinepd" name="pro_cinepd" value="<?php echo @$pro_cinepd; ?>" />
                        </p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_cineaud" name="pro_cineaud" value="<?php echo @$pro_cineaud; ?>" />
                        </p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_cinepizq" name="pro_cinepizq" value="<?php echo @$pro_cinepizq; ?>" />
                        </p></td>
                    <td width="144" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pro_cineauizq" name="pro_cineauizq" value="<?php echo @$pro_cineauizq; ?>" />
                        </p></td>
                </tr>
            </table>
            <p><strong>Epicritica:</strong></p>
            <table  border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="234" valign="top"><p align="center">&nbsp;</p></td>
                    <td width="248" colspan="2" valign="top"><p align="center"><strong>Derecho</strong></p></td>
                    <td width="239" colspan="2" valign="top"><p align="center"><strong>Izquierdo</strong></p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p><strong>Sensibilidad</strong></p></td>
                    <td width="118" valign="top"><p align="center"><strong>Identifica</strong></p></td>
                    <td width="130" valign="top"><p align="center"><strong>No identifica</strong></p></td>
                    <td width="118" valign="top"><p align="center"><strong>Identifica</strong></p></td>
                    <td width="121" valign="top"><p align="center"><strong>No identifica</strong></p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Discriminación de 2    puntos</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="epi_disdsi" name="epi_disdsi" value="<?php echo @$epi_disdsi; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="epi_disdno" name="epi_disdno" value="<?php echo @$epi_disdno; ?>" />
                        </p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="epi_disizqsi" name="epi_disizqsi" value="<?php echo @$epi_disizqsi; ?>" />
                        </p></td>
                    <td width="121" valign="top"><p>
                            <input type="text" class="input_txt valid" id="epi_disizqno" name="epi_disizqno" value="<?php echo @$epi_disizqno; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Grafestesia</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="epi_gradsi" name="epi_gradsi" value="<?php echo @$epi_gradsi; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="epi_gradno" name="epi_gradno" value="<?php echo @$epi_gradno; ?>" />
                        </p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="epi_graizqsi" name="epi_graizqsi" value="<?php echo @$epi_graizqsi; ?>" />
                        </p></td>
                    <td width="121" valign="top"><p>
                            <input type="text" class="input_txt valid" id="epi_graizqno" name="epi_graizqno" value="<?php echo @$epi_graizqno; ?>" />
                        </p></td>
                </tr>
            </table>
            
            <br>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>