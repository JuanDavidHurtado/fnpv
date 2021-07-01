<?php
if (isset($_REQUEST['guardar_hc_agudeza_visual']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['idhc_agudeza_visual'] == 'new') {

        $sql = "INSERT INTO hc_agudeza_visual (
`idhc_agudeza_visual`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`od`,
`oi`,
`cejas_s`,
`cejas_n`,
`cejas_c`,
`pesta_s`,
`pesta_n`,
`pesta_c`,
`sacos_s`,
`sacos_n`,
`sacos_c`,
`conjunt_s`,
`conjunt_n`,
`conjunt_c`,
`esclera_s`,
`esclera_n`,
`esclera_c`,
`iris_s`,
`iris_n`,
`iris_c`,
`pupila_s`,
`pupila_n`,
`pupila_c`,
`reflejos`,
`mov_oculares`,
`ofta_od`,
`ofta_oi`,
`diagnostico`,
`conducta`,
`nombre_responsa`,
`parpado_s`,
`parpado_n`,
`parpado_c`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['id_historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['od'] . "' ,
'" . $_REQUEST['oi'] . "' ,
'" . $_REQUEST['cejas_s'] . "' ,
'" . $_REQUEST['cejas_n'] . "' ,
'" . $_REQUEST['cejas_c'] . "' ,
'" . $_REQUEST['pesta_s'] . "' ,
'" . $_REQUEST['pesta_n'] . "' ,
'" . $_REQUEST['pesta_c'] . "' ,
'" . $_REQUEST['sacos_s'] . "' ,
'" . $_REQUEST['sacos_n'] . "' ,
'" . $_REQUEST['sacos_c'] . "' ,
'" . $_REQUEST['conjunt_s'] . "' ,
'" . $_REQUEST['conjunt_n'] . "' ,
'" . $_REQUEST['conjunt_c'] . "' ,
'" . $_REQUEST['esclera_s'] . "' ,
'" . $_REQUEST['esclera_n'] . "' ,
'" . $_REQUEST['esclera_c'] . "' ,
'" . $_REQUEST['iris_s'] . "' ,
'" . $_REQUEST['iris_n'] . "' ,
'" . $_REQUEST['iris_c'] . "' ,
'" . $_REQUEST['pupila_s'] . "' ,
'" . $_REQUEST['pupila_n'] . "' ,
'" . $_REQUEST['pupila_c'] . "' ,
'" . $_REQUEST['reflejos'] . "' ,
'" . $_REQUEST['mov_oculares'] . "' ,
'" . $_REQUEST['ofta_od'] . "' ,
'" . $_REQUEST['ofta_oi'] . "' ,
'" . $_REQUEST['diagnostico'] . "' ,
'" . $_REQUEST['conducta'] . "' ,
'" . $_REQUEST['nombre_responsa'] . "' ,
'" . $_REQUEST['parpado_s'] . "' ,
'" . $_REQUEST['parpado_n'] . "' ,
'" . $_REQUEST['parpado_c'] . "'
) ";
    } else if ($_REQUEST['idhc_agudeza_visual'] != '') {

        $sql = "UPDATE hc_agudeza_visual set
`id_usuario` = '" . $_REQUEST['id_usuario'] . "' ,
`id_historia` = '" . $_REQUEST['id_historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ,
`id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ,
`od` = '" . $_REQUEST['od'] . "' ,
`oi` = '" . $_REQUEST['oi'] . "' ,
`cejas_s` = '" . $_REQUEST['cejas_s'] . "' ,
`cejas_n` = '" . $_REQUEST['cejas_n'] . "' ,
`cejas_c` = '" . $_REQUEST['cejas_c'] . "' ,
`pesta_s` = '" . $_REQUEST['pesta_s'] . "' ,
`pesta_n` = '" . $_REQUEST['pesta_n'] . "' ,
`pesta_c` = '" . $_REQUEST['pesta_c'] . "' ,
`sacos_s` = '" . $_REQUEST['sacos_s'] . "' ,
`sacos_n` = '" . $_REQUEST['sacos_n'] . "' ,
`sacos_c` = '" . $_REQUEST['sacos_c'] . "' ,
`conjunt_s` = '" . $_REQUEST['conjunt_s'] . "' ,
`conjunt_n` = '" . $_REQUEST['conjunt_n'] . "' ,
`conjunt_c` = '" . $_REQUEST['conjunt_c'] . "' ,
`esclera_s` = '" . $_REQUEST['esclera_s'] . "' ,
`esclera_n` = '" . $_REQUEST['esclera_n'] . "' ,
`esclera_c` = '" . $_REQUEST['esclera_c'] . "' ,
`iris_s` = '" . $_REQUEST['iris_s'] . "' ,
`iris_n` = '" . $_REQUEST['iris_n'] . "' ,
`iris_c` = '" . $_REQUEST['iris_c'] . "' ,
`pupila_s` = '" . $_REQUEST['pupila_s'] . "' ,
`pupila_n` = '" . $_REQUEST['pupila_n'] . "' ,
`pupila_c` = '" . $_REQUEST['pupila_c'] . "' ,
`reflejos` = '" . $_REQUEST['reflejos'] . "' ,
`mov_oculares` = '" . $_REQUEST['mov_oculares'] . "' ,
`ofta_od` = '" . $_REQUEST['ofta_od'] . "' ,
`ofta_oi` = '" . $_REQUEST['ofta_oi'] . "' ,
`diagnostico` = '" . $_REQUEST['diagnostico'] . "' ,
`conducta` = '" . $_REQUEST['conducta'] . "' ,
`nombre_responsa` = '" . $_REQUEST['nombre_responsa'] . "' ,
`parpado_s` = '" . $_REQUEST['parpado_s'] . "' ,
`parpado_n` = '" . $_REQUEST['parpado_n'] . "' ,
`parpado_c` = '" . $_REQUEST['parpado_c'] . "' WHERE `idhc_agudeza_visual` = '" . $_REQUEST['idhc_agudeza_visual'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$idhc_agudeza_visual = 'new';
$sql = "SELECT * from hc_agudeza_visual WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $idhc_agudeza_visual = $row['idhc_agudeza_visual'];
    $id_usuario = $row['id_usuario'];
    $id_historia = $row['id_historia'];
    $id_proceso = $row['id_proceso'];
    $id_vinicial = $row['id_vinicial'];
    $id_revaloracion = $row['id_revaloracion'];
    $od = $row['od'];
    $oi = $row['oi'];
    $cejas_s = $row['cejas_s'];
    $cejas_n = $row['cejas_n'];
    $cejas_c = $row['cejas_c'];
    $pesta_s = $row['pesta_s'];
    $pesta_n = $row['pesta_n'];
    $pesta_c = $row['pesta_c'];
    $sacos_s = $row['sacos_s'];
    $sacos_n = $row['sacos_n'];
    $sacos_c = $row['sacos_c'];
    $conjunt_s = $row['conjunt_s'];
    $conjunt_n = $row['conjunt_n'];
    $conjunt_c = $row['conjunt_c'];
    $esclera_s = $row['esclera_s'];
    $esclera_n = $row['esclera_n'];
    $esclera_c = $row['esclera_c'];
    $iris_s = $row['iris_s'];
    $iris_n = $row['iris_n'];
    $iris_c = $row['iris_c'];
    $pupila_s = $row['pupila_s'];
    $pupila_n = $row['pupila_n'];
    $pupila_c = $row['pupila_c'];
    $reflejos = $row['reflejos'];
    $mov_oculares = $row['mov_oculares'];
    $ofta_od = $row['ofta_od'];
    $ofta_oi = $row['ofta_oi'];
    $diagnostico = $row['diagnostico'];
    $conducta = $row['conducta'];
    $nombre_responsa = $row['nombre_responsa'];
    $parpado_s = $row['parpado_s'];
    $parpado_n = $row['parpado_n'];
    $parpado_c = $row['parpado_c'];
    break;
}
?>
<script>

    $(function() {

        $("#close-hc_agudeza_visual").click(function() {
            $("#open-hc_agudeza_visual").show();
            $(this).hide();
            $("#content-hc_agudeza_visual").hide('slow');
        });

        $("#open-hc_agudeza_visual").click(function() {
            $("#close-hc_agudeza_visual").show();
            $(this).hide();
            $("#content-hc_agudeza_visual").show('slow');
        });

    });

</script>
<fieldset id="hc_agudeza_visual">
    <legend align="left"> <div class="arrow-c" id="close-hc_agudeza_visual"></div> <div class="arrow-o" id="open-hc_agudeza_visual" ></div> <font>Valoracion terapia ocupacional - Agudeza visual</font></legend>
    <div id="content-hc_agudeza_visual">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_hc_agudeza_visual" id="guardar_hc_agudeza_visual" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
        <form id="form_hc_agudeza_visual" name="form_hc_agudeza_visual" action="<?php echo @$action_form_hc_agudeza_visual ?>#hc_agudeza_visual" method="post">

            <input type="hidden" id="id_hc_agudeza_visual" name="id_hc_agudeza_visual" value="<?php echo @$id_hc_agudeza_visual ?>" />


            <input type="hidden" class="input_txt valid" id="idhc_agudeza_visual" name="idhc_agudeza_visual" value="<?php echo @$idhc_agudeza_visual; ?>" />

            <div align="center">TAMIZAJE AGUDEZA VISUAL</div>
            <table width="472" border="1" align="center" cellpadding="0" cellspacing="0">
                <col width="149" />
                <col width="83" span="3" />
                <tr height="19">
                    <td height="19" colspan="4">4-AGUDEZA    VISUAL</td>
                </tr>
                <tr height="19">
                    <td height="19" width="190">OD:</td>
                    <td colspan="3"><input type="text" class="input_txt valid" id="od" name="od" value="<?php echo @$od; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="190">Oí:</td>
                    <td colspan="3"><input type="text" class="input_txt valid" id="oi" name="oi" value="<?php echo @$oi; ?>" /></td>
                </tr>
                <tr height="19">
                    <td rowspan="2" height="38" width="190">5-VALORACIÓN</td>
                    <td colspan="3">ALTERACIONES</td>
                </tr>
                <tr height="19">
                    <td height="19" width="55">SI </td>
                    <td width="83">NO </td>
                    <td width="83">CUAL</td>
                </tr>
                <tr height="19">
                    <td height="19" width="190">Cejas</td>
                    <td width="55"><input type="text" class="input_txt valid" id="cejas_s" name="cejas_s" value="<?php echo @$cejas_s; ?>" /></td>
                    <td width="83"><input type="text" class="input_txt valid" id="cejas_n" name="cejas_n" value="<?php echo @$cejas_n; ?>" /></td>
                    <td width="83"><input type="text" class="input_txt valid" id="cejas_c" name="cejas_c" value="<?php echo @$cejas_c; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="190">Pestañas</td>
                    <td width="55"><input type="text" class="input_txt valid" id="pesta_s" name="pesta_s" value="<?php echo @$pesta_s; ?>" /></td>
                    <td width="83"><input type="text" class="input_txt valid" id="pesta_n" name="pesta_n" value="<?php echo @$pesta_n; ?>" /></td>
                    <td width="83"><input type="text" class="input_txt valid" id="pesta_c" name="pesta_c" value="<?php echo @$pesta_c; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="190">Párpados</td>
                    <td width="55"><input type="text" class="input_txt valid" id="parpado_s" name="parpado_s" value="<?php echo @$parpado_s; ?>" /></td>
                    <td width="83"><input type="text" class="input_txt valid" id="parpado_n" name="parpado_n" value="<?php echo @$parpado_n; ?>" /></td>
                    <td width="83"><input type="text" class="input_txt valid" id="parpado_c" name="parpado_c" value="<?php echo @$parpado_c; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="190">Sacos lacrímales</td>
                    <td width="55"><input type="text" class="input_txt valid" id="sacos_s" name="sacos_s" value="<?php echo @$sacos_s; ?>" /></td>
                    <td width="83"><input type="text" class="input_txt valid" id="sacos_n" name="sacos_n" value="<?php echo @$sacos_n; ?>" /></td>
                    <td width="83"><input type="text" class="input_txt valid" id="sacos_c" name="sacos_c" value="<?php echo @$sacos_c; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="190">Conjuntivas</td>
                    <td width="55"><input type="text" class="input_txt valid" id="conjunt_s" name="conjunt_s" value="<?php echo @$conjunt_s; ?>" /></td>
                    <td width="83"><input type="text" class="input_txt valid" id="conjunt_n" name="conjunt_n" value="<?php echo @$conjunt_n; ?>" /></td>
                    <td width="83"><input type="text" class="input_txt valid" id="conjunt_c" name="conjunt_c" value="<?php echo @$conjunt_c; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="190">Esclera</td>
                    <td width="55"><input type="text" class="input_txt valid" id="esclera_s" name="esclera_s" value="<?php echo @$esclera_s; ?>" /></td>
                    <td width="83"><input type="text" class="input_txt valid" id="esclera_n" name="esclera_n" value="<?php echo @$esclera_n; ?>" /></td>
                    <td width="83"><input type="text" class="input_txt valid" id="esclera_c" name="esclera_c" value="<?php echo @$esclera_c; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="190">Iris</td>
                    <td width="55"><input type="text" class="input_txt valid" id="iris_s" name="iris_s" value="<?php echo @$iris_s; ?>" /></td>
                    <td width="83"><input type="text" class="input_txt valid" id="iris_n" name="iris_n" value="<?php echo @$iris_n; ?>" /></td>
                    <td width="83"><input type="text" class="input_txt valid" id="iris_c" name="iris_c" value="<?php echo @$iris_c; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="190">Pupila</td>
                    <td width="55"><input type="text" class="input_txt valid" id="pupila_s" name="pupila_s" value="<?php echo @$pupila_s; ?>" /></td>
                    <td width="83"><input type="text" class="input_txt valid" id="pupila_n" name="pupila_n" value="<?php echo @$pupila_n; ?>" /></td>
                    <td width="83"><input type="text" class="input_txt valid" id="pupila_c" name="pupila_c" value="<?php echo @$pupila_c; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="190">6 - REFLEJOS</td>
                    <td colspan="3"><input type="text" class="input_txt valid" id="reflejos" name="reflejos" value="<?php echo @$reflejos; ?>" /></td>
                </tr>
                <tr height="38">
                    <td height="38" width="190">7 - MOVIMIENTOS OCULARES</td>
                    <td colspan="3"><input type="text" class="input_txt valid" id="mov_oculares" name="mov_oculares" value="<?php echo @$mov_oculares; ?>" /></td>
                </tr>
                <tr height="38">
                    <td rowspan="2" height="57" width="190">8 - OFTALMOSCOPIA</td>
                    <td width="55">OD</td>
                    <td colspan="2">OI</td>
                </tr>
                <tr height="19">
                    <td height="19" width="55"><input type="text" class="input_txt valid" id="ofta_od" name="ofta_od" value="<?php echo @$ofta_od; ?>" /></td>
                    <td colspan="2"><input type="text" class="input_txt valid" id="ofta_oi" name="ofta_oi" value="<?php echo @$ofta_oi; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="190">9 - DIAGNOSTICO</td>
                    <td colspan="3"><input type="text" class="input_txt valid" id="diagnostico" name="diagnostico" value="<?php echo @$diagnostico; ?>" /></td>
                </tr>
                <tr height="19">
                    <td height="19" width="190">10 - CONDUCTA</td>
                    <td colspan="3"><input type="text" class="input_txt valid" id="conducta" name="conducta" value="<?php echo @$conducta; ?>" /></td>
                </tr>
                <tr height="38">
                    <td height="38" width="190">NOMBRE DEL RESPONSABLE / CARGO</td>
                    <td colspan="3"><input type="text" class="input_txt valid" id="nombre_responsa" name="nombre_responsa" value="<?php echo @$nombre_responsa; ?>" /></td>
                </tr>
            </table>

<?php echo @$button ?>
        </form><br>
    </div>
</fieldset>