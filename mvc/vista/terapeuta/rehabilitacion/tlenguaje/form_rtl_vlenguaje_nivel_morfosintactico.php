<?php
if (isset($_REQUEST['guardar_rtl_vlenguaje_nivel_morfosintactico']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtl_vlenguaje_nivel_morfosintactico'] == 'new') {

        $sql = "INSERT INTO rtl_vlenguaje_nivel_morfosintactico (
        `id_rtl_vlenguaje_nivel_morfosintactico`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `t3_articulos`,
        `t3_sustantivos`,
        `t3_concordancia`,
        `t3_presente`,
        `t3_pasado`,
        `t3_futuro`,
        `t3_adjetivos`,
        `t3_pronombres`,
        `t3_conjunciones`,
        `t3_preposiciones`,
        `id_cita`,
        `id_vinicial`,
        `t3_extencion_frases`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['t3_articulos'] . "' ,
        '" . $_REQUEST['t3_sustantivos'] . "' ,
        '" . $_REQUEST['t3_concordancia'] . "' ,
        '" . $_REQUEST['t3_presente'] . "' ,
        '" . $_REQUEST['t3_pasado'] . "' ,
        '" . $_REQUEST['t3_futuro'] . "' ,
        '" . $_REQUEST['t3_adjetivos'] . "' ,
        '" . $_REQUEST['t3_pronombres'] . "' ,
        '" . $_REQUEST['t3_conjunciones'] . "' ,
        '" . $_REQUEST['t3_preposiciones'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['t3_extencion_frases'] . "' 
        ) ";
    } else if ($_REQUEST['id_rtl_vlenguaje_nivel_morfosintactico'] != '') {

        $sql = "UPDATE rtl_vlenguaje_nivel_morfosintactico set 
        `t3_articulos` = '" . $_REQUEST['t3_articulos'] . "' ,
        `t3_sustantivos` = '" . $_REQUEST['t3_sustantivos'] . "' ,
        `t3_concordancia` = '" . $_REQUEST['t3_concordancia'] . "' ,
        `t3_presente` = '" . $_REQUEST['t3_presente'] . "' ,
        `t3_pasado` = '" . $_REQUEST['t3_pasado'] . "' ,
        `t3_futuro` = '" . $_REQUEST['t3_futuro'] . "' ,
        `t3_adjetivos` = '" . $_REQUEST['t3_adjetivos'] . "' ,
        `t3_pronombres` = '" . $_REQUEST['t3_pronombres'] . "' ,
        `t3_conjunciones` = '" . $_REQUEST['t3_conjunciones'] . "' ,
        `t3_preposiciones` = '" . $_REQUEST['t3_preposiciones'] . "' ,
        `t3_extencion_frases` = '" . $_REQUEST['t3_extencion_frases'] . "' WHERE `id_rtl_vlenguaje_nivel_morfosintactico` = '" . $_REQUEST['id_rtl_vlenguaje_nivel_morfosintactico'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rtl_vlenguaje_nivel_morfosintactico = 'new';
$sql = "SELECT * from rtl_vlenguaje_nivel_morfosintactico WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtl_vlenguaje_nivel_morfosintactico = $row['id_rtl_vlenguaje_nivel_morfosintactico'];
    $t3_articulos = $row['t3_articulos']==0?"":" checked='checked' ";
    $t3_sustantivos = $row['t3_sustantivos']==0?"":" checked='checked' ";
    $t3_concordancia = $row['t3_concordancia']==0?"":" checked='checked' ";
    $t3_presente = $row['t3_presente']==0?"":" checked='checked' ";
    $t3_pasado = $row['t3_pasado']==0?"":" checked='checked' ";
    $t3_futuro = $row['t3_futuro']==0?"":" checked='checked' ";
    $t3_adjetivos = $row['t3_adjetivos']==0?"":" checked='checked' ";
    $t3_pronombres = $row['t3_pronombres']==0?"":" checked='checked' ";
    $t3_conjunciones = $row['t3_conjunciones']==0?"":" checked='checked' ";
    $t3_preposiciones = $row['t3_preposiciones']==0?"":" checked='checked' ";
    $t3_extencion_frases = $row['t3_extencion_frases'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rtl_vlenguaje_nivel_morfosintactico").click(function(){
            $("#open-rtl_vlenguaje_nivel_morfosintactico").show();
            $(this).hide();
            $("#content-rtl_vlenguaje_nivel_morfosintactico").hide('slow');
        });

        $("#open-rtl_vlenguaje_nivel_morfosintactico").click(function(){
            $("#close-rtl_vlenguaje_nivel_morfosintactico").show();
            $(this).hide();
            $("#content-rtl_vlenguaje_nivel_morfosintactico").show('slow');
        });

    });

</script>
<fieldset id="rtl_vlenguaje_nivel_morfosintactico">
    <legend align="left"> <div class="arrow-c" id="close-rtl_vlenguaje_nivel_morfosintactico"></div> <div class="arrow-o" id="open-rtl_vlenguaje_nivel_morfosintactico" ></div> <font>Valoracion terapia lenguaje - Evaluación lenguaje oral nivel morfosintactico</font></legend>
    <div id="content-rtl_vlenguaje_nivel_morfosintactico">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rtl_vlenguaje_nivel_morfosintactico" id="guardar_rtl_vlenguaje_nivel_morfosintactico" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rtl_vlenguaje_nivel_morfosintactico" name="form_rtl_vlenguaje_nivel_morfosintactico" action="<?php echo @$action_form_rtl_vlenguaje_nivel_morfosintactico ?>#rtl_vlenguaje_nivel_morfosintactico" method="post">

            <input type="hidden" id="id_rtl_vlenguaje_nivel_morfosintactico" name="id_rtl_vlenguaje_nivel_morfosintactico" value="<?php echo @$id_rtl_vlenguaje_nivel_morfosintactico ?>" />

            <b>Nivel Morfosintáctico </b>
            <br>
            
            Uso de artículos <input type="checkbox" class="" id="t3_articulos" name="t3_articulos" value="1" <?php echo @$t3_articulos; ?> />
            sustantivos <input type="checkbox" class="" id="t3_sustantivos" name="t3_sustantivos" value="1" <?php echo @$t3_sustantivos; ?> />
            concordancia género y numero <input type="checkbox" class="" id="t3_concordancia" name="t3_concordancia" value="1" <?php echo @$t3_concordancia; ?> />
            tiempos verbales:
            <br>
            presente <input type="checkbox" class="" id="t3_presente" name="t3_presente" value="1" <?php echo @$t3_presente; ?> />,
            pasado <input type="checkbox" class="" id="t3_pasado" name="t3_pasado" value="1" <?php echo @$t3_pasado; ?> />,
            futuro <input type="checkbox" class="" id="t3_futuro" name="t3_futuro" value="1" <?php echo @$t3_futuro; ?> />,
            adjetivos <input type="checkbox" class="" id="t3_adjetivos" name="t3_adjetivos" value="1" <?php echo @$t3_adjetivos; ?> />,
            pronombres <input type="checkbox" class="" id="t3_pronombres" name="t3_pronombres" value="1" <?php echo @$t3_pronombres; ?> />,
            conjunciones <input type="checkbox" class="" id="t3_conjunciones" name="t3_conjunciones" value="1" <?php echo @$t3_conjunciones; ?> />,
            preposiciones <input type="checkbox" class="" id="t3_preposiciones" name="t3_preposiciones" value="1" <?php echo @$t3_preposiciones; ?> />.
            <br>
            Extensión de frases que utiliza 
            <br>
            
            <textarea class="input_txt_area" rows="3" cols="50" id="t3_extencion_frases" name="t3_extencion_frases" ><?php echo @$t3_extencion_frases; ?></textarea><br>
            <?php echo @$button ?>

        </form><br>
    </div>
</fieldset>