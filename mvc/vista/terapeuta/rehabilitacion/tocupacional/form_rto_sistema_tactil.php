<?php
if (isset($_REQUEST['guardar_rto_sistema_tactil']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rto_sistema_tactil'] == 'new') {

        $sql = "INSERT INTO rto_sistema_tactil (
        `id_rto_sistema_tactil`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `localizacion_defensibilidad`,
        `localizacion_hoporespuesta`,
        `localizacion_discriminativos`,
        `localizacion_no`,
        `discriminacion_defensibilidad`,
        `discriminacion_hoporespuesta`,
        `discriminacion_discriminativos`,
        `discriminacion_no`,
        `grafestesia_defensibilidad`,
        `grafestesia_hoporespuesta`,
        `grafestesia_discriminativos`,
        `grafestesia_no`,
        `esterognosia_defensibilidad`,
        `esterognosia_hoporespuesta`,
        `esterognosia_discriminativos`,
        `id_cita`,
        `id_vinicial`,
        `esterognosia_no`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['localizacion_defensibilidad'] . "' ,
        '" . $_REQUEST['localizacion_hoporespuesta'] . "' ,
        '" . $_REQUEST['localizacion_discriminativos'] . "' ,
        '" . $_REQUEST['localizacion_no'] . "' ,
        '" . $_REQUEST['discriminacion_defensibilidad'] . "' ,
        '" . $_REQUEST['discriminacion_hoporespuesta'] . "' ,
        '" . $_REQUEST['discriminacion_discriminativos'] . "' ,
        '" . $_REQUEST['discriminacion_no'] . "' ,
        '" . $_REQUEST['grafestesia_defensibilidad'] . "' ,
        '" . $_REQUEST['grafestesia_hoporespuesta'] . "' ,
        '" . $_REQUEST['grafestesia_discriminativos'] . "' ,
        '" . $_REQUEST['grafestesia_no'] . "' ,
        '" . $_REQUEST['esterognosia_defensibilidad'] . "' ,
        '" . $_REQUEST['esterognosia_hoporespuesta'] . "' ,
        '" . $_REQUEST['esterognosia_discriminativos'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['esterognosia_no'] . "' 
        ) ";
    } else if ($_REQUEST['id_rto_sistema_tactil'] != '') {

        $sql = "UPDATE rto_sistema_tactil set 
        `localizacion_defensibilidad` = '" . $_REQUEST['localizacion_defensibilidad'] . "' ,
        `localizacion_hoporespuesta` = '" . $_REQUEST['localizacion_hoporespuesta'] . "' ,
        `localizacion_discriminativos` = '" . $_REQUEST['localizacion_discriminativos'] . "' ,
        `localizacion_no` = '" . $_REQUEST['localizacion_no'] . "' ,
        `discriminacion_defensibilidad` = '" . $_REQUEST['discriminacion_defensibilidad'] . "' ,
        `discriminacion_hoporespuesta` = '" . $_REQUEST['discriminacion_hoporespuesta'] . "' ,
        `discriminacion_discriminativos` = '" . $_REQUEST['discriminacion_discriminativos'] . "' ,
        `discriminacion_no` = '" . $_REQUEST['discriminacion_no'] . "' ,
        `grafestesia_defensibilidad` = '" . $_REQUEST['grafestesia_defensibilidad'] . "' ,
        `grafestesia_hoporespuesta` = '" . $_REQUEST['grafestesia_hoporespuesta'] . "' ,
        `grafestesia_discriminativos` = '" . $_REQUEST['grafestesia_discriminativos'] . "' ,
        `grafestesia_no` = '" . $_REQUEST['grafestesia_no'] . "' ,
        `esterognosia_defensibilidad` = '" . $_REQUEST['esterognosia_defensibilidad'] . "' ,
        `esterognosia_hoporespuesta` = '" . $_REQUEST['esterognosia_hoporespuesta'] . "' ,
        `esterognosia_discriminativos` = '" . $_REQUEST['esterognosia_discriminativos'] . "' ,
        `esterognosia_no` = '" . $_REQUEST['esterognosia_no'] . "' WHERE `id_rto_sistema_tactil` = '" . $_REQUEST['id_rto_sistema_tactil'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rto_sistema_tactil = 'new';
$sql = "SELECT * from rto_sistema_tactil WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rto_sistema_tactil = $row['id_rto_sistema_tactil'];
    $localizacion_defensibilidad = $row['localizacion_defensibilidad'];
    $localizacion_hoporespuesta = $row['localizacion_hoporespuesta'];
    $localizacion_discriminativos = $row['localizacion_discriminativos'];
    $localizacion_no = $row['localizacion_no'];
    $discriminacion_defensibilidad = $row['discriminacion_defensibilidad'];
    $discriminacion_hoporespuesta = $row['discriminacion_hoporespuesta'];
    $discriminacion_discriminativos = $row['discriminacion_discriminativos'];
    $discriminacion_no = $row['discriminacion_no'];
    $grafestesia_defensibilidad = $row['grafestesia_defensibilidad'];
    $grafestesia_hoporespuesta = $row['grafestesia_hoporespuesta'];
    $grafestesia_discriminativos = $row['grafestesia_discriminativos'];
    $grafestesia_no = $row['grafestesia_no'];
    $esterognosia_defensibilidad = $row['esterognosia_defensibilidad'];
    $esterognosia_hoporespuesta = $row['esterognosia_hoporespuesta'];
    $esterognosia_discriminativos = $row['esterognosia_discriminativos'];
    $esterognosia_no = $row['esterognosia_no'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rto_sistema_tactil").click(function(){
            $("#open-rto_sistema_tactil").show();
            $(this).hide();
            $("#content-rto_sistema_tactil").hide('slow');
        });

        $("#open-rto_sistema_tactil").click(function(){
            $("#close-rto_sistema_tactil").show();
            $(this).hide();
            $("#content-rto_sistema_tactil").show('slow');
        });

    });

</script>
<fieldset id="rto_sistema_tactil">
    <legend align="left"> <div class="arrow-c" id="close-rto_sistema_tactil"></div> <div class="arrow-o" id="open-rto_sistema_tactil" ></div> <font>Valoracion terapia ocupacional - Sistema Tactil</font></legend>
    <div id="content-rto_sistema_tactil">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rto_sistema_tactil" id="guardar_rto_sistema_tactil" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rto_sistema_tactil" name="form_rto_sistema_tactil" action="<?php echo @$action_form_rto_sistema_tactil ?>#rto_sistema_tactil" method="post">

            <input type="hidden" id="id_rto_sistema_tactil" name="id_rto_sistema_tactil" value="<?php echo @$id_rto_sistema_tactil ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td><b>Pruebas</b></td>
                    <td><b>Defensibilidad tactil</b></td>
                    <td><b>Hoporespuesta tactil</b></td>
                    <td><b>Discriminativos</b></td>
                    <td><b>No eval</b></td>
                </tr>
                <tr class="row1">
                    <td><b>Localizacion estimulo tactil</b></td>
                    <td><input type="text" class="input_txt valid" id="localizacion_defensibilidad" name="localizacion_defensibilidad" value="<?php echo @$localizacion_defensibilidad; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="localizacion_hoporespuesta" name="localizacion_hoporespuesta" value="<?php echo @$localizacion_hoporespuesta; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="localizacion_discriminativos" name="localizacion_discriminativos" value="<?php echo @$localizacion_discriminativos; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="localizacion_no" name="localizacion_no" value="<?php echo @$localizacion_no; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Discriminacion dedos</b></td>
                    <td><input type="text" class="input_txt valid" id="discriminacion_defensibilidad" name="discriminacion_defensibilidad" value="<?php echo @$discriminacion_defensibilidad; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="discriminacion_hoporespuesta" name="discriminacion_hoporespuesta" value="<?php echo @$discriminacion_hoporespuesta; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="discriminacion_discriminativos" name="discriminacion_discriminativos" value="<?php echo @$discriminacion_discriminativos; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="discriminacion_no" name="discriminacion_no" value="<?php echo @$discriminacion_no; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Grafestesia</b></td>
                    <td><input type="text" class="input_txt valid" id="grafestesia_defensibilidad" name="grafestesia_defensibilidad" value="<?php echo @$grafestesia_defensibilidad; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="grafestesia_hoporespuesta" name="grafestesia_hoporespuesta" value="<?php echo @$grafestesia_hoporespuesta; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="grafestesia_discriminativos" name="grafestesia_discriminativos" value="<?php echo @$grafestesia_discriminativos; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="grafestesia_no" name="grafestesia_no" value="<?php echo @$grafestesia_no; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Esterognosia</b></td>
                    <td><input type="text" class="input_txt valid" id="esterognosia_defensibilidad" name="esterognosia_defensibilidad" value="<?php echo @$esterognosia_defensibilidad; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="esterognosia_hoporespuesta" name="esterognosia_hoporespuesta" value="<?php echo @$esterognosia_hoporespuesta; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="esterognosia_discriminativos" name="esterognosia_discriminativos" value="<?php echo @$esterognosia_discriminativos; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="esterognosia_no" name="esterognosia_no" value="<?php echo @$esterognosia_no; ?>" />
                    </td>
                </tr>
            </table>

            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>