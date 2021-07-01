<?php
if (isset($_REQUEST['guardar_rtf_vista_lateral']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtf_vista_lateral'] == 'new') {

        $sql = "INSERT INTO rtf_vista_lateral (
    `id_rtf_vista_lateral`,
    `id_proceso`,
    `id_usuario`,
    `historia`,
    `lat_cabeza_derecho`,
    `lat_cabeza_izquierdo`,
    `lat_cuello_derecho`,
    `lat_cuello_izquierdo`,
    `lat_tronco_derecho`,
    `lat_tronco_izquierdo`,
    `lat_hombros_derecho`,
    `lat_hombros_izquierdo`,
    `lat_cadera_derecho`,
    `id_cita`,
    `id_vinicial`,
    `lat_cadera_izquierdo`
    ) VALUES (
    NULL,
    '" . $_REQUEST['id_proceso'] . "' ,
    '" . $_SESSION['id_usuario'] . "' ,
    '" . $_REQUEST['historia'] . "' ,
    '" . $_REQUEST['lat_cabeza_derecho'] . "' ,
    '" . $_REQUEST['lat_cabeza_izquierdo'] . "' ,
    '" . $_REQUEST['lat_cuello_derecho'] . "' ,
    '" . $_REQUEST['lat_cuello_izquierdo'] . "' ,
    '" . $_REQUEST['lat_tronco_derecho'] . "' ,
    '" . $_REQUEST['lat_tronco_izquierdo'] . "' ,
    '" . $_REQUEST['lat_hombros_derecho'] . "' ,
    '" . $_REQUEST['lat_hombros_izquierdo'] . "' ,
    '" . $_REQUEST['lat_cadera_derecho'] . "' ,
    '" . $_REQUEST['id_cita'] . "' ,
    '" . $_REQUEST['id_vinicial'] . "' ,
    '" . $_REQUEST['lat_cadera_izquierdo'] . "' 
    ) ";
    } else if ($_REQUEST['id_rtf_vista_lateral'] != '') {

        $sql = "UPDATE rtf_vista_lateral set 
        `lat_cabeza_derecho` = '" . $_REQUEST['lat_cabeza_derecho'] . "' ,
        `lat_cabeza_izquierdo` = '" . $_REQUEST['lat_cabeza_izquierdo'] . "' ,
        `lat_cuello_derecho` = '" . $_REQUEST['lat_cuello_derecho'] . "' ,
        `lat_cuello_izquierdo` = '" . $_REQUEST['lat_cuello_izquierdo'] . "' ,
        `lat_tronco_derecho` = '" . $_REQUEST['lat_tronco_derecho'] . "' ,
        `lat_tronco_izquierdo` = '" . $_REQUEST['lat_tronco_izquierdo'] . "' ,
        `lat_hombros_derecho` = '" . $_REQUEST['lat_hombros_derecho'] . "' ,
        `lat_hombros_izquierdo` = '" . $_REQUEST['lat_hombros_izquierdo'] . "' ,
        `lat_cadera_derecho` = '" . $_REQUEST['lat_cadera_derecho'] . "' ,
        `lat_cadera_izquierdo` = '" . $_REQUEST['lat_cadera_izquierdo'] . "' WHERE `id_rtf_vista_lateral` = '" . $_REQUEST['id_rtf_vista_lateral'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rtf_vista_lateral = 'new';
$sql = "SELECT * from rtf_vista_lateral WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtf_vista_lateral = $row['id_rtf_vista_lateral'];
    $lat_cabeza_derecho = $row['lat_cabeza_derecho'];
    $lat_cabeza_izquierdo = $row['lat_cabeza_izquierdo'];
    $lat_cuello_derecho = $row['lat_cuello_derecho'];
    $lat_cuello_izquierdo = $row['lat_cuello_izquierdo'];
    $lat_tronco_derecho = $row['lat_tronco_derecho'];
    $lat_tronco_izquierdo = $row['lat_tronco_izquierdo'];
    $lat_hombros_derecho = $row['lat_hombros_derecho'];
    $lat_hombros_izquierdo = $row['lat_hombros_izquierdo'];
    $lat_cadera_derecho = $row['lat_cadera_derecho'];
    $lat_cadera_izquierdo = $row['lat_cadera_izquierdo'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rtf_vista_lateral").click(function(){
            $("#open-rtf_vista_lateral").show();
            $(this).hide();
            $("#content-rtf_vista_lateral").hide('slow');
        });

        $("#open-rtf_vista_lateral").click(function(){
            $("#close-rtf_vista_lateral").show();
            $(this).hide();
            $("#content-rtf_vista_lateral").show('slow');
        });

    });

</script>
<fieldset id="rtf_vista_lateral">
    <legend align="left"> <div class="arrow-c" id="close-rtf_vista_lateral"></div> <div class="arrow-o" id="open-rtf_vista_lateral" ></div> <font>Valoracion terapia fisica - Vista lateral</font></legend>
    <div id="content-rtf_vista_lateral">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_rtf_vista_lateral" id="guardar_rtf_vista_lateral" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
        <form id="form_rtf_vista_lateral" name="form_rtf_vista_lateral" action="<?php echo @$action_form_rtf_vista_lateral ?>#rtf_vista_lateral" method="post">

            <input type="hidden" id="id_rtf_vista_lateral" name="id_rtf_vista_lateral" value="<?php echo @$id_rtf_vista_lateral ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td>Segmento</td>
                    <td>Derecho</td>
                    <td>Izquierdo</td>
                </tr>
                <tr class="row1">
                    <td>Cabeza</td>
                    <td><input type="text" class="input_txt valid" id="lat_cabeza_derecho" name="lat_cabeza_derecho" value="<?php echo @$lat_cabeza_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="lat_cabeza_izquierdo" name="lat_cabeza_izquierdo" value="<?php echo @$lat_cabeza_izquierdo; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td>Cuello</td>
                    <td><input type="text" class="input_txt valid" id="lat_cuello_derecho" name="lat_cuello_derecho" value="<?php echo @$lat_cuello_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="lat_cuello_izquierdo" name="lat_cuello_izquierdo" value="<?php echo @$lat_cuello_izquierdo; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td>Hombros</td>
                    <td><input type="text" class="input_txt valid" id="lat_hombros_derecho" name="lat_hombros_derecho" value="<?php echo @$lat_hombros_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="lat_hombros_izquierdo" name="lat_hombros_izquierdo" value="<?php echo @$lat_hombros_izquierdo; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td>Tronco</td>
                    <td><input type="text" class="input_txt valid" id="lat_tronco_derecho" name="lat_tronco_derecho" value="<?php echo @$lat_tronco_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="lat_tronco_izquierdo" name="lat_tronco_izquierdo" value="<?php echo @$lat_tronco_izquierdo; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td>Cadera</td>
                    <td><input type="text" class="input_txt valid" id="lat_cadera_derecho" name="lat_cadera_derecho" value="<?php echo @$lat_cadera_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="lat_cadera_izquierdo" name="lat_cadera_izquierdo" value="<?php echo @$lat_cadera_izquierdo; ?>" />
                    </td>
                </tr>
            </table>

        <?php echo @$button ?>

        </form><br>
    </div>
</fieldset>