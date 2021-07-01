<?php
if (isset($_REQUEST['guardar_rtl_vlenguaje_nivel_pragmatico']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtl_vlenguaje_nivel_pragmatico'] == 'new') {

        $sql = "INSERT INTO rtl_vlenguaje_nivel_pragmatico (
    `id_rtl_vlenguaje_nivel_pragmatico`,
    `id_proceso`,
    `id_usuario`,
    `historia`,
    `t1_lenguaje_oral`,
    `t1_conversaciones`,
    `t1_inicio_topico`,
    `t1_inicio_fin_conversacion`,
    `t1_discucion_coherente`,
    `t1_imaginativa`,
    `t1_interaccion`,
    `t1_personal`,
    `t1_instrumental`,
    `t1_heuristica`,
    `t1_reguladora`,
    `t1_informativa`,
    `t1_matetica`,
    `t1_pragmatica`,
    `id_cita`,
    `id_vinicial`,
    `t1_observacion`
    ) VALUES (
    NULL,
    '" . $_REQUEST['id_proceso'] . "' ,
    '" . $_SESSION['id_usuario'] . "' ,
    '" . $_REQUEST['historia'] . "' ,
    '" . $_REQUEST['t1_lenguaje_oral'] . "' ,
    '" . $_REQUEST['t1_conversaciones'] . "' ,
    '" . $_REQUEST['t1_inicio_topico'] . "' ,
    '" . $_REQUEST['t1_inicio_fin_conversacion'] . "' ,
    '" . $_REQUEST['t1_discucion_coherente'] . "' ,
    '" . $_REQUEST['t1_imaginativa'] . "' ,
    '" . $_REQUEST['t1_interaccion'] . "' ,
    '" . $_REQUEST['t1_personal'] . "' ,
    '" . $_REQUEST['t1_instrumental'] . "' ,
    '" . $_REQUEST['t1_heuristica'] . "' ,
    '" . $_REQUEST['t1_reguladora'] . "' ,
    '" . $_REQUEST['t1_informativa'] . "' ,
    '" . $_REQUEST['t1_matetica'] . "' ,
    '" . $_REQUEST['t1_pragmatica'] . "' ,
    '" . $_REQUEST['id_cita'] . "' ,
    '" . $_REQUEST['id_vinicial'] . "' ,
    '" . $_REQUEST['t1_observacion'] . "' 
    ) ";
    } else if ($_REQUEST['id_rtl_vlenguaje_nivel_pragmatico'] != '') {

        $sql = "UPDATE rtl_vlenguaje_nivel_pragmatico set 
        `t1_lenguaje_oral` = '" . $_REQUEST['t1_lenguaje_oral'] . "' ,
        `t1_conversaciones` = '" . $_REQUEST['t1_conversaciones'] . "' ,
        `t1_inicio_topico` = '" . $_REQUEST['t1_inicio_topico'] . "' ,
        `t1_inicio_fin_conversacion` = '" . $_REQUEST['t1_inicio_fin_conversacion'] . "' ,
        `t1_discucion_coherente` = '" . $_REQUEST['t1_discucion_coherente'] . "' ,
        `t1_imaginativa` = '" . $_REQUEST['t1_imaginativa'] . "' ,
        `t1_interaccion` = '" . $_REQUEST['t1_interaccion'] . "' ,
        `t1_personal` = '" . $_REQUEST['t1_personal'] . "' ,
        `t1_instrumental` = '" . $_REQUEST['t1_instrumental'] . "' ,
        `t1_heuristica` = '" . $_REQUEST['t1_heuristica'] . "' ,
        `t1_reguladora` = '" . $_REQUEST['t1_reguladora'] . "' ,
        `t1_informativa` = '" . $_REQUEST['t1_informativa'] . "' ,
        `t1_matetica` = '" . $_REQUEST['t1_matetica'] . "' ,
        `t1_pragmatica` = '" . $_REQUEST['t1_pragmatica'] . "' ,
        `t1_observacion` = '" . $_REQUEST['t1_observacion'] . "' WHERE `id_rtl_vlenguaje_nivel_pragmatico` = '" . $_REQUEST['id_rtl_vlenguaje_nivel_pragmatico'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rtl_vlenguaje_nivel_pragmatico = 'new';
$sql = "SELECT * from rtl_vlenguaje_nivel_pragmatico WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtl_vlenguaje_nivel_pragmatico = $row['id_rtl_vlenguaje_nivel_pragmatico'];
    $t1_lenguaje_oral = $row['t1_lenguaje_oral']==0?"":" checked='checked' ";
    $t1_conversaciones = $row['t1_conversaciones']==0?"":" checked='checked' ";
    $t1_inicio_topico = $row['t1_inicio_topico']==0?"":" checked='checked' ";
    $t1_inicio_fin_conversacion = $row['t1_inicio_fin_conversacion']==0?"":" checked='checked' ";
    $t1_discucion_coherente = $row['t1_discucion_coherente']==0?"":" checked='checked' ";
    $t1_imaginativa = $row['t1_imaginativa']==0?"":" checked='checked' ";
    $t1_interaccion = $row['t1_interaccion']==0?"":" checked='checked' ";
    $t1_personal = $row['t1_personal']==0?"":" checked='checked' ";
    $t1_instrumental = $row['t1_instrumental']==0?"":" checked='checked' ";
    $t1_heuristica = $row['t1_heuristica']==0?"":" checked='checked' ";
    $t1_reguladora = $row['t1_reguladora']==0?"":" checked='checked' ";
    $t1_informativa = $row['t1_informativa']==0?"":" checked='checked' ";
    $t1_matetica = $row['t1_matetica']==0?"":" checked='checked' ";
    $t1_pragmatica = $row['t1_pragmatica']==0?"":" checked='checked' ";
    $t1_observacion = $row['t1_observacion'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rtl_vlenguaje_nivel_pragmatico").click(function(){
            $("#open-rtl_vlenguaje_nivel_pragmatico").show();
            $(this).hide();
            $("#content-rtl_vlenguaje_nivel_pragmatico").hide('slow');
        });

        $("#open-rtl_vlenguaje_nivel_pragmatico").click(function(){
            $("#close-rtl_vlenguaje_nivel_pragmatico").show();
            $(this).hide();
            $("#content-rtl_vlenguaje_nivel_pragmatico").show('slow');
        });

    });

</script>
<fieldset id="rtl_vlenguaje_nivel_pragmatico">
    <legend align="left"> <div class="arrow-c" id="close-rtl_vlenguaje_nivel_pragmatico"></div> <div class="arrow-o" id="open-rtl_vlenguaje_nivel_pragmatico" ></div> <font>Valoracion terapia lenguaje - Evaluación lenguaje oral nivel pragmático 
</font></legend>
    <div id="content-rtl_vlenguaje_nivel_pragmatico">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_rtl_vlenguaje_nivel_pragmatico" id="guardar_rtl_vlenguaje_nivel_pragmatico" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
        <form id="form_rtl_vlenguaje_nivel_pragmatico" name="form_rtl_vlenguaje_nivel_pragmatico" action="<?php echo @$action_form_rtl_vlenguaje_nivel_pragmatico ?>#rtl_vlenguaje_nivel_pragmatico" method="post">

            <input type="hidden" id="id_rtl_vlenguaje_nivel_pragmatico" name="id_rtl_vlenguaje_nivel_pragmatico" value="<?php echo @$id_rtl_vlenguaje_nivel_pragmatico ?>" />


            <b>Nivel   Pragmático </b>
            <br>
            
            Se comunica por medio de lenguaje oral <input type="checkbox" class="" id="t1_lenguaje_oral" name="t1_lenguaje_oral" value="1" <?php echo @$t1_lenguaje_oral; ?> />,
            Respeta turnos conversacionales <input type="checkbox" class="" id="t1_conversaciones" name="t1_conversaciones" value="1" <?php echo @$t1_conversaciones; ?> />,
            Inicio y mantenimiento del tópico <input type="checkbox" class="" id="t1_inicio_topico" name="t1_inicio_topico" value="1" <?php echo @$t1_inicio_topico; ?> />,
            inicia y finaliza una conversación <input type="checkbox" class="" id="t1_inicio_fin_conversacion" name="t1_inicio_fin_conversacion" value="1" <?php echo @$t1_inicio_fin_conversacion; ?> />,
            Su discurso es coherente <input type="checkbox" class="" id="t1_discucion_coherente" name="t1_discucion_coherente" value="1" <?php echo @$t1_discucion_coherente; ?> />,
            <br>
            Funciones del lenguaje
            Imaginativa <input type="checkbox" class="" id="t1_imaginativa" name="t1_imaginativa" value="1" <?php echo @$t1_imaginativa; ?> />,
            interaccional <input type="checkbox" class="" id="t1_interaccion" name="t1_interaccion" value="1" <?php echo @$t1_interaccion; ?> />,
            personal <input type="checkbox" class="" id="t1_personal" name="t1_personal" value="1" <?php echo @$t1_personal; ?> />,
            instrumental <input type="checkbox" class="" id="t1_instrumental" name="t1_instrumental" value="1" <?php echo @$t1_instrumental; ?> />,
            heuristica <input type="checkbox" class="" id="t1_heuristica" name="t1_heuristica" value="1" <?php echo @$t1_heuristica; ?> />,
            reguladora <input type="checkbox" class="" id="t1_reguladora" name="t1_reguladora" value="1" <?php echo @$t1_reguladora; ?> />,
            Informativa <input type="checkbox" class="" id="t1_informativa" name="t1_informativa" value="1" <?php echo @$t1_informativa; ?> />,
            matética <input type="checkbox" class="" id="t1_matetica" name="t1_matetica" value="1" <?php echo @$t1_matetica; ?> />,
            pragmática <input type="checkbox" class="" id="t1_pragmatica" name="t1_pragmatica" value="1" <?php echo @$t1_pragmatica; ?> />,
            <br>
            Observacion <br>         
            <textarea class="input_txt_area" rows="3" cols="50" id="t1_observacion" name="t1_observacion" ><?php echo @$t1_observacion; ?></textarea><br>
<?php echo @$button ?>
        </form><br>
    </div>
</fieldset>