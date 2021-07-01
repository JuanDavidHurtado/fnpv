<?php
if (isset($_REQUEST['guardar_rtl_vlenguaje_nivel_semantico']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtl_vlenguaje_nivel_semantico'] == 'new') {

        $sql = "INSERT INTO rtl_vlenguaje_nivel_semantico (
        `id_rtl_vlenguaje_nivel_semantico`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `t2_vocabulario`,
        `t2_ordenes_sencillas`,
        `t2_ordenes_complejas`,
        `t2_neologismos`,
        `t2_circunloquios`,
        `t2_perseveraciones`,
        `id_cita`,
        `id_vinicial`,
        `t2_observaciones`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['t2_vocabulario'] . "' ,
        '" . $_REQUEST['t2_ordenes_sencillas'] . "' ,
        '" . $_REQUEST['t2_ordenes_complejas'] . "' ,
        '" . $_REQUEST['t2_neologismos'] . "' ,
        '" . $_REQUEST['t2_circunloquios'] . "' ,
        '" . $_REQUEST['t2_perseveraciones'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['t2_observaciones'] . "' 
        ) ";
    } else if ($_REQUEST['id_rtl_vlenguaje_nivel_semantico'] != '') {

        $sql = "UPDATE rtl_vlenguaje_nivel_semantico set 
        `t2_vocabulario` = '" . $_REQUEST['t2_vocabulario'] . "' ,
        `t2_ordenes_sencillas` = '" . $_REQUEST['t2_ordenes_sencillas'] . "' ,
        `t2_ordenes_complejas` = '" . $_REQUEST['t2_ordenes_complejas'] . "' ,
        `t2_neologismos` = '" . $_REQUEST['t2_neologismos'] . "' ,
        `t2_circunloquios` = '" . $_REQUEST['t2_circunloquios'] . "' ,
        `t2_perseveraciones` = '" . $_REQUEST['t2_perseveraciones'] . "' ,
        `t2_observaciones` = '" . $_REQUEST['t2_observaciones'] . "' WHERE `id_rtl_vlenguaje_nivel_semantico` = '" . $_REQUEST['id_rtl_vlenguaje_nivel_semantico'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rtl_vlenguaje_nivel_semantico = 'new';
$sql = "SELECT * from rtl_vlenguaje_nivel_semantico WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtl_vlenguaje_nivel_semantico = $row['id_rtl_vlenguaje_nivel_semantico'];
    
    if($row['t2_vocabulario']==1)
        $t2_vocabulario1 = " checked='checked' ";
    else if($row['t2_vocabulario']==2)
        $t2_vocabulario2 = " checked='checked' ";
    else if($row['t2_vocabulario']==3)
        $t2_vocabulario3 = " checked='checked' ";
    
    $t2_ordenes_sencillas = $row['t2_ordenes_sencillas']==0?"":" checked='checked' ";
    $t2_ordenes_complejas = $row['t2_ordenes_complejas']==0?"":" checked='checked' ";
    $t2_neologismos = $row['t2_neologismos']==0?"":" checked='checked' ";
    $t2_circunloquios = $row['t2_circunloquios']==0?"":" checked='checked' ";
    $t2_perseveraciones = $row['t2_perseveraciones']==0?"":" checked='checked' ";
    $t2_observaciones = $row['t2_observaciones'];
    break;
}
?>
<script>


    $(function(){

        $("#close-rtl_vlenguaje_nivel_semantico").click(function(){
            $("#open-rtl_vlenguaje_nivel_semantico").show();
            $(this).hide();
            $("#content-rtl_vlenguaje_nivel_semantico").hide('slow');
        });

        $("#open-rtl_vlenguaje_nivel_semantico").click(function(){
            $("#close-rtl_vlenguaje_nivel_semantico").show();
            $(this).hide();
            $("#content-rtl_vlenguaje_nivel_semantico").show('slow');
        });

    });

</script>
<fieldset id="rtl_vlenguaje_nivel_semantico">
    <legend align="left"> <div class="arrow-c" id="close-rtl_vlenguaje_nivel_semantico"></div> <div class="arrow-o" id="open-rtl_vlenguaje_nivel_semantico" ></div> <font>Valoracion terapia lenguaje - Evaluación lenguaje oral nivel semantico</font></legend>
    <div id="content-rtl_vlenguaje_nivel_semantico">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_rtl_vlenguaje_nivel_semantico" id="guardar_rtl_vlenguaje_nivel_semantico" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
        <form id="form_rtl_vlenguaje_nivel_semantico" name="form_rtl_vlenguaje_nivel_semantico" action="<?php echo @$action_form_rtl_vlenguaje_nivel_semantico ?>#rtl_vlenguaje_nivel_semantico" method="post">

            <input type="hidden" id="id_rtl_vlenguaje_nivel_semantico" name="id_rtl_vlenguaje_nivel_semantico" value="<?php echo @$id_rtl_vlenguaje_nivel_semantico ?>" />
            
            <b>Nivel   semántico </b>
            <br>
            
            Vocabulario
            Pobre <input type="radio" class="" id="" name="t2_vocabulario" value="1" <?php echo @$t2_vocabulario1; ?> />
            mediano <input type="radio" class="" id="" name="t2_vocabulario" value="2" <?php echo @$t2_vocabulario2; ?> /> 
            adecuado <input type="radio" class="" id="" name="t2_vocabulario" value="3" <?php echo @$t2_vocabulario3; ?> />
            <br>
            Ordenes sencillas <input type="checkbox" class="" id="t2_ordenes_sencillas" name="t2_ordenes_sencillas" value="1" <?php echo @$t2_ordenes_sencillas; ?> />,
            ordenes complejas <input type="checkbox" class="" id="t2_ordenes_complejas" name="t2_ordenes_complejas" value="1" <?php echo @$t2_ordenes_complejas; ?> />
            <br>
            Alteraciones semánticas
            <br>
            Neologismos <input type="checkbox" class="" id="t2_neologismos" name="t2_neologismos" value="1" <?php echo @$t2_neologismos; ?> />,
            circunloquios <input type="checkbox" class="" id="t2_circunloquios" name="t2_circunloquios" value="1" <?php echo @$t2_circunloquios; ?> />,
            perseveraciones <input type="checkbox" class="" id="t2_perseveraciones" name="t2_perseveraciones" value="1" <?php echo @$t2_perseveraciones; ?> />
            <br>
            Categorías semánticas 
            <br>
            <textarea class="input_txt_area" rows="3" cols="50" id="t2_observaciones" name="t2_observaciones" ><?php echo @$t2_observaciones; ?></textarea><br>
            <?php echo @$button ?>
            
        </form><br>
    </div>
</fieldset>