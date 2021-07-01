<?php
if (isset($_REQUEST['guardar_rtf_equilibrio']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtf_equilibrio'] == 'new') {

        $sql = "INSERT INTO rtf_equilibrio (
        `id_rtf_equilibrio`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `equi_anterior_sentado`,
        `equi_anterior_pie`,
        `equi_lateral_sentado`,
        `equi_lateral_pie`,
        `equi_posterior_sentado`,
        `id_cita`,
        `id_vinicial`,
        `equi_posterior_pie`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['equi_anterior_sentado'] . "' ,
        '" . $_REQUEST['equi_anterior_pie'] . "' ,
        '" . $_REQUEST['equi_lateral_sentado'] . "' ,
        '" . $_REQUEST['equi_lateral_pie'] . "' ,
        '" . $_REQUEST['equi_posterior_sentado'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['equi_posterior_pie'] . "' 
        ) ";
    } else if ($_REQUEST['id_rtf_equilibrio'] != '') {

        $sql = "UPDATE rtf_equilibrio set 
        `equi_anterior_sentado` = '" . $_REQUEST['equi_anterior_sentado'] . "' ,
        `equi_anterior_pie` = '" . $_REQUEST['equi_anterior_pie'] . "' ,
        `equi_lateral_sentado` = '" . $_REQUEST['equi_lateral_sentado'] . "' ,
        `equi_lateral_pie` = '" . $_REQUEST['equi_lateral_pie'] . "' ,
        `equi_posterior_sentado` = '" . $_REQUEST['equi_posterior_sentado'] . "' ,
        `equi_posterior_pie` = '" . $_REQUEST['equi_posterior_pie'] . "' WHERE `id_rtf_equilibrio` = '" . $_REQUEST['id_rtf_equilibrio'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rtf_equilibrio = 'new';
$sql = "SELECT * from rtf_equilibrio WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtf_equilibrio = $row['id_rtf_equilibrio'];
    $equi_anterior_sentado = $row['equi_anterior_sentado'];
    $equi_anterior_pie = $row['equi_anterior_pie'];
    $equi_lateral_sentado = $row['equi_lateral_sentado'];
    $equi_lateral_pie = $row['equi_lateral_pie'];
    $equi_posterior_sentado = $row['equi_posterior_sentado'];
    $equi_posterior_pie = $row['equi_posterior_pie'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rtf_equilibrio").click(function(){
            $("#open-rtf_equilibrio").show();
            $(this).hide();
            $("#content-rtf_equilibrio").hide('slow');
        });

        $("#open-rtf_equilibrio").click(function(){
            $("#close-rtf_equilibrio").show();
            $(this).hide();
            $("#content-rtf_equilibrio").show('slow');
        });

    });

</script>
<fieldset id="rtf_equilibrio">
    <legend align="left"> <div class="arrow-c" id="close-rtf_equilibrio"></div> <div class="arrow-o" id="open-rtf_equilibrio" ></div> <font>Valoracion terapia fisica - Equilibrio</font></legend>
    <div id="content-rtf_equilibrio">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rtf_equilibrio" id="guardar_rtf_equilibrio" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rtf_equilibrio" name="form_rtf_equilibrio" action="<?php echo @$action_form_rtf_equilibrio ?>#rtf_equilibrio" method="post">

            <input type="hidden" id="id_rtf_equilibrio" name="id_rtf_equilibrio" value="<?php echo @$id_rtf_equilibrio ?>" />
            
            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td>Posicion</td>
                    <td>Sentado</td>
                    <td>De pie</td>
                </tr>
                <tr class="row1">
                    <td>Equilibrio anterior</td>
                    <td><input type="text" class="input_txt valid" id="equi_anterior_sentado" name="equi_anterior_sentado" value="<?php echo @$equi_anterior_sentado; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="equi_anterior_pie" name="equi_anterior_pie" value="<?php echo @$equi_anterior_pie; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td>Equilibrio lateral</td>
                    <td><input type="text" class="input_txt valid" id="equi_lateral_sentado" name="equi_lateral_sentado" value="<?php echo @$equi_lateral_sentado; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="equi_lateral_pie" name="equi_lateral_pie" value="<?php echo @$equi_lateral_pie; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td>Equilibrio posterior</td>
                    <td><input type="text" class="input_txt valid" id="equi_posterior_sentado" name="equi_posterior_sentado" value="<?php echo @$equi_posterior_sentado; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="equi_posterior_pie" name="equi_posterior_pie" value="<?php echo @$equi_posterior_pie; ?>" />
                    </td>
                </tr>


            </table>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>