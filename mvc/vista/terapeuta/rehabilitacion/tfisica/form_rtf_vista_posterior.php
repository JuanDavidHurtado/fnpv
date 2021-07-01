<?php
if (isset($_REQUEST['guardar_rtf_vista_posterior']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtf_vista_posterior'] == 'new') {

        $sql = "INSERT INTO rtf_vista_posterior (
        `id_rtf_vista_posterior`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `pos_cabeza_derecho`,
        `pos_cabeza_izquierdo`,
        `pos_cuello_derecho`,
        `pos_cuello_izquierdo`,
        `pos_hombros_derecho`,
        `pos_hombros_izquierdo`,
        `pos_crestas_derecho`,
        `pos_crestas_izquierdo`,
        `pos_pliegues_gluteos_derecho`,
        `pos_pliegues_gluteos_izquierdo`,
        `pos_pliegues_popliteos_derecho`,
        `id_cita`,
        `id_vinicial`,
        `pos_pliegues_popliteos_izquierdo`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['pos_cabeza_derecho'] . "' ,
        '" . $_REQUEST['pos_cabeza_izquierdo'] . "' ,
        '" . $_REQUEST['pos_cuello_derecho'] . "' ,
        '" . $_REQUEST['pos_cuello_izquierdo'] . "' ,
        '" . $_REQUEST['pos_hombros_derecho'] . "' ,
        '" . $_REQUEST['pos_hombros_izquierdo'] . "' ,
        '" . $_REQUEST['pos_crestas_derecho'] . "' ,
        '" . $_REQUEST['pos_crestas_izquierdo'] . "' ,
        '" . $_REQUEST['pos_pliegues_gluteos_derecho'] . "' ,
        '" . $_REQUEST['pos_pliegues_gluteos_izquierdo'] . "' ,
        '" . $_REQUEST['pos_pliegues_popliteos_derecho'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['pos_pliegues_popliteos_izquierdo'] . "' 
        ) ";
    } else if ($_REQUEST['id_rtf_vista_posterior'] != '') {

        $sql = "UPDATE rtf_vista_posterior set 
        `pos_cabeza_derecho` = '" . $_REQUEST['pos_cabeza_derecho'] . "' ,
        `pos_cabeza_izquierdo` = '" . $_REQUEST['pos_cabeza_izquierdo'] . "' ,
        `pos_cuello_derecho` = '" . $_REQUEST['pos_cuello_derecho'] . "' ,
        `pos_cuello_izquierdo` = '" . $_REQUEST['pos_cuello_izquierdo'] . "' ,
        `pos_hombros_derecho` = '" . $_REQUEST['pos_hombros_derecho'] . "' ,
        `pos_hombros_izquierdo` = '" . $_REQUEST['pos_hombros_izquierdo'] . "' ,
        `pos_crestas_derecho` = '" . $_REQUEST['pos_crestas_derecho'] . "' ,
        `pos_crestas_izquierdo` = '" . $_REQUEST['pos_crestas_izquierdo'] . "' ,
        `pos_pliegues_gluteos_derecho` = '" . $_REQUEST['pos_pliegues_gluteos_derecho'] . "' ,
        `pos_pliegues_gluteos_izquierdo` = '" . $_REQUEST['pos_pliegues_gluteos_izquierdo'] . "' ,
        `pos_pliegues_popliteos_derecho` = '" . $_REQUEST['pos_pliegues_popliteos_derecho'] . "' ,
        `pos_pliegues_popliteos_izquierdo` = '" . $_REQUEST['pos_pliegues_popliteos_izquierdo'] . "' WHERE `id_rtf_vista_posterior` = '" . $_REQUEST['id_rtf_vista_posterior'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}

$id_rtf_vista_posterior = 'new';
$sql = "SELECT * from rtf_vista_posterior WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtf_vista_posterior = $row['id_rtf_vista_posterior'];
    $id_proceso = $row['id_proceso'];
    $id_usuario = $row['id_usuario'];
    $historia = $row['historia'];
    $pos_cabeza_derecho = $row['pos_cabeza_derecho'];
    $pos_cabeza_izquierdo = $row['pos_cabeza_izquierdo'];
    $pos_cuello_derecho = $row['pos_cuello_derecho'];
    $pos_cuello_izquierdo = $row['pos_cuello_izquierdo'];
    $pos_hombros_derecho = $row['pos_hombros_derecho'];
    $pos_hombros_izquierdo = $row['pos_hombros_izquierdo'];
    $pos_crestas_derecho = $row['pos_crestas_derecho'];
    $pos_crestas_izquierdo = $row['pos_crestas_izquierdo'];
    $pos_pliegues_gluteos_derecho = $row['pos_pliegues_gluteos_derecho'];
    $pos_pliegues_gluteos_izquierdo = $row['pos_pliegues_gluteos_izquierdo'];
    $pos_pliegues_popliteos_derecho = $row['pos_pliegues_popliteos_derecho'];
    $pos_pliegues_popliteos_izquierdo = $row['pos_pliegues_popliteos_izquierdo'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rtf-vista-posterior").click(function(){
            $("#open-rtf-vista-posterior").show();
            $(this).hide();
            $("#content-rtf-vista-posterior").hide('slow');
        });
        
        $("#open-rtf-vista-posterior").click(function(){
            $("#close-rtf-vista-posterior").show();
            $(this).hide();
            $("#content-rtf-vista-posterior").show('slow');
        });
    
    });

</script>
<fieldset id="rtf-vista-posterior">
    <legend align="left"> <div class="arrow-c" id="close-rtf-vista-posterior"></div> <div class="arrow-o" id="open-rtf-vista-posterior" ></div> <font>Valoracion terapia fisica - Vista posterior</font></legend>
    <div id="content-rtf-vista-posterior">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button  name="guardar_rtf_vista_posterior" id="guardar_rtf_vista_posterior" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rtf_posterior" name="form_rtf_vista_posterior" action="<?php echo @$action_form_vista_posterior ?>#rtf-vista-posterior" method="post">

            <input type="hidden" id="id_rtf_vista_posterior" name="id_rtf_vista_posterior" value="<?php echo @$id_rtf_vista_posterior ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td>Segmento</td>
                    <td>Derecho</td>
                    <td>Izquierdo</td>
                </tr>
                <tr class="row1">
                    <td>Cabeza</td>
                    <td><input type="text" class="input_txt valid" id="pos_cabeza_derecho" name="pos_cabeza_derecho" value="<?php echo @$pos_cabeza_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="pos_cabeza_izquierdo" name="pos_cabeza_izquierdo" value="<?php echo @$pos_cabeza_izquierdo; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td>Cuello</td>
                    <td><input type="text" class="input_txt valid" id="pos_cuello_derecho" name="pos_cuello_derecho" value="<?php echo @$pos_cuello_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="pos_cuello_izquierdo" name="pos_cuello_izquierdo" value="<?php echo @$pos_cuello_izquierdo; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td>Hombros</td>
                    <td><input type="text" class="input_txt valid" id="pos_hombros_derecho" name="pos_hombros_derecho" value="<?php echo @$pos_hombros_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="pos_hombros_izquierdo" name="pos_hombros_izquierdo" value="<?php echo @$pos_hombros_izquierdo; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td>Crestas iliacas</td>
                    <td><input type="text" class="input_txt valid" id="pos_crestas_derecho" name="pos_crestas_derecho" value="<?php echo @$pos_crestas_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="pos_crestas_izquierdo" name="pos_crestas_izquierdo" value="<?php echo @$pos_crestas_izquierdo; ?>" />
                    </td>
                </tr>

                <tr class="row1">
                    <td>Pliegues gluteos</td>
                    <td><input type="text" class="input_txt valid" id="pos_pliegues_gluteos_derecho" name="pos_pliegues_gluteos_derecho" value="<?php echo @$pos_pliegues_gluteos_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="pos_pliegues_gluteos_izquierdo" name="pos_pliegues_gluteos_izquierdo" value="<?php echo @$pos_pliegues_gluteos_izquierdo; ?>" />
                    </td>
                </tr>

                <tr class="row1">
                    <td>Pliegues popliteos</td>
                    <td><input type="text" class="input_txt valid" id="pos_pliegues_popliteos_derecho" name="pos_pliegues_popliteos_derecho" value="<?php echo @$pos_pliegues_popliteos_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="pos_pliegues_popliteos_izquierdo" name="pos_pliegues_popliteos_izquierdo" value="<?php echo @$pos_pliegues_popliteos_izquierdo; ?>" />
                    </td>
                </tr>

            </table>



            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>