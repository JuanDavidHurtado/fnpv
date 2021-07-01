<?php
if (isset($_REQUEST['guardar_rtf_sensibilidad']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtf_sensibilidad'] == 'new') {

        $sql = "INSERT INTO rtf_sensibilidad (
        `id_rtf_sensibilidad`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `superficial`,
        `profunda`,
        `id_cita`,
        `id_vinicial`,
        `cartical`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['superficial'] . "' ,
        '" . $_REQUEST['profunda'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['cartical'] . "' 
        ) ";
    } else if ($_REQUEST['id_rtf_sensibilidad'] != '') {

        $sql = "UPDATE rtf_sensibilidad set 
        `superficial` = '" . $_REQUEST['superficial'] . "' ,
        `profunda` = '" . $_REQUEST['profunda'] . "' ,
        `cartical` = '" . $_REQUEST['cartical'] . "' WHERE `id_rtf_sensibilidad` = '" . $_REQUEST['id_rtf_sensibilidad'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}

$id_rtf_sensibilidad = 'new';
$sql = "SELECT * from rtf_sensibilidad WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtf_sensibilidad = $row['id_rtf_sensibilidad'];
    $superficial = $row['superficial'];
    $profunda = $row['profunda'];
    $cartical = $row['cartical'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rtf-sensibilidad").click(function(){
            $("#open-rtf-sensibilidad").show();
            $(this).hide();
            $("#content-rtf-sensibilidad").hide('slow');
        });
        
        $("#open-rtf-sensibilidad").click(function(){
            $("#close-rtf-sensibilidad").show();
            $(this).hide();
            $("#content-rtf-sensibilidad").show('slow');
        });
    
    });

</script>
<fieldset id="rtf-sensibilidad">
    <legend align="left"> <div class="arrow-c" id="close-rtf-sensibilidad"></div> <div class="arrow-o" id="open-rtf-sensibilidad" ></div> <font>Valoracion terapia fisica - Sensibilidad</font></legend>
    <div id="content-rtf-sensibilidad">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button  name="guardar_rtf_sensibilidad" id="guardar_rtf_sensibilidad" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rtf_sensibilidad" name="form_rtf_sensibilidad" action="<?php echo @$action_form_sensibilidad ?>#rtf-sensibilidad" method="post">

            <input type="hidden" id="id_rtf_sensibilidad" name="id_rtf_sensibilidad" value="<?php echo @$id_rtf_sensibilidad ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td>Superficial</td>
                    <td>Profunda</td>
                    <td>Cortical</td>
                </tr>
                <tr class="row1">
                    <td><input type="text" class="input_txt valid" id="superficial" name="superficial" value="<?php echo @$superficial; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="profunda" name="profunda" value="<?php echo @$profunda; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="cartical" name="cartical" value="<?php echo @$cartical; ?>" />
                    </td>
                </tr>
            </table>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>