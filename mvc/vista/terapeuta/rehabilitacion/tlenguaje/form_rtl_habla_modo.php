<?php
if (isset($_REQUEST['guardar_rtl_habla_modo']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtl_habla_modo'] == 'new') {

        $sql = "INSERT INTO rtl_habla_modo (
        `id_rtl_habla_modo`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `t6_en_reposo`,
        `id_cita`,
        `id_vinicial`,
        `t6_en_fonacion`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['t6_en_reposo'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['t6_en_fonacion'] . "' 
        ) ";
            } else if ($_REQUEST['id_rtl_habla_modo'] != '') {

                $sql = "UPDATE rtl_habla_modo set 
        `t6_en_reposo` = '" . $_REQUEST['t6_en_reposo'] . "' ,
        `t6_en_fonacion` = '" . $_REQUEST['t6_en_fonacion'] . "' WHERE `id_rtl_habla_modo` = '" . $_REQUEST['id_rtl_habla_modo'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rtl_habla_modo = 'new';
$sql = "SELECT * from rtl_habla_modo WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtl_habla_modo = $row['id_rtl_habla_modo'];
    
    if($row['t6_en_reposo']==1)
        $t6_en_reposo_1 = " checked='checked' ";
    if($row['t6_en_reposo']==2)
        $t6_en_reposo_2 = " checked='checked' ";
    if($row['t6_en_reposo']==3)
        $t6_en_reposo_3 = " checked='checked' ";
    if($row['t6_en_reposo']==4)
        $t6_en_reposo_4 = " checked='checked' ";
    if($row['t6_en_reposo']==5)
        $t6_en_reposo_5 = " checked='checked' ";
    
    if($row['t6_en_fonacion']==1)
        $t6_en_fonacion_1 = " checked='checked' ";
    if($row['t6_en_fonacion']==2)
        $t6_en_fonacion_2 = " checked='checked' ";
    if($row['t6_en_fonacion']==3)
        $t6_en_fonacion_3 = " checked='checked' ";
    if($row['t6_en_fonacion']==4)
        $t6_en_fonacion_4 = " checked='checked' ";
    if($row['t6_en_fonacion']==5)
        $t6_en_fonacion_5 = " checked='checked' ";
        
    break;
}
?>
<script>

    $(function(){

        $("#close-rtl_habla_modo").click(function(){
            $("#open-rtl_habla_modo").show();
            $(this).hide();
            $("#content-rtl_habla_modo").hide('slow');
        });

        $("#open-rtl_habla_modo").click(function(){
            $("#close-rtl_habla_modo").show();
            $(this).hide();
            $("#content-rtl_habla_modo").show('slow');
        });

    });

</script>
<fieldset id="rtl_habla_modo">
    <legend align="left"> <div class="arrow-c" id="close-rtl_habla_modo"></div> <div class="arrow-o" id="open-rtl_habla_modo" ></div> <font>Valoracion terapia lenguaje - Habla modo</font></legend>
    <div id="content-rtl_habla_modo">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_rtl_habla_modo" id="guardar_rtl_habla_modo" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
        <form id="form_rtl_habla_modo" name="form_rtl_habla_modo" action="<?php echo @$action_form_rtl_habla_modo ?>#rtl_habla_modo" method="post">

            <input type="hidden" id="id_rtl_habla_modo" name="id_rtl_habla_modo" value="<?php echo @$id_rtl_habla_modo ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td><b>En reposo</b></td>
                    <td></td>
                    <td><b>En fonacion</b></td>
                    <td></td>
                </tr>
                <tr class="row1">
                    <td>Nasal</td>
                    <td><input type="radio" class="" id="" name="t6_en_reposo" value="1" <?php echo @$t6_en_reposo_1; ?> /></td>
                    <td>Nasal</td>
                    <td><input type="radio" class="" id="" name="t6_en_fonacion" value="1" <?php echo @$t6_en_fonacion_1; ?> /></td>
                </tr>
                <tr class="row1">
                    <td>Oral</td>
                    <td><input type="radio" class="" id="" name="t6_en_reposo" value="2" <?php echo @$t6_en_reposo_2; ?> /></td>
                    <td>Oral</td>
                    <td><input type="radio" class="" id="" name="t6_en_fonacion" value="2" <?php echo @$t6_en_fonacion_2; ?> /></td>
                </tr>
                <tr class="row1">
                    <td>Mixto</td>
                    <td><input type="radio" class="" id="" name="t6_en_reposo" value="3" <?php echo @$t6_en_reposo_3; ?> /></td>
                    <td>Mixto</td>
                    <td><input type="radio" class="" id="" name="t6_en_fonacion" value="3" <?php echo @$t6_en_fonacion_3; ?> /></td>
                </tr>
                <tr class="row1">
                    <td>Predomina el oral</td>
                    <td><input type="radio" class="" id="" name="t6_en_reposo" value="4" <?php echo @$t6_en_reposo_4; ?> /></td>
                    <td>Predomina el oral</td>
                    <td><input type="radio" class="" id="" name="t6_en_fonacion" value="4" <?php echo @$t6_en_fonacion_4; ?> /></td>
                </tr>
                <tr class="row1">
                    <td>Predomina el nasal</td>
                    <td><input type="radio" class="" id="" name="t6_en_reposo" value="5" <?php echo @$t6_en_reposo_5; ?> /></td>
                    <td>Predomina el nasal</td>
                    <td><input type="radio" class="" id="" name="t6_en_fonacion" value="5" <?php echo @$t6_en_fonacion_5; ?> /></td>
                </tr>
            </table>

            
<?php echo @$button ?>
        </form><br>
    </div>
</fieldset>