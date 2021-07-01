<?php
if (isset($_REQUEST['guardar_ner_sensibilidad_superficial1']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_ner_sensibilidad_superficial'] == 'new') {

        $sql = "INSERT INTO ner_sensibilidad_superficial (
`id_ner_sensibilidad_superficial`,
`id_usuario`,
`historia`,
`id_proceso`,
`man_trapd`,
`man_trapaud`,
`man_trapizq`,
`man_traauizq`,
`man_refpd`,
`man_refaud`,
`man_refpizq`,
`man_refauizq`,
`man_presionpd`,
`man_presionaud`,
`man_presionpizq`,
`man_presionauizq`,
`man_abopd`,
`man_aboaud`,
`man_abopizq`,
`man_aboauizq`,
`man_soupd`,
`man_souaud`,
`man_soupizq`,
`man_souau_izq`,
`man_ganpd`,
`man_ganaud`,
`man_gaupizq`,
`man_gauauizq`,
`man_latpd`,
`man_lataud`,
`man_latpizq`,
`man_latauizq`,
`man_palpd`,
`man_palaud`,
`man_palpizq`,
`man_palauizq`,
`man_cilipd`,
`man_ciliaud`,
`man_cilipizq`,
`man_ciliauizq`,
`man_esfpd`,
`man_esfaud`,
`man_esfpizq`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`man_esfauizq`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['man_trapd'] . "' ,
'" . $_REQUEST['man_trapaud'] . "' ,
'" . $_REQUEST['man_trapizq'] . "' ,
'" . $_REQUEST['man_traauizq'] . "' ,
'" . $_REQUEST['man_refpd'] . "' ,
'" . $_REQUEST['man_refaud'] . "' ,
'" . $_REQUEST['man_refpizq'] . "' ,
'" . $_REQUEST['man_refauizq'] . "' ,
'" . $_REQUEST['man_presionpd'] . "' ,
'" . $_REQUEST['man_presionaud'] . "' ,
'" . $_REQUEST['man_presionpizq'] . "' ,
'" . $_REQUEST['man_presionauizq'] . "' ,
'" . $_REQUEST['man_abopd'] . "' ,
'" . $_REQUEST['man_aboaud'] . "' ,
'" . $_REQUEST['man_abopizq'] . "' ,
'" . $_REQUEST['man_aboauizq'] . "' ,
'" . $_REQUEST['man_soupd'] . "' ,
'" . $_REQUEST['man_souaud'] . "' ,
'" . $_REQUEST['man_soupizq'] . "' ,
'" . $_REQUEST['man_souau_izq'] . "' ,
'" . $_REQUEST['man_ganpd'] . "' ,
'" . $_REQUEST['man_ganaud'] . "' ,
'" . $_REQUEST['man_gaupizq'] . "' ,
'" . $_REQUEST['man_gauauizq'] . "' ,
'" . $_REQUEST['man_latpd'] . "' ,
'" . $_REQUEST['man_lataud'] . "' ,
'" . $_REQUEST['man_latpizq'] . "' ,
'" . $_REQUEST['man_latauizq'] . "' ,
'" . $_REQUEST['man_palpd'] . "' ,
'" . $_REQUEST['man_palaud'] . "' ,
'" . $_REQUEST['man_palpizq'] . "' ,
'" . $_REQUEST['man_palauizq'] . "' ,
'" . $_REQUEST['man_cilipd'] . "' ,
'" . $_REQUEST['man_ciliaud'] . "' ,
'" . $_REQUEST['man_cilipizq'] . "' ,
'" . $_REQUEST['man_ciliauizq'] . "' ,
'" . $_REQUEST['man_esfpd'] . "' ,
'" . $_REQUEST['man_esfaud'] . "' ,
'" . $_REQUEST['man_esfpizq'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['man_esfauizq'] . "'
) ";
    } else if ($_REQUEST['id_ner_sensibilidad_superficial'] != '') {

        $sql = "UPDATE ner_sensibilidad_superficial set
`id_usuario` = '" . $_REQUEST['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`man_trapd` = '" . $_REQUEST['man_trapd'] . "' ,
`man_trapaud` = '" . $_REQUEST['man_trapaud'] . "' ,
`man_trapizq` = '" . $_REQUEST['man_trapizq'] . "' ,
`man_traauizq` = '" . $_REQUEST['man_traauizq'] . "' ,
`man_refpd` = '" . $_REQUEST['man_refpd'] . "' ,
`man_refaud` = '" . $_REQUEST['man_refaud'] . "' ,
`man_refpizq` = '" . $_REQUEST['man_refpizq'] . "' ,
`man_refauizq` = '" . $_REQUEST['man_refauizq'] . "' ,
`man_presionpd` = '" . $_REQUEST['man_presionpd'] . "' ,
`man_presionaud` = '" . $_REQUEST['man_presionaud'] . "' ,
`man_presionpizq` = '" . $_REQUEST['man_presionpizq'] . "' ,
`man_presionauizq` = '" . $_REQUEST['man_presionauizq'] . "' ,
`man_abopd` = '" . $_REQUEST['man_abopd'] . "' ,
`man_aboaud` = '" . $_REQUEST['man_aboaud'] . "' ,
`man_abopizq` = '" . $_REQUEST['man_abopizq'] . "' ,
`man_aboauizq` = '" . $_REQUEST['man_aboauizq'] . "' ,
`man_soupd` = '" . $_REQUEST['man_soupd'] . "' ,
`man_souaud` = '" . $_REQUEST['man_souaud'] . "' ,
`man_soupizq` = '" . $_REQUEST['man_soupizq'] . "' ,
`man_souau_izq` = '" . $_REQUEST['man_souau_izq'] . "' ,
`man_ganpd` = '" . $_REQUEST['man_ganpd'] . "' ,
`man_ganaud` = '" . $_REQUEST['man_ganaud'] . "' ,
`man_gaupizq` = '" . $_REQUEST['man_gaupizq'] . "' ,
`man_gauauizq` = '" . $_REQUEST['man_gauauizq'] . "' ,
`man_latpd` = '" . $_REQUEST['man_latpd'] . "' ,
`man_lataud` = '" . $_REQUEST['man_lataud'] . "' ,
`man_latpizq` = '" . $_REQUEST['man_latpizq'] . "' ,
`man_latauizq` = '" . $_REQUEST['man_latauizq'] . "' ,
`man_palpd` = '" . $_REQUEST['man_palpd'] . "' ,
`man_palaud` = '" . $_REQUEST['man_palaud'] . "' ,
`man_palpizq` = '" . $_REQUEST['man_palpizq'] . "' ,
`man_palauizq` = '" . $_REQUEST['man_palauizq'] . "' ,
`man_cilipd` = '" . $_REQUEST['man_cilipd'] . "' ,
`man_ciliaud` = '" . $_REQUEST['man_ciliaud'] . "' ,
`man_cilipizq` = '" . $_REQUEST['man_cilipizq'] . "' ,
`man_ciliauizq` = '" . $_REQUEST['man_ciliauizq'] . "' ,
`man_esfpd` = '" . $_REQUEST['man_esfpd'] . "' ,
`man_esfaud` = '" . $_REQUEST['man_esfaud'] . "' ,
`man_esfpizq` = '" . $_REQUEST['man_esfpizq'] . "' ,
`man_esfauizq` = '" . $_REQUEST['man_esfauizq'] . "' WHERE `id_ner_sensibilidad_superficial` = '" . $_REQUEST['id_ner_sensibilidad_superficial'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_ner_sensibilidad_superficial = 'new';
$sql = "SELECT * from ner_sensibilidad_superficial WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_ner_sensibilidad_superficial = $row['id_ner_sensibilidad_superficial'];
    $man_trapd = $row['man_trapd'];
    $man_trapaud = $row['man_trapaud'];
    $man_trapizq = $row['man_trapizq'];
    $man_traauizq = $row['man_traauizq'];
    $man_refpd = $row['man_refpd'];
    $man_refaud = $row['man_refaud'];
    $man_refpizq = $row['man_refpizq'];
    $man_refauizq = $row['man_refauizq'];
    $man_presionpd = $row['man_presionpd'];
    $man_presionaud = $row['man_presionaud'];
    $man_presionpizq = $row['man_presionpizq'];
    $man_presionauizq = $row['man_presionauizq'];
    $man_abopd = $row['man_abopd'];
    $man_aboaud = $row['man_aboaud'];
    $man_abopizq = $row['man_abopizq'];
    $man_aboauizq = $row['man_aboauizq'];
    $man_soupd = $row['man_soupd'];
    $man_souaud = $row['man_souaud'];
    $man_soupizq = $row['man_soupizq'];
    $man_souau_izq = $row['man_souau_izq'];
    $man_ganpd = $row['man_ganpd'];
    $man_ganaud = $row['man_ganaud'];
    $man_gaupizq = $row['man_gaupizq'];
    $man_gauauizq = $row['man_gauauizq'];
    $man_latpd = $row['man_latpd'];
    $man_lataud = $row['man_lataud'];
    $man_latpizq = $row['man_latpizq'];
    $man_latauizq = $row['man_latauizq'];
    $man_palpd = $row['man_palpd'];
    $man_palaud = $row['man_palaud'];
    $man_palpizq = $row['man_palpizq'];
    $man_palauizq = $row['man_palauizq'];
    $man_cilipd = $row['man_cilipd'];
    $man_ciliaud = $row['man_ciliaud'];
    $man_cilipizq = $row['man_cilipizq'];
    $man_ciliauizq = $row['man_ciliauizq'];
    $man_esfpd = $row['man_esfpd'];
    $man_esfaud = $row['man_esfaud'];
    $man_esfpizq = $row['man_esfpizq'];
    $man_esfauizq = $row['man_esfauizq'];
    break;
}
?>
<script>

    $(function() {

        $("#close-ner_sensibilidad_superficial1").click(function() {
            $("#open-ner_sensibilidad_superficial1").show();
            $(this).hide();
            $("#content-ner_sensibilidad_superficial1").hide('slow');
        });

        $("#open-ner_sensibilidad_superficial1").click(function() {
            $("#close-ner_sensibilidad_superficial1").show();
            $(this).hide();
            $("#content-ner_sensibilidad_superficial1").show('slow');
        });

    });

</script>
<fieldset id="ner_sensibilidad_superficial1">
    <legend align="left"> <div class="arrow-c" id="close-ner_sensibilidad_superficial1"></div> <div class="arrow-o" id="open-ner_sensibilidad_superficial1" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Evaluacion de la Mano</font></legend>
    <div id="content-ner_sensibilidad_superficial1">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_ner_sensibilidad_superficial1" id="guardar_ner_sensibilidad_superficial1" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_ner_sensibilidad_superficial1" name="form_ner_sensibilidad_superficial1" action="<?php echo @$action_form_ner_sensibilidad_superficial1 ?>#ner_sensibilidad_superficial1" method="post">

            <input type="hidden" id="id_ner_sensibilidad_superficial" name="id_ner_sensibilidad_superficial" value="<?php echo @$id_ner_sensibilidad_superficial ?>" />


            <input type="hidden" class="input_txt valid" id="id_ner_sensibilidad_superficial" name="id_ner_sensibilidad_superficial" value="<?php echo @$id_ner_sensibilidad_superficial; ?>" />

            
            <table  border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="234" valign="top"><p align="center">&nbsp;</p></td>
                    <td width="248" colspan="2" valign="top"><p align="center"><strong>Derecho</strong></p></td>
                    <td width="245" colspan="2" valign="top"><p align="center"><strong>Izquierdo</strong></p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p><strong>Respuesta o fenómeno</strong></p></td>
                    <td width="118" valign="top"><p align="center"><strong>Presente</strong></p></td>
                    <td width="130" valign="top"><p align="center"><strong>Ausente</strong></p></td>
                    <td width="130" valign="top"><p align="center"><strong>Presente</strong></p></td>
                    <td width="115" valign="top"><p align="center"><strong>Ausente</strong></p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Respuesta de    tracción propioceptiva</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_trapd" name="man_trapd" value="<?php echo @$man_trapd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_trapaud" name="man_trapaud" value="<?php echo @$man_trapaud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_trapizq" name="man_trapizq" value="<?php echo @$man_trapizq; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_traauizq" name="man_traauizq" value="<?php echo @$man_traauizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Verdadero reflejo    de prensión</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_refpd" name="man_refpd" value="<?php echo @$man_refpd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_refaud" name="man_refaud" value="<?php echo @$man_refaud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_refpizq" name="man_refpizq" value="<?php echo @$man_refpizq; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_refauizq" name="man_refauizq" value="<?php echo @$man_refauizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Reacción instintiva    de prensión</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_presionpd" name="man_presionpd" value="<?php echo @$man_presionpd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_presionaud" name="man_presionaud" value="<?php echo @$man_presionaud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_presionpizq" name="man_presionpizq" value="<?php echo @$man_presionpizq; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_presionauizq" name="man_presionauizq" value="<?php echo @$man_presionauizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Reacción instintiva    de abolición</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_abopd" name="man_abopd" value="<?php echo @$man_abopd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_aboaud" name="man_aboaud" value="<?php echo @$man_aboaud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_abopizq" name="man_abopizq" value="<?php echo @$man_abopizq; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_aboauizq" name="man_aboauizq" value="<?php echo @$man_aboauizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Dedos de Souques</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_soupd" name="man_soupd" value="<?php echo @$man_soupd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_souaud" name="man_souaud" value="<?php echo @$man_souaud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_soupizq" name="man_soupizq" value="<?php echo @$man_soupizq; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_souau_izq" name="man_souau_izq" value="<?php echo @$man_souau_izq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Prensión en gancho</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_ganpd" name="man_ganpd" value="<?php echo @$man_ganpd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_ganaud" name="man_ganaud" value="<?php echo @$man_ganaud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_gaupizq" name="man_gaupizq" value="<?php echo @$man_gaupizq; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_gauauizq" name="man_gauauizq" value="<?php echo @$man_gauauizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Prensión lateral</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_latpd" name="man_latpd" value="<?php echo @$man_latpd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_lataud" name="man_lataud" value="<?php echo @$man_lataud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_latpizq" name="man_latpizq" value="<?php echo @$man_latpizq; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_latauizq" name="man_latauizq" value="<?php echo @$man_latauizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Prensión palmar</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_palpd" name="man_palpd" value="<?php echo @$man_palpd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_palaud" name="man_palaud" value="<?php echo @$man_palaud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_palpizq" name="man_palpizq" value="<?php echo @$man_palpizq; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_palauizq" name="man_palauizq" value="<?php echo @$man_palauizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Prensión cilíndrica</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_cilipd" name="man_cilipd" value="<?php echo @$man_cilipd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_ciliaud" name="man_ciliaud" value="<?php echo @$man_ciliaud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_cilipizq" name="man_cilipizq" value="<?php echo @$man_cilipizq; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_ciliauizq" name="man_ciliauizq" value="<?php echo @$man_ciliauizq; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="234" valign="top"><p>Prensión esférica</p></td>
                    <td width="118" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_esfpd" name="man_esfpd" value="<?php echo @$man_esfpd; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_esfaud" name="man_esfaud" value="<?php echo @$man_esfaud; ?>" />
                        </p></td>
                    <td width="130" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_esfpizq" name="man_esfpizq" value="<?php echo @$man_esfpizq; ?>" />
                        </p></td>
                    <td width="115" valign="top"><p>
                            <input type="text" class="input_txt valid" id="man_esfauizq" name="man_esfauizq" value="<?php echo @$man_esfauizq; ?>" />
                        </p></td>
                </tr>
            </table>
            <p>&nbsp;</p>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>