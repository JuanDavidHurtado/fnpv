<?php
if (isset($_REQUEST['guardar_rto_percepcion_espacial']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rto_percepcion_espacial'] == 'new') {

        $sql = "INSERT INTO rto_percepcion_espacial (
        `id_rto_percepcion_espacial`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `arriba_abajo`,
        `adelante_atras`,
        `cerca_lejos`,
        `encima_debajo`,
        `id_cita`,
        `id_vinicial`,
        `dentro_fuera`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['arriba_abajo'] . "' ,
        '" . $_REQUEST['adelante_atras'] . "' ,
        '" . $_REQUEST['cerca_lejos'] . "' ,
        '" . $_REQUEST['encima_debajo'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['dentro_fuera'] . "' 
        ) ";
    } else if ($_REQUEST['id_rto_percepcion_espacial'] != '') {

        $sql = "UPDATE rto_percepcion_espacial set 
        `arriba_abajo` = '" . $_REQUEST['arriba_abajo'] . "' ,
        `adelante_atras` = '" . $_REQUEST['adelante_atras'] . "' ,
        `cerca_lejos` = '" . $_REQUEST['cerca_lejos'] . "' ,
        `encima_debajo` = '" . $_REQUEST['encima_debajo'] . "' ,
        `dentro_fuera` = '" . $_REQUEST['dentro_fuera'] . "' WHERE `id_rto_percepcion_espacial` = '" . $_REQUEST['id_rto_percepcion_espacial'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rto_percepcion_espacial = 'new';
$sql = "SELECT * from rto_percepcion_espacial WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rto_percepcion_espacial = $row['id_rto_percepcion_espacial'];

    if ($row['historia'] == 1)
        $historia_1 = ' checked="checked" ';
    if ($row['historia'] == 2)
        $historia_2 = ' checked="checked" ';
    if ($row['historia'] == 3)
        $historia_3 = ' checked="checked" ';


    if ($row['arriba_abajo'] == 1)
        $arriba_abajo_1 = ' checked="checked" ';
    if ($row['arriba_abajo'] == 2)
        $arriba_abajo_2 = ' checked="checked" ';
    if ($row['arriba_abajo'] == 3)
        $arriba_abajo_3 = ' checked="checked" ';


    if ($row['adelante_atras'] == 1)
        $adelante_atras_1 = ' checked="checked" ';
    if ($row['adelante_atras'] == 2)
        $adelante_atras_2 = ' checked="checked" ';
    if ($row['adelante_atras'] == 3)
        $adelante_atras_3 = ' checked="checked" ';


    if ($row['cerca_lejos'] == 1)
        $cerca_lejos_1 = ' checked="checked" ';
    if ($row['cerca_lejos'] == 2)
        $cerca_lejos_2 = ' checked="checked" ';
    if ($row['cerca_lejos'] == 3)
        $cerca_lejos_3 = ' checked="checked" ';


    if ($row['encima_debajo'] == 1)
        $encima_debajo_1 = ' checked="checked" ';
    if ($row['encima_debajo'] == 2)
        $encima_debajo_2 = ' checked="checked" ';
    if ($row['encima_debajo'] == 3)
        $encima_debajo_3 = ' checked="checked" ';


    if ($row['dentro_fuera'] == 1)
        $dentro_fuera_1 = ' checked="checked" ';
    if ($row['dentro_fuera'] == 2)
        $dentro_fuera_2 = ' checked="checked" ';
    if ($row['dentro_fuera'] == 3)
        $dentro_fuera_3 = ' checked="checked" ';


    break;
}
?>
<script>

    $(function(){

        $("#close-rto_percepcion_espacial").click(function(){
            $("#open-rto_percepcion_espacial").show();
            $(this).hide();
            $("#content-rto_percepcion_espacial").hide('slow');
        });

        $("#open-rto_percepcion_espacial").click(function(){
            $("#close-rto_percepcion_espacial").show();
            $(this).hide();
            $("#content-rto_percepcion_espacial").show('slow');
        });

    });

</script>
<fieldset id="rto_percepcion_espacial">
    <legend align="left"> <div class="arrow-c" id="close-rto_percepcion_espacial"></div> <div class="arrow-o" id="open-rto_percepcion_espacial" ></div> <font>Valoracion terapia ocupacional - Percepcion Espacial</font></legend>
    <div id="content-rto_percepcion_espacial">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rto_percepcion_espacial" id="guardar_rto_percepcion_espacial" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rto_percepcion_espacial" name="form_rto_percepcion_espacial" action="<?php echo @$action_form_rto_percepcion_espacial ?>#rto_percepcion_espacial" method="post">

            <input type="hidden" id="id_rto_percepcion_espacial" name="id_rto_percepcion_espacial" value="<?php echo @$id_rto_percepcion_espacial ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td><b></b></td>
                    <td><b>Identifica</b></td>
                    <td><b>No identifica</b></td>
                    <td><b>No eval</b></td>
                </tr>
                <tr class="row1">
                    <td><b>Arriba-abajo</b></td>
                    <td><input type="radio" class="" id="" name="arriba_abajo" value="1" <?php echo @$arriba_abajo_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="arriba_abajo" value="2" <?php echo @$arriba_abajo_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="arriba_abajo" value="3" <?php echo @$arriba_abajo_3; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Adelante-atras</b></td>
                    <td><input type="radio" class="" id="" name="adelante_atras" value="1" <?php echo @$adelante_atras_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="adelante_atras" value="2" <?php echo @$adelante_atras_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="adelante_atras" value="3" <?php echo @$adelante_atras_3; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Cerca-lejos</b></td>
                    <td><input type="radio" class="" id="" name="cerca_lejos" value="1" <?php echo @$cerca_lejos_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="cerca_lejos" value="2" <?php echo @$cerca_lejos_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="cerca_lejos" value="3" <?php echo @$cerca_lejos_3; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Encima-debajo</b></td>
                    <td><input type="radio" class="" id="" name="encima_debajo" value="1" <?php echo @$encima_debajo_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="encima_debajo" value="2" <?php echo @$encima_debajo_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="encima_debajo" value="3" <?php echo @$encima_debajo_3; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Dentro-fuera</b></td>
                    <td><input type="radio" class="" id="" name="dentro_fuera" value="1" <?php echo @$dentro_fuera_1; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="dentro_fuera" value="2" <?php echo @$dentro_fuera_2; ?> />
                    </td>
                    <td><input type="radio" class="" id="" name="dentro_fuera" value="3" <?php echo @$dentro_fuera_3; ?> />
                    </td>
                </tr>
            </table>
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>