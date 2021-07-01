<?php
if (isset($_REQUEST['guardar_nervio_hipogloso']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_nervio_hipogloso'] == 'new') {

        $sql = "INSERT INTO nervio_hipogloso (
`id_nervio_hipogloso`,
`id_usuario`,
`historia`,
`id_proceso`,
`mus_des`,
`hipo_oserv`,
`piel_anexos`,
`ag_sinal`,
`color_cro`,
`prosopo`,
`desa_visual`,
`au_sinal`,
`au_verbal`,
`au_nverbal`,
`au_musica`,
`au_afec`,
`tactil_sinal`,
`tac_astero`,
`tac_amor`,
`tac_afasia`,
`pra_sinal`,
`pra_ideomotriz`,
`pra_ideaccional`,
`pra_marcha`,
`pra_troncopedal`,
`pra_meloqui`,
`pra_simpatica`,
`pra_callosa`,
`pra_bucolin`,
`pra_acumlo`,
`pra_construc`,
`pra_vestido`,
`mental_orientacion`,
`mental_atencion`,
`mental_memoria`,
`mental_abstraccion`,
`mental_compa`,
`mental_juicio`,
`mental_calculo`,
`esquemacorpo_sinal`,
`esquema_negli`,
`esquema_anosog`,
`esquema_digital`,
`t1`,
`t2`,
`t3`,
`t4`,
`t5`,
`t6`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`esque_discrimi`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['mus_des'] . "' ,
'" . $_REQUEST['hipo_oserv'] . "' ,
'" . $_REQUEST['piel_anexos'] . "' ,
'" . $_REQUEST['ag_sinal'] . "' ,
'" . $_REQUEST['color_cro'] . "' ,
'" . $_REQUEST['prosopo'] . "' ,
'" . $_REQUEST['desa_visual'] . "' ,
'" . $_REQUEST['au_sinal'] . "' ,
'" . $_REQUEST['au_verbal'] . "' ,
'" . $_REQUEST['au_nverbal'] . "' ,
'" . $_REQUEST['au_musica'] . "' ,
'" . $_REQUEST['au_afec'] . "' ,
'" . $_REQUEST['tactil_sinal'] . "' ,
'" . $_REQUEST['tac_astero'] . "' ,
'" . $_REQUEST['tac_amor'] . "' ,
'" . $_REQUEST['tac_afasia'] . "' ,
'" . $_REQUEST['pra_sinal'] . "' ,
'" . $_REQUEST['pra_ideomotriz'] . "' ,
'" . $_REQUEST['pra_ideaccional'] . "' ,
'" . $_REQUEST['pra_marcha'] . "' ,
'" . $_REQUEST['pra_troncopedal'] . "' ,
'" . $_REQUEST['pra_meloqui'] . "' ,
'" . $_REQUEST['pra_simpatica'] . "' ,
'" . $_REQUEST['pra_callosa'] . "' ,
'" . $_REQUEST['pra_bucolin'] . "' ,
'" . $_REQUEST['pra_acumlo'] . "' ,
'" . $_REQUEST['pra_construc'] . "' ,
'" . $_REQUEST['pra_vestido'] . "' ,
'" . $_REQUEST['mental_orientacion'] . "' ,
'" . $_REQUEST['mental_atencion'] . "' ,
'" . $_REQUEST['mental_memoria'] . "' ,
'" . $_REQUEST['mental_abstraccion'] . "' ,
'" . $_REQUEST['mental_compa'] . "' ,
'" . $_REQUEST['mental_juicio'] . "' ,
'" . $_REQUEST['mental_calculo'] . "' ,
'" . $_REQUEST['esquemacorpo_sinal'] . "' ,
'" . $_REQUEST['esquema_negli'] . "' ,
'" . $_REQUEST['esquema_anosog'] . "' ,
'" . $_REQUEST['esquema_digital'] . "' ,
'" . $_REQUEST['t1'] . "' ,
'" . $_REQUEST['t2'] . "' ,
'" . $_REQUEST['t3'] . "' ,
'" . $_REQUEST['t4'] . "' ,
'" . $_REQUEST['t5'] . "' ,
'" . $_REQUEST['t6'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['esque_discrimi'] . "'
) ";
    } else if ($_REQUEST['id_nervio_hipogloso'] != '') {

        $sql = "UPDATE nervio_hipogloso set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`mus_des` = '" . $_REQUEST['mus_des'] . "' ,
`hipo_oserv` = '" . $_REQUEST['hipo_oserv'] . "' ,
`piel_anexos` = '" . $_REQUEST['piel_anexos'] . "' ,
`ag_sinal` = '" . $_REQUEST['ag_sinal'] . "' ,
`color_cro` = '" . $_REQUEST['color_cro'] . "' ,
`prosopo` = '" . $_REQUEST['prosopo'] . "' ,
`desa_visual` = '" . $_REQUEST['desa_visual'] . "' ,
`au_sinal` = '" . $_REQUEST['au_sinal'] . "' ,
`au_verbal` = '" . $_REQUEST['au_verbal'] . "' ,
`au_nverbal` = '" . $_REQUEST['au_nverbal'] . "' ,
`au_musica` = '" . $_REQUEST['au_musica'] . "' ,
`au_afec` = '" . $_REQUEST['au_afec'] . "' ,
`tactil_sinal` = '" . $_REQUEST['tactil_sinal'] . "' ,
`tac_astero` = '" . $_REQUEST['tac_astero'] . "' ,
`tac_amor` = '" . $_REQUEST['tac_amor'] . "' ,
`tac_afasia` = '" . $_REQUEST['tac_afasia'] . "' ,
`pra_sinal` = '" . $_REQUEST['pra_sinal'] . "' ,
`pra_ideomotriz` = '" . $_REQUEST['pra_ideomotriz'] . "' ,
`pra_ideaccional` = '" . $_REQUEST['pra_ideaccional'] . "' ,
`pra_marcha` = '" . $_REQUEST['pra_marcha'] . "' ,
`pra_troncopedal` = '" . $_REQUEST['pra_troncopedal'] . "' ,
`pra_meloqui` = '" . $_REQUEST['pra_meloqui'] . "' ,
`pra_simpatica` = '" . $_REQUEST['pra_simpatica'] . "' ,
`pra_callosa` = '" . $_REQUEST['pra_callosa'] . "' ,
`pra_bucolin` = '" . $_REQUEST['pra_bucolin'] . "' ,
`pra_acumlo` = '" . $_REQUEST['pra_acumlo'] . "' ,
`pra_construc` = '" . $_REQUEST['pra_construc'] . "' ,
`pra_vestido` = '" . $_REQUEST['pra_vestido'] . "' ,
`mental_orientacion` = '" . $_REQUEST['mental_orientacion'] . "' ,
`mental_atencion` = '" . $_REQUEST['mental_atencion'] . "' ,
`mental_memoria` = '" . $_REQUEST['mental_memoria'] . "' ,
`mental_abstraccion` = '" . $_REQUEST['mental_abstraccion'] . "' ,
`mental_compa` = '" . $_REQUEST['mental_compa'] . "' ,
`mental_juicio` = '" . $_REQUEST['mental_juicio'] . "' ,
`mental_calculo` = '" . $_REQUEST['mental_calculo'] . "' ,
`esquemacorpo_sinal` = '" . $_REQUEST['esquemacorpo_sinal'] . "' ,
`esquema_negli` = '" . $_REQUEST['esquema_negli'] . "' ,
`esquema_anosog` = '" . $_REQUEST['esquema_anosog'] . "' ,
`esquema_digital` = '" . $_REQUEST['esquema_digital'] . "' ,
`t1` = '" . $_REQUEST['t1'] . "' ,
`t2` = '" . $_REQUEST['t2'] . "' ,
`t3` = '" . $_REQUEST['t3'] . "' ,
`t4` = '" . $_REQUEST['t4'] . "' ,
`t5` = '" . $_REQUEST['t5'] . "' ,
`t6` = '" . $_REQUEST['t6'] . "' ,
`esque_discrimi` = '" . $_REQUEST['esque_discrimi'] . "' WHERE `id_nervio_hipogloso` = '" . $_REQUEST['id_nervio_hipogloso'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_nervio_hipogloso = 'new';
$sql = "SELECT * from nervio_hipogloso WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_nervio_hipogloso = $row['id_nervio_hipogloso'];

    $mus_des = $row['mus_des'];
    $hipo_oserv = $row['hipo_oserv'];
    $piel_anexos = $row['piel_anexos'];
    $ag_sinal = $row['ag_sinal'];
    $color_cro = $row['color_cro'];
    $prosopo = $row['prosopo'];
    $desa_visual = $row['desa_visual'];
    $au_sinal = $row['au_sinal'];
    $au_verbal = $row['au_verbal'];
    $au_nverbal = $row['au_nverbal'];
    $au_musica = $row['au_musica'];
    $au_afec = $row['au_afec'];
    $tactil_sinal = $row['tactil_sinal'];
    $tac_astero = $row['tac_astero'];
    $tac_amor = $row['tac_amor'];
    $tac_afasia = $row['tac_afasia'];
    $pra_sinal = $row['pra_sinal'];
    $pra_ideomotriz = $row['pra_ideomotriz'];
    $pra_ideaccional = $row['pra_ideaccional'];
    $pra_marcha = $row['pra_marcha'];
    $pra_troncopedal = $row['pra_troncopedal'];
    $pra_meloqui = $row['pra_meloqui'];
    $pra_simpatica = $row['pra_simpatica'];
    $pra_callosa = $row['pra_callosa'];
    $pra_bucolin = $row['pra_bucolin'];
    $pra_acumlo = $row['pra_acumlo'];
    $pra_construc = $row['pra_construc'];
    $pra_vestido = $row['pra_vestido'];
    $mental_orientacion = $row['mental_orientacion'];
    $mental_atencion = $row['mental_atencion'];
    $mental_memoria = $row['mental_memoria'];
    $mental_abstraccion = $row['mental_abstraccion'];
    $mental_compa = $row['mental_compa'];
    $mental_juicio = $row['mental_juicio'];
    $mental_calculo = $row['mental_calculo'];
    $esquemacorpo_sinal = $row['esquemacorpo_sinal'];
    $esquema_negli = $row['esquema_negli'];
    $esquema_anosog = $row['esquema_anosog'];
    $esquema_digital = $row['esquema_digital'];
    $esque_discrimi = $row['esque_discrimi'];
    $t1 = $row['t1'];
    $t2 = $row['t2'];
    $t3 = $row['t3'];
    $t4 = $row['t4'];
    $t5 = $row['t5'];
    $t6 = $row['t6'];
    
    break;
}
?>
<script>

    $(function() {

        $("#close-nervio_hipogloso").click(function() {
            $("#open-nervio_hipogloso").show();
            $(this).hide();
            $("#content-nervio_hipogloso").hide('slow');
        });

        $("#open-nervio_hipogloso").click(function() {
            $("#close-nervio_hipogloso").show();
            $(this).hide();
            $("#content-nervio_hipogloso").show('slow');
        });

    });

</script>
<fieldset id="nervio_hipogloso">
    <legend align="left"> <div class="arrow-c" id="close-nervio_hipogloso"></div> <div class="arrow-o" id="open-nervio_hipogloso" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Nervio hipogloso</font></legend>
    <div id="content-nervio_hipogloso">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_nervio_hipogloso" id="guardar_nervio_hipogloso" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_nervio_hipogloso" name="form_nervio_hipogloso" action="<?php echo @$action_form_nervio_hipogloso ?>#nervio_hipogloso" method="post">

            <input type="hidden" id="id_nervio_hipogloso" name="id_nervio_hipogloso" value="<?php echo @$id_nervio_hipogloso ?>" />

            <input type="hidden" class="input_txt valid" id="id_nervio_hipogloso" name="id_nervio_hipogloso" value="<?php echo @$id_nervio_hipogloso; ?>" />


            <p>Músculos  geniogloso, estilogloso, hiogloso:
                <input type="text" class="input_txt valid" id="mus_des" name="mus_des" value="<?php echo @$mus_des; ?>" />
            </p>
            <p><strong>OBSERVACIONES:
                    <input type="text" class="input_txt valid" id="hipo_oserv" name="hipo_oserv" value="<?php echo @$hipo_oserv; ?>" />
                </strong></p>
            <ul>
                <li><strong>C. PIEL Y  ANEXOS:</strong></li>
            </ul>
            <table border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="720" valign="top"><p><strong>&nbsp;</strong>
                            <input type="text" class="input_txt valid" id="piel_anexos" name="piel_anexos" value="<?php echo @$piel_anexos; ?>" />
                        </p>
                        <p><strong>&nbsp;</strong></p></td>
                </tr>
            </table>
            <ul>
                <li><strong>D. GNOSIAS Y  PRAXIAS:</strong></li>
            </ul>
            <p>Agnosia  visual:<strong> </strong>sin alteración
                <input type="text" class="input_txt valid" id="ag_sinal" name="ag_sinal" value="<?php echo @$ag_sinal; ?>" />
            </p>
            <ul>
                <li>Anomia de color o cromática:
                    <input type="text" class="input_txt valid" id="color_cro" name="color_cro" value="<?php echo @$color_cro; ?>" />
                </li>
                <li>Prosopoagnosia:
                    <input type="text" class="input_txt valid" id="prosopo" name="prosopo" value="<?php echo @$prosopo; ?>" />
                </li>
                <li>Desatención visual:
                    <input type="text" class="input_txt valid" id="desa_visual" name="desa_visual" value="<?php echo @$desa_visual; ?>" />
                </li>
            </ul>
            <p>Agnosia  auditiva:<strong> </strong>sin alteración
                <input type="text" class="input_txt valid" id="au_sinal" name="au_sinal" value="<?php echo @$au_sinal; ?>" />
            </p>
            <ul>
                <li>Agnosia verbal:
                    <input type="text" class="input_txt valid" id="au_verbal" name="au_verbal" value="<?php echo @$au_verbal; ?>" />
                </li>
                <li>Agnosia no verbal:
                    <input type="text" class="input_txt valid" id="au_nverbal" name="au_nverbal" value="<?php echo @$au_nverbal; ?>" />
                </li>
                <li>Agnosia para la música:
                    <input type="text" class="input_txt valid" id="au_musica" name="au_musica" value="<?php echo @$au_musica; ?>" />
                </li>
                <li>Agnosias afectivas:
                    <input type="text" class="input_txt valid" id="au_afec" name="au_afec" value="<?php echo @$au_afec; ?>" />
                </li>
            </ul>
            <p>Agnosia  táctil: sin alteración
                <input type="text" class="input_txt valid" id="tactil_sinal" name="tactil_sinal" value="<?php echo @$tactil_sinal; ?>" /></p>
            <ul>
                <li>Asterognosia:
                    <input type="text" class="input_txt valid" id="tac_astero" name="tac_astero" value="<?php echo @$tac_astero; ?>" />
                </li>
                <li>Amorfognosia:<strong>
                        <input type="text" class="input_txt valid" id="tac_amor" name="tac_amor" value="<?php echo @$tac_amor; ?>" />
                    </strong></li>
                <li>Afasia táctil:
                    <input type="text" class="input_txt valid" id="tac_afasia" name="tac_afasia" value="<?php echo @$tac_afasia; ?>" />
                    <strong> </strong></li>
            </ul>
            <p><strong>Praxias: </strong>sin alteración
                <input type="text" class="input_txt valid" id="pra_sinal" name="pra_sinal" value="<?php echo @$pra_sinal; ?>" />
                <br />
                Apraxia  ideomotriz:
                <input type="text" class="input_txt valid" id="pra_ideomotriz" name="pra_ideomotriz" value="<?php echo @$pra_ideomotriz; ?>" />
                <br />
                Apraxia  ideacional:
                <input type="text" class="input_txt valid" id="pra_ideaccional" name="pra_ideaccional" value="<?php echo @$pra_ideaccional; ?>" />
                <br />
                Apraxia de la  marcha:
                <input type="text" class="input_txt valid" id="pra_marcha" name="pra_marcha" value="<?php echo @$pra_marcha; ?>" />
                <br />
                Apraxia troncopedal:
                <input type="text" class="input_txt valid" id="pra_troncopedal" name="pra_troncopedal" value="<?php echo @$pra_troncopedal; ?>" />
                <br />
                Apraxia  meloquinetica:
                <input type="text" class="input_txt valid" id="pra_meloqui" name="pra_meloqui" value="<?php echo @$pra_meloqui; ?>" />
                <br />
                Apraxia simpática:
                <input type="text" class="input_txt valid" id="pra_simpatica" name="pra_simpatica" value="<?php echo @$pra_simpatica; ?>" />
                <br />
                Apraxia  callosa:
                <input type="text" class="input_txt valid" id="pra_callosa" name="pra_callosa" value="<?php echo @$pra_callosa; ?>" />
                <br />
                Apraxia  bucolinguofacial:
                <input type="text" class="input_txt valid" id="pra_bucolin" name="pra_bucolin" value="<?php echo @$pra_bucolin; ?>" />
                <br />
                Apraxia  oculomotriz:
                <input type="text" class="input_txt valid" id="pra_acumlo" name="pra_acumlo" value="<?php echo @$pra_acumlo; ?>" />
                <br />
                Apraxia  construccional:
                <input type="text" class="input_txt valid" id="pra_construc" name="pra_construc" value="<?php echo @$pra_construc; ?>" />
                <br />
                Apraxia del  vestido:
                <input type="text" class="input_txt valid" id="pra_vestido" name="pra_vestido" value="<?php echo @$pra_vestido; ?>" /></p>
            <ul>
                <li><strong>E. FUNCIONES  MENTALES SUPERIORES:</strong></li>
            </ul>
            <p>Orientación:</p>
            <table  border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="720" valign="top"><p>
                            <input type="text" class="input_txt valid" id="mental_orientacion" name="mental_orientacion" value="<?php echo @$mental_orientacion; ?>" />
                        </p>
                        <p>&nbsp;</p></td>
                </tr>
            </table>
            <p>Atención:</p>
            <table border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="720" valign="top"><p>
                            <input type="text" class="input_txt valid" id="mental_memoria" name="mental_memoria" value="<?php echo @$mental_memoria; ?>" />
                        </p>
                        <p> </p></td>
                </tr>
            </table>
            <p>Memoria:</p>
            <table border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="720" valign="top"><p>
                            <input type="text" class="input_txt valid" id="mental_atencion" name="mental_atencion" value="<?php echo @$mental_atencion; ?>" />
                        </p>
                        <p>&nbsp;</p></td>
                </tr>
            </table>
            <p>Abstracción:</p>
            <table border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="720" valign="top"><p>
                            <input type="text" class="input_txt valid" id="mental_abstraccion" name="mental_abstraccion" value="<?php echo @$mental_abstraccion; ?>" />
                        </p>
                        <p>&nbsp;</p></td>
                </tr>
            </table>
            <p>Comparación: </p>
            <table border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="720" valign="top"><p>
                            <input type="text" class="input_txt valid" id="mental_compa" name="mental_compa" value="<?php echo @$mental_compa; ?>" />
                        </p>
                        <p>&nbsp;</p></td>
                </tr>
            </table>
            <p>Juicio:</p>
            <table border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="720" valign="top"><p>
                            <input type="text" class="input_txt valid" id="mental_juicio" name="mental_juicio" value="<?php echo @$mental_juicio; ?>" />
                        </p>
                        <p>&nbsp;</p></td>
                </tr>
            </table>
            <p>Calculo:</p>
            <table border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="720" valign="top"><p>
                            <input type="text" class="input_txt valid" id="mental_calculo" name="mental_calculo" value="<?php echo @$mental_calculo; ?>" />
                        </p>
                        <p>&nbsp;</p></td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <p>Esquema  corporal: sin alteración
                <input type="text" class="input_txt valid" id="esquemacorpo_sinal" name="esquemacorpo_sinal" value="<?php echo @$esquemacorpo_sinal; ?>" />
            </p>
            <ul>
                <li>Negligencia unilateral:
                    <input type="text" class="input_txt valid" id="esquema_negli" name="esquema_negli" value="<?php echo @$esquema_negli; ?>" />
                </li>
                <li>Anosognosia:
                    <input type="text" class="input_txt valid" id="esquema_anosog" name="esquema_anosog" value="<?php echo @$esquema_anosog; ?>" />
                </li>
                <li>Agnosia digital:
                    <input type="text" class="input_txt valid" id="esquema_digital" name="esquema_digital" value="<?php echo @$esquema_digital; ?>" />
                </li>
                <li>Discriminación derecha e izquierda:
                    <input type="text" class="input_txt valid" id="esque_discrimi" name="esque_discrimi" value="<?php echo @$esque_discrimi; ?>" />
                </li>
            </ul>

            <ul>
                <li><strong>F. TONO:</strong></li>
                <li><strong>Segmentos  corporales:</strong></li>
                <ul>
                    <li><strong>Cabeza y  cuello</strong>: <input type="text" class="input_txt valid" id="t1" name="t1" value="<?php echo @$t1; ?>" /></li>
                    <li><strong>Cintura  escapular</strong>: <input type="text" class="input_txt valid" id="t2" name="t2" value="<?php echo @$t2; ?>" /></li>
                    <li><strong>Tórax</strong>: <input type="text" class="input_txt valid" id="t3" name="t3" value="<?php echo @$t3; ?>" /></li>
                    <li><strong>Abdomen</strong>: <input type="text" class="input_txt valid" id="t4" name="t4" value="<?php echo @$t4; ?>" /></li>
                    <li><strong>Columna</strong>: <input type="text" class="input_txt valid" id="t5" name="t5" value="<?php echo @$t5; ?>" /></li>
                    <li><strong>Extremidades</strong>: <input type="text" class="input_txt valid" id="t6" name="t6" value="<?php echo @$t6; ?>" /></li>
                </ul>
            </ul>
            <br>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>