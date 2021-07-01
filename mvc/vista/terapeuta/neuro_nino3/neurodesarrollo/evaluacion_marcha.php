<?php
if (isset($_REQUEST['guardar_h1_evaluacion_marcha_nino']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_evaluacion_marcha_nino'] == 'new') {

        $sql = "INSERT INTO h1_evaluacion_marcha_nino (
`id_evaluacion_marcha_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`marcha_ob`,
`l_paso`,
`l_paso_completo`,
`talon_d`,
`talon_i`,
`plan_d`,
`plan_i`,
`medio_d`,
`medio_i`,
`dtalon_d`,
`dtalon_i`,
`dpie_d`,
`dpie_i`,
`apo_d`,
`apo_i`,
`acele_d`,
`acele_i`,
`balan_d`,
`balan_i`,
`desac_d`,
`desac_i`,
`apli_s`,
`apli_n`,
`fmgrues`,
`aditamentos_s`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`aditamentos_n`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['marcha_ob'] . "' ,
'" . $_REQUEST['l_paso'] . "' ,
'" . $_REQUEST['l_paso_completo'] . "' ,
'" . $_REQUEST['talon_d'] . "' ,
'" . $_REQUEST['talon_i'] . "' ,
'" . $_REQUEST['plan_d'] . "' ,
'" . $_REQUEST['plan_i'] . "' ,
'" . $_REQUEST['medio_d'] . "' ,
'" . $_REQUEST['medio_i'] . "' ,
'" . $_REQUEST['dtalon_d'] . "' ,
'" . $_REQUEST['dtalon_i'] . "' ,
'" . $_REQUEST['dpie_d'] . "' ,
'" . $_REQUEST['dpie_i'] . "' ,
'" . $_REQUEST['apo_d'] . "' ,
'" . $_REQUEST['apo_i'] . "' ,
'" . $_REQUEST['acele_d'] . "' ,
'" . $_REQUEST['acele_i'] . "' ,
'" . $_REQUEST['balan_d'] . "' ,
'" . $_REQUEST['balan_i'] . "' ,
'" . $_REQUEST['desac_d'] . "' ,
'" . $_REQUEST['desac_i'] . "' ,
'" . $_REQUEST['apli_s'] . "' ,
'" . $_REQUEST['apli_n'] . "' ,
'" . $_REQUEST['fmgrues'] . "' ,
'" . $_REQUEST['aditamentos_s'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['aditamentos_n'] . "' 
) ";
    } else if ($_REQUEST['id_evaluacion_marcha_nino'] != '') {

        $sql = "UPDATE h1_evaluacion_marcha_nino set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`marcha_ob` = '" . $_REQUEST['marcha_ob'] . "' ,
`l_paso` = '" . $_REQUEST['l_paso'] . "' ,
`l_paso_completo` = '" . $_REQUEST['l_paso_completo'] . "' ,
`talon_d` = '" . $_REQUEST['talon_d'] . "' ,
`talon_i` = '" . $_REQUEST['talon_i'] . "' ,
`plan_d` = '" . $_REQUEST['plan_d'] . "' ,
`plan_i` = '" . $_REQUEST['plan_i'] . "' ,
`medio_d` = '" . $_REQUEST['medio_d'] . "' ,
`medio_i` = '" . $_REQUEST['medio_i'] . "' ,
`dtalon_d` = '" . $_REQUEST['dtalon_d'] . "' ,
`dtalon_i` = '" . $_REQUEST['dtalon_i'] . "' ,
`dpie_d` = '" . $_REQUEST['dpie_d'] . "' ,
`dpie_i` = '" . $_REQUEST['dpie_i'] . "' ,
`apo_d` = '" . $_REQUEST['apo_d'] . "' ,
`apo_i` = '" . $_REQUEST['apo_i'] . "' ,
`acele_d` = '" . $_REQUEST['acele_d'] . "' ,
`acele_i` = '" . $_REQUEST['acele_i'] . "' ,
`balan_d` = '" . $_REQUEST['balan_d'] . "' ,
`balan_i` = '" . $_REQUEST['balan_i'] . "' ,
`desac_d` = '" . $_REQUEST['desac_d'] . "' ,
`desac_i` = '" . $_REQUEST['desac_i'] . "' ,
`apli_s` = '" . $_REQUEST['apli_s'] . "' ,
`apli_n` = '" . $_REQUEST['apli_n'] . "' ,
`fmgrues` = '" . $_REQUEST['fmgrues'] . "' ,
`aditamentos_s` = '" . $_REQUEST['aditamentos_s'] . "' ,
`aditamentos_n` = '" . $_REQUEST['aditamentos_n'] . "'  WHERE `id_evaluacion_marcha_nino` = '" . $_REQUEST['id_evaluacion_marcha_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_evaluacion_marcha_nino = 'new';
$sql = "SELECT * from h1_evaluacion_marcha_nino WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_evaluacion_marcha_nino = $row['id_evaluacion_marcha_nino'];
   
    $marcha_ob = $row['marcha_ob'];
    $l_paso = $row['l_paso'];
    $l_paso_completo = $row['l_paso_completo'];
    $talon_d = $row['talon_d'];
    $talon_i = $row['talon_i'];
    $plan_d = $row['plan_d'];
    $plan_i = $row['plan_i'];
    $medio_d = $row['medio_d'];
    $medio_i = $row['medio_i'];
    $dtalon_d = $row['dtalon_d'];
    $dtalon_i = $row['dtalon_i'];
    $dpie_d = $row['dpie_d'];
    $dpie_i = $row['dpie_i'];
    $apo_d = $row['apo_d'];
    $apo_i = $row['apo_i'];
    $acele_d = $row['acele_d'];
    $acele_i = $row['acele_i'];
    $balan_d = $row['balan_d'];
    $balan_i = $row['balan_i'];
    $desac_d = $row['desac_d'];
    $desac_i = $row['desac_i'];
    $apli_s = $row['apli_s'];
    $apli_n = $row['apli_n'];
    $fmgrues = $row['fmgrues'];
    $aditamentos_s = $row['aditamentos_s'];
    $aditamentos_n = $row['aditamentos_n'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h1_evaluacion_marcha_nino").click(function() {
            $("#open-h1_evaluacion_marcha_nino").show();
            $(this).hide();
            $("#content-h1_evaluacion_marcha_nino").hide('slow');
        });

        $("#open-h1_evaluacion_marcha_nino").click(function() {
            $("#close-h1_evaluacion_marcha_nino").show();
            $(this).hide();
            $("#content-h1_evaluacion_marcha_nino").show('slow');
        });

    });

</script>
<fieldset id="h1_evaluacion_marcha_nino">
    <legend align="left"> <div class="arrow-c" id="close-h1_evaluacion_marcha_nino"></div> <div class="arrow-o" id="open-h1_evaluacion_marcha_nino" ></div> <font>Valoracion fisioterapia de neurodesarrollo - Evaluacion marcha</font></legend>
    <div id="content-h1_evaluacion_marcha_nino">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_h1_evaluacion_marcha_nino" id="guardar_h1_evaluacion_marcha_nino" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
        <form id="form_h1_evaluacion_marcha_nino" name="form_h1_evaluacion_marcha_nino" action="<?php echo @$action_form_h1_evaluacion_marcha_nino ?>#h1_evaluacion_marcha_nino" method="post">

            <input type="hidden" id="id_evaluacion_marcha_nino" name="id_evaluacion_marcha_nino" value="<?php echo @$id_evaluacion_marcha_nino ?>" />

            <p>Observación:
                <input type="text" class="input_txt valid" id="marcha_ob" name="marcha_ob" value="<?php echo @$marcha_ob; ?>" />
            </p>
            <p>Longitud de paso:<strong>
                    <input type="text" class="input_txt valid" id="l_paso" name="l_paso" value="<?php echo @$l_paso; ?>" />
                      </strong>Longitud de paso completo:<strong>
                    <input type="text" class="input_txt valid" id="l_paso_completo" name="l_paso_completo" value="<?php echo @$l_paso_completo; ?>" />
                </strong></p>
            <table border="0" class="data" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="240" valign="top"><p align="center"><strong>FASE APOYO</strong></p></td>
                    <td width="240" valign="top"><p align="center"><strong>DERECHO</strong></p></td>
                    <td width="240" valign="top"><p align="center"><strong>IZQUIERDO</strong></p></td>
                </tr>
                <tr>
                    <td width="240" valign="top"><p>Apoyo talón</p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="talon_d" name="talon_d" value="<?php echo @$talon_d; ?>" />
                        </p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="talon_i" name="talon_i" value="<?php echo @$talon_i; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="240" valign="top"><p>Apoyo Plantar</p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="plan_d" name="plan_d" value="<?php echo @$plan_d; ?>" />
                        </p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="plan_i" name="plan_i" value="<?php echo @$plan_i; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="240" valign="top"><p>Apoyo Medio</p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="medio_d" name="medio_d" value="<?php echo @$medio_d; ?>" />
                        </p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="medio_i" name="medio_i" value="<?php echo @$medio_i; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="240" valign="top"><p>Despegue Talón</p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="dtalon_d" name="dtalon_d" value="<?php echo @$dtalon_d; ?>" />
                        </p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="dtalon_i" name="dtalon_i" value="<?php echo @$dtalon_i; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="240" valign="top"><p>Despegue del Pie</p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="dpie_d" name="dpie_d" value="<?php echo @$dpie_d; ?>" />
                        </p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="dpie_i" name="dpie_i" value="<?php echo @$dpie_i; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="240" valign="top"><p>Duración Apoyo</p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="apo_d" name="apo_d" value="<?php echo @$apo_d; ?>" />
                        </p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="apo_i" name="apo_i" value="<?php echo @$apo_i; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="240" valign="top"><p align="center"><strong>FASE BALANCEO</strong></p></td>
                    <td width="240" valign="top"><p align="center"><strong>DERECHO</strong></p></td>
                    <td width="240" valign="top"><p align="center"><strong>IZQUIERDO</strong></p></td>
                </tr>
                <tr>
                    <td width="240" valign="top"><p>Aceleración</p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="acele_d" name="acele_d" value="<?php echo @$acele_d; ?>" />
                        </p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="acele_i" name="acele_i" value="<?php echo @$acele_i; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="240" valign="top"><p>Balanceo medio</p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="balan_d" name="balan_d" value="<?php echo @$balan_d; ?>" />
                        </p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="balan_i" name="balan_i" value="<?php echo @$balan_i; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="240" valign="top"><p>Desaceleración</p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="desac_d" name="desac_d" value="<?php echo @$desac_d; ?>" />
                        </p></td>
                    <td width="240" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="desac_i" name="desac_i" value="<?php echo @$desac_i; ?>" />
                        </p></td>
                </tr>
            </table>
            <p><strong>FUNCIÓN MOTORA GRUESA (Gross Motor funtion GMFM):
                    <input type="text" class="input_txt valid" id="fmgrues" name="fmgrues" value="<?php echo @$fmgrues; ?>" />
                    % de función  motora gruesa</strong></p>
            <p><strong>Evaluación realizada con aditamentos: SI
                    <input type="text" class="input_txt valid" id="aditamentos_s" name="aditamentos_s" value="<?php echo @$aditamentos_s; ?>" />
                        NO
                    <input type="text" class="input_txt valid" id="aditamentos_n" name="aditamentos_n" value="<?php echo @$aditamentos_n; ?>" />
                </strong></p>
            
                <br>
<?php echo @$button ?>
        </form><br>
    </div>
</fieldset>