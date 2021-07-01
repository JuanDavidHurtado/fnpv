<?php
if (isset($_REQUEST['guardar_rto_sistema_visual']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rto_sistema_visual'] == 'new') {

        $sql = "INSERT INTO rto_sistema_visual (
        `id_rto_sistema_visual`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `horizontal_con`,
        `horizontal_sin`,
        `horizontal_no`,
        `vertical_con`,
        `vertical_sin`,
        `vertical_no`,
        `diagonal_con`,
        `diagonal_sin`,
        `diagonal_no`,
        `circular_con`,
        `circular_sin`,
        `id_cita`,
        `id_vinicial`,
        `circular_no`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['horizontal_con'] . "' ,
        '" . $_REQUEST['horizontal_sin'] . "' ,
        '" . $_REQUEST['horizontal_no'] . "' ,
        '" . $_REQUEST['vertical_con'] . "' ,
        '" . $_REQUEST['vertical_sin'] . "' ,
        '" . $_REQUEST['vertical_no'] . "' ,
        '" . $_REQUEST['diagonal_con'] . "' ,
        '" . $_REQUEST['diagonal_sin'] . "' ,
        '" . $_REQUEST['diagonal_no'] . "' ,
        '" . $_REQUEST['circular_con'] . "' ,
        '" . $_REQUEST['circular_sin'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['circular_no'] . "' 
        ) ";
    } else if ($_REQUEST['id_rto_sistema_visual'] != '') {

        $sql = "UPDATE rto_sistema_visual set 
        `horizontal_con` = '" . $_REQUEST['horizontal_con'] . "' ,
        `horizontal_sin` = '" . $_REQUEST['horizontal_sin'] . "' ,
        `horizontal_no` = '" . $_REQUEST['horizontal_no'] . "' ,
        `vertical_con` = '" . $_REQUEST['vertical_con'] . "' ,
        `vertical_sin` = '" . $_REQUEST['vertical_sin'] . "' ,
        `vertical_no` = '" . $_REQUEST['vertical_no'] . "' ,
        `diagonal_con` = '" . $_REQUEST['diagonal_con'] . "' ,
        `diagonal_sin` = '" . $_REQUEST['diagonal_sin'] . "' ,
        `diagonal_no` = '" . $_REQUEST['diagonal_no'] . "' ,
        `circular_con` = '" . $_REQUEST['circular_con'] . "' ,
        `circular_sin` = '" . $_REQUEST['circular_sin'] . "' ,
        `circular_no` = '" . $_REQUEST['circular_no'] . "' WHERE `id_rto_sistema_visual` = '" . $_REQUEST['id_rto_sistema_visual'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rto_sistema_visual = 'new';
$sql = "SELECT * from rto_sistema_visual WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rto_sistema_visual = $row['id_rto_sistema_visual'];
    $horizontal_con = $row['horizontal_con'];
    $horizontal_sin = $row['horizontal_sin'];
    $horizontal_no = $row['horizontal_no'];
    $vertical_con = $row['vertical_con'];
    $vertical_sin = $row['vertical_sin'];
    $vertical_no = $row['vertical_no'];
    $diagonal_con = $row['diagonal_con'];
    $diagonal_sin = $row['diagonal_sin'];
    $diagonal_no = $row['diagonal_no'];
    $circular_con = $row['circular_con'];
    $circular_sin = $row['circular_sin'];
    $circular_no = $row['circular_no'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rto_sistema_visual").click(function(){
            $("#open-rto_sistema_visual").show();
            $(this).hide();
            $("#content-rto_sistema_visual").hide('slow');
        });

        $("#open-rto_sistema_visual").click(function(){
            $("#close-rto_sistema_visual").show();
            $(this).hide();
            $("#content-rto_sistema_visual").show('slow');
        });

    });

</script>
<fieldset id="rto_sistema_visual">
    <legend align="left"> <div class="arrow-c" id="close-rto_sistema_visual"></div> <div class="arrow-o" id="open-rto_sistema_visual" ></div> <font>Valoracion terapia ocupacional - Sistema Visual</font></legend>
    <div id="content-rto_sistema_visual">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rto_sistema_visual" id="guardar_rto_sistema_visual" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rto_sistema_visual" name="form_rto_sistema_visual" action="<?php echo @$action_form_rto_sistema_visual ?>#rto_sistema_visual" method="post">

            <input type="hidden" id="id_rto_sistema_visual" name="id_rto_sistema_visual" value="<?php echo @$id_rto_sistema_visual ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td><b>Mecanismmos oculares</b></td>
                    <td><b>Con disociacion oculocefalica</b></td>
                    <td><b>Sin disociacion oculocefalica</b></td>
                    <td><b>No eval</b></td>
                </tr>
                <tr class="row1">
                    <td><b>Horizontal</b></td>
                    <td><input type="text" class="input_txt valid" id="horizontal_con" name="horizontal_con" value="<?php echo @$horizontal_con; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="horizontal_sin" name="horizontal_sin" value="<?php echo @$horizontal_sin; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="horizontal_no" name="horizontal_no" value="<?php echo @$horizontal_no; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Vertical</b></td>
                    <td><input type="text" class="input_txt valid" id="vertical_con" name="vertical_con" value="<?php echo @$vertical_con; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="vertical_sin" name="vertical_sin" value="<?php echo @$vertical_sin; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="vertical_no" name="vertical_no" value="<?php echo @$vertical_no; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Diagonal</b></td>
                    <td><input type="text" class="input_txt valid" id="diagonal_con" name="diagonal_con" value="<?php echo @$diagonal_con; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="diagonal_sin" name="diagonal_sin" value="<?php echo @$diagonal_sin; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="diagonal_no" name="diagonal_no" value="<?php echo @$diagonal_no; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Circular</b></td>
                    <td><input type="text" class="input_txt valid" id="circular_con" name="circular_con" value="<?php echo @$circular_con; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="circular_sin" name="circular_sin" value="<?php echo @$circular_sin; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="circular_no" name="circular_no" value="<?php echo @$circular_no; ?>" />
                    </td>
                </tr>
            </table>

            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>