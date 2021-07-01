<?php
if (isset($_REQUEST['guardar_h2_proceso_mental_nino']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h2_proceso_mental_nino'] == 'new') {

        $sql = "INSERT INTO h2_proceso_mental_nino (
`id_h2_proceso_mental_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`aten_1`,
`aten_2`,
`aten_3`,
`concent_1`,
`concent_2`,
`concent_3`,
`mem1_1`,
`mem1_2`,
`mem1_3`,
`mem2_1`,
`mem2_2`,
`mem2_3`,
`mem3_1`,
`mem3_2`,
`mem3_3`,
`orien1_1`,
`orien1_2`,
`orien1_3`,
`orien2_1`,
`orien2_2`,
`orien2_3`,
`resol1_1`,
`resol1_2`,
`resol1_3`,
`resol2_1`,
`resol2_2`,
`resol2_3`,
`seguim_1`,
`seguim_2`,
`seguim_3`,
`lateralidad`,
`activ_producti`,
`sub_vilicion`,
`sub_habitu`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`sub_ejecu`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['aten_1'] . "' ,
'" . $_REQUEST['aten_2'] . "' ,
'" . $_REQUEST['aten_3'] . "' ,
'" . $_REQUEST['concent_1'] . "' ,
'" . $_REQUEST['concent_2'] . "' ,
'" . $_REQUEST['concent_3'] . "' ,
'" . $_REQUEST['mem1_1'] . "' ,
'" . $_REQUEST['mem1_2'] . "' ,
'" . $_REQUEST['mem1_3'] . "' ,
'" . $_REQUEST['mem2_1'] . "' ,
'" . $_REQUEST['mem2_2'] . "' ,
'" . $_REQUEST['mem2_3'] . "' ,
'" . $_REQUEST['mem3_1'] . "' ,
'" . $_REQUEST['mem3_2'] . "' ,
'" . $_REQUEST['mem3_3'] . "' ,
'" . $_REQUEST['orien1_1'] . "' ,
'" . $_REQUEST['orien1_2'] . "' ,
'" . $_REQUEST['orien1_3'] . "' ,
'" . $_REQUEST['orien2_1'] . "' ,
'" . $_REQUEST['orien2_2'] . "' ,
'" . $_REQUEST['orien2_3'] . "' ,
'" . $_REQUEST['resol1_1'] . "' ,
'" . $_REQUEST['resol1_2'] . "' ,
'" . $_REQUEST['resol1_3'] . "' ,
'" . $_REQUEST['resol2_1'] . "' ,
'" . $_REQUEST['resol2_2'] . "' ,
'" . $_REQUEST['resol2_3'] . "' ,
'" . $_REQUEST['seguim_1'] . "' ,
'" . $_REQUEST['seguim_2'] . "' ,
'" . $_REQUEST['seguim_3'] . "' ,
'" . $_REQUEST['lateralidad'] . "' ,
'" . $_REQUEST['activ_producti'] . "' ,
'" . $_REQUEST['sub_vilicion'] . "' ,
'" . $_REQUEST['sub_habitu'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['sub_ejecu'] . "'
) ";
    } else if ($_REQUEST['id_h2_proceso_mental_nino'] != '') {

        $sql = "UPDATE h2_proceso_mental_nino set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`aten_1` = '" . $_REQUEST['aten_1'] . "' ,
`aten_2` = '" . $_REQUEST['aten_2'] . "' ,
`aten_3` = '" . $_REQUEST['aten_3'] . "' ,
`concent_1` = '" . $_REQUEST['concent_1'] . "' ,
`concent_2` = '" . $_REQUEST['concent_2'] . "' ,
`concent_3` = '" . $_REQUEST['concent_3'] . "' ,
`mem1_1` = '" . $_REQUEST['mem1_1'] . "' ,
`mem1_2` = '" . $_REQUEST['mem1_2'] . "' ,
`mem1_3` = '" . $_REQUEST['mem1_3'] . "' ,
`mem2_1` = '" . $_REQUEST['mem2_1'] . "' ,
`mem2_2` = '" . $_REQUEST['mem2_2'] . "' ,
`mem2_3` = '" . $_REQUEST['mem2_3'] . "' ,
`mem3_1` = '" . $_REQUEST['mem3_1'] . "' ,
`mem3_2` = '" . $_REQUEST['mem3_2'] . "' ,
`mem3_3` = '" . $_REQUEST['mem3_3'] . "' ,
`orien1_1` = '" . $_REQUEST['orien1_1'] . "' ,
`orien1_2` = '" . $_REQUEST['orien1_2'] . "' ,
`orien1_3` = '" . $_REQUEST['orien1_3'] . "' ,
`orien2_1` = '" . $_REQUEST['orien2_1'] . "' ,
`orien2_2` = '" . $_REQUEST['orien2_2'] . "' ,
`orien2_3` = '" . $_REQUEST['orien2_3'] . "' ,
`resol1_1` = '" . $_REQUEST['resol1_1'] . "' ,
`resol1_2` = '" . $_REQUEST['resol1_2'] . "' ,
`resol1_3` = '" . $_REQUEST['resol1_3'] . "' ,
`resol2_1` = '" . $_REQUEST['resol2_1'] . "' ,
`resol2_2` = '" . $_REQUEST['resol2_2'] . "' ,
`resol2_3` = '" . $_REQUEST['resol2_3'] . "' ,
`seguim_1` = '" . $_REQUEST['seguim_1'] . "' ,
`seguim_2` = '" . $_REQUEST['seguim_2'] . "' ,
`seguim_3` = '" . $_REQUEST['seguim_3'] . "' ,
`lateralidad` = '" . $_REQUEST['lateralidad'] . "' ,
`activ_producti` = '" . $_REQUEST['activ_producti'] . "' ,
`sub_vilicion` = '" . $_REQUEST['sub_vilicion'] . "' ,
`sub_habitu` = '" . $_REQUEST['sub_habitu'] . "' ,
`sub_ejecu` = '" . $_REQUEST['sub_ejecu'] . "' WHERE `id_h2_proceso_mental_nino` = '" . $_REQUEST['id_h2_proceso_mental_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h2_proceso_mental_nino = 'new';
$sql = "SELECT * from h2_proceso_mental_nino WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h2_proceso_mental_nino = $row['id_h2_proceso_mental_nino'];

    $aten_1 = $row['aten_1'];
    $aten_2 = $row['aten_2'];
    $aten_3 = $row['aten_3'];
    $concent_1 = $row['concent_1'];
    $concent_2 = $row['concent_2'];
    $concent_3 = $row['concent_3'];
    $mem1_1 = $row['mem1_1'];
    $mem1_2 = $row['mem1_2'];
    $mem1_3 = $row['mem1_3'];
    $mem2_1 = $row['mem2_1'];
    $mem2_2 = $row['mem2_2'];
    $mem2_3 = $row['mem2_3'];
    $mem3_1 = $row['mem3_1'];
    $mem3_2 = $row['mem3_2'];
    $mem3_3 = $row['mem3_3'];
    $orien1_1 = $row['orien1_1'];
    $orien1_2 = $row['orien1_2'];
    $orien1_3 = $row['orien1_3'];
    $orien2_1 = $row['orien2_1'];
    $orien2_2 = $row['orien2_2'];
    $orien2_3 = $row['orien2_3'];
    $resol1_1 = $row['resol1_1'];
    $resol1_2 = $row['resol1_2'];
    $resol1_3 = $row['resol1_3'];
    $resol2_1 = $row['resol2_1'];
    $resol2_2 = $row['resol2_2'];
    $resol2_3 = $row['resol2_3'];
    $seguim_1 = $row['seguim_1'];
    $seguim_2 = $row['seguim_2'];
    $seguim_3 = $row['seguim_3'];
    $lateralidad = $row['lateralidad'];
    $activ_producti = $row['activ_producti'];
    $sub_vilicion = $row['sub_vilicion'];
    $sub_habitu = $row['sub_habitu'];
    $sub_ejecu = $row['sub_ejecu'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h2_proceso_mental_nino").click(function() {
            $("#open-h2_proceso_mental_nino").show();
            $(this).hide();
            $("#content-h2_proceso_mental_nino").hide('slow');
        });

        $("#open-h2_proceso_mental_nino").click(function() {
            $("#close-h2_proceso_mental_nino").show();
            $(this).hide();
            $("#content-h2_proceso_mental_nino").show('slow');
        });

    });

</script>
<fieldset id="h2_proceso_mental_nino">
    <legend align="left"> <div class="arrow-c" id="close-h2_proceso_mental_nino"></div> <div class="arrow-o" id="open-h2_proceso_mental_nino" ></div> <font>Valoracion terapia ocupacional de neurodesarrollo - Procesos mentales</font></legend>
    <div id="content-h2_proceso_mental_nino">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h2_proceso_mental_nino" id="guardar_h2_proceso_mental_nino" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h2_proceso_mental_nino" name="form_h2_proceso_mental_nino" action="<?php echo @$action_form_h2_proceso_mental_nino ?>#h2_proceso_mental_nino" method="post">

            <input type="hidden" id="id_h2_proceso_mental_nino" name="id_h2_proceso_mental_nino" value="<?php echo @$id_h2_proceso_mental_nino ?>" />

            <p><strong>COGNICIÓN</strong></p>
            <table  border="0" class="data" cellspacing="0" cellpadding="0" width="795">
                <tr>
                    <td width="390" valign="top"><p align="center"><strong>PROCESOS MENTALES SUPERIORES</strong></p></td>
                    <td width="135" valign="top"><p align="center"><strong>F</strong><br />
                            <strong>30    – 45 MIN</strong></p></td>
                    <td width="150" valign="top"><p align="center"><strong>SF</strong><br />
                            <strong>15    – 30 MIN</strong></p></td>
                    <td width="120" valign="top"><p align="center"><strong>NF</strong><br />
                            <strong>0-15    MIN</strong></p></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Atención</p></td>
                    <td width="135" valign="top">
                        <input type="text" class="input_txt valid" id="aten_1" name="aten_1" value="<?php echo @$aten_1; ?>" /> </td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="aten_2" name="aten_2" value="<?php echo @$aten_2; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="aten_3" name="aten_3" value="<?php echo @$aten_3; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Concentración</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="concent_1" name="concent_1" value="<?php echo @$concent_1; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="concent_2" name="concent_2" value="<?php echo @$concent_2; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="concent_3" name="concent_3" value="<?php echo @$concent_3; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Memoria a corto plazo</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="mem1_1" name="mem1_1" value="<?php echo @$mem1_1; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="mem1_2" name="mem1_2" value="<?php echo @$mem1_2; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="mem1_3" name="mem1_3" value="<?php echo @$mem1_3; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Memoria a mediano    plazo</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="mem2_1" name="mem2_1" value="<?php echo @$mem2_1; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="mem2_2" name="mem2_2" value="<?php echo @$mem2_2; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="mem2_3" name="mem2_3" value="<?php echo @$mem2_3; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Memoria a largo    plazo</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="mem3_1" name="mem3_1" value="<?php echo @$mem3_1; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="mem3_2" name="mem3_2" value="<?php echo @$mem3_2; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="mem3_3" name="mem3_3" value="<?php echo @$mem3_3; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Orientación en si    mismo</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="orien1_1" name="orien1_1" value="<?php echo @$orien1_1; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="orien1_2" name="orien1_2" value="<?php echo @$orien1_2; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="orien1_3" name="orien1_3" value="<?php echo @$orien1_3; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Orientación    temporoespacial </p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="orien2_1" name="orien2_1" value="<?php echo @$orien2_1; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="orien2_2" name="orien2_2" value="<?php echo @$orien2_2; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="orien2_3" name="orien2_3" value="<?php echo @$orien2_3; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Resolución de    problemas simples</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="resol1_1" name="resol1_1" value="<?php echo @$resol1_1; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="resol1_2" name="resol1_2" value="<?php echo @$resol1_2; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="resol1_3" name="resol1_3" value="<?php echo @$resol1_3; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Resolución de    problemas complejos</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="resol2_1" name="resol2_1" value="<?php echo @$resol2_1; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="resol2_2" name="resol2_2" value="<?php echo @$resol2_2; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="resol2_3" name="resol2_3" value="<?php echo @$resol2_3; ?>" /></td>
                </tr>
                <tr>
                    <td width="390" valign="top"><p>Seguimiento    instruccional</p></td>
                    <td width="135" valign="top"><input type="text" class="input_txt valid" id="seguim_1" name="seguim_1" value="<?php echo @$seguim_1; ?>" /></td>
                    <td width="150" valign="top"><input type="text" class="input_txt valid" id="seguim_2" name="seguim_2" value="<?php echo @$seguim_2; ?>" /></td>
                    <td width="120" valign="top"><input type="text" class="input_txt valid" id="seguim_3" name="seguim_3" value="<?php echo @$seguim_3; ?>" /></td>
                </tr>
            </table>
            <p>LATERALIDAD:
                <input type="text" class="input_txt valid" id="lateralidad" name="lateralidad" value="<?php echo @$lateralidad; ?>" />
            </p>
            <p><strong>ACTIVIDADES PRODUCTIVAS DE OCIO Y TIEMPO LIBRE</strong><br />
                <strong>
                    <input type="text" class="input_txt valid" id="activ_producti" name="activ_producti" value="<?php echo @$activ_producti; ?>" />
                </strong></p>
            <p><strong>SUBSISTEMA DE VOLICIÓN</strong><br />
                <strong>
                    <input type="text" class="input_txt valid" id="sub_vilicion" name="sub_vilicion" value="<?php echo @$sub_vilicion; ?>" />
                </strong></p>
            <p><strong>SUBSISTEMA DE HABITUACIÓN </strong><br />
                <strong>
                    <input type="text" class="input_txt valid" id="sub_habitu" name="sub_habitu" value="<?php echo @$sub_habitu; ?>" />
                </strong></p>
            <p><strong>SUBSISTEMA DE EJECUCIÓN</strong><br />
                <strong>
                    <input type="text" class="input_txt valid" id="sub_ejecu" name="sub_ejecu" value="<?php echo @$sub_ejecu; ?>" />
                </strong></p>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>