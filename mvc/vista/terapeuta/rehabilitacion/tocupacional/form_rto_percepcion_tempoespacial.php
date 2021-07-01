<?php
if (isset($_REQUEST['guardar_rto_percepcion_tempoespacial']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rto_percepcion_tempoespacial'] == 'new') {

        $sql = "INSERT INTO rto_percepcion_tempoespacial (
        `id_rto_percepcion_tempoespacial`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `dia`,
        `mes`,
        `ano`,
        `id_cita`,
        `id_vinicial`,
        `eventos_cotidianos`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['dia'] . "' ,
        '" . $_REQUEST['mes'] . "' ,
        '" . $_REQUEST['ano'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['eventos_cotidianos'] . "' 
        ) ";
    } else if ($_REQUEST['id_rto_percepcion_tempoespacial'] != '') {

        $sql = "UPDATE rto_percepcion_tempoespacial set 
        `dia` = '" . $_REQUEST['dia'] . "' ,
        `mes` = '" . $_REQUEST['mes'] . "' ,
        `ano` = '" . $_REQUEST['ano'] . "' ,
        `eventos_cotidianos` = '" . $_REQUEST['eventos_cotidianos'] . "' WHERE `id_rto_percepcion_tempoespacial` = '" . $_REQUEST['id_rto_percepcion_tempoespacial'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rto_percepcion_tempoespacial = 'new';
$sql = "SELECT * from rto_percepcion_tempoespacial WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rto_percepcion_tempoespacial = $row['id_rto_percepcion_tempoespacial'];

    if ($row['dia'] == 1)
        $dia_1 = 'checked="checked"';
    if ($row['dia'] == 2)
        $dia_2 = 'checked="checked"';
    if ($row['dia'] == 3)
        $dia_3 = 'checked="checked"';


    if ($row['mes'] == 1)
        $mes_1 = 'checked="checked"';
    if ($row['mes'] == 2)
        $mes_2 = 'checked="checked"';
    if ($row['mes'] == 3)
        $mes_3 = 'checked="checked"';


    if ($row['ano'] == 1)
        $ano_1 = 'checked="checked"';
    if ($row['ano'] == 2)
        $ano_2 = 'checked="checked"';
    if ($row['ano'] == 3)
        $ano_3 = 'checked="checked"';


    if ($row['eventos_cotidianos'] == 1)
        $eventos_cotidianos_1 = 'checked="checked"';
    if ($row['eventos_cotidianos'] == 2)
        $eventos_cotidianos_2 = 'checked="checked"';
    if ($row['eventos_cotidianos'] == 3)
        $eventos_cotidianos_3 = 'checked="checked"';


    break;
}
?>
<script>

    $(function(){

        $("#close-rto_percepcion_tempoespacial").click(function(){
            $("#open-rto_percepcion_tempoespacial").show();
            $(this).hide();
            $("#content-rto_percepcion_tempoespacial").hide('slow');
        });

        $("#open-rto_percepcion_tempoespacial").click(function(){
            $("#close-rto_percepcion_tempoespacial").show();
            $(this).hide();
            $("#content-rto_percepcion_tempoespacial").show('slow');
        });

    });

</script>
<fieldset id="rto_percepcion_tempoespacial">
    <legend align="left"> <div class="arrow-c" id="close-rto_percepcion_tempoespacial"></div> <div class="arrow-o" id="open-rto_percepcion_tempoespacial" ></div> <font>Valoracion terapia ocupacional - Percepcion Tempoespacial</font></legend>
    <div id="content-rto_percepcion_tempoespacial">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rto_percepcion_tempoespacial" id="guardar_rto_percepcion_tempoespacial" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rto_percepcion_tempoespacial" name="form_rto_percepcion_tempoespacial" action="<?php echo @$action_form_rto_percepcion_tempoespacial ?>#rto_percepcion_tempoespacial" method="post">

            <input type="hidden" id="id_rto_percepcion_tempoespacial" name="id_rto_percepcion_tempoespacial" value="<?php echo @$id_rto_percepcion_tempoespacial ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td><b></b></td>
                    <td><b>Identifica</b></td>
                    <td><b>No identifica</b></td>
                    <td><b>No eval</b></td>
                </tr>
                <tr class="row1">
                    <td><b>Dia</b></td>
                    <td><input type="radio" class="" id="" name="dia" value="1" <?php echo @$dia_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="dia" value="2" <?php echo @$dia_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="dia" value="3" <?php echo @$dia_3; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Mes</b></td>
                    <td><input type="radio" class="" id="" name="mes" value="1" <?php echo @$mes_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="mes" value="2" <?php echo @$mes_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="mes" value="3" <?php echo @$mes_3; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Año</b></td>
                    <td><input type="radio" class="" id="" name="ano" value="1" <?php echo @$ano_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="ano" value="2" <?php echo @$ano_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="ano" value="3" <?php echo @$ano_3; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Relacion con eventos cotidianos</b></td>
                    <td><input type="radio" class="" id="" name="eventos_cotidianos" value="1" <?php echo @$eventos_cotidianos_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="eventos_cotidianos" value="2" <?php echo @$eventos_cotidianos_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="eventos_cotidianos" value="3" <?php echo @$eventos_cotidianos_3; ?> />
                    </td>
                </tr>
            </table>
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>