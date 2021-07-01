<?php
if (isset($_REQUEST['guardar_rtf_vista_anterior']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtf_vista_anterior'] == 'new') {

        $sql = "INSERT INTO rtf_vista_anterior (
        `id_rtf_vista_anterior`,
        `cabeza_derecho`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `cabeza_izquierdo`,
        `cuello_derecho`,
        `cuello_izquierdo`,
        `hombros_derecho`,
        `hombros_izquierdo`,
        `crestas_derecho`,
        `id_cita`,
        `id_vinicial`,
        `crestas_izquierdo`
        ) VALUES (
        NULL,
        '" . $_REQUEST['cabeza_derecho'] . "' ,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['cabeza_izquierdo'] . "' ,
        '" . $_REQUEST['cuello_derecho'] . "' ,
        '" . $_REQUEST['cuello_izquierdo'] . "' ,
        '" . $_REQUEST['hombros_derecho'] . "' ,
        '" . $_REQUEST['hombros_izquierdo'] . "' ,
        '" . $_REQUEST['crestas_derecho'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['crestas_izquierdo'] . "' 
        ) ";
    } else if ($_REQUEST['id_rtf_vista_anterior'] != '') {

        $sql = "UPDATE rtf_vista_anterior set 
        `cabeza_derecho` = '" . $_REQUEST['cabeza_derecho'] . "' ,
        `cabeza_izquierdo` = '" . $_REQUEST['cabeza_izquierdo'] . "' ,
        `cuello_derecho` = '" . $_REQUEST['cuello_derecho'] . "' ,
        `cuello_izquierdo` = '" . $_REQUEST['cuello_izquierdo'] . "' ,
        `hombros_derecho` = '" . $_REQUEST['hombros_derecho'] . "' ,
        `hombros_izquierdo` = '" . $_REQUEST['hombros_izquierdo'] . "' ,
        `crestas_derecho` = '" . $_REQUEST['crestas_derecho'] . "' ,
        `crestas_izquierdo` = '" . $_REQUEST['crestas_izquierdo'] . "' WHERE `id_rtf_vista_anterior` = '" . $_REQUEST['id_rtf_vista_anterior'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}

$id_rtf_vista_anterior = 'new';
$sql = "SELECT * from rtf_vista_anterior WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtf_vista_anterior = $row['id_rtf_vista_anterior'];
    $cabeza_derecho = $row['cabeza_derecho'];
    $id_proceso = $row['id_proceso'];
    $id_usuario = $row['id_usuario'];
    $historia = $row['historia'];
    $cabeza_izquierdo = $row['cabeza_izquierdo'];
    $cuello_derecho = $row['cuello_derecho'];
    $cuello_izquierdo = $row['cuello_izquierdo'];
    $hombros_derecho = $row['hombros_derecho'];
    $hombros_izquierdo = $row['hombros_izquierdo'];
    $crestas_derecho = $row['crestas_derecho'];
    $crestas_izquierdo = $row['crestas_izquierdo'];
    break;
}
?>
<script>

    $(function() {

        $("#close-rtf-vista-anterior").click(function() {
            $("#open-rtf-vista-anterior").show();
            $(this).hide();
            $("#content-rtf-vista-anterior").hide('slow');
        });

        $("#open-rtf-vista-anterior").click(function() {
            $("#close-rtf-vista-anterior").show();
            $(this).hide();
            $("#content-rtf-vista-anterior").show('slow');
        });

    });

</script>
<fieldset id="rtf-vista-anterior">
    <legend align="left"> <div class="arrow-c" id="close-rtf-vista-anterior"></div> <div class="arrow-o" id="open-rtf-vista-anterior" ></div> <font>Valoracion terapia fisica - Vista anterior</font></legend>
    <div id="content-rtf-vista-anterior">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button  name="guardar_rtf_vista_anterior" id="guardar_rtf_vista_anterior" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rtf_reflejos" name="form_rtf_vista_anterior" action="<?php echo @$action_form_vista_anterior ?>#rtf-vista-anterior" method="post">

            <input type="hidden" id="id_rtf_vista_anterior" name="id_rtf_vista_anterior" value="<?php echo @$id_rtf_vista_anterior ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td>Segmento</td>
                    <td>Derecho</td>
                    <td>Izquierdo</td>
                </tr>
                <tr class="row1">
                    <td>Cabeza</td>
                    <td><input type="text" class="input_txt valid" id="cabeza_derecho" name="cabeza_derecho" value="<?php echo @$cabeza_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="cabeza_izquierdo" name="cabeza_izquierdo" value="<?php echo @$cabeza_izquierdo; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td>Cuello</td>
                    <td><input type="text" class="input_txt valid" id="cuello_derecho" name="cuello_derecho" value="<?php echo @$cuello_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="cuello_izquierdo" name="cuello_izquierdo" value="<?php echo @$cuello_izquierdo; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td>Hombros</td>
                    <td><input type="text" class="input_txt valid" id="hombros_derecho" name="hombros_derecho" value="<?php echo @$hombros_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="hombros_izquierdo" name="hombros_izquierdo" value="<?php echo @$hombros_izquierdo; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td>Crestas iliacas</td>
                    <td><input type="text" class="input_txt valid" id="crestas_derecho" name="crestas_derecho" value="<?php echo @$crestas_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="crestas_izquierdo" name="crestas_izquierdo" value="<?php echo @$crestas_izquierdo; ?>" />
                    </td>
                </tr>

            </table>




            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>