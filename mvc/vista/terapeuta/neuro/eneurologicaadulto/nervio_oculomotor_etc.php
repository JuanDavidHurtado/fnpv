<?php
if (isset($_REQUEST['guardar_nervio_optico_trigemino1']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_nervio_optico'] == 'new') {

        echo $sql = "INSERT INTO nervio_optico_trigemino (
`od_posicion_p`,
`oi_posicion_p`,
`od_directo`,
`oi_directo`,
`od_consensual`,
`oi_consensual`,
`od_mov`,
`oi_mov`,
`od_cercana`,
`oi_cercana`,
`od_lejana`,
`oi_lejana`,
`tsd_ausente`,
`tsd_presente`,
`tsd_v1`,
`tsd_v2`,
`tsd_v3`,
`id_usuario`,
`historia`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`id_proceso`
) VALUES (
NULL,
'" . $_REQUEST['od_posicion_p'] . "' ,
'" . $_REQUEST['oi_posicion_p'] . "' ,
'" . $_REQUEST['od_directo'] . "' ,
'" . $_REQUEST['oi_directo'] . "' ,
'" . $_REQUEST['od_consensual'] . "' ,
'" . $_REQUEST['oi_consensual'] . "' ,
'" . $_REQUEST['od_mov'] . "' ,
'" . $_REQUEST['oi_mov'] . "' ,
'" . $_REQUEST['od_cercana'] . "' ,
'" . $_REQUEST['oi_cercana'] . "' ,
'" . $_REQUEST['od_lejana'] . "' ,
'" . $_REQUEST['oi_lejana'] . "' ,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['id_proceso'] . "'
) ";
    } else if ($_REQUEST['id_nervio_optico'] != '') {

        $sql = "UPDATE nervio_optico_trigemino set
`od_posicion_p` = '" . $_REQUEST['od_posicion_p'] . "' ,
`oi_posicion_p` = '" . $_REQUEST['oi_posicion_p'] . "' ,
`od_directo` = '" . $_REQUEST['od_directo'] . "' ,
`oi_directo` = '" . $_REQUEST['oi_directo'] . "' ,
`od_consensual` = '" . $_REQUEST['od_consensual'] . "' ,
`oi_consensual` = '" . $_REQUEST['oi_consensual'] . "' ,
`od_mov` = '" . $_REQUEST['od_mov'] . "' ,
`oi_mov` = '" . $_REQUEST['oi_mov'] . "' ,
`od_cercana` = '" . $_REQUEST['od_cercana'] . "' ,
`oi_cercana` = '" . $_REQUEST['oi_cercana'] . "' ,
`od_lejana` = '" . $_REQUEST['od_lejana'] . "' ,
`oi_lejana` = '" . $_REQUEST['oi_lejana'] . "' ,
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
   
    $od_posicion_p = $row['od_posicion_p'];
    $oi_posicion_p = $row['oi_posicion_p'];
    $od_directo = $row['od_directo'];
    $oi_directo = $row['oi_directo'];
    $od_consensual = $row['od_consensual'];
    $oi_consensual = $row['oi_consensual'];
    $od_mov = $row['od_mov'];
    $oi_mov = $row['oi_mov'];
    $od_cercana = $row['od_cercana'];
    $oi_cercana = $row['oi_cercana'];
    $od_lejana = $row['od_lejana'];
    $oi_lejana = $row['oi_lejana'];
    

    break;
}
?>
<script>

    $(function() {

        $("#close-nervio_optico_trigemino1").click(function() {
            $("#open-nervio_optico_trigemino1").show();
            $(this).hide();
            $("#content-nervio_optico_trigemino1").hide('slow');
        });

        $("#open-nervio_optico_trigemino1").click(function() {
            $("#close-nervio_optico_trigemino1").show();
            $(this).hide();
            $("#content-nervio_optico_trigemino1").show('slow');
        });

    });

</script>
<fieldset id="nervio_optico_trigemino1">
    <legend align="left"> <div class="arrow-c" id="close-nervio_optico_trigemino1"></div> <div class="arrow-o" id="open-nervio_optico_trigemino1" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Nervio  oculomotor, Nervio troclear, Nervio motor ocular externo</font></legend>
    <div id="content-nervio_optico_trigemino1">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_nervio_optico_trigemino1" id="guardar_nervio_optico_trigemino1" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_nervio_optico_trigemino1" name="form_nervio_optico_trigemino1" action="<?php echo @$action_form_nervio_optico_trigemino ?>#nervio_optico_trigemino1" method="post">
            <input type="hidden" class="input_txt valid" id="id_nervio_optico" name="id_nervio_optico" value="<?php echo @$id_nervio_optico; ?>" />
            <table border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="222" valign="top"><p><strong>&nbsp;</strong></p></td>
                    <td width="189" valign="top"><p align="center"><strong>O.D</strong></p></td>
                    <td width="177" valign="top"><p align="center"><strong>O.I</strong></p></td>
                </tr>
                <tr>
                    <td width="222" valign="top"><p>Posición    del parpado</p></td>
                    <td width="189" valign="top">
                        <input type="text" class="input_txt valid" id="od_posicion_p" name="od_posicion_p" value="<?php echo @$od_posicion_p; ?>" />
                    </td>
                    <td width="177" valign="top"><strong>
                            <input type="text" class="input_txt valid" id="oi_posicion_p" name="oi_posicion_p" value="<?php echo @$oi_posicion_p; ?>" />
                            &nbsp;</strong></td>
                </tr>
                <tr>
                    <td width="222" rowspan="3" valign="top"><p>Reflejo    Fotomotor</p>
                        <ul>
                            <li>Directo</li>
                            <li>Consensual</li>
                        </ul></td>
                    <td width="189" valign="top"><p><strong>&nbsp;</strong></p></td>
                    <td width="177" valign="top"><p><strong>&nbsp;</strong></p></td>
                </tr>
                <tr>
                    <td width="189" valign="top">
                        <input type="text" class="input_txt valid" id="od_directo" name="od_directo" value="<?php echo @$od_directo; ?>" />
                    </td>
                    <td width="177" valign="top">
                        <input type="text" class="input_txt valid" id="oi_directo" name="oi_directo" value="<?php echo @$oi_directo; ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="189" valign="top">
                        <input type="text" class="input_txt valid" id="od_consensual" name="od_consensual" value="<?php echo @$od_consensual; ?>" />
                    </td>
                    <td width="177" valign="top">
                        <input type="text" class="input_txt valid" id="oi_consensual" name="oi_consensual" value="<?php echo @$oi_consensual; ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="222" valign="top"><p>Movimiento    de los musculo extraoculares</p></td>
                    <td width="189" valign="top">
                        <input type="text" class="input_txt valid" id="od_mov" name="od_mov" value="<?php echo @$od_mov; ?>" />
                    </td>
                    <td width="177" valign="top">
                        <input type="text" class="input_txt valid" id="oi_mov" name="oi_mov" value="<?php echo @$oi_mov; ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="222" rowspan="3" valign="top"><p>Reflejo de    acomodación:</p>
                        <ul>
                            <li>Visión cercana</li>
                            <li>Visión lejana</li>
                        </ul></td>
                    <td width="189" valign="top"><p align="center"></td>
                    <td width="177" valign="top"><p align="center"></td>
                </tr>
                <tr>
                    <td width="189" valign="top">
                        <input type="text" class="input_txt valid" id="od_cercana" name="od_cercana" value="<?php echo @$od_cercana; ?>" />
                    </td>
                    <td width="177" valign="top">
                        <input type="text" class="input_txt valid" id="oi_cercana" name="oi_cercana" value="<?php echo @$oi_cercana; ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="189" valign="top">
                        <input type="text" class="input_txt valid" id="od_lejana" name="od_lejana" value="<?php echo @$od_lejana; ?>" />
                    </td>
                    <td width="177" valign="top">
                        <input type="text" class="input_txt valid" id="oi_lejana" name="oi_lejana" value="<?php echo @$oi_lejana; ?>" />
                    </td>
                </tr>
            </table>
            
                <br>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>