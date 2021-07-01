<?php
if (isset($_REQUEST['guardar_rtl_intensidad']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtl_intensidad'] == 'new') {

        $sql = "INSERT INTO rtl_intensidad (
        `id_rtl_intensidad`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `id_cita`,
        `id_vinicial`,
        `t10_intensidad`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['t10_intensidad'] . "' 
        ) ";
    } else if ($_REQUEST['id_rtl_intensidad'] != '') {

        $sql = "UPDATE rtl_intensidad set 
        `t10_intensidad` = '" . $_REQUEST['t10_intensidad'] . "' WHERE `id_rtl_intensidad` = '" . $_REQUEST['id_rtl_intensidad'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rtl_intensidad = 'new';
$sql = "SELECT * from rtl_intensidad WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtl_intensidad = $row['id_rtl_intensidad'];

    if ($row['t10_intensidad'] == 1)
        $t10_intensidad_1 = " checked='checked' ";
    if ($row['t10_intensidad'] == 2)
        $t10_intensidad_2 = " checked='checked' ";
    if ($row['t10_intensidad'] == 3)
        $t10_intensidad_3 = " checked='checked' ";
    if ($row['t10_intensidad'] == 4)
        $t10_intensidad_4 = " checked='checked' ";

    break;
}
?>
<script>

    $(function(){

        $("#close-rtl_intensidad").click(function(){
            $("#open-rtl_intensidad").show();
            $(this).hide();
            $("#content-rtl_intensidad").hide('slow');
        });

        $("#open-rtl_intensidad").click(function(){
            $("#close-rtl_intensidad").show();
            $(this).hide();
            $("#content-rtl_intensidad").show('slow');
        });

    });

</script>
<fieldset id="rtl_intensidad">
    <legend align="left"> <div class="arrow-c" id="close-rtl_intensidad"></div> <div class="arrow-o" id="open-rtl_intensidad" ></div> <font>Valoracion terapia lenguaje - Intensidad</font></legend>
    <div id="content-rtl_intensidad">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rtl_intensidad" id="guardar_rtl_intensidad" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rtl_intensidad" name="form_rtl_intensidad" action="<?php echo @$action_form_rtl_intensidad ?>#rtl_intensidad" method="post">

            <input type="hidden" id="id_rtl_intensidad" name="id_rtl_intensidad" value="<?php echo @$id_rtl_intensidad ?>" />

            Normal <input type="radio" class="" id="" name="t10_intensidad" value="1" <?php echo @$t10_intensidad_1; ?> />,
            Aumentada <input type="radio" class="" id="" name="t10_intensidad" value="2" <?php echo @$t10_intensidad_2; ?> />,
            Disminuida <input type="radio" class="" id="" name="t10_intensidad" value="3" <?php echo @$t10_intensidad_3; ?> />,
            Irregular <input type="radio" class="" id="" name="t10_intensidad" value="4" <?php echo @$t10_intensidad_4; ?> />            
            <?php echo @$button ?>
            
        </form><br>
    </div>
</fieldset>