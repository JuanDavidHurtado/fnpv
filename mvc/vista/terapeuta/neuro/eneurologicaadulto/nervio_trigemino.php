<?php
if (isset($_REQUEST['guardar_nervio_optico_trigemino2']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_nervio_optico'] == 'new') {

        $sql = "INSERT INTO nervio_optico_trigemino (
`id_nervio_optico`,
`tsd_ausente`,
`tsd_presente`,
`tsd_v1`,
`tsd_v2`,
`tsd_v3`,
`tsi_ausente`,
`tsi_presente`,
`tsi_v1`,
`ts1_v2`,
`tsi_v3`,
`dd_ausente`,
`dd_presente`,
`dd_alterado`,
`di_ausente`,
`di_alterado`,
`tmd_ausente`,
`tmd_presente`,
`tmd_alterada`,
`tmi_ausente`,
`tmi_presente`,
`tmi_alterada`,
`send_ausente`,
`send_presente`,
`send_alterada`,
`seni_ausente`,
`seni_presente`,
`seni_alterada`,
`trige_oservacion`,
`trige_masetero`,
`trige_temporal`,
`trige_pterigo`,
`trige_tensor`,
`trige_miloi`,
`trige_vientre`,
`trige_obser2`,
`id_usuario`,
`historia`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`id_proceso`
) VALUES (
NULL,
'" . $_REQUEST['tsd_ausente'] . "' ,
'" . $_REQUEST['tsd_presente'] . "' ,
'" . $_REQUEST['tsd_v1'] . "' ,
'" . $_REQUEST['tsd_v2'] . "' ,
'" . $_REQUEST['tsd_v3'] . "' ,
'" . $_REQUEST['tsi_ausente'] . "' ,
'" . $_REQUEST['tsi_presente'] . "' ,
'" . $_REQUEST['tsi_v1'] . "' ,
'" . $_REQUEST['ts1_v2'] . "' ,
'" . $_REQUEST['tsi_v3'] . "' ,
'" . $_REQUEST['dd_ausente'] . "' ,
'" . $_REQUEST['dd_presente'] . "' ,
'" . $_REQUEST['dd_alterado'] . "' ,
'" . $_REQUEST['di_ausente'] . "' ,
'" . $_REQUEST['di_alterado'] . "' ,
'" . $_REQUEST['tmd_ausente'] . "' ,
'" . $_REQUEST['tmd_presente'] . "' ,
'" . $_REQUEST['tmd_alterada'] . "' ,
'" . $_REQUEST['tmi_ausente'] . "' ,
'" . $_REQUEST['tmi_presente'] . "' ,
'" . $_REQUEST['tmi_alterada'] . "' ,
'" . $_REQUEST['send_ausente'] . "' ,
'" . $_REQUEST['send_presente'] . "' ,
'" . $_REQUEST['send_alterada'] . "' ,
'" . $_REQUEST['seni_ausente'] . "' ,
'" . $_REQUEST['seni_presente'] . "' ,
'" . $_REQUEST['seni_alterada'] . "' ,
'" . $_REQUEST['trige_oservacion'] . "' ,
'" . $_REQUEST['trige_masetero'] . "' ,
'" . $_REQUEST['trige_temporal'] . "' ,
'" . $_REQUEST['trige_pterigo'] . "' ,
'" . $_REQUEST['trige_tensor'] . "' ,
'" . $_REQUEST['trige_miloi'] . "' ,
'" . $_REQUEST['trige_vientre'] . "' ,
'" . $_REQUEST['trige_obser2'] . "' ,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['id_proceso'] . "'
) ";
    } else if ($_REQUEST['id_nervio_optico'] != '') {

        $sql = "UPDATE nervio_optico_trigemino set 
`tsd_ausente` = '" . $_REQUEST['tsd_ausente'] . "' ,
`tsd_presente` = '" . $_REQUEST['tsd_presente'] . "' ,
`tsd_v1` = '" . $_REQUEST['tsd_v1'] . "' ,
`tsd_v2` = '" . $_REQUEST['tsd_v2'] . "' ,
`tsd_v3` = '" . $_REQUEST['tsd_v3'] . "' ,
`tsi_ausente` = '" . $_REQUEST['tsi_ausente'] . "' ,
`tsi_presente` = '" . $_REQUEST['tsi_presente'] . "' ,
`tsi_v1` = '" . $_REQUEST['tsi_v1'] . "' ,
`ts1_v2` = '" . $_REQUEST['ts1_v2'] . "' ,
`tsi_v3` = '" . $_REQUEST['tsi_v3'] . "' ,
`dd_ausente` = '" . $_REQUEST['dd_ausente'] . "' ,
`dd_presente` = '" . $_REQUEST['dd_presente'] . "' ,
`dd_alterado` = '" . $_REQUEST['dd_alterado'] . "' ,
`di_ausente` = '" . $_REQUEST['di_ausente'] . "' ,
`di_alterado` = '" . $_REQUEST['di_alterado'] . "' ,
`tmd_ausente` = '" . $_REQUEST['tmd_ausente'] . "' ,
`tmd_presente` = '" . $_REQUEST['tmd_presente'] . "' ,
`tmd_alterada` = '" . $_REQUEST['tmd_alterada'] . "' ,
`tmi_ausente` = '" . $_REQUEST['tmi_ausente'] . "' ,
`tmi_presente` = '" . $_REQUEST['tmi_presente'] . "' ,
`tmi_alterada` = '" . $_REQUEST['tmi_alterada'] . "' ,
`send_ausente` = '" . $_REQUEST['send_ausente'] . "' ,
`send_presente` = '" . $_REQUEST['send_presente'] . "' ,
`send_alterada` = '" . $_REQUEST['send_alterada'] . "' ,
`seni_ausente` = '" . $_REQUEST['seni_ausente'] . "' ,
`seni_presente` = '" . $_REQUEST['seni_presente'] . "' ,
`seni_alterada` = '" . $_REQUEST['seni_alterada'] . "' ,
`trige_oservacion` = '" . $_REQUEST['trige_oservacion'] . "' ,
`trige_masetero` = '" . $_REQUEST['trige_masetero'] . "' ,
`trige_temporal` = '" . $_REQUEST['trige_temporal'] . "' ,
`trige_pterigo` = '" . $_REQUEST['trige_pterigo'] . "' ,
`trige_tensor` = '" . $_REQUEST['trige_tensor'] . "' ,
`trige_miloi` = '" . $_REQUEST['trige_miloi'] . "' ,
`trige_vientre` = '" . $_REQUEST['trige_vientre'] . "' ,
`trige_obser2` = '" . $_REQUEST['trige_obser2'] . "' ,
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' WHERE `id_nervio_optico` = '" . $_REQUEST['id_nervio_optico'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_nervio_optico = 'new';
$sql = "SELECT * from nervio_optico_trigemino WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_nervio_optico = $row['id_nervio_optico'];
    $tsd_ausente = $row['tsd_ausente'];
    $tsd_presente = $row['tsd_presente'];
    $tsd_v1 = $row['tsd_v1'];
    $tsd_v2 = $row['tsd_v2'];
    $tsd_v3 = $row['tsd_v3'];
    $tsi_ausente = $row['tsi_ausente'];
    $tsi_presente = $row['tsi_presente'];
    $tsi_v1 = $row['tsi_v1'];
    $ts1_v2 = $row['ts1_v2'];
    $tsi_v3 = $row['tsi_v3'];
    $dd_ausente = $row['dd_ausente'];
    $dd_presente = $row['dd_presente'];
    $dd_alterado = $row['dd_alterado'];
    $di_ausente = $row['di_ausente'];
    $di_alterado = $row['di_alterado'];
    $tmd_ausente = $row['tmd_ausente'];
    $tmd_presente = $row['tmd_presente'];
    $tmd_alterada = $row['tmd_alterada'];
    $tmi_ausente = $row['tmi_ausente'];
    $tmi_presente = $row['tmi_presente'];
    $tmi_alterada = $row['tmi_alterada'];
    $send_ausente = $row['send_ausente'];
    $send_presente = $row['send_presente'];
    $send_alterada = $row['send_alterada'];
    $seni_ausente = $row['seni_ausente'];
    $seni_presente = $row['seni_presente'];
    $seni_alterada = $row['seni_alterada'];
    $trige_oservacion = $row['trige_oservacion'];
    $trige_masetero = $row['trige_masetero'];
    $trige_temporal = $row['trige_temporal'];
    $trige_pterigo = $row['trige_pterigo'];
    $trige_tensor = $row['trige_tensor'];
    $trige_miloi = $row['trige_miloi'];
    $trige_vientre = $row['trige_vientre'];
    $trige_obser2 = $row['trige_obser2'];
    break;
}
?>
<script>

    $(function() {

        $("#close-nervio_optico_trigemino2").click(function() {
            $("#open-nervio_optico_trigemino2").show();
            $(this).hide();
            $("#content-nervio_optico_trigemino2").hide('slow');
        });

        $("#open-nervio_optico_trigemino2").click(function() {
            $("#close-nervio_optico_trigemino2").show();
            $(this).hide();
            $("#content-nervio_optico_trigemino2").show('slow');
        });

    });

</script>
<fieldset id="nervio_optico_trigemino2">
    <legend align="left"> <div class="arrow-c" id="close-nervio_optico_trigemino2"></div> <div class="arrow-o" id="open-nervio_optico_trigemino2" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Nervio trigemino</font></legend>
    <div id="content-nervio_optico_trigemino2">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_nervio_optico_trigemino2" id="guardar_nervio_optico_trigemino2" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_nervio_optico_trigemino2" name="form_nervio_optico_trigemino2" action="<?php echo @$action_form_nervio_optico_trigemino ?>#nervio_optico_trigemino2" method="post">

            <input type="hidden" id="id_nervio_optico_trigemino2" name="id_nervio_optico_trigemino2" value="<?php echo @$id_nervio_optico_trigemino2 ?>" />
            <input type="hidden" class="input_txt valid" id="id_nervio_optico" name="id_nervio_optico" value="<?php echo @$id_nervio_optico; ?>" />

            <p><strong>Componente sensitivo:</strong></p>
            <ul>
                <li>Tacto superficial:<strong></strong></li>
            </ul>
            <p>Lado derecho:<strong> </strong>Ausente: <strong>
                    <input type="text" class="input_txt valid" id="tsd_ausente" name="tsd_ausente" value="<?php echo @$tsd_ausente; ?>" />
                </strong>Presente: <strong>
                    <input type="text" class="input_txt valid" id="tsd_presente" name="tsd_presente" value="<?php echo @$tsd_presente; ?>" />           
                </strong>V1<strong>
                    <input type="text" class="input_txt valid" id="tsd_v1" name="tsd_v1" value="<?php echo @$tsd_v1; ?>" />
                </strong>V2<strong>
                    <input type="text" class="input_txt valid" id="tsd_v2" name="tsd_v2" value="<?php echo @$tsd_v2; ?>" />
                </strong>V3
                <input type="text" class="input_txt valid" id="tsd_v3" name="tsd_v3" value="<?php echo @$tsd_v3; ?>" />
                <br />
                Lado  izquierdo:<strong> </strong>Ausente: <strong>
                    <input type="text" class="input_txt valid" id="tsi_ausente" name="tsi_ausente" value="<?php echo @$tsi_ausente; ?>" />
                </strong>Presente: <strong>
                    <input type="text" class="input_txt valid" id="tsi_presente" name="tsi_presente" value="<?php echo @$tsi_presente; ?>" />        
                </strong>V1<strong>
                    <input type="text" class="input_txt valid" id="tsi_v1" name="tsi_v1" value="<?php echo @$tsi_v1; ?>" />
                </strong>V2<strong>
                    <input type="text" class="input_txt valid" id="ts1_v2" name="ts1_v2" value="<?php echo @$ts1_v2; ?>" />
                </strong>V3
                <input type="text" class="input_txt valid" id="tsi_v3" name="tsi_v3" value="<?php echo @$tsi_v3; ?>" />
            </p>
            <ul>
                <li>Dolor: </li>
            </ul>
            <p>Lado derecho:<strong> </strong>Ausente: <strong>
                    <input type="text" class="input_txt valid" id="dd_ausente" name="dd_ausente" value="<?php echo @$dd_ausente; ?>" />
                </strong>Presente: <strong>
                    <input type="text" class="input_txt valid" id="dd_presente" name="dd_presente" value="<?php echo @$dd_presente; ?>" />
                </strong>Alterado:
                <input type="text" class="input_txt valid" id="dd_alterado" name="dd_alterado" value="<?php echo @$dd_alterado; ?>" />
                <br />
                Lado  izquierdo:<strong> </strong>Ausente: <strong>
                    <input type="text" class="input_txt valid" id="di_ausente" name="di_ausente" value="<?php echo @$di_ausente; ?>" />
                </strong>Presente:
                <input type="text" class="input_txt valid" id="di_alterado" name="di_alterado" value="<?php echo @$di_alterado; ?>" /> 
                Alterado:
                <input type="text" class="input_txt valid" id="tmd_ausente" name="tmd_ausente" value="<?php echo @$tmd_ausente; ?>" />
            </p>
            <ul>
                <li>Temperatura:</li>
            </ul>
            <p>Lado derecho:<strong> </strong>Ausente:<strong>
                    <input type="text" class="input_txt valid" id="tmd_presente" name="tmd_presente" value="<?php echo @$tmd_presente; ?>" />
                </strong>Presente:
                <input type="text" class="input_txt valid" id="tmd_alterada" name="tmd_alterada" value="<?php echo @$tmd_alterada; ?>" /> 
                Alterada:
                <input type="text" class="input_txt valid" id="tmi_ausente" name="tmi_ausente" value="<?php echo @$tmi_ausente; ?>" />
                <br />
                Lado  izquierdo:<strong> </strong>Ausente:
                <input type="text" class="input_txt valid" id="tmi_presente" name="tmi_presente" value="<?php echo @$tmi_presente; ?>" />
                Presente:
                <input type="text" class="input_txt valid" id="tmi_alterada" name="tmi_alterada" value="<?php echo @$tmi_alterada; ?>" /> 
                Alterada:<input type="text" class="input_txt valid" id="tmi_alterada" name="tmi_alterada" value="<?php echo @$tmi_alterada; ?>" /></p>
            <ul>
                <li>Sensibilidad profunda:</li>
            </ul>
            <p>Lado derecho:<strong> </strong>Ausente
                <input type="text" class="input_txt valid" id="send_ausente" name="send_ausente" value="<?php echo @$send_ausente; ?>" />
                :Presente:<strong>
                    <input type="text" class="input_txt valid" id="send_presente" name="send_presente" value="<?php echo @$send_presente; ?>" />
                </strong>Alterada:
                <strong>
                    <input type="text" class="input_txt valid" id="send_alterada" name="send_alterada" value="<?php echo @$send_alterada; ?>" />
                </strong><br />
                Lado  izquierdo:<strong> </strong>Ausente:<strong>
                    <input type="text" class="input_txt valid" id="seni_ausente" name="seni_ausente" value="<?php echo @$seni_ausente; ?>" />
                </strong>Presente:
                <input type="text" class="input_txt valid" id="seni_presente" name="seni_presente" value="<?php echo @$seni_presente; ?>" /> 
                Alterada:
                <input type="text" class="input_txt valid" id="seni_alterada" name="seni_alterada" value="<?php echo @$seni_alterada; ?>" />
            </p>
            <input type="text" class="input_txt valid" id="trige_masetero" name="trige_masetero" value="<?php echo @$trige_masetero; ?>" />
            <input type="text" class="input_txt valid" id="trige_temporal" name="trige_temporal" value="<?php echo @$trige_temporal; ?>" />

            <p><strong>OBSERVACIONES: </strong></p>
            <input type="text" class="input_txt valid" id="trige_oservacion" name="trige_oservacion" value="<?php echo @$trige_oservacion; ?>" />
            <br>
            <p><strong>Componente motor:</strong></p>
            <p>Músculos  maseteros: <strong>
                    <input type="text" class="input_txt valid" id="trige_masetero2" name="trige_masetero2" value="<?php echo @$trige_masetero; ?>" />
                    <u> </u></strong><br />
                Músculos  temporales:<strong>
                    <input type="text" class="input_txt valid" id="trige_temporal2" name="trige_temporal2" value="<?php echo @$trige_temporal; ?>" />
                    <u></u></strong><br />
                Músculos  pterigoideos: <strong>
                    <input type="text" class="input_txt valid" id="trige_pterigo" name="trige_pterigo" value="<?php echo @$trige_pterigo; ?>" />
                    <u></u></strong><br />
                Tensor del  velo del velo del paladar:<strong>
                    <input type="text" class="input_txt valid" id="trige_tensor" name="trige_tensor" value="<?php echo @$trige_tensor; ?>" />
                    <u></u></strong><br />
                Miloiodeos:<strong>
                    <input type="text" class="input_txt valid" id="trige_miloi" name="trige_miloi" value="<?php echo @$trige_miloi; ?>" />
                </strong><br />
                Vientre  anterior del digástrico:<strong>
                    <input type="text" class="input_txt valid" id="trige_vientre" name="trige_vientre" value="<?php echo @$trige_vientre; ?>" />
                </strong></p>
                <p><strong>OBSERVACIONES:</strong></p>
                <input type="text" class="input_txt valid" id="trige_obser2" name="trige_obser2" value="<?php echo @$trige_obser2; ?>" />
            
                <br>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>