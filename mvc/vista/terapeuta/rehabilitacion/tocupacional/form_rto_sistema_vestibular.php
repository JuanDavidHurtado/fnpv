<?php
if (isset($_REQUEST['guardar_rto_sistema_vestibular']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rto_sistema_vestibular'] == 'new') {

        $sql = "INSERT INTO rto_sistema_vestibular (
        `id_rto_sistema_vestibular`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `posicion_espacio_hiporespuesta`,
        `posicion_espacio_inseguridad`,
        `posicion_espacio_intolerancia`,
        `posicion_espacio_no`,
        `equilibrio_pie_hiporespuesta`,
        `equilibrio_pie_inseguridad`,
        `equilibrio_pie_intolerancia`,
        `id_cita`,
        `id_vinicial`,
        `equilibrio_pie_no`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['posicion_espacio_hiporespuesta'] . "' ,
        '" . $_REQUEST['posicion_espacio_inseguridad'] . "' ,
        '" . $_REQUEST['posicion_espacio_intolerancia'] . "' ,
        '" . $_REQUEST['posicion_espacio_no'] . "' ,
        '" . $_REQUEST['equilibrio_pie_hiporespuesta'] . "' ,
        '" . $_REQUEST['equilibrio_pie_inseguridad'] . "' ,
        '" . $_REQUEST['equilibrio_pie_intolerancia'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['equilibrio_pie_no'] . "' 
        ) ";
    } else if ($_REQUEST['id_rto_sistema_vestibular'] != '') {

        $sql = "UPDATE rto_sistema_vestibular set 
        `posicion_espacio_hiporespuesta` = '" . $_REQUEST['posicion_espacio_hiporespuesta'] . "' ,
        `posicion_espacio_inseguridad` = '" . $_REQUEST['posicion_espacio_inseguridad'] . "' ,
        `posicion_espacio_intolerancia` = '" . $_REQUEST['posicion_espacio_intolerancia'] . "' ,
        `posicion_espacio_no` = '" . $_REQUEST['posicion_espacio_no'] . "' ,
        `equilibrio_pie_hiporespuesta` = '" . $_REQUEST['equilibrio_pie_hiporespuesta'] . "' ,
        `equilibrio_pie_inseguridad` = '" . $_REQUEST['equilibrio_pie_inseguridad'] . "' ,
        `equilibrio_pie_intolerancia` = '" . $_REQUEST['equilibrio_pie_intolerancia'] . "' ,
        `equilibrio_pie_no` = '" . $_REQUEST['equilibrio_pie_no'] . "' WHERE `id_rto_sistema_vestibular` = '" . $_REQUEST['id_rto_sistema_vestibular'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rto_sistema_vestibular = 'new';
$sql = "SELECT * from rto_sistema_vestibular WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rto_sistema_vestibular = $row['id_rto_sistema_vestibular'];
    $posicion_espacio_hiporespuesta = $row['posicion_espacio_hiporespuesta'];
    $posicion_espacio_inseguridad = $row['posicion_espacio_inseguridad'];
    $posicion_espacio_intolerancia = $row['posicion_espacio_intolerancia'];
    $posicion_espacio_no = $row['posicion_espacio_no'];
    $equilibrio_pie_hiporespuesta = $row['equilibrio_pie_hiporespuesta'];
    $equilibrio_pie_inseguridad = $row['equilibrio_pie_inseguridad'];
    $equilibrio_pie_intolerancia = $row['equilibrio_pie_intolerancia'];
    $equilibrio_pie_no = $row['equilibrio_pie_no'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rto_sistema_vestibular").click(function(){
            $("#open-rto_sistema_vestibular").show();
            $(this).hide();
            $("#content-rto_sistema_vestibular").hide('slow');
        });

        $("#open-rto_sistema_vestibular").click(function(){
            $("#close-rto_sistema_vestibular").show();
            $(this).hide();
            $("#content-rto_sistema_vestibular").show('slow');
        });

    });

</script>
<fieldset id="rto_sistema_vestibular">
    <legend align="left"> <div class="arrow-c" id="close-rto_sistema_vestibular"></div> <div class="arrow-o" id="open-rto_sistema_vestibular" ></div> <font>Valoracion terapia ocupacional - Sistema Vestibular</font></legend>
    <div id="content-rto_sistema_vestibular">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rto_sistema_vestibular" id="guardar_rto_sistema_vestibular" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rto_sistema_vestibular" name="form_rto_sistema_vestibular" action="<?php echo @$action_form_rto_sistema_vestibular ?>#rto_sistema_vestibular" method="post">

            <input type="hidden" id="id_rto_sistema_vestibular" name="id_rto_sistema_vestibular" value="<?php echo @$id_rto_sistema_vestibular ?>" />

            <table width="500" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td><b></b></td>
                    <td><b>Hiporespuesta</b></td>
                    <td><b>Inseguridad gravitacional</b></td>
                    <td><b>Intolerancia al movimiento</b></td>
                    <td><b>No eval</b></td>
                </tr>
                <tr class="row1">
                    <td><b>Posicion del espacio</b></td>
                    <td><input type="text" class="input_txt valid" id="posicion_espacio_hiporespuesta" name="posicion_espacio_hiporespuesta" value="<?php echo @$posicion_espacio_hiporespuesta; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="posicion_espacio_inseguridad" name="posicion_espacio_inseguridad" value="<?php echo @$posicion_espacio_inseguridad; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="posicion_espacio_intolerancia" name="posicion_espacio_intolerancia" value="<?php echo @$posicion_espacio_intolerancia; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="posicion_espacio_no" name="posicion_espacio_no" value="<?php echo @$posicion_espacio_no; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Equilibrio del pie</b></td>
                    <td><input type="text" class="input_txt valid" id="equilibrio_pie_hiporespuesta" name="equilibrio_pie_hiporespuesta" value="<?php echo @$equilibrio_pie_hiporespuesta; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="equilibrio_pie_inseguridad" name="equilibrio_pie_inseguridad" value="<?php echo @$equilibrio_pie_inseguridad; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="equilibrio_pie_intolerancia" name="equilibrio_pie_intolerancia" value="<?php echo @$equilibrio_pie_intolerancia; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="equilibrio_pie_no" name="equilibrio_pie_no" value="<?php echo @$equilibrio_pie_no; ?>" />
                    </td>
                </tr>
            </table>

            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>